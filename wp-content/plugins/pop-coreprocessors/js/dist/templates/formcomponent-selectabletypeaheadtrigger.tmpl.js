!function(){var n=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["formcomponent-selectabletypeaheadtrigger"]=n({1:function(n,e,l,a,t){var s;return n.escapeExpression((s=null!=(s=l.id||(null!=e?e.id:e))?s:l.helperMissing,"function"==typeof s?s.call(null!=e?e:n.nullContext||{},{name:"id",hash:{},data:t}):s))},3:function(n,e,l,a,t){var s;return null!=(s=l.if.call(null!=e?e:n.nullContext||{},null!=e?e["cannot-close-ids"]:e,{name:"if",hash:{},fn:n.program(4,t,0),inverse:n.program(7,t,0),data:t}))?s:""},4:function(n,e,l,a,t){var s;return null!=(s=(l.compare||e&&e.compare||l.helperMissing).call(null!=e?e:n.nullContext||{},null!=(s=null!=e?e.itemObject:e)?s.id:s,null!=e?e["cannot-close-ids"]:e,{name:"compare",hash:{operator:"notin"},fn:n.program(5,t,0),inverse:n.noop,data:t}))?s:""},5:function(n,e,l,a,t){return'\t\t\t\t<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n'},7:function(n,e,l,a,t){return'\t\t\t<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n'},9:function(n,e,l,a,t,s,u){return"\t\t"+n.escapeExpression((l.enterModule||e&&e.enterModule||l.helperMissing).call(null!=e?e:n.nullContext||{},u[1],{name:"enterModule",hash:{},data:t}))+"\n"},compiler:[7,">= 4.0.0"],main:function(n,e,l,a,t,s,u){var o,r,i,c=null!=e?e:n.nullContext||{},p=l.helperMissing,d="function",h=n.lambda,m=n.escapeExpression,f="<div ";return r=null!=(r=l.generateId||(null!=e?e.generateId:e))?r:p,i={name:"generateId",hash:{},fn:n.program(1,t,0,s,u),inverse:n.noop,data:t},o=typeof r===d?r.call(c,i):r,l.generateId||(o=l.blockHelperMissing.call(e,o,i)),null!=o&&(f+=o),f+' class="alert in '+m(h(null!=(o=null!=e?e.classes:e)?o.alert:o,e))+" "+m((r=null!=(r=l.class||(null!=e?e.class:e))?r:p,typeof r===d?r.call(c,{name:"class",hash:{},data:t}):r))+' pop-typeahead-selected">\n\t'+(null!=(r=null!=(r=l.description||(null!=e?e.description:e))?r:p,o=typeof r===d?r.call(c,{name:"description",hash:{},data:t}):r)?o:"")+"\n"+(null!=(o=l.if.call(c,null!=e?e["show-close-btn"]:e,{name:"if",hash:{},fn:n.program(3,t,0,s,u),inverse:n.noop,data:t}))?o:"")+(null!=(o=(l.withModule||e&&e.withModule||p).call(c,e,"layout-selected",{name:"withModule",hash:{},fn:n.program(9,t,0,s,u),inverse:n.noop,data:t}))?o:"")+'\t<input type="hidden" value="'+m(h(null!=(o=null!=e?e.itemObject:e)?o.id:o,e))+'" name="'+m((r=null!=(r=l["input-name"]||(null!=e?e["input-name"]:e))?r:p,typeof r===d?r.call(c,{name:"input-name",hash:{},data:t}):r))+'[]" class="'+m((r=null!=(r=l["input-class"]||(null!=e?e["input-class"]:e))?r:p,typeof r===d?r.call(c,{name:"input-class",hash:{},data:t}):r))+'">\n</div>\n'},useData:!0,useDepths:!0})}();