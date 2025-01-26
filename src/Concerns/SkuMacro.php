<?php

namespace BinaryCats\Sku\Concerns;

use Illuminate\Support\Str;

class SkuMacro
{
    /**
     * Sku generator mixin.
     *
     * @param  string  $source
     * @param  string  $separator
     * @return \Closure
     */
    public function sku(): \Closure
    {
        return function (
            $source,
            $separator = null,
            $alpha = false,
            $limit=3,
            $length=8
        ) {
            $digits = $alpha
                ? '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                : '0123456789';

            $separator = $separator ?: config('laravel-sku.default.separator');
            // Clean up the source
            $source = Str::studly($source);
            // Limit the source
            $source = Str::limit($source, $limit, '');
            // signature
            $signature = str_shuffle(str_repeat(str_pad($digits, 8, rand(0, 9).rand(0, 9), STR_PAD_LEFT), 2));
            // Sanitize the signature
            $signature = substr($signature, 0, $length);
            // Implode with random
            $result = implode($separator, [$source, $signature]);

            // Uppercase it
            return $prefix.Str::upper($result).$suffix;
        };
    }
}
