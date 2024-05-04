// App.js
import React, { useState } from 'react';
import Interface1 from './interfaces.jsx/interface1.jsx';
import Interface2 from './interfaces.jsx/interface2.jsx'
import Interface3 from './interfaces.jsx/interface3.jsx';
import { BrowserRouter as Router, Routes, Route,  } from "react-router-dom";
import './App.css';

const App = () => {
  

  return (
    <div>
      <Router>
      <div>
        <Routes>
          <Route path="/" element={<Interface1 />} />
          <Route path="/interface2" element={<Interface2 />} />
          <Route path="/interface3" element={<Interface3 />} />
        </Routes>
      </div>
    </Router>
    </div>
  );
};

export default App;

