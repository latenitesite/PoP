!function(){var t=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["layoutpost-typeahead-component"]=t({1:function(t,l,n,a,e){var i,s=null!=l?l:t.nullContext||{},h=n.helperMissing,u=t.escapeExpression;return'\t\t<div class="pull-left">\n\t\t\t<img src="'+u((i=null!=(i=n.src||(null!=l?l.src:l))?i:h,"function"==typeof i?i.call(s,{name:"src",hash:{},data:e}):i))+'" width="'+u((i=null!=(i=n.width||(null!=l?l.width:l))?i:h,"function"==typeof i?i.call(s,{name:"width",hash:{},data:e}):i))+'" height="'+u((i=null!=(i=n.height||(null!=l?l.height:l))?i:h,"function"==typeof i?i.call(s,{name:"height",hash:{},data:e}):i))+'">\n\t\t</div>\n'},compiler:[7,">= 4.0.0"],main:function(t,l,n,a,e){var i,s,h=null!=l?l:t.nullContext||{};return'<div class="media clearfix">\n'+(null!=(i=n.with.call(h,null!=l?l["thumb-xs"]:l,{name:"with",hash:{},fn:t.program(1,e,0),inverse:t.noop,data:e}))?i:"")+'\t<div class="media-body">\n\t\t<h4 class="media-heading">'+(null!=(s=null!=(s=n.title||(null!=l?l.title:l))?s:n.helperMissing,i="function"==typeof s?s.call(h,{name:"title",hash:{},data:e}):s)?i:"")+"</h4>\n\t</div>\n</div>"},useData:!0})}();