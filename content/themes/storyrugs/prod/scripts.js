"use strict";function imageLoop(t,o){totalImages=$j(".image").length;o===totalImages&&(o=0),reset||($j(".image").removeClass("load"),$j(".image-"+o).addClass("load"),$j(".circle").removeClass("circle-active"),$j(".circle-"+o).addClass("circle-active"),o++,setTimeout(function(){imageLoop(t,o)},t))}function handleGalleryClick(t){reset=!0;var o=$j(t).attr("id"),a=o.split("-").pop();$j(".image").removeClass("load"),$j(".image-"+a).addClass("load"),$j(".circle").removeClass("circle-active"),$j(".circle-"+a).addClass("circle-active"),setTimeout(function(){reset=!1},5e3),setTimeout(function(){imageLoop(5e3,a)},7e3)}function getLazyElements(t){var o,a=[];return $j(t).each(function(t,e){o={};var l=e.className.split(" ");o.class=l[0],o.top=$j(e).offset().top,o.toggle=!1,$j(e).attr("id","lazyEl-"+t),a.push(o)}),a}function matchPosition(t,o){store[i]&&t>store[i].top&&(o(),i++)}function addMyClass(t,o){$j(t).addClass(o)}function widont(t){t=t||".widont",$j(t).each(function(){var t=$j(this).text(),o=t.split(" ");o.length>1&&(/^\s*$/.test(o[o.length-1])&&o.pop(),o[o.length-2]+="&nbsp"+o[o.length-1],o.pop(),$j(this).html(o.join(" ")))})}var $j=jQuery.noConflict(),windowTop=$j(window).scrollTop(),adjustment=.9375,lazyPadding=100,windowHeight=$j(window).height()+lazyPadding,footerTop=$j(".back-to-top").offset().top,i=0,store,currentEl,totalImages,reset=!1;$j(document).ready(function(){widont(),store=getLazyElements(".lazy"),setTimeout(function(){addMyClass(".lazy-logo","load")},500),setTimeout(function(){addMyClass(".lazy-cart","load")},1e3),setTimeout(function(){addMyClass(".lazy-footer","load")},1500),footerTop<windowHeight&&addMyClass(".back-to-top","hide"),store.length&&(windowTop>=windowHeight?(addMyClass(".lazy","load"),i=store.length-1):(addMyClass("#lazyEl-"+i,"load"),i++),$j(window).scroll(function(){var t=$j(window).scrollTop(),o=windowHeight*adjustment+t;store=getLazyElements(".lazy"),matchPosition(o,function(){addMyClass("#lazyEl-"+i,"load")})})),$j("body").hasClass("archive")&&addMyClass(".lazy-products","load"),$j("body").hasClass("single-product")&&(addMyClass(".lazy-bg","load"),setTimeout(function(){addMyClass(".lazy-images","load")},1500)),$j(".portfolio")&&imageLoop(5e3,0),$j(".circle").on("click",function(){handleGalleryClick(this)}),$j("#btt").on("click",function(){$j("html, body").animate({scrollTop:0},1e3)}),document.addEventListener("wpcf7mailsent",function(){$j("#purchase-form-overlay").addClass("overlay-toggle")})});