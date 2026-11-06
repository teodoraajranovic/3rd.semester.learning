<?php
//niz kao parametar
function Prosek($ocene)
{
    if (count ($ocene)==0)
        return0;
    return array_sum($ocene) / count($ocene);
}
// niz kao povratna vrednost - funkcija vraca vise podataka odjednom
function MinMax ($niz)
{
    return ("min"=> min($niz), "max" => max($niz));
}
// funkcija koja ispisuje elemente niza 
function IspisNiza ($naslov, $niz)
{
    echo "<b>$naslov;</b>" . implode(", ", $niz). "<br/.";
}
$ocene = array(8, 10, 7, 9, 10);
$temperature = array (12, 5, 18, -2, 9);
IspisNiza ("Temperature", $temperature);
$rez = MinMax ($temperature);
echo "Najniza: {$rez['min']"}, najvisa: {$rez['max']}<br/>";
//raspakivanja vracenog niza u promenljive
['min' => $najmanja, "max" => $najveca] = MinMax($temperature);
echo "raspon temperatura: " . ($najveca - $najmanja) . "stepeni<br/>";
?>