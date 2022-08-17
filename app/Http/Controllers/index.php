<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function index()
    {
        // get data from api 
        $data = file_get_contents('http://smart-waris.test/api/nilaikedua');
        $data = json_decode($data, true);
        // return data to view
        return view(
            'index',
            [
                'data' => $data
            ]
        );

        return view('index');
    }
}
