<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="search" class="input input-bordered" wire:model.live="cari" placeholder="Pencarian">
        <button class="btn btn-primary" wire:click="$dispatch('createUser')">
            <x-tabler-circle-plus class="icon-5" />
            <span>User</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama client</th>
                <th>Email client</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr wire:key="{{ $data->id }}">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <button class="btn btn-success btn-xs btn-square"
                                    wire:click="$dispatch('editUser', {user:{{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-error btn-xs btn-square"
                                    wire:click="$dispatch('deleteUser', {user:{{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.user.actions')
</div>
