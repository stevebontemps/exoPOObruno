<?php


include_once('Gateau.php');


/* mes tests */
print_r("*****ingredient*****");
?>
    <br/>

<?php
$gateauFraise = new Gateau('fraise','3L');
print_r($gateauFraise->getIngredient());
?>
    <br/>

<?php
$gateauAuChocolat = new Gateau('chocolat', '2L');
print_r($gateauAuChocolat->getIngredient());
?>
    <br/>

<?php
$gateauVanille = new Gateau('vanille', '1L');
print_r($gateauVanille->getIngredient());
?>
    <br/>

<?php

print_r("*****lait*****");

?>
    <br/>

<?php

print_r($gateauFraise->getLait());

?>
    <br/>

<?php

print_r($gateauAuChocolat->getLait());

?>
    <br/>

<?php

print_r($gateauVanille->getLait());

?>
    <br/>

<?php

print_r("*****les deux*****");

?>
    <br/>

<?php

print_r($gateauFraise->toString());

?>
    <br/>

<?php

print_r($gateauAuChocolat->toString());

?>
    <br/>
<?php

print_r($gateauVanille->toString());

?>
    <br/>

<?php

print_r($gateauVanille->getIngredient("chocolat"));

?>

