<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('greeting',['name'=>'Carlos']);
});

Route::get('json',function(){
    $usuarios=[['name'=>'Carlos',
             'profesion'=>'Informatico'],
            ['name'=>'Daniel',
             'profesion'=>'Ing. Civil'],
            ['name'=>'Miriam',
             'profesion'=>'Economista'],
            ['name'=>'Marco',
            'profesion'=>'ing.Electronico']
        ];
    //return response()->json($array);
    return view('vista',['name'=>'adimer','usuarios'=>$usuarios]);

});
