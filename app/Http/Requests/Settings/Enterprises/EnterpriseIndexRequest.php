<?php

namespace App\Http\Requests\Settings\Enterprises;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class EnterpriseCreateRequest.
 *
 * @package App\Http\Requests\Settings\Enterprises
 */
class EnterpriseIndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->user()->can('enterprise.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
