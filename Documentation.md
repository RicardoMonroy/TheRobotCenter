[TOC]
# Instalación
# Instalación de Laravel
~~~bash
laravel new <project>
~~~
## Crear la base de datos con cotejamiento 
> utf8mb4_unicode_ci

En el archivo `config/database.php` cambiar en la sección de mysql
~~~php
'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
~~~

Añadir la siguientes linea en `app/Providers/AppServiceProviders.php`
~~~php
use Illuminate\Support\Facades\Schema; 

public function boot()
    {
        Schema::defaultStringLength(191);
    }
~~~
## Laravel Collective
~~~bash
composer require laravelcollective/html
~~~
En la carpeta `congif/app.php` añadir el provider
~~~php
'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
],
~~~
Luego en el mismo archivo `config/app.php` ve a la parte de Aliases y agrega estas 2 líneas:
~~~php
'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
],
~~~
## Instalar Shinobi
~~~bash
composer require caffeinated/shinobi
~~~
~~~bash
php artisan vendor:publish --provider="Caffeinated\Shinobi\ShinobiServiceProvider" --tag="config"
~~~
# Migraciones
Se requiere hacer un cambio a las migraciones para restringir el acceso al dashboard de administración, esto mediante un campo llamado "dashboard"de tipo boolean en la tabla de users:
~~~php
Schema::create('users', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->boolean('dashboard')->default(false);
    $table->rememberToken();
    $table->timestamps();
});
~~~
# Permisos
## Generar el Seeder para los permisos
~~~bash
php artisan make:seeder PermissionsTableSeeder
~~~
En el archivo database/seeds/PermissionsTableSeeder.php se deben añadir los permisos básicos, en este caso para los crud's de usuarios y roles:
~~~php
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
    }
}
~~~
Si se requiere añadir más permisos, la estructura es la siguiente:
~~~php
//Productos
Permission::create([
    'name'          => 'Navegar productos',
    'slug'          => 'products.index',
    'description'   => 'Lista y navega todos los productos del sistema',
]);

Permission::create([
    'name'          => 'Ver detalle de un producto',
    'slug'          => 'products.show',
    'description'   => 'Ve en detalle cada producto del sistema',
]);
        
Permission::create([
    'name'          => 'Creación de productos',
    'slug'          => 'products.create',
    'description'   => 'Podría crear nuevos productos en el sistema',
]);
        
Permission::create([
    'name'          => 'Edición de productos',
    'slug'          => 'products.edit',
    'description'   => 'Podría editar cualquier dato de un producto del sistema',
]);
        
Permission::create([
    'name'          => 'Eliminar productos',
    'slug'          => 'products.destroy',
    'description'   => 'Podría eliminar cualquier producto del sistema',
]);
~~~
# Modelos
## Modelo Product
Para crear el modelo, factoría, migración y controlador del producto (o servicio), ejecutar el siguiente comando tomando en cuenta la convención de que la entidad va en singular con letras mayúsculas:
~~~bash
php artisan make:model Product -a
~~~
Tambien es bueno (aunque opcional) crear los seeders para los usuarios y los productos (Comenzando con mayúscula y en plural, especificando que es un table seeder):
~~~bash
php artisan make:seeder ProductsTableSeeder
~~~
~~~bash
php artisan make:seeder UsersTableSeeder
~~~
Configurar la migración para los productos:
~~~php
public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }
~~~
Dentro de su respectivo factory:
~~~php
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->sentence,
    ];
});
~~~
Para que el factory funcione, se debe configurar su seeder respectivamente:

Factory del Producto
~~~php
<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->sentence,
    ];
});
~~~
El Factory del usuario se deja tal cual a menos de que se le tengan que hacer modificiaciones.
Dentro del ProductTableSeeder, en la función run se pueden generar algunos productos:
~~~php
public function run()
{
    factory(App\Product::class, 80)->create(); // Creación de 80 productos
}
~~~
Dentro de UsersTableSeeder se puede crear cierta cantidad de usuarios, y es recomendable crear ahí el rol teniendo en cuenta que hay que especificar que se usará el modelo Role:
~~~php
<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ricardo Monroy',
            'email' => 'rmonroy.rodriguez@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'dashboard' => true,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Usuario Generico',
            'email' => 'usuario@ejemplo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'dashboard' => false,
            'remember_token' => Str::random(10),
        ]);

        Role::create([
        	'name'		=> 'Programador',
        	'slug'  	=> 'programmer',
        	'special' 	=> 'all-access'
        ]);

        Role::create([
        	'name'		=> 'Usuario',
        	'slug'  	=> 'user',
        	'special' 	=> 'no-access'
        ]);
    }
}
~~~
Activar los seeders en `DatabaseSeeder.php`:
~~~php
public function run()
{
    $this->call(PermissionsTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(ProductsTableSeeder::class);
}
~~~
Realizar las migraciones y poblar la bas de datos:
~~~bash
php artisan migrate:refresh --seed
~~~
# Login
Crear el sistema de login
~~~bash
php artisan make:auth
~~~
# Middleware
Se deben crear los middleware:
~~~bash
php artisan make:middleware UserHasPermission
~~~
~~~bash
php artisan make:middleware UserHasRole
~~~
Crear un middleware para verificar el acceso al panel de administración
~~~bash
php artisan kame:middleware DashboardMiddleware
~~~
Y crear los respectivos archivos en su ruta `app/Http/Middleware`
Para UserHasPermission:
~~~php
<?php

namespace App\Http\Middleware;

use Caffeinated\Shinobi\Models\Role;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserHasPermission
{
    /**
     * @var Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new UserHasPermission instance.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Run the request filter.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $closure
     * @param array|string             $permissions
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $permissions)
    {
        if ($this->auth->check()) {
            if (!$this->auth->user()->can($permissions)) {
                if ($request->ajax()) {
                    return response('Unauthorized.', 403);
                }

                abort(403, 'Acción no autorizada.');
            }
        } else {
            $guest = Role::whereSlug('guest')->first();

            if ($guest) {
                if (!$guest->can($permissions)) {
                    if ($request->ajax()) {
                        return response('Unauthorized.', 403);
                    }

                    abort(403, 'Acción no autorizada.');
                }
            }
        }

        return $next($request);
    }
}
~~~
Para UserHasRole
~~~php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserHasRole
{
    /**
     * @var Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new UserHasPermission instance.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Run the request filter.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $closure
     * @param string                   $role
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$this->auth->user()->isRole($role)) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            }

            return abort(401);
        }

        return $next($request);
    }
}
~~~
Middleware DashboardMiddleware
~~~php
<?php

namespace App\Http\Middleware;

use Closure;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->dashboard){
            return $next($request);
        }
        return redirect('/');
    }
}
~~~
Para registrar los midlewares se requiere dar de alta dos paquetes en el archivo `app/http/kernel.php` dentro de la función `$routeMiddleware`
~~~php
protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    'can' => \Illuminate\Auth\Middleware\Authorize::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

    'role' => \App\Http\Middleware\UserHasRole::class,
    'permission' => \App\Http\Middleware\UserHasPermission::class,
    'Dashboard' => \App\Http\Middleware\DashboardMiddleware::class,
];
~~~
En la carpeta `routes/web.php` añadir las rutas con su respectivo midleware:
~~~php
Route::group(['middleware' => 'Dashboard'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

});
Route::middleware(['auth', 'Dashboard'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


	//Products
	Route::post('products/store', 'ProductController@store')->name('products.store')
		->middleware('permission:products.create');

	Route::get('products', 'ProductController@index')->name('products.index')
		->middleware('permission:products.index');

	Route::get('products/create', 'ProductController@create')->name('products.create')
		->middleware('permission:products.create');

	Route::put('products/{product}', 'ProductController@update')->name('products.update')
		->middleware('permission:products.edit');

	Route::get('products/{product}', 'ProductController@show')->name('products.show')
		->middleware('permission:products.show');

	Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
		->middleware('permission:products.destroy');

	Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
		->middleware('permission:products.edit');
});
~~~
# Controladores
Para el correcto manejo de las peticiones de los usuarios, roles y demás cosas que contenga el sistema, se requiere el uso de sus respectivos controladores, en este caso se crearán los controladores para Roles y Usuarios:
~~~php
php artisan make:controller RoleController --resource
~~~
~~~php
php artisan make:controller UserController --resource
~~~
En la vista `resources/views/layouts/app.blade.php` que pertenece al menú, se deben utilizar los helpers para visualizar o no los recursos:
~~~php
@can('products.index')
<li>
    <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
</li>
@endcan
@can('users.index')
<li>
    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
</li>
@endcan
@can('roles.index')
<li>
    <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
</li>
@endcan
~~~
# Relacionar usuarios con roles y permisos
Para que los resultados sean visibles, se requiere al modelo user, añadir el concern HasRolesAndPermissions
~~~php
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions;
    
    ...
~~~
# Controladores
Se debe trabajar en todos y cada uno de los controladores para regresar la información de base de datos y redireccionar a las diferentes rutas:
~~~php
public function index()
    {
        $products = Product::paginate();

        return view('products.index', compact('products'));
    }
~~~
# Vistas
Dentro de `resources/views` crear la carpeta products en donde se situarán las vistas para todos las acciones de nuestro crud.
Igualmente se puede tomar como ejemplo el `home.blade.php` para utilizar su vista.
La estructura base es la siguiente:
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            @can('products.create')
                                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary btn-right">Crear</a>
                            @endcan

                        </div>

                        <div class="col-md-4 offset-md-4">
                            Productos
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                @can('products.show')
                                <td width="10px">
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('products.edit')
                                <td width="10px">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('products.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['products.destroy', $product->id],
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
## Métodos del controlador
Para manejar las respectivas vistas de aceurdo a lo que se desea hacer, en el controlador ubicado en `app/Http/Controllers` se debe trabajar con su respectivo controlador, aquí los métodos:
~~~php
public function index()
{
    $products = Product::paginate();

    return view('products.index', compact('products'));
}
~~~
~~~php
public function create()
{
    return view('products.create');
}
~~~
Store es el método que se activa al guardar un formulario:
~~~php
public function store(Request $request)
{
    $product = Product::create($request->all());

    return redirect()->route('products.edit', $product->id)
            ->with('info', 'Producto guardado con éxito');
}
~~~
No olvidar registrar en la entidad del producto que se encuentra en `app/Product.php` la función **$fillable**, esto sirve para que igual con el modelo user, gusrte los campos en la base de datos:
~~~php
class Product extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
}
~~~
~~~php
public function show($id)
{
    $product = Product::find($id);

    return view('products.show', compact('product'));
}
~~~
~~~php
public function edit($id)
{
    $product = Product::find($id);

    return view('products.edit', compact('product'));
    }
~~~
~~~php
public function update(Request $request, $id)
{
    $product = Product::update($request->all());

    return redirect()->route('products.edit', $product->id)
            ->with('info', 'Producto guardado con éxito');
}
~~~
~~~php
public function destroy($id)
{
    $product = Product::find($id)->delete();

    return back()->with('info', 'Eliminado correctamente');
}
~~~
## Vistas del módulo
Se recomienda que dentro de la carpeta de productos dentro de las vistas, se cree una subcarpeta llamada **partials** para guardar ahí el formulario re-utilizable. Y dentro de esa carpeta crear el formulario con el nombre **form.blade.php**.
Finalmente, dentro de la carpeta de **products**, crear las vistas:
- create.blade.php
- edit.blade.php
- show.blade.php
Dentro del formulario `resources/views/products/partials/form.blade.php`
~~~php
<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
~~~
Una vez terminado el formulario, se puede trabajar con la vista show
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong>     {{ $product->name }}</p>
                    <p><strong>Descripción</strong>  {{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Para las vistas de editar, `resources/views/products/edit.blade.php`:
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id],
                        'method' => 'PUT']) !!}

                        @include('products.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Y para la vista de crear, `resources/views/products/create.blade.php`:
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                    {{ Form::open(['route' => 'products.store']) }}

                        @include('products.partials.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
## Variable info
En la edición de los métodos dentro del controlador, al momento de hacer returns, se utilizó una variable **info**, para habilitarla debemos acceder a la vista `resources/views/layouts/app.blade.php`, y justo antes de @yield('content') debemos poner el siguiente código:
~~~php
@if (session('info'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
            </div>
        </div>
    </div>
@endif
~~~
# Módulo Usuarios
Un buen lugar para comenzar, es su controlador ubicado en `app/Http/Controllers/UserController.php`:
~~~php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
~~~
**Copiar y pegar** la carpeta products dentro de la misma carpeta de views, cambiándole el nombre a users para tener todas las vistas. La idea es que los archivos queden exactsamente igual, sustituyendo los respectivos datos para los usuaios:
La vista form.blade.php
~~~php
<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Correo Electrónico') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
{{-- <div class="form-group">
    {{ Form::label('description', 'Password') }}
    {{ Form::password('password', ['class' => 'form-control']) }}
</div> --}}
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
~~~
La vista index.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            @can('users.create')
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary btn-right">Crear</a>
                            @endcan

                        </div>

                        <div class="col-md-4 offset-md-4">
                            Usuarios
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @can('users.show')
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('users.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('users.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['users.destroy', $user->id],
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Vista edit.blade.php:
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuario
                </div>

                <div class="card-body">
                    {!! Form::model($user, ['route' => ['users.update', $user->id],
                        'method' => 'PUT']) !!}

                        @include('users.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Vista show.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuario
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong>     {{ $user->name }}</p>
                    <p><strong>Email</strong>  {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Finalmente la vista create.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuario
                </div>

                <div class="card-body">
                    {{ Form::open(['route' => 'users.store']) }}

                        @include('users.partials.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
No olvidar tener el siguiente código en el método create, que nos permitirá pasarle a la vista los roles
~~~php
public function create()
{
    $roles = Role::get();
    return view('users.create', compact('roles'));
}
~~~
# RoleController
Finalmente se debe implementar el controlador y las vistas para gestionar los roles. Para ello hay que implementar sus respectivas carpetas de vistas con las respectivas vistas de index, show, create y edit. Iniciamos con RoleController:
~~~php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        $permissions = Permission::get();

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
~~~
La vista index.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            @can('roles.create')
                                <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary btn-right">Crear</a>
                            @endcan

                        </div>

                        <div class="col-md-4 offset-md-4">
                            Roles
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                @can('roles.show')
                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}"
                                        class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('roles.edit')
                                <td width="10px">
                                    <a href="{{ route('roles.edit', $role->id) }}"
                                        class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('roles.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id],
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
La vista show.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Rol
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong>     {{ $role->name }}</p>
                    <p><strong>Slug</strong>     {{ $role->slug }}</p>
                    <p><strong>Descripción</strong>  {{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
La vista edit.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Rol
                </div>

                <div class="card-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                        'method' => 'PUT']) !!}

                        @include('roles.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
La vista create.blade.php
~~~php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>

                <div class="card-body">
                    {{ Form::open(['route' => 'roles.store']) }}

                        @include('roles.partials.form')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
~~~
Finalmente, la vista form.blade.php
~~~php
<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
    <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
    <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
            <label>
            {{ Form::checkbox('permissions[]', $permission->id, null) }}
            {{ $permission->name }}
            <em>({{ $permission->description }})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
~~~
# Experimental: Usar middlewares desde los controladores
