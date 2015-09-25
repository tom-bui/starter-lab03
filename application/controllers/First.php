<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->quotes->first();

        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->quotes->get(1);

        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    function gimme($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->quotes->get($id);

        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    
}
