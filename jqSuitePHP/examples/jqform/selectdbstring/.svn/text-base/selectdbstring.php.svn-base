<?php
// Include class 
include_once 'jqformconfig.php'; 
include_once $CODE_PATH.'jqUtils.php'; 
include_once $CODE_PATH.'jqForm.php'; 
// Create instance 
$newForm = new jqForm('newForm',array('method' => 'post', 'id' => 'newForm'));
// Demo Mode creating connection 
include_once $CODE_PATH.'jqGridPdo.php'; 
$conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$newForm->setConnection( $conn );
// Set url
$newForm->setUrl($SERVER_HOST.$SELF_PATH.'selectdbstring.php');
// Set Form header 
$formhead='Shipping Details';
$newForm->setFormHeader($formhead,'ui-icon-mail-closed');
// Set parameters 
$jqformparams = array();
// Set SQL Command, table, keys 
$newForm->table = 'orders';
$newForm->setPrimaryKeys('OrderID');
$newForm->serialKey = true;
// Set Form layout 
$newForm->setColumnLayout('twocolumn');
// Add elements
$newForm->addElement('OrderID','hidden', array('label' => 'OrderID', 'id' => 'newForm_OrderID'));
$newForm->addElement('ShipName','text', array('label' => 'Name', 'maxlength' => '40', 'size' => '40', 'id' => 'newForm_ShipName'));
$newForm->addElement('ShipAddress','text', array('label' => 'Address', 'maxlength' => '60', 'size' => '40', 'id' => 'newForm_ShipAddress'));
$newForm->addElement('ShipCity','text', array('label' => 'City', 'maxlength' => '15', 'size' => '20', 'id' => 'newForm_ShipCity'));
$newForm->addElement('ShipPostalCode','text', array('label' => 'PostalCode', 'maxlength' => '10', 'size' => '20', 'id' => 'newForm_ShipPostalCode'));
$newForm->addElement('ShipCountry','select', array('label' => 'Country', 'datalist' => ' : Select Country', 'datasql' => 'SELECT ShipCountry FROM orders  WHERE ShipCountry <> "" GROUP BY ShipCountry', 'id' => 'newForm_ShipCountry'));
$newForm->addElement('Freight','number', array('label' => 'Freight', 'id' => 'newForm_Freight'));
$elem_8[]=$newForm->createElement('newSubmit','submit', array('value' => 'Submit'));
$newForm->addGroup("newGroup",$elem_8, array('style' => 'text-align:right;', 'id' => 'newForm_newGroup'));
// Add events
// Add ajax submit events
$newForm->setAjaxOptions( array('iframe' => false,
'forceSync' =>false) );
// Demo mode - no input 
$newForm->demo = true;
// Render the form 
echo $newForm->renderForm($jqformparams);
?>