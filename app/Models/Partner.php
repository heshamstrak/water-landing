<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    protected $appends = ['image_path'];

    //attr
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/partners/' . $this->image);
        
    }// end of getPosterPathAttribute

}
