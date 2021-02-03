<?php 
			 session_start();  ?>
			 <?php 
if(isset($_SESSION["username"])){
  echo "<input type='hidden' value='true' id='session'></input>";
}?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html class="js no-touch" lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Découvrez nos solutions pour entreprise </title>
<meta name="description" content="Préparez vos collaborateurs à prendre des décisions documentées et judicieuses en leur offrant un accès continu à des connaissances pertinentes et actualisées.">
<meta name="keywords" content="formation en entreprise, université d&#39;entreprise, développement du leadership, formation à l&#39;encadrement, formation des cadres, développement des cadres.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="INDEX,FOLLOW">
<meta property="fb:app_id" content="143891362343386">
<link rel="shortcut icon" href="https://www.iferu.com/favicon.ico" type="image/x-icon">
<link rel="search" href="https://www.iferu.com/opensearch.xml" type="application/opensearchdescription+xml" title="iferu">

<script src="./fr-enterprise-solutions_files/feedbackweb-new.js" type="text/javascript" id="hs-feedback-web-4918719" crossorigin="anonymous" data-hubspot-feedback-portal-id="4918719" data-hubspot-feedback-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./fr-enterprise-solutions_files/leadflows.js" type="text/javascript" id="LeadFlows-4918719" crossorigin="anonymous" data-leadin-portal-id="4918719" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./fr-enterprise-solutions_files/4918719.js" type="text/javascript" id="cookieBanner-4918719" data-cookieconsent="ignore" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script src="./fr-enterprise-solutions_files/4918719(1).js" type="text/javascript" id="hs-analytics"></script><script src="./fr-enterprise-solutions_files/fb.js" type="text/javascript" id="hs-ads-pixel-4918719" data-ads-portal-id="4918719" data-ads-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="4918719" data-hsjs-env="prod"></script><script async="" src="./fr-enterprise-solutions_files/clearbit.min.js"></script><script async="" src="./fr-enterprise-solutions_files/uwt.js"></script><script src="./fr-enterprise-solutions_files/832786183443261" async=""></script><script async="" src="./fr-enterprise-solutions_files/fbevents.js"></script><script async="" src="./fr-enterprise-solutions_files/tfa.js" id="tb_tfa_script"></script><script async="" src="./fr-enterprise-solutions_files/obtp.js" type="text/javascript"></script><script type="text/javascript" async="" src="./fr-enterprise-solutions_files/bat.js"></script><script type="text/javascript" async="" src="./fr-enterprise-solutions_files/insight.min.js"></script><script type="text/javascript" async="" src="./fr-enterprise-solutions_files/analytics.js"></script><script type="text/javascript" async="" src="./fr-enterprise-solutions_files/dc.js"></script><script async="" src="./fr-enterprise-solutions_files/gtm.js"></script><script type="text/javascript" async="async" src="./fr-enterprise-solutions_files/hyphenator-cb-fmbee94oz09s2pewy8xizejmnv3pnx3.js"></script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"996526df3c",applicationID:"3375187"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?f(e,c,o):o()}function n(n,r,i,o){if(!p.aborted||o){e&&e(n,r,i);for(var a=t(i),c=v(n),f=c.length,u=0;u<f;u++)c[u].apply(a,r);var d=s[w[n]];return d&&d.push([b,n,r,a]),a}}function l(e,t){h[e]=v(e).concat(t)}function m(e,t){var n=h[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return h[e]||[]}function g(e){return d[e]=d[e]||i(n)}function y(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var h={},w={},b={on:l,addEventListener:l,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:y,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var c="nr@context",f=e("gos"),u=e(6),s={},d={},p=t.exports=i();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1184.min.js"},w=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:w,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0},{}],"wrap-function":[function(e,t,n){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(7),a="nr@original",c=Object.prototype.hasOwnProperty,f=!1;t.exports=function(e,t){function n(e,t,n,i){function nrWrapper(){var r,a,c,f;try{a=this,r=o(arguments),c="function"==typeof n?n(r,a):n||{}}catch(u){p([u,"",[r,a,i],c])}s(t+"start",[r,a,i],c);try{return f=e.apply(a,r)}catch(d){throw s(t+"err",[r,a,d],c),d}finally{s(t+"end",[r,a,f],c)}}return r(e)?e:(t||(t=""),nrWrapper[a]=e,d(e,nrWrapper),nrWrapper)}function u(e,t,i,o){i||(i="");var a,c,f,u="-"===i.charAt(0);for(f=0;f<t.length;f++)c=t[f],a=e[c],r(a)||(e[c]=n(a,u?c+i:i,o,c))}function s(n,r,i){if(!f||t){var o=f;f=!0;try{e.emit(n,r,i,t)}catch(a){p([a,n,r,i])}f=o}}function d(e,t){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(e);return n.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(r){p([r])}for(var i in e)c.call(e,i)&&(t[i]=e[i]);return t}function p(t){try{e.emit("internal-error",t)}catch(n){}}return e||(e=i),n.inPlace=u,n.flag=a,n}},{}]},{},["loader"]);</script>
	<link rel="stylesheet" type="text/css" href="./fr-enterprise-solutions_files/jquery-ui-1.12.1.min-cb-fyyzrx92fbilucbwhqke3jqbggxtiyc.css">

<link rel="stylesheet" type="text/css" href="./fr-enterprise-solutions_files/bootstrap-cb-1eib2am82vfhch339lo2u8dfgdjhrhj.css">

	<link rel="stylesheet" type="text/css" href="./fr-enterprise-solutions_files/styles-cb-32xz01rs480m3etnbbvy59fpsag2xav.css">


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
	</script><script src="./fr-enterprise-solutions_files/j.php" type="text/javascript"></script>


<!--[if IE ]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/document-register-element/1.4.1/document-register-element.js"></script>
<![endif]-->

<script src="./fr-enterprise-solutions_files/f.txt"></script><script src="./fr-enterprise-solutions_files/f(1).txt"></script><script src="./fr-enterprise-solutions_files/va-ffd39e015e5d25ce3182fc10ac34feab.js" crossorigin="anonymous" type="text/javascript"></script><script src="./fr-enterprise-solutions_files/track-ffd39e015e5d25ce3182fc10ac34feab.js" crossorigin="anonymous" type="text/javascript"></script><script src="./fr-enterprise-solutions_files/opa-e3db69dc6d0af05a6f9f8b749ec76384.js" crossorigin="anonymous" type="text/javascript"></script><style type="text/css">
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
</style></head>
<body class="">

		<script>
			dataLayer = [{
				"PageView": "\x2Ffr\x2Fenterprise\x2Fsolutions"
				
			}];
		</script>
		
	<div class="sr-only"><a href="https://www.iferu.com/fr/enterprise/solutions#main-content" tabindex="-1">Ignorer la navigation</a></div>
	<?php 
 include ("./header.php")
 
?>
	
	<div class="corpsol" id="main-content" role="main">

<!--- START MAIN_BODY -->
	





<div class="pageheader corpsol-pageheader" style="background-image: url(/www/images/enterprise/v3_corpsol/head.jpg)">
	
	<div class="pageheader__container pageheader__container--light pageheader__container--jumbo container">
		<div class="row">
		<div class="col-lg-offset-2 col-lg-8">
			
		<h1> 
			Apprendre au rythme des mutations économiques 
		</h1>
		<p>
			La solution d'entreprise iferu permet aux entreprises de favoriser une culture de l'apprentissage en fournissant des outils qui permettent aux utilisateurs d'apprendre tout en travaillant, plutôt que d'alourdir un emploi du temps souvent surchargé.
		</p>
		<a href="https://www.iferu.com/enterprise/request-demo" class="btn btn-warning">Demander une démo</a>
	
		</div>
		</div>
	</div>
</div>











 





		<div class="container">
			<div class="page-section
	 page-section--light
	 page-section--overlap-top
	
	
	
	 page-section--shadow
	 corpsol-section-empower corpsol-section">
				
		<h2>
			Consolidez votre culture de l'apprentissage
		</h2>
		<div class="empower-illustration">
			<div class="empower-fields">
				<div class="empower-field">
					<img src="./fr-enterprise-solutions_files/empower.field.a.svg">
					<p>
						Transformer les compétences
					</p>
				</div>
				<div class="empower-field">
					<img src="./fr-enterprise-solutions_files/empower.field.b.svg">
					<p>
						Actualiser ses connaissances
					</p>
				</div>
				<div class="empower-field">
					<img src="./fr-enterprise-solutions_files/empower.field.c.svg">
					<p>
						Rester informé
					</p>
				</div>
			</div>
		</div>
		<p>
			L'évolution rapide de la technologie a créé un nouvel impératif pour les personnes qui doivent se former et se perfectionner tout au long de leur vie. <br>
Aidez vos employés à rester compétitifs en leur fournissant les connaissances nécessaires, synthétisées dans des résumés concis. 
		</p>
	
			</div>
		</div>
	

	<hr class="visible-xs-block">
	











 





		<div class="container">
			<div class="page-section
	 page-section--light
	
	
	
	
	
	 upskill-section corpsol-section">
				
		<h2 class="js-cta-trigger">
			Améliorez les compétences de vos employés
		</h2>
		<p>
			L'environnement économique actuel évolue si rapidement qu'il est difficile de garder le rythme. iferu tient vos employés informés des sujets d’actualité qui façonnent le monde des affaires et les aide à actualiser leurs compétences tout en travaillant.
		</p>
		<div class="hidden-xs">
			<img class="upskill-section__img" src="./fr-enterprise-solutions_files/upskill.network.svg">
		</div>
	
			</div>
		</div>
	






<div class="gensec corpsol-stories corpsol-section corpsol-section--blue">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			 	<div class="gensec-content">
					
		<div class="corpsol-stories__header">
			<h2 class="corpsol-stories__title">
				Étude de cas client
			</h2>
			<a class="corpsol-stories__view-all-link" href="https://www.iferu.com/fr/enterprise/casestudies" target="blank">Afficher tout≫</a>
		</div>
		<div class="slick-container slick-initialized slick-slider slick-dotted" data-slick="{
			&quot;arrows&quot;: true,
			&quot;dots&quot;: true,
			&quot;slidesToShow&quot;:1,
			&quot;slidesToScroll&quot;: 1,
			&quot;adaptiveHeight&quot;: true,
			&quot;infinite&quot;: true}" role="toolbar"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="">Previous</button>
			
				<div aria-live="polite" class="slick-list draggable" style="height: 337px;"><div class="slick-track" role="listbox" style="opacity: 1; width: 6840px; transform: translate3d(-1140px, 0px, 0px);"><div class="slick-item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1140px;">
				<div class="corpsol-stories__story">
					<div class="corpsol-stories__logo visible-xs">
						<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo.svg">
					</div>
					<div class="corpsol-stories__challenge">
						<div class="corpsol-stories__quote-box">
							<p class="corpsol-stories__quote">“iferu soutient notre objectif, qui consiste à faire de l’apprentissage une démarche ‘facile, agréable, sociale et ponctuelle’.”</p>
							<p>Peter Yarrow, Global Head of Learning &amp; Proposition </p>
						</div>
						<div class="corpsol-stories__challenge-box">
							<h3>Défi</h3>
							<p>Standard Life Aberdeen a constaté qu’il était essentiel de fournir un support de développement approprié lorsque l’entreprise traversait une longue phase de changement.</p>
						</div>
					</div>
					<div class="corpsol-stories__results">
						<div class="corpsol-stories__results-title">
							<h3>Résultats</h3>
							<div class="corpsol-stories__logo-img-box--desktop">
								<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo.svg">
							</div>
						</div>
						<div class="corpsol-stories__results-list">
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a.svg">
								<p>70 % d’augmentation de l’utilisation</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b.svg">
								<p>Autonomie de l’apprentissage dans le cadre du processus de gestion du changement</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.c.svg">
								<p>Accès rapide à la connaissance professionnelle au format condensé</p>
							</div>
						</div>
						<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/standardlife.pdf" tabindex="-1">En savoir plus &gt;&gt; </a></strong>
					</div>
				</div>
			</div><div class="slick-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 1140px;">
					<div class="corpsol-stories__story">
						<div class="corpsol-stories__logo visible-xs">
							<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo(1).svg">
						</div>
						<div class="corpsol-stories__challenge">
							<div class="corpsol-stories__quote-box">
								<p class="corpsol-stories__quote">“iferu est ma revue quotidienne de l’actualité. Les résumés sont faciles à lire et à exploiter. Ils nous permettent d’encourager nos collaborateurs à prendre conscience des thématiques pertinentes.”</p>
								<p>Frédéric Hebert, Head of Digital Learning chez Danone</p>
							</div>
							<div class="corpsol-stories__challenge-box">
								<h3>Défi</h3>
								<p>Frédéric Hebert est ainsi confronté au défi auquel doivent faire face de nombreux spécialistes de l’apprentissage et du développement : comment encourager la curiosité et promouvoir une culture de l’apprentissage au sein d’équipes internationales diversifiées ?</p>
							</div>
						</div>
						<div class="corpsol-stories__results">
							<div class="corpsol-stories__results-title">
								<h3>Résultats</h3>
								<div class="corpsol-stories__logo-img-box--desktop">
									<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo(1).svg">
								</div>
							</div>
							<div class="corpsol-stories__results-list">
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a(1).svg">
									<p>Création d’une culture de l’apprentissage </p>
								</div>
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a.svg">
									<p>Augmentation de l’utilisation de iferu de 138 %</p>
								</div>
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b.svg">
									<p>Soutien à des équipes multinationales</p>
								</div>
							</div>
							<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/danone_fr.pdf" tabindex="0">En savoir plus &gt;&gt; </a></strong>
						</div>
					</div>
				</div><div class="slick-item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1140px;">
				<div class="corpsol-stories__story">
					<div class="corpsol-stories__logo visible-xs">
						<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo(2).svg">
					</div>
					<div class="corpsol-stories__challenge">
						<div class="corpsol-stories__quote-box">
							<p class="corpsol-stories__quote">“iferu apporte de manière simple et concise une multitude de connaissances, de nouvelles idées et de perspectives inédites dans les programmes d'apprentissage dédiés d'Atlassian.”</p>
							<p>B.J. Schone | Responsable de l’apprentissage numérique
</p>
						</div>
						<div class="corpsol-stories__challenge-box">
							<h3>Défi</h3>
							<p>Atlassian doit relever chaque mois le défi d'intégrer un nombre important de nouveaux employés au sein de ses effectifs en augmentation rapide.</p>
						</div>
					</div>
					<div class="corpsol-stories__results">
						<div class="corpsol-stories__results-title">
							<h3>Résultats</h3>
							<div class="corpsol-stories__logo-img-box--desktop">
								<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo(2).svg">
							</div>
						</div>
						<div class="corpsol-stories__results-list">
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a(2).svg">
								<p>Facilite l’apprentissage autonome</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b(1).svg">
								<p>Un tiers des collaborateurs utilisent iferu</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.c(1).svg">
								<p>Facilité d'intégration dans la plateforme LMS</p>
							</div>
						</div>
						<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/atlassian.pdf" tabindex="-1">En savoir plus &gt;&gt; </a></strong>
					</div>
				</div>
			</div><div class="slick-item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 1140px;">
				<div class="corpsol-stories__story">
					<div class="corpsol-stories__logo visible-xs">
						<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo(3).svg">
					</div>
					<div class="corpsol-stories__challenge">
						<div class="corpsol-stories__quote-box">
							<p class="corpsol-stories__quote">“La relation que nous avons développée avec iferu nous permet de tirer le meilleur parti de notre investissement.”</p>
							<p>Treacy Stewart, Directrice, Global Learning and Performance</p>
						</div>
						<div class="corpsol-stories__challenge-box">
							<h3>Défi</h3>
							<p>Pour créer une nouvelle culture de l’engagement, Mondelez doit gérer une double contrainte : développer ses effectifs à travers le monde et encourager la curiosité chez ses employés.</p>
						</div>
					</div>
					<div class="corpsol-stories__results">
						<div class="corpsol-stories__results-title">
							<h3>Résultats</h3>
							<div class="corpsol-stories__logo-img-box--desktop">
								<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo(3).svg">
							</div>
						</div>
						<div class="corpsol-stories__results-list">
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a(3).svg">
								<p>Un partenariat fondé sur la confiance avec l’équipe Customer Success </p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b(2).svg">
								<p>Apprentissage intégré via des activités en ligne et hors ligne</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.c(2).svg">
								<p>Intégration transparente de l'authentification unique</p>
							</div>
						</div>
						<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/mondelez.pdf" tabindex="-1">En savoir plus &gt;&gt; </a></strong>
					</div>
				</div>
			</div><div class="slick-item slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 1140px;">
				<div class="corpsol-stories__story">
					<div class="corpsol-stories__logo visible-xs">
						<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo.svg">
					</div>
					<div class="corpsol-stories__challenge">
						<div class="corpsol-stories__quote-box">
							<p class="corpsol-stories__quote">“iferu soutient notre objectif, qui consiste à faire de l’apprentissage une démarche ‘facile, agréable, sociale et ponctuelle’.”</p>
							<p>Peter Yarrow, Global Head of Learning &amp; Proposition </p>
						</div>
						<div class="corpsol-stories__challenge-box">
							<h3>Défi</h3>
							<p>Standard Life Aberdeen a constaté qu’il était essentiel de fournir un support de développement approprié lorsque l’entreprise traversait une longue phase de changement.</p>
						</div>
					</div>
					<div class="corpsol-stories__results">
						<div class="corpsol-stories__results-title">
							<h3>Résultats</h3>
							<div class="corpsol-stories__logo-img-box--desktop">
								<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo.svg">
							</div>
						</div>
						<div class="corpsol-stories__results-list">
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a.svg">
								<p>70 % d’augmentation de l’utilisation</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b.svg">
								<p>Autonomie de l’apprentissage dans le cadre du processus de gestion du changement</p>
							</div>
							<div class="corpsol-stories__result">
								<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.c.svg">
								<p>Accès rapide à la connaissance professionnelle au format condensé</p>
							</div>
						</div>
						<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/standardlife.pdf" tabindex="-1">En savoir plus &gt;&gt; </a></strong>
					</div>
				</div>
			</div><div class="slick-item slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 1140px;">
					<div class="corpsol-stories__story">
						<div class="corpsol-stories__logo visible-xs">
							<img class="corpsol-stories__logo-img" src="./fr-enterprise-solutions_files/logo(1).svg">
						</div>
						<div class="corpsol-stories__challenge">
							<div class="corpsol-stories__quote-box">
								<p class="corpsol-stories__quote">“iferu est ma revue quotidienne de l’actualité. Les résumés sont faciles à lire et à exploiter. Ils nous permettent d’encourager nos collaborateurs à prendre conscience des thématiques pertinentes.”</p>
								<p>Frédéric Hebert, Head of Digital Learning chez Danone</p>
							</div>
							<div class="corpsol-stories__challenge-box">
								<h3>Défi</h3>
								<p>Frédéric Hebert est ainsi confronté au défi auquel doivent faire face de nombreux spécialistes de l’apprentissage et du développement : comment encourager la curiosité et promouvoir une culture de l’apprentissage au sein d’équipes internationales diversifiées ?</p>
							</div>
						</div>
						<div class="corpsol-stories__results">
							<div class="corpsol-stories__results-title">
								<h3>Résultats</h3>
								<div class="corpsol-stories__logo-img-box--desktop">
									<img class="corpsol-stories__logo-img--desktop hidden-xs" src="./fr-enterprise-solutions_files/logo(1).svg">
								</div>
							</div>
							<div class="corpsol-stories__results-list">
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a(1).svg">
									<p>Création d’une culture de l’apprentissage </p>
								</div>
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.a.svg">
									<p>Augmentation de l’utilisation de iferu de 138 %</p>
								</div>
								<div class="corpsol-stories__result">
									<img class="corpsol-stories__result-img hidden-xs" src="./fr-enterprise-solutions_files/result.b.svg">
									<p>Soutien à des équipes multinationales</p>
								</div>
							</div>
							<strong class="corpsol-stories__results-link"><a href="https://www.iferu.com/www/docs/casestudies/danone_fr.pdf" tabindex="-1">En savoir plus &gt;&gt; </a></strong>
						</div>
					</div>
				</div></div></div>
			
			
			
			
		<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01"><button type="button" data-role="none" role="button" tabindex="0">2</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02"><button type="button" data-role="none" role="button" tabindex="0">3</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03"><button type="button" data-role="none" role="button" tabindex="0">4</button></li></ul></div>
	
				</div>			
			</div>
		</div>
	</div>
</div>


	
	<div class="advantages-section corpsol-section">
		




 

<div class="bullet-point bullet-point--left">
	<div class="bullet-point__img-mobile">
		
		
			<img src="./fr-enterprise-solutions_files/advantages.curated.jpg">
		
	</div>
	<div class="container">
		<div class="bullet-point__container">
			<div class="bullet-point__img-desk">
				<div class="bullet-point__bluebar"></div>
				
				
					<img src="./fr-enterprise-solutions_files/advantages.curated.jpg" class="bullet-point__img-desk-pic ls-is-cached lazyloaded">
				
			</div>
			<div class="bullet-point__description"><div class="bullet-point__circle"></div>
				<h2>
					Connaissances sélectionnées
				</h2>
				<p>
					Notre équipe éditoriale expérimentée identifie, sélectionne et synthétise les connaissances professionnelles les plus pertinentes afin d’offrir à vos collaborateurs un contenu fiable et actualisé.
				</p>
			</div>
		</div>
	</div>
</div>




 

<div class="bullet-point ">
	<div class="bullet-point__img-mobile">
		
			<a href="https://www.iferu.com/enterprise/tools"><img src="./fr-enterprise-solutions_files/advantages.tools.jpg"></a>
		
		
	</div>
	<div class="container">
		<div class="bullet-point__container">
			<div class="bullet-point__img-desk">
				<div class="bullet-point__bluebar"></div>
				
					<a href="https://www.iferu.com/enterprise/tools"><img src="./fr-enterprise-solutions_files/advantages.tools.jpg" class="bullet-point__img-desk-pic ls-is-cached lazyloaded"></a>
				
				
			</div>
			<div class="bullet-point__description"><div class="bullet-point__circle"></div>
				<h2>
					Des outils conviviaux
				</h2>
				<p>
					Avec notre gamme unique de produits, l'apprentissage passe au niveau supérieur et aide vos collaborateurs à développer des habitudes d'apprentissage, encourage la discussion et les guide dans le choix des résumés. <a href="https://www.iferu.com/enterprise/tools">Pour en savoir plus &gt;&gt;</a>
				</p>
			</div>
		</div>
	</div>
</div>




 

<div class="bullet-point bullet-point--left">
	<div class="bullet-point__img-mobile">
		
		
			<img src="./fr-enterprise-solutions_files/advantages.guidance.jpg">
		
	</div>
	<div class="container">
		<div class="bullet-point__container">
			<div class="bullet-point__img-desk">
				<div class="bullet-point__bluebar"></div>
				
				
					<img src="./fr-enterprise-solutions_files/advantages.guidance.jpg" class="bullet-point__img-desk-pic ls-is-cached lazyloaded">
				
			</div>
			<div class="bullet-point__description"><div class="bullet-point__circle"></div>
				<h2>
					Un accompagnement dédié
				</h2>
				<p>
					Nos Customer Success Managers vous accompagnent pour suggérer des solutions adaptées aux besoins de votre entreprise et vous soutenir en continu lors de la mise en place d'initiatives d'apprentissage.
				</p>
			</div>
		</div>
	</div>
</div>




 

<div class="bullet-point ">
	<div class="bullet-point__img-mobile">
		
		
			<img src="./fr-enterprise-solutions_files/advantages.custom.jpg">
		
	</div>
	<div class="container">
		<div class="bullet-point__container">
			<div class="bullet-point__img-desk">
				<div class="bullet-point__bluebar"></div>
				
				
					<img src="./fr-enterprise-solutions_files/advantages.custom.jpg" class="bullet-point__img-desk-pic ls-is-cached lazyloaded">
				
			</div>
			<div class="bullet-point__description"><div class="bullet-point__circle"></div>
				<h2>
					Une expérience personnalisée
				</h2>
				<p>
					Notre portail d’entreprise vous permet de personnaliser le parcours d'apprentissage de vos employés en fonction de vos initiatives et de vos objectifs. <a href="https://www.iferu.com/enterprise/tools">En savoir plus &gt;&gt;</a>
				</p>
			</div>
		</div>
	</div>
</div>




 

<div class="bullet-point bullet-point--left">
	<div class="bullet-point__img-mobile">
		
		
			<img src="./fr-enterprise-solutions_files/advantages.library.jpg">
		
	</div>
	<div class="container">
		<div class="bullet-point__container">
			<div class="bullet-point__img-desk">
				<div class="bullet-point__bluebar"></div>
				
				
					<img src="./fr-enterprise-solutions_files/advantages.library.jpg" class="bullet-point__img-desk-pic ls-is-cached lazyloaded">
				
			</div>
			<div class="bullet-point__description"><div class="bullet-point__circle"></div>
				<h2>
					Une bibliothèque toujours plus riche
				</h2>
				<p>
					Notre bibliothèque ne cesse de s’élargir avec des nouveaux contenus ajoutés quotidiennement. Nos résumés concis couvrent un large éventail de thématiques issus de multiples sources (livres, articles, podcasts, etc.). En proposant un contenu en sept langues, notre bibliothèque s’adresse à une base d’utilisateurs internationale.
				</p>
			</div>
		</div>
	</div>
</div>
	</div>

	<hr class="container">
	
	





<div class="gensec integration-section corpsol-section">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			 	<div class="gensec-content">
					
		<a href="https://www.iferu.com/fr/enterprise/request-demo" target="blank">
			<div class="description">
				<h2>
					Une intégration transparente
				</h2>
				<p>
					Notre contenu s’intègre aux meilleures plateformes LMS et LXP, et permet d’inclure le contenu iferu dans des initiatives d'apprentissage existantes ou de créer de nouvelles expériences sur la base de résumés.
				</p>
			</div>
			<div class="integrations">
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/LinkedinLearning.svg">
				</div>
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/SAP.svg">
				</div>
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/Crossknowledge.svg">
				</div>
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/edcast.svg">
				</div>
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/cornerstone.svg">
				</div>
				<div class="integration">
					<img src="./fr-enterprise-solutions_files/degreed.svg">
				</div>
			</div>
		</a>
	
				</div>			
			</div>
		</div>
	</div>
</div>







<div class="gensec corpsol-section corpsol-section-learn corpsol-section--blue">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			 	<div class="gensec-content">
					
		<div class="corpsol-section-learn__img">
			<img src="./fr-enterprise-solutions_files/culture.png">
		</div>
		<div class="corpsol-section-learn__desc">
			<h2>
				Découvrez comment développer une culture de l’apprentissage à fort impact
			</h2>
			<p>
				</p><p>Depuis vingt ans, nous aidons les entreprises à bâtir des cultures qui mettent l’accent sur l’apprentissage et le développement. Téléchargez notre Livre blanc pour :</p>
<ul><li>Découvrir ce qui rend unique une culture de l’apprentissage à fort impact.</li>
<li>Comprendre pourquoi votre entreprise a besoin d’une culture de l’apprentissage à fort impact.</li>
<li>Identifier cinq étapes vous permettant de développer votre propre culture de l’apprentissage.</li></ul>

			<p></p>
	
			<div class="corpsol-section-learn__desc-learn-link">
				<a class="btn btn-primary" target="blank" href="https://hub.iferu.com/develop-a-high-impact-learning-culture-guide-cs-1">Télécharger le Livre blanc</a>
			</div>
		</div>
	
				</div>			
			</div>
		</div>
	</div>
</div>







<div class="gensec unlock-section corpsol-section">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			 	<div class="gensec-content">
					
		<div class="container">
			





<div class="corpclients-box">
    
        <h2 class="corpclients-box__title"><a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">Libérez le potentiel de votre entreprise</a></h2>
    
    
        <p class="corpclients-box__text">iferu est la solution d’apprentissage la plus fiable pour un tiers des entreprises du Fortune 500</p>
    
    <div class="corpclients-box__logos">
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	    	<div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/eon.svg" alt="logo-eon" class="corpclients-box__img"></div>
	    </a> 
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/ferrero.svg" alt="logo-ferrero" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/mastercard.svg" alt="logo-mastercard" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/microsoft.svg" alt="logo-microsoft" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/adobe.svg" alt="logo-adobe" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/ey.svg" alt="logo-ey" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/daimler.svg" alt="logo-daimler" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/ge.svg" alt="logo-ge" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/facebook.svg" alt="logo-facebook" class="corpclients-box__img"></div>
	    </a>
	    <a href="https://www.iferu.com/enterprise/casestudies" class="corpclients-box__link">
	        <div class="corpclients-box__img-box"><img src="./fr-enterprise-solutions_files/unilever.svg" alt="logo-unilever" class="corpclients-box__img"></div>
	    </a>
	</div>
</div>

		</div>
	
				</div>			
			</div>
		</div>
	</div>
</div>


	
	<div class="gensec contactform-section corpsol-section" style="color: white;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 col-lg-offset-3">
					<div class="gensec-content">
						





<div class="b2b-lead-form">
	<h2>
		Contactez-nous.
	</h2>
	<form id="contactForm" action="https://www.iferu.com/fr/enterprise/contact" method="post">
		
















 
 
 
 
 
 
		
			<div class="alert alert-info text-center">Partout dans le monde, les entreprises doivent faire face à des défis inédits. Aussi, nous proposons un essai gratuit à toutes celles qui souhaitent autonomiser leurs collaborateurs par l'acquisition de connaissances sélectionnées par des experts. Contactez-nous pour en savoir plus.</div>
			













<fieldset class="form-fieldset">


				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-3400" class="control-label">
			Société
		</label>
	
	
	
	
			<input id="form-field-3400" name="company" class="form-control" type="text" data-ga-validator-required="false" value="" maxlength="40">
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-9569" class="control-label">
			Pays*
		</label>
	
	
	
	
			<select id="form-field-9569" name="country" class="form-control" data-ga-validator-required="false">
				
					<option value="">
						Veuillez sélectionner...
					</option>
				
									
					<option value="US">États-Unis</option><option value="DE">Allemagne</option><option value="CH">Suisse</option><option value="AF">Afghanistan</option><option value="ZA">Afrique du Sud</option><option value="AL">Albanie</option><option value="DZ">Algérie</option><option value="DE">Allemagne</option><option value="AD">Andorre</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctique</option><option value="AG">Antigua-et-Barbuda</option><option value="AN">Antilles néerlandaises</option><option value="SA">Arabie saoudite</option><option value="AR">Argentine</option><option value="AM">Arménie</option><option value="AW">Aruba</option><option value="AU">Australie</option><option value="AT">Autriche</option><option value="AZ">Azerbaïdjan</option><option value="BS">Bahamas</option><option value="BH">Bahreïn</option><option value="BD">Bangladesh</option><option value="BB">Barbades</option><option value="BE">Belgique</option><option value="BZ">Bélize</option><option value="BJ">Bénin</option><option value="BM">Bermudes</option><option value="BT">Bhoutan</option><option value="BY">Biélorussie</option><option value="BO">Bolivie</option><option value="BA">Bosnie-Herzégovine</option><option value="BW">Botswana</option><option value="BR">Brésil</option><option value="BN">Brunéi Darussalam</option><option value="BG">Bulgarie</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodge</option><option value="CM">Cameroun</option><option value="CA">Canada</option><option value="CV">Cap-Vert</option><option value="CL">Chili</option><option value="CN">Chine</option><option value="CY">Chypre</option><option value="CO">Colombie</option><option value="KM">Comores</option><option value="CG">Congo</option><option value="KP">Corée du Nord</option><option value="KR">Corée du Sud</option><option value="CR">Costa Rica</option><option value="CI">Côte d'Ivoire</option><option value="HR">Croatie</option><option value="CU">Cuba</option><option value="DK">Danemark</option><option value="DJ">Djibouti</option><option value="DM">Dominique</option><option value="EG">Égypte</option><option value="AE">Émirats Arabes Unis</option><option value="EC">Équateur</option><option value="ER">Érythrée</option><option value="ES">Espagne</option><option value="EE">Estonie</option><option value="US">États-Unis</option><option value="ET">Éthiopie</option><option value="FJ">Fidji</option><option value="FI">Finlande</option><option value="FR">France</option><option value="GA">Gabon</option><option value="GM">Gambie</option><option value="GE">Georgie</option><option value="GS">Géorgie du Sud-et-les Îles Sandwich</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Grèce</option><option value="GD">Grenade</option><option value="GL">Groenland</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernesey</option><option value="GN">Guinée</option><option value="GW">Guinée-Bissau</option><option value="GQ">Guinée équatoriale</option><option value="GY">Guyane</option><option value="GF">Guyane française</option><option value="HT">Haïti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hongrie</option><option value="BV">Île Bouvet</option><option value="CX">Île Christmas</option><option value="IM">Île de Man</option><option value="NF">Île Norfolk</option><option value="PN">Île Pitcairn</option><option value="AX">Îles Åland</option><option value="KY">Îles Caïmans</option><option value="CC">Îles Cocos</option><option value="CK">Îles Cook</option><option value="FO">Îles Féroé</option><option value="HM">Îles Heard-et-MacDonald</option><option value="FK">Îles Malouines</option><option value="MP">Îles Mariannes du Nord</option><option value="MH">Îles Marshall</option><option value="UM">Îles mineures éloignées des États-Unis</option><option value="SB">Îles Salomon</option><option value="TC">Îles Turques-et-Caïques</option><option value="VG">Îles Vierges britanniques</option><option value="VI">Îles Vierges des États-Unis</option><option value="IN">Inde</option><option value="ID">Indonésie</option><option value="IQ">Irak</option><option value="IE">Irlande</option><option value="IS">Islande</option><option value="IL">Israël</option><option value="IT">Italie</option><option value="JM">Jamaïque</option><option value="JP">Japon</option><option value="JE">Jersey</option><option value="JO">Jordanie</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Koweït</option><option value="LA">Laos</option><option value="RE">La Réunion</option><option value="LS">Lesotho</option><option value="LV">Lettonie</option><option value="LB">Liban</option><option value="LR">Libéria</option><option value="LY">Libye</option><option value="LI">Liechtenstein</option><option value="LT">Lithuanie</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macédoine</option><option value="MG">Madagascar</option><option value="MY">Malaisie</option><option value="MW">Malawi</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malte</option><option value="MA">Maroc</option><option value="MQ">Martinique</option><option value="MU">Maurice</option><option value="MR">Mauritanie</option><option value="YT">Mayotte</option><option value="MX">Mexique</option><option value="FM">Micronésie</option><option value="MD">Moldavie</option><option value="MC">Monaco</option><option value="MN">Mongolie</option><option value="ME">Monténégro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibie</option><option value="NR">Nauru</option><option value="NP">Népal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigéria</option><option value="NU">Niue</option><option value="NO">Norvège</option><option value="NC">Nouvelle-Calédonie</option><option value="NZ">Nouvelle-Zélande</option><option value="OM">Oman</option><option value="UG">Ouganda</option><option value="UZ">Ouzbékistan</option><option value="PK">Pakistan</option><option value="PW">Palaos</option><option value="PA">Panama</option><option value="PG">Papouasie-Nouvelle-Guinée</option><option value="PY">Paraguay</option><option value="NL">Pays-Bas</option><option value="PE">Pérou</option><option value="PH">Philippines</option><option value="PL">Pologne</option><option value="PF">Polynésie française</option><option value="PR">Porto Rico</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="SY">République arabe syrienne</option><option value="CF">République centrafricaine</option><option value="CD">République démocratique du Congo</option><option value="DO">République Dominicaine</option><option value="IR">République Islamique d'Iran</option><option value="CZ">République tchèque</option><option value="RO">Roumanie</option><option value="GB">Royaume-Uni</option><option value="RU">Russie</option><option value="RW">Rwanda</option><option value="EH">Sahara Occidental</option><option value="BL">Saint-Barthélemy</option><option value="KN">Saint-Christophe-et-Niévès</option><option value="SH">Sainte-Hélène</option><option value="LC">Sainte-Lucie</option><option value="SM">Saint-Marin</option><option value="MF">Saint-Martin</option><option value="PM">Saint-Pierre-et-Miquelon</option><option value="VC">Saint-Vincent-et-les-Grenadines</option><option value="SV">Salvador</option><option value="WS">Samoa</option><option value="AS">Samoa américaines</option><option value="ST">Sao Tomé-et-Principe</option><option value="SN">Sénégal</option><option value="RS">Serbie</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapour</option><option value="SK">Slovaquie</option><option value="SI">Slovénie</option><option value="SO">Somalie</option><option value="SD">Soudan</option><option value="LK">Sri Lanka</option><option value="SE">Suède</option><option value="CH">Suisse</option><option value="SR">Suriname</option><option value="SJ">Svalbard et île Jan Mayen</option><option value="SZ">Swaziland</option><option value="TJ">Tadjikistan</option><option value="TW">Taïwan</option><option value="TZ">Tanzanie</option><option value="TD">Tchad</option><option value="TF">Terres australes et antarctiques françaises</option><option value="IO">Territoire britannique de l'océan Indien</option><option value="PS">Territoires palestiniens</option><option value="TH">Thaïlande</option><option value="TL">Timor oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinité-et-Tobago</option><option value="TN">Tunisie</option><option value="TM">Turkménistan</option><option value="TR">Turquie</option><option value="TV">Tuvalu</option><option value="UA">Ukraine</option><option value="UY">Uruguay</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Viêt Nam</option><option value="WF">Wallis-et-Futuna</option><option value="YE">Yémen</option><option value="ZM">Zambie</option><option value="ZW">Zimbabwe</option>
				
			</select>
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-6742" class="control-label">
			Prénom*
		</label>
	
	
	
	
			<input id="form-field-6742" name="firstName" class="form-control" type="text" data-ga-validator-required="false" value="" maxlength="40">
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-8356" class="control-label">
			Nom*
		</label>
	
	
	
	
			<input id="form-field-8356" name="lastName" class="form-control" type="text" data-ga-validator-required="false" value="" maxlength="40">
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-8080" class="control-label">
			Fonction au sein de la société*
		</label>
	
	
	
	
			<input id="form-field-8080" name="function" class="form-control" type="text" data-ga-validator-required="false" value="" maxlength="40">
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-7199" class="control-label">
			Téléphone<span class="textSmall"><br>(Merci d'inclure l'indicatif téléphonique)</span>
		</label>
	
	
	
	
			<input id="form-field-7199" name="phone" class="form-control" type="text" data-ga-validator-required="false" value="" maxlength="80">
		
	
	
		
	
	
	
	
</div>
				
				<div class="form-group" id="contactPageEmail">
					<label for="url">
						Votre adresse email*</label>
					<input id="url" name="url" type="text" value="">
				</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-8328" class="control-label">
			Votre adresse email*
		</label>
	
	
	
	
			<input id="form-field-8328" name="fromAddress" class="form-control" type="text" data-ga-validator-required="false" value="">
		
	
	
		
	
	
	
	
</div>
				







































	
		
	



<div class="form-group">
	
	
		<label for="form-field-7842" class="control-label">
			Merci d'expliquer brièvement la nature de votre demande.*
		</label>
	
	
	
	
			<textarea id="form-field-7842" name="comment" class="form-control" data-ga-validator-required="false" rows="4"></textarea>
		
	
	
		
	
	
	
	
</div>
				









































<div class="form-group">
	
	
	
	
	
			<button type="submit" class="btn btn-warning">
				Envoyer
			</button>
		
	
	
	
	
	
</div>
			




</fieldset>

		
	</form>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!--- END MAIN BODY -->
<!--- END WRAPPER -->
	












<footer class="footer">
	<div class="container">

		
		
		<hr class="bold footer__divider">
		<div class="footer__menu">
			<a href="https://www.iferu.com/" class="footer__logo footer__anchor">
				<img src="./fr-enterprise-solutions_files/ga-logo-round.svg" alt="iferu footer icon" height="102" width="102">
			</a>

			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/enterprise/solutions#footer__menu-list-1" aria-expanded="false" aria-controls="footer__menu-list-1">
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
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/enterprise/solutions#footer__menu-list-2" aria-expanded="false" aria-controls="footer__menu-list-2">
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
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/enterprise/solutions#footer__menu-list-3" aria-expanded="false" aria-controls="footer__menu-list-3">
					<h5 class="footer__menu-title">Partenaires<i class="ico-arrow-down footer__icon" aria-hidden="true"></i></h5>
				</a>
				<ul id="footer__menu-list-3" class="footer__menu-list collapse" data-parent=".footer__menu">
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/publishers" class="footer__anchor">Éditeurs</a></li>
					
					
						<li class="footer__list-item"><a href="https://www.iferu.com/fr/media-relations" class="footer__anchor">Relations presse</a></li>
					
					
					<li class="footer__list-item"><a href="https://www.iferu.com/fr/alliance-partners" class="footer__anchor">Partenaires</a></li>
				</ul>
			</div>
			<div class="footer__menu-col panel">
				<a role="button" data-toggle="collapse" href="https://www.iferu.com/fr/enterprise/solutions#footer__menu-list-4" aria-expanded="false" aria-controls="footer__menu-list-4">
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
					<p class="footer__paragraph">© 1999-2021, iferu</p>
				</a>
			</div>

		</div>

	</div>
</footer>

<div id="fb-root"></div>


<script src="./fr-enterprise-solutions_files/jquery-3.5.1.min-cb-ngqyxctuyyypyq778izlo0vuklgdyde.js"></script>
<script src="./fr-enterprise-solutions_files/jquery-migrate-3.3.0.min-cb-s0j5pkzmbvf6ke354jyrczap4jdggih.js"></script>
<script src="./fr-enterprise-solutions_files/jquery-ui-1.12.1.min-cb-e1tewvf2mf31edp1mwyb8chlknvua6y.js"></script>
<script src="./fr-enterprise-solutions_files/slick.min-cb-rbyoskvgkr6j29jq6d01oiswyzxvm5z.js"></script>
<script src="./fr-enterprise-solutions_files/bootstrap-cb-qsbius9cxqxqgyzo703r3s033z2p9qx.js"></script>

<script src="./fr-enterprise-solutions_files/plugins-cb-263spjwuo2ql4ws8p9pvlrp95thejfn.js"></script>
<script src="./fr-enterprise-solutions_files/main-cb-jelr67bnj55qdbl7da6fg4blydtxduv.js"></script>

			<script src="./fr-enterprise-solutions_files/slick.min-cb-rbyoskvgkr6j29jq6d01oiswyzxvm5z.js"></script>
		
<script>
	var hy = document.createElement('script'); hy.type = 'text/javascript'; hy.setAttribute("async", "async");
	hy.src = "/www/js/hyphenator-cb-fmbee94oz09s2pewy8xizejmnv3pnx3.js";
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hy, s);
</script>

<script>
 	
 	$(function(){
 		$.gaNotificationInit("/fr/notification/check?jsp=%2fWEB-INF%2fviews%2fenterprise%2fsolutions.jsp", "/fr/notification/dismiss/{notificationId}");
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
	<script type="text/javascript" src="./fr-enterprise-solutions_files/f(2).txt"></script>
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
	<script type="text/javascript" src="./fr-enterprise-solutions_files/f(2).txt"></script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1044773340/?value=0&amp;label=0ls-CJzzyAEQ3POX8gM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
	
	
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"errorBeacon":"bam-cell.nr-data.net","licenseKey":"996526df3c","agent":"","beacon":"bam-cell.nr-data.net","applicationTime":50,"applicationID":"3375187","transactionName":"ZlwEbUVTCENRAhVQWV8WNUlFWwhXcw4PTUReVQpcRR0DXkQEE0lEWEoDFkxBA1NECA5XSxERIXxjGw==","queueTime":0}</script>
<div id="stats" data-ga-analytics="" data-ga-analytics-vt-attributes="{}" data-ga-analytics-meta="">
	<noscript>
		
		<img src="/gastat.gif?pv=1&url=https%3a%2f%2fwww.iferu.com%2ffr%2fenterprise%2fsolutions&iframe=&corp_uname=&drt=" alt="" style="display: none;" data-pagespeed-no-transform />
	</noscript>
</div><div style="display: none; visibility: hidden;">
<script type="text/javascript">imgsrc=location.protocol+"//www.visitortracklog.com/loghit.asp?id\x3d108579\x26vr\x3d4.0\x26rp\x3d"+escape(document.referrer)+"\x26pa\x3d"+escape(document.URL);document.write('\x3cimg border\x3d"0" alt\x3d"" src\x3d"'+imgsrc+'"\x3e');</script><img border="0" alt="" src="./fr-enterprise-solutions_files/loghit.asp">
</div><script type="text/javascript" id="" src="./fr-enterprise-solutions_files/100323.js"></script><script type="text/javascript" id="">(function(){function t(){++g;50==g&&(k=!0);l()}function u(){m=!0;l()}function l(){k&&m&&!n&&(n=!0,dataLayer.push({event:"nobounce",scrollCount:g}))}var d=(new Date).getTime(),b=0,p=0,c=!0,h=!1,m=!1,k=!1,n=!1,g=0;setTimeout(u,3E4);var q=function(){p=(new Date).getTime();b+=p-d;c=!0},e=function(b){c&&(c=!1,d=(new Date).getTime(),h=!1);window.clearTimeout(r);r=window.setTimeout(q,5E3)},a=function(b,a){window.addEventListener?window.addEventListener(b,a):window.attachEvent&&window.attachEvent("on"+b,
a)},f=function(a){c||(b+=(new Date).getTime()-d);!h&&0<b&&36E5>b&&window.dataLayer.push({event:"nonIdle",nonIdleTimeElapsed:b});c&&(h=!0);a&&"beforeunload"===a.type&&window.removeEventListener("beforeunload",f);b=0;d=(new Date).getTime();window.setTimeout(f,15E3)};a("mousedown",e);a("keydown",e);a("mousemove",e);a("beforeunload",f);a("scroll",e);a("scroll",t);var r=window.setTimeout(q,5E3);window.setTimeout(f,15E3)})();</script><script type="text/javascript" id="">!function(d,e){var b="0059a9de7316e9b74d58489d3ccdef8d87";if(d.obApi){var c=function(a){return"[object Array]"===Object.prototype.toString.call(a)?a:[a]};d.obApi.marketerId=c(d.obApi.marketerId).concat(c(b))}else{var a=d.obApi=function(){a.dispatch?a.dispatch.apply(a,arguments):a.queue.push(arguments)};a.version="1.1";a.loaded=!0;a.marketerId=b;a.queue=[];b=e.createElement("script");b.async=!0;b.src="//amplify.outbrain.com/cp/obtp.js";b.type="text/javascript";c=e.getElementsByTagName("script")[0];
c.parentNode.insertBefore(b,c)}}(window,document);obApi("track","PAGE_VIEW");</script><script type="text/javascript" id="">window._tfa=window._tfa||[];window._tfa.push({notify:"event",name:"page_view"});!function(a,b,d,c){document.getElementById(c)||(a.async=1,a.src=d,a.id=c,b.parentNode.insertBefore(a,b))}(document.createElement("script"),document.getElementsByTagName("script")[0],"//cdn.taboola.com/libtrc/unip/1154722/tfa.js","tb_tfa_script");</script>
<noscript>
  <img src="//trc.taboola.com/1154722/log/3/unip?en=page_view" width="0" height="0" style="display:none">
</noscript>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","832786183443261");fbq("set","agent","tmgoogletagmanager","832786183443261");fbq("track","Page View");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=832786183443261&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="hs-script-loader" src="./fr-enterprise-solutions_files/4918719(2).js"></script><script type="text/javascript" id="">!function(d,e,f,a,b,c){d.twq||(a=d.twq=function(){a.exe?a.exe.apply(a,arguments):a.queue.push(arguments)},a.version="1.1",a.queue=[],b=e.createElement(f),b.async=!0,b.src="//static.ads-twitter.com/uwt.js",c=e.getElementsByTagName(f)[0],c.parentNode.insertBefore(b,c))}(window,document,"script");twq("init","o0jtb");twq("track","PageView");</script><script type="text/javascript" id="">!function(b){var a=b.clearbit=b.clearbit||[];if(!a.initialize)if(a.invoked)b.console&&console.error&&console.error("Clearbit snippet included twice.");else{a.invoked=!0;a.methods="trackSubmit trackClick trackLink trackForm pageview identify reset group track ready alias page once off on".split(" ");a.factory=function(c){return function(){var d=Array.prototype.slice.call(arguments);d.unshift(c);a.push(d);return a}};for(b=0;b<a.methods.length;b++){var e=a.methods[b];a[e]=a.factory(e)}a.load=function(c){var d=
document.createElement("script");d.async=!0;d.src=("https:"===document.location.protocol?"https://":"http://")+"x.clearbitjs.com/v1/"+c+"/clearbit.min.js";c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(d,c)};a.SNIPPET_VERSION="3.1.0";a.load("pk_381e766f277206e0822dcd305318bae2");a.page()}}(window);</script><script type="text/javascript" id="">piAId="903971";piCId="6461";piHostname="pi.pardot.com";(function(){function b(){var a=document.createElement("script");a.type="text/javascript";a.src=("https:"==document.location.protocol?"https://pi":"http://cdn")+".pardot.com/pd.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(a,c)}window.attachEvent?window.attachEvent("onload",b):window.addEventListener("load",b,!1)})();</script><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon112428748364"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon539716482990" width="0" height="0" alt="" src="./fr-enterprise-solutions_files/0"></div>
<noscript><img alt="" src="https://secure.leadforensics.com/100323.png" style="display:none;"></noscript>
</body></html>