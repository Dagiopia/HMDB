<?php
	$usrname = $_GET["user"];
	$usrlevel = ($_GET["level"] == 0 ? "user" : "admin");
	setcookie($usrlevel, $usrname, time()+86400, "/", "", 0);
	/*
	 * CALLED FROM login.php with username and user_level as parameters
	 * 
		this page is only for transferring the user to the next page after a login
		it also sets up the cookie to be stored on the users computer
		first it takes the user name and privilage level of the account used to login
		from the loginpage.php page using GET transfer through the url.
		after that it uses those values to create a cookie that expires within 24 hours
		unless the user logs out.
	*/
?>
<html>
<head>
<title> Directing to <?php echo "$usrlevel"; ?>'s Page </title>
</head>
<style>
	p{
		height: 200px;
		width: 400px;
		color: #212121;

		position: fixed;
		top: 50%;
		left: 50%;
		margin-top: -50px;
		margin-left: -200px;
		font-size: 29px;
		text-shadow: 0 1px 0.1em black;
		text-align: center;
	}
	
	
	
	@keyframes blink {
    /**
     * At the start of the animation the dot
     * has an opacity of .2
     */
    0% {
      opacity: .2;
    }
    /**
     * At 20% the dot is fully visible and
     * then fades out slowly
     */
    20% {
      opacity: 1;
    }
    /**
     * Until it reaches an opacity of .2 and
     * the animation can start again
     */
    100% {
      opacity: .2;
    }
}

.saving span {
    /**
     * Use the blink animation, which is defined above
     */
    animation-name: blink;
    /**
     * The animation should take 1.4 seconds
     */
    animation-duration: 1.4s;
    /**
     * It will repeat itself forever
     */
    animation-iteration-count: infinite;
    /**
     * This makes sure that the starting style (opacity: .2)
     * of the animation is applied before the animation starts.
     * Otherwise we would see a short flash or would have
     * to set the default styling of the dots to the same
     * as the animation. Same applies for the ending styles.
     */
    animation-fill-mode: both;
}

.saving span:nth-child(2) {
    /**
     * Starts the animation of the third dot
     * with a delay of .2s, otherwise all dots
     * would animate at the same time
     */
    animation-delay: .2s;
}

.saving span:nth-child(3) {
    /**
     * Starts the animation of the third dot
     * with a delay of .4s, otherwise all dots
     * would animate at the same time
     */
    animation-delay: .4s;
}
	
	
	
	
</style>
<body>

<p class="saving">Loading<span>.</span><span>.</span><span>.</span></p>
<script>
time_to_redirect = window.setTimeout(
	function(){ 
		window.location = "../movie_view.php"; 
	},
	3000);
</script>
</body>
</html>
