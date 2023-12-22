<?php
@require_once 'projects.php';

    function carouselCard($projects) {
        foreach ($projects as $project) {
            echo "
                <div class=\"carousel-card\">
                    <img src=\"$project->img\" class=\"card-img\" alt=\"\">
                    <div class=\"card-name\">$project->name\"</div>
                </div>
                ";
        }
    }
?>