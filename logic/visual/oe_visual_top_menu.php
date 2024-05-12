<?php 

require_once("logic/visual/oe_visual.php");
require_once("logic/visual/oe_visual_group.php");

class oe_visual_top_menu_entry extends oe_visual {

    public function __construct($link, $text, $active, $global_var) {
        parent::__construct("menu_entry.html", $global_var);

        $this->add_visual("OEBS_NAV_ENTRY_LINK", $link);
        
        if($active) {
            $this->add_visual("OEBS_NAV_ENTRY_TEXT", $text . ' <span class="sr-only">(Current)</span>');
            $this->add_visual("OEBS_NAV_ENTRY_ACTIVE", "active" );
        } else {
            $this->add_visual("OEBS_NAV_ENTRY_TEXT", $text );
            $this->add_visual("OEBS_NAV_ENTRY_ACTIVE", "" );
        }
    }
}

class oe_visual_top_menu extends oe_visual_group {

    public function __construct($global_var = array()) {
        parent::__construct("menu.html", "{% OEBS_NAV_MENU_ENTRYS %}", $global_var);

    }

}


?>