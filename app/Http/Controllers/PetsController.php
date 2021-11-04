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
        $pet = Pet::find($id);
        //$pet->edit([
            //'nome' => $request->nome,
            //'raca' => $request->raca,
            //'dono' => $request->dono,
           // 'peso' => $request->peso,
       // ]);

      /* $this ($request->all(),[
            'nome' => 'required',
            'raca' => 'required',
            'dono' => 'required',
            'peso' => 'required',
       ]);*/
       $input = $request->all();
       $pet->update($input);
       //$pet->fill($input)->save();

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

    public function delete($id){
        $pet = Pet::findOrFail($id);
        return view('welcome', ['pet'=>$pet]);
    }

    public function edit($id) {
        $pet = Pet::findOrFail($id);
        return view('pets.editar',['pet'=>$pet]);
    }

}

