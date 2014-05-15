<?php
/**
 * File Footer.php
 *
 * PHP version 5
 *
 * @category Template
 *
 * @package  Footer
 *
 * @author   Hamza Alayed <me@hamzaalayed.com>
 *
 * @license  http://www.hamzaalayed.com Policy
 *
 * @link     http://www.hamzaalayed.com
 *
 * Created by PhpStorm.
 * Project : My-Resume-PHP.
 * User: Hamza Alayed
 * Created by PhpStorm.
 * Project : My-Resume-PHP.
 * User: Hamza Alayed
 * Date: 5/14/14
 * Time: 5:15 PM
 */ ?>
<div id="main"  class="right_sidebar">
<section id="profile" class="section profile_section odd first blog_page">
    <a href="../home" id="profile_page_link">
        <span class="icon-user icon"></span>
        <span class="label">Profile</span>
    </a>
    <div class="section_header profile_section_header">
        <div id="profile_header">
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
        </div>
    </div>
</section>
<section id="breadcrumbs" class="section breadcrumbs_section even">
    <div class="section_header breadcrumbs_section_header">
        <ul class="breadcrumbs">
            <li class="home"><a href="../home">Home</a></li>
            <li class="current">Blog</li>
        </ul>
    </div>
</section>
<div id="primary" class="content_area">
    <div id="content" class="site_content blog_content" role="main">
        <section class="section blog_section odd">
            <div class="section_header blog_section_header ">
                <h2 class="section_title blog_section_title">
                    <strong>
                        <span class="icon icon-pencil"></span>
                        <span class="section_name">Jul.04</span>
                    </strong>
                </h2>
                <div class="post-info">
                    <a href="author.html" class="post_author">
                        <span class="icon-user"></span>
                        admin
                    </a>
                    <a href="post-standart.html" class="comments_count">
                        <span class="icon-comment"></span>
                        0
                    </a>
                    <span class="post_categories">
                        <span class="icon-align-left"></span>
                        <a href="blog-category-arhive.html"
                           class="post_categories even first">
                            Post
                        </a>
                    </span>
                </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post ">
                    <h3 class="post_title">
                        <a href="post-standart.html">
                            Quisque odio eros
                        </a>
                    </h3>
                    <div class="pic">
                        <a href="post-standart.html"
                           class="w_hover img-link img-wrap">
                            <img alt="Quisque odio eros"
                                 src="images_post/girl.jpg" />
                            <span class="overlay"></span>
                            <span class="link-icon"></span>
                        </a>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam,
                            quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. </p>
                        <div class="readmore">
                            <a href="post-standart.html" class="more-link">
                                <span class="readmore">Read more</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section blog_section even">
            <div class="section_header blog_section_header gallery">
                <h2 class="section_title blog_section_title"><strong><span class="icon icon-camera"></span><span class="section_name">Jul.03</span></strong></h2>
                <div class="post-info"> <a href="author.html" class="post_author"><span class="icon-user"></span>admin</a> <a href="post-slider.html" class="comments_count"><span class="icon-comment"></span>0</a> <span class="post_categories"><span class="icon-align-left"></span><a href="blog-category-arhive.html" class="post_categories even first last">Slider</a></span> </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post ">
                    <h3 class="post_title"><a href="post-slider.html">Proin bibendum</a></h3>
                    <div class="slider_container">
                        <ul class="slides">
                            <li><a href="post-slider.html" class="w_hover"><img src="images_post/bigstock-Freedom-happy-free-couple-in-31838090.jpg" alt="" /><span class="overlay"></span></a></li>
                            <li><a href="post-slider.html" class="w_hover"><img src="images_post/bigstock-Smiling-girl-with-shopping-bag-36516358.jpg" alt="" /><span class="overlay"></span></a></li>
                            <li><a href="post-slider.html" class="w_hover"><img src="images_post/bigstock-Beautiful-young-woman-jumping-15095405.jpg" alt="" /><span class="overlay"></span></a></li>
                        </ul>
                    </div>
                    <div class="text">
                        <p>Pellentesque luctus urna quis tellus tempus ultrices. Aenean varius pretium nisl, scelerisque mattis nibh laoreet id. Suspendisse nec auctor dolor, ac auctor dolor. </p>
                        <div class="readmore"><a href="post-slider.html" class="more-link"><span class="readmore">Read more</span></a></div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section blog_section odd">
            <div class="section_header blog_section_header audio">
                <h2 class="section_title blog_section_title"><strong><span class="icon icon-music"></span><span class="section_name">Jul.02</span></strong></h2>
                <div class="post-info"> <a href="author.html" class="post_author"><span class="icon-user"></span>admin</a> <a href="post-audio.html" class="comments_count"><span class="icon-comment"></span>0</a> <span class="post_categories"><span class="icon-align-left"></span><a href="blog-category-arhive.html" class="post_categories even first last">Audio</a></span> </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post ">
                    <h3 class="post_title"><a href="post-audio.html">In mattis risus sed</a></h3>
                    <audio src="http://beautymind.webglogic.com/audio/AirReview-Landmarks-02-ChasingCorporate.mp3" controls type="audio/mp3" width="100%" height="60"></audio>
                </article>
            </div>
        </section>
        <section class="section blog_section even">
            <div class="section_header blog_section_header video">
                <h2 class="section_title blog_section_title"><strong><span class="icon icon-eye-open"></span><span class="section_name">Jul.01</span></strong></h2>
                <div class="post-info"> <a href="author.html" class="post_author"><span class="icon-user"></span>admin</a> <a href="post-video.html" class="comments_count"><span class="icon-comment"></span>0</a> <span class="post_categories"><span class="icon-align-left"></span><a href="blog-category-arhive.html" class="post_categories even first">Video</a>, <a href="http://shifthtml.themerex.net/blog-category-arhive.html/" class="post_categories odd last">Audio</a></span> </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post ">
                    <h3 class="post_title"><a href="post-video.html">Maecenas dignissim</a></h3>
                    <div class="video_container">
                        <div class="video_thumb" data-frame="http://youtube.com/embed/jxS8EUxmlx8?wmode=opaque"><span class="play_button"></span><img alt="Maecenas dignissim" src="images_post/bigstock-Sexy-woman-wearing-red-dress-36516409-1020x590.jpg" /></div>
                    </div>
                    <div class="text">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam suscipit tempor justo sit amet fringilla. Nunc mollis justo eu ullamcorper mattis. Phasellus congue at enim nec vulputate. Nam enim sem, viverra et purus ac, tempus bibendum diam. </p>
                        <div class="readmore"><a href="post-video.html" class="more-link"><span class="readmore">Read more</span></a></div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section blog_section odd">
            <div class="section_header blog_section_header link">
                <h2 class="section_title blog_section_title"><strong><span class="icon icon-link"></span><span class="section_name">Jun.25</span></strong></h2>
                <div class="post-info"> <a href="author.html" class="post_author"><span class="icon-user"></span>admin</a> <a href="post-link.html" class="comments_count"><span class="icon-comment"></span>0</a> <span class="post_categories"><span class="icon-align-left"></span><a href="blog-category-arhive.html" class="post_categories even first last">Links</a></span> </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post format-link">
                    <h3 class="post_title"><a href="post-link.html">Maecenas dignissim</a></h3>
                    <a href="http://themeforest.net/user/themerex" class="post_link"> <span class="link_url">http://themeforest.net/user/themerex</span> </a> </article>
            </div>
        </section>
        <section class="section blog_section odd last">
            <div class="section_header blog_section_header ">
                <h2 class="section_title blog_section_title"><strong><span class="icon icon-pencil"></span><span class="section_name">May.29</span></strong></h2>
                <div class="post-info"> <a class="post_author" href="author.html"><span class="icon-user"></span>admin</a> <a class="comments_count" href="post-text.html"><span class="icon-comment"></span>1</a> <span class="post_categories"><span class="icon-align-left"></span><a class="post_categories even first last" href="blog-category-arhive.html">Text</a></span> </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post">
                    <h3 class="post_title"><a href="post-text.html">Hello world!</a></h3>
                    <div class="text">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam suscipit tempor justo sit amet fringilla. Nunc mollis justo eu ullamcorper mattis. Phasellus congue at enim nec vulputate.</p>
                    </div>
                </article>
            </div>
        </section>
        <div id="nav_pages" class="nav_pages">
            <div class="prev_first"></div>
            <a href="blog-category-arhive.html" class="next">Next</a>
            <div class="pages">
                <ul>
                    <li class="current">
                        <a href="blog-category-arhive.html" title="">1</a>
                    </li>
                    <li><a href="blog-category-arhive.html" title="2">2</a></li>
                    <li><a href="blog-category-arhive.html" title="3">3</a></li>
                    <li><a href="blog-category-arhive.html" title="4">4</a></li>
                    <li><a href="blog-category-arhive.html" title="5">5</a></li>
                </ul>
            </div>
            <div class="page_x_of_y">Page <span>1</span> of <span>5</span></div>
        </div>
    </div>
    <!-- #content -->
</div>
<!-- #primary -->

<div id="secondary"
     class="widget_area sidebar_blog right_sidebar sidebar-blog"
     role="complementary">
    <!-- Categories -->
    <aside class="widget widget_categories">
        <h3 class="widget_title">Categories</h3>
        <ul>
            <?php

            $_categories=$_categories['categories'];
            for ($i=0;$i<count($_categories);$i++) {
                $link=$_categories[$i]['_name'].'/'.$_categories[$i]['_id'];

                ?>
                <li class="cat-item">
                    <a href="category/<?php echo $link ?>"
                       title="View all posts filed under Slider">
                        <?php echo $_categories[$i]['_name']; ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <!-- /Categories -->
    <!-- Types -->
    <aside class="widget widget_categories">
        <h3 class="widget_title">Types</h3>
        <ul>
            <?php

            $_types=$_types['_types'];
            for ($i=0;$i<count($_types);$i++) {
                $link=$_types[$i]['_name'].'/'.$_types[$i]['_id'];

                ?>
                <li class="cat-item">
                    <a href="type/<?php echo $link ?>"
                       title="View all posts filed under Slider">
                        <?php echo $_types[$i]['_name']; ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <!-- /Types -->

    <!-- Recent Posts -->
    <aside class="widget widget_themerex_recent_posts">
        <h3 class="widget_title">Recent Posts</h3>
        <ul>
            <li class="article">
                <h4 class="title"><a href="post-link.html">Quisque odio eros</a></h4>
                <ol class="icons">
                    <li class="post_date"><span class="icon-time"></span>Jul.04</li>
                    <li class="post_author"><span class="icon-user"></span>admin</li>
                </ol>
            </li>
            <li class="article">
                <h4 class="title"><a href="post-slider.html">Proin bibendum</a></h4>
                <ol class="icons">
                    <li class="post_date"><span class="icon-time"></span>Jul.03</li>
                    <li class="post_author"><span class="icon-user"></span>admin</li>
                </ol>
            </li>
            <li class="article">
                <h4 class="title"><a href="post-standart.html">In mattis risus sed</a></h4>
                <ol class="icons">
                    <li class="post_date"><span class="icon-time"></span>Jul.02</li>
                    <li class="post_author"><span class="icon-user"></span>admin</li>
                </ol>
            </li>
        </ul>
    </aside>
    <!-- /Recent Posts -->

    <!-- tags -->
    <aside class="widget widget_tag_cloud">
        <h3 class="widget_title">Tags</h3>
        <div class="tagcloud"> <a href="blog-category-arhive.html">Design</a> <a href="blog-category-arhive.html">Image</a> <a href="blog-category-arhive.html">Slider</a> <a href="blog-category-arhive.html">Video</a> <a href="blog-category-arhive.html">Audio</a> </div>
    </aside>
    <!-- /tags -->

    <!-- Calendar -->
    <aside class="widget widget_calendar">
        <div id="calendar_wrap">
            <table id="cms-calendar">
                <caption>
                    October 2013
                </caption>
                <thead>
                <tr>
                    <th scope="col" title="Monday">M</th>
                    <th scope="col" title="Tuesday">T</th>
                    <th scope="col" title="Wednesday">W</th>
                    <th scope="col" title="Thursday">T</th>
                    <th scope="col" title="Friday">F</th>
                    <th scope="col" title="Saturday">S</th>
                    <th scope="col" title="Sunday">S</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="3" id="prev"><a href="#" title="View posts for July 2013">&laquo; Jul</a></td>
                    <td class="pad">&nbsp;</td>
                    <td colspan="3" id="next" class="pad">&nbsp;</td>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td colspan="1" class="pad">&nbsp;</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td id="today">18</td>
                    <td>19</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td class="pad" colspan="3">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </aside>
    <!-- /Calendar -->

    <!-- Recent Comments -->
    <aside class="widget widget_themerex_recent_comments">
        <h3 class="widget_title">Recent Comments</h3>
        <ul>
            <li class="articleeven first"> <span class="author"><a href="author.html">admin</a></span>: <span class="comment">comment, just log in and view the post's...</span>
                <ol class="icons">
                    <li class="post_date"><span class="icon-time"></span>108 days ago</li>
                </ol>
            </li>
            <li class="articleodd"> <span class="author"><a href="author.html">Mr WordPress</a></span>: <span class="comment">Hi, this is a comment.
            To delete a comment,...</span>
                <ol class="icons">
                    <li class="post_date"><span class="icon-time"></span>141 days ago</li>
                </ol>
            </li>
        </ul>
    </aside>
    <!-- /Recent Comments -->

    <!-- Archives -->
    <aside  class="widget widget_archive">
        <h3 class="widget_title">Archives</h3>
        <ul>
            <li><a href="blog-category-arhive.html" title="July 2013">July 2013</a></li>
            <li><a href="blog-category-arhive.html" title="June 2013">June 2013</a></li>
            <li><a href="blog-category-arhive.html" title="May 2013">May 2013</a></li>
        </ul>
    </aside>
    <!-- /Archives -->

    <aside class="widget wpspace_twitter">
        <h3 class="widget_title">Twitter feed</h3>
        <ul class="widget_twitter">
            <li><a href="https://twitter.com/wpspacethemes">@wpspacethemes</a> How can our bank can get the corrected Name of the Receiver for our account, since it has not been specified correctly?
                <div class="date">66 days ago</div>
            </li>
            <li class="last"><a href="https://twitter.com/wpspacethemes">@wpspacethemes</a> Check out this great <a href="https://twitter.com/">#themeforest</a> item 'PrimeTime - Clean, Responsive WP Magazine'
                <div class="date">119 days ago</div>
            </li>
        </ul>
    </aside>

    <!-- Meta -->
    <aside class="widget widget_meta">
        <h3 class="widget_title">Meta</h3>
        <ul>
            <li><a href="#" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li><a href="#" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            <li><a href="#" title="ThemeForest">ThemeForest</a></li>
        </ul>
    </aside>
    <!-- /Meta -->
</div>
</div>