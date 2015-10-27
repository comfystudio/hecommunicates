<?php echo $this->Html->script('../ckeditor/ckeditor.js');?>
<div class="users form">
    <h2><?php echo $this->Html->link(__d('informations', 'Information'), array('action' => 'index')); ?> - <?php echo __d('informations', 'Add'); ?></h2>
    <?php
        echo $this->Form->create('Information');
        echo $this->Form->input('title', array('class' => 'input-xlarge', 'label' => 'Title'));
		echo $this->Form->input('text', array('class' => 'ckeditor', 'label' => 'Text', 'id' => 'information-text'));
		echo $this->Form->input('order', array('class' => 'input-xlarge', 'label' => 'Order'));
        echo $this->Form->submit(__d('users', 'Save'), array('class' => 'btn btn-primary'));
        echo $this->Form->end();
    ?>
</div>
