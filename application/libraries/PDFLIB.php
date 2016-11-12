<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 23/10/16
 * Time: 7:57 PM
 */
class PDFLIB {
    public function __construct() {
        require_once(dirname(__FILE__).'/html2pdf/vendor/autoload.php');
    }

    public function getPDF($content, $fname) {
        $html2pdf = new HTML2PDF('P','A4','en');
        $html2pdf->writeHTML($content);
        $html2pdf->Output('example.pdf');
    }
}