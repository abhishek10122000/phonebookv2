<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vcard;
class UserController extends Controller
{
    public function home(){
        $data['contact']=Vcard::all();
        return view('user.home',$data);
    }
}
