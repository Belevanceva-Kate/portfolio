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
                    'link'      => 'https://belekate.tk'
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
                    'link'      => 'https://blendtopia.com'
                ]
            ],
            'handle'        => 'blendtopia',
            'description'   => [
                'Это бизнес по продаже суперфудов.',
                'Целью проекта было реализовать сбор продуктов в боксы и дать клиенту выбор: \'подписаться\' на постоянную доставку или совершить единоразовую покупку. После подтверждения заказа доставку можно будет редактировать.',
                'Есть несколько типов боксов: предопределенный и наборной. Первый из них имеет уже готовый набор продуктов, а второй — дает возможность пользователю самому выбрать какие вкусы и какое количество он хочет купить.',
                'Для этого проекта создавался уникальный дизайн и бокс-билдер. Была разработана Front-End часть, а также Back-End, который помогал плагину подписок правильно интерпретировать боксы.'
            ],
            'images'        => [
                [
                    'src_full' => '/img/projects/blendtopia/full/home.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/home-min.png',
                    'title' => 'Home'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/product.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/product-min.png',
                    'title' => 'Product'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/choose_box.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/choose_box-min.png',
                    'title' => 'Choose Box'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/predefined_box.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/predefined_box-min.png',
                    'title' => 'Predefined Box'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/custom_box.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/custom_box-min.png',
                    'title' => 'Custom Box'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/quick_view.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/quick_view-min.png',
                    'title' => 'Quick View'
                ],
                [
                    'src_full' => '/img/projects/blendtopia/full/subscription.png',
                    'src_compressed' => '/img/projects/blendtopia/compressed/subscription-min.png',
                    'title' => 'Subscription'
                ]
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
                [
                    'resource'  => 'Shopify App Store',
                    'title'     => 'Foridev - Selling Codes app',
                    'link'      => 'https://apps.shopify.com/serial-keys-sale-module'
                ]
            ],
            'handle'        => 'codes',
            'description'   => [
                'Приложение помогает сторхолдерам реализовывать серийные ключи. С помощью приложения они могут закреплять их за каким-то продуктом, а также хранить мультиязычные ссылки для их активации.',
                'Например, клиент хочет купить серийный ключ для игры. После произведения оплаты ему на почту приходит письмо, в котором указывается продукт, серийный ключ к нему и ссылка на активацию. Также он может просмотреть эту информацию в своем личном аккаунте.',
                'Приложение, разработанное под платформу Shopify.',
//                'На данный момент проходит ревью.'
            ],
            'images'        => [
                [
                    'src_full' => '/img/projects/codes/full/app-product-page-1.png',
                    'src_compressed' => '/img/projects/codes/compressed/app-product-page-1-min.png',
                    'title' => 'Product Page 1'
                ],
                [
                    'src_full' => '/img/projects/codes/full/app-product-page-2.png',
                    'src_compressed' => '/img/projects/codes/compressed/app-product-page-2-min.png',
                    'title' => 'Product Page 2'
                ],
                [
                    'src_full' => '/img/projects/codes/full/customer-view.png',
                    'src_compressed' => '/img/projects/codes/compressed/customer-view-min.png',
                    'title' => 'Customer view'
                ]
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
            'images'        => [
                [
                    'src_full' => '/img/projects/cannago/full/home.png',
                    'src_compressed' => '/img/projects/cannago/compressed/home-min.png',
                    'title' => 'Home'
                ],
                [
                    'src_full' => '/img/projects/cannago/full/shop.png',
                    'src_compressed' => '/img/projects/cannago/compressed/shop-min.png',
                    'title' => 'Shop'
                ],
                [
                    'src_full' => '/img/projects/cannago/full/quick_view.png',
                    'src_compressed' => '/img/projects/cannago/compressed/quick_view-min.png',
                    'title' => 'Quick View'
                ],
                [
                    'src_full' => '/img/projects/cannago/full/product.png',
                    'src_compressed' => '/img/projects/cannago/compressed/product-min.png',
                    'title' => 'Product'
                ],
                [
                    'src_full' => '/img/projects/cannago/full/learn.png',
                    'src_compressed' => '/img/projects/cannago/compressed/learn-min.png',
                    'title' => 'Learn'
                ]
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

];
