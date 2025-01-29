<?php
$students = array(
"Amit"=>array(
"physics"=>70,
"chemisty"=>80,
"maths"=>90
),
"Chirag"=>array(
"physics"=>90,
"chemisty"=>80,
"maths"=>70
),
"Vandana"=>array(
"physics"=>80,
"chemisty"=>70,
"maths"=>90
)
);
foreach($students as $student=>$subjects)
{
    foreach($subjects as $subject=>$marks)
    {
        echo $student . " got " . $marks . " in " . $subject;
        echo "\n";
    }
}
?>
