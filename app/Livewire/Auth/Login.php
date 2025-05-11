<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;
    public $error = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    protected $messages = [
        'email.required' => 'Please enter your email address',
        'email.email' => 'Please enter a valid email address',
        'password.required' => 'Please enter your password',
        'password.min' => 'Password must be at least 8 characters',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->intended(route('home'));
        } else {
            $this->error = 'Invalid email or password';
            $this->password = '';
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('livewire.layouts.auth-layout');
    }
}
