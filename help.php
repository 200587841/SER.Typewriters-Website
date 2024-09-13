<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SER. Typewriters</title>
	<meta name="author" content="Group_NL - Dalbir Singh, Natalia Selestrini Dias, Samir K C, Sergio Cutrim Gouveia" />
	<meta name="description" content="Project 1 (Micro-Site)">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
		rel="stylesheet">
		<style>
        .question {
            display: none;
        }

        .question:first-child {
            display: block;
        }
    </style>
</head>

<body>

<header>
		<img src="images/logo.png" alt="Logo SER.">
		<div>
			<h1>SER.</h1>
			<h2>Typewriters</h2>
		</div>
	
	</header>
	<div id="navbar">
		<?php
		include 'includes/global-nav.php';
		?>
	</div>
	<main>
		<div class="title2">
		<h2 class="title"> Do you want to buy a Typewriter but have no idea which model works better for you?</h2>
		<h4>We understand that it is complicated and that is why we have created this section to help you out</h4>
		</div>
		<div class="questions">
			<div class="question" id="question1">
				<p>Do you plan to use your typewriter at home or somewhere else?</p>
				<label>
					<input type="radio" name="q1" value="a"> At home</label><br>
					<input type="radio" name="q1" value="b"> In the Office</label><br>
					<input type="radio" name="q1" value="c"> At home, café, office... anywhere!</label><br>
					<input type="radio" name="q1" value="d"> It's a gift.... I don't know!</label><br>
					<br>
					<div class="button-container">
						<button id="button" onclick="nextQuestion()">Next Question</button>
					</div>
					
			</div>
			<div class="question" id="question2">
				<p>Are you a student, professor, writer or else?</p>
				<label>
					<input type="radio" name="q2" value="a"> Writer</label><br>
					<input type="radio" name="q2" value="b"> Professor</label><br>
					<input type="radio" name="q2" value="c"> Student</label><br>
					<input type="radio" name="q2" value="d"> I don't feel like sharing.</label><br>
					<br>
					<div class="button-container">
						<button id="button2" onclick="previousQuestion()">Previous Question</button>
						<button id="button" onclick="nextQuestion()">Next Question</button>
					</div>
			</div>
			<div class="question" id="question3">
				<p>Where do you store your documents?</p>
				<label>
					<input type="radio" name="q3" value="a"> Boxes at my house</label><br>
					<input type="radio" name="q3" value="b"> Next to Typewriter</label><br>
					<input type="radio" name="q3" value="c"> Briefcase</label><br>
					<input type="radio" name="q3" value="d"> I don't!</label><br>
					<br>
					<div class="button-container">
						<button id="button2" onclick="previousQuestion()">Previous Question</button>
						<button id="button" onclick="nextQuestion()">Next Question</button>
					</div>
			</div>
			<div class="question" id="question4">
				<p>What is most important for you?</p>
				<label>
					<input type="radio" name="q4" value="a"> Performance</label><br>
					<input type="radio" name="q4" value="b"> Security</label><br>
					<input type="radio" name="q4" value="c"> Portability</label><br>
					<input type="radio" name="q4" value="d"> I'm not sure</label><br>
					<br>
					<div class="button-container">
						<button id="button2" onclick="previousQuestion()">Previous Question</button>
						<button id="button" onclick="displayResults()">Get your Results</button>
					</div>
				
			</div>
			
			<div class="question" id="results">	
				<div id="points">
				</div>
				<div id="resultscontent">
				</div>
				<div class="button-container">
				<button id="button3" onclick="restart()">Restart</button>
				</div>
			</div>	
		</div>
		
		

		<script>
    	let currentQuestion = 1;
    	const questions = document.querySelectorAll('.question');

    	function nextQuestion() {
      		if (currentQuestion < questions.length) {
        	questions[currentQuestion - 1].style.display = 'none';
        	currentQuestion++;
        	questions[currentQuestion - 1].style.display = 'block';
      		}
    	}

    	function previousQuestion() {
      		if (currentQuestion > 1) {
        	questions[currentQuestion - 1].style.display = 'none';
        	currentQuestion--;
        	questions[currentQuestion - 1].style.display = 'block';
      		}
    	}

		function displayResults() {
				const totalPoints = getResults();
				questions[currentQuestion - 1].style.display = 'none';
				document.getElementById('results').style.display = 'block';
				document.getElementById('points').innerHTML = `Total Points: ${totalPoints}`;
				document.getElementById('points').style.display = 'block';
				showResults(totalPoints);
            }

		function getResults() {
			let points=0;
			const questions = document.querySelectorAll('.question');
			questions.forEach((question,index) => {
				const answer=question.querySelectorAll('input[type="radio"]:checked');
				if (answer.length > 0) {
					answer.forEach (answer => {
						const valueAnswer = answer.value;
						if (valueAnswer =='a'){
							points +=2;
						} else if (valueAnswer =='b'){
							points +=5;
						} else if (valueAnswer =='c') {
							points +=15;
						} else if (valueAnswer == 'd') {
							points +=30;
						}
					});
				} 
			});
			return points;
			}			

		function showResults(totalPoints) {
			
            var resultContainer = document.getElementById("resultscontent");
            resultContainer.innerHTML = "";	
			var pointsElement = document.createElement("p");
            pointsElement.innerHTML = "Total Points: " + totalPoints;
            resultContainer.appendChild(pointsElement);
			var content= "";
			if (totalPoints >= 0 && totalPoints <= 10) {
                content += `
                    <h5> From 0 to 10 points </h5> 
					<center>
                    <img src="images/1.png" height="180" width="200" alt="Typewriter1" />
					</center>
                    <p> You are the typical writer and probably needs our machine in your house. We suggest to you purchasing 
                    the model 1 for only $100.</p>`;
		        } else if (totalPoints >= 11 && totalPoints <= 20) {
                content += `
                    <h5> From 11 to 20 points </h5>
					<center>
                    <img src="images/2.png" height="180" width="200" alt="Typewriter2" />
                    </center>
					<p> Are you an office employee like a professor or a consultant? You just need a typewriter that is above
					all reliable. We suggest to you purchasing the model 2 for just $100.</p>`;
				
            } else if (totalPoints >= 21 && totalPoints <= 30) {
                content += `
                    <h5> From 21 to 30 points </h5> 
					<center>
                    <img src="images/3.png" height="180" width="200" alt="Typewriter3" />
                    </center>
					<p> You are the future! I am pretty sure that we will see you in a café with your beautiful typewriter.
					We think model 3 for just $150 will fit you perfectly.</p>`;
				
            } else if (totalPoints >= 31 && totalPoints <= 40) {
                content += `
                    <h5> From 31 to 40 points </h5> 
					<center>
                    <img src="images/4.png" height="180" width="200" alt="Typewriter4" />
                    </center>
					<p> I can see you are a person of fine taste! And I'm pretty sure I can match you with our model 4.
					For a mere $200 it will suit you very weel!</p>`;
				
            } else if (totalPoints >= 41 && totalPoints <= 50) {
                content += `
                    <h5> From 41 to 50 points </h5> 
					<center>
                    <img src="images/5.png" height="180" width="200" alt="Typewriter5" />
                    </center>
					<p> There's good taste and then there are some people like you... What an excelent and refined person you must be.
					You will look great alongside model 5. The price? Just $150 for you.</p>`;
				
            } else if (totalPoints >= 51 && totalPoints <= 60) {
                content += `
                    <h5> From 51 to 60 points </h5> 
					<center>
                    <img src="images/6.png" height="180" width="200" alt="Typewriter6" />
                    </center>
					<p> I think you are hiding some information from me... but don't worry I can still make a decision with what 
					you told me and model 6 will do you wonders for $250 only.</p>`;
				
            } else if (totalPoints >= 61 && totalPoints <= 70) {
                content += `
                    <h5> From 61 to 70 points </h5> 
					<center>
                    <img src="images/7.png" height="180" width="200" alt="Typewriter7" />
                    </center>
					<p> Maybe, maybe you are the right person for this one - check out our model 7 for only $100.</p>`;
				
            } else if (totalPoints >= 71 && totalPoints <= 80) {
                content += `
                    <h5> From 71 to 80 points </h5> 
					<center>
                    <img src="images/8.png" height="180" width="200" alt="Typewriter8" />
                    </center>
					<p> You need to check our model 8 for a total of $200 it will fit you perfectly!</p>`;
				
			}  else if (totalPoints >= 81 && totalPoints <= 90) {
                content += `
                    <h5> From 81 to 90 points </h5> 
					<center>
                    <img src="images/9.png" height="180" width="200" alt="Typewriter9" />
                    </center>
					<p> Not sure about the needs? Then model 8 is probably the right one with multiple features and the 
					most advanced technology for just $350`;
				
			}   else if (totalPoints >= 91 && totalPoints <= 100) {
                content += `
                    <h5> From 91 to 100 points </h5> 
					<center>
                    <img src="images/10.png" height="180" width="200" alt="Typewriter10" />
                    </center>
					<p> Our model 10 is extremely versatile and you will benefit from it if you use it everyday! Check it out,
					because $200 is a bargain!</p>`;
				
			}  else if (totalPoints >= 101 && totalPoints <= 110) {
                content += `
                    <h5> From 101 to 110 points </h5> 
					<center>
                    <img src="images/11.png" height="180" width="200" alt="Typewriter11" />
                    </center>
					<p> It looks like you are looking for a gift or you have never had a typewriter before. Or is it just because you
					don't want to talk much? But I have a lot of powers and I think you would be happy with a model 11 for only $150.</p>`;
				
			} 	else if (totalPoints > 111) {
                content += `
                    <h5> More than 111 points </h5>
					<center> 
                    <img src="images/12.png" height="180" width="200" alt="Typewriter12" />
                    </center>
					<p> Now I know you don't want to give me any information, so I believe you are someone that is looking for 
                    new technologies and experimental things. Am I right? Why not check our newest model 12 with a bunch of features for only $250.</p>`;
				
            }
		
			resultContainer.innerHTML = content;
        }
	function restart()	{
			self.location=self.location;
	}

</script>



	</main>

	<footer>
		<?php
		include 'includes/footer-nav.php';
		?>
	</footer>
</body>

</html>