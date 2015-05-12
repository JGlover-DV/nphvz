<?php echo $var ?><?php

  ini_set('display_errors',1);
  error_reporting(E_ALL|E_STRICT);

  $page_title = 'About Us';
  $require_login = false;

  require '../knoopvszombies.ini.php';
  
  require 'module/includes.php';
  
  require 'module/general.php';

?>

<!DOCTYPE html>


<html>

<head>
  <?php
    require 'module/html_head.php';
  ?>
  
  <link href="//<?php echo DOMAIN; ?>/css/page/about.css" rel="stylesheet" type="text/css"/>
  
</head>

<body>

  <div id="body_container">
  
    <?php
      require 'module/header.php';
    ?>
    
    <div class="content_column">
      <div id="content">
      
        <div id="content_top_border">
            <?php require 'module/body_header.php'; ?>
        </div>
        
        <div id="body_content">
        
        <div id="about">


          <div class="even">

            <div class="about_header">Meet the <span class="accent_color">Moderators</span></div>
              
              <style>
                .embed-container { 
                  position: relative;
                  padding-bottom: 56.25%;
                  height: 0;
                  overflow: hidden;
                  max-width: 100%;
                } 
                .embed-container iframe,
                .embed-container object, 
                .embed-container embed { 
                  position: absolute;
                   top: 0; 
                   left: 0; 
                   width: 100%; 
                   height: 100%; 
                }
              </style>
              <div class='embed-container odd'>
                <iframe src='http://www.youtube.com/embed/9JufVZk7GGc' frameborder='0' allowfullscreen></iframe>
              </div>

              <div class="about_header">Our <span class="accent_color">History</span></div>

              <div>Humans Vs. Zombies was first brought to SUNY New Paltz as a program in Lefevre Hall by Kenji Konishiro. As the game gained popularity, it expanded into a campus wide event and was approved as a club starting in 2010, thanks to the efforts of Dexter Pabulayan and Nicholas Andersen. Soon the E-Board ballooned and grew to include a separate board of moderators to referee the game. What had once been a small game amongst friends became one of the largest clubs on the campus, hosting nearly 150 players a semester.</div>

              <div>With that in mind, we as a club have decided to shed the weight of the HvZ Source, forming our own website and game tracker. Our hope with this is to allow for a more personal experience that caters to the needs of the SUNY New Paltz Humans vs. Zombies community. Here you can find a full list of our E-Board, as well as contact information for them.</div>

              <div>We hope to make this game a wonderful experience for all, and can't wait to see you out in the field of battle! </div>

            <div class="about_header"><span>2014 - 2015 </span><span class="accent_color">Eboard</span></div>
                                    
          </div> <!-- even -->
          
          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/nick_president.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/ntasca">
              <div class="about_name">
                  Nick Tasca | President
              </div>
              </a>
              
              <div class="about_text">
                Nick Tasca is a senior English Literature major at SUNY New Paltz and the President of New Paltz Humans vs Zombies. His interests include creative writing, sports journalism, pro wrestling, pina coladas and getting caught in the rain. He's also really beautiful.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->
          
          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/henry_vp.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/awhiteCuban">
              <div class="about_name">
                Henry Varona | Vice President
              </div>
              </a>
              <div class="about_text">     
								Henry Varona is a Super-Senior at SUNY New Paltz, attaining degrees in Creative Writing and Digital Media Management. He is currently the Vice-President of Humans vs. Zombies, as well as the President of SUNY New Paltz Comic Books United. Henry is driven by the will to survive and believes that if he takes the organization of the game seriously, other people can revel in the sheer, unadulterated joy of it!
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/melanie_pr.jpg" class="about_picture" />
            </div>  
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/melanie.axelrod">
              <div class="about_name">
                Melanie Axelrod | PR
              </div>
              </a>
              <div class="about_text">
                Melanie Axelrod is a fourth year Graphic Design major at SUNY New Paltz. As the graphics half of the PR team, she designs posters and helps manage online social media, and is also responsible for the design portion of this lovely website. She is passionate about running Humans vs. Zombies smoothly and effectively, as well as trees, quantum mechanics, and mario kart.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/casey_pr.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/caseyannem">
              <div class="about_name">
                  Casey Morris | PR
              </div>
              </a>
              <div class="about_text">
                Casey Morris is a third year Theatre Arts student at SUNY New Paltz, and the social media half of the PR team. She promotes all Humans vs Zombies events primarily through Facebook, and recently collaborated with the Residence Hall Student Association to give their annual winter formal a "zombie prom" theme. She also enjoys surrounding herself with cute things and making terrible puns.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/krista-treasurer.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/kristanicolemiller">
              <div class="about_name">
                  Krista Miller | Secretary
              </div>
              </a>
              <div class="about_text">
                Krista Miller is currently a junior, studying Classical Voice Performance and Pre-Music Therapy. She is the Secretary of SUNY New Paltz Humans vs. Zombies, as well as Treasurer for New Paltz Swing Dance, and a member of the PR committee for Alpha Psi Ecdysia. When not taking notes and organizing things for HvZ, she enjoys swing dancing, singing, being terrible at most video games, and generally being awesome.  
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/dennis_content.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/dvrocknroll">
              <div class="about_name">
                Dennis Vilensky | Content Director
              </div>
              </a>
              <div class="about_text">
                Dennis Vilensky is a sophomore Digital Media Production major at SUNY New Paltz and the Content Director of NPHvZ. He designs the missions and story of weeklong games and creates the videos that go along with them. His interests (Other than making HvZ the most fun game it can be) are Pokemon, watching film, and staring at computer screens for hours.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/benan_poptart_king.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/benan.saracoglu">
              <div class="about_name">
                  Benan Saracoglu | Head of Moderators
              </div>
              </a>
              <div class="about_text">
                Benan Saracoglu is a third year student at SUNY New Paltz studying Theatre Arts and Creative Writing. As the Head of Moderators for SUNY New Paltz HvZ, he and his team of moderators work to ensure that everybody, player or not, can enjoy the Weeklong in as safe and fun environment as possible. Interests outside of zombie hunting and whistle blowing include painting, video games, an extremely unhealthy amount of Netflix, and just being as pretty real a guy as a pretty real guy could be.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/lily_treasurer.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/serendipity3.14">
              <div class="about_name">
                  Emily Hartley | Treasurer
              </div>
              </a>
              <div class="about_text">
                Lily Hartley is a second year student studying Mathematics and Electrical Engineering. An avid love for all things math and brains related brought Lily to be your treasurer. When not zombie hunting and crunching numbers, Lily divides time between hiding in the depths of the library to study and hiding in the lounges of Lenape doing homework.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->
<!--
          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/josh_safety.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/josh.tobias.18">
              <div class="about_name">
                  Josh Tobias | Safety Officer
              </div>
              </a>
              <div class="about_text">
                Josh Tobias is the Safety Officer for NPHVZ and a volunteer firefighter for the Village of New Paltz. He is responsible for administering dirty looks and disappointed tutting (maybe even a finger waggle) if your blasters hurt too much or are painted wrong. But seriously, get your modified blasters checked with him because he's a super cool guy and will generally be happy to work with you to make your dream Nerf setup happen. He enjoys long walks on the beach (not really) and wearing pretty pink prom dresses (really).
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> 
                   odd -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/jon_webmaster.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/juan.d.glover">
              <div class="about_name">
                  Jonathan Glover |  Webmaster
              </div>
              </a>
              <div class="about_text">
                Jon Glover is a senior studying Computer Science at SUNY New Paltz. He is currently a full-time web developer for 
                <a href="http://perfectcomputersolutions.com/">Perfect Computer Solutions</a>. 
                On top of being webmaster for HvZ, Jon is also cofounder and webmaster of <a href="http://www.spritesanddice.com/">Sprites and Dice</a>, 
                an indie gaming blog run mostly by SUNY New Paltz alumni. When he's not spending hours coding or 
                <a href="https://twitter.com/juan0tron">tweeting about the mysteries of life</a>, he's probably either playing video games or posting glitch art to his 
                <a href="http://juan0tron.tumblr.com/tagged/my-art">Tumblr</a>.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          </div> <!-- about -->            
            
        </div> <!-- body_content -->

      </div> <!-- content -->
    </div>  <!-- content_column -->

  </div> <!-- body_container -->

  <?php
    require 'module/footer.php';
  ?>


</body>

</html>
