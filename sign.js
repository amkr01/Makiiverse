import { registerUser, loginUser, logoutUser } from './auth.js';

// Para registrar:
registerUser('correo@example.com', 'tu-contraseña123');

// Para iniciar sesión:
loginUser('correo@example.com', 'tu-contraseña123');

// Para cerrar sesión:
logoutUser();