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
    margin-top: 50px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 0px;
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
    position: fixed;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 0px;
}
.div5{
    padding: 16px 0px 0px 0px;
}
.footer {
  color:white;
  position: static;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #1F2C2D;
  text-align: center;
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
				</nav>
       </div>
    </div>
</div>

<table>
<tr>
<td>
    <div class="container div1">           
    <img src="pic3.jpg" class="img-thumbnail div2" alt="Cinque Terre" width="304" height="236"> 
    <pre class = "div5">
    Help solve coding problems
    Make internet a better place
    Join the community
    </pre>
    <div class="container">
    <button type="button" class="btn btn-primary btn-lg btn-block">Ask a question</button>
    <br>
    </div>
</td>
</tr>
</table>

<br>

    <div class="container">
  <h4>Top Questions<h4>
<br>  
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#interesting">interesting</a></li>
    <li><a data-toggle="pill" href="#featured">featured</a></li>
    <li><a data-toggle="pill" href="#hot">hot</a></li>
    <li><a data-toggle="pill" href="#week">week</a></li>
    <li><a data-toggle="pill" href="#month">month</a></li>
  </ul>
  <div class="tab-content">
    <div id="interesting" class="tab-pane fade in active">
      <h4>Interesting</h4>
      <p>
      
            <div class="list-group">
            <a href="#" class="list-group-item">Question 1</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 2</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 3</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 4</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 5</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            </div>
      </p>
    </div>
    <div id="featured" class="tab-pane fade">
      <h4>Featured</h4>
      <p>
            <div class="list-group">
            <a href="#" class="list-group-item">Question 1</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 2</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 3</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 4</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 5</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            </div>
      </p>
    </div>
    <div id="hot" class="tab-pane fade">
      <h4>Hot</h4>
      <p>
            <div class="list-group">
            <a href="#" class="list-group-item">Question 1</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 2</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 3</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 4</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 5</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            </div>
      </p>
    </div>
    <div id="week" class="tab-pane fade">
      <h4>Week</h4>
      <p>
            <div class="list-group">
            <a href="#" class="list-group-item">Question 1</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 2</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 3</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 4</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 5</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            </div>
      </p>
    </div>
    <div id="month" class="tab-pane fade">
      <h4>Month</h4>
      <p>
            <div class="list-group">
            <a href="#" class="list-group-item">Question 1</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 2</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 3</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 4</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            <a href="#" class="list-group-item">Question 5</a>
            <p><a href="#" class="btn btn-link" type="button">5 answers</a>
            <a href="#" class="btn disabled" type="button">20 views</a></p>
            </div>
      </p>
    </div>
  </div>
</div>
</div>

        <div class="footer">
        This footer will always be positioned at the bottom of the page, but <strong>static</strong>.
        </div>

</body>
</html>
