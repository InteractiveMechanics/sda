<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>
<?php 	
    $page = 1;
    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $path_array = array_filter(explode('/', $path));
    $last_path = $path_array[count($path_array)];

    if (intval($last_path) > 1) {
        $page = intval($last_path);
    }    
?>

  <?php /* The loop */ ?>
  <?php 
	  $page_heading = get_field('page_heading');
	  $page_description = get_field('page_description');
	  $cover_image = get_field('cover_image');
	  $special_field_label = get_field('special_field_label');
	  $page_body = get_field('page_body');
  ?>
    
  <main>
	  
	  <div class="jumbotron-container clearfix">
      <div class="container">
        <div class="row jumbotron directory-jumbotron" style="background-image:url('<?php echo $cover_image; ?>');">
        </div>
      </div>
    </div> <!-- /jumbotron -->

    <section class="page-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading"><?php echo $page_heading; ?></h2>
          <p class="page-heading-text"><?php echo $page_description; ?></p>
        </div>
      </div>
      <form action="<?php the_permalink(); ?>" method="POST" id="services-form">
          <div class="row indented-container">
    
          <div class="col-sm-2 directory-filter-container">
            <label for="select-name" class="directory-label">Name:</label>
            <input type="text" name="record_name" class="form-control directory-input" placeholder="e.g. Jeanne Beck" value="<?php echo htmlentities( $_POST['record_name'] ); ?>">
          </div>
    
          <div class="col-sm-2 directory-filter-container">
            <label for="select-city" class="directory-label">City:</label>
            <input type="text" name="record_city" class="form-control directory-input" placeholder="e.g. Austin" value="<?php echo htmlentities( $_POST['record_city'] ); ?>">
          </div>
    
          <div class="col-sm-2 directory-filter-container">
            <label for='select-states' class="directory-label">State:</label>
            <select class="selectpicker" title="All States" name="record_state" id='select-states' data-size="5">
              <option value="">All States</option>
              <option value="ALABAMA">Alabama</option>
              <option value="ALASKA">Alaska</option>
              <option value="ARIZONA">Arizona</option>
              <option value="ARKANSAS">Arkansas</option>
              <option value="CALIFORNIA">California</option>
              <option value="COLORADO">Colorado</option>
              <option value="CONNECTICUT">Connecticut</option>
              <option value="DELAWARE">Delaware</option>
              <option value="DISTRICT OF COLUMBIA">District Of Columbia</option>
              <option value="FLORIDA">Florida</option>
              <option value="GEORGIA">Georgia</option>
              <option value="HAWAII">Hawaii</option>
              <option value="IDAHO">Idaho</option>
              <option value="ILLINOIS">Illinois</option>
              <option value="INDIANA">Indiana</option>
              <option value="IOWA">Iowa</option>
              <option value="KANSAS">Kansas</option>
              <option value="KENTUCKY">Kentucky</option>
              <option value="LOUISIANA">Louisiana</option>
              <option value="MAINE">Maine</option>
              <option value="MARYLAND">Maryland</option>
              <option value="MASSACHUSETTS">Massachusetts</option>
              <option value="MICHIGAN">Michigan</option>
              <option value="MINNESOTA">Minnesota</option>
              <option value="MISSISSIPPI">Mississippi</option>
              <option value="MISSOURI">Missouri</option>
              <option value="MONTANA">Montana</option>
              <option value="NEBRASKA">Nebraska</option>
              <option value="NEVADA">Nevada</option>
              <option value="NEW HAMPSHIRE">New Hampshire</option>
              <option value="NEW JERSEY">New Jersey</option>
              <option value="NEW MEXICO">New Mexico</option>
              <option value="NEW YORK">New York</option>
              <option value="NORTH CAROLINA">North Carolina</option>
              <option value="NORTH DAKOTA">North Dakota</option>
              <option value="OHIO">Ohio</option>
              <option value="OKLAHOMA">Oklahoma</option>
              <option value="OREGON">Oregon</option>
              <option value="PENNSYLVANIA">Pennsylvania</option>
              <option value="RHODE ISLAND">Rhode Island</option>
              <option value="SOUTH CAROLINA">South Carolina</option>
              <option value="SOUTH DAKOTA">South Dakota</option>
              <option value="TENNESSEE">Tennessee</option>
              <option value="TEXAS">Texas</option>
              <option value="UTAH">Utah</option>
              <option value="VERMONT">Vermont</option>
              <option value="VIRGINIA">Virginia</option>
              <option value="WASHINGTON">Washington</option>
              <option value="WEST VIRGINIA">West Virginia</option>
              <option value="WISCONSIN">Wisconsin</option>
              <option value="WYOMING">Wyoming</option>
            </select> 
          </div>
    
          <div class="col-sm-2 directory-filter-container">
            <label for="select-country" class="directory-label">Country:</label>
           <select class="selectpicker" id="select-country" name="record_country" title="All Countries" data-size="5">
                <option value="">All Countries</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
          </div>
    
          <div class="col-sm-2 directory-filter-container">
             <label for="select-media" class="directory-label">Category</label>
            
             <?php
    		         $field_key = "field_575b0ec5097ce";
    				 $field = get_field_object($field_key);
    		
    		if( $field )
    		{
    			echo '<select class="selectpicker" name="category" id="category" name="' . $field['key'] . '">';
                    echo '<option value="">All Categories</option>';
    				foreach( $field['choices'] as $k => $v )
    				{
    					echo '<option value="' . $k . '">' . $v . '</option>';
    				}
    			echo '</select>';
    		}
    		
    		?>
             
            </div>   
    
          <div class="col-sm-2 directory-filter-container">
            <button class="btn btn-default directory-submit" type="submit">Search <span class="right-arrow"></span></button>
          </div>
        </div>
      </form>
  </div>

  </section>
  
  	<section class="history-section" id="services-text">
    	<div class="container">
			<div class="row indented-container">
				<?php echo $page_body; ?>
	      	
      		</div>
    	</div>
  	</section>


  <section class="directory-table" id="services-table">
    <div class="container">
      <div class="row indented-container">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th>Category</th>
              <th>Contact</th>
            </tr>
          </thead>
          
          <!-- ACF REPEATER STARTS -->
          	<tbody>
	        
	        	<?php 
				    $args = array( 
                        'post_type' => 'sda_member_service', 
                        'posts_per_page' => 20,
                        'paged' => $page,
                        'meta_query'	=> array(
                            'relation'		=> 'AND'
                        )
                    );
                    $searchCriteria = $_POST;
                    if ( isset( $searchCriteria['record_name'] ) && !empty( $searchCriteria['record_name'] ) ) {
                        $args['meta_query'][] = array( 
                            'key'       => 'record_name',
                            'value'	  	=> $searchCriteria['record_name'],
                            'compare' 	=> 'LIKE', 
                        );
                    }
                    if ( isset( $searchCriteria['record_city'] ) && !empty( $searchCriteria['record_city'] ) ) {
                        $args['meta_query'][] = array( 
                            'key'       => 'record_city',
                            'value'	  	=> $searchCriteria['record_city'],
                            'compare' 	=> 'LIKE', 
                        );
                    }
                    if ( isset( $searchCriteria['record_state'] ) && !empty( $searchCriteria['record_state'] ) ) {
                        $args['meta_query'][] = array( 
                            'key'       => 'record_state',
                            'value'	  	=> $searchCriteria['record_state'],
                            'compare' 	=> 'LIKE', 
                        );
                    }
                    if ( isset( $searchCriteria['record_country'] ) && !empty( $searchCriteria['record_country'] ) ) {
                        $args['meta_query'][] = array( 
                            'key'       => 'record_country',
                            'value'	  	=> $searchCriteria['record_country'],
                            'compare' 	=> 'LIKE', 
                        );
                    }
                    if ( isset( $searchCriteria['category'] ) && !empty( $searchCriteria['category'] ) ) {
                        $args['meta_query'][] = array( 
                            'key'       => 'category',
                            'value'	  	=> $searchCriteria['category'],
                            'compare' 	=> 'LIKE', 
                        );
                    }

                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part('content-member_service', get_post_format());
                    endwhile;
				?>
                        
	                                
	        </tbody>
                   <!-- END ACF REPEATER --> 
          
        </table>
      </div>
    </div>


  </section>

  <div class="container">
      <div class='row pagination-container' id="services-pagination">
	      <nav>
              <ul class="pager">
                <?php if ($page > 1): ?>
                    <li><a href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php else: ?>
                    <li class="disabled"><a href="#">Previous</a></li>
                <?php endif; ?>
                
                <?php if ($page < $max_num_pages): ?>
                    <li><a href="?page=<?php echo $page + 1; ?>">Next</a></li>
                <?php else: ?>
                    <li class="disabled"><a href="#">Next</a></li>
                <?php endif; ?>
              </ul>
            </nav>
      </div>
  </div>

<script>
    document.querySelectorAll('#select-states option[value="<?php echo htmlentities( $_POST['record_state'] ); ?>"]')[0].setAttribute('selected','selected');
    document.querySelectorAll('#select-country option[value="<?php echo htmlentities( $_POST['record_country'] ); ?>"]')[0].setAttribute('selected','selected');
    document.querySelectorAll('#category option[value="<?php echo htmlentities( $_POST['category'] ); ?>"]')[0].setAttribute('selected','selected');
</script>
  

  </main>
  
 <?php get_footer(); ?>