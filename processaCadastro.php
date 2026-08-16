<?php
// VALIDAÇÃO DE SEGURANÇA: Se não vier via POST ou se o nome estiver vazio, volta para o formulário
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['nome1'])) {
    header('Location: cadastro.html');
    exit();
}

//Aqui as variáveis recebidas pelo formulário, são armazenadas em variáveis PHP para depois serem exibidas na tela. -->
$nome = $_POST['nome1'];
$idade = $_POST['idade2'];
$profissao = $_POST['profissao3'];
$salario = $_POST['salario4'];
$experiencia = $_POST['experiencia5'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro realizado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Glow Esmeralda Superior -->
    <div class="background-glow"></div>

    <!-- Linhas de Circuito -->
    <div class="tech-lines-left"></div>
    <div class="tech-lines-right"></div>

    <div class="container">
        <!-- Watermark de Fundo -->
        <div class="watermark-bg">SUCESSO</div>

        <!-- NAVBAR -->
        <header class="navbar">
            <div class="logo">
                <span class="logo-dot"></span>Brincos & Cia
            </div>
            <nav class="nav-links">
                <a href="cadastro.html">Cadastro</a>
                <a href="#" class="active">Confirmação</a>
                <a href="#">Sobre</a>
            </nav>
        </header>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="hero" style="display: flex; justify-content: center; align-items: center; min-height: 70vh; padding: 20px 0;">
            <section class="form-card" style="max-width: 600px; width: 100%; box-sizing: border-box;">
                <div class="form-header">
                    <div>
                        <span class="small-title">SUCESSO</span>
                        <h2>Dados do Colaborador</h2>
                    </div>
                    <span class="form-number">&check;</span>
                </div>

                <!-- Exibição dos dados armazenados em variáveis (uma informação por linha) -->
                <div class="info-cards-list" style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 15px;">
                    <p><strong>Nome completo:</strong> <?php echo $nome; ?></p>
                    <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
                    <p><strong>Profissão:</strong> <?php echo $profissao; ?></p>
                    <p><strong>Salário pretendido:</strong> R$ <?php echo $salario; ?></p>
                    <p><strong>Experiência anterior:</strong> <?php echo $experiencia; ?></p>
                </div>

                <hr style="border: 0; border-top: 1px solid rgba(255, 255, 255, 0.08); margin: 15px 0;">

                <h2>Mensagem</h2>

                <!-- Mensagem personalizada utilizando nome, profissão e experiência -->
                <p style="color: #cbd5e1; line-height: 1.6; margin-top: 10px;">
                    Olá, <strong><?php echo $nome; ?></strong>!
                    Recebemos seu cadastro para a profissão de
                    <strong><?php echo $profissao; ?></strong>.
                    Sua experiência informada foi:
                    <em><?php echo $experiencia; ?></em>.
                    Agradecemos pelo seu interesse em fazer parte da nossa equipe!
                </p>

                <!-- Link/Botão para retornar ao formulário -->
                <a href="cadastro.html" style="text-decoration: none; margin-top: 20px; display: block;">
                    <button type="button">
                        <span>&larr; Voltar ao formulário</span>
                    </button>
                </a>
            </section>
        </main>

        <footer>
            <span>&copy; 2026 LOJAS BRINCOS E COMPANHIA</span>
            <span>SISTEMA DE RH</span>
        </footer>
    </div>

</body>
</html>