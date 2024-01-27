<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColaboradorPostRequest;
use App\Models\Entity\Colaborador;
use App\Models\Facade\ColaboradorDB;
use App\Models\Rules\ColaboradorRule;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   try {
        $colaboradores = ColaboradorDB::getColaboradores();
        return response()->json($colaboradores, 200);
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
    public function store(ColaboradorPostRequest $request)
    {
        $params = (object) $request->validated();
        $validaCPF = ColaboradorDB::getCpf($params->cpf);
        try {
            if(!$validaCPF){
                ColaboradorRule::salvar($params);
                return response()->json(['Sucess' => "Colaborador(a) cadastrado(a) com sucesso"], 201);
            } else {
                return response()->json(['Erro' => "CPF já cadastrado"], 202);
            }
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
            $colaborador = ColaboradorDB::getColaborador($id);
            if($colaborador){
                return response()->json($colaborador, 200);
            }else{
                return response()->json(['Erro' => "Colaborador(a) não encontrado(a)"], 404);

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
    public function update(ColaboradorPostRequest $request, $id)
    {
        $params = (object) $request->validated();
        try {
            ColaboradorRule::alterar($id, $params);
            return response()->json(['Sucess' => "Colaborador(a) alterado(a) com sucesso"], 202);
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
            ColaboradorRule::deletar($id);
            return response()->json(['Sucess' => "Colaborador(a) excluído com sucesso"], 204);
        } catch (\Exception $ex) {
            return response()->json(['Erro' => $ex->getMessage()], 400);
        }
    }
}
