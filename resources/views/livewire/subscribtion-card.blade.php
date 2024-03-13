   <div class="relative">
     <div class="absolute left-0 right-0 h-1/2 bg-warm-gray-50" aria-hidden="true"></div>
     <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
       <div class="rounded-3xl bg-gradient-to-l from-sky-800 to-cyan-700 py-10 px-6 sm:py-16 sm:px-12 lg:flex lg:items-center lg:py-20 lg:px-20">
         <div class="lg:w-0 lg:flex-1">
           <h2 class="text-3xl font-bold tracking-tight text-white">Sign up for our newsletter</h2>
           <p class="mt-4 max-w-3xl text-lg text-cyan-100">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat.</p>
         </div>
         <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
           <form wire:submit="save" class="sm:flex">
             <label for="email-address" class="sr-only">Email address</label>
             <input id="email-address" name="email-address" type="email" wire:model="email" autocomplete="email" required="" class="w-full rounded-md border-white px-5 py-3 placeholder-warm-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-cyan-700" placeholder="Enter your email">
             <button type="submit" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-green-400 px-5 py-3 text-base font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 focus:ring-offset-cyan-700 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0" >Notify me</button>
           </form>
           <p class="mt-3 text-sm text-cyan-100">
             We care about the protection of your data. Read our
             <!-- space -->
             <a href="#" class="font-medium text-white underline">Privacy Policy.</a>
           </p>
         </div>
       </div>

       @if(session('email'))
       <div  class="bg-green-100 border border-green-400 text-gree rounded-2xl mt-10 n-700 px-4 py-3  relative" role="alert">
         <strong class="font-bold">{{__("Congratulations")}}</strong>
         <span class="block sm:inline"> {{__(session('email'))}}</span>
         <span class="absolute top-0 bottom-0 right-0 px-4 py-3"  wire:click="remove">
           <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns ="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
         </span>
       </div>
       @endif
       @if($errors->has('email'))
       <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-2xl mt-10 relative" role="alert">
         <strong class="font-bold">{{__("Error")}} </strong>
         <span class="block sm:inline">{{__($errors->first('email'))}}</span>
         <span class="absolute top-0 bottom-0 right-0 px-4 py-3" wire:click="remove">
           <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
         </span>
       </div>
       @endif

     </div>

   </div>
