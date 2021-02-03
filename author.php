<?php
    include("pdo2.php")
?>
<?php 
			 session_start();  ?>
			 <?php 
if(isset($_SESSION["username"])){
  echo "<input type='hidden' value='true' id='session'></input>";
}?>
<!-- Html -->

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html class="js no-touch" lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.allimages{
	width: 140px;
	height: 210px;
}

</style>
<title>iferu</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="INDEX,FOLLOW">
<meta property="fb:app_id" content="143891362343386">
<link rel="shortcut icon" href="https://www.iferu.com/favicon.ico" type="image/x-icon">
<link rel="search" href="https://www.iferu.com/opensearch.xml" type="application/opensearchdescription+xml" title="iferu">

<script async="" src="./include/insight.old.min.js"></script><script type="text/javascript" async="" src="./include/insight.min.js"></script><script type="text/javascript" src="./include/996526df3c"></script><script type="text/javascript" src="./include/pd.js"></script><script src="./include/nr-1184.min.js"></script><script src="./include/4918719.js" type="text/javascript" id="cookieBanner-4918719" data-cookieconsent="ignore" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./include/4918719(1).js" type="text/javascript" id="hs-analytics"></script><script src="./include/fb.js" type="text/javascript" id="hs-ads-pixel-4918719" data-ads-portal-id="4918719" data-ads-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./include/feedbackweb-new.js" type="text/javascript" id="hs-feedback-web-4918719" crossorigin="anonymous" data-hubspot-feedback-portal-id="4918719" data-hubspot-feedback-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./include/leadflows.js" type="text/javascript" id="LeadFlows-4918719" crossorigin="anonymous" data-leadin-portal-id="4918719" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script async="" src="./include/insight.old.min.js"></script><script async="" src="./include/clearbit.min.js"></script><script async="" src="./include/uwt.js"></script><script src="./include/832786183443261" async=""></script><script async="" src="./include/fbevents.js"></script><script async="" src="./include/tfa.js" id="tb_tfa_script"></script><script async="" src="./include/obtp.js" type="text/javascript"></script><script type="text/javascript" async="" src="./include/bat.js"></script><script type="text/javascript" async="" src="./include/insight.min.js"></script><script type="text/javascript" async="" src="./include/analytics.js"></script><script type="text/javascript" async="" src="./include/dc.js"></script><script async="" src="./include/gtm.js"></script><script type="text/javascript" async="async" src="./include/hyphenator-cb-fmbee94oz09s2pewy8xizejmnv3pnx3.js"></script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"996526df3c",applicationID:"3375187"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?f(e,c,o):o()}function n(n,r,i,o){if(!p.aborted||o){e&&e(n,r,i);for(var a=t(i),c=v(n),f=c.length,u=0;u<f;u++)c[u].apply(a,r);var d=s[w[n]];return d&&d.push([b,n,r,a]),a}}function l(e,t){h[e]=v(e).concat(t)}function m(e,t){var n=h[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return h[e]||[]}function g(e){return d[e]=d[e]||i(n)}function y(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var h={},w={},b={on:l,addEventListener:l,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:y,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var c="nr@context",f=e("gos"),u=e(6),s={},d={},p=t.exports=i();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1184.min.js"},w=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:w,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0},{}],"wrap-function":[function(e,t,n){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(7),a="nr@original",c=Object.prototype.hasOwnProperty,f=!1;t.exports=function(e,t){function n(e,t,n,i){function nrWrapper(){var r,a,c,f;try{a=this,r=o(arguments),c="function"==typeof n?n(r,a):n||{}}catch(u){p([u,"",[r,a,i],c])}s(t+"start",[r,a,i],c);try{return f=e.apply(a,r)}catch(d){throw s(t+"err",[r,a,d],c),d}finally{s(t+"end",[r,a,f],c)}}return r(e)?e:(t||(t=""),nrWrapper[a]=e,d(e,nrWrapper),nrWrapper)}function u(e,t,i,o){i||(i="");var a,c,f,u="-"===i.charAt(0);for(f=0;f<t.length;f++)c=t[f],a=e[c],r(a)||(e[c]=n(a,u?c+i:i,o,c))}function s(n,r,i){if(!f||t){var o=f;f=!0;try{e.emit(n,r,i,t)}catch(a){p([a,n,r,i])}f=o}}function d(e,t){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(e);return n.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(r){p([r])}for(var i in e)c.call(e,i)&&(t[i]=e[i]);return t}function p(t){try{e.emit("internal-error",t)}catch(n){}}return e||(e=i),n.inPlace=u,n.flag=a,n}},{}]},{},["loader"]);</script>
	<link rel="stylesheet" type="text/css" href="./include/jquery-ui-1.12.1.min-cb-fyyzrx92fbilucbwhqke3jqbggxtiyc.css">
  <link rel="stylesheet" type="text/css" href="./include/styles-cb-jsfynwbbuw3w7v3sz8277ce5y5pqc5k.css">
<link rel="stylesheet" type="text/css" href="./include/bootstrap-cb-1eib2am82vfhch339lo2u8dfgdjhrhj.css">

	<link rel="stylesheet" type="text/css" href="./include/styles-cb-iqma9l701pxtslhum2d8kdmuca2wpz.css">


<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js'); if('ontouchstart' in document){H.className=H.className.replace('no-touch', '');}})(document.documentElement)</script>
	<script>
	window.VWO = window.VWO || [];
	window.VWO.push(['tag', 'Login', 'true', 'session']); 
	_vis_opt_check_segment = {'95': true };
	window.nopromo = 'true'; /* Used for VWO segmentation (price testing) */
	window.anonymous = 'true'; /* Used for VWO segmentation */
	</script>
	<script>
	var _vwo_code=(function(){
	var account_id=5083,
	settings_tolerance=2000,
	library_tolerance=2500,
	use_existing_jquery=false,
	// DO NOT EDIT BELOW THIS LINE
	f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
	</script><script src="./include/j.php" type="text/javascript"></script>


<!--[if IE ]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/document-register-element/1.4.1/document-register-element.js"></script>
<![endif]-->

<script src="./include/f.txt"></script><script src="./include/f(1).txt"></script><script src="./include/va-ffd39e015e5d25ce3182fc10ac34feab.js" crossorigin="anonymous" type="text/javascript"></script><script src="./include/track-ffd39e015e5d25ce3182fc10ac34feab.js" crossorigin="anonymous" type="text/javascript"></script><script src="./include/opa-e3db69dc6d0af05a6f9f8b749ec76384.js" crossorigin="anonymous" type="text/javascript"></script><style type="text/css">
  #hs-feedback-ui {
    animation-duration: 0.4s;
    animation-timing-function: ease-out;
    display: none;
    height: 0;
    overflow: hidden;
    position: fixed;
    z-index: 2147483647;
    max-width: 100%;
  }

  .hubspot.space-sword #hs-feedback-ui {
    z-index: 1070;
  }

  #hs-feedback-ui.hs-feedback-shown {
    display: block;
  }

  #hs-feedback-fetcher {
    position: fixed;
    left: 1000%;
  }

  
  @keyframes feedback-slide-in-hs-feedback-left {
    from {transform: translate(0, 100%);}
    to {transform: translate(0, 0);}
  }

  @keyframes feedback-slide-out-hs-feedback-left {
    from {transform: translate(0, 0);}
    to {transform: translate(0, 100%);}
  }

  #hs-feedback-ui.hs-feedback-left {
    animation-name: feedback-slide-in-hs-feedback-left;
  }

  #hs-feedback-ui.hs-feedback-left.hs-feedback-slid-out {
    animation-name: feedback-slide-out-hs-feedback-left;
    animation-fill-mode: forwards;
  }

  
  @keyframes feedback-slide-in-hs-feedback-right {
    from {transform: translate(0, 100%);}
    to {transform: translate(0, 0);}
  }

  @keyframes feedback-slide-out-hs-feedback-right {
    from {transform: translate(0, 0);}
    to {transform: translate(0, 100%);}
  }

  #hs-feedback-ui.hs-feedback-right {
    animation-name: feedback-slide-in-hs-feedback-right;
  }

  #hs-feedback-ui.hs-feedback-right.hs-feedback-slid-out {
    animation-name: feedback-slide-out-hs-feedback-right;
    animation-fill-mode: forwards;
  }

  
  @keyframes feedback-slide-in-hs-feedback-top {
    from {transform: translate(0, -100%);}
    to {transform: translate(0, 0);}
  }

  @keyframes feedback-slide-out-hs-feedback-top {
    from {transform: translate(0, 0);}
    to {transform: translate(0, -100%);}
  }

  #hs-feedback-ui.hs-feedback-top {
    animation-name: feedback-slide-in-hs-feedback-top;
  }

  #hs-feedback-ui.hs-feedback-top.hs-feedback-slid-out {
    animation-name: feedback-slide-out-hs-feedback-top;
    animation-fill-mode: forwards;
  }


  #hs-feedback-ui > iframe {
    width: 100%;
    height: 100%;
  }

  #hs-feedback-ui:not(.hs-feedback-top) {
    bottom: 0;
  }

  #hs-feedback-ui.hs-feedback-left {
    left: 0;
  }

  #hs-feedback-ui.hs-feedback-right {
    right: 0;
  }

  .zorse #hs-feedback-ui:not(.hs-feedback-top) {
    bottom: 6px;
  }

  .zorse #hs-feedback-ui.hs-feedback-right {
    right: 0;
  }

  #hs-feedback-ui.hs-feedback-top {
    left: 0;
    top: 0;
    width: 100%;
  }

  #hs-feedback-ui.hs-feedback-nps:not(.hs-feedback-top) {
    width: 480px;
  }

  #hs-feedback-ui.hs-feedback-csat:not(.hs-feedback-top) {
    width: 350px;
  }

  #hs-feedback-ui.hs-feedback-csat.hs-feedback-extended-width:not(.hs-feedback-top) {
    width: 550px;
  }

  @media only screen and (min-width: 544px) {
    #hs-feedback-ui.hs-feedback-csat:not(.hs-feedback-top):not(.hs-feedback-expanded) {
      width: 450px;
    }
  }

  #hs-feedback-ui.hs-feedback-csat.hs-feedback-extended-width:not(.hs-feedback-top) {
    width: 550px !important;
  }

  #hs-feedback-ui.preview.hs-feedback-csat.hs-feedback-callout:not(.hs-feedback-expanded):not(.hs-feedback-top) {
    width: 450px !important;
  }

  @media only screen and (max-width: 768px) {
    #hs-feedback-ui:not(.preview):not(.hs-feedback-callout):not(.hs-feedback-top),
    #hs-feedback-ui.hs-feedback-expanded:not(.preview):not(.hs-feedback-top) {
      width: 100% !important;
    }
  }

  @media only screen and (max-width: 600px) {
    #hs-feedback-ui.preview:not(.hs-feedback-top),
    #hs-feedback-ui.hs-feedback-expanded.preview:not(.hs-feedback-top) {
      width: 100% !important;
    }
  }

  #hs-feedback-ui.hs-feedback-shown ~ #tally-widget-container,
  #hs-feedback-ui.hs-feedback-shown ~ #wootric-modal {
    display: none !important;
  }

  /* hide all popups in the same position as us */
  @media only screen and (min-width: 544px) {
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown ~ #hubspot-messages-iframe-container,
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown ~ .leadinModal-theme-bottom-right-corner,
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown  ~ .leadinModal-theme-bottom-left-corner,
    #hs-feedback-ui.hs-feedback-top.hs-feedback-shown   ~ .leadinModal-theme-top {
      display: none !important;
    }
  }

  /* hide leadflows when we're tablet-stretched across from them */
  @media only screen and (min-width: 544px) and (max-width: 970px) {
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown  ~ .leadinModal-theme-bottom-right-corner,
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown ~ .leadinModal-theme-bottom-left-corner {
      display: none !important;
    }
  }

  /* hide messages when we're tablet-stretched across from them */
  @media only screen and (max-width: 966px) {
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown ~ #hubspot-messages-iframe-container {
      display: none !important;
    }
  }

  @media only screen and (max-width: 544px) {

    /* repeat above rules for small screens when we're set to display on mobile */
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown:not(.hs-feedback-no-mobile) ~ #hubspot-messages-iframe-container,
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown:not(.hs-feedback-no-mobile)  ~ #hubspot-messages-iframe-container,
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown:not(.hs-feedback-no-mobile) ~ .leadinModal-theme-bottom-right-corner,
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown:not(.hs-feedback-no-mobile)  ~ .leadinModal-theme-bottom-left-corner,
    #hs-feedback-ui.hs-feedback-top.hs-feedback-shown:not(.hs-feedback-no-mobile)   ~ .leadinModal-theme-top,
    #hs-feedback-ui.hs-feedback-left.hs-feedback-shown:not(.hs-feedback-no-mobile)  ~ .leadinModal-theme-bottom-right-corner,
    #hs-feedback-ui.hs-feedback-right.hs-feedback-shown:not(.hs-feedback-no-mobile) ~ .leadinModal-theme-bottom-left-corner {
      display: none !important;
    }

    /* don't display us on small screens if we're set to not display on mobile */
    #hs-feedback-ui.hs-feedback-no-mobile {
      display: none;
    }
  }
</style><script type="text/javascript" src="./include/analytics"></script></head>
<body class=""><div id="hs-feedback-fetcher"><iframe frameborder="0" src="./include/feedback-web-fetcher.html"></iframe></div>

		<script>
			dataLayer = [{
				"PageView": "\x2Ffr\x2Fincludes\x2F4262"
				
			}];
		</script>
		
	<div class="sr-only"><a href="https://www.iferu.com/fr/includes/4262#main-content" tabindex="-1">Ignorer la navigation</a></div>
	
  <?php 
 include ("./header.php")
 
?>


    
    <!-- le traitement -->

    <?php 

        if(isset($_GET['query']) && !empty($_GET['query'])){
            $query1 =  strip_tags($_GET['query']);
            $query2=$query1;
        }else{
            $query1='Robert Greene';
            $query2='%'.$query1.'%';
        }


        // Pagination debut
        // On détermine sur quelle page on se trouve
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }
        
        $titreaut="select * from Auteur  where id LIKE '$query2'";
        $nom = $pdo->query($titreaut);
        // On détermine le nombre total d'articles
        $sql ="select Distinct count(*) as number from Auteur A, Document D, Doc_Aut S where A.id=S.idAut and D.id=S.idDoc and A.id LIKE '$query2'";

        $res = $pdo->query($sql);
        // On exécute
        
        foreach($res as $l){
            $nbArticles=$l['number'];
        }
        // On détermine le nombre d'articles par page
        $parPage = 10;

        // On calcule le nombre de pages total
        $pages = ceil($nbArticles / $parPage);
        // $pages=15;
        // Calcul du 1er article de la page
        $premier = ($currentPage * $parPage) - $parPage;

        // Pagination fin
            $chercher="select A.id, D.titre, D.description,D.bestseller, D.hasaudio, D.image, D.qualites , D.idRating, D.date, A.nom, D.id  from Auteur A, Document D, Doc_Aut S where A.id=S.idAut and D.id=S.idDoc and A.id LIKE '$query2' limit $premier,$parPage";
                $resl = $pdo->query($chercher);
    
          
         
        
       
    
    ?>
     <div class="" id="main-content" role="main">
  <!-- TART MAIN_BODY -->

    <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <h1>
            
              <?php
              foreach($nom as $nomm){
                echo $nomm['nom'];
            }
          /*  echo "<h2 class='title'>Chaine <span class='title_chaine'>".$nom['nom']."</span></h2>";*/
       
                
              ?>
            </h1>
          </div>
        </div>
      </div>
    </div>

<!-- Les livres pour un auteur -->

<div class="primary container">
	<div class="clearfix">
			<div class="pull-left" style="position: relative; top: -15px;">
					<a href="https://www.iferu.com/fr/authors/4262?sorting=onlineDate" class="btn btn-sm btn-list-type active disabled">
						Date du résumé
					</a>
				
					<a href="https://www.iferu.com/fr/authors/4262?sorting=bestselling" class="btn btn-sm btn-list-type">
						Les titres les plus téléchargés
					</a>
				
					<a href="https://www.iferu.com/fr/authors/4262?sorting=publishDate" class="btn btn-sm btn-list-type">
						Date de publication
					</a>
				
					<a href="https://www.iferu.com/fr/authors/4262?sorting=rating" class="btn btn-sm btn-list-type">
						Classement
					</a>
				
					<a href="https://www.iferu.com/fr/authors/4262?sorting=title" class="btn btn-sm btn-list-type">
						Titre
					</a>
			</div>
	</div>

    <div class="row">
            
        <div>
        <?php foreach($resl as $l){ ?>
         
            <div class="col-sm-6">
                
                <div class="ga-summary-grid gsg-xl clearfix" itemscope="" itemtype="http://schema.org/Book">
        
                    <div class="gsg-cover">
                        <a href="http://www.iferu.com/book.php?id=<?=$l['id']?>">		
                            <img src='http://www.iferu.com/summary-img/<?=$l['id']?>.jpg' data-src="/summary-img/<?=$l['id']?>.jpg?s=S&amp;d=standard" alt="Get shit done"  class="allimages"/>
                        </a>
                    </div>
        
                    <div class="gsg-biblio hyphenate">
                        <div class="gsg-row">
                            <div class="gsg-top">
                                <div class="gsg-source">
                                    <small>Livre</small>
                                </div>
                                <div class="gsg-main gsg-main-large">
                                    <a href="http://www.iferu.com/book.php?id=<?=$l['id']?>" itemprop="url" data-shave="" style="">
                                        <?= $l['titre'] ?>
                                    </a>	
                                </div>
                                <div class="gsg-source">
                                    <p> <?= $l['description'] ?></p>
                                </div>
                            </div>
                        </div>
                
                        <div class="gsg-row">
                            <div class="gsg-bottom">
                                
                                <div class="gsg-detail">
                                    <p data-shave="" style=""><?= $l['nom'] ?></p>
                                    <p data-shave="" style="">
                                        <?php
                                             $datepub=$l['date'];
                                             $date = date_create($datepub);
                                            echo date_format($date, 'Y');
                                          ?> 
                                    </p>
                                    <?php if($l['hasaudio']=='true'){
											echo"<span title='Version audio disponible' data-icon=''></span>";
										}
										if($l['bestseller']=='yes'){
											echo"<span title='Best-Seller'  data-icon=''></span>";
                    }
                    ?>
                                </div>
                                <div class="gsg-icons">
                                   
                                    
                                    <span class="gsg-rating" title="Classement"><i class="ico-star-empty"></i> <span class="gsg-rating-number">

                                    <?php
                                          $idR=$l['idRating'];
                                          $idrating="select Distinct  number from Rating  where id=$idR";
                                          $resl = $pdo->query($idrating);
                                          foreach($resl as $nmbre){
                                              echo $nmbre['number'];
                                          }
                                    ?>
                                  
                                    </span></span>
                                </div>
                            </div>
                        </div>		
                    </div>
                    
                    <div class="gsg-options">
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>




    


	






    
    

    <!-- pagination -->
	<nav>
        <ul class="pagination">
            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                    <a href="./author.php?page=<?= $currentPage - 1 ?>&query=<?=$query2?>" class="page-link">Précédente</a>
                </li>
				<?php $newpages = ($pages > 19) ? 18: $pages; ?>
                <?php for($page =  $currentPage; $page <= $count=($newpages +$currentPage)> $pages?$pages:($newpages +$currentPage)  ; $page++): ?>
                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                    <a href="./author.php?page=<?= $page ?>&query=<?=$query2?>" class="page-link"><?= $page ?></a>
                </li>
                <?php endfor ?>
                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                    <a href="./author.php?page=<?= $suivant= ($currentPage < $pages) ? $currentPage + 1 : $currentPage ?>&query=<?=$query2?>" class="page-link">Suivante</a>
                </li>
            </ul>
    </nav>

</div>


	















<!-- footer -->



<footer class="footer">
	<div class="container">

		
		
		<hr class="bold footer__divider">
		<div class="footer__menu">
			<a href="https://www.iferu.com/" class="footer__logo footer__anchor">
				<img src="./include/ga-logo-round.svg" alt="iferu footer icon" height="102" width="102">
			</a>

			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/includes/4262#footer__menu-list-1" aria-expanded="false" aria-controls="footer__menu-list-1">
					<h5 class="footer__menu-title">Entreprise<i class="ico-arrow-down footer__icon" aria-hidden="true"></i></h5>
				</a>
				<ul id="footer__menu-list-1" class="footer__menu-list collapse" data-parent=".footer__menu">
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/about-us" class="footer__anchor">À propos de nous</a></li>
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/next-gen-leaders" class="footer__anchor">#NextGenLeaders</a></li>
					
							<li class="footer__list-item"><a href="https://journal.iferu.com/en/iferu-international-book-award-2020/" target="_blank" class="footer__anchor" rel="noopener noreferrer">Livres primés</a></li>
						
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/pages/jsp/Careers.jsp" class="footer__anchor">Carrières</a></li>
					
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/how-it-works/faqs" class="footer__anchor">FAQ</a></li>
					<li class="footer__list-item"><a href="https://www.iferu.com/Support.do" class="footer__anchor">Nous contacter</a></li>
				</ul>
			</div>
			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/includes/4262#footer__menu-list-2" aria-expanded="false" aria-controls="footer__menu-list-2">
					<h5 class="footer__menu-title">Ressources<i class="ico-arrow-down footer__icon" aria-hidden="true"></i></h5>
				</a>
				<ul id="footer__menu-list-2" class="footer__menu-list collapse" data-parent=".footer__menu">
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/how-it-works/overview" class="footer__anchor">Comment ça marche ?</a></li>
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/summary-suggestions" class="footer__anchor">Suggestions de résumés</a></li>
					
					
					
					
						<li class="footer__list-item"><a href="https://journal.iferu.com/en/start" target="_blank" class="footer__anchor">Journal</a></li>
					
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/enterprise/casestudies" class="footer__anchor">Success stories de nos clients</a></li>
					
				</ul>
			</div>
			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/includes/4262#footer__menu-list-3" aria-expanded="false" aria-controls="footer__menu-list-3">
					<h5 class="footer__menu-title">Partenaires<i class="ico-arrow-down footer__icon" aria-hidden="true"></i></h5>
				</a>
				<ul id="footer__menu-list-3" class="footer__menu-list collapse" data-parent=".footer__menu">
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/publishers" class="footer__anchor">Éditeurs</a></li>
					
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/media-relations" class="footer__anchor">Relations presse</a></li>
					
					
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/alliance-partners" class="footer__anchor">Partenaires</a></li>
				</ul>
			</div>
			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/includes/4262#footer__menu-list-4" aria-expanded="false" aria-controls="footer__menu-list-4">
					<h5 class="footer__menu-title">Produit<i class="ico-arrow-down footer__icon" aria-hidden="true"></i></h5>
				</a>
				<ul id="footer__menu-list-4" class="footer__menu-list collapse" data-parent=".footer__menu">
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/trial" class="footer__anchor">Essai gratuit</a></li>
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/subscribe/products" class="footer__anchor">Abonnements personnels</a></li>
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/studentpass" class="footer__anchor">Abonnements étudiants</a></li>
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/subscribe/gifts" class="footer__anchor">Abonnements cadeaux</a></li>
					
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/enterprise/solutions" class="footer__anchor">Solutions pour entreprises</a></li>
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/custom-summaries" target="_blank" class="footer__anchor">Service personnalisé de résumés</a></li>
					
				</ul>
			</div>
		</div>
		

		<hr class="dark footer__divider">

		<div class="footer__legal">

			
			<div class="footer__language">
				
				<h5 class="sr-only">Langue</h5>
				<ul class="footer__language-list">
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/en/" class="footer__anchor">English</a>
						</li>
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/de/" class="footer__anchor">Deutsch</a>
						</li>
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/es/" class="footer__anchor">Español</a>
						</li>
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/ru/" class="footer__anchor">Русский</a>
						</li>
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/zh/" class="footer__anchor">中文</a>
						</li>
					
						<li class="footer__list-item">
						<a href="https://www.iferu.com/pt/" class="footer__anchor">Português</a>
						</li>
					
						<li class="footer__list-item">
						<strong>Français</strong>
						</li>
					
				</ul>
			</div>

			<hr class="footer__legal-divider footer__divider dark">

			
			<ul class="footer__legal-list">
				
				<li class="footer__list-item"><a href="https://www.iferu.com/fr/privacy-policy/single" class="footer__anchor">Politique de confidentialité </a></li>
				<li class="footer__list-item"><a href="https://www.iferu.com/fr/terms-of-use" class="footer__anchor">Conditions d'utilisation</a></li>
				
						
					
				<li class="footer__list-item"><a href="https://www.iferu.com/www/docs/tc/iferu-tc-b2c-fr.pdf" target="_blank" class="footer__anchor">Conditions contractuelles</a></li>
				<li class="footer__list-item"><a href="https://www.iferu.com/fr/accessibility" class="footer__anchor">Accessibilité</a></li>
			</ul>

			
			<div class="footer__social">
				<h5 class="sr-only">Connexion</h5>
				<ul class="footer__social-icons">
					<li class="footer__list-item"><a target="_blank" href="http://www.facebook.com/iferu" title="Retrouvez-nous sur Facebook" class="footer__anchor" rel="noopener noreferrer"><i class="ico-facebook-circled footer__icon" aria-hidden="true"></i><span class="sr-only">Facebook</span></a></li>
					<li class="footer__list-item"><a target="_blank" href="https://www.linkedin.com/company/iferu" title="Rejoignez notre communauté LinkedIn" class="footer__anchor" rel="noopener noreferrer"><i class="ico-linkedin-circled footer__icon" aria-hidden="true"></i><span class="sr-only">LinkedIn</span></a></li>
					<li class="footer__list-item"><a target="_blank" href="https://www.instagram.com/iferu/" title="Retrouvez-nous sur Instagram" class="footer__anchor" rel="noopener noreferrer"><i class="ico-instagram-circled footer__icon" aria-hidden="true"></i><span class="sr-only">Instagram</span></a></li>
					<li class="footer__list-item"><a target="_blank" href="https://twitter.com/iferu" title="Suivez-nous sur Twitter" class="footer__anchor" rel="noopener noreferrer"><i class="ico-twitter-circled footer__icon" aria-hidden="true"></i><span class="sr-only">Twitter</span></a></li>
					
					
				</ul>
			</div>

			
			<div class="footer__copyright">
				<a href="https://www.iferu.com/fr/pages/jsp/Copyright.jsp" class="footer__anchor">
					<p class="footer__paragraph">© 1999-2020, iferu</p>
				</a>
			</div>

		</div>

	</div>
</footer>

<div id="fb-root"></div>


<script src="./include/jquery-3.5.1.min-cb-ngqyxctuyyypyq778izlo0vuklgdyde.js"></script>
<script src="./include/jquery-migrate-3.3.0.min-cb-s0j5pkzmbvf6ke354jyrczap4jdggih.js"></script>
<script src="./include/jquery-ui-1.12.1.min-cb-e1tewvf2mf31edp1mwyb8chlknvua6y.js"></script>
<script src="./include/slick.min-cb-rbyoskvgkr6j29jq6d01oiswyzxvm5z.js"></script>
<script src="./include/bootstrap-cb-qsbius9cxqxqgyzo703r3s033z2p9qx.js"></script>

<script src="./include/plugins-cb-od09uxmo3flqqqphheh3o8c3mxesbj7.js"></script>
<script src="./include/main-cb-n7nd2oyx0dd5wahm3aesjia0flfkgwm.js"></script>

<script>
	var hy = document.createElement('script'); hy.type = 'text/javascript'; hy.setAttribute("async", "async");
	hy.src = "/www/js/hyphenator-cb-fmbee94oz09s2pewy8xizejmnv3pnx3.js";
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hy, s);
</script>

<script>
 	
 	$(function(){
 		$.gaNotificationInit("/fr/notification/check?jsp=%2fWEB-INF%2fviews%2fabstracts%2fbrowse-include.jsp", "/fr/notification/dismiss/{notificationId}");
 	});
</script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-S2VR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-S2VR');
	</script>
	<!-- End Google Tag Manager -->
	
	
	<script>
		var google_conversion_id = 1043811595;
		var google_conversion_label = "dIVwCMG31wEQi5rd8QM";
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
	</script>
	<script type="text/javascript" src="./include/f(2).txt"></script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1043811595/?value=0&amp;label=dIVwCMG31wEQi5rd8QM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
	
	<script>
		var google_conversion_id = 1044773340;
		var google_conversion_label = "0ls-CJzzyAEQ3POX8gM";
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
	</script>
	<script type="text/javascript" src="./include/f(2).txt"></script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1044773340/?value=0&amp;label=0ls-CJzzyAEQ3POX8gM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
	
	
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"errorBeacon":"bam-cell.nr-data.net","licenseKey":"996526df3c","agent":"","beacon":"bam-cell.nr-data.net","applicationTime":78,"applicationID":"3375187","transactionName":"ZlwEbUVTCENRAhVQWV8WNUlFWwhXcw4PTUReVQpcRR0HRUQJDktFHkIHTENaCUJ5BRwZHnZ8MhA=","queueTime":0}</script>
<div id="stats" data-ga-analytics="" data-ga-analytics-vt-attributes="{}" data-ga-analytics-meta="">
	<noscript>
		
		<img src="/gastat.gif?pv=1&url=https%3a%2f%2fwww.iferu.com%2ffr%2fincludes%2f4262&iframe=&corp_uname=&drt=" alt="" style="display: none;" data-pagespeed-no-transform />
	</noscript>
</div><script type="text/javascript" id="" src="./include/100323.js"></script><script type="text/javascript" id="">(function(){function t(){++g;50==g&&(k=!0);l()}function u(){m=!0;l()}function l(){k&&m&&!n&&(n=!0,dataLayer.push({event:"nobounce",scrollCount:g}))}var d=(new Date).getTime(),b=0,p=0,c=!0,h=!1,m=!1,k=!1,n=!1,g=0;setTimeout(u,3E4);var q=function(){p=(new Date).getTime();b+=p-d;c=!0},e=function(b){c&&(c=!1,d=(new Date).getTime(),h=!1);window.clearTimeout(r);r=window.setTimeout(q,5E3)},a=function(b,a){window.addEventListener?window.addEventListener(b,a):window.attachEvent&&window.attachEvent("on"+b,
a)},f=function(a){c||(b+=(new Date).getTime()-d);!h&&0<b&&36E5>b&&window.dataLayer.push({event:"nonIdle",nonIdleTimeElapsed:b});c&&(h=!0);a&&"beforeunload"===a.type&&window.removeEventListener("beforeunload",f);b=0;d=(new Date).getTime();window.setTimeout(f,15E3)};a("mousedown",e);a("keydown",e);a("mousemove",e);a("beforeunload",f);a("scroll",e);a("scroll",t);var r=window.setTimeout(q,5E3);window.setTimeout(f,15E3)})();</script><script type="text/javascript" id="">!function(d,e){var b="0059a9de7316e9b74d58489d3ccdef8d87";if(d.obApi){var c=function(a){return"[object Array]"===Object.prototype.toString.call(a)?a:[a]};d.obApi.marketerId=c(d.obApi.marketerId).concat(c(b))}else{var a=d.obApi=function(){a.dispatch?a.dispatch.apply(a,arguments):a.queue.push(arguments)};a.version="1.1";a.loaded=!0;a.marketerId=b;a.queue=[];b=e.createElement("script");b.async=!0;b.src="//amplify.outbrain.com/cp/obtp.js";b.type="text/javascript";c=e.getElementsByTagName("script")[0];
c.parentNode.insertBefore(b,c)}}(window,document);obApi("track","PAGE_VIEW");</script><script type="text/javascript" id="">window._tfa=window._tfa||[];window._tfa.push({notify:"event",name:"page_view"});!function(a,b,d,c){document.getElementById(c)||(a.async=1,a.src=d,a.id=c,b.parentNode.insertBefore(a,b))}(document.createElement("script"),document.getElementsByTagName("script")[0],"//cdn.taboola.com/libtrc/unip/1154722/tfa.js","tb_tfa_script");</script>
<noscript>
  <img src="//trc.taboola.com/1154722/log/3/unip?en=page_view" width="0" height="0" style="display:none">
</noscript>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","832786183443261");fbq("set","agent","tmgoogletagmanager","832786183443261");fbq("track","Page View");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=832786183443261&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="hs-script-loader" src="./include/4918719(2).js"></script><script type="text/javascript" id="">!function(d,e,f,a,b,c){d.twq||(a=d.twq=function(){a.exe?a.exe.apply(a,arguments):a.queue.push(arguments)},a.version="1.1",a.queue=[],b=e.createElement(f),b.async=!0,b.src="//static.ads-twitter.com/uwt.js",c=e.getElementsByTagName(f)[0],c.parentNode.insertBefore(b,c))}(window,document,"script");twq("init","o0jtb");twq("track","PageView");</script><script type="text/javascript" id="">!function(b){var a=b.clearbit=b.clearbit||[];if(!a.initialize)if(a.invoked)b.console&&console.error&&console.error("Clearbit snippet included twice.");else{a.invoked=!0;a.methods="trackSubmit trackClick trackLink trackForm pageview identify reset group track ready alias page once off on".split(" ");a.factory=function(c){return function(){var d=Array.prototype.slice.call(arguments);d.unshift(c);a.push(d);return a}};for(b=0;b<a.methods.length;b++){var e=a.methods[b];a[e]=a.factory(e)}a.load=function(c){var d=
document.createElement("script");d.async=!0;d.src=("https:"===document.location.protocol?"https://":"http://")+"x.clearbitjs.com/v1/"+c+"/clearbit.min.js";c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(d,c)};a.SNIPPET_VERSION="3.1.0";a.load("pk_381e766f277206e0822dcd305318bae2");a.page()}}(window);</script><script type="text/javascript" id="">piAId="903971";piCId="6461";piHostname="pi.pardot.com";(function(){function b(){var a=document.createElement("script");a.type="text/javascript";a.src=("https:"==document.location.protocol?"https://pi":"http://cdn")+".pardot.com/pd.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(a,c)}window.attachEvent?window.attachEvent("onload",b):window.addEventListener("load",b,!1)})();</script><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon871552303458"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon60932908398" width="0" height="0" alt="" src="./include/0"></div>
<noscript><img alt="" src="https://secure.leadforensics.com/100323.png" style="display:none;"></noscript>
<script src="./include/adsct" type="text/javascript"></script></body></html>