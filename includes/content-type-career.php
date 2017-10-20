

  <div class="grid-container">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12"><?php // pgthrottle_breadcrumbs(); ?></div>
        <div class="cell small-12 medium-8 large-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        echo '<div class="post-wrapper">';
        if ( is_front_page() && is_home() ) {

        	echo '<div class="entry-content">';
        		echo the_content();
        	echo '</div>';

         } elseif ( is_front_page()) {

        	echo '<div class="entry-content">';
         		echo the_content();
         	echo '</div>';

         } elseif ( is_home()) {

        	echo '<div class="entry-content">';
             echo the_content();
           echo '</div>';

         } else {

        	echo '<h1 class="entry-title">';
        		echo the_title();
        	echo '</h1><div class="entry-content">';
        		echo the_content();
        	echo '</div><div class="entry-meta callout small primary"><small>This page was last updated ';
        		echo the_date();
        	echo '</small></div>';
        	echo '</div>'; //post wrapper
         } endwhile; else :



        endif; wp_reset_query (); ?>
      </div>
      <div class="cell auto">
        <div class="career-wrap">
          <div class="callout">
          <p>Thank you for considering the Virginia Eye Institute as a prospective employer of choice in the Richmond area. We are complimented by your interest and look forward to talking with you. Virginia Eye Institute is an equal opportunity employer.</p>
        </div>
<h3>Contact Us</h3>
<p>If you enjoy working in a fast-paced environment where service excellence comes first, please complete the online appliaction listed below:</p>

<div class="button-group expanded">
<a class="button primary" href="/employment-application/" target="_blank" rel="noopener">Online Application</a>

<a class="button primary" href="/career/" target="_blank" rel="noopener">View Job Openings</a>
</div>

<div class="callout">For additional information, please contact:
  <hr>
<div class="h6">Chief Experience Officer
<address>Virginia Eye Institute
400 Westhampton Station
Richmond, Virginia 23226</address>
<strong>Fax:</strong> (804) 287.4210
	<strong>Phone:</strong> <a href="tel:8042874268">(804) 287.4268</a>
<strong>Email:</strong> <a href="mailto:resumes@vaeye.com">resumes@vaeye.com</a></div>
</div>
<div class="callout">
<h3>Benefits</h3>
In order to attract and retain the best people, we offer competitive benefits to our full-time associates, including:
<ul>
 	<li>Health Insurance</li>
 	<li>Dental Insurance</li>
 	<li>Life Insurance</li>
 	<li>Disability Insurance (STD &amp; LTD)</li>
 	<li>401k 100% Match to 6%</li>
 	<li>Profit Sharing Retirement</li>
 	<li>Profit Sharing Bonus</li>
 	<li>Virginia Credit Union</li>
 	<li>WellsFargo at Work</li>
 	<li>SunTrust at Work</li>
 	<li>BB&amp;T at Work Banking</li>
 	<li>Direct Deposit</li>
 	<li>Bereavement Pay</li>
 	<li>Sick Pay</li>
 	<li>Vacation pay</li>
 	<li>Holiday pay</li>
 	<li>Community Volunteer Opportunities</li>
 	<li>Associate Eyewear Discounts</li>
 	<li>Education Benefits</li>
 	<li>Discounted Membership to American Family Fitness</li>
 	<li>Walking Company Discount</li>
 	<li>Discounts at both Verizon and AT&amp;T</li>
 	<li>SmartMove</li>
 	<li>Free Parking</li>
</ul>
</div>
        </div>
        <?php get_sidebar(); ?>
      </div>

</div>

    </div>
