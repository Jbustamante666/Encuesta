<div id="modal-survey" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full" wire:ignore.self x-data @survey-sent.window="$refs.closeButton.click()">
    <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form wire:submit.prevent="submit">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        Encuesta
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-survey" x-ref="closeButton">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6 overflow-y-auto h-80 px-5">
                    <x-label for="email" class="text-lg text-black" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus wire:model="data.email" />
                    @error('data.email') <span class="error">{{ $message }}</span> @enderror

                    <x-label class="text-lg text-black mt-4" :value="__('Edad')" />
                    <ul class="grid gap-6 w-full md:grid-cols-4">
                        <x-input-radio-advanced-layout id="age-1" value="18-15" name="age" wire:model="data.age">
                            <div class="w-full text-lg font-semibold">18-25</div>
                            <div class="w-full">Años</div>
                        </x-input-radio-advanced-layout>
                        <x-input-radio-advanced-layout id="age-2" value="26-33" name="age" wire:model="data.age">
                            <div class="w-full text-lg font-semibold">26-33</div>
                            <div class="w-full">Años</div>
                        </x-input-radio-advanced-layout>
                        <x-input-radio-advanced-layout id="age-3" value="34-40" name="age" wire:model="data.age">
                            <div class="w-full text-lg font-semibold">34-40</div>
                            <div class="w-full">Años</div>
                        </x-input-radio-advanced-layout>
                        <x-input-radio-advanced-layout id="age-4" value="40+" name="age" wire:model="data.age">
                            <div class="w-full text-lg font-semibold">40+</div>
                            <div class="w-full">Años</div>
                        </x-input-radio-advanced-layout>
                    </ul>
                    @error('data.age') <span class="error">{{ $message }}</span> @enderror

                    <x-label class="text-lg text-black mt-4" :value="__('Sexo')" />
                    <ul class="grid gap-6 w-full md:grid-cols-3">
                        <x-input-radio-advanced-layout id="m" value="m" name="gender" wire:model="data.gender">
                            <div class="w-full">Masculino</div>
                        </x-input-radio-advanced-layout>
                        <x-input-radio-advanced-layout id="w" value="w" name="gender" wire:model="data.gender">
                            <div class="w-full">Femenino</div>
                        </x-input-radio-advanced-layout>
                        <x-input-radio-advanced-layout id="o" value="o" name="gender" wire:model="data.gender">
                            <div class="w-full">Otro</div>
                        </x-input-radio-advanced-layout>
                    </ul>
                    @error('data.gender') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="t_facebook" class="text-lg text-black mt-4" :value="__('Tiempo promedio al día en Facebook')" />
                    <x-input-range id="t_facebook" min="0" max="24" step="0.5" value="0" name="t_facebook" wire:model="data.t_facebook" event="@survey-sent.window">
                        hrs
                    </x-input-range>
                    @error('data.t_facebook') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="t_whatsapp" class="text-lg text-black mt-4" :value="__('Tiempo promedio al día en WhatsApp')" />
                    <x-input-range id="t_whatsapp" min="0" max="24" step="0.5" value="0" name="t_whatsapp" wire:model="data.t_whatsapp" event="@survey-sent.window">
                        hrs
                    </x-input-range>
                    @error('data.t_whatsapp') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="t_twitter" class="text-lg text-black mt-4" :value="__('Tiempo promedio al día en Twitter')" />
                    <x-input-range id="t_twitter" min="0" max="24" step="0.5" value="0" name="t_twitter" wire:model="data.t_twitter" event="@survey-sent.window">
                        hrs
                    </x-input-range>
                    @error('data.t_twitter') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="t_instagram" class="text-lg text-black mt-4" :value="__('Tiempo promedio al día en Instagram')" />
                    <x-input-range id="t_instagram" min="0" max="24" step="0.5" value="0" name="t_instagram" wire:model="data.t_instagram" event="@survey-sent.window">
                        hrs
                    </x-input-range>
                    @error('data.t_instagram') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="t_tiktok" class="text-lg text-black mt-4" :value="__('Tiempo promedio al día en Tiktok')" />
                    <x-input-range id="t_tiktok" min="0" max="24" step="0.5" value="0" name="t_tiktok" wire:model="data.t_tiktok" event="@survey-sent.window">
                        hrs
                    </x-input-range>
                    @error('data.t_tiktok') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="most_beloved_rrss" class="text-lg text-black mt-4" :value="__('Red social favorita')" />
                    <x-select name="most_beloved_rrss" id="most_beloved_rrss" wire:model="data.most_beloved_rrss">
                        @foreach ($socialNetworks as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </x-select>
                    @error('data.most_beloved_rrss') <span class="error">{{ $message }}</span> @enderror

                    <x-label for="least_favorite_rrss" class="text-lg text-black mt-4" :value="__('Red social menos querida')" />
                    <x-select name="least_favorite_rrss" id="least_favorite_rrss" wire:model="data.least_favorite_rrss">
                        @foreach ($socialNetworks as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </x-select>
                    @error('data.least_favorite_rrss') <span class="error">{{ $message }}</span> @enderror
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:loading.attr="disabled">
                        <span wire:loading.remove wire:target="submit">Enviar encuesta</span>
                        <span wire:loading wire:target="submit">
                            <svg role="status" class="inline mr-3 w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                            </svg>
                            Cargando...
                        </span>
                    </button>
                    <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600" data-modal-toggle="modal-survey">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>