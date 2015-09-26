<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Display
 *
 * @author chaos
 */
class Display {
    
    // Bolds all capitalized words that appear inside <p class="lead> tags
    function massage() {
        $CI = & get_instance();
        $buffer = $CI->output->get_output();
        
        // Gets all the quote sections - <p class="lead">
        $paragraphs = '/<p class="lead">.*<\/p>/';
        $matches = array();
        preg_match($paragraphs, $buffer, $matches);
        
        // Replaces the capitalized words in each of the quote sections, storing
        // the result in a new array
        $search = '/([A-Z]+)([a-z]*)/';
        $replaces = preg_replace_callback($search,
                                        function ($match) {
                                            return "<strong>$match[0]</strong>";
                                        }, $matches);
        
        // Using the original $matches array and the new $replaces array,
        // iterate through the output and do a string replace to add in the
        // new <strong> tags for capitalized words
        for($i = 0; $i < count($matches); $i++) {
            $buffer = str_replace($matches[$i], $replaces[$i], $buffer);
        }
        
        $CI->output->set_output($buffer);
        $CI->output->_display();
    }
}