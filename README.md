# INTRODUCCIÓN

He creado una aplicación web para gestionar sorteos con MVC. 

Se necesitará un usuario (ya están creados):
Los usuarios tienen: Nombre, contraseña y nivel de acceso.
Dependiendo del nivel de acceso podrás crear más de una categoría de sorteo. Se puede crear tickets de Rifa o un Dominó.

Una vez loggeado habrá un menú de navegación:
- Inicio: Se verá el perfil de usuario.
- Listado: Listado de los sorteos o dominos creados por esa persona, podrás borrarlos o imprimirlos.
- Crear una Rifa: Para poder crear una rifa necesitará un título, primer ticket y último ticket.
Si el usuario es nivel 2.
- Crear Dominó: Para poder crear un dominó necesitará un título y el número más alto de la ficha.

También podrás cerrar sesión, dirigiéndote a tu nombre de usuario.

# INICIALIZACIÓN

Se necesitará crear un sitio en el servidor web, en mi caso he usado Apache en Docker.