<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        $data =[
        'message' => 'Get all students',
        'data'=> $students ];

        return response()->json($data,200);
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
        $input = [
        'nama'=>$request->nama,
        'nim' =>$request->nim,
        'email' =>$request->email,
        'jurusan' =>$request->jurusan,
        ];

        $students = Student::create($input);

        $data =[
        'message' => 'Student is created succesfully',
        'data'=> $students 
        ];

        return response()->json($data,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $students = Student::find($id);

        if (!$students) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $students->nama = $request->input('nama', $students->nama);
        $students->nim = $request->input('nim', $students->nim);
        $students->email = $request->input('email', $students->email);
        $students->jurusan = $request->input('jurusan', $students->jurusan);
        $students->save();

        $data = [
            'message' => 'Student is updated successfully',
            'data' => $students,
        ];
            return response()->json($data, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'data tidak ditemukan'], 404);
        }

        $student->delete();

        $data = [
            'message' => 'data berhasil dihapus',
        ];

        return response()->json($data, 200);
    
    }
}
