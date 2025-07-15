<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|email|unique:students,email',
            'class_id' => 'required|exists:grades,id',
        ]);

        return Student::create($data);
    }

    public function show(Student $student)
    {
        return $student;
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'sometimes|string',
            'age' => 'sometimes|integer',
            'email' => 'sometimes|email|unique:students,email,' . $student->id,
            'class_id' => 'sometimes|exists:grades,id',
        ]);

        $student->update($data);
        return $student;
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
