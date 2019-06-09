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
              <h1 class="mb-0"><a href="#" class="text-black h2 mb-0">Rosalia🌹</a></h1>
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
        
          <h4>Edit the entry</h4>
          <?php 
          echo form_open_multipart('Rosalia/update');
          $data0=['name'=>'ID',
              'id'=>'ID',
              'type'=>'hidden',
              'value'=>$r->ID,
              'maxlength'=>'100',
              'size'=>'30',];
          $data1=['name'=>'Nume',
              'id'=>'Nume',
              'value'=>$r->Nume,
              'maxlength'=>'100',
              'size'=>'30',
              ];
          $data2=['name'=>'Imagine',
              'id'=>'Imagine',
              'value'=>$r->Imagine,
              'maxlength'=>'100',
              'size'=>'30',];
          $data3=['name'=>'Culoare',
              'id'=>'Culoare',
              'value'=>$r->Culoare,
              'maxlength'=>'100',
              'size'=>'30',];
          $data4=['name'=>'Marime',
              'id'=>'Marime',
              'value'=>$r->Marime,
              'maxlength'=>'100',
              'size'=>'30',];
          $data5=['name'=>'Pret',
              'id'=>'Pret',
              'value'=>$r->Pret,
              'maxlength'=>'100',
              'size'=>'30',];
          ?>
          <?php echo form_input($data0);?>
              <table>
                    <tr>
                        <td><?php echo form_label('Nume','Nume');?></td>
                        <td><?php echo form_input($data1);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Imagine','Imagine');?></td>
                        <td><?php echo form_upload($data2);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Culoare','Culoare');?></td>
                        <td><?php echo form_input($data3);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Marime','Marime');?></td>
                        <td><?php echo form_input($data4);?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Pret','Pret');?></td>
                        <td><?php echo form_input($data5);?></td>
                    </tr>
                </table>
            <?php echo form_submit('submit','Update');?>
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