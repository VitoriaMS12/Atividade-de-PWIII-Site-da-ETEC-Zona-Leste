<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Home</title>
</head>

<body>
    <header class = "header"> 
        <!-- navbar -->
        <section>
        <a href= "/Index" class = "logo">
           <img src ="./img/etec.png" alt="logo" width="200">

        </a>

        <nav class="navbar">
            <a href="/Index">Home</a>
            <a href="/sobrenos">Sobre nós</a>
            <a href="/cursos">Cursos</a>
            <a href="/vestibulinho">Vestibulinho</a>
        </nav>

        <div class = "icons">
            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/000000/search--v1.png" alt="search--v1"/>
        </div>
       </section>
    </header>

    <div class="home-container">
        <section id="#home">
            <div class="content">
                <h3>ETEC da Zona Leste</h3>
                <p>A Etec Zona Leste é referência em ensino técnico de qualidade, formando alunos preparados para o mercado de 
                    trabalho e para novos desafios. Com cursos atualizados e ensino integrado ao Ensino Médio, a escola oferece 
                    uma base sólida para construir o seu futuro.</p>
                <a href = "/sobrenos" class="btn">Saiba Mais</a>
            </div>
        </section>
    </div>

    
</body>
</html>