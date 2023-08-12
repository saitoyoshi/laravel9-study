<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $tweetId, TweetService $tweetService)
    {
        $Tweet = Tweet::findOrFail($tweetId);
        if (!$tweetService->checkOwnTweet($request->user()->id, $tweetId)) {
            throw new AccessDeniedException();
        }
        return view('tweet.update.index', ['tweet' => $Tweet]);
    }
}
