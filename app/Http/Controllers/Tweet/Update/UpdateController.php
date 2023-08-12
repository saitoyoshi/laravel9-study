<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, string $tweetId)
    {
        $tweet = Tweet::findOrFail($tweetId);
        $tweet->content = $request->tweet;
        $tweet->update();

        return redirect(route('tweet.index'));
    }
}
