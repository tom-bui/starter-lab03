<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        
        $record = $this->quotes->last();

        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        $this->render();
    }
}

/* End of file Welcome.php */