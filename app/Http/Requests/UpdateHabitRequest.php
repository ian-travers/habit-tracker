<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHabitRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'times_per_day' => 'required'
        ];
    }
}
