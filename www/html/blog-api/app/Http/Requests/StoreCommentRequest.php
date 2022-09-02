<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
		return [
			'post_id' => 'required|integer',
			'user_id' => 'required|integer',
			'body' => 'required',
		];
    }

	public function messages()
	{
		return [
			'post_id.required' => 'post_id is required',
			'post_id.integer' => 'post_id must be numeric data',
			'user_id.required' => 'user_id is required',
			'user_id.integer' => 'user_id must be numeric data',
			'body.required' => 'body is required',
		];
	}

}
