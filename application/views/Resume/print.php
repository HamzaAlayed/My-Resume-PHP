<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Hamza Alayed Resume</title>
<link rel="shortcut icon" type="image/x-icon" href=""/>
<link rel="stylesheet" type="text/css" media="all"
      href="<?php echo base_url()?>assets/style/style.css">
<link rel="stylesheet" type="text/css" media="all"
      href="<?php echo base_url()?>assets/style/print.css">
<!--[if lt IE 9]>
		<script src="<?php echo base_url()?>assets/js/html5.js" type="text/javascript">

		</script>
	<![endif]-->

</head>
<body class="home blog light">
<div id="page" class="hfeed site">
<div id="main"  class="right_sidebar">
  <div id="primary" class="content_area">
    <div id="content" class="site_content" role="main">
      <section id="profile" class="section profile_section first odd printable">
          <div class="section_header profile_section_header opened">

              <div id="profile_header">
                  <div vocab="http://schema.org/" typeof="Person">
                      <div id="profile_user">
                          <div id="profile_photo">
                              <img src="<?php echo $_user["_img"];?>"
                                   alt="<?php echo $_user["_name"];?>"
                                   property="image"/>
                          </div>
                          <div id="profile_name_area">
                              <div id="profile_name">
                                  <h1 id="profile_title">
                                    <span class="firstname" property="name">
                                        <?php echo $_user["_name"];?>
                                    </span>
                                  </h1>
                                  <h4 id="profile_position" property="jobTitle">
                                      <?php echo $_user["_title"];?>
                                  </h4>
                              </div>
                          </div>
                      </div>
                      <div id="profile_data">
                          <div class="profile_row name">
                              <span class="th">Name:</span>
                              <span class="td"><?php echo $_user["_name"];?></span>
                          </div>
                          <div class="profile_row birth">
                              <span class="th">Date of birth:</span>
                              <span class="td"><?php echo $_user["_dob"];?></span>
                          </div>
                          <div class="profile_row address">
                              <span class="th">Address:</span>
                            <span class="td" property="address">
                                <?php echo $_user["_address"];?>
                            </span>
                          </div>
                          <div class="profile_row phone">
                              <span class="th">Phone:</span>
                            <span class="td" property="telephone">
                                <?php echo $_user["_phone"];?>
                            </span>
                          </div>
                          <div class="profile_row email">
                              <span class="th">Email:</span>
                              <span class="td"><?php echo $_user["_email"];?></span>
                          </div>
                          <div class="profile_row website">
                              <span class="th">Website:</span>
                            <span class="td">
                                <a target="_blank"
                                   href="<?php echo $_user["_website"];?>"
                                   property="url">
                                    <?php echo $_user["_website"];?>
                                </a>
                            </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section_body profile_section_body">
              <div class="proile_body">
                  <?php echo $_user["_about"];?>
              </div>
          </div>
      </section>
      <section id="resume" class="section resume_section even printable">
        <div class="section_header resume_section_header"> </div>
        <div class="section_body resume_section_body">
            <div class="wrapper resume_wrapper">
                <div class="category resume_category resume_category_1 first even">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title">
                            <span class="category_title_icon" style="background-color:#<?php echo $_skills['_skills']['_EMPLOYMENT'][0]['_color']?>"></span>
                            Employment
                        </h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <?php
                        $_EMPLOYMENT=$_skills['_skills']['_EMPLOYMENT'];

                        for ($i=0;$i<count($_EMPLOYMENT);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_EMPLOYMENT[$i]['_value'];
                            $_color=$_EMPLOYMENT[$i]['_color'];
                            $_end=($_EMPLOYMENT[$i]['_paragraphEnd']=='')?
                                'Present':$_EMPLOYMENT[$i]['_paragraphEnd'];
                            $_start=$_EMPLOYMENT[$i]['_paragraphStart'];
                            ?>
                            <article class="post resume_post resume_post_1 <?php echo $_oddEv." ".$_first?>">
                                <div class="post_header resume_post_header">
                                    <div class="resume_period">
                                        <span class="period_from">
                                            <?php echo $_start;?>
                                        </span>
                                        -
                                        <span class="period_to">
                                            <?php echo $_end;?>
                                        </span>
                                    </div>
                                    <h4 class="post_title">
                                        <span class="post_title_icon"
                                              style=
                                              "background-color:#<?php echo $_color?>;">

                                        </span>
                                        <a href="post-text.html">
                                            <?php echo $_EMPLOYMENT[$i]['_title'];?>
                                        </a>
                                    </h4>
                                    <h5 class="post_subtitle">
                                        <?php echo $_EMPLOYMENT[$i]['_paragraphHead'];?>
                                    </h5>
                                </div>
                                <div class="post_body resume_post_body"
                                     style="min-height: 95px;">
                                    <p>
                                    <div id="profile_photo">
                                        <img src="<?php echo $_EMPLOYMENT[$i]['_paragraphLogo'];?>"
                                             alt="<?php echo $_EMPLOYMENT[$i]['_title'];?>"
                                             property="image"/>
                                    </div>
                                    <?php echo $_EMPLOYMENT[$i]['_paragraph'];?>
                                    </p>
                                </div>
                            </article>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- .category_body -->
                </div>
                <!-- .category -->
                <div class="category resume_category resume_category_2 odd">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title">
                            <span class="category_title_icon"
                                  style="background-color:#<?php echo $_skills['_skills']['_EDUCATION'][0]['_color']?>">

                                  </span>
                            Employment
                        </h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <?php
                        $_EDUCATION=$_skills['_skills']['_EDUCATION'];

                        for ($i=0;$i<count($_EDUCATION);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_EDUCATION[$i]['_value'];
                            $_color=$_EDUCATION[$i]['_color'];
                            $_end=($_EDUCATION[$i]['_paragraphEnd']=='')?
                                'Present':$_EDUCATION[$i]['_paragraphEnd'];
                            $_start=$_EDUCATION[$i]['_paragraphStart'];
                            ?>
                            <article class="post resume_post resume_post_1 <?php echo $_oddEv." ".$_first?>">
                                <div class="post_header resume_post_header">
                                    <div class="resume_period">
                                        <span class="period_from">
                                            <?php echo $_start;?>
                                        </span>
                                        -
                                        <span class="period_to">
                                            <?php echo $_end;?>
                                        </span>
                                    </div>
                                    <h4 class="post_title">
                                        <span class="post_title_icon"
                                              style=
                                              "background-color:#<?php echo $_color?>;">

                                        </span>
                                        <a href="post-text.html">
                                            <?php echo $_EDUCATION[$i]['_title'];?>
                                        </a>
                                    </h4>
                                    <h5 class="post_subtitle">
                                        <?php echo $_EDUCATION[$i]['_paragraphHead'];?>
                                    </h5>
                                </div>
                                <div class="post_body resume_post_body"
                                     style="min-height: 95px;">
                                    <p>
                                    <div id="profile_photo">
                                        <img src="<?php echo $_EDUCATION[$i]['_paragraphLogo'];?>"
                                             alt="<?php echo $_EDUCATION[$i]['_title'];?>"
                                             property="image"/>
                                    </div>
                                    <?php echo $_EDUCATION[$i]['_paragraph'];?>
                                    </p>
                                </div>
                            </article>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- .category_body -->
                </div>
                <!-- /category -->
            </div>
          <!-- .wrapper --> 
        </div>
        <!-- .section_body -->
        <div class="sidebar resume_sidebar cleared">
          <h2 class="sidebar_title">Skills</h2>
            <aside class="widget widget_skills">
                <h3 class="widget_title">
                    <?php echo $_skills['_skills']['_lines'][0]['_typeTitle']?>
                </h3>

                <div class="widget_inner style_1">
                    <?php
                    $_lines=$_skills['_skills']['_lines'];

                    for ($i=0;$i<count($_lines);$i++) {
                        $_oddEv=($i%2==0)?'odd':'even';
                        $_first=($i==0)?'first':'';
                        $_value=$_lines[$i]['_value'];
                        ?>
                        <div class="skills_row <?php echo $_oddEv." ".$_first?>">
                                <span class="caption">
                                    <?php echo $_lines[$i]['_title'];?>
                                </span>
                                <span class="progressbar">
                                    <span
                                        data-process="<?php echo $_value?>%"
                                        class="progress blue"
                                        style="width: <?php echo $_value?>%;">
                                        <span class="value">
                                            <?php echo $_lines[$i]['_value'];?>%
                                        </span>
                                    </span>
                                </span>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </aside>
            <aside class="widget widget_skills">
                <h3 class="widget_title">Language skills</h3>

                <div class="widget_inner style_3">
                    <?php
                    $_circle=$_skills['_skills']['_circle'];

                    for ($i=0;$i<count($_circle);$i++) {
                        $_oddEv=($i%2==0)?'odd':'even';
                        $_first=($i==0)?'first':'';
                        $_value=$_circle[$i]['_value'];
                        $_color=$_circle[$i]['_color'];
                        ?>
                        <div class="skills_row <?php echo $_oddEv." ".$_first?>">
                                <span class="caption">
                                    <?php echo $_circle[$i]['_title'];?>
                                </span>
                                <span class="progressbar">
                                    <span data-process="<?php echo $_value?>%"
                                          class="progress"
                                          style=
                                          "background-color:#<?php echo $_color?>;
                                              width: <?php echo $_value?>%;">
                                          </span>
                                </span>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </aside>
        </div>
      </section>
      <!-- #resume --> 
      
    </div>
    <!-- #content --> 
  </div>
  <!-- #primary --> 
  
</div>
<!-- #main --> 

<!-- connect js --> 
<script type="text/javascript"
        src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript">

jQuery(document).ready(function(){
	window.print();
});


</script>
</div></body>
</html>
