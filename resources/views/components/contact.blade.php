<footer class="section footer contact">
    @include('snippets.background')
    <div class="container section__container">
        <div class="section__left">
            <div class="section__content">
                @if (Lang::has('contacts.title') && !empty(Lang::get('contacts.title')))
                    <h3 class="section__title">{{ __('contacts.title') }}</h3>
                @endif
            </div>
        </div>
        <div class="section__right">
            <div class="section__content">
                @include('snippets.contacts')
                <div class="contact__block">
                    @include('snippets.title')
                    @include('snippets.socials')
                </div>
            </div>
        </div>
    </div>
</footer>
