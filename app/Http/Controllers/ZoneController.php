<?php

namespace App\Http\Controllers;

use App\Zone;
use App\Radiation;
use Illuminate\Http\Request;
use App\Http\Requests\ZoneValidator;

class ZoneController extends Controller
{
    private $path;

    public function __construct()
    {
        $this->path = 'zones';
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
    public function store(ZoneValidator $request)
    {
        try {
            $zone = new Zone($request->all());
            $zone->save();
            $radiation = new Radiation($request->all());
            $zone->radiation()->save($radiation);
            //$radiation->save();
            session()->put('success', 'Nueva zona registrada');
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
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        return view($this->path.'.edit', compact('zone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(ZoneValidator $request, Zone $zone)
    {
        try {
            $zone->fill($request->all());
            $zone->save();
            $zone->radiation->fill($request->all())->save();
            session()->put('success', 'Zona actualizada correctamente');
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
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }

    /**
     * 
     */
    public function ajaxGetRadiations(Request $request)
    {
        $zone = Zone::find($request->id);
        return \Response::json($zone->radiation);
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        $builder = Zone::select(['id','name']);
        return datatables()
                ->eloquent($builder)
                ->addColumn('actions', 'zones.actions')
                ->rawColumns(['actions'])
                ->make();
    }
}
