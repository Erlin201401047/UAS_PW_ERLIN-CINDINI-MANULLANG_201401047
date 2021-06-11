<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Kuis about EXO</title>
		<style>
		.hidden{
			display : none;
		}
		

		body{
			font-family: internet friends;
			font-size: 20px;
			color: rosybrown;
			text-align: center;
			background-color: cornsilk;
		}
	</style>
</head>
<body>
	<div id="opening_window">
		<h1> Selamat datang!</h1>
		<button onclick="startQuiz()">Start Quiz_EXO</button>
	</div>
	
	<div id="quiz_window" class="hidden">
		<h1 id="question"></h1>
	
		<input type="radio" name="choices" data-id="0" id="choice0">
		<label for="choice0" id="choiceText0"></label>
	
		<input type="radio" name="choices" data-id="1" id="choice1">
		<label for="choice1" id="choiceText1"></label>
	
		<input type="radio" name="choices" data-id="2" id="choice2">
		<label for="choice2" id="choiceText2"></label>
	
		<input type="radio" name="choices" data-id="3" id="choice3">
		<label for="choice3" id="choiceText3"></label>
	
		<button onclick="nextQuestion()">Next</button>
	</div>
	
	<div id="closing_window" class="hidden">
	<h1>Berakhir!</h1>
	<h2 id="scoreText"></h2>
	
	
	</div>
<script>
	const Quiz_EXO = [
		{
			question: "Berapa member EXO?",
			answer: ['12','11','9','8']
		},
		{
			question: "Siapa Leader EXO?",
			answer: ['Suho','Xiumin','D.O','Kai']
		},
		{
			question: "Apa nama fandom EXO?",
			answer: ['EXO-mate','EXO-L','love_exo','sasaeng']
		},
		{
			question: "Siapa happy virus di EXO?",
			answer: ['Chen','Sehun','Chanyeol','Lay']
		},
		{
			question: "Siapa member EXO yang ada didrama Moon Lovers:Scarlet Heart Ryeo?",
			answer: ['Chanyeol','Kai','Sehun','Baekhyun']
		}
		]
		
		const CORRECT_Answer = [2,0,1,2,3]
		
	function startQuiz(){
		document.getElementById('opening_window').style.display ='none'
		document.getElementById('quiz_window').style.display ='block'
	}
	
	let current_q = 0
	let total_score = 0
	let saved_answer = []
	
	document.addEventListener("DOMContentLoaded", function(event){
		setupQuestion()
	});
	
	function setupQuestion() {
		document.getElementById('question').innerText = Quiz_EXO[current_q]['question']
		document.getElementById('choiceText0').innerText = Quiz_EXO[current_q]['answer'][0]
		document.getElementById('choiceText1').innerText = Quiz_EXO[current_q]['answer'][1]
		document.getElementById('choiceText2').innerText = Quiz_EXO[current_q]['answer'][2]
		document.getElementById('choiceText3').innerText = Quiz_EXO[current_q]['answer'][3]
		
	}	
	
	function nextQuestion() {
		current_q++
		
		saveAnswer()

		if(current_q > Quiz_EXO.length - 1)
			stopQuiz()
			
		resetState()	
		setupQuestion()
	}
	
	function resetState(){
		const choosedAnswer = document.querySelector('input[name="choices"]:checked')
		if(choosedAnswer != null)
			choosedAnswer.checked = false
	}
	
	function stopQuiz() {
		checkScore()
		
		document.getElementById('quiz_window').style.display ='none'
		document.getElementById('closing_window').style.display ='block'
		
		document.getElementById('scoreText').innerHTML = "score kamu..." + total_score
		return
	
	}

	function saveAnswer() {
		const answer = document.querySelector('input[name="choices"]:checked');
		if (answer != null) {
			saved_answer.push(parseInt(answer.getAttribute('data-id')))
		}
	}
	
	function checkScore(){
		for (i=0; i< saved_answer.length; i++) {
			if (saved_answer[i] == CORRECT_Answer[i])
				total_score += 20
		}
	}
	
</script>
</body>
<br>
<br>
<p>
<a href="index.php"> click here to back home </a>
</p>
</br>
</br>
</html>