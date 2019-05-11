<?php

function generateJson($name, $address, $hobbies, $is_married, $school, $my_skills){
	
	$data = [
		'name' => $name,
		'address' => $address,
		'hobbies' => $hobbies,
		'is_married' => $is_married,
		'school' => $school,
		'my_skills' => $my_skills,
	];


	return json_encode($data);
}

	$name = "Rizki Gumilar";
	$address = "jl. Sukamulya";
	$hobbies = ["futsal", "hiking", "renang"];
	$is_married = false;
	$school = [
		"highschool" => "SMAN 18 Bandung",
		"university" => "-"
	];
	$my_skills = [[
		"name" => "office",
		"score" => "85"
	],[
		"name" => "coding",
		"score" => "75"
	]];

echo generateJson($name, $address, $hobbies, $is_married , $school, $my_skills);