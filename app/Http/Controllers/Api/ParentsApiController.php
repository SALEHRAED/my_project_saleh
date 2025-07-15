<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsApiController extends Controller
{
    public function index()
    {
        $parents = Parents::all();
        return response()->json($parents);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:parents,email',
            // أضف حقول أخرى حسب جدولك
        ]);

        $parent = Parents::create($validated);

        return response()->json($parent, 201);
    }

    public function show($id)
    {
        $parent = Parents::findOrFail($id);
        return response()->json($parent);
    }

    public function update(Request $request, $id)
    {
        $parent = Parents::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:parents,email,' . $parent->id,
            // حقول أخرى حسب الحاجة
        ]);

        $parent->update($validated);

        return response()->json($parent);
    }

    public function destroy($id)
    {
        $parent = Parents::findOrFail($id);
        $parent->delete();

        return response()->json(null, 204);
    }
}
