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
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### CONTAO MODULE ###';

            return $objTemplate->parse();
        }

        return parent::generate();
    }

    protected function compile()
    {
        $this->Template->vivenioEventBaseUrl = $GLOBALS['TL_CONFIG']['vivenioEventBaseUrl'];
    }
}
