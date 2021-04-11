<?php

namespace App\Controller;

class WelcomeController extends BaseController
{
    public function index()
    {
        return response('Thanks for developing with Loopless framework');
    }
}