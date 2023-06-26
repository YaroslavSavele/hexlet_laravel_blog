<?php

namespace App\Http\Requests;

use App\Models\Article;
use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $article  = $this->route('article');
        $method = $this->method();
//        dd($this->name);
        return [
            'name' => 'required|unique:articles,name,' . $this->name. ',name',
            'body' => 'required|min:100',
        ];
    }
}
