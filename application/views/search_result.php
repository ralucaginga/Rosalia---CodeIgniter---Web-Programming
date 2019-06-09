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
                <li><?php echo anchor('home','Home')?></li>
                  <li class="active"><?php echo anchor('database', 'Database') ?></li>
                  <li><a href="<?php echo site_url('Rosalia/logout')?>">Logout</a></li>
              </ul>
              </nav>
            </div>
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
          </div>
        
        
      </header>

  
    <div class="site-section" align="center">
      <div class="container">
          <table style="text-align:center;border:1px solid black;">
              <tr style="border:1px solid black;">
              <th style="border:1px solid black;"><strong>Nume</strong></th>
              <th style="border:1px solid black;"><strong>Imagine</strong></th>
              <th style="border:1px solid black;"><strong>Culoare</strong></th>
              <th style="border:1px solid black;"><strong>Marime</strong></th>
              <th style="border:1px solid black;"><strong>Pret</strong></th>
              </tr>
        <?php
        //$this->table->set_heading(array('ID','Nume','Imagine','Culoare','Marime','Pret'));
        foreach($r as $row){?>
            
              <tr style="border:1px solid black;">
                  <td style="border:1px solid black;"><?php echo $row->Nume?></td>
                  <td style="border:1px solid black;"><img src="<?php echo base_url($row->Imagine);?>" width="200" height="200"></td>
                  <td style="border:1px solid black;"><?php echo $row->Culoare;?></td>
                  <td style="border:1px solid black;"><?php echo $row->Marime;?></td>
                  <td style="border:1px solid black;"><?php echo $row->Pret;?></td>
              </tr>

<?php  } ?>
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
