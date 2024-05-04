import axios from "axios";
import {afficher_medcin,loading} from "./actions.jsx";

export const get_medcin = (ids) => async (dispatch) => {
    dispatch(loading())
    try {
      const response = await axios.get(
        "http://127.0.0.1:8000/api/afficher-medcin/"+ids
      );
      dispatch(afficher_medcin(response.data));
    } catch (error) {
      console.error("Error fetching permis data:", error);
    }
  };
