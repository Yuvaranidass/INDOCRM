<?php

/**
 * Signup Controller
 */

class Signup extends Controller
{
    function index()
    {
        $mode = isset($_GET['mode']) ? $_GET['mode'] : '';
        $errors = array();
        if (count($_POST) > 0) {
            $user = new User();
            if ($user->validate($_POST)) {
                $_POST['date'] = date("Y-m-d H:i:s");
                $user->insert($_POST);
                $redirect = $mode == 'students' ? 'students' : 'users';
                $this->redirect($redirect);
            } else {
                //error
                $errors = $user->errors;
            }
        }

        $mode = isset($_GET['mode']) ? $_GET['mode'] : '';
        $this->views('signup', [
            'errors' => $errors,
            'mode' => $mode,
        ]);
    }
}
