<?php

	function single_edit($tbl, $col, $id) {

		$result = getSingle($tbl, $col, $id);
		$getResult = mysqli_fetch_array($result);
		echo "<div class=\"panel4\">";
		echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
		echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
		echo "<input class=\"editLabels\" hidden name=\"col\" value=\"{$col}\">";
		echo "<input hidden name=\"id\" value=\"{$id}\">";
		//echo mysqli_num_fields($result);
		for($i=0; $i<mysqli_num_fields($result); $i++) {
			$dataType = mysqli_fetch_field_direct($result, $i);
			$fieldName = $dataType->name;
			$fieldType = $dataType->type;

			if($fieldName != $col){
				echo "<label class=\"editLabels\">{$fieldName}</label><br>";
				if($fieldType != "252"){
					echo "<input class=\"editInput\" type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";
				}else{
					echo "<textarea class=\"editText\" name=\"{$fieldName}\">{$getResult[$i]}</textarea><br><br>";
				}
			}

		}
		echo "<button class=\"btn4\"type=\"submit\" name=\"submit\" value=\"Save Content\">Save Content</button>";
		echo "</form>";
		echo "</div>";
	}




?>
