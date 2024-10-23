<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool //Metodo que se utiliza para validar que un usuario sea autorizado
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array //Aqui van todas las reglas de validacion que queremos verificar
    {
        return [
            'title' => ['required','min:5','max:80'],
            'slug' => 'required|unique:posts',
            'categoria' => 'required',
            'content' => 'required',
        ];
    }

    /* public function messages()
    {
        return [
            'title.required' => 'The :attribute field is required. (edited)',
            'slug.required' => 'The slug field is required. (edited)',
            'categoria.required' => 'The categoria field is required. (edited)',
            'content.required' => 'The content field is required. (edited)',
        ];
    } */

    /* public function attributes()
    {
        return[
            'title'=> 'name'
        ];
    } */
}
