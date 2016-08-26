<?php

/*
 * This file is part of the Phospr LocaleBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phospr\LocaleBundle\Tests\Twig\Extension;

use Phospr\Locale;
use Phospr\LocaleBundle\Twig\Extension\LocaleExtension;
use PHPUnit_Framework_TestCase;

/**
 * LocaleExtensionTest
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  1.0.0
 */
class LocaleExtensionTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test getLocale()
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  1.0.0
     */
    public function testGetLocale()
    {
        $extension = new LocaleExtension();
        $locale = $extension->getLocale('fr_CA');

        $this->assertSame('CA', $locale->getCountryCode());
        $this->assertSame('fr', $locale->getLanguageCode());
    }
}
