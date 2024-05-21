<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Dni' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index');
        
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'Dni' => 'required',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}

////teachers.index->with('success', 'Profesor creado con exito.')



