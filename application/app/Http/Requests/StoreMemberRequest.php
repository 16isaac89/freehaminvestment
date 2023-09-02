<?php

namespace App\Http\Requests;

use App\Models\Member;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMemberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('member_create');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'second_name' => [
                'string',
                'required',
            ],
            // 'freham' => [
            //     'string',
            //     'required',
            // ],
            'phone_1' => [
                'string',
                'required',
            ],
            'phone_2' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
