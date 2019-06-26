<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ReportRequest extends FormRequest
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
            'students' => ['required',
                'integer',
                Rule::in([array_sum(Request::only('mark5', 'mark4', 'mark3', 'mark2'))]),],
            'mark5' => ['nullable', 'integer'],
            'mark4' => ['nullable', 'integer'],
            'mark3' => ['nullable', 'integer'],
            'mark2' => ['nullable', 'integer'],
            'name' => ['nullable', 'string'],
            'academic_year' => ['nullable', 'string'],
            'semester' => ['nullable', 'string'],
            'discipline' => ['nullable', 'string'],
            'group' => ['nullable', 'string'],
        ];
    }
}
