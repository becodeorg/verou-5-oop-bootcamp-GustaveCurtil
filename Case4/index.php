<?php

require_once "Students.php";

$students = [
    new Students("Dante Hicks", 92, 'group1'),
    new Students("Randal Graves", 48, 'group2'),
    new Students("Veronica Loughran", 70, 'group1'),
    new Students("Caitlin Bree", 65, 'group2'),
    new Students("Jay", 82, 'group1'),
    new Students("Silent Bob", 69, 'group2'),
    new Students("Elias Grover", 75, 'group1'),
    new Students("Becky Scott", 71, 'group2'),
    new Students("Willam Black", 66, 'group1'),
    new Students("Julie Dwyer", 72, 'group2'),
    new Students("Rick Derris", 57, 'group1'),
    new Students("Mr. Dante Hicks Sr.", 68, 'group2'),
    new Students("Olaf Oleeson", 73, 'group1'),
    new Students("Alyssa Jones", 90, 'group2'),
    new Students("Heather Jones", 72, 'group1'),
    new Students("Steve-Dave Pulasti", 69, 'group2'),
    new Students("Walt Grover", 71, 'group1'),
    new Students("Caitlin's Mom", 48, 'group2'),
    new Students("Angry Mourner", 65, 'group1'),
    new Students("Egg Man", 71, 'group2'),
];

function calculateAverage($students){
    $totalGroup1=0;
    $totalGroup2=0;

    $studentsInGroup1=0;
    $studentsInGroup2=0;

    foreach ($students as $student) {

        if ($student->group === "group1") {
            $totalGroup1 += $student->grade;
            $studentsInGroup1 += 1;
        } if ($student->group === "group2") {
            $totalGroup2 += $student->grade;
            $studentsInGroup2 += 1;
        }

    }

    $averageGroup1 = $totalGroup1/$studentsInGroup1;
    $averageGroup2 = $totalGroup2/$studentsInGroup2;

    echo "<h2>Average grades per group</h2>";
    echo "Group 1 : " . $averageGroup1 . "<br>";
    echo "Group 2 : " . $averageGroup2;
}

function switchBestStudent($group) {

}

calculateAverage($students);


