!function(){var a=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["aal-layout-notificationtime"]=a({1:function(a,n,t,e,l,i,s){var r,o,m=a.lambda,u=a.escapeExpression,c=null!=n?n:a.nullContext||{},d=t.helperMissing;return'\t<div class="time '+u(m(null!=s[1]?s[1].class:s[1],n))+'" data-time="'+u((o=null!=(o=t["hist-time-nogmt"]||(null!=n?n["hist-time-nogmt"]:n))?o:d,"function"==typeof o?o.call(c,{name:"hist-time-nogmt",hash:{},data:l}):o))+'" data-format="'+u(m(null!=s[1]?s[1].format:s[1],n))+'" '+(null!=(r=(t.generateId||n&&n.generateId||d).call(c,{name:"generateId",hash:{context:s[1]},fn:a.program(2,l,0,i,s),inverse:a.noop,data:l}))?r:"")+"></div>\n"},2:function(a,n,t,e,l,i,s){return a.escapeExpression(a.lambda(null!=s[1]?s[1].id:s[1],n))},compiler:[7,">= 4.0.0"],main:function(a,n,t,e,l,i,s){var r;return null!=(r=t.with.call(null!=n?n:a.nullContext||{},null!=n?n.itemObject:n,{name:"with",hash:{},fn:a.program(1,l,0,i,s),inverse:a.noop,data:l}))?r:""},useData:!0,useDepths:!0})}();