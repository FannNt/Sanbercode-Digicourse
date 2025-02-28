<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Genre</h1>
            @if(admin())
                <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-600">
                    Add Genre
                </button>
            @endif
        </div>
    </x-slot>

    @if ($errors->any())
        <div class="max-w-2xl mx-auto my-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
            <p class="font-semibold">There were some errors when create films:</p>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($genres as $genre)
                    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $genre->name }}</h2>
                            <div class="mt-4">
                                <a href="{{ route('genre-detail', $genre->id) }}" class="text-blue-500 hover:underline font-medium">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden"><div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-xl w-96">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Add Film</h2>

                <form action="{{ route('genre-create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="block text-gray-700">Title</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 @error('name') border-red-500 @enderror"
                               placeholder="Enter film name">
                    </div>

                    <div class="flex justify-end space-x-2 mt-4">
                        <button type="button" id="closeModal" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400">
                            Cancel
                        </button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("modal");
            const openModal = document.getElementById("openModal");
            const closeModal = document.getElementById("closeModal");

            openModal.addEventListener("click", function() {
                modal.classList.remove("hidden");
            });

            closeModal.addEventListener("click", function() {
                modal.classList.add("hidden");
            });

            modal.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
</x-app-layout>
