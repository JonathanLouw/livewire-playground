<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class DeferExample extends Component
{
    public bool $load = false;

    public function loadArticles(): void
    {
        $this->load = true;
    }

    public function render()
    {
        return view('livewire.defer-example', [
            'users' => $this->load
                ? User::query()->inRandomOrder()->limit(5)->get()
                : collect(),
        ]);
    }
}
