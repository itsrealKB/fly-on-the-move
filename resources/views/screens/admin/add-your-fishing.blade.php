@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <main>
        <form id="signUpForm" action="#!">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="step">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your Fishing Operations <span class="stepIndicator">Step 1/2</span>
                                        </h2>
                                        <p>THIS IS WHERE YOU CREATE YOUR PROFIL! ALL INFORMATION PROVIDED WILL BE THE
                                            KEY TO MAKING YOUR UNIQUE PROFILE STRONGER AIMING AT YOUR FUTURE GUESTS.</p>
                                    </div>
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>General Information</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">

                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Name of your operation *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Contact Name</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Phone Number</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Email</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Whatsapp/Telegram</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Site Url</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Facebook Page</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Instagram Page</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Type of Operation *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Guide Serivce">Guide Serivce</option>
                                                    <option value="Lodging">Lodging</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Total capacity: <i class="fa-solid fa-question"></i> Pax
                                                    </h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="" id="sad">
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>General Description * <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                            <input type="file">
                                            <textarea name="Cancellation &amp; Refund Policy" id="" placeholder="Your chance to describe the location, architecture and other attractions."></textarea>

                                            </div>
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Spoken Languages *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="English"
                                                        id="english-id">
                                                    <label for="english-id">English</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="French" id="french-id">
                                                    <label for="french-id">French</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="German" id="german-id">
                                                    <label for="german-id">German</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="Italian"
                                                        id="italian-id">
                                                    <label for="italian-id">Italian</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="Portuguese"
                                                        id="portuguese-id">
                                                    <label for="portuguese-id">Portuguese</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="Russian"
                                                        id="russion-id">
                                                    <label for="russion-id">Russian</label>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" placeholder="" name="Spanish"
                                                        id="spanish-id">
                                                    <label for="spanish-id">Spanish</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-chart-area">
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Location Information</h3>
                                            <button>Add Location from Map</button>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Continent *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select name="addressCountry" class="form-select"
                                                    aria-label="Default select example">
                                                    <option value="Africa">Africa</option>
                                                    <option value="Asia">Asia</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="North America">North America</option>
                                                    <option value="Oceania">Oceania</option>
                                                    <option value="South America">South America</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Country *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select id="country" name="country" class="form-select"
                                                    aria-label="Default select example">
                                                    <option disabled selected>Select Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                                        Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The
                                                        Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                        (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                        Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                        State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                    </option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea,
                                                        Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">
                                                        Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian
                                                        Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                                        The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                                                    <option value="South Georgia and The South Sandwich Islands">South
                                                        Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United
                                                        Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States
                                                        Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British
                                                    </option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>State *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Select State</option>
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
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Closest City</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Closest City</option>
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
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Closest Airport Hub</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Closest Airport Hub</option>
                                                    <option value="Ahmadpur Sial">Ahmadpur Sial</option>
                                                    <option value="Ahmedpur East">Ahmedpur East</option>
                                                    <option value="Alipur Chatha">Alipur Chatha</option>
                                                    <option value="Arifwala">Arifwala</option>
                                                    <option value="Attock Tehsil">Attock Tehsil</option>
                                                    <option value="Baddomalhi">Baddomalhi</option>
                                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                                    <option value="Bahawalpur">Bahawalpur</option>
                                                    <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
                                                    <option value="Basirpur">Basirpur</option>
                                                    <option value="Basti Dosa">Basti Dosa</option>
                                                    <option value="Begowala">Begowala</option>
                                                    <option value="Bhakkar">Bhakkar</option>
                                                    <option value="Bhalwal">Bhalwal</option>
                                                    <option value="Bhawana">Bhawana</option>
                                                    <option value="Bhera">Bhera</option>
                                                    <option value="Bhopalwala">Bhopalwala</option>
                                                    <option value="Burewala">Burewala</option>
                                                    <option value="Chak Azam Saffo">Chak Azam Saffo</option>
                                                    <option value="Chak Jhumra">Chak Jhumra</option>
                                                    <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred
                                                        Twenty Nine Left</option>
                                                    <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven
                                                        Left</option>
                                                    <option value="Chak Two Hundred Forty-Nine TDA">Chak Two Hundred
                                                        Forty-Nine TDA</option>
                                                    <option value="Chakwal">Chakwal</option>
                                                    <option value="Chawinda">Chawinda</option>
                                                    <option value="Chichawatni">Chichawatni</option>
                                                    <option value="Chiniot">Chiniot</option>
                                                    <option value="Chishtian">Chishtian</option>
                                                    <option value="Choa Saidanshah">Choa Saidanshah</option>
                                                    <option value="Chuhar Kana">Chuhar Kana</option>
                                                    <option value="Chunian">Chunian</option>
                                                    <option value="Daira Din Panah">Daira Din Panah</option>
                                                    <option value="Dajal">Dajal</option>
                                                    <option value="Dandot RS">Dandot RS</option>
                                                    <option value="Darya Khan">Darya Khan</option>
                                                    <option value="Daska">Daska</option>
                                                    <option value="Daud Khel">Daud Khel</option>
                                                    <option value="Daultala">Daultala</option>
                                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                    <option value="Dhanot">Dhanot</option>
                                                    <option value="Dhaunkal">Dhaunkal</option>
                                                    <option value="Dhok Awan">Dhok Awan</option>
                                                    <option value="Dijkot">Dijkot</option>
                                                    <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
                                                    <option value="Dinga">Dinga</option>
                                                    <option value="Dipalpur">Dipalpur</option>
                                                    <option value="Dullewala">Dullewala</option>
                                                    <option value="Dunga Bunga">Dunga Bunga</option>
                                                    <option value="Dunyapur">Dunyapur</option>
                                                    <option value="Eminabad">Eminabad</option>
                                                    <option value="Faisalabad">Faisalabad</option>
                                                    <option value="Faqirwali">Faqirwali</option>
                                                    <option value="Faruka">Faruka</option>
                                                    <option value="Fazilpur">Fazilpur</option>
                                                    <option value="Ferozewala">Ferozewala</option>
                                                    <option value="Fort Abbas">Fort Abbas</option>
                                                    <option value="Garh Maharaja">Garh Maharaja</option>
                                                    <option value="Gojra">Gojra</option>
                                                    <option value="Gujar Khan">Gujar Khan</option>
                                                    <option value="Gujranwala">Gujranwala</option>
                                                    <option value="Gujranwala Division">Gujranwala Division</option>
                                                    <option value="Gujrat">Gujrat</option>
                                                    <option value="Hadali">Hadali</option>
                                                    <option value="Hafizabad">Hafizabad</option>
                                                    <option value="Harnoli">Harnoli</option>
                                                    <option value="Harunabad">Harunabad</option>
                                                    <option value="Hasan Abdal">Hasan Abdal</option>
                                                    <option value="Hasilpur">Hasilpur</option>
                                                    <option value="Haveli Lakha">Haveli Lakha</option>
                                                    <option value="Hazro">Hazro</option>
                                                    <option value="Hujra Shah Muqeem">Hujra Shah Muqeem</option>
                                                    <option value="Jahanian Shah">Jahanian Shah</option>
                                                    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
                                                    <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
                                                    <option value="Jampur">Jampur</option>
                                                    <option value="Jand">Jand</option>
                                                    <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
                                                    <option value="Jaranwala">Jaranwala</option>
                                                    <option value="Jatoi Shimali">Jatoi Shimali</option>
                                                    <option value="Jauharabad">Jauharabad</option>
                                                    <option value="Jhang">Jhang</option>
                                                    <option value="Jhang Sadar">Jhang Sadar</option>
                                                    <option value="Jhawarian">Jhawarian</option>
                                                    <option value="Jhelum">Jhelum</option>
                                                    <option value="Kabirwala">Kabirwala</option>
                                                    <option value="Kahna Nau">Kahna Nau</option>
                                                    <option value="Kahuta">Kahuta</option>
                                                    <option value="Kalabagh">Kalabagh</option>
                                                    <option value="Kalaswala">Kalaswala</option>
                                                    <option value="Kaleke Mandi">Kaleke Mandi</option>
                                                    <option value="Kallar Kahar">Kallar Kahar</option>
                                                    <option value="Kalur Kot">Kalur Kot</option>
                                                    <option value="Kamalia">Kamalia</option>
                                                    <option value="Kamar Mushani">Kamar Mushani</option>
                                                    <option value="Kamoke">Kamoke</option>
                                                    <option value="Kamra">Kamra</option>
                                                    <option value="Kanganpur">Kanganpur</option>
                                                    <option value="Karor">Karor</option>
                                                    <option value="Kasur">Kasur</option>
                                                    <option value="Keshupur">Keshupur</option>
                                                    <option value="Khairpur Tamiwali">Khairpur Tamiwali</option>
                                                    <option value="Khandowa">Khandowa</option>
                                                    <option value="Khanewal">Khanewal</option>
                                                    <option value="Khanga Dogran">Khanga Dogran</option>
                                                    <option value="Khangarh">Khangarh</option>
                                                    <option value="Khanpur">Khanpur</option>
                                                    <option value="Kharian">Kharian</option>
                                                    <option value="Khewra">Khewra</option>
                                                    <option value="Khurrianwala">Khurrianwala</option>
                                                    <option value="Khushab">Khushab</option>
                                                    <option value="Kohror Pakka">Kohror Pakka</option>
                                                    <option value="Kot Addu Tehsil">Kot Addu Tehsil</option>
                                                    <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
                                                    <option value="Kot Mumin">Kot Mumin</option>
                                                    <option value="Kot Radha Kishan">Kot Radha Kishan</option>
                                                    <option value="Kot Rajkour">Kot Rajkour</option>
                                                    <option value="Kot Samaba">Kot Samaba</option>
                                                    <option value="Kot Sultan">Kot Sultan</option>
                                                    <option value="Kotli Loharan">Kotli Loharan</option>
                                                    <option value="Kundian">Kundian</option>
                                                    <option value="Kunjah">Kunjah</option>
                                                    <option value="Ladhewala Waraich">Ladhewala Waraich</option>
                                                    <option value="Lahore">Lahore</option>
                                                    <option value="Lala Musa">Lala Musa</option>
                                                    <option value="Lalian">Lalian</option>
                                                    <option value="Layyah">Layyah</option>
                                                    <option value="Layyah District">Layyah District</option>
                                                    <option value="Liliani">Liliani</option>
                                                    <option value="Lodhran">Lodhran</option>
                                                    <option value="Mailsi">Mailsi</option>
                                                    <option value="Malakwal">Malakwal</option>
                                                    <option value="Malakwal City">Malakwal City</option>
                                                    <option value="Mamu Kanjan">Mamu Kanjan</option>
                                                    <option value="Mananwala">Mananwala</option>
                                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                    <option value="Mandi Bahauddin District">Mandi Bahauddin District
                                                    </option>
                                                    <option value="Mangla">Mangla</option>
                                                    <option value="Mankera">Mankera</option>
                                                    <option value="Mehmand Chak">Mehmand Chak</option>
                                                    <option value="Mian Channun">Mian Channun</option>
                                                    <option value="Mianke Mor">Mianke Mor</option>
                                                    <option value="Mianwali">Mianwali</option>
                                                    <option value="Minchinabad">Minchinabad</option>
                                                    <option value="Mitha Tiwana">Mitha Tiwana</option>
                                                    <option value="Moza Shahwala">Moza Shahwala</option>
                                                    <option value="Multan">Multan</option>
                                                    <option value="Multan District">Multan District</option>
                                                    <option value="Muridke">Muridke</option>
                                                    <option value="Murree">Murree</option>
                                                    <option value="Mustafabad">Mustafabad</option>
                                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                                    <option value="Narang Mandi">Narang Mandi</option>
                                                    <option value="Narowal">Narowal</option>
                                                    <option value="Naushahra Virkan">Naushahra Virkan</option>
                                                    <option value="Nazir Town">Nazir Town</option>
                                                    <option value="Okara">Okara</option>
                                                    <option value="Pakki Shagwanwali">Pakki Shagwanwali</option>
                                                    <option value="Pakpattan">Pakpattan</option>
                                                    <option value="Pasrur">Pasrur</option>
                                                    <option value="Pattoki">Pattoki</option>
                                                    <option value="Phalia">Phalia</option>
                                                    <option value="Pind Dadan Khan">Pind Dadan Khan</option>
                                                    <option value="Pindi Bhattian">Pindi Bhattian</option>
                                                    <option value="Pindi Gheb">Pindi Gheb</option>
                                                    <option value="Pir Mahal">Pir Mahal</option>
                                                    <option value="Qadirpur Ran">Qadirpur Ran</option>
                                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                                    <option value="Rabwah">Rabwah</option>
                                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                    <option value="Rahimyar Khan District">Rahimyar Khan District
                                                    </option>
                                                    <option value="Raiwind">Raiwind</option>
                                                    <option value="Raja Jang">Raja Jang</option>
                                                    <option value="Rajanpur">Rajanpur</option>
                                                    <option value="Rasulnagar">Rasulnagar</option>
                                                    <option value="Rawalpindi">Rawalpindi</option>
                                                    <option value="Rawalpindi District">Rawalpindi District</option>
                                                    <option value="Renala Khurd">Renala Khurd</option>
                                                    <option value="Rojhan">Rojhan</option>
                                                    <option value="Sadiqabad">Sadiqabad</option>
                                                    <option value="Sahiwal">Sahiwal</option>
                                                    <option value="Sambrial">Sambrial</option>
                                                    <option value="Sangla Hill">Sangla Hill</option>
                                                    <option value="Sanjwal">Sanjwal</option>
                                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                    <option value="Sarai Sidhu">Sarai Sidhu</option>
                                                    <option value="Sargodha">Sargodha</option>
                                                    <option value="Shahkot Tehsil">Shahkot Tehsil</option>
                                                    <option value="Shahpur">Shahpur</option>
                                                    <option value="Shahr Sultan">Shahr Sultan</option>
                                                    <option value="Shakargarh">Shakargarh</option>
                                                    <option value="Sharqpur">Sharqpur</option>
                                                    <option value="Sheikhupura">Sheikhupura</option>
                                                    <option value="Shorkot">Shorkot</option>
                                                    <option value="Shujaabad">Shujaabad</option>
                                                    <option value="Sialkot">Sialkot</option>
                                                    <option value="Sillanwali">Sillanwali</option>
                                                    <option value="Sodhra">Sodhra</option>
                                                    <option value="Sukheke Mandi">Sukheke Mandi</option>
                                                    <option value="Surkhpur">Surkhpur</option>
                                                    <option value="Talagang">Talagang</option>
                                                    <option value="Talamba">Talamba</option>
                                                    <option value="Tandlianwala">Tandlianwala</option>
                                                    <option value="Taunsa">Taunsa</option>
                                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                                    <option value="Umerkot">Umerkot</option>
                                                    <option value="Vihari">Vihari</option>
                                                    <option value="Wah">Wah</option>
                                                    <option value="Warburton">Warburton</option>
                                                    <option value="Wazirabad">Wazirabad</option>
                                                    <option value="West Punjab">West Punjab</option>
                                                    <option value="Yazman">Yazman</option>
                                                    <option value="Zafarwal">Zafarwal</option>
                                                    <option value="Zahir Pir">Zahir Pir</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="location-area">
                                                    <p class="para-sm-location">Click here to display your Location on
                                                        Google Maps</p>
                                                    <a href="javascript:void()" class="googlemap-link">GOOGLE MAP</a>
                                                    <ul
                                                        class="d-flex align-items-center justify-content-evenly mb-2 gap-5">
                                                        <p class="para-sm-location">Drag the Marker</p>
                                                        <p class="para-sm-location color-red loaction-pin"><i
                                                                class="fa-solid fa-location-dot"></i> </p>
                                                        <p class="para-sm-location">to exactly locate</p>
                                                    </ul>
                                                    <p class="para-sm-location">Your Fishing Operation on the map</p>
                                                </div>
                                                <div class="map-set w-100">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52808140.21705447!2d-161.46429918210544!3d36.11412792251988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1718323526550!5m2!1sen!2s"
                                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                                        loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="booking-chart-area">
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Fishing Information</h3>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Season * <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                            <input type="file">
                                            <textarea name="Cancellation &amp; Refund Policy" id="" placeholder="Describe the difference in Fishing depending on seasons"></textarea>

                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fish Species * <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="d-grid set-width-72">
                                                <div class="input-div">
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Fresh Water" id="fresh-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/water.png') }}" alt="" srcset="">
                                                            <label for="fresh-id">Fresh Water</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-div-check">
                                                        <input type="checkbox" name="Salt Water" id="salt-id">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ asset('assets/admin/images/water.png') }}" alt="" srcset="">
                                                            <label for="salt-id">Salt Water</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-div active-area fresh-active">
                                                    <h2 class="text-center headcheck-large pt-4">You can select more
                                                        than one species.</h2>
                                                    <div class="d-flex gap-3 flex-wrap align-items-center ">
                                                        <h4 class="w-100 head-check">Favorite Freshwater fish</h4>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Rainbowtrout">
                                                            <label for="Rainbowtrout">Rainbow trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Browntrout">
                                                            <label for="Browntrout">Brown trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Brooktrout">
                                                            <label for="Brooktrout">Brook trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Grayling">
                                                            <label for="Grayling">Grayling</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="ChinookSalmon">
                                                            <label for="ChinookSalmon">Chinook Salmon</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3 flex-wrap align-items-center ">
                                                        <h4 class="w-100 head-check">Freshwater fish</h4>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Aimara">
                                                            <label for="Aimara">Aimara</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="AlraiOsama">
                                                            <label for="AlraiOsama">Alrai Osama</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Amago">
                                                            <label for="Amago">Amago</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Amu-Darya">
                                                            <label for="Amu-Darya">Amu-Darya Trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Apache">
                                                            <label for="Apache">Apache trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Arapaima">
                                                            <label for="Arapaima">Arapaima</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Arawana">
                                                            <label for="Arawana">Arawana</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Arctic">
                                                            <label for="Arctic">Arctic Char</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Asp">
                                                            <label for="Asp">Asp</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Atlantic">
                                                            <label for="Atlantic">Atlantic Salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Australian">
                                                            <label for="Australian">Australian Grayling</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Barbel">
                                                            <label for="Barbel">Barbel</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Barramunfi">
                                                            <label for="Barramunfi">Barramunfi</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Barred">
                                                            <label for="Barred">Barred Shovelnose Catfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bicuda">
                                                            <label for="Bicuda">Bicuda</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="BlueWolfFish">
                                                            <label for="BlueWolfFish">Blue Wolf Fish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bluegill">
                                                            <label for="Bluegill">Bluegill</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Boga">
                                                            <label for="Boga">Boga</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Brevoortia">
                                                            <label for="Brevoortia">Brevoortia pectlnata</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Brook-trout">
                                                            <label for="Brook-trout">Brook trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Brown1trout">
                                                            <label for="Brown1trout">Brown trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="BryconMoorei">
                                                            <label for="BryconMoorei">Brycon Moorei</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bull">
                                                            <label for="Bull">Bull trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Caquetaia">
                                                            <label for="Caquetaia">Caquetaia umbrifera</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Carp">
                                                            <label for="Carp">Carp</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Catfish">
                                                            <label for="Catfish">Catfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Chameleon">
                                                            <label for="Chameleon">Chameleon cichlid</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cherrysalmon">
                                                            <label for="Cherrysalmon">Cherry salmon - Masu
                                                                Salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Chinooksalmon">
                                                            <label for="Chinooksalmon">Chinook salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="chub">
                                                            <label for="chub">chub</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cohosalmon">
                                                            <label for="Cohosalmon">Coho salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Combfinn">
                                                            <label for="Combfinn">Comb finn Bass V Cernicichla
                                                                lepidota</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Crappie">
                                                            <label for="Crappie">Crappie</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Culter">
                                                            <label for="Culter">Culter</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cutthroat">
                                                            <label for="Cutthroat">Cutthroat</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="DanubeSalmon">
                                                            <label for="DanubeSalmon">Danube Salmon - Hucho
                                                                Hucho</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Dogfish">
                                                            <label for="Dogfish">Dog fish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="DollyVarden">
                                                            <label for="DollyVarden">Dolly Varden</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Fine-Spotted">
                                                            <label for="Fine-Spotted">Fine Spotted Cutthroat</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Freshwater-Drum">
                                                            <label for="Freshwater-Drum">Freshwater Drum</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Gar">
                                                            <label for="Gar">Gar</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Golden-Trout">
                                                            <label for="Golden-Trout">Golden Trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tigerfish">
                                                            <label for="Tigerfish">Goliath Tigerfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="GraylingONE">
                                                            <label for="GraylingONE">Grayling</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Guapote">
                                                            <label for="Guapote">Guapote</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Guinea">
                                                            <label for="Guinea">Guinea Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Haya">
                                                            <label for="Haya">Haya</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Hucho">
                                                            <label for="Hucho">Hucho</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Iwana">
                                                            <label for="Iwana">Iwana - White Spotted Char</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Jacund">
                                                            <label for="Jacund">Jacund\u00e1</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Japanese">
                                                            <label for="Japanese">Japanese Hucho</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Jatuarana">
                                                            <label for="Jatuarana">Jatuarana - Yatorana</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="LakeONE">
                                                            <label for="LakeONE">Lake trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Landlocked">
                                                            <label for="Landlocked">Landlocked Salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Largemouth">
                                                            <label for="Largemouth">Largemouth Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Lenok">
                                                            <label for="Lenok">Lenok trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mahseer">
                                                            <label for="Mahseer">Mahseer</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Marbleone">
                                                            <label for="Marbleone">Marble trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mekong">
                                                            <label for="Mekong">Mekong Giant Catfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mojarra">
                                                            <label for="Mojarra">Mojarra</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mullet">
                                                            <label for="Mullet">Mullet</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="MurrayCod">
                                                            <label for="MurrayCod">Murray Cod</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Muskie">
                                                            <label for="Muskie">Muskie</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Newbwe">
                                                            <label for="Newbwe">Newbwe</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Nile-Perch">
                                                            <label for="Nile-Perch">Nile Perch</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Nile-Tilapia">
                                                            <label for="Nile-Tilapia">Nile Tilapia</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Oligosarcus">
                                                            <label for="Oligosarcus">Oligosarcus</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pacu">
                                                            <label for="Pacu">Pacu</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Patagonia-Bass">
                                                            <label for="Patagonia-Bass">Patagonia Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Payara">
                                                            <label for="Payara">Payara</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Peacock-Bass">
                                                            <label for="Peacock-Bass">Peacock Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pejerrey">
                                                            <label for="Pejerrey">Pejerrey</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Perch">
                                                            <label for="Perch">Perch</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="">
                                                            <label for=""></label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Piabanha">
                                                            <label for="Piabanha">Piabanha</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pike">
                                                            <label for="Pike">Pike</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pink-salmon">
                                                            <label for="Pink-salmon">Pink salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pira-Pita">
                                                            <label for="Pira-Pita">Pira Pita</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Piranha">
                                                            <label for="Piranha">Piranha</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="LandlockedSalmon">
                                                            <label for="LandlockedSalmon">Landlocked Salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="LargemouthBass">
                                                            <label for="LargemouthBass">Largemouth Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Lenoktrout">
                                                            <label for="Lenoktrout">Lenok trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="PirapitingaOpallius">
                                                            <label for="PirapitingaOpallius">Pirapitinga do Sul - Brycon
                                                                Opallius</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pumpkinseed">
                                                            <label for="Pumpkinseed">Pumpkinseed</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Rainbow-trout">
                                                            <label for="Rainbow-trout">Rainbow trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="RedtailCatfish">
                                                            <label for="RedtailCatfish">Redtail Catfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Rio-Grande-Cichlid">
                                                            <label for="Rio-Grande-Cichlid">Rio Grande Cichlid - Taxas
                                                                Cichlid</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Roach">
                                                            <label for="Roach">Roach</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Rudd">
                                                            <label for="Rudd">Rudd</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sabaleta">
                                                            <label for="Sabaleta">Sabaleta - Brycon Henni</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sabalo">
                                                            <label for="Sabalo">Sabalo</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sakminus">
                                                            <label for="Sakminus">Sakminus affinis</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Franciscanus">
                                                            <label for="Franciscanus">Salminus Franciscanus</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="">
                                                            <label for=""></label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Salminushilari">
                                                            <label for="Salminushilari">Salminus hilari</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Saratoga">
                                                            <label for="Saratoga">Saratoga</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sea-Trout">
                                                            <label for="Sea-Trout">Sea-Trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Shad">
                                                            <label for="Shad">Shad</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Shortnosewolfish">
                                                            <label for="Shortnosewolfish">Short nosed wolfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="SmallmouthBass">
                                                            <label for="SmallmouthBass">Smallmouth Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Snowtrout">
                                                            <label for="Snowtrout">Snow trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sickeyesalmon">
                                                            <label for="Sickeyesalmon">Sickeye salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="SouffiaVairone">
                                                            <label for="SouffiaVairone">Souffia or Western
                                                                Vairone</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Steelhead">
                                                            <label for="Steelhead">Steelhead</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Striped">
                                                            <label for="Striped">Striped Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Striped">
                                                            <label for="Striped">Striped Shiner</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sturgeon">
                                                            <label for="Sturgeon">Sturgeon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sucker">
                                                            <label for="Sucker">Sucker</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sunfish">
                                                            <label for="Sunfish">Sunfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tench">
                                                            <label for="Tench">Tench</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="TexasCichlid">
                                                            <label for="TexasCichlid">Texas Cichlid - Rio Grande
                                                                Cichlid</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tiger-Trout">
                                                            <label for="Tiger-Trout">Tiger Trout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tigerfish">
                                                            <label for="Tigerfish">Tigerfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Toothy">
                                                            <label for="Toothy">Toothy humpback</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Walleye">
                                                            <label for="Walleye">Walleye</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="WhiteBass">
                                                            <label for="WhiteBass">WhiteBass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Whitefish">
                                                            <label for="Whitefish">Whitefish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="WolfFish">
                                                            <label for="WolfFish">Wolf Fish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Yamame">
                                                            <label for="Yamame">Yamame</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Yellowcheek">
                                                            <label for="Yellowcheek">Yellowcheek</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Yellowfish">
                                                            <label for="Yellowfish">Yellowfish</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-div active-area saltwater-active">
                                                    <h2 class="text-center headcheck-large pt-4">You can select more
                                                        than one species.</h2>
                                                    <div class="d-flex gap-3 flex-wrap align-items-center ">
                                                        <h4 class="w-100 head-check">Favorite Saltwater fish</h4>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Barracuda">
                                                            <label for="Barracuda">Barracuda</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bonefish">
                                                            <label for="Bonefish">Bonefish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tarpom">
                                                            <label for="Tarpom">Tarpom</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Permit">
                                                            <label for="Permit">Permit</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Dorado-Mahi">
                                                            <label for="Dorado-Mahi">Dorado - Mahi Mahi</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3 flex-wrap align-items-center ">
                                                        <h4 class="w-100 head-check">Saltwater_fish</h4>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="AfricanPompano">
                                                            <label for="AfricanPompano">African Pompano - Threadfin
                                                                Trevally</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Amberjack">
                                                            <label for="Amberjack">Amberjack</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Atiantic-Spadefish">
                                                            <label for="Atiantic-Spadefish">Atiantic Spadefish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Barracuda">
                                                            <label for="Barracuda">Barracuda</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Billifish-Sailfish">
                                                            <label for="Billifish-Sailfish">Billifish Sailfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="BlacDrum">
                                                            <label for="BlacDrum">Black Drum</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Black-Marlin">
                                                            <label for="Black-Marlin">Black Marlin</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Blackspot-Tuskfish">
                                                            <label for="Blackspot-Tuskfish">Blackspot Tuskfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Blue-Bastard">
                                                            <label for="Blue-Bastard">Blue Bastard</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Blue-Marlin">
                                                            <label for="Blue-Marlin">Blue Marlin</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bluefin-trevally">
                                                            <label for="Bluefin-trevally">Bluefin trevally</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bluefish-Tailor-Shad">
                                                            <label for="Bluefish-Tailor-Shad">Bluefish - Tailor -
                                                                Shad</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bohar-Two">
                                                            <label for="Bohar-Two">Bohar-Two</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bonefish">
                                                            <label for="Bonefish">Bonefish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Bonito">
                                                            <label for="Bonito">Bonito</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="BroadBarredMackerel">
                                                            <label for="BroadBarredMackerel">Broad Barred
                                                                Mackerel</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="BumpheadParrotfish">
                                                            <label for="BumpheadParrotfish">Bumphead Parrotfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="CalicoBass">
                                                            <label for="CalicoBass">Calico Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="CaliforniaHalibut">
                                                            <label for="CaliforniaHalibut">California Halibut</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cobia">
                                                            <label for="Cobia">Cobia</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cod">
                                                            <label for="Cod">Cod</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Cubera-Snapper">
                                                            <label for="Cubera-Snapper">Cubera Snapper</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Dart">
                                                            <label for="Dart">Dart</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Dogtooth-tuna">
                                                            <label for="Dogtooth-tuna">Dogtooth tuna or White
                                                                tuna</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Dorado-Mahi">
                                                            <label for="Dorado-Mahi">Dorado - Mahi Mahi</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name=""
                                                                id="Eesterm-Australian-salmon">
                                                            <label for="Eesterm-Australian-salmon">Eesterm Australian
                                                                salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="European-seabass">
                                                            <label for="European-seabass">European seabass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="False-Albacore">
                                                            <label for="False-Albacore">False Albacore - Little
                                                                Tunny</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Flounder">
                                                            <label for="Flounder">Flounder</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="GiantHerring">
                                                            <label for="GiantHerring">Giant Herring</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Giant-Trevally">
                                                            <label for="Giant-Trevally">Giant Trevally</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Golden-Trevally">
                                                            <label for="Golden-Trevally">Golden Trevally</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Jacks">
                                                            <label for="Jacks">Jacks</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Jaguar-Bass">
                                                            <label for="Jaguar-Bass">Jaguar Bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Jobfish">
                                                            <label for="Jobfish">Jobfish (Green Jobfish)</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="King-Threadfin-Salmon">
                                                            <label for="King-Threadfin-Salmon">King Threadfin
                                                                Salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="King-Weakfish">
                                                            <label for="King-Weakfish">King Weakfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Leerfish-Garrick">
                                                            <label for="Leerfish-Garrick">Leerfish-Garrick</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Lingcod">
                                                            <label for="Lingcod">Lingcod</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Longtail-Tuna">
                                                            <label for="Longtail-Tuna">Longtail Tuna</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mangrove-Jack">
                                                            <label for="Mangrove-Jack">Mangrove Jack</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name=""
                                                                id="MangroveSnapper-GraySnapper">
                                                            <label for="MangroveSnapper-GraySnapper">Mangrove Snapper -
                                                                Gray Snapper</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Marlin">
                                                            <label for="Marlin">Marlin</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Milkfish">
                                                            <label for="Milkfish">Milkfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Mullet">
                                                            <label for="Mullet">Mullet</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="NapoleonWrasse">
                                                            <label for="NapoleonWrasse">Napoleon Wrasse or
                                                                Humphead</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Needlefish">
                                                            <label for="Needlefish">Needlefish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Other-Species">
                                                            <label for="Other-Species">Other-Species</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Parona-leatherjacket">
                                                            <label
                                                                for="Parona-leatherjacket">Parona-leatherjacket</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Parrofish">
                                                            <label for="Parrofish">Parrofish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Patagonian-Blenny">
                                                            <label for="Patagonian-Blenny">Patagonian Blenny</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Permit">
                                                            <label for="Permit">Permit</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Pollock">
                                                            <label for="Pollock">Pollock</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Queenfish">
                                                            <label for="Queenfish">Queenfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Raibow-bass">
                                                            <label for="Raibow-bass">Raibow-bass</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Redfish">
                                                            <label for="Redfish">Redfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Roosterfish">
                                                            <label for="Roosterfish">Roosterfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sailfish">
                                                            <label for="Sailfish">Sailfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Shark-Mackerel">
                                                            <label for="Shark-Mackerel">Shark Mackerel</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sharks">
                                                            <label for="Sharks">Sharks</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sheepshead">
                                                            <label for="Sheepshead">Sheepshead</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Silverside">
                                                            <label for="Silverside">Silverside - Pejerrey</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Snapper">
                                                            <label for="Snapper">Snapper</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Snook-Rabalo">
                                                            <label for="Snook-Rabalo">Snook - Rabalo</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Spanish-Mackerel">
                                                            <label for="Spanish-Mackerel">Spanish Mackerel</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Sporred-Seatrout">
                                                            <label for="Sporred-Seatrout">Sporred Seatrout</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Striped-Tuna">
                                                            <label for="Striped-Tuna">Striped Tuna</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Striper">
                                                            <label for="Striper">Striper</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Trapon">
                                                            <label for="Trapon">Trapon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tilapia">
                                                            <label for="Tilapia">Tilapia</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Trevallu-Brassy">
                                                            <label for="Trevallu-Brassy">Trevallu - Brassy</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Trevally-Diamond">
                                                            <label for="Trevally-Diamond">Trevally - Diamond</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Triggerfish">
                                                            <label for="Triggerfish">Triggerfish</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tunajacks">
                                                            <label for="Tunajacks">Tuna jacks</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Tuna-Mac">
                                                            <label for="Tuna-Mac">Tuna Mac</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name=""
                                                                id="Western-Australiansalmon">
                                                            <label for="Western-Australiansalmon">Western Australian
                                                                salmon</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Whitemouth-croaker">
                                                            <label for="Whitemouth-croaker">Whitemouth croaker</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Yellowfin-tuna">
                                                            <label for="Yellowfin-tuna">Yellowfin tuna</label>
                                                        </div>
                                                        <div class="input-div-check">
                                                            <input type="checkbox" name="" id="Yellowtail-amberiack">
                                                            <label
                                                                for="Yellowtail-amberiack">Yellowtail-amberiack</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Water types * <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Blue Water" id="blue-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/blue-water.png') }}" alt="" srcset="">
                                                        <label for="blue-id">Blue Water</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Coastal" id="coast-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/coast.png') }}" alt="" srcset="">
                                                        <label for="coast-id">Coastal</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Flats" id="flats-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/residential.png') }}" alt="" srcset="">
                                                        <label for="flats-id">Flats</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Lakes" id="lakes-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/lake.png') }}" alt="" srcset="">
                                                        <label for="lakes-id">Lake</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Rivers" id="rivers-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/river.png') }}" alt="" srcset="">
                                                        <label for="rivers-id">Rivers</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Tailwater" id="tailwater-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/whale.png') }}" alt="" srcset="">
                                                        <label for="tailwater-id">Tailwaters</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Fishing Style *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="From Boat" id="fromboat">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat-from.png') }}" alt="" srcset="">
                                                        <label for="fromboat">From Boat</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Wading" id="Wading-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wading.png') }}" alt="" srcset="">
                                                        <label for="Wading-id">Wading</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="booking-chart-area">
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Pre-Trip Information</h3>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Documents Required * <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-grid">
                                                <input type="file">
                                                <textarea class="" placeholder="What documents are required to enter your Country."></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail">

                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Cancellation & Refund Policy * <i
                                                            class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <h1>WE DO NOT ACCEPT DEPOSITS!</h1>
                                                <P> While it's important to add your "Cancellation & Refunds Policy".
                                                    please <strong>DO NOT include your deposit policies.</strong>  bacause of the discount
                                                    on the offers, and the short time these are usually available for,
                                                    the value of the offer is going to be <strong>payed in full.</strong>
                                                </P>
                                                <textarea name="Cancellation & Refund Policy" id=""></textarea>
                                            </div>
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius border-none">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Useful Information <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <textarea name="Useful Information" id="" placeholder="Please describe suggested clothing, flyrod, fly reels, lines, leaders, tippets and other miscellaneous tools."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="booking-chart-area">
                                    <div class="payment-det-title">
                                        <h2>Create Your Fishing Operations <span class="stepIndicator">Step 2/2</span>
                                        </h2>
                                        <p>THIS IS YOUR LAST STEP! ADDING YOUR FEATURED PICTURE AND A SELECTION OF YOUR
                                            BEST PHOTOS FOR THE GALLERY, WILL IMPROVE THE IMAGE OF YOUR OPERATION. MAKE
                                            SURE INCLUDE HIGH-RESOLUTION PHOTOS, VIDEO, and FACILITIES</p>
                                    </div>
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Additional Information</h3>
                                            <p>Fields mark with an asterisk(*) are required</p>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="" class="width-set-lble">
                                                <div class="profile-title">
                                                    <h3>Profile Picture *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-none">
                                                <p class="img-drop-text"><strong>choose your profile picture:</strong>
                                                    Remember that your profile picture is the first impression, so its
                                                    important to upload a photo represents you well.</p>
                                                <p class="">Featured Image (make sure your photo are 900 x 675 pixels or
                                                    larger) *</p>

                                                <form action="/action_page.php">
                                                    <label for="myFile-2"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop
                                                        Your Image</label>
                                                    <input type="file" id="myFile-profile" name="filename" required>
                                                </form>
                                            </div>
                                            <img src="{{ asset('assets/admin/images/profile-update.png') }}" id="step-profile">
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Gallery Information *</h3>
                                                </div>
                                            </label>
                                            <div class="input-div d-none">
                                                <p class="img-drop-text"> Great photos invites guests to get the full
                                                    experience of your fishing operation . make sure you include
                                                    high-resolution photos of your fishing operation . we'll display
                                                    these photos on your property's page on the flyonthemove.com website
                                                    . we recommend to work with at least <strong>10</strong>pictures
                                                    (max 20 pictures).</p>
                                                <p class="">Gallery Image (make sure your photo are 1190 x 669 pixels or
                                                    larger) *</p>
                                                <form action="/action_page.php">
                                                    <label for="myFile-2"><i
                                                            class="fa-solid fa-arrow-up-from-bracket"></i>Upload or Drop
                                                        Your Image</label>
                                                    <input type="file" id="galleryimages" name="filename">
                                                </form>
                                                <div class="d-flex align-items-center gap-3 images-boxes flex-wrap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>YouTube Video <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="Video link">
                                            </div>
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Vimeo Video <i class="fa-solid fa-question"></i></h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <input type="text" placeholder="Video link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-chart-area">
                                    <div class="chrt-hd-area">
                                        <div class="profile-pg-hd">
                                            <h3>Facilities</h3>
                                        </div>
                                    </div>
                                    <div class="profile-data-area">
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Activities</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Arts And Culture" id="arts-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/arts-and-culture.png') }}" alt="" srcset="">
                                                        <label for="arts-id">Arts And Culture</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Birding" id="Birding-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/birding.png') }}" alt="" srcset="">
                                                        <label for="Birding-id">Birding</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Boat Rental" id="Boat-Rental">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat-rental.png') }}" alt="" srcset="">
                                                        <label for="Boat-Rental">Boat Rental</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Casting Instructorr" id="casting">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/boat-rental.png') }}" alt="" srcset="">
                                                        <labe for="casting">Casting Instructorr</labe>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Fly fishing guide" id="Fly-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/fly-fishing-guide.png') }}" alt="" srcset="">
                                                        <label for="Fly-id">Fly fishing guide</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Food" id="Foodid">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/food.png') }}" alt="" srcset="">
                                                        <label for="Foodid">Food</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Golf" id="golf-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/golf.png') }}" alt="" srcset="">
                                                        <label for="golf-id">Golf</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Hiking" id="hiking-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hiking.png') }}" alt="" srcset="">
                                                        <label for="hiking-id">Hiking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Horseback  Riding" id="horseback">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/horse-riding.png') }}" alt="" srcset="">
                                                        <label for="horseback">Horseback Riding</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="hunting" id="hunting-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/hunting.png') }}" alt="" srcset="">
                                                        <label for="hunting-id">Hunting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Kayaking" id="Kayaking-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/kayak.png') }}" alt="" srcset="">
                                                        <label for="Kayaking-id">Kayaking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Mountain Biking" id="mountain-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/mountain-biking.png') }}" alt="" srcset="">
                                                        <label for="mountain-id">Mountain Biking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="National Parks Visits"
                                                        id="National-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/national-parks-visits.png') }}" alt=""
                                                            srcset="">
                                                        <label for="National-id">National Parks Visits</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Sailing" id="Sailing-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="Sailing-id">Sailing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Scuba diving" id="Scuba-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="Scuba-id">Scuba diving</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Sightseeing" id="Sighseeing-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="Sighseeing-id">Sightseeing</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Snorkeling" id="Snorkeling-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="Snorkeling-id">Snorkeling</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="White Water rafting" id="white-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="white-id">White Water rafting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Windsurfing" id="Windsurfing-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/Sailing.png') }}" alt="" srcset="">
                                                        <label for="Windsurfing-id">Windsurfing</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Food & Drink</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Chef Cuisine" id="Chef">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/chef-cuisine.png') }}" alt="" srcset="">
                                                        <label for="Chef">Chef Cuisine</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Gourmet" id="Gourmet">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/gourmet.png') }}" alt="" srcset="">
                                                        <label for="Gourmet">Gourmet</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Home Cooking" id="Home-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/home-cooking.png') }}" alt="" srcset="">
                                                        <label for="Home-id">Home Cooking</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="open Bar" id="open-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/open-bar.png') }}" alt="" srcset="">
                                                        <label for="open-id">Open Bar</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Restaurant with Dining"
                                                        id="Restaurant">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/restaurant-with-dining.png') }}" alt=""
                                                            srcset="">
                                                        <label for="Restaurant">Restaurant with Dining </label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Special Diet Meals (Upon request) "
                                                        id="Special">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/special-diet-meals.png') }}" alt=""
                                                            srcset="">
                                                        <label for="Special">Special Diet Meals (Upon request) </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>General</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="24 Hour Assistance" id="Assistance">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/24-hours.png') }}" alt="" srcset="">
                                                        <label for="Assistance">24 Hour Assistance</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Air Condition" id="Condition">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/air-condition.png') }}" alt="" srcset="">
                                                        <label for="Condition">Air Condition</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Baby Sitting" id="Sitting">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/baby-sitting.png') }}" alt="" srcset="">
                                                        <label for="Sitting">Baby Sitting</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Credit Card Payment" id="Payment">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/credit-card-icon.png') }}" alt="" srcset="">
                                                        <label for="Payment">Credit Card Payment</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Ficilities for Disable Guests"
                                                        id="Ficilities">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/ficilities-for-disable-guests.png') }}"
                                                            alt="" srcset="">
                                                        <label for="Ficilities">Ficilities for Disable Guests</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Heating" id="Heating">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/heating.png') }}" alt="" srcset="">
                                                        <label for="Heating">Heating</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Laundry Service" id="landry-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/laundry-service.png') }}" alt="" srcset="">
                                                        <label for="landry-id">Laundry Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Non-Smoking area (public and private)"
                                                        id="sad">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/non-smoking-area.png') }}" alt="" srcset="">
                                                        <label for="Non-Smoking">Non-Smoking area (public and
                                                            private)</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Room Service" id="room-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/room-service.png') }}" alt="" srcset="">
                                                        <label for="room-id">Room Service</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Safety Deposit Box" id="Safety-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/safety-deposit-box.png') }}" alt=""
                                                            srcset="">
                                                        <label for="Safety-id">Safety Deposit Box</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Health & Wellness</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Doctor on Call" id="Doctor">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/doctor.png') }}" alt="" srcset="">
                                                        <label for="Doctor">Doctor on Call</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Gym" id="Gym">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/dumbbell.png') }}" alt="" srcset="">
                                                        <label for="Gym">Gym</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Massages" id="Massages">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/body-spa.png') }}" alt="" srcset="">
                                                        <label for="Massages">Massages</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Sauna" id="Sauna">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/sauna.png') }}" alt="" srcset="">
                                                        <label for="Sauna">Sauna</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="SPA" id="SPA">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/spa.png') }}" alt="" srcset="">
                                                        <label for="SPA">SPA</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <img src="{{ asset('assets/admin/images/safety-deposit-box.png') }}" alt="" srcset="">
                                                    <input type="checkbox" name="Swimming" id="Swimming">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/swimming.png') }}" alt="" srcset="">
                                                        <label for="Swimming">Swimming Pool </label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Wellness Workshop" id="Wellness">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wellness.png') }}" alt="" srcset="">
                                                        <label for="Wellness">Wellness Workshop </label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Yoga" id="Yoga">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/yoga.png') }}" alt="" srcset="">
                                                        <label for="Yoga">Yoga </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Internet</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="WiFi" id="WiFi">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/wi-fi.png') }}" alt="" srcset="">
                                                        <label for="WiFi">WiFi</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Media & Technology</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Cellular Coverage" id="Cellular-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/cellular-coverage.png') }}" alt="" srcset="">
                                                        <label for="Cellular-id">Cellular Coverage</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Computer" id="Computer-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/computer.png') }}" alt="" srcset="">
                                                        <label for="Computer-id">Computer</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Satellite Channels" id="Satellite-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/satellite.png') }}" alt="" srcset="">
                                                        <label for="Satellite-id">Satellite Channels</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Telephone" id="Telephone-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/telephone-call.png') }}" alt="" srcset="">
                                                        <label for="Telephone-id">Telephone</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="TV" id="TV-id">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/tv.png') }}" alt="" srcset="">
                                                        <label for="TV-id">TV</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-detail border-radius-last-child border-radius">
                                            <label for="">
                                                <div class="profile-title">
                                                    <h3>Pets</h3>
                                                </div>
                                            </label>
                                            <div class="input-div">
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Pets Allowed" id="pests-allowed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/admin/images/pets-allowed.png') }}" alt="" srcset="">
                                                        <label for="pests-allowed">Pets Allowed</label>
                                                    </div>
                                                </div>
                                                <div class="input-div-check">
                                                    <input type="checkbox" name="Pets Not Allowed"
                                                        id="pests-nontallowed">
                                                    <div class="d-flex align-items-center gap-2" c>
                                                        <img src="{{ asset('assets/admin/images/pets-animals.png') }}" alt="" srcset="">
                                                        <label for="pests-nontallowed">Pets Not Allowed</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </form>
    </main>
@endsection

@push('scripts')
    <!--<script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.myTextarea'
        });

        $('.googlemap-link').click(function () {
            $('.map-set').addClass('active')
        })
        document.getElementById('fresh-id').addEventListener('change', function () {
            var freshActiveDiv = document.querySelector('.fresh-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
        document.getElementById('salt-id').addEventListener('change', function () {
            var freshActiveDiv = document.querySelector('.saltwater-active');
            if (this.checked) {
                freshActiveDiv.classList.add('active');
            } else {
                freshActiveDiv.classList.remove('active');
            }
        });
    </script>
    <script>
        // let noimage = "./assets/images/update-profile.png";
        let noimage = "{{ asset('assets/admin/images/update-profile.png') }}";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("step");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("signUpForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
    <script>
        const imageInput = document.querySelector('#myFile-profile');
        const showImg = document.querySelector('#step-profile');
        imageInput.addEventListener('change', function (event) {
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    showImg.src = e.target.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const multiImagesInput = document.getElementById('galleryimages');
            const imagesBoxes = document.querySelector('.images-boxes');

            multiImagesInput.addEventListener('change', function () {
                const files = this.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        const imgBox = document.createElement('div');
                        imgBox.className = 'img-box';
                        const removeBtn = document.createElement('button');
                        removeBtn.className = 'remove-img';
                        removeBtn.innerText = 'X';
                        const image = document.createElement('img');
                        image.src = event.target.result;
                        image.alt = 'Uploaded Image';
                        removeBtn.addEventListener('click', function () {
                            imagesBoxes.removeChild(imgBox);
                        });
                        imgBox.appendChild(removeBtn);
                        imgBox.appendChild(image);
                        imagesBoxes.appendChild(imgBox);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
