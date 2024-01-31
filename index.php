<?php
$serieA = [
    'Squadre' => ['Roma', 'Milan', 'Juventus'],
    'Formazione' => ['4-3-3', '4-3-3', '3-4-3']
];

for ($i=0; $i < count($serieA['Squadre']); $i++) {
    print 'questa è la squadra ' .$serieA['Squadre'][$i].'<br>';
}

for ($i=0; $i < count($serieA['Formazione']); $i++) {
    print 'Questa è la formazione della squadra '. $serieA['Squadre'][$i]. ' - '.'Questa è la formazione '.$serieA['Formazione'][$i].'<br>';
}
?>