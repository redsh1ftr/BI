<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{$pagetitle}}</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker2").datepicker();
  });
  </script>

	<style>


		body {
			width: 100%;
			background-color: #FFFFFF;
			margin-top:0%;
			left: 0%;
			top:0%;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
		}
		

		.topbar{
			position: absolute;
			margin-left:1px;
			margin-top:0px;
			width: 100%;
			left: 0%;
			top:0%;
		}

		.toolbar{
			position: absolute;	
			margin-left:-8px;
			margin-top: 45px;
			background-color:#ffffff;
			text-align:left;
			width: 100%;
		}

		.top_left_1{
			position: relative;	
			float: left;
			margin-left: 4px;
			background-color:#ffffff;
			text-align:left;
			width: 49%;
		}

		.top_right_1{
			position: relative;	
			float:right;
			margin-left: 4px;
			background-color:#ffffff;
			text-align:left;
			width: 50%;
		}


		.f1{
			text-align:left;
			font-size: 24px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}

		h5 {
			font-size:24px;
			text-align:"center";
		}
	</style>
</head>
<div class="topbar">


	<table width="50%">
{{-- ALL THE TOP BAR LINKS GO HERE --}}

		<td>{{link_to_route('admin_profile', 'Home')}}
		<td>{{link_to_route('logout', 'Log Out')}}
	</table>
<hr>


	
</div>

</html>