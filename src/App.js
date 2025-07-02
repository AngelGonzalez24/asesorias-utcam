import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Navbar from './components/Navbar';
import Home from './components/Home';
import Carreras from './components/Carreras';
import Asesorias from './components/Asesorias';

function App() {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/carreras" element={<Carreras />} />
        <Route path="/asesorias" element={<Asesorias />} />
      </Routes>
    </Router>
  );
}

export default App;
