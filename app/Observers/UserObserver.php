<?php

namespace App\Observers;

use App\Domain\Experience\Commands\DeleteUser;
use App\Models\User;

class UserObserver
{
    public function deleting(User $user): void
    {
        command(DeleteUser::forUser($user));

        $user->licenses()->delete();
        $user->purchases()->delete();
        $user->assignments()->delete();
    }
}
