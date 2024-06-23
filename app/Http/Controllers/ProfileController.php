<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values
        $name = "Donal Trump";
        $age = "75";

        // Create an associative array with the required data
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set the cookie
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the response with data and cookie
        return response($data, 200)
            ->cookie('access_token', '123-XYZ', $minutes, $path, $domain, $secure, $httpOnly);
    }
}