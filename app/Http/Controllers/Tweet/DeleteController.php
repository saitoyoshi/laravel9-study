<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $tweetId)
    {
        $tweet = Tweet::findOrFail($tweetId);
        $tweet->delete();

        return redirect(route('tweet.index'))->with('message', 'つぶやきを削除しました');
    }
}
