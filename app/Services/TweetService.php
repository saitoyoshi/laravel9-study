<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService {
    public function checkOwnTweet(int $userId, int $tweetId): bool {

        $tweet = Tweet::findOrFail($tweetId);
        if (!$tweet) {
            return false;
        }
        return $userId === $tweet->user_id;
    }
}
