!function(){var e=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["pagesectionextension-replicable"]=e({1:function(e,l,t,n,a,r,u){var i;return null!=(i=(t.withBlock||l&&l.withBlock||t.helperMissing).call(null!=l?l:e.nullContext||{},u[1],l,{name:"withBlock",hash:{},fn:e.program(2,a,0,r,u),inverse:e.noop,data:a}))?i:""},2:function(e,l,t,n,a,r,u){var i,s,p=null!=l?l:e.nullContext||{},o=t.helperMissing,c=e.escapeExpression;return'\t\t<a class="pop-interceptor" '+c((t.interceptAttr||l&&l.interceptAttr||o).call(p,{name:"interceptAttr",hash:{context:u[2]},data:a}))+" "+(null!=(i=(t.generateId||l&&l.generateId||o).call(p,{name:"generateId",hash:{group:"replicate-interceptor",targetId:null!=(i=null!=u[2]?u[2].pss:u[2])?i.pssId:i,context:u[2]},fn:e.program(3,a,0,r,u),inverse:e.noop,data:a}))?i:"")+" "+(null!=(i=t.if.call(p,null!=u[2]?u[2]["intercept-skipstateupdate"]:u[2],{name:"if",hash:{},fn:e.program(5,a,0,r,u),inverse:e.noop,data:a}))?i:"")+' data-replicate-type="'+c((t.get||l&&l.get||o).call(p,null!=u[2]?u[2]["replicate-types"]:u[2],null!=l?l.template:l,{name:"get",hash:{},data:a}))+'" '+(null!=(i=(t.ifget||l&&l.ifget||o).call(p,null!=u[2]?u[2]["unique-urls"]:u[2],null!=l?l.template:l,{name:"ifget",hash:{},fn:e.program(7,a,0,r,u),inverse:e.noop,data:a}))?i:"")+' data-intercept-url="'+(null!=(i=(t.withSublevel||l&&l.withSublevel||o).call(p,null!=u[2]?u[2].template:u[2],{name:"withSublevel",hash:{context:null!=(i=null!=(i=null!=u[2]?u[2].pss:u[2])?i.feedback:i)?i["intercept-urls"]:i},fn:e.program(9,a,0,r,u),inverse:e.noop,data:a}))?i:"")+'" data-title="'+c((s=null!=(s=t.title||(null!=l?l.title:l))?s:o,"function"==typeof s?s.call(p,{name:"title",hash:{},data:a}):s))+'" data-block-settingsid="'+c(e.lambda(u[1],l))+'"></a>\n\t\t<span class="pop-interceptor-blocksettingsids hidden">\n\t\t\t'+(null!=(i=(t.withSublevel||l&&l.withSublevel||o).call(p,null!=u[2]?u[2].template:u[2],{name:"withSublevel",hash:{context:null!=(i=null!=(i=null!=u[2]?u[2].pss:u[2])?i.feedback:i)?i["replicate-blocksettingsids"]:i},fn:e.program(11,a,0,r,u),inverse:e.noop,data:a}))?i:"")+"\n\t\t</span>\n"},3:function(e,l,t,n,a,r,u){var i,s=e.lambda,p=e.escapeExpression;return p(s(null!=u[2]?u[2].id:u[2],l))+p(s(null!=(i=null!=(i=null!=u[2]?u[2].tls:u[2])?i.feedback:i)?i["unique-id"]:i,l))+"-"+p(s(u[1],l))},5:function(e,l,t,n,a){return'data-intercept-skipstateupdate="true"'},7:function(e,l,t,n,a){return'data-unique-url="true"'},9:function(e,l,t,n,a,r,u){return e.escapeExpression((t.get||l&&l.get||t.helperMissing).call(null!=l?l:e.nullContext||{},l,null!=u[1]?u[1].template:u[1],{name:"get",hash:{},data:a}))},11:function(e,l,t,n,a,r,u){var i;return null!=(i=(t.withget||l&&l.withget||t.helperMissing).call(null!=l?l:e.nullContext||{},l,null!=u[1]?u[1].template:u[1],{name:"withget",hash:{},fn:e.program(12,a,0,r,u),inverse:e.noop,data:a}))?i:""},12:function(e,l,t,n,a){var r;return null!=(r=t.each.call(null!=l?l:e.nullContext||{},l,{name:"each",hash:{},fn:e.program(13,a,0),inverse:e.noop,data:a}))?r:""},13:function(e,l,t,n,a){var r,u=e.escapeExpression;return'<span data-key="'+u((r=null!=(r=t.key||a&&a.key)?r:t.helperMissing,"function"==typeof r?r.call(null!=l?l:e.nullContext||{},{name:"key",hash:{},data:a}):r))+'" data-value="'+u(e.lambda(l,l))+'"></span>'},compiler:[7,">= 4.0.0"],main:function(e,l,t,n,a,r,u){var i;return null!=(i=t.each.call(null!=l?l:e.nullContext||{},null!=(i=null!=l?l["block-settings-ids"]:l)?i["blockunits-replicable"]:i,{name:"each",hash:{},fn:e.program(1,a,0,r,u),inverse:e.noop,data:a}))?i:""},useData:!0,useDepths:!0})}();