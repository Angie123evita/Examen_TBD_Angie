<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #f0f0f0;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #282c34;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 15px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .navbar div {
        margin: 0;
    }

    .navbar a {
        color: #cfd8dc;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .navbar .activo a {
        color: #ffffff;
        background-color: #61dafb;
    }

    .navbar a:hover {
        color: #ffffff;
        background-color: #3a4048;
    }
</style>

<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Servicios</a></div>
        <div class="{{ setActivo('proyectos') }}"><a href="{{ route('proyectos') }}">Proyectos</a></div>
        <div class="{{ setActivo('clientes') }}{{ setActivo('clientes.show') }}{{ setActivo('clientes.create') }}{{ setActivo('clientes.edit') }}">
            <a href="{{ route('clientes') }}">Clientes</a>
        </div>
        <div class="{{ setActivo('blog') }}"><a href="{{ route('blog') }}">Blog</a></div>
        <div class="{{ setActivo('contacto') }}{{ setActivo('contacto.enviado') }}"><a href="{{ route('contacto') }}">Contacto</a></div>
    </div>
</body>
