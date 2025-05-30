<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{


  public function index(){
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    public function create(){
        return view('computer.create');

    }

    public function edit($id)
    {
        $computer = Computer::findOrFail($id); // Busca el registro
        return view('computer.edit', compact('computer'));
    }

     public function update(Request $request, $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->number = $request->number;
        $computer->save();
        return redirect()->route('computer.index')->with('success', 'Computador actualizado correctamente.');
    }


      public function show($id)
    {
        $computer = Computer::findOrFail($id); // Busca el registro por su ID o lanza una excepción 404 si no se encuentra
        return view('computer.show', compact('computer')); // Devuelve la vista 'area/show.blade.php' pasando el objeto $area
    }
    public function store(Request $request){
       $computer = new Computer();
       $computer->number = $request->number;
       $computer->brand = $request->brand;
        $computer->save();
         return redirect()->route('computer.index');
    }

    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return redirect()->route('computer.index')->with('success', 'Computador eliminado correctamente.');
    }


}
