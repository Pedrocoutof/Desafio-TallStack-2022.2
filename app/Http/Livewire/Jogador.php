<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jogador as JogadorModel;

class Jogador extends Component
{

    public $nome = '';
    public $time = '';
    public $idade = '';
    public $nacionalidade = '';
    public $vitorias = '';
    public $derrotas = '';

    protected $validaCampos = [
        'nome' => 'string|required|min:3',
        'idade' => 'numeric|required',
        'nacionalidade' => 'string|required',
        'vitorias' => 'numeric|nullable',
        'derrotas' => 'numeric|nullable',
        ];

    public function render()
    {
        return view('livewire.jogador', [
            'todosJogadores' => JogadorModel::all(),

        ]);
    }

    public function cadastrarJogador()
    {
        JogadorModel::create([
            'nome' => $this->nome,
            'idade' => $this->idade,
            'nacionalidade' => $this->nacionalidade,
            'vitorias' => $this->vitorias,
            'derrotas' => $this->derrotas,
        ]);

        $this->reset();
    }

    public function tabelaJogadoresView(){
        return view(
            'counter'
        );
    }

    public function deletaPeloId($id){
        $F_jogador = JogadorModel::find($id);

        $F_jogador->delete();
    }
}
