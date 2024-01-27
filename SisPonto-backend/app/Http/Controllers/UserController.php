<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\Facade\UserDB;
use App\Models\Rules\UserRule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = UserDB::getUsers();
            return response()->json($users, 200);
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPostRequest $request)
    {
        $params = (object) $request->validated();
        try {
            UserRule::salvar($params);
            return response()->json(['Sucess' => "Usuario(a) cadastrado(a) com sucesso"], 201);
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $user = UserDB::getUser($id);
            if($user){
                return response()->json($user, 200);
            }else{
                return response()->json(['Erro' => "Usuario(a) não encontrado(a)"], 404);

            }
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, $id)
    {
        $params = (object) $request->validated();
        try {
            UserRule::alterar($id, $params);
            return response()->json(['Sucess' => "Usuario(a) alterado(a) com sucesso"], 202);
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            UserRule::deletar($id);
            return response()->json(['Sucess' => "Usuario(a) excluído com sucesso"], 204);
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }
}
