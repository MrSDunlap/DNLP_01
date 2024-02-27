<!-- List of projects - testing out OOP for easy updating -->
<?php 
class Project {
    public $name;
    public $description;
    public $software;
    public $img;
    public $tag;

    // Constructor
    public function __construct($name, $description, $software, $img, $tag)
    {
        $this->name = $name;
        $this->description = $description;
        $this->software = $software;
        $this->img = $img;
        $this->tag = $tag;
    }

    // Method
    public function project() {
        return 
            $this->name;
            $this->description;
            $this->software;
            $this->img;
            $this->tag;
    }
}

//PROJECTS---------------------------------------------
$projectOne = new Project(
    $name = "Log In Sequence",
    $description = "PHP Exploration with MySQL relational database. A user can create an account, login, be welcomed with a personal page, and log out. Error states, sessions, password hashing, and fetching data were my key takeaways.",
    $software ="PHP - MySQL - HTML - CSS",
    $img = './assets/imgs/registration.jpg',
    $tag = "designed"
);
$projectTwo = new Project(
    $name = "Astro Blog",
    $description = "Astro JS Blog - I thought Astro would be all the hype upon taking this venture. Astro has its uses but will not be used within my workflow unless a project calls for it.",
    $software ="Astro - HTML - CSS",
    $img = './assets/imgs/blog.jpg',
    $tag = "designed"
);
$projectThree = new Project(
    $name = "Interactive JS Cards",
    $description = "Motion design is something that I hold at high value. In this project I used GSAP Libraries to explore animated cards that show different information (Similar to an accordion).",
    $software ="GSAP - HTML - CSS",
    $img = './assets/imgs/cards.jpg',
    $tag = "developed"
);

$projects = [
    $projectOne,
    $projectTwo,
    $projectThree,
    $projectOne,
    $projectTwo,
    $projectThree
];
//PROJECT CARD LAYOUT-----------------------------------

echo "All button has been clicked.";