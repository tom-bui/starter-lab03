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
        
        // Gets the relevant data
        $record = $this->quotes->first();

        // Passes the data into the view
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // Gets the relevant data
        $record = $this->quotes->get(1);
        
        // Passes the data into the view
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    function gimme($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // Gets the relevant data
        $record = $this->quotes->get($id);
        
        // Passes the data into the view
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
    
    
}
