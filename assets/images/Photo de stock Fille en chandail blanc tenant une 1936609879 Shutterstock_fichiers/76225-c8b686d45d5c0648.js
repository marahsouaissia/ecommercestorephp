"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[76225],{10711:function(e,n,i){i.d(n,{N:function(){return s}});var t=i(25237),r=i.n(t),a=i(62527),s=r()(()=>i.e(68760).then(i.bind(i,68760)).then(e=>e.AddToCartButton),{loadableGenerated:{webpack:()=>[68760]},ssr:!1,loading:a.F})},58435:function(e,n,i){i.d(n,{v:function(){return l}});var t=i(52322),r=i(21647),a=i(68219),s=i(70538),o=(0,i(98116).ZL)()(()=>({actionLink:{width:"100%",display:"flex",justifyContent:"center"}})),l=e=>{var{analyticsLabel:n,onClick:i,label:l,ready:u,classesProps:c}=e,{classes:d,cx:m}=o(),{classes:v}=(0,s.bo)();return(0,t.jsx)("div",{className:m(c.actionLink,d.actionLink),children:(0,t.jsx)(a.z,{className:v.buttonAnchor,color:"inherit",onClick:i,"aria-label":l,labelTrack:n,"data-automation":"ActionLink",children:(0,t.jsx)("span",{className:c.label,children:u?l:(0,t.jsx)(r.Z,{variant:"text",width:100})})})})};l.defaultProps={analyticsLabel:"",classesProps:{}}},28354:function(e,n,i){i.d(n,{e:function(){return g}});var t=i(57460),r=i(52322),a=i(10711),s=i(62527),o=i(25237),l=i.n(o),u=l()(()=>Promise.all([i.e(11770),i.e(85560)]).then(i.bind(i,61349)).then(e=>e.BuyAndDownloadButton),{loadableGenerated:{webpack:()=>[61349]},ssr:!1,loading:s.F}),c=l()(()=>i.e(27360).then(i.bind(i,27360)).then(e=>e.GetAnotherPlanButton),{loadableGenerated:{webpack:()=>[27360]},ssr:!1,loading:()=>(0,r.jsx)(s.F,{monitoringOrigin:"GetAnotherPlanButton"})}),d=i(61435),m=l()(()=>i.e(49852).then(i.bind(i,49852)).then(e=>e.RedownloadButton),{loadableGenerated:{webpack:()=>[49852]},ssr:!1}),v=i(36361),f=i(20463),p=i(72726),h=i(22058),g=e=>{var{asset:n,eligibility:i,eligibilityError:o,isLoadingData:l,onAddToCartSuccess:g,onAddToCartFailure:b,onLicensingSuccess:y,onRedownloadSuccess:_,RedownloadSecondaryButton:S,redownloadSecondaryButtonProps:w,selectedAssetSize:P,selectedPaymentPlan:L,selectedProductLicenseType:x,selectedShadowsOption:C,showAddToCartButton:D,showBuyAndDownloadButton:T,showGetAnotherPlanButton:k,showLicenseButton:I,showRedownloadButton:z,showWarningMessage:F,clickAnalyticsLabels:E={},membershipProps:M}=e;if(l)return(0,r.jsx)(s.F,{monitoringOrigin:"DrawerCta-".concat(null==n?void 0:n.type)});var{licenses:N=[]}=i,B=(0,p.PD)(n),A={brandCategory:(0,f.f_)(n),productLine:(0,f.Rz)(n)};return D?(0,r.jsx)(a.N,(0,t._)({asset:n,itemsToAdd:[(0,v.zg)({asset:n,assetSize:P,license:null==x?void 0:x.license})],isDisabled:o,onAddToCartSuccess:g,onAddToCartFailure:b,selectedProductLicenseType:x,setAddToCartStatus:F,clickAnalyticsLabel:(0,h.U_)(E.addToCartButton)},B&&A)):z?(0,r.jsx)(m,(0,t._)({asset:n,licenses:N,isDisabled:o,onRedownloadSuccess:_,SecondaryButton:S,secondaryButtonProps:w,selectedAssetSize:P,selectedShadowsOption:C,showWarningMessage:F},B&&A)):I?(0,r.jsx)(d.f,{assetInfo:{asset:n,selectedAssetSize:P,paymentPlan:L,licenseName:null==x?void 0:x.license,selectedShadowsOption:C},isDisabled:(null==L?void 0:L.isDisabled)||o,onLicensingSuccess:y,setLicensingStatus:F,membershipProps:M}):T?(0,r.jsx)(u,{asset:n,assetSize:P,product:x,selectedShadowsOption:C,selectedProductLicenseType:x,setCreateOrderStatus:F,isDisabled:o}):k?(0,r.jsx)(c,{}):null};g.defaultProps={eligibility:{},eligibilityError:!1,onAddToCartSuccess:()=>{},onAddToCartFailure:()=>{},onLicensingSuccess:()=>{},onRedownloadSuccess:()=>{},RedownloadSecondaryButton:null,redownloadSecondaryButtonProps:{},selectedPaymentPlan:{},selectedProductLicenseType:{},showAddToCartButton:!1,showBuyAndDownloadButton:!1,showLicenseButton:!1,showRedownloadButton:!1,showGetAnotherPlanButton:!1,showWarningMessage:()=>{},membershipProps:{}}},76765:function(e,n,i){i.d(n,{X:function(){return d}});var t=i(57460),r=i(6692),a=i(94346),s=i(61592),o=i(6224),l=i(61246),u=i(49219),c=i(2784),d=function(){var{allSizesAssetEligibility:e,products:n,selectedProductLicenseType:i,setSelectedProductLicenseType:d,isFlexProduct:m,isOffsetAsset:v=!1,isRedownloadFlow:f,paymentPlansForCreditCostCalculation:p,showPaymentPlanSelect:h,hasExistingLicenseForSelectedLicenseType:g,labels:b={}}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},y=(0,c.useMemo)(()=>Array.isArray(n)?(v?s.$I:s.Ji).map(e=>null==n?void 0:n.find(n=>{var{name:i}=n;return i===e})):[],[n,v]),{ownsStandardLicense:_,ownsEnhancedLicense:S}=(0,c.useMemo)(()=>(0,o.V)({eligibility:e,licenseTypes:[s.ur,s.HS]}),[e]),{hasEligibleSubscriptionForEnhancedLicense:w,hasEligibleSubscriptionForStandardLicense:P}=(0,c.useMemo)(()=>({hasEligibleSubscriptionForEnhancedLicense:(0,l.i)({subscriptions:e.subscriptions,licenseName:s.HS}),hasEligibleSubscriptionForStandardLicense:(0,l.i)({subscriptions:e.subscriptions,licenseName:s.ur})}),[e]),L=(0,c.useMemo)(()=>m?{[s.ur]:(0,u.Kg)({paymentPlans:p,licenseType:s.ur}),[s.HS]:(0,u.Kg)({paymentPlans:p,licenseType:s.HS})}:{},[p,m]),x=(0,c.useMemo)(()=>y.map(e=>{var n=(null==e?void 0:e.license)===s.ur,i=(null==e?void 0:e.license)===s.HS;return(0,r._)((0,t._)({},e,n&&{displayIncluded:_||S&&v||P&&!m,displayPrice:v,isDisabled:S},i&&{displayIncluded:S||w&&!m,displayPrice:v,isDisabled:!1}),{creditCostsByLicenseType:L,analyticsLabel:(null==e?void 0:e.license)&&"typeSelected - ".concat(null==e?void 0:e.license,"License")})}),[L,w,P,S,_,y,m,v]),C=(0,c.useMemo)(()=>f?g?{status:a.H_,message:b.alreadyLicensed}:h?{status:a.cM,message:b.alreadyLicensedInStandardButCanLicenseInEnhanced}:{status:a.cM,message:b.alreadyLicensedInStandard}:null,[g,f,b.alreadyLicensed,b.alreadyLicensedInStandard,b.alreadyLicensedInStandardButCanLicenseInEnhanced,h]);return(0,c.useEffect)(()=>{var n,t=(null==i?void 0:i.id)===(null==y?void 0:null===(n=y[0])||void 0===n?void 0:n.id)&&S;if((!i||t)&&(null==y?void 0:y[0])&&(null==e?void 0:e.subscriptions)){if(S||!_&&(0,l.i)({subscriptions:e.subscriptions,licenseName:s.HS})&&!(0,l.i)({subscriptions:e.subscriptions,licenseName:s.ur})){d(y[1]);return}d(y[0])}},[e.subscriptions,S,_,y,i,d]),{formattedProductLicenseTypes:x,licenseTypeDrawerStatusMessageProps:C}}},12407:function(e,n,i){i.d(n,{$r:function(){return m},C7:function(){return r},Si:function(){return d},ZZ:function(){return s},fI:function(){return u},fu:function(){return l},ik:function(){return a},tx:function(){return o},w:function(){return c}});var t=i(8930),r="LICENSING",a="LOADING",s="PURCHASING",o="none",l={[t.vC]:2,[t._x]:5,[t.cL]:25,[t.vI]:2,[t.zW]:5,[t.jh]:25},u="Download for free",c="Download",d="Tier100",m="NonTier100"},72741:function(e,n,i){i.d(n,{T:function(){return x}});var t=i(57460),r=i(6692),a=i(8930),s=i(94346),o=i(64177),l=i(61592),u=i(71933),c=i(39578),d=i(11419),m=i(28788),v=i(87642),f=e=>{var{eligibility:{licenses:n=[],subscriptions:i=[]}={}}=e;return!(0,v.R)({licenses:n})&&!(0,m.z)({subscriptions:i})},p=i(43821),h=e=>{var{eligibility:{licenses:n=[],subscriptions:i=[]}={},selectedProductLicenseType:t}=e;return!(0,p.V)({licenses:n,selectedProductLicenseType:t})&&(0,m.z)({subscriptions:i})},g=i(49219),b=i(35492),y=i(88759),_=i(2784),S=i(12407),w=i(69726),P={},L={subscriptions:[]},x=function(){var e,{asset:n,products:i,setLicenseDrawerState:m,setLicenseDrawerStatus:v=()=>{}}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},x=(0,y.B)(),C=(0,u.v)(),D=((null==C?void 0:C.current)?C.current.isPeacock:null)&&"vector"===n.imageType,T=(0,_.useMemo)(()=>D?(0,w.cz)(n).filter(e=>"vector_eps"!==e.name):(0,w.cz)(n),[n,D]),[k,I]=(0,_.useState)(null==T?void 0:T[0]),[z,F]=(0,_.useState)(),[E,M]=(0,_.useState)({}),[N,B]=(0,_.useState)({}),[A,H]=(0,_.useState)("on"),[j,G]=(0,_.useState)({selectedShadowsOption:A,format:null==k?void 0:k.format}),{data:O={},error:R}=(0,b.IP)({assets:[n]}),{data:K,error:U}=(0,b.IP)({assets:[n],licenseName:null==z?void 0:z.license}),V=U||R;x||(O=L,K=P);var{subscriptions:Z=[]}=K||{},W=(null==K?void 0:null===(e=K.licenses)||void 0===e?void 0:e.length)>0,X=(0,_.useMemo)(()=>(0,g.OG)({product:E}),[E]),Y=(0,_.useMemo)(()=>(0,g.XD)({name:null==z?void 0:z.name}),[z]),$=!V&&void 0===K||void 0===i,Q=!$&&(0,c.Y)({eligibility:K,selectedProductLicenseType:z,selectedPaymentPlan:E}),J=(0,_.useMemo)(()=>(0,d.r)({eligibility:K,enhancedLicenseType:l.HS,selectedProductLicenseType:z}),[K,z]),q=(0,_.useMemo)(()=>!Y&&J,[Y,J]),ee=(0,_.useMemo)(()=>Y&&J,[Y,J]),en=(0,_.useMemo)(()=>f({eligibility:K}),[K]),ei=(0,_.useMemo)(()=>h({eligibility:K,selectedProductLicenseType:z}),[K,z]),et=(0,_.useMemo)(()=>$?S.ik:Q||q||ee?S.ZZ:S.C7,[$,q,ee,Q]),er=(0,_.useMemo)(()=>{var e;return null!=K&&null!==(e=K.licenses)&&void 0!==e&&!!e.some(e=>{var{licenseName:n}=e;return n===a.PS})&&(null==z?void 0:z.license)===l.ur||(0,p.V)({licenses:null==K?void 0:K.licenses,selectedProductLicenseType:z})},[null==K?void 0:K.licenses,z]),{paymentPlans:ea,paymentPlansForCreditCostCalculation:es,showPaymentPlanSelect:eo}=(0,_.useMemo)(()=>{if(er)return{paymentPlans:[],showPaymentPlanSelect:!1};var e=Z;return(null==z?void 0:z.license)===l.ur&&(e=Z.filter(e=>{var{license:n}=e;return n===l.ur})),(null==z?void 0:z.license)===l.HS&&(e=Z.filter(e=>{var{license:n,isEligibleForDownload:i}=e;return n===l.HS&&i})),{paymentPlans:e.map(e=>(0,r._)((0,t._)({},e),{isDisabled:!e.isEligibleForDownload})),paymentPlansForCreditCostCalculation:Z,showPaymentPlanSelect:!$&&!!e.length}},[er,$,null==z?void 0:z.license,Z]),el=(0,_.useMemo)(()=>(0,w.H4)(O),[O]);return(0,_.useEffect)(()=>{if(K&&!V){var e=(null==z?void 0:z.license)===l.ur?ea.find(e=>{var{isDisabled:n,activityTracking:i,license:t}=e;return!n&&!(i===a.bk&&t===l.HS)}):ea.find(e=>{var{isDisabled:n}=e;return!n});e||([e]=ea),M(e)}},[K,V,ea,null==z?void 0:z.license,M]),(0,_.useEffect)(()=>{V&&!K?v({status:s.pn,error:o.R}):v({status:"",error:void 0})},[V,K,v]),(0,_.useEffect)(()=>m({assetId:n.id,selectedImageSize:k,selectedPaymentPlan:E,selectedProductLicenseType:z,selectedProductToBuy:N}),[n.id,k,E,z,N,m]),(0,_.useEffect)(()=>{if(k){var{format:e}=k||{};if((null==j?void 0:j.format)!==e)switch(e){case"png":H(null==j?void 0:j.selectedShadowsOption),G({selectedShadowsOption:A,format:e});break;case"psd":G({selectedShadowsOption:A,format:e}),H("off")}}},[k,A,j]),{selectedImageSize:k,selectedProductLicenseType:z,selectedPaymentPlan:E,selectedProductToBuy:N,selectedShadowsOption:A,setSelectedImageSize:I,setSelectedProductLicenseType:F,setSelectedPaymentPlan:M,setSelectedProductToBuy:B,setSelectedShadowsOption:H,eligibility:K,eligibilityError:V,allSizesAssetEligibility:O,formattedImageSizes:T,paymentPlans:ea,paymentPlansForCreditCostCalculation:es,showAddToCartButton:ee,showBuyAndDownloadButton:q,showGetAnotherPlanButton:en,showDownloadButton:ei,showProductsToPurchase:Q,showPaymentPlanSelect:eo,isLoadingData:$,isRedownloadFlow:W,isFlexProduct:X,hasLegacyMultiShareSubscription:el,hasExistingLicenseForSelectedLicenseType:er,drawerState:et}}},11312:function(e,n,i){i.d(n,{T:function(){return u}});var t=i(52322),r=i(54711),a=i(21568),s=i(25499),o=i(67898),l=i(59877),u=()=>{var{t:e,ready:n}=(0,l.$G)(r.AH),[i]=(0,o.a9)();return{labels:{alreadyLicensed:e("already_licensed_item"),alreadyLicensedInStandard:e("already_downloaded_under_standard_license"),alreadyLicensedInStandardButCanLicenseInEnhanced:e("already_downloaded_under_standard_license_redownload_or_license"),alreadyLicensedInEnhancedButCanLicenseInStandard:e("already_downloaded_under_enhance_license_redownload_or_license"),assetSizeFormat:e("image_size_and_format"),alreadyLicensedInStandardButCanUpgradeToEnhanced:e("already_downloaded_under_standard_license_redownload_or_upgrade_to_enhanced"),errorMessage:e("notifications:label_generic_failure"),licenseType:e("license_type"),cancel:e("common:actions_cancel"),sizeGuide:e("feature-image-resizer:size_guide"),downloadLimitWarning:e("download_limit_warning"),pausedPlanWarning:(0,t.jsx)(l.cC,{ns:r.AH,i18nKey:"paused_plan_warning",components:{a:(0,t.jsx)(a.r,{target:"_blank",style:{textDecoration:"underline"},clickAnalyticsLabel:"".concat(s.y3p,".valuePropPause_goToPlans"),href:i})},t:e}),viewAllImagePlans:e("view_all_image_plans"),offsetPurchaseDisclaimer:e("offset_purchase_disclaimer"),outOfCredits:e("out_of_downloads_weve_got_you"),selectSizeFormat:e("select_size_format"),upgrade:e("upgrade_to_enhanced_license"),legalCompare:e("compare_lage_coverage"),useYourPlan:e("use_your_plan")},ready:n}}},69726:function(e,n,i){i.d(n,{H4:function(){return p},cG:function(){return v},cz:function(){return f}});var t=i(57460),r=i(6692),a=i(8930),s=i(61592),o=i(6224),l=i(61246),u=i(49219),c=i(2823),d=i(25065),m=i(2784),v=e=>{var{allSizesAssetEligibility:n,selectedProductLicenseType:i,isFlexProduct:a,isOffsetAsset:c,paymentPlansForCreditCostCalculation:d}=e,v=(null==i?void 0:i.license)===s.ur,f=(null==i?void 0:i.license)===s.HS,{ownsStandardLicense:p,ownsEnhancedLicense:h}=(0,m.useMemo)(()=>(0,o.V)({eligibility:n,licenseTypes:[s.ur,s.HS]}),[n]),{hasEligibleSubscriptionForEnhancedLicense:g,hasEligibleSubscriptionForStandardLicense:b}=(0,m.useMemo)(()=>({hasEligibleSubscriptionForEnhancedLicense:(0,l.i)({subscriptions:null==n?void 0:n.subscriptions,licenseName:s.HS}),hasEligibleSubscriptionForStandardLicense:(0,l.i)({subscriptions:null==n?void 0:n.subscriptions,licenseName:s.ur})}),[n]),y=(0,m.useMemo)(()=>a?{[s.ur]:(0,u.Kg)({paymentPlans:d,licenseType:s.ur,selectedPaymentPlan:null}),[s.HS]:(0,u.Kg)({paymentPlans:d,licenseType:s.HS,selectedPaymentPlan:null})}:{},[d,a]);return(0,r._)((0,t._)({},i,v&&{displayIncluded:p||h&&c||b&&!a,displayPrice:c,isDisabled:h},f&&{displayIncluded:h||g&&!a,displayPrice:c,isDisabled:!1}),{creditCostsByLicenseType:y,analyticsLabel:(null==i?void 0:i.license)&&"typeSelected - ".concat(null==i?void 0:i.license,"License")})},f=e=>{var{sizes:n={}}=e,i=Object.values(n)||[],t=(0,d.RO)({sizes:i});return(0,c.hQ)(t)},p=e=>{var{subscriptions:n}=e;return null==n?void 0:n.some(e=>{var{productName:n}=e;return a.Kg.includes(n)})}},61435:function(e,n,i){i.d(n,{f:function(){return o}});var t=i(52322),r=i(25237),a=i.n(r),s=i(62527),o=a()(()=>i.e(38972).then(i.bind(i,38972)).then(e=>e.LicensingButton),{loadableGenerated:{webpack:()=>[38972]},ssr:!1,loading:()=>(0,t.jsx)(s.F,{monitoringOrigin:"LicensingButton"})})},9896:function(e,n,i){i.d(n,{F:function(){return d}});var t=i(52322),r=i(25237),a=i.n(r),s=a()(()=>Promise.all([i.e(47125),i.e(17026)]).then(i.bind(i,41878)).then(e=>e.EditorialTerms),{loadableGenerated:{webpack:()=>[41878]},ssr:!1}),o=a()(()=>Promise.all([i.e(47125),i.e(21844)]).then(i.bind(i,90924)).then(e=>e.GeneratedAssetTerms),{loadableGenerated:{webpack:()=>[90924]},ssr:!1}),l=i(52104),u=i(29416),c=i(2784),d=e=>{var{asset:n,isTermsChecked:i,setTermsCheckbox:r}=e,a=(0,u.pi)(n),d=(0,l.k7)(n);return((0,c.useEffect)(()=>{a||d||r(!0)},[a,d,r]),a)?(0,t.jsx)(s,{asset:n,isTermsChecked:i,onCheckboxChange:r}):d?(0,t.jsx)(o,{isTermsChecked:i,onCheckboxChange:r}):null};d.defaultProps={isTermsChecked:!1}},64177:function(e,n,i){i.d(n,{R:function(){return t}});var t="eligibilityErrorNoEligibility"},6224:function(e,n,i){i.d(n,{V:function(){return t}});var t=e=>{var{eligibility:n={},licenseTypes:i}=e,{licenses:t=[]}=n,[r,a]=i;return t.reduce((e,n)=>{var{licenseName:i}=n;return i===r&&(e.ownsStandardLicense=!0),i===a&&(e.ownsEnhancedLicense=!0),e},{})}},28788:function(e,n,i){i.d(n,{z:function(){return t}});var t=function(){var{subscriptions:e}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return!!(null==e?void 0:e.find(e=>{var{isEligibleForDownload:n}=e;return n}))}},61246:function(e,n,i){i.d(n,{i:function(){return t}});var t=function(){var{subscriptions:e=[],licenseName:n=""}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return null==e?void 0:e.some(e=>{var{license:i,isEligibleForDownload:t}=e;return i===n&&t})}},43821:function(e,n,i){i.d(n,{V:function(){return t}});var t=e=>{var{licenses:n=[],selectedProductLicenseType:i={}}=e;return n.some(e=>{var{licenseName:n}=e;return n===i.license})}},87642:function(e,n,i){i.d(n,{R:function(){return a}});var t=i(8930),r=i(61592),a=function(){var{licenses:e,licenseType:n}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return n&&(null==e?void 0:e.length)?!!e.some(e=>{var{licenseName:n}=e;return n===t.PS})&&n===r.ur||!!e.filter(e=>{var{licenseName:i}=e;return i===n}).length:!!(null==e?void 0:e.length)}},11419:function(e,n,i){i.d(n,{r:function(){return a}});var t=i(43821),r=i(39578),a=e=>{var{eligibility:{licenses:n=[],subscriptions:i=[]}={},enhancedLicenseType:a,selectedProductLicenseType:s,selectedPaymentPlan:o}=e,l=i;if(null==o?void 0:o.isOneTimePurchase)return!0;var u=(0,t.V)({licenses:n,selectedProductLicenseType:s});return(null==s?void 0:s.license)===a&&(l=l.filter(e=>{var{license:n,isEligibleForDownload:i}=e;return n===a&&i})),!(0,r.Y)({eligibility:{licenses:n,subscriptions:l},selectedProductLicenseType:s})&&!u&&!l.length}},39578:function(e,n,i){i.d(n,{Y:function(){return l}});var t=i(49219),r=i(61592),a=function(){var{subscriptions:e=[],licenseType:n=""}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return!!e.filter(e=>{var{isEligibleForDownload:i,license:t}=e;return n===r.HS?t===r.HS&&i:t===r.ur}).length},s=i(87642),o=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return[r.ur,r.HS].includes(e)},l=function(){var{eligibility:{licenses:e=[],subscriptions:n=[]}={},selectedProductLicenseType:i={},selectedPaymentPlan:r}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return o(null==i?void 0:i.license)&&!(0,t.XD)({name:null==i?void 0:i.name})&&!(0,t.OG)({product:r})&&!(0,s.R)({licenses:e,licenseType:null==i?void 0:i.license})&&!a({subscriptions:n,licenseType:null==i?void 0:i.license})}},25065:function(e,n,i){i.d(n,{RO:function(){return N},Ch:function(){return A},It:function(){return F},Rc:function(){return D},Ux:function(){return _},kn:function(){return E},oE:function(){return S}});var t=i(57460),r=i(6692),a=i(72212),s=i(97956),o=i(99686),l="kilobyte",u="megabyte",c="gigabyte",d="inch",m="centimeter",v=i(68668),f=i(2823),p=i(72726),h=i(2784),g=i(8947),b=function(){var e,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return null===(e=n.toString().match(/[0-9.,]+/))||void 0===e?void 0:e[0]},y={[o.xn]:{suffix:"px",widthKey:"width",heightKey:"height"},[o.tS]:{suffix:"in",widthKey:"widthIn",heightKey:"heightIn"},[o.IC]:{suffix:"cm",widthKey:"widthCm",heightKey:"heightCm"}},_=e=>{var{fullLocale:n}=(0,v.PE)();return new Intl.NumberFormat(n,e).format},S=e=>{var{unit:n,maximumFractionDigits:i}=e,[t,r]=(0,h.useState)(""),{fullLocale:a}=(0,v.PE)(),s=(0,h.useMemo)(()=>{try{return new Intl.NumberFormat(a,{style:"unit",unit:n,maximumFractionDigits:i})}catch(e){return r(e),{format:e=>e}}},[a,i,n]);return(0,h.useMemo)(()=>({format:s.format,error:t}),[s.format,t])},w=e=>{var{humanReadableSize:n,size:i,name:t}=e;return n||"".concat(i.toFixed(1)," ").concat(t)},P=e=>{var{formatter:n,humanReadableSize:i,size:t,name:r}=e,{error:a,format:s}=n;return a?w({humanReadableSize:i,size:t,name:r}):s(t)},L=e=>{var{bytes:n,gbFormatter:i,mbFormatter:t,kbFormatter:r,humanReadableSize:a}=e,s=n/1e3,o=s/1e3,l=o/1e3;return l>=1?P({formatter:i,humanReadableSize:a,size:l,name:"GB"}):o>=1?P({formatter:t,humanReadableSize:a,size:o,name:"MB"}):P({formatter:r,humanReadableSize:a,size:s,name:"KB"})},x=(e,n,i)=>{var{suffix:t,widthKey:r,heightKey:a}=y[e]||{},s=i[e],[o,l]=[n[r],n[a]].map(e=>e&&Number(b(e))),u=!Number.isNaN(o)&&o>0,c=!Number.isNaN(l)&&l>0;return u||c?{formattedWidth:u?P({formatter:s,size:o,name:t}):"",formattedHeight:c?P({formatter:s,size:l,name:t}):""}:{}},C=e=>{var{assetSize:n,kbFormatter:i,mbFormatter:t,gbFormatter:r}=e,{sizeInBytes:a,humanReadableSize:s,fileSize:o}=n;return a||o||s?L({bytes:a||1e3*o,gbFormatter:r,mbFormatter:t,kbFormatter:i,humanReadableSize:s}):""},D=e=>{var{assetSize:n}=e;return C({assetSize:n,kbFormatter:S({unit:l,maximumFractionDigits:0}),mbFormatter:S({unit:u,maximumFractionDigits:1}),gbFormatter:S({unit:c,maximumFractionDigits:1})})},T=e=>{var{formattedWidth:n,formattedHeight:i}=e;return"".concat(b(n)," \xd7 ").concat(i)},k=e=>{var{assetSize:n,displayUnits:i,inchFormatter:t,centimeterFormatter:r,labels:a={}}=e,{formattedWidth:s,formattedHeight:l}=x(i,n,{[o.tS]:t,[o.IC]:r,[o.xn]:{format:e=>a.pixels?"".concat(e," ").concat(a.pixels):"".concat(e," ").concat(y[o.xn].suffix)}});return s||l?T({formattedWidth:s,formattedHeight:l}):""},I=e=>k(e)||k((0,r._)((0,t._)({},e),{displayUnits:o.xn})),z=e=>{var{displayUnits:n,assetSize:i,inchFormatter:t,centimeterFormatter:r,labels:a}=e;return n===o.xn?I({assetSize:i,displayUnits:o.tS,inchFormatter:t,centimeterFormatter:r,labels:a}):I({assetSize:i,displayUnits:n,inchFormatter:t,centimeterFormatter:r,labels:a})},F=e=>{var{isImageAsset:n,assetSize:i,labels:t}=e,r=(0,g.n)(),a=S({unit:d,maximumFractionDigits:0}),s=S({unit:m,maximumFractionDigits:0}),l=I({assetSize:i,displayUnits:o.xn,inchFormatter:a,centimeterFormatter:s,labels:t}),u={[o.xn]:l};return n&&(u.formattedDimensions=z({assetSize:i,labels:t,displayUnits:r,inchFormatter:a,centimeterFormatter:s})),u},E=()=>{var e=(0,g.n)(),n=S({unit:l,maximumFractionDigits:0}),i=S({unit:u,maximumFractionDigits:1}),t=S({unit:c,maximumFractionDigits:1}),r=S({unit:d,maximumFractionDigits:0}),a=S({unit:m,maximumFractionDigits:0});return(0,h.useCallback)(s=>{var{assetSize:o}=s,l=C({assetSize:o,kbFormatter:n,mbFormatter:i,gbFormatter:t}),u=I({assetSize:o,displayUnits:e,inchFormatter:r,centimeterFormatter:a});return l?{resolutionDetails:u,size:l}:{resolutionDetails:u}},[a,e,r,t,i,n])},M=e=>{var n,{assetSize:i,centimeterFormatter:t,displayUnits:r,inchFormatter:a,isImageAsset:l,labels:u,isVideoAsset:c,isDesignAsset:d}=e,{format:m,dpi:v,name:f,resolution:p}=i,h=(null==m?void 0:m.toUpperCase())||"";if(f===s.gf)return h;var g=I({assetSize:i,PIXELS:o.xn,inchFormatter:a,centimeterFormatter:t,labels:u});return n=(l||d)&&v?[g,z({assetSize:i,labels:u,displayUnits:r,inchFormatter:a,centimeterFormatter:t}),"".concat(u.dpi," ").concat(v),h]:c?[u[null==p?void 0:p.toLowerCase()]||"",g,h]:[g,h],[...new Set(n)].filter(e=>!!e).join(" • ")},N=e=>{var{sizes:n=[]}=e;return n.filter(e=>e.format!==a.LX)},B=e=>{var{limit:n=0,sortedSizes:i}=e;return n>0?null==i?void 0:i.slice(0,n):i},A=()=>{var e=(0,g.n)(),n=S({unit:d,maximumFractionDigits:1}),i=S({unit:m,maximumFractionDigits:1});return(0,h.useCallback)(t=>{var{asset:r,labels:a,limit:s=0}=t,o=(0,p.aT)(r),l=(0,p.Am)(r),u=(0,p.ML)(r),c=o||u?N({sizes:Object.values(r.sizes||{})}):r.sizes,d=B({limit:s,sortedSizes:o||u?(0,f.hQ)(Object.values(c)):(0,f.Z)({sizes:c})});return{formattedSizes:null==d?void 0:d.map(t=>M({assetSize:t,centimeterFormatter:i,displayUnits:e,inchFormatter:n,isImageAsset:o,isDesignAsset:u,labels:a,isVideoAsset:l}))}},[e,i,n])}}}]);
//# sourceMappingURL=76225-c8b686d45d5c0648.js.map