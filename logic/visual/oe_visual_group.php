<?php

require_once("logic/visual/oe_visual.php");

class oe_varibale_group_holder {
    public $var_content;
    public $type;

    public function __construct($content, $type) {
        $this->var_content = $content;
        $this->type = $type;
    }
}


class oe_visual_group extends oe_visual {
    protected $group = array();
    protected $varname;

    public function __construct($skin_file, $variable, $global_var = array()) {
        parent::__construct($skin_file, $global_var);

        $this->varname = $variable;
    }
    public function add($visual) {
        if(is_string($visual)) $type = "string";
        else if(is_object($visual)) $type = "class";

        $this->group[] = new oe_varibale_group_holder($visual, $type );
    }
    public function pre_update() {
        $entry_content = "";

        foreach ($this->group as $var) {

            if($var->type == "class") {

                $var->var_content->begin($this->skin_name);
                $var->var_content->update();  
                $entry_content .= $var->var_content->swap(true);  
            } else  {
                $entry_content .= $var->var_content;
            }
             
        }

        $this->skin_content = str_replace($this->varname, $entry_content, $this->skin_content);
    }
}
?>