<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\Vcard;

class AdminController extends Controller
{
    public function dashboard(){
        $data['user']=User::All()->count();
        $data['vcard']=Vcard::All()->count();
        return view('admin.dashboard',$data);
    }
}
