<?
require __DIR__ . "/data.php";
?>



<main>
    <table>
        <?
        foreach ($teams as $key => $team) : ?>
            <th><?= $key; ?></th>
        <?
        endforeach;
        ?>
        <tr>
            <td>Test</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h3>Teams:<br>
                    <? require __DIR__ . "/countTeams.php"; ?></h3>
            </td>
        </tr>
    </table>
</main>