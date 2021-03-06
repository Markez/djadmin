<title>G-AJIRI::Create Employer</title>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Create Employer</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                        <form  id="form_validation" class="uk-form-stacked new_employer"  action="create_new_employer_" method="post" role="search">
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="fname">First Name<span class="req">*</span></label>
                                    <input type="text" id="fname" name="fname" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="mname">Middle Name<span class="req">*</span></label>
                                    <input type="text" id="mname" name="mname" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="lname">Last Name<span class="req">*</span></label>
                                    <input type="text" id="lname" name="lname" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="mnumber">Mobile Number<span class="req">*</span></label>
                                    <input type="text" id="mnumber" name="mnumber" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="username">Username<span class="req">*</span></label>
                                    <input type="text" id="username" name="username" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="password">Password<span class="req">* (Save the password)</span></label>
                                    <input type="password" id="password" name="password" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bisname">Business Name<span class="req">*</span></label>
                                    <input type="text" id="bisname" name="bisname" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bislocation">Business Location<span class="req">*</span></label>
                                    <input type="text" id="bislocation" name="bislocation" required class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="bisregno">Business Registration Nnmber<span class="req">*</span></label>
                                    <input type="text" id="bisregno" name="bisregno" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" id="email" name="email" data-parsley-trigger="change" required  class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="uk-form-row parsley-row">
                                    <label for="gender" class="uk-form-label">Gender<span class="req">*</span></label>
                                    <span class="icheck-inline">
                                        <input type="radio" id="val_radio_gender" name="val_radio_gender" id="val_radio_male" data-md-icheck required />
                                        <label for="val_radio_male" class="inline-label">Male</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" id="val_radio_gender" name="val_radio_gender" id="val_radio_female" data-md-icheck />
                                        <label for="val_radio_female" class="inline-label">Female</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" id="val_radio_gender" name="val_radio_gender" id="val_radio_other" data-md-icheck />
                                        <label for="val_radio_other" class="inline-label">Other</label>
                                    </span>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <label for="val_select" class="uk-form-label">Industry</label>
                                <div class="uk-input-group parsley-row">
                                    <span class="uk-input-group-addon">
                                        <i class="md-list-addon-icon material-icons">hearing</i>
                                    </span>
                                    <select id="val_industry" required data-md-selectize>
                                        <option value="">Choose..</option>
                                        <option value="sports">Sports</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="it">IT</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="hospitality">Hospitality</option>
                                        <option value="music">Music</option>
                                        <option value="constructions">Constructions</option>
                                        <option value="other">Other..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="about">About Employer (20 chars min, 100 max)</label>
                                    <textarea class="md-input" id="about" name="about" cols="10" rows="8" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 characters long comment about employer.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="register-message-success" style="color: green;"></div>
                        <div class="register-message-error" style="color: red;"></div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <button type="submit" class="md-btn md-btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
