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
        $students = Student::find($id);
        
        if ($students){
            $data = [
                'message' => 'Get details student',
                'data' => $students,
            ];
                return response()->json($data, 200);
        }else{
            $data = [
                'message' => 'Student not found'
            ];
                return response()->json($data, 404);
        }
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

        if ($students) {
            $input = [
                'nama' => $request->nama ?? $students->nama,
                'nim' => $request->nim ?? $students->nim,
                'email' => $request->email ?? $students->email,
                'jurusan' => $request->jurusan ?? $students->jurusan
            ];
        
        $students->update($input);
            
        $data = [
            'message' => 'Student is updated successfully',
            'data' => $students,
        ];
            return response()->json($data, 200);

    }else{
        $data = [
            'message' => 'student not found'
        ];

            return response()->json($data, 404);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);

        if ($students) {
            
        $students->delete();

        $data = [
            'message' => 'student is deleted'
        ];

        return response()->json($data, 200);
    
        }else{
        $data = [
            'message' => 'student not found'
        ];
    
        return response()->json($data, 401);
        }
    }
}
