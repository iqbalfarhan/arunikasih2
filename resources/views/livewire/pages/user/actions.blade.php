<div>
    <input type="checkbox" id="my_modal_6" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-6" wire:submit="simpan">
            <h3 class="divider">Form user undangan</h3>
            <div class=" space-y-2">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama user</span>
                    </label>
                    <input type="text" class="input input-bordered" placeholder="Nama user" wire:model="form.name">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Harga user</span>
                    </label>
                    <input type="email" class="input input-bordered" placeholder="Email address"
                        wire:model="form.email">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="number" class="input input-bordered" placeholder="Password"
                        wire:model="form.password">
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
