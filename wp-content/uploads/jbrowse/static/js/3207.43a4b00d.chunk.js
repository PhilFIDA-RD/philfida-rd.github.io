"use strict";(self.webpackChunk_jbrowse_web=self.webpackChunk_jbrowse_web||[]).push([[3207,477],{23207:function(e,t,r){r.r(t),r.d(t,{parseBedBuffer:function(){return f},parseBedPEBuffer:function(){return l},removeBedHeaders:function(){return p}});var n=r(32723),a=r(34795),u=r(20477),s="browser ".split("").map((function(e){return e.charCodeAt(0)})),c="track ".split("").map((function(e){return e.charCodeAt(0)})),o="#".split("").map((function(e){return e.charCodeAt(0)}));function i(e,t,r){for(var n=0;n<r.length;n+=1)if(t[e+n]!==r[n])return!1;return!0}function p(e){for(var t=0;t<e.length&&(i(t,e,s)||i(t,e,c)||i(t,e,o));t+=1)do{t+=1}while(10!==e[t]);return t?e.slice(t):e}function f(e,t){return d.apply(this,arguments)}function d(){return(d=(0,a.Z)((0,n.Z)().mark((function e(t,r){var a,s,c;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return a=p(t),e.next=3,(0,u.parseTsvBuffer)(a);case 3:return s=e.sent,c=[{name:"chrom",dataType:{type:"LocRef"}},{name:"chromStart",dataType:{type:"LocStart"}},{name:"chromEnd",dataType:{type:"LocEnd"}},{name:"name",dataType:{type:"Text"}},{name:"score",dataType:{type:"Number"}},{name:"strand",dataType:{type:"Text"}}],s.columns.forEach((function(e,t){var r=c[t];r&&(e.name=r.name,e.dataType=r.dataType)})),s.hasColumnNames=!0,s.assemblyName=r.selectedAssemblyName,s.columnDisplayOrder.push(s.columnDisplayOrder.length),s.columns.unshift({name:"Location",dataType:{type:"LocString"},isDerived:!0,derivationFunctionText:"jexl:{text:row.cells[0].text+':'+row.cells[1].text+'..'+row.cells[2].text,\n\n    extendedData: {refName: row.cells.ref.text, start: parseInt(row.cells.start.text,10), end: parseInt(row.cells.end.text,10)}}"}),e.abrupt("return",s);case 11:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function l(e,t){return m.apply(this,arguments)}function m(){return(m=(0,a.Z)((0,n.Z)().mark((function e(t,r){var a,s,c;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return a=p(t),e.next=3,(0,u.parseTsvBuffer)(a);case 3:return s=e.sent,c=[{name:"chrom1",dataType:{type:"Text"},featureField:["refName"]},{name:"start1",dataType:{type:"Number"},featureField:["start"]},{name:"end1",dataType:{type:"Number"},featureField:["end"]},{name:"chrom2",dataType:{type:"Text"},featureField:["mate","refName"]},{name:"start2",dataType:{type:"Number"},featureField:["mate","start"]},{name:"end2",dataType:{type:"Number"},featureField:["mate","end"]},{name:"name",dataType:{type:"Text"},featureField:["name"]},{name:"score",dataType:{type:"Number"},featureField:["score"]},{name:"strand1",dataType:{type:"Text"},featureField:["strand"]},{name:"strand2",dataType:{type:"Text"},featureField:["mate","strand"]}],s.columns.forEach((function(e,t){var r=c[t];r&&(e.name=r.name,e.dataType=r.dataType)})),s.hasColumnNames=!0,s.rowSet.rows.forEach((function(e,t){var r={};e.cells.forEach((function(e,t){var n=e.text,a=c[t],u=a&&"Number"===a.dataType.type&&n?parseFloat(n):n;a?2===a.featureField.length?(r[a.featureField[0]]||(r[a.featureField[0]]={}),r[a.featureField[0]][a.featureField[1]]=u):r[a.featureField[0]]=u:r["column".concat(t+1)]=u})),r.uniqueId="bedpe-".concat(t),e.extendedData={feature:r}})),s.assemblyName=r.selectedAssemblyName,e.abrupt("return",s);case 10:case"end":return e.stop()}}),e)})))).apply(this,arguments)}},20477:function(e,t,r){r.r(t),r.d(t,{bufferToString:function(){return i},parseCsvBuffer:function(){return m},parseTsvBuffer:function(){return h}});var n=r(32723),a=r(33028),u=r(41361),s=r(96234),c=r(34795),o=r(95802);function i(e){return new TextDecoder("utf8",{fatal:!0}).decode(e)}function p(e){return f.apply(this,arguments)}function f(){return f=(0,c.Z)((0,n.Z)().mark((function e(t){var u,s,c=arguments;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return u=c.length>1&&void 0!==c[1]?c[1]:{},e.next=3,r.e(8639).then(r.t.bind(r,88639,23)).then((function(e){return e.default}));case 3:return s=e.sent,e.abrupt("return",s((0,a.Z)({noheader:!0,output:"csv"},u)).fromString(i(t)));case 5:case"end":return e.stop()}}),e)}))),f.apply(this,arguments)}function d(e,t,r){var n,a=e.rows[0].cells[t].text||"",u="Text";try{n=(0,o.parseLocString)(a,r)}catch(s){}return n&&n.refName&&"number"===typeof n.start?u="LocString":/^\d+(\.\d+)?$/.test(a)&&(u="Number"),u}function l(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},r=t.hasColumnNameLine,n=void 0!==r&&r,a=t.columnNameLineNumber,c=void 0===a?1:a,i=t.isValidRefName,p=void 0===i?function(){return!1}:i,f=t.selectedAssemblyName,l=0,m={isLoaded:!0,rows:e.map((function(e,t){var r=t+(n?0:1);return e.length>l&&(l=e.length),{id:String(r),cells:e.map((function(e,t){return{columnNumber:t,text:e}}))}}))},y={};if(n&&void 0!==c){var h=m.rows.splice(c-1,1),v=(0,s.Z)(h,1)[0];v&&v.cells.forEach((function(e,t){y[t]=e.text||""}))}for(var T=[],x=[],b=0;b<l;b+=1){x.push(b);var w=d(m,b,p);if("LocString"===w){var N,F=(0,u.Z)(m.rows);try{for(F.s();!(N=F.n()).done;){var Z=N.value.cells[b];Z.extendedData=(0,o.parseLocString)(Z.text,p)}}catch(g){F.e(g)}finally{F.f()}}T[b]={name:y[b],dataType:{type:w}}}return{rowSet:m,columnDisplayOrder:x,hasColumnNames:!!n,columns:T,assemblyName:f}}function m(e,t){return y.apply(this,arguments)}function y(){return(y=(0,c.Z)((0,n.Z)().mark((function e(t,r){var a;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,p(t);case 2:return a=e.sent,e.abrupt("return",l(a,r));case 4:case"end":return e.stop()}}),e)})))).apply(this,arguments)}function h(e,t){return v.apply(this,arguments)}function v(){return(v=(0,c.Z)((0,n.Z)().mark((function e(t,r){var a;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,p(t,{delimiter:"\t"});case 2:return a=e.sent,e.abrupt("return",l(a,r));case 4:case"end":return e.stop()}}),e)})))).apply(this,arguments)}}}]);
//# sourceMappingURL=3207.43a4b00d.chunk.js.map