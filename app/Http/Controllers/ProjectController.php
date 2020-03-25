<?php

namespace App\Http\Controllers;

use App\Project;
use App\Client;
use App\Assessor;
use App\Constant;
use App\Inverter;
use App\Panel;
use App\Zone;
use Illuminate\Http\Request;

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
        //
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
        //
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
}
