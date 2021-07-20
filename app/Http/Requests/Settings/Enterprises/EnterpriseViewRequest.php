<?php

namespace App\Http\Requests\Settings\Enterprises;

use App\Exceptions\AppException;
use App\Models\Enterprise;
use Illuminate\Foundation\Http\FormRequest;

use function user;

/**
 * Class EnterpriseCreateRequest.
 *
 * @package App\Http\Requests\Settings\Enterprises
 */
class EnterpriseViewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        /** @var Enterprise $enterprise */
        $enterprise = request()->route('enterprise');

        try {
            return user()->can('settings.enterprise.view.'.$enterprise->id);
        } catch (AppException $appException) {
            return false;
        }
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
