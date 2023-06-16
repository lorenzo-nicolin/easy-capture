<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WarehouseModel;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data  = WarehouseModel::all();

        return view('WarehouseIndex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('WarehouseCreate');
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

        $WarehouseModel = new WarehouseModel();

        $WarehouseModel->name = $request->input('name');
        $WarehouseModel->address = $request->input('address');
        $WarehouseModel->status = $request->input('status');

        $WarehouseModel->save();

        return redirect('Warehouse');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = WarehouseModel::find($id);
        return view('WarehouseEdit',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $data = WarehouseModel::find($id);

        return view('WarehouseEdit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $WarehouseModel = WarehouseModel::find($id);

       
        $WarehouseModel->name = $request->input('name');
        $WarehouseModel->address = $request->input('address');
        $WarehouseModel->status = $request->input('status');

        $WarehouseModel->update();

        return redirect('Warehouse');

        // print 'test';


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
