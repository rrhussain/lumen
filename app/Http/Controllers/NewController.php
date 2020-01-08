<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function ExampleFunction()
    {
        # code...
        return 'Hello from new controller and Lumen';
    }

    //
    public function FunctionWithParams(Request $request)
    {
        # code...
        $id = $request->id;
//        return 'Id is '. $id;
        return response()->json(['id' => $id]);
    }
}
