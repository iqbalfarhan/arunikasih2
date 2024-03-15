<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="font-bold text-lg">Music form</h3>
            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Judul music</span>
                    </div>
                    <input type="text" placeholder="Type here"
                        class="input input-bordered @error('form.title') input-error @enderror"
                        wire:model="form.title" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">File music baru</span>
                    </div>
                    <input type="file" placeholder="Type here"
                        class="file-input file-input-bordered @error('newfile') file-input-error @enderror"
                        wire:model="newfile" accept="audio/*" />
                </label>
            </div>
            <div class="modal-action justify-between">
                <button class="btn" type="button" wire:click="resetMusic">Close!</button>
                <button class="btn">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
