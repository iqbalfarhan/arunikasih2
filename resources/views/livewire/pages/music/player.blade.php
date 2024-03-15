<div>
    <input type="checkbox" class="modal-toggle" @checked($music) />
    <div class="modal" role="dialog">
        @if ($music)
            <div class="modal-box max-w-sm space-y-4">
                <h3 class="font-bold text-lg text-center">PLaying {{ $music->title }}</h3>
                <div class="py-4">
                    <div class="flex flex-col items-center justify-center gap-4">
                        <div @class([
                            'avatar placeholder cursor-pointer',
                            'animate-spin' => $playing,
                        ]) wire:click="togglePlay">
                            <div @class([
                                'w-32 rounded-full bg-base-300 ring ring-offset-base-100 ring-offset-2',
                                'ring-primary' => $playing,
                                'ring-error' => !$playing,
                            ])>
                                @if ($playing)
                                    <x-tabler-music class="icon-12" />
                                @else
                                    <x-tabler-player-play class="icon-12" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-action">
                    <button class="btn" wire:click="resetMusic">Close</button>
                </div>
            </div>
        @endif
    </div>
</div>
