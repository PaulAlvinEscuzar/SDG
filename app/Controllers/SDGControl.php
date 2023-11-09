<?php

namespace App\Controllers;

class SDGControl extends BaseController
{
    public function sdg1()
    {
        return view("sdgcontent/sdg1");
    }
    public function formsdg3()
    {
        return view("admin/formsdg3");
    }
    public function sdg3()
    {
        return view("sdgcontent/sdg3");
    }
}