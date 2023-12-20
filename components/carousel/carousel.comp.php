<?php
@require_once 'projects.php';

    function carouselCard($projects) {
        foreach ($projects as $project) {
            echo "<div class=\"carousel-card\">
                <img src=\"$project->img\" class=\"card-image\" alt=\"\">
                <div class=\"card-info\">
                    <div class=\"card-name\">$project->name</div>
                    <div class=\"card-desc\">$project->software</div>
                    <div class=\"card-name\">$project->description</div>
                <div>
            </div>";
        }

    }
?>