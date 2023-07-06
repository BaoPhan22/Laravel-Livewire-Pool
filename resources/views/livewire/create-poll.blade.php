<div>
    <form wire:submit.prevent='createPoll'>
        <label class="font-bold">Poll Title</label>
        <input type="text" wire:model='title'>

        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4 mt-4 flex flex-row-reverse">
            <button class="btn" wire:click.prevent='addOption'>Add Option</button>
        </div>

        <div class="">
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <div class="mb-4">
                        <label class="font-bold">Option {{ $index + 1 }}</label>
                        <div class="flex gap-2">
                            <input type="text" wire:model='options.{{ $index }}'>
                            <button class="btn"
                                wire:click.prevent='removeOption({{ $index }})'>Remove</button>
                        </div>
                        @error("options.{$index}")
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn my-3 px-3 py-3 w-full bg-blue-500">Create Poll</button>
    </form>
</div>
