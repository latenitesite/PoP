!function(){var l=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["em-post-map-scriptcustomization"]=l({1:function(l,n,e,t,a,u,i){var s,r,o=l.lambda,h=l.escapeExpression,c=null!=n?n:l.nullContext||{},d=e.helperMissing;return"\t<script type=\"text/javascript\">\n\t(function($){\n\t\t$(document).one('template:merged', function() {\n\n\t\t\tvar block = $('#"+h(o(null!=(s=null!=i[1]?i[1].bs:i[1])?s.bId:s,n))+"');\n\t\t\tvar pageSection = $('#"+h(o(null!=(s=null!=i[1]?i[1].pss:i[1])?s.psId:s,n))+"');\n\t\t\tpopMapRuntime.setMarkerData(pageSection, block, '"+h((r=null!=(r=e.title||(null!=n?n.title:n))?r:d,"function"==typeof r?r.call(c,{name:"title",hash:{},data:a}):r))+"', '<div class=\"media\">"+(null!=(s=(e.withSublevel||n&&n.withSublevel||d).call(c,null!=(s=null!=i[1]?i[1].thumb:i[1])?s.name:s,{name:"withSublevel",hash:{},fn:l.program(2,a,0,u,i),inverse:l.noop,data:a}))?s:"")+'<div class="media-body"><div class="authors">'+(null!=(s=e.each.call(c,null!=n?n.authors:n,{name:"each",hash:{},fn:l.program(4,a,0,u,i),inverse:l.noop,data:a}))?s:"")+'</div><a href="'+h((r=null!=(r=e.url||(null!=n?n.url:n))?r:d,"function"==typeof r?r.call(c,{name:"url",hash:{},data:a}):r))+'"><h4 class="media-heading">'+(null!=(r=null!=(r=e.title||(null!=n?n.title:n))?r:d,s="function"==typeof r?r.call(c,{name:"title",hash:{},data:a}):r)?s:"")+"</h4></a>"+(null!=(s=(e.withModule||n&&n.withModule||d).call(c,i[1],"layout-extra",{name:"withModule",hash:{},fn:l.program(9,a,0,u,i),inverse:l.noop,data:a}))?s:"")+"</div></div>');\n\t\t});\n\t})(jQuery);\n\t<\/script>\n"},2:function(l,n,e,t,a,u,i){var s,r=l.lambda,o=l.escapeExpression,h=null!=n?n:l.nullContext||{},c=e.helperMissing;return'<a class="pull-left" href="'+o(r(null!=i[1]?i[1].url:i[1],n))+'"><img src="'+o((s=null!=(s=e.src||(null!=n?n.src:n))?s:c,"function"==typeof s?s.call(h,{name:"src",hash:{},data:a}):s))+'" width="'+o((s=null!=(s=e.width||(null!=n?n.width:n))?s:c,"function"==typeof s?s.call(h,{name:"width",hash:{},data:a}):s))+'" height="'+o((s=null!=(s=e.height||(null!=n?n.height:n))?s:c,"function"==typeof s?s.call(h,{name:"height",hash:{},data:a}):s))+'" alt="'+o(r(null!=i[1]?i[1].title:i[1],n))+'"></a>'},4:function(l,n,e,t,a,u,i){var s,r=null!=n?n:l.nullContext||{};return(null!=(s=e.if.call(r,a&&a.index,{name:"if",hash:{},fn:l.program(5,a,0,u,i),inverse:l.noop,data:a}))?s:"")+(null!=(s=(e.withModule||n&&n.withModule||e.helperMissing).call(r,i[2],"authors",{name:"withModule",hash:{},fn:l.program(7,a,0,u,i),inverse:l.noop,data:a}))?s:"")},5:function(l,n,e,t,a,u,i){var s;return null!=(s=l.lambda(null!=i[2]?i[2]["authors-sep"]:i[2],n))?s:""},7:function(l,n,e,t,a,u,i){var s;return l.escapeExpression((e.enterModule||n&&n.enterModule||e.helperMissing).call(null!=n?n:l.nullContext||{},i[3],{name:"enterModule",hash:{itemObjectId:i[1],itemDBKey:null!=(s=null!=(s=null!=(s=null!=(s=null!=i[3]?i[3].bs:i[3])?s["db-keys"]:s)?s.subcomponents:s)?s.authors:s)?s["db-key"]:s},data:a}))},9:function(l,n,e,t,a,u,i){return l.escapeExpression((e.enterModule||n&&n.enterModule||e.helperMissing).call(null!=n?n:l.nullContext||{},i[2],{name:"enterModule",hash:{},data:a}))},compiler:[7,">= 4.0.0"],main:function(l,n,e,t,a,u,i){var s;return null!=(s=e.with.call(null!=n?n:l.nullContext||{},null!=n?n.itemObject:n,{name:"with",hash:{},fn:l.program(1,a,0,u,i),inverse:l.noop,data:a}))?s:""},useData:!0,useDepths:!0})}();