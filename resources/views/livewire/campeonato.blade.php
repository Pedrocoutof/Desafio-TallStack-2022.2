<div class="px-2">

    <form wire:submit.prevent="cadastrarCampeonato" class="flex items-center">

        <div class="sm:grid sm:grid-cols-2 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5 w-full max-w-lg">
            <div>
                <label for="name" class="text-sm font-medium text-gray-700">Nome</label>
                <input type="text" wire:model="nome" id="name" autocomplete="name"
                       class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="age" class="text-sm font-medium text-gray-700">Pais de origem</label>
                <input type="date" wire:model="data_inicio" id="age" autocomplete="age"
                       class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                @error('age') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="name" class="text-sm font-medium text-gray-700">Encerramento</label>
                <input type="date" wire:model="data_encerramento" id="name" autocomplete="name"
                       class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                @error('nacionalidade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white">
                Cadastrar campeonato
            </button>
        </div>
    </form>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nome
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Inicio
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Fim
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($campeonatos as $campeonato)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$campeonato->nome}}
                    </th>
                    <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$campeonato->data_inicio}}
                    </th>
                    <th scope="row" class="py-3 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$campeonato->data_encerramento}}
                    </th>
                    <td class="py-3 px-12">
                        <button wire:click="deletaPeloId({{$campeonato->id}})">Deletar</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
