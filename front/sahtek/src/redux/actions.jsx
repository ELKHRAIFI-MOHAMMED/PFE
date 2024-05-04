import { type } from "@testing-library/user-event/dist/type";

export const user_connect = (user) => ({
    
  type: "USER",
  payload: user,
});
/////// loading
export const loading=()=>({
  type:'LOADING',
  payload:true
})
///// afficher la list des medcins
export const afficher_medcin=(list)=>({
  type:'LIST_MEDCIN',
  payload:list
})

export const afficher_malade=(list)=>({
  type:'LIST_MALADE',
  payload:list
})