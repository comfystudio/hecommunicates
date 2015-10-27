<div class="users form">
    <h2><?php echo $this->Html->link(__d('projects', 'Projects'), array('action' => 'index')); ?> - <?php echo __d('projects', 'Edit'); ?></h2>
    <?php
        echo $this->Form->create('Project');
        echo $this->Form->input('name', array('class' => 'input-xlarge', 'label' => 'Project Name', 'value' => $project['Project']['name']));
        echo $this->Form->submit(__d('users', 'Save'), array('class' => 'btn btn-primary'));
        echo $this->Form->end();
    ?>
</div>