<?php

/*
 * This file is part of the Vivenio Contao Bundle.
 *
 * (c) vivenio Software GmbH <https://www.vivenio.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vivenio\ContaoBundle\Elements;

class ContentEventRegistration extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_vivenio_event_registration';

    public function generate()
    {
        $generated = parent::generate();

        if (TL_MODE === 'BE') {
            return '<div style="min-height: 65px;">' . $generated . '</div>';
        }

        return $generated;
    }

    protected function compile()
    {
        $this->Template->vivenioEventBaseUrl = $GLOBALS['TL_CONFIG']['vivenioEventBaseUrl'];
    }
}
