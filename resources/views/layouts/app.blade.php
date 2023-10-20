<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SunneeFashion Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f0e0; /* Sfondo verde chiaro */
            margin: 0;
            padding: 0;

        }

        header {
            background-color: #2a803b; /* Colore header verde scuro */
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav {
            background-color: #21872e; /* Colore di sfondo verde medio per la barra di navigazione */
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* Sfondo bianco per il contenuto principale */
            text-align: center;
            
        }

        ul {
             list-style-type: none;
        }
        a {
            text-decoration: none;
            color: #21872e;
          }

    </style>
</head>
<body>
    <header>
        <h1>SunneeFashion Dashboard</h1>
    </header>
    <nav>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('orders.index') }}">Orders</a>     
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
