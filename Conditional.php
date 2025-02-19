<?php
//Conditional Statements : if , if-else , if-elseif , nested-if

//1. If-else Statements
/*
$age=12;
if($age>=18)
{
	echo"Your are eligible for vote.";
}
else{
	echo"You can't Vote";
}
*/

//1. if elseif else Statements
/*
$subject1 = 85;
$subject2 = 78;
$subject3 = 90;
$subject4 = 65;
$subject5 = 88;

$total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

$percentage=($total/500)*100;
if($percentage>90){
	$grade="A+";
}
elseif($percentage>=80)
{
	$grade="A";
}
elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "F (Fail)";
}

echo"Total Marks =".$total."<br>";
echo"percentage=".number_format($percentage,2)."%<br>";
echo"Grade =".$grade."\n";
*/

//4. Nested If-else
	
$age=19;
if($age>=18){
	if($age<67){
		echo"Yes, you can vote";
	}else{
		echo"You can't vote anymore";
	}
}else{
	echo"You can't vote";
}

?>