<title>DJ-ANDIE :: All Banners</title>
    <div id="page_content">
        <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">All Banners</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Sub-Title</th>
                            <th>Linked To:</th>
                            <th>Banner</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Sub-Title</th>
                            <th>Linked To:</th>
                            <th>Banner</th>
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                            <th>View</th>

                        </tr>
                        </tfoot>

                        <tbody>
                        <?php foreach($data as $item) { ?>
                            <tr>
                                <td><?php echo $item->title; ?></td>
                                <td><?php echo $item->subtitle; ?></td>
                                <td><?php echo $item->linkedTo; ?></td>
                                <td><?php echo $item->bannerName; ?></td>
                                <td><?php echo $item->status; ?></td>
                                <td><?php echo $item->createOn; ?></td>
                                <td>
                                    <?php
                                        if ($item->status == 'active') {
                                            # code...
                                            echo '
                                                <form method="post" action="update_banner_status">
                                                    <input type="text" name="id" value="'.$item->bannerId.'" hidden>
                                                    <input type="text" name="state" value="disabled" hidden>
                                                    <button type="submit" class="md-btn md-btn-warning md-btn-wave-light">Disable</button>
                                                </form>
                                            ';
                                        }else{
                                            # code...
                                            echo '
                                                <form method="post" action="update_banner_status">
                                                    <input type="text" name="id" value="'.$item->bannerId.'" hidden>
                                                    <input type="text" name="state" value="active" hidden>
                                                    <button type="submit" class="md-btn md-btn-primary md-btn-wave-light">Acivate</button>
                                                </form>
                                            ';

                                        }

                                    ?>
                                </td>
                                <td>
                                    <form method="post" action="get_banner">
                                        <input type="text" name="id" value="<?php echo $item->bannerId; ?>" hidden>
                                        <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>