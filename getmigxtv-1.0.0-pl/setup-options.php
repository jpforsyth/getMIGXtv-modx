<?php
/**
 * Build the setup options form.
 *
 * @package getmixtv
 * @subpackage build
 */
/* set some default values */

/* get values based on mode */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
        $output = '<h2>getMIGXtv Installer</h2>
        <p>Thanks for installing getMIGXtv! Find tutorials, utilities and downloads at: <a href="http://jpforsyth.com/?utm_source=modx&utm_medium=installer&utm_campaign=getmigxtv" target="_blank">jpforsyth.com</a></p><br />';
        break;
    case xPDOTransport::ACTION_UPGRADE:
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return $output;
