import { useEffect, useState } from 'react'
import SuscribersForm from './Components/Forms_suscribers';

// Define la interfaz
interface Suscriber {
  id: number;
  name: string;
  email: string;
  active: boolean;
}

function App() {
    const[suscribers, setSuscribers] = useState<Suscriber[]>([]);

      // Cargar suscriptores existentes al iniciar
  useEffect(() => {
    fetch('http://localhost:8000/api/suscribers') // Cambia la URL según tu backend
      .then(res => res.json())
      .then(data => setSuscribers(data))
      .catch(err => console.error('Error al cargar:', err));
  }, []);


  const handleAddSuscriber = async (data: Omit<Suscriber, 'id'>) => 
  {
    try 
    {
      const res = await fetch('http://localhost:8000/api/suscribers', 
      {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
      });
      const newSuscriber = await res.json();
      setSuscribers((prev) => [...prev, newSuscriber]);
    } 
    catch (err) 
    {
    console.error('Error al agregar:', err);
    }
  };

    return(
      <div>
      <SuscribersForm onSubmit={handleAddSuscriber} />
      <ul>
        {suscribers.map((s) => (
          <li key={s.id}>
            {s.name} - {s.email} ({s.active ? 'Activo' : 'Inactivo'})
          </li>
        ))}
      </ul>
    </div>
    )
  }

export default App;