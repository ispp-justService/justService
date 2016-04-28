<div class="container">

	<div class="row row-centered">
	<h3>Service's list</h3>
	<hr>
	
	<?php foreach($services as $service): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">

		<div class="panel panel-default" >
			<div class="panel-heading">
				<b>
					<?php echo $service->status ?>
				</b>
				<div class="pull-right" id="panel-heading-size">
					<?php echo date('Y-m-d H:i', strtotime($service->moment)) ?>
				</div>
			</div>

		<div class="panel-body">
		
						<table>
							<tr>
								<td>
									<?php if($service->photo): ?>
										<img src="<?php echo base_url($service->photo); ?>" 
													style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
									<?php else: ?>
										<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" 
													style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td>
								<?php if($this->session->role == "CUSTOMER"): ?>
									<b>User:</b>
									<a href="<?php echo site_url("app_user/showProfile/".$service->app_user_id) ?>">
										<?php echo $service->name ?>, <?php echo $service->surname ?>
									</a>
								<?php elseif($this->session->role == "APP_USER"): ?>
									<?php if($service->type == "Freelance"): ?>
										<b>Professional:</b>
											<a href="<?php echo site_url("customer/showProfile/".$service->customer_id) ?>">
												<?php echo $service->name ?>
											</a>
									<?php else: ?>
										<b>Business:</b>
											<a href="<?php echo site_url("customer/showProfile/".$service->customer_id) ?>">
												<?php echo $service->name ?>
											</a>
									<?php endif;?>
								<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td><b>Description:</b> <?php echo $service->description ?></td>	
						    </tr>
							<tr>
								<td>
									<b>Discount to apply:</b> 
									<?php if($service->discount_to_apply != null): ?>
										<?php echo $service->discount_to_apply?> %
									<?php else: ?>
										None
									<?php endif; ?>
								</td>	
							</tr>
							<?php if($service->status == 'PENDING'):?>
								<tr>
									<td>
										<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" 
											data-target='#<?php echo "cancel_service_".$service->service_id ?>'>Cancel Service</button>
										<?php echo get_confirmation_modal("cancel_service_".$service->service_id,
											site_url("app_user/cancelService/".$service->service_id)) ?>
									</td>
								</tr>
								<?php if($this->session->role == "CUSTOMER"): ?>
									<tr>
										<td>
											<button type="button" 
													class="btn btn-success btn-xs" 
													data-toggle="modal" 
													data-target='#<?php echo "active_service_".$service->service_id ?>'>Active Service</button>
											<?php echo get_confirmation_modal(
													"active_service_".$service->service_id,
													site_url("customer/activateService/".$service->service_id)) ?>
										</td>
									</tr>
								<?php endif; ?>
							<?php endif; ?>
							<?php if($service->status == 'FINALIZED'): ?>

								<?php if($this->session->role == "CUSTOMER"): ?>
									<?php if($service->rating_user != null): ?>
										<tr>
											<td>
												<b>The user's rate for you:</b>
												<div class="ratingShow">
													<?php for ($i=0 ; $i < $service->rating_user; $i++){
														echo '<span>&#9733</span>';
													}?>
												</div>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->comment_user != null): ?>
										<tr>
											<td>
												<b>Comment Customer:</b>
												<?php echo $service->comment_user?>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->rating_customer == null): ?>
										<tr>
											<td>
												<b>Rate the user:</b>
												<div class="rating">
													<span id="<?php echo $service->service_id ?>span5" 
																onclick="changeStarsForService('5', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span4" 
																onclick="changeStarsForService('4', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span3" 
																onclick="changeStarsForService('3', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span2" 
																onclick="changeStarsForService('2', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span1" 
																onclick="changeStarsForService('1', 
																		'<?php echo $service->service_id ?>')">&#9734</span>	
												</div>
											</td>
										</tr>
									<?php else:?>
										<tr>
											<td>
												<b>Your rate for this user:</b>
												<div class="ratingShow">
													<?php for ($i=0 ; $i < $service->rating_customer; $i++){
															echo '<span>&#9733</span>';
													}?>
												</div>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->comment_customer != null): ?>
										<tr>
											<td>
												<b>Comment Customer:</b>
												<?php echo $service->comment_customer?>
											</td>
										</tr>
									<?php endif; ?>									
								<?php elseif($this->session->role == "APP_USER"): ?>
									<?php if($service->rating_customer != null): ?>
										<tr>
											<td>
												<b>Customer's rate for you:</b>
												<div class="ratingShow">
													<?php for ($i=0 ; $i < $service->rating_customer; $i++){
																echo '<span>&#9733</span>';
													}?>
												</div>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->comment_customer != null): ?>
										<tr>
											<td>
												<b>Comment:</b>
												<?php echo $service->comment_customer?>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->rating_user == null): ?>
										<tr>
											<td>
												<b>Rate the customer:</b>
												<div class="rating">
													<span id="<?php echo $service->service_id ?>span5" 
																onclick="changeStarsForService('5', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span4" 
																onclick="changeStarsForService('4', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span3" 
																onclick="changeStarsForService('3', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span2" 
																onclick="changeStarsForService('2', 
																		'<?php echo $service->service_id ?>')">&#9734</span>
													<span id="<?php echo $service->service_id ?>span1" 
																onclick="changeStarsForService('1', 
																		'<?php echo $service->service_id ?>')">&#9734</span>	
												</div>
											</td>
										</tr>
									<?php else: ?>
										<tr>
											<td>
												<b>Your customer's rate:</b>
												<div class="ratingShow">
													<?php for ($i=0 ; $i < $service->rating_user; $i++){
																echo '<span>&#9733</span>';
													}?>
												</div>
											</td>
										</tr>
									<?php endif; ?>
									<?php if($service->comment_user != null): ?>
										<tr>
											<td>
												<b>Comment:</b>
												<?php echo $service->comment_user?>
											</td>
										</tr>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
							<?php if($service->status == 'ACTIVE' && $this->session->role == "CUSTOMER"): ?>
								<tr>
									<td>
										<button type="button" class="btn btn-success btn-xs" data-toggle="modal" 
											data-target='#<?php echo "finalize_service".$service->service_id ?>'>Finalize Service</button>
										<?php echo get_confirmation_modal("finalize_service".$service->service_id,
											site_url("customer/finalizeService/".$service->service_id)) ?>
									</td>
								</tr>
								<tr>
									<td>
										<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" 
											data-target='#<?php echo "cancel_service_".$service->service_id ?>'>Cancel Service</button>
										<?php echo get_confirmation_modal("cancel_service_".$service->service_id,
											site_url("customer/cancelService/".$service->service_id)) ?>
									</td>
								</tr>
							<?php endif; ?>
						</table>
		</div>
		<?php if($service->status == 'FINALIZED' && $service->rating_customer == null && $this->session->role == "CUSTOMER"): ?>
			<div class="panel-footer">
				<?php echo form_open('/customer/rateService/'.$service->service_id) ?>
					<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<label for="comment_customer">Comment:</label>
									<input type="hidden" name="rating_customer" id="<?php echo $service->service_id?>rating" value="" />
									<textarea class="form-control" rows="5" name="comment_customer"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn buttonBlack pull-right">Send</button>
						</div>
					</div>
				</form>
			</div>
		<?php endif; ?>
		<?php if($service->status == 'FINALIZED' && $service->rating_user == null && $this->session->role == "APP_USER"): ?>
			<div class="panel-footer">
				<?php echo form_open('/app_user/rateService/'.$service->service_id) ?>
					<div class="row">
						<div class="col-md-10">
							<div class="form-group">
								<label for="comment_user">Comment:</label>
								<input type="hidden" name="rating_user" id="<?php echo $service->service_id ?>rating" value="" />
								<textarea class="form-control" rows="5" name="comment_user"></textarea>
							</div>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn buttonBlack pull-right">Send</button>
						</div>
					</div>
				</form>
			</div>
		<?php endif; ?>
		</div> <!-- /panel-default -->
	</div>
	<br />
	<?php endforeach; ?> 
	<script>
		function changeStarsForService(number,service_id) {
			for(i=5; i>=1; i--){
				$("#"+service_id+"span"+i).html("&#9734");
			}

			for(i=number; i>=1; i--){
				$("#"+service_id+"span"+i).html("&#9733");
			}

			$("#"+service_id+"rating").val(number);
		}
	</script>
</div> <!-- /class cols  -->
</div> <!-- /row -->
</div> <!-- /container -->
