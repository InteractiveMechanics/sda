<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post();
	  $page_heading = get_field('page_heading');
	  $page_description = get_field('page_description');
	  $cover_image = get_field('cover_image');
	  

  ?>
    
  <main>

  <div class="jumbotron-container clearfix">
    <div class="container">
      <div class="row jumbotron about-jumbotron" style="background-image:url('<?php echo $cover_image; ?>');">
      </div>
    </div>
  </div> <!-- /jumbotron-container -->
    
  <section class="page-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading"><?php echo $page_heading; ?></h2>
          <p class="page-heading-text"><?php echo $page_description; ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="history-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h3 class="section-heading">What's in a Name?</h3>
          <p>Legend suggests that Jack Lenor Larson, Keynote Speaker at the first Surface Design Association Conference in 1976, coined the surface design. "I don't like the term," Larson will tell you, preferring instead fabric embellishment to represent manipulations of textiles that go beyond woven constructions.</p>
          <p>Larson felt hte loom relegated fabric to uniformity and that surface designers are more interested in fabric as geography, which provides unlimited options for dimensional and structural enhancements, greater possibilities for opening interior spaces, and more opportunities for experimenting with color, texture, and design.</p>
          <div class="invisible-divider"></div>
        </div>
        <div class="col-sm-12 indented-container">
          <h3 class="section-heading">Our History</h3>
          <div class="history-img-container">
            <div class="history-img"></div>
            <p class="history-img-caption">Pompilai Buranabunpot, White Wave, 54" x  108", Screenprint on cotton using fiber reactive dye,  c. 1976</p>
          </div>
          <p>The 1970s in the United States and abroad heralded a renewed interest in craft techniques and materials for personal expression and aesthetic awareness. In textiles, this resurgence of interest sparked the creation of fiber programs in colleges and universities. The emphasis on weaving and other forms of fiber construction, however, overlooked the attention being paid to surface-oriented work among educators and artists in many parts of the country. </p>
          <p>To offset this gap in information and practice, Elsa Sreenivasam (University of Kansas) and Patricia Campbell (Kansas City Art Institute) organized the first national Surface Design Conference at the University of Kansas in Lawrence in 1976. The enthusiastic response--600 came when 200 were expected--affirmed the need for an organization to facilitate communication among artists, designers, scientists, students, and teachers. </p>
        </div>
        <div class="col-sm-9 indented-container">
          <p>Initial steps were taken to form an organization at this conference. In 1977, the Surface Design Association was founded to promote critical thinking about and education in surface design. </p>
          <p>In its 35 years of existence, SDA has reached several milestones that have expanded awareness of surface design and broadened its focus to include constructed textiles as well as surface techniques. Among these milestones are:
          </p>
          <h5 class="history-year">1976</h5>
          <p>Institution of the Surface Design Conference, which brings together world-acclaimed textile artists, materials experts, scholars, and educators to inform members and the general public about advances in all areas of textiles through presentations, demonstrations and panels, as well as gallery and museum exhibitions</p>

          <p>Publication of the Surface Design Journal as an 8-page, black-and-white newsletter that reported on the first conference, announced the formation of SDA, and gradually grew to a 76-page full-color magazine</p>

          <h5 class="history-year">1977</h5>
          <p>Incorporation of the Surface Design Association in Minnesota as a 501c non-profit organization</p>

          <h5 class="history-year">1987</h5>
          <p> Addition of a quarterly SDA Newsletter</p>

          <h5 class="history-year">1999</h5>
          <p>Launch of the SDA website to serve as a central resource for the surface design community, including information on SDA exhibitions, events, textile suppliers, and educational opportunities</p>

          <h5 class="history-year">2002</h5>
          <p>Establishment of the SDA Award of Excellence given by an exhibition judge or curator to honor an exceptional work in surface design</p>

          <h5 class="history-year">2004</h5>
          <p>  Establishment of the Small Event Grant to assist area reps present local events and exhibitions, and fund member projects</p>

          <h5 class="history-year">2006</h5>
          <p>Establishment of the Creative Promise Award for Student Excellence to provide career-building opportunities to SDA members</p>

          <h5 class="history-year">2008</h5>
          <p>Inauguration of collaborative regional conferences co-sponsored by SDA and Studio Art Quilt Associates (SAQA) </p>

          <p>Establishment of the Outstanding Student Award given by instructors to honor students’ textile art</p>

          <p>Launch of the SDA eNews digital publication</p>

        </div>
      </div>
    </div>
  </section>


  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>