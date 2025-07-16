<?php

namespace App\Http\Controllers;

use App\Models\Suscriber;
use Illuminate\Http\Request;

class SuscriberController extends Controller
{
    //
    public function index()
    {
        return Suscriber::all();
    }
    public function create()
    {
        // Logic to show a form for creating a new subscriber
    }   
    public function store(Request $request)
    {
        // Logic to store subscriber data
        // For example, you might validate and save the data to the database

        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:suscribers,email',
        ]);
        $suscriber = Suscriber::create($request->all());
        return response()->json($suscriber, 201);
    }
    public function show($id)
    {
        // Logic to show a specific subscriber
        return view('suscriber.show', compact('id'));
    }
    public function edit($id)
    {
        // Logic to edit a specific subscriber
        
    }
    public function update(Request $request, $id)
    {
        // Logic to update subscriber data
        // For example, you might validate and update the data in the database
        
    } 
    public function destroy($id)
    {
        // Logic to delete a specific subscriber
        
    }   
}
