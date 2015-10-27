<?php echo $this->Html->script('projects-view');?>
<span id = "information" data-total = "<?php echo count($project['ProjectImage'])?>" data-name = "<?php echo $project['Project']['name']?>" data-new = "<?php echo $next?>"></span>
<?php 
	$count = 0;
	foreach ($project['ProjectImage'] as $image){
		$linkName = explode('.', $image['image_file_name']); 
		$linkName = $linkName[0].'_original.jpg';
		echo $this->Html->image('/upload/project_images/'.$image['id'].'/'.$linkName, array('alt' => $image['name'], 'data-active' => '0', 'data-number' => $count, 'id' => 'image_'.$count, 'data-name' => $image['name'], 'class' => 'none view-image'));
		$count++;
	}
?>