<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectConstants;
use App\ProjectInvoices;
use App\ProjectProposals;
use App\ProjectLoan;
use App\ProjectRecovery;
use App\ProjectRadiations;
use App\ProjectCashflow;
use App\Client;
use App\Assessor;
use App\Constant;
use App\Inverter;
use App\Panel;
use App\Zone;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    private $path = 'projects';
    private $exchange_rate, $panel_potency, $kg_co2, $trees, $benefit, $limit_kwp;
    private $clients, $assessors, $inverters, $panels, $zones;

    public function __construct()
    {
        $this->clients = Client::all();
        $this->assessors = Assessor::all();
        $this->exchange_rate = Constant::whereName('exchange_rate')->first();
        $this->panel_potency = Constant::whereName('panel_potency')->first();
        $this->kg_co2 = Constant::whereName('kg_co2')->first();
        $this->trees = Constant::whereName('trees')->first();
        $this->benefit = Constant::whereName('benefit')->first();
        $this->limit_kwp = Constant::whereName('limit_kwp')->first();
        $this->inverters = Inverter::all();
        $this->panels = Panel::all();
        $this->zones = Zone::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->path.'.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($this->exchange_rate);
        return view($this->path.'.create')
                ->with('clients', $this->clients)
                ->with('assessors', $this->assessors)
                ->with('exchange_rate', $this->exchange_rate)
                ->with('panel_potency', $this->panel_potency)
                ->with('kg_co2', $this->kg_co2)
                ->with('trees', $this->trees)
                ->with('benefit', $this->benefit)
                ->with('limit_kwp', $this->limit_kwp)
                ->with('inverters', $this->inverters)
                ->with('panels', $this->panels)
                ->with('zones', $this->zones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $project = new Project($request->all());
            $project->save();

            $constants = new ProjectConstants($request->constants);
            $project->constants()->save($constants);

            $invoices = new ProjectInvoices($request->invoices);
            $project->invoices()->save($invoices);

            foreach (\json_decode($request->proposals) as $p) {
                $proposal = new ProjectProposals((array) $p);
                $project->proposals()->save($proposal);
            }

            $loan = new ProjectLoan($request->loan);
            $project->loan()->save($loan);
            
            $recovery = new ProjectRecovery($request->recovery);
            $project->recovery()->save($recovery);

            foreach (\json_decode($request->radiation) as $r) {
                $radiation = new ProjectRadiations((array) $r);
                $project->radiations()->save($radiation);
            }

            foreach (\json_decode($request->cashflow) as $c) {
                $cashflow = new ProjectCashflow((array) $c);
                $project->cashflow()->save($cashflow);
            }

            $radiationImage = $request->radiation_base64;
            $cashflowImage = $request->cashflow_base64;

            $folderPath = "img/charts/";
            $radiation_image_parts = explode(";base64,", $radiationImage);
            $cashflow_image_parts = explode(";base64,", $cashflowImage);
            $radiation_image_type_aux = explode($folderPath, $radiation_image_parts[0]);
            $cashflow_image_type_aux = explode($folderPath, $cashflow_image_parts[0]);
            $radiation_image_base64 = base64_decode($radiation_image_parts[1]);
            $cashflow_image_base64 = base64_decode($cashflow_image_parts[1]);
            $radiation_name = 'radiation_' . $project->id . '.png';
            $cashflow_name = 'cashflow_' . $project->id . '.png';
            $radiation_file = $folderPath . $radiation_name;
            $cashflow_file = $folderPath . $cashflow_name;
            $radiation_output = file_put_contents($radiation_file, $radiation_image_base64);
            $cashflow_output = file_put_contents($cashflow_file, $cashflow_image_base64);
            if ($radiation_output) {
                Log::info('Radiation chart for project id: '. $project->id . ' saved successfully');
            } else {
                Log::error('Error trying to save radiation chart for project id: '. $project->id);
            }
            if ($cashflow_output) {
                Log::info('Cashflow chart for project id: '. $project->id . ' saved successfully');
            } else {
                Log::error('Error trying to save cashflow chart for project id: '. $project->id);
            }
            return \Response::json([
                'project_id'=>$project->id,
                'reportUrl'=>route('reports.project', ['project' => $project])
            ]);
        } catch (\Exception $e) {
            session()->put('warning',__('An error has occured'));
            session()->put('exception', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax(Request $request)
    {
        $start = Carbon::parse($request->since)->startOfDay();
        $end = Carbon::parse($request->until)->endOfDay();

        $builder = Project::select(['id','created_at','client_name','assessor_name'])
                    ->whereBetween('created_at',array($start,$end))
                    ->orderBy('created_at', 'desc');
        return datatables()
                ->eloquent($builder)
                ->editColumn('created_at', function(Project $project) {
                    return $project->created_at_format;
                })
                ->addColumn('actions', 'projects.actions')
                ->rawColumns(['actions'])
                ->make();
    }

    public function report(Project $project) {
        $project_main_proposal = null;
        $project_proposal_2 = null;
        $project_proposal_3 = null;
        foreach ($project->proposals as $proposal) {
            $proposal->benefit_porc = $proposal->benefit * 100 / $proposal->usd_iva;
            $proposal->total_inverters = $proposal->inverter_1_q + $proposal->inverter_2_q + $proposal->inverter_3_q;
            if ($proposal->main) {
                $project_main_proposal = $proposal;
            } else if(!isset($project_proposal_2)) {
                $project_proposal_2 = $proposal;
            } else {
                $project_proposal_3 = $proposal;
            }
        }

        $project->project_main_proposal = $project_main_proposal;
        $project->project_proposal_2 = $project_proposal_2;
        $project->project_proposal_3 = $project_proposal_3;
        
        $pdf = \PDF::loadView('reports.projects.project',compact('project'));
        return $pdf->stream();
    }
}
