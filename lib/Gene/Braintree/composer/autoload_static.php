<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7455c3ad034c8ce201482929f9f6ebca
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7455c3ad034c8ce201482929f9f6ebca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7455c3ad034c8ce201482929f9f6ebca::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7455c3ad034c8ce201482929f9f6ebca::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}