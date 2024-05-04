<?php

namespace App\Livewire;

use App\Events\UserCreated;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Users - Broadcasting Test')]
class UsersDashboard extends Component
{
    #[Validate('required')]
    public $name = '';
    #[Validate('required|email')]
    public $email = '';

    public function createUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt('1234'),
        ]);
        UserCreated::dispatch($user);
        $user->notify(new UserCreatedNotification($user));

        $this->redirectRoute('users');
    }
    
    public function render()
    {
        $users = User::all();
        return view('livewire.users-dashboard', compact('users'));
    }
}
