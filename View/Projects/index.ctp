<?php 
	foreach ($projects as $project){
		echo '<div class = "project left">';
			echo '<a href = "projects/view/'.$project['Project']['id'].'">';
				echo '<div class = "project-image">';
					if(isset($project['ProjectImage'][0])){
						$linkName = explode('.', $project['ProjectImage'][0]['image_file_name']); 
						$linkName = $linkName[0].'_original.jpg';
						echo $this->Html->image('/upload/project_images/'.$project['ProjectImage'][0]['id'].'/'.$linkName, array('alt' => $project['ProjectImage'][0]['name'], 'width' => '290px', 'height' => '230px'));
					} else {
						echo '<span class = "no-image">';
							echo 'No Image';
						echo '</span>';
					}
				echo '</div>';
				
				echo '<p>';
					echo $project['Project']['name'];
					echo '<br/>';
					echo '<span class = "darkgrey">';
						echo date('d M y', strtotime($project['Project']['created']));
					echo '</span>';
				echo '</p>';
			echo '</a>';
		echo '</div>';
	}
?>