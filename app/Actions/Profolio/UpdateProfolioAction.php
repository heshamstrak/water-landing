<?php
namespace App\Actions\Profolio;
use App\Models\Profolio;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdateProfolioAction
{
    public function handle(Profolio $Profolio,array $data):Profolio
    {
        if(isset($data['image'])){
            Storage::disk('local')->delete('public/uploads/profolios/' . $Profolio->image);
            $data['image']->store('public/uploads/profolios');
            $data['image'] = $data['image']->hashName();
        } else {
            $data['image'] = $Profolio->image;
        }
        $Profolio->update($data);
        return $Profolio;
    }
}