<div class="education">
    <ul class="education__list">
        @if (Lang::has('education.master.name'))
            <li class="education__item">
                @if (Lang::has('education.master.date'))
                    <time class="education_date">{{ Lang::get('education.master.date') }}</time>
                @endif
                <p class="education__name">{{ Lang::get('education.master.name') }}</p>
                @if (Lang::has('education.master.info'))
                    <p class="education__info">{{ Lang::get('education.master.info') }}</p>
                @endif
            </li>
        @endif

        @if (Lang::has('education.bachelor.name'))
            <li class="education__item">
                @if (Lang::has('education.bachelor.date'))
                    <time class="education_date">{{ Lang::get('education.bachelor.date') }}</time>
                @endif
                <p class="education__name">{{ Lang::get('education.bachelor.name') }}</p>
                @if (Lang::has('education.bachelor.info'))
                    <p class="education__info">{{ Lang::get('education.bachelor.info') }}</p>
                @endif
            </li>
        @endif

        @if (Lang::has('education.school.name'))
            <li class="education__item">
                @if (Lang::has('education.school.date') && !empty(Lang::get('education.school.date')))
                    <time class="education_date">{{ Lang::get('education.school.date') }}</time>
                @endif
                <p class="education__name">{{ Lang::get('education.school.name') }}</p>
                @if (Lang::has('education.school.info') && !empty(Lang::get('education.school.info')))
                    <p class="education__info">{{ Lang::get('education.school.info') }}</p>
                @endif
            </li>
        @endif


{{--            @if (!empty(__('education.master.name')))--}}
{{--                <p class="education__date">{{ __('education.master.name') }}</p>--}}
{{--            @endif--}}

{{--            @if (Lang::has('education.master.name'))--}}
{{--                <p class="education__date">{{ Lang::get('education.master.name') }}</p>--}}
{{--            @else--}}
{{--                <p class="education__date">none</p>--}}
{{--            @endif--}}
    </ul>
</div>
