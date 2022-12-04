<?php

namespace App\Http\Controllers;

use App\Models\UserIntegration;
use FiveamCode\LaravelNotionApi\Notion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller {

    public function index() {
        return view('test.pub');
    }

}
