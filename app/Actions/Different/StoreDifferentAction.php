<?php
namespace App\Actions\Different;
use App\Models\Different;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreDifferentAction
{
    public function handle(array $data): Different
    {
        if(isset($data['image'])){
            $data['image']->store('public/uploads/differents');
            $data['image'] = $data['image']->hashName();
        }
        $differents = Different::create($data);
        return $differents;
    }
}