import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.tsx'
import Head from './Layout/Head.tsx'

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <Head />
    <App />
  </StrictMode>,
)
