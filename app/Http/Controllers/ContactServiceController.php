<?php

namespace App\Http\Controllers;

use App\Models\ContactService;
use App\Http\Requests\StoreContactServiceRequest;
use App\Http\Requests\UpdateContactServiceRequest;

class ContactServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreContactServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactService $contactService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactService $contactService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactServiceRequest $request, ContactService $contactService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactService $contactService)
    {
        //
    }
}
