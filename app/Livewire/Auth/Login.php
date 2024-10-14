<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    #[Title('Login page')]
    #[Layout('components.layouts.auth')]

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    protected $messages = [
        'username.required' => 'username wajib diisi',
        'password.required' => 'Password wajib diisi',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        // Validasi input
        $this->validate();

        // Logika login
        if (Auth::attempt($this->only('username', 'password'))) {
            return $this->redirect('/backend/dashboard', navigate: true);
        } else {
            // Jika autentikasi gagal, lemparkan exception
            throw ValidationException::withMessages([
                'username' => 'Username atau password salah',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
