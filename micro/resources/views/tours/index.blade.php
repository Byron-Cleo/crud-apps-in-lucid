<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between ">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Wonderful Destination Tours in Kenya
        </h2>
        <a href="/tours/create">
        <button class="bg-pink-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Add New Tour
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

      <table class=" table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">ID</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Tour Details</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Name</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">City</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Edit Action</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Delete Action</span>
            </th>
          </tr>
        </thead>    
        <tbody class="bg-gray-200">
        @foreach ($tours as $tour)
          <tr class="bg-white border-4 border-gray-200">

            <td>
              <span class="text-center ml-2 font-semibold">{{$tour->id}}</span>
            </td>
            <td class="px-16 py-2">
            <a href="/tours/{{ $tour->id }}/details">
              <button class="bg-green-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Tour Details
              </button>
              </a>
            </td>
            <td class="px-16 py-2">
              <span>{{$tour->tour_name}}</span>
            </td>
            <td class="px-16 py-2">
              <span>{{$tour->location}}</span>
            </td>

            <td class="px-16 py-2">
            <a href="/tours/{{ $tour->id }}/edit" >
              <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Edit Tour
              </button>
              </a>
            </td>
            <td class="px-16 py-2">

            <form method="POST" action="/tours/{{ $tour->id }}/delete">
                @csrf
                @method('delete')

                <button type="submit" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                    Delete Tour
              </button>
            </form>

            <!-- <button type="submit"> Delete </button> -->
            <!-- <a href="{{ route('tour.index') }}">
              <button class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                Delete Tour
              </button>
              </a> -->
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>


    </div>
</x-app-layout>
