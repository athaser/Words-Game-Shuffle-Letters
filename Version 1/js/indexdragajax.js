function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint-wrapper").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();		
        } else {
            // code for IE6, IE5
            var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");	
        }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint-wrapper").innerHTML = this.responseText;
			loadQuestion();
        }
    };
		
    xmlhttp.open("GET","get_words.php?q="+str,true);
	xmlhttp.send()
	}
}


var correctWord
var questionNumber = 0;

function loadQuestion() {
	correctWord =  document.getElementById("txtHint-wrapper").innerHTML;
	jumble(correctWord);
	questionNumber++;
	playAudio();
}

function jumble(word) {
	word = word.split("")
	$('#txtHint-wrapper').empty();
	$.each(word, function(index, value) {
		$('<div/>').addClass('txtHint').text(value).appendTo('#txtHint-wrapper');
	})

	$('#txtHint-wrapper').sortable(
	{
		items: '.txtHint',
	});		
}
			
function check() {
	var answer = [];
	$('.txtHint').each( function(index, value) {
		answer.push($(value).text());
	})
	answer = answer.join("");
	const foo = answer;
	var x = foo;
	
	forma(x);
	//alert (x);
	///return x;
	//const foo = answer;
	//alert(foo);
	//typeof foo;
	//return foo;
}

function forma(a) {
	document.myform.word.value = a;
	document.forms["myform"].submit();
}

var x = document.getElementById("myAudiopieces");

function playAudio() {
  x.play();
}

function pauseAudio() {
  x.pause();
}