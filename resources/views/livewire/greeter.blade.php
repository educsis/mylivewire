<div>
    <form wire:submit="changeName()">
        <div>
            <select wire:model="greeting">
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey">Hey</option>
                <option value="Howdy">Howdy</option>
            </select>
            <br>
            <br>
            <input type="text" wire:model="name">
        </div>

        <br><br>

        <div class="mt-2">
            <button type="submit">
                Greet me
            </button>
        </div>
    </form>
    <br>
    <br>
    @if ($name != '')
    <div>
        {{ $greeting }}, {{ $name }} !!!
    </div>
    @endif
</div>
