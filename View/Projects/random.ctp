<?php echo $this->Html->script('projects-random');?>
<a href = 'projects' id = "images" data-total = "<?php echo count($randoms)?>">
	<?php 
		$count = 0;
		foreach ($randoms as $image){
			$linkName = explode('.', $image['ProjectImage']['image_file_name']); 
			$linkName = $linkName[0].'_original.jpg';
            echo $this->Html->image('/upload/project_images/'.$image['ProjectImage']['id'].'/'.$linkName, array('alt' => $image['ProjectImage']['name'], 'data-active' => '0', 'data-number' => $count, 'id' => 'image_'.$count));
			$count++;
		}
	?>

</a>