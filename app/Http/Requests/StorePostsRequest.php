<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostsRequest extends FormRequest
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
            'original'  => ['required_if:link,""', 'file', 'max:3072', 'mimetypes:image/*,video/*,audio/*'],
            'link'      => ['required_if:original,""'],
            'thumb_img' => ['file', 'max:1024', 'mimes:jpeg,jpg,bmp,png']
        ];
    }

    public function messages()
    {
        return [
            'original.required_if' => 'At least we need a file or a link',
            'link.required_if'     => 'We need at least a link or a file.'
        ];
    }
}
