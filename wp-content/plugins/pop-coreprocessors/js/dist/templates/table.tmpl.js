!function(){var t=Handlebars.template;(Handlebars.templates=Handlebars.templates||{}).table=t({1:function(t,e,n,l,a){var r;return t.escapeExpression((r=null!=(r=n.id||(null!=e?e.id:e))?r:n.helperMissing,"function"==typeof r?r.call(null!=e?e:t.nullContext||{},{name:"id",hash:{},data:a}):r))},3:function(t,e,n,l,a){var r,s=null!=e?e:t.nullContext||{};return"\t\t<thead>\n"+(null!=(r=n.if.call(s,null!=e?e.description:e,{name:"if",hash:{},fn:t.program(4,a,0),inverse:t.noop,data:a}))?r:"")+"\t\t\t<tr>\n"+(null!=(r=n.each.call(s,null!=(r=null!=e?e.header:e)?r.titles:r,{name:"each",hash:{},fn:t.program(6,a,0),inverse:t.noop,data:a}))?r:"")+"\t\t\t</tr>\n\t\t</thead>\n"},4:function(t,e,n,l,a){var r,s;return'\t\t\t\t<tr>\n\t\t\t\t\t<td colspan="'+t.escapeExpression(t.lambda(null!=(r=null!=(r=null!=e?e.header:e)?r.titles:r)?r.length:r,e))+'">\n\t\t\t\t\t\t'+(null!=(s=null!=(s=n.description||(null!=e?e.description:e))?s:n.helperMissing,r="function"==typeof s?s.call(null!=e?e:t.nullContext||{},{name:"description",hash:{},data:a}):s)?r:"")+"\n\t\t\t\t\t</td>\n\t\t\t\t</tr>\n"},6:function(t,e,n,l,a){return"\t\t\t\t\t<th>"+t.escapeExpression(t.lambda(e,e))+"</th>\n"},8:function(t,e,n,l,a,r,s){var i=t.escapeExpression,u=null!=e?e:t.nullContext||{},o=n.helperMissing;return'\t\t<tbody class="'+i(t.lambda(null!=s[1]?s[1]["class-merge"]:s[1],e))+' table-inner" id="'+i((n.lastGeneratedId||e&&e.lastGeneratedId||o).call(u,{name:"lastGeneratedId",hash:{context:s[1]},data:a}))+'-merge">\n\t\t\t'+i((n.enterModule||e&&e.enterModule||o).call(u,s[1],{name:"enterModule",hash:{items:null!=s[1]?s[1].items:s[1],itemDBKey:null!=s[1]?s[1].itemDBKey:s[1]},data:a}))+"\n\t\t</tbody>\n"},compiler:[7,">= 4.0.0"],main:function(t,e,n,l,a,r,s){var i,u,o,d=null!=e?e:t.nullContext||{},c=n.helperMissing,h="<table ";return u=null!=(u=n.generateId||(null!=e?e.generateId:e))?u:c,o={name:"generateId",hash:{},fn:t.program(1,a,0,r,s),inverse:t.noop,data:a},i="function"==typeof u?u.call(d,o):u,n.generateId||(i=n.blockHelperMissing.call(e,i,o)),null!=i&&(h+=i),h+' class="table table-hover '+t.escapeExpression((u=null!=(u=n.class||(null!=e?e.class:e))?u:c,"function"==typeof u?u.call(d,{name:"class",hash:{},data:a}):u))+'">\n'+(null!=(i=n.if.call(d,null!=(i=null!=e?e.header:e)?i.titles:i,{name:"if",hash:{},fn:t.program(3,a,0,r,s),inverse:t.noop,data:a}))?i:"")+(null!=(i=(n.withModule||e&&e.withModule||c).call(d,e,"inner",{name:"withModule",hash:{},fn:t.program(8,a,0,r,s),inverse:t.noop,data:a}))?i:"")+"</table>"},useData:!0,useDepths:!0})}();