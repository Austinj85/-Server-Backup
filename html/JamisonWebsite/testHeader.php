<!doctype html>
	<html>
  		<head>
  			<meta charset="UTF-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    		<link rel="stylesheet" type="text/css" href="css/testCSS.css">
    	</head>
    	
<body>
	<header>
		<div class= "topPicture">
			<img src="Images/casino.jpg" alt="random pic here" style="width:100%;height:100px;">
		</div>	
		<div class = "title">
			<a href="testHome.php">
        <div id="imagepic">
			<img src="Images/casinologo.png" alt="Logo" style="width:300px;height:50px;border:0;"></div>
			</a>
        <div class="dropdown">
					<button class="navButton" style="vertical-align:middle"><span>Tab 1</span></button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
          </div></div>
        <div class="dropdown">
			    <button class="navButton" style="vertical-align:middle"><span>Tab 2</span></button>
			    <div class="dropdown-content">
						<a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
          </div></div>
        <div class="dropdown">
			        <button class="navButton" style="vertical-align:middle"><span>Tab 3</span></button>
			        <div class="dropdown-content">
						<a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
          </div></div>
        <div class="dropdown">
			        <button class="navButton" style="vertical-align:middle"><span>Tab 4</span></button>
			        <div class="dropdown-content">
						<a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
          </div></div>
		</div>
		<div class="subTitle">
      <button class="searchBtn" style="vertical-align:middle"><span>🔍</span></button>
			<input type="text" placeholder="Search" class="searchBar">
		</div>
	</header>
  