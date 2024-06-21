<?php
namespace App\Actions\Feature;
use App\Models\Feature;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdateFeatureAction
{
    public function handle(Feature $Feature,array $data):Feature
    {
        $Feature->update($data);
        return $Feature;
    }
}