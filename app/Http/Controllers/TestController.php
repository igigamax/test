<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

class TestController extends Controller
{
    //
    public function firstFunction(Request $request)
    {
        $id =  $request->id;
        $result = DB::table('user')
            ->where('id', $id)
            ->get()
            ->toArray();
        return response()->json($result);
    }
}
