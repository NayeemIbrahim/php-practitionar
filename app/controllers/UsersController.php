<?php

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        //$task = $query->selectAll('todos');

        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [

            'name' => $_POST['name']
        
        ]);
        
        header('Location: /users');
    }
}