const initialState = {
   user:'',
   loading: false,
   list_medcin:'',
   list_malade:''
  };
  
  const clientReducer = (state = initialState, action) => {
    switch (action.type) {
      
        case 'USER':
            return{
                ...state,
                user:action.payload,
                loading: false
            }

        case 'LIST_MEDCIN':
            return{
                ...state,
                list_medcin:action.payload,
                loading: false
            }

        case 'LIST_MALADE':
            alert(1)
            return {
                ...state,
                list_malade:action.payload
            }
 default:
        return state;
    }
  };
  
  export default clientReducer;