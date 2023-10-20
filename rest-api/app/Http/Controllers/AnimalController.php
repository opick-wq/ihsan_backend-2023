<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ['Ayam','Ikan']; 
    public function index()
    {
        echo"Menampilkan data animals <br>";
        foreach($this->animals as $animal){
            echo"- $animal <br>";
        }
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
        echo"Menambahkan hewan baru <br>";

        array_push($this->animals, $request->animal);

        $this->index();
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
    public function update($id, Request $request)
    {
        echo"Mengupdate data hewan id 1 <br> Menampilkan data animals";
        $this->animals[$id] = $request->animal;

        $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        echo"Menghapus data hewan id $id <br>";

        unset($this->animals[$id]);

        $this->index();
    }
}
