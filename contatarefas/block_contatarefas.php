<?php 

class block_contatarefas extends block_base {

    public function init(){
        $this->title = 'bloco que conta tarefas';
    }

    public function get_content() {
        global $DB;

        $query = 'select count(id) AS total from mdl_assign';
        $resultados = $DB->get_record_sql($query);

        $this->content =  new stdClass;
        $this->content->text = 'Esse moodle tem ' . $resultados->total . ' tarefas';
        return $this->content;
    }
}