<div class="mainholder" style="min-width: 70%">

	<!--themesia cache start-->		<!--themesia cache end 2024-06-06 07:32:47 0.63742-->
	<div id="content" style="margin-top: -60px">

	<br>
	<div class="wrapper">
	<div class="hotslid">
	<div class="bixbox hothome full">


		</div>
	</div>

	<div class="postbody" style="width: 100%">

			<div class="bixbox">


				</div>
		<div class="kln"><script type="text/javascript">

	if (document.cookie.indexOf("popupShown=true") == -1) {
		document.cookie = "popupShown=true; max-age=80";
		$(document).ready(function(){
	var a=0;
	$('body').click(function(){
	if(a==0){
	window.open ("//pear-fruit.com","popup","menubar=1,resizable=1,width=300,height=250");
	a++;
	}
	});
	});
	}
		</script></div><br><div class="bixbox">
			<div class="releases"><h2>Rilisan Terbaru</h2></div>
		<div class="listupd">
            @php
            $latestChapter = null;
        @endphp
        @foreach($komiks as $komik)
            @php
                $chapter = $komik->chapters->sortByDesc('tanggal_rilis')->first();
                if (!$latestChapter) {
                    $latestChapter = $chapter;
                }
            @endphp
			<div class="utao">
						<div class="uta">
							<div class="imgu">
								<a rel="445072" class="series" href="https://kiryuu.id/manga/the-end-of-the-world-is-just-a-game-to-me/" title="The End of the World is Just a Game to Me"><img src="{{ $komik->gambar }}" class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" title="The End of the World is Just a Game to Me" alt="The End of the World is Just a Game to Me" width="700" height="1000">																					</a>
							</div>
							<div class="luf">
								<a class="series" href="https://kiryuu.id/manga/the-end-of-the-world-is-just-a-game-to-me/" title="The End of the World is Just a Game to Me">
									<h4>The End of the World is Just a Game to Me</h4>
								</a>
								<ul class="Manhwa">@foreach($komik->chapters->take(3) as $chapter)<li><a href="https://kiryuu.id/the-end-of-the-world-is-just-a-game-to-me-chapter-30/">
                                    <div>• Ch. {{ $chapter->nomor_chapter }}</div>
                                </a><span>{{ $chapter->time_ago }}</span></li>@endforeach</ul></div>
						</div>

					</div>@endforeach			<div class="hpage">
													<a href="/list-comic" class="r" style="background-color: rgb(110, 79, 157)">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</div>
		</div>
		 </div>
					<div class="bixbox">


				</div>
				<div class="bixbox">


	</div>
	</div>

	</div>
	</div>
	<div id="footer">

	</div>
	<div id="live-search_sb" class="live-search_sb" style="position:absolute;display:none;width:350px;z-index:9999"><div class="live-search_sb_cont"><div class="live-search_sb_top"></div><div id="live-search_results" style="width:100%"><div id="live-search_val"></div><div id="live-search_more"></div></div><div class="live-search_sb_bottom"></div></div></div></div>


	<script src="./rilisan terbaru_files/swiper.min.js.download"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
		 centeredSlides: true,
		  autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		  },
		  loop: true,
		  pagination: {
			el: '.swiper-pagination',
			clickable: true,
		  },
		});
	</script>

	<a href="https://mango-fruit.com/">
	<script>ts_darkmode.listen();</script>

	<script>
	jQuery.event.special.touchstart = {
		setup: function( _, ns, handle ) {
			this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
		}
	};
	jQuery.event.special.touchmove = {
		setup: function( _, ns, handle ) {
			this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
		}
	};
	jQuery.event.special.wheel = {
		setup: function( _, ns, handle ){
			this.addEventListener("wheel", handle, { passive: true });
		}
	};
	jQuery.event.special.mousewheel = {
		setup: function( _, ns, handle ){
			this.addEventListener("mousewheel", handle, { passive: true });
		}
	};
	</script>
	<link rel="stylesheet" id="fontawesome-css" href="./rilisan terbaru_files/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="owl-carousel-css" href="./rilisan terbaru_files/owl.carousel.css" type="text/css" media="all">
	<script type="text/javascript" id="rocket-browser-checker-js-after">
	/* <![CDATA[ */
	"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
	/* ]]> */
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-extra">
	/* <![CDATA[ */
	var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/kiryuu.id","onHoverDelay":"100","rateThrottle":"3"};
	/* ]]> */
	</script>
	<script type="text/javascript" id="rocket-preload-links-js-after">
	/* <![CDATA[ */
	(function() {
	"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
	}());
	/* ]]> */
	</script>
	<script type="text/javascript" src="./rilisan terbaru_files/filter.js.download" id="filter-js"></script>
	<script type="text/javascript" src="./rilisan terbaru_files/search-V2.js.download" id="ts-search-js"></script>
	<script type="text/javascript" src="./rilisan terbaru_files/owl.carousel.min.js.download" id="owl-carousel-js"></script>
	<script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'88f20da9ac1b87d2',t:'MTcxNzYxMDMzNC4wNzcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script>

	</a><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;" src="./rilisan terbaru_files/saved_resource.html"></iframe><div class="icssWrapper icssExcluded">
		<div class="icssContainer icssExcluded">
			<div class="icssCodeContainer icssExcluded">

			</div>

		</div>


		</div>
