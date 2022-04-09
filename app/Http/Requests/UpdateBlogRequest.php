<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            "title"             => "required|unique:blogs,title,". $this->route('blog'),
            "category_id"       => "required|exists:categories,id",
            "tags"              => "nullable|array",
            "tags.*"            => "exists:tags,id|distinct",
            "slug"              => "required|unique:blogs,slug,". $this->route('blog'),
            "cononical"         => "nullable|unique:blogs,cononical,". $this->route('blog'),
            "meta_description"  => "nullable|unique:blogs,meta_description,". $this->route('blog'),
            "description"       => "required|string|unique:blogs,description,". $this->route('blog'),
            "is_published"      => "nullable"
        ];
    }

}
