<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SKU settings
    |--------------------------------------------------------------------------
    |
    | Set up your SKU
    |
    */
    'default' => [
        /*
         * SKU is based on a specific field of a model
         *
         */
        'source' => 'name',

        /*
         * Destination model field name
         *
         */
        'field' => 'sku',

        /*
         * SKU separator
         *
         */
        'separator' => '-',

        /*
         * Shall SKUs be enforced to be unique
         *
         */
        'unique' => true,

        /*
         * Length of string generated from field
         *
         */
        'limit' => 3,

        /*
         * Length sku generated must be greater then limit
         *
         */
        'length' => 8,

        /*
         * prefix to sku
         *
         */
        'prefix' => '',

        /*
         * suffix to sku
         *
         */
        'suffix' => '',

        'alpha_num' => false,

        /*
         * Shall SKUs be generated on create
         *
         */
        'generate_on_create' => true,

        /*
         * Shall SKUs be re-generated on update
         *
         */
        'generate_on_update' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | SKU Generator
    |--------------------------------------------------------------------------
    |
    | Define your own generator if needed.
    | It must implement \BinaryCats\Sku\Contracts\SkuGenerator
    |
    */
    'generator' => \BinaryCats\Sku\Concerns\SkuGenerator::class,
];
