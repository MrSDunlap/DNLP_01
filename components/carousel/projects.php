<!-- List of projects - testing out OOP for easy updating -->
<?php 
class Project {
    public $name;
    public $description;
    public $software;
    public $img;

    // Constructor
    public function __construct($name, $description, $software, $img)
    {
        $this->name = $name;
        $this->description = $description;
        $this->software = $software;
        $this->img = $img;
    }

    // Method
    public function newProject() {
        return 
            $this->name;
            $this->description;
            $this->software;
            $this->img;
    }
}

$projectOne = new Project(
    $name = "Log In Sequence",
    $description = "PHP Exploration with MySQL relational database. A user can create an account, login, be welcomed with a personal page, and log out. Error states, sessions, password hashing, and fetching data were my key takeaways.",
    $software ="PHP - MySQL - HTML - CSS",
    $img = '../../assets/imgs/headshot.jpg'
);


