!function(){var l=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["layoutuser-typeahead-selected"]=l({1:function(l,n,e,a,t,s,u){var i,r,o=null!=n?n:l.nullContext||{},h=e.helperMissing;return'\t<div class="media">\n'+(null!=(i=(e.withSublevel||n&&n.withSublevel||h).call(o,null!=(i=null!=u[1]?u[1].avatar:u[1])?i.name:i,{name:"withSublevel",hash:{},fn:l.program(2,t,0,s,u),inverse:l.noop,data:t}))?i:"")+'\t\t<div class="media-body">\n\t\t\t<h4 class="media-heading"><a href="'+l.escapeExpression((r=null!=(r=e.url||(null!=n?n.url:n))?r:h,"function"==typeof r?r.call(o,{name:"url",hash:{},data:t}):r))+'">'+(null!=(r=null!=(r=e["display-name"]||(null!=n?n["display-name"]:n))?r:h,i="function"==typeof r?r.call(o,{name:"display-name",hash:{},data:t}):r)?i:"")+"</a></h4>\n"+(null!=(i=e.each.call(o,null!=(i=null!=u[1]?u[1]["template-ids"]:u[1])?i.extras:i,{name:"each",hash:{},fn:l.program(4,t,0,s,u),inverse:l.noop,data:t}))?i:"")+"\t\t</div>\n\t</div>\n"},2:function(l,n,e,a,t,s,u){var i,r=null!=n?n:l.nullContext||{},o=e.helperMissing,h=l.escapeExpression;return'\t\t\t<div class="pull-left">\n\t\t\t\t<img width="'+h((i=null!=(i=e.size||(null!=n?n.size:n))?i:o,"function"==typeof i?i.call(r,{name:"size",hash:{},data:t}):i))+'" height="'+h((i=null!=(i=e.size||(null!=n?n.size:n))?i:o,"function"==typeof i?i.call(r,{name:"size",hash:{},data:t}):i))+'" src="'+h((i=null!=(i=e.src||(null!=n?n.src:n))?i:o,"function"==typeof i?i.call(r,{name:"src",hash:{},data:t}):i))+'" title="'+h(l.lambda(null!=u[1]?u[1]["display-name"]:u[1],n))+'">\n\t\t\t</div>\n'},4:function(l,n,e,a,t,s,u){var i;return null!=(i=(e.withModule||n&&n.withModule||e.helperMissing).call(null!=n?n:l.nullContext||{},u[2],n,{name:"withModule",hash:{},fn:l.program(5,t,0,s,u),inverse:l.noop,data:t}))?i:""},5:function(l,n,e,a,t,s,u){return"\t\t\t\t\t"+l.escapeExpression((e.enterModule||n&&n.enterModule||e.helperMissing).call(null!=n?n:l.nullContext||{},u[3],{name:"enterModule",hash:{},data:t}))+"\n"},compiler:[7,">= 4.0.0"],main:function(l,n,e,a,t,s,u){var i;return null!=(i=e.with.call(null!=n?n:l.nullContext||{},null!=n?n.itemObject:n,{name:"with",hash:{},fn:l.program(1,t,0,s,u),inverse:l.noop,data:t}))?i:""},useData:!0,useDepths:!0})}();