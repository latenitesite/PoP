!function(){var t=Handlebars.template;(Handlebars.templates=Handlebars.templates||{})["em-calendar-inner"]=t({1:function(t,n,a,e,l,r,s){var i;return null!=(i=(a.withItemObject||n&&n.withItemObject||a.helperMissing).call(null!=n?n:t.nullContext||{},null!=s[1]?s[1].itemDBKey:s[1],n,{name:"withItemObject",hash:{},fn:t.program(2,l,0,r,s),inverse:t.noop,data:l}))?i:""},2:function(t,n,a,e,l){var r,s=null!=n?n:t.nullContext||{},i=a.helperMissing,d="function",u=t.escapeExpression;return'\t\t\tevents_data.push({\n\t\t\t\tid: "'+u((r=null!=(r=a.id||(null!=n?n.id:n))?r:i,typeof r===d?r.call(s,{name:"id",hash:{},data:l}):r))+'",\n\t\t\t\ttitle: "'+u((r=null!=(r=a.title||(null!=n?n.title:n))?r:i,typeof r===d?r.call(s,{name:"title",hash:{},data:l}):r))+'",\n\t\t\t\tstart: "'+u((r=null!=(r=a["start-date"]||(null!=n?n["start-date"]:n))?r:i,typeof r===d?r.call(s,{name:"start-date",hash:{},data:l}):r))+'",\n\t\t\t\tend: "'+u((r=null!=(r=a["end-date"]||(null!=n?n["end-date"]:n))?r:i,typeof r===d?r.call(s,{name:"end-date",hash:{},data:l}):r))+'",\n\t\t\t\tallDay: '+u((r=null!=(r=a["all-day-string"]||(null!=n?n["all-day-string"]:n))?r:i,typeof r===d?r.call(s,{name:"all-day-string",hash:{},data:l}):r))+"\t\n\t\t\t});\n"},compiler:[7,">= 4.0.0"],main:function(t,n,a,e,l,r,s){var i;return'<script type="text/javascript">\n(function($){\n\tvar events_data = [];\n\t\n'+(null!=(i=a.each.call(null!=n?n:t.nullContext||{},null!=n?n.items:n,{name:"each",hash:{},fn:t.program(1,l,0,r,s),inverse:t.noop,data:l}))?i:"")+"\n\t$(document).one('template:merged', function() {\n\n\t\tvar block = popManager.getBlock($('#"+t.escapeExpression(t.lambda(null!=(i=null!=n?n.bs:n)?i.bId:i,n))+"'));\n\t\tvar pageSection = popManager.getPageSection(block);\n\t\tpopFullCalendar.addEvents(pageSection, block, events_data);\n\t});\n\t\n})(jQuery);\n<\/script>\n"},useData:!0,useDepths:!0})}();