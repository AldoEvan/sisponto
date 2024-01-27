<?php

namespace App\Models\Facade;

use App\Models\User;

class UserDB
{
    public static function getUser($id) {
        $user = User::select('id', 'name', 'email', 'tipo_usuario_id')->where('id', $id)->first();
        return $user;
    }

    public static function getUsers() {
        $users = User::select('id', 'name', 'email', 'tipo_usuario_id')->get();
        return $users;
    }

    public static function validaEmail($email) {
        $getEmail = User::select('email')->where('email', $email)->first();
        return $getEmail;
    }
    
}