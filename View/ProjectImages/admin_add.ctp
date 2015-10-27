<div class="users form">
    <h2><?php echo $this->Html->link(__d('projectImages', 'Project Images'), array('action' => 'index')); ?> - <?php echo __d('projectImages', 'Add'); ?></h2>
    <?php
        echo $this->Form->create('ProjectImage', array('type' => 'file'));
        echo $this->Form->input('name', array('class' => 'input-xlarge', 'label' => 'Image name'));
		echo $this->Form->input('order', array('class' => 'input-xlarge', 'label' => 'Image order'));
		echo $this->Form->file('image', array('class' => 'controls', 'label' => 'Select Image'));
		echo $this->Form->hidden('project_id', array('value' => $project['Project']['id']));
        echo $this->Form->submit(__d('users', 'Save'), array('class' => 'btn btn-primary'));
        echo $this->Form->end();
    ?>
</div>