<?php 
	 function check_value_null ( $data, $data_df )
	{
		foreach ($data_df as $key => $value) {
			if(!isset($data[$key]) || $data[$key]=="")
			{
					$data[$key] = $value;
			}
		}
		return $data;
	}

?>