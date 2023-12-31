<?php

namespace App\Http\Requests;

use App\Models\Share;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreShareRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('share_create');
    }

    public function rules()
    {
        return [
            'quantity' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
