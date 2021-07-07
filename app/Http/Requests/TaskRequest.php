<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'taskTitle' => 'required|regex:/(\w.+\s).+/'
        ];
    }

    public function messages()
    {
        return [
            'taskTitle.regex' => 'Enter at least 2 words for task title'
        ];
    }
}
