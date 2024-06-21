<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Different extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image'];
    protected $appends = ['image_path'];

    //attr
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/differents/' . $this->image);
        
    }// end of getPosterPathAttribute

}
