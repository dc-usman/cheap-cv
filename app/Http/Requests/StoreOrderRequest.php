<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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

            'name'              => 'required|regex:/^[A-Za-z -]+$/|max:255',
            "email"             => "required",
            'phone'             => 'required|regex:/^[+][0-9]/|min:12',
            'carrer_level'      => 'required',
            "select_service"    => 'required',
            "deadline_id"       => 'required',
            "detail"            => "required|string",
            'emailAttachments.*'=> 'required|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',

        ];

        // {
        //     "carrer_level": "3",
        //     "select_services": "1",
        //     "deadline_id": "11",
        //     "name": "Demetria Fox",
        //     "email": "nygeco@mailinator.com",
        //     "phone": "+1 (533) 936-8227",
        //     "detail": "Quos qui nulla incid",
        //     "updated_at": "2022-03-24T05:12:45.000000Z",
        //     "created_at": "2022-03-24T05:12:45.000000Z",
        //     "id": 6
        //     }
    }
}
