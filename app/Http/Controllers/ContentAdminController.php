<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use voku\Html2Text\Html2Text;
use Intervention\Image\Facades\Image;

class ContentAdminController extends Controller
{
    public function index()
    {
        return view('post-admin.index');
    }

    public function showAllPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post-admin.posts', compact('posts'));
    }

    public function showCreatePost()
    {
        return view('post-admin.create');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'image' => 'required|file|image|max:3000',
            'content' => 'required|min:40|max:65000'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->banner = $request->image->store('blog-banners', 'public');
        $post->content = $request->content;

        // Img Resize
        $resize = Image::make(public_path('storage/' . $post->banner))->fit(750, 500);
        $resize->save();

        if($post->save()){
            return redirect('/admin/content/post/tambah')->with('success', 'Berhasil menambahkan postingan');
        }
    }

    public function showEditPost($id)
    {
        $post = Post::findOrFail($id);
        return view('post-admin.edit', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:100',
            'image' => 'nullable|file|image|max:3000',
            'content' => 'required|min:40|max:65000'
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        if($request->hasFile('image')){
            $post->banner = $request->image->store('blog-banners', 'public');
            // Img Resize
            $resize = Image::make(public_path('storage/' . $post->banner))->fit(750, 500);
            $resize->save();
        }
        $post->content = $request->content;
        if($post->save()){
            return redirect('/admin/content/post/'.$id.'/edit')->with('success', 'Berhasil mengedit postingan');
        }
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        if($post->delete()){
            return redirect('/admin/content/post')->with('success', 'Berhasil menghapus postingan');
        }
    }
}
