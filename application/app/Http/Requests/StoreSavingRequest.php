<?php

namespace App\Http\Requests;

use App\Models\Saving;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSavingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('saving_create');
    }

    public function rules()
    {
        return [
            'target_amount' => [
                'required',
            ],
            'amount_saved' => [
                'required',
            ],

        ];
    }
}
