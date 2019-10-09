<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfile extends FormRequest
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
        if($this->get('action') == 'profile')
        {
            return [
                'name'          =>  'sometimes|min:5',
                'image'         =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
            ];
        }elseif($this->get('action') == 'details')
        {
            return [
                'address'   =>  'required|min:5|max:191',
                'about'     =>  'required|min:5'
            ];
        }
        
    }
}
