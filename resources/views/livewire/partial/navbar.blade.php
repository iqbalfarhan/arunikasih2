<div class="navbar bg-base-100 border-b border-neutral">
    <div class="flex-none">
        <label for="drawer" class="btn btn-square btn-ghost">
            <x-tabler-menu class="icon-5" />
        </label>
    </div>
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="flex-none">
        <button class="btn btn-square btn-ghost">
            <div class="indicator">
                <span class="indicator-item bg-accent w-2 h-2 rounded-full"></span>
                <x-tabler-bell class="icon-5" />
            </div>
        </button>
    </div>
</div>
