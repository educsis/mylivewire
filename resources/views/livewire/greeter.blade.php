<div>
    <form wire:submit="changeGreeting()">
        <div>
            <select wire:model.fill="greeting">
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey">Hey</option>
                <option value="Howdy">Howdy</option>
            </select>
            <br>
            <br>
            <input type="text" wire:model="name">
        </div>
        <br>
        <div>
            @error('name')
            {{ $message }}
            @enderror
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
    @if ($greetingMessage != '')
        <div>
            {{ $greetingMessage }}
        </div>
    @endif
</div>
