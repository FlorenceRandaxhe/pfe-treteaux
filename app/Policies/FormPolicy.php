<?php

namespace App\Policies;

use App\User;
use App\Form;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function view()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }

}
