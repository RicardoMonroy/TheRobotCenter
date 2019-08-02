<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Homepage
        Permission::create([
            'name'          => 'Ver administración del homepage',
            'slug'          => 'homepage.index',
            'description'   => 'Lista las opciones del homepage',
        ]);

        Permission::create([
            'name'          => 'Editar homepage',
            'slug'          => 'hompeage.edit',
            'description'   => 'Editar o cambiar el contenido del homepage',
        ]);

        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de usuario',
            'slug'          => 'users.create',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',
        ]);

        //Permisos
        Permission::create([
            'name'          => 'Navegar permisos',
            'slug'          => 'permissions.index',
            'description'   => 'Lista y navega todos los permisos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un permiso',
            'slug'          => 'permissions.show',
            'description'   => 'Ve en detalle cada permiso del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de permisos',
            'slug'          => 'permissions.create',
            'description'   => 'Podría crear nuevos permisos en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de permisos',
            'slug'          => 'permissions.edit',
            'description'   => 'Podría editar cualquier dato de un permiso del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar permisos',
            'slug'          => 'permissions.destroy',
            'description'   => 'Podría eliminar cualquier permiso del sistema',
        ]);

        //Cursos
        Permission::create([
            'name'          => 'Navegar cursos',
            'slug'          => 'courses.index',
            'description'   => 'Lista y navega todos los cursos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un curso',
            'slug'          => 'courses.show',
            'description'   => 'Ve en detalle cada curso del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de cursos',
            'slug'          => 'courses.create',
            'description'   => 'Podría crear nuevos cursos en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de cursos',
            'slug'          => 'courses.edit',
            'description'   => 'Podría editar cualquier dato de un curso del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar cursos',
            'slug'          => 'courses.destroy',
            'description'   => 'Podría eliminar cualquier curso del sistema',
        ]);

        //Niveles en cursos
        Permission::create([
            'name'          => 'Navegar niveles',
            'slug'          => 'levels.index',
            'description'   => 'Lista y navega todos los niveles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un nivel',
            'slug'          => 'levels.show',
            'description'   => 'Ve en detalle cada nivel del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de niveles',
            'slug'          => 'levels.create',
            'description'   => 'Podría crear nuevos niveles en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de niveles',
            'slug'          => 'levels.edit',
            'description'   => 'Podría editar cualquier dato de un nivel del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar niveles',
            'slug'          => 'levels.destroy',
            'description'   => 'Podría eliminar cualquier nivel del sistema',
        ]);

        //Categorías de cursos
        Permission::create([
            'name'          => 'Navegar categorías',
            'slug'          => 'categories.index',
            'description'   => 'Lista y navega todos los categorías del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una categoría',
            'slug'          => 'categories.show',
            'description'   => 'Ve en detalle cada categoría del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de categorías',
            'slug'          => 'categories.create',
            'description'   => 'Podría crear nuevos categorías en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de categorías',
            'slug'          => 'categories.edit',
            'description'   => 'Podría editar cualquier dato de una categoría del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar categorías',
            'slug'          => 'categories.destroy',
            'description'   => 'Podría eliminar cualquier categoría del sistema',
        ]);

        //Teachers
        Permission::create([
            'name'          => 'Navegar profesores',
            'slug'          => 'teachers.index',
            'description'   => 'Lista y navega todos los profesores del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un profesor',
            'slug'          => 'teachers.show',
            'description'   => 'Ve en detalle cada profesor del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de profesores',
            'slug'          => 'teachers.create',
            'description'   => 'Podría crear nuevos profesores en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de profesores',
            'slug'          => 'teachers.edit',
            'description'   => 'Podría editar cualquier dato de un profesor del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar profesores',
            'slug'          => 'teachers.destroy',
            'description'   => 'Podría eliminar cualquier profesor del sistema',
        ]);

        //Grupos
        Permission::create([
            'name'          => 'Navegar grupos',
            'slug'          => 'groups.index',
            'description'   => 'Lista y navega todos los grupos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un grupo',
            'slug'          => 'groups.show',
            'description'   => 'Ve en detalle cada grupo del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de grupos',
            'slug'          => 'groups.create',
            'description'   => 'Podría crear nuevos grupos en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de grupos',
            'slug'          => 'groups.edit',
            'description'   => 'Podría editar cualquier dato de un grupo del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar grupos',
            'slug'          => 'groups.destroy',
            'description'   => 'Podría eliminar cualquier grupo del sistema',
        ]);

        //Escuelas
        Permission::create([
            'name'          => 'Navegar escuelas',
            'slug'          => 'schools.index',
            'description'   => 'Lista y navega todos los escuelas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un escuela',
            'slug'          => 'schools.show',
            'description'   => 'Ve en detalle cada escuela del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de escuelas',
            'slug'          => 'schools.create',
            'description'   => 'Podría crear nuevos escuelas en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de escuelas',
            'slug'          => 'schools.edit',
            'description'   => 'Podría editar cualquier dato de un escuela del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar escuelas',
            'slug'          => 'schools.destroy',
            'description'   => 'Podría eliminar cualquier escuela del sistema',
        ]);

        //Alumnos
        Permission::create([
            'name'          => 'Navegar alumnos',
            'slug'          => 'students.index',
            'description'   => 'Lista y navega todos los alumnos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un alumno',
            'slug'          => 'students.show',
            'description'   => 'Ve en detalle cada alumno del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de alumnos',
            'slug'          => 'students.create',
            'description'   => 'Podría crear nuevos alumnos en el sistema',
        ]);

        Permission::create([
            'name'          => 'Edición de alumnos',
            'slug'          => 'students.edit',
            'description'   => 'Podría editar cualquier dato de un alumno del sistema',
        ]);

        Permission::create([
            'name'          => 'Eliminar alumnos',
            'slug'          => 'students.destroy',
            'description'   => 'Podría eliminar cualquier alumno del sistema',
        ]);
    }
}
