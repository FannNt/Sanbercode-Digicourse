<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Film') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 flex justify-center">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Film</h1>

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
            <form action="{{ route('film-edit', $film->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Genre Name</label>
                    <input type="text" id="name" name="title" value="{{ old('title', $film->title) }}"
                           class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="poster" class="block text-gray-700 font-semibold">Poster Url</label>
                    <input type="text" id="poster" name="poster" value="{{ old('poster', $film->poster) }}"
                           class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for=release_year" class="block text-gray-700 font-semibold">Release Year</label>
                    <input type="text" id=release_year" name="release_year" value="{{ old('release_year', $film->release_year) }}"
                           class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="genre_id" class="block text-gray-700 font-semibold">Genre</label>
                    <select name="genre_id" id="genre_id">
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for=summary" class="block text-gray-700 font-semibold">Summary</label>
                    <textarea name="summary" id="summary" cols="20" rows="5"
                    class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('summary', $film->summary) }}</textarea>
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
