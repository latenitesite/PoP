!function(){var n=Handlebars.template;(Handlebars.templates=Handlebars.templates||{}).hideifempty=n({1:function(n,e,a,l,t,r,i){var s;return'\t<span class="hidden" '+(null!=(s=(a.generateId||e&&e.generateId||a.helperMissing).call(null!=e?e:n.nullContext||{},{name:"generateId",hash:{context:i[1]},fn:n.program(2,t,0,r,i),inverse:n.noop,data:t}))?s:"")+"></span>\n"},2:function(n,e,a,l,t,r,i){var s,u=n.escapeExpression;return u(n.lambda(null!=i[1]?i[1].id:i[1],e))+"-"+u((s=null!=(s=a.id||(null!=e?e.id:e))?s:a.helperMissing,"function"==typeof s?s.call(null!=e?e:n.nullContext||{},{name:"id",hash:{},data:t}):s))},compiler:[7,">= 4.0.0"],main:function(n,e,a,l,t,r,i){var s;return null!=(s=a.with.call(null!=e?e:n.nullContext||{},null!=e?e.itemObject:e,{name:"with",hash:{},fn:n.program(1,t,0,r,i),inverse:n.noop,data:t}))?s:""},useData:!0,useDepths:!0})}();