<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-6" wire:submit="simpan">
            <h3 class="divider">Form jenis undangan</h3>
            <div class="">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama jenis undangan</span>
                    </label>
                    <input type="text" class="input input-bordered" placeholder="Nama jenis undangan"
                        wire:model="form.name">
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
