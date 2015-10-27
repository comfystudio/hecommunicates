<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Linda Byrne'; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');
		echo $this->Html->css('libs/bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
		
		echo $this->Html->script(array('libs/jquery-1.9.1'));
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 class = 'left'><a href = '/'>hE</a></h1>
            
            <?php $currentPath = substr($this->request->here, strlen($this->request->base));?>
            
            <div id = "links" class = 'left'>
            	<a href = '/projects' class = '<?php echo $this->App->highlight2('/^\/projects\/?/')?>'>Projects</a>
                <br/>
                <a href = '/information' class = '<?php echo $this->App->highlight2('/^\/information\/?/')?>'>Information</a>
                <br/>
            </div>
            
            <?php if (preg_match('/^\/projects\/view\/?/', $currentPath)){ ?>
                <div id = "captions" class = 'left'>
                    <span id = project-name></span>
                    <br/>
                    <span id = image-name></span>
                </div>
                
                <div id = "links" class = 'left'>
                    <span id = control-next class = 'hover control'>Next</span>
                    <br/>
                    <span id = control-previous class = 'hover control'>Previous</span>
                    <br/>
                    <span id = control-new class = 'hover control'>Next project</span>
                    <br/>
                </div>
            <?php } ?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
