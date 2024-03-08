<div class="accent-green-400 bg-opacity-10 p-3 flex flex-col gap-6 ">
    <div>
        <h2 class="text-3xl font-bold mb-1">Let's start your journey!</h2>
        <span class="text-lg pb-2 text-slate-600">Sign up for a new account</span>
    </div>

    <hr class="w-[50%]">
    <form wire:submit="login()">
    <label class="flex flex-col gap-2">
        Email
        <input wire:model="email" type="email" class="px-3 py-2 border border-slate-300 rounded-lg">
            @if($errors->has('email'))
                <div class="text-red-400">
                    <em>{{$errors->first('email')}}<em>
                </div>
            @endif
    </label>

    <label class="flex flex-col gap-2">
        Password
        <input wire:model="password" type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
            @if($errors->has('password'))
                <div class="text-red-400">
                    <em>{{$errors->first('password')}}<em>
                </div>
            @endif
    </label>

    <div class="flex sm:flex-row flex-col-reverse justify-end items-center pt-4 flex-wrap">
        <button x-on:click="dialogOpen = false" type="button"  class="mt-3 flex w-full items-center  justify-center rounded-md border border-transparent bg-gray-400 px-5 py-3 text-base font-medium text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500-400 focus:ring-offset-2 bg-opacity-100 focus:ring-offset-gray-100-700 sm:mt-0 sm:ml-3  sm:w-auto sm:flex-shrink-0">{{__("Cancel")}}</button>
        <button    class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-green-400  px-5 py-3 text-base font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 bg-opacity-100 focus:ring-offset-blue-100 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">{{__("Login")}}</button>
        @if($errors->has('credentials'))
            <div class="text-red-400">
                <em>{{$errors->first('credentials')}}<em>
            </div>
        @endif




    </div>
    </form>
</div>
