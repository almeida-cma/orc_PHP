<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Orçamentos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gestão de Orçamentos</h1>
        </header>

        <!-- Formulário para criar orçamento -->
        <section>
            <label for="descricao-orcamento">Descrição do Orçamento:</label>
            <input type="text" id="descricao-orcamento" placeholder="Digite a descrição do orçamento">
            <button id="criar-orcamento">Criar Orçamento</button>
        </section>

        <!-- Lista de orçamentos criados -->
        <section>
            <h2>Orçamentos Criados</h2>
            <ul id="lista-orcamentos"></ul>
        </section>

        <hr>

        <!-- Visualização de itens de um orçamento -->
        <section>
            <h2>Itens do Orçamento: <span id="nome-orcamento">Nenhum</span></h2>

            <div>
                <label for="descricao-item">Descrição do Item:</label>
                <input type="text" id="descricao-item" placeholder="Descrição do item">
                <label for="valor-item">Valor:</label>
                <input type="number" id="valor-item" placeholder="Valor do item">
                <label for="fornecedor-item">Fornecedor:</label>
                <input type="text" id="fornecedor-item" placeholder="Fornecedor do item">
                <label for="foto-item">Foto:</label>
                <input type="file" id="foto-item">
                <button id="adicionar-item">Adicionar Item</button>
            </div>

            <h3>Itens Adicionados:</h3>
            <ul id="lista-itens"></ul>

            <p>Total: R$ <span id="total-itens">0.00</span></p>

            <!-- Exclusão do orçamento -->
            <button id="excluir-orcamento" style="display:none;">Excluir Orçamento</button>
        </section>

        <hr>

        <!-- Backup e Restauração -->
        <section>
            <button id="gerar-backup">Gerar Backup (JSON)</button>
            <input type="file" id="restaurar-backup" accept=".json">
            <button id="restaurar-backup-btn">Restaurar Backup</button>
        </section>
    </div>

    <script src="js/script.js"></script>
</body>
</html>