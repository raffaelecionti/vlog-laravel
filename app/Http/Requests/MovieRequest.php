<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|min:3',
            'director' =>'required',
            'year'=> 'required|numeric',
            'plot' => 'required|min:5',
            'img' => 'required|image',
        ];
    }
    public function messagges(){
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.min' => 'il titolo richiede più di 3 caratteri',
            'director.required' => 'il regista è obbligatorio',
            'year.required' => 'l\'anno è obbligatorio',
            'year.numeric' => 'l\'anno deve essere un numero',
            'plot.required' => 'la trama è obbligatorio',
            'plot.min' => 'la trama richiede più di 5 caratteri',
            'img.required' => 'l\'immagine è obbligatoria',
            'img.image' => 'l\'immagine deve essere un file immagine'
        ];
    }
}
