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

        'portfolio' => [
            'title'         => 'Portfolio',
            'excerpt'       => [
                'The web profile with information about person\'s experience and skills'
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
                    'link'      => '#'
                ]
            ],
//            'site_title'    => 'Portfolio',
//            'site_link'     => 'https://www.blendtopia.com',
            'handle'        => 'portfolio',
            'description'   => [
                'The web profile describing experience and skills. You can also view detailed information about the project\'s technologies that were used.',
                'The user could switch dark or light mode, as well as switch languages in the settings.'
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
                'Superfoods Store'
            ],
//            'title'         => 'Blendtopia. Blend your smoothie',
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'Blendtopia',
                    'link'      => 'https://www.blendtopia.com'
                ]
            ],
//            'site_title'    => 'Blendtopia',
//            'site_link'     => 'https://www.blendtopia.com',
            'handle'        => 'blendtopia',
            'banner'        => '/img/projects/blendtopia.png',
            'description'   => [
                'This is a super food business.',
                'The goal of the project was to implement the collection of products in the boxes to give the customer the opportunity to \' subscribe\'to a constant supply which can be changed.',
                'There are several types of boxes: predefined and custom. The first one has a ready-made set of products by tastes and quantity. The second - allows the user to choose how much and what tastes he/she wants to buy.',
                'A unique design and box builder was created for this project. The Front-End part was developed, as well as the Back-End, which helped the subscription plugin interpret the boxes correctly. '
//                'This is a smoothie business. They are portioned.',
//                'The order can be carried out in boxes with sizes of 8, 12, 16 and 24 smoothies. Each box can simply be bought, or "subscribe" to it. That is, you can receive them every 1, 2, 4 or 6 weeks.',
//                'There are several types of boxes: predefined and custom. The first one has a ready-made set of smoothies by taste and quantity. The second - allows the user to choose how much and what tastes he/she wants to buy.',
//                'A unique design and box builder has been created for this project. The Front-End part was developed, as well as the Back-End, which helped the subscription plugin interpret the boxes correctly.'
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
//            'links'         => [
//                [
//                    'resource'  => 'Shopify App Store',
//                    'title'     => 'Foridev - Selling Codes app',
//                    'link'      => '#'
//                ]
//            ],
//            'site_title'    => 'Foridev - #1 Selling Codes app',
//            'site_link'     => 'https://shopify/apps',
            'handle'        => 'codes',
            'description'   => [
                'Application helps shop owners sell serial keys. With the help of the app, they can pin them to some product, as well as store multilingual links to activate them.',
                'For example, a customer wants to buy a serial key for a game. After order payment, a letter will be sent to client\'s mail in which the product is indicated, the serial key to it and a link to the activation. He/she can also view this information in personal account.',
                'Application developed for the Shopify platform.',
                'Currently being reviewing by Shopify.'
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
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'CannaGo',
                    'link'      => 'https://cannago.co.uk'
                ]
            ],
//            'site_title'    => 'CannaGo',
//            'site_link'     => 'https://cannago.co.uk/',
            'handle'        => 'cannago',
            'description'   => [
                'A business that specializes in the sale of cannabidiol. Customers are provided with many products from this component, including for animals. Users can also view laboratory test results for each product.'
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
