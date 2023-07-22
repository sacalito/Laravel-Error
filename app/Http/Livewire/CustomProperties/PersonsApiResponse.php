<?php

namespace App\Http\Livewire\CustomProperties;

use Illuminate\Support\Collection;
use Livewire\Wireable;

class PersonsApiResponse implements Wireable
{
    public Collection $items;

    public function __construct
    (
        string $data
    )
    {
        if(! $apiResponse = json_decode($data)) {
            throw new \Exception('invalid string json');
        }

        $this->items = collect($apiResponse);
    }

    public function toLivewire()
    {
        return $this->items;
    }

    public static function fromLivewire($value)
    {
        return new static(json_encode($value));
    }
}
