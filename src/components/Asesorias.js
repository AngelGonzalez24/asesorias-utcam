import React, { useState } from 'react';

const Asesorias = () => {
  const asesorias = [
    { materia: 'Programación', maestro: 'Ing. Pérez', grupo: 'ISIC 4A' },
    { materia: 'Contabilidad', maestro: 'Lic. Sánchez', grupo: 'CO 5B' },
    { materia: 'Electrónica', maestro: 'Ing. Romero', grupo: 'MEC 6A' },
    { materia: 'Base de Datos', maestro: 'Ing. Moreno', grupo: 'ISIC 4B' },
    { materia: 'Costos', maestro: 'Lic. Juárez', grupo: 'CO 4A' },
    { materia: 'Cálculo', maestro: 'Ing. García', grupo: 'ISIC 4A' },
    { materia: 'Inglés Técnico', maestro: 'Mtra. López', grupo: 'MEC 6A' },
  ];

  const [grupoFiltro, setGrupoFiltro] = useState('');
  const [materiaFiltro, setMateriaFiltro] = useState('');
  const [busqueda, setBusqueda] = useState('');

  const grupos = [...new Set(asesorias.map(a => a.grupo))];
  const materias = [...new Set(asesorias.map(a => a.materia))];

  const asesoriasFiltradas = asesorias.filter(a => {
    const coincideBusqueda = (
      a.materia.toLowerCase().includes(busqueda.toLowerCase()) ||
      a.maestro.toLowerCase().includes(busqueda.toLowerCase()) ||
      a.grupo.toLowerCase().includes(busqueda.toLowerCase())
    );

    return (
      coincideBusqueda &&
      (grupoFiltro === '' || a.grupo === grupoFiltro) &&
      (materiaFiltro === '' || a.materia === materiaFiltro)
    );
  });

  return (
    <div className="container mt-4">
      <h2 className="mb-3">📚 Asesorías disponibles</h2>
      <p className="text-muted">Total: <strong>{asesoriasFiltradas.length}</strong> asesorías encontradas</p>

      {/* Filtros */}
      <div className="row mb-4">
        <div className="col-md-4 mb-2">
          <label className="form-label">🔍 Buscar (materia, maestro o grupo):</label>
          <input
            type="text"
            className="form-control"
            placeholder="Escribe aquí..."
            value={busqueda}
            onChange={e => setBusqueda(e.target.value)}
          />
        </div>

        <div className="col-md-4 mb-2">
          <label className="form-label">🏫 Filtrar por grupo:</label>
          <select className="form-select" value={grupoFiltro} onChange={e => setGrupoFiltro(e.target.value)}>
            <option value="">Todos los grupos</option>
            {grupos.map((g, i) => (
              <option key={i} value={g}>{g}</option>
            ))}
          </select>
        </div>

        <div className="col-md-4 mb-2">
          <label className="form-label">📘 Filtrar por materia:</label>
          <select className="form-select" value={materiaFiltro} onChange={e => setMateriaFiltro(e.target.value)}>
            <option value="">Todas las materias</option>
            {materias.map((m, i) => (
              <option key={i} value={m}>{m}</option>
            ))}
          </select>
        </div>
      </div>

      {/* Tabla */}
      <div className="table-responsive">
        <table className="table table-bordered table-striped">
          <thead className="table-primary text-center">
            <tr>
              <th>📘 Materia</th>
              <th>👨‍🏫 Maestro</th>
              <th>🏫 Grupo</th>
            </tr>
          </thead>
          <tbody>
            {asesoriasFiltradas.length > 0 ? (
              asesoriasFiltradas.map((a, i) => (
                <tr key={i}>
                  <td>{a.materia}</td>
                  <td>{a.maestro}</td>
                  <td>{a.grupo}</td>
                </tr>
              ))
            ) : (
              <tr>
                <td colSpan="3" className="text-center">No se encontraron asesorías con esos filtros.</td>
              </tr>
            )}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default Asesorias;
