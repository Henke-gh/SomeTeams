<?
require __DIR__ . "/data.php";
?>



<main>
    <table>
        <tr>
            <!--loops through teams-array and finds the names of all the teams.-->
            <?
            foreach ($teams as $key => $team) : ?>


                <th><?= $key; ?></th>

        <tr>
            <td><?= $team['league']; ?></td>
            <td><?= $team['last-time-champions']; ?></td>
            <td><?= $team['city']; ?></td>
            <td><?= $team['url']; ?></td>
        </tr>

    <?
            endforeach;
    ?>
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