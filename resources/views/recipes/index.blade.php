<x-layout>
    <h1 class="md:text-4xl text-2xl p-4 font-bold "> Latest Recipes</h1>
    @unless(count($recipes) == 0)
        <div class="px-2 py-7 md:grid md:grid-cols-2 md:gap-20 lg:grid-cols-4 lg:gap-5  ">
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
