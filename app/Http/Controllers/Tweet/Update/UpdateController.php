<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, string $tweetId, TweetService $tweetService)
    {
        $tweet = Tweet::findOrFail($tweetId);
        if (!$tweetService->checkOwnTweet($request->user()->id, $tweetId)) {
            throw new AccessDeniedException();
        }
        $tweet->content = $request->tweet;
        $tweet->update();

        return redirect(route('tweet.index'))->with('message', 'つぶやきを更新しました');
    }
}
