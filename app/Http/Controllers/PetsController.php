<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function create(){
        return view('pets.create');
    }
    public function store(Request $request) {
        Pet::create([
            'nome'=>$request->nome,
            'raca'=>$request->raca,
            'dono'=>$request->dono,
            'peso'=>$request->peso,
        ]);
        return "Pet Salvo Com Sucesso";
    }
    public function update($id, Request $request){
        $pet = Pet::findOrFail($id);
        $pet->edit([
            'nome' => $request->nome,
            'raca' => $request->raca,
            'dono' => $request->dono,
            'peso' => $request->peso,
        ]);
        return "Pet atualizado com sucesso";
    }
    public function show(){
        $pets = Pet::all();
        return view('welcome',['pets'=> $pets]);
    }

    public function destroy($id) {
        $pet = Pet::findOrFail($id);
        $pet->delete();
        return "Pet excluido com sucesso";
    }

    public function edit($id) {
        $pet = Pet::findOrFail($id);
        return view('pets.editar', ['pets'=> $pet]);
    }

}

