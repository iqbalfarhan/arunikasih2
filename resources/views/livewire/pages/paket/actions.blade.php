<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-6" wire:submit="simpan">
            <h3 class="divider">Form paket undangan</h3>
            <div class=" space-y-2">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Jenis undangan</span>
                    </label>
                    <select type="text" class="select select-bordered" wire:model="form.jenis_id">
                        <option value="">Pilih jenis undangan</option>
                        @foreach ($jenises as $jnsid => $jns)
                            <option value="{{ $jnsid }}">{{ $jns }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama paket undangan</span>
                    </label>
                    <input type="text" class="input input-bordered" placeholder="Nama paket undangan"
                        wire:model="form.name">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Harga paket</span>
                    </label>
                    <input type="number" class="input input-bordered" placeholder="Nama paket undangan"
                        wire:model="form.harga">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Keterangan paket</span>
                    </label>
                    <textarea type="text" class="textarea textarea-bordered" placeholder="Nama paket undangan"
                        wire:model="form.keterangan"></textarea>
                </div>
            </div>
            <div class="modal-action justify-between">
                <button type="button" class="btn" wire:click="closeModal">
                    <span>Close</span>
                </button>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
