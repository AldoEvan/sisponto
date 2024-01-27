<?php

namespace App\Models\Rules;

use App\Models\User;

class UserRule
{
    public static function salvar($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo_usuario_id = $request->tipo_usuario_id;
        $user->password = $request->password;
        $user->save();


    }

    public static function alterar($id, $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo_usuario_id = $request->tipo_usuario_id;
        $user->password = $request->password;
        $user->save();
    }

    public static function deletar($id)
    {
        $user = User::find($id);
        $user->delete();
    }

}
