<?php
$student1  = ['id' =>  1, 'name' => 'Aさん', 'week' => 12];
$student2  = ['id' =>  2, 'name' => 'Bさん', 'week' =>  8];
$student3  = ['id' =>  3, 'name' => 'Cさん', 'week' =>  4];
$student4  = ['id' =>  4, 'name' => 'Dさん', 'week' =>  8];
$student5  = ['id' =>  5, 'name' => 'Eさん', 'week' => 12];
$student6  = ['id' =>  6, 'name' => 'Fさん', 'week' => 12];
$student7  = ['id' =>  7, 'name' => 'Gさん', 'week' => 12];
$student8  = ['id' =>  8, 'name' => 'Hさん', 'week' =>  4];
$student9  = ['id' =>  9, 'name' => 'Iさん', 'week' =>  8];
$student10 = ['id' => 10, 'name' => 'Jさん', 'week' =>  8];
$students_en = [$student1, $student2, $student3, $student4,  $student5];
$students_pr = [$student6, $student7, $student8, $student9, $student10];
$curriculum1 = ['id' => 1, 'name' => 'English',     'members' => $students_en];
$curriculum2 = ['id' => 2, 'name' => 'Programming', 'members' => $students_pr];
$nexseed = ['curricula' => [$curriculum1, $curriculum2]];

// Q1. 'English'を表示してください。
echo $nexseed['curricula'][0]["name"];


echo '<hr><br>';
// Q2. 繰り返し処理を用いて'English'と'Programming'を表示してください
// foreach (配列 as 配列の各要素)
// foreach (users as user)
// foreach (foods as food)
foreach($nexseed['curricula'] as $curriculum){
	echo $curriculum['name'];
}
echo '<hr><br>';

for ($i=0; $i <=1 ; $i++) {
	$curriculum=$nexseed['curricula'][$i];
	echo $curriculum['name'];
}
echo '<hr><br>';

// Q3. 繰り返し処理と条件分岐処理を用いて12週間の生徒の名前とコース名を一覧表示してください
// 例）Aさん：English
foreach ($nexseed['curricula'] as $curriculum ) {
	foreach ($curriculum['members'] as $member) {
		if($member['week']==12){
			echo $member['name'].':'.$curriculum['name'].'<br>';
		}
	}
}


