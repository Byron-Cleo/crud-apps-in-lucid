<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between ">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Update Destination Tour
        </h2>
        <a href="{{ route('tour.index') }}">
        <button class="bg-pink-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
            Back
        </button>
        </a>
    </div>
    </x-slot>    

    <div class="flex items-center justify-center h-screen">
        <form action="/tours/{{ $tour->id }}/edit" method="post" class="w-full max-w-sm bg-white shadow-md rounded px-8 pt-6 pb-8">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-2 mb-2 rounded relative" role="alert">
                    Please fix the following errors
                </div>
            @endif
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="tour_name">
                        Destination Tour Name
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="tour_name" value="{{ $tour->tour_name }}" name="tour_name" class="appearance-none border-2 @error('tour_name') border-red-400 @else border-gray-200 @enderror rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" type="text">
                    @error('tour_name')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="location">
                        Location(City/Town)
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="location" value="{{ $tour->location }}" name="location" class="appearance-none border-2 @error('location') border-red-400 @else border-gray-200 @enderror rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-500" type="text">
                    @error('location')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit" class="shadow bg-teal-500 hover:bg-teal-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">
                        Update Tour
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
