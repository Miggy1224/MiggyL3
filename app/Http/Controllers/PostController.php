<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
            return view("user");
    }
    

    public function blog(Request $request) {
        $posts = POST::where("user_id", $request->user()->id)->with("user")->paginate(20);

        return view("user", ['posts' => $posts]);
    }
    public function create() {
        return view("user-create");
    }

    public function edit($id) {
        $posts = Post::find($id);

        if (!$posts) {
            dd("No record");
        }

        return view("user-edit", compact("posts"));
    }

    public function show($id) {
        $posts = Post::find($id);

        if (!$posts) {
            abort(404, "Post is not found");
        }

        return view("user-show", compact("posts"));
    }

    public function store(Request $request) {
        $request->validate([
            'title' =>
            'required|max:255',
            'description' => 'required|max:300|min:5',
        ]);


        $post = new Post([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user()->id
        ]);

        $post->save();

        return redirect("/user")->with('success', 'Post Created Successfully.');
    }

    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->input('title');
        $posts->description = $request->input("description");

        $posts->save();

        return redirect("/user")->with("success", "Post Update Successfullly");
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();


        return redirect("/user")->with("success", "Post Delete Successfullly");
    }
}