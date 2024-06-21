<?php
namespace App\Actions\Blog;
use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreBlogAction
{
    public function handle(array $data): Blog
    {
        if(isset($data['poster'])){
            $data['poster']->store('public/uploads/blogs');
            $data['poster'] = $data['poster']->hashName();
        }
        $blogs = Blog::create(($data));
        return $blogs;
    }
}