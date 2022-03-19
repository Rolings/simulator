<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class MatchRule implements Rule
{
    /**
     * @var array
     */
    protected array $request;

    /**
     * Create a new rule instance.
     *
     * @param Request $request
     * @param string $field
     */
    public function __construct($request)
    {
        $this->request = $request->all();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->request['played'] < $this->request['won'] + $this->request['drawn'] + $this->request['lost']) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Fields won, drawn and lost should be smaller played';
    }
}
