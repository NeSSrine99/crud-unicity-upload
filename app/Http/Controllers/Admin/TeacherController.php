<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate(5);
        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:teachers,email',
            'age' => 'required|integer|min:18',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.unique' => 'Cet email existe déjà',
            'age.min' => 'L’âge minimum est 18 ans',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teacher.index')->with('success', 'Teacher ajouté');
    }


    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => [
                'required',
                'email',
                Rule::unique('teachers')->ignore($teacher->id),
            ],
            'age' => 'required|integer|min:18',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teacher.index')->with('success', 'Teacher mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index')
            ->with('success', 'Teacher deleted successfully');
    }
}
