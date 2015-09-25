<?php

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // Gets the relevant data
        $record = $this->quotes->get(5);
        
        // Passes the data into the view
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }  
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        // Gets the relevant data
        $record = $this->quotes->get(6);

        // Passes the data into the view
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }  
    
}
