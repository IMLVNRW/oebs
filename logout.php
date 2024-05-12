<?php
session_start();
require_once("config/config.php");
require_once("logic/visual/oe_visual_index.php");
require_once("logic/visual/oe_visual_top_menu.php");

require_once("logic/functions.php");



class oe_visual_logout_menu extends oe_visual_top_menu {
    public function __construct($global_var) {
        parent::__construct($global_var);

        $this->add(new oe_visual_top_menu_entry("index.php", "Startseite", false, $global_var ) );
        $this->add(new oe_visual_top_menu_entry("login.php", "Login", false, $global_var ) );
        $this->add(new oe_visual_top_menu_entry("logout.php", "Abmelden", true, $global_var ) );
    }
}

class oe_visual_logout extends oe_visual_index {

    public function __construct($global_var) {
        parent::__construct($global_var);

        $this->add_visual("OEBS_CONTENT_HTML", new oe_visual("logout.html"));
        $this->add_visual("OEBS_CONTENT_HEADER", new oe_visual_logout_menu($global_var) );
        $this->add_visual("OEBS_CONTENT_FOOTER", new oe_visual("footer.html"));

        
    }

    public function update() {
        oe_session_destroy();
        parent::update();
    }
}

$visual = new oe_visual_logout(oe_create_global_var());

$visual->begin("default");
$visual->update();

$visual->swap();



?>