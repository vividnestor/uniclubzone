import{d as q,k as j,U as I,o as c,a as g,j as H,e as _,w as a,G as d,t as i,n as $,f as e,s as T,E as F,g as V,b as v,bk as G,c8 as N,y as L,c9 as P,q as B,aj as M,an as K,F as O,D as r,v as z,a4 as D,a0 as J,bp as Q,R,P as W,aP as X,aO as Y,al as Z,Q as ee,aJ as ae,aK as te}from"./vendor-fc9552fb.js";import{p as re,l as le,w as S,a as y,g as se,i as w,L as k,m as oe,j as U,h as E,_ as ne}from"./index-3d1a2934.js";import{_ as ie}from"./PageHeader.vue_vue_type_script_setup_true_lang-8b2a5c80.js";import{_ as ue}from"./PageContent.vue_vue_type_script_setup_true_lang-f12642fa.js";const de=q({__name:"AvatarGroup",props:{size:{default:"md"},shape:{default:"circle"},additionalCount:{},additionalHref:{}},setup(h){const s=h,f=j(()=>({"text-xs pl-2":s.size==="xs","text-sm pl-3":s.size==="sm","text-base pl-3.5 mb-0.5":s.size==="md","text-lg pl-4 mb-0.5":s.size==="lg","text-xl pl-5 mb-0.5":s.size==="xl"})),p=j(()=>({"-space-x-1":s.size==="xs","-space-x-2":s.size==="sm"||s.size==="md"||s.size==="lg","-space-x-3":s.size==="xl"}));return I("avatarGroupShape",s.shape),I("avatarGroupSize",s.size),(n,u)=>(c(),g("div",{class:$(["flex items-center [&_.avatar]:ring-2 [&_.avatar]:ring-white",e(p)])},[H(n.$slots,"default"),n.additionalCount?(c(),_(T(n.additionalHref?e(F):"span"),{key:0,href:n.additionalHref,class:$([e(f),"z-10 whitespace-nowrap tracking-tighter text-gray-500"])},{default:a(()=>[d(" + "+i(n.additionalCount),1)]),_:1},8,["href","class"])):V("",!0)],2))}}),ce={key:1,class:"pr-2"},fe=q({__name:"Toggle",props:{name:{},withIcon:{type:Boolean,default:!1},modelValue:{type:Boolean,default:!1},label:{}},emits:["update:modelValue"],setup(h,{emit:s}){const f=h,p=s,{value:n}=re(f,p);return(u,C)=>(c(),_(e(P),{modelValue:e(n),"onUpdate:modelValue":C[0]||(C[0]=A=>L(n)?n.value=A:null),class:$([e(n)?"bg-primary-600":"bg-gray-200","relative inline-flex h-6 w-10 rounded-full p-1 transition focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"])},{default:a(()=>[v("span",{class:$([e(n)?"translate-x-4":"translate-x-0","pointer-events-none relative inline-block h-4 w-4 transform rounded-full bg-white shadow-md ring-0 transition ease-in-out"])},[v("span",{class:$([e(n)?"opacity-0 duration-100 ease-out":"opacity-100 duration-200 ease-in","absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"]),"aria-hidden":"true"},[u.withIcon?(c(),_(e(G),{key:0,class:"h-3 w-3 text-gray-400"})):V("",!0),u.label?(c(),g("label",ce,i(u.label),1)):V("",!0)],2),v("span",{class:$([e(n)?"opacity-100 duration-200 ease-in":"opacity-0 duration-100 ease-out","absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"]),"aria-hidden":"true"},[u.withIcon?(c(),_(e(N),{key:0,class:"h-3 w-3 text-primary-600"})):V("",!0)],2)],2)]),_:1},8,["modelValue","class"]))}}),pe={class:"font-medium text-gray-900"},me={key:0},_e={key:1},be={class:"flex items-center justify-end gap-3"},ve={class:"flex items-center my-4"},he={class:"px-2"},ye=q({__name:"Index",props:{roles:{}},setup(h){const s=B(7),f=B(!1),p=B(),n=M();le();const u=K({name:"",two_factor_auth_required:!1}),C=t=>{p.value=t,u.name=t.name,u.two_factor_auth_required=t.two_factor_auth_required,f.value=!0};S("craftable-pro","Active"),S("craftable-pro","Inactive");const A=()=>{var b,l,x;const t=(b=p.value)!=null&&b.id?"put":"post",m=(l=p.value)!=null&&l.id?route("craftable-pro.roles.update",(x=p.value)==null?void 0:x.id):route("craftable-pro.roles.store");Z.visit(m,{method:t,data:u,onSuccess:()=>{var o;u.name="",u.two_factor_auth_required=!1,f.value=!1,n.success((o=ee().props)==null?void 0:o.message)},onError:o=>{o&&Object.values(o)&&(f.value=!1,n.error(Object.values(o)[0]))}})};return(t,m)=>{const b=O("can");return c(),g(R,null,[r(e(ie),{title:t.$t("craftable-pro","Roles")},{default:a(()=>[z((c(),_(e(y),{style:{"background-color":"darkorange","border-radius":"20px"},onClick:m[0]||(m[0]=D(l=>f.value=!0,["prevent"])),class:"mr-2"},{default:a(()=>[d(i(t.$t("craftable-pro","Add role")),1)]),_:1})),[[b,"craftable-pro.role.store"]]),z((c(),_(e(y),{style:{"background-color":"darkorange","border-radius":"20px"},as:e(F),href:"permissions"},{default:a(()=>[d(i(t.$t("craftable-pro","Manage permissions")),1)]),_:1},8,["as"])),[[b,"craftable-pro.role.edit"]])]),_:1},8,["title"]),r(e(ue),null,{default:a(()=>[r(e(se),{baseUrl:t.route("craftable-pro.roles.index"),data:t.roles,dataKey:"roles",withBulkSelect:!1},{tableHead:a(()=>[r(e(w),{sortBy:"id",class:"w-14"},{default:a(()=>[d(i(t.$t("craftable-pro","ID")),1)]),_:1}),r(e(w),{sortBy:"name"},{default:a(()=>[d(i(t.$t("craftable-pro","Name")),1)]),_:1}),r(e(w),null,{default:a(()=>[d(i(t.$t("craftable-pro","Enforce 2FA")),1)]),_:1}),r(e(w),null,{default:a(()=>[d(i(t.$t("craftable-pro","Users")),1)]),_:1}),r(e(w))]),tableRow:a(({item:l,action:x})=>[r(e(k),null,{default:a(()=>[d(i(l.id),1)]),_:2},1024),r(e(k),null,{default:a(()=>[v("div",pe,i(l.name),1)]),_:2},1024),r(e(k),{class:"text-left"},{default:a(()=>[l.two_factor_auth_required?(c(),g("div",me,[r(e(J),{class:"h-6 w-6 text-success-400 stroke-2"})])):(c(),g("div",_e,[r(e(Q),{class:"h-6 w-6 text-danger-400 stroke-2"})]))]),_:2},1024),r(e(k),null,{default:a(()=>[r(e(de),{additionalCount:l.users.length>s.value?l.users.length-s.value:void 0,additionalHref:t.route("craftable-pro.craftable-pro-users.index",{filter:{role:[l.name]}})},{default:a(()=>[(c(!0),g(R,null,W(l.users.slice(0,s.value),o=>(c(),_(e(oe),{key:o.id,src:o.avatar_url,name:`${o.first_name} ${o.last_name}`},null,8,["src","name"]))),128))]),_:2},1032,["additionalCount","additionalHref"])]),_:2},1024),r(e(k),null,{default:a(()=>[v("div",be,[r(e(U),{icon:e(X),color:"gray",variant:"ghost",onClick:o=>C(l)},null,8,["icon","onClick"]),z((c(),_(e(E),{type:"danger"},{trigger:a(({setIsOpen:o})=>[z(r(e(U),{onClick:()=>o(!0),color:"gray",variant:"ghost",icon:e(Y)},null,8,["onClick","icon"]),[[b,"craftable-pro.role.destroy"]])]),title:a(()=>[d(i(t.$t("craftable-pro","Delete role")),1)]),content:a(()=>[d(i(t.$t("craftable-pro","Are you sure you want to delete selected role? All of his data will be permanently removed from our servers forever. This action cannot be undone.")),1)]),buttons:a(({setIsOpen:o})=>[r(e(y),{onClick:D(()=>{x("delete",t.route("craftable-pro.roles.destroy",l),{onFinish:()=>o(!1)})},["prevent"]),color:"danger"},{default:a(()=>[d(i(t.$t("craftable-pro","Delete")),1)]),_:2},1032,["onClick"]),r(e(y),{onClick:D(()=>o(),["prevent"]),color:"gray",variant:"outline"},{default:a(()=>[d(i(t.$t("craftable-pro","Cancel")),1)]),_:2},1032,["onClick"])]),_:2},1024)),[[b,"craftable-pro.role.destroy"]])])]),_:2},1024)]),_:1},8,["baseUrl","data"]),r(e(E),{open:f.value,"external-open":!0},{title:a(()=>{var l;return[d(i((l=p.value)!=null&&l.id?t.$t("craftable-pro","Edit role"):t.$t("craftable-pro","Add role")),1)]}),content:a(()=>[r(e(ne),{name:"name",modelValue:e(u).name,"onUpdate:modelValue":m[1]||(m[1]=l=>e(u).name=l),placeholder:t.$t("craftable-pro","Role name")},null,8,["modelValue","placeholder"]),v("div",ve,[r(e(fe),{modelValue:e(u).two_factor_auth_required,"onUpdate:modelValue":m[2]||(m[2]=l=>e(u).two_factor_auth_required=l),name:"two_factor_auth_required"},null,8,["modelValue"]),v("label",he,i(t.$t("craftable-pro","Enforce 2FA")),1)])]),buttons:a(()=>[r(e(y),{onClick:A},{default:a(()=>[d(" Save ")]),_:1}),r(e(y),{onClick:m[3]||(m[3]=l=>f.value=!1)},{default:a(()=>[d(" Cancel ")]),_:1})]),_:1},8,["open"])]),_:1})],64)}}}),Ce=q({__name:"Index",props:{roles:{}},setup(h){const s=h;return(f,p)=>(c(),_(ye,ae(te(s)),null,16))}});export{Ce as default};
