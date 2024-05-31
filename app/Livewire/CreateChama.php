<?php

namespace App\Livewire;

use App\Models\Chama;
use App\Models\Session;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateChama extends Component
{
    public $totalsteps  = 4; 
    public $countstep   = 1;
    public $users       = [];

    public $name        = ''; 
    public $location    = 'Mangu, Gatukuyu';
    public $description = '';

    public $savings     = 0;
    public $frequency   = 'weekly';
    public $loans       =   'ngumbato';
    public $interest    =   0;
    public $bank        =   'Equity';
    public $balance     =   0;

    public $role        =   'chairperson';
    public $manager     =   'yes';

    public $user        =   [];

    public function nextstep(){
        $this->validateData();
        $this->countstep++;
        if($this->countstep > $this->totalsteps) return $this->countstep = $this->totalsteps;
    }

    public function prevstep(){
        $this->countstep--;
        if($this->countstep < 1) return $this->countstep = 1;
    }

    public function validateData(){
        if($this->countstep === 1){
            $this->validate([
                'name' => 'required',
                'location' => 'required',
                'description' => 'required',
            ]);
        }

        if($this->countstep === 2){
            $this->validate([
                'savings'   => 'required',
                'frequency' => 'required', 
                'loans'     =>  'required',
                'interest'  =>  'required',
                'bank'      =>  'required',
                'balance'   =>  'required',
            ]);
        }

        if($this->countstep === 3){
            $this->validate([
                'role'      =>  'required',
                'manager'   =>  'required'
            ]);
        }
    }

    public function createChama(){
        $chama = Chama::firstOrCreate(
            ['slug'         =>  Str::of($this->name)->slug()],
            [   
                'title'         =>  $this->name,
                'location'      =>  $this->location,
                'description'   =>  $this->description,
                'monthly_savings'   =>  $this->savings,
                'meeting_frequency' =>  $this->frequency,
                'available_loans'   =>  $this->loans,
                'loan_interest'     =>  $this->interest, 
                'bank_account'      =>  $this->bank,
                'bank_balance'      =>  $this->balance, 
                'member_count'      =>  1,
                'manager'           =>  ($this->manager === 'yes') ? true : false,
            ],
        );

        Session::where('user_id', request()->user()->id)->update([
            'chama_id' => $chama->id,
        ]);

        $chama->members()->firstOrCreate(
            ['connection' => $chama->id + request()->user()->id], 
            [
                'user_id'   => request()->user()->id,
                'chama_id'  => $chama->id,
                'user_role' => $this->role,
            ]
        );

        return redirect(route('chama.index'));
    }

    public function save() {
        $chama = Chama::where('title', $this->name)->get();

        if(empty($chama)) return 'Chama Already Exists';

        if($this->createChama()) $this->redirect(route('chama.index'));
    }

    public function render(){
        return view('livewire.create-chama');
    }
}
