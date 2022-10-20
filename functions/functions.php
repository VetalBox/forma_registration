<?php

	function clear_string($cl_str){
		$cl_str=strip_tags($cl_str);//защита переменной от взлома
		$cl_str=trim($cl_str);//защита переменной от взлома
		return $cl_str;    
		}

?>