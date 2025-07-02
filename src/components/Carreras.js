import React, { useState } from 'react';

const Carreras = () => {
  const tsu = [
    'Contaduría',
    'Energía Turbo‑Solar',
    'Mantenimiento Industrial',
    'Mantenimiento Petrolero',
    'Mecánica Industrial',
    'Automatización',
    'Desarrollo de Software Multiplataforma',
  ];

  const ingenierias = [
    'Contaduría (Licenciatura/Ingeniería)',
    'Energía y Desarrollo Sostenible',
    'Mantenimiento Industrial',
    'Mecánica',
    'Mecatrónica',
    'Tecnologías de la Información e Innovación Digital',
  ];

  const todasCarreras = [
    ...tsu.map(c => ({ nombre: c, tipo: 'TSU' })),
    ...ingenierias.map(c => ({ nombre: c, tipo: 'Ingeniería o Licenciatura' })),
  ];

  const [tipoFiltro, setTipoFiltro] = useState('');
  const [busqueda, setBusqueda] = useState('');

  const carrerasFiltradas = todasCarreras.filter(carrera => {
    const coincideTipo = tipoFiltro === '' || carrera.tipo === tipoFiltro;
    const coincideTexto = carrera.nombre.toLowerCase().includes(busqueda.toLowerCase());
    return coincideTipo && coincideTexto;
  });

  return (
    <div className="container mt-4">
      <h2 className="mb-3">🎓 Carreras disponibles en UTCAM</h2>
      <p className="text-muted">Total: <strong>{carrerasFiltradas.length}</strong> carreras encontradas</p>

      {/* Filtros */}
      <div className="row mb-4">
        <div className="col-md-6 mb-2">
          <label className="form-label">🔍 Buscar carrera:</label>
          <input
            type="text"
            className="form-control"
            placeholder="Ej. mantenimiento, software, turismo..."
            value={busqueda}
            onChange={e => setBusqueda(e.target.value)}
          />
        </div>

        <div className="col-md-6 mb-2">
          <label className="form-label">🎓 Filtrar por tipo:</label>
          <select className="form-select" value={tipoFiltro} onChange={e => setTipoFiltro(e.target.value)}>
            <option value="">Todas</option>
            <option value="TSU">TSU</option>
            <option value="Ingeniería o Licenciatura">Ingenierías o Licenciaturas</option>
          </select>
        </div>
      </div>

      {/* Tabla */}
      <div className="table-responsive">
        <table className="table table-bordered table-striped">
          <thead className="table-success text-center">
            <tr>
              <th>📘 Nombre de la carrera</th>
              <th>🎓 Nivel</th>
            </tr>
          </thead>
          <tbody>
            {carrerasFiltradas.length > 0 ? (
              carrerasFiltradas.map((c, i) => (
                <tr key={i}>
                  <td>{c.nombre}</td>
                  <td>{c.tipo}</td>
                </tr>
              ))
            ) : (
              <tr>
                <td colSpan="2" className="text-center">No se encontraron carreras con esos filtros.</td>
              </tr>
            )}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default Carreras;
