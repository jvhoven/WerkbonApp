<!DOCTYPE html>
<html>
	<head>
		<title>Werkbonnen Applicatie</title>
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('css/default.css') }}
        {{ HTML::style('css/bootstrap/min.css') }}
        {{ HTML::style('css/zocial/min.css') }}
	</head>
	<body>
		<section id="header" style="width: 100%; height: 240px;">
		</section>
		<section id="login-container">
			<section class="login-title">
				<h1>
					<strong><span class="glyphicon glyphicon-fire"></span>&nbsp;Scrum</strong>
					<br>
					<small>
						Please <strong>Login</strong>
						or <strong>Register</strong>
					</small>
				</h1>
			</section>
			<section class="block">
				<div class="container">
					<p>
						U kunt zich hier aanmelden met uw google account of inloggen met uw Skrum account.
					</p>
					<br />
					<form action="" method="post">
						<table class="formTable">
							<tr>
								<td width="40%">
									<span class="pull-left">E-mail</span>
								</td>
								<td width="60%">
									<input type="email" name="user[email]">
								</td>
							</tr>
							<tr>
								<td width="40%">
									<span class="pull-left">Wachtwoord</span>
								</td>
								<td width="60%">
									<input type="password" name="user[password]">
								</td>
							</tr>
							<tr>
								<td></td>
								<td><small>Onthoud mij</small></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
						</table>
						<table class="buttons">
							<tr>
								<td><a href="#" class="btn btn-danger" style="float: left;">Inloggen met google</a></td>
								<td><input type="submit" class="btn btn-primary" value="Inloggen"></td>
							</tr>
						</table>
					</form>
				</div>
			</section>
		</section>
		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/backstretch.min.js') }}
		{{ HTML::script('js/functions.js') }}
	</body>
</html>