<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="search" class="input input-bordered" wire:model.live="cari" placeholder="Pencarian">
        <button class="btn btn-primary" wire:click="$dispatch('createJenis')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Jenis undangan</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Jenis undangan</th>
                <th>Keterangan</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr wire:key="{{ $data->id }}">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ Str::words($data->keterangan, 5) }}</td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <button class="btn btn-success btn-xs btn-square"
                                    wire:click="$dispatch('editJenis', {jenis:{{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-error btn-xs btn-square"
                                    wire:click="$dispatch('deleteJenis', {jenis:{{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.jenis.actions')
</div>
