<?php

namespace App\Http\Requests;

use App\Traits\Api\ApiRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

class ImageUploadReqeust extends FormRequest
{
    use ApiRequestTrait;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
