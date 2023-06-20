<?php

namespace App\Http\Controllers\Study;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function s() {
        return 'y';
    }
    public function showId($id) {
        return "come on {$id}";
    }
}
