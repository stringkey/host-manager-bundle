<?php

namespace Kjonski\HowToBundle\Tests;

use Stringkey\HostManagerBundle\DependencyInjection\StringkeyHostManagerExtension;
use Stringkey\HostManagerBundle\StringkeyHostManagerBundle;
use PHPUnit\Framework\TestCase;

class StringkeyHostManagerBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new StringkeyHostManagerBundle();
        $this->assertInstanceOf(StringkeyHostManagerExtension::class, $bundle->getContainerExtension());
    }
}