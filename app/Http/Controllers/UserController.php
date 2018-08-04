<?php

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->region = trans('region.global');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $data = [
            'serviceName' => trans('service.home'),
            'region' => $this->region,
        ];

        if ($user->isAdmin()) {
            return view('pages.admin.home')->with($data);
        }

        return view('pages.user.home')->with($data);
    }
}
