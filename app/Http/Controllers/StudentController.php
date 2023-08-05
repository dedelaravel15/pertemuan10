<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenkel' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required'
        ]);
       $success = student::create([
        'nama' => $request->nama,
        'jenkel' => $request->jenkel,
        'tempat_lahir' => $request->tempat,
        'tanggal_lahir' => $request->tanggal,
        'alamat' => $request->alamat
       ]);
       
        if($success){
            return redirect('/tables');
        }
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
        return view('Student.edit', [
            'title' => "Student Edit",
            "student" => student::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = student::find($id);
        $validateData = $request->validate([
            'nama' => 'required',
            'jenkel' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required'
        ]);
        $coba = $student->update($validateData);
        if($coba){
            return redirect('/tables');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = student::find($id);
        $student->delete();
        return Redirect::back();
    }
}
