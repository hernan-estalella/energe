<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientValidator;

class ClientController extends Controller
{
    private $path;

    public function __construct()
    {
        $this->path = 'clients';
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
    public function store(ClientValidator $request)
    {
        try {
            $client = new Client($request->all());
            $client->save();
            session()->put('success', 'Nuevo cliente registrado');
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view($this->path.'.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientValidator $request, Client $client)
    {
        try {
            $client->fill($request->all());
            $client->save();
            session()->put('success', 'Cliente actualizado correctamente');
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fastStore(Request $request)
    {
        try {
            $client = Client::firstOrCreate([
                'name' => $request->name,
                'address' => $request->address
            ]);
        } catch (\Exception $e) {
            session()->put('warning',__('An error has occured'));
            session()->put('exception', $e->getMessage());
        } finally {            
            return \Response::json($client);
        }
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        $builder = Client::select(['id','name','address']);
        return datatables()
                ->eloquent($builder)
                ->addColumn('actions', 'clients.actions')
                ->rawColumns(['actions'])
                ->make();
    }
}
