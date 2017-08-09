<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CursosCrudRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|min:5|max:255',
            'descripcion' => 'required|min:10|max:1000',
            'objetivos' => 'min:10|max:1000',
            'plan_estudio' => 'min:10|max:1000',
        ];
    }

}