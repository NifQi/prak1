<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home_1461900124');
    }
    public function article()
    {
        return view('article_1461900124');
    }
    public function contactus()
    {
        return view('contactus_1461900124');
    }


}