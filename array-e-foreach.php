<?php
$cesta = [
'Banana'=>4,
'Maçã'=>2,
'Abacate'=>6,
'Kiwi'=>5,
'Mamão'=>16,
'Morango'=>14
];?>
<p>A cesta contém:</p>
<ul>
<?php
foreach ($cesta as $fruta => $quantidade){
    echo "<li> $quantidade unidades de $fruta </li>";

}

?>
</ul>