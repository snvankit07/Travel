<?php phpinfo();
error_reporting(E_ALL);die;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $p = array('authenticateRequest' => array('BranchCode' => "M199X", 'UserName' => "APIUser", 'Password' => "fusi99x", 'Application' => "ExternalAPI", 'Client' => '?', 'BranchID' => 3));
    $client = new SoapClient("http://devapi.stellatravelgateway.stellatravelservices.co.uk/DirectoryService.svc?singleWsdl", array('trace' => 1));
    $result = $client->Authenticate($p);
    print_R(json_decode(json_encode($result), true));
    ?>
