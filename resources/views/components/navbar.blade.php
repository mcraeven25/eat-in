  <nav class="p-6 md:p-3  shadow md:flex md:item-center md:justify-between ">
      <div class="flex justify-between items-center">
          <a href="/" class="">
              <span
                  class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-cursive">Eat-In</span>
          </a>

          <x-searchbar class="hidden md:block ml-10  w-72" />
          <span class="cursor-pointer text-3xl md:hidden block">
              <i class="fa-solid fa-bars" onClick="Menu(this)"></i>
          </span>
      </div>

      <ul
          class="md:flex md:items-center md:z-auto md:static absolute 
      w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-4 md:opacity-100 opacity-0 top-[-400px]
      transition-all ease-in duration-300 bg-lime-300 md:bg-inherit
      ">
          <x-searchbar class="block md:hidden  pr-2 " />
          @auth
              <li class="mx-3 my-4 md:my-0">
                  <a href="/" class="hover:text-cyan-400 text-xl duration-400 font-bold">Home</a>
              </li>
              <li class="mx-3 my-4 md:my-0">
                  <a href="/recipe/create" class="hover:text-cyan-400 text-xl duration-400 font-bold">Add
                      Recipe</a>
              </li>
              <li class="mx-3 my-4 md:my-0">
                  <a href="/recipes" class="hover:text-cyan-400 text-xl duration-400 font-bold">My
                      Recipes</a>
              </li>
              <li class="mx-3 my-4 md:my-0">
                  <form method="POST" action="/logout">
                      @csrf
                      <button type="submit" class="hover:text-cyan-400 text-xl duration-400 font-bold">Logout</button>
                  </form>
              </li>
          @else
              <li class="mx-3 my-4 md:my-0">
                  <a href="/" class="hover:text-cyan-400 text-xl duration-400 font-bold">Home</a>
              </li>

              <li class="mx-3 my-4 md:my-0">
                  <a href="/register" class="hover:text-cyan-400 text-xl duration-400 font-bold">Register</a>
              </li>
              <li class="mx-3 my-4 md:my-0">
                  <a href="/login" class="hover:text-cyan-400 text-xl duration-400 font-bold">Login</a>
              </li>
          @endauth
      </ul>
  </nav>

  <script>
      function Menu(e) {
          const list = document.querySelector('ul');

          if (e.classList.contains("fa-bars")) {
              e.classList.remove("fa-bars");
              e.classList.add("fa-close");
              list.classList.add('top-[80px]');
              list.classList.add('opacity-100')
          } else {
              e.classList.add("fa-bars");
              e.classList.remove("fa-close");
              list.classList.remove('top-[80px]');
              list.classList.remove('opacity-100')
          }

      }
  </script>
