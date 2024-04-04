<div class="px-4 pt-5 sm:px-24" dir="ltr">
    <div class="flex rtl:flex-row-reverse">
        <a wire:navigate href="{{ route('home') }}" dir={{ app()->isLocale('ar') ? 'rtl' : 'lrt' }}
            class="font-light mb-12 py-1 px-1 text-sm   transition-all hover:underline text-gray-500 flex  mr-0 items-center gap-1 max-w-24">
            <svg class="w-3 h-3" style="{{ app()->isLocale('ar') ? 'rotate(180deg)' : '' }}"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>

            <span>{{ __('back') }} </span>
    </div>

    </a>
    <div id="editor">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br /></p>
    </div>


    <div class="relative">

        <button
            class="hover:shadow-2xl  hover:bg-green-400 transition-all   hover:text-white btn btn-primary absolute top-4 right-0 bg-green-300 border rounded-2xl px-3 py-2 "
            wire:click="" id="send_email_button"
            x-on:click="@this.sendMail( quill.container.firstChild.innerHTML )">{{ __('Send') }}</button>
    </div>

</div>
