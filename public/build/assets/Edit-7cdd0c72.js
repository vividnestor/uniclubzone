import{d as $,o as i,e as f,w as l,b as n,D as u,f as a,G as c,t as o,a as b,j as O,q as y,R as P,am as ae,P as ne,aj as L,aY as N,ax as re,ae as x,aZ as I,g as h,a_ as z,a$ as G,b0 as W,al as H,b1 as le,N as se,a0 as ie,a1 as ce,b2 as de,b3 as D,aM as ue,aJ as pe,aK as fe}from"./vendor-fc9552fb.js";import{_ as Y,a as g,f as J,c as me,b as he,t as k,h as Z}from"./index-3d1a2934.js";import{_ as ve}from"./PageHeader.vue_vue_type_script_setup_true_lang-8b2a5c80.js";import{_ as ge}from"./PageContent.vue_vue_type_script_setup_true_lang-f12642fa.js";import{_ as K}from"./Tab.vue_vue_type_script_setup_true_lang-b9eb8a5b.js";import{_ as be}from"./TabGroup.vue_vue_type_script_setup_true_lang-7668e12d.js";import{u as X}from"./useForm-6d5d09d9.js";import{_ as _e}from"./ProfileCard.vue_vue_type_script_setup_true_lang-26a41b18.js";import{_ as j}from"./Tooltip.vue_vue_type_script_setup_true_lang-a9bdb4ff.js";const we={class:"grid grid-cols-6 gap-6"},$e={class:"flex gap-1 col-span-12 grid grid-cols-12"},ye=$({__name:"ChangePasswordCard",setup(v){const{form:d,submit:r}=X({password:"",password_confirmation:""},route("craftable-pro.craftable-pro-users.password.update"));return(e,t)=>(i(),f(a(J),{title:e.$t("craftable-pro","Password")},{default:l(()=>[n("div",we,[u(a(Y),{modelValue:a(d).password,"onUpdate:modelValue":t[0]||(t[0]=s=>a(d).password=s),name:"password",label:e.$t("craftable-pro","Password")+" *",type:"password",autocomplete:"new-password",class:"col-span-12",labelPlacement:"left"},null,8,["modelValue","label"]),u(a(Y),{modelValue:a(d).password_confirmation,"onUpdate:modelValue":t[1]||(t[1]=s=>a(d).password_confirmation=s),name:"password_confirmation",label:e.$t("craftable-pro","Password confirmation")+" *",type:"password",autocomplete:"new-password",class:"col-span-12",labelPlacement:"left"},null,8,["modelValue","label"]),n("div",$e,[u(a(g),{class:"flex gap-1 col-span-3 col-start-5",onClick:a(r),loading:a(d).processing},{default:l(()=>[c(o(e.$t("craftable-pro","Save password")),1)]),_:1},8,["onClick","loading"])])])]),_:1},8,["title"]))}}),Ce={},Ae={class:"flex flex-col gap-4"};function Fe(v,d){return i(),b("div",null,[n("ol",Ae,[O(v.$slots,"default")])])}const ee=me(Ce,[["render",Fe]]),ke={class:"flex gap-x-3"},Se={class:"flex"},xe={class:"w-[32px] h-[32px] text-base rounded-full border-gray-300 font-bold text-gray-900 border-solid border flex items-center justify-center"},Re={class:"text-slate-900 font-semibold leading-5"},Te={class:"text-slate-500 leading-5"},E=$({__name:"OrderedListItem",props:{order:{}},setup(v){return(d,r)=>(i(),b("li",ke,[n("div",Se,[n("div",xe,o(d.order),1)]),n("div",null,[n("div",Re,[O(d.$slots,"title")]),n("div",Te,[O(d.$slots,"content")])])]))}});function q(){return{copyKey:t=>navigator.clipboard?(navigator.clipboard.writeText(t),!0):!1,printRecoveryCodes:t=>{const s=window.open();s==null||s.document.write(t),s==null||s.print(),s==null||s.close()},copyRecoveryCodes:t=>navigator.clipboard?(navigator.clipboard.writeText(t),!0):!1,downloadRecoveryCodes:t=>{let s=document.createElement("a");s.setAttribute("href","data:text/plain;charset=utf-8,"+encodeURIComponent(t)),s.setAttribute("download","craftable-recovery-codes.txt"),s.style.display="none",document.body.appendChild(s),s.click(),document.body.removeChild(s)}}}const Me={class:"mt-6 flex flex-col gap-5"},Ee={target:"_blank",href:"https://apps.apple.com/us/app/google-authenticator/id388497605",class:"text-indigo-600"},Pe={class:"text-slate-700"},je={class:"flex gap-5 align-center justify-center items-center mt-8 mb-4"},qe={class:"border-4 border-slate-300 w-[160px] h-[160px] flex align-center justify-center items-center",id:"two-fa-setup-qr"},Qe=["innerHTML"],Ue=$({__name:"TwoFactorAuthenticationSetupModalFirstStep",props:{processing:{type:Boolean},twoFactorAuthenticationSetupCode:{},twoFactorAuthenticationSetupQrSvg:{}},setup(v){const{copyKey:d}=q(),r=v,e=y(!1);return(t,s)=>(i(),b(P,null,[n("div",Me,[u(ee,null,{default:l(()=>[u(E,{order:"1"},{title:l(()=>[c(o(t.$t("craftable-pro","Open an authentication app")),1)]),content:l(()=>[c(o(t.$t("craftable-pro","We recommend downloading"))+" ",1),n("a",Ee,o(t.$t("craftable-pro","Google Authenticator")),1),c(" "+o(t.$t("craftable-pro","if you do not have one installed.")),1)]),_:1}),u(E,{order:"2"},{title:l(()=>[c(o(t.$t("craftable-pro","Scan this QR code or copy the key")),1)]),content:l(()=>[c(o(t.$t("craftable-pro","Use the app to scan QR code or manually enter the following code: "))+" ",1),n("div",Pe,[c(o(r.twoFactorAuthenticationSetupCode)+" ",1),u(a(j),{position:"top",class:"inline-flex",useHover:!1},{button:l(()=>[n("a",{class:"text-indigo-600 px-2",href:"#",onClick:s[0]||(s[0]=A=>e.value=a(d)(t.twoFactorAuthenticationSetupCode))},o(t.$t("craftable-pro","Copy Key")),1)]),content:l(()=>[c(o(e.value?t.$t("craftable-pro","Copied!"):t.$t("craftable-pro","Could not copy to clipboard!")),1)]),_:1})])]),_:1})]),_:1})]),n("div",je,[n("div",qe,[n("span",{innerHTML:r.twoFactorAuthenticationSetupQrSvg},null,8,Qe)])])],64))}}),Ve={class:"mt-6 flex flex-col gap-5"},Oe={class:"text-slate-900 font-semibold leading-5"},He={class:"text-slate-500 leading-5"},te=$({__name:"TwoFactorAuthenticationSetupVerificationModal",emits:["inputConfirmationCode"],setup(v,{emit:d}){const r=y(""),e=d;return ae(()=>r.value,()=>{e("inputConfirmationCode",r.value)}),(t,s)=>(i(),b("div",Ve,[n("div",null,[n("div",Oe,o(t.$t("craftable-pro","Get your code from your authentication app")),1),n("div",He,o(t.$t("craftable-pro","Enter the 6-digit code generated by your authentication app. A new code is generated every 30 seconds.")),1)]),n("div",null,[u(a(Y),{name:"two-factor-confirmation-code",modelValue:r.value,"onUpdate:modelValue":s[0]||(s[0]=A=>r.value=A),placeholder:t.$t("craftable-pro","Enter code"),required:!0,autocomplete:"off"},null,8,["modelValue","placeholder"])])]))}}),Ye={class:"mt-6 flex flex-col gap-5 items-center"},Be=n("img",{src:"/craftable-pro/images/qr-code-checkmark.svg",width:"104",height:"104",alt:"qr code icon"},null,-1),De={class:"text-lg text-slate-900 font-semibold leading-8 items-center text-center"},Ke={class:"text-sm text-slate-500 font-light"},Le={class:"rounded-md border border-slate-300 flex flex-col gap-4 p-4 w-full"},Ne={class:"flex flex-col gap-2 pb-4 border-b border-slate-200"},Ie={class:"text-slate-900 text-sm font-semibold"},ze={class:"text-slate-500 text-sm"},Ge={class:"flex gap-5 grid grid-cols-2"},We={class:"text-slate-900 rounded-full py-2 text-center w-full bg-slate-100 text-sm"},oe=$({__name:"TwoFactorAuthenticationSetupRecoveryCodesModal",props:{twoFactorAuthenticationRecoveryCodes:{}},setup(v){const d=v;return(r,e)=>(i(),b("div",Ye,[Be,n("div",null,[n("div",De,o(r.$t("craftable-pro","2FA is enabled")),1),n("div",Ke,o(r.$t("craftable-pro","You’ll get a login code from your authentication app.")),1)]),u(a(he),{type:"info"},{default:l(()=>[c(o(r.$t("craftable-pro","Please copy, download, or print your recovery codes before proceeding.")),1)]),_:1}),n("div",Le,[n("div",Ne,[n("div",Ie,o(r.$t("craftable-pro","Your recovery codes")),1),n("div",ze,o(r.$t("craftable-pro","If you lose your phone each of these recovery codes can be used one time each to regain access to your account. Please save them in a safe place, or you will lose access to your account.")),1)]),n("div",Ge,[(i(!0),b(P,null,ne(d.twoFactorAuthenticationRecoveryCodes,(t,s)=>(i(),b("div",We,o(t),1))),256))])])]))}}),Je=$({__name:"TwoFactorAuthenticationSetupModal",props:{open:{type:Boolean}},emits:["toggleOpen"],setup(v,{emit:d}){const r=y(!1),e=y(1),t=L(),s=y(!1),A=d,T=()=>{A("toggleOpen")},{printRecoveryCodes:Q,copyRecoveryCodes:U,downloadRecoveryCodes:R}=q(),_=()=>{r.value=!0,e.value===1?(e.value=2,r.value=!1):e.value===2&&x.post(route("two-factor.confirm"),{code:w.twoFactorAuthenticationConfirmationCode}).then(m=>{e.value=3},m=>{t.error(m.response.data.message??k("craftable-pro","An error has occurred."))}).finally(()=>{r.value=!1})},w=N({twoFactorAuthenticationSetupCode:"",twoFactorAuthenticationConfirmationCode:"",twoFactorAuthenticationSetupQrSvg:"",twoFactorAuthenticationRecoveryCodes:[]});re(()=>{x.post(route("two-factor.enable"),{}).then(m=>{V()}).catch(m=>t.error(k("craftable-pro","An error occurred loading the 2FA data.")))});async function V(){await x.get(route("craftable-pro.settings.2FA-codes"),{}).then(m=>{w.twoFactorAuthenticationSetupCode=m.data.twoFactorAuthenticationSetupCode,w.twoFactorAuthenticationSetupQrSvg=m.data.twoFactorAuthenticationSetupQrSvg,w.twoFactorAuthenticationRecoveryCodes=m.data.twoFactorAuthenticationRecoveryCodes}).catch(m=>t.error(k("craftable-pro","An error occurred loading the 2FA data.")))}return(m,C)=>(i(),f(a(Z),{open:m.open,onToggleOpen:T,"external-open":!0,alignButtons:"right",size:"md"},I({content:l(()=>[e.value===1?(i(),f(Ue,{key:0,processing:r.value,"two-factor-authentication-setup-code":w.twoFactorAuthenticationSetupCode,"two-factor-authentication-setup-qr-svg":w.twoFactorAuthenticationSetupQrSvg},null,8,["processing","two-factor-authentication-setup-code","two-factor-authentication-setup-qr-svg"])):h("",!0),e.value===2?(i(),f(te,{key:1,processing:r.value,onInputConfirmationCode:C[0]||(C[0]=S=>w.twoFactorAuthenticationConfirmationCode=S)},null,8,["processing"])):h("",!0),e.value===3?(i(),f(oe,{key:2,processing:r.value,"two-factor-authentication-recovery-codes":w.twoFactorAuthenticationRecoveryCodes},null,8,["processing","two-factor-authentication-recovery-codes"])):h("",!0)]),buttons:l(({setIsOpen:S})=>[e.value!==3?(i(),f(a(g),{key:0,variant:"outline",color:"gray",onClick:()=>{e.value=1,S()}},{default:l(()=>[c(o(m.$t("craftable-pro","Cancel")),1)]),_:2},1032,["onClick"])):h("",!0),e.value===1?(i(),f(a(g),{key:1,disabled:r.value,onClick:_,"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(m.$t("craftable-pro","Next step")),1)]),_:1},8,["disabled"])):e.value===2?(i(),f(a(g),{key:2,disabled:r.value,onClick:_,"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(m.$t("craftable-pro","Verify")),1)]),_:1},8,["disabled"])):h("",!0),e.value===3?(i(),f(a(j),{key:3,position:"top",class:"inline-flex",useHover:!1},{button:l(()=>[u(a(g),{"left-icon":a(z),onClick:C[1]||(C[1]=p=>s.value=a(U)(w.twoFactorAuthenticationRecoveryCodes.join(`\r
`))),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(m.$t("craftable-pro","Copy codes")),1)]),_:1},8,["left-icon"])]),content:l(()=>[c(o(s.value?m.$t("craftable-pro","Copied!"):m.$t("craftable-pro","Could not copy to clipboard!")),1)]),_:1})):h("",!0),e.value===3?(i(),f(a(g),{key:4,onClick:C[2]||(C[2]=p=>a(R)(w.twoFactorAuthenticationRecoveryCodes.join(`\r
`))),"left-icon":a(G),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(m.$t("craftable-pro","Download codes")),1)]),_:1},8,["left-icon"])):h("",!0),e.value===3?(i(),f(a(g),{key:5,onClick:C[3]||(C[3]=p=>a(Q)(w.twoFactorAuthenticationRecoveryCodes.join("<br>"))),"left-icon":a(W),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(m.$t("craftable-pro","Print codes")),1)]),_:1},8,["left-icon"])):h("",!0),e.value===3?(i(),f(a(g),{key:6,variant:"outline",color:"gray","left-icon-custom-style":"margin-right: 0.25rem",onClick:()=>{S(),a(H).reload(),e.value=1}},{default:l(()=>[c(o(m.$t("craftable-pro","Close")),1)]),_:2},1032,["onClick"])):h("",!0)]),_:2},[e.value!==3?{name:"title",fn:l(()=>[c(o(m.$t("craftable-pro","Set up authentication app")),1)]),key:"0"}:void 0]),1032,["open"]))}}),Ze={class:"mt-6 flex flex-col gap-5"},Xe={class:"text-slate-500 text-sm"},et={class:"rounded-md border border-slate-200 flex flex-col gap-2 p-3.5 w-full"},tt={class:"text-slate-900 font-semibold"},ot={class:"flex gap-2 items-center"},at=n("img",{src:"/craftable-pro/images/qr-code-icon.svg",width:"24",height:"24",alt:"qr code icon"},null,-1),nt={class:"text-slate-800 text-sm"},rt={class:"text-slate-500 text-sm"},lt={class:"text-right flex gap-4 ml-auto items-center"},st=["title"],it=$({__name:"TwoFactorAuthenticationManageModalFirstStep",props:{twoFactorAuthenticationEnabledAt:{}},emits:["changeAppClicked","removeAppClicked"],setup(v,{emit:d}){return(r,e)=>(i(),b("div",Ze,[n("div",Xe,o(r.$t("craftable-pro","You’ll get a login code from your authentication app. We will now ask for a login code anytime you log in on a device we do not recognize.")),1),n("div",et,[n("div",tt,o(r.$t("craftable-pro","Your authentication app")),1),n("div",ot,[at,n("div",nt,o(r.$t("craftable-pro","Authenticator")),1),n("div",rt,o(r.$t("craftable-pro","Added")+": "+r.twoFactorAuthenticationEnabledAt),1),n("div",lt,[n("a",{class:"text-indigo-600",href:"#",onClick:e[0]||(e[0]=t=>r.$emit("changeAppClicked"))},o(r.$t("craftable-pro","Change app")),1),n("a",{title:r.$t("craftable-pro","Remove app"),href:"#",onClick:e[2]||(e[2]=t=>r.$emit("removeAppClicked"))},[u(a(le),{class:"w-[20px]",onClick:e[1]||(e[1]=t=>r.$emit("removeAppClicked"))})],8,st)])])])]))}}),ct={class:"mt-6 flex flex-col gap-5"},dt={class:"flex flex-col gap-2"},ut={class:"text-slate-500 text-sm"},pt={class:"rounded-md border border-slate-200 flex flex-col gap-2 p-3.5 w-full"},ft={class:"flex gap-2 items-center"},mt=n("img",{src:"/craftable-pro/images/qr-code-icon.svg",width:"24",height:"24",alt:"qr code icon"},null,-1),ht={class:"text-slate-800 text-sm"},vt={class:"text-slate-500 text-sm"},gt=$({__name:"TwoFactorAuthenticationRemoveModal",props:{twoFactorAuthenticationEnabledAt:{}},setup(v){return(d,r)=>(i(),b("div",ct,[n("div",dt,[n("div",ut,o(d.$t("craftable-pro","You will no longer be able to use your old verification app:")),1),n("div",pt,[n("div",ft,[mt,n("div",ht,o(d.$t("craftable-pro","Authenticator")),1),n("div",vt,o(d.$t("craftable-pro","Added")+": "+d.twoFactorAuthenticationEnabledAt),1)])])])]))}}),bt={class:"mt-6 flex flex-col gap-5"},_t={class:"flex flex-col gap-2 pb-6 border-slate-200 border-b"},wt={class:"text-slate-500 text-sm"},$t={class:"rounded-md border border-slate-200 flex flex-col gap-2 p-3.5 w-full"},yt={class:"flex gap-2 items-center"},Ct=n("img",{src:"/craftable-pro/images/qr-code-icon.svg",width:"24",height:"24",alt:"qr code icon"},null,-1),At={class:"text-slate-800 text-sm"},Ft={class:"text-slate-500 text-sm"},kt={class:"text-slate-700"},St={class:"flex gap-5 align-center justify-center items-center mt-8 mb-4"},xt={class:"border-4 border-slate-300 w-[160px] h-[160px] flex align-center justify-center items-center",id:"two-fa-setup-qr"},Rt=["innerHTML"],Tt=$({__name:"TwoFactorAuthenticationManageModalSecondStep",props:{processing:{type:Boolean},twoFactorAuthenticationSetupCode:{},twoFactorAuthenticationSetupQrSvg:{},twoFactorAuthenticationEnabledAt:{}},setup(v){const{copyKey:d}=q(),r=v,e=y(!1);return(t,s)=>{const A=se("Link");return i(),b(P,null,[n("div",bt,[n("div",_t,[n("div",wt,o(t.$t("craftable-pro","You will no longer be able to use your old verification app:")),1),n("div",$t,[n("div",yt,[Ct,n("div",At,o(t.$t("craftable-pro","Authenticator")),1),n("div",Ft,o(t.$t("craftable-pro","Added")+": "+t.twoFactorAuthenticationEnabledAt),1)])])]),u(ee,null,{default:l(()=>[u(E,{order:"1"},{title:l(()=>[c(o(t.$t("craftable-pro","Open an authentication app")),1)]),content:l(()=>[c(o(t.$t("craftable-pro","We recommend downloading"))+" ",1),u(A,{href:"https://apps.apple.com/us/app/google-authenticator/id388497605",class:"text-indigo-600"},{default:l(()=>[c(o(t.$t("craftable-pro","Google Authenticator")),1)]),_:1}),c(" "+o(t.$t("craftable-pro","if you do not have one installed.")),1)]),_:1}),u(E,{order:"2"},{title:l(()=>[c(o(t.$t("craftable-pro","Scan this QR code or copy the key")),1)]),content:l(()=>[c(o(t.$t("craftable-pro","Use the app to scan QR code or manually enter the following code: "))+" ",1),n("div",kt,[c(o(r.twoFactorAuthenticationSetupCode)+" ",1),u(a(j),{position:"top",class:"inline-flex",useHover:!1},{button:l(()=>[n("a",{class:"text-indigo-600 px-2",href:"#",onClick:s[0]||(s[0]=T=>e.value=a(d)(t.twoFactorAuthenticationSetupCode))},o(t.$t("craftable-pro","Copy Key")),1)]),content:l(()=>[c(o(e.value?t.$t("craftable-pro","Copied!"):t.$t("craftable-pro","Could not copy to clipboard!")),1)]),_:1})])]),_:1})]),_:1})]),n("div",St,[n("div",xt,[n("span",{innerHTML:r.twoFactorAuthenticationSetupQrSvg},null,8,Rt)])])],64)}}}),Mt=$({__name:"TwoFactorAuthenticationManageModal",props:{open:{type:Boolean},twoFactorAuthenticationEnabledAt:{},changeAppClicked:{type:Function}},emits:["toggleOpen"],setup(v,{emit:d}){const r=y(!1),e=y(1),t=y(!1),s=L(),A=y(!1),T=d,Q=()=>{T("toggleOpen")},U=()=>{t.value=!0,e.value=2},R=async()=>{r.value=!0,e.value===1?(await C(),e.value=2,r.value=!1):e.value===2?(e.value=3,r.value=!1):e.value===3&&x.post(route("craftable-pro.settings.update-new-2FA-codes"),{code:_.twoFactorAuthenticationConfirmationCode}).then(p=>{e.value=4},p=>{s.error(p.response.data.message??k("craftable-pro","An error has occurred."))}).finally(()=>{r.value=!1})},_=N({twoFactorAuthenticationSetupCode:"",twoFactorAuthenticationConfirmationCode:"",twoFactorAuthenticationSetupQrSvg:"",twoFactorAuthenticationRecoveryCodes:[]}),{printRecoveryCodes:w,copyRecoveryCodes:V,downloadRecoveryCodes:m}=q();async function C(){await x.get(route("craftable-pro.settings.new-2FA-codes"),{}).then(p=>{_.twoFactorAuthenticationSetupCode=p.data.twoFactorAuthenticationSetupCode,_.twoFactorAuthenticationSetupQrSvg=p.data.twoFactorAuthenticationSetupQrSvg,_.twoFactorAuthenticationRecoveryCodes=p.data.twoFactorAuthenticationRecoveryCodes}).catch(p=>s.error(k("craftable-pro","An error occurred loading the 2FA data.")))}function S(){x.delete(route("two-factor.disable"),{}).then(p=>{H.reload(),s.info(k("craftable-pro","Two factor authentication successfully disabled."))}).catch(p=>s.error(k("craftable-pro","An error occurred while disabling the 2FA.")))}return(p,F)=>(i(),f(a(Z),{open:p.open,onToggleOpen:Q,"external-open":!0,alignButtons:"right",size:"md"},I({content:l(()=>[e.value===1?(i(),f(it,{key:0,"two-factor-authentication-enabled-at":p.twoFactorAuthenticationEnabledAt,onChangeAppClicked:R,onRemoveAppClicked:U},null,8,["two-factor-authentication-enabled-at"])):h("",!0),e.value===2&&t.value?(i(),f(gt,{key:1,"two-factor-authentication-enabled-at":p.twoFactorAuthenticationEnabledAt},null,8,["two-factor-authentication-enabled-at"])):h("",!0),e.value===2&&!t.value?(i(),f(Tt,{key:2,processing:r.value,"two-factor-authentication-enabled-at":p.twoFactorAuthenticationEnabledAt,"two-factor-authentication-setup-code":_.twoFactorAuthenticationSetupCode,"two-factor-authentication-setup-qr-svg":_.twoFactorAuthenticationSetupQrSvg},null,8,["processing","two-factor-authentication-enabled-at","two-factor-authentication-setup-code","two-factor-authentication-setup-qr-svg"])):h("",!0),e.value===3?(i(),f(te,{key:3,processing:r.value,onInputConfirmationCode:F[0]||(F[0]=M=>_.twoFactorAuthenticationConfirmationCode=M)},null,8,["processing"])):h("",!0),e.value===4?(i(),f(oe,{key:4,processing:r.value,"two-factor-authentication-recovery-codes":_.twoFactorAuthenticationRecoveryCodes},null,8,["processing","two-factor-authentication-recovery-codes"])):h("",!0)]),buttons:l(({setIsOpen:M})=>[e.value!==4?(i(),f(a(g),{key:0,variant:"outline",color:"gray",onClick:()=>{e.value=1,M()}},{default:l(()=>[c(o(p.$t("craftable-pro","Cancel")),1)]),_:2},1032,["onClick"])):h("",!0),e.value===2&&!t.value?(i(),f(a(g),{key:1,disabled:r.value,onClick:R,"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Next step")),1)]),_:1},8,["disabled"])):h("",!0),e.value===2&&t.value?(i(),f(a(g),{key:2,disabled:r.value,onClick:S,"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Confirm removal")),1)]),_:1},8,["disabled"])):e.value===3?(i(),f(a(g),{key:3,disabled:r.value,onClick:R,"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Verify")),1)]),_:1},8,["disabled"])):h("",!0),e.value===4?(i(),f(a(j),{key:4,position:"top",class:"inline-flex",useHover:!1},{button:l(()=>[u(a(g),{"left-icon":a(z),onClick:F[1]||(F[1]=B=>A.value=a(V)(_.twoFactorAuthenticationRecoveryCodes.join(`\r
`))),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Copy codes")),1)]),_:1},8,["left-icon"])]),content:l(()=>[c(o(A.value?p.$t("craftable-pro","Copied!"):p.$t("craftable-pro","Could not copy to clipboard!")),1)]),_:1})):h("",!0),e.value===4?(i(),f(a(g),{key:5,onClick:F[2]||(F[2]=B=>a(m)(_.twoFactorAuthenticationRecoveryCodes.join(`\r
`))),"left-icon":a(G),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Download codes")),1)]),_:1},8,["left-icon"])):h("",!0),e.value===4?(i(),f(a(g),{key:6,onClick:F[3]||(F[3]=B=>a(w)(_.twoFactorAuthenticationRecoveryCodes.join("<br/>"))),"left-icon":a(W),"left-icon-custom-style":"margin-right: 0.25rem"},{default:l(()=>[c(o(p.$t("craftable-pro","Print codes")),1)]),_:1},8,["left-icon"])):h("",!0),e.value===4?(i(),f(a(g),{key:7,variant:"outline",color:"gray","left-icon-custom-style":"margin-right: 0.25rem",onClick:()=>{M(),a(H).reload(),e.value=1}},{default:l(()=>[c(o(p.$t("craftable-pro","Close")),1)]),_:2},1032,["onClick"])):h("",!0)]),_:2},[e.value===1?{name:"title",fn:l(()=>[c(o(p.$t("craftable-pro","Manage authentication app")),1)]),key:"0"}:void 0,e.value<=3&&!t.value?{name:"title",fn:l(()=>[c(o(p.$t("craftable-pro","Change authentication app")),1)]),key:"1"}:void 0,e.value===2&&t.value?{name:"title",fn:l(()=>[c(o(p.$t("craftable-pro","Remove authentication app")),1)]),key:"2"}:void 0]),1032,["open"]))}}),Et={class:"grid grid-cols-6 gap-6"},Pt={class:"flex gap-1 col-span-12 items-center",style:{position:"relative"}},jt={class:"w-1/3 text-sm font-medium text-gray-700"},qt={class:"w-1/3 text-sm"},Qt={key:0,class:"flex items-center"},Ut={class:"text-slate-500 ml-2"},Vt={key:1,class:"flex align-center items-center"},Ot={key:0,class:"w-1/3 text-right"},Ht={key:1,class:"w-1/3 text-right"},Yt=$({__name:"TwoFactorAuthenticationCard",props:{twoFactorAuthenticationEnabledAt:{}},setup(v){const d=y(!1),r=y(!1);return(e,t)=>(i(),f(a(J),{title:e.$t("craftable-pro","Two factor authentication (2FA)")},{default:l(()=>[n("div",Et,[n("div",Pt,[n("div",jt,o(e.$t("craftable-pro","Authentication app")),1),n("div",qt,[e.twoFactorAuthenticationEnabledAt?(i(),b("div",Qt,[u(a(ie),{class:"h-6 w-6 text-success-400 stroke-2 mr-1"}),c(" "+o(e.$t("craftable-pro","Enabled"))+" ",1),n("span",Ut,o(e.twoFactorAuthenticationEnabledAt),1)])):(i(),b("div",Vt,[u(a(ce),{class:"h-6 w-6 text-danger-400 stroke-2 mr-1"}),c(" "+o(e.$t("craftable-pro","Disabled")),1)]))]),e.twoFactorAuthenticationEnabledAt?(i(),b("div",Ht,[u(a(g),{onClick:t[2]||(t[2]=s=>{r.value=!0}),variant:"outline",color:"gray"},{default:l(()=>[c(o(e.$t("craftable-pro","Manage app")),1)]),_:1}),u(Mt,{onToggleOpen:t[3]||(t[3]=s=>r.value=!r.value),open:r.value,"two-factor-authentication-enabled-at":e.twoFactorAuthenticationEnabledAt,"change-app-clicked":()=>{e.alert("Hello")}},null,8,["open","two-factor-authentication-enabled-at","change-app-clicked"])])):(i(),b("div",Ot,[u(a(g),{onClick:t[0]||(t[0]=s=>{d.value=!0}),leftIcon:a(de)},{default:l(()=>[c(o(e.$t("craftable-pro","Set up authentication app")),1)]),_:1},8,["leftIcon"]),u(Je,{onToggleOpen:t[1]||(t[1]=s=>d.value=!d.value),open:d.value},null,8,["open"])]))])])]),_:1},8,["title"]))}}),Bt={class:"flex items-center gap-3 justify-center"},Dt={class:"mx-auto flex max-w-3xl flex-col gap-6 2xl:max-w-4xl"},Kt=$({__name:"Edit",props:{craftableProUser:{}},setup(v){const d=v,{form:r,submit:e}=X({first_name:d.craftableProUser.first_name??"",last_name:d.craftableProUser.last_name??"",email:d.craftableProUser.email??"",locale:d.craftableProUser.locale??"",avatar:d.craftableProUser.avatar??[]},route("craftable-pro.craftable-pro-users.profile.update"));return(t,s)=>(i(),b(P,null,[u(a(ve),{sticky:"",title:t.$t("craftable-pro","User Settings")},null,8,["title"]),u(a(ge),null,{tabs:l(()=>[u(a(be),{variant:"underline"},{default:l(()=>[u(a(K),{class:"w-full text-center"},{default:l(()=>[c(o(t.$t("craftable-pro","Profile")),1)]),_:1}),u(a(K),{class:"w-full text-center"},{default:l(()=>[n("div",Bt,o(t.$t("craftable-pro","Security")),1)]),_:1})]),_:1})]),default:l(()=>[u(a(D),null,{default:l(()=>[u(_e,{form:a(r),submit:a(e)},null,8,["form","submit"])]),_:1}),u(a(D),null,{default:l(()=>[n("div",Dt,[u(ye),u(Yt,{"two-factor-authentication-enabled-at":t.craftableProUser.two_factor_confirmed_at?a(ue)(t.craftableProUser.twoFactorAuthenticationEnabledAt).format("YYYY-MM-DD HH:mm:ss"):null},null,8,["two-factor-authentication-enabled-at"])])]),_:1})]),_:1})],64))}}),eo=$({__name:"Edit",props:{craftableProUser:{},locales:{}},setup(v){const d=v;return(r,e)=>(i(),f(Kt,pe(fe(d)),null,16))}});export{eo as default};
