<?php

namespace App\Http\Controllers\enso\core\Administration\User;

use Illuminate\Routing\Controller;
use LaravelEnso\Core\Models\User;

class Token extends Controller
{
    public function __invoke(User $user)
    {
        return ['token' => $user->createToken('api')->plainTextToken];
    }
}
