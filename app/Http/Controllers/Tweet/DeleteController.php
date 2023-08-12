<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $tweetId, TweetService $tweetService)
    {
        $tweet = Tweet::findOrFail($tweetId);
        if (!$tweetService->checkOwnTweet($request->user()->id, $tweetId)) {
            throw new AccessDeniedException();
        }
        $tweet->delete();

        return redirect(route('tweet.index'))->with('message', 'つぶやきを削除しました');
    }
}
