<div class="card w-full max-w-96">
    <form class="card-body space-y-4" wire:submit="login">
        <div class="text-xl">Selamat datang</div>
        <div class="space-y-2">
            <label class="input input-bordered flex items-center gap-2 w-full">
                <x-tabler-user class="icon-5" />
                <input type="email" class="grow w-full" wire:model.live="email" placeholder="Email address"
                    autocomplete="email">
            </label>
            <label class="input input-bordered flex items-center gap-2 w-full">
                <x-tabler-key class="icon-5" />
                <input type="password" class="grow w-full" wire:model.live="password" placeholder="Password">
                <x-tabler-eye class="icon-5" />
            </label>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login />
                <span>Login</span>
            </button>
        </div>
        <div class="divider text-sm opacity-50">Cara lainnya</div>
        <div class="card-actions">
            <button class="btn  btn-block">
                <x-tabler-brand-google />
                <span>Login dengan google</span>
            </button>
        </div>
        <a href="" class="text-center text-sm btn-link">Belum punya akun? daftar sekarang</a>
    </form>

</div>
