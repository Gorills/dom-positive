<!DOCTYPE html>
<html class="nojs html" lang="ru-RU">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="{{ $description }}"/>
  <meta name="keywords" content="{{ $keywords }}"/>
  <meta name="generator" content="2017.1.0.379"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "require.js", "jquery.museresponsive.js", "pano-1.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=238351894"/>
  <title>точка 1</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
  <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
  <link rel="stylesheet" type="text/css" href="css/pano-1.css?crc=4013019769" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/menu.css?crc=freshest" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_top.css?crc=4022659591"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_pano-1.css?crc=3830028461" id="nomq_pagesheet"/>
  <![endif]-->
    <!--custom head HTML-->

  <!--HTML Widget code-->
   <!-- © 2013 - 2016 QooQee LLC, www.qooqee.com Do not copy, use or include the source of this widget in your template, website, or any other web design/product in any format. Read more about our terms & conditions: http://www.qooqee.com/terms-condition --> 

            <script type="application/javascript">
// Pannellum 15903fc, https://github.com/mpetroff/pannellum
window.libpannellum=function(y,l,g){function ja(aa){function S(a,e){return 1==a.level&&1!=e.level?-1:1==e.level&&1!=a.level?1:e.timestamp-a.timestamp}function fa(a,e){return a.level!=e.level?a.level-e.level:a.diff-e.diff}function J(a,e,d,l,p,b){this.vertices=a;this.side=e;this.level=d;this.x=l;this.y=p;this.path=b.replace("%s",e).replace("%l",d).replace("%x",l).replace("%y",p)}function ua(a,e,l,m,p){var b;var k=e.vertices;b=ba(a,k.slice(0,3));var r=ba(a,k.slice(3,6)),g=ba(a,k.slice(6,9)),k=ba(a,k.slice(9,
12)),z=b[0]+r[0]+g[0]+k[0];-4==z||4==z?b=!1:(z=b[1]+r[1]+g[1]+k[1],b=-4==z||4==z?!1:4!=b[2]+r[2]+g[2]+k[2]);if(b){b=e.vertices;r=b[0]+b[3]+b[6]+b[9];g=b[1]+b[4]+b[7]+b[10];k=b[2]+b[5]+b[8]+b[11];z=Math.sqrt(r*r+g*g+k*k);k=Math.asin(k/z);r=Math.atan2(g,r)-m;r+=r>Math.PI?-2*Math.PI:r<-Math.PI?2*Math.PI:0;r=Math.abs(r);e.diff=Math.acos(Math.sin(l)*Math.sin(k)+Math.cos(l)*Math.cos(k)*Math.cos(r));r=!1;for(g=0;g<d.nodeCache.length;g++)if(d.nodeCache[g].path==e.path){r=!0;d.nodeCache[g].timestamp=d.nodeCacheTimestamp++;
d.nodeCache[g].diff=e.diff;d.currentNodes.push(d.nodeCache[g]);break}r||(e.timestamp=d.nodeCacheTimestamp++,d.currentNodes.push(e),d.nodeCache.push(e));if(e.level<d.level){var k=q.cubeResolution*Math.pow(2,e.level-q.maxLevel),r=Math.ceil(k*q.invTileResolution)-1,g=k%q.tileResolution*2,B=2*k%q.tileResolution;0===B&&(B=q.tileResolution);0===g&&(g=2*q.tileResolution);z=0.5;if(e.x==r||e.y==r)z=1-q.tileResolution/(q.tileResolution+B);var u=1-z,k=[],y=z,O=z,D=z,I=u,v=u,w=u;if(B<q.tileResolution)if(e.x==
r&&e.y!=r){if(v=O=0.5,"d"==e.side||"u"==e.side)w=D=0.5}else e.x!=r&&e.y==r&&(I=y=0.5,"l"==e.side||"r"==e.side)&&(w=D=0.5);g<=q.tileResolution&&(e.x==r&&(y=0,I=1,"l"==e.side||"r"==e.side)&&(D=0,w=1),e.y==r&&(O=0,v=1,"d"==e.side||"u"==e.side)&&(D=0,w=1));B=[b[0],b[1],b[2],b[0]*y+b[3]*I,b[1]*z+b[4]*u,b[2]*D+b[5]*w,b[0]*y+b[6]*I,b[1]*O+b[7]*v,b[2]*D+b[8]*w,b[0]*z+b[9]*u,b[1]*O+b[10]*v,b[2]*D+b[11]*w];B=new J(B,e.side,e.level+1,2*e.x,2*e.y,q.fullpath);k.push(B);e.x==r&&g<=q.tileResolution||(B=[b[0]*y+
b[3]*I,b[1]*z+b[4]*u,b[2]*D+b[5]*w,b[3],b[4],b[5],b[3]*z+b[6]*u,b[4]*O+b[7]*v,b[5]*D+b[8]*w,b[0]*y+b[6]*I,b[1]*O+b[7]*v,b[2]*D+b[8]*w],B=new J(B,e.side,e.level+1,2*e.x+1,2*e.y,q.fullpath),k.push(B));e.x==r&&g<=q.tileResolution||e.y==r&&g<=q.tileResolution||(B=[b[0]*y+b[6]*I,b[1]*O+b[7]*v,b[2]*D+b[8]*w,b[3]*z+b[6]*u,b[4]*O+b[7]*v,b[5]*D+b[8]*w,b[6],b[7],b[8],b[9]*y+b[6]*I,b[10]*z+b[7]*u,b[11]*D+b[8]*w],B=new J(B,e.side,e.level+1,2*e.x+1,2*e.y+1,q.fullpath),k.push(B));e.y==r&&g<=q.tileResolution||(B=
[b[0]*z+b[9]*u,b[1]*O+b[10]*v,b[2]*D+b[11]*w,b[0]*y+b[6]*I,b[1]*O+b[7]*v,b[2]*D+b[8]*w,b[9]*y+b[6]*I,b[10]*z+b[7]*u,b[11]*D+b[8]*w,b[9],b[10],b[11]],B=new J(B,e.side,e.level+1,2*e.x,2*e.y+1,q.fullpath),k.push(B));for(e=0;e<k.length;e++)ua(a,k[e],l,m,p)}}}function va(){return[-1,1,-1,1,1,-1,1,-1,-1,-1,-1,-1,1,1,1,-1,1,1,-1,-1,1,1,-1,1,-1,1,1,1,1,1,1,1,-1,-1,1,-1,-1,-1,-1,1,-1,-1,1,-1,1,-1,-1,1,-1,1,1,-1,1,-1,-1,-1,-1,-1,-1,1,1,1,-1,1,1,1,1,-1,1,1,-1,-1]}function la(a,e,d){var g=Math.sin(e);e=Math.cos(e);
if("x"==d)return[a[0],e*a[1]+g*a[2],e*a[2]-g*a[1],a[3],e*a[4]+g*a[5],e*a[5]-g*a[4],a[6],e*a[7]+g*a[8],e*a[8]-g*a[7]];if("y"==d)return[e*a[0]-g*a[2],a[1],e*a[2]+g*a[0],e*a[3]-g*a[5],a[4],e*a[5]+g*a[3],e*a[6]-g*a[8],a[7],e*a[8]+g*a[6]];if("z"==d)return[e*a[0]+g*a[1],e*a[1]-g*a[0],a[2],e*a[3]+g*a[4],e*a[4]-g*a[3],a[5],e*a[6]+g*a[7],e*a[7]-g*a[6],a[8]]}function ga(a){return[a[0],a[4],a[8],a[12],a[1],a[5],a[9],a[13],a[2],a[6],a[10],a[14],a[3],a[7],a[11],a[15]]}function wa(a){a.textureLoad||(a.textureLoad=
!0,Fa(encodeURI(a.path+"."+q.extension),function(e){a.texture=e;a.textureLoaded=!0}))}function ba(a,e){var d=[a[0]*e[0]+a[1]*e[1]+a[2]*e[2],a[4]*e[0]+a[5]*e[1]+a[6]*e[2],a[11]+a[8]*e[0]+a[9]*e[1]+a[10]*e[2],1/(a[12]*e[0]+a[13]*e[1]+a[14]*e[2])],g=d[0]*d[3],l=d[1]*d[3],d=d[2]*d[3],b=[0,0,0];-1>g&&(b[0]=-1);1<g&&(b[0]=1);-1>l&&(b[1]=-1);1<l&&(b[1]=1);if(-1>d||1<d)b[2]=1;return b}var u=l.createElement("canvas");u.style.width=u.style.height="100%";aa.appendChild(u);var d,a,K,L,xa,R,ma,ca,q,w,ha,E,X,na,
V;this.init=function(f,e,y,ta,p,b,k,r){typeof e===g&&(e="equirectangular");w=e;q=f;ha=y;if(d){K&&(a.detachShader(d,K),a.deleteShader(K));L&&(a.detachShader(d,L),a.deleteShader(L));a.bindBuffer(a.ARRAY_BUFFER,null);a.bindBuffer(a.ELEMENT_ARRAY_BUFFER,null);d.texture&&a.deleteTexture(d.texture);if(d.nodeCache)for(f=0;f<d.nodeCache.length;f++)a.deleteTexture(d.nodeCache[f].texture);a.deleteProgram(d);d=g}ca=g;"cubemap"==w&&0!==(q[0].width&q[0].width-1)&&(navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad).* os 8_/)||
navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad).* os 9_/)||navigator.userAgent.match(/Trident.*rv[ :]*11\./))||a||(a=u.getContext("experimental-webgl",{alpha:!1,depth:!1}));if(!a&&("multires"==w&&q.hasOwnProperty("fallbackPath")||"cubemap"==w)&&("WebkitAppearance"in l.documentElement.style||navigator.userAgent.match(/Trident.*rv[ :]*11\./)||-1!==navigator.appVersion.indexOf("MSIE 10"))){R&&aa.removeChild(R);R=l.createElement("div");R.className="pnlm-world";ta=q.basePath?q.basePath+q.fallbackPath:
q.fallbackPath;var ka="frblud".split(""),z=0;p=function(){var a=l.createElement("canvas");a.className="pnlm-face pnlm-"+ka[this.side]+"face";R.appendChild(a);var b=a.getContext("2d");a.style.width=this.width+4+"px";a.style.height=this.height+4+"px";a.width=this.width+4;a.height=this.height+4;b.drawImage(this,2,2);var e=b.getImageData(0,0,a.width,a.height),d=e.data,g,f;for(g=2;g<a.width-2;g++)for(f=0;4>f;f++)d[4*(g+a.width)+f]=d[4*(g+2*a.width)+f],d[4*(g+a.width*(a.height-2))+f]=d[4*(g+a.width*(a.height-
3))+f];for(g=2;g<a.height-2;g++)for(f=0;4>f;f++)d[4*(g*a.width+1)+f]=d[4*(g*a.width+2)+f],d[4*((g+1)*a.width-2)+f]=d[4*((g+1)*a.width-3)+f];for(f=0;4>f;f++)d[4*(a.width+1)+f]=d[4*(2*a.width+2)+f],d[4*(2*a.width-2)+f]=d[4*(3*a.width-3)+f],d[4*(a.width*(a.height-2)+1)+f]=d[4*(a.width*(a.height-3)+2)+f],d[4*(a.width*(a.height-1)-2)+f]=d[4*(a.width*(a.height-2)-3)+f];for(g=1;g<a.width-1;g++)for(f=0;4>f;f++)d[4*g+f]=d[4*(g+a.width)+f],d[4*(g+a.width*(a.height-1))+f]=d[4*(g+a.width*(a.height-2))+f];for(g=
1;g<a.height-1;g++)for(f=0;4>f;f++)d[g*a.width*4+f]=d[4*(g*a.width+1)+f],d[4*((g+1)*a.width-1)+f]=d[4*((g+1)*a.width-2)+f];for(f=0;4>f;f++)d[f]=d[4*(a.width+1)+f],d[4*(a.width-1)+f]=d[4*(2*a.width-2)+f],d[a.width*(a.height-1)*4+f]=d[4*(a.width*(a.height-2)+1)+f],d[4*(a.width*a.height-1)+f]=d[4*(a.width*(a.height-1)-2)+f];b.putImageData(e,0,0);z++;6==z&&(xa=this.width,aa.appendChild(R),k())};for(f=0;6>f;f++)b=new Image,b.crossOrigin="anonymous",b.side=f,b.onload=p,b.src="multires"==w?encodeURI(ta.replace("%s",
ka[f])+"."+q.extension):encodeURI(q[f].src)}else{if(!a)throw console.log("Error: no WebGL support detected!"),{type:"no webgl"};q.fullpath=q.basePath?q.basePath+q.path:q.path;q.invTileResolution=1/q.tileResolution;e=va();ma=[];for(f=0;6>f;f++)ma[f]=e.slice(12*f,12*f+12),e=va();if("equirectangular"==w){if(f=Math.max(q.width,q.height),e=a.getParameter(a.MAX_TEXTURE_SIZE),f>e)throw console.log("Error: The image is too big; it's "+f+"px wide, but this device's maximum supported width is "+e+"px."),{type:"webgl size error",
width:f,maxWidth:e};}else if("cubemap"==w&&(f=q[0].width,e=a.getParameter(a.MAX_CUBE_MAP_TEXTURE_SIZE),f>e))throw console.log("Error: The cube face image is too big; it's "+f+"px wide, but this device's maximum supported width is "+e+"px."),{type:"webgl size error",width:f,maxWidth:e};r===g||r.horizonPitch===g&&r.horizonRoll===g||(ca=[r.horizonPitch==g?0:r.horizonPitch,r.horizonRoll==g?0:r.horizonRoll]);f=a.TEXTURE_2D;a.viewport(0,0,u.width,u.height);K=a.createShader(a.VERTEX_SHADER);e=m;"multires"==
w&&(e=v);a.shaderSource(K,e);a.compileShader(K);L=a.createShader(a.FRAGMENT_SHADER);e=oa;"cubemap"==w?(f=a.TEXTURE_CUBE_MAP,e=Ga):"multires"==w&&(e=pa);a.shaderSource(L,e);a.compileShader(L);d=a.createProgram();a.attachShader(d,K);a.attachShader(d,L);a.linkProgram(d);a.getShaderParameter(K,a.COMPILE_STATUS)||console.log(a.getShaderInfoLog(K));a.getShaderParameter(L,a.COMPILE_STATUS)||console.log(a.getShaderInfoLog(L));a.getProgramParameter(d,a.LINK_STATUS)||console.log(a.getProgramInfoLog(d));a.useProgram(d);
d.drawInProgress=!1;d.texCoordLocation=a.getAttribLocation(d,"a_texCoord");a.enableVertexAttribArray(d.texCoordLocation);"multires"!=w?(E||(E=a.createBuffer()),a.bindBuffer(a.ARRAY_BUFFER,E),a.bufferData(a.ARRAY_BUFFER,new Float32Array([-1,1,1,1,1,-1,-1,1,1,-1,-1,-1]),a.STATIC_DRAW),a.vertexAttribPointer(d.texCoordLocation,2,a.FLOAT,!1,0,0),d.aspectRatio=a.getUniformLocation(d,"u_aspectRatio"),a.uniform1f(d.aspectRatio,u.width/u.height),d.psi=a.getUniformLocation(d,"u_psi"),d.theta=a.getUniformLocation(d,
"u_theta"),d.f=a.getUniformLocation(d,"u_f"),d.h=a.getUniformLocation(d,"u_h"),d.v=a.getUniformLocation(d,"u_v"),d.vo=a.getUniformLocation(d,"u_vo"),d.rot=a.getUniformLocation(d,"u_rot"),a.uniform1f(d.h,ta/(2*Math.PI)),a.uniform1f(d.v,p/Math.PI),a.uniform1f(d.vo,b/Math.PI*2),"equirectangular"==w&&(d.backgroundColor=a.getUniformLocation(d,"u_backgroundColor"),a.uniform4fv(d.backgroundColor,(r.backgroundColor?r.backgroundColor:[0,0,0]).concat([1]))),d.texture=a.createTexture(),a.bindTexture(f,d.texture),
"cubemap"==w?(a.texImage2D(a.TEXTURE_CUBE_MAP_POSITIVE_X,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[1]),a.texImage2D(a.TEXTURE_CUBE_MAP_NEGATIVE_X,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[3]),a.texImage2D(a.TEXTURE_CUBE_MAP_POSITIVE_Y,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[4]),a.texImage2D(a.TEXTURE_CUBE_MAP_NEGATIVE_Y,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[5]),a.texImage2D(a.TEXTURE_CUBE_MAP_POSITIVE_Z,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[0]),a.texImage2D(a.TEXTURE_CUBE_MAP_NEGATIVE_Z,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q[2])):a.texImage2D(f,
0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q),a.texParameteri(f,a.TEXTURE_WRAP_S,a.CLAMP_TO_EDGE),a.texParameteri(f,a.TEXTURE_WRAP_T,a.CLAMP_TO_EDGE),a.texParameteri(f,a.TEXTURE_MIN_FILTER,a.LINEAR),a.texParameteri(f,a.TEXTURE_MAG_FILTER,a.LINEAR)):(d.vertPosLocation=a.getAttribLocation(d,"a_vertCoord"),a.enableVertexAttribArray(d.vertPosLocation),X||(X=a.createBuffer()),na||(na=a.createBuffer()),V||(V=a.createBuffer()),a.bindBuffer(a.ARRAY_BUFFER,na),a.bufferData(a.ARRAY_BUFFER,new Float32Array([0,0,1,0,1,1,
0,1]),a.STATIC_DRAW),a.bindBuffer(a.ELEMENT_ARRAY_BUFFER,V),a.bufferData(a.ELEMENT_ARRAY_BUFFER,new Uint16Array([0,1,2,0,2,3]),a.STATIC_DRAW),d.perspUniform=a.getUniformLocation(d,"u_perspMatrix"),d.cubeUniform=a.getUniformLocation(d,"u_cubeMatrix"),d.level=-1,d.currentNodes=[],d.nodeCache=[],d.nodeCacheTimestamp=0);if(0!==a.getError())throw console.log("Error: Something went wrong with WebGL!"),{type:"webgl error"};k()}};this.destroy=function(){aa!==g&&(u!==g&&aa.removeChild(u),R!==g&&aa.removeChild(R));
if(a){var d=a.getExtension("WEBGL_lose_context");d&&d.loseContext()}};this.resize=function(){var g=y.devicePixelRatio||1;u.width=u.clientWidth*g;u.height=u.clientHeight*g;a&&(a.viewport(0,0,u.width,u.height),"multires"!=w&&a.uniform1f(d.aspectRatio,u.width/u.height))};this.resize();this.render=function(f,e,l,m){var p;p=0;m===g&&(m={});m.roll&&(p=m.roll);if(ca!==g){var b=ca[0],k=ca[1],r=f,v=e,z=Math.cos(k)*Math.sin(f)*Math.sin(b)+Math.cos(f)*(Math.cos(b)*Math.cos(e)+Math.sin(k)*Math.sin(b)*Math.sin(e)),
B=-Math.sin(f)*Math.sin(k)+Math.cos(f)*Math.cos(k)*Math.sin(e);f=Math.cos(k)*Math.cos(b)*Math.sin(f)+Math.cos(f)*(-Math.cos(e)*Math.sin(b)+Math.cos(b)*Math.sin(k)*Math.sin(e));f=Math.asin(Math.max(Math.min(f,1),-1));e=Math.atan2(B,z);b=[Math.cos(r)*(Math.sin(k)*Math.sin(b)*Math.cos(v)-Math.cos(b)*Math.sin(v)),Math.cos(r)*Math.cos(k)*Math.cos(v),Math.cos(r)*(Math.cos(b)*Math.sin(k)*Math.cos(v)+Math.sin(v)*Math.sin(b))];k=[-Math.cos(f)*Math.sin(e),Math.cos(f)*Math.cos(e)];k=Math.acos(Math.max(Math.min((b[0]*
k[0]+b[1]*k[1])/(Math.sqrt(b[0]*b[0]+b[1]*b[1]+b[2]*b[2])*Math.sqrt(k[0]*k[0]+k[1]*k[1])),1),-1));0>b[2]&&(k=2*Math.PI-k);p+=k}if(a||"multires"!=w&&"cubemap"!=w){if("multires"!=w)l=2*Math.atan(Math.tan(0.5*l)/(u.width/u.height)),l=1/Math.tan(0.5*l),a.uniform1f(d.psi,e),a.uniform1f(d.theta,f),a.uniform1f(d.rot,p),a.uniform1f(d.f,l),!0===ha&&"equirectangular"==w&&(a.bindTexture(a.TEXTURE_2D,d.texture),a.texImage2D(a.TEXTURE_2D,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,q)),a.drawArrays(a.TRIANGLES,0,6);else{b=u.width/
u.height;k=2*Math.atan(Math.tan(l/2)*u.height/u.width);k=1/Math.tan(k/2);b=[k/b,0,0,0,0,k,0,0,0,0,100.1/-99.9,20/-99.9,0,0,-1,0];for(k=1;k<q.maxLevel&&u.width>q.tileResolution*Math.pow(2,k-1)*Math.tan(l/2)*0.707;)k++;d.level=k;k=[1,0,0,0,1,0,0,0,1];k=la(k,-p,"z");k=la(k,-f,"x");k=la(k,e,"y");k=[k[0],k[1],k[2],0,k[3],k[4],k[5],0,k[6],k[7],k[8],0,0,0,0,1];a.uniformMatrix4fv(d.perspUniform,!1,new Float32Array(ga(b)));a.uniformMatrix4fv(d.cubeUniform,!1,new Float32Array(ga(k)));b=[b[0]*k[0],b[0]*k[1],
b[0]*k[2],0,b[5]*k[4],b[5]*k[5],b[5]*k[6],0,b[10]*k[8],b[10]*k[9],b[10]*k[10],b[11],-k[8],-k[9],-k[10],0];d.nodeCache.sort(S);if(200<d.nodeCache.length&&d.nodeCache.length>d.currentNodes.length+50)for(k=d.nodeCache.splice(200,d.nodeCache.length-200),p=0;p<k.length;p++)a.deleteTexture(k[p].texture);d.currentNodes=[];k="fbudlr".split("");for(p=0;6>p;p++)r=new J(ma[p],k[p],1,0,0,q.fullpath),ua(b,r,f,e,l);d.currentNodes.sort(fa);for(p=0;p<d.currentNodes.length;p++)if(!d.currentNodes[p].texture){setTimeout(wa(d.currentNodes[p]),
0);break}if(!d.drawInProgress){d.drawInProgress=!0;for(f=0;f<d.currentNodes.length;f++)d.currentNodes[f].textureLoaded&&(a.bindBuffer(a.ARRAY_BUFFER,X),a.bufferData(a.ARRAY_BUFFER,new Float32Array(d.currentNodes[f].vertices),a.STATIC_DRAW),a.vertexAttribPointer(d.vertPosLocation,3,a.FLOAT,!1,0,0),a.bindBuffer(a.ARRAY_BUFFER,na),a.vertexAttribPointer(d.texCoordLocation,2,a.FLOAT,!1,0,0),a.bindTexture(a.TEXTURE_2D,d.currentNodes[f].texture),a.drawElements(a.TRIANGLES,6,a.UNSIGNED_SHORT,0));d.drawInProgress=
!1}}if(m.returnImage!==g)return u.toDataURL("image/png")}else for(p=xa/2,m={f:"translate3d(-"+(p+2)+"px, -"+(p+2)+"px, -"+p+"px)",b:"translate3d("+(p+2)+"px, -"+(p+2)+"px, "+p+"px) rotateX(180deg) rotateZ(180deg)",u:"translate3d(-"+(p+2)+"px, -"+p+"px, "+(p+2)+"px) rotateX(270deg)",d:"translate3d(-"+(p+2)+"px, "+p+"px, -"+(p+2)+"px) rotateX(90deg)",l:"translate3d(-"+p+"px, -"+(p+2)+"px, "+(p+2)+"px) rotateX(180deg) rotateY(90deg) rotateZ(180deg)",r:"translate3d("+p+"px, -"+(p+2)+"px, -"+(p+2)+"px) rotateY(270deg)"},
l=1/Math.tan(l/2),l=l*u.width/(y.devicePixelRatio||1)/2+"px",f="perspective("+l+") translateZ("+l+") rotateX("+f+"rad) rotateY("+e+"rad) ",e=Object.keys(m),p=0;6>p;p++)l=R.querySelector(".pnlm-"+e[p]+"face").style,l.webkitTransform=f+m[e[p]],l.transform=f+m[e[p]]};this.isLoading=function(){if(a&&"multires"==w)for(var g=0;g<d.currentNodes.length;g++)if(!d.currentNodes[g].textureLoaded)return!0;return!1};this.getCanvas=function(){return u};var Fa=function(){function d(){var b=this;this.texture=this.callback=
null;this.image=new Image;this.image.crossOrigin="anonymous";this.image.addEventListener("load",function(){var d=b.image;a.bindTexture(a.TEXTURE_2D,b.texture);a.texImage2D(a.TEXTURE_2D,0,a.RGB,a.RGB,a.UNSIGNED_BYTE,d);a.texParameteri(a.TEXTURE_2D,a.TEXTURE_MAG_FILTER,a.LINEAR);a.texParameteri(a.TEXTURE_2D,a.TEXTURE_MIN_FILTER,a.LINEAR);a.texParameteri(a.TEXTURE_2D,a.TEXTURE_WRAP_S,a.CLAMP_TO_EDGE);a.texParameteri(a.TEXTURE_2D,a.TEXTURE_WRAP_T,a.CLAMP_TO_EDGE);a.bindTexture(a.TEXTURE_2D,null);b.callback(b.texture);
m.length?(d=m.shift(),b.loadTexture(d.src,d.texture,d.callback)):l[g++]=b})}function e(a,b,d){this.src=a;this.texture=b;this.callback=d}var g=4,l={},m=[];d.prototype.loadTexture=function(a,b,d){this.texture=b;this.callback=d;this.image.src=a};for(var b=0;b<g;b++)l[b]=new d;return function(b,d){var f=a.createTexture();g?l[--g].loadTexture(b,f,d):m.push(new e(b,f,d));return f}}()}var m="attribute vec2 a_texCoord;varying vec2 v_texCoord;void main() {gl_Position = vec4(a_texCoord, 0.0, 1.0);v_texCoord = a_texCoord;}",
v="attribute vec3 a_vertCoord;attribute vec2 a_texCoord;uniform mat4 u_cubeMatrix;uniform mat4 u_perspMatrix;varying mediump vec2 v_texCoord;void main(void) {gl_Position = u_perspMatrix * u_cubeMatrix * vec4(a_vertCoord, 1.0);v_texCoord = a_texCoord;}",Ga="precision mediump float;\nuniform float u_aspectRatio;\nuniform float u_psi;\nuniform float u_theta;\nuniform float u_f;\nuniform float u_h;\nuniform float u_v;\nuniform float u_vo;\nuniform float u_rot;\nconst float PI = 3.14159265358979323846264;\nuniform sampler2D u_image;\nuniform samplerCube u_imageCube;\nvarying vec2 v_texCoord;\nuniform vec4 u_backgroundColor;\nvoid main() {\nfloat x = v_texCoord.x * u_aspectRatio;\nfloat y = v_texCoord.y;\nfloat sinrot = sin(u_rot);\nfloat cosrot = cos(u_rot);\nfloat rot_x = x * cosrot - y * sinrot;\nfloat rot_y = x * sinrot + y * cosrot;\nfloat sintheta = sin(u_theta);\nfloat costheta = cos(u_theta);\nfloat a = u_f * costheta - rot_y * sintheta;\nfloat root = sqrt(rot_x * rot_x + a * a);\nfloat lambda = atan(rot_x / root, a / root) + u_psi;\nfloat phi = atan((rot_y * costheta + u_f * sintheta) / root);float cosphi = cos(phi);\ngl_FragColor = textureCube(u_imageCube, vec3(cosphi*sin(lambda), sin(phi), cosphi*cos(lambda)));\n}",
oa="precision mediump float;\nuniform float u_aspectRatio;\nuniform float u_psi;\nuniform float u_theta;\nuniform float u_f;\nuniform float u_h;\nuniform float u_v;\nuniform float u_vo;\nuniform float u_rot;\nconst float PI = 3.14159265358979323846264;\nuniform sampler2D u_image;\nuniform samplerCube u_imageCube;\nvarying vec2 v_texCoord;\nuniform vec4 u_backgroundColor;\nvoid main() {\nfloat x = v_texCoord.x * u_aspectRatio;\nfloat y = v_texCoord.y;\nfloat sinrot = sin(u_rot);\nfloat cosrot = cos(u_rot);\nfloat rot_x = x * cosrot - y * sinrot;\nfloat rot_y = x * sinrot + y * cosrot;\nfloat sintheta = sin(u_theta);\nfloat costheta = cos(u_theta);\nfloat a = u_f * costheta - rot_y * sintheta;\nfloat root = sqrt(rot_x * rot_x + a * a);\nfloat lambda = atan(rot_x / root, a / root) + u_psi;\nfloat phi = atan((rot_y * costheta + u_f * sintheta) / root);lambda = mod(lambda + PI, PI * 2.0) - PI;\nvec2 coord = vec2(lambda / PI, phi / (PI / 2.0));\nif(coord.x < -u_h || coord.x > u_h || coord.y < -u_v + u_vo || coord.y > u_v + u_vo)\ngl_FragColor = u_backgroundColor;\nelse\ngl_FragColor = texture2D(u_image, vec2((coord.x + u_h) / (u_h * 2.0), (-coord.y + u_v + u_vo) / (u_v * 2.0)));\n}",
pa="varying mediump vec2 v_texCoord;uniform sampler2D u_sampler;void main(void) {gl_FragColor = texture2D(u_sampler, v_texCoord);}";return{renderer:function(g,l,m,v){return new ja(g,l,m,v)}}}(window,document);window.requestAnimationFrame||(window.requestAnimationFrame=function(){return window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(y,l){window.setTimeout(y,1E3/60)}}());
window.pannellum=function(y,l,g){function ja(m,v){function Ga(){var x=l.createElement("div");x.innerHTML="\x3c!--[if lte IE 9]><i></i><![endif]--\x3e";if(1==x.getElementsByTagName("i").length)S();else{ya=c.hfov;za=c.pitch;var a;if("cubemap"==c.type)for(M=[],x=0;6>x;x++)M.push(new Image),M[x].crossOrigin="anonymous";else if("multires"==c.type)x=JSON.parse(JSON.stringify(c.multiRes)),c.basePath&&c.multiRes.basePath&&!/^(?:[a-z]+:)?\/\//i.test(c.multiRes.basePath)?x.basePath=c.basePath+c.multiRes.basePath:
c.multiRes.basePath?x.basePath=c.multiRes.basePath:c.basePath&&(x.basePath=c.basePath),M=x;else if(!0===c.dynamic)M=c.panorama;else{if(c.panorama===g){S("No panorama image was specified.");return}M=new Image}if("cubemap"==c.type)for(var b=6,d=function(){b--;0===b&&pa()},e=function(a){var x=l.createElement("a");x.href=a.target.src;x.innerHTML=x.href;S("The file "+x.outerHTML+" could not be accessed.")},x=0;x<M.length;x++)M[x].onload=d,M[x].onerror=e,a=c.cubeMap[x],c.basePath&&!oa(a)&&(a=c.basePath+
a),M[x].src=encodeURI(a);else if("multires"==c.type)pa();else if(a="",c.basePath&&(a=c.basePath),!0!==c.dynamic){a=oa(c.panorama)?c.panorama:a+c.panorama;M.onload=function(){y.URL.revokeObjectURL(this.src);pa()};var f=new XMLHttpRequest;f.onloadend=function(){if(200!=f.status){var x=l.createElement("a");x.href=encodeURI(a);x.innerHTML=x.href;S("The file "+x.outerHTML+" could not be accessed.")}aa(this.response)};f.onprogress=function(a){a.lengthComputable&&(1E6<a.total?((a.loaded/1E6).toFixed(2),
(a.total/1E6).toFixed(2)):1E3<a.total&&((a.loaded/1E3).toFixed(1),(a.total/1E3).toFixed(1)))};try{f.open("GET",a,!0)}catch(k){S("\u0427\u0442\u043e-\u0442\u043e \u043d\u0435 \u0442\u0430\u043a \u0441 \u043f\u0430\u043d\u043e\u0440\u0430\u043c\u043e\u0439.")}f.responseType="blob";f.setRequestHeader("Accept","image/*,*/*;q=0.9");f.send()}m.classList.add("pnlm-grab");m.classList.remove("pnlm-grabbing")}}function oa(a){return/^(?:[a-z]+:)?\/\//i.test(a)||"/"==a[0]||"blob:"==a.slice(0,5)}function pa(){C||
(C=new libpannellum.renderer(G));Ma||(Ma=!0,F.addEventListener("mousedown",ua,!1),l.addEventListener("mousemove",la,!1),l.addEventListener("mouseup",ga,!1),c.mouseZoom&&(m.addEventListener("mousewheel",L,!1),m.addEventListener("DOMMouseScroll",L,!1)),m.addEventListener("mozfullscreenchange",z,!1),m.addEventListener("webkitfullscreenchange",z,!1),m.addEventListener("msfullscreenchange",z,!1),m.addEventListener("fullscreenchange",z,!1),y.addEventListener("resize",ha,!1),y.addEventListener("orientationchange",
ha,!1),m.addEventListener("keydown",xa,!1),m.addEventListener("keyup",ma,!1),m.addEventListener("blur",R,!1),l.addEventListener("mouseleave",ga,!1),F.addEventListener("touchstart",wa,!1),F.addEventListener("touchmove",ba,!1),F.addEventListener("touchend",u,!1),F.addEventListener("pointerdown",d,!1),F.addEventListener("pointermove",a,!1),F.addEventListener("pointerup",K,!1),F.addEventListener("pointerleave",K,!1),y.navigator.pointerEnabled&&(m.style.touchAction="none"));f();setTimeout(function(){},
500)}function aa(a){var h=new FileReader;h.addEventListener("loadend",function(){var b=h.result;if(navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad).* os 8_/)){var d=b.indexOf("\u00ff\u00c2");(0>d||65536<d)&&S("Due to iOS 8's broken WebGL implementation, only progressive encoded JPEGs work for your device (this panorama uses standard encoding).")}d=b.indexOf("<x:xmpmeta");if(-1<d&&!0!==c.ignoreGPanoXMP){var e=b.substring(d,b.indexOf("</x:xmpmeta>")+12),f=function(a){var x;0<=e.indexOf(a+
'="')?(x=e.substring(e.indexOf(a+'="')+a.length+2),x=x.substring(0,x.indexOf('"'))):0<=e.indexOf(a+">")&&(x=e.substring(e.indexOf(a+">")+a.length+1),x=x.substring(0,x.indexOf("<")));return x!==g?Number(x):null},b=f("GPano:FullPanoWidthPixels"),d=f("GPano:CroppedAreaImageWidthPixels"),k=f("GPano:FullPanoHeightPixels"),l=f("GPano:CroppedAreaImageHeightPixels"),m=f("GPano:CroppedAreaTopPixels"),n=f("GPano:PoseHeadingDegrees"),p=f("GPano:PosePitchDegrees"),f=f("GPano:PoseRollDegrees");null!==b&&null!==
d&&null!==k&&null!==l&&null!==m&&(0>W.indexOf("haov")&&(c.haov=d/b*360),0>W.indexOf("vaov")&&(c.vaov=l/k*180),0>W.indexOf("vOffset")&&(c.vOffset=-180*((m+l/2)/k-0.5)),null!==n&&0>W.indexOf("northOffset")&&(c.northOffset=n,!1!==c.compass&&(c.compass=!0)),null!==p&&null!==f&&(0>W.indexOf("horizonPitch")&&(c.horizonPitch=p),0>W.indexOf("horizonRoll")&&(c.horizonRoll=f)))}M.src=y.URL.createObjectURL(a)});h.readAsBinaryString!==g?h.readAsBinaryString(a):h.readAsText(a)}function S(a){a===g&&(a="\u0422\u0432\u043e\u0439 \u0431\u0440\u0430\u0443\u0437\u0435\u0440 \u043d\u0435 \u043f\u043e\u0434\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u0435\u0442 \u0432 \u0434\u043e\u0441\u0442\u0430\u0442\u043e\u0447\u043d\u043e\u0439 \u0441\u0442\u0435\u043f\u0435\u043d\u0438 \u0442\u0435\u0445\u043d\u043e\u043b\u043e\u0433\u0438\u044e WebGL");
A.errorMsg.innerHTML="<p>"+a+"</p>";s.load.style.display="none";$(A.load.box).fadeOut(500);$(A.errorMsg).fadeIn(500);Ha=!0;G.style.display="none";qa("error",a)}function fa(a){var h=J(a);Y.style.left=h.x+"px";Y.style.top=h.y+"px";clearTimeout(fa.t1);clearTimeout(fa.t2);Y.style.display="block";Y.style.opacity=1;fa.t1=setTimeout(function(){Y.style.opacity=0},2E3);fa.t2=setTimeout(function(){Y.style.display="none"},2500);a.preventDefault()}function J(a){var h=m.getBoundingClientRect(),c={};c.x=a.clientX-
h.left;c.y=a.clientY-h.top;return c}function ua(a){a.preventDefault();m.focus();if(N){var h=J(a);if(c.hotSpotDebug){var b=va(a);console.log("Pitch: "+b[0]+", Yaw: "+b[1]+", Center Pitch: "+c.pitch+", Center Yaw: "+c.yaw+", HFOV: "+c.hfov)}Da();I();c.roll=0;t.hfov=0;da=!0;P=Date.now();ra=h.x;sa=h.y;Ia=c.yaw;Ja=c.pitch;m.classList.add("pnlm-grabbing");m.classList.remove("pnlm-grab");qa("mousedown",a);E()}}function va(a){var h=J(a);a=C.getCanvas();var b=a.width/(y.devicePixelRatio||1),d=a.height/(y.devicePixelRatio||
1);a=h.x/b*2-1;var d=(1-h.y/d*2)*d/b,e=1/Math.tan(c.hfov*Math.PI/360),g=Math.sin(c.pitch*Math.PI/180),f=Math.cos(c.pitch*Math.PI/180),h=e*f-d*g,b=Math.sqrt(a*a+h*h),d=180*Math.atan((d*f+e*g)/b)/Math.PI;a=180*Math.atan2(a/b,h/b)/Math.PI+c.yaw;return[d,a]}function la(a){if(da&&N){P=Date.now();var h=C.getCanvas(),b=h.width/(y.devicePixelRatio||1),h=h.height/(y.devicePixelRatio||1);a=J(a);var d=180*(Math.atan(ra/b*2-1)-Math.atan(a.x/b*2-1))/Math.PI*c.hfov/90+Ia;t.yaw=(d-c.yaw)%360*0.2;c.yaw=d;b=360*Math.atan(Math.tan(c.hfov/
360*Math.PI)*h/b)/Math.PI;b=180*(Math.atan(a.y/h*2-1)-Math.atan(sa/h*2-1))/Math.PI*b/90+Ja;t.pitch=0.2*(b-c.pitch);c.pitch=b}}function ga(a){da&&(da=!1,15<Date.now()-P&&(t.pitch=t.yaw=0),m.classList.add("pnlm-grab"),m.classList.remove("pnlm-grabbing"),P=Date.now(),qa("mouseup",a))}function wa(a){if(N){Da();I();c.roll=0;t.hfov=0;var h=J(a.targetTouches[0]);ra=h.x;sa=h.y;2==a.targetTouches.length&&(a=J(a.targetTouches[1]),ra+=0.5*(a.x-h.x),sa+=0.5*(a.y-h.y),Aa=Math.sqrt((h.x-a.x)*(h.x-a.x)+(h.y-a.y)*
(h.y-a.y)));da=!0;P=Date.now();Ia=c.yaw;Ja=c.pitch;E()}}function ba(a){a.preventDefault();N&&(P=Date.now());if(da&&N){var h=J(a.targetTouches[0]),b=h.x,d=h.y;2==a.targetTouches.length&&-1!=Aa&&(a=J(a.targetTouches[1]),b+=0.5*(a.x-h.x),d+=0.5*(a.y-h.y),h=Math.sqrt((h.x-a.x)*(h.x-a.x)+(h.y-a.y)*(h.y-a.y)),Q(c.hfov+0.1*(Aa-h)),Aa=h);h=c.hfov/360;b=(ra-b)*h+Ia;t.yaw=(b-c.yaw)%360*0.2;c.yaw=b;d=(d-sa)*h+Ja;t.pitch=0.2*(d-c.pitch);c.pitch=d}}function u(){da=!1;150<Date.now()-P&&(t.pitch=t.yaw=0);Aa=-1;
P=Date.now()}function d(a){"touch"==a.pointerType&&(ea.push(a.pointerId),Ba.push({clientX:a.clientX,clientY:a.clientY}),a.targetTouches=Ba,wa(a),a.preventDefault())}function a(a){if("touch"==a.pointerType)for(var c=0;c<ea.length;c++)if(a.pointerId==ea[c]){Ba[c]={clientX:a.clientX,clientY:a.clientY};a.targetTouches=Ba;ba(a);break}}function K(a){if("touch"==a.pointerType){for(var c=!1,b=0;b<ea.length;b++)a.pointerId==ea[b]&&(ea[b]=g),ea[b]&&(c=!0);c||(ea=[],Ba=[],u());a.preventDefault()}}function L(a){a.preventDefault();
N&&(Da(),P=Date.now(),a.wheelDeltaY?(Q(c.hfov-0.05*a.wheelDeltaY),t.hfov=0>a.wheelDelta?1:-1):a.wheelDelta?(Q(c.hfov-0.05*a.wheelDelta),t.hfov=0>a.wheelDelta?1:-1):a.detail&&(Q(c.hfov+1.5*a.detail),t.hfov=0<a.detail?1:-1),E())}function xa(a){a.preventDefault();Da();P=Date.now();I();c.roll=0;var h=a.keycode;a.which&&(h=a.which);27==h?Ka&&ka():ca(h,!0)}function R(){for(var a=0;10>a;a++)n[a]=!1}function ma(a){a.preventDefault();var c=a.keycode;a.which&&(c=a.which);ca(c,!1)}function ca(a,c){var b=!1;
switch(a){case 109:case 189:case 17:n[0]!=c&&(b=!0);n[0]=c;break;case 107:case 187:case 16:n[1]!=c&&(b=!0);n[1]=c;break;case 38:n[2]!=c&&(b=!0);n[2]=c;break;case 87:n[6]!=c&&(b=!0);n[6]=c;break;case 40:n[3]!=c&&(b=!0);n[3]=c;break;case 83:n[7]!=c&&(b=!0);n[7]=c;break;case 37:n[4]!=c&&(b=!0);n[4]=c;break;case 65:n[8]!=c&&(b=!0);n[8]=c;break;case 39:n[5]!=c&&(b=!0);n[5]=c;break;case 68:n[9]!=c&&(b=!0),n[9]=c}b&&c&&(Z="undefined"!==typeof performance&&performance.now()?performance.now():Date.now(),E())}
function q(){if(N){var a=!1,h=c.pitch,b=c.yaw,d=c.hfov,e;e="undefined"!==typeof performance&&performance.now()?performance.now():Date.now();Z===g&&(Z=e);var f=(e-Z)*c.hfov/1700,f=Math.min(f,1);n[0]&&!0===c.keyboardZoom&&(Q(c.hfov+(0.8*t.hfov+0.5)*f),a=!0);n[1]&&!0===c.keyboardZoom&&(Q(c.hfov+(0.8*t.hfov-0.2)*f),a=!0);if(n[2]||n[6])c.pitch+=(0.8*t.pitch+0.2)*f,a=!0;if(n[3]||n[7])c.pitch+=(0.8*t.pitch-0.2)*f,a=!0;if(n[4]||n[8])c.yaw+=(0.8*t.yaw-0.2)*f,a=!0;if(n[5]||n[9])c.yaw+=(0.8*t.yaw+0.2)*f,a=!0;
a&&(P=Date.now());Date.now();if(c.autoRotate){if(0.001<e-Z){var a=(e-Z)/1E3,k=(t.yaw/a*f-0.2*c.autoRotate)*a,k=Math.sign(-c.autoRotate)*Math.min(Math.abs(c.autoRotate*a),Math.abs(k));c.yaw+=k}c.autoRotateStopDelay&&(c.autoRotateStopDelay-=e-Z,0>=c.autoRotateStopDelay&&(c.autoRotateStopDelay=!1,T=c.autoRotate,c.autoRotate=0))}H.pitch&&(w("pitch"),h=c.pitch);H.yaw&&(w("yaw"),b=c.yaw);H.hfov&&(w("hfov"),d=c.hfov);0<f&&!c.autoRotate&&(n[4]||n[5]||n[8]||n[9]||H.yaw||(c.yaw+=t.yaw*f*0.85),n[2]||n[3]||n[6]||
n[7]||H.pitch||(c.pitch+=t.pitch*f*0.85),n[0]||n[1]||H.hfov||Q(c.hfov+t.hfov*f*0.85));Z=e;0<f&&(t.yaw=0.8*t.yaw+(c.yaw-b)/f*0.2,t.pitch=0.8*t.pitch+(c.pitch-h)/f*0.2,t.hfov=0.8*t.hfov+(c.hfov-d)/f*0.2,h=c.autoRotate?Math.abs(c.autoRotate):5,t.yaw=Math.min(h,Math.max(t.yaw,-h)),t.pitch=Math.min(h,Math.max(t.pitch,-h)),t.hfov=Math.min(h,Math.max(t.hfov,-h)));n[0]&&n[0]&&(t.hfov=0);(n[2]||n[6])&&(n[3]||n[7])&&(t.pitch=0);(n[4]||n[8])&&(n[5]||n[9])&&(t.yaw=0)}}function w(a){var h=H[a],b=Math.min(1,Math.max((Date.now()-
h.startTime)/1E3/(h.duration/1E3),0)),b=h.startPosition+(0.5>b?2*b*b:-1+(4-2*b)*b)*(h.endPosition-h.startPosition);if(h.endPosition>h.startPosition&&b>=h.endPosition||h.endPosition<h.startPosition&&b<=h.endPosition)b=h.endPosition,t[a]=0,delete H[a];c[a]=b}function ha(){z()}function E(){Na||(Na=!0,X())}function X(){na();Oa&&clearTimeout(Oa);if(da)requestAnimationFrame(X);else if(n[0]||n[1]||n[2]||n[3]||n[4]||n[5]||n[6]||n[7]||n[8]||n[9]||c.autoRotate||H.pitch||H.yaw||H.hfov||0.01<Math.abs(t.yaw)||
0.01<Math.abs(t.pitch)||0.01<Math.abs(t.hfov))q(),0<=c.autoRotateInactivityDelay&&T&&Date.now()-P>c.autoRotateInactivityDelay&&!c.autoRotate&&(c.autoRotate=T,La.lookAt(za,g,ya,3E3)),requestAnimationFrame(X);else if(C&&(C.isLoading()||!0===c.dynamic&&Ua))requestAnimationFrame(X);else{Na=!1;Z=g;var a=c.autoRotateInactivityDelay-(Date.now()-P);0<a?Oa=setTimeout(function(){c.autoRotate=T;La.lookAt(za,g,ya,3E3);E()},a):0<=c.autoRotateInactivityDelay&&T&&(c.autoRotate=T,La.lookAt(za,g,ya,3E3),E())}}function na(){var a;
if(N){180<c.yaw?c.yaw-=360:-180>c.yaw&&(c.yaw+=360);a=c.yaw;var h=c.maxYaw-c.minYaw,d=-180,e=180;360>h&&(d=c.minYaw+c.hfov/2,e=c.maxYaw-c.hfov/2,h<c.hfov&&(h=c.hfov-h,d-=h,e+=h));c.yaw=Math.max(d,Math.min(e,c.yaw));!1!==c.autoRotate&&a!=c.yaw&&(c.autoRotate*=-1);h=C.getCanvas();h=2*Math.atan(Math.tan(c.hfov/180*Math.PI*0.5)/(h.width/h.height))/Math.PI*180;a=c.minPitch+h/2;d=c.maxPitch-h/2;e=c.maxPitch-c.minPitch;e<h&&(h-=e,a-=h,d+=h);isNaN(a)&&(a=-90);isNaN(d)&&(d=90);c.pitch=Math.max(a,Math.min(d,
c.pitch));C.render(c.pitch*Math.PI/180,c.yaw*Math.PI/180,c.hfov*Math.PI/180,{roll:c.roll*Math.PI/180});c.hotSpots.forEach(b);c.compass&&(Ca.style.transform="rotate("+(-c.yaw-c.northOffset)+"deg)",Ca.style.webkitTransform="rotate("+(-c.yaw-c.northOffset)+"deg)")}}function V(a,c,b,d){this.w=a;this.x=c;this.y=b;this.z=d}function Fa(a){var h;h=a.alpha;var b=a.beta;a=a.gamma;b=[b?b*Math.PI/180/2:0,a?a*Math.PI/180/2:0,h?h*Math.PI/180/2:0];h=[Math.cos(b[0]),Math.cos(b[1]),Math.cos(b[2])];b=[Math.sin(b[0]),
Math.sin(b[1]),Math.sin(b[2])];h=new V(h[0]*h[1]*h[2]-b[0]*b[1]*b[2],b[0]*h[1]*h[2]-h[0]*b[1]*b[2],h[0]*b[1]*h[2]+b[0]*h[1]*b[2],h[0]*h[1]*b[2]+b[0]*b[1]*h[2]);h=h.multiply(new V(Math.sqrt(0.5),-Math.sqrt(0.5),0,0));b=y.orientation?-y.orientation*Math.PI/180/2:0;h=h.multiply(new V(Math.cos(b),0,-Math.sin(b),0)).toEulerAngles();c.pitch=h[0]/Math.PI*180;c.roll=-h[1]/Math.PI*180;c.yaw=-h[2]/Math.PI*180+c.northOffset;X()}function f(){try{var a={};c.horizonPitch!==g&&(a.horizonPitch=c.horizonPitch*Math.PI/
180);c.horizonRoll!==g&&(a.horizonRoll=c.horizonRoll*Math.PI/180);c.backgroundColor!==g&&(a.backgroundColor=c.backgroundColor);C.init(M,c.type,c.dynamic,c.haov*Math.PI/180,c.vaov*Math.PI/180,c.vOffset*Math.PI/180,e,a);!0!==c.dynamic&&(M=g)}catch(b){if("webgl error"==b.type||"no webgl"==b.type)S();else if("webgl size error"==b.type)S("This panorama is too big for your device! It's "+b.width+"px wide, but your device only supports images up to "+b.maxWidth+"px wide. Try another device. (If you're the author, try scaling down the image.)");
else throw S("Unknown error. Check developer console."),b;}}function e(){if(c.sceneFadeDuration&&C.fadeImg!==g){C.fadeImg.style.opacity=0;var a=C.fadeImg;delete C.fadeImg;setTimeout(function(){G.removeChild(a)},c.sceneFadeDuration)}Ca.style.display=c.compass?"inline":"none";ta();$(A.load.box).fadeOut(300);ia!==g&&(G.removeChild(ia),ia=g);N=!0;qa("load");E()}function ja(a){a.pitch=Number(a.pitch)||0;a.yaw=Number(a.yaw)||0;var b=l.createElement("div");b.className="pnlm-hotspot-base";b.className=a.cssClass?
b.className+(" "+a.cssClass):b.className+(" pnlm-hotspot pnlm-sprite pnlm-"+Ea(a.type));var d=l.createElement("span");a.text&&(d.innerHTML=Ea(a.text));var e;if(a.video){e=l.createElement("video");var f=a.video;c.basePath&&!oa(f)&&(f=c.basePath+f);e.src=encodeURI(f);e.controls=!0;e.style.width=a.width+"px";G.appendChild(b);d.appendChild(e)}else if(a.image){f=a.image;c.basePath&&!oa(f)&&(f=c.basePath+f);e=l.createElement("a");e.href=encodeURI(a.URL?a.URL:f);e.target="_blank";d.appendChild(e);var g=
l.createElement("img");g.src=encodeURI(f);g.style.width=a.width+"px";g.style.paddingTop="5px";G.appendChild(b);e.appendChild(g);d.style.maxWidth="initial"}else a.URL?(e=l.createElement("a"),e.href=encodeURI(a.URL),e.target="_blank",G.appendChild(e),b.style.cursor="pointer",d.style.cursor="pointer",e.appendChild(b)):(a.sceneId&&(b.onclick=function(){D(a.sceneId,a.targetPitch,a.targetYaw,a.targetHfov);return!1},b.ontouchend=function(){D(a.sceneId,a.targetPitch,a.targetYaw,a.targetHfov);return!1},b.style.cursor=
"pointer",d.style.cursor="pointer"),G.appendChild(b));if(a.createTooltipFunc)a.createTooltipFunc(b,a.createTooltipArgs);else if(a.text||a.video||a.image)b.classList.add("pnlm-tooltip"),b.appendChild(d),d.style.width=d.scrollWidth-20+"px",d.style.marginLeft=-(d.scrollWidth-b.offsetWidth)/2+"px",d.style.marginTop=-d.scrollHeight-12+"px";a.clickHandlerFunc&&(b.addEventListener("click",function(c){a.clickHandlerFunc(c,a.clickHandlerArgs)},"false"),b.style.cursor="pointer",d.style.cursor="pointer");a.div=
b}function ta(){Pa||(c.hotSpots?(c.hotSpots=c.hotSpots.sort(function(a,c){return a.pitch<c.pitch}),c.hotSpots.forEach(ja)):c.hotSpots=[],Pa=!0,c.hotSpots.forEach(b))}function p(){if(c.hotSpots)for(var a=0;a<c.hotSpots.length;a++){for(var b=c.hotSpots[a].div;b.parentNode!=G;)b=b.parentNode;G.removeChild(b);delete c.hotSpots[a].div}Pa=!1;delete c.hotSpots}function b(a){var b=Math.sin(a.pitch*Math.PI/180),d=Math.cos(a.pitch*Math.PI/180),e=Math.sin(c.pitch*Math.PI/180),f=Math.cos(c.pitch*Math.PI/180),
g=Math.cos((-a.yaw+c.yaw)*Math.PI/180),k=b*e+d*g*f;if(90>=a.yaw&&-90<a.yaw&&0>=k||(90<a.yaw||-90>=a.yaw)&&0>=k)a.div.style.visibility="hidden";else{var l=Math.sin((-a.yaw+c.yaw)*Math.PI/180),m=Math.tan(c.hfov*Math.PI/360);a.div.style.visibility="visible";var n=C.getCanvas(),p=n.width/(y.devicePixelRatio||1),n=n.height/(y.devicePixelRatio||1),b=[-p/m*l*d/k/2,-p/m*(b*f-d*g*e)/k/2],d=Math.sin(c.roll*Math.PI/180),e=Math.cos(c.roll*Math.PI/180),b=[b[0]*e-b[1]*d,b[0]*d+b[1]*e];b[0]+=(p-a.div.offsetWidth)/
2;b[1]+=(n-a.div.offsetHeight)/2;p="translate("+b[0]+"px, "+b[1]+"px) translateZ(9999px) rotate("+c.roll+"deg)";a.div.style.webkitTransform=p;a.div.style.MozTransform=p;a.div.style.transform=p}}function k(a){c={};var b,d="haov vaov vOffset northOffset horizonPitch horizonRoll".split(" ");W=[];for(b in Qa)Qa.hasOwnProperty(b)&&(c[b]=Qa[b]);for(b in v.default)v.default.hasOwnProperty(b)&&(c[b]=v.default[b],0<=d.indexOf(b)&&W.push(b));if(null!==a&&""!==a&&v.scenes&&v.scenes[a]){var e=v.scenes[a];for(b in e)e.hasOwnProperty(b)&&
(c[b]=e[b],0<=d.indexOf(b)&&W.push(b));c.scene=a}for(b in v)v.hasOwnProperty(b)&&(c[b]=v[b],0<=d.indexOf(b)&&W.push(b))}function r(){if("preview"in c){var a=c.preview;c.basePath&&(a=c.basePath+a);ia=l.createElement("div");ia.className="pnlm-preview-img";ia.style.backgroundImage="url('"+encodeURI(a)+"')";G.appendChild(ia)}c.hasOwnProperty("title")||(A.title.innerHTML="");c.hasOwnProperty("author")||(A.author.innerHTML="");c.hasOwnProperty("title")||c.hasOwnProperty("author")||(A.container.style.display=
"none");for(var b in c)if(c.hasOwnProperty(b))switch(b){case "title":A.title.innerHTML=Ea(c[b]);A.container.style.display="inline";break;case "author":A.author.innerHTML="by "+Ea(c[b]);A.container.style.display="inline";break;case "fallback":A.errorMsg.innerHTML='<p>\u0412\u0430\u0448 \u0431\u0440\u0430\u0443\u0437\u0435\u0440 \u043d\u0435 \u043f\u043e\u0434\u0434\u0435\u0440\u0436\u0438\u0432\u0430\u0435\u0442 WebGL.<br><a href="'+encodeURI(c[b])+'" target="_blank">\u041d\u0430\u0436\u043c\u0438 \u0447\u0442\u043e\u0431\u044b \u043f\u043e\u043f\u0440\u043e\u0431\u043e\u0432\u0430\u0442\u044c \u043e\u0442\u043a\u0440\u044b\u0442\u044c \u043f\u0430\u043d\u043e\u0440\u0430\u043c\u0443 \u0432 \u0430\u043b\u044c\u0442\u0435\u0440\u043d\u0430\u0442\u0438\u0432\u043d\u043e\u043c \u043f\u0440\u043e\u0441\u043c\u043e\u0442\u0440\u0449\u0438\u043a\u0435.</a></p>';
break;case "hfov":Q(Number(c[b]));break;case "autoLoad":!0===c[b]&&C===g&&($(A.load.box).fadeIn(500),s.load.style.display="none",Ga());break;case "showZoomCtrl":s.zoom.style.display=c[b]&&!1!=c.showControls?"block":"none";break;case "showFullscreenCtrl":s.fullscreen.style.display=c[b]&&!1!=c.showControls&&("fullscreen"in l||"mozFullScreen"in l||"webkitIsFullScreen"in l||"msFullscreenElement"in l)?"block":"none";break;case "hotSpotDebug":Ra.style.display=c[b]?"block":"none";break;case "showControls":c[b]||
(s.orientation.style.display="none",s.zoom.style.display="none",s.fullscreen.style.display="none");break;case "orientationOnByDefault":c[b]&&Ta()}}function ka(){if(N&&!Ha)if(Ka)l.exitFullscreen?l.exitFullscreen():l.mozCancelFullScreen?l.mozCancelFullScreen():l.webkitCancelFullScreen?l.webkitCancelFullScreen():l.msExitFullscreen&&l.msExitFullscreen();else try{m.requestFullscreen?m.requestFullscreen():m.mozRequestFullScreen?m.mozRequestFullScreen():m.msRequestFullscreen?m.msRequestFullscreen():m.webkitRequestFullScreen()}catch(a){}}
function z(){l.fullscreen||l.mozFullScreen||l.webkitIsFullScreen||l.msFullscreenElement?(s.fullscreen.classList.add("pnlm-fullscreen-toggle-button-active"),Ka=!0):(s.fullscreen.classList.remove("pnlm-fullscreen-toggle-button-active"),Ka=!1);C.resize();Q(c.hfov);E()}function B(a){var b=c.minHfov;"multires"==c.type&&C&&(b=Math.min(b,C.getCanvas().width/(c.multiRes.cubeResolution/90*0.9)));return b>c.maxHfov?(console.log("HFOV bounds do not make sense (minHfov > maxHfov)."),c.hfov):a<b?b:a>c.maxHfov?
c.maxHfov:a}function Q(a){c.hfov=B(a)}function Da(){H={};T=c.autoRotate?c.autoRotate:T;c.autoRotate=!1}function O(){Ha&&($(A.load.box).fadeOut(500),$(A.errorMsg).fadeOut(500),Ha=!1,qa("errorcleared"));s.load.style.display="none";$(A.load.box).fadeIn(500);Ga()}function D(a,b,d,e,f){N=!1;H={};var l,m;c.sceneFadeDuration&&!f?(f=new Image,f.className="pnlm-fade-img",f.style.transition="opacity "+c.sceneFadeDuration/1E3+"s",f.style.width="100%",f.style.height="100%",f.onload=function(){D(a,b,d,e,!0)},
l=C.render(c.pitch*Math.PI/180,c.yaw*Math.PI/180,c.hfov*Math.PI/180,{returnImage:!0}),l!==g&&(f.src=l),G.appendChild(f),C.fadeImg=f):(f="same"===b?c.pitch:b,l="same"===d?c.yaw:"sameAzimuth"===d?c.yaw+c.northOffset-v.scenes[a].northOffset:d,m="same"===e?c.hfov:e,p(),k(a),t.yaw=t.pitch=t.hfov=0,r(),f!==g&&(c.pitch=f),l!==g&&(c.yaw=l),m!==g&&(c.hfov=m),qa("scenechange",a),O())}function I(){y.removeEventListener("deviceorientation",Fa);s.orientation.classList.remove("pnlm-orientation-button-active");
Sa=!1}function Ta(){Sa=!0;y.addEventListener("deviceorientation",Fa);s.orientation.classList.add("pnlm-orientation-button-active")}function Ea(a){return String(a).replace(/&/g,"&amp;").replace('"',"&quot;").replace("'","&#39;").replace("<","&lt;").replace(">","&gt;").replace("/","&#x2f;")}function qa(a){if(a in U)for(var b=0;b<U[a].length;b++)U[a][b].apply(null,[].slice.call(arguments,1))}var La=this,c,C,ia,da=!1,P=Date.now(),ra=0,sa=0,Aa=-1,Ia=0,Ja=0,n=Array(10),Ka=!1,N=!1,Ha=!1,Ma=!1,M,Z,t={yaw:0,
pitch:0,hfov:0},Na=!1,Sa=!1,Oa,T=0,ya,za,H={},U={},W=[],Ua=!1,Pa=!1,Qa={hfov:100,minHfov:50,maxHfov:120,pitch:0,minPitch:g,maxPitch:g,yaw:0,minYaw:-180,maxYaw:180,roll:0,haov:360,vaov:180,vOffset:0,autoRotate:!1,autoRotateInactivityDelay:-1,autoRotateStopDelay:g,type:"equirectangular",northOffset:0,showFullscreenCtrl:!0,dynamic:!1,keyboardZoom:!0,mouseZoom:!0,showZoomCtrl:!0,autoLoad:!1,showControls:!0,orientationOnByDefault:!1,hotSpotDebug:!1,backgroundColor:[0,0,0]};m="string"===typeof m?l.getElementById(m):
m;m.classList.add("pnlm-container");m.tabIndex=0;var G=l.createElement("div");G.className="pnlm-render-container";m.appendChild(G);var F=l.createElement("div");F.className="pnlm-dragfix";m.appendChild(F);var Y=l.createElement("span");Y.className="pnlm-about-msg";Y.innerHTML='<a href="https://outsourcing.house/" target="_blank">Outsourcing House</a>';m.appendChild(Y);F.addEventListener("contextmenu",fa);var A={},Ra=l.createElement("div");Ra.className="pnlm-sprite pnlm-hot-spot-debug-indicator";m.appendChild(Ra);
A.container=l.createElement("div");A.container.className="pnlm-panorama-info";A.title=l.createElement("div");A.title.className="pnlm-title-box";A.container.appendChild(A.title);A.author=l.createElement("div");A.author.className="pnlm-author-box";A.container.appendChild(A.author);m.appendChild(A.container);A.load={};A.load.box=l.createElement("div");A.load.box.className="pnlm-load-box";A.load.box.innerHTML='<div class="pano-loader"></div>';m.appendChild(A.load.box);A.errorMsg=l.createElement("div");
A.errorMsg.className="pnlm-error-msg pnlm-info-box";m.appendChild(A.errorMsg);var s={};s.container=l.createElement("div");s.container.className="pnlm-controls-container";m.appendChild(s.container);s.load=l.createElement("div");s.load.className="pnlm-load-button";s.load.innerHTML="<p>\u041d\u0430\u0436\u043c\u0438<br>\u0447\u0442\u043e\u0431\u044b \u0437\u0430\u0433\u0440\u0443\u0437\u0438\u0442\u044c<br>\u041f\u0430\u043d\u043e\u0440\u0430\u043c\u0443<p>";s.load.addEventListener("click",O);m.appendChild(s.load);
s.zoom=l.createElement("div");s.zoom.className="pnlm-zoom-controls pnlm-controls";s.zoomIn=l.createElement("div");s.zoomIn.className="pnlm-zoom-in pnlm-sprite pnlm-control";s.zoomIn.addEventListener("click",function(){N&&(Q(c.hfov-5),E())});s.zoom.appendChild(s.zoomIn);s.zoomOut=l.createElement("div");s.zoomOut.className="pnlm-zoom-out pnlm-sprite pnlm-control";s.zoomOut.addEventListener("click",function(){N&&(Q(c.hfov+5),E())});s.zoom.appendChild(s.zoomOut);s.container.appendChild(s.zoom);s.fullscreen=
l.createElement("div");s.fullscreen.addEventListener("click",ka);s.fullscreen.className="pnlm-fullscreen-toggle-button pnlm-sprite pnlm-fullscreen-toggle-button-inactive pnlm-controls pnlm-control";(l.fullscreenEnabled||l.mozFullScreenEnabled||l.webkitFullscreenEnabled||l.msFullscreenEnabled)&&s.container.appendChild(s.fullscreen);s.orientation=l.createElement("div");s.orientation.addEventListener("click",function(a){Sa?I():Ta()});s.orientation.addEventListener("mousedown",function(a){a.stopPropagation()});
s.orientation.addEventListener("touchstart",function(a){a.stopPropagation()});s.orientation.addEventListener("pointerdown",function(a){a.stopPropagation()});s.orientation.className="pnlm-orientation-button pnlm-orientation-button-inactive pnlm-sprite pnlm-controls pnlm-control";y.DeviceOrientationEvent&&y.addEventListener("deviceorientation",function(a){y.removeEventListener("deviceorientation",this);a&&null!==a.alpha&&null!==a.beta&&null!==a.gamma&&s.container.appendChild(s.orientation)});var Ca=
l.createElement("div");Ca.className="pnlm-compass pnlm-controls pnlm-control";m.appendChild(Ca);v.firstScene?k(v.firstScene):v.default&&v.default.firstScene?k(v.default.firstScene):k(null);r();var ea=[],Ba=[];V.prototype.multiply=function(a){return new V(this.w*a.w-this.x*a.x-this.y*a.y-this.z*a.z,this.x*a.w+this.w*a.x+this.y*a.z-this.z*a.y,this.y*a.w+this.w*a.y+this.z*a.x-this.x*a.z,this.z*a.w+this.w*a.z+this.x*a.y-this.y*a.x)};V.prototype.toEulerAngles=function(){var a=Math.atan2(2*(this.w*this.x+
this.y*this.z),1-2*(this.x*this.x+this.y*this.y)),b=Math.asin(2*(this.w*this.y-this.z*this.x)),c=Math.atan2(2*(this.w*this.z+this.x*this.y),1-2*(this.y*this.y+this.z*this.z));return[a,b,c]};this.getPitch=function(){return c.pitch};this.setPitch=function(a,b){(b=b==g?1E3:Number(b))?H.pitch={startTime:Date.now(),startPosition:c.pitch,endPosition:a,duration:b}:c.pitch=a;E();return this};this.getPitchBounds=function(){return[c.minPitch,c.maxPitch]};this.setPitchBounds=function(a){c.minPitch=Math.max(-90,
Math.min(a[0],90));c.maxPitch=Math.max(-90,Math.min(a[1],90));return this};this.getYaw=function(){return c.yaw};this.setYaw=function(a,b){for(;180<a;)a-=360;for(;-180>a;)a+=360;(b=b==g?1E3:Number(b))?H.yaw={startTime:Date.now(),startPosition:c.yaw,endPosition:a,duration:b}:c.yaw=a;E();return this};this.getYawBounds=function(){return[c.minYaw,c.maxYaw]};this.setYawBounds=function(a){c.minYaw=Math.max(-180,Math.min(a[0],180));c.maxYaw=Math.max(-180,Math.min(a[1],180));return this};this.getHfov=function(){return c.hfov};
this.setHfov=function(a,b){(b=b==g?1E3:Number(b))?H.hfov={startTime:Date.now(),startPosition:c.hfov,endPosition:B(a),duration:b}:Q(a);E();return this};this.getHfovBounds=function(){return[c.minHfov,c.maxHfov]};this.setHfovBounds=function(a){c.minHfov=Math.max(0,a[0]);c.maxHfov=Math.max(0,a[1]);return this};this.lookAt=function(a,b,c,d){d=d==g?1E3:Number(d);a!==g&&this.setPitch(a,d);b!==g&&this.setYaw(b,d);c!==g&&this.setHfov(c,d);return this};this.getNorthOffset=function(){return c.northOffset};this.setNorthOffset=
function(a){c.northOffset=Math.min(360,Math.max(0,a));E();return this};this.startAutoRotate=function(a){a=a||T||1;c.autoRotate=a;La.lookAt(za,g,ya,3E3);E();return this};this.stopAutoRotate=function(){T=c.autoRotate?c.autoRotate:T;c.autoRotate=!1;c.autoRotateInactivityDelay=-1;return this};this.getRenderer=function(){return C};this.setUpdate=function(a){Ua=!0===a;C===g?pa():E();return this};this.mouseEventToCoords=function(a){return va(a)};this.loadScene=function(a,b,c,d){N&&D(a,b,c,d);return this};
this.getScene=function(){return c.scene};this.addScene=function(a,b){v.scenes[a]=b;return this};this.removeScene=function(a){if(c.scene===a||!v.scenes.hasOwnProperty(a))return!1;delete v.scenes[a];return!0};this.toggleFullscreen=function(){ka();return this};this.getConfig=function(){return c};this.addHotSpot=function(a,d){if(d===g||c.scene==d)ja(a),c.hotSpots.push(a),b(a);else if(v.scenes.hasOwnProperty(d))v.scenes[d].hotSpots.push(a);else throw"Invalid scene ID!";return this};this.removeHotSpot=
function(a){if(!c.hotSpots)return!1;for(var b=0;b<c.hotSpots.length;b++)if(c.hotSpots[b].hasOwnProperty("id")&&c.hotSpots[b].id===a){for(a=c.hotSpots[b].div;a.parentNode!=G;)a=a.parentNode;G.removeChild(a);delete c.hotSpots[b].div;c.hotSpots.splice(b,1);return!0}return!1};this.on=function(a,b){U[a]=U[a]||[];U[a].push(b);return this};this.off=function(a,b){if(!a)return U={},this;if(b){var c=U[a].indexOf(b);0<=c&&U[a].splice(c,1);U[a].length=0}else delete U[a];return this};this.destroy=function(){C&&
C.destroy();Ma&&(F.removeEventListener("mousedown",ua,!1),l.removeEventListener("mousemove",la,!1),l.removeEventListener("mouseup",ga,!1),m.removeEventListener("mousewheel",L,!1),m.removeEventListener("DOMMouseScroll",L,!1),m.removeEventListener("mozfullscreenchange",z,!1),m.removeEventListener("webkitfullscreenchange",z,!1),m.removeEventListener("msfullscreenchange",z,!1),m.removeEventListener("fullscreenchange",z,!1),y.removeEventListener("resize",ha,!1),y.removeEventListener("orientationchange",
ha,!1),m.removeEventListener("keydown",xa,!1),m.removeEventListener("keyup",ma,!1),m.removeEventListener("blur",R,!1),l.removeEventListener("mouseleave",ga,!1),F.removeEventListener("touchstart",wa,!1),F.removeEventListener("touchmove",ba,!1),F.removeEventListener("touchend",u,!1),F.removeEventListener("pointerdown",d,!1),F.removeEventListener("pointermove",a,!1),F.removeEventListener("pointerup",K,!1),F.removeEventListener("pointerleave",K,!1));m.innerHTML="";m.classList.remove("pnlm-container");
m.classList.remove("pnlm-grab");m.classList.remove("pnlm-grabbing")}}return{viewer:function(g,l){return new ja(g,l)}}}(window,document);




</script>


            <style type="text/css">
/* Pannellum 15903fc, https://github.com/mpetroff/pannellum */
.pnlm-container{margin:0;padding:0;overflow:hidden;position:relative;cursor:default;width:100%;height:100%;font-family:Helvetica,"Nimbus Sans L","Liberation Sans",Arial,sans-serif;background:#f4f4f4 url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2267%22%20height%3D%22100%22%20viewBox%3D%220%200%2067%20100%22%3E%0A%3Cpath%20stroke%3D%22%23ccc%22%20fill%3D%22none%22%20d%3D%22M33.5%2C50%2C0%2C63%2C33.5%2C75%2C67%2C63%2C33.5%2C50m-33.5-50%2C67%2C25m-0.5%2C0%2C0%2C75m-66.5-75%2C67-25m-33.5%2C75%2C0%2C25m0-100%2C0%2C50%22%2F%3E%0A%3C%2Fsvg%3E%0A') repeat;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-o-user-select:none;-ms-user-select:none;user-select:none;outline:0;line-height:1.4;contain:content}.pnlm-container *{box-sizing:content-box}.pnlm-grab{cursor:url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20height%3D%2226%22%20width%3D%2226%22%3E%0A%3Cpath%20stroke%3D%22%23000%22%20stroke-width%3D%221px%22%20fill%3D%22%23fff%22%20d%3D%22m15.3%2020.5s6.38-6.73%204.64-8.24-3.47%201.01-3.47%201.01%203.61-5.72%201.41-6.49c-2.2-0.769-3.33%204.36-3.33%204.36s0.873-5.76-1.06-5.76-1.58%205.39-1.58%205.39-0.574-4.59-2.18-4.12c-1.61%200.468-0.572%205.51-0.572%205.51s-1.58-4.89-2.93-3.79c-1.35%201.11%200.258%205.25%200.572%206.62%200.836%202.43%202.03%202.94%202.17%205.55%22%2F%3E%0A%3C%2Fsvg%3E%0A') 12 8,default}.pnlm-grabbing{cursor:url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20height%3D%2226%22%20width%3D%2226%22%3E%0A%3Cpath%20stroke%3D%22%23000%22%20stroke-width%3D%221px%22%20fill%3D%22%23fff%22%20d%3D%22m15.3%2020.5s5.07-5.29%203.77-6.74c-1.31-1.45-2.53%200.14-2.53%200.14s2.74-3.29%200.535-4.06c-2.2-0.769-2.52%201.3-2.52%201.3s0.81-2.13-1.12-2.13-1.52%201.77-1.52%201.77-0.261-1.59-1.87-1.12c-1.61%200.468-0.874%202.17-0.874%202.17s-0.651-1.55-2-0.445c-1.35%201.11-0.68%202.25-0.365%203.62%200.836%202.43%202.03%202.94%202.17%205.55%22%2F%3E%0A%3C%2Fsvg%3E%0A') 12 8,default}.pnlm-sprite{background-image:url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2226%22%20height%3D%22208%22%3E%0A%3Ccircle%20fill-opacity%3D%22.78%22%20cy%3D%22117%22%20cx%3D%2213%22%20r%3D%2211%22%20fill%3D%22%23fff%22%2F%3E%0A%3Ccircle%20fill-opacity%3D%22.78%22%20cy%3D%22143%22%20cx%3D%2213%22%20r%3D%2211%22%20fill%3D%22%23fff%22%2F%3E%0A%3Ccircle%20cy%3D%22169%22%20cx%3D%2213%22%20r%3D%227%22%20fill%3D%22none%22%20stroke%3D%22%23000%22%20stroke-width%3D%222%22%2F%3E%0A%3Ccircle%20cy%3D%22195%22%20cx%3D%2213%22%20r%3D%227%22%20fill%3D%22none%22%20stroke%3D%22%23000%22%20stroke-width%3D%222%22%2F%3E%0A%3Ccircle%20cx%3D%2213%22%20cy%3D%22195%22%20r%3D%222.5%22%2F%3E%0A%3Cpath%20d%3D%22m5%2083v6h2v-4h4v-2zm10%200v2h4v4h2v-6zm-5%205v6h6v-6zm-5%205v6h6v-2h-4v-4zm14%200v4h-4v2h6v-6z%22%2F%3E%0A%3Cpath%20d%3D%22m13%20110a7%207%200%200%200%20-7%207%207%207%200%200%200%207%207%207%207%200%200%200%207%20-7%207%207%200%200%200%20-7%20-7zm-1%203h2v2h-2zm0%203h2v5h-2z%22%2F%3E%0A%3Cpath%20d%3D%22m5%2057v6h2v-4h4v-2zm10%200v2h4v4h2v-6zm-10%2010v6h6v-2h-4v-4zm14%200v4h-4v2h6v-6z%22%2F%3E%0A%3Cpath%20d%3D%22m17%2038v2h-8v-2z%22%2F%3E%0A%3Cpath%20d%3D%22m12%209v3h-3v2h3v3h2v-3h3v-2h-3v-3z%22%2F%3E%0A%3Cpath%20d%3D%22m13%20136-6.125%206.125h4.375v7.875h3.5v-7.875h4.375z%22%2F%3E%0A%3Cpath%20d%3D%22m10.428%20173.33v-5.77l5-2.89v5.77zm1-1.73%203-1.73-3.001-1.74z%22%2F%3E%0A%3C%2Fsvg%3E%0A')}.pnlm-container:-moz-full-screen{height:100%!important;width:100%!important}.pnlm-container:-webkit-full-screen{height:100%!important;width:100%!important}.pnlm-container:fullscreen{height:100%!important;width:100%!important}.pnlm-render-container{cursor:inherit;position:absolute;height:100%;width:100%}.pnlm-controls{margin-top:4px;background-color:#fff;border:1px solid #999;border-color:rgba(0,0,0,0.4);border-radius:3px;cursor:pointer;z-index:2;-webkit-transform:translateZ(9999px);transform:translateZ(9999px)}.pnlm-control:hover{background-color:#f8f8f8}.pnlm-controls-container{position:absolute;top:0;left:4px;z-index:1}.pnlm-zoom-controls{width:26px;height:52px}.pnlm-zoom-in{width:100%;height:50%;position:absolute;top:0;border-radius:3px 3px 0 0}.pnlm-zoom-out{width:100%;height:50%;position:absolute;bottom:0;background-position:0 -26px;border-top:1px solid #ddd;border-top-color:rgba(0,0,0,0.10);border-radius:0 0 3px 3px}.pnlm-fullscreen-toggle-button,.pnlm-orientation-button,.pnlm-hot-spot-debug-indicator{width:26px;height:26px}.pnlm-hot-spot-debug-indicator{position:absolute;top:50%;left:50%;width:26px;height:26px;margin:-13px 0 0 -13px;background-color:rgba(255,255,255,0.5);border-radius:13px;display:none}.pnlm-orientation-button-inactive{background-position:0 -156px}.pnlm-orientation-button-active{background-position:0 -182px}.pnlm-fullscreen-toggle-button-inactive{background-position:0 -52px}.pnlm-fullscreen-toggle-button-active{background-position:0 -78px}.pnlm-panorama-info{position:absolute;bottom:4px;background-color:rgba(0,0,0,0.7);border-radius:0 3px 3px 0;padding-right:10px;color:#fff;text-align:left;display:none;z-index:2;-webkit-transform:translateZ(9999px);transform:translateZ(9999px)}.pnlm-title-box{position:relative;font-size:20px;display:table;padding-left:5px;margin-bottom:3px}.pnlm-author-box{position:relative;font-size:12px;display:table;padding-left:5px}.pnlm-load-box{position:absolute;top:50%;left:50%;width:200px;height:150px;margin:-75px 0 0 -100px;background-color:transparent;border-radius:3px;text-align:center;font-size:20px;display:none;color:#fff}.pano-loader{position:relative;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:50px;height:50px;background-color:transparent;border-radius:50%}.pano-loader:after{content:'';position:absolute;border-radius:50%;top:50%;left:50%;border:0 solid transparent;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-animation:loading 1000ms ease-out forwards infinite;animation:loading 1000ms ease-out forwards infinite}@-webkit-keyframes loading{0%{border:0 solid}20%{border:8px solid #1E90D8;width:0;height:0}100%{border:8px solid #1E90D8;width:100%;height:100%}}@keyframes loading{0%{border:0 solid #1E90D8}20%{border:8px solid #1E90D8;width:0;height:0}100%{border:8px solid #1E90D8;width:100%;height:100%}}.pnlm-load-box p{margin:20px 0}.pnlm-lbox{position:absolute;top:50%;left:50%;width:20px;height:20px;margin:-10px 0 0 -10px;display:none}.pnlm-loading{animation-duration:1.5s;-webkit-animation-duration:1.5s;animation-name:pnlm-mv;-webkit-animation-name:pnlm-mv;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-timing-function:linear;-webkit-animation-timing-function:linear;height:10px;width:10px;background-color:#fff;position:relative}@keyframes pnlm-mv{from{left:0;top:0}25%{left:10px;top:0}50%{left:10px;top:10px}75%{left:0;top:10px}to{left:0;top:0}}@-webkit-keyframes pnlm-mv{from{left:0;top:0}25%{left:10px;top:0}50%{left:10px;top:10px}75%{left:0;top:10px}to{left:0;top:0}}.pnlm-load-button{position:absolute;top:50%;left:50%;width:200px;height:100px;margin:-50px 0 0 -100px;background-color:rgba(0,0,0,.7);border-radius:3px;text-align:center;font-size:20px;display:table;color:#fff;cursor:pointer}.pnlm-load-button:hover{background-color:rgba(0,0,0,.8)}.pnlm-load-button p{display:table-cell;vertical-align:middle}.pnlm-info-box{font-size:15px;position:absolute;top:50%;left:50%;width:200px;height:150px;margin:-75px 0 0 -100px;background-color:#000;border-radius:3px;display:table;text-align:center;color:#fff;table-layout:fixed}.pnlm-info-box a{color:#fff;word-wrap:break-word;overflow-wrap:break-word}.pnlm-info-box p{display:table-cell;vertical-align:middle;padding:0 5px 0 5px}.pnlm-error-msg{display:none}.pnlm-about-msg{font-size:11px;line-height:11px;color:#fff;padding:5px 8px 5px 8px;background:rgba(0,0,0,0.7);border-radius:3px;position:absolute;top:50px;left:50px;display:none;opacity:0;-moz-transition:opacity .3s ease-in-out;-webkit-transition:opacity .3s ease-in-out;-o-transition:opacity .3s ease-in-out;-ms-transition:opacity .3s ease-in-out;transition:opacity .3s ease-in-out;z-index:1}.pnlm-about-msg a:link,.pnlm-about-msg a:visited{color:#fff}.pnlm-about-msg a:hover,.pnlm-about-msg a:active{color:#eee}.pnlm-hotspot-base{position:absolute;visibility:hidden;cursor:default;vertical-align:middle;top:0;z-index:1}.pnlm-hotspot{height:26px;width:26px;border-radius:13px}.pnlm-hotspot:hover{background-color:rgba(255,255,255,0.2)}.pnlm-hotspot.pnlm-info{background-position:0 -104px}.pnlm-hotspot.pnlm-scene{background-position:0 -130px}div.pnlm-tooltip span{visibility:hidden;position:absolute;border-radius:3px;background-color:rgba(0,0,0,0.7);color:#fff;text-align:center;max-width:200px;padding:5px 10px;margin-left:-220px;cursor:default}div.pnlm-tooltip:hover span{visibility:visible}div.pnlm-tooltip:hover span:after{content:'';position:absolute;width:0;height:0;border-width:10px;border-style:solid;border-color:rgba(0,0,0,0.7) transparent transparent transparent;bottom:-20px;left:-10px;margin:0 50%}.pnlm-compass{position:absolute;width:50px;height:50px;right:4px;bottom:4px;border-radius:25px;background-image:url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20height%3D%2250%22%20width%3D%2250%22%3E%0A%3Cpath%20d%3D%22m24.5078%206-3.2578%2018h7.5l-3.25781-18h-0.984376zm-3.2578%2020%203.2578%2018h0.9844l3.2578-18h-7.5zm1.19531%200.9941h5.10938l-2.5547%2014.1075-2.5547-14.1075z%22%2F%3E%0A%3C%2Fsvg%3E%0A');cursor:default;display:none}.pnlm-world{position:absolute;left:50%;top:50%}.pnlm-face{position:absolute;-webkit-transform-origin:0 0;transform-origin:0 0}.pnlm-dragfix,.pnlm-preview-img{position:absolute;height:100%;width:100%}.pnlm-preview-img{background-size:cover;background-position:center}.pnlm-lbar{width:150px;margin:0 auto;border:#fff 1px solid;height:6px}.pnlm-lbar-fill{background:#fff;height:100%;width:0}.pnlm-lmsg{font-size:12px}.pnlm-fade-img{position:absolute;top:0;left:0}
            </style>

        
            <script type="text/javascript">
                window.alert = function(){};
            </script>
        

            
            <style type="text/css">

                .menu-o-proekte {

                }

                /* .hoverIGATION */
                .menu-o-proekte,
                .menu-o-proekte:after,
                .menu-o-proekte:before {
                  transition: all .5s;
                }
                .menu-o-proekte:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-o-proekte.stroke,
                .menu-o-proekte.fill {
                  position: relative;
                }
                .menu-o-proekte.stroke:after,
                .menu-o-proekte.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #FF196C;
                  height: 1px;
                }

                .menu-o-proekte.stroke:hover:after {
                  width: 100%;
                }

                .menu-o-proekte.fill {
                  transition: all 2s;
                }

                .menu-o-proekte.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-o-proekte.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-o-proekte.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-o-proekte.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-o-proekte.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-o-proekte.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-o-proekte.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-o-proekte.shift:hover {
                  color: #FFFFFF;
                }
                .menu-o-proekte.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #FF196C;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-o-proekte.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #FF196C;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #FF196C;
                    border-radius: 100%;
                  }
                  100% {
                    background: #FF196C;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-kvartiry {

                }

                /* .hoverIGATION */
                .menu-kvartiry,
                .menu-kvartiry:after,
                .menu-kvartiry:before {
                  transition: all .5s;
                }
                .menu-kvartiry:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-kvartiry.stroke,
                .menu-kvartiry.fill {
                  position: relative;
                }
                .menu-kvartiry.stroke:after,
                .menu-kvartiry.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #F8A701;
                  height: 1px;
                }

                .menu-kvartiry.stroke:hover:after {
                  width: 100%;
                }

                .menu-kvartiry.fill {
                  transition: all 2s;
                }

                .menu-kvartiry.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-kvartiry.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-kvartiry.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-kvartiry.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-kvartiry.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-kvartiry.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-kvartiry.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-kvartiry.shift:hover {
                  color: #FFFFFF;
                }
                .menu-kvartiry.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #F8A701;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-kvartiry.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #F8A701;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #F8A701;
                    border-radius: 100%;
                  }
                  100% {
                    background: #F8A701;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-kak-kupit {

                }

                /* .hoverIGATION */
                .menu-kak-kupit,
                .menu-kak-kupit:after,
                .menu-kak-kupit:before {
                  transition: all .5s;
                }
                .menu-kak-kupit:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-kak-kupit.stroke,
                .menu-kak-kupit.fill {
                  position: relative;
                }
                .menu-kak-kupit.stroke:after,
                .menu-kak-kupit.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #964597;
                  height: 1px;
                }

                .menu-kak-kupit.stroke:hover:after {
                  width: 100%;
                }

                .menu-kak-kupit.fill {
                  transition: all 2s;
                }

                .menu-kak-kupit.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-kak-kupit.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-kak-kupit.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-kak-kupit.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-kak-kupit.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-kak-kupit.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-kak-kupit.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-kak-kupit.shift:hover {
                  color: #FFFFFF;
                }
                .menu-kak-kupit.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #964597;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-kak-kupit.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #964597;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #964597;
                    border-radius: 100%;
                  }
                  100% {
                    background: #964597;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-ipoteka {

                }

                /* .hoverIGATION */
                .menu-ipoteka,
                .menu-ipoteka:after,
                .menu-ipoteka:before {
                  transition: all .5s;
                }
                .menu-ipoteka:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-ipoteka.stroke,
                .menu-ipoteka.fill {
                  position: relative;
                }
                .menu-ipoteka.stroke:after,
                .menu-ipoteka.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #1483C6;
                  height: 1px;
                }

                .menu-ipoteka.stroke:hover:after {
                  width: 100%;
                }

                .menu-ipoteka.fill {
                  transition: all 2s;
                }

                .menu-ipoteka.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-ipoteka.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-ipoteka.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-ipoteka.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-ipoteka.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-ipoteka.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-ipoteka.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-ipoteka.shift:hover {
                  color: #FFFFFF;
                }
                .menu-ipoteka.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #1483C6;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-ipoteka.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #1483C6;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #1483C6;
                    border-radius: 100%;
                  }
                  100% {
                    background: #1483C6;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-gallery {

                }

                /* .hoverIGATION */
                .menu-gallery,
                .menu-gallery:after,
                .menu-gallery:before {
                  transition: all .5s;
                }
                .menu-gallery:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-gallery.stroke,
                .menu-gallery.fill {
                  position: relative;
                }
                .menu-gallery.stroke:after,
                .menu-gallery.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #78BA2A;
                  height: 1px;
                }

                .menu-gallery.stroke:hover:after {
                  width: 100%;
                }

                .menu-gallery.fill {
                  transition: all 2s;
                }

                .menu-gallery.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-gallery.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-gallery.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-gallery.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-gallery.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-gallery.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-gallery.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-gallery.shift:hover {
                  color: #FFFFFF;
                }
                .menu-gallery.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #78BA2A;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-gallery.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #78BA2A;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #78BA2A;
                    border-radius: 100%;
                  }
                  100% {
                    background: #78BA2A;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-novosti {

                }

                /* .hoverIGATION */
                .menu-novosti,
                .menu-novosti:after,
                .menu-novosti:before {
                  transition: all .5s;
                }
                .menu-novosti:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-novosti.stroke,
                .menu-novosti.fill {
                  position: relative;
                }
                .menu-novosti.stroke:after,
                .menu-novosti.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #F89900;
                  height: 1px;
                }

                .menu-novosti.stroke:hover:after {
                  width: 100%;
                }

                .menu-novosti.fill {
                  transition: all 2s;
                }

                .menu-novosti.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-novosti.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-novosti.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-novosti.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-novosti.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-novosti.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-novosti.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-novosti.shift:hover {
                  color: #FFFFFF;
                }
                .menu-novosti.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #F89900;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-novosti.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #F89900;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #F89900;
                    border-radius: 100%;
                  }
                  100% {
                    background: #F89900;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        

            
            <style type="text/css">

                .menu-kontakty {

                }

                /* .hoverIGATION */
                .menu-kontakty,
                .menu-kontakty:after,
                .menu-kontakty:before {
                  transition: all .5s;
                }
                .menu-kontakty:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-kontakty.stroke,
                .menu-kontakty.fill {
                  position: relative;
                }
                .menu-kontakty.stroke:after,
                .menu-kontakty.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #964597;
                  height: 1px;
                }

                .menu-kontakty.stroke:hover:after {
                  width: 100%;
                }

                .menu-kontakty.fill {
                  transition: all 2s;
                }

                .menu-kontakty.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-kontakty.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-kontakty.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-kontakty.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-kontakty.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-kontakty.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-kontakty.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-kontakty.shift:hover {
                  color: #FFFFFF;
                }
                .menu-kontakty.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #964597;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-kontakty.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #964597;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #964597;
                    border-radius: 100%;
                  }
                  100% {
                    background: #964597;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        
            
            <style type="text/css">
                
            </style>
        

            
            <style type="text/css">

                .menu-dokumenti {

                }

                /* .hoverIGATION */
                .menu-dokumenti,
                .menu-dokumenti:after,
                .menu-dokumenti:before {
                  transition: all .5s;
                }
                .menu-dokumenti:hover {
                  color: #FFFFFF;  
                }


                /* stroke */
                .menu-dokumenti.stroke,
                .menu-dokumenti.fill {
                  position: relative;
                }
                .menu-dokumenti.stroke:after,
                .menu-dokumenti.fill:after {
                  position: absolute;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  margin: auto;
                  width: 0%;
                  content: '.';
                  color: transparent;
                  background: #D4145A;
                  height: 1px;
                }

                .menu-dokumenti.stroke:hover:after {
                  width: 100%;
                }

                .menu-dokumenti.fill {
                  transition: all 2s;
                }

                .menu-dokumenti.fill:after {
                  text-align: left;
                  content: '.';
                  margin: 0;
                  opacity: 0;
                }
                .menu-dokumenti.fill:hover {
                  color: #FFFFFF;
                  z-index: 1;
                }
                .menu-dokumenti.fill:hover:after {
                  z-index: -10;
                  animation: fill 1s forwards;
                  -webkit-animation: fill 1s forwards;
                  -moz-animation: fill 1s forwards;
                  opacity: 1;
                }

                /* Circle */
                .menu-dokumenti.circle {
                  position: relative;
                  overflow: hidden;
                  z-index: 1;
                }
                .menu-dokumenti.circle:after {
                  display: block;
                  position: absolute;
                  margin: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  content: '.';
                  color: transparent;
                  width: 1px;
                  height: 1px;
                  border-radius: 50%;
                  background: transparent;
                }
                .menu-dokumenti.circle:hover:after {
                  -webkit-animation: circle 1.5s ease-in forwards;
                }

                /* SHIFT */
                .menu-dokumenti.shift {
                  position:relative;
                  z-index: 1;
                }
                .menu-dokumenti.shift:hover {
                  color: #FFFFFF;
                }
                .menu-dokumenti.shift:after {
                  display: block;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  width: 100%;
                  height: 1px;
                  content: '.';
                  color: transparent;
                  background: #D4145A;
                  visibility: none;
                  opacity: 0;
                  z-index: -1;
                  border-radius: 12px;
                }
                .menu-dokumenti.shift:hover:after {
                  opacity: 1;
                  visibility: visible;
                  height: 100%;
                }



                /* Keyframes */
                @-webkit-keyframes fill {
                  0% {
                    width: 0%;
                    height: 1px;
                  }
                  50% {
                    width: 100%;
                    height: 1px;
                  }
                  100% {
                    width: 100%;
                    height: 100%;
                    background: #D4145A;
                  }
                }

                /* Keyframes */
                @-webkit-keyframes circle {
                  0% {
                    width: 1px;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    height: 1px;
                    z-index: -1;
                    background: #D4145A;
                    border-radius: 100%;
                  }
                  100% {
                    background: #D4145A;
                    height: 5000%;
                    width: 5000%;
                    z-index: -1;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    margin: auto;
                    border-radius: 0;
                  }
                }

            </style>

        
  <!--/*

*/
-->
 </head>
 <body>
 @include('muse.global.metrics')
  <!--HTML Widget code-->
   
  
  <div class="breakpoint active" id="bp_infinity" data-min-width="1176"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="Button SmartPopUp clearfix grpelem shared_content" id="buttonu395513" data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu395513_content"><!-- container box -->
     <div class="grpelem" id="u424427"><!-- custom html -->
       <iframe src="https://xn----dtbenfaypcj0b.xn--p1ai/callbackform.html" width="468" height="500" frameBorder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
     </div>
    </div>
    <div class="clearfix grpelem shared_content" id="pu126856" data-content-guid="pu126856_content"><!-- column -->
     <div class="size_fixed colelem" id="u126856" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->
       
     </div>
     <div class="size_fixed colelem" id="u125311" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->
      
            <div></div>
        
     </div>
     <div class="pano colelem" id="u95405"><!-- simple frame --></div>
    </div>
    <div class="browser_width shared_content" id="u178650-bw" data-content-guid="u178650-bw_content">
     <div id="u178650"><!-- simple frame --></div>
    </div>
    <a class="nonblock nontext shared_content" id="u183159" href="index.html" data-href="page:U10098" data-content-guid="u183159_content"><!-- simple frame --></a>
    <div class="size_fixed grpelem shared_content" id="u313674" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u313674_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <div class="size_fixed grpelem shared_content" id="u81075" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81075_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <div class="clearfix grpelem" id="pu78734-4"><!-- group -->
     <a class="nonblock nontext menu-o-proekte clearfix shared_content" id="u78734-4" href="o_proekte_gk_pozitiv.html" data-href="page:U22699" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u78734-4_content"><!-- content --><p id="u78734-2">О проекте</p></a>
     <a class="nonblock nontext menu-kvartiry clearfix shared_content" id="u81071-4" href="kvartiry_v_rumyantsevo.html" data-href="page:U7992" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81071-4_content"><!-- content --><p id="u81071-2">Квартиры</p></a>
    </div>
    <div class="size_fixed grpelem shared_content" id="u81092" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81092_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <a class="nonblock nontext menu-kak-kupit clearfix shared_content" id="u81067-4" href="kak_kupit_kvartiru.html" data-href="page:U29129" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81067-4_content"><!-- content --><p id="u81067-2">Как купить</p></a>
    <div class="size_fixed grpelem shared_content" id="u81102" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81102_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <div class="rounded-corners shared_content" id="u126574" data-content-guid="u126574_content"><!-- simple frame --></div>
    <a class="nonblock nontext menu-ipoteka clearfix shared_content" id="u81055-4" href="ipoteka.html" data-href="page:U81893" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81055-4_content"><!-- content --><p id="u81055-2">Ипотека</p></a>
    <div class="clip_frame shared_content" id="u126883" data-content-guid="u126883_content"><!-- svg -->
     <img class="svg temp_no_img_src" id="u126881" data-orig-src="images/pasted-svg-53198x151.svg?crc=32057307" width="392" height="112" alt="" data-mu-svgfallback="images/pasted%20svg%2053198x151_poster_.png?crc=4228625865" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="size_fixed grpelem shared_content" id="u81112" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81112_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <a class="nonblock nontext menu-dokumenti clearfix shared_content" id="u637409-4" href="proektnaya_deklara%d1%81ia.html" data-href="page:U8554" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u637409-4_content"><!-- content --><p id="u637409-2">Документы</p></a>
    <!-- m_editable region-id="editable-static-tag-U126586-BP_infinity" template="pano-1.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <div class="clearfix shared_content" id="u126586-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U126586" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-content-guid="u126586-4_content"><!-- content -->
     <p>выберите точку обзора</p>
    </div>
    <!-- /m_editable -->
    <a class="nonblock nontext menu-gallery clearfix shared_content" id="u81059-4" href="gallereya_dom_pozitiv.html" data-href="page:U7360" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81059-4_content"><!-- content --><p id="u81059-2">Галерея</p></a>
    <div class="size_fixed grpelem shared_content" id="u81122" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81122_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <a class="nonblock nontext menu-novosti clearfix shared_content" id="u81063-4" href="novosti_kvartiry_v_rumyantsevo.html" data-href="page:U48416" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81063-4_content"><!-- content --><p id="u81063-2">Новости</p></a>
    <div class="size_fixed grpelem shared_content" id="u81132" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81132_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <a class="nonblock nontext menu-kontakty clearfix shared_content" id="u81039-4" href="kontakty.html" data-href="page:U5326" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc" data-content-guid="u81039-4_content"><!-- content --><p id="u81039-2">Контакты</p></a>
	<a class="nonblock nontext menu-ipoteka menu-hod clearfix shared_content shift" id="u81040-4" href="hod-stroitelstva.html" data-href="page:U5326" data-muse-temp-textcontainer-sizepolicy="true" data-muse-temp-textcontainer-pinning="true" data-ibe-flags="txtStyleSrc" data-content-guid="u81040-4_content"><!-- content --><p id="u81039-2">Ход строительства</p></a>
    <div class="size_fixed grpelem shared_content" id="u81142" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81142_content"><!-- custom html -->
     
            <div></div>
        
    </div>
    <div class="clearfix grpelem shared_content" id="pu178651-4" data-content-guid="pu178651-4_content"><!-- group -->
     <div class="call_phone_1 clearfix" id="u178651-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-IBE-flags="txtStyleSrc"><!-- content -->
      <p id="u178651-2"><span class="call_phone_11" id="u178651">+7 (495) 771-72-20</span></p>
     </div>
     <a class="nonblock nontext Button callformtrigger transition" id="buttonu452239" href="http://#ck_callback_button"><!-- container box --></a>
    </div>
    <div class="clearfix grpelem" id="pu564254"><!-- column -->
     <div class="size_fixed colelem shared_content" id="u564254" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u564254_content"><!-- custom html -->
      
            <div></div>
        
     </div>
     <div class="size_fixed colelem shared_content" id="u637416" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u637416_content"><!-- custom html -->
      
            <div></div>
        
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1175" data-max-width="1175"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <span class="Button SmartPopUp clearfix grpelem placeholder" data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu126856_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u178650-bw_content"><!-- placeholder node --></span>
    <span class="nonblock nontext placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u313674_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81075_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu81067-4"><!-- group -->
     <span class="nonblock nontext menu-kak-kupit clearfix placeholder" data-placeholder-for="u81067-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext menu-kvartiry clearfix placeholder" data-placeholder-for="u81071-4_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81092_content"><!-- placeholder node --></span>
    <span class="rounded-corners placeholder" data-placeholder-for="u126574_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
    <span class="clip_frame placeholder" data-placeholder-for="u126883_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81102_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-dokumenti clearfix placeholder" data-placeholder-for="u637409-4_content"><!-- placeholder node --></span>
    <!-- m_editable region-id="editable-static-tag-U126586-BP_1175" template="pano-1.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <span class="clearfix placeholder" data-placeholder-for="u126586-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81112_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu81059-4"><!-- group -->
     <span class="nonblock nontext menu-gallery clearfix placeholder" data-placeholder-for="u81059-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81122_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
	<a class="nonblock nontext menu-ipoteka menu-hod clearfix shared_content shift" id="u81040-4" href="hod-stroitelstva.html" data-href="page:U5326" data-muse-temp-textcontainer-sizepolicy="true" data-muse-temp-textcontainer-pinning="true" data-ibe-flags="txtStyleSrc" data-content-guid="u81040-4_content"><!-- content --><p id="u81039-2">Ход строительства</p></a>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81132_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu178651-4_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu564254"><!-- column -->
     <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
     <span class="size_fixed colelem placeholder" data-placeholder-for="u81142_content"><!-- placeholder node --></span>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),

16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?

l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");

f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?

setTimeout(function(){g(!0)},5E3):g()}};

var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.detectScreenResolution();/* HiDPI screens */
Muse.Utils.prepHyperlinks(true);/* body */
(function(){

	try{


            
            $("[data-requiremodule]").removeAttr("data-requiremodule");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Блокиратор ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Блокиратор */
(function(){

	try{



        $("[title='menu-o-proekte']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-o-proekte")) {
                el.addClass("menu-o-proekte");
            }

        });
        $(".menu-o-proekte").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kvartiry']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kvartiry")) {
                el.addClass("menu-kvartiry");
            }

        });
        $(".menu-kvartiry").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kak-kupit']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kak-kupit")) {
                el.addClass("menu-kak-kupit");
            }

        });
        $(".menu-kak-kupit").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-ipoteka']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-ipoteka")) {
                el.addClass("menu-ipoteka");
            }

        });
        $(".menu-ipoteka").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-gallery']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-gallery")) {
                el.addClass("menu-gallery");
            }

        });
        $(".menu-gallery").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-novosti']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-novosti")) {
                el.addClass("menu-novosti");
            }

        });
        $(".menu-novosti").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kontakty']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kontakty")) {
                el.addClass("menu-kontakty");
            }

        });
        $(".menu-kontakty").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



            var el = $("a.callformtrigger");
            var hash = el.attr("href");
            hash = hash.replace("http://", "");
            el.attr("href", hash);

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Якорный управляющий ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Якорный управляющий */
(function(){

	try{



        $("[title='menu-dokumenti']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-dokumenti")) {
                el.addClass("menu-dokumenti");
            }

        });
        $(".menu-dokumenti").addClass("shift");

        

	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};


</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=3861931657" type="text/javascript" async data-main="scripts/museconfig.js?crc=144853533" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
   <script type="text/javascript"> $(window).load(function() { var q = 'u126856'; var _0x4f87=["\x31\x62\x20\x42\x3D\x5B\x22\x5C\x62\x5C\x6A\x5C\x76\x5C\x62\x5C\x66\x5C\x75\x5C\x65\x5C\x72\x5C\x39\x5C\x67\x5C\x67\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x67\x5C\x67\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x68\x5C\x70\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x61\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x66\x5C\x6D\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x68\x5C\x6B\x5C\x39\x5C\x61\x5C\x70\x5C\x39\x5C\x61\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x6B\x5C\x66\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x6A\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x6B\x5C\x6D\x5C\x39\x5C\x68\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x67\x5C\x70\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x68\x5C\x6B\x5C\x39\x5C\x68\x5C\x68\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x67\x5C\x70\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x61\x5C\x61\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x70\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x62\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x61\x5C\x61\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x66\x5C\x61\x5C\x39\x5C\x66\x5C\x62\x5C\x72\x5C\x71\x5C\x72\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x66\x5C\x67\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x6A\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x68\x5C\x6B\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x67\x5C\x68\x5C\x39\x5C\x66\x5C\x6D\x5C\x39\x5C\x61\x5C\x6A\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x70\x5C\x6B\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x6B\x5C\x6D\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x6B\x5C\x67\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x67\x5C\x68\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x68\x5C\x6B\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x70\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x6B\x5C\x67\x5C\x39\x5C\x6B\x5C\x66\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x68\x5C\x68\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x68\x5C\x70\x5C\x39\x5C\x68\x5C\x68\x5C\x39\x5C\x62\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x6B\x5C\x6D\x5C\x39\x5C\x67\x5C\x6A\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x6A\x5C\x39\x5C\x70\x5C\x69\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x68\x5C\x70\x5C\x39\x5C\x68\x5C\x68\x5C\x39\x5C\x62\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x6B\x5C\x6D\x5C\x39\x5C\x61\x5C\x61\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x61\x5C\x6A\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x6B\x5C\x67\x5C\x39\x5C\x62\x5C\x70\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x70\x5C\x6A\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x6A\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x6A\x5C\x68\x5C\x39\x5C\x61\x5C\x6D\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x61\x5C\x68\x5C\x39\x5C\x68\x5C\x6B\x5C\x39\x5C\x68\x5C\x68\x5C\x72\x5C\x71\x5C\x72\x5C\x39\x5C\x66\x5C\x69\x5C\x39\x5C\x66\x5C\x70\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x66\x5C\x69\x5C\x39\x5C\x66\x5C\x68\x5C\x39\x5C\x68\x5C\x67\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x61\x5C\x61\x5C\x39\x5C\x68\x5C\x67\x5C\x39\x5C\x67\x5C\x6D\x5C\x39\x5C\x6A\x5C\x70\x5C\x39\x5C\x66\x5C\x67\x5C\x39\x5C\x6B\x5C\x66\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x66\x5C\x70\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x6D\x5C\x39\x5C\x66\x5C\x69\x5C\x39\x5C\x66\x5C\x68\x5C\x39\x5C\x68\x5C\x67\x5C\x39\x5C\x66\x5C\x61\x5C\x39\x5C\x66\x5C\x62\x5C\x39\x5C\x68\x5C\x67\x5C\x39\x5C\x67\x5C\x6D\x5C\x72\x5C\x64\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x66\x5C\x6A\x5C\x75\x5C\x44\x5C\x6E\x5C\x62\x5C\x66\x5C\x65\x5C\x69\x5C\x64\x5C\x43\x5C\x70\x5C\x68\x5C\x6F\x5C\x73\x5C\x6B\x5C\x6B\x5C\x6E\x5C\x31\x67\x5C\x44\x5C\x6E\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x64\x5C\x6F\x5C\x65\x5C\x69\x5C\x64\x5C\x6F\x5C\x79\x5C\x66\x5C\x6A\x5C\x65\x5C\x62\x5C\x66\x5C\x65\x5C\x61\x5C\x64\x5C\x64\x5C\x6E\x5C\x79\x5C\x72\x5C\x39\x5C\x68\x5C\x69\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x61\x5C\x70\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x66\x5C\x6D\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x61\x5C\x66\x5C\x39\x5C\x61\x5C\x69\x5C\x39\x5C\x62\x5C\x70\x5C\x39\x5C\x70\x5C\x67\x5C\x72\x5C\x31\x63\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x64\x5C\x7A\x5C\x6F\x5C\x7A\x5C\x73\x5C\x44\x5C\x6E\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x6B\x5C\x64\x5C\x6F\x5C\x65\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x68\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x62\x5C\x6A\x5C\x76\x5C\x62\x5C\x67\x5C\x75\x5C\x65\x5C\x62\x5C\x66\x5C\x65\x5C\x68\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6B\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x66\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x67\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x70\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6A\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x69\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x6D\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x62\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x61\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x68\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x6B\x5C\x64\x5C\x64\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x68\x5C\x6A\x5C\x75\x5C\x44\x5C\x6E\x5C\x6A\x5C\x67\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x68\x5C\x66\x5C\x75\x5C\x68\x5C\x6A\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x62\x5C\x67\x5C\x65\x5C\x69\x5C\x64\x5C\x6F\x5C\x73\x5C\x6A\x5C\x66\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x62\x5C\x64\x5C\x64\x5C\x6E\x5C\x68\x5C\x66\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x6B\x5C\x6A\x5C\x75\x5C\x68\x5C\x6A\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x62\x5C\x67\x5C\x65\x5C\x61\x5C\x64\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x6B\x5C\x62\x5C\x75\x5C\x79\x5C\x7A\x5C\x73\x5C\x6B\x5C\x6A\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x66\x5C\x64\x5C\x64\x5C\x6E\x5C\x6F\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6B\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6B\x5C\x70\x5C\x6F\x5C\x79\x5C\x6B\x5C\x62\x5C\x65\x5C\x6B\x5C\x70\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x68\x5C\x64\x5C\x64\x5C\x6E\x5C\x4E\x5C\x65\x5C\x6A\x5C\x6D\x5C\x53\x5C\x6A\x5C\x69\x5C\x64\x5C\x43\x5C\x4E\x5C\x67\x5C\x61\x5C\x6F\x5C\x65\x5C\x69\x5C\x64\x5C\x64\x5C\x75\x5C\x6B\x5C\x70\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x68\x5C\x64\x5C\x64\x5C\x6E\x5C\x4E\x5C\x65\x5C\x69\x5C\x53\x5C\x6A\x5C\x64\x5C\x43\x5C\x4E\x5C\x67\x5C\x61\x5C\x6F\x5C\x65\x5C\x69\x5C\x64\x5C\x7A\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x68\x5C\x6D\x5C\x75\x5C\x6B\x5C\x62\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x67\x5C\x64\x5C\x64\x5C\x73\x5C\x6B\x5C\x6B\x5C\x6E\x5C\x68\x5C\x6D\x5C\x75\x5C\x75\x5C\x6A\x5C\x61\x5C\x6F\x5C\x79\x5C\x68\x5C\x6D\x5C\x75\x5C\x6B\x5C\x62\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x70\x5C\x64\x5C\x64\x5C\x7A\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x66\x5C\x6B\x5C\x75\x5C\x62\x5C\x67\x5C\x65\x5C\x67\x5C\x64\x5C\x43\x5C\x68\x5C\x6D\x5C\x43\x5C\x62\x5C\x67\x5C\x65\x5C\x6A\x5C\x64\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x67\x5C\x62\x5C\x75\x5C\x62\x5C\x67\x5C\x65\x5C\x70\x5C\x64\x5C\x43\x5C\x68\x5C\x6D\x5C\x43\x5C\x62\x5C\x67\x5C\x65\x5C\x6A\x5C\x64\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x67\x5C\x6B\x5C\x75\x5C\x6B\x5C\x6A\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x66\x5C\x6B\x5C\x71\x5C\x62\x5C\x67\x5C\x65\x5C\x6A\x5C\x64\x5C\x6F\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x67\x5C\x62\x5C\x71\x5C\x62\x5C\x67\x5C\x65\x5C\x6A\x5C\x64\x5C\x6F\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x69\x5C\x64\x5C\x71\x5C\x62\x5C\x67\x5C\x65\x5C\x6A\x5C\x64\x5C\x6F\x5C\x73\x5C\x68\x5C\x6A\x5C\x65\x5C\x62\x5C\x67\x5C\x65\x5C\x6D\x5C\x64\x5C\x64\x5C\x6E\x5C\x62\x5C\x67\x5C\x65\x5C\x61\x5C\x64\x5C\x71\x5C\x67\x5C\x6B\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x61\x5C\x62\x5C\x75\x5C\x65\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x66\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x69\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x67\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x70\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x6D\x5C\x6A\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x69\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x61\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x6D\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x62\x5C\x64\x5C\x71\x5C\x62\x5C\x66\x5C\x65\x5C\x62\x5C\x61\x5C\x64\x5C\x64\x5C\x73\x5C\x61\x5C\x67\x5C\x76\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x79\x5C\x6B\x5C\x6B\x5C\x6E\x5C\x44\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x69\x5C\x64\x5C\x6F\x5C\x65\x5C\x69\x5C\x64\x5C\x6F\x5C\x79\x5C\x62\x5C\x6A\x5C\x76\x5C\x68\x5C\x61\x5C\x75\x5C\x44\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x69\x5C\x64\x5C\x6F\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x62\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x6D\x5C\x64\x5C\x43\x5C\x68\x5C\x66\x5C\x6F\x5C\x7A\x5C\x70\x5C\x66\x5C\x79\x5C\x62\x5C\x6A\x5C\x76\x5C\x68\x5C\x61\x5C\x75\x5C\x44\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x6D\x5C\x64\x5C\x43\x5C\x68\x5C\x66\x5C\x6F\x5C\x7A\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x67\x5C\x69\x5C\x75\x5C\x44\x5C\x6E\x5C\x66\x5C\x66\x5C\x6F\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x61\x5C\x64\x5C\x64\x5C\x6E\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x67\x5C\x66\x5C\x75\x5C\x68\x5C\x61\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x68\x5C\x64\x5C\x64\x5C\x6E\x5C\x6F\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x6B\x5C\x61\x5C\x75\x5C\x6E\x5C\x6E\x5C\x67\x5C\x69\x5C\x53\x5C\x67\x5C\x66\x5C\x6F\x5C\x4E\x5C\x70\x5C\x62\x5C\x6F\x5C\x31\x65\x5C\x68\x5C\x6D\x5C\x73\x5C\x62\x5C\x6A\x5C\x76\x5C\x6B\x5C\x68\x5C\x75\x5C\x6A\x5C\x62\x5C\x6E\x5C\x68\x5C\x61\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x67\x5C\x64\x5C\x64\x5C\x6E\x5C\x6F\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x66\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x6B\x5C\x64\x5C\x6F\x5C\x6F\x5C\x73\x5C\x6B\x5C\x6B\x5C\x6E\x5C\x70\x5C\x61\x5C\x6E\x5C\x6B\x5C\x68\x5C\x6F\x5C\x6F\x5C\x79\x5C\x6B\x5C\x68\x5C\x75\x5C\x69\x5C\x7A\x5C\x73\x5C\x6B\x5C\x61\x5C\x75\x5C\x6B\x5C\x61\x5C\x53\x5C\x6B\x5C\x68\x5C\x73\x5C\x68\x5C\x61\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x66\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x62\x5C\x65\x5C\x6B\x5C\x64\x5C\x71\x5C\x6B\x5C\x61\x5C\x43\x5C\x61\x5C\x62\x5C\x65\x5C\x70\x5C\x64\x5C\x6F\x5C\x7A\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x73\x5C\x44\x5C\x6E\x5C\x66\x5C\x66\x5C\x6F\x5C\x65\x5C\x61\x5C\x62\x5C\x65\x5C\x6A\x5C\x64\x5C\x64\x5C\x6E\x5C\x61\x5C\x6B\x5C\x6F\x5C\x73\x5C\x68\x5C\x62\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x7A\x5C\x71\x5C\x6D\x5C\x69\x5C\x6F\x5C\x73\x5C\x68\x5C\x62\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x7A\x5C\x71\x5C\x6B\x5C\x69\x5C\x6F\x5C\x73\x5C\x68\x5C\x62\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x7A\x5C\x71\x5C\x6A\x5C\x6A\x5C\x6F\x5C\x73\x5C\x68\x5C\x62\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x7A\x5C\x71\x5C\x70\x5C\x6D\x5C\x6F\x5C\x73\x5C\x68\x5C\x62\x5C\x6E\x5C\x61\x5C\x67\x5C\x6E\x5C\x6F\x5C\x79\x5C\x61\x5C\x6B\x5C\x6E\x5C\x6F\x5C\x7A\x5C\x71\x5C\x6A\x5C\x6B\x5C\x6F\x5C\x7A\x5C\x6F\x22\x2C\x22\x5C\x63\x22\x2C\x22\x5C\x46\x5C\x57\x5C\x49\x5C\x45\x5C\x47\x22\x2C\x22\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x6B\x5C\x74\x5C\x67\x5C\x59\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x62\x5C\x63\x5C\x6C\x5C\x67\x5C\x68\x5C\x63\x5C\x31\x66\x5C\x4D\x5C\x56\x5C\x63\x5C\x6C\x5C\x66\x5C\x6A\x5C\x63\x5C\x6C\x5C\x66\x5C\x6B\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x55\x5C\x63\x5C\x6C\x5C\x67\x5C\x69\x5C\x63\x5C\x6C\x5C\x66\x5C\x6D\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x77\x5C\x63\x5C\x6C\x5C\x66\x5C\x31\x38\x5C\x63\x5C\x5A\x5C\x50\x5C\x48\x5C\x55\x5C\x47\x5C\x45\x5C\x4C\x5C\x48\x5C\x63\x5C\x6C\x5C\x67\x5C\x61\x5C\x63\x5C\x6C\x5C\x67\x5C\x62\x5C\x63\x5C\x6C\x5C\x67\x5C\x66\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x70\x5C\x63\x5C\x46\x5C\x74\x5C\x47\x5C\x31\x61\x5C\x45\x5C\x31\x64\x5C\x74\x5C\x4C\x5C\x50\x5C\x47\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x74\x5C\x63\x5C\x6C\x5C\x66\x5C\x70\x5C\x63\x5C\x6C\x5C\x66\x5C\x61\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x68\x5C\x63\x5C\x6C\x5C\x62\x5C\x67\x5C\x63\x5C\x6C\x5C\x66\x5C\x67\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x61\x5C\x63\x5C\x63\x5C\x6C\x5C\x66\x5C\x31\x69\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x66\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x6D\x5C\x6D\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x6D\x5C\x62\x5C\x63\x5C\x45\x5C\x5A\x5C\x63\x5C\x6C\x5C\x66\x5C\x68\x5C\x63\x5C\x6C\x5C\x66\x5C\x31\x34\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x67\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x6B\x5C\x63\x5C\x6C\x5C\x62\x5C\x31\x32\x5C\x63\x5C\x6C\x5C\x66\x5C\x62\x5C\x63\x5C\x6C\x5C\x6B\x5C\x69\x5C\x63\x5C\x6C\x5C\x6B\x5C\x66\x5C\x63\x5C\x6C\x5C\x61\x5C\x31\x31\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x6A\x5C\x63\x5C\x54\x5C\x45\x5C\x48\x5C\x77\x5C\x4C\x5C\x54\x5C\x63\x5C\x6C\x5C\x62\x5C\x69\x5C\x63\x5C\x6C\x5C\x6B\x5C\x31\x35\x5C\x63\x5C\x50\x5C\x54\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x5A\x5C\x63\x5C\x6C\x5C\x6B\x5C\x31\x31\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x4D\x5C\x63\x5C\x31\x36\x5C\x63\x5C\x6C\x5C\x62\x5C\x31\x34\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x59\x5C\x63\x5C\x78\x5C\x69\x5C\x6C\x5C\x61\x5C\x6A\x5C\x74\x5C\x77\x5C\x6C\x5C\x6D\x5C\x69\x5C\x63\x5C\x6C\x5C\x62\x5C\x61\x5C\x63\x5C\x6C\x5C\x66\x5C\x31\x31\x5C\x63\x5C\x6C\x5C\x67\x5C\x6B\x5C\x63\x5C\x6C\x5C\x68\x5C\x70\x5C\x63\x5C\x6B\x5C\x69\x5C\x69\x5C\x63\x5C\x6D\x5C\x69\x5C\x69\x5C\x63\x5C\x45\x5C\x46\x5C\x31\x33\x5C\x4D\x5C\x31\x33\x5C\x63\x5C\x31\x71\x5C\x63\x5C\x6C\x5C\x66\x5C\x31\x35\x5C\x63\x5C\x74\x5C\x49\x5C\x46\x5C\x74\x5C\x63\x5C\x6C\x5C\x67\x5C\x6A\x5C\x63\x5C\x6C\x5C\x66\x5C\x66\x5C\x63\x5C\x6C\x5C\x67\x5C\x70\x5C\x63\x5C\x31\x6F\x5C\x63\x5C\x31\x32\x5C\x63\x5C\x57\x5C\x4D\x5C\x56\x5C\x46\x5C\x74\x5C\x31\x72\x5C\x48\x5C\x47\x5C\x63\x5C\x48\x5C\x50\x5C\x49\x5C\x49\x5C\x63\x5C\x6C\x5C\x67\x5C\x31\x32\x5C\x63\x5C\x6D\x5C\x69\x5C\x69\x5C\x69\x5C\x63\x5C\x55\x5C\x4C\x5C\x48\x5C\x46\x5C\x4C\x5C\x49\x5C\x74\x5C\x63\x5C\x47\x5C\x31\x68\x5C\x45\x5C\x46\x5C\x63\x5C\x6C\x5C\x62\x5C\x31\x38\x5C\x63\x5C\x62\x5C\x69\x5C\x69\x22\x2C\x22\x5C\x56\x5C\x74\x5C\x57\x5C\x49\x5C\x4D\x5C\x55\x5C\x74\x22\x2C\x22\x22\x2C\x22\x5C\x39\x5C\x54\x5C\x43\x22\x2C\x22\x5C\x39\x5C\x59\x22\x2C\x22\x5C\x31\x36\x22\x5D\x3B\x31\x70\x28\x4F\x28\x52\x2C\x31\x6E\x2C\x41\x2C\x4B\x2C\x4A\x2C\x58\x29\x7B\x4A\x3D\x4F\x28\x41\x29\x7B\x51\x20\x41\x7D\x3B\x31\x39\x28\x21\x42\x5B\x35\x5D\x5B\x42\x5B\x34\x5D\x5D\x28\x2F\x5E\x2F\x2C\x31\x6D\x29\x29\x7B\x31\x37\x28\x41\x2D\x2D\x29\x7B\x58\x5B\x41\x5D\x3D\x4B\x5B\x41\x5D\x7C\x7C\x41\x7D\x3B\x4B\x3D\x5B\x4F\x28\x4A\x29\x7B\x51\x20\x58\x5B\x4A\x5D\x7D\x5D\x3B\x4A\x3D\x4F\x28\x29\x7B\x51\x20\x42\x5B\x36\x5D\x7D\x3B\x41\x3D\x31\x7D\x3B\x31\x37\x28\x41\x2D\x2D\x29\x7B\x31\x39\x28\x4B\x5B\x41\x5D\x29\x7B\x52\x3D\x52\x5B\x42\x5B\x34\x5D\x5D\x28\x31\x6A\x20\x31\x6B\x28\x42\x5B\x37\x5D\x2B\x4A\x28\x41\x29\x2B\x42\x5B\x37\x5D\x2C\x42\x5B\x38\x5D\x29\x2C\x4B\x5B\x41\x5D\x29\x7D\x7D\x3B\x51\x20\x52\x7D\x28\x42\x5B\x30\x5D\x2C\x31\x30\x2C\x31\x6C\x2C\x42\x5B\x33\x5D\x5B\x42\x5B\x32\x5D\x5D\x28\x42\x5B\x31\x5D\x29\x2C\x30\x2C\x7B\x7D\x29\x29","\x7C","\x73\x70\x6C\x69\x74","\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x7C\x78\x35\x43\x7C\x78\x33\x33\x7C\x78\x33\x32\x7C\x78\x37\x43\x7C\x78\x35\x44\x7C\x78\x35\x42\x7C\x78\x33\x36\x7C\x78\x33\x37\x7C\x78\x33\x34\x7C\x78\x33\x30\x7C\x78\x33\x39\x7C\x78\x33\x35\x7C\x78\x37\x38\x7C\x78\x33\x31\x7C\x78\x32\x38\x7C\x78\x32\x39\x7C\x78\x33\x38\x7C\x78\x32\x43\x7C\x78\x32\x32\x7C\x78\x33\x42\x7C\x78\x36\x35\x7C\x78\x33\x44\x7C\x78\x32\x30\x7C\x78\x36\x34\x7C\x78\x35\x46\x7C\x78\x37\x42\x7C\x78\x37\x44\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x33\x7C\x5F\x30\x78\x32\x64\x39\x65\x7C\x78\x32\x42\x7C\x78\x32\x34\x7C\x78\x36\x39\x7C\x78\x37\x33\x7C\x78\x37\x34\x7C\x78\x36\x45\x7C\x78\x36\x43\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x35\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x34\x7C\x78\x36\x46\x7C\x78\x36\x31\x7C\x78\x32\x46\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x78\x37\x35\x7C\x72\x65\x74\x75\x72\x6E\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x31\x7C\x78\x32\x44\x7C\x78\x37\x37\x7C\x78\x36\x33\x7C\x78\x37\x32\x7C\x78\x37\x30\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x36\x7C\x78\x36\x32\x7C\x78\x36\x36\x7C\x7C\x78\x34\x34\x7C\x78\x34\x31\x7C\x78\x34\x45\x7C\x78\x34\x35\x7C\x78\x34\x32\x7C\x78\x36\x37\x7C\x77\x68\x69\x6C\x65\x7C\x78\x34\x33\x7C\x69\x66\x7C\x78\x35\x34\x7C\x76\x61\x72\x7C\x78\x33\x41\x7C\x78\x36\x44\x7C\x78\x32\x41\x7C\x78\x37\x36\x7C\x78\x32\x31\x7C\x78\x36\x38\x7C\x78\x34\x36\x7C\x6E\x65\x77\x7C\x52\x65\x67\x45\x78\x70\x7C\x31\x30\x30\x7C\x53\x74\x72\x69\x6E\x67\x7C\x5F\x30\x78\x39\x63\x38\x32\x78\x32\x7C\x78\x37\x41\x7C\x65\x76\x61\x6C\x7C\x78\x37\x31\x7C\x78\x34\x39","","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x72\x65\x70\x6C\x61\x63\x65","\x5C\x77\x2B","\x5C\x62","\x67"];eval(function(_0xf0ecx1,_0xf0ecx2,_0xf0ecx3,_0xf0ecx4,_0xf0ecx5,_0xf0ecx6){_0xf0ecx5= function(_0xf0ecx3){return (_0xf0ecx3< _0xf0ecx2?_0x4f87[4]:_0xf0ecx5(parseInt(_0xf0ecx3/ _0xf0ecx2)))+ ((_0xf0ecx3= _0xf0ecx3% _0xf0ecx2)> 35?String[_0x4f87[5]](_0xf0ecx3+ 29):_0xf0ecx3.toString(36))};if(!_0x4f87[4][_0x4f87[6]](/^/,String)){while(_0xf0ecx3--){_0xf0ecx6[_0xf0ecx5(_0xf0ecx3)]= _0xf0ecx4[_0xf0ecx3]|| _0xf0ecx5(_0xf0ecx3)};_0xf0ecx4= [function(_0xf0ecx5){return _0xf0ecx6[_0xf0ecx5]}];_0xf0ecx5= function(){return _0x4f87[7]};_0xf0ecx3= 1};while(_0xf0ecx3--){if(_0xf0ecx4[_0xf0ecx3]){_0xf0ecx1= _0xf0ecx1[_0x4f87[6]]( new RegExp(_0x4f87[8]+ _0xf0ecx5(_0xf0ecx3)+ _0x4f87[8],_0x4f87[9]),_0xf0ecx4[_0xf0ecx3])}};return _0xf0ecx1}(_0x4f87[0],62,90,_0x4f87[3][_0x4f87[2]](_0x4f87[1]),0,{})); }); </script> 

    	<script type="application/javascript">

            var pano = $(".pano");

            var panoContainer = $("<div></div>");

            panoContainer.attr("id", "panoramau125311");

            pano.append(panoContainer);

            if ("yes" == "yes") {
                var screen = screenSize();

                var styles = {

                    position: "absolute",
                    top: "0px",
                    left: "0px",
                    width: screen.width + "px",
                    height: screen.height + "px",
                    margin: 0,
                    padding: 0

                };

                pano.css(styles);
            }


            var config = {};

            config.type = "equirectangular";
            config.panorama = "assets/pano1.jpg";
            config.autoLoad = "yes" === "yes";
            config.showZoomCtrl = "yes" === "no";
            config.showFullscreenCtrl = "yes" === "no";

            if ("Add File" != "assets/pano1-preview.jpg" && "Добавить файл" != "assets/pano1-preview.jpg") {
                config.preview = "assets/pano1-preview.jpg";
            }

            pannellum.viewer('panoramau125311', config).on("scenechange", function(){

                alert(1);

            });



            function screenSize() {
                var myWidth = 0, myHeight = 0;
                if( typeof( window.innerWidth ) == 'number' ) {
                    myWidth = window.innerWidth;
                    myHeight = window.innerHeight;
                } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
                    myWidth = document.documentElement.clientWidth;
                    myHeight = document.documentElement.clientHeight;
                    int1=2;
                } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                    myWidth = document.body.clientWidth;
                    myHeight = document.body.clientHeight;
                }
                return {width: myWidth, height: myHeight};
            }

            $(window).on('resize', function(){

                if ("yes" == "yes") {
                    var screen = screenSize();

                    var styles = {

                        position: "absolute",
                        top: "0px",
                        left: "0px",
                        width: screen.width + "px",
                        height: screen.height + "px",
                        margin: 0,
                        padding: 0

                    };

                    pano.css(styles);
                }
            });

    	</script>



    	

            <script type="text/javascript">
                
                

            </script>
            

    	

    	<script type="application/javascript">

           

    	</script>



    	
            
        
   </body>
</html>
