<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        auth()->logout();

        return redirect('/');
    }
}