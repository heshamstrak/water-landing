<?php
namespace App\Actions\Feature;
use App\Models\Feature;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreFeatureAction
{
    public function handle(array $data): Feature
    {
        $features = Feature::create(($data));
        return $features;
    }
}