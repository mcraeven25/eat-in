<x-layout>
    @unless(count($recipes) == 0)
        <div class="p-4 md:flex">
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        @else
            <p>No Result</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $recipes->links() }}
    </div>
</x-layout>
