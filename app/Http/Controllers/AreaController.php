<?php


namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }

    public function create()
    {
        return view('area.create'); // Asegúrate de tener la vista 'area/create.blade.php'
    }

    public function store(Request $request)
    {
        // Crear y guardar nueva área
        $area = new Area();
        $area->name = $request->name;
        $area->save();

        // Redirigir a la lista de áreas con mensaje de éxito
        return redirect()->route('area.index');
    }

    public function show($id)
    {
        $area = Area::findOrFail($id); // Busca el registro por su ID o lanza una excepción 404 si no se encuentra
        return view('area.show', compact('area')); // Devuelve la vista 'area/show.blade.php' pasando el objeto $area
    }

    public function edit($id)
    {
        $area = Area::findOrFail($id); // Busca el registro
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->name = $request->name;
        $area->save();

        return redirect()->route('area.index')->with('success', 'Área actualizada correctamente.');
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return redirect()->route('area.index')->with('success', 'Área eliminada correctamente.');
    }
}
