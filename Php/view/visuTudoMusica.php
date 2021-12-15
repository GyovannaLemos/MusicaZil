<?php
include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
include_once("../view/header.php");
?>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Código Artista</th>
            <th>Nome</th>
            <th>Genero</th>
            <th>Album</th>
            <th>Duração</th>
            <th>Link</th>
            <th>Capa</th>
            <th>Data de Lançamento</th>
            <th>Letra</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $musica =  listarTudoMusica($conexao);
        foreach ($musica as $musicas) {
        ?>
            <tr class="table-active">
                <th scope="row"> <?= $musicas["Id_Mus"] ?></th>
                <td><?= $musicas["Nome_Mus"] ?></td>
                <td><?= $musicas["Genero_Mus"] ?></td>
                <td><?= $musicas["Album_Mus"] ?></td>
                <td><?= $musicas["Duracao_Mus"] ?></td>
                <td><?= $musicas["Link_Mus"] ?></td>
                <td><?= $musicas["Capa_Mus"] ?></td>
                <td><?= $musicas["Data_Lança_Mus"] ?></td>
                <td><?= $musicas["Letra_Mus"] ?></td>
             

                <td>
                    <form action="../view/formAlterarMusica.php" method="POST">
                        <input type="hidden" name="Id_Mus" value="<?= $musicas["Id_Mus"] ?>">
                        <button type="submit" class="btn btn-primary"> Alterar </button>
                    </form>
                </td>
                <td>
                    <form action="../controller/deletarMusica.php" method="POST">
                        <input type="hidden" name="Id_Mus" value="<?= $musicas["Id_Mus"] ?>">
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