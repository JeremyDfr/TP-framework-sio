<?php
namespace Controllers;

use Models\Users;
use Source\Renderer;

class HomeController
{
    public function index(): Renderer
    {
        $usersModel = new Users();
        $users = $usersModel->all();

        return Renderer::make("home/index", compact('users'));
    }

    public function usersAPI() {
        $usersModel = new Users();
        $users = $usersModel->all();

        return json_encode($users);
    }
}