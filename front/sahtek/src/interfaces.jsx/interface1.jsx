// Interface1.js
import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import { useDispatch } from "react-redux";
import { useSelector } from "react-redux";
import { user_connect } from "../redux/actions";

const Interface1 = () => {
  const user = useSelector((state) => state.user);
  const [nom, setNom] = useState("");
  const [prenom, setPrenom] = useState("");
  const [genre, setGenre] = useState("");
  const [ville, setVille] = useState("");
  const navigate = useNavigate();
  const [formData, setFormData] = useState(null);
  const dispatch = useDispatch();

  const handleSubmit = (e) => {
    e.preventDefault();
    setFormData({ nom, prenom, genre, ville });
    dispatch(user_connect({ nom, prenom, genre, ville }));
    alert("fhjfhfhf");
    navigate('/interface2');
  };

  return (
    <div>
      {console.log(user)}
      {console.log(genre)}
      <div class="navbar">
        <img class="logo" src="logo.png" alt=""></img>
        <h2>
          "Votre Santé, Notre Priorité : Trouvez Votre Médecin à Proximité"
        </h2>
      </div>
      <div class="form">
        <form onSubmit={handleSubmit}>
          <div>
            <h3 style={{ textDecoration: "underline", color: "black" }}>
              Remplissez ce formulaire pour continuer :
            </h3>
            <label style={{ textDecoration: "underline", color: "green" }}>
              <strong>Nom:</strong>
            </label>
            <input
              required
              type="text"
              value={nom}
              onChange={(e) => setNom(e.target.value)}
            />
          </div>
          <div>
            <label style={{ textDecoration: "underline", color: "green" }}>
              <strong>Prénom:</strong>
            </label>
            <input
              required
              type="text"
              value={prenom}
              onChange={(e) => setPrenom(e.target.value)}
            />
          </div>
          <div>
            <label style={{ textDecoration: "underline", color: "green" }}>
              <strong>Genre:</strong>
            </label>
            <input
              type="checkbox"
              value="homme"
              name="genre"
              onClick={() => setGenre(2)}
            />
            <strong> Homme</strong>
            <input
              type="checkbox"
              value="femme"
              name="genre"
              onClick={() => setGenre(3)}
            />
            <strong> Femme</strong>
          </div>
          <div>
            <label style={{ textDecoration: "underline", color: "green" }}>
              <strong>Ville:</strong>
            </label>
            <select
              required
              value={ville}
              onChange={(e) => setVille(e.target.value)}
            >
              <option value="">
                <strong>Sélectionnez une ville</strong>
              </option>
              <option value="casablanca">
                <strong>Casablanca</strong>
              </option>
              <option value="rabat">
                <strong>Rabat</strong>
              </option>
              <option value="agadir">
                <strong>Agadir</strong>
              </option>
            </select>
          </div>
          <button class="cssbuttons-io-button">
            continuer
            <div class="icon">
              <svg
                height="24"
                width="24"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
          </button>
        </form>
      </div>
      <footer>
        {" "}
        <p>
          <strong>docTHub</strong>
          <br></br>
          0614309397<br></br>
          doct.hub@gmail.com<br></br>
          <a href="#">Facebook</a> | <a href="#">Twitter</a> |{" "}
          <a href="#">Instagram</a>
        </p>
        <p>docTHub. All Rights Reserved.</p>
        <p>
          Disclaimer: The information provided on this website is for general
          informational purposes only and should not be considered medical
          advice. Please consult with a healthcare professional for personalized
          healthcare recommendations.
        </p>
      </footer>
    </div>
  );
};

export default Interface1;
