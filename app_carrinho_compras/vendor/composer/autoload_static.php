<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c317b88b5461222c23d5169ed6531e6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AppCarrinhoCompras\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AppCarrinhoCompras\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AppCarrinhoCompras\\CarrinhoCompra' => __DIR__ . '/../..' . '/src/CarrinhoCompra.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c317b88b5461222c23d5169ed6531e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c317b88b5461222c23d5169ed6531e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c317b88b5461222c23d5169ed6531e6::$classMap;

        }, null, ClassLoader::class);
    }
}
