<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;

class PostRequest extends Request
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
            "id"=>'required|int',
            "userid"=>'required|int',
            "title"=>'required|max:255',
            "status"=>'required|in:publish,draft,inherit',
            "slug"=>'required|string|max:100',
            'type'=>'required|in:article,page,attachment',
            'mime_type'=>'required|max:50'
        ];
    }
}
