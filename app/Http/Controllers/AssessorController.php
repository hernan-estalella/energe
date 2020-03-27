<?php

namespace App\Http\Controllers;

use App\Assessor;
use Illuminate\Http\Request;
use App\Http\Requests\AssessorValidator;

class AssessorController extends Controller
{
    private $path;

    public function __construct()
    {
        $this->path = 'assessors';
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
    public function store(AssessorValidator $request)
    {
        try {
            $assessor = new Assessor($request->all());
            $assessor->save();
            session()->put('success', 'Nuevo asesor registrado');
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
     * @param  \App\Assessor  $assessor
     * @return \Illuminate\Http\Response
     */
    public function show(Assessor $assessor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessor  $assessor
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessor $assessor)
    {
        return view($this->path.'.edit', compact('assessor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessor  $assessor
     * @return \Illuminate\Http\Response
     */
    public function update(AssessorValidator $request, Assessor $assessor)
    {
        try {
            $assessor->fill($request->all());
            $assessor->save();
            session()->put('success', 'Asesor actualizado correctamente');
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
     * @param  \App\Assessor  $assessor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessor $assessor)
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
        $builder = Assessor::select(['id','name','email','telephone']);
        return datatables()
                ->eloquent($builder)
                ->addColumn('actions', 'assessors.actions')
                ->rawColumns(['actions'])
                ->make();
    }
}
