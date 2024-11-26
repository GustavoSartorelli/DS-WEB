<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Aluno SESI
    </title>
</head>
<body>
    <form action="formulario-1.php" method="POST">
        <label>Aluno:</label>
        <input type="text" name="Aluno" id="Nome aluno" autofocus="" required="">
        <br><br>

        <label>RM:</label>
        <input type="number" name="rm" id="RM do aluno" max="9999" required="">

        <label>N° chamada:</label>
        <input type="number" name="chamada" max="32" required="">
        <br><br>

        <label>Patrimonio Maquina</label>
        <input type="number" name="Patrimonio" id="Codigo de barra" max="9999999" required="" data-listener-added_787f7fe3="true">
        <br><br>

        <label for="num maquina">N° máquina:</label>
        <input type="number" name="num maquina" id="Numero da maquina" maxlength="2" required="" data-listener-added_787f7fe3="true">
        <br><br>

        <label for="Foto">Foto:</label>
        <input type="file" name="foto" id="Seleção de foto" required="">
        <br><br>

        <label for="ST">Service tag:</label>
        <input type="text" name="ST" id="Codigo preto da maquina" maxlength="7" required="" data-listener-added_787f7fe3="true">
        <br><br>

        <input type="submit" value="Cadastrar">
        <input type="reset">

    </form>
</body>
</html>