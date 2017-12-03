<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use DB;
use App\Quotation;

class CommentController extends Controller
{
    public function delete($id)
    {
    	DB::table('comments')->where('id', $id)->delete();
    	return redirect()->back();
    }
    public function write()
    {
    	$input = Input::only('body','recipe_id','user_id');
    	DB::table('comments')->insert(
    		['body' => $input['body'],
    		'user_id' => $input['user_id'],
    		'recipe_id' => $input['recipe_id']]
    	);
    	return redirect()->back();
    }
}
