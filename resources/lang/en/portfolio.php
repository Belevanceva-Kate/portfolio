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
    'show_details' => 'Show details',

    'list'  => [

        'blendtopia' => [
            'title'         => 'Blendtopia',
            'excerpt'       => [
                'Smoothies & Superfoods Store'
            ],
//            'title'         => 'Blendtopia. Blend your smoothie',
            'site_title'    => 'Blendtopia',
            'site_link'     => 'https://www.blendtopia.com',
            'handle'        => 'blendtopia',
            'banner'        => '/img/projects/blendtopia.png',
            'description'   => [
                'This is a smoothie business. They are portioned.',
                'The order can be carried out in boxes with sizes of 8, 12, 16 and 24 smoothies. Each box can simply be bought, or "subscribe" to it. That is, you can receive them every 1, 2, 4 or 6 weeks.',
                'There are several types of boxes: predefined and custom. The first one has a ready-made set of smoothies by taste and quantity. The second - allows the user to choose how much and what tastes he/she wants to buy.',
                'A unique design and box builder has been created for this project. The Front-End part was developed, as well as the Back-End, which helped the subscription plugin interpret the boxes correctly.'
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
                'Shopify public app for selling codes'
            ],
            'site_title'    => 'Foridev - #1 Selling Codes app',
            'site_link'     => 'https://shopify/apps',
            'handle'        => 'codes',
            'description'   => [
                'Application developed for the Shopify platform.',
                'It helps shop owners sell serial keys. With the help of the app, they can pin them to some product, as well as store multilingual links to activate them.',
                'For example, a customer wants to buy a serial key for a game. After order payment, a letter will be sent to client\'s mail in which the product is indicated, the serial key to it and a link to the activation. He/she can also view this information in personal account.'
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
//            'title'         => 'CannaGo. Cannabidiol shop',
            'site_title'    => 'CannaGo',
            'site_link'     => 'https://cannago.co.uk/',
            'handle'        => 'cannago',
            'description'   => [
                'Front-end of the site'
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
//            'icon'          => 'icons.projects.smoothie'
        ],

        'marketplace-genie' => [
            'title'         => 'Marketplace Genie',
            'excerpt'       => [
                'Shopify public app for synchronization store products'
            ],
            'handle'        => 'marketplace-genie',
            'description'   => [
                'HighLoad app. Sync two stores. one of them is takealot shop. And another'
            ],
            'tools'         => [
                'Shopify',
                'PHP'
            ],
            'icon'          => 'icons.projects.sync'
        ]
    ]

];
