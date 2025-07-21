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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:suscribers,email',
        ]);
        $suscriber = Suscriber::create($request->all());
        return response()->json($suscriber, 200);
    }

    public function show($id)
    {
        $suscriber = Suscriber::findOrFail($id);
        if (!$suscriber) {
            return response()->json(['error' => 'Suscriber not found'], 404);
        }
        return response()->json($suscriber, 200);
    }

    public function update(Request $request, $id)
    {
        $request -> validate([
            'name' => 'sometimes|required|string|max:150',
            'email' => 'sometimes|required|email|unique:suscribers,email,' . $id,
        ]);
        $suscriber = Suscriber::findOrFail($id);
        $suscriber->update($request->all());
        return response()->json($suscriber, 200);
    }

    public function destroy($id)
    {
        $suscriber = Suscriber::findOrFail($id);
        if (!$suscriber) {
            return response()->json(['error' => 'Suscriber not found'], 404);
        }
        $suscriber->delete();
        return response()->json(null, 200);
    }   
}
