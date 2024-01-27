<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ColaboradorPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = JWTAuth::parseToken()->authenticate();
        if($user){
            return true;
        } else {
            return false;
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [          
            'nome' => 'bail|required|string|regex:/^[[:alpha:]\s]+$/u',
            'cpf' => 'required|string|size:11', 
            'matricula' => 'required|integer', 
            'ativo' => 'nullable|boolean', 
            'data_nascimento' => 'required|date', 
            'data_admissao' => 'required|date', 
            'cargo_id' => 'required|integer', 
            'funcao_id' => 'required|integer', 
            'data_recissao' => 'nullable|date', 
            'email' => 'required|email', 
            'telefone' => 'required|integer', 
            'segunda_entrada1' => 'nullable|date_format:H:i:s', 
            'segunda_saida1' => 'nullable|date_format:H:i:s', 
            'segunda_entrada2' => 'nullable|date_format:H:i:s', 
            'segunda_saida2' => 'nullable|date_format:H:i:s',
            'terca_entrada1' => 'nullable|date_format:H:i:s', 
            'terca_saida1' => 'nullable|date_format:H:i:s', 
            'terca_entrada2' => 'nullable|date_format:H:i:s', 
            'terca_saida2' => 'nullable|date_format:H:i:s',
            'quarta_entrada1' => 'nullable|date_format:H:i:s', 
            'quarta_saida1' => 'nullable|date_format:H:i:s', 
            'quarta_entrada2' => 'nullable|date_format:H:i:s', 
            'quarta_saida2' => 'nullable|date_format:H:i:s',  
            'quinta_entrada1' => 'nullable|date_format:H:i:s', 
            'quinta_saida1' => 'nullable|date_format:H:i:s', 
            'quinta_entrada2' => 'nullable|date_format:H:i:s', 
            'quinta_saida2' => 'nullable|date_format:H:i:s', 
            'sexta_entrada1' => 'nullable|date_format:H:i:s', 
            'sexta_saida1' => 'nullable|date_format:H:i:s', 
            'sexta_entrada2' => 'nullable|date_format:H:i:s', 
            'sexta_saida2' => 'nullable|date_format:H:i:s', 
            'sabado_entrada1' => 'nullable|date_format:H:i:s', 
            'sabado_saida1' => 'nullable|date_format:H:i:s', 
            'sabado_entrada2' => 'nullable|date_format:H:i:s', 
            'sabado_saida2' => 'nullable|date_format:H:i:s', 
            'domingo_entrada1' => 'nullable|date_format:H:i:s', 
            'domingo_saida1' => 'nullable|date_format:H:i:s', 
            'domingo_entrada2' => 'nullable|date_format:H:i:s', 
            'domingo_saida2' => 'nullable|date_format:H:i:s' 

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome do desconto obrigatorio',
            'processo_inicio.required' => 'Data do incio do processo é obrigatorio',
            'processo_fim.required' => 'Data do fim do processo é obrigatorio',
            'inscricao_inicio.required' => 'Data do incio da inscrição é obrigatorio',
            'inscricao_fim.required' => 'Data do incio da inscrição é obrigatorio',
            'ativo.required' => 'Ativação ou não ativação da fase de matrícula no presente momento é obrigatorio'





        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
