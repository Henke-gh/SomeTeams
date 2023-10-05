<?
require __DIR__ . "/data.php";
?>



<main>
    <div class="main-table">
        <table>
            <tr>
                <th>Teams</th>
                <th>League</th>
                <th>Champions</th>
                <th>City</th>
                <th>Nickname</th>
                <th>URL</th>
            </tr>
            <tr>
                <!--loops through teams-array and finds the names of all the teams.-->
                <?
                foreach ($teams as $key => $team) : ?>
            <tr>
                <th><?= $key; ?></th>
                <td><?= $team['league']; ?></td>
                <td><?= $team['last-time-champions']; ?></td>
                <td><?= $team['city']; ?></td>
                <?
                    //If-statement to check for and echo team nicknames, Else leaves a blank cell.
                    if (array_key_exists('nickname', $team)) {
                ?>
                    <td>
                        <?= $team['nickname']; ?>
                    </td>
                <?
                    } else {
                ?>
                    <td></td>
                <?
                    } ?>
                <td><a href="<?= $team['url']; ?>"><?= $team['url']; ?></a></td>
            </tr>
        <?
                endforeach;
        ?>
        </tr>

        </table>
    </div>
    <div class="team-count">
        <table>
            <tr>
                <td>
                    <p>Cities:</p>
                    <? require __DIR__ . "/cities.php"; ?>
                </td>
                <td>
                    <h3>Number of teams:<br>
                        <? require __DIR__ . "/countTeams.php"; ?></h3>
                </td>
            </tr>
        </table>
    </div>
</main>