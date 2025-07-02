import React from 'react';
import { Link } from 'react-router-dom';

const Home = () => (
  <div className="container mt-5">
    <div className="text-center">
      <h1 className="display-5 fw-bold mb-3">🎓 Bienvenido a Asesorías UTCAM</h1>
      <p className="lead">Consulta asesorías disponibles por carrera, grupo y materia con tus docentes.</p>
      <p className="text-muted">Aplicación académica orientada a estudiantes y maestros de la Universidad Tecnológica de Campeche.</p>

      <div className="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <Link to="/asesorias" className="btn btn-primary btn-lg">
          Ver Asesorías
        </Link>
        <Link to="/carreras" className="btn btn-outline-success btn-lg">
          Explorar Carreras
        </Link>
      </div>
    </div>

    <div className="mt-5">
      <h4>ℹ️ ¿Qué puedes hacer aquí?</h4>
      <ul className="list-group list-group-flush">
        <li className="list-group-item">🔍 Filtrar asesorías por grupo, materia o maestro</li>
        <li className="list-group-item">📚 Consultar la lista completa de carreras de la UTCAM</li>
        <li className="list-group-item">🧑‍🏫 Identificar tus docentes por asignatura</li>
        <li className="list-group-item">📅 Organizar tu asistencia a asesorías por área académica</li>
      </ul>
    </div>
  </div>
);

export default Home;
