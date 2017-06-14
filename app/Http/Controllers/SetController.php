<?php

namespace App\Http\Controllers;

use App\FactionGenerator;
use App\Http\Requests\FactionGenerateRequest;
use App\Set;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Cache;

class SetController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(
        	Cache::remember('sets', 120, function() {
        		return Set::where('released_on', '<=', Carbon::today())->get();
        	})
        );
    }
}
