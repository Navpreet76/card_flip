<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function flip() {
	$('.card').toggleClass('flipped');
}
</script>
</head>
<body>
<button onclick="flip()">flip the card</button>
<section class="container">
	<div class="card" onclick="flip()">
		<div class="front">2
		<div class="col-md-4">
    	<div class="thumbnail">
      	<a href="huD5OP.png">
        <img src="huD5OP.png" alt="huD5OP" style="width:90%;"></a>
	        <div class="caption">
	          <p>Insignia</p>
        	</div>
      			</a>
    		</div>
  		</div>	
		</div>
		<div class="back">1
		</div>
	</div>
</section>
</body>
</html>