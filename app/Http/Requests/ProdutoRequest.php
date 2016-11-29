<?php

namespace Estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'descricao' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute é obrigatório!',
            'numeric' => ':attribute deve ser numérico!'
        ];
    }
}
