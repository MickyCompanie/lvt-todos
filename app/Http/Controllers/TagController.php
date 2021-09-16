<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tag = Tag::all()->toArray();
        return array_reverse($tag);
    }

    public function store(Request $request){
        $tag = new Tag([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $tag->save();

        return response()->json('Tag created successfully!');
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return response()->json($tag);
    }

    public function update($id, Request $request)
    {
        $tag = Tag::find($id);
        $tag->update($request->all());

        return response()->json('Tag data updated successfully!');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return response()->json('Tag deleted successfully!');
    }
}
