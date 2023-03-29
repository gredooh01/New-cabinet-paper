<?php

namespace App\Http\Requests;

use App\Models\CabinetPaper;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCabinetPaperRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cabinet_paper_create');
    }

    public function rules()
    {
        return [
            'cabinet_type' => [
                'required',
            ],
            'cabinet_num' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'issue_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'dispatch_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'archive_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'cabinet_title' => [
                'string',
                'required',
            ],
            'cabinet_ministry' => [
                'string',
                'required',
            ],
        ];
    }
}
