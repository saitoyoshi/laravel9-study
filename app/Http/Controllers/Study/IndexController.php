<?php

namespace App\Http\Controllers\Study;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function hello() {
        return 'hello';
    }
    public function showId($id) {
        return "Hi! {$id}";
    }
}
