<?php

function toonVluchten($vluchten) {
    foreach ($vluchten as $vlucht) {
        echo '<div class="cards">
        <a href="detail.php?vluchtnr=' . $vlucht['vluchtnummer'] . '">

            <table> 
                <thead>
                    <tr>
                        <th>Bestemming</th>
                        <th>vertrektijd</th>
                        <th>maximum aantal passagiers</th>
                        <th>maximum koffer gewicht p.p</th>
                        <th>Details -></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>(' . $vlucht['bestemming'] . ')</td>
                        <td>' . $vlucht['vertrektijd'] . '</td>
                        <td>' . $vlucht['max_aantal'] . '</td>                                
                        <td>' . $vlucht['max_gewicht_pp'] . '</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </a>
    </div>';
    }

}
