import{A as S}from"./ApplicationLogo-5795173b.js";import{o as B,H as D,C as v,r as L,e as u,f as m,g as e,G as f,i as k,I as $,x as n,B as o,n as c,u as l,T as M,z as x,E as y,j as d,t as b,k as N}from"./app-d649ed0d.js";const E={class:"relative"},j={__name:"Dropdown",props:{align:{type:String,default:"right"},width:{type:String,default:"48"},contentClasses:{type:String,default:"py-1 bg-white"}},setup(r){const s=r,t=g=>{i.value&&g.key==="Escape"&&(i.value=!1)};B(()=>document.addEventListener("keydown",t)),D(()=>document.removeEventListener("keydown",t));const a=v(()=>({48:"w-48"})[s.width.toString()]),p=v(()=>s.align==="left"?"origin-top-left left-0":s.align==="right"?"origin-top-right right-0":"origin-top"),i=L(!1);return(g,h)=>(u(),m("div",E,[e("div",{onClick:h[0]||(h[0]=w=>i.value=!i.value)},[f(g.$slots,"trigger")]),k(e("div",{class:"fixed inset-0 z-40",onClick:h[1]||(h[1]=w=>i.value=!1)},null,512),[[$,i.value]]),n(M,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:o(()=>[k(e("div",{class:c(["absolute z-50 mt-2 rounded-md shadow-lg",[l(a),l(p)]]),style:{display:"none"},onClick:h[2]||(h[2]=w=>i.value=!1)},[e("div",{class:c(["rounded-md ring-1 ring-black ring-opacity-5",r.contentClasses])},[f(g.$slots,"content")],2)],2),[[$,i.value]])]),_:3})]))}},C={__name:"DropdownLink",props:{href:{type:String,required:!0}},setup(r){return(s,t)=>(u(),x(l(y),{href:r.href,class:"block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"},{default:o(()=>[f(s.$slots,"default")]),_:3},8,["href"]))}},z={__name:"NavLink",props:{href:{type:String,required:!0},active:{type:Boolean}},setup(r){const s=r,t=v(()=>s.active?"inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out":"inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out");return(a,p)=>(u(),x(l(y),{href:r.href,class:c(l(t))},{default:o(()=>[f(a.$slots,"default")]),_:3},8,["href","class"]))}},_={__name:"ResponsiveNavLink",props:{href:{type:String,required:!0},active:{type:Boolean}},setup(r){const s=r,t=v(()=>s.active?"block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out":"block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out");return(a,p)=>(u(),x(l(y),{href:r.href,class:c(l(t))},{default:o(()=>[f(a.$slots,"default")]),_:3},8,["href","class"]))}},V={class:"min-h-screen bg-gray-100"},q={class:"bg-white border-b border-gray-100"},A={class:"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"},O={class:"flex justify-between h-16"},T={class:"flex"},P={class:"shrink-0 flex items-center"},G={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},H={class:"hidden sm:flex sm:items-center sm:ml-6"},I={class:"ml-3 relative"},R={class:"inline-flex rounded-md"},U={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"},F=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),J={class:"-mr-2 flex items-center sm:hidden"},K={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},Q={class:"pt-2 pb-3 space-y-1"},W={class:"pt-4 pb-1 border-t border-gray-200"},X={class:"px-4"},Y={class:"font-medium text-base text-gray-800"},Z={class:"font-medium text-sm text-gray-500"},ee={class:"mt-3 space-y-1"},te={key:0,class:"bg-white shadow"},se={class:"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"},ne={__name:"AuthenticatedLayout",setup(r){const s=L(!1);return(t,a)=>(u(),m("div",null,[e("div",V,[e("nav",q,[e("div",A,[e("div",O,[e("div",T,[e("div",P,[n(l(y),{href:t.route("dashboard")},{default:o(()=>[n(S,{class:"block h-9 w-auto fill-current text-gray-800"})]),_:1},8,["href"])]),e("div",G,[n(z,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[d(" Dashboard ")]),_:1},8,["href","active"])])]),e("div",H,[e("div",I,[n(j,{align:"right",width:"48"},{trigger:o(()=>[e("span",R,[e("button",U,[d(b(t.$page.props.auth.user.name)+" ",1),F])])]),content:o(()=>[n(C,{href:t.route("profile.edit")},{default:o(()=>[d(" Profile ")]),_:1},8,["href"]),n(C,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[d(" Log Out ")]),_:1},8,["href"])]),_:1})])]),e("div",J,[e("button",{onClick:a[0]||(a[0]=p=>s.value=!s.value),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[(u(),m("svg",K,[e("path",{class:c({hidden:s.value,"inline-flex":!s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:c({hidden:!s.value,"inline-flex":s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:c([{block:s.value,hidden:!s.value},"sm:hidden"])},[e("div",Q,[n(_,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[d(" Dashboard ")]),_:1},8,["href","active"])]),e("div",W,[e("div",X,[e("div",Y,b(t.$page.props.auth.user.name),1),e("div",Z,b(t.$page.props.auth.user.email),1)]),e("div",ee,[n(_,{href:t.route("profile.edit")},{default:o(()=>[d(" Profile ")]),_:1},8,["href"]),n(_,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[d(" Log Out ")]),_:1},8,["href"])])])],2)]),t.$slots.header?(u(),m("header",te,[e("div",se,[f(t.$slots,"header")])])):N("",!0),e("main",null,[f(t.$slots,"default")])])]))}};export{ne as _};