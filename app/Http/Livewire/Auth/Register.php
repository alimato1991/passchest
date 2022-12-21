<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Register extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.auth.register');
    }

    /**
     * New account registration
     */
    public function register()
    {
        $newAccount = $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|min:6'
        ]);

        //Hash password
        $newAccount['password'] = bcrypt($newAccount['password']);

        //Create a user
        $user = User::create($newAccount);

        //User login
        auth()->login($user);
        session()->flash('message', 'Account Created Successfully');
        
        return redirect('/');
    }
}
