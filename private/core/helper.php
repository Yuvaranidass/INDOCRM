<?php

function get_var($key, $default = "")
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return $default;
}
function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }
    return "";
}

function esc($var)
{
    return htmlspecialchars($var);
}

function random_str($len)
{
    $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $text = "";

    for ($i = 0; $i < $len; $i++) {
        $random = rand(0, 61);
        $text .= $arr[$random];
    }

    return $text;
}


function get_date($data)
{
    return date("jS M, Y", strtotime($data));
}

function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function get_image($image, $gender = 'Male')
{
    if (!file_exists($image)) {
        $image = ASSETS . '/female.png';
        if ($gender == 'Male') {
            $image = ASSETS . '/male.png';
        }

        return $image;
    }
}

function views_path($view)
{
    if (file_exists("../private/views/" . $view . ".view.php")) {
        require("../private/views/" . $view . ".view.php");
    } else {
        require("../private/views/404.view.php");
    }
}
