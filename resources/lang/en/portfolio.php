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

    'title' => 'Recent Projects',

    'list'  => [

        'fire-pro' => [
            'title'         => 'Fire Pro — TSC-engineering',
            'excerpt'       => [
                'Fire-fighting equipment'
            ],
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'CannaGo',
                    'link'      => 'https://fire-pro.com.ua'
                ]
            ],
            'handle'        => 'fire-pro',
            'description'   => [
                'This company is engaged in the production, sale and service of fire-fighting equipment. Products are supplied both for factories, offices, and for home.',
                'The developed online store is multilingual. It has Russian and Ukrainian versions.',
                'A filtering functionality was work out for the collection page, which is grouped by type (diameter, weight, etc.).
Goods variations on the product page are shown to the customer as rectangles. Such products cannot be put into the cart without choosing an option.'
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
                'Gulp'
            ],
            'icon'          => 'icons.projects.fire'
        ],

        'portfolio' => [
            'title'         => 'Portfolio',
            'excerpt'       => [
                'The web profile with information about personal experience and skills'
            ],
            'links'         => [
                [
                    'resource'  => 'Github',
                    'title'     => 'Portfolio',
                    'link'      => 'https://github.com/Belevanceva-Kate/portfolio'
                ],
                [
                    'resource'  => 'Website',
                    'title'     => 'Portfolio',
                    'link'      => 'https://belekate.tk'
                ]
            ],
            'handle'        => 'portfolio',
            'description'   => [
                'Web profile describes experience and skills. It allows the user to view detailed information about technologies that were used in the project.',
                'The user can switch dark or light mode, as well as choose languages in the settings.'
            ],
            'tools'         => [
                'Laravel',
                'jQuery',
                'SCSS'
            ],
            'icon'          => 'icons.projects.person'
        ],

        'blendtopia' => [
            'title'         => 'Blendtopia',
            'excerpt'       => [
                'Superfoods Store'
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
                'This is superfood business.',
                'The goal of the project was to realize product boxes assembly to give the customer a chance either to \'subscribe\' a constant supply or to make a one-time purchase. The client could edit the subscription.',
                'There are several types of boxes: predefined and custom. The first one has a ready-made set of products by flavours and quantity. The second allows the user to choose how much and what flavours he/she wants to buy.',
                'A unique design and box builder was created for this project. Custom layout was developed implementing the Back-End part which helped the subscription plugin interpret the boxes correctly.'
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
                'Laravel',
                'Subscriptions by ReCharge App'
            ],
            'icon'          => 'icons.projects.smoothie'
        ],

        'codes' => [
            'title'         => 'Selling Codes App',
            'excerpt'       => [
                'Shopify public app for selling codes'
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
                'Application helps shop owners to sell serial keys. With the help of the app, they can pin the keys to a certain product and add multilingual links to activate them.',
                'For example, a customer wants to buy a serial key for a game. After paying the order, a letter will be sent to the client\'s email containing the product, the serial key and the link to activate it. He/she can also view this information in the personal account.',
                'Application was developed for the Shopify platform.',
//                'Currently being reviewed.'
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
                'Cannabidiol Shop'
            ],
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'CannaGo',
                    'link'      => 'https://cannago.co.uk'
                ]
            ],
            'handle'        => 'cannago',
            'description'   => [
                'Business that specializes in the sale of cannabidiol. It has got many products with this component available for the clients as well as for their pets. Users can also view laboratory test results for each product.'
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
                'Gulp'
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
                'Shopify app for products synchronization'
            ],
            'handle'        => 'marketplace-genie',
            'description'   => [
                'This is a highly loaded application. Its main task was to provide the ability to synchronize the remote marketplace with Shopify store. Synchronization can be performed both at the time appointed by the client with the specified periodicity, and manually. All actions and processes are logged.'
            ],
            'tools'         => [
                'Shopify',
                'PHP'
            ],
            'icon'          => 'icons.projects.sync'
        ]
    ]

];
