import React, { useState } from "react";

// Definición de la interfaz para los suscriptores
export interface Suscriber { 
  id: number;
  name: string;
  email: string;
  active: boolean; 
}

// 🟢 INTERFAZ PARA LAS PROPS
interface SuscribersFormProps {
  onSubmit: (data: Omit<Suscriber, 'id'>) => void;
}

const SuscribersForm: React.FC<SuscribersFormProps> = ({ onSubmit }) => {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [active, setActive] = useState(false);
  const [message, setMessage] = useState('');

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    const data = {
      name,
      email,
      active,
    };
    onSubmit(data); // ✅ Llamamos a la función del padre (App)
    setName('');
    setEmail('');
    setActive(false);
    setMessage('Suscriptor agregado exitosamente');
    setTimeout(() => setMessage(''), 3000);
  };

  return (
    <form onSubmit={handleSubmit}>
      {message && <p style={{ color: 'green' }}>{message}</p>}
      <input 
        type="text" 
        value={name} 
        onChange={(e) => setName(e.target.value)} 
        placeholder="Nombre" 
        required 
      />
      <input 
        type="email" 
        value={email} 
        onChange={(e) => setEmail(e.target.value)} 
        placeholder="Correo electrónico" 
        required 
      />
      <label>
        <input 
          type="checkbox" 
          checked={active} 
          onChange={(e) => setActive(e.target.checked)} 
        />
        Activo
      </label>
      <button type="submit">Agregarr</button>
    </form>
  );
};

export default SuscribersForm;
