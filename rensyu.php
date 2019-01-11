<?php
$student1  = ['class' => 1, 'name' => 'Aさん', 'free' =>  "月曜"];
$student2  = ['class' => 1, 'name' => 'Bさん', 'free' =>  "木曜"];
$student3  = ['class' => 1, 'name' => 'Cさん', 'free' =>  "水曜"];
$student4  = ['class' => 2, 'name' => 'Dさん', 'feee' =>  "水曜"];
$student5  = ['class' => 2, 'name' => 'Eさん', 'free' =>  "火曜"];
$student6  = ['class' => 3, 'name' => 'Fさん', 'free' =>  "木曜"];
$student7  = ['class' => 3, 'name' => 'Gさん', 'free' =>  "木曜"];
$student8  = ['class' => 4, 'name' => 'Hさん', 'free' =>  "金曜"];
$student9  = ['class' => 4, 'name' => 'Iさん', 'free' =>  "月曜"];
$student10 = ['class' => 4, 'name' => 'Jさん', 'free' =>  "水曜"];
$students_en = [$student1, $student2, $student3, $student4,  $student5];
$students_pr = [$student6, $student7, $student8, $student9, $student10];
$schedule1 = ['class' => 1, 'name' => 'player',     'members' => $students_en];
$schedule2 = ['class' => 2, 'name' => 'staff', 'members' => $students_pr];
$club = ['schedule' => [$schedule1, $schedule2]];



foreach ($club['schedule'] as $schedule ) {
	foreach ($schedule['members'] as $member) {
		if($member['free']=="水曜"){
			echo $member['free'].':'.$member['name'].'<br>';
		}
	}
}
 ?>