import{A as u,z as d,B as r,e as i,x as t,u as s,X as c,f,t as p,k as _,g as a,j as w,n as g,w as y}from"./app-d649ed0d.js";import{_ as b}from"./GuestLayout-1774290e.js";import{_ as x,a as k,b as h}from"./TextInput-dcef8837.js";import{P as v}from"./PrimaryButton-141d0ffd.js";import"./ApplicationLogo-5795173b.js";import"./_plugin-vue_export-helper-c27b6911.js";const V=a("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),B={key:0,class:"mb-4 font-medium text-sm text-green-600"},N=["onSubmit"],P={class:"flex items-center justify-end mt-4"},q={__name:"ForgotPassword",props:{status:{type:String}},setup(o){const e=u({email:""}),m=()=>{e.post(route("password.email"))};return(S,l)=>(i(),d(b,null,{default:r(()=>[t(s(c),{title:"Forgot Password"}),V,o.status?(i(),f("div",B,p(o.status),1)):_("",!0),a("form",{onSubmit:y(m,["prevent"])},[a("div",null,[t(x,{for:"email",value:"Email"}),t(k,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":l[0]||(l[0]=n=>s(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),t(h,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),a("div",P,[t(v,{class:g({"opacity-25":s(e).processing}),disabled:s(e).processing},{default:r(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,N)]),_:1}))}};export{q as default};
