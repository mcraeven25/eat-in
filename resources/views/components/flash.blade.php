  @if (session()->has('message'))
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="flex justify-center">
          <div class="w-3/4 p-4 mb-4 mt-6 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
              role="alert">
              <span class="font-medium">{{ session('message') }}</span>
          </div>

      </div>
  @endif
