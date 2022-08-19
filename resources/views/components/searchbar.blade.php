<form action="/">
    <div {{ $attributes->merge(['class' => 'relative md:w-[30rem] w-full']) }}>
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" id="default-search" name="search"
            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg 
                      border"
            placeholder="Search Recipes" required="">
        <button type="submit"
            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 
                      focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 
                      py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2 md:mr-0">Search</button>
    </div>
</form>
