!function(){var l=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["layout-menu-anchor"]=l({1:function(l,a,e,n,t){var s;return l.escapeExpression((s=null!=(s=e.id||(null!=a?a.id:a))?s:e.helperMissing,"function"==typeof s?s.call(null!=a?a:l.nullContext||{},{name:"id",hash:{},data:t}):s))},3:function(l,a,e,n,t,s,u){var r;return null!=(r=(e.compare||a&&a.compare||e.helperMissing).call(null!=a?a:l.nullContext||{},null!=a?a.title:a,"divider",{name:"compare",hash:{},fn:l.program(4,t,0,s,u),inverse:l.program(6,t,0,s,u),data:t}))?r:""},4:function(l,a,e,n,t){return"\t\t\t<hr />\n"},6:function(l,a,e,n,t,s,u){var r,i,o=null!=a?a:l.nullContext||{},c=e.helperMissing,d=l.escapeExpression,h="function";return'\t\t\t<a id="menu-item-'+d((e.lastGeneratedId||a&&a.lastGeneratedId||c).call(o,{name:"lastGeneratedId",hash:{context:u[1]},data:t}))+"-"+d((i=null!=(i=e.id||(null!=a?a.id:a))?i:c,typeof i===h?i.call(o,{name:"id",hash:{},data:t}):i))+"\" class='"+d(l.lambda(null!=(r=null!=u[1]?u[1].classes:u[1])?r.item:r,a))+" "+d((i=null!=(i=e.classes||(null!=a?a.classes:a))?i:c,typeof i===h?i.call(o,{name:"classes",hash:{},data:t}):i))+"' href=\""+d((i=null!=(i=e.url||(null!=a?a.url:a))?i:c,typeof i===h?i.call(o,{name:"url",hash:{},data:t}):i))+'" title="'+d((i=null!=(i=e.alt||(null!=a?a.alt:a))?i:c,typeof i===h?i.call(o,{name:"alt",hash:{},data:t}):i))+'" '+(null!=(i=null!=(i=e["additional-attrs"]||(null!=a?a["additional-attrs"]:a))?i:c,r=typeof i===h?i.call(o,{name:"additional-attrs",hash:{},data:t}):i)?r:"")+">"+(null!=(i=null!=(i=e.title||(null!=a?a.title:a))?i:c,r=typeof i===h?i.call(o,{name:"title",hash:{},data:t}):i)?r:"")+"</a>\n"},compiler:[7,">= 4.0.0"],main:function(l,a,e,n,t,s,u){var r,i,o,c=null!=a?a:l.nullContext||{},d=e.helperMissing,h='<div class="'+l.escapeExpression((i=null!=(i=e.class||(null!=a?a.class:a))?i:d,"function"==typeof i?i.call(c,{name:"class",hash:{},data:t}):i))+'" role="menu" ';return i=null!=(i=e.generateId||(null!=a?a.generateId:a))?i:d,o={name:"generateId",hash:{},fn:l.program(1,t,0,s,u),inverse:l.noop,data:t},r="function"==typeof i?i.call(c,o):i,e.generateId||(r=e.blockHelperMissing.call(a,r,o)),null!=r&&(h+=r),h+">\n"+(null!=(r=e.each.call(c,null!=(r=null!=a?a.itemObject:a)?r.items:r,{name:"each",hash:{},fn:l.program(3,t,0,s,u),inverse:l.noop,data:t}))?r:"")+"</div>"},useData:!0,useDepths:!0})}();