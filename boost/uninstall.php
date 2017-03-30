<?php

/**
 * Uninstall file for blog
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */

function blog_uninstall(&$content)
{
    $content[] = 'Hangman Removed.';
    return TRUE;
}
