import React from 'react';
import { NavLink } from 'react-router-dom';

const Navbar = () => (
  <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
    <div className="container">
      <NavLink className="navbar-brand" to="/">Asesorías UTCAM</NavLink>
      <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span className="navbar-toggler-icon"></span>
      </button>
      <div className="collapse navbar-collapse" id="navbarNav">
        <ul className="navbar-nav ms-auto">
          <li className="nav-item">
            <NavLink className="nav-link" to="/">Inicio</NavLink>
          </li>
          <li className="nav-item">
            <NavLink className="nav-link" to="/carreras">Carreras</NavLink>
          </li>
          <li className="nav-item">
            <NavLink className="nav-link" to="/asesorias">Asesorías</NavLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>
);

export default Navbar;
