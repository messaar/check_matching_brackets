<?php
function checkBrackets($data)
{
	$data = preg_replace('/[^\(\)\[\]\{\}]/', '', $data); //deldete symbols but not ()[]{}
	
		$count_couple = strlen($data) / 2; // count couple
		
		if ( strlen($data) % 2 === 0 ? true : false) // parity check
		{
			// clean all couple
			for ($i=0;$i <= $count_couple;$i++)
			{
				$data = str_replace( ['()', '[]', '{}'], '', $data);
			}
			
			//check if !empty -> bad
			if (!empty($data))
			{

				return false;
			} 
			else return true;
		}
		else return false;
}
?>
