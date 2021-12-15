<?php
include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
include_once("../view/header.php");
?>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $cliente =  listarTudoCliente($conexao);
        foreach ($cliente as $clientes) {
        ?>
            <tr class="table-active">
                <th scope="row"> <?= $clientes["Id_Clie"] ?></th>
                <td><?= $clientes["Nome_Clie"] ?></td>
                <td><?= $clientes["Dt_Nasc"] ?></td>
                <td><?= $clientes["Fone_Clie"] ?></td>


                <td>
                    <form action="../view/formAlterarCliente.php" method="POST">
                        <input type="hidden" name="Id_Clie" value="<?= $clientes["Id_Clie"] ?>">
                        <button type="submit" class="btn btn-primary"> Alterar </button>
                    </form>
                </td>
                <td>
                    <form action="../controller/deletarCliente.php" method="POST">
                        <input type="hidden" name="Id_Clie" value="<?= $clientes["Id_Clie"] ?>">
                        <button type="submit" class="btn btn-danger"> Excluir </button>
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>

<?php
include_once("../view/footer.php");
?>