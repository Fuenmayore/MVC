<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Obtén la cantidad total de tareas
        $totalTareas = Tarea::count();

        // Obtén la cantidad de tareas completadas
        $tareasCompletadas = Tarea::where('completada', true)->count();

        // Obtén la cantidad de tareas pendientes
        $tareasPendientes = Tarea::where('completada', false)->count();

        return view('home', compact('totalTareas', 'tareasCompletadas', 'tareasPendientes'));
    }
}
