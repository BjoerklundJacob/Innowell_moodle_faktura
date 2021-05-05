<?php
  class block_faktura_pdf extends block_base {
    public function init(){
        $this->title = get_string('title', 'block_faktura_pdf');
    }
    public function get_content() {
      global $USER;
      global $DB;
      $enrolments = $DB->get_records_sql('SELECT {user_enrolments}.id, {course}.shortname
                                         FROM {user} 
                                         INNER JOIN {user_enrolments} ON {user}.id = {user_enrolments}.userid
                                         INNER JOIN {course} ON {course}.id = {user_enrolments}.modifierid
                                         WHERE {user}.id = '.$USER->id);
      if ($this->content !== null) {
        return $this->content;
      }
   
      $this->content = new stdClass;//The block will be hidden if all content entries are empty strings
      $this->content->text = '';
      foreach($enrolments as $enrolment){
        $this->content->text .= html_writer::link(
            new moodle_url(
              '/blocks/faktura_pdf/faktura.php',
              ['faktura' => $enrolment->id]
            ),
            $enrolment->shortname.' faktura'
          )."\r\n";
      }
      //$this->content->footer = 'footer';
   
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