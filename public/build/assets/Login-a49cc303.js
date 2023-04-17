import{y as w,w as y,j as k,x as s,a as i,c as b,z as x,s as v,q as u,u as d,m as o,X as V,t as B,f as c,b as r,A as C,e as p,n as $,d as q}from"./app-6a65d12e.js";import{_ as P}from"./GuestLayout-068ac3ed.js";import{_ as f,a as g,b as _}from"./TextInput-13fd4757.js";import{P as N}from"./PrimaryButton-e198e1f8.js";import"./ApplicationLogo-c5c280dc.js";import"./_plugin-vue_export-helper-c27b6911.js";const R=["value"],S={__name:"Checkbox",props:{checked:{type:[Array,Boolean],required:!0},value:{default:null}},emits:["update:checked"],setup(l,{emit:e}){const m=l,n=w({get(){return m.checked},set(t){e("update:checked",t)}});return(t,a)=>y((i(),b("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":a[0]||(a[0]=h=>x(n)?n.value=h:null),class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"},null,8,R)),[[k,s(n)]])}},U={key:0,class:"mb-4 font-medium text-sm text-green-600"},L=["onSubmit"],j={class:"mt-4"},z={class:"block mt-4"},A={class:"flex items-center"},D=r("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1),E={class:"flex items-center justify-end mt-4"},I={__name:"Login",props:{canResetPassword:{type:Boolean},status:{type:String}},setup(l){const e=v({email:"",password:"",remember:!1}),m=()=>{e.post(route("login"),{onFinish:()=>e.reset("password")})};return(n,t)=>(i(),u(P,null,{default:d(()=>[o(s(V),{title:"Log in"}),l.status?(i(),b("div",U,B(l.status),1)):c("",!0),r("form",{onSubmit:q(m,["prevent"])},[r("div",null,[o(f,{for:"email",value:"Email"}),o(g,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":t[0]||(t[0]=a=>s(e).email=a),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),o(_,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),r("div",j,[o(f,{for:"password",value:"Password"}),o(g,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":t[1]||(t[1]=a=>s(e).password=a),required:"",autocomplete:"current-password"},null,8,["modelValue"]),o(_,{class:"mt-2",message:s(e).errors.password},null,8,["message"])]),r("div",z,[r("label",A,[o(S,{name:"remember",checked:s(e).remember,"onUpdate:checked":t[2]||(t[2]=a=>s(e).remember=a)},null,8,["checked"]),D])]),r("div",E,[l.canResetPassword?(i(),u(s(C),{key:0,href:n.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:d(()=>[p(" Forgot your password? ")]),_:1},8,["href"])):c("",!0),o(N,{class:$(["ml-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:d(()=>[p(" Log in ")]),_:1},8,["class","disabled"])])],40,L)]),_:1}))}};export{I as default};
