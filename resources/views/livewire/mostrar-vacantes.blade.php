<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

            <div class="space-y-8">
                <a href="" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                <p class="text-sm text-gray-500">Ultimo dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
            </div>

            <div class="flex flex-col md:flex-row gap-3 items-stretch mt-5 md:mt-0">
                <a 
                    href="#"
                    class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase tetx-center"
                >Candidatos</a>

                <a 
                    href="#"
                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase tetx-center"
                >Editar</a>

                <a 
                    href="#"
                    class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase tetx-center"
                >Eliminar</a>
            </div>

        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse
</div>

<div class="mt-10">
    {{ $vacantes->links() }}
</div>