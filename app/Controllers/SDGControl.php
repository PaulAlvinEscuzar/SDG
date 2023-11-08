<?php

namespace App\Controllers;

class SDGControl extends BaseController
{
    public function sdg1()
    {
        return view("sdgcontent/sdg1");
    }
    public function health_wellbeing_form()
    {
        return view("admin/health_wellbeing_form");
    }
    public function sdg3()
    {
        return view("sdgcontent/sdg3");
    }
}