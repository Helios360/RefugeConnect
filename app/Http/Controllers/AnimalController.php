<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function read($id): View{
        $animal=Animal::findOrFail($id);
        return view('pages.animal-details', compact('animal'));
    }
    public function create(){
        Animal::insert([
            [
                "name"=>"Coquillette",
                "breed"=>"Chien",
                "age"=>3,
                "description"=>"Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
                "img"=>"coquillette.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        return redirect('/');
    }
    public function update($id){
        $animal=Animal::findOrFail($id);
        $animal->update([
            'name'=>$animal->name." Modified",
            'breed'=>$animal->breed,
            'age'=>$animal->age,
            'description'=>$animal->description,
            'img'=>$animal->img,
        ]);
        return redirect('/');
    }
    public function delete($id){
        $animal=Animal::findOrFail($id);
        $animal->delete();
        return redirect('/')->with('success', 'Animal supprimé.');
    }
}