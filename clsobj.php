<?php


  class food{
    
    public $qty;
    public $total;
    public $price;
    
  public function doss($qty){
    
	 $this-> qty= $qty; 
  $price=25;
  $total=$price *$qty;
return $total ;
	
  }
  
  
  public function chap($qty){
    
    $this-> qty= $qty; 
 $price=20;
 $total=$price *$qty;
return $total ;
   
 }
 public function idy($qty){
    
    $this-> qty= $qty; 
 $price=40;
 $total=$price *$qty;
return $total ;
   
 }
}
  ?>