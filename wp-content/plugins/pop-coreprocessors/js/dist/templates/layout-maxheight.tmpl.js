!function(){var n=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["layout-maxheight"]=n({1:function(n,e,l,t,a,s,r){var i,u=null!=e?e:n.nullContext||{},o=n.lambda,h=n.escapeExpression;return"\t<div "+(null!=(i=(l.generateId||e&&e.generateId||l.helperMissing).call(u,{name:"generateId",hash:{context:r[1]},fn:n.program(2,a,0,s,r),inverse:n.noop,data:a}))?i:"")+' class="js-dynamic-height '+h(o(null!=r[1]?r[1].class:r[1],e))+'" data-maxheight="'+h(o(null!=r[1]?r[1].maxheight:r[1],e))+'" '+(null!=(i=l.each.call(u,null!=r[1]?r[1].params:r[1],{name:"each",hash:{},fn:n.program(4,a,0,s,r),inverse:n.noop,data:a}))?i:"")+'>\n\t\t<div class="inner dynamic-height-wrap">\n'+(null!=(i=l.each.call(u,null!=(i=null!=r[1]?r[1]["template-ids"]:r[1])?i.inners:i,{name:"each",hash:{},fn:n.program(6,a,0,s,r),inverse:n.noop,data:a}))?i:"")+'\t\t</div>\n\t\t<div class="dynamicbtn-wrapper">\n\t\t\t<button class="js-dynamic-show-hide button '+h(o(null!=(i=null!=r[1]?r[1].classes:r[1])?i.btn:i,e))+'" title="'+h(o(null!=(i=null!=r[1]?r[1].titles:r[1])?i.more:i,e))+'" data-replace-text="'+h(o(null!=(i=null!=r[1]?r[1].titles:r[1])?i.less:i,e))+'">'+h(o(null!=(i=null!=r[1]?r[1].titles:r[1])?i.more:i,e))+"</button>\n\t\t</div>\n\t</div>\n"},2:function(n,e,l,t,a,s,r){return n.escapeExpression(n.lambda(null!=r[1]?r[1].id:r[1],e))},4:function(n,e,l,t,a){var s,r=n.escapeExpression;return" "+r((s=null!=(s=l.key||a&&a.key)?s:l.helperMissing,"function"==typeof s?s.call(null!=e?e:n.nullContext||{},{name:"key",hash:{},data:a}):s))+'="'+r(n.lambda(e,e))+'"'},6:function(n,e,l,t,a,s,r){var i;return null!=(i=(l.withModule||e&&e.withModule||l.helperMissing).call(null!=e?e:n.nullContext||{},r[2],e,{name:"withModule",hash:{},fn:n.program(7,a,0,s,r),inverse:n.noop,data:a}))?i:""},7:function(n,e,l,t,a,s,r){return"\t\t\t\t\t"+n.escapeExpression((l.enterModule||e&&e.enterModule||l.helperMissing).call(null!=e?e:n.nullContext||{},r[3],{name:"enterModule",hash:{},data:a}))+"\n"},compiler:[7,">= 4.0.0"],main:function(n,e,l,t,a,s,r){var i;return null!=(i=l.with.call(null!=e?e:n.nullContext||{},null!=e?e.itemObject:e,{name:"with",hash:{},fn:n.program(1,a,0,s,r),inverse:n.noop,data:a}))?i:""},useData:!0,useDepths:!0})}();