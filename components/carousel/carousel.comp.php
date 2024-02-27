<?php
require_once 'projects.php';

    //All instances
    function sorterAll($projects) {
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
    //Design instances 
    function sorterDesign($projects) {
        foreach ($projects as $project) {
            if ($project->tag = "designed") {
                echo "<div class=\"carousel-card\">
                    <img src=\"$project->img\" class=\"card-img\" alt=\"\">";
                    echo "<div class=\"card-info\">";
                        echo "<div class=\"card-name\">$project->name</div>";
                        echo "<div class=\"card-desc\">$project->description</div>";
                    echo "</div>";
                echo "</div>";
            }
            
        }
    }
    //Developed instances 
    function sorterDeveloped($projects) {
        foreach ($projects as $project) {
            if ($project->tag = "developed") {
                echo "<div class=\"carousel-card\">
                    <img src=\"$project->img\" class=\"card-img\" alt=\"\">";
                    echo "<div class=\"card-info\">";
                        echo "<div class=\"card-name\">$project->name</div>";
                        echo "<div class=\"card-desc\">$project->description</div>";
                    echo "</div>";
                echo "</div>";
            }
            
        }
    }
?>