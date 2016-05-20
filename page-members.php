<?php
/**
 * Template Name: Members
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>

<?php 
	require_once('neon.php');
	
	$neon = new Neon();
	
	$keys = array(
	  'orgId'=>'surfacedesign', 
	  'apiKey'=>'494f48e09c0f7818cc1511b7cefdf813'
	  ); 
	$neon->login($keys);
	
	$search = array( 
	  'method' => 'account/listAccounts', 
/*
	  'criteria' => array(
	    array( 'First Name', 'EQUAL', ''),
	    array( 'Last Name', 'EQUAL', ''),
	  ),
*/
	  'columns' => array(
	    'standardFields' => array('First Name', 'Last Name')
	  ),
	  'page' => array(
	    'currentPage' => 1,
	    'pageSize' => 20,
	    'sortColumn' => 'First Name',
	    'sortDirection' => 'ASC',
	  ),
);
$result = $neon->search($search);
var_dump($result);
	

?>



 
 

 <?php get_footer(); ?>