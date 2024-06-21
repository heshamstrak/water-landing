<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'job'];
    protected $appends = ['image_path'];

    //attr
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/testimonials/' . $this->image);
        
    }// end of getImagePathAttribute
}
