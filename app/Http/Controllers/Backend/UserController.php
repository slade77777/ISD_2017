<?php
namespace App\Http\Controllers\Backend;
/**
 * Created by PhpStorm.
 * User: User-pc
 * Date: 25/06/2017
 * Time: 10:13 SA
 */
use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function show()
    {
        return view('backend.dashboard');
    }
}