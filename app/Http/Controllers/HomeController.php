<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        echo "Index Function";
    }

    public function test()
    {
        return view('home.test');
    }

    public function parameter($id,$id2)
    {

      //   echo "Parameter 1:", $id;
      //   echo "<br>Parameter 2:", $id2;
      //   echo "<br>Sum Parameters:", $id+$id2;

         return view('home.test2',
         [
             'id' => $id,
             'id2' => $id2

         ]
         );

    }

    public function save()
    {
        echo "Save Function<br>";
        echo "<br>";
        echo "Name :",$_REQUEST["fname"];
        echo "<br>Last Name :",$_REQUEST["lname"];

    }




}
