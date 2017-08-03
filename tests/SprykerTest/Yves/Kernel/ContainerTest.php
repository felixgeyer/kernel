<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Yves\Kernel;

use Codeception\Test\Unit;
use Spryker\Shared\Kernel\ContainerGlobals;
use Spryker\Shared\Kernel\LocatorLocatorInterface;
use Spryker\Yves\Kernel\Container;

/**
 * Auto-generated group annotations
 * @group SprykerTest
 * @group Yves
 * @group Kernel
 * @group ContainerTest
 * Add your own group annotations below this line
 */
class ContainerTest extends Unit
{

    const TEST_VALUE = 'foo';
    const TEST_KEY = 'test.value';

    /**
     * @return void
     */
    public function testGetLocatorShouldReturnInstanceOfLocator()
    {
        $container = new Container();

        $this->assertInstanceOf(LocatorLocatorInterface::class, $container->getLocator());
    }

    /**
     * @return void
     */
    public function testContainerShouldHaveAccessToGlobalProvidedDependency()
    {
        $containerGlobals = new ContainerGlobals();
        $containerGlobals[self::TEST_KEY] = self::TEST_VALUE;

        $container = new Container($containerGlobals->getContainerGlobals());

        $this->assertSame(self::TEST_VALUE, $container[self::TEST_KEY]);
    }

}
