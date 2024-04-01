<div class="px-4 py-12 relative">
    <div id="editor">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br /></p>
    </div>


    <button class="btn btn-primary absolute top-56 right-4 bg-green-300 border rounded-2xl px-3 py-2" wire:click=""
        id="send_email_button"
        x-on:click="@this.sendMail( quill.container.firstChild.innerHTML )">{{ __('Send') }}</button>
</div>
