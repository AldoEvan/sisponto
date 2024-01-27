<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserPostRequest extends FormRequest
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
            'name' => 'bail|required|string',
            'email' => 'required|email|unique:App\Models\User,email',
            'tipo_usuario_id' => 'integer|required',
            'password' => 'required'
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome do desconto obrigatorio',
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
