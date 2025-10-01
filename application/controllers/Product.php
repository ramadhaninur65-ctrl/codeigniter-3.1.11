<?php
class product extends CI_Controller {

function_construct(){
  parent::_construct(){
  $this->load->model('product_model');
}

  function index(){
     $datap['product']
     $this->load->view('product_view',$data);
