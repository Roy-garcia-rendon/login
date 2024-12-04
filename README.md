Sistema de login php.


estructura de la base de datos necesaria:
![image](https://github.com/user-attachments/assets/2ef399a0-3674-4add-9151-239e651291e6) 

tu documento index necesita de un boton llamado login para que en empty funsione 
![image](https://github.com/user-attachments/assets/1385f7ff-9b41-4dc5-aed2-56721e09ecb0)

los datos iran dentro de un fromulario con el metodo post y tener que incluir los documentos conexxion y login ejemplo:
![image](https://github.com/user-attachments/assets/10e61ce6-a67f-413c-8ee2-1f0362225657)

(controlador es login)


revisa antes de todo que tu index en los campos donde se pondran los datos ejemplo en los input se llamen usuarios y password ejemplo:
![image](https://github.com/user-attachments/assets/fbb94a66-76ab-40a8-b176-09309f85a471)


incluyo un documento llamado conexion ese es para conectar tu base de datos con el login;

/* tener en tu index el siguiente codigo 
include("conexion.php");
include("login.php");*/


en el caso de que el dodigo de coneccion no funcione usa este codigo en conexion:
![image](https://github.com/user-attachments/assets/4d93e41d-e4ce-4e01-8762-c7d4d182ea0c)

