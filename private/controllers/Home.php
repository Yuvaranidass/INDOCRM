<?php

/**
 * Home Controller
 */

class Home extends Controller
{
    function index()
    {
        $user = new User();
        // $data = $user->findAll();
        $this->views('home');
    }
}
