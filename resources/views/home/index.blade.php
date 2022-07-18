<x-template>
    <div class="generic-container">
        @auth
        <div class="top-container">
            <h1 class="header-text">The Documents Website</h1>
        </div>
        <div class="bottom-container">
            <h3 class="header-text">You are logged in</h3>
            <p class="paragraph-text bottom-paragraph">Now you are able to upload your documents in the Documents link at the navbar 
                or by clicking the button below. Other users cannot see your documents.</p>
            <button class="btn btn-outline-primary"><a class="font-weight-bold" href="/documents">Go to documents management page</a></button>
        </div>
        @else
        <div class="top-container">
            <h1 class="header-text">The Documents Website</h1>
            <p class="paragraph-text top-paragraph">A simple but efficient website to store your documents created by the applicant
            Raziel Martinez.
            </p>
        </div>
        <div class="bottom-container pb-5">
            <p class="paragraph-text bottom-paragraph pt-5">To upload documents, start by creating an account. You can use a fake email.
            When you log in you will be able to <b>upload</b> your documents, <b>view</b> them and <b>download</b> them. 
            Other users cannot see your documents.</p>
            <button class="btn btn-outline-primary"><a class="font-weight-bold" href="/signup">Get started by creating an account</a></button>
        </div>
        @endauth
    </div>
</x-template>