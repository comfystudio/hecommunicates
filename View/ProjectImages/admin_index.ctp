<div class="users index">
    <div class="row">
        <h2 class="span11"><?php echo __d('projectImages', 'Projects Images for '.$project['Project']['name']); ?></h2>
        <div class="span1">
            <?php echo $this->Html->link(__d('projectImages', 'Add'), array('action' => 'add', $project['Project']['id']), array('class' => 'btn btn-success icon icon-add')); ?>
        </div>        
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="header"><?php echo __d('projectImages', 'Thumbnail'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('order'); ?></th>
            <th class="header"><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php echo __d('users', 'Actions'); ?></th>
        </tr>
            <?php foreach ($projectImages as $images){ ?>
            <tr>
                <td>
                    <?php 
						$linkName = explode('.', $images['ProjectImage']['image_file_name']); 
						$linkName = $linkName[0].'_thumb.jpg';
					?>
                    <a class = 'hover' data-toggle="modal" data-target="#<?php echo $images['ProjectImage']['id']?>">
                    <?php echo $this->Html->image('/upload/project_images/'.$images['ProjectImage']['id'].'/'.$linkName, array('alt' => $images['ProjectImage']['name']));?>
                    </a>
                </td>
                <td>
                    <?php echo $images['ProjectImage']['name']; ?>
                </td>
                <td>
                    <?php echo $images['ProjectImage']['order']; ?>
                </td>
                <td>
                    <?php echo $this->Time->timeAgoInWords($images['ProjectImage']['created']);  ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__d('projectImages', 'Edit'), array('action'=>'edit', $images['ProjectImage']['id'], $project['Project']['id'])); ?>
                    <?php echo $this->Html->link(__d('projectImages', 'Delete'), array('action'=>'delete', $images['ProjectImage']['id'], $project['Project']['id']), null, sprintf(__d('projectImages', 'Are you sure you want to delete '.$images['ProjectImage']['name'].'?'), $images['ProjectImage']['id'])); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php echo $this->element('pagination'); ?>
</div>

<?php foreach($projectImages as $images){?>
<!-- Modal -->
<div id = "project-images-modal">
    <div class="modal fade" id="<?php echo $images['ProjectImage']['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel<?php echo $images['ProjectImage']['id']?>"><?php echo $images['ProjectImage']['name']?></h4>
          </div>
          <div class="modal-body">
             <?php 
                $linkName = explode('.', $images['ProjectImage']['image_file_name']); 
                $linkName = $linkName[0].'_original.jpg';
            ?>
             <?php echo $this->Html->image('/upload/project_images/'.$images['ProjectImage']['id'].'/'.$linkName, array('alt' => $images['ProjectImage']['name']));?>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php }?>