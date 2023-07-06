<div>
    @forelse ($polls as $poll)
        <div class="mb-4 border-2 p-2">
            <h3 class="mb-4 text-xl text-center">
                {{ $poll->title }}
            </h3>
            @foreach ($poll->options as $option)
                <div class="mb-2 flex items-center">
                    <div class="flex-none h-full leading-normal">
                        {{ $option->name }} ({{ $option->votes->count() }})
                    </div>
                    <div class="grow border-dotted border-b-2    h-full">
                        &nbsp;
                    </div>
                    <div class="flex-none">
                        <button class="btn" wire:click='vote({{ $option->id }})'>Vote</button>
                    </div>
                </div>
            @endforeach
        </div>
    @empty
        <div class="text-gray-500">No polls available</div>
    @endforelse
</div>
