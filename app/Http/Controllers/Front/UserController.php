<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName() {
        return "Abdullah Magdy";
    }

    public function getIndex() {
           /*$obj = new \stdClass();
           $obj->name='abdullah';
           $obj->age=22;
           $obj->gender='male'; */


           $data = ['ahmed','dodo',];

            return view('welcome',compact('data'));
    }
}
