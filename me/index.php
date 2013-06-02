<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<p>Varmt välkommen till min site!</p>

<p>Jag heter Christoffer Rosenlind och det är jag som är skaparen utav denna hemsidan. Jag studerar webbdesign på Blekinge Tekniska Högskola.
 Jag är en kille på 23 år som för tillfället bor i Borås, men är ursprungligen från Nyköping.</p>
<p>Mina stora intressen här i livet är datorer, poker och såklart min sambo! Jag har tidigare jobbat inom industri främst, bl.a som kranförare och logistiker, men även på Skatteverket.</p>

EOD;
// Hand over to the template engine.
include(__DIR__."/theme/template.php");
?>