<?php foreach($items as $data) { ?>
<title>G-Ajiri :: <?php echo $data->title; ?></title> 
    <div id="page_content">
        <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
            <h1><?php echo $data->title; ?></h1>
            <span class="uk-text-muted uk-text-upper uk-text-small"><?php
                if ($data->status == 'active') {
                    # code...
                    echo '<span class="uk-badge uk-badge-success">Active</span>';
                }elseif ($data->status == 'disabled') {
                    # code...
                    echo '<span class="uk-badge uk-badge-warning">Suspended</span>';
                }else{
                    echo '<span class="uk-badge uk-badge-default">Disbaled</span>';

                } ?></span>
        </div>
        <div id="page_content_inner">

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                    <div class="md-card">
<!--                         <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Photos
                            </h3>
                        </div> -->
                        <div class="md-card-content">
                            <div class="uk-margin-bottom uk-text-center">
                                <img src="<?php echo base_url(); ?>uploads/banners/<?php echo $data->bannerName; ?>" alt="" class="img_medium" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Details
                            </h3>
                        </div>
                        <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium">
                                <div class="uk-width-large-1-2">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Title (s)</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $data->title; ?> </a></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Sub-Title</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $data->subtitle; ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Linked To:</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $data->linkedTo; ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Banner Name: </span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $data->bannerName; ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider">
                                    <div class="uk-grid uk-grid-small">
                                        <div class="uk-width-large-1-3">
                                            <span class="uk-text-muted uk-text-small">Created On:</span>
                                        </div>
                                        <div class="uk-width-large-2-3">
                                            <span class="uk-text-large uk-text-middle"><?php echo $data->createOn; ?></span>
                                        </div>
                                    </div>
                                    <hr class="uk-grid-divider uk-hidden-large">
                                </div>
                                <div class="uk-width-large-1-2">
<!--                                     <p>
                                        <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">CV</span>
                                        <span class="uk-badge uk-badge-success">Link to CV Download</span>
                                    </p>
                                    <hr class="uk-grid-divider"> -->
                                    <p>
                                        <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">About:</span>
                                        This is main slider banner. If active, it will be part of the main slaider at home page of the website.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="md-fab-wrapper">
        <form method="post" action="banner_update">
            <input type="text" name="id" value="<?php echo $data->bannerId; ?>" hidden>
            <button type="submit" class="md-fab md-fab-primary">
            <i class="material-icons">&#xE150;</i></button>
        </form>
    </div>
<?php } ?>