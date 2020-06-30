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
                    'link'      => '#'
                ]
            ],
            'handle'        => 'portfolio',
            'description'   => [
                'Web profile describing experience and skills. It allows the user to view detailed information about technologies that were used in the project.',
                'The user can switch dark or light mode, as well as switch languages in the settings.'
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
            'links'         => [
                [
                    'resource'  => 'Website',
                    'title'     => 'Blendtopia',
                    'link'      => 'https://blendtopia.com'
                ]
            ],
            'handle'        => 'blendtopia',
//            'banner'        => '/img/projects/blendtopia.png',
            'description'   => [
                'This is a superfood business.',
                'The goal of the project was to realize product boxes assembly to give the customer a chance to either \'subscribe\' to a constant supply or make a one-time purchase. The client could edit the subscription.',
                'There are several types of boxes: predefined and custom. The first one has a ready-made set of products by flavours and quantity. The second allows the user to choose how much and what flavours he/she wants to buy.',
                'A unique design and box builder was created for this project. Custom layout was developed implementing the Back-End part which helped the subscription plugin interpret the boxes correctly.'
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
            'links'         => [
                [
                    'resource'  => 'Shopify App Store',
                    'title'     => 'Foridev - Selling Codes app',
                    'link'      => 'https://apps.shopify.com/serial-keys-sale-module'
                ]
            ],
            'handle'        => 'codes',
            'description'   => [
                'Application helps shop owners sell serial keys. With the help of the app, they can pin the keys to a certain product and add multilingual links to activate them.',
                'For example, a customer wants to buy a serial key for a game. After order payment, a letter will be sent to the client\'s email containing the product, the serial key and a link to activate it. He/she can also view this information in the personal account.',
                'Application developed for the Shopify platform.',
//                'Currently being reviewed.'
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
                'A business that specializes in the sale of cannabidiol. It has many products with this component available for the clients as well as for their pets. Users can also view laboratory test results for each product.'
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
