tinymce.PluginManager.add("wpeditimage",function(a){function b(b){return!(!a.dom.getAttrib(b,"data-mce-placeholder")&&!a.dom.getAttrib(b,"data-mce-object"))}function c(b){var c=a.$(b).parents("[contenteditable]");return c&&"false"===c.attr("contenteditable")}function d(b){return b.replace(/(?:<p>)?\[(?:wp_)?caption([^\]]+)\]([\s\S]+?)\[\/(?:wp_)?caption\](?:<\/p>)?/g,function(b,c,d){var e,f,g,h,i,j;return e=c.match(/id=['"]([^'"]*)['"] ?/),e&&(c=c.replace(e[0],"")),f=c.match(/align=['"]([^'"]*)['"] ?/),f&&(c=c.replace(f[0],"")),g=c.match(/class=['"]([^'"]*)['"] ?/),g&&(c=c.replace(g[0],"")),j=c.match(/width=['"]([0-9]*)['"] ?/),j&&(c=c.replace(j[0],"")),d=q(d),i=d.match(/((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)([\s\S]*)/i),i&&i[2]?(h=q(i[2]),i=q(i[1])):(h=q(c).replace(/caption=['"]/,"").replace(/['"]$/,""),i=d),e=e&&e[1]?e[1].replace(/[<>&]+/g,""):"",f=f&&f[1]?f[1]:"alignnone",g=g&&g[1]?" "+g[1].replace(/[<>&]+/g,""):"",!j&&i&&(j=i.match(/width=['"]([0-9]*)['"]/)),j&&j[1]&&(j=j[1]),j&&h?(j=parseInt(j,10),a.getParam("wpeditimage_html5_captions")||(j+=10),'<div class="mceTemp"><dl id="'+e+'" class="wp-caption '+f+g+'" style="width: '+j+'px"><dt class="wp-caption-dt">'+i+'</dt><dd class="wp-caption-dd">'+h+"</dd></dl></div>"):d})}function e(a){return a.replace(/(?:<div [^>]+mceTemp[^>]+>)?\s*(<dl [^>]+wp-caption[^>]+>[\s\S]+?<\/dl>)\s*(?:<\/div>)?/g,function(a,b){var c="";return b.indexOf("<img ")===-1||b.indexOf("</p>")!==-1?b.replace(/<d[ldt]( [^>]+)?>/g,"").replace(/<\/d[ldt]>/g,""):(c=b.replace(/\s*<dl ([^>]+)>\s*<dt [^>]+>([\s\S]+?)<\/dt>\s*<dd [^>]+>([\s\S]*?)<\/dd>\s*<\/dl>\s*/gi,function(a,b,c,d){var e,f,g,h;return h=c.match(/width="([0-9]*)"/),h=h&&h[1]?h[1]:"",f=b.match(/class="([^"]*)"/),f=f&&f[1]?f[1]:"",g=f.match(/align[a-z]+/i)||"alignnone",h&&d?(e=b.match(/id="([^"]*)"/),e=e&&e[1]?e[1]:"",f=f.replace(/wp-caption ?|align[a-z]+ ?/gi,""),f&&(f=' class="'+f+'"'),d=d.replace(/\r\n|\r/g,"\n").replace(/<[a-zA-Z0-9]+( [^<>]+)?>/g,function(a){return a.replace(/[\r\n\t]+/," ")}),d=d.replace(/\s*\n\s*/g,"<br />"),'[caption id="'+e+'" align="'+g+'" width="'+h+'"'+f+"]"+c+" "+d+"[/caption]"):("alignnone"!==g[0]&&(c=c.replace(/><img/,' class="'+g[0]+'"><img')),c)}),c.indexOf("[caption")===-1&&(c=b.replace(/[\s\S]*?((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)(<p>[\s\S]*<\/p>)?[\s\S]*/gi,"<p>$1</p>$2")),c)})}function f(b){var c,d,e,f,g,h,i,j,k=[],l=a.dom,m=/^\d+$/;return e={attachment_id:!1,size:"custom",caption:"",align:"none",extraClasses:"",link:!1,linkUrl:"",linkClassName:"",linkTargetBlank:!1,linkRel:"",title:""},e.url=l.getAttrib(b,"src"),e.alt=l.getAttrib(b,"alt"),e.title=l.getAttrib(b,"title"),i=l.getAttrib(b,"width"),j=l.getAttrib(b,"height"),(!m.test(i)||parseInt(i,10)<1)&&(i=b.naturalWidth||b.width),(!m.test(j)||parseInt(j,10)<1)&&(j=b.naturalHeight||b.height),e.customWidth=e.width=i,e.customHeight=e.height=j,c=tinymce.explode(b.className," "),d=[],tinymce.each(c,function(a){/^wp-image/.test(a)?e.attachment_id=parseInt(a.replace("wp-image-",""),10):/^align/.test(a)?e.align=a.replace("align",""):/^size/.test(a)?e.size=a.replace("size-",""):d.push(a)}),e.extraClasses=d.join(" "),f=l.getParents(b,".wp-caption"),f.length&&(f=f[0],c=f.className.split(" "),tinymce.each(c,function(a){/^align/.test(a)?e.align=a.replace("align",""):a&&"wp-caption"!==a&&k.push(a)}),e.captionClassName=k.join(" "),g=l.select("dd.wp-caption-dd",f),g.length&&(g=g[0],e.caption=a.serializer.serialize(g).replace(/<br[^>]*>/g,"$&\n").replace(/^<p>/,"").replace(/<\/p>$/,""))),b.parentNode&&"A"===b.parentNode.nodeName&&(h=b.parentNode,e.linkUrl=l.getAttrib(h,"href"),e.linkTargetBlank="_blank"===l.getAttrib(h,"target"),e.linkRel=l.getAttrib(h,"rel"),e.linkClassName=h.className),e}function g(a){return a&&!!(a.textContent||a.innerText).replace(/\ufeff/g,"")}function h(b){return!b||b.indexOf("<")===-1&&b.indexOf(">")===-1?b:(m||(m=new tinymce.html.Serializer({},a.schema)),m.serialize(a.parser.parse(b,{forced_root_block:!1})))}function i(b,c){var d,e,f,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y=a.dom;d=tinymce.explode(c.extraClasses," "),d||(d=[]),c.caption||d.push("align"+c.align),c.attachment_id&&(d.push("wp-image-"+c.attachment_id),c.size&&"custom"!==c.size&&d.push("size-"+c.size)),s=c.width,t=c.height,"custom"===c.size&&(s=c.customWidth,t=c.customHeight),q={src:c.url,width:s||null,height:t||null,title:c.title||null,"class":d.join(" ")||null},y.setAttribs(b,q),a.$(b).attr("alt",c.alt||""),r={href:c.linkUrl,rel:c.linkRel||null,target:c.linkTargetBlank?"_blank":null,"class":c.linkClassName||null},b.parentNode&&"A"===b.parentNode.nodeName&&!g(b.parentNode)?c.linkUrl?y.setAttribs(b.parentNode,r):y.remove(b.parentNode,!0):c.linkUrl&&((l=y.getParent(b,"a"))&&y.insertAfter(b,l),l=y.create("a",r),b.parentNode.insertBefore(l,b),l.appendChild(b)),m=a.dom.getParent(b,".mceTemp"),f=b.parentNode&&"A"===b.parentNode.nodeName&&!g(b.parentNode)?b.parentNode:b,c.caption?(c.caption=h(c.caption),p=c.attachment_id?"attachment_"+c.attachment_id:null,u="align"+(c.align||"none"),e="wp-caption "+u,c.captionClassName&&(e+=" "+c.captionClassName.replace(/[<>&]+/g,"")),a.getParam("wpeditimage_html5_captions")||(s=parseInt(s,10),s+=10),m?(o=y.select("dl.wp-caption",m),o.length&&y.setAttribs(o,{id:p,"class":e,style:"width: "+s+"px"}),n=y.select(".wp-caption-dd",m),n.length&&y.setHTML(n[0],c.caption)):(p=p?'id="'+p+'" ':"",i="<dl "+p+'class="'+e+'" style="width: '+s+'px"><dt class="wp-caption-dt"></dt><dd class="wp-caption-dd">'+c.caption+"</dd></dl>",k=y.create("div",{"class":"mceTemp"},i),(j=y.getParent(f,"p"))?j.parentNode.insertBefore(k,j):f.parentNode.insertBefore(k,f),a.$(k).find("dt.wp-caption-dt").append(f),j&&y.isEmpty(j)&&y.remove(j))):m&&(j=y.create("p"),m.parentNode.insertBefore(j,m),j.appendChild(f),y.remove(m)),v=a.$(b),w=v.attr("srcset"),x=v.attr("src"),w&&x&&(x=x.replace(/[?#].*/,""),w.indexOf(x)===-1&&v.attr("srcset",null).attr("sizes",null)),wp.media.events&&wp.media.events.trigger("editor:image-update",{editor:a,metadata:c,image:b}),a.nodeChanged()}function j(b){var c,d,e;return"undefined"!=typeof wp&&wp.media?(e=f(b),wp.media.events.trigger("editor:image-edit",{editor:a,metadata:e,image:b}),c=wp.media({frame:"image",state:"image-details",metadata:e}),wp.media.events.trigger("editor:frame-create",{frame:c}),d=function(d){a.focus(),a.undoManager.transact(function(){i(b,d)}),c.detach()},c.state("image-details").on("update",d),c.state("replace-image").on("replace",d),c.on("close",function(){a.focus(),c.detach()}),void c.open()):void a.execCommand("mceImage")}function k(b){var c=a.dom.getParent(b,"div.mceTemp");c||"IMG"!==b.nodeName||(c=a.dom.getParent(b,"a")),c?(c.nextSibling?a.selection.select(c.nextSibling):c.previousSibling?a.selection.select(c.previousSibling):a.selection.select(c.parentNode),a.selection.collapse(!0),a.dom.remove(c)):a.dom.remove(b),a.nodeChanged(),a.undoManager.add()}var l,m,n,o,p=tinymce.each,q=tinymce.trim,r=tinymce.Env.iOS;return a.addButton("wp_img_remove",{tooltip:"Remove",icon:"dashicon dashicons-no",onclick:function(){k(a.selection.getNode())}}),a.addButton("wp_img_edit",{tooltip:"Edit ",icon:"dashicon dashicons-edit",onclick:function(){j(a.selection.getNode())}}),p({alignleft:"Align left",aligncenter:"Align center",alignright:"Align right",alignnone:"No alignment"},function(b,c){var d=c.slice(5);a.addButton("wp_img_"+c,{tooltip:b,icon:"dashicon dashicons-align-"+d,cmd:"alignnone"===c?"wpAlignNone":"Justify"+d.slice(0,1).toUpperCase()+d.slice(1),onPostRender:function(){var b=this;a.on("NodeChange",function(d){var e;"IMG"===d.element.nodeName&&(e=a.dom.getParent(d.element,".wp-caption")||d.element,"alignnone"===c?b.active(!/\balign(left|center|right)\b/.test(e.className)):b.active(a.dom.hasClass(e,c)))})}})}),a.once("preinit",function(){a.wp&&a.wp._createToolbar&&(l=a.wp._createToolbar(["wp_img_alignleft","wp_img_aligncenter","wp_img_alignright","wp_img_alignnone","wp_img_edit","wp_img_remove"]))}),a.on("wptoolbar",function(a){"IMG"!==a.element.nodeName||b(a.element)||(a.toolbar=l)}),r&&a.on("init",function(){a.on("touchstart",function(a){"IMG"!==a.target.nodeName||c(a.target)||(n=!0)}),a.dom.bind(a.getDoc(),"touchmove",function(){n=!1}),a.on("touchend",function(b){if(n&&"IMG"===b.target.nodeName&&!c(b.target)){var d=b.target;n=!1,window.setTimeout(function(){a.selection.select(d),a.nodeChanged()},100)}else l&&l.hide()})}),a.on("init",function(){var b=a.dom,c=a.getParam("wpeditimage_html5_captions")?"html5-captions":"html4-captions";b.addClass(a.getBody(),c),tinymce.Env.ie&&tinymce.Env.ie>10&&b.bind(a.getBody(),"mscontrolselect",function(c){"IMG"===c.target.nodeName&&b.getParent(c.target,".wp-caption")?a.getBody().focus():"DL"===c.target.nodeName&&b.hasClass(c.target,"wp-caption")&&c.target.focus()})}),a.on("ObjectResized",function(b){var c=b.target;"IMG"===c.nodeName&&a.undoManager.transact(function(){var d,e,f=a.dom;c.className=c.className.replace(/\bsize-[^ ]+/,""),(d=f.getParent(c,".wp-caption"))&&(e=b.width||f.getAttrib(c,"width"),e&&(e=parseInt(e,10),a.getParam("wpeditimage_html5_captions")||(e+=10),f.setStyle(d,"width",e+"px")))})}),a.on("pastePostProcess",function(b){a.dom.getParent(a.selection.getNode(),"dd.wp-caption-dd")&&(a.$("img, audio, video, object, embed, iframe, script, style",b.node).remove(),a.$("*",b.node).each(function(b,c){a.dom.isBlock(c)&&(tinymce.trim(c.textContent||c.innerText)?(a.dom.insertAfter(a.dom.create("br"),c),a.dom.remove(c,!0)):a.dom.remove(c))}),a.$("br",b.node).each(function(b,c){c.nextSibling&&"BR"!==c.nextSibling.nodeName&&c.previousSibling&&"BR"!==c.previousSibling.nodeName||a.dom.remove(c)}),o=!0)}),a.on("BeforeExecCommand",function(b){var c,d,e,f,g,h,i=b.command,j=a.dom;if("mceInsertContent"===i||"Indent"===i||"Outdent"===i){if(c=a.selection.getNode(),h=j.getParent(c,"div.mceTemp")){if("mceInsertContent"!==i)return b.preventDefault(),b.stopImmediatePropagation(),!1;if(o)return void(o=!1);d=j.create("p"),j.insertAfter(d,h),a.selection.setCursorLocation(d,0),"IMG"===c.nodeName&&a.$(h).remove(),a.nodeChanged()}}else if("JustifyLeft"===i||"JustifyRight"===i||"JustifyCenter"===i||"wpAlignNone"===i){if(c=a.selection.getNode(),f="align"+i.slice(7).toLowerCase(),e=a.dom.getParent(c,".wp-caption"),"IMG"!==c.nodeName&&!e)return;c=e||c,g=a.dom.hasClass(c,f)?" alignnone":" "+f,c.className=q(c.className.replace(/ ?align(left|center|right|none)/g,"")+g),a.nodeChanged(),b.preventDefault(),l&&l.reposition(),a.fire("ExecCommand",{command:i,ui:b.ui,value:b.value})}}),a.on("keydown",function(b){var c,d,e,f,g=a.selection,h=b.keyCode,i=a.dom,j=tinymce.util.VK;if(h===j.ENTER)c=g.getNode(),d=i.getParent(c,"div.mceTemp"),d&&(i.events.cancel(b),tinymce.each(i.select("dt, dd",d),function(a){i.isEmpty(a)&&i.remove(a)}),f=tinymce.Env.ie&&tinymce.Env.ie<11?"":'<br data-mce-bogus="1" />',e=i.create("p",null,f),"DD"===c.nodeName?i.insertAfter(e,d):d.parentNode.insertBefore(e,d),a.nodeChanged(),g.setCursorLocation(e,0));else if((h===j.DELETE||h===j.BACKSPACE)&&(c=g.getNode(),"DIV"===c.nodeName&&i.hasClass(c,"mceTemp")?d=c:"IMG"!==c.nodeName&&"DT"!==c.nodeName&&"A"!==c.nodeName||(d=i.getParent(c,"div.mceTemp")),d))return i.events.cancel(b),k(c),!1}),tinymce.Env.gecko&&a.on("undo redo",function(){"IMG"===a.selection.getNode().nodeName&&a.selection.collapse()}),a.wpSetImgCaption=function(a){return d(a)},a.wpGetImgCaption=function(a){return e(a)},a.on("beforeGetContent",function(b){"raw"!==b.format&&a.$('img[id="__wp-temp-img-id"]').attr("id",null)}),a.on("BeforeSetContent",function(b){"raw"!==b.format&&(b.content=a.wpSetImgCaption(b.content))}),a.on("PostProcess",function(b){b.get&&(b.content=a.wpGetImgCaption(b.content))}),function(){var b;a.on("dragstart",function(){var c=a.selection.getNode();"IMG"===c.nodeName&&(b=a.dom.getParent(c,".mceTemp"),b||"A"!==c.parentNode.nodeName||g(c.parentNode)||(b=c.parentNode))}),a.on("drop",function(c){var d=a.dom,e=tinymce.dom.RangeUtils.getCaretRangeFromPoint(c.clientX,c.clientY,a.getDoc());e&&d.getParent(e.startContainer,".mceTemp")?c.preventDefault():b&&(c.preventDefault(),a.undoManager.transact(function(){e&&a.selection.setRng(e),a.selection.setNode(b),d.remove(b)})),b=null})}(),a.wp=a.wp||{},a.wp.isPlaceholder=b,{_do_shcode:d,_get_shcode:e}});