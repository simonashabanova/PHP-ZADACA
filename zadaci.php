<?php 

$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Aleksandra', 'prezime' => 'Aleksandrovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
];

$MAX_IME = 0;
$MAX_PREZIME = 0;
$MIN_IME = 100;
$MIN_PREZIME = 100;

$najdolgo_ime = '';
$najdolgo_prezime = '';
$najkratko_ime = '';
$najkratko_prezime = '';

for($i = 0; $i < count($studenti); $i++){
    if(strlen($studenti[$i]['ime']) > $MAX_IME) {
        $MAX_IME = strlen($studenti[$i] ['ime']);
        $najdolgo_ime = $studenti[$i] ['ime']; 
    }
    if(strlen($studenti[$i]['ime']) > $MAX_PREZIME) {
        $MAX_PREZIME = strlen($studenti[$i] ['prezime']);
        $najdolgo_prezime = $studenti[$i] ['prezime'];
        
    }
    if(strlen($studenti[$i]['ime']) < $MIN_IME) {
        $MIN_IME = strlen($studenti[$i] ['ime']);
        $najkratko_ime = $studenti[$i] ['ime'];
        
    }
    if(strlen($studenti[$i]['ime']) < $MIN_PREZIME) {
        $MIN_PREZIME = strlen($studenti[$i] ['prezime']);
        $najkratko_prezime = $studenti[$i] ['prezime'];
        
    }
}

echo "<p>Najdolgo ime e imeto: $najdolgo_ime</p>";
echo "<p>Najkratko ime e imeto: $najkratko_ime</p>";
echo "<p>Najdolgo prezime e prezimeto: $najdolgo_prezime</p>";
echo "<p>Najkratkoto prezime e prezimeto: $najkratko_prezime</p>";

?>