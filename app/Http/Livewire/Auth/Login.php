<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $signIn = [
        'email' => '',
        'password' => ''
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    /**
     * Authenticate user
     */
    public function signIn()
    {
        $this->validate([
            'signIn.email' => 'required|email',
            'signIn.password' => 'required'
        ]);

        Auth::attempt($this->signIn);

        session()->flash('message', 'Welcome back!');
        return redirect('/');
    }
}
