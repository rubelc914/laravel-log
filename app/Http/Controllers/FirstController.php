<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FirstController extends Controller
{
    public function index(): JsonResponse
    {
        // Log::channel('FirstController')->info('start: this is test log message');
        Log::channel('FirstController')->emergency('Log message.');
        Log::channel('FirstController')->alert('Log message.');
        Log::channel('FirstController')->critical('Log message.');
        Log::channel('FirstController')->error('Log message.');
        Log::channel('FirstController')->warning('Log message.');
        Log::channel('FirstController')->notice('Log message.');
        Log::channel('FirstController')->info('Log message.');
        Log::channel('FirstController')->debug('Log message.');
        return response()->json(['message'=>'working..']);
    }
}
