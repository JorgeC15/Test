import { useEffect, useState } from 'react'
import './App.css'
import axios from 'axios';

function App() {
    const[suscribers, setSuscribers] = useState([]);
    useEffect(() => {
        fetchSuscribers();
    }, []);

    const fetchSuscribers = async () => {
      const response = await axios.get('http://localhost:8000/api/suscribers');
      setSuscribers(response.data);
    }
    return(
      <div>
        <ul>
          {suscribers.map((suscriber) => (
            <li key={suscriber}> {suscriber.name} - {suscriber.email} ({suscriber.active ? 'Activo':'Inactivo'}) </li>
          ))}
        </ul>
      </div>
    )
  }

export default App;