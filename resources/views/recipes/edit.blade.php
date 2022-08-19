<x-layout>
    <div class="flex mt-6 justify-center items-center">
        <div
            class="p-4 w-[40rem] bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700 ">
            <h2 class="mb-6 text-center font-bold text-3xl">Add a New Recipe</h2>
            <form method="POST" action="/recipe/{{ $recipe->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Title</label>
                    <input type="text" id="title" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Title" value="{{ $recipe->title }}" required>

                    @error('title')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Tags</label>
                    <input type="text" id="tags" name="tags"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tags" value="{{ $recipe->tags }}" required>
                    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Seperate tags
                        by a comma</p>
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Cuisine</label>
                    <input type="text" id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="What type of Cuisine?" value="{{ $recipe->category }}" required>
                    @error('cuisine')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Time</label>
                    <input type="number" id="time" name="time"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="What type of Cuisine?" value="{{ $recipe->time }}" required>
                    @error('time')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        Description</label>
                    <textarea id="description" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Description..." required>{{ $recipe->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="ingredients" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        Ingredients</label>
                    <textarea id="ingredients" rows="4" name="ingredients"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingredients..." required> {{ $recipe->ingredients }} </textarea>

                    @error('ingredients')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="procedure" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                        Procedures</label>
                    <textarea id="procedure" rows="4" name="procedure"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Procedures..." required>{{ $recipe->procedure }}</textarea>

                    @error('procedure')
                        <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="photo">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-black-900 bg-gray-50 rounded-lg border border-black-300 cursor-pointer dark:text-black-400 focus:outline-none dark:bg-black-700 dark:black-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="photo" type="file" name="photo">
                    <img class="rounded-t-lg w-96 mt-5"
                        src="{{ $recipe->photo ? asset('storage/' . $recipe->photo) : asset('images/cover.jpg') }}"
                        alt="" />
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
