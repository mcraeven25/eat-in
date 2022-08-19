@php
$ingredientss = $recipe->ingredients;
$ingredients = preg_split("/\\r\\n|\\r|\\n/", $ingredientss);
$steps = $recipe->procedure;
$procedures = preg_split("/\\r\\n|\\r|\\n/", $steps);
@endphp

<x-layout>
    <a href="/" class="text-2xl mx-4 pt-10 font-medium hover:text-sky-500"><i
            class="fa-solid fa-arrow-left-long"></i> Back</a>
    <div class="lg:px-80 lg:py-5">
        <div class="h-72 w-full bg-cover bg-center relative ">
            <img src="{{ $recipe->photo ? asset('storage/' . $recipe->photo) : asset('images/cover.jpg') }}"
                alt="{{ $recipe->title }}" class="w-full h-full object-cover absolute ">
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            <h1
                class="absolute text-6xl text-center text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-medium ">
                {{ $recipe->title }}
            </h1>
        </div>
        <div class="border-t-2  border-black w-full mt-5 mb-3"></div>
        @unless($recipe->user_id != auth()->id())
            <div class="flex justify-end">
                <span class="mx-5 text-xl hover:text-sky-500">
                    <i class="fa-solid fa-pen-to-square  "></i>
                    <a href="/recipe/{{ $recipe->id }}/edit">Edit</a>
                </span>

                <form method="POST" action="/recipe/{{ $recipe->id }}">
                    @csrf
                    @method('DELETE')
                    <span class=" text-xl hover:text-sky-500">
                        <i class="fa-solid fa-trash "></i>
                        <button>Delete Recipe</button>
                    </span>
                </form>
            </div>
        @endunless

        <div class="leading-8 font-semibold bg-lime-100 mt-4  px-6 py-5">
            <div class="flex flex-col">
                <span class="text-xl my-2"><i class="fa-solid fa-user text-sky-500 mr-2"></i> Prepared
                    by: {{ $user->name }}</span>
                <span class="text-xl  my-2"><i class="fa-solid fa-utensils  text-sky-500 mr-2"></i> Cuisine:
                    {{ $recipe->category }}</span>
                <span class="text-xl  my-2"><i class="fa-regular fa-clock text-sky-500 mr-1"></i> Cook
                    Time: {{ $recipe->time }} minutes</span>
            </div>
            <h2 class="text-2xl font-medium">Description</h2>
            <p>{{ $recipe->description }}</p>
            <h2 class="text-2xl font-medium  mt-4 mb-1">Ingredients</h2>
            <ul class="list-disc flex-col px-10">
                @foreach ($ingredients as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul>
            <h2 class="text-2xl font-medium mt-4 mb-1">Procedure</h2>
            <ul class="list-decimal flex-col px-10">
                @foreach ($procedures as $procedure)
                    <li>{{ $procedure }}</li>
                @endforeach
            </ul>




        </div>
</x-layout>
