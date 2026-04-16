<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <title>Cursos</title>
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
                <h3>Nossos Cursos</h3>
                <p>Nossos cursos técnicos são pensados para preparar você para o mercado de trabalho desde cedo. 
                    Com ensino prático e atualizado, aqui você desenvolve habilidades importantes e dá um passo à frente 
                    no seu futuro profissional.</p>
            </div>
        </section>
    </div>

    <section class="menu">
        <h2 class="titulo">Cursos Técnicos <span>Modalidade Presencial</span></h2>
        
        <div class="box-container">
            <div class="box">
                <img src="/img/curso-1.png" alt="curso-1" width="200">
                <h3>Adminisração</h3>
                <p>O curso técnico de Administração (AMS) prepara o aluno para entender 
                    organizações e atuar com gestão e planejamento no mercado de trabalho.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-2.jpg" alt="curso-2" width="200">
                <h3>Contabilidade</h3>
                <p>O curso de Contabilidade prepara o aluno para lidar com finanças, cálculos e normas legais, 
                    formando profissionais capazes de analisar dados e atuar no controle financeiro de organizações.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-3.jpg" alt="curso-3" width="200">
                <h3>Desenvolvimento de Sistemas</h3>
                <p>O curso forma profissionais capazes de desenvolver, testar e manter sistemas, utilizando programação e bancos de dados.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-4.jpg" alt="curso-4" width="200">
                <h3>Finanças</h3>
                <p>O curso de Finanças prepara o aluno para analisar operações financeiras, controlar resultados e 
                    entender a situação econômica de empresas.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-5.jpg" alt="curso-5" width="200">
                <h3>Recursos Humanos</h3>
                <p>O curso de Recursos Humanos prepara o aluno para atuar na gestão de pessoas, envolvendo contratação, 
                    legislação trabalhista e desenvolvimento no ambiente de trabalho.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-6.jpg" alt="curso-6" width="200">
                <h3>Serviçoes jurídicos</h3>
                <p>O curso oferece formação em Direito e noções empresariais, preparando o aluno para entender leis, 
                    relações sociais e atuar no ambiente corporativo com conhecimento jurídico.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section class="menu">
        <h2 class="titulo">Ensino Médio <span>Integrado ao Técnico (M-tec)</span></h2>
        
        <div class="box-container">
            <div class="box">
                <img src="/img/curso-t1.jpg" alt="curso-t1" width="200">
                <h3>Médio Técnico Logística</h3>
                <p>O curso de Logística prepara o aluno para organizar transporte, estoque e 
                    distribuição de produtos, otimizando processos e reduzindo custos.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-t2.jpg" alt="curso-t2" width="200">
                <h3>Médio Técnico Administração</h3>
                <p>O curso ensina a analisar o mercado, entender o consumidor e desenvolver estratégias para o sucesso de negócios.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-t3.jpg" alt="curso-t3" width="200">
                <h3>Médio Técnico Recursos Humanos</h3>
                <p>O curso de Recursos Humanos prepara o aluno para atuar na gestão de pessoas, com foco em contratação, legislação 
                    trabalhista e desenvolvimento no ambiente de trabalho.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-t4.jpg" alt="curso-t4" width="200">
                <h3>Médio Técnico em Serviçoes Jurídicos</h3>
                <p>Não é preciso ser advogado para atuar na área jurídica: o curso abre portas em empresas, escritórios e no setor 
                    público, além de dar vantagem na faculdade.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/curso-t5.jpg" alt="curso-t5" width="200">
                <h3>Médio Técnico Desenvolvimento de Sistemas</h3>
                <p>Forma profissionais capazes de analisar, desenvolver, testar e manter sistemas de informação, utilizando linguagens de 
                    programação e bancos de dados.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

        </div>
    </section>

    <section class="menu">
        <h2 class="titulo">Articulação dos Ensinos Médio <span>Técnico e Superior (AMS)</span></h2>
        
        <div class="box-container">
            <div class="box">
                <img src="/img/cursos-a1.jpg" alt="curso-t1" width="200">
                <h3>Médio Técnico Desenvolvimento de Sistemas AMS (tarde)</h3>
                <p>Forma profissionais para analisar, desenvolver, testar e manter sistemas, utilizando programação e bancos de dados. 
                    Na modalidade AMS, também permite continuidade dos estudos em uma Fatec na área de Análise e Desenvolvimento de Sistemas.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

            <div class="box">
                <img src="/img/cursos-a2.png" alt="curso-t2" width="200">
                <h3>Médio Técnico e Superior em Recursos Humanos (AMS)</h3>
                <p>O AMS permite fazer o Ensino Médio técnico e a faculdade em um único caminho de 5 anos: 3 anos na ETEC, já com diploma técnico, 
                    e mais 2 anos na FATEC, concluindo o ensino superior mais rápido.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>

        </div>
    </section>

    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\PWIII\resources\views/cursos.blade.php ENDPATH**/ ?>