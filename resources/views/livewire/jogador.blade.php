<div class="flex items-center">
    <div class="w-1/4"></div>
    <div class="w-1/2">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Cadastrar jogador</h3>
        <form wire:submit.prevent="cadastrarJogador" class="flex items-center">

            <div class="sm:grid sm:grid-cols-2 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5 w-full max-w-lg">
                <div class="col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" wire:model="nome" id="name" autocomplete="name"
                           class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-1">
                    <label for="age" class="text-sm font-medium text-gray-700">Idade</label>
                    <input type="number" wire:model="idade" id="age" autocomplete="age"
                           class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('age') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2">
                    <label for="name" class="text-sm font-medium text-gray-700">Nacionalidade</label>
                    <input type="text" wire:model="nacionalidade" id="name" autocomplete="name"
                           class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('nacionalidade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-1/2">
                    <label for="age" class="text-sm font-medium text-gray-700">Vitorias</label>
                    <input type="number" wire:model="vitorias" id="age" autocomplete="age"
                           class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('vitorias') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2">
                    <label for="age" class="text-sm font-medium text-gray-700">Derrotas</label>
                    <input type="number" wire:model="derrotas" id="age" autocomplete="age"
                           class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('derrotas') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>




                    <button type="submit" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white">
                        Cadastrar Jogador
                    </button>
            </div>


        </form>

        <div>
            <div x-data="{ open: false }">
                <button @click="open = true">Times  ↴</button>

                <ul x-show="open" @click.outside="open = false">
                    @foreach($todosTimes as $time)
                        <button wire:model="time">{{$time->nome}}</button>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div class="w-1/4"></div>
        <div class="overflow-x-auto relative py-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="py-3 px-6">
                        Nome
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Idade
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Vitorias
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Derrotas
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Opções
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($todosJogadores as $jogador)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$jogador->nome}}
                    </th>
                    <td class="py-4 px-6">
                        {{$jogador->idade}}
                    </td>
                    <td class="py-4 px-6">
                        {{$jogador->vitorias}}
                    </td>
                    <td class="py-4 px-6">
                        {{$jogador->time}}
                    </td>
                    <td class="py-4 px-6">
                        <button wire:click="deletaPeloId({{$jogador->id}})">Deletar</button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    <div class="w-1/4"></div>

</div>
