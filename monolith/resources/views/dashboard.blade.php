<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Wonderful Destinations in Kenya CRUD Application
                </div>
            </div>

            <h1></h1>

        <a href="{{ route('tour.index') }}">
        <button class="bg-pink-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                All Tours
        </button>
        </a>

        </div>
    </div>
</x-app-layout>
