<div class="users index">
    <div class="row">
        <h2 class="span11"><?php echo __d('projects', 'Projects'); ?></h2>
        <div class="span1">
            <?php echo $this->Html->link(__d('projects', 'Add'), array('action' => 'add'), array('class' => 'btn btn-success icon icon-add')); ?>
        </div>        
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="header"><?php echo $this->Paginator->sort('name', 'Project Name'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('project_image_count'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php echo __d('users', 'Actions'); ?></th>
        </tr>
            <?php foreach ($projects as $project){ ?>
            <tr>
                <td>
                    <?php echo $project['Project']['name']; ?>
                </td>
                <td>
                    <?php echo $project['Project']['project_image_count']; ?>
                </td>
                <td>
                    <?php echo $this->Time->timeAgoInWords($project['Project']['created']);  ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__d('projects', 'Manage Images'), array('admin' => true, 'controller' => 'ProjectImages', 'action'=>'index', $project['Project']['id'])); ?>
                    <?php echo $this->Html->link(__d('projects', 'Edit'), array('action'=>'edit', $project['Project']['id'])); ?>
                    <?php echo $this->Html->link(__d('projects', 'Delete'), array('action'=>'delete', $project['Project']['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $project['Project']['id'])); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php echo $this->element('pagination'); ?>
</div>