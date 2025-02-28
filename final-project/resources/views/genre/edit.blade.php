<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Genre') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 flex justify-center">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Genre</h1>

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 text-red-600 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('genre-edit', $genre->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Genre Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $genre->name) }}"
                           class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ route('genre') }}" class="px-5 py-2 text-gray-600 hover:text-gray-900">Cancel</a>
                    <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
