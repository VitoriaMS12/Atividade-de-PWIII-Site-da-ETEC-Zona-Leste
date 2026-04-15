<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Sobre nós</title>
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
        <section>
            <div class="content">
                <h3>Sobre Nós</h3>
                <p>Somos uma instituição dedicada a oferecer ensino de qualidade, preparando alunos para o mercado de trabalho e 
                    para o futuro. Nosso compromisso é formar profissionais capacitados, com conhecimento, responsabilidade e visão 
                    de crescimento.</p>
            </div>
        </section>
    </div>

    <section class="sobre" id="sobre">
            <h2 class="titulo">SOBRE <span>NÓS</span></h2>
            <div class="row">
                <div>
                    <img src="/img/sbetec.png" alt="sobre-nos" width="500">
                </div>
                <div class="content">
                    <h3>Nossa História</h3>
                    <p>Localizada na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste é uma instituição de 
                        ensino técnico fundada em 2008, que se destaca pelo compromisso com a qualidade da educação e a formação 
                        profissional dos alunos. Desde o início, busca preparar os estudantes para os desafios do mercado de trabalho 
                        e incentivar o crescimento acadêmico.</p>
                    <p>Ao longo dos anos, a escola tem evoluído, ampliando seus cursos e modernizando suas instalações. Além do ensino 
                        técnico em diversas áreas, também oferece atividades extracurriculares, como projetos, eventos e competições, 
                        que contribuem para o desenvolvimento completo dos estudantes.</p>
                </div>
            </div>
        </section>

        <section class="sobre" id="sobre">
            <div class="row">
                <div>
                    <img src="/img/etecsb.webp" alt="sobre-nos" width="500">
                </div>
                <div class="content">
                    <h3>Transforme seu futuro</h3>
                    <p>Pensar no futuro pode parecer assustador, mas você não precisa enfrentar isso sozinho. A ETEC Zona Leste 
                        está aqui para te ajudar a encontrar um caminho e desenvolver suas habilidades técnicas e profissionais 
                        ao longo do tempo.</p>
                    <p>Aqui, acreditamos no crescimento passo a passo, valorizando cada conquista durante a sua jornada. 
                        Enquanto você aprende, também se prepara para o mercado de trabalho e para novos desafios. Dê o primeiro 
                        passo hoje e comece a construir seu futuro com a gente!</p>
                    <a href = "/vestibulinho" class="btn">Saiba Mais Sobre o Vestibulinho</a>
                </div>
            </div>
        </section>
    
</body>
</html>