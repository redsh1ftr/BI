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
			background-color: #92c7ff;
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
			background-image:url('http://www.precisemaintenance.com/ExcelBI/public/uploads/TXVpJ5UMLkVTOHJL3xZJRg7Rck5HriN3As8SJRkpsCdkKssDy5mpzN9AqYKSCqlOH78CG4gHMsOce9NgJhsXPb7GSaXrIamTiGpoD6O0Uwcsx7kgeJwEfisVA4RQ.png');
			width: 100%;
			height:35px;
			left: 0%;
			top:0%;
		}

		.toolbar{
			position: fixed;	
			margin-left:-8px;
			margin-top: 40px;
			background-image:url('http://www.precisemaintenance.com/ExcelBI/public/uploads/TXVpJ5UMLkVTOHJL3xZJRg7Rck5HriN3As8SJRkpsCdkKssDy5mpzN9AqYKSCqlOH78CG4gHMsOce9NgJhsXPb7GSaXrIamTiGpoD6O0Uwcsx7kgeJwEfisVA4RQ.png');
			text-align:left;
			width: 100%;
			height:35px;
		}

		.top_left_1{
			position: relative;	
			float: left;
			margin-left: 4px;
			margin-top: 1%;
			background-color:#92c7ff;
			text-align:left;
			width: 30%;
		}

		.top_right_1{
			position: relative;	
			float:right;
			margin-top: 1%;
			margin-left: 4px;
			background-color:#92c7ff;
			text-align:left;
			width: 69%;
		}


		.f1{
			text-align:left;
			font-size: 24px;
		}

		.f7{
			text-align: center;
			font-size: 30px;
			font-family: Impact;
		}

		.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 13px 26px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #ffffff;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ffffff;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }


.BlueTable {
	margin:0px;padding:0px;
	width:100%;
	text-align: center;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.BlueTable table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.BlueTable tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.BlueTable table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.BlueTable table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.BlueTable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.BlueTable tr:hover td{
	background-color:#cccccc;
		

}
.BlueTable td{
	vertical-align:middle;
	
	background-color:#ffffff;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:12px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.BlueTable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.BlueTable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.BlueTable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.BlueTable tr:first-child td{
		background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
	background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

	background-color:#84c1ff;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}
.BlueTable tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #84c1ff 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #84c1ff), color-stop(1, #ffffff) );
	background:-moz-linear-gradient( center top, #84c1ff 5%, #ffffff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#84c1ff", endColorstr="#ffffff");	background: -o-linear-gradient(top,#84c1ff,ffffff);

	background-color:#84c1ff;
}
.BlueTable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.BlueTable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}




.BaseTable {
	margin:0px;padding:0px;
	width:100%;
	-moz-border-radius-bottomleft:9px;
	-webkit-border-bottom-left-radius:9px;
	border-bottom-left-radius:9px;
	
	-moz-border-radius-bottomright:9px;
	-webkit-border-bottom-right-radius:9px;
	border-bottom-right-radius:9px;
	
	-moz-border-radius-topright:9px;
	-webkit-border-top-right-radius:9px;
	border-top-right-radius:9px;
	
	-moz-border-radius-topleft:9px;
	-webkit-border-top-left-radius:9px;
	border-top-left-radius:9px;
}.BaseTable table{
    border-collapse: collapse;
       border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.BaseTable tr:last-child td:last-child {
	-moz-border-radius-bottomright:9px;
	-webkit-border-bottom-right-radius:9px;
	border-bottom-right-radius:9px;
}
.BaseTable table tr:first-child td:first-child {
	-moz-border-radius-topleft:9px;
	-webkit-border-top-left-radius:9px;
	border-top-left-radius:9px;
}
.BaseTable table tr:first-child td:last-child {
	-moz-border-radius-topright:9px;
	-webkit-border-top-right-radius:9px;
	border-top-right-radius:9px;
}.BaseTable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:9px;
	-webkit-border-bottom-left-radius:9px;
	border-bottom-left-radius:9px;
}.BaseTable tr:hover td{
	background-color:#ffffff;
		

}
.BaseTable td{
	vertical-align:left;
	
	background-color:#9fcdfc;

	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:1px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.BaseTable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.BaseTable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.BaseTable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}



	background-color:#a5d2ff;
}
.BaseTable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.BaseTable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
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


	
{{-- ALL THE TOP BAR LINKS GO HERE --}}

		<a class="button" {{link_to_route('admin_profile', 'Home')}}
		<a class="button" {{link_to_route('logout', 'Log Out')}}
	



	
</div>

</html>