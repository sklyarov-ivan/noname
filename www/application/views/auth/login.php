<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
                    <legend>Please Sign In or <a href="<?php echo Route::get('auth')->uri(array('action'=>'register'))?>">Register</a></legend>
                    <?php if (isset($errors)):?>
                        <div class="alert alert-error">
                            <a class="close" data-dismiss="alert" href="#">×</a>
                        <?php foreach($errors as $single_error):?>
                            <?php echo $single_error?>
                        <?php endforeach?>    
                        </div>
                    <?php endif;?>
                    <form method="POST" action="" accept-charset="UTF-8">
                        <input type="text" id="email" class="span4" name="email" placeholder="email" value="<?php echo $data['email']?>">
                        <input type="password" id="password" class="span4" name="password" placeholder="Password" value="<?php echo $data['password']?>">
                        
                        <label class="checkbox">
                            <input type="checkbox" name="remember" value="1"> Remember Me
                        </label>
                        
                        <button type="submit" name="submit" class="btn btn-info btn-success">Sign in</button>
                        or <a href ="/">Back to main page</a>
                    </form>    
		</div>
	</div>
</div>
