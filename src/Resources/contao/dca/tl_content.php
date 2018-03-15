<?php

/*
 * This file is part of the Vivenio Contao Bundle.
 *
 * (c) vivenio Software GmbH <https://www.vivenio.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (isset($GLOBALS['TL_DCA']['tl_content'])) {
    $GLOBALS['TL_DCA']['tl_content']['palettes']['vivenioEventRegistration'] = '{type_legend},type;{vivenio_legend},vivenioEventPath,vivenioEventForward;';

    // Fields
    $GLOBALS['TL_DCA']['tl_content']['fields']['vivenioEventPath'] = array
    (
        'label'            => &$GLOBALS['TL_LANG']['tl_content']['vivenioEventPath'],
        'exclude'          => true,
        'inputType'        => 'text',
        'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
        'sql'              => "varchar(255) NOT NULL default ''"
    );
    $GLOBALS['TL_DCA']['tl_content']['fields']['vivenioEventForward'] = array
    (
        'label'            => &$GLOBALS['TL_LANG']['tl_content']['vivenioEventForward'],
        'exclude'          => true,
        'inputType'        => 'checkbox',
        'default'          => 1,
        'eval'             => array('tl_class' => 'w50 clr'),
        'sql'              => "char(1) NOT NULL default ''"
    );
}
