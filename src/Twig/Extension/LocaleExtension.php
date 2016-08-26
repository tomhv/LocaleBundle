<?php

/*
 * This file is part of the Phospr LocaleBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phospr\LocaleBundle\Twig\Extension;

use Phospr\Locale;
use Twig_Extension;
use Twig_SimpleFunction;

/**
 * LocaleExtension
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  1.0.0
 */
class LocaleExtension extends Twig_Extension
{
    /**
     * Get functions
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  1.0.0
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('locale', [
                $this,
                'getLocale'
            ]),
        ];
    }

    /**
     * Get locale
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  1.0.0
     *
     * @param string $localeAsString
     *
     * @return Locale
     */
    public function getLocale($localeAsString)
    {
        return Locale::fromString($localeAsString);
    }

    /**
     * Get name of Extension
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  1.0.0
     *
     * @return string
     */
    public function getName()
    {
        return 'phospr_locale';
    }
}
