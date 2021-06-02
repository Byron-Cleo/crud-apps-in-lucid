<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between ">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Destination Tour Details
        </h2>
        <a href="{{ route('tour.index') }}">
        <button class="bg-pink-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
            Back
        </button>
        </a>
    </div>
    </x-slot>

    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2 flex justify-center">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">
            {{ session()->get('message') }}
            </p>
        </div>
    @endif

    <div class="flex items-center justify-center h-screen">

      <div>
      <ul>
          <li>
            <div class="flex justify-between ">
            <span class="text-black-300">Tour Name:</span>
            <p> {{ $tour->tour_name }}</p>
          </div>
          </li>

          <li>
            <div class="flex justify-between ">
            <span class="text-black-300">Tour Location:</span>
            <p> {{ $tour->location }}</p>
          </div>
          </li>

      </ul>

      <div class="px-16 py-2 flex justify-between">
        <a href="/tours/{{ $tour->id }}/edit" >
            <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
            Edit Tour
            </button>
            </a>

        <form method="POST" action="/tours/{{ $tour->id }}/delete">
            @csrf
            @method('delete')

            <button type="submit" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Delete Tour
            </button>
        </form>
      </div>
    </div>


    </div>
</x-app-layout>
