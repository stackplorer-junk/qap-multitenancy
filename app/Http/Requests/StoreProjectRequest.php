<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'min:5',
                'max:50',
                'required',
            ],
            'description' => [
                'string',
                'max:200',
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
