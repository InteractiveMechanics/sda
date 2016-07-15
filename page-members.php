<?php
/**
 * Template Name: Members
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

require_once('neon.php');
get_header(); ?>

<?php 
	$cover_image = get_field('cover_image');
	
    $page = 1;
    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $path_array = array_filter(explode('/', $path));
    $last_path = $path_array[count($path_array)];

    if (intval($last_path) > 1) {
        $page = intval($last_path);
    }
	$neon = new Neon();
	
	$keys = array(
	  'orgId'=>'surfacedesign', 
	  'apiKey'=>'494f48e09c0f7818cc1511b7cefdf813'
	  ); 
	$neon->login($keys);
	
	$search = array( 
	  'method' => 'account/listAccounts',
	  'criteria' => array(
		  array('Account Type', 'EQUAL', 'Individual'),
		  array('Most Recent Membership Only', 'EQUAL', 'Yes'),
		  array('Membership Expiration Date', 'GREATER_THAN', date('Y-m-d')),
		  array('First Name', 'NOT_BLANK'),
		  array('Last Name', 'NOT_BLANK'), 	    
	  ),
	  'columns' => array(
	    'standardFields' => array('First Name', 'Last Name', 'City', 'State', 'Province', 'Country', 'URL', 'Twitter Page', 'Facebook Page', 'Account Login Name', 'Membership Expiration Date'),
        'customFields' => array(125),
	  ),
	  'page' => array(
	    'currentPage' => $page,
	    'pageSize' => 20,
	    'sortColumn' => 'Last Name',
	    'sortDirection' => 'ASC',
	  ),
    );

    $searchCF = array(
        'method' => 'common/listCustomFields',
        'component' => 'Account'
    );

    $searchCriteria = $_POST;
    if ( isset( $searchCriteria['firstName'] ) && !empty( $searchCriteria['firstName'] ) ) {
        $search['criteria'][] = array( 'First Name', 'EQUAL', $searchCriteria['firstName'] );
    }
    if ( isset( $searchCriteria['lastName'] ) && !empty( $searchCriteria['lastName'] ) ) {
        $search['criteria'][] = array( 'Last Name', 'EQUAL', $searchCriteria['lastName'] );
    }
    if ( isset( $searchCriteria['city'] ) && !empty( $searchCriteria['city'] ) ) {
        $search['criteria'][] = array( 'City', 'EQUAL', $searchCriteria['city'] );
    }
    if ( isset( $searchCriteria['state'] ) && !empty( $searchCriteria['state'] ) ) {
        $search['criteria'][] = array( 'State', 'EQUAL', $searchCriteria['state'] );
    }
    if ( isset( $searchCriteria['country'] ) && !empty( $searchCriteria['country'] ) ) {
        $search['criteria'][] = array( 'Country', 'EQUAL', $searchCriteria['country'] );
    }
    if ( isset( $searchCriteria['media'] ) && !empty( $searchCriteria['media'] ) ) {
        $search['criteria'][] = array( 125, 'EQUAL', $searchCriteria['media'] );
    }
        
    $result = $neon->search($search);
    $resultCF = $neon->search($searchCF);    
    $neon->go( array( 'method' => 'common/logout' ) );
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
          <h2 class="section-heading">Membership Directory</h2>
          <p class="page-heading-text"></p>
        </div>
      </div>
      <div class="row indented-container">
	  
	  <form action="<?php the_permalink(); ?>" method="POST" name="filters">
      
      <div class="col-sm-3 directory-filter-container">
        <label for="select-name" class="directory-label">Name:</label>
        <input type="text" class="form-control directory-input" name="firstName" placeholder="First" value="<?php echo htmlentities( $searchCriteria['firstName'] ); ?>">
        <input type="text" class="form-control directory-input" name="lastName" placeholder="Last" value="<?php echo htmlentities( $searchCriteria['lastName'] ); ?>">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for="select-city" class="directory-label">City:</label>
        <input type="text" class="form-control directory-input" name="city" placeholder="e.g. Austin" value="<?php echo htmlentities( $searchCriteria['city'] ); ?>">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for='select-states' class="directory-label">State:</label>
        <select class="selectpicker" title="All States" name="state" id='select-states' data-size="5">
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
       <select class="selectpicker" id="select-country" name="country" title="All Countries" data-size="5">
            <option value="">All Countries</option>
            <option value="United States">United States of America</option>
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
         <label for="select-media" class="directory-label">Artistic Medium</label>
         <!-- ACF REPEATER STARTS -->
         <select class="selectpicker" id="select-media" title="All Media" name="media" data-size="5">
           <option value="">All Media</option>
           <?php foreach ($resultCF['customFields']['customField'][0]['fieldOptions']['fieldOption'] as $option): ?>
              <option value="<?php echo $option['id']; ?>"><?php echo $option['name']; ?></option>
           <?php endforeach; ?>
         </select>
      </div>

      <div class="col-sm-1 directory-filter-container">
        <button class="btn btn-default directory-submit" type="submit">Search <span class="right-arrow"></span></button>
      </div>

    </div>
    </form>
  </div>

  </section>
  
   <section class="directory-table">
    <div class="container">
      <div class="row indented-container table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th>Artistic Medium</th>
              <th>Contact</th>
            </tr>
          </thead>
          
          
          <tbody>
	          	<?php foreach($result['searchResults'] as $value): ?>
		          	<tr>
			        	<td>
                            <?php if (get_user_by('login', $value['Account Login Name'])): ?>
                                <?php $user = get_user_by('login', $value['Account Login Name']); ?>
                                <a href="<?php echo get_author_posts_url($user->data->ID); ?>"><?php echo $value['First Name'] . " " . $value['Last Name']; ?></a>
                            <?php else: ?>
                                <?php echo $value['First Name'] . " "; ?><?php echo $value['Last Name']; ?>
                            <?php endif; ?>
                        </td>
						<td><?php if ($value['City']) { echo $value['City'] . ", "; } ?> <?php echo $value['State'] . " "; ?><?php echo $value['Province'] . " " ; ?><?php echo $value['Country']; ?></td>
						<td>
                            <?php $mediums = explode('|', $value['Artistic Medium']); ?>
                            <?php foreach ($mediums as $medium => $name) { echo $name; if (end($mediums) !== $name){ echo ', '; }} ?>
                        </td>
						<td>
							<ul class="social-list">
								
								<?php if ( $value['Email 1'] ): ?>

								<li class="social-icon-container">
									<a href="mailto:<?php echo $value['Email 1']; ?>" class="social-link">
                    	<svg version="1.1" class="social-icon" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<path d="M8.2,26.9c2.4,1.3,36.2,19.5,37.5,20.1c1.3,0.7,2.9,1,4.5,1s3.3-0.3,4.5-1c1.3-0.7,35.1-18.8,37.5-20.1
		c2.4-1.3,4.8-5.4,0.3-5.4H7.9C3.4,21.5,5.7,25.6,8.2,26.9z M93.3,36.9C90.5,38.3,56.4,56.2,54.7,57c-1.7,0.9-2.9,1-4.5,1
		s-2.8-0.1-4.5-1C44,56.2,9.9,38.3,7.1,36.9c-2-1-1.9,0.2-1.9,1.1c0,0.9,0,36.7,0,36.7c0,2.1,2.8,4.8,5,4.8h80.1c2.2,0,5-2.7,5-4.8
		c0,0,0-35.8,0-36.7C95.2,37.1,95.2,35.9,93.3,36.9z"/>
</g>
</svg>                    				</a>

								</li>
								<?php endif; ?>
								
								<?php if ( $value['URL'] ): ?>

								<li class="social-icon-container">
									<a href="<?php echo $value['URL']; ?>" class="social-link">
                    	
				                    	<svg version="1.1" id="website_icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
<g id="_x37_15-globe_x40_2x.png">
	<g>
		<path d="M30,2C14.5,2,2,14.5,2,30c0,15.5,12.5,28,28,28c15.5,0,28-12.5,28-28C58,14.5,45.5,2,30,2z M23.4,4.9
			c-2.4,2.2-4.4,5.6-5.9,9.7c-2.1-0.9-3.9-2-5.5-3.3C15.2,8.3,19.1,6,23.4,4.9z M10.6,12.7c1.8,1.5,3.9,2.7,6.2,3.7
			c-1.1,3.7-1.8,8-1.9,12.6H4C4.3,22.7,6.7,17.1,10.6,12.7z M4,31h11c0.1,4.5,0.8,8.8,1.9,12.6c-2.4,1-4.5,2.3-6.2,3.7
			C6.7,42.9,4.3,37.3,4,31z M12,48.7c1.5-1.3,3.4-2.4,5.5-3.3c1.5,4.1,3.5,7.5,5.9,9.7C19.1,54,15.2,51.7,12,48.7z M29,55.9
			c-4-0.6-7.5-4.9-9.7-11.2c2.9-1,6.2-1.6,9.7-1.7V55.9z M29,41c-3.7,0.1-7.2,0.7-10.3,1.8c-1-3.5-1.6-7.5-1.7-11.8h12V41z M29,29
			H17c0.1-4.3,0.7-8.3,1.7-11.8c3.1,1.1,6.6,1.7,10.3,1.8V29z M29,17c-3.5-0.1-6.8-0.7-9.7-1.7C21.5,9,25,4.7,29,4.1V17z M56,29H45
			c-0.1-4.5-0.8-8.8-1.9-12.6c2.4-1,4.5-2.3,6.2-3.7C53.3,17.1,55.7,22.7,56,29z M48,11.3c-1.5,1.3-3.4,2.4-5.5,3.3
			C41,10.4,39,7.1,36.6,4.9C40.9,6,44.8,8.3,48,11.3z M31,4.1c4,0.6,7.5,4.9,9.7,11.2c-2.9,1-6.2,1.6-9.7,1.7V4.1z M31,19
			c3.7-0.1,7.2-0.7,10.3-1.8c1,3.5,1.6,7.5,1.7,11.8H31V19z M31,31h12c-0.1,4.3-0.7,8.3-1.7,11.8c-3.1-1.1-6.6-1.7-10.3-1.8V31z
			 M31,55.9V43c3.5,0.1,6.8,0.7,9.7,1.7C38.5,51,35,55.3,31,55.9z M36.6,55.1c2.4-2.2,4.4-5.6,5.9-9.7c2.1,0.9,3.9,2,5.5,3.3
			C44.8,51.7,40.9,54,36.6,55.1z M49.4,47.3c-1.8-1.5-3.9-2.7-6.2-3.7c1.1-3.7,1.8-8,1.9-12.6h11C55.7,37.3,53.3,42.9,49.4,47.3z"/>
	</g>
</g>
</svg>

                    				</a>

								</li>
								<?php endif; ?>
								
								<?php if ( $value['Twitter Page'] ): ?>

								<li class="social-icon-container">
									<a href="http://www.twitter.com/<?php echo $value['Twitter Page']; ?>" class="social-link">
										<svg version="1.1" class="social-icon" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                     viewBox="0 0 106 84.7" enable-background="new 0 0 106 84.7" xml:space="preserve">
	                      <path d="M98.5,12.9c-3.4,1.5-7,2.5-10.8,3c3.9-2.3,6.9-6,8.3-10.4c-3.6,2.2-7.7,3.7-12,4.6c-3.4-3.7-8.3-6-13.8-6
	                    c-10.4,0-18.9,8.5-18.9,18.9c0,1.5,0.2,2.9,0.5,4.3C36.1,26.5,22.2,19,12.9,7.5c-1.6,2.8-2.6,6-2.6,9.5c0,6.5,3.3,12.3,8.4,15.7
	                    c-3.1-0.1-6-0.9-8.5-2.4c0,0.1,0,0.2,0,0.2c0,9.1,6.5,16.8,15.1,18.5c-1.6,0.4-3.2,0.7-5,0.7c-1.2,0-2.4-0.1-3.6-0.3
	                    c2.4,7.5,9.4,13,17.6,13.1C28,67.6,19.9,70.6,11,70.6c-1.5,0-3-0.1-4.5-0.3c8.4,5.4,18.3,8.5,28.9,8.5c34.7,0,53.7-28.8,53.7-53.7
	                    c0-0.8,0-1.6-0.1-2.4C92.8,20,96,16.7,98.5,12.9z"/>
	                    
						</svg>
                    	
				                    	
                    				</a>

								</li>
								<?php endif; ?>
								
								<?php if ( $value['Facebook Page'] ): ?>

								<li class="social-icon-container">
									<a href="http://www.facebook.com/<?php echo $value['Facebook Page']; ?>" class="social-link">
										  <svg version="1.1" id="fb-icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" 						y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<path d="M75.2,21.1H60.9c-1.7,0-3.6,2.2-3.6,5.2v10.3h17.9v14.7H57.3v44.1H40.5V51.3H25.2V36.6h15.3V28c0-12.4,8.6-22.5,20.4-22.5
						h14.3V21.1z"/>
						</svg>                    	
				                    	
                    				</a>

								</li>
								<?php endif; ?>
																
							</ul>
 							
						</td>
		          	</tr>
				<?php endforeach; ?>
	      </tbody>

		 </table>
      </div>
    </div>
    <nav>
      <ul class="pager">
        <?php if ($page > 1): ?>
            <li><a href="javascript: void(0);" onclick="document.forms['filters'].action = '<?php the_permalink(); echo $page - 1; ?>'; document.forms['filters'].submit();" class="previouspage"></a></li>
        <?php else: ?>
            <li class="disabled"><a href="javascript: void(0);" class="previouspage"></a></li>
        <?php endif; ?>
        
        <?php if ($page < $result['page']['totalPage']): ?>
            <li><a href="javascript: void(0);" onclick="document.forms['filters'].action = '<?php the_permalink(); echo $page + 1; ?>'; document.forms['filters'].submit();" class="nextpage"></a></li>
        <?php else: ?>
            <li class="disabled"><a href="javascript: void(0);" class="nextpage"></a></li>
        <?php endif; ?>
      </ul>
    </nav>

  </section>



	
</main>

<script>
    document.querySelectorAll('#select-states option[value="<?php echo htmlentities( $searchCriteria['state'] ); ?>"]')[0].setAttribute('selected','selected');
    document.querySelectorAll('#select-country option[value="<?php echo htmlentities( $searchCriteria['country'] ); ?>"]')[0].setAttribute('selected','selected');
    document.querySelectorAll('#select-media option[value="<?php echo htmlentities( $searchCriteria['media'] ); ?>"]')[0].setAttribute('selected','selected');
</script>



 
 

 <?php get_footer(); ?>