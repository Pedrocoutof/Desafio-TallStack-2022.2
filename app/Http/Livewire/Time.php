<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Time extends Component
{

    public $nome = '';
    public $pais_origem = '';
    public $pontuacao = '';
    public $vitorias = '';
    public $derrotas = '';

    public function render()
    {
        return view('livewire.time')->with([
            'times' => \App\Models\Time::orderBy('pontuacao', 'DESC')->get(),
        ]);
    }

    public function cadastrarTime()
    {
        \App\Models\Time::create([
            'nome' => $this->nome,
            'pontuacao' => $this->pontuacao,
            'vitorias' => $this->vitorias,
            'derrotas' => $this->derrotas,
            'pais_origem' => $this->pais_origem,
        ]);
    }

    public function deletaPeloId($id)
    {
        \App\Models\Time::find($id)->delete();
    }
}
