<?php

/*
 * This file is part of the Vivenio Contao Bundle.
 *
 * (c) vivenio Software GmbH <https://www.vivenio.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/vivenio_contao/assets/seamless.parent.js';
}

$GLOBALS['TL_CTE']['vivenio'] = array
(
    'vivenioEventRegistration' => '\\Vivenio\\ContaoBundle\\Elements\\ContentEventRegistration'
);