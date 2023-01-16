<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use App\Models\Categoria;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
