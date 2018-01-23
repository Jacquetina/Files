<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
	<style type="text/css">

	html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000; 
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;   
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}
	body{

		background-color:#ccc;
	}
		.container
		{
			margin:0 auto;
			width: 1000px;
		}
		a
		{
			text-decoration: none;

		}
		a:hover
		{
			text-decoration: none;
			color: green;

		}
		header nav{
			width:100%;
			height:60px;
			background-color:#fff;
		}
		header nav ul li{
			float:left;
			list-style: none;
		}
		header nav ul li a{
			font-family: arial;
			font size:17px;
			color:#111;
			line-height:58px;
			vertical-align: center;
		}
		header .login {
			float:right;
			padding-right: 30px;
		}
		header .login form {
			float:left;
			padding-top: 15px;
		}
		header .login form input {
			float:left;
			width:140px;
			height:30px;
			border:none;
			margin-right:10px;
			padding: 0px 10px;
			background-color: #ccc;
			
			font size:14px;
			color:#111;
			line-height:30px;
			
		}
		header .login form button {
			float:left;
			width:60px;
			height:30px;
			border:none;
			margin-right:10px;
			
			background-color: #f3f3f3;
			font-family: arial;
			font size:14px;
			color:#111;
			cursor: pointer;
			
		}
		header .login form button:hover {
			background-color: #ccc;
		}
		header .login a {
			display:block;
			float:left;
			width:60px;
			height:60px;
			border:none;
			line-height: 58px;
			background-color: #fff;
			font size:14px;
			color:#111;
			cursor: pointer;
			
		}
	</style>
</head>
<body>
		<header>
			<nav>
				<div class="container">
					<ul>
						<li><a href="index.php">HOME</a></li>
					</ul>
				</div>
				
				<div class="login">
					<form>
						<input type="text" name="uid" placeholder="Username/Email">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>
				</div>
				
			</nav>
		</header>
</body>
</html>
