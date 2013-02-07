
<div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
            <?php if (!empty($errors)):?>
                <div class="alert alert-error">
                    <a class="close">x</a>
                        <strong>Error: </strong><span><?php print_r($errors)?></span>
                   
                </div>
            <?php endif?>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $user->username?>" class="input-xlarge">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $user->firstname?>" class="input-xlarge">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $user->lastname?>" class="input-xlarge">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $user->email?>" class="input-xlarge">
            <label>Address</label>
            <textarea value="Smith" rows="3" class="input-xlarge">2817 S 49th
    Apt 314
    San Jose, CA 95101
            </textarea>
          	<div>
        	    <input type="submit" class="btn btn-primary" value="Update">
        	</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
          <form id="tab2" method="POST" action="<?php echo Route::get('user')->uri(array('controller'=>'account','action'=>'changepass'))?>">
        	<label>New Password</label>
        	<input type="password" name="password" class="input-xlarge">
                <label>Confirm New Password</label>
                <input type="password" name="password_confirm" class="input-xlarge">
        	<div>
        	    <input type="submit" class="btn btn-primary" value="Update">
        	</div>
    	</form>
      </div>
  </div>