<?php

/*
 * This file is part of the Vivenio Contao Bundle.
 *
 * (c) vivenio Software GmbH <https://www.vivenio.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(
    ';{backend_legend',
    ';{vivenio_legend},vivenioEventBaseUrl;{backend_legend',
    $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']
);

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['vivenioEventBaseUrl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['vivenioEventBaseUrl'],
    'inputType' => 'text',
    'eval' => array(
        'mandatory' => true,
        'trailingSlash' => true,
        'rgxp' => 'url',
        'decodeEntities' => true,
        'maxlength' => 255,
        'tl_class' => 'long'
    )
);
