<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/simple_html_dom.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Data extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    function index_post()
    {
      # code...
    }
    function index_get()
    {
      # code...
    }
    function index_put()
    {
      # code...
    }
    function index_delete()
    {
      # code...
    }
    function goldrate_get(){

    /*#############################
    * Developer: Mohammad Sharaf Ali
    * Designation: Web Developer
    * Version: 1.0
    */#############################
    $RATES_API_URL = 'http://goldprice.org/NewCharts/gold/images/goldsilverpricesforcalculators.txt';
    /*
     * since the api returns text response so file_get_contents() will suffice
     * else use curl get request
     */
    $fileContent = file_get_contents($RATES_API_URL);
    $silverFileContent = explode('!', $fileContent);
    $goldFileContent = explode('@', $silverFileContent[1]);
    $currAndRateCollection = array();
    /*
     * calculating gold and silver rates in different for each loops
     * as the currencies return may vary across both
     */
    #gold rates calculation
    $currAndRates = explode(';', $goldFileContent[0]);
    foreach ($currAndRates as $currAndRate) {
        if (!empty($currAndRate)) {
            $split = explode(',', $currAndRate);
            $currAndRateCollection['gold_rates'][] = array('Currency' => str_replace('XAU_', '', $split[0]),
                                                           'Price' => $split[1]);
        }
    }
    #silver rates calculation
    $currAndRates = explode(';', $silverFileContent[2]);
    foreach ($currAndRates as $currAndRate) {
        if (!empty($currAndRate)) {
            $split = explode(',', $currAndRate);
            $currAndRateCollection['silver_rates'][] = array('Currency' => str_replace('XAG_', '', $split[0]),
                                                             'Price' => $split[1]);
        }
    }
    $this->response($currAndRateCollection,200);
  }


}
