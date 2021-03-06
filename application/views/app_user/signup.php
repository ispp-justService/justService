    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('profile_users_signup') ?></h3>
	<hr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-centered">
		<?php echo form_open('/app_user/sendRegistration') ?>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name"><?php echo lang('profile_first_name') ?></label>
				  <input type="text" name="name" class="form-control" placeholder="<?php echo lang('profile_first_name') ?>">
			     	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="surname"><?php echo lang('profile_last_name') ?></label>
				  <input type="text" name="surname" class="form-control" placeholder="<?php echo lang('profile_last_name') ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="password"><?php echo lang('profile_password') ?></label>
				  <input type="password" name="password" class="form-control" placeholder="<?php echo lang('profile_password') ?>">
			     	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="passwordConfirm"><?php echo lang('profile_confirm_password') ?></label>
				  <input type="password" name="passwordConfirm" class="form-control" placeholder="<?php echo lang('profile_confirm_password') ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" name="email" class="form-control" placeholder="email">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<button type="submit" class="btn buttonBlack pull-right"><?php echo lang('profile_signup') ?></button>
			</div>
		</div>
	     </form>
	     <br />
			<!-- Aquí mostraremos los errores del formulario -->
			<?php echo validation_errors(); ?>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
