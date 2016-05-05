    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('admin_signup_customer') ?></h3>
	<hr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-centered">
		<?php echo form_open('/admin/sendCustomerSignup') ?>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name"><?php echo lang('profile_name') ?></label>
				  <input type="text" name="name" class="form-control" placeholder="<?php echo lang('profile_name') ?>">
			     	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="type"><?php echo lang('profile_type') ?></label>
				  <input type="text" name="type" class="form-control" placeholder="<?php echo lang('profile_type') ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="phoneNumber"><?php echo lang('profile_phone_number') ?></label>
				  <input type="text" name="phoneNumber" class="form-control" placeholder="<?php echo lang('profile_phone_number') ?>">
			     	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="zipCode"><?php echo lang('profile_zipCode') ?></label>
				  <input type="text" name="zipCode" class="form-control" placeholder="<?php echo lang('profile_zipCode') ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="latitude"><?php echo lang('profile_latitude') ?></label>
				  <input type="text" name="latitude" class="form-control" placeholder="<?php echo lang('profile_latitude') ?>">
			     	</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="longitude"><?php echo lang('profile_longitude') ?></label>
				  <input type="text" name="longitude" class="form-control" placeholder="<?php echo lang('profile_longitude') ?>">
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
				  <input type="email" name="email" class="form-control" placeholder="Email">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<button type="submit" class="btn buttonBlack pull-right"><?php echo lang('header_sign_up') ?></button>
			</div>
		</div>
	     </form>
	     <br />
			<!-- Aquí mostraremos los errores del formulario -->
			<?php echo validation_errors(); ?>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
