<div class="flex flex-row justify-between items-center">
    <h1 class="text-xl font-semibold">{{ $title }}</h1>
    <div class="text-xs breadcrumbs hidden md:block">
        <ul>
            <li class="capitalize">Superadmin</li>
            @foreach ($names as $name)
                <li class="capitalize">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
</div>
