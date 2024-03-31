<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
        'tag',
        'counter',
    ];

    public function listingBlogs()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrBlogs = $this->get();
        foreach ($arrBlogs as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrBlogs;
    }

    public function latestBlogs()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrBlogs = $this->latest()->take(3)->get();
        foreach ($arrBlogs as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        $arrBlogs->shift();
        return $arrBlogs;
    }

    public function lastblog()
    {
        $App_Media_URL = env('App_Media_URL');
        $blog = $this->latest('id')->first();
        $blog['image'] = $App_Media_URL . $blog['image'];
        return $blog;
    }

    public function relatedBlogs()
    {
        $App_Media_URL = env('App_Media_URL');
        $arrBlogs = $this->latest()->take(6)->get();
        foreach ($arrBlogs as $value) {
            $value['image'] = $App_Media_URL . $value['image'];
        }
        return $arrBlogs;
    }

    public function createBlog($input)
    {
        $image = $input['image'];
        $imageName = $image->getClientOriginalName();
        $image->move('storage/blog', $imageName);
        $input['image'] = "blog/" . $imageName;
        $result = $this->create($input);
        return $result;
    }

    public function editBlog($blog_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $blog = $this->where('id', $blog_id)->first();
        $blog['image'] = $App_Media_URL . $blog['image'];
        return $blog;
    }

    public function viewBlog($blog_id)
    {
        $App_Media_URL = env('App_Media_URL');
        $blog = $this->where('id', $blog_id)->first();
        $blog['tag'] = explode(",", $blog['tag']);
        $blog['image'] = $App_Media_URL . $blog['image'];
        return $blog;
    }

    public function updateBlog($input, $blog_id)
    {
        if (array_key_exists('image', $input)) {
            $image = $input['image'];
            $imageName = $image->getClientOriginalName();
            $image->move('storage/blog', $imageName);
            $input['image'] = "blog/" . $imageName;
        }
        $result = $this->find($blog_id)->update($input);
        return $result;
    }

    public function deleteBlog($blog_id)
    {
        $result = $this->where('id', $blog_id)->delete();
        return $result;
    }
}
