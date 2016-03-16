<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Software Copyright (c) 2016 Jim Forsyth
',
    'readme' => '--------------------
Extra: getMIGXtv
--------------------

Version:    1.0.0
Author:     Jim Forsyth (jpforsyth.com)
Copyright:  2016 Jim Forsyth
License:    MIT

Description:
A MODx snippet for retrieving a MIGX TV value as a PHP array from a given resource.

Options:
id:          The resource ID (int)
name:        The template variable name (string)
key:         (Optional) The key to sort array by. Defaults to \'MIGX_id\' (string)
placeholder: (Optional) The placeholder name. Defaults to \'migx\' (string)

Example (inside a snippet):
$modx->runSnippet(\'getMIGXtv\',array(
  \'id\' => 123,
  \'name\' => `MY_MIGX_TV`
  \'key\' => `MIGX_id`,
  \'placeholder\' => `results`
));
$results = $modx->getPlaceholder(\'results\');
',
    'changelog' => 'Changelog file for getMIGXtv extra.

getMIGXtv 1.0.0
====================================
- This is a fresh extra. Nothing to report.
',
    'setup-options' => 'getmigxtv-1.0.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '2371f76912c4de76368bc0cbaede1ba5',
      'native_key' => 1,
      'filename' => 'modCategory/817e6126c6bf4a5dddff8f7de5024e7c.vehicle',
    ),
  ),
);