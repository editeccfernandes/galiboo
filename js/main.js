//window.onload = function() {

//vars
var document_height = $(document).height();
var window_height = $(window).height();
var window_scroll_top = $(window).scrollTop();
var base = "proxy.php";
//hovers da navegação e tal
$('.page-navigation-item-number').hover(function() {
	var active_nav = $(this).attr('data-pageinfo');
	$('.page-hover').html(active_nav)
	$('.page-hover').toggleClass(' visible');
});
//detetar if id is in the viewport
$.fn.inviewport = function() {
	var element_top = $(this).offset().top;
	var element_bottom = element_top + $(this).outerHeight();
	var viewport_top = $(window).scrollTop();
	var viewport_bottom = viewport_top + window_height;
	return element_bottom > viewport_top && element_top < viewport_bottom;
};
$(".chat-audio").prop("volume", 0.3);

//dentro da janela
$(window).on(' scroll', function() {
	$('.slide').each(function() {
		// para cada slide que estiver na janela estiver na janela
		if ($(this).inviewport()) {
			$(this).children().stop().delay(100).stop().fadeIn(300);
			//console.log($(this).attr('data-pagename'))
			$(".audio-range").trigger('pause');
			$(".chat-audio").trigger('pause');


		} else {
			$(this).children().stop().delay(100).stop().fadeOut(300);
		}
		passive: true
	});
});
//styling com form range inputs
$("input[type='range']").on("input", function($this) {
	var css = "hue-rotate({{hue}}) saturate({{saturate}}) grayscale({{grayscale}})"
	var allRanges = $("input[type='range']");
	allRanges.each(function(index, el) {
		if (index == 0) {
			var valor = ((parseInt(el.value)/10) * 360) / 100 + "deg"
			css = css.replace("{{hue}}", valor)
		}
		if (index == 1) {
			var valor = (parseInt(el.value)/10) + 100;
			css = css.replace("{{saturate}}", valor + "%")
		}
		if (index == 2) {
			var valor = (((parseInt(el.value)/10)) ** 2) / 200
			//console.log(valor)
			css = css.replace("{{grayscale}}", valor + "%")
		}
	});
	//console.log(css)
	$(".hsl-ai-orb").css("filter", css);
});
//mouse position
$('.slide').on("mousemove", function(mouseposition) {
	//console.log("pageX: " + mouseposition.pageX + ", pageY: " + mouseposition.pageY)
	var offset = $(this).offset();
	x = mouseposition.pageX - offset.left;
	y = mouseposition.pageY - offset.top;
	//Eventos de scroll
	$("._small").css({
		marginLeft: +x / 10 + 'px',
		marginTop: + -y / 10 + 'px'
	});
	$("._medium").css({
		marginLeft: +x / 30 + 'px',
		marginTop: + -y / 30 + 'px'
	});
	$("._large").css({
		marginLeft: +x / 40 + 'px',
		marginTop: +y / 40 + 'px'
	});
	$("._xlarge").css({
		marginLeft: +x / 45 + 'px',
		marginTop: + -y / 45 + 'px'
	});
	$(".line").css({
		marginLeft: +x / 50 + 'px',
		//marginTop: + - y  /100 + 'px'
	});
});
//eventos no scroll
$(window).on('scroll', function() {
	var window_scroll_top = $(document).scrollTop();
	//Mostrar / Ocultar navegação
	if (window_scroll_top > 500) {
		$('.page-navigation-wrapper').stop().fadeIn(300);
	} else {
		$('.page-navigation-wrapper').stop().fadeOut(300);
	};
	//scroll 
	var percent_scrolled = window_scroll_top / (document_height - window_height) * 100;
	//console.log(percent_scrolled)
	$('#progress-bar').css({
		'height': percent_scrolled + '%'
	});
	$('.line').css('margin-top', window_scroll_top * 1.2);
});
$('#analyze').on('click', function() {
	$('.small-title').text('Analyzing, please wait.');
	$('.loader').fadeIn(200);
	$('.slide-subheader, .youtube').fadeOut(200);
	var url = window.youtube.url.value;
	request("analyze_youtube", function(data) {
	$('.loader').fadeOut(200);

		//debugger;
		//$("#energy .result-bar")
		//$("#energy .result-bar").css("width",parseFloat(data.analysis.danceability).toFixed(2) * 100)
		$('.video').prop('src', 'https://www.youtube.com/embed/' + data.video_info.youtube_id, "volume", 0.3);;
		//console.log('https://www.youtube.com/embed/' + data.video_info.youtube_id)
		$('.results-header').text(data.video_info.title)
		$('.subslide-1').fadeOut(600, 'swing', function() {
			$('.subslide-2').fadeIn(600, 'swing', function() {
				$("#energy .result-bar").delay(500).animate({
					width: parseFloat(data.analysis.energy).toFixed(2) * 100 + "%",
				}, 500).text(parseFloat(data.analysis.energy).toFixed(1) * 100 + "%")
				$("#danceability .result-bar").delay(500).animate({
					width: parseFloat(data.analysis.danceability).toFixed(2) * 100 + "%",
				}, 500).text(parseFloat(data.analysis.danceability).toFixed(1) * 100 + "%")
				$("#acousticness .result-bar").delay(500).animate({
					width: parseFloat(data.analysis.acousticness).toFixed(2) * 100 + "%",
				}, 500).text(parseFloat(data.analysis.acousticness).toFixed(1) * 100 + "%")
				$("#instrumentalness .result-bar").delay(500).animate({
					width: parseFloat(data.analysis.instrumentalness).toFixed(2) * 100 + "%",
				}, 500).text(parseFloat(data.analysis.instrumentalness).toFixed(1) * 100 + "%")
				$('.subslide-1').fadeOut(600, function() {
					$('.small-title').text("Alright! Let's go for another one then!");
					$('.slide-subheader, .youtube').fadeIn(200);
					$("#link").val('https://www.youtube.com/watch?v=HNjX6o7t6NU');
				});
			});
		});
	}, _, "url=" + url)
})
$('.result-return').on('click', function() {
	$('.subslide-2').fadeOut(600, function() {
		$('.subslide-1').fadeIn(600);
		$('.result-bar').text('0%').animate({
			width: '0%'
		});
	})
})
$('.range-submit').on('click', function() {
	var form = window.range_form;
	var a = parseFloat(form.a.value) / 10000;
	var b = parseFloat(form.b.value) / 10000;
	var c = parseFloat(form.c.value) / 10000;
	//console.log(a,b,c)
	var query = "a=" + a + "&b=" + b + "&c=" + c
	request("range_search", function(data) {
		$('.range-subslider-2').fadeIn(600);
		var sound = data.results[0].audio_url;
		//console.log(sound);
		document.getElementsByClassName('audio-range')[0].src = sound;
			$('.song').text(data.results[0].title);
			var artists = data.results[0].artists.reduce(function(prev, current) {
				return prev + current.name + " and "
			}, "");
			artists = artists.substring(0, artists.length - 5);
			$('.artist').text(artists); 
		$('.range-subslider-1').fadeOut(600, function() {
			$(".audio-range").trigger('play').prop("volume", 0.3);

		});
	}, _, query);
});
$('.range-return').on('click', function() {
	$(".audio-range").trigger('pause');
	$('.range-subslider-2').fadeOut(600, function() {
		$('.range-subslider-1').fadeIn(600);
	});

	
});

$('.article').on('click', function(){
	$('.modal-header').text($(this).children('a').children('.article-header').text());
	$('.modal-text').text($(this).children('a').children('.article-text').text());
	$('.link-subslider-1').animate({opacity: 0, }, 600, function(){
		$('.link-subslider-2').animate({opacity: 1, }, 600)
	});
})

$('.modal-button').on('click', function(){
	$('.link-subslider-2').animate({opacity: 0, }, 600, function(){
		$('.link-subslider-1').animate({opacity: 1, }, 600)
	});

})




//Speech recognition
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
//call API
var recognition = new SpeechRecognition();
recognition.lang = 'en-US';
recognition.interimResults = false;
recognition.maxAlternatives = 5;
//print de palavras à medida do discurso
recognition.interimResults = false;
var _ = undefined;

function request(type, resolve, reject, params) {
	var xhr = new XMLHttpRequest();
	xhr.addEventListener("readystatechange", function() {
		if (this.status == 200) {
			try {
				resolve(JSON.parse(xhr.response));
			} catch (e) {
				return;
			}
		} else {
			if (reject) {
				reject(xhr);
			} else {
				//tratar do erro
				return;
			}
		}
	});
	xhr.open("GET", base + "?type=" + type + "&" + params);
	xhr.send()
}

function onResult(e) {
	//console.log("[Recognition] Speech Recongition found words")
	$('.dynamic-title').text('This is what i understood.');
	$('.slide-subheader').text('Make sure you speak close to your microphone.')

	var results = Array.prototype.slice.call(e.results)
	var transcript = results.map(function(result) {
		return result[0]
	}).map(function(result) {
		return result.transcript
	}).join(' ');
	document.getElementsByClassName('chat-user-baloon-txt')[0].innerHTML = transcript;
	var query = encodeURIComponent(transcript);
	request("smart_search", function(data) {
		var results = data.results[0];
		var artists = results.artists.reduce(function(prev, current) {
			return prev + current.name + " and "
		}, "")
		artists = artists.substring(0, artists.length - 5);
		audioUrl = results.audio_url
		var string = "I found one! " + "Here's " + results.title + " by " + artists + " <audio class='chat-audio' src=" + audioUrl + " autoplay controls class='audio-chat'></audio>";
		document.getElementsByClassName('chat-ai-baloon-txt')[0].innerHTML = string
		$('.audio-chat').prop("volume", 0.3);

	}, _, "query=" + query)
}
//Quando começar a reconhecer discurso
recognition.onstart = function(e) {
	//console.log("[Recognition] Recognition Started")
	$('.dynamic-title').text('Well then, start talking!');
	$('.slide-subheader').text('Just speak close to your microphone. Please.')

	//recognition.addEventListener("end", recognition.start)
}
//Detecção de som
recognition.onsoundstart = function() {
	//console.log("[Recognition] Sound Detected")
	$('.dynamic-title').text('I hear something! Is it you?');
	$('.slide-subheader').text('Keep talking!')

}
recognition.onnomatch = function() {
	//console.log('Speech not recognised');
  }

//Quando não reconhece
recognition.onerror = function(e) {
	if (e.error == "no-speech" || e.error == "aborted") return;
	sessionStorage.error = e.error
	//console.log("[Recognition] Sound Detected")

}
//recognition.addEventListener("end", recognition.start)
recognition.onresult = function(e) {
	onResult(e)
}

function mouseDown() {
	document.getElementById("fireaudio").innerHTML = "Keep me pressed until you're finished";
	recognition.start();
}

function mouseUp() {
	document.getElementById("fireaudio").innerHTML = "Congrats! Wait for the reply now. Press me again to start speech caption.";
	recognition.stop();
}
document.getElementById("fireaudio").addEventListener("mousedown", mouseDown);
document.getElementById("fireaudio").addEventListener("mouseup", mouseUp);
//};
/*$('.page-navigation-item').on('click', function() {
  $('.page-navigation-item-number').removeClass(' active');
   $(this).find('.page-navigation-item-number').addClass(' active');
});
*/