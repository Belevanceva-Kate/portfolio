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

    'title' => 'Нещодавні проекти',

    'list'  => [

        'shiokfarm' => [
            'title'         => 'ShiokFarm',
            'excerpt'       => [
                'Екологічно чиста продукція'
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
                'Це магазин, який продає екологічно чисті овочі, фрукти, вино та інші продукти в Сінгапурі.',
                'Клієнту необхідно було застосувати специфічні вимоги до доставки замовлень та її розрахунку, зробити кастомізовані рекомендації для кожного товару, додати функціонал подарункових карт. Також необхідно було надати можливість при оформленні замовлення прив`язати його до підписки друга або до своєї, вже існуючої.',
                'Процес розробки вівся на тестовому магазині, щоб ніяк не зачепити ні сам сайт, ні існуючі на ньому підписки. Після того, як були виконані всі завдання, ми зробили повний трансфер сайту на "живий" магазин. Також ми зв`язалися з командою технічної підтримки додатку підписок і надали їм файл для оновлення всіх старих продуктів на нові.'
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
                'Публічний Shopify додаток для синхронізації продуктів з Microsoft Merchant Center'
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
                'Метою цього проекту була синхронізація продуктів з магазину Shopify до Microsoft Merchant Center для подальшого просування у вигляді рекламних банерів в пошуковій системі Bing.',
                'Для цього необхідно було дослідити документацію Bing Ads API, налаштувати додаток в Microsoft Azure, написати функціонал аутентифікації в Microsoft прямо з додатку Shopify і розробити автоматичну синхронізацію продуктів з Microsoft Merchant Center.',
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
                'Протипожежне обладнання'
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
                'Дане підприємство займається виробництвом, продажем і обслуговуванням протипожежного обладнання. Продукція поставляється як для виробництв, офісів, так і для дому. ',
                'Розроблений інтернет-магазин є багатомовним. У ньому є російська та українська версії.',
                'Для сторінки колекції був розроблений функціонал фільтрації, який групується за типами (діаметри, вага і т.д.). Варіації товару на сторінці продукту показуються клієнту у вигляді чотирикутників. Такі продукти не можна покласти в кошик, без вибору варіанту.'
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
                'Веб-профайл з описом досвіду і навичок'
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
                'Веб-профайл з описом досвіду і навичок. Також можна переглянути більш розгорнуту інформацію про проекти та технології, які на них використовувались.',
                'Є можливість в налаштуваннях змінити кольорову схему на темну або світлу, а також переключити мови.'
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
                'Магазин суперфудів'
            ],
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'Blendtopia',
                    'link'      => 'https://blendtopia.com'
                ]
            ],
            'handle'        => 'blendtopia',
            'description'   => [
                'Це бізнес з продажу суперфудів.',
                'Метою проекту було реалізувати збір продуктів в бокси дати клієнту можливість \'підписатися\' на їх постійну доставку, яку можна буде змінювати.',
                'Є кілька типів боксів: заздалегідь сформовані та кастомні. Перший з них має вже готовий набір продуктів за смаками і кількістю. Другий - дає можливість користувачу самому вибрати скільки і які смаки він хоче купити.',
                'Для цього проекту створювався унікальний дизайн і бокс-білдер. Була розроблена Front-End частина, а також Back-End, який допомагав плагіну підписок правильно інтерпретувати бокси.'
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
                'Публічне Shopify додаток для продажу кодів'
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
                'Додаток допомагає володарям онлайн магазинів реалізовувати серійні ключі. За допомогою додатку вони можуть закріплювати їх за якимось продуктом, а також зберігати мультимовні посилання для їх активації.',
                'Наприклад, клієнт хоче купити серійний ключ для гри. Після здійснення оплати, йому на пошту приходить лист, в якому вказується продукт, серійний ключ до нього і посилання на активацію. Також він може переглянути цю інформацію в своїй особистому аккаунті.',
                'Додаток розроблий під платформу Shopify.',
//                'На даний момент проходить рев\'ю від Shopify.'
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
                'Магазин, що спеціалізується на продажу каннабідіола'
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
                'Бізнес, який спеціалізується на продажу каннабідіола. Клієнтам надається безліч продуктів з цього компонента, в тому числі і для тварин. Також користувачі можуть ознайомитись з результатами лабораторних тестів кожного продукту.'
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
                'Shopify додаток для синхронізації товарів'
            ],
            'handle'        => 'marketplace-genie',
            'description'   => [
                'Це високонавантажених додаток. Головне його завдання полягало в тому, щоб дати можливість синхронізувати віддалений маркетплейс з Shopify магазином. Синхронізація може виконуватися як в призначений клієнтом час із вказаною періодичністю, так і вручну. Всі дії і процеси логуються.'
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
