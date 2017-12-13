<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class CommentController extends Controller
{
    public function delete(Request $request)
    {
        $id = $request->id;
        DB::table('comments')->where('id', $id)->delete();
    }
    public function write(Request $request)
    {
    	
    	DB::table('comments')->insert(
    		['body' => $request->body,
    		'user_id' => $request->user_id,
    		'recipe_id' => $request->recipe_id]

    	);
    }
}
