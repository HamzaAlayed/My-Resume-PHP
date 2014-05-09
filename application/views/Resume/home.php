<?php
/**
 *  PHP version 5
 * Created by PhpStorm.
 * Project : My-Resume-PHP.
 * User: Hamza Alayed
 * Date: 5/8/14
 * Time: 5:45 PM
 */
?>
<div id="main">
    <div class="content_area" id="primary">
    <div role="main" class="site_content" id="content">
    <section class="section profile_section first odd" id="profile">
        <a id="blog_page_link" href="blog-category-arhive.html">
            <span class="icon-pencil icon"></span>
            <span class="label">Blog</span>
        </a>
        <div class="section_header profile_section_header opened">
            <h2 class="section_title profile_section_title vis">
                <a href="#">
                    <span class="icon icon-user"></span>
                    <span class="section_name">Profile</span>
                </a>
                <span class="section_icon"></span>
            </h2>

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
    <div id="mainpage_accordion_area">

    <!-- RESUME -->
    <section class="section resume_section even" id="resume">
        <div id="resume_buttons">
            <a target="_blank" id="resume_link" href="print.html">
                <span class="label">Print</span>
                <span class="icon-print icon"></span>
            </a>
            <a target="_blank" id="resume_link_download">
                <span class="label">Download</span>
                <span class="icon-download icon"></span>
            </a>
        </div>
        <div class="section_header resume_section_header">
            <h2 class="section_title resume_section_title"><a href="#"><span class="icon icon-align-left"></span><span
                        class="section_name">Resume</span></a><span class="section_icon"></span></h2>
        </div>
        <div class="section_body resume_section_body">
            <div class="sidebar resume_sidebar">
                <aside class="widget widget_skills">
                    <h3 class="widget_title">Programming skills</h3>

                    <div class="widget_inner style_1">
                        <div class="skills_row odd first"><span class="caption">Wordpress</span><span
                                class="progressbar"><span data-process="90%" class="progress blue"><span
                                        class="value">90%</span></span></span></div>
                        <div class="skills_row even"><span class="caption">PHP</span><span class="progressbar"><span
                                    data-process="80%" class="progress aqua"><span class="value">80%</span></span></span>
                        </div>
                        <div class="skills_row odd"><span class="caption">HTML</span><span class="progressbar"><span
                                    data-process="93%" class="progress green"><span class="value">93%</span></span></span>
                        </div>
                        <div class="skills_row even"><span class="caption">CSS</span><span class="progressbar"><span
                                    data-process="80%" class="progress yellow"><span class="value">80%</span></span></span>
                        </div>
                        <div class="skills_row odd"><span class="caption">MySQL</span><span class="progressbar"><span
                                    data-process="70%" class="progress red"><span class="value">70%</span></span></span>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget_skills">
                    <h3 class="widget_title">Graphic Skills</h3>

                    <div class="widget_inner style_2">
                        <div class="skills_row odd"><span class="legend blue"></span><span
                                class="caption">Adobe Photoshop</span></div>
                        <div class="skills_row even"><span class="legend aqua"></span><span class="caption">Adobe Illustrator</span>
                        </div>
                        <div class="skills_row odd"><span class="legend green"></span><span
                                class="caption">Adobe Indesign</span></div>
                        <div class="skills_row even"><span class="legend yellow"></span><span
                                class="caption">Corel Draw</span></div>
                        <div class="skills_row odd"><span class="legend red"></span><span class="caption">3D Max</span>
                        </div>
                        <div class="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="piechart">
                                <path d="M66,66 L130,66  A64,64 0 0,1 57,129 z" fill="#327ea3"></path>
                                <path d="M66,66 L57, 129 A64,64 0 0,1 2,60 z" fill="#4ca5d0"></path>
                                <path d="M66,66 L2,  60  A64,64 0 0,1 34,11 z" fill="#6ca338"></path>
                                <path d="M66,66 L34, 11  A64,64 0 0,1 103,14 z" fill="#ffbc38"></path>
                                <path d="M66,66 L103,14  A64,64 0 0,1 130,66 z" fill="#e82c0c"></path>
                                <circle cx="66" cy="66" r="40" fill="#ffffff"></circle>
                            </svg>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget_skills">
                    <h3 class="widget_title">Language skills</h3>

                    <div class="widget_inner style_3">
                        <div class="skills_row odd first"><span class="caption">English</span><span
                                class="progressbar"><span data-process="80%" class="progress aqua"></span></span></div>
                        <div class="skills_row even"><span class="caption">French</span><span class="progressbar"><span
                                    data-process="60%" class="progress green"></span></span></div>
                        <div class="skills_row odd"><span class="caption">Spain</span><span class="progressbar"><span
                                    data-process="80%" class="progress yellow"></span></span></div>
                    </div>
                </aside>
            </div>
            <div class="wrapper resume_wrapper">
                <div class="category resume_category resume_category_1 first even">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title"><span class="category_title_icon aqua"></span>Employment</h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <article class="post resume_post resume_post_1 first even">
                            <div class="post_header resume_post_header">
                                <div class="resume_period"><span class="period_from">2003</span> - <span class="period_to">2007</span>
                                </div>
                                <h4 class="post_title"><span class="post_title_icon aqua"></span><a href="post-text.html">There
                                        are many variations of passages</a></h4>
                                <h5 class="post_subtitle">Director of department</h5>
                            </div>
                            <div class="post_body resume_post_body">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </article>
                        <article class="post resume_post resume_post_2 odd">
                            <div class="post_header resume_post_header">
                                <div class="resume_period"><span class="period_from">2001</span> - <span
                                        class="period_to period_present">present</span></div>
                                <h4 class="post_title"><span class="post_title_icon aqua"></span><a href="post-text.html">Cooper
                                        Union</a></h4>
                                <h5 class="post_subtitle">Programmer</h5>
                            </div>
                            <div class="post_body resume_post_body">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </article>
                    </div>
                    <!-- .category_body -->
                </div>
                <!-- .category -->
                <div class="category resume_category resume_category_2 odd">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title"><span class="category_title_icon green"></span>Education</h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <article class="post resume_post resume_post_1 first even">
                            <div class="post_header resume_post_header">
                                <div class="resume_period"><span class="period_from">1999</span> - <span class="period_to">2001</span>
                                </div>
                                <h4 class="post_title"><span class="post_title_icon green"></span><a href="post-text.html">Lorem
                                        Contrary to popular belief</a></h4>
                                <h5 class="post_subtitle">Web design</h5>
                            </div>
                            <div class="post_body resume_post_body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </article>
                        <article class="post resume_post resume_post_2 odd">
                            <div class="post_header resume_post_header">
                                <div class="resume_period"><span class="period_from">1996</span> - <span class="period_to">2000</span>
                                </div>
                                <h4 class="post_title"><span class="post_title_icon green"></span><a href="post-text.html">Lorem
                                        Ipsum is simply dummy text</a></h4>
                                <h5 class="post_subtitle">Graphic design</h5>
                            </div>
                            <div class="post_body resume_post_body">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </article>
                    </div>
                    <!-- /category_body -->
                </div>
                <!-- /category -->
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /section_body -->
    </section>
    <!-- /RESUME-->

<!-- PORTFOLIO -->
<section class="section portfolio_section odd" id="portfolio">
    <div class="section_header portfolio_section_header">
        <h2 class="section_title portfolio_section_title"><a href="#"><span class="icon icon-briefcase"></span><span
                    class="section_name">Portfolio</span></a><span class="section_icon"></span></h2>
    </div>
    <div class="section_body portfolio_section_body">
        <div class="portfolio_wrapper">
            <ul id="portfolio_iso_filters">
                <li><a class="current" data-filter="*" href="#">All</a></li>
                <li><a data-filter=".category_4" href="#">Web</a></li>
                <li><a data-filter=".category_6" href="#">Photo</a></li>
                <li><a data-filter=".category_5" href="#">Graphics</a></li>
            </ul>
            <div class="portfolio_items">
                <article class="post portfolio_post portfolio_post_1 first even category_4 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Beautiful-young-woman-jumping-15095405.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Beautiful-young-woman-jumping-15095405-504x348.jpg"
                                alt="Portfolio item 14"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 14</a></h4>
                    <h5 class="post_subtitle">Web, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_2 odd category_4 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Cheerful-red-haired-girl-15330950.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Cheerful-red-haired-girl-15330950-504x348.jpg"
                                alt="Portfolio item 13"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 13</a></h4>
                    <h5 class="post_subtitle">Web, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_3 even category_4 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-beautiful-young-woman-in-bikin-43332169.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-beautiful-young-woman-in-bikin-43332169-504x348.jpg"
                                alt="Portfolio item 12"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 12</a></h4>
                    <h5 class="post_subtitle">Web, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_4 odd category_4 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Beautiful-stylish-young-woman-38849389.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg"
                                alt="Portfolio item 11"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 11</a></h4>
                    <h5 class="post_subtitle">Web, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_5 even category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Close-up-image-of-an-office-wo-41874253-1024x682.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Close-up-image-of-an-office-wo-41874253-1024x682-504x348.jpg"
                                alt="Portfolio item 15"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 15</a></h4>
                    <h5 class="post_subtitle">Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_6 odd category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-christmas-girl-young-beautifu-38594893.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-christmas-girl-young-beautifu-38594893-504x348.jpg"
                                alt="Portfolio 10"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 10</a></h4>
                    <h5 class="post_subtitle">Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_7 even category_4 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-art-exhibition-28071347d.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-art-exhibition-28071347d-504x348.jpg"
                                alt="Portfolio 9"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 9</a></h4>
                    <h5 class="post_subtitle">Web, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_8 odd category_4 category_5">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-sensual-elegant-young-woman-in-34273394.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-sensual-elegant-young-woman-in-34273394-504x348.jpg"
                                alt="Portfolio 8"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 8</a></h4>
                    <h5 class="post_subtitle">Web, Graphics</h5>
                </article>
                <article class="post portfolio_post portfolio_post_9 even category_5 category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Sexy-woman-wearing-red-dress-36516409.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Sexy-woman-wearing-red-dress-36516409-504x348.jpg"
                                alt="Portfolio 7"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 7</a></h4>
                    <h5 class="post_subtitle">Graphics, Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_10 odd category_4">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Big-green-alarm-clock-on-dark-44881654.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Big-green-alarm-clock-on-dark-44881654-504x348.jpg"
                                alt="Lorem Ipsum"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Lorem Ipsum</a></h4>
                    <h5 class="post_subtitle">Web</h5>
                </article>
                <article class="post portfolio_post portfolio_post_11 even category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Laying-retriever-44861077.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Laying-retriever-44861077-504x348.jpg"
                                alt="Portfolio 5"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 5</a></h4>
                    <h5 class="post_subtitle">Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_12 odd category_4">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Happy-Black-Woman-12039302.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Happy-Black-Woman-12039302-504x348.jpg"
                                alt="Portfolio 4"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio 4</a></h4>
                    <h5 class="post_subtitle">Web</h5>
                </article>
                <article class="post portfolio_post portfolio_post_13 even category_5">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Female-tennis-player-7140367.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Female-tennis-player-7140367-504x348.jpg"
                                alt="Portfolio item 3"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 3</a></h4>
                    <h5 class="post_subtitle">Graphics</h5>
                </article>
                <article class="post portfolio_post portfolio_post_14 odd category_6">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Freedom-happy-free-couple-in-31838090.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Freedom-happy-free-couple-in-31838090-504x348.jpg"
                                alt="Portfolio item 2"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 2</a></h4>
                    <h5 class="post_subtitle">Photo</h5>
                </article>
                <article class="post portfolio_post portfolio_post_15 even category_1 category_5">
                    <div class="post_pic portfolio_post_pic"><a class="w_hover img-link img-wrap"
                                                                href="images_post/bigstock-Close-up-image-of-an-office-wo-41874253-1024x682.jpg">
                            <span class="overlay"></span> <span class="link-icon"></span> <img
                                src="<?= base_url() ?>assets/images_post/bigstock-Close-up-image-of-an-office-wo-41874253-1024x682-504x348.jpg"
                                alt="Portfolio item 15"/> </a></div>
                    <h4 class="post_title"><a href="portfolio.html">Portfolio item 1</a></h4>
                    <h5 class="post_subtitle">Web, Graphics</h5>
                </article>
            </div>
            <div class="portfolio_iso_pages">
                <ul id="portfolio_iso_pages">
                </ul>
                <div id="portfolio_iso_pages_2"> Page <span id="portfolio_iso_pages_current">1</span> of <span
                        id="portfolio_iso_pages_total"></span></div>
            </div>
        </div>
    </div>
    <!-- .section_body -->
</section>
<!-- /PORTFOLIO -->

<!-- CONTACTS -->
<section class="section contact_section even" id="contact">
    <div class="section_header contact_section_header">
        <h2 class="section_title contact_section_title"><a href="#"><span class="icon icon-envelope-alt"></span><span
                    class="section_name">Contacts</span></a><span class="section_icon"></span></h2>
    </div>
    <div class="section_body contact_section_body">
        <div id="googlemap_data">
            <div id="sc_googlemap" style="width:100%;height:294px;" class="sc_googlemap"></div>
            <div class="add_info">
                <div class="profile_row header "> Contact info</div>
                <div class="profile_row address"><span class="th">Address</span><span class="td"></span></div>
                <div class="profile_row phone"><span class="th">Phone</span><span class="td"></span></div>
                <div class="profile_row email"><span class="th">Email</span><span class="td"></span></div>
                <div class="profile_row website"><span class="th">Website</span><span class="td"></span></div>
            </div>
        </div>
        <div class="sidebar contact_sidebar">
            <aside class="widget widget_qrcode_vcard" id="qrcode-vcard-widget-2">
                <h3 class="widget_title">VCARD</h3>

                <div class="widget_inner">
                    <div class="qrcode"></div>
                </div>
            </aside>
        </div>
        <div class="contact_form">
            <div class="contact_form_data">
                <div class="sc_contact_form">
                    <h3 class="title">Let's keep in touch</h3>

                    <form action="include/sendmail.php" method="post">
                        <div class="field">
                            <label class="required" for="sc_contact_form_username">Name</label>
                            <input type="text" name="username" id="sc_contact_form_username"/>
                        </div>
                        <div class="field">
                            <label class="required" for="sc_contact_form_email">Email</label>
                            <input type="text" name="email" id="sc_contact_form_email"/>
                        </div>
                        <div class="field message">
                            <label class="required" for="sc_contact_form_message">Your Message</label>
                            <textarea name="message" id="sc_contact_form_message"></textarea>
                        </div>
                        <div class="button"><a class="enter" href="#"><span>Submit</span></a></div>
                    </form>
                    <div class="result sc_infobox"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section_body -->
</section>
<!-- /CONTACT -->
</div>
<!-- #mainpage_accordion_area -->
</div>
<!-- #content -->
</div>
<!-- #primary -->
</div>