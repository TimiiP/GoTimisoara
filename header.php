<html lang="en" class="full-height">
<head>
<title>GoTimisoara</title>
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>

</head>

<body>
<header>

  <nav class="navbar navbar-expand-lg navbar-dark black fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
	  <img src="logo.png" alt="logo" class="logo">
	  <strong class="logoMaiJos">GoTimisoara</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tourist-att.php">Tourist Attractions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pubs.php">Pubs&Restaurants</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="map.php">Map</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="nearby-att.php">Nearby Attractions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div id="Home" class="tabcontent">
	<h3>Home</h3>
  </div>

  <div class="view intro-2">
    <div class="full-bg-img">
      <div class="mask rgba-black-strong flex-center">
        <div class="container">
     
        </div>
      </div>
    </div>
  </div>

</header>
<script type="text/javascript">
function setActive() {
	var url = window.location.toString().split("/")[3];
	if(url != ''){
		$('.nav-link').parent().removeClass("active");}
		
	$('.nav-link[href="'+ url +'"]').parent().addClass('active');
}

    $(document).ready(setActive());

</script> 

