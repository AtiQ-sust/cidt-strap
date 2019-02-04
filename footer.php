<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
<div class="content">
</div>
<footer id="footer">
    <div class="container">
        <div class="row main-footer">
            <div class="columns three">
                <div class="footer-logo">
                    <h4>Kabir Securities Limited</h4>
                </div>
                <div class="contactnumber">+8801789 99 88 77
                    <br>+8801789 99 88 66</div>


                <ul class="social inline-list-style">
                    <li>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="http://facebook.com/groups/forum.ksl" class="facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </li>

                </ul>



                <p class="center-on-mobile"><a href="http://portal.kslbd.net/auth/register.aspx" class="button landing-acop" style="text-decoration: none;">Open an account</a>
                </p>

            </div>
            <div class="columns three">
                <ul class="list-style">
                    <h3><li class="nav-head">Company</li></h3>
                    <li><a href="/corporate-profile">Corporate Profile</a>
                    </li>
                    <li><a href="/achievements">Achievements</a>
                    </li>
                    <li><a href="/key-strengths">Key Strenghts</a>
                    </li>

                </ul>
            </div>
            <div class="columns three">
                <ul class="list-style">
                    <h3><li class="nav-head">Market</li></h3>
                    <li><a href="http://portal.kslbd.net/market/cse/">CSE Market Summary</a>
                    </li>
                    <li><a href="http://portal.kslbd.net/market/cse/currentMarketPrice.aspx">CSE Current Market Price</a>
                    </li>
                    <li><a href="http://portal.kslbd.net/market/dse/indexes.aspx">DSE Market Summary</a>
                    </li>
                    <li><a href="http://portal.kslbd.net/market/dse/currentMarketPrice.aspx">DSE Current Market Price</a>
                    </li>

                </ul>
            </div>
            <div class="columns three">
                <ul class="list-style">
                    <h3><li class="nav-head">Online Services</li></h3>
                    <li><a href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fauth%2fits%2fcredential.aspx">iTrade</a>
                    </li>
                    <li><a href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2fipo%2fsubscription%2fapplication.aspx">Online IPO Application</a>
                    </li>
                    <li><a href="http://portal.kslbd.net/auth/login.aspx?ReturnUrl=%2faccount%2fwithdrawal%2frequisition.aspx">Online Fund Requisition</a>
                    </li>

                </ul>

            </div>



            <div class="row">
                <div class="row static_links_footer" style="padding-left: 50px">

                    <ul>
                        <li>
                            <a href="http://dsebd.org/">DSE</a>
                        </li>
                        <li>
                            <a href="http://cse.com.bd/">CSE</a>
                        </li>
                        <li>
                            <a href="http://sec.gov.bd/">BSEC</a>
                        </li>
                        <li>
                            <a href="http://cdbl.com.bd/">CDBL</a>
                        </li>
                        <li>
                            <a href="/others/emerging-markets/derivatives/">Derivatives</a>
                        </li>
                        <li>
                            <a href="/others/emerging-markets/commodities/">Commodities</a>
                        </li>
                        <li>
                            <a href="http://www.secbd.org/LawbookIndex2007.htm">Rules and Regulations</a>
                        </li>
                        <li>
                            <a href="http://www.secbd.org/lawsupdated.html">Securities Laws</a>
                        </li>
                        <li>
                            <a href="http://www.acc.org.bd/resources/money-laundering-prevention-act-2012">Money Laundering Prevention Act,2012</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div style=" font-size:15px;background-color:#222;color:gray;text-align:center">
            <p style="font-family: georgia; font-size:12px; color:white;background-color:#101010; text-align:center">Contact our Customer Care at <mark style="color: rgb(56, 126, 209); background-color: #101010 ">01789 99 88 77</mark>, &nbsp;Or &nbsp;<mark style="color: rgb(56, 126, 209); background-color: #101010">01789 99 88 66</mark> for instant support services.</p>
            <!---		
							<p style="font-size:20px; color:orangered;background-color:#101010; text-align:center">Attention! Dear Visitors, We're having trouble with our land lines. T&T authority is trying their best to fix it up, however, it might take couple of days. We would request you to contact with us at the above mentioned two numbers. We appreciate in advance for bearing this with us. Thank you.</p>
							-->

            This Dynamic Website is Designed & Developed by: <a target="_blank" href="#">Chief ERP</a>
            <p class="copyright">&copy; KSLBD.<!--[Kabir Securities Limited Ltd.]
--> All rights reserved.</p>
        </div>
    </div>
</footer>




</div>
<!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
