<?php

namespace App\Http\Livewire;

use Illuminate\Database\Schema\Blueprint;
use Livewire\Component;

class Campeonato extends Component
{

    public $data_inicio = '';
    public $data_encerramento = '';
    public $nome = '';


    public function render()
    {
        return view('livewire.campeonato')->with(
            [
                'campeonatos' => \App\Models\Campeonato::all()
            ]
        );
    }

    public function cadastrarCampeonato()
    {
        \App\Models\Campeonato::create([
            'nome' => $this->nome,
            'data_inicio' => $this->data_inicio,
            'data_encerramento' => $this->data_encerramento,
        ]);
    }

    public function deletaPeloId( $id ){
        \App\Models\Campeonato::find($id)->delete();
    }
}
