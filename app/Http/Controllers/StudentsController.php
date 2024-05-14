<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\CreateClass;
use App\Models\CreateBlock;
use App\Models\Instructor;
use NunoMaduro\Collision\Adapters\Laravel\Inspector;

class StudentsController extends Controller
{
    //
    public function showStudents() {

        $students = Student::all();
        $classes = CreateClass::all();
        $blocks = CreateBlock::all();

        return view('admin.create_students', ['students' => $students, 'classes' => $classes, 'blocks' => $blocks]);
    }

    public function createStudent(Request $request) {
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'admissionNum' => 'required|string',
            'classId' => 'required|integer',
            'blockId' => 'required|integer',
        ]);

        $createStudent = new Student();
        $createStudent->firstName = $request->firstName;
        $createStudent->lastName = $request->lastName;
        $createStudent->admissionNum = $request->admissionNum;
        $createStudent->classId = $request->classId;
        $createStudent->blockId = $request->blockId;
        $createStudent->save();

        return redirect()->route('admin.create_students')->with('success', 'Student created successfully');
    }

    public function deleteStudent($id) {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('admin.create_students')->with('success', 'Student deleted successfully');
    }

    public function editStudent($id) {
        $student = Student::find($id);
        $classes = CreateClass::all();
        $blocks = CreateBlock::all();

        return view('admin.edit_student', ['student' => $student, 'classes' => $classes, 'blocks' => $blocks]);
    }

    public function updateStudent(Request $request, $id) {
        $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'admissionNum' => 'required|string',
            'classId' => 'required|integer',
            'blockId' => 'required|integer',
        ]);

        $updateStudent = Student::find($id);
        $updateStudent->firstName = $request->firstName;
        $updateStudent->lastName = $request->lastName;
        $updateStudent->admissionNum = $request->admissionNum;
        $updateStudent->classId = $request->classId;
        $updateStudent->blockId = $request->blockId;
        $updateStudent->save();

        return redirect()->route('admin.create_students')->with('success', 'Student updated successfully');
    }

    public function viewStudents() {

        $userId = auth()->user()->id;

        $instructor = Instructor::where('user_id', $userId)->first();

        $students = Student::where('classId', $instructor->classId)->where('blockId', $instructor->blockId)->get();

        return view('view_students', ['students' => $students]);

    }

}
