<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $tweetId)
    {
        $Tweet = Tweet::findOrFail($tweetId);

        return view('tweet.update.index', ['tweet' => $Tweet]);
    }
}
