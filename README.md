
This package provides ready to use pagination components, with multiple theme according to your taste using tailwindcss. 


for example instead of :
```php
{{ $users->links() }}
```

you may use :
```php
<x-paginate :elems="$users" />
```

and it previews with default theme :

but you can change themes and more settings.

<br/>


- **[Installation](#installation)**
- **[Usage](#usage)**
- **[Themes](#themes)**


## Prerequisites
**Tailwindcss** installed, **Laravel 8**, **PHP 8** 


## Installation
```php
composer require amir-hossein5/laravel-components
```

```php
php artisan laravel-components:install
```

And you may run ```npm run watch``` or, ```npm run dev``` or, ```npm run prod```

Be sure you have added **tailwindcss** to your page.

## Usage

- ### Pagination

for pagination you can use ```<x-paginate />``` tag with ```:elems=""``` to pass pagination items.
all parameters for paginate tag that you may use :


| parameter                             | description                                                         | default                          |
|-------------------------------------- |-------------------------------------------------------------------- | ---------------------------------|
| :elems=""                             |  pagination items                                                   |                                  |
| theme="string"                        |  name of theme. find themes [here](#themes)                         | [tailwind-light](#tailwind-light)| 
| prev="string"                         |  previous button's html                                             | laravel's default                |
| next="string"                         |  next button's html                                                 | laravel's default                |
| prevInResponsive="string"             |  previous button's html in responsive pagination                    | laravel's default                |
| nextInResponsive="string"             |  next button's html in responsive pagination                        | laravel's default                |
| :showDisabledButtons="boolean"        |  show disabled buttons when paginator is on first or last page      | depends on theme                 |
| :showPaginatorDetails="boolean"       | show "Showing 4 to 6 of 12 results" or not                          | true                             |
| class="string"                        |  main tag of pagination class                                       |                                  |


## Themes

- ### pagination

  - ### tailwind-light

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


  - ### tailwind-gray

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


  - ### tailwind-light-circled

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


  - ### tailwind-gray-circled

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


  - ### tailwind-light-underlined

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


  - ### tailwind-red-pill

    |                             |                             |
    | --------------------------- | --------------------------- |
    | ![Shocase 1](screens/1.PNG) | ![Shocase 7](screens/7.PNG) |


<br/>

## License

[License](LICENSE)
