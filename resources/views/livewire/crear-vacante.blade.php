<form action="" class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="Titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante"
        />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            wire:model="salario" 
            id="salario"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
            >
        <option value="">-- Seleccione --</option>
        @foreach ($salarios as $salario )
            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
        @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select 
            wire:model="categoria" 
            id="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
            >
        <option value="">--Seleccione Categoria--</option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{ $categoria->categoria }}</option>
        @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="Empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('titulo')"
            placeholder="Empresa: ej, Netflix, Uber, Shopify"
        />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')"
        />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion puesto')" />
        <textarea 
            wire:model="descripcion" 
            id="descripcion"
            placeholder="Descripcion general del puesto"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72"
        ></textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen" 
        />
    </div>

    <x-primary-button class="w-full justify-center">
        Crear vacante
    </x-primary-button>

</form>