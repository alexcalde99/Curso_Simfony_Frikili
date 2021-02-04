#En el arcivho .env determinamos si el sistema el desarollo o en produccion
APP_ENV=dev Desarrollo
APP_ENV=prod en produccion


La configuracion de la base de datos se define en DATABASE_URL

##################COMANDOS BASE DE DATOS#####################
#PARA CREAR LA BASE DE DATOS
php bin/console doctrine:database:create

#Crear una entidad
php bin/console make:entity

#Forzamos en la base de datos actualizar el schema, se actualizan las tablas
php bin/console doctrine:schema:update --force


#Para crear la entidad usuario nos ayudamos del comando php/bin console make:user

#Para crear un nuevo controlador
php bin/console make:controller

Para ejecutar el controlador el route nos define
@Route("/registro", name="registro")
con /registro accederemos al controlador


