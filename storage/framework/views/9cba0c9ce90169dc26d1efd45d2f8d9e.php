<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <title>Vestibulinho</title>
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
                <h3>Vestibulinho</h3>
                <p>O vestibulinho da ETEC é uma oportunidade importante para quem quer ingressar em um curso técnico de qualidade. 
                    Com uma prova objetiva que avalia conhecimentos gerais e raciocínio, o processo exige atenção desde a inscrição 
                    até a escolha do curso. Ficar atento aos detalhes pode fazer toda a diferença no resultado final.</p>
            </div>
        </section>
    </div>

    <section class="sobre">
            <h2 class="titulo">Como o vestibulinho <span>Acontece?</span></h2>
            <div class="row">
                <div>
                    <img src="/img/sbetec.png" alt="sobre-nos" width="500">
                </div>
                <div class="content">
                    <h3>Vestibulinho</h3>
                    <p>O vestibulinho da ETEC segue um padrão definido pelo Centro Paula Souza. Primeiro, é divulgado um edital com todas 
                        as informações importantes, como datas, locais de prova, cursos disponíveis, requisitos e documentos necessários. 
                        Em seguida, os candidatos devem se inscrever dentro do prazo, geralmente pela internet, no site oficial, e realizar
                        o pagamento da taxa de inscrição conforme indicado no edital.</p>
                    <a href = "https://vestibulinho.etec.sp.gov.br/home/" target="_blank" class="btn">Increva-se no Vestibulinho</a>
                </div>
            </div>
        </section>

        <section>
            <div class="content-2">
                <h3>Sobre a prova</h3>
                <p>A prova do vestibulinho da ETEC tem 50 questões de múltipla escolha, envolvendo matérias como Português, Matemática, 
                    Ciências e conteúdos ligados ao curso escolhido. As questões podem misturar disciplinas e exigem interpretação, 
                    raciocínio lógico e análise crítica, além de abordar temas atuais e valores sociais.</p>

                    <p>Após a prova, os resultados são divulgados no prazo definido, e os aprovados devem fazer a matrícula apresentando 
                        os documentos necessários. Também é importante escolher corretamente o curso e a modalidade na inscrição, pois o 
                        Centro Paula Souza não se responsabiliza por erros nessa escolha.</p>
            </div>
        </section>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\PWIII\resources\views/vestibulinho.blade.php ENDPATH**/ ?>