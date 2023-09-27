<?php

// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = array(
	'sutdent_1' => array(
		'Math'    => 40,
		'English' => 40,
		'Science' => 90,
	),
	'sutdent_2' => array(
		'Math'    => 60,
		'English' => 80,
		'Science' => 70,
	),
	'sutdent_3' => array(
		'Math'    => 90,
		'English' => 80,
		'Science' => 95,
	),

);




function geades( $avg_scores ) {
	if ( $avg_scores >= 90 ) {
		return 'A+';
	} elseif ( $avg_scores >= 80 ) {
		return 'A';

	} elseif ( $avg_scores >= 70 ) {
		return 'A-';

	} elseif ( $avg_scores >= 60 ) {
		return 'B';

	} elseif ( $avg_scores >= 50 ) {
		return 'C';

	} elseif ( $avg_scores >= 40 ) {
		return 'D';

	} elseif ( $avg_scores <= 33 ) {
		return 'F';

	} else {
		return '';
	}
}


function geadeCalculate( $studentGrades ) {

	foreach ( $studentGrades as $stdGrade => $scores ) {

		$avg_scores = array_sum( $scores );
		echo geades( $avg_scores / count( $scores ) ) . '<br>';
	}

}

geadeCalculate( $studentGrades );