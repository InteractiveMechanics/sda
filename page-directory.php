<?php
/**
 * Template Name: Directory
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
	  $special_field_label = get_field('special_field_label');
	  

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
      <div class="row indented-container">

      <div class="col-sm-2 directory-filter-container">
        <label for="select-name" class="directory-label">Name:</label>
        <input type="text" class="form-control directory-input" placeholder="e.g. Jeanne Beck">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for="select-city" class="directory-label">City:</label>
        <input type="text" class="form-control directory-input" placeholder="e.g. Austin">
      </div>

      <div class="col-sm-2 directory-filter-container">
        <label for='select-states' class="directory-label">State:</label>
        <select class="selectpicker" title="All States" id='select-states'>
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
       <select class="selectpicker" id="select-country" title="All Countries">
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
         <label for="select-media" class="directory-label"><?php echo $special_field_label; ?></label>
         
         <!-- ACF REPEATER STARTS -->
         <?php if( have_rows('special_field_options') ): ?>
         <select class="selectpicker">
         <?php while( have_rows('special_field_options')): the_row();
	         $special_field_option = get_sub_field('special_field_option');
	     ?>
          <option><?php echo $special_field_option; ?></option>
          <?php endwhile; ?>
          </select>
          <?php endif; ?>
      </div>   

      <div class="col-sm-2 directory-filter-container">
        <button class="btn btn-default directory-submit" type="submit">Search <span class="right-arrow"></span></button>
      </div>

    </div>
  </div>

  </section>

  <section class="directory-table">
    <div class="container">
      <div class="row indented-container">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Location</th>
              <th><?php echo $special_field_label; ?></th>
              <th>Contact</th>
            </tr>
          </thead>
          
          <!-- ACF REPEATER STARTS -->
          <tbody>
	          <?php if( have_rows('directory_record') ): ?>
	          <?php while( have_rows('directory_record') ): the_row(); 
		          
		          $directory_name = get_sub_field('directory_name');
		          $directory_city = get_sub_field('directory_city');
		          $directory_state = get_sub_field('directory_state');
		          $directory_country = get_sub_field('directory_country');
		          $directory_special_field = get_sub_field('directory_special_field');
		          
	          ?>
            <tr>
               <td><a href=""><?php echo $directory_name; ?></a></td>
               <td><?php echo $directory_city; ?>, <?php echo $directory_state; ?> <?php echo $directory_country; ?></td>
               
               <!-- ACF NESTED SUBFIELD STARTS -->  
               <td>
	                <?php if ( have_rows('directory_special_field') ): ?>
	                <ul class="directory-special-field-list">
					<?php while( have_rows('directory_special_field') ): the_row(); ?>    
	               <li class="directory-special-field"><?php the_sub_field('special_content'); ?></li>
	               <?php endwhile; ?>
	                </ul>
	                <?php endif; ?>
               </td>
               <!-- END ACF NESTED SUBFIELD -->
               
               <td>
	              <ul class="social-list">
		            <?php if ( have_rows('twitter') ): ?>
		            <?php while ( have_rows('twitter') ): the_row(); ?>
                    <li class="social-icon-container"> 
                      <a href="https://twitter.com/<?php the_sub_field('twitter_slug'); ?>" class="social-link">
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
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
					<?php if ( have_rows('instagram') ): ?>
					<?php while ( have_rows('instagram') ): the_row(); ?>
                    <li class="social-icon-container">
                      <a href="https://www.instagram.com/<?php the_sub_field('instagram_slug'); ?>">
                        <svg version="1.1" id="instagram-icon" class="social-icon"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M76.3,50.5c0,14.4-11.6,26-26,26c-14.4,0-26-11.6-26-26c0-1.7,0.2-3.4,0.5-5H7.3V80c0,7.4,6,13.4,13.4,13.4h59.1
                        c7.4,0,13.4-6,13.4-13.4V45.5H75.8C76.1,47.1,76.3,48.8,76.3,50.5z M79.9,7.5H20.7c-7.4,0-13.4,6-13.4,13.4v14.6h21.8
                        c4.7-6.7,12.5-11,21.2-11c8.8,0,16.5,4.3,21.2,11h21.8V20.9C93.3,13.5,87.3,7.5,79.9,7.5z M86.4,24.1c0,1.3-1.1,2.4-2.4,2.4h-7.2
                        c-1.3,0-2.4-1.1-2.4-2.4v-7.2c0-1.3,1.1-2.4,2.4-2.4H84c1.3,0,2.4,1.1,2.4,2.4V24.1z M66.3,50.5c0-8.8-7.2-16-16-16
                        c-8.8,0-16,7.2-16,16s7.2,16,16,16C59.1,66.5,66.3,59.3,66.3,50.5z"/>
                        </svg>
                      </a>
                    </li>
                    <?php endwhile; ?>
					<?php endif; ?>
					
					<?php if ( have_rows('facebook') ): ?>
					<?php while ( have_rows('facebook') ): the_row(); ?>
                    <li class="social-icon-container">
                      <a href="https://www.facebook.com/<?php the_sub_field('facebook_slug'); ?>">
                        <svg version="1.1" id="instagram-icon" class="social-icon"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M76.3,50.5c0,14.4-11.6,26-26,26c-14.4,0-26-11.6-26-26c0-1.7,0.2-3.4,0.5-5H7.3V80c0,7.4,6,13.4,13.4,13.4h59.1
                        c7.4,0,13.4-6,13.4-13.4V45.5H75.8C76.1,47.1,76.3,48.8,76.3,50.5z M79.9,7.5H20.7c-7.4,0-13.4,6-13.4,13.4v14.6h21.8
                        c4.7-6.7,12.5-11,21.2-11c8.8,0,16.5,4.3,21.2,11h21.8V20.9C93.3,13.5,87.3,7.5,79.9,7.5z M86.4,24.1c0,1.3-1.1,2.4-2.4,2.4h-7.2
                        c-1.3,0-2.4-1.1-2.4-2.4v-7.2c0-1.3,1.1-2.4,2.4-2.4H84c1.3,0,2.4,1.1,2.4,2.4V24.1z M66.3,50.5c0-8.8-7.2-16-16-16
                        c-8.8,0-16,7.2-16,16s7.2,16,16,16C59.1,66.5,66.3,59.3,66.3,50.5z"/>
                        </svg>
                      </a>
                    </li>
                    <?php endwhile; ?>
					<?php endif; ?>
					
					<?php if ( have_rows('pinterest') ): ?>
					<?php while ( have_rows('pinterest') ): the_row(); ?>
                    <li class="social-icon-container">
                      <a href="https://www.facebook.com/<?php the_sub_field('pinterest_slug'); ?>">
                        <svg version="1.1" id="instagram-icon" class="social-icon"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M76.3,50.5c0,14.4-11.6,26-26,26c-14.4,0-26-11.6-26-26c0-1.7,0.2-3.4,0.5-5H7.3V80c0,7.4,6,13.4,13.4,13.4h59.1
                        c7.4,0,13.4-6,13.4-13.4V45.5H75.8C76.1,47.1,76.3,48.8,76.3,50.5z M79.9,7.5H20.7c-7.4,0-13.4,6-13.4,13.4v14.6h21.8
                        c4.7-6.7,12.5-11,21.2-11c8.8,0,16.5,4.3,21.2,11h21.8V20.9C93.3,13.5,87.3,7.5,79.9,7.5z M86.4,24.1c0,1.3-1.1,2.4-2.4,2.4h-7.2
                        c-1.3,0-2.4-1.1-2.4-2.4v-7.2c0-1.3,1.1-2.4,2.4-2.4H84c1.3,0,2.4,1.1,2.4,2.4V24.1z M66.3,50.5c0-8.8-7.2-16-16-16
                        c-8.8,0-16,7.2-16,16s7.2,16,16,16C59.1,66.5,66.3,59.3,66.3,50.5z"/>
                        </svg>
                      </a>
                    </li>
                    <?php endwhile; ?>
					<?php endif; ?>	
                 </ul>
               </td>
            </tr>
          </tbody>
          
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- END ACF REPEATER --> 
          
        </table>
      </div>
    </div>


  </section>

  <div class="container">
      <div class='row pagination-container'>
	      <?php wp_pagenavi(); ?>
      </div>
  </div>

  

  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>