<?php
namespace App\Actions\Blog;
use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdateBlogAction
{
    public function handle(Blog $Blog,array $data):Blog
    {
        if(isset($data['poster'])){
            Storage::disk('local')->delete('public/uploads/Blogs/' . $Blog->poster);
            $data['poster']->store('public/uploads/Blogs');
            $data['poster'] = $data['poster']->hashName();
        } else {
            $data['poster'] = $Blog->poster;
        }
        $Blog->update($data);
        return $Blog;
    }
}