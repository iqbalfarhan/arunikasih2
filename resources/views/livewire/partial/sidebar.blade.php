<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content space-y-5 border-r border-neutral">
    <li>
        <div class="flex gap-3">
            <div class="avatar">
                <div class="w-8 rounded-full">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <div class="flex flex-col">
                <span class="font-bold">{{ $user->name }}</span>
                <span class="text-xs opacity-50">{{ $user->email }}</span>
            </div>
        </div>
    </li>

    <li>
        <h3 class="menu-title">User Menu</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-home class="icon-5" />
                    <span>Halaman awal</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-mail class="icon-5" />
                    <span>Undangan saya</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-credit-card class="icon-5" />
                    <span>Pembayaran saya</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-star class="icon-5" />
                    <span>Testimoni</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <h3 class="menu-title">Administrator</h3>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" @class(['active' => Route::is('dashboard')]) wire:navigate>
                    <x-tabler-dashboard class="icon-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('jenis.index') }}" @class(['active' => Route::is('jenis.index')]) wire:navigate>
                    <x-tabler-bookmark class="icon-5" />
                    <span>Jenis Undangan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-tag class="icon-5" />
                    <span>Paket Undangan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-mail class="icon-5" />
                    <span>List Undangan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-credit-card class="icon-5" />
                    <span>Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-note class="icon-5" />
                    <span>Library Music</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-library class="icon-5" />
                    <span>List Bank</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-book class="icon-5" />
                    <span>Ayat & Hadist</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-brush class="icon-5" />
                    <span>Tema Undangan</span>
                </a>
            </li>
            <li></li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-users class="icon-5" />
                    <span>Management client</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-database class="icon-5" />
                    <span>Adminer DBSM</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}" @class(['active' => Route::is('login')]) wire:navigate>
                    <x-tabler-key class="icon-5" />
                    <span>Role Permission</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <h3 class="menu-title">Pengaturan Account</h3>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user-circle class="icon-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dokumentasi') }}" @class(['active' => Route::is('dokumentasi')]) wire:navigate>
                    <x-tabler-file class="icon-5" />
                    <span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <button wire:click="$dispatch('logout')">
                    <x-tabler-logout class="icon-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>

    @livewire('auth.logout')
</ul>
