<?php

namespace App\Http\Requests\Settings\Enterprises;

use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

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
        $enterprise = $this->getEnterprise();

        return $this->user()->can('settings.enterprise.view.'.$enterprise->id);
    }

    /**
     * @return Enterprise
     */
    private function getEnterprise(): Enterprise
    {
        if (request()->routeIs('enterprise.me')) {
            return $this->user()->enterprise;
        }

        return request()->route('enterprise');
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
