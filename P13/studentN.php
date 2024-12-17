<?php
$student=["anikha","babeesh","zoya","asla","ganga"];
print "student list:";
echo "<pre>";
print_r($student);
echo "</pre>";
echo "<pre>";
print "sorted list are:\n";
asort($student);
print_r($student);
echo "</pre>";
echo "<pre>";
print "Descending order list are:\n";
arsort($student);
print_r($student);
echo "</pre>";
?>