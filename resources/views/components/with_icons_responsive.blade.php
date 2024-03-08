<div x-data="{open:false}">
<div class="flex justify-start items-center border-4 gap-0 cursor-pointer" x-on:click="open = !open">
    <button class="rounded-md pl-3 py-2 my-auto text-base font-medium text-warm-gray-900 hover:bg-warm-gray-50">Language</button>
    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="my-auto w-4 h-4">
        <path fill-rule="evenodd" d="M8 2a.75.75 0 0 1 .75.75v8.69l1.22-1.22a.75.75 0 1 1 1.06 1.06l-2.5 2.5a.75.75 0 0 1-1.06 0l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.22 1.22V2.75A.75.75 0 0 1 8 2Z" clip-rule="evenodd" />
    </svg>
</div>

    <div x-cloak x-show="open" x-transition.opacity class="flex flex-col items-start pl-10 gap-3  rounded-md px-3 py-2 text-base  text-warm-gray-900 hover:bg-warm-gray-50">
        <a href="/lang" class="hover:text-gray-300">{{__("arabic")}}</a>
        <a  href="/lang" class="hover:text-gray-300">{{("english")}}</a>
    </div>
</div>
