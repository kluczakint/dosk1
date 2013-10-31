<?php
class block_int_demo extends block_base {
	

    public function init() {
        $this->title = get_string('int_demo', 'block_int_demo');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.?php
	 	 
	 public function instance_allow_multiple() {
  			return false;
	 }
	 
	 public function get_content() {
    if ($this->content !== null) {
      	return $this->content;
    }
	 
	 
	 
	 $html = "";
	 $html .= '<style type="text/css"></style>';
    $this->content         =  new stdClass;
    $this->content->text   = $html;
    $this->content->footer = '';
    return $this->content;

  }
	
	
}

