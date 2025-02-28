<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Films in Genre: ') }} {{ $genre->name }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Movies in {{ $genre->name }}</h1>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($genre->film as $film)
                        <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $film->title }}</h2>
                            <p class="text-gray-600 text-sm mt-1">Release Year: <span class="font-semibold">{{ $film->release_year }}</span></p>

                            <a href="{{ route('film-detail', $film->id) }}" class="text-blue-600 hover:underline mt-2 inline-block">
                                View Details
                            </a>
                        </div>
                    @endforeach
                </div>

                @auth
                    <div class="mt-10 flex justify-between">
                        <a href="{{ route('genre-edit-form', $genre->id) }}" class="bg-yellow-500 px-5 py-2 text-white rounded-lg shadow hover:bg-yellow-600 transition">
                            Edit Genre
                        </a>
                        <form id="delete-form" action="{{ route('genre-delete', $genre->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this genre? (that will delete all films with this genre)')"
                                    class="bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</x-app-layout>
