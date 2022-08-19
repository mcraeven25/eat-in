  @props(['recipe'])
  <div
      class="md:w-full mb-3    bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 
      dark:border-gray-700  hover:shadow-2xl">
      <a href="recipe/{{ $recipe->id }}">
          <img class="rounded-t-lg w-full min-h-[13rem] max-h-[13rem] object-cover"
              src="{{ $recipe->photo ? asset('storage/' . $recipe->photo) : asset('images/cover.jpg') }}"
              alt="" />
      </a>
      <x-recipe-tags :tags='$recipe->tags' class="mt-2 justify-center" /> <a href="recipe/{{ $recipe->id }}">
          <div class="p-5">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $recipe->title }}
              </h5>
      </a>
      <div class="h-72  cursor:pointer">
          <p class="mb-3 font-normal min-h-[70rem]  text-xs leading-5 cursor:pointer">
              {{ $recipe->description }}</p>
      </div>
  </div>
  </div>
