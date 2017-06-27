<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="form-signin" style="background-image: url('http://133.130.89.71/assets/images/login/background.png'); background-size: 380px 560px;">
			<div class="page-header">
				<h1 class="form-signin-heading">ログイン</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group input-group input-group-lg">
                    <span class="input-group-addon glyphicon glyphicon-user" aria-hidden="true"></span>
					<input type="text" class="form-control" id="username" name="username" placeholder="username">
				</div>
				<div class="form-group input-group input-group-lg">
					<span class="input-group-addon glyphicon glyphicon-lock" aria-hidden="true"></span>
					<input type="password" class="form-control" id="password" name="password" placeholder="password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-lg btn-block" value="ログイン">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->