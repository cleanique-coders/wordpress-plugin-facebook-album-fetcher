<div class="wrap">
	<div class="bs-wrapper">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 well well-small">
				<h1>Slider Settings</h1>

					<div class="help">Current Version: <?php echo get_option( 'johawaki_slider_version' ); ?></div>
					<hr>
					<form class="form-horizontal col-md-12" method="post">
						<fieldset>

							<!-- Form Name -->
							<legend>Facebook Application Details</legend>

							<!-- Text input-->
							<div class="form-group">
							  <label class="control-label" for="appId">Application ID</label>  
							  <div class="">
							  <input id="appId" name="appId" type="text" placeholder="" class="form-control" required="" value="<?= get_option('johawaki_slider_facebook_id') ?>">
							    
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="control-label" for="appSecret">Application Secret Key</label>  
							  <div class="">
							  <input id="appSecret" name="appSecret" type="text" placeholder="" class="form-control" required="" value="<?= get_option('johawaki_slider_facebook_secret') ?>">
							    
							  </div>
							</div>

							<!-- Prepended text-->
							<div class="form-group">
							  <label class="control-label" for="facebookPage">Facebook Page</label>
							  <div class="">
							    <div class="input-group">
							      <span class="input-group-addon">https://facebook.com/</span>
							      <input id="facebookPage" name="facebookPage" class="form-control" placeholder="" type="text" required="">
							    </div>
							    
							  </div>
							</div>

							<!-- Button -->
							<div class="form-group">
							  <label class="control-label" for="submit"></label>
							  <div class="">
							    <button id="submit" name="submit" class="btn btn-block btn-success">Save</button>
							  </div>
							</div>

						</fieldset>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>