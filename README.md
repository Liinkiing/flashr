<p align="center"><img width="256" height="256" src="http://i.imgur.com/rByiqwS.png"></p>

# Flashr
### A laravel package which make printing flashes a breeze!
#### Introduction
This is my first ever package published. I wanted to learn how to make a simple package for Laravel. I've been reading a lot about the IoC container, 
how Laravel does the dependency injection etc... This package was inspired by the great [laracasts/flash](https://github.com/laracasts/flash) package!

#### Installation
Run 
```
$ composer require linking/flashr
```

When the package is installed, if you're running Laravel 5.x, you can register the package in the **AppServiceProvider**, like this

```php
<?php
        use Linking\Flashr\FlashrServiceProvider;
        use Illuminate\Support\ServiceProvider;

        class AppServiceProvider extends ServiceProvider
        {
            /**
             * Bootstrap any application services.
             *
             * @return void
             */
            public function boot()
            {
                // ...
                $this->app->register(FlashrServiceProvider::class);
            }
         
        }

```

If you're running an older version of Laravel, you can edit the **app.php** file, and add this in the `providers` option

```php
    'providers' => [
    
        // ...

         \Linking\Flashr\FlashrServiceProvider::class,

    ];
```

#### Usage

Within your controllers, you can do

```php
public function edit(Post $post) {
    Flashr::success("The post has been edited");
    return view('post.edit', compact('post'));
}
```

Flashr expose differents functions to print different type of flashes. Here is a list of Flashr functions : 

* `Flashr::success($message)`
* `Flashr::info($message)`
* `Flashr::warning($message)`
* `Flashr::danger($message)`

Then, in your views, you can include the vendor views, by doing

```blade
@include('flashr::flashes')
```

> Note: it use, by default, the Twitter Bootstrap notation. If you want to replace this behaviour, just read what's next

If you want to customize the view, simply do

```
php artisan vendor:publish --tag=flashr
```

then, go tho your **views** directory. You should find a vendor directory. Inside this directory, a **flashr** directory will be here.
You can edit this file to whatever you want. By default, the file looks like this :

```blade
@php
    $flashr_type = Session::has('_flashr.type') ? Session::get('_flashr.type') : null;
    $flashr_message = Session::has('_flashr.message') ? Session::get('_flashr.message') : null;
@endphp

@if($flashr_type && $flashr_message)

    <div style="position: relative" class="alert alert-{{ $flashr_type }}" role="alert">
        {{ $flashr_message }}
        <span id="close-flash" onclick="var el = this.parentElement; el.remove()"
              style="position: absolute; top: 10px; right: 10px; font-size: 24px; line-height: 10px; cursor: pointer">&times;</span>
    </div>

@endif
```

As you can see, the plugin add two keys in the session: `_flashr.type` and `_flashr.message`