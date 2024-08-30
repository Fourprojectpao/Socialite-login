<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 1 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 2 -->
        <!-- Favicon -->
        <link 
        rel="apple-touch-icon" sizes="76x76" 
        href="{{ asset('assets/img/apple-icon.png') }}" 
        />
        <link 
        rel="icon" type="image/png" 
        href="{{ asset('assets/img/favicon.png') }}" 
        />
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- 2 -->
        <!-- Fonts and Icons  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/fontawesome.min.js" crossorigin="anonymous"></script>
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Main Styling -->
        <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="m-0 font-sans antialiased font-normal bg-white 
    text-start text-base leading-default text-slate-500">
        @inertia
    </body>
</html>
