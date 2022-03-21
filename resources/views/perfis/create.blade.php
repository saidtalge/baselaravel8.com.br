<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style='padding:10px;'>
                    
            <x-jet-validation-errors class="mb-4" />
                <form action="{{ route('perfis.store') }}" method="POST" class=''>
                    @csrf
                    @include('perfis.field')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>