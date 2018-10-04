<?php

namespace App\Http\Controllers;

class DictionaryController extends Controller
{
    public function find()
    {
        $dictionarys = [
            'book' => 'sach',
            'pen' => 'but',
            'helo' => 'xin chao'
        ];

        $name = $_POST['message'];

        $filtered = array_pull($dictionarys, "$name");
        return view('index2', ['key' => $filtered]);
    }

}
