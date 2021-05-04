<?php
  class block_faktura_pdf extends block_base {
    public function init(){
        $this->title = get_string('title', 'block_faktura_pdf');
    }
    public function get_content() {
      global $USER;
      //if ($this->content !== null) {
      //  return $this->content;
      //}
   
      $this->content = new stdClass;
      //The block will be hidden if all content entries are empty strings
      $this->content->text = html_writer::link(
        new moodle_url(
          '/blocks/faktura_pdf/faktura.php',
          ['user' => $USER->id]
        ),
        get_string('get_faktura', 'block_faktura_pdf')
      );
      $this->content->footer = 'footer';
   
      return $this->content;
    }
    public function instance_allow_multiple() {
      return false;
    }
    function instance_allow_config() {
      return false;
    }
    public function hide_header() {
      return false;
    }
  }
?>