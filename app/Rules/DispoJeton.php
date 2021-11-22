<?php

namespace App\Rules;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class DispoJeton implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $jeton = DB::select('SELECT * FROM banquejeton WHERE jeton = ?', [$value]);
        if(!empty($jeton) && $jeton[0]->etat === 1) {
            DB::delete('DELETE FROM banquejeton WHERE jeton = ?', [$jeton[0]->jeton]);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Jeton non valide';
    }
}
