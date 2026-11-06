<?php
function Povrsina(float $a, float $b): float 
{
    return $a * $b;
}
function Naslov (string $tekst): void
{
    echo "<b>" . strtoupper($tekst) . "</b><br/>";
}
function NadjiGrad(string $oznaka): ?string
{
    $gradovi = array("TS" => "Trstenik", "KS" => "Krusevac", "KV" => "Kraljevo");
    return $gradovi[$oznaka] ?? null; //null ako oznaka ne postoji
}
Naslov("Deklarisanje tipova");
echo "Povrsina 4.5 x 2 = ". Povrsina(4.5, 2) . "<br/>";
echo "Povrsina \"5\" x \"2\" = ". Povrsina("5", "2") . "<br/>";
echo "TS = " . NadjiGrad("TS") . "<br/>";
$g = NadjiGrad("BG");
if ($g === null) 
    echo " BG = oznaka nije pronadjena <br/>";
?>