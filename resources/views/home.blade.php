<x-guest-layout>
    <x-alert event="@survey-sent.window" message="$event.detail.message" />
    <div class="relative">
        <figure>
            <img src="{{ asset('img/_105666141_gettyimages-925451818.jpg') }}" class="max-h-screen min-h-screen w-full object-cover" alt="Imagen para la encuesta">
        </figure>

        <div class="absolute z-10 w-full min-h-screen top-0">
            <nav class="w-11/12 mx-auto flex justify-between mt-4">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
                <ul class="grid grid-cols-2 gap-4">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </nav>

            <main class="w-11/12 mx-auto h-[calc(100vh-56px)] flex flex-col justify-end items-center">
                <div class="mb-10 border-2 rounded-lg p-6 text-gray-700">
                    <h1 class="text-3xl">Queremos saber tu opinión</h1>
                    <p class="mt-6">Regalanos 5 minutos de tu tiempo, cuentanos como llevas el día a día y en que empleas tu tiempo respondiendo la siguinte encuesta</p>
                    <button class="mt-4 float-right px-4 py-2 rounded-md text-white bg-blue-900" type="button" data-modal-toggle="modal-survey">Iniciar encuesta</button>
                </div>
            </main>
        </div>
    </div>

    @livewire('modal-survey')
</x-guest>