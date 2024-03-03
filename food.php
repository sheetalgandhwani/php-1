<?php

do{
    echo"........MENU..........\n";
    echo"1. Pizza         120rs\n";
    echo"2. Burger        150rs\n";
    echo"3. Dosa          80rs\n";
    echo"4. Idli          50rs\n";
    
    $choice=readline("enter your choice: \n");
    switch($choice)
    {
       case 1: echo"you have selected Pizza \n";
                $price=120;
                break;
  
       case 2: echo"you have selected Burger \n";
               $price=100;
               break;
  
       case 3: echo"you have selected Dosa \n";
               $price=80; 
               break;
  
       case 4: echo"you have selected Idli \n";
               $price=50;
               break;
  
       
    }
           $quantity=readline("Enter your Quantity : \n");
      
       $amount=$quantity *$price;
      
       
       echo"Total amount is: rs. ",$amount  ."\n";
           $another=readline("Do you have to place more order y/n ?\n");
  
  }while($another== 'Y'||$another =='y');
       
  
  
  
       ?>