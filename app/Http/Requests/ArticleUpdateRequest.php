<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'id' => 'required|exists:categories,id',
            'name' => 'required|unique:categories,nom',
            'categorie' => 'required|exists:categories,id',
        ];
    }
    public function messages()
    {
        return [
            'id.exists' => 'Identifiant non retrouvé !',
            'categorie.required' => 'Champ obligatoire',
            'categorie.exists' => 'Catégorie introuvable',
            'name.unique' => 'Ce nom existe déjà !',
            'name.required' => 'Champ obligatoire !',
        ];
    }
}