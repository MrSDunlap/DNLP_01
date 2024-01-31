<?php
require_once 'projects.php';

    function carouselCard($projects) {
        foreach ($projects as $project) {
            echo "<div class=\"carousel-card\">
                    <img src=\"$project->img\" class=\"card-img\" alt=\"\">";
                    echo "<div class=\"card-info\">";
                        echo "<div class=\"card-name\">$project->name</div>";
                        echo "<div class=\"card-desc\">$project->description</div>";
                    echo "</div>";
            echo "</div>";
        }
    }
?>