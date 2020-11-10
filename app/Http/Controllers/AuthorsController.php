<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AuthorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list()
    {
        return Author::all();
    }

    public function listID($id){
        $author = Author::find($id);

        if(!$author){
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }else{
            return $author;
        }
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'biography' => 'required'
        ]);

        $author = Author::create(
            $request->only(['name','gender','biography'])
        );

        return response()->json([
            'created' => true,
            'data' => $author
        ], 201);
    }

    public function change(Request $request, $id)
    {
        try{
            $author = Author::findOrFail($id);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'message' => 'Author not found'
            ], 404);
        }

        $author->fill(
            $request->only(['name', 'gender', 'biography'])
        );

        $author->save();

        return response()->json([
            'updated' => true,
            'data' => $author
        ], 200);
    }

    public function erase($id)
    {
        try{
            $author = Author::findOrFail($id);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => [
                    'message' => 'Author not found'
                ]
            ], 404);
        }

        $author->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
    //
}
