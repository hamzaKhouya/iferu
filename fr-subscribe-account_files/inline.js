document.write('<div style="display:inline-block;width:90px;height:37px;background-size:contain;" class="mfes-trustmark" data-width="90" data-height="37" data-ext="svg" data-type="102" oncontextmenu="return false;"></div>');
if(!window.TrustedSiteInline){window.TrustedSiteInline={config:[],init:function(){TrustedSiteInline.log("init");if(navigator.userAgent.match(/; MSIE [6-9]/i)){return
}TrustedSiteInline.load_config(function(){TrustedSiteInline.load_inline();TrustedSiteInline.load_rescan()})},load_inline:function(){if(!TrustedSiteInline.config.secure||!TrustedSiteInline.config.pro){return
}var c=new String(window.location.host).replace(/^www\./,"");var a=document.querySelectorAll("div.mfes-trustmark:not(.loaded),div.trustedsite-trustmark:not(.loaded)");
for(var b=0;b<a.length;b++){var d=a.item(b);if(TrustedSiteInline.has_class(d,"loaded")){return}TrustedSiteInline.add_class(d,"loaded");
TrustedSiteInline.load_inline_sub(d)}},load_inline_sub:function(j){var i=new String(window.location.host).replace(/^www\./,"");
var g=parseInt(j.getAttribute("data-type"));if(!g){return}TrustedSiteInline.log("loading "+g);var a=[parseInt(j.getAttribute("data-width")),parseInt(j.getAttribute("data-height"))];
var b=j.getAttribute("data-ext");if(b!="png"&&b!="svg"){b="svg"}var h=location.protocol==="https:"?1:0;var c="mfe";var d="";
if(g==101){a=TrustedSiteInline.calc_wh(a,125,55);b="png"}else{if(g==102){a=TrustedSiteInline.calc_wh(a,90,37)}else{if(g==103){a=TrustedSiteInline.calc_wh(a,320,40)
}else{if([202,214,301,302,303,304,215].indexOf(g)>=0){if(TrustedSiteInline.config.brand!="ts"){return}a=TrustedSiteInline.calc_wh(a,120,50);
c="ts"}else{if(g==216){d="inbox=1";a=TrustedSiteInline.calc_wh(a,160,50);c="ts"}else{if(g==204){if(TrustedSiteInline.config.brand!="ts"){return
}a=TrustedSiteInline.calc_wh(a,320,70);c="ts"}else{if(g==203){if(TrustedSiteInline.config.brand!="ts"){return}a=TrustedSiteInline.calc_wh(a,320,40);
c="ts"}else{if([211,212,213].indexOf(g)>=0){if(TrustedSiteInline.config.brand!="ts"){return}if(!h){return}a=TrustedSiteInline.calc_wh(a,120,50);
c="ts"}else{if(g==1001){if(a[0]){j.style.width=a[0]+"px";j.style.display="inline-block"}j.style.height="60px";j.style.minWidth="200px";
b="html"}else{if(g==1002){if(!a[0]&&!a[1]){a[1]=150}if(a[0]){j.style.width=a[0]+"px";j.style.display="inline-block"}if(a[1]){j.style.height=a[1]+"px"
}j.style.minHeight="150px";j.style.minWidth="180px";b="html"}else{return}}}}}}}}}}j.oncontextmenu=function(){return false
};if(b=="html"){j.innerHTML='<iframe src="https://www.trustedsite.com/widget/tm-'+g+"/?host="+i+'" style="border:0px;height:100%;width:100%;" width="100%" height="100%"></iframe>';
return}var f="https://cdn.ywxi.net/meter/"+i+"/"+g+"."+b+"?ts="+TrustedSiteInline.config.timestamp+"&l="+encodeURIComponent(navigator.language);
if(b=="png"){f+="&w="+(2*a[0])+"&h="+(2*a[1])}var e=j.getAttribute("data-color");if(e){f+="&color="+encodeURIComponent(e)
}if([101,102,103,105,106].indexOf(g)>=0){j.title="McAfee SECURE";j.setAttribute("aria-label","McAfee SECURE")}else{j.title="TrustedSite Certified";
j.setAttribute("aria-label","TrustedSite Certified")}j.tabIndex=0;j.style.width=a[0]+"px";j.style.height=a[1]+"px";j.style.display="inline-block";
j.style.backgroundImage="url("+f+")";j.style.backgroundSize="contain";j.style.backgroundPosition="top center";j.style.backgroundRepeat="no-repeat";
j.style.cursor="pointer";j.onclick=function(){TrustedSiteInline.handle_verify(c,i,d)};j.addEventListener("keydown",function(k){if(k.key=="Enter"){TrustedSiteInline.handle_verify(c,i)
}})},handle_verify:function(d,c,a){if(window.TrustedSite){window.TrustedSite.toggleverify(d,a)}else{var b=d=="ts"?"https://www.trustedsite.com":"https://www.mcafeesecure.com";
b+="/verify?host="+c;if(a){b+="&"+a}window.open(b)}},calc_wh:function(b,a,d){var c=b&&b.length==2?b[0]:0;var e=b&&b.length==2?b[1]:0;
if(c&&c>0){return[c,parseInt(c/a*d)]}if(e&&e>0){return[parseInt(e/d*a),e]}return[a,d]},load_rescan:function(){if(!TrustedSiteInline.config||!TrustedSiteInline.config.secure||!TrustedSiteInline.config.pro){return
}TrustedSiteInline.log("rescan enabled",1);window.setInterval(function(){TrustedSiteInline.load_inline()},100)},load_config:function(d){var b=this;
var a=new String(window.location.host).replace(/^www\./,"");var c="//s3-us-west-2.amazonaws.com/mfesecure-public/host/"+a+"/client.json?source=jsinline";
b.get_json(c,function(e){b.config=e;b.log("load_trustedsite_inline");b.log(b.config);b.load_config_local();if(b.config.error){return
}if(d){d(b.config)}},function(e){console.log("trustedsite-tm-inline[config]["+e+"]")})},load_config_local:function(){var a=document.getElementById("trustedsite-code");
if(!a||!a.dataset){return}if(a.dataset.rescan){this.config.rescan=1}},cleanStyle:function(a){try{a.style.maxWidth="none"}catch(b){}try{a.style.minWidth="none"
}catch(b){}try{a.style.maxHeight="none"}catch(b){}try{a.style.minHeight="none"}catch(b){}},cleanStyleCss:function(){return"margin:0;padding:0;border:0;background:none;max-width:none;max-height:none;"
},cookie_set:function(b,e,f){if(f){var c=new Date();c.setTime(c.getTime()+(f*60*1000));var a="expires="+c.toGMTString();document.cookie=b+"="+e+"; path=/;"+a
}else{document.cookie=b+"="+e+"; path=/;"}},cookie_get:function(d){var b=d+"=";var a=document.cookie.split(";");for(var e=0;
e<a.length;e++){var f=a[e].trim();if(f.indexOf(b)==0){return f.substring(b.length,f.length)}}return""},storage_set:function(b,d,e){if(!localStorage){return
}var a=new Date();var c={value:d,expiry:a.getTime()+(e*1000*60),};localStorage.setItem(b,JSON.stringify(c))},storage_get:function(b){if(!localStorage){return""
}var c=localStorage.getItem(b);if(!c){return""}var d=JSON.parse(c);var a=new Date();if(a.getTime()>d.expiry){localStorage.removeItem(b);
return""}return d.value},load_js:function(b){var a=document.createElement("script");a.setAttribute("type","text/javascript");
a.setAttribute("src",b);document.getElementsByTagName("head")[0].appendChild(a)},get_element:function(b){if(typeof b==="object"){return b
}if(typeof b==="string"){var a=document.querySelectorAll(b);return a.length>0?a.item(0):null}console.log("trustedsite unhandle element type ["+(typeof b)+"]");
return b},remove_element:function(a){if(!a){return}a=this.get_element(a);a.parentNode.removeChild(a)},is_hidden:function(a){a=this.get_element(a);
return window.getComputedStyle(a).display==="none"},has_class:function(a,b){a=this.get_element(a);return new RegExp("\\b"+b+"\\b").test(a.className)
},add_class:function(b,c){b=this.get_element(b);var a=b.className.split(" ");if(a.indexOf(c)==-1){b.className+=" "+c}},remove_class:function(b,c){b=this.get_element(b);
var a=b.className.replace(new RegExp("\\b"+c+"\\b","g"),"");if(b.className!=a){b.className=a}},get_json:function(b,c,a){var d=new XMLHttpRequest();
d.open("GET",b,true);d.responseType="text";d.onload=function(){if(d.status===200){if(c){c(JSON.parse(d.response))}}else{if(a){a(d.status)
}}};d.send()},window_width:function(){return window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth
},window_height:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},is_mobile:function(){return this.window_height()<=500||this.window_width()<=500
},calc_wh:function(b,a,d){var c=b&&b.length==2?b[0]:0;var e=b&&b.length==2?b[1]:0;if(c&&c>0){return[c,parseInt(c/a*d)]}if(e&&e>0){return[parseInt(e/d*a),e]
}return[a,d]},log:function(b,a){if(!a&&(!window.location.hash||window.location.hash.indexOf("TRUSTEDSITEDEBUG")==-1)){return
}console.log("trustedsite-inline ",b);return 0},appendChild:function(a,c){var b=this;if(!c){c=0}if(c>100){return}if(document.body){document.body.appendChild(a)
}else{window.setTimeout(function(){b.appendChild(a,c+1)},100)}},}}TrustedSiteInline.init();