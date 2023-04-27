import{J as u,e as d,f as l,g as e,x as t,B as o,u as s,E as a,n as _,j as n,k as c,z as h,G as g,F as f}from"./app-d649ed0d.js";import{L as m}from"./general-6dd247a3.js";const y={id:"MainNav",class:"bg-white"},x={class:"border py-0 px-6"},v={class:"mt-0 flex items-center justify-between"},b={class:"flex gap-x-2 py-1 px-2 w-25"},k=e("img",{class:"md:flex hidden",src:"/images/softbusiness-logo.png",alt:""},null,-1),B=e("img",{class:"md:flex lg:hidden",src:"/images/MobileLogo.png",alt:""},null,-1),w={class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},L={class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},N={key:0,class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},C={key:1,class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},A={class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},D={class:"cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100"},M={class:"flex items-center gap-3 hover:bg-gray-200 px-2 py-2.5 rounded-lg"},z=e("span",{class:"max-sm:hidden"},"Logout",-1),V=["href"],j={class:"flex items-center gap-3 hover:bg-gray-200 px-2 py-2.5 rounded-lg"},T=e("span",{class:"max-sm:hidden"},"Login",-1),$={data(){return{test:!1}},methods:{toggle(){this.test=!this.test}}},H=Object.assign($,{__name:"MainNavLayout",props:["canLogin","canRegister"],setup(E){const i=u().props.auth.user;return(r,p)=>(d(),l(f,null,[e("div",y,[e("div",x,[e("div",v,[e("div",b,[t(s(a),{href:"/"},{default:o(()=>[k]),_:1}),t(s(a),{href:"/"},{default:o(()=>[B]),_:1})]),e("div",{class:_(["flex-auto max-sm:hidden",{toggle:r.test}])},[e("span",w,[t(s(a),{href:"/"},{default:o(()=>[n("Home ")]),_:1})]),e("span",L,[t(s(a),{href:"/softwares"},{default:o(()=>[n("Software")]),_:1})]),s(i).type!=="TBDeveloper"?(d(),l("span",N,[t(s(a),{href:"/ClientArea"},{default:o(()=>[n("My space ")]),_:1})])):c("",!0),s(i).type=="TBDeveloper"?(d(),l("span",C,[t(s(a),{href:"/ClientArea"},{default:o(()=>[n("Developer space ")]),_:1})])):c("",!0),e("span",A,[t(s(a),{href:"/AdminArea"},{default:o(()=>[n("Admin space ")]),_:1})])],2),e("span",D,[t(s(a),{href:"/BecomeDeveloper"},{default:o(()=>[n("Become a Developper")]),_:1})]),e("button",{class:"lg:hidden max-sm:block md:hidden",onClick:p[0]||(p[0]=F=>r.toggle())}," test "),r.$page.props.auth.user?(d(),h(s(a),{key:0,class:"w-1/12",href:r.route("logout"),as:"button",method:"post"},{default:o(()=>[e("div",M,[t(m,{class:"pl-2",size:30}),z])]),_:1},8,["href"])):(d(),l("a",{key:1,class:"w-1/12",href:r.route("login"),as:"button",method:"post"},[e("div",j,[t(m,{class:"pl-2",size:30}),T])],8,V))])])]),g(r.$slots,"default")],64))}});export{H as _};