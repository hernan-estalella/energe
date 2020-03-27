<?php

namespace App\Http\Controllers;

use App\Inverter;
use Illuminate\Http\Request;
use App\Http\Requests\InverterValidator;

class InverterController extends Controller
{
    private $path;

    public function __construct()
    {
        $this->path = 'inverters';
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
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InverterValidator $request)
    {
        try {
            $inverter = new Inverter($request->all());
            $inverter->save();
            session()->put('success', 'Nuevo inversor registrado');
        } catch (\Exception $e) {
            session()->put('warning',__('An error has occured'));
            session()->put('exception', $e->getMessage());
        } finally {            
            return redirect()->route($this->path.'.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function show(Inverter $inverter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function edit(Inverter $inverter)
    {
        return view($this->path.'.edit', compact('inverter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function update(InverterValidator $request, Inverter $inverter)
    {
        try {
            $inverter->fill($request->all());
            $inverter->save();
            session()->put('success', 'Inversor actualizado correctamente');
        } catch (\Exception $e) {
            session()->put('warning',__('An error has occured'));
            session()->put('exception', $e->getMessage());
        } finally {            
            return redirect()->route($this->path.'.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inverter  $inverter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inverter $inverter)
    {
        //
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        $builder = Inverter::select(['id','name','min_panels','max_panels']);
        return datatables()
                ->eloquent($builder)
                ->addColumn('panels', function (Inverter $inverter) {
                    return $inverter->min_panels . ' - ' . $inverter->max_panels;
                })
                ->addColumn('actions', 'inverters.actions')
                ->rawColumns(['actions'])
                ->make();
    }
}
