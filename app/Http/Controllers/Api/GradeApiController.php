<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeApiController extends Controller
{
    public function index()
    {
        return Grade::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:grades,name',
        ]);
        return Grade::create($data);
    }

    public function show(Grade $grade)
    {
        return $grade;
    }

    public function update(Request $request, Grade $grade)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|unique:grades,name,' . $grade->id,
        ]);
        $grade->update($data);
        return $grade;
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}