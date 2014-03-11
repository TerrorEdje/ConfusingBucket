<h1 class="text-primary">Inloggen</h1>
<h4 class="text-muted">U kunt hier beneden tijdelijk Inloggen</h4>

<?php 
	if(isset($_GET['msg'])){
		echo '<h3 class="text-warning">'.str_replace("_", " ", $_GET['msg']).'</h3>';
	}else{
		echo '<br />';
	}
?>

<div class="align-center">
	<form id="login-form" action="loginsession.php" method="post" class="form-horizontal">
		<input type="hidden" name="usingAJAX" value="false" />

		<fieldset class="the-fieldset form-margin">

			<div class="form-group">
				<label for="username" class="col-sm-3 control-label">Gebruikersnaam</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="inputUsername" placeholder="username" name="username">
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Wachtwoord</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="inputPassword" placeholder="password" name="password">
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-sm-3 control-label"></label>
				<div class="col-sm-6">
					<input type="submit" value="Inloggen">
				</div>
			</div>
			
		</fieldset>

	</form>

	<script type="text/javascript">$('#login-form').submit(function(event){
                event.preventDefault();
                $('input[name="usingAJAX"]',this).val( 'true' );
                
                var form = $(this);
                var url = form.attr('action')
                var data = form.serialize();
                var callback = function(response){
                    $('#content').html(response);
                };
                
                var dataType = 'html';
                
                $.post(url, data, callback, dataType)
                
                
                return false;
            });
    </script>
</div>
