<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateClass;
use App\Models\CreateBlock;
use App\Models\User;
use App\Models\Instructor;

class InstructorsController extends Controller
{
    //
    public function showInstructors() {

        $users = User::all();
        $classes = CreateClass::all();
        $blocks = CreateBlock::all();
        $instructors = Instructor::all();

        return view('admin.create_instructor', ['users' => $users, 'classes' => $classes, 'blocks' => $blocks, 'instructors' => $instructors]);
    }

    public function createInstructor(Request $request) {
        $request->validate([
            'instructorId' => 'required|integer',
            'phoneNum' => 'required|string|size:11',
            'classId' => 'required|integer',
            'blockId' => 'required|integer',
        ]);

        $createInstructor = new Instructor();
        $createInstructor->user_id = $request->instructorId;
        $createInstructor->phoneNo = $request->phoneNum;
        $createInstructor->classId = $request->classId;
        $createInstructor->blockId = $request->blockId;
        $createInstructor->save();

        // Update isAssigned in the associated block
        $this->updateBlockIsAssigned($request->blockId);

        return redirect()->route('admin.create_instructor')->with('success', 'Instructor created successfully');
    }

    private function updateBlockIsAssigned($blockId) {
        // Get the block associated with the instructor
        $block = CreateBlock::find($blockId);

        // Check if there are any instructors associated with this block
        $isAssigned = Instructor::where('blockId', $blockId)->exists();

        // Update isAssigned in the block model
        $block->isAssigned = $isAssigned ? true : false;
        $block->save();
    }

    public function deleteInstructor($id) {
        $instructor = Instructor::find($id);
        $instructor->delete();

        return redirect()->route('admin.create_instructor')->with('delete_success', 'Instructor deleted successfully');
    }

    public function editInstructor($id) {
        $instructor = Instructor::find($id);

        $users = User::all();
        $classes = CreateClass::all();
        $blocks = CreateBlock::all();
        $instructors = Instructor::all();

        return view('admin.create_instructor', ['instructor' => $instructor, 'users' => $users, 'classes' => $classes, 'blocks' => $blocks, 'instructors' => $instructors]);
    }

    public function updateInstructor(Request $request, $id) {
        $request->validate([
            'instructorId' => 'required|integer',
            'phoneNum' => 'required|string|size:11',
            'classId' => 'required|integer',
            'blockId' => 'required|integer',
        ]);

        $createInstructor = Instructor::find($id);
        $createInstructor->user_id = $request->instructorId;
        $createInstructor->phoneNo = $request->phoneNum;
        $createInstructor->classId = $request->classId;
        $createInstructor->blockId = $request->blockId;
        $createInstructor->save();

        return redirect()->route('admin.create_instructor')->with('success', 'Instructor updated successfully');
    }
}
