<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119045',
            'Nama' => 'Candrika Bagus D',
            'Gender' => 'Pria',
            'Phone' => '0853325339833',
            'Class' => 'XII RPL 2'
        ]);
 }
}
