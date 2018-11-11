<?php foreach($items as $data) { ?> 
<title>DJ-ANDIE:: Update <?php echo $data->title; ?></title>
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Update Main Banner</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                        <form enctype="multipart/form-data"  id="form_validation" class="uk-form-stacked update_banner"  action="update_banner_details" method="post" role="search">
                        <input type="text" id="id" name="id" required value="<?php echo $data->bannerId; ?>" hidden/>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="title">Title<span class="req">*</span></label>
                                    <input type="text" id="title" name="title" required class="md-input" value="<?php echo $data->title; ?>" />
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="subtitle">Sub-Title<span class="req">*</span></label>
                                    <input type="text" id="subtitle" name="subtitle" required class="md-input" value="<?php echo $data->subtitle; ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-mar>
                            <div class="uk-width-medium-1-2">
                                <div class="uk-form-row parsley-row">
                                    <label for="linkto" class="uk-form-label">Link To:<span class="req">*</span></label>
                                   <?php
                                        if ($data->linkedTo == 'val_radio_videos') {
                                            # code...
                                            echo '
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_videos" data-md-icheck checked/>
                                                    <label for="val_radio_videos" class="inline-label">Videos</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_audios" data-md-icheck />
                                                    <label for="val_radio_audios" class="inline-label">Audios</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_events" data-md-icheck />
                                                    <label for="val_radio_events" class="inline-label">Events</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_blank" data-md-icheck />
                                                    <label for="val_radio_blank" class="inline-label">No Link</label>
                                                </span>
                                            ';
                                        }else if ($data->linkedTo == 'val_radio_audios') {
                                            # code...
                                            echo '
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_videos" data-md-icheck />
                                                    <label for="val_radio_videos" class="inline-label">Videos</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_audios" data-md-icheck checked/>
                                                    <label for="val_radio_audios" class="inline-label">Audios</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_events" data-md-icheck />
                                                    <label for="val_radio_events" class="inline-label">Events</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_blank" data-md-icheck />
                                                    <label for="val_radio_blank" class="inline-label">No Link</label>
                                                </span>
                                            ';
                                        }else if ($data->linkedTo == 'val_radio_events') {
                                            # code...
                                            echo '
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_videos" data-md-icheck />
                                                    <label for="val_radio_videos" class="inline-label">Videos</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_audios" data-md-icheck />
                                                    <label for="val_radio_audios" class="inline-label">Audios</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_events" data-md-icheck checked/>
                                                    <label for="val_radio_events" class="inline-label">Events</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_blank" data-md-icheck />
                                                    <label for="val_radio_blank" class="inline-label">No Link</label>
                                                </span>
                                            ';
                                        }else {
                                            # code...
                                            echo '
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_videos" data-md-icheck />
                                                    <label for="val_radio_videos" class="inline-label">Videos</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_audios" data-md-icheck />
                                                    <label for="val_radio_audios" class="inline-label">Audios</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_events" data-md-icheck />
                                                    <label for="val_radio_events" class="inline-label">Events</label>
                                                </span>
                                                <span class="icheck-inline">
                                                    <input type="radio" id="val_radio_link" name="val_radio_link" value="val_radio_blank" data-md-icheck checked/>
                                                    <label for="val_radio_blank" class="inline-label">No Link</label>
                                                </span>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="md-card">
                                    <div class="md-card-content">
                                        <h3 class="heading_a uk-margin-small-bottom">
                                            Upload Banner
                                        </h3>
                                        <input type="file" name="file" id="input-file-a" class="dropify" data-default-file="<?php echo base_url(); ?>uploads/banners/<?php echo $data->bannerName; ?>"/>
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
<?php } ?>