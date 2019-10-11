<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    protected $rules = [
        'POST' => [ 
            'title'             =>  'required|min:4|max:90',
            'body'              =>  'required|min:4',
            'featured_image'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
        ],
        'PUT' => [
            'title'             =>  'required|min:4|max:90',
            'body'              =>  'required|min:4',
            'featured_image'    =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
        ],
        'PATCH' => [
            'title'             =>  'required|min:4|max:90',
            'body'              =>  'required|min:4',
            'featured_image'    =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
        ],
        'DELETE' => []
    ];

    protected $methods = [
        'POST', 'PUT', 'DELETE'
    ];
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
        foreach($this->methods as $method)
        {
            if($this->method() == $method)
            {
                return $this->rules[$method];
            }
        }
    }
}
