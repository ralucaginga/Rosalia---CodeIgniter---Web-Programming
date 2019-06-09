<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rosalia🌹</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="<?php echo base_url('fonts/icomoon/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('fonts/flaticon/font/flaticon.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/aos.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
    <script src="<?php echo base_url('js/anti_right.js');?>"></script>
  </head>
  <body>
      
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
      
    
    <header class="site-navbar py-1" role="banner">

        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-6 col-xl-2">
              <h1 class="mb-0"><?php echo anchor('', 'Rosalia🌹', array('class' => 'text-black h2 mb-0'));?></h1>
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
  
                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li> <?php echo anchor('','Home')?></li>
                  <li><?php echo anchor('about', 'About') ?></li>
                  <li><?php echo anchor('logare', 'Login') ?></li>
                <li class="active"><?php echo anchor('database1', 'Database') ?></li>
                <li><?php echo anchor('contact', 'Contact') ?></li>
              </ul>
              </nav>
            </div>
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
          </div>
        
        
      </header>

  
    <div class="site-section" align="center">
      <div class="container">
         
          <!--<form name="search_form" method="post" action="database1.php">
              Search:<input type="text" name="search_box" value=""/>
              <input type="submit" name="search" value="Search the table">
              <input type="reset" value="Reset"/>       
          </form>-->
          
          
          <table width="70" cellpadding="4" cellspace="4">
              <tr>
                  <th><strong>Nume</strong></th>
                  <th><strong>Imagine</strong></th>
                  <th><strong>Culoare</strong></th>
                  <th><strong>Marime</strong></th>
                  <th><strong>Pret</strong></th>
                  <th colspan="3" align="center"><strong>Actions</strong></th>
              </tr>
              <?php foreach($flowers as $var){?>
              <tr style="border-bottom: 1px solid black;">
                  <td><?php echo $var->Nume;?></td>
                  <td><img src="<?php echo $var->Imagine;?>" width="200" height="200"></td>
                  <td><?php echo $var->Culoare;?></td>
                  <td><?php echo $var->Marime;?></td>
                  <td><?php echo $var->Pret;?></td>
                  <td><?php echo anchor(array('Rosalia/view1',$var->ID), 'View') ;?></td>
              </tr>
              <?php }?>
          </table> 
          
      </div>
     </div>

    
    <footer class="site-footer">
        <p style="text-align:center">
       Copyright &copy;<script>document.write(new Date().getFullYear());</script> Raluca-Andreea Gînga | All rights reserved
        </p>
    </footer>
  </div>
 
  <script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery-migrate-3.0.1.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery-ui.js');?>"></script>
  <script src="<?php echo base_url('js/popper.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('js/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.stellar.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.countdown.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.magnific-popup.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap-datepicker.min.js');?>"></script>
  <script src="<?php echo base_url('js/aos.js');?>"></script>
  <script src="<?php echo base_url('js/main.js');?>"></script>
    
  </body>
</html>