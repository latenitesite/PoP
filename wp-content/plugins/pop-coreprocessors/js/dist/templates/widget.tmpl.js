!function(){var l=Handlebars.template;(Handlebars.templates=Handlebars.templates||{}).widget=l({1:function(l,e,a,n,t){var s;return l.escapeExpression((s=null!=(s=a.id||(null!=e?e.id:e))?s:a.helperMissing,"function"==typeof s?s.call(null!=e?e:l.nullContext||{},{name:"id",hash:{},data:t}):s))},3:function(l,e,a,n,t,s,i){var u,o,r=null!=e?e:l.nullContext||{},c=a.helperMissing,d="function",p=l.escapeExpression;return'\t\t<div class="'+p((o=null!=(o=a["title-wrapper"]||(null!=e?e["title-wrapper"]:e))?o:c,typeof o===d?o.call(r,{name:"title-wrapper",hash:{},data:t}):o))+' clearfix">\n'+(null!=(u=(a.withModule||e&&e.withModule||c).call(r,e,"quicklinkgroup",{name:"withModule",hash:{},fn:l.program(4,t,0,s,i),inverse:l.noop,data:t}))?u:"")+(null!=(u=a.if.call(r,null!=e?e.collapsible:e,{name:"if",hash:{},fn:l.program(6,t,0,s,i),inverse:l.noop,data:t}))?u:"")+"\t\t\t<"+p((o=null!=(o=a["title-htmltag"]||(null!=e?e["title-htmltag"]:e))?o:c,typeof o===d?o.call(r,{name:"title-htmltag",hash:{},data:t}):o))+' class="sidebar-title '+p((o=null!=(o=a["title-class"]||(null!=e?e["title-class"]:e))?o:c,typeof o===d?o.call(r,{name:"title-class",hash:{},data:t}):o))+'">\n\t\t\t\t'+(null!=(u=a.if.call(r,null!=e?e.fontawesome:e,{name:"if",hash:{},fn:l.program(8,t,0,s,i),inverse:l.noop,data:t}))?u:"")+(null!=(o=null!=(o=a["menu-title"]||(null!=e?e["menu-title"]:e))?o:c,u=typeof o===d?o.call(r,{name:"menu-title",hash:{},data:t}):o)?u:"")+"\n\t\t\t</"+p((o=null!=(o=a["title-htmltag"]||(null!=e?e["title-htmltag"]:e))?o:c,typeof o===d?o.call(r,{name:"title-htmltag",hash:{},data:t}):o))+">\n\t\t</div>\n"},4:function(l,e,a,n,t,s,i){var u,o=l.escapeExpression;return'\t\t\t\t<div class="quicklinkgroup '+o(l.lambda(null!=(u=null!=i[1]?i[1].classes:i[1])?u.quicklinkgroup:u,e))+'">\n\t\t\t\t\t'+o((a.enterModule||e&&e.enterModule||a.helperMissing).call(null!=e?e:l.nullContext||{},i[1],{name:"enterModule",hash:{},data:t}))+"\n\t\t\t\t</div>\n"},6:function(l,e,a,n,t){var s,i,u=l.escapeExpression,o=l.lambda;return'\t\t\t\t<a href="#'+u((i=null!=(i=a.lastGeneratedId||(null!=e?e.lastGeneratedId:e))?i:a.helperMissing,"function"==typeof i?i.call(null!=e?e:l.nullContext||{},{name:"lastGeneratedId",hash:{},data:t}):i))+'-body" data-toggle="collapse" class="'+u(o(null!=(s=null!=e?e.classes:e)?s["collapse-link"]:s,e))+'">'+(null!=(s=o(null!=(s=null!=e?e.titles:e)?s["collapse-link"]:s,e))?s:"")+"</a>\n"},8:function(l,e,a,n,t){var s;return'<i class="fa fa-fw '+l.escapeExpression((s=null!=(s=a.fontawesome||(null!=e?e.fontawesome:e))?s:a.helperMissing,"function"==typeof s?s.call(null!=e?e:l.nullContext||{},{name:"fontawesome",hash:{},data:t}):s))+'"></i>'},10:function(l,e,a,n,t){var s;return"collapse "+l.escapeExpression((s=null!=(s=a.class||(null!=e?e.class:e))?s:a.helperMissing,"function"==typeof s?s.call(null!=e?e:l.nullContext||{},{name:"class",hash:{},data:t}):s))},12:function(l,e,a,n,t,s,i){var u;return null!=(u=(a.withModule||e&&e.withModule||a.helperMissing).call(null!=e?e:l.nullContext||{},i[1],e,{name:"withModule",hash:{},fn:l.program(13,t,0,s,i),inverse:l.noop,data:t}))?u:""},13:function(l,e,a,n,t,s,i){return"\t\t\t\t"+l.escapeExpression((a.enterModule||e&&e.enterModule||a.helperMissing).call(null!=e?e:l.nullContext||{},i[2],{name:"enterModule",hash:{},data:t}))+"\n"},compiler:[7,">= 4.0.0"],main:function(l,e,a,n,t,s,i){var u,o,r,c=null!=e?e:l.nullContext||{},d=a.helperMissing,p="function",h=l.escapeExpression,f='<div class="sidebar-widget '+h((o=null!=(o=a["widget-class"]||(null!=e?e["widget-class"]:e))?o:d,typeof o===p?o.call(c,{name:"widget-class",hash:{},data:t}):o))+" "+h((o=null!=(o=a.class||(null!=e?e.class:e))?o:d,typeof o===p?o.call(c,{name:"class",hash:{},data:t}):o))+'" ';return o=null!=(o=a.generateId||(null!=e?e.generateId:e))?o:d,r={name:"generateId",hash:{},fn:l.program(1,t,0,s,i),inverse:l.noop,data:t},u=typeof o===p?o.call(c,r):o,a.generateId||(u=a.blockHelperMissing.call(e,u,r)),null!=u&&(f+=u),f+">\n"+(null!=(u=a.if.call(c,null!=e?e["show-header"]:e,{name:"if",hash:{},fn:l.program(3,t,0,s,i),inverse:l.noop,data:t}))?u:"")+'\t<div class="'+h((o=null!=(o=a["body-class"]||(null!=e?e["body-class"]:e))?o:d,typeof o===p?o.call(c,{name:"body-class",hash:{},data:t}):o))+" "+(null!=(u=a.with.call(c,null!=e?e.collapsible:e,{name:"with",hash:{},fn:l.program(10,t,0,s,i),inverse:l.noop,data:t}))?u:"")+'" id="'+h((o=null!=(o=a.lastGeneratedId||(null!=e?e.lastGeneratedId:e))?o:d,typeof o===p?o.call(c,{name:"lastGeneratedId",hash:{},data:t}):o))+'-body">\n'+(null!=(u=a.each.call(c,null!=(u=null!=e?e["template-ids"]:e)?u.layouts:u,{name:"each",hash:{},fn:l.program(12,t,0,s,i),inverse:l.noop,data:t}))?u:"")+"\t</div>\n</div>"},useData:!0,useDepths:!0})}();