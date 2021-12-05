
This package provides ready to use pagination components using tailwindcss inside (you don't need to have it). 


For example ***instead of*** :
```php
//Controller
 $users = User::paginate(4);
//Blade
{{ $users->links() }}
```

You may use in blade:
```html
<x-pagination::gray-circled :elems="$users" />
```

And it previews with [gray-circled](#gray-circled) theme :

<img src="/screens/gray-circled.png" alt="gray-circled theme" width="" />

But you can **change** **themes** and more **settings** read **[Usage](#usage)**.

<br/>


- **[Installation](#installation)**
- **[Components](#Components)**
- **[Themes](#themes)**


## Prerequisites

- Laravel 8
- PHP 8 


## Installation

```bash
composer require amir-hossein5/laravel-components
```

## Components

- ### Pagination

For pagination use ```<x-pagination::gray-circled``` tag with its theme name ```:elems="" />``` to pass pagination items.
and for styles:
```html
...

    @lComponentStyles('pagination')

</head>
```

All parameters for paginate tag that you may use :


| parameter                             | description                                                         | default                          |
|-------------------------------------- |-------------------------------------------------------------------- | ---------------------------------|
| :elems=""                             |  pagination items                                                   |                                  |
| prev="string"                         |  previous button's html                                             | laravel's default                |
| next="string"                         |  next button's html                                                 | laravel's default                |
| prevInResponsive="string"             |  previous button's html in responsive pagination                    | laravel's default                |
| nextInResponsive="string"             |  next button's html in responsive pagination                        | laravel's default                |
| :showDisabledButtons="boolean"        |  show disabled buttons when paginator is on first or last page      | depends on theme                 |
| :showPaginatorDetails="boolean"       | show text "Showing 4 to 6 of 12 results" or not                     | true                             |
| class="string"                        |  class for pagination main (parent) tag                             |                                  |


for example:

```html
<x-pagination::light-underlined
  :elems="$users"
  :showPaginatorDetails="false"
  :showDisabledButtons="true" 
/>
```


## Themes

- ### pagination

  | <a href="#light">light</a>          | <a href="#gray">gray</a>                                         |
  |------------------------------------|-------------------------------------------------------------------|
  | ![light-theme](/screens/light.png) | ![gray-theme](screens/gray.png) ![gray-theme](/screens/gray1.png) |
  
  
  | <a href="#light-circled">light-circled</a>         | <a href="#gray-circled">gray-circled</a>         |
  |----------------------------------------------------|--------------------------------------------------|
  | ![light-circled-theme](/screens/light-circled.png) | ![gray-circled-theme](/screens/gray-circled.png) |
  
  | <a href="#light-underlined">light-underlined</a>         | <a href="#red-pill">red-pill</a>         |
  |----------------------------------------------------|--------------------------------------------------|
  | ![light-underlined-theme](/screens/light-underlined.png) | ![red-pill-theme](/screens/red-pill.png) |
  
<!--   - ### light

    ![light-theme](/screens/light.png)


  - ### gray

    ![gray-theme](screens/gray.png) 
    ![gray-theme](/screens/gray1.png) -->

<!-- 
  - ### light-circled


    ![light-circled-theme](/screens/light-circled.png)


  - ### gray-circled

    
    <img src="/screens/gray-circled.png" alt="gray-circled theme" />
  
 -->
<!--   - ### light-underlined


    <img src="/screens/light-underlined.png" alt="light-underlined theme" />


  - ### red-pill


    <img src="/screens/red-pill.png" alt="red-pill theme" />
 -->

<br/>

## Modification

For modification each component write ```vendor:publish``` with tag of **component name** and intended **theme name**.
For example for **pagination** and theme of **gray**:

```bash
php artisan vendor:publish --tag=pagination-gray
```


## License

[License](LICENSE)
