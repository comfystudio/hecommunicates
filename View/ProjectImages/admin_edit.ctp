<div class="users form">
    <h2><?php echo $this->Html->link(__d('projectImages', 'Project Images'), array('action' => 'index')); ?> - <?php echo __d('projectImages', 'Edit'); ?></h2>
    <?php
        echo $this->Form->create('ProjectImage', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'input-xlarge', 'label' => 'Image name', 'value' => $projectImage['ProjectImage']['name']));
		echo $this->Form->input('order', array('class' => 'input-xlarge', 'label' => 'Image order', 'value' => $projectImage['ProjectImage']['order']));
		echo $this->Form->file('image', array('class' => 'controls', 'label' => 'Select Image'));
		echo '<br/><br/>';
		echo '<div class = "controls">';
			 echo '<a class = \'hover\' data-toggle="modal" data-target="#myModal">';
			 	echo 'View Old Image';
			 echo '</a>';
		echo '</div>';
		echo $this->Form->hidden('project_id', array('value' => $projectImage['ProjectImage']['project_id']));
        echo $this->Form->submit(__d('users', 'Save'), array('class' => 'btn btn-primary'));
        echo $this->Form->end();
    ?>
</div>

<!-- Modal -->
<div id = "project-images-modal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel>"><?php echo $projectImage['ProjectImage']['name']?></h4>
          </div>
          <div class="modal-body">
             <?php 
                $linkName = explode('.', $projectImage['ProjectImage']['image_file_name']); 
                $linkName = $linkName[0].'_original.jpg';
            ?>
             <?php echo $this->Html->image('/upload/project_images/'.$projectImage['ProjectImage']['id'].'/'.$linkName, array('alt' => $projectImage['ProjectImage']['name']));?>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>