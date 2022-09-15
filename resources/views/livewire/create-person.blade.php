<div>
    <div class="px-6 py-2">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Person</h3>
        <form wire:submit.prevent="submit" class="space-y-8 divide-y divide-gray-200">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <div class="col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-700">Name</label>
                    <input type="text" wire:model="name" id="name" autocomplete="name" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-1">
                    <label for="age" class="text-sm font-medium text-gray-700">Age</label>
                    <input type="number" wire:model="age" id="age" autocomplete="age" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                    @error('age') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-2">
                    <label for="about" class="text-sm font-medium text-gray-700">About</label>
                    <textarea id="about" wire:model="about" rows="3" class="block w-full border border-gray-300 rounded-md"></textarea>
                    @error('about') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-3" x-data="{ open: false }">
                    <button type="button" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white cursor-pointer" x-on:click="open = !open">Show More Fields</button>

                    <div x-show="open">
                        <div class="col-span-3">
                            <label for="country" class="text-sm font-medium text-gray-700">Country</label>
                            <input type="text" wire:model="country" id="country" autocomplete="country" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                            @error('country') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="city" class="text-sm font-medium text-gray-700">City</label>
                            <input type="text" wire:model="city" id="city" autocomplete="city" class="w-full flex-1 flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                            @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="col-span-1">
                    <button type="submit" class="bg-blue-500 py-2 px-3 rounded-md shadow-sm text-sm hover:bg-purple-500 font-medium text-white">Save Person</button>
                </div>
            </div>
        </form>
    </div>
    
    @foreach($people as $person)
        <p>{{ $person->name }}</p>
    @endforeach
</div>

