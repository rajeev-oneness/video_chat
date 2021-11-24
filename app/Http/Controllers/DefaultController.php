<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function check_credential(Request $req)
    {
        $this->logout($req);
        return redirect(route('login'))->withInput($req->all());
    }

    public function logout(Request $request)
    {
        auth()->guard()->logout();
        $request->session()->invalidate();
    }
}
