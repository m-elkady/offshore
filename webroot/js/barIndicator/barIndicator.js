!function(a,b,c,d){function e(b,c,d){this.el=b,this.$el=a(b),this.opt=a.extend({},a.fn[f].defaults,c),this.selector=d,this._init()}var f="barIndicator";e.prototype={_init:function(){var d=this,f=d.$el,g=d.opt,h=d.selector,i=g.style,j=g.data,k=g.numType,l=g.lbDecimals,m=f.attr("id"),o=f.text(),p=f.attr("class");if(j&&!isNaN(j))var q=parseFloat(j).toFixed(l);else if(0==j)var q=parseFloat(o.replace(",",".")).toFixed(l);else console.log("data are not valid");var r={that:d,num:q},s=e.prototype._getLength.apply(this,[r]),t=s.lbNum,u=s.barLength,v={that:d},w=e.prototype._getUniqueID.apply(this,[v]);f.attr("data-biID",w),f.addClass(g.wrpClass+" "+g.theme).attr("data-lbNum",t),a.data(f,"storedAttr",{selector:h,orClass:p,orText:o,barLength:u,num:q,lbNum:t,numType:k});var x=g.numMin,y=g.numMax,z=g.numMinLabel,A=g.numMaxLabel,B=g.numMinLbLeft&&!isNaN(g.numMinLbLeft)?g.numMinLbLeft:"",C=g.numMaxLbRight&&!isNaN(g.numMaxLbRight)?g.numMaxLbRight:"",D=g.numMinLbTop&&!isNaN(g.numMinLbTop)?g.numMinLbTop:"",E=g.numMaxLbTop&&!isNaN(g.numMaxLbTop)?g.numMaxLbTop:"",F="";if(z&&(F+='<span class="bi-labelEdge bi-edge-min" style="left:'+B+"px;top:"+D+'px">'+x+"</span>"),A&&(F+='<span class="bi-labelEdge bi-edge-max" style="right:'+C+"px;top:"+E+'px">'+y+"</span>"),"vertical"==i){var G=g.vertLabelPos,H=g.vertBarWidth,I=g.vertBarHeight,J=f.css("height"),K=g.vertLabelAlign;if(f.addClass("bi-vertical"),"line"==I)var L=J;else if(I.indexOf("%")!=-1)var L=parseFloat(J)*(parseFloat(I.replace("%",""))/100);else if(I.indexOf("px")!=-1)var L=I.replace("px","");var M='<div class="bi-bar" style="width:'+H+"px;height:"+L+'">'+F+'<div class="bi-barInner"></div></div>';if("right"==G)var N='<span class="bi-label bi-label-r" style="vertical-align:'+K+'">'+t+"</span>",O=M+N;else if("left"==G)var N='<span class="bi-label bi-label-l" style="vertical-align:'+K+'">'+t+"</span>",O=N+M}else if("horizontal"==i){var L=g.horBarHeight,P=g.horLabelPos,Q=g.horTitle,N='<span class="bi-label">'+t+"</span>",M='<div class="bi-bar" style="height:'+L+'px">'+F+'<div class="bi-barInner"></div></div>';switch(P){case"topLeft":var R="bi-hor-topLeft",O=N+M;break;case"topRight":var R="bi-hor-topRight",O=N+M;break;case"left":var R="bi-hor-left",O=N+M;break;case"right":var R="bi-hor-right",O=M+N}f.addClass("bi-horizontal "+R)}if("horizontal"==i&&Q){var S="";if("bi-title-id"==Q)S=f.attr("id");else if("bi-data-title"==Q){var T=f.attr("data-title");S=T?T:"noTitle"}else S=Q;var U='<span class="bi-limSpan"></span>',V='<span class="bi-titleSpan bi-titleSpan-'+P+'">'+S+" "+U+"</span>";O=V+O}f.empty().append(O);var W=f.find(".bi-barInner"),X=f.find(".bi-bar"),Y=f.find(".bi-label");if(a(c).trigger("bi.innerContentAppended",[f]),m&&a(c).trigger("bi_"+m+".innerContentAppended"),"horizontal"==i){var P=g.horLabelPos;if("left"==P||"right"==P){var Z=parseFloat(f.outerWidth()),$=parseFloat(f.find(".bi-label").outerWidth()),_=Z-$-1,aa=f.find(".bi-label").outerHeight(),ba=(aa-L)/2;X.css({width:_+"px",top:ba+"px"})}}var ca={that:d,num:q},s=e.prototype._getColorRangeClass.apply(this,[ca]),da=g.foreColor,ea=g.backColor,fa=g.labelColor;if(da){var ga=e.prototype._getColorValue.apply(this,[da]);ga&&W.css({"background-color":ga})}if(ea){var ha=e.prototype._getColorValue.apply(this,[ea]);ha&&X.css({"background-color":ha})}if(fa){var ia=e.prototype._getColorValue.apply(this,[fa]);ia&&Y.css({color:ia})}switch(g.labelVisibility){case"default":var ja="bi-label-vis-default";break;case"hover":var ja="bi-label-vis-hover",ka=g.labelHoverPos,G=f.find(".bi-label");for(n in ka)switch(n){case"top":case"left":case"bottom":case"right":G.css({n:ka[n]})}break;case"hidden":var ja="bi-label-vis-hidden"}f.addClass(ja);var la=g.avgActive;if(la){var ma={that:d};e.prototype._getAverage.apply(this,[ma])}else{var na=g.milestones;if(na&&!a.isEmptyObject(na)){var oa={that:d};e.prototype._getMilestones.apply(this,[oa])}}if(g.animation){var pa=(g.timeout,g.triggerEvent),qa=g.forceAnim,ra=g.forceDelay,sa={that:d,bl:u},ta={that:d,target:q};0==qa?"load"==pa?a(b).on("load",function(){e.prototype._animateBar.apply(this,[sa]),g.labelNumCount&&e.prototype._labelNumCounter.apply(this,[ta])}):a(c).on(pa,function(){e.prototype._animateBar.apply(this,[sa]),g.labelNumCount&&e.prototype._labelNumCounter.apply(this,[ta])}):setTimeout(function(){e.prototype._animateBar.apply(this,[sa]),g.labelNumCount&&e.prototype._labelNumCounter.apply(this,[ta])},ra)}else{var i=g.style;"vertical"==i?W.css({height:u}):"horizontal"==i&&W.css({width:u})}},_getUniqueID:function(b){if(b){var c=b.that,d=c.opt,e=d.wrpClass,f=0,g=[];if(a("."+e).each(function(){var b=a(this).attr("data-biID");if(b){var c=parseInt(b.replace("bi_",""));g.push(c)}}),g.length>0){var h=g.sort(function(a,b){return b-a});f=parseInt(h)+1}return"bi_"+f}},_getLength:function(a){if(a){var b=a.that,c=b.opt,d=c.numType,e=a.num;if("percent"==d)var f=e+"%",g=e+"%";else if("absolute"==d)var f=e,h=c.numMin,i=c.numMax,g=e/(i-h)*100+"%";var j={lbNum:f,barLength:g};return j}},_getColorRangeClass:function(a){if(a){var b=a.that,c=a.num,d=b.$el,f=d.find(".bi-barInner"),g=b.opt,h=f.attr("style");if(h&&f.attr("style",h.replace("background-color","")),g.colorRange){var i=g.colorRangeLimits,j="";for(l in i){var k=i[l].split("-"),m=parseFloat(k[0]),n=parseFloat(k[1]);if(c>=m&&c<=n){var o="bi-cRange-"+l;if(3==k.length){var p=k[2],q=e.prototype._getColorValue.apply(this,[p]);"undefined"!=typeof q&&f.css({"background-color":q})}}j+="bi-cRange-"+l+" "}d.removeClass(j).addClass(o)}}},_animateBar:function(b){if(b){var d=b.that,e=d.$el,f=e.attr("id"),g=d.opt,h=g.style,i=g.animTime,j=g.easing,k=g.timeOut,l=d.$el.find(".bi-barInner"),m=b.bl;setTimeout(function(){"vertical"==h?(b.reanim&&l.css({height:0}),l.animate({height:m},i,j).queue(function(){a(c).trigger("bi.animationCompleted"),f&&a(c).trigger("bi_"+f+".animationCompleted"),b.reanim&&(a(c).trigger("bi.reanimateBarStop"),f&&a(c).trigger("bi_"+f+".reanimateBarStop")),b.loadData&&(a(c).trigger("bi.loadDataStop"),f&&a(c).trigger("bi_"+f+".loadDataStop")),a(this).dequeue()})):"horizontal"==h&&(b.reanim&&l.css({width:0}),l.animate({width:m},i,j).queue(function(){a(c).trigger("bi.animationCompleted"),f&&a(c).trigger("bi_"+f+".animationCompleted"),b.reanim&&(a(c).trigger("bi.reanimateBarStop"),f&&a(c).trigger("bi_"+f+".reanimateBarStop")),b.loadData&&(a(c).trigger("bi.loadDataStop"),f&&a(c).trigger("bi_"+f+".loadDataStop")),a(this).dequeue()}))},k)}},_labelNumCounter:function(a){function b(){setTimeout(function(){if(f.html(o.toFixed(j)+n),o<h)o=Math.min(o+k,h),b();else if("num"==m){var a=f.closest(".bi-wrp").find(".bi-limSpan").prop("outerHTML");if("undefined"!=typeof a)var c=a;else var c="";f.html(f.html()+c)}},p)}if(a){var c=a.that,d=c.opt,e=c.$el,f=e.find(".bi-label"),g=d.numMin,h=parseFloat(a.target),i=d.animTime,j=d.lbDecimals,k=d.counterStep,l=d.numType,m=d.limLabelPos;if("percent"==l)var n="%";else if("absolute"==l)var n="";var o=parseFloat(g),p=i/(h-o)*k;f.html(g+n),b()}},_getColorValue:function(b){if(b){var c=new RegExp(/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i),d=["AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","Darkorange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen"];if(b.indexOf("rgb")==-1){if(0==b.indexOf("#")){if(c.test(b))var e=b}else if(a.inArray(b,d))var e=b}else var e=b;return e}},_getMilestones:function(b){if(b){var d=b.that,f=d.$el,g=f.attr("id"),h=d.opt,i=h.style,j=h.milestones,k=b.self,l=(k||f).find(".bi-bar");b.mlstObj&&(j=b.mlstObj);for(m in j){var n=j[m],o=n.mlPos,p=n.mlId,q=n.mlClass,r=n.mlDim,s=n.mlLabel,t=n.mlLabelVis,u=n.mlHoverRange,v=n.mlLineWidth,w={that:d,num:o},x=s;h.avgLabelNum&&"bi-average-mlst"==n.mlClass&&(x=s+" "+n.mlPos,"percent"==h.numType&&(x+="%"));var y=e.prototype._getLength.apply(this,[w]),z=y.barLength,A='<span class="bi-milestone bi-mlst_'+m+" "+q+'" data-id="'+p+'" data-pos="'+z+'" data-dim="'+r+'" data-label="'+s+'" data-visible="'+t+'" data-hoverRange="'+u+'" data-mlLineWidth="'+v+'">';A+='<span class="bi-mlst-inner"><span class="bi-mlst-innerLine"></span>',A+='<span class="bi-mlst-label"><span class="bi-mlst-labelTxt">'+x+"</span></span>",A+=" </span></span>",l.append(A);var B=l.find(".bi-mlst_"+m);a(c).trigger("bi.milestoneAppended",[B]),g&&a(c).trigger("bi_"+g+"_"+p+".milestoneAppended")}var C=k||f;C.find(".bi-milestone").each(function(){var b=a(this),d=b.attr("data-id"),e=b.attr("data-pos"),f=b.attr("data-dim"),g=(b.attr("data-label"),b.attr("data-visible")),h=b.attr("data-hoverRange"),j=b.attr("data-mlLineWidth"),k=parseFloat(h)/2,l=parseFloat(j)/2,m=b.find(".bi-mlst-inner"),n=m.find(".bi-mlst-innerLine");if("false"!=d&&b.attr("id",d),"vertical"==i?(b.css({bottom:e,height:h+"px","margin-bottom":-k+"px"}),n.css({height:j+"px","margin-top":-l+"px"})):"horizontal"==i&&(b.css({left:e,width:h+"px","margin-left":-k+"px"}),n.css({width:j+"px","margin-left":-l+"px"})),"hover"==g?m.addClass("bi-mlst-innerHover").removeClass("bi-mlst-innerVisible bi-mlst-innerHidden"):"visible"==g?m.addClass("bi-mlst-innerVisible").removeClass("bi-mlst-innerHover bi-mlst-innerHidden"):"hidden"==g&&m.addClass("bi-mlst-innerHidden").removeClass("bi-mlst-innerVisible bi-mlst-innerHover"),"hover"==g?m.on({mouseenter:function(){a(this).addClass("bi-mlst-innerOverflowVisible")},mouseleave:function(){setTimeout(function(){a(".bi-mlst-inner").removeClass("bi-mlst-innerOverflowVisible")},150)}}):a(c).off("mouseenter mouseleave",".bi-mlst-inner"),f){if("inherit"==f)var o="100%";else if(f.indexOf("%")!=-1||f.indexOf("px")!=-1)var o=f;if("vertical"==i){b.css({width:o});var p=b.css("width"),q=parseFloat(p.replace("px",""))/2;b.css({marginLeft:-q+"px"})}else if("horizontal"==i){b.css({height:o});var r=b.css("height"),s=parseFloat(r.replace("px",""))/2;b.css({marginTop:-s+"px"})}}})}},_getAverage:function(b){if(b){var d=b.that,e=d.$el,g=d.opt,h=(e.find(".bi-bar"),g.avgMlDim,g.avgLabel,g.avgLabelNum,g.avgLabelVis,g.avgLabelHoverRange,g.avgLineWidth,g.limLabel),i=g.limMinLabel,j=g.limMaxLabel,k=g.limMinVisible,l=g.limMaxVisible,m=g.limLabelPos,n=e.attr("data-avgClass");if(n&&n.length>0){var o=(e.attr("data-biAvg"),a.data(e,"storedAttr").selector),p=a(o+'[data-avgClass="'+n+'"]'),q=0;if(p.each(function(){var b=!a.data(this,"plugin_"+f);b&&q++}),1==q&&p.length>1){var r=0,s=1,t=[];p.each(function(){var b=a(this);if(!b.hasClass("bi-avgCalculated")){var c=parseFloat(b.attr("data-lbNum"));b.addClass("bi-avgCalculated"),r+=c,s++,t.push(c)}});var u=r/(s-1);if(h){var v=t.sort(function(a,b){return a-b}),w=v[0],x=v[v.length-1];p.each(function(){var b=a(this);b.attr("data-lbNum").indexOf(w)!=-1&&k&&b.addClass("bi-lbNum-min").find(".bi-limSpan").html(i).addClass("bi-limSpan-min"),b.attr("data-lbNum").indexOf(x)!=-1&&l&&b.addClass("bi-lbNum-max").find(".bi-limSpan").html(j).addClass("bi-limSpan-max"),"num"==m?p.addClass("bi-limPos-num"):"title"==m&&p.addClass("bi-limPos-title")})}p.attr("data-biAvg",u.toFixed(2));var y={that:b.that,sel:o};a(c).trigger("bi.dataAvgSet",[y])}}}},_setAvgMilestone:function(b){if(b){var c=b.that,d=b.$el,f=c.opt,g=f.milestones,h=f.avgColorIndicator,i=f.avgColorBelowAvg,j=f.avgColorAboveAvg,k=d.attr("data-biAvg");if(k&&k.length>0){var l=parseFloat(k),m={avg:{mlPos:l,mlId:f.avgMlId,mlClass:f.avgMlClass,mlDim:f.avgMlDim,mlLabel:f.avgLabel,mlLabelVis:f.avgLabelVis,mlHoverRange:f.avgLabelHoverRange,mlLineWidth:f.avgLineWidth}},n=a.extend({},g,m);if(h){var o=d.find(".bi-barInner"),p=d.attr("data-lbnum");if(parseFloat(p)>l){if(d.addClass("bi-avgAbove"),j){var q=e.prototype._getColorValue.apply(this,[j]);o.css({"background-color":q})}}else if(d.addClass("bi-avgBelow"),i){var r=e.prototype._getColorValue.apply(this,[i]);o.css({"background-color":r})}}}else var n=g;if(n&&!a.isEmptyObject(n)){var s={that:b.that,self:b.$el,mlstObj:n};e.prototype._getMilestones.apply(this,[s])}}},getPluginData:function(){var b=this.$el,c=a.data(b,"storedAttr");return c},reanimateBar:function(){var b=this.$el,d=b.attr("id"),f=this.opt,g=a.data(b,"storedAttr").barLength,h=a.data(b,"storedAttr").num,i={that:this,num:h},j=(e.prototype._getColorRangeClass.apply(this,[i]),{that:this,bl:g,reanim:!0}),k={that:this,target:h};e.prototype._animateBar.apply(this,[j]),f.labelNumCount&&e.prototype._labelNumCounter.apply(this,[k]),a(c).trigger("bi.reanimateBarStart"),d&&a(c).trigger("bi_"+d+".reanimateBarStart")},loadNewData:function(b){if(b){var d=b,f=this.$el.attr("id"),g={that:this,num:d},h=e.prototype._getLength.apply(this,[g]),i=h.lbNum,j=h.barLength,k={that:this,num:parseFloat(i)},h=e.prototype._getColorRangeClass.apply(this,[k]),l={that:this,bl:j,loadData:!0},m={that:this,target:i};e.prototype._animateBar.apply(this,[l]),this.opt.labelNumCount&&e.prototype._labelNumCounter.apply(this,[m]),a(c).trigger("bi.loadDataStart"),f&&a(c).trigger("bi_"+f+".loadDataStart");var n=a.data(this.$el,"storedAttr");n.barLength=j,n.num=parseFloat(d)}},destroy:function(){var b=this.$el,c=(this.opt,a.data(b,"storedAttr")),d=c.orText,e=c.orClass;b.removeData().empty().html(d).attr("class",e).removeAttr("data-lbNum data-biid")}},a.fn[f]=function(b){var c=arguments,g=a(this).selector;if(b===d||"object"==typeof b)return this.each(function(){a.data(this,"plugin_"+f)||a.data(this,"plugin_"+f,new e(this,b,g))});if("string"==typeof b&&"_"!==b[0]&&"init"!==b){if(0==Array.prototype.slice.call(c,1).length&&a.inArray(b,a.fn[f].getters)!=-1){var h=a.data(this[0],"plugin_"+f);return h[b].apply(h,Array.prototype.slice.call(c,1))}return this.each(function(){var d=a.data(this,"plugin_"+f);d instanceof e&&"function"==typeof d[b]&&d[b].apply(d,Array.prototype.slice.call(c,1))})}},a.fn[f].getters=["getPluginData"],a.fn[f].defaults={wrpClass:"bi-wrp",data:!1,style:"horizontal",theme:"bi-default-theme",animation:!0,animTime:300,easing:"easeOutExpo",timeout:0,colorRange:!1,colorRangeLimits:{optimal:"0-40",alert:"41-70",critical:"71-100"},foreColor:!1,backColor:!1,labelColor:!1,labelVisibility:"default",labelHoverPos:{top:"0",left:"20px"},vertLabelPos:"right",vertLabelAlign:"middle",horLabelPos:"topLeft",horTitle:!1,numType:"percent",lbDecimals:0,numMin:0,numMax:100,numMinLabel:!1,numMaxLabel:!1,numMinLbLeft:!1,numMaxLbRight:!1,numMinLbTop:!1,numMaxLbTop:!1,vertBarWidth:10,horBarHeight:10,vertBarHeight:"line",triggerEvent:"load",forceAnim:!1,forceDelay:100,labelNumCount:!0,counterStep:10,milestones:{1:{mlPos:50,mlId:"mlst-half",mlClass:"bi-middle-mlst",mlDim:"inherit",mlLabel:"Half",mlLabelVis:"hover",mlHoverRange:15,mlLineWidth:1}},avgActive:!1,avgColorIndicator:!1,avgColorBelowAvg:!1,avgColorAboveAvg:!1,avgMlId:!1,avgMlClass:"bi-average-mlst",avgMlDim:"inherit",avgLabel:"Average",avgLabelNum:!0,avgLabelVis:"hover",avgLabelHoverRange:15,avgLineWidth:1,limLabel:!0,limMinLabel:"min",limMaxLabel:"max",limMinVisible:!0,limMaxVisible:!0,limLabelPos:"num"},a(c).on("bi.dataAvgSet",function(b,c){var d=c.sel;a(d).each(function(){var b=a(this),d={that:c.that,$el:b};e.prototype._setAvgMilestone.apply(this,[d])})})}(jQuery,window,document);