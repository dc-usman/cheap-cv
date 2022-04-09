<?php

namespace App\Http\Controllers;

use App\OrderAdmin;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
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
        //
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
     * @param  \App\OrderAdmin  $orderAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(OrderAdmin $orderAdmin)
    {
        //
        $orderAdmins = OrderAdmin::all();
        
        // return $orderAdmin;

        return view('pages.homecv', compact('orderAdmins') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderAdmin  $orderAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderAdmin $orderAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderAdmin  $orderAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderAdmin $orderAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderAdmin  $orderAdmin
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderAdmin $orderAdmin)
    {
        //
    }
}
