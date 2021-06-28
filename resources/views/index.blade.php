<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ансамбль России</title>
		<meta name="description" content="">
		<meta name="qform-verification" content="63673NND55GE">
		<meta name="viewport" content="width=700, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre|Roboto" rel="stylesheet">
{{--		<link href=" {{ asset('css/normalize.css') }} ./resources/css/normalize.css" rel="stylesheet" type="text/css" />--}}
        <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css" />
{{--        <link href="./resources/css/style.css" rel="stylesheet" type="text/css" />--}}
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
{{--		<link rel="stylesheet" href="./resources/css/hystmodal.min.css">--}}
        <link rel="stylesheet" href="{{asset('css/hystmodal.min.css')}}">
{{--		<script src="./resources/js/hystmodal.min.js"></script>--}}
        <script src="{{asset('js/hystmodal.min.js')}}"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script type="text/javascript"> (function() { function init() {var scr = document.createElement('script'); scr.type = 'text/javascript'; scr.defer = 'defer'; scr.src = '//cdn.qform24.com/forms.js?v=' + parseInt(new Date().getTime()/1000); var scrInsert = document.getElementsByTagName('script')[0]; scrInsert.parentNode.insertBefore(scr, scrInsert); } var d = document; var w = window; if (d.readyState == 'complete') {init(); } else {if (w.attachEvent) {w.attachEvent('onload', init); } else {w.addEventListener('load', init, false); } } })(); </script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<link rel="stylesheet" href="{{asset('css/APlayer.min.css')}}">
		<style type="text/css">
			.aplayer {
				margin: 0;
			}
		</style>
	</head>

	<body>
		<!--div class="hystmodal" id="myModal" aria-hidden="true">
			<div class="hystmodal__wrap">
				<div class="hystmodal__window" role="dialog" aria-modal="true">
					<button data-hystclose class="hystmodal__close">Закрыть</button>
					<div style="padding: 20px; padding-bottom: 0;">
						<h3>Анкета участника</h3>
					</div>
					<div id="TB7AsHKQ" data-formid="zK1611960379Kei" class="_Forms_generate"></div>
				</div>
			</div>
		</div-->
		<div class="hystmodal" id="myVideo" aria-hidden="true">
			<div class="hystmodal__wrap">
				<iframe src="https://player.vimeo.com/video/510748068" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="hystmodal" id="myPlavno" aria-hidden="true">
			<div class="hystmodal__wrap">
				<iframe src="https://player.vimeo.com/video/511091486" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="hystmodal" id="myUch" aria-hidden="true">
			<div class="hystmodal__wrap">
				<div class="hystmodal__window" role="dialog" aria-modal="true">
					<button data-hystclose class="hystmodal__close">Закрыть</button>
					<div style="padding: 20px; padding-bottom: 40px;" >
						<h3>Учебные пьесы (2019)</h3>
						<div id="aplayer"></div>
						<p>
							Наша работа по переложению произведений Георгия Свиридова, Валерия Гаврилина, Карла Орфа для камерного ансамбля. Альбом из записей с репетиций. Участвовали Валерия Михненко (домра), Ольга Кавкова (фортепиано), Елизавета Кисель (альт), Максим Кондратьев (ударные), Михаил Данилов (гитара)
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="hystmodal" id="myPesn" aria-hidden="true">
			<div class="hystmodal__wrap">
				<div class="hystmodal__window" role="dialog" aria-modal="true">
					<button data-hystclose class="hystmodal__close">Закрыть</button>
					<div style="padding: 20px; padding-bottom: 40px;" >
						<h3>Песни года (2020)</h3>
						<div id="aplayer_pesn" s></div>
						<p>
							Сборник песен о временах года, природе, погоде. <br> Авторы: М. Данилов (гитара), Л.Кисель (альт), С. Бояринцев (бас-гитара).
						</p>
					</div>
				</div>
			</div>
		</div>

		<script src="./js/APlayer.min.js"></script>
		<script>
			const ap2 = new APlayer({
				container: document.getElementById('aplayer_pesn'),
				audio: [
					{
						name: 'Весна',
						url: 'mp3/pesn/02.mp3',
						artist: '4:15',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Люпины',
						url: 'mp3/pesn/01.mp3',
						artist: '3:05',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Зима',
						url: 'mp3/pesn/04.mp3',
						artist: '3:10',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Цветы',
						url: 'mp3/pesn/05.mp3',
						artist: '4:32',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Птицы',
						url: 'mp3/pesn/03.mp3',
						artist: '2:04',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Лето',
						url: 'mp3/pesn/07.mp3',
						artist: '2:44',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Слово',
						url: 'mp3/pesn/09.mp3',
						artist: '4:22',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Волчок',
						url: 'mp3/pesn/08.mp3',
						artist: '3:29',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Ночь',
						url: 'mp3/pesn/06.mp3',
						artist: '4:45',
						cover: 'albom/cover.jpg'
					},
					{
						name: 'Дом',
						url: 'mp3/pesn/10.mp3',
						artist: '4:13',
						cover: 'albom/cover.jpg'
					}
				]
			});

			const ap = new APlayer({
				container: document.getElementById('aplayer'),
				audio: [
					{
						name: 'Молотьба',
						url: 'mp3/uch/1.mp3',
						artist: '2:40',
						cover: 'mp3/uch/ucm.jpg'
					},
					{
						name: 'Изгнанник',
						url: 'mp3/uch/2.mp3',
						artist: '2:23',
						cover: 'mp3/uch/ucm.jpg'
					},
					{
						name: 'Заклинание весны',
						url: 'mp3/uch/3.mp3',
						artist: '2:04',
						cover: 'mp3/uch/ucm.jpg'
					},
					{
						name: 'Край ты мой',
						url: 'mp3/uch/4.mp3',
						artist: '3:08',
						cover: 'mp3/uch/ucm.jpg'
					},
					{
						name: 'Слеза',
						url: 'mp3/uch/5.mp3',
						artist: '1:32',
						cover: 'mp3/uch/ucm.jpg'
					},
					{
						name: 'На природе',
						url: 'mp3/uch/6.mp3',
						artist: '2:58',
						cover: 'mp3/uch/ucm.jpg'
					}
				]
			});

		</script>

		<!--nav class="toc">
			<ul>
				<li><a href="#intro">О нас</a></li>
				<!--li>
					<a href="#part">Участие</a>
					<ul>
						<li><a href="#info">Правила</a></li>
						<li><a href="#place">Место</a></li>
						<li><a href="#time">Время</a></li>
					</ul>
				</li>
				<li>
					<a href="#archive">Архив</a>
					<ul>
						<li><a href="#music">Записи</a></li>
						<li><a href="#scores">Ноты</a></li>
						<li><a href="#video">Видео</a></li>
						<li><a href="#photo">Фото</a></li>
					</ul>
				</li>
			</ul>
			<svg class="toc-marker" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
				<path stroke="#444" stroke-width="3" fill="transparent" stroke-dasharray="0, 0, 0, 1000" stroke-linecap="round" stroke-linejoin="round" transform="translate(-0.5, -0.5)" />
			</svg>
		</nav-->

		<article class="contents">
			<section id="intro">
				<p>
					Кружок музыкантов, соавторов и исполнителей музыки.
				</p>
			</section>

			<!--section>

				<div id="part">
					<h2>Участие</h2>
					<p>
						Мы приглашаем к участию как любителей, так и профессионалов, заинтересованных в ансамблевой игре.
					</p>
				</div>
				<div id="info">
					<h3>Правила</h3>
					<p>
						Мы придумываем свою музыку и разбираем существующие произведения, адаптируя их для нашего состава, импровизируем и эксперементируем со способами взаимодействия при сочинении и игре, учитывая интересы и способности всех участвующих.
					</p>
				</div>

				<div id="place">
					<h3>Место</h3>
					<p>
						Репетиции проходят в центре Санкт-Петербурга.
					</p>
				</div>

				<div id="time">
					<h3>Время</h3>
					<p>
						Мы собираемся каждую неделю по выходным.
					</p>
				</div>
			</section-->

			<section>
				<!--div id="archive">
					<h2>Архив</h2>
				</div-->

				<div id="music">
					<h3>Записи</h3>
					<p><a href="#" data-hystuch="#myPesn">Песни года (2020)</a></p>
					<p><a href="#" data-hystuch="#myUch">Учебные пьесы (2019)</a></p>
				</div>

				<div id="scores">
					<h3>Ноты</h3>
					<!--p> <a href="./score/Праздники.pdf">Праздники (2020)</a></p-->
					<p> <a href="./score/Плавно.pdf">Плавно (2019)</a></p>
					<p><a href="./score/Букетик.pdf">Букетик (2018)</a></p>
				</div>

				<div id="video">
					<h3>Видео</h3>
					<p>
						<div class="video">
							<a href="#" data-hystplavno="#myPlavno" >Плавно в Комете</a>
						</div>
					</p>
					<p>
						<div class="video">
							<a href="#" data-hystvideo="#myVideo" >Букетик в Гнесинке</a>
						</div>
					</p>
				</div>

				<!--div id="photo" style="max-width: 600px; font-size: 14px;">
					<h3>Фото</h3>
					<p>Репетиция "Песен года"</p>
					<p>
						<a data-fancybox="gallery1" href="img/dr/p1.jpg"><img src="img/dr/smallp1.jpg"></a>
						<a data-fancybox="gallery1" href="img/dr/p3.jpg"><img src="img/dr/smallp3.jpg"></a>
						<a data-fancybox="gallery1" href="img/dr/p5.jpg"><img src="img/dr/smallp5.jpg"></a>
						<a data-fancybox="gallery1" href="img/dr/p7.jpg"><img src="img/dr/smallp7.jpg"></a>
						<a data-fancybox="gallery1" href="img/dr/p8.jpg"><img src="img/dr/smallp8.jpg"></a>
					</p>
					<p>Первое выступление</p>
					<p>
						<a data-fancybox="gallery2" href="img/1.JPG"><img src="img/small1.JPG"></a>
						<a data-fancybox="gallery2" href="img/2.JPG"><img src="img/small2.JPG"></a>
						<a data-fancybox="gallery2" href="img/3.JPG"><img src="img/small3.JPG"></a>
						<a data-fancybox="gallery2" href="img/4.JPG"><img src="img/small4.JPG"></a>
						<a data-fancybox="gallery2" href="img/5.JPG"><img src="img/small5.JPG"></a>
					</p>
				</div-->
			</section>
		</article>
		<script src="./js/script.js"></script>

		<!--div class="credits">
			<a href="#" data-hystmodal="#myModal" >Участвовать</a>
		</div-->

		<style type="text/css" media="screen">
			section a {
				font-size: 0.9em;
				line-height: 1;
			}
			textarea {
				width: 100%;
			}
			.agree-box label {
				font-weight: 500;
			}
			.design__forms_0 input[type="submit"] {
				margin-top: 30px;
				background: #55aa6e;
				color: #f9f9f9;
				display: block;
				margin-left: auto;
				margin-right: auto;
			}

			.design__forms_0 input[type="submit"]:hover {
				background: #73b386;
			}
			.success {
				padding: 20px;
				margin-bottom: 30px;
			}
			.credits {
				position: fixed;
				left: 3em;
				bottom: 4em;
				font-size: 1em;
				z-index: 20;
				color: #444;
				vertical-align: middle;
			}

			.credits * + * {
				margin-top: 15px;
			}

			.credits a {
				display: block;
				padding: 8px 10px;
				color: #777;
				border: 2px solid #bbb;
				background: #fff;
				text-decoration: none;
			}

			.credits a:hover {
				border-color: #555;
				color: #222;
			}

			@media screen and (max-height: 700px) {
				.credits {
					display: none;
				}
			}
		</style>

		<script>
			var _gaq = [['_setAccount', 'UA-15240703-1'], ['_trackPageview']];
			(function(d, t) {
			var g = d.createElement(t),
			    s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s);
			})(document, 'script');

			const myModal = new HystModal({
				linkAttributeName: "data-hystmodal",
				//settings (optional). see API
			});

			const myVideo = new HystModal({
				linkAttributeName: "data-hystvideo",
				afterClose: function(modal){
					$('#myVideo').html(`<div class="hystmodal__wrap">
						<iframe id="if-1" src="https://player.vimeo.com/video/510748068" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>`);
				}
			});

			const myPlavno = new HystModal({
				linkAttributeName: "data-hystplavno",
				afterClose: function(modal){
					$('#myPlavno').html(`<div class="hystmodal__wrap">
						<iframe src="https://player.vimeo.com/video/511091486" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>`);
				}
			});



			const myUch = new HystModal({
				linkAttributeName: "data-hystuch",
				afterClose: function(modal){
					ap.pause();
				}
			});

			const myPesn = new HystModal({
				linkAttributeName: "data-hystuch",
				afterClose: function(modal){
					ap2.pause();
				}
			});
		</script>

	</body>
</html>
