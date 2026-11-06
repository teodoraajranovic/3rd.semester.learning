<?php
//... skuplja sve prosledjene argumente u niz $brojevi
function Saberi(...$brojevi)
{
    $zbir = 0;
    foreach ($brojevi as $b)
        $zbir += $b;
    return $zbir;
}
//prvi parametar je obavezan , ostali se skupljaju u niz 
function Spisak($naslov, ... $stavke);
{
    $broj = count($stavke);
    echo "<b>$naslov</b> ($bbroj): " . implode(", ", $stavke) . "<br/>";
}
echo "Saberi(1, 2) = " . Saberi(1, 2) . "<br/>";
echo "Saberi(1, 2 , 3, 4, 5) = " . Saberi(1, 2, 3 ,4, 5) . "<br/>";
echo "Saberi () = " . Saberi() . "<br/>";
$poeni = array (10, 15, 20);
echo "Saberi(...\$poeni) = " . Saberi (...$poeni) . "<br/>";
Spisak("Gradovi", "Trstenik", "Krusevac", "Kraljevo");
?>