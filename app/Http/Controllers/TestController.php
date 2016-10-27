<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
      $a='holle';
      $b='world';
      $c=[1,2,3];
      return view('a')->withBvar($c);
    }

    public function getjson() {
      $d=file_get_contents('default/a.json');
      $e=json_decode($d);
      var_dump($e);
      $f=json_decode($d,'ture');
      var_dump($f);


  }
}
