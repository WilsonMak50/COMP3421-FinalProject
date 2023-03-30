document.getElementById("Header").innerHTML =
'<head>'+
	'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">'+
	'<link rel="stylesheet" href="style.css">'+
'</head>'+
		'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">'+
		  '<a class="navbar-brand" href="index.html">InteliRest</a>'+
		  '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">'+
			'<span class="navbar-toggler-icon"></span>'+
		  '</button>'+
		  '<div class="collapse navbar-collapse" id="navbarNav">'+
			'<div class="navbar-nav mr-auto">'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="index.html">Home</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="shop.php">Shop</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="about.html">About</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="contact.html">Contact</a>'+
			  '</div>'+
			'</div>'+

			'<div class="navbar-nav ml-auto">'+
      '<div class="nav-item">'+
				'<a class="nav-link" href="../actions/logout.php">Logout</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="login.html">Login</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="regist.html">Create Account</a>'+
			  '</div>'+
			  '<div class="nav-item">'+
				'<a class="nav-link" href="cart.php">Cart</a>'+
			  '</div>'+
			'</div>'+

		  '</div>'+
		'</nav>';


document.getElementById("Footer").innerHTML =	
"<p id='copyright'>Copyright &copy; " + new Date().getFullYear() + " You. All"
+ " rights reserved.</p>"
+ "<p id='credits'>Layout by You</p>"
+ "<p id='contact'><a href='mailto:you@you.com'>Contact Us</a> / "
+ "<a href='mailto:you@you.com'>Report a problem.</a></p>"
+ '<div id="poll">'
+ '<p>Do you like our page?</p>'
+ '<form>'
+ 'Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>'
+ 'No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">'
+ '</form>'
+'</div>';


function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","/poll/poll_vote.php?vote="+int,true);
  xmlhttp.send();
}

