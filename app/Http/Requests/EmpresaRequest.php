<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmpresaRequest extends FormRequest
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
            'type' => $this->validType(),
            'name' => ['required', 'max:255'],
            'enterprise' => ['max:255'],
            'document'=> $this->validacaoDocument(),
            'contact_name' => ['required', 'max:255'],
            'cel_phone'=> ['required', 'size:11'],
            'email'=> ['required', 'email'],
            'phone' => ['size:11'],
            'cep'=> ['required', 'size:8'],
            'address'=> ['required', 'max:255'],
            'quarter' => ['required', 'max:50'],
            'city'=> ['required', 'max:52'],
            'state'=> ['required','size:2'],
            
        ];
    }

    public function validationData()
    {
        $campos = $this->all();

        $campos['document'] = str_replace(['.','-','/'], '', $campos['document']);
        $campos['cel_phone'] = str_replace(['','(',')','-'], '', $campos['cel_phone']);
        $campos['phone'] = str_replace(['.','-','/'], '', $campos['phone']);
        $campos['cep'] = str_replace(['-'], '', $campos['cep']);
        $this->replace($campos);

        return $campos;

    }

    private function validacaoDocument(){
        if(strlen($this->document) === 11)
        {
            return ['cpf'];
        }
        return ['cnpj'];
    }

    private function validType(){

        if($this->method() === "PUT"){
           return [];
        }
        return ['required', Rule::in(['cliente', 'fornecedor'])];
    }
}
