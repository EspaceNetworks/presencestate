<ol>
	<?php foreach($states as $state) { ?>
		<?php if($state['type'] == $currentState['State'] && $state['message'] == $currentState['Message']) { continue; } ?>
		<li class="presence-item2" data-id="<?php echo $state['id']?>"><i class="fa fa-circle active" style="color:<?php echo $state['color']?>"></i><?php echo $state['nice']?><?php echo !empty($state['message']) ? ' ('.$state['message'].')' : ''?></li>
	<?php } ?>
</ol>
