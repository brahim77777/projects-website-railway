<div class="accent-green-400 bg-opacity-10 p-3 flex flex-col  gap-6 rtl:text-right">
    <div>
        <h2 class="text-3xl font-bold mb-1">{{ __('Log in') }}</h2>
        <span class="text-lg pb-2 text-slate-600">{{ __('Login to your account') }}</span>
    </div>

    <hr class="w-[50%]">
    <form wire:submit="login()">
        <label class="flex flex-col gap-2 rtl:text-right">
            {{ __('Email') }}
            <input wire:model="email" type="email" class="px-3 py-2 border border-slate-300 rounded-lg">

        </label>

        <label class="flex flex-col gap-2 rtl:text-right">
            {{ __('Password') }}
            <input wire:model="password" type="password" class="px-3 py-2 border border-slate-300 rounded-lg">

        </label>
        @if ($errors->has('credentials'))
            <div class="text-red-400 rtl:text-right">
                <em>{{ __($errors->first('credentials')) }}<em>
            </div>
        @endif
        <div class=" flex sm:flex-row flex-col-reverse justify-end items-center pt-4 flex-wrap ">

            <button x-on:click="dialogOpen = false" type="button"
                class="mt-3 flex w-full items-center  justify-center rounded-md border border-transparent bg-gray-400 px-5 py-3 text-base font-medium text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500-400 focus:ring-offset-2 bg-opacity-100 focus:ring-offset-gray-100-700 sm:mt-0 sm:ml-3 rtl:sm:mr-3  sm:w-auto sm:flex-shrink-0">{{ __('Cancel') }}</button>
            <button
                class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-green-400  px-5 py-3 text-base font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 bg-opacity-100 focus:ring-offset-blue-100 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">{{ __('Login') }}</button>





        </div>
    </form>
</div>
