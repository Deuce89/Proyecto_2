<?php
/**
 * Created by PhpStorm.
 * User: zebaz
 * Date: 27/10/2019
 * Time: 16:17
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test(){
        dd("hoalaaa");
        $users = DB::select('select * from usuario');
        var_dump($users);

        return view('welcome');
    }
}