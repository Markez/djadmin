<title>DJ-ANDIE::Create Story</title> 
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Create Story</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                        <form enctype="multipart/form-data"  id="form_validation" class="uk-form-stacked new_story"  action="create_new_story_" method="post" role="search">
                            <input type="text" id="subtitle" name="subtitle" required value="Not_Required" hidden="" />
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="title">Title<span class="req">*</span></label>
                                    <input type="text" id="title" name="title" required class="md-input" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="subtitle">Sub-Title<span class="req">*</span></label>
                                    <input type="text" id="subtitle" name="subtitle" required class="md-input" value="Not Required" disabled="" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="body">Story Body (20 chars min, 250 max)</label>
                                    <textarea class="md-input" id="body" name="body" cols="10" rows="8" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="250" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 characters long for a story.."></textarea>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="md-card">
                                    <div class="md-card-content">
                                        <h3 class="heading_a uk-margin-small-bottom">
                                            Upload Story Image
                                        </h3>
                                        <input type="file" name="file" id="input-file-a" class="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="create-message-success" style="color: green;"></div>
                        <div class="create-message-error" style="color: red;"></div>
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
