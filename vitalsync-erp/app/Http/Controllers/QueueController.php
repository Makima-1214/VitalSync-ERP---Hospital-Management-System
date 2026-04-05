<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    public function index()
    {
        $queues = Queue::with(['patient', 'doctor'])
            ->whereDate('created_at', today())
            ->orderBy('created_at', 'asc')
            ->get();
            
        return view('queue.index', compact('queues'));
    }

    public function display()
    {
        $currentQueue = Queue::with(['patient', 'doctor'])
            ->where('status', 'calling')
            ->first();
            
        return view('queue.display', compact('currentQueue'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
