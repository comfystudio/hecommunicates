<div id = "info-left-row">
	<?php
		$count = 0;
		foreach($informationList as $key => $list){
			$class = 'active';
			if(isset($id) && $id != $key){
				$class = '';	
			}elseif(!isset($id)){
				if($count != 0){
					$class = '';
				}
			}
			$count++;
			echo '<a href = "/information/index/'.$key.'" class = "'.$class.'">'.$list.'</a>';
			echo '<br/><br/>';
		}
	?>
</div>

<div id = "info-right-row">
	<?php
		echo $information['Information']['text'];
	?>
</div>