<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckWordsCout implements Rule
{

    protected $count;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count)
    {
        $this->count=$count;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return str_word_count($value)>=$this->count;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'write more plz !';
    }
}
