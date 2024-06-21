<?php
namespace App\Actions\Service;
use App\Models\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreServiceAction
{
    public function handle(array $data): Service
    {
        if(isset($data['image'])){
            $data['image']->store('public/uploads/services');
            $data['image'] = $data['image']->hashName();
        }
        $service = Service::create(($data));
        return $service;
    }
}