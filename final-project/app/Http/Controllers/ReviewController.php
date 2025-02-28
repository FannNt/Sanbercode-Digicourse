<?php

namespace App\Http\Controllers;

use App\Http\Requests\Review\CreateRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(CreateRequest $request, $filmId)
    {
        Review::create(array_merge(
            $request->validated(),
            ['user_id' => auth()->id(), 'film_id' => $filmId]
        ));

        return redirect()->back();
    }
}
