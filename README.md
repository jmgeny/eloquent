<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


***************************************************************

1) Instalación del proyecto
2) Barra de depuración
En https://packagist.org/ busco la barra de debug

Barryvdh\Debugbar\ServiceProvider::class,

'Debugbar' => Barryvdh\Debugbar\Facade::class,

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

- Configuro base de datos.

3) Base de datos relacional
Capasidad de la base de datos de dividir en varias tablas un registro

4) Relación uno a uno
usuario --- perfil
hasOne

5) Relación uno a muchos
Creo la tabla Level para relacionar con usuario

Creo una migración presonalizada
php artisan make:migration add_level_id_at_users 

realizo las relaciones

Un nivel "corresponde" a varios usuarios "hasMany"
Un usuario "pertenece" a un nivel "belongsTo"

6)  Relación muchos a muchos
Creo tabla Group 
Creo tabla intermedia group_user
belongsToMany

7) Edición de vista Welcome
Vista welcome

8) Relación uno a uno a través de...

user --> profile --> location

quiero la localización del usuario "a traves de " el perfil

return $this->hasOneThrough(Location::class, Profile::class);

9) Todas las tablas: Category, Tag, Taggables, Post y mas

10) Todas las relaciones

11) Relaciones y configuración de entidades 

12) Repaso: Relaciones en Eloquent ORM y entidades

13) Convención *able en relaciones polimorficas

14) Qué es Polimorfismo

15 - Relación Polimorfica uno a uno

16 - Relación Polimorfica uno a muchos

17 - Relación Polimorfica muchos a muchos

18) Factory en Laravel

19) Seeder de Usuarios (Profile, Location, Image & Groups) 

20) Seeder de Posts y Videos (Category, Tags & Comments) 

21) Datos polimorficos

22) Vista de Perfil de Usuario

23) Vista de Perfil de Usuario con diseño en Bootstrap 4

24) Vista de Perfil Completa (Videos y Posts del Usuario)

25) Vista Level (uno a muchos a través de...) Has Many Through 

26) Resumen final del Curso Eloquent ORM