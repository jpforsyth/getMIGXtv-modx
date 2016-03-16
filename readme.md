getMIGXtv 1.0.0
===============

Version:    1.0.0<br />
Author:     Jim Forsyth (jpforsyth.com)<br />
Copyright:  2016 Jim Forsyth<br />
License:    MIT<br />

Installation
------------
Install via MODx Package Management (coming soon) or upload getmigxtv-1.0.0-pl.transport.zip and install from local source.

Description
-----------

getMIGXtv is a snippet that takes the value of a MIGX TV and converts it into a PHP array before storing it as a placeholder for use in other snippets/chunks. Arrays can be re-keyed using any available field, e.g. MIGX_id, and placeholders can be given a custom name.

Configuration 1 (default):
--------------------------
Example (inside a snippet):
<pre>$modx->runSnippet('getMIGXtv',array(
  'id' => 123,
  'name' => `MY_MIGX_TV`
  'key' => `MIGX_id`,
  'placeholder' => `results`
));
$results = $modx->getPlaceholder('results');</pre>

Properties
----------

<table>
<tr>
	<th>Property</th><th>Description</th><th>Type</th><th>Optional</th><th>Default</th></tr>
<tr>
  <td>id</td>
  <td>The resource ID</td>
	<td>Integer</td>
	<td>False</td>
	<td></td>
</tr><tr>
  <td>name</td>
  <td>The template variable name</td>
	<td>String</td>
	<td>False</td>
	<td></td>
</tr><tr>
  <td>key</td>
  <td>The key to sort array by</td>
	<td>String</td>
	<td>True</td>
  <td>menuindex</td>
</tr><tr>
  <td>placeholder</td>
  <td>The placeholder name</td>
	<td>String</td>
	<td>True</td>
  <td>migx</td>
</tr>
</table>
