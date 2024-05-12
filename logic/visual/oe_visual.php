<?php

class oe_varibale_holder {
    public $var_name;
    public $var_content;
    public $type;

    public function __construct($name, $content, $type) {
        $this->var_name = $name;
        $this->var_content = $content;
        $this->type = $type;
    }
}

class oe_visual {
    protected $skin_content;
    protected $skin_file;
    protected $skin_name = OEBS_SKIN;

    protected $skin_variables = array();

    public function __construct($skin_file, $global_var = array()) {
        $this->skin_file = $skin_file;
        $this->skin_variables = $global_var;
    }

    public function begin() {
        
        $file = "assets/skin/{$this->skin_name}/{$this->skin_file}";
        if(file_exists($file)) 
            $this->skin_content = file_get_contents($file);
        else $this->skin_content = "";
    } 


    public function update() {
        $this->pre_update();

        foreach($this->skin_variables as $var) {

            if($var->type == "class") {

                $var->var_content->begin($this->skin_name);
                $var->var_content->update();  
                $content = $var->var_content->swap(true);  
            } else  {
                $content = $var->var_content;
            }

            $this->skin_content = str_replace($var->var_name, $content, $this->skin_content);
        }
    }
    public function swap($backend = false)  {
        if($backend == false)
        echo $this->skin_content;
        else return $this->skin_content;
    }

    public function add_visual($variable, $content) {
        if(is_string($content)) $type = "string";
        else if(is_object($content)) $type = "class";

        $this->skin_variables[]  = new oe_varibale_holder("{% ".$variable ." %}" , $content, $type);

    }

    protected function pre_update() { return true; }

}


?>