<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateClass;

class ClassController extends Controller
{
    //
    public function showCreateClass() {

        $classes = CreateClass::all();

        return view('admin.create_class', ['classes' => $classes]);
    }

    public function createClass(Request $request) {
        $request->validate([
            'className' => 'required|string|max:255',
        ]);

        $createClass = new CreateClass();
        $createClass->className = $request->className;
        $createClass->save();

        return redirect()->route('admin.create_class')->with('success', 'Class created successfully');
    }

    public function deleteClass($id) {
        $class = CreateClass::find($id);
        $class->delete();

        return redirect()->route('admin.create_class')->with('delete_success', 'Class deleted successfully');
    }

    public function editClass($id) {
        $class = CreateClass::find($id);

        $classes = CreateClass::all();

        return view('admin.create_class', ['class' => $class, 'classes' => $classes]);
    }

    public function updateClass(Request $request, $id) {
        $request->validate([
            'className' => 'required|string|max:255',
        ]);

        $createClass = CreateClass::find($id);
        $createClass->className = $request->className;
        $createClass->save();

        return redirect()->route('admin.create_class')->with('success', 'Class updated successfully');
    }

}
