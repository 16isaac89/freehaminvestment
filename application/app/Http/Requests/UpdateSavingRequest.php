<?php

namespace App\Http\Requests;

use App\Models\Saving;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSavingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('saving_edit');
    }

    public function rules()
    {
        return [
            'target_amount' => [
                'required',
            ],
            'from_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'to_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'amount_saved' => [
                'required',
            ],
            'balance' => [
                'string',
                'required',
            ],
        ];
    }
}
