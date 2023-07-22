<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            @foreach ($apiResponse->items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->lastName}}</td>
                </tr>
            @endforeach
        </tr>
    </table>
    <br><br>
    <button type="button" wire:click="fakeRequest">Click Me to fake a Livewire Request</button>
</div>
