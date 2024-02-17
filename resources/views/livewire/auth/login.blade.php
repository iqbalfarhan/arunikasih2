<div class="card w-full max-w-sm">
    <form class="card-body space-y-4" wire:submit="login">
        <div class="text-xl">Selamat datang</div>
        <div class="space-y-2">
            <input type="email" class="input input-bordered w-full" wire:model.live="email" placeholder="Email address"
                autocomplete="email">
            <input type="password" class="input input-bordered w-full" wire:model.live="password"
                placeholder="Password">
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
    </form>

    <a href="" class="text-center text-sm btn-link">Belum punya akun? daftar sekarang</a>
</div>
