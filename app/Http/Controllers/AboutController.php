<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\Event;
use App\Models\Client;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about.index');
    }
    public function profile()
    {

        return view('about.profile');
    }
    public function people()
    {
        $peoples = About::all();
        return view('about.people', compact('peoples'));
    }
    public function designMethod()
    {
        return view('about.designMethod');
    }
    public function event()
    {
        $events = Event::all();
        return view('about.event', compact('events'));
    }
    public function client()
    {
        $clients = Client::all();
        return view('about.client', compact('clients'));
    }
    public function award()
    {
        return view('about.award');
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
    public function store(StoreAboutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}