<?php

declare(strict_types=1);

return [
    /* Navigation */
    'navigation' => [
        'group' => 'Sales',
        'sort' => 1,
    ],

    /* Payment Gateways */
    'payment_gateways' => [
        'stripe' => 'Stripe',
        'chip' => 'CHIP',
        'manual' => 'Manual',
    ],

    /* Pages */
    'pages' => [
        'timeline' => true,
        'fulfillment' => true,
    ],
];
