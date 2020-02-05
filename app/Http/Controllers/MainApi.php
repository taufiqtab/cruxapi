<?php

namespace App\Http\Controllers;

class MainApi extends Controller
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

    public function show()
    {
        $data = array();
        $data[0]['nama'] = "opik";
        $data[0]['umur'] = 10;
        $data[1]['nama'] = "opet";
        $data[1]['umur'] = 12;

        return response()->json($data);
    }

    //
}
