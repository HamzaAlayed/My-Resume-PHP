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
 */
echo "<pre>";
//print_r($_latestPosts['_posts']);
echo "</pre>";
?>
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
    <?php
    $_posts=$_latestPosts['_posts'];
    for ($i=0;$i<count($_posts);$i++) {
        $_oddEv=($i%2==0)?'odd':'even';
        $_first=($i==0)?'first':'';
        $_icon=$_posts[$i]['_type']['_types'][0]['_icon'];
        $_typeId=$_posts[$i]['_type']['_types'][0]['_id'];
        $_date=$_posts[$i]['_lastEdit'];
        $_user=$_posts[$i]['_user']['_name'];
        $_userId=$_posts[$i]['_user']['_id'];
        $_cat=$_posts[$i]['_category']['categories'][0]['_name'];
        $_catId=$_posts[$i]['_category']['categories'][0]['_id'];
        $_title=$_posts[$i]['_title'];
        $_body=$_posts[$i]['_body'];
        $_head=$_posts[$i]['_head'];
        $_id=$_posts[$i]['_id'];
        $_commentsCount=$_posts[$i]['_commentsCount']['_count'];
        $_link=str_replace(' ', '-', $_title)."/".$_id;
        ?>
            <section
                class="section blog_section <?php echo $_oddEv." ".$_first;?>">
            <div class="section_header blog_section_header ">
                <h2 class="section_title blog_section_title">
                    <strong>
                        <span class="icon icon-<?php echo($_icon);?>"></span>
                        <span class="section_name"><?php echo($_date);?></span>
                    </strong>
                </h2>
                <div class="post-info">
                    <a href="author/<?php echo($_user);?>/<?php echo($_userId);?>"
                       class="post_author">
                        <span class="icon-user"></span>
                        <?php echo($_user);?>
                    </a>
                    <a href="post/<?php echo $_link?>"
                       class="comments_count">
                        <span class="icon-comment"></span>
                        <?php echo $_commentsCount?>
                    </a>
                    <span class="post_categories">
                        <span class="icon-align-left"></span>
                        <a href="category/<?php echo $_cat;?>/<?php echo $_catId;?>"
                           class="post_categories even first">
                            <?php echo($_cat);?>
                        </a>
                    </span>
                </div>
            </div>
            <div class="section_body blog_section_body">
                <article class="post <?php echo ($_typeId==5)?'format-link':''?>">
                    <h3 class="post_title">
                        <a href="post/<?php echo $_link?>">
                            <?php echo($_title);?>
                        </a>
                    </h3>
                    <?php

    if ($_typeId==2) {
                        $_video=explode('|-|', $_head);
                        ?>
                        <div class="video_container">
                            <div class="video_thumb"
                                 data-frame="<?php echo $_video[0]?>">
                                <span class="play_button"></span>
                                <img alt="<?php echo($_title);?>"
                                     src="<?php echo $_video[1]?>" />
                            </div>
                        </div>

                    <?php
    }
    if ($_typeId==3) {
                        ?>
        <audio src="<?php echo($_head);?>" controls
               type="audio/mp3" width="100%"
               height="60"></audio>
                    <?php
    }
    if ($_typeId==4) {
                        $_slider=explode('|-|', $_head);
                        ?>
                        <div class="slider_container">
                            <ul class="slides">
                            <?php
                                for ($s=0;$s<count($_slider);$s++) {
                                    ?>
                                    <li>
                                        <a href="post/<?php echo $_link?>"
                                           class="w_hover">
                                            <img src="<?php echo $_slider[$s]?>"
                                                 alt="<?php echo($_title);?>" />
                                            <span class="overlay"></span>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                    <?php
    }
    if ($_typeId==5) {
                        $_slider=explode('|-|', $_head);
                        ?>
        <a href="<?php echo $_head;?>" class="post_link">
            <span class="link_url"><?php echo $_head;?></span> </a>


                    <?php
                    }
    if ($_typeId==6) {
                        ?>
                    <div class="pic">
                        <a href="post/<?php echo $_link?>"
                           class="w_hover img-link img-wrap">
                            <img alt="<?php echo($_title);?>"
                                 src="<?php echo($_head);?>" />
                            <span class="overlay"></span>
                            <span class="link-icon"></span>
                        </a>
                    </div>
                    <?php
    }


                    ?>
                    <div class="text">
                        <?php echo($_body);?>
                        <div class="readmore">
                            <a href="post/<?php echo $_link?>"
                               class="more-link">
                                <span class="readmore">Read more</span>
                            </a></div>
                    </div>
                </article>
            </div>
        </section>
    <?php
    }
        ?>

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
            <?php
            $_posts=$_latestPosts['_posts'];
            for ($i=0;$i<count($_posts);$i++) {
    if ($i<3) {
                    $_user=$_posts[$i]['_user']['_name'];
                    $_date=$_posts[$i]['_lastEdit'];
                    $_title=$_posts[$i]['_title'];
                    $_id=$_posts[$i]['_id'];
                    $_link=str_replace(' ', '-', $_title)."/".$_id;
                    ?>
                    <li class="article">
                        <h4 class="title">
                            <a href="<?php echo $_link;?>">
                                <?php echo $_title;?>
                            </a>
                        </h4>
                        <ol class="icons">
                            <li class="post_date">
                                <span class="icon-time"></span>
                                <?php echo $_date;?>
                            </li>
                            <li class="post_author">
                                <span class="icon-user"></span>
                                <?php echo $_user;?>
                            </li>
                        </ol>
                    </li>
                <?php
    }
            }
            ?>
        </ul>
    </aside>
    <!-- /Recent Posts -->

    <!-- tags -->
    <aside class="widget widget_tag_cloud">
        <h3 class="widget_title">Tags</h3>
        <div class="tagcloud">
            <?php
            for ($i=0;$i<count($_tags['_tags']);$i++) {
                ?>
                <a href="blog/tag/<?php echo($_tags['_tags'][$i]);?>">
                    <?php echo($_tags['_tags'][$i]);?>
                </a>
            <?php
            }
            ?>
        </div>
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
                    <td colspan="3" id="prev">
                        <a href="#" title="View posts for July 2013">
                            &laquo; Jul
                        </a>
                    </td>
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