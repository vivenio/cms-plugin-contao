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
 * Register the classes
 */
ClassLoader::addClasses(array(
    'Vivenio\\ContaoBundle\\Elements\\ContentEventRegistration'   => 'vendor/vivenio/cms-plugin-contao/src/Resources/contao/elements/ContentEventRegistration.php',
    // 'Vivenio\\ContaoBundle\\Elements\\ContentEventRegistration'   => 'system/modules/vivenio_contao/elements/ContentEventRegistration.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_vivenio_event_registration' => 'vendor/vivenio/cms-plugin-contao/src/Resources/contao/templates',
    // 'ce_vivenio_event_registration' => 'system/modules/vivenio_contao/templates',
));
