<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view ('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data['judul'] = 'Dashboard';
        $data['class'] = 'home';
        $data['subclass'] = 'home';
        return view('admin/home', $data);
    }

    public function userHome()
    {
        $data['judul'] = 'Dashboard';
        $data['class'] = 'home';
        $data['subclass'] = 'home';
        return view('user/home', $data);
    }

    public function calendarRepeat()
    {
        $data['judul'] = 'Calendar Reminder';
        $data['class'] = 'calendar';
        $data['subclass'] = 'calendar';
        return view('user.repeat.calendar', $data);
    }

    public function Repeat()
    {
        $data['judul'] = 'Repeat';
        $data['class'] = 'repeat';
        $data['subclass'] = 'repeat';
        return view('user.repeat.index', $data);
    }

    public function create()
    {
        $data['judul'] = 'Buat Repeat';
        $data['class'] = 'repeat';
        $data['subclass'] = 'repeat';
        return view('user.repeat.create', $data);
    }

    public function edit()
    {
        $data['judul'] = 'Edit Repeat';
        $data['class'] = 'repeat';
        $data['subclass'] = 'repeat';
        return view('user.repeat.edit', $data);
    }
}
