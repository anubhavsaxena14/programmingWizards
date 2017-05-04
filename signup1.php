<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.button1 {
    border: none;
    color: black;
    background-color: #EFEFEF;
    padding: 5px 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 11px 11px;
    cursor: pointer;
}
.button2 {
    border: none;
    color: white;
    background-color: #33AEFF;
    padding: 5px 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 11px 11px;
    cursor: pointer;
}
.div1{
    width: 1200px;
    border: none;
    color: white;
    background-color: #CCFFCC;
    padding: 0px 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 0px 0px;
    cursor: default;
}
.div2{
    padding: 0px 0px;
}
.div3{
    background-color:#FBFCFC;
}
.div4{
    background-color:#F7F9F9;
}
.div5{
    padding: 16px 0px 0px 0px;
}
.div7{
    border: 1px;
    border-style: solid;
    border-color: #C0C0C0;
    height: 320px;
    padding: 30px 50px 50px 50px;
    background-color:#FBFCFC;
    margin:left = 0px; 
    margin:right = 0px; 
    margin:top = 0px; 
    margin:bottom = 0px;
}
.div8{
    background-color: #3980c6;
    color: white;
    padding: 11px 16px 11px 16px;
}
.u-fontSize48 {
    font-size: 48px;
    line-height: 56px;
}
.u-fontWeight100 {
    font-weight: 100;
    font-family: helvetica neue,aktiv-grotesk-std,helvetica,arial,freesans,liberation sans,numbus sans l,sans-serif;
}
.u-textAlignCenter {
    text-align: center;
}
.s-vgTop4 {
    margin-top: 56px;
}
.s-vgBottom3 {
    margin-bottom: 42px;
}
.s-grid, .s-grid0, .s-gridC {
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
}
</style>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top div4" role="navigation">
				<div class="navbar-header div3">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="third.php">stackoverflow</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Questions</a>
						</li>
						<li>
							<a href="#">Job</a>
						</li>
						<li>
							<a href="#">Documentation</a>
						</li>
						<li>
							<a href="#">Tags</a>
						</li>
						<li>
							<a href="#">Users</a>
						</li>
						
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" placeholder = "&#128269; Search..." class="form-control" />
						</div> 
						<button type="submit" class="btn btn-default">
							Search
						</button>
					</form>
					    
					    
					    <li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Tour</a>
								</li>
								<li>
									<a href="#">Help Center</a>
								</li>
								<li>
									<a href="#">Meta</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
								<li>
									<a href="#">Bussiness</a>
								</li>
							</ul>
						</li>
						
						
						<a href="login1.php"><button type="button" class="button1">Log In</button></a>
						<a href="signup1.php"><button type="button" class="button2">Sign Up</button></a>		
				</div>
           </div>
    </div>
</div>
</div>

<br>
<br>

        <h1 class="u-fontSize48 u-fontWeight100 u-textAlignCenter s-vgTop4 s-vgBottom3">
        Sign Up
        </h1>
        
        <div class="div7">
        <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form">
			<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Your Full Name
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password (min 8 characters)
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<button type="submit" class="btn btn-default div8">
					Sign Up 
				</button>
			</form>
			
			 
		</div>
	</div>
</div>
        </div>


            
</body>
</html>