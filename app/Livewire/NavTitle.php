<?php

namespace App\Livewire;

use App\Models\Chama;
use App\Models\Session;
use Livewire\Component;

class NavTitle extends Component
{
    public $title;

    public function __construct()
    {
        $session = Session::where('user_id', request()->user()->id)->first();
        $chama   = Chama::where('id', $session->chama_id)->first();
        empty($chama) ? $this->title = 'Create a Chama to Continue' :$this->title = $chama->title;
    }

    public function render()
    {
        return view('livewire.nav-title');
    }
}
