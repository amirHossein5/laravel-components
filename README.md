
This package provides ready to use pagination components using tailwindcss, with multiple theme according to your taste. 


For example ***instead of*** :
```php
//Controller
 $users = User::paginate(4);
//Blade
{{ $users->links() }}
```

You may use in blade:
```html
<x-paginate :elems="$users" />
```

And it previews with ***default*** theme :

<img src="/screens/light.png" alt="light theme" width="" />

But you can **change** **themes** and more **settings** read **[Usage](#usage)**.

<br/>


- **[Installation](#installation)**
- **[Usage](#usage)**
- **[Themes](#themes)**


## Prerequisites

**Tailwindcss**, **Laravel 8**, **PHP 8** 


## Installation

```bash
composer require amir-hossein5/laravel-components
```

If you are using tailwindcss's purge, add path to your purge section: 

```js
  // tailwind.config.js
  
     purge: [
        ...
        
        './vendor/amir-hossein5/resources/**/*.blade.php'
   ],
```

And you may run ```npm run watch``` or, ```npm run dev``` or, ```npm run prod```

## Usage

- ### Pagination

For pagination use ```<x-paginate />``` tag with ```:elems=""``` to pass pagination items.

All parameters for paginate tag that you may use :


| parameter                             | description                                                         | default                          |
|-------------------------------------- |-------------------------------------------------------------------- | ---------------------------------|
| :elems=""                             |  pagination items                                                   |                                  |
| theme="string"                        |  name of theme. find themes [here](#themes)                         | [tailwind-light](#tailwind-light)| 
| prev="string"                         |  previous button's html                                             | laravel's default                |
| next="string"                         |  next button's html                                                 | laravel's default                |
| prevInResponsive="string"             |  previous button's html in responsive pagination                    | laravel's default                |
| nextInResponsive="string"             |  next button's html in responsive pagination                        | laravel's default                |
| :showDisabledButtons="boolean"        |  show disabled buttons when paginator is on first or last page      | depends on theme                 |
| :showPaginatorDetails="boolean"       | show text "Showing 4 to 6 of 12 results" or not                     | true                             |
| class="string"                        |  class for pagination main (parent) tag                             |                                  |


for example:

```html
<x-paginate
  :elems="$users"
  theme="tailwind-gray-circled"
  :showPaginatorDetails="false"
  :showDisabledButtons="true" 
/>
```


## Themes

- ### pagination

  - ### tailwind-light

    <img src="/screens/light.png" alt="light theme" />


  - ### tailwind-gray

    ![gray-theme](screens/gray.png) 
    ![gray-theme](/screens/gray1.png)


  - ### tailwind-light-circled


    <img src="/screens/light-circled.png" alt="light-circled theme" />


  - ### tailwind-gray-circled

    
    <img src="/screens/gray-circled.png" alt="gray-circled theme" />
  

  - ### tailwind-light-underlined


    <img src="/screens/light-underlined.png" alt="light-underlined theme" />


  - ### tailwind-red-pill


    <img src="/screens/red-pill.png" alt="red-pill theme" />


<br/>

## Modification

For modification each component write ```vendor:publish``` with tag of **component name** and intended **theme name**.
For example for **pagination** and theme of **tailwind-gray**:

```bash
php artisan vendor:publish --tag=pagination-tailwind-gray
```


## License

[License](LICENSE)
