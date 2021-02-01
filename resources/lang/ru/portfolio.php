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

        'shiokfarm' => [
            'title'         => 'ShiokFarm',
            'excerpt'       => [
                'Экологически чистая продукция'
            ],
            'links'         => [
                [
                    'resource'  => 'Сайт',
                    'title'     => 'ShiokFarm',
                    'link'      => 'https://www.shiokfarm.com'
                ]
            ],
            'handle'        => 'shiokfarm',
            'description'   => [
                'Это магазин, который продает экологически чистые овощи, фрукты, вино и другие продукты в Сингапуре.',
                'Клиенту необходимо было применить специфические требования к доставке заказов и ее расчету, сделать кастомизируемые рекомендации для каждого товара, добавить функционал подарочных карт. Также необходимо было предоставить возможность при оформлении заказа привязать его к подписке друга или к своей, уже существующей.',
                'Процесс разработки велся на тестовом магазине, чтобы никак не затронуть ни сам сайт, ни существующие на нем подписки. После того, как мы выполнили все задачи, мы сделали полный трансфер сайта на "живой" магазин. Также мы связались с командой технической поддержки приложения подписок и предоставили им файл для обновления всех старых продуктов на новые.'
            ],
            'images'        => [
                [
                    'src_full' => '/img/projects/shiokfarm/full/home.png',
                    'src_compressed' => '/img/projects/shiokfarm/compressed/home-min.png',
                    'title' => 'Home'
                ],
                [
                    'src_full' => '/img/projects/shiokfarm/full/collection.png',
                    'src_compressed' => '/img/projects/shiokfarm/compressed/collection-min.png',
                    'title' => 'Collection'
                ],
                [
                    'src_full' => '/img/projects/shiokfarm/full/product.png',
                    'src_compressed' => '/img/projects/shiokfarm/compressed/product-min.png',
                    'title' => 'Product'
                ],
                [
                    'src_full' => '/img/projects/shiokfarm/full/cart-ajax.png',
                    'src_compressed' => '/img/projects/shiokfarm/compressed/cart-ajax-min.png',
                    'title' => 'Cart AJAX'
                ],
                [
                    'src_full' => '/img/projects/shiokfarm/full/cart.png',
                    'src_compressed' => '/img/projects/shiokfarm/compressed/cart-min.png',
                    'title' => 'Cart'
                ],
            ],
            'tools'         => [
                'Shopify',
                'Theme Kit',
                'SCSS',
                'JS',
                'Gulp'
            ],
            'icon'          => 'icons.projects.organic'
        ],

        'muzaara-bing' => [
            'title'         => 'Muzaara Bing Shopping Feed',
            'excerpt'       => [
                'Публичное Shopify приложение для синхронизации продуктов с Microsoft Merchant Center'
            ],
            'links'         => [
                [
                    'resource'  => 'Shopify App Store',
                    'title'     => 'Muzaara Bing Shopping Feed',
                    'link'      => 'https://apps.shopify.com/microsoft-bing-shopping-feed'
                ]
            ],
            'handle'        => 'muzaara-bing',
            'description'   => [
                'Целью этого проекта была синхронизация продуктов из магазина Shopify с Microsoft Merchant Center для дальнейшего продвижения в виде рекламных баннеров в поисковой системе Bing.',
                'Для этого необходимо было изучить документацию Bing Ads API, настроить приложение в Microsoft Azure, написать функционал аутентификации в Microsoft прямо из приложения Shopify и разработать автоматическую синхронизацию продуктов с Microsoft Merchant Center.',
            ],
            'images'        => [
                [
                    'src_full' => '/img/projects/muzaara-bing/full/setup-account.png',
                    'src_compressed' => '/img/projects/muzaara-bing/compressed/setup-account-min.png',
                    'title' => 'Setup Account'
                ],
                [
                    'src_full' => '/img/projects/muzaara-bing/full/setup-store.png',
                    'src_compressed' => '/img/projects/muzaara-bing/compressed/setup-store-min.png',
                    'title' => 'Setup Store'
                ],
                [
                    'src_full' => '/img/projects/muzaara-bing/full/products.png',
                    'src_compressed' => '/img/projects/muzaara-bing/compressed/products-min.png',
                    'title' => 'Products'
                ],
                [
                    'src_full' => '/img/projects/muzaara-bing/full/products-category.png',
                    'src_compressed' => '/img/projects/muzaara-bing/compressed/products-category-min.png',
                    'title' => 'Add category to products'
                ]
            ],
            'tools'         => [
                'Shopify',
                'PHP',
                'Laravel'
            ],
            'icon'          => 'icons.projects.bing'
        ],

        'fire-pro' => [
            'title'         => 'Fire Pro — TSC-engineering',
            'excerpt'       => [
                'Противопожарное оборудование'
            ],
            'links'         => [
                [
                    'resource'  => 'Сайт',
                    'title'     => 'Fire Pro',
                    'link'      => 'https://fire-pro.com.ua'
                ]
            ],
            'handle'        => 'fire-pro',
            'description'   => [
                'Данное предприятие занимается производством, продажей и обслуживанием противопожарного оборудования. Продукция поставляется как для производств, офисов, так и для дома.',
                'Разработанный интернет-магазин является мультиязычным. В нем есть русская и украинская версии.',
                'Для страницы коллекции был разработан функционал фильтрации, который группируется по типам (диаметры, вес и т.д.). Вариации товара на странице продукта показываются клиенту в виде четырехугольников. Такие продукты нельзя положить в корзину, без выбора варианта.'
            ],
            'images'        => [
                [
                    'src_full' => '/img/projects/fire-pro/full/home-promotional.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/home-promotional-min.png',
                    'title' => 'Home. Promotional Section'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/home-shop.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/home-shop-min.png',
                    'title' => 'Home. Shop Section'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/collection.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/collection-min.png',
                    'title' => 'Collection'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/collection-products.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/collection-products-min.png',
                    'title' => 'Collection Products'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/product-variants.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/product-variants-min.png',
                    'title' => 'Product With Variants'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/cart-ajax.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/cart-ajax-min.png',
                    'title' => 'Cart AJAX'
                ],
                [
                    'src_full' => '/img/projects/fire-pro/full/cart.png',
                    'src_compressed' => '/img/projects/fire-pro/compressed/cart-min.png',
                    'title' => 'Cart'
                ],
            ],
            'tools'         => [
                'Shopify',
                'Theme Kit',
                'SCSS',
                'JS',
                'Gulp'
            ],
            'icon'          => 'icons.projects.fire'
        ],

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
                'PHP',
                'Laravel',
                'jQuery',
                'SCSS'
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
                'Theme Kit',
                'SCSS',
                'Gulp',
                'PHP',
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
                    'link'      => 'https://apps.shopify.com/foridev-selling-codes-app'
//                    'link'      => 'https://apps.shopify.com/serial-keys-sale-module'
                ]
            ],
            'handle'        => 'codes',
            'description'   => [
                'Приложение помогает сторхолдерам реализовывать серийные ключи. С помощью приложения они могут закреплять их за каким-то продуктом, а также хранить мультиязычные ссылки для их активации.',
                'Например, клиент хочет купить серийный ключ для игры. После произведения оплаты ему на почту приходит письмо, в котором указывается продукт, серийный ключ к нему и ссылка на активацию. Также он может просмотреть эту информацию в своем личном аккаунте.',
                'Приложение, разработанное под платформу Shopify.',
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
                'PHP',
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
                'Shopify',
                'Theme Kit',
                'SCSS',
                'JS',
                'Gulp'
            ],
            'icon'          => 'icons.projects.cannabis'
        ],

        /*'world-bloggers-awards' => [
            'title'         => 'WBA',
            'description'   => [
                ''
            ],
            'tools'         => [
                'Shopify'
            ],
        ],*/

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
                'PHP',
                'CSS',
                'JS'
            ],
            'icon'          => 'icons.projects.sync'
        ]
    ]

];
