<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    
    }

    public function about()
    {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "This is an about page ...Yes, this is ";
        $author = "Developed by: Tomas Zuleta ";
        return view('home.about')->with("title", $data1)
          ->with("subtitle", $data2)
          ->with("description", $description)
          ->with("author", $author);
    }

    public function contact()
    {
        $data1 = "Contact us - Online Store";
        $data2 = "Contact us";
        $mail="Elzule@nose.com";
        $phone="1236859490";
        return view('home.contact')->with("title", $data1)
          ->with("subtitle", $data2)
          ->with("mail", $mail)
          ->with("phone", $phone);
    }
}





