"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2823],{43005:function(n,e,r){r.d(e,{Cp:function(){return i},E:function(){return s},Er:function(){return w},G:function(){return a},Hm:function(){return q},M:function(){return F},Mz:function(){return S},NJ:function(){return c},OV:function(){return m},On:function(){return A},P7:function(){return D},So:function(){return T},Th:function(){return p},US:function(){return b},W6:function(){return l},ZN:function(){return H},Zj:function(){return y},_X:function(){return u},gO:function(){return t},kH:function(){return z},mD:function(){return k},pG:function(){return N},pP:function(){return d},pQ:function(){return I},r0:function(){return O},rh:function(){return g},sQ:function(){return v},y8:function(){return _},yF:function(){return o},yh:function(){return f},zf:function(){return h}});var t=150,i=24,o=175,u=54,c=40,a=200,l=14,d=100,v=12,s=160,m=1,f=1.777,_=.5,p=9/16,y=.6,g="".concat(100*p,"%"),T=1/p,b=m,q=1.4,w=.7142857142857143,h=1.775,S=40,k=1,D=57,N=280,A="350px",H=90,I=90,z=135,F={elevation:0},O="140px"},2823:function(n,e,r){r.d(e,{nR:function(){return O},Oo:function(){return N},id:function(){return _},jz:function(){return p},SL:function(){return F},mF:function(){return z},SS:function(){return A},Nf:function(){return S},FG:function(){return D},AR:function(){return k},Lr:function(){return f},DN:function(){return w},Sw:function(){return b},Vt:function(){return T},hQ:function(){return h},kS:function(){return I},Z:function(){return H}});var t=r(57460),i=r(6692),o=r(63775),u=r(97956),c=r(43005),a=r(38597),l=(n,e)=>{var r=0;return n&&e?n.quality>e.quality?r=1:n.quality<e.quality&&(r=-1):!n&&e?r=1:n&&!e&&(r=-1),r},d=r(97990),v=r(14401),s=r(72726),m=r(33055),f=n=>(null==n?void 0:n.image)?n.image:(null==n?void 0:n.mediaItem)?n.mediaItem:n,_=n=>{var{asset:e}=n,r=f(e),{aspect:t,aspectRatioCommon:i}=r;if(t)return t;if(i)return(0,a.Hz)({aspectRatioCommon:i});if((0,s.w5)(r))return 1;if((0,s.vh)(e.type)){var{width:o,height:u}=e;return(0,a.n3)({width:o,height:u})||c.So}return c.So},p=n=>1/_({asset:n}),y=n=>{var e=(0,s.EK)(n);return(0,i._)((0,t._)({},n),{src:n.previewImageUrl,alt:n.description,aspect:c.zf,link:e?"/editorial/detail-".concat(n.id):"/video/".concat(n.description,"-").concat(n.id)})},g=n=>"?width=".concat(n>=.75&&n<3?500:n>=3&&n<6||n<.75&&n>.45?900:1200),T=n=>{var{height:e,width:r}=n,t=(0,a.n3)({height:e,width:r}),i="".concat(n.src||n.previewUrls[0]).concat(g(t),"&format=webp");return{id:n.id,title:n.title,description:n.description||n.title,alt:n.alt||n.title,src:i,height:e,width:r}},b=function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};switch(null==n?void 0:n.type){case"collection-items":return b((0,i._)((0,t._)({},n),{type:n.itemType}));case u.pX:case u.FM:return y(n);case u.jr:case u.pV:case u.k4:case u.Y_:return n;case u.hv:return T(n);default:return{}}},q=(n,e)=>l(o.c3[n],o.c3[e]),w=(n,e)=>n&&e&&q(n,e)>=0,h=n=>Array.isArray(n)?n.filter(n=>m.nd[n.name&&(0,d.z)(n.name)]).map(n=>{var e=n.name&&(0,d.z)(n.name),r=m.nd[e].quality||0;return(0,i._)((0,t._)({},n),{quality:r})}).sort((n,e)=>e.quality-n.quality):{},S=n=>Array.isArray(n)?h(n)[0]:{},k=n=>{var{sizes:e,compSizeImage:r}=n;return Array.isArray(e)&&r?e.find(n=>(0,d.z)(n.name)===m.Bg[r]):{}},D=n=>Array.isArray(n)?n.map(n=>{var e,r=null===(e=n.name)||void 0===e?void 0:e.split("_")[0];return(0,i._)((0,t._)({},n),{quality:o.c3[r]&&o.c3[r].quality})}).sort((n,e)=>e.quality-n.quality)[0]:{};m.nd,o.c3;var N=n=>{var e=n.length&&n.sort((n,e)=>{var r,t;return(null===(r=o.c3[e])||void 0===r?void 0:r.quality)-(null===(t=o.c3[n])||void 0===t?void 0:t.quality)})[0];return o.c3[e]&&e},A=n=>{var{asset:e}=n;return[u.k4,u.Y_,u.ox].includes(e.type)?u.pV:e.type===u.FM?u.pX:e.type===u.jr?u.j0:e.type},H=n=>{var{sizes:e}=n;return e&&Object.keys(e).map(n=>{var r=n.split("_")[0],i=o.c3[r];return i?(0,t._)({},e[n],i):{}}).sort((n,e)=>e.quality-n.quality)},I=n=>Array.isArray(n)?n.map(n=>{var e,r=null===(e=n.name)||void 0===e?void 0:e.split("_")[0];return(0,i._)((0,t._)({},n),{cartOrder:o.c3[r]&&o.c3[r].cartOrder})}).sort((n,e)=>n.cartOrder-e.cartOrder):[],z=n=>{var e,r=H({sizes:n});return null==r?void 0:null===(e=r[0])||void 0===e?void 0:e.name},F=n=>{var e,{sizes:r,subscriptions:t,licenseTypeToUse:i,assetType:o}=n,u=H({sizes:r});return null==u||u.every(n=>{var r,{name:u}=n,c=null===(r=m.Mq[u])||void 0===r?void 0:r[i],a=(0,v.I)({assetType:o,subscriptions:t,selectedLicenseId:c});return a&&(e=u),!a}),e},O=n=>![o.Zh,o.qY,o.rf,o.SD,o.dn,o.HD].some(e=>{var r;return(null===(r=n[1])||void 0===r?void 0:r.name)===e})},33055:function(n,e,r){r.d(e,{Bg:function(){return a},Mq:function(){return _},Oy:function(){return l},Q1:function(){return s},kR:function(){return v},nd:function(){return c},wb:function(){return f}});var t=r(57460),i=r(6692),o=r(63775),u=r(22253),c={[o._0]:{quality:1,name:"small",downloadName:"small",label:"common:image_size_small"},[o.Ke]:{quality:1,name:"small",downloadName:"small",label:"common:image_size_small"},[o.m4]:{quality:2,name:"medium",downloadName:"medium",label:"common:image_size_medium"},[o.Fq]:{quality:2,name:"medium",downloadName:"medium",label:"common:image_size_medium"},[o.v2]:{quality:3,displayName:"large",name:"large",downloadName:"huge",label:"common:image_size_large"},[o.R7]:{quality:3,name:"large",downloadName:"huge",label:"common:image_size_large"},[o.x0]:{quality:4,name:"vector",downloadName:"vector",label:"common:image_size_vector"},[o.Vw]:{quality:4,name:"vector",downloadName:"vector",label:"common:image_size_vector"},[o.JF]:{quality:3,name:"large",downloadName:"large",label:"common:image_size_large"},[o.JJ]:{quality:3,name:o.JJ,downloadName:o.JJ,label:"PNG"},[o.HX]:{quality:3,name:o.HX,downloadName:o.HX,label:"PSD"}},a={[o.Xk]:o.v2,[o.Fm]:o.m4,[o._I]:o._0,[o.Nu]:o._0},l={LEGACY_TO_SSTK:{ultrahd4k:"4k",web:"low",lowres:"low"},SSTK_TO_LEGACY:{low:"web","4k":"ultrahd4k"},SSTK_TO_LEGACY_ELIGIBILTY:(0,i._)((0,t._)({},{low:"lowres"}),{"4k":"ultrahd4k"})},d=n=>{var{licenseType:e,isOnlySDVideoAvailable:r}=n;return{["footage_".concat(e,"_4k")]:o.yF,["footage_".concat(e,"_hd")]:r?o.SD:o.HD,["footage_".concat(e,"_sd")]:o.SD,["footage_".concat(e,"_lowres")]:o.T0}},v=u.oPg.reduce((n,e)=>(0,t._)({},n,d({licenseType:e})),{}),s=u.oPg.reduce((n,e)=>(0,t._)({},n,d({licenseType:e,isOnlySDVideoAvailable:!0})),{}),m=n=>{var{resolutionAbbr:e}=n;return{[u.azy]:"footage_premier_".concat(e),[u.luK]:"footage_platform_".concat(e),[u.dWR]:"footage_media_".concat(e),[u.IuI]:"footage_sm_premier_".concat(e),[u.CSe]:"footage_sm_media_".concat(e),[u.s5m]:"footage_select_premier_".concat(e),[u.Hv9]:"footage_select_media_".concat(e),[u.TP0]:"footage_comp_".concat(e)}},f={[o.yF]:o.yF,[o.HD]:o.HD,[o.SD]:o.SD,[o.qY]:o.qY,[o.qG]:o.yF,[o.dn]:o.HD,[o.rf]:o.SD,[o.Zh]:o.qY,[o.L0]:o.HD,[o.Ae]:o.SD,[o.vD]:o.HD,[o.yE]:o.qY},_=[o.yF,o.HD,o.SD,o.yE,o.qY,o.qG,o.dn,o.rf,o.Zh,o.L0,o.Ae,o.vD].reduce((n,e)=>(0,i._)((0,t._)({},n),{[e]:m({resolutionAbbr:f[e]})}),{})},89798:function(n,e,r){r.d(e,{H:function(){return i}});var t=r(94095),i=n=>{var{priceType:e,price:r,currency:i,activityTracking:o}=n;return o===t.nm&&e===t.vh?{priceAsAbsolute:{price:r,priceType:t.Br,currency:i}}:{}}},26844:function(n,e,r){r.d(e,{I:function(){return t}});var t=n=>{var e,r,t,{subscription:i}=n,o=null==i?void 0:null===(e=i.currentAllotments)||void 0===e?void 0:e.length;return null==i?void 0:null===(t=i.currentAllotments)||void 0===t?void 0:null===(r=t[o-1])||void 0===r?void 0:r.creditsRemaining}},25323:function(n,e,r){r.d(e,{r:function(){return i}});var t=r(26844),i=n=>{var{subscription:e}=n,r=(0,t.I)({subscription:e});return null===r||r>0}},46743:function(n,e,r){r.d(e,{q:function(){return i}});var t=r(94095),i=n=>{var e,r,i,{subscription:o}=n;return!!((null==o?void 0:o.isUnlimited)||(null==o?void 0:null===(r=o.currentLicenses)||void 0===r?void 0:null===(e=r[0])||void 0===e?void 0:e.isUnlimited))||t.U_.includes(null==o?void 0:null===(i=o.product)||void 0===i?void 0:i.name)}},68789:function(n,e,r){r.d(e,{I:function(){return t}});var t=n=>{var{subscriptions:e,licenseName:r}=n,t=r?null==e?void 0:e.filter(n=>{var{redeemableFor:e}=n;return(null==r?void 0:r.includes("_unlimited"))?e===r:e==="".concat(r,"_unlimited")}):e;return!!(null==t?void 0:t.some(n=>{var{currentLicenses:e}=n;return null==e?void 0:e.some(n=>{var{isUnlimited:e}=n;return e})}))}},14401:function(n,e,r){r.d(e,{I:function(){return u}});var t=r(97956),i=r(38409),o=r(10546),u=n=>{var{assetType:e,contentTier:r,subscriptions:u,selectedLicenseId:c}=n;switch(e){case t.pX:return(0,o.I)({licenseName:c,subscriptions:u});case t.j0:case t.xF:case t.tn:case t.k4:default:return(0,i.$)({subscriptions:u,licenseName:c,contentTier:r,assetType:e})}}},42097:function(n,e,r){r.d(e,{X:function(){return m}});var t=r(57460),i=r(2281),o=r(94095),u=r(89798),c=r(912),a=n=>{var e,{currentLicense:r}=n;return null!==(e=null==r?void 0:r.maxContentTier)&&void 0!==e?e:c.E2},l=r(97956),d=r(46743),v=r(71397),s=n=>{var{subscription:e,assetTypeFromSubscription:r}=n;return r===l.xF&&(0,d.q)({subscription:e})?"".concat(r).concat((0,v.ZV)(l.q9,"en")):r},m=n=>{var e,r,{subscription:c}=n,{creditPrice:l,creditType:d,creditCurrency:v,currentLicenses:m,redeemableFor:f,product:_,type:p}=c,y=null!==(r=null!=v?v:null==m?void 0:null===(e=m[0])||void 0===e?void 0:e.currency)&&void 0!==r?r:null==_?void 0:_.currency,g=(null==m?void 0:m.find(n=>n.redeemableFor===f))||{},{creditPriceComponents:T}=g,b=(0,i._)(g,["creditPriceComponents"]),q=o.bW[p],w=o.iN[q];return T&&w?Object.entries(T.contentTier).reduce((n,e)=>{var r,i,[a,{amount:l,amountType:d=o.Zm}]=e,v=Number(a);return n.push((0,t._)({currency:y,subscriptionType:s({subscription:c,assetTypeFromSubscription:w[a]}),price:l,contentTier:v,priceType:d},(0,u.H)({priceType:null!==(r=c.creditType)&&void 0!==r?r:d,price:(null==b?void 0:b.isUnlimited)?0:null!==(i=c.creditPrice)&&void 0!==i?i:l,currency:y,activityTracking:c.activityTracking}))),n},[]):[{subscriptionType:s({subscription:c,assetTypeFromSubscription:q}),currency:y,price:(null==b?void 0:b.isUnlimited)?0:l,priceType:d||o.Zm,contentTier:a({currentLicense:b})}]}},38409:function(n,e,r){r.d(e,{$:function(){return b}});var t=r(57460),i=r(6692),o=r(97956),u=r(94095),c=r(82239),a=r(912),l=n=>{var{assetContentTier:e,subscriptionMaxContentTier:r,musicInfo:t}=n,i=r>=e;if(null==t?void 0:t.isMusic){var{isUnlimited:o,isUnlimitedSubscriptionAvailable:u}=t;if(e>a.$H)return i&&!o;if(u)return o}return i},d=n=>{var{subscriptions:e,contentTier:r,musicInfo:o}=n;return(null==e?void 0:e.filter(n=>{var{currentLicenses:e}=n;return null==e?void 0:e.find(n=>{var{maxContentTier:e,isUnlimited:u}=n;return l({assetContentTier:r,subscriptionMaxContentTier:e,musicInfo:(0,i._)((0,t._)({},o),{isUnlimited:u})})})}))||[]},v=r(25323),s=r(68789),m=r(89798),f=r(17715),_=n=>{var e,r,i,{subscription:o}=n,u=null===(e=o.currentLicenses[0].creditPriceComponents)||void 0===e?void 0:e.contentTier,[,{amount:c,amountType:a}]=u?Object.entries(u)[0]:[{},{}];return(0,t._)({},!(0,f.e)(o,"creditPrice")&&{creditPrice:c},o,(0,m.H)({priceType:null!==(r=o.creditType)&&void 0!==r?r:a,price:null!==(i=o.creditPrice)&&void 0!==i?i:c,currency:o.creditCurrency,activityTracking:o.activityTracking}))},p=n=>{var{prices:e,mediaContentTier:r}=n;return(null==e?void 0:e.find(n=>{var{contentTier:e}=n;return e>=r}))||{}},y=r(42097),g=n=>{var{subscription:e,mediaContentTier:r,musicInfo:o}=n,{activityTracking:u,currentLicenses:c,creditPrice:a,creditType:d}=e,{price:v,priceType:s,currency:f}=p({prices:(0,y.X)({subscription:e}),mediaContentTier:r}),_=c.filter(n=>{var{maxContentTier:e,isUnlimited:u}=n;return l({assetContentTier:r,subscriptionMaxContentTier:e,musicInfo:(0,i._)((0,t._)({},o),{isUnlimited:u})})});return(0,t._)((0,i._)((0,t._)({},e),{currentLicenses:_,creditPrice:v,creditType:s}),(0,m.H)({priceType:null!=d?d:s,price:a,currency:f,activityTracking:u}))},T=n=>{var{subscriptions:e,contentTier:r,musicInfo:i}=n;return null==e?void 0:e.map(n=>{var e,o;return(null==n?void 0:null===(e=n.currentLicenses)||void 0===e?void 0:e.length)?r?g({subscription:n,mediaContentTier:r,musicInfo:i}):_({subscription:n}):(0,t._)({creditType:null!==(o=null==n?void 0:n.creditType)&&void 0!==o?o:u.Zm},n)})},b=n=>{var e,r,a,l,{assetType:m,subscriptions:f,licenseName:_,contentTier:p}=n,y=null==f?void 0:null===(r=f.filter(n=>{var{license:e,redeemableFor:r,name:t}=n;return e===_||r===_||t===_}))||void 0===r?void 0:null===(e=r.sort((n,e)=>new Date(n.subscriptionExpiration).getTime()-new Date(e.subscriptionExpiration).getTime()))||void 0===e?void 0:e.map(n=>(0,c.TR)({subscription:n,assetType:m})),g=m===o.xF,b={isMusic:g,isUnlimitedSubscriptionAvailable:g&&(0,s.I)({subscriptions:f,licenseName:_})},q=p?d({subscriptions:y,contentTier:p,musicInfo:b}):y,w=T({subscriptions:q,contentTier:p,musicInfo:b});return(null==q?void 0:q[0])&&(a=(0,i._)((0,t._)({},null==q?void 0:q[0]),{creditType:u.Zm})),(null==w?void 0:w.find(n=>(0,v.r)({subscription:n})))||(null!==(l=null==w?void 0:w[0])&&void 0!==l?l:a)}},10546:function(n,e,r){r.d(e,{I:function(){return a}});var t=r(97956),i=r(22253),o=r(38409),u=n=>{var e,{licenses:r,subscriptions:i}=n;return r.some(n=>e=(0,o.$)({subscriptions:i,licenseName:n,assetType:t.pX})),e},c=n=>{var{existingAssetLicenses:e,licenseType:r,licenseName:t,subscriptions:i}=n;return t==="footage_".concat(r,"_sd")?u({licenses:(null==e?void 0:e.includes("footage_".concat(r,"_hd")))?["footage_".concat(r,"_hd")]:["footage_".concat(r,"_sd"),"footage_".concat(r,"_hd")],subscriptions:i}):t==="footage_".concat(r,"_lowres")?(null==e?void 0:e.includes("footage_".concat(r,"_hd")))?u({licenses:["footage_".concat(r,"_hd")],subscriptions:i}):(null==e?void 0:e.includes("footage_".concat(r,"_sd")))?u({licenses:["footage_".concat(r,"_sd")],subscriptions:i}):u({licenses:["footage_".concat(r,"_lowres")],subscriptions:i}):void 0},a=n=>{var{existingAssetLicenses:e,subscriptions:r,licenseName:u}=n,a=t.pX;if([i.Mbf,i.Gap,i.mfl,i.vbi,i.Dh9,i.SPT,i.a9m,i.y21,i.v1l,i.KK0,i.mJ5,i.Wdi].some(n=>n===u)||i.Lj9.some(n=>n===u))return(0,o.$)({subscriptions:r,licenseName:u,assetType:a});if([i.f12,i.OyJ,i.JCJ,i.TLc].some(n=>n===u))return(0,o.$)({subscriptions:r,licenseName:i.f12,assetType:a});var l=c({existingAssetLicenses:e,licenseType:i.bin,licenseName:u,subscriptions:r}),d=c({existingAssetLicenses:e,licenseType:i.Eek,licenseName:u,subscriptions:r}),v=c({existingAssetLicenses:e,licenseType:i.pHc,licenseName:u,subscriptions:r}),s=c({existingAssetLicenses:e,licenseType:i.wOM,licenseName:u,subscriptions:r});return l||d||v||s||void 0}},38597:function(n,e,r){r.d(e,{Hz:function(){return o},ms:function(){return u},n3:function(){return i}});var t=r(43005),i=n=>{var{width:e,height:r}=n;return e/r},o=n=>{var{aspectRatioCommon:e}=n,[r,o]=(null==e?void 0:e.split(":"))||[];return i({width:r,height:o})||t.So},u=n=>{var{width:e,height:r}=n,t=(n,e)=>n%e?t(e,n%e):e,i=t(e,r);return"".concat(e/i).concat(":").concat(r/i)}}}]);
//# sourceMappingURL=2823-4455e07cb55f0357.js.map