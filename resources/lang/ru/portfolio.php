<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Portfolio Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in portfolio section
    |
    */

    'title' => 'Недавние проекты',

    'list'  => [

        'portfolio' => [
            'title'         => 'Portfolio',
            'excerpt'       => [
                'Веб-профайл с описанием опыта и навыков'
            ],
            'links'         => [
                [
                    'resource'  => 'Github',
                    'title'     => 'Portfolio',
                    'link'      => 'https://github.com/Belevanceva-Kate/portfolio'
                ],
                [
                    'resource'  => 'Сайт',
                    'title'     => 'Portfolio',
                    'link'      => '#'
                ]
            ],
            'handle'        => 'portfolio',
            'description'   => [
                'Веб-профайл с описанием опыта и навыков. Также можно просмотреть более развернутую информацию про проекты и технологии, которые на них использовались.',
                'Есть возможность в настройках поменять цветовую схему на темную или светлую, а также переключить языки.'
            ],
            'tools'         => [
                'Laravel',
                'jQuery'
            ],
            'icon'          => 'icons.projects.person'
        ],

        'blendtopia' => [
            'title'         => 'Blendtopia',
            'excerpt'       => [
                'Магазин суперфудов'
            ],
            'links'         => [
                [
                    'resource'  => 'Сайт',
                    'title'     => 'Blendtopia',
                    'link'      => 'https://www.blendtopia.com'
                ]
            ],
            'handle'        => 'blendtopia',
            'banner'        => '/img/projects/blendtopia.png',
            'description'   => [
                'Это бизнес по продаже суперфудов.',
                'Целью проекта было реализовать сбор продуктов в боксы и дать клиенту выбор: \'подписаться\' на постоянную доставку или совершить единоразовую покупку. После подтверждения заказа доставку можно будет редактировать.',
                'Есть несколько типов боксов: предопределенный и наборной. Первый из них имеет уже готовый набор продуктов, а второй — дает возможность пользователю самому выбрать какие вкусы и какое количество он хочет купить.',
                'Для этого проекта создавался уникальный дизайн и бокс-билдер. Была разработана Front-End часть, а также Back-End, который помогал плагину подписок правильно интерпретировать боксы.'
            ],
            'tools'         => [
                'Shopify',
                'Laravel',
                'Subscriptions by ReCharge App'
            ],
            'icon'          => 'icons.projects.smoothie'
        ],

        'codes' => [
            'title'         => 'Selling Codes App',
            'excerpt'       => [
                'Публичное Shopify приложение для продажи кодов'
            ],
            'links'         => [
//                [
//                    'resource'  => 'Shopify App Store',
//                    'title'     => 'Foridev - Selling Codes app',
//                    'link'      => '#'
//                ]
            ],
            'handle'        => 'codes',
            'description'   => [
                'Приложение помогает сторхолдерам реализовывать серийные ключи. С помощью приложения они могут закреплять их за каким-то продуктом, а также хранить мультиязычные ссылки для их активации.',
                'Например, клиент хочет купить серийный ключ для игры. После произведения оплаты ему на почту приходит письмо, в котором указывается продукт, серийный ключ к нему и ссылка на активацию. Также он может просмотреть эту информацию в своем личном аккаунте.',
                'Приложение, разработанное под платформу Shopify.',
                'На данный момент проходит ревью.'
            ],
            'tools'         => [
                'Shopify',
                'Laravel'
            ],
            'icon'          => 'icons.projects.key'
        ],

        'cannago' => [
            'title'         => 'CannaGo',
            'excerpt'       => [
                'Магазин, специализирующийся на продаже каннабидиола'
            ],
            'links'         => [
                [
                    'resource'  => 'Сайт',
                    'title'     => 'CannaGo',
                    'link'      => 'https://cannago.co.uk'
                ]
            ],
            'handle'        => 'cannago',
            'description'   => [
                'Бизнес, который специализируется на продаже каннабидиола. Клиентам предоставляется множество продуктов из этого компонента, в том числе и для животных. Также пользователи могут просмотреть результаты лабораторных тестов каждого продукта.'
            ],
            'tools'         => [
                'Shopify'
            ],
            'icon'          => 'icons.projects.cannabis'
        ],

        'world-bloggers-awards' => [
            'title'         => 'WBA',
            'description'   => [
                ''
            ],
            'tools'         => [
                'Shopify'
            ],
        ],

        'marketplace-genie' => [
            'title'         => 'Marketplace Genie',
            'excerpt'       => [
                'Shopify приложение для синхронизации товаров'
            ],
            'handle'        => 'marketplace-genie',
            'description'   => [
                'Это высоконагруженное приложение. Главная задача его была в том, чтобы дать возможность синхронизировать удаленный маркетплейс с Shopify магазином. Синхронизация может выполняться как в назначенное клиентом время с указанной переодичностью, так и вручную. Все действия и процессы логируются.'
            ],
            'tools'         => [
                'Shopify',
                'PHP'
            ],
            'icon'          => 'icons.projects.sync'
        ]
    ]

    /*'list'  => [

        'blendtopia' => [
            'title'         => 'Blendtopia. Organic superfoods smoothies',
            'site_title'    => 'Blendtopia',
            'site_link'     => 'https://www.blendtopia.com',
            'description'   => [
                // 'Блендтопиа - это бизнес по продаже смузи.',
                'Это бизнес по продаже смузи. Они порционные.',
                'Заказ можно осуществлять боксами, размер которых 8, 12, 16 и 24 смузи. Каждый бокс можно просто купить, либо "подписаться" на него. То есть можно получать их каждые 1, 2, 4 или 6 недель.',
                'Есть несколько типов боксов: предопределенный и наборной. Первый из них имеет уже готовый набор смузи по вкусам и количеству. Второй - дает возможность пользователю самому выбрать сколько и какие вкусы он хочет купить.',
                'Для этого проекта создавался уникальный дизайн и бокс-билдер. Была разработана Front-End часть, а также Back-End, который помогал плагину подписок правильно интерпретировать боксы.'
            ],
            'tools'         => 'Shopify,  Laravel, Subscriptions by ReCharge App'
        ],

        'codes' => [
            'title'         => 'Selling Codes App',
            'site_title'    => 'Foridev - #1 Selling Codes app',
            'site_link'     => 'https://shopify/apps',
            'description'   => [
                'Приложение, разработанное под платформу Shopify.',
                'Оно помогает сторхолдерам реализовывать серийные ключи. С помощью приложения они могут закреплять их за каким-то продуктом, а также хранить мультиязычные ссылки для их активации.',
                'Например, клиент хочет купить серийный ключ для игры. После произведения оплаты, ему на почту приходит письмо, в котором указывается продукт, серийный ключ к нему и ссылка на активацию. Также он может просмотреть эту информацию в своей личном аккаунте.'
            ],
            'tools'         => 'Shopify, Laravel'
        ],

        'cannago' => [
            'title'         => 'CannaGo. Cannabidiol shop',
            'site_title'    => 'https://cannago.co.uk/',
            'site_link'     => 'CannaGo',
            'description'   => [
                'Front-end of the site'
            ],
            'tools'         => 'Shopify'
        ],

        'marketplace-genie' => [
            'title'         => 'Marketplace Genie',
            'description'   => [
                'HighLoad app. Sync two stores. one of them is takealot shop. And another'
            ],
            'tools'         => 'Shopify + PHP'
        ]
    ]*/

];
