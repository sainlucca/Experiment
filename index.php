<!DOCTYPE html>
<html>
	<title>Easy Pay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3mobile.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
	<body>
		<div class="w3-row">
			<div class="w3-container w3-half">
				<h2 class="w3-bar-item">Explanations of the experiment - 1</h2>
				<p align="justify">
					<h4 class="w3-bar-item">
						<b>You can just easily follow these 2 steps: </b>
					</h4>
					<font size="2.5" id="checkDevice">1.	You can check the story by 
						<script>
								var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
								var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
								var Android = /Android/i.test(navigator.userAgent);
								
								if (isSafari && iOS) {
									var temp_link = document.createElement("a");
									temp_link.href = "https://www.instagram.com/s/aGlnaGxpZ2h0OjE4MDIyNTQ5NzcxMTcwNjg2/?igshid=88gijq260eik&story_media_id=1829697450946112708";
									temp_link.innerHTML = "Click Here";

									document.getElementById("checkDevice").appendChild(temp_link);
								} else if(Android) {
									var temp_link = document.createElement("a");
									temp_link.href = "intent://instagram.com/s/aGlnaGxpZ2h0OjE4MDIyNTQ5NzcxMTcwNjg2/?igshid=88gijq260eik&story_media_id=1829697450946112708#Intent;package=com.instagram.android;scheme=https;end";
									temp_link.innerHTML = "Click Here";

									document.getElementById("checkDevice").appendChild(temp_link);
								} else {
									var temp_link = document.createElement("a");
									temp_link.href = "https://www.instagram.com/s/aGlnaGxpZ2h0OjE4MDIyNTQ5NzcxMTcwNjg2/?igshid=88gijq260eik&story_media_id=1829697450946112708";
									temp_link.innerHTML = "Click Here";

									document.getElementById("checkDevice").appendChild(temp_link);
								}
							</script>			
					<br>
					2.	After you finish reacting to the story given to you. 
					Please fill in the questionnaire <a href="https://forms.gle/hGVCrxK4vWMkrzPW7">Clicking Here</a> 
					</font>
				</p>
				

			</div>
		</div>	
	</body>
</html> 