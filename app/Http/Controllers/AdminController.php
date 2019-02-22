<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $book=Booking::count();
        return view('admin.home.index',compact('book'));
    }
}
