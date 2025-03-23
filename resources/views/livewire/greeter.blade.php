<div>
    <div>
        Hello {{ $name }}
    </div>

    <div>
        <input type="text" id="newName">
    </div>

    <div class="mt-2">
        <button wire:click="changeName(document.querySelector('#newName').value)">
            Greet me
        </button>
    </div>
</div>
