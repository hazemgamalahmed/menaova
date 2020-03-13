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
    public function showdataInindex(){
        $myindex = Posts::orderBy('id', 'desc')->paginate(3);
        return view('index', ['myindex'=>$myindex]);
    }
    public function fetchAdminData()
    {
        $adminData = Posts::orderBy('id', 'desc')->get();
        return view('admin', ['admin'=>$adminData]);
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
    public function deleteData($id=null)
    {
        if($id != null)
        {
            $del = Posts::find($id);
            $del->delete();
        }else if(request()->has('softdelete') and request()->has('id')){
            Posts::destroy(request('id'));
        }else if(request()->has('restore') and request()->has('id')){
            Posts::whereIn('id', request('id'))->restore();
        }else if(request()->has('forcedelete') and request()->has('id')){
            Posts::whereIn('id', request('id'))->forceDelete();
        }
        return back();
    }
    public function showDeletedData()
    {
        $all_deletes = Posts::onlyTrashed()->orderBy('id', 'desc')->get();
        return view('recycle', ['deletes'=>$all_deletes]);
    }
}
