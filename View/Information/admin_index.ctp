<div class="users index">
    <div class="row">
        <h2 class="span11"><?php echo __d('information', 'Informations'); ?></h2>
        <div class="span1">
            <?php echo $this->Html->link(__d('information', 'Add'), array('action' => 'add'), array('class' => 'btn btn-success icon icon-add')); ?>
        </div>        
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="header"><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('text'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('order'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php echo __d('users', 'Actions'); ?></th>
        </tr>
            <?php foreach ($informations as $info){ ?>
            <tr>
                <td>
                    <?php echo $info['Information']['title']; ?>
                </td>
                
                <td>
                    <?php echo $this->Text->truncate($info['Information']['text'], 50); ?>
                </td>
                
                <td>
                    <?php echo $info['Information']['order']; ?>
                </td>
                
                <td>
                    <?php echo $this->Time->timeAgoInWords($info['Information']['created']);  ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__d('information', 'Edit'), array('action'=>'edit', $info['Information']['id'])); ?>
                    <?php echo $this->Html->link(__d('information', 'Delete'), array('action'=>'delete', $info['Information']['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $info['Information']['id'])); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php echo $this->element('pagination'); ?>
</div>