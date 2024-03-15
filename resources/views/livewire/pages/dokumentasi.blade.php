<article class="prose mx-auto">
    <div class="text-5xl font-semibold text-center w-full text-primary mb-4">{{ config('app.name') }}</div>
    {!! Str::markdown($content) !!}
</article>
