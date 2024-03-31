<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objBlog = new Blog();
        $blogs = $objBlog->listingBlogs();
        return view('dashboard.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'   => 'required|mimes:png,jpg',
            'tag'     => 'required|max:255',
            'title'   => 'required|max:255',
            'body'    => 'required',
        ]);

        $input = $request->all();
        $objBlog = new Blog();
        $blog = $objBlog->createBlog($input);
        return redirect(env('APP_URL') . '/listingBlogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objBlog = new Blog();
        $blogs = $objBlog->listingBlogs();
        $lastblog = $objBlog->lastblog();
        $latestblogs = $objBlog->latestBlogs();
        return view('website.blog', compact('blogs', 'latestblogs', 'lastblog'));
    }

    public function view($id)
    {
        $objBlog = new Blog();
        $blog = $objBlog->editBlog($id);
        $relatedBlogs = $objBlog->relatedBlogs();
        return view('website.blog_details', compact('blog', 'relatedBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objBlog = new Blog();
        $blog = $objBlog->editBlog($id);
        return view('dashboard.blog.editBlog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image'   => 'mimes:png,jpg',
            'tag'     => 'required|max:255',
            'title'   => 'required|max:255',
            'body'    => 'required',
        ]);

        $input = $request->all();
        $objBlog = new Blog();
        $blog = $objBlog->updateBlog($input, $id);
        return redirect(env('APP_URL') . '/listingBlogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objBlog = new Blog();
        $blog = $objBlog->deleteBlog($id);
        return redirect(env('APP_URL') . '/listingBlogs');
    }
}
