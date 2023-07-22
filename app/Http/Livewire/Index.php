<?php

namespace App\Http\Livewire;

use App\Http\Livewire\CustomProperties\PersonsApiResponse;
use Livewire\Component;

class Index extends Component{

    public PersonsApiResponse $apiResponse;

    public function mount(){
        $apiResponse = '[{"name":"john","lastName":"smith"},{"name":"carl","lastName":"turner"},{"name":"will","lastName":"Samos"},{"name":"janet","lastName":"paul"}]';


        $this->apiResponse = new PersonsApiResponse($apiResponse);
    }

    public function fakeRequest(){}
    public function render(){
        return view('livewire.index');
    }
}
