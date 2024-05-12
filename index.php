<?php
session_start();
require_once("config/config.php");
require_once("logic/visual/oe_visual_index.php");
require_once("logic/visual/oe_visual_top_menu.php");

require_once("logic/functions.php");



class oe_visual_home_menu extends oe_visual_top_menu {
    public function __construct($global_var) {
        parent::__construct($global_var);

        $this->add(new oe_visual_top_menu_entry("index.php", "Startseite", true, $global_var ) );
        $this->add(new oe_visual_top_menu_entry("login.php", "Anmelden", false, $global_var ) );
        $this->add(new oe_visual_top_menu_entry("signup.php", "Registrieren", false, $global_var ) );
    }
}

class oe_visual_home extends oe_visual_index {

    public function __construct($global_var) {
        parent::__construct($global_var);

        $this->add_visual("OEBS_CONTENT_HTML", new oe_visual("start.html"));
        $this->add_visual("OEBS_CONTENT_HEADER", new oe_visual_home_menu( $global_var));
        $this->add_visual("OEBS_CONTENT_FOOTER", new oe_visual("footer.html", $global_var));

        
    }

    public function update() {
        parent::update();
    }
}

$visual = new oe_visual_home(oe_create_global_var() );

$visual->begin();
$visual->update();

$visual->swap();



?>