<div class="accent-green-400 bg-opacity-10 p-3 flex flex-col gap-6 rtl:text-right">
    <div>
        <h2 class="text-3xl font-bold mb-1">{{ __('Log out') }}</h2>
        <span class="text-lg pb-2 text-slate-600">{{ __('are you sure you want to log out ?') }}</span>
    </div>

    <hr class="w-[100%]">
    <button wire:click="logout"
        class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-green-400  px-5 py-3 text-base font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 bg-opacity-100 focus:ring-offset-blue-100 sm:mt-0 sm:ml-3 rtl:mr-3 sm:w-auto sm:flex-shrink-0">{{ __('Log out') }}</button>

</div>
