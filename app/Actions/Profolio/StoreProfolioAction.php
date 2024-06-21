<?php
namespace App\Actions\Profolio;
use App\Models\Profolio;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreProfolioAction
{
    public function handle(array $data): Profolio
    {
        if(isset($data['image'])){
            $data['image']->store('public/uploads/profolios');
            $data['image'] = $data['image']->hashName();
        }
        $profolios = Profolio::create(($data));
        return $profolios;
    }
}