<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Kmom 01</h1>
<p>Kmom01 upplevde jag som lite krångligt och svårt, att komma igång med GitHub var inte enkelt med tanke på att jag aldrig tidigare sysslat med det. Jag följde 
youtube guiderna, som för övrigt var jättebra och nånting ni borde ha med i mer kurser, och det hjälpte mig en bra bit på vägen. Samtidigt så tycker jag att det
borde väll finnas nåt smidigare sätt än GitHub att ladda upp filer, typ som nåt Filezilla liknande?</p>
<p>När jag fixat GitHub och läst guiderna som länkats så löste det sig ganska snabbt.</p>
<p>Personligen så vet jag inte om jag gillar Boilerplate konceptet ännu, men jag kanske ändrar åsikt lite senare i kursen, vem vet.</p>
<p>Jag använder Notepad++ i min utvecklingsmiljö.</p>
<p>Ja hur tänkte jag, jag följde bara guiderna som fanns och kämpade på därifrån.</p>
EOD;
// Hand over to the template engine.
include(__DIR__."/theme/template.php");
?>