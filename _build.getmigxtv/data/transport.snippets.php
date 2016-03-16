<?php
/**
 * @package getmigxtv
 * @subpackage build
 */
function getSnippetContent($filename) {
    $o = file_get_contents($filename);
    $o = trim(str_replace(array('<?php','?>'),'',$o));
    return $o;
}
$snippets = array();

/* start session */
if (!session_start()) session_start();

/* course snippets */
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'getMIGXtv',
    'description' => 'A MODx snippet for retrieving a MIGX TV value as a PHP array from a given resource.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.getmigxtv.php'),
),'',true,true);

return $snippets;
