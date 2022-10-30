<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    //
    public function index()
    {
        // return 'yahahahaha';
        // get data from api 
        $data = [
            "nama" => "stunggal",
            "email" => "asd.com",
            "nilai" => [
                "uas" => 90,
                "uts" => 80
            ]
        ];
        // $data = json_decode($data, true);
        // return data to view
        return response()->json($data);
        return view(
            'index',
            [
                'data' => $data
            ]
        );

        return view('index');
    }
}
