!function(){var n=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["layout-volunteertag"]=n({1:function(n,l,e,a,t,u,r){var s;return null!=(s=e.if.call(null!=l?l:n.nullContext||{},null!=l?l["volunteers-needed"]:l,{name:"if",hash:{},fn:n.program(2,t,0,u,r),inverse:n.noop,data:t}))?s:""},2:function(n,l,e,a,t,u,r){var s,o=n.lambda;return'\t\t<span class="'+n.escapeExpression(o(null!=r[1]?r[1].class:r[1],l))+'">'+(null!=(s=o(null!=(s=null!=r[1]?r[1].titles:r[1])?s.volunteer:s,l))?s:"")+"</span>\n"},compiler:[7,">= 4.0.0"],main:function(n,l,e,a,t,u,r){var s;return(null!=(s=e.with.call(null!=l?l:n.nullContext||{},null!=l?l.itemObject:l,{name:"with",hash:{},fn:n.program(1,t,0,u,r),inverse:n.noop,data:t}))?s:"")+"\n"},useData:!0,useDepths:!0})}();