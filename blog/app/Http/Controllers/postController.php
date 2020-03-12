<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class postController extends Controller
{
    public function addPost(Request $request){
    	$posts = new Posts;
    	$posts->title = $request->input('title');
    	$posts->description = $request->input('description');
    	$posts->content = $request->input('content');
    	if($request->has('file')){
    		$file = $request->file('file');
    		$extension = $file->getClientOriginalExtension();
    		$filename = time() . '.'. $extension;
    		$file->move('uploads/file', $filename);
    		$posts->image = $filename;

    	}else{
    		return $request;
    		$posts->image = '';
    	}

    	$posts->user_id = auth()->user()->id;
    	$posts->save();
    	return back();
    }
    public function showdata(){
    	$myposts = Posts::orderBy('id', 'desc')->paginate(10);
    	return view('blogs', ['myposts'=>$myposts]);
    }
    public function showsinglePost($id)
    {
        $show = Posts::find($id);
        // start the preve and the next
        $prev_man = Posts::where('id', '<', $show->id)->max('title');
        $next_man = Posts::where('id', '>', $show->id)->min('title');

        $prev_id = Posts::where('id', '<', $show->id)->max('id');
        $next_id = Posts::where('id', '>', $show->id)->min('id');

        return view('blog-single', ['mysingle'=>$show, 'prev_man'=>$prev_man, 'next_man'=>$next_man, 'prev_id'=>$prev_id, 'next_id'=>$next_id]);
    }
}
