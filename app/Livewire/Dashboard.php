<?php

namespace App\Livewire;

use App\Services\UserStatics;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard - Broadcasting Test')]
class Dashboard extends Component
{

    #[On('echo:users,UserCreated')]
    public function updateCount()
    {
        $this->render();
    }

    public function render()
    {
        $notificationsData = UserStatics::notificationsData();
        $count = $notificationsData[1];
        $notifications = $notificationsData[0];
        return view('livewire.dashboard', compact('count', 'notifications'));
    }
}
