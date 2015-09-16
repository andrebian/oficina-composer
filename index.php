<meta charset="utf8">
<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once "./vendor/autoload.php";

use Slug\Slugifier;
use BrazilianHelper\StateHelper as Teste;

$slugifier = new Slugifier();
$slugifier->setTransliterate(true);

$string = "André Com acentuação";
$slug = $slugifier->slugify($string);

echo "Normal: " . $string . "<br />";
echo "Slug: " . $slug . "<br />";


echo "<br /><br /><br /><br /><br /><br />";

$estados = Teste::getStates();
echo "<pre>";
print_r($estados);
echo "</pre>";

?>

<select>
<?php echo Teste::getHtmlForSelectElement(); ?>
</select>




