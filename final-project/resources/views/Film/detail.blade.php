<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Film') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:w-1/3">
{{--                    <img class="w-full h-full object-cover" src="{{ $film->poster }}" alt="{{ $film->title }}">--}}
                </div>
                <div class="p-6 md:w-2/3">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $film->title }}</h1>
                    <p class="text-gray-600 text-sm mt-2">Release Year: <span class="font-semibold">{{ $film->release_year }}</span></p>
                    <p class="text-gray-600 text-sm">Genre: <span class="font-semibold">{{ $film->genre->name }}</span></p>
                    <p class="mt-4 text-gray-700">{{ $film->summary }}</p>

                    <div class="mt-6">
                        @auth()
                        <form action="{{ route('film-delete',$film->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="m-2 bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="review" class="max-w-6xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Reviews</h2>
        @if($film->review->isEmpty())
            <div class="border-b pb-4 mb-4 ">
                No One Review For This Film
            </div>
        @endif
        @foreach($film->review as $review)
                <div class="border-b pb-4 mb-4">
                    <div class="flex items-center">
                        <div>
                            <h3 class="font-semibold text-gray-700">{{ $review->user->name }}</h3>
                        </div>
                    </div>

                    <div class="flex mt-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 {{ $i <= $review->point ? 'text-yellow-400' : 'text-gray-300' }}" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 15l-5.878 3.09 1.122-6.545-4.756-4.64 6.572-.955L10 0l2.94 5.95 6.572.955-4.756 4.64 1.122 6.545z"/>
                            </svg>
                        @endfor
                    </div>

                    <p class="mt-2 text-gray-700">{{ $review->content }}</p>
                </div>
        @endforeach
        @auth
            <!-- Review Form -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Leave a Review</h3>
                <form action="{{ route('review-create', $film->id) }}" method="POST">
                    @csrf
                    <label class="block text-gray-700">Your Rating</label>
                    <select name="point" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="1">⭐ - 1 Star</option>
                        <option value="2">⭐⭐ - 2 Stars</option>
                        <option value="3">⭐⭐⭐ - 3 Stars</option>
                        <option value="4">⭐⭐⭐⭐ - 4 Stars</option>
                        <option value="5">⭐⭐⭐⭐⭐ - 5 Stars</option>
                    </select>

                    <label class="block text-gray-700 mt-3">Your Review</label>
                    <textarea name="content" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" rows="3" placeholder="Write your review..."></textarea>

                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Submit Review
                    </button>
                </form>
            </div>
        @endauth
    </div>

</x-app-layout>
