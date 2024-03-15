<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="text" class="input input-bordered" placeholder="Pencarian">
        <button class="btn btn-primary" wire:click="$dispatch('createMusic')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah music</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Filename</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->filename }}</td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <button class="btn btn-primary btn-square btn-xs"
                                    wire:click="$dispatch('playMusic', {music:{{ $data->id }}})">
                                    <x-tabler-player-play class="icon-4" />
                                </button>
                                <button class="btn btn-success btn-square btn-xs"
                                    wire:click="$dispatch('editMusic', {music:{{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-error btn-square btn-xs"
                                    wire:click="$dispatch('deleteMusic', {music:{{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%">
                            @livewire('partial.nocontent')
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @livewire('pages.music.player')
    @livewire('pages.music.actions')
</div>
