<?php
namespace App\Modules\Kantoku\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Config;

class ModuleUpdateRequest extends FormRequest {

	/**
	 * Determine if the user is orderized to make this request.
	 *
	 * @return bool
	 */
	public function orderize()
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
			'slug'						=> 'required|alpha_num',
		];
	}

}