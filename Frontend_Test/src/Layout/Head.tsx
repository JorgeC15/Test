import { Helmet } from 'react-helmet-async';

const Head = () => (
  <>
    <Helmet>
      <title>Inicio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="icon" type="image/png" href="/assets/Icons/segey.png" />
    </Helmet>
    <nav className="bg-blue-600 text-white py-4 px-8 flex items-center justify-between shadow">
        <div className="flex items-center gap-4">
            <img src="/assets/Images/logoSegey-removebg-preview.png" alt="Logo" className="h-8 w-8" />
            <span className="text-2xl font-bold">Plantilla de Personal</span>
        </div>
        <ul className="flex gap-6">
            <li><a href="/" className="hover:underline">Inicio</a></li>
            {/* Agrega más enlaces aquí si lo deseas */}
        </ul>
    </nav>
  </>
);

export default Head;