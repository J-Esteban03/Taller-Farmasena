<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/login.css'); ?>">
</head>
<body>
    
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
                <div class='box-login-title'>
                <div class='i i-login'></div><h2>LOGIN</h2>
				
            </div>
			<?php if (isset($errorInData)){ ?>
						<div class="alert alert-danger">
							DATOS INCOMPLETOS
						</div>
					<?php } ?>

					<?php if (isset($datosInvalidos)){ ?>
						<div class="alert alert-danger">
							NO EXISTE UN USUARIO CON ESOS DATOS
						</div>
			<?php } ?>
			<form action="<?= base_url('index.php/Login/validarIngreso') ?>" method="POST">
				
				<div class='box-login'>
					  <div class='fieldset-body' id='login_form'>
						  <p class='field'>
						  <label for='user'>E-MAIL</label>
						  <input class="form-control <?= (isset($valueEmail) && $valueEmail!='')? 'is-valid': ((isset($errorInData))? 'is-invalid':'') ?>" type="text" id='campo_email' name="campo_email" title='Username' value="<?= (isset($valueEmail))? $valueEmail : '' ?>"/>
						  <span id='valida' class='i i-warning'></span>
						  </p>
						  <p class='field'>
						  <label for='pass'>PASSWORD</label>
						  <input class="form-control <?= (isset($valueEmail) && $valuePassword!='')? 'is-valid': ((isset($errorInData))? 'is-invalid':'') ?>" id="campo_password" type="password" name="campo_password" value="<?= (isset($valuePassword))? $valuePassword : '' ?>">
						  <span id='valida' class='i i-close'></span>
						  </p>
			  
						  <label class='checkbox'>
						  <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in
						  </label>
			  
						  <input type='submit' id='do_login' value='Iniciar' title='Iniciar' />
					  </div>
				</div>
			  </div>
			</form>
      
      
    <div class='icon-credits'>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>, <a href="http://www.flaticon.com/authors/budi-tanrim" title="Budi Tanrim">Budi Tanrim</a> & <a href="http://www.flaticon.com/authors/nice-and-serious" title="Nice and Serious">Nice and Serious</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
	<?php if (isset($errorInData)): ?>
			<script>
				Swal.fire({
					title: 'DATOS INVALIDOS',
					text: 'El correo y contraseña son obligatorios.',
					icon: 'error',
				});
			</script>
	<?php endif ?>
    <script src="<?php echo base_url('assets/dist/js/login.js'); ?>"></script>
</body>
</html>