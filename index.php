<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part('templates/globalhero', 'none' ); ?>
<?php endif; ?>

<div class="xwrapper" id="wrapper-index">

    <div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

        <div class="no-class">

            <!-- Do the left sidebar check and opens the primary div -->
            <?php get_template_part( 'templates/globalleft-sidebar-check', 'none' ); ?>

            <main class="site-main" id="main">

                <!-- Zerodha Front Page Begins here-->
                <div class="landing-sections text-center landing-screen">

                    <img class="" src="/wp-content/uploads/2017/03/CoverPhoto-1024x461.jpg" alt="KSL Font Page Here" width="100%" />
                    <div class="mini-container">
                        <h2 class="landing-heading">Welcome to
Kabir Securities Limited</h2>
                        <h5 class="landing-subheading text-grey">Excellent platforms | Stock Broker | Stock Dealer</h5>

                        <!-- <a href="http://portal.kslbd.net/auth/register.aspx" class="button landing-acop">Open an account</a>-->
                        <div class="row">

                            <div class="col-sm-5">
                                <a href="http://www.acaml.com/" class="landing-press-logos"><img src="/wp-content/uploads/2017/03/Alliance.png" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="http://www.primefincap.com/" class="landing-press-logos"><img src="/wp-content/uploads/2017/03/Prime.png" alt="" />
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="http://idlc.com/" class="landing-press-logos"><img src="/wp-content/uploads/2017/03/IDLC.png" alt="" />
                                </a>
                            </div>

                        </div>
                        <h2 class="landing-heading">Watch CSE and DSE from the same click place</h2>
                        <h5 class="landing-subheading text-grey">The newly designed website facilitates visitors to watch CSE and DSE from a single site.</h5>
                        <p><a class="btn btn-lg btn-primary" href="http://portal.kslbd.net/market/cse/" role="button">CSE</a><a class="btn btn-lg btn-primary" href="http://portal.kslbd.net/market/dse/indexes.aspx" role="button">DSE</a>
                        </p>

                    </div>
                </div>

                <div class="landing-sections grey-back">
                    <div class="micromini-container landing-signup row">
                        <div class="eight columns">
                            <h3>With 42977 active clients, KSLBD stands as one of the biggest trading house accross <a href="http://portal.kslbd.net/market/dse/indexes.aspx" target="_blank">DSE</a>, <a href="http://portal.kslbd.net/market/cse/" target="_blank">CSE</a>, <a href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fits%2f" target="_blank">ITrade</a></h3>


                            <p>
                                </i> Awarded 2<sup>th</sup> position by CSE for the year 2010
                            </p>
                            <p>
                                </i> Awarded 3<sup>rd</sup> position by CSE for the year 2011
                            </p>
                            <p>
                                </i> Awarded 4<sup>th</sup> position by CSE for the year 2012
                            </p>
                            <p>
                                </i> Awarded 4<sup>th</sup> position by CSE for the year 2013
                            </p>
                            <p>
                                </i> Awarded by CSE in recognition of continuous support towards CSE
                            </p>
                        </div>
                        <div class="four columns text-center">
                            <form id="zlm_add_lead" action="http://portal.kslbd.net/auth/register.aspx">
                                <p class="error_message" id="open_lead_response"></p>
                                <input type="text" maxlength="40" id="user_name" name="user_name" placeholder="Name" required />
                                <input type="email" maxlength="40" id="user_email" name="user_email" placeholder="Email" required />
                                <input type="text" pattern="\d*" maxlength="15" id="user_mobile" name="user_mobile" placeholder="Mobile" required />
                                <input type="submit" class=button landing-acop " id="open_account_proceed_form " name="open_account_submit_1 " value="Open an account " />
            </form>
        </div>
    </div>
    <p class="message-callback text-center ">
        Account with this mobile is already registered with us. To login, click <a href="# ">here</a>
        <span>&#x274C;</span>
    </p>
</div>

    
<div class="landing-sections text-center landing-promo ">
        <img src="/wp-content/uploads/2017/03/Screenshot_1-1.jpg " alt="Kabir Securities Limited " /><p></p>
    <div class="kite-screen-container row text-center ">
                
            <div class="six columns ">
                <h3>Corporate Profile</h3>
                <p class="text-med text-grey-brown ">Kabir Securities Limited (popularly known as "KSL ") is one of the renowned brokerage houses in the capital market of Bangladesh. The company, being the 56th Member of the Chittagong Stock Exchange Limited, is operating its operation since 2005 with good reputation.</p>
                <p><a class="btn btn-lg btn-primary " href="/about/corporate-profile/ " role="button ">More on Corporate Profile</a></p>
            </div>
            <div class="six columns ">
                <h3>Achievements</h3>
                <p class="text-med text-grey-brown ">Kabir Securities Limited was incorporated as a private limited company on April 20, 2005 and commenced its operation on July, 2005. It's a corporate member of Chittagong Stock Exchange Limited. </p>
                <p><a class="btn btn-lg btn-primary " href="/about/achievements/ " role="button ">More on Achievements</a></p>
            </div>
               
    </div>
</div>
<div class="landing-sections grey-back ">
    <div class="micromini-container ">
        <div class="row v-align ">
            <div class="six columns text-center ">
                <span class="genericon genericon-home "></span>
            </div>
            <div class="six columns text-left center-on-mobile ">
                <h3>Customer Care</h3>
                <p class="text-grey-brown ">We're always here to help!
We make it easy to be served online, but if you do need help, our online experts are available at your disposal.</p>
            </div>
        </div>
        <div class="row v-align ">
            <div class="six columns text-center img-right-image ">
                <span class="genericon genericon-user "></span>
            </div>
            <div class="six columns text-right center-on-mobile ">
                <h3>Active community</h3>
                <p class="text-grey-brown ">Answers to all your questions on trading and markets on <a href="https://www.facebook.com/groups/forum.ksl ">Forum KSL</a>, our community powered question and answer platform.</p>
            </div>
        </div>
        <div class="row v-align ">
            <div class="six columns text-center ">
                <span class="genericon genericon-chat "></span>
            </div>
            <div class="six columns text-left center-on-mobile ">
                <h3>Outreach</h3>
                <p class="text-grey-brown "><a href="/ ">Blogs</a>,our official blog where we interact with the community and blog about all things KSL and our initiatives.</p>
            </div>
        </div>
        <div class="row v-align ">
            <div class="six columns text-center img-right-image ">
                <span class="genericon genericon-user "></span>
            </div>
            <div class="six columns text-right center-on-mobile ">
                <h3>Call Center</h3>
                <p class="text-grey-brown ">+88 01789 99 88 66 </br>+88 01789 99 88 77</br>
<span style="color:#387ed1 ">Email</span>
<a href="mailto:ksl@kslbd.net ">ksl@kslbd.net</a>
</p>
            </div>
        </div>
    </div>
</div>



<!-- About KSL section begins here-->
<div class="landing-sections landing-updates ">
    <div class="container testimonials text-center ">
        <div class="col-sm-12 text-center wowIn ">
                                <h1>People behind the Success</h1>
                                
                            </div>
                        </div>
                        <div class="row " style="padding:0px 25px; ">
                            <div class="col-sm-4 wowIn ">
                                <h3 class="y "><mark style="color: rgb(56, 126, 209); ">Chairman</mark></h3>
                                <p>
                                    <img src="/wp-content/uploads/2017/01/Chairman.jpg "  class="img-circle pull-right " width="25% "/>
                                We have a proud history in the capital market of Bangladesh having established our first operation nearly 10 years ago. Our priority always remains our clients, who we believe are at the heart of our existence. We tailor our services to suit local needs and desires and ensure that our clients are always satisfied with us. </p>
                                <p><a class="btn btn-lg btn-primary " href="/about/message-from-chairman/ " role="button ">Read More</a></p>
                            </div>
                            <div class="col-sm-4 wowIn ">
                                <h3 class="y "><mark style="color: rgb(56, 126, 209); ">Managing Director</mark></h3>
                                <p>
                                    
                                Kabir Securities Limited is a "by the client, for the client, with the client " company with a vision to "turn people into smart investors ". The journey of Kabir Securities Limited started nearly 10 years back. Since the commencement, the growth of Kabir Securities Limited has been sure and steady due to its strong focus on quality of service and systems optimization resulting in a satisfied and loyal client base.</p>
                                <p><a class="btn btn-lg btn-primary " href="http://portal.kslbd.net/company/about/messageFromMD.aspx " role="button ">Read More</a></p>
                            </div>
                            <div class="col-sm-4 wowIn ">
                                <h3 class="y "><mark style="color: rgb(56, 126, 209); ">Board</mark></h3>
                                <p>The Board of Directors of Kabir Securities Limited consists of four talented people. The board is chaired by Mohammed Alamgir Kabir, while Mohammad Zulfiqur Kabir is the Managing Director. Two other members of the board are directors.</p>
                                <p><a class="btn btn-lg btn-primary " href="/about/board-of-directors/ " role="button ">View More</a></p>
                            </div>

    </div>
</div>

<!--About KSL Section Ends here-->

<!--Our Products begins here-->
<div class="landing-sections grey-back ">
    <section id="services " class="feature-section ">
        <div class="row container ">
            <div class="col-sm-12 text-center wowIn ">
                                    <h1>Products and Services</h1>
                                    
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6 text-right wowIn ">
                                    <h3 class="update-cat "><mark style="color: rgb(56, 126, 209); background-color: #fafafb ">Products</mark></h3>
                                    <ul class="nostyle-list ">
                                            <h5><li class="news-title "><a href="/products/foreign-investment-ac/ ">Foreign Investment A/c</a></li></h5>
                                            <h5><li class="news-title "><a href="/products/local-investment/ ">Local Investment A/c</a></li></h5>
                                            <h5><li class="news-title "><a href="/products/nrb-investment-ac/ ">NRB Investment A/c</a></li></h5>
                                            <h5><li class="news-title "><a href="/products/required-documents/ ">Required Documents</a></li></h5>
                                    </ul>
                                </div>
                                <div class="col-sm-6 text-left wowIn ">
                                    <h3 class="update-cat "><mark style="color: rgb(56, 126, 209); background-color: #fafafb ">Services</mark></h3>
                                    <ul class="nostyle-list ">
                                            <h5><li class="news-title "><a href="/services/advisory/ ">Advisory</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/brokerage/ ">Brokerage</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/dp/ ">DP</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/eftbeftn/ ">EFT/BEFTN</a></li></h5>
                                            <h5><li class="news-title "><a href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fipo%2fprospectus%2fpaginate.aspx ">IPO Application</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/its ">ITS</a></li></h5>
                                            <h5><li class="news-title "><a href="http://ksl.pc/services/margin-loan/ ">Margin Loan</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/portfolio-management/ ">Portfolio Management</a></li></h5>
                                            <h5><li class="news-title "><a href="/services/unit-fund-trading/ ">Unit Fund Trading</a></li></h5>
                                    </ul>
                                </div>

        </div>
    </section>    
</div><!-- Zerodha Front Page styling ends here-->

<!-- News Update Section Begins here-->
<div class="landing-sections landing-updates ">
    <div class="row container ">
        <div class="columns four center-on-mobile ">
            <h2 class="button landing-acop ">
                MyKSL
            </h2>
            <ul class="nostyle-list ">
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="https://www.facebook.com/KSL056/?fref=ts">Latest Update</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="https://www.facebook.com/KSL056/posts/1325412827544179">IPO Subscription</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="/about/">About KSL</a></h5>
                </li>
            </ul>
        </div>
        <div class="columns four center-on-mobile ">
            <h2 class="button landing-acop ">
                DSE
            </h2>
            <ul class="nostyle-list ">
                <li>
                    <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://www.dsebd.org/hts.php">Holiday Calendar</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://www.sharenews24.com/">Latest Update</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://portal.kslbd.net/market/dse/newsToday.aspx ">Today's News</a></h5>
                </li>
            </ul>
        </div>
        <div class="columns four center-on-mobile ">
            <h2 class="button landing-acop ">
                CSE
            </h2>
            <ul class="nostyle-list ">
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://stockmarket-holidays.com/chittagong-stock-exchange-holidays/125/">Holiday Calendar</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://www.cse.com.bd/">Latest Buletin</a></h5>
                </li>
                <li>
                    <span class="date "><?php
echo "<br>" . date('Y-m-d') . "<br>";?></span>
                    <h5 class="news-title "><a href="http://portal.kslbd.net/market/cse/newsToday.aspx">Today's News</a></h5>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- iTrade Section Starts Here-->
<section id="iTrade " class="feature-section ">
    <div class="landing-sections grey-back ">
                        <div class="row ">
                            <div class="col-sm-12 text-center wowIn ">
                                <h1>iTrade</h1>
                                <h4><em>Internet Trading Service had never been so easy. Try it out!</em></h4>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-4 text-center wowIn ">
                                <h3><mark style="color: rgb(56, 126, 209); background-color: #fafafb ">Add iTrade Account</mark></h3>
                                <p>Add your CSE ITS accounts</p>
                                <p><a class="btn btn-lg btn-primary " href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fauth%2fits%2fcredential.aspx " role="button ">Add ITS Account</a></p>
                            </div>
                            <div class="col-sm-4 text-center wowIn ">
                                <h3><mark style="color: rgb(56, 126, 209); background-color: #fafafb ">iTrade</mark></h3>
                                <p>Start trading now</p>
                                <p><a class="btn btn-lg btn-primary " href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fits%2f " role="button ">Start iTrade</a></p>
                            </div>
                            <div class="col-sm-4 text-center wowIn ">
                                <h3><mark style="color: rgb(56, 126, 209); background-color: #fafafb ">ITS at CSE</mark></h3>
                                <p>You may also trade at CSE</p>
                                <p><a class="btn btn-lg btn-primary " target="_blank " href="https://www.bangladeshstockmarket.com " role="button ">ITS at CSE</a></p>
                            </div>
                        </div>
                        </div>
                    </section>

<!--iTrade Section ends here-->

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
