<?php

function sortingArray($data){
	for($i = 0; $i < count($data); $i++ ){
		sort($data[$i]);
		echo json_encode(($data[$i]));
	}
}

$data = [
    		["a","c","b","e","d"],
    		["g","e","f"]
        ];
sortingArray($data);