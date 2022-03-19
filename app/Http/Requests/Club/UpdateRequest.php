<?php

namespace App\Http\Requests\Club;

use App\Rules\MatchRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'            => ['required', 'string'],
            'played'          => ['required', 'integer'],
            'won'             => ['required', 'integer', new MatchRule($this->request)],
            'drawn'           => ['required', 'integer', new MatchRule($this->request)],
            'lost'            => ['required', 'integer', new MatchRule($this->request)],
            'goal_difference' => ['required', 'numeric'],
        ];
    }
}
