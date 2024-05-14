<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CreateClass;
use App\Models\CreateBlock;

class BlockController extends Controller
{
    //
    public function showCreateBlock() {

        $classes = CreateClass::all();
        $blocks = CreateBlock::all();

        return view('admin.create_block', ['classes' => $classes, 'blocks' => $blocks]);
    }

    public function createBlock(Request $request) {
        $request->validate([
            'classId' => 'required|integer',
            'blockName' => 'required|string|max:255',
        ]);

        $createBlock = new CreateBlock();
        $createBlock->classId = $request->classId;
        $createBlock->blockName = $request->blockName;
        $createBlock->save();

        return redirect()->route('admin.create_block')->with('success', 'Block created successfully');
    }

    public function deleteBlock($id) {
        $block = CreateBlock::find($id);
        $block->delete();

        return redirect()->route('admin.create_block')->with('delete_success', 'Block deleted successfully');
    }

    public function editBlock($id) {
        $block = CreateBlock::find($id);

        $classes = CreateClass::all();
        $blocks = CreateBlock::all();

        return view('admin.create_block', ['block' => $block, 'classes' => $classes, 'blocks' => $blocks]);
    }

    public function updateBlock(Request $request, $id) {
        $request->validate([
            'classId' => 'required|integer',
            'blockName' => 'required|string|max:255',
        ]);

        $createBlock = CreateBlock::find($id);
        $createBlock->classId = $request->classId;
        $createBlock->blockName = $request->blockName;
        $createBlock->save();

        return redirect()->route('admin.create_block')->with('success', 'Block/Section updated successfully');
    }
}
