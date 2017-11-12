<!DOCTYPE html>
<head>
	<link href="mainpage3.css" rel="stylesheet" type="text/css" />
	<link href="slider3.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utp-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="responsiveslides.min.js"></script>

	<link href="nav_mainpage.css" rel="stylesheet" type="text/css" />
    <link href="flex_layout.css" rel="stylesheet" type="text/css" />
    <link href="fluid_layout.css" rel="stylesheet" type="text/css" />
    <link href="show_hidden.css" rel="stylesheet" type="text/css" />
	
	<script>
    $(function () {
    	$("#slider2").responsiveSlides({
        	auto: true,
        	pager: true,
        	speed: 300
      	});
    });

    //------------------------
    (function() {
    var hidden = "hidden";
 
    // Standards:
    if (hidden in document)
        document.addEventListener("visibilitychange", onchange);
    else if ((hidden = "mozHidden") in document)
        document.addEventListener("mozvisibilitychange", onchange);
    else if ((hidden = "webkitHidden") in document)
        document.addEventListener("webkitvisibilitychange", onchange);
    else if ((hidden = "msHidden") in document)
        document.addEventListener("msvisibilitychange", onchange);
    // IE 9 and lower:
    else if ('onfocusin' in document)
        document.onfocusin = document.onfocusout = onchange;
    // All others:
    else
        window.onpageshow = window.onpagehide 
            = window.onfocus = window.onblur = onchange;
 
    function onchange (evt) {
        var v = 'sg-tab-bust-visible', h = 'sg-tab-bust-hidden',
            evtMap = { 
                focus:v, focusin:v, pageshow:v, blur:h, focusout:h, pagehide:h 
            };
 
        evt = evt || window.event;
        if (evt.type in evtMap)
            document.body.className = evtMap[evt.type];
        else        
            document.body.className = this[hidden] ? "sg-tab-bust-hidden" : "sg-tab-bust-visible";
    }
	})();


 	</script>

	<title>CHAP</title>
</head>
<body>
	<header>
		<div class="wrap">
			<h1 class="hidden-xsm hidden-sm">
				<a href="mainpage3.php"><img src="chap.png"/></a>
			</h1>
			<div class="top">
				<ul class="rt hidden-xsm hidden-sm">
					<li><a class="rtlink" href="#">Log In</a></li>
				</ul>
			</div>
			<?php 
    		include("mpgnav_mainpage.php");
 			?>
		</div>
	</header>

	<section>
		<ul class="rslides" id="slider2">
		    <li><a><img src="html.jpg"/></a></li>
		    <li><a><img src="css.jpg"/></a></li>
		    <li><a><img src="js.png"/></a></li>
		    <li><a><img src="php.jpg"/></a></li>
		</ul> 

		<div class="wrap fluid-layout">
			<article style="height: 100%;padding-bottom: 70px;" class="fluid-item-xlg-6 fluid-item-lg-6 fluid-item-md-6 fluid-item-sm-12 fluid-item-xsm-12" id="head1">
				내용1fdfdfdfdfweffffefefefe
				fdfdfd
				fdfd
			</article>
			
			<article style="height: 100%;padding-bottom: 70px;" class="fluid-item-xlg-6 fluid-item-lg-6 fluid-item-md-6 fluid-item-sm-12 fluid-item-xsm-12" id="head2">
				내용2qewfefefefefefefefewfef
				ewqewq
			</article>
		</div>
	</section>

	<!--맨 위로 자동 스크롤 아이콘-->
	<div id=topAutoScroll>
		<img src="topAutoScroll.png">
	</div>
	<script>
			$("#topAutoScroll").click(function() {
				$('html, body').animate({scrollTop:0}, 'slow');
				return false;
			});
	</script>
</body>

</html>