<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component{

    public $collection;

    public function mount(){
        $apiResponse = json_decode('[{"name":"john","lastName":"smith"},{"name":"carl","lastName":"turner"},{"name":"will","lastName":"Samos"},{"name":"janet","lastName":"paul"}]');
        $this->collection = collect($apiResponse);
    }

    public function fakeRequest(){}
    public function render(){
        return view('livewire.index');
    }
}
