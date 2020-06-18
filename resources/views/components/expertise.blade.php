@if(!empty($expertise))
    <section class="section expertise">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('expertise.title') && !empty(Lang::get('expertise.title')))
                        <h3 class="section__title">{{ __('expertise.title') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <ul class="expertise__list">
                        @foreach($expertise as $key => $item)
                            @if (Lang::has('expertise.list.' . $item) && !empty(Lang::get('expertise.list.' . $item)))
                                <li class="expertise__item">

                                    <div class="expertise__counter">
                                        @if(($key + 1) < 10)
                                            <span>0{{ ++$key }}</span>
                                        @else
                                            <span>{{ ++$key }}</span>
                                        @endif
                                    </div>

                                    <div class="expertise__content">
                                        @if (Lang::has('expertise.list.' . $item . '.list') &&
                                            !empty(Lang::get('expertise.list.' . $item . '.list')))
                                            <p class="expertise__title">{{ __('expertise.list.' . $item . '.title') }}</p>
                                        @endif

                                        @if (Lang::has('expertise.list.' . $item . '.list') &&
                                            !empty(Lang::get('expertise.list.' . $item . '.list')))

                                            <div class="skills">
                                                <ul class="skills__list">
                                                    @foreach(__('expertise.list.' . $item . '.list') as $skill)
                                                        <li class="skills__item">{{ $skill }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif


{{--<div class="expertise section">--}}



{{--    Front-End technologies:--}}
{{--    html, pug, css, scss, gulp, webpack, js, jQuery, React.js--}}
{{--    Back-End technologies:--}}
{{--    Node.js, PHP, Laravel, MySQL--}}

{{--</div>--}}









{{--Додаткова освіта--}}
{{--листопад 2017 – березень 2018 г. – Beetroot Academy, Front-End--}}
{{--вересень 2018 – січень 2019 г. – Beetroot Academy, Back-End--}}


{{--Володіння мовами--}}
{{--російська--}}
{{--українська--}}
{{--англійська--}}





{{--Мови програмування: JavaScript, PHP, C++, C#, Java, Pascal--}}
{{--Операційні системи: Windows, Linux--}}
{{--Системи контролю версій: Git--}}
{{--СУБД: MySQL, PostgreSQL, Redis, Microsoft SQL Server, SQLite--}}
{{--Web-технології: HTML, Pug (Jade), SASS, LESS, jQuery, React.js, Angular, WordPress, Laravel--}}
{{--Сбірникни проектів: Gulp, Webpack--}}
{{--E-Commerce платформи: Shopify, OpenCart--}}




{{--Особисті досягнення та публікації--}}

{{--Участь у ХІ регіональній студентській науково-технічній конференції «Наука – перші кроки», ДВНЗ «ПДТУ», м. Маріуполь, 24-28 квітня 2017. Зайнято 2-ге місце.--}}
{{--Назва роботи: «Семантический анализатор хода решения геометрических задач».--}}
{{--http://eir.pstu.edu/bitstream/handle/123456789/19093/%d0%9d%d0%b0%d1%83%d0%ba%d0%b0_%d0%bf%d0%b5%d1%80%d1%88%d1%96%20%d0%ba%d1%80%d0%be%d0%ba%d0%b8%202017%20%d1%82%d0%be%d0%bc%204_p12-13%20%28%d1%81.%2011-12%29.pdf?sequence=1--}}

{{--Участь у XII регіональній студентській науково-технічній конференції «Наука – перші кроки», ДВНЗ «ПДТУ», м. Маріуполь, 23-27 квітня 2018.--}}
{{--Назва роботи: «Розробка розкладу маршрутних таксi».--}}
{{--http://eir.pstu.edu/bitstream/handle/123456789/21087/%d0%9d%d0%b0%d1%83%d0%ba%d0%b0-%d0%bf%d0%b5%d1%80.%20%d0%ba%d1%80.%202018%2c%20%d1%82.3%20%d1%81.12.pdf?sequence=1--}}

{{--Участь у міжнародній науково-технічній конференції «Університетська наука – 2019», ДВНЗ «ПДТУ», м. Маріуполь, 16-17 травня 2019.--}}
{{--Назва роботи: «Аналіз методів формування розкладу міського маршрутного транспорту».--}}
{{--http://eir.pstu.edu/bitstream/handle/123456789/23120/%d0%a3_%d0%ba%d0%b0%d1%8f%20%d0%bd%d0%b0%d1%83%d0%ba%d0%b0_2019_%d0%a2_2_p002-310_p215-216.pdf?sequence=1--}}

{{--Участь у Всеукраїнській конференції молодих учених «Актуальні питання розвитку інформаційних технологій», ДВНЗ «ПДТУ», м. Маріуполь, 18 листопада 2019.--}}
{{--Назва роботи: «DETERMINING THE ATTRACTION OF PASSENGER TRAFFIC WITH THE HELP OF FUZZY SETS».--}}
{{--https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=017207fc19&attid=0.1&permmsgid=msg-f:1652388824326853035&th=16ee76e188d3d1ab&view=att&disp=inline&saddbat=ANGjdJ8V09N88Y8h275Sp4AFAYvioTHyt8PbfF7EnQHBkzPPfZ3YAe0QyuWPvOoXsori73B8cTldethwglcVrnphJDj_vE0uYFUaC1ZiC_vBYrGb8FfghaJayHZ1_0HiYQV1h2Dh_CHmCKj6qwZUZbNu1zVQc-cy19DkETn4oRBOerhixGg6S6iL-OOhhgfRB2vFbj6oqvj33LSobgRA5lUyFp9KM-vlqcnfIuwSHDXdeuovipehzlEx5AVIkYrcbM63FJXy97hDF6aTpMkGPpr8cPV7a7uE_ln3x5nyDKR9-lEZ-I1sMLow8pKbqeowJP7Xcs6IYAJ-M1p6S-l3TpU4XBbJn6JfRyT5Mfa_2m4SWAGAxqCPly50bwfAVKxmlP2Bqg6Ujgf4VpCOhNgF8Lp5jea8Fjjbqy64-B9RE87qXkPzqzlk7HXKHBTz-AXHhx13sFVNhlZ124gXQMMz9XFsKyZEmj3mpc3xb_RQ-2oLSijP2wkPgVhr0ijSDFg4Hb4Y6gpp74oZDks59sInJ3dKURQgAbqz6BBXfIhhSucbNgkIw_FwGxgSwrMR8b-n4fKcnz09drCqb5TUkyTfGmZluiPcLu6r_8UCFS1yG6Vn38MLpvwo4M2tTs9wIi0R7sHb9-IkuP-R1zz2cYJvu-4pcvPE0jHCxOwbqtAsEO0ahfyBKGA1oGXaon2Q0Yw--}}
{{--p. 69--}}

{{--Публікація науково-технічної статті у віснику ДВНЗ «ХНТУ». Серія: Інформаційні технології, м. Херсон, 2019.--}}
{{--Назва роботи: «Використання нечітких множин при визначенні привабливості пасажиропотоку».--}}
{{--http://kntu.net.ua/index.php/ukr/content/download/73192/424508/file/%D0%92%D1%96%D1%81%D0%BD%D0%B8%D0%BA%20%E2%84%963(70).pdf--}}
{{--с. 88--}}

{{-- проводила воркшоп в битрут академии --}}
{{-- июнь 2019 --}}
{{-- CSS-анимации --}}
{{--https://docs.google.com/presentation/d/1yCPjM9-9DBgdoSEJNaTyyZFlvzSWhqQPgvGjUjZmEzA/edit#slide=id.p--}}
