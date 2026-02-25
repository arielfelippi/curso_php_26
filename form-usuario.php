<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <p>oiii</p>
    <hr>
    <h3>Todos usuários</h3>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome Usuário</th>
                <th>Status</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $existeUsuarios = !empty($usuarios);

                if ($existeUsuarios) {

                    foreach($usuarios as $idx => $usuario) { 
                            // IF Ternario: CONDICAO ? ATENDIDA : SENAO
                            $status = $usuario->status == 1 ? "Ativo" : "Inativo";

                            if ($usuario->status == 1) {
                                $status = "Ativo";
                            } else {
                                 $status = "Inativo";
                            }
                        ?>
                        <tr>
                            <td><?= $usuario->id ?></td>
                            <td><?= $usuario->nome ?></td>
                            <td><?= $usuario->nomeUsuario ?></td>
                            <td><?= $status ?></td>
                            <td><?= $usuario->email ?></td>
                        </tr>
                    <?php }
                }
            ?>
        </tbody>
    </table>
</body>
</html>
