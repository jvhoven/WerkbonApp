<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Scrum - Dashboard
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
		{{ HTML::style('css/admin/default-template.css') }}
        {{ HTML::style('css/admin/animations.css') }}
	</head>

    <body>
    	<aside>
    		<section class="overlay-block">
        		<span><i class="fa fa-bars"></i>Navigation</span>
       		</section>
    		<nav>
	        	<a href="" class="active"><i class="fa fa-home"></i><span>Dashboard</span></a>
	            <a href="projecten"><i class="fa fa-folder-open"></i><span>Projecten</span></a>
	            <a href="gebruikers"><i class="fa fa-users"></i><span>Gebruikers</span></a>
	            <a class="bottom" href="#"><i class="fa fa-power-off"></i><span>Logout</span></a>
        	</nav>
    	</aside>
		<section id="navbar">
		    <section class="pull-right">
		       	<img src="../../public/images/liam.png" class="img-circle portrait" /> <a class="link" href="#"><b>Hi</b>, Liam Hubers</a>
		        <nav id="topnav">
		            <a href="#">Inbox <span class="badge">4</span> |</a>
		            <a href="#">Announcements <span class="badge">1</span> |</a>
		            <a href="#">Updates <span class="badge">1</span></a>
		        </nav>
		    </section>
		</section>
		<section id="header">
			<h1>Dashboard</h1>
		</section>
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		{{ HTML::script('js/plugins.js') }}
		{{ HTML::script('js/script.js') }}
	</body>
</html>



