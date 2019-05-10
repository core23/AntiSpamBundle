<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\AntiSpamBundle\Tests;

use Core23\AntiSpamBundle\Core23AntiSpamBundle;
use Core23\AntiSpamBundle\DependencyInjection\Core23AntiSpamExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

class Core23AntiSpamBundleTest extends TestCase
{
    public function testItIsInstantiable(): void
    {
        $bundle = new Core23AntiSpamBundle();

        static::assertInstanceOf(BundleInterface::class, $bundle);
    }

    public function testGetContainerExtension(): void
    {
        $bundle = new Core23AntiSpamBundle();

        static::assertInstanceOf(Core23AntiSpamExtension::class, $bundle->getContainerExtension());
    }
}
