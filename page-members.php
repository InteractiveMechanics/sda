<?php
/**
 * Template Name: Members
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>

<?php 
	require_once('neon.php');
	
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
		  array('Membership', 'EQUAL', 'Member'),
		  array('Membership Status', 'EQUAL', 'SUCCEED'),
		  array('First Name', 'NOT_BLANK'),
		  array('Last Name', 'NOT_BLANK'), 	    
	  ),
	  'columns' => array(
	    'standardFields' => array('First Name', 'Last Name', 'City', 'State', 'Province', 'Country', 'Email 1', 'URL', 'Twitter Page', 'Facebook Page')
	  ),
	  'page' => array(
	    'currentPage' => 1,
	    'pageSize' => 20,
	    'sortColumn' => 'Last Name',
	    'sortDirection' => 'ASC',
	  ),
    );
    
    $arguments = array(
        'lastName' => FILTER_SANITIZE_SPECIAL_CHARS,
        'city'  => FILTER_SANITIZE_SPECIAL_CHARS,
        'state' => FILTER_SANITIZE_SPECIAL_CHARS,
        'country' => FILTER_SANITIZE_SPECIAL_CHARS,
    );
    $searchCriteria = $_POST;
    
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
    
    var_dump($search);
    
    $result = $neon->search($search);    
    $neon->go( array( 'method' => 'common/logout' ) );


?>

<main>
	
	  <div class="jumbotron-container clearfix">
      <div class="container">
        <div class="row jumbotron directory-jumbotron">
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
	  
	  <form method="POST">
      
      <div class="col-sm-2 directory-filter-container">
        <label for="select-name" class="directory-label">Name:</label>
        <input type="text" class="form-control directory-input" name="lastName" placeholder="e.g. Jeanne Beck" value="<?php echo htmlentities( $searchCriteria['lastName'] ); ?>">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for="select-city" class="directory-label">City:</label>
        <input type="text" class="form-control directory-input" name="city" placeholder="e.g. Austin" value="<?php echo htmlentities( $searchCriteria['city'] ); ?>">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for='select-states' class="directory-label">State:</label>
        <select class="selectpicker" title="All States" name="state" id='select-states' value="<?php echo htmlentities( $searchCriteria['state'] ); ?>">
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select> 
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for="select-country" class="directory-label">Country:</label>
       <select class="selectpicker" id="select-country" name="country" title="All Countries" value="<?php echo htmlentities( $searchCriteria['country'] ); ?>">
        <option value="AF">Afghanistan</option>
        <option value="AX">Åland Islands</option>
        <option value="AL">Albania</option>
        <option value="DZ">Algeria</option>
        <option value="AS">American Samoa</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antarctica</option>
        <option value="AG">Antigua and Barbuda</option>
        <option value="AR">Argentina</option>
        <option value="AM">Armenia</option>
        <option value="AW">Aruba</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="AZ">Azerbaijan</option>
        <option value="BS">Bahamas</option>
        <option value="BH">Bahrain</option>
        <option value="BD">Bangladesh</option>
        <option value="BB">Barbados</option>
        <option value="BY">Belarus</option>
        <option value="BE">Belgium</option>
        <option value="BZ">Belize</option>
        <option value="BJ">Benin</option>
        <option value="BM">Bermuda</option>
        <option value="BT">Bhutan</option>
        <option value="BO">Bolivia, Plurinational State of</option>
        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
        <option value="BA">Bosnia and Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BV">Bouvet Island</option>
        <option value="BR">Brazil</option>
        <option value="IO">British Indian Ocean Territory</option>
        <option value="BN">Brunei Darussalam</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="KH">Cambodia</option>
        <option value="CM">Cameroon</option>
        <option value="CA">Canada</option>
        <option value="CV">Cape Verde</option>
        <option value="KY">Cayman Islands</option>
        <option value="CF">Central African Republic</option>
        <option value="TD">Chad</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CX">Christmas Island</option>
        <option value="CC">Cocos (Keeling) Islands</option>
        <option value="CO">Colombia</option>
        <option value="KM">Comoros</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, the Democratic Republic of the</option>
        <option value="CK">Cook Islands</option>
        <option value="CR">Costa Rica</option>
        <option value="CI">Côte d'Ivoire</option>
        <option value="HR">Croatia</option>
        <option value="CU">Cuba</option>
        <option value="CW">Curaçao</option>
        <option value="CY">Cyprus</option>
        <option value="CZ">Czech Republic</option>
        <option value="DK">Denmark</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="DO">Dominican Republic</option>
        <option value="EC">Ecuador</option>
        <option value="EG">Egypt</option>
        <option value="SV">El Salvador</option>
        <option value="GQ">Equatorial Guinea</option>
        <option value="ER">Eritrea</option>
        <option value="EE">Estonia</option>
        <option value="ET">Ethiopia</option>
        <option value="FK">Falkland Islands (Malvinas)</option>
        <option value="FO">Faroe Islands</option>
        <option value="FJ">Fiji</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
        <option value="GF">French Guiana</option>
        <option value="PF">French Polynesia</option>
        <option value="TF">French Southern Territories</option>
        <option value="GA">Gabon</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="DE">Germany</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GR">Greece</option>
        <option value="GL">Greenland</option>
        <option value="GD">Grenada</option>
        <option value="GP">Guadeloupe</option>
        <option value="GU">Guam</option>
        <option value="GT">Guatemala</option>
        <option value="GG">Guernsey</option>
        <option value="GN">Guinea</option>
        <option value="GW">Guinea-Bissau</option>
        <option value="GY">Guyana</option>
        <option value="HT">Haiti</option>
        <option value="HM">Heard Island and McDonald Islands</option>
        <option value="VA">Holy See (Vatican City State)</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IR">Iran, Islamic Republic of</option>
        <option value="IQ">Iraq</option>
        <option value="IE">Ireland</option>
        <option value="IM">Isle of Man</option>
        <option value="IL">Israel</option>
        <option value="IT">Italy</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japan</option>
        <option value="JE">Jersey</option>
        <option value="JO">Jordan</option>
        <option value="KZ">Kazakhstan</option>
        <option value="KE">Kenya</option>
        <option value="KI">Kiribati</option>
        <option value="KP">Korea, Democratic People's Republic of</option>
        <option value="KR">Korea, Republic of</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LA">Lao People's Democratic Republic</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macao</option>
        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
        <option value="MG">Madagascar</option>
        <option value="MW">Malawi</option>
        <option value="MY">Malaysia</option>
        <option value="MV">Maldives</option>
        <option value="ML">Mali</option>
        <option value="MT">Malta</option>
        <option value="MH">Marshall Islands</option>
        <option value="MQ">Martinique</option>
        <option value="MR">Mauritania</option>
        <option value="MU">Mauritius</option>
        <option value="YT">Mayotte</option>
        <option value="MX">Mexico</option>
        <option value="FM">Micronesia, Federated States of</option>
        <option value="MD">Moldova, Republic of</option>
        <option value="MC">Monaco</option>
        <option value="MN">Mongolia</option>
        <option value="ME">Montenegro</option>
        <option value="MS">Montserrat</option>
        <option value="MA">Morocco</option>
        <option value="MZ">Mozambique</option>
        <option value="MM">Myanmar</option>
        <option value="NA">Namibia</option>
        <option value="NR">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="NL">Netherlands</option>
        <option value="NC">New Caledonia</option>
        <option value="NZ">New Zealand</option>
        <option value="NI">Nicaragua</option>
        <option value="NE">Niger</option>
        <option value="NG">Nigeria</option>
        <option value="NU">Niue</option>
        <option value="NF">Norfolk Island</option>
        <option value="MP">Northern Mariana Islands</option>
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau</option>
        <option value="PS">Palestinian Territory, Occupied</option>
        <option value="PA">Panama</option>
        <option value="PG">Papua New Guinea</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PN">Pitcairn</option>
        <option value="PL">Poland</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="RE">Réunion</option>
        <option value="RO">Romania</option>
        <option value="RU">Russian Federation</option>
        <option value="RW">Rwanda</option>
        <option value="BL">Saint Barthélemy</option>
        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
        <option value="KN">Saint Kitts and Nevis</option>
        <option value="LC">Saint Lucia</option>
        <option value="MF">Saint Martin (French part)</option>
        <option value="PM">Saint Pierre and Miquelon</option>
        <option value="VC">Saint Vincent and the Grenadines</option>
        <option value="WS">Samoa</option>
        <option value="SM">San Marino</option>
        <option value="ST">Sao Tome and Principe</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SX">Sint Maarten (Dutch part)</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="SO">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="GS">South Georgia and the South Sandwich Islands</option>
        <option value="SS">South Sudan</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SJ">Svalbard and Jan Mayen</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syrian Arab Republic</option>
        <option value="TW">Taiwan, Province of China</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania, United Republic of</option>
        <option value="TH">Thailand</option>
        <option value="TL">Timor-Leste</option>
        <option value="TG">Togo</option>
        <option value="TK">Tokelau</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad and Tobago</option>
        <option value="TN">Tunisia</option>
        <option value="TR">Turkey</option>
        <option value="TM">Turkmenistan</option>
        <option value="TC">Turks and Caicos Islands</option>
        <option value="TV">Tuvalu</option>
        <option value="UG">Uganda</option>
        <option value="UA">Ukraine</option>
        <option value="AE">United Arab Emirates</option>
        <option value="GB">United Kingdom</option>
        <option value="US">United States</option>
        <option value="UM">United States Minor Outlying Islands</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela, Bolivarian Republic of</option>
        <option value="VN">Viet Nam</option>
        <option value="VG">Virgin Islands, British</option>
        <option value="VI">Virgin Islands, U.S.</option>
        <option value="WF">Wallis and Futuna</option>
        <option value="EH">Western Sahara</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
        </select>
      </div>

      <div class="col-sm-2 directory-filter-container">
         <label for="select-media" class="directory-label">Media</label>
         
         <!-- ACF REPEATER STARTS -->
         <select class="selectpicker" id="select-media">
           <option>Option 1</option>
           <option>Option 2</option>
           <option>Option 3</option>
           <option>Option 4</option>
         </select>
      </div>   

      <div class="col-sm-2 directory-filter-container">
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
              <th>Media</th>
              <th>Contact</th>
            </tr>
          </thead>
          
          
          <tbody>
	          	<?php foreach($result['searchResults'] as $value): ?>
		          	<tr>
			        	<td><a href=""><?php echo $value['First Name'] . " "; ?><?php echo $value['Last Name']; ?></a></td>
						<td><?php echo $value['City'] . ", "; ?> <?php echo $value['State'] . " "; ?><?php echo $value['Province'] . " " ; ?><?php echo $value['Country']; ?></td>
						<td></td>
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


  </section>



	
</main>





 
 

 <?php get_footer(); ?>