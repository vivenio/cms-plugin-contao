<?php

/*
 * This file is part of the Vivenio Contao Bundle.
 *
 * (c) vivenio Software GmbH <https://www.vivenio.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vivenio\ContaoBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Vivenio\ContaoBundle\VivenioContaoBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(VivenioContaoBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['vivenio_contao']),
        ];
    }
}
