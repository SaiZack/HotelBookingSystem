<?php

namespace App\Http\Controllers;

use App\Models\ServiceFacility;
use Illuminate\Http\Request;

class ServiceFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceFacility::get();
        return view('room_info.service_facility.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceFacility $serviceFacility)
    {
        dd($serviceFacility);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceFacility $serviceFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceFacility $serviceFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceFacility $serviceFacility)
    {
        //
    }
}