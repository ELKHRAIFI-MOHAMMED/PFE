import {useEffect, useState } from "react";
import axios from "axios";
import { useLocation } from "react-router-dom";
import {get_medcin} from '../redux/thunk'
import { useDispatch ,useSelector} from "react-redux";

function Interface3(){
     const location=useLocation()
     const dispatch=useDispatch()
     const list_medcin=useSelector(state=>state.list_medcin)
     const  malade=location.state
     const [list_consigne,setList_consigne]=useState('')
     const [list_symptome,setList_symptome]=useState('')
     console.log(malade)

     useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/afficher-consigne/"+malade.id_malade).then((res) => {
            setList_consigne(res.data);
          console.log(res);
        });
        axios.get("http://127.0.0.1:8000/api/afficher-symptome/"+malade.id_malade).then((res) => {
            setList_symptome(res.data);
          console.log(res);
        });
        dispatch(get_medcin(malade.id_specialite));

      }, []);

     return (
        <div>
            <div className="malade-infos">
                  <p>{malade.nom}</p>
                  <p>{malade.description}</p>
                  <p>--------------------------------------------------------</p>

            </div>
            <div className="consigne">
            <h4>des consignes recomender pour nous </h4>
            {list_consigne!=='' ? list_consigne.map(i=>
                <li>{i.description}</li>
            ) :'aucun'}
            <p>----------------------------------------</p>
            </div>
            <div className="Symptome">
            <h4>des Symptome peux confiremr votre malade  </h4>
            {list_symptome!=='' ? list_symptome.map(i=>
                <li>{i.description}</li>
            ) :'aucun'}
            <p>----------------------------------------</p>
            </div>
            <div>
              {list_medcin!=='' ? <>{list_medcin.map(i=>
                <div className="card-medcin">
                   <p>{i.nom_prenom}</p>
                   <div>{i.bio}</div>
                   <p>{i.ville}</p>
                </div>
              )}</>:'yyth'}
            </div>
        </div>
     )
}
export default Interface3