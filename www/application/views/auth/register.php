<?php print_r($errors);?>
<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
                    <legend>New on this <?php echo Kohana::$config->load('base')->get('site_name')?>?</legend>
                    
                   
                    <form method="POST" action="" accept-charset="UTF-8">
                        <input type="text" id="username" class="span4" name="username" placeholder="username" value="<?php echo $data['username']?>">
                         <?php if (isset($errors['username'])):?><div class="alert alert-error"><?php echo $errors['username']?></div><?php endif?>
                        <input type="text" id="email" class="span4" name="email" placeholder="email" value="<?php echo $data['email']?>">
                        <?php if (isset($errors['email'])):?><div class="alert alert-error"><?php echo $errors['email']?></div><?php endif?>
                        <input type="password" id="password" class="span4" name="password" placeholder="Password" value="<?php echo $data['password']?>">
                         <?php if (isset($errors['password'])):?><div class="alert alert-error"><?php echo $errors['password']?></div><?php endif?>
                        <input type="password" id="password_confirm" class="span4" name="password_confirm" placeholder="Confirm Password" value="<?php echo $data['password_confirm']?>">
                         <?php if (isset($errors['password_confirm'])):?><div class="alert alert-error"><?php echo $errors['password_confirm']?></div><?php endif?>
                       
                        
                        <button type="submit" name="submit" class="btn btn-info btn-success">Registrate</button>
                        or <a href ="<?php echo Kohana::$config->load('base')->get('base_link');?>">Back to main page</a>
                    </form>    
		</div>
	</div>
</div>
