<?php

class PagesController
{

    public function home()
    {
        return view('index');
    }


    public function about()
    {
        $company = "Nayeem";

        return view('about', ['company' => $company]);
    }


    public function contact()
    {
        return view('contact');
    }

    public function aboutCulture()
    {
        return view('aboutCulture');
    }
}
