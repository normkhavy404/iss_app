<div>
    <div class="p-5">
        <br>
    Role : <input type="text" wire:model="role_name">
        <button type="submit" wire:click="save" class="px-5 py-2 border border-blue-500">Save</button>
    <br>
    @foreach($permissions as $per)
        <input type="checkbox" value="{{$per->id}}" wire:model="pers">
            {{ ucwords(str_replace('_', ' ', $per->title)) }} <br>
    @endforeach
    </div>

    <ul>
        @foreach($roles as $ro)
        <li>
            <span wire:click="edit({{$ro->id}})" class="underline text-blue-500 cursor-pointer">{{ $ro->title }}</span>
            (
                @foreach($ro->permissions as $ps)
                    {{ ucwords(str_replace('_', ' ', $ps->title)) }},
                @endforeach
            )
        </li>
        @endforeach
    </ul>

</div>
