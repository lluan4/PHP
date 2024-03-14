<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo azul-escuro">
                    <h3>Introdução</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Tipos </h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio</a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=string">
                            String</a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">
                            Desafio String</a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">
                            Booleano</a>
                        </li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">
                            Casting</a>
                        </li>
                    </ul>
                    </div>
                <div class="modulo azul-escuro">
                    <h3>Variáveis </h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">
                            Varáveis</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                            Desafio Equação</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=interporlacao">
                            Interpolação</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                            Variáveis Variáveis</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=d_variaveis">
                            Desafio Variáveis</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">
                            Valor vs Referência</a>
                        </li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">
                            Constante</a>
                        </li>
                    </ul>
                    </div>
                <div class="modulo azul-escuro">
                    <h3>Estruturas de Controle 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=desafio_estrutura">
                            Desafio Estrutura de Controle</a>
                        </li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=operador_ternario">
                            Operador Ternário</a>
                        </li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=switch">
                            Switch</a>
                        </li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=desafio_switch">
                            Desafio Switch</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Arrays</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">
                            Array</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=mapa">
                            Mapa</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">
                            Desafio Meses</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=operacoes_arrays">
                            Operações com Arrays</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=desafio_sorteio">
                            Desafio Sorteio</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=arrays_multidimensionais">
                            Arrays Multidimensionais</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=arrays_constantes">
                            Arrays Constantes</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=get">
                            $_GET</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=post">
                            $_POST</a>
                        </li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">
                            Comparação Array</a>
                        </li>
                    </ul>
                </div>
            </nav>
                

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>