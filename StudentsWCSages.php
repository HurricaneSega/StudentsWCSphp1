
<?php
/**
 * Created by PhpStorm.
 * User: hurricane
 * Date: 09/09/17
 * Time: 09:56
 */

// troizieme essai avec une fonction  "foreach" et la fonction "array" afin de raccourcir mon code par rapport au precedent
//
$students = array("Emmanuel" => "42", "Thierry" => "51", "Pascal" => "45", "Eric" => "48", "Nicolas" => "19");
    foreach($students as $k=>$v){
        echo "$k a $v ans <br/>";
    }
// ici dessus echo me mettra en vue "$k" qui sera ma valeur clé donc les étudiants
//et "$v" donnera ma valeur qui sera l'age.

    $moyenne = array_sum($students)/count($students);

// donc au resultats final la moyenne sera le total de mes valeur "$students" avec la fonction "array_sum"
//diviser par le nombre d'étudiant avec "count".

echo "La moyenne d'âge des étudiants est de <strong> $moyenne </strong> ans.";
