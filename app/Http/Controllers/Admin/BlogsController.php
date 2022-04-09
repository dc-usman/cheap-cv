<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('tags')->orderBy('id', 'DESC')->exclude('description')->get();

        // return $blogs;

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::all();
        $tags =Tag::all();

        return view('admin.blogs.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        if (!$request->hasfile('image')) {
            return abort(404, 'Not Found.');
        }

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);
        // $request->merge(['slug' => Str::slug($request->title)]);
        $request->merge(['user_id' => Auth::user()->id]);

        DB::beginTransaction();
            $fileName = time().'.'.$request->image->extension();
            $path = $request->image->move( app_path('storage\blogs'), $fileName, 'public');
            $request->merge(['image_path' => $path]);
            $blog = Blog::create($request->all());
            $blog->tags()->sync( $request->tags );
        DB::commit();

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $blog = Blog::findOrFail($id);

        // return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories =Category::all();
        $tags =Tag::all();

        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        // return $request->all();
        $blog = Blog::findOrFail($id);

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        $blog->update($request->all());

        return redirect()->route('admin.blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->route('admin.blogs.index');
    }

    public function getSlug(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        return Str::slug($request->title);
    }

}
