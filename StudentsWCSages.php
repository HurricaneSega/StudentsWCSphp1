<?php
/**
 * Created by PhpStorm.
 * User: hurricane
 * Date: 04/09/17
 * Time: 21:44
 */
<?php
// Mes étudiants
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];


// Mon total est égales a la totalités des étudiants//$students
$total = $students["Emmanuel"] + $students["Thierry"] + $students["Pascal"] +
    $students["Eric"] + $students["Nicolas"];

//Ma moyenne est égale a la totalités diviser via balise count par le nombre d'étudiants
$moyenne = $total/ count($students);

// Affichage des ages et de la moyenne avec l 'aide de la balise echo
echo "Emmanuel a <strong> $students[Emmanuel] </strong> ans. ";
echo "Thierry a <strong> $students[Thierry] </strong> ans. ";
echo "Pascal a <strong> $students[Pascal] </strong> ans. ";
echo "Eric a <strong> $students[Eric] </strong> ans. ";
echo "Nicolas a <strong> $students[Nicolas] </strong> ans. ";
echo "La moyenne d'âge est des étudiants est de <strong> $moyenne </strong> ans.";