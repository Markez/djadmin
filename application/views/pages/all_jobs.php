<title>DJ-ANDIE :: Stories</title> 
    <div id="page_content">
        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">All Stories</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Sub-Title</th>
                            <th>Body_Part</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>
 
                        <tfoot>
                        <tr> 
                            <th>Title</th>
                            <th>Sub-Title</th>
                            <th>Body_Part</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                            <?php foreach($data as $item) { ?>
                                <tr>
                                    <td><?php echo $item->title; ?></td>
                                    <td><?php echo $item->subtitle; ?></td>
                                    <td>
                                        <?php

                                        $data = substr($item->body, 0, 30);;
                                        echo $data;
                                        ?>....
                                            
                                    </td>
                                    <td><?php echo $item->createdOn; ?></td>
                                    <td><?php echo $item->status; ?></td>
                                    <td>
                                        <form method="post" action="get_story">
                                            <input type="text" name="id" value="<?php echo $item->storyId; ?>" hidden>
                                            <button type="submit" class="md-btn md-btn-default md-btn-wave-light">View</button>
                                        </form>
                                    </td>
                                    <td>
                                    <?php
                                        if ($item->status == 'active') {
                                            # code...
                                            echo '
                                                <form method="post" action="update_story_status">
                                                    <input type="text" name="id" value="'.$item->storyId.'" hidden>
                                                    <input type="text" name="state" value="disabled" hidden>
                                                    <button type="submit" class="md-btn md-btn-warning md-btn-wave-light">Disable</button>
                                                </form>
                                            ';
                                        }else{
                                            # code...
                                            echo '
                                                <form method="post" action="update_story_status">
                                                    <input type="text" name="id" value="'.$item->storyId.'" hidden>
                                                    <input type="text" name="state" value="active" hidden>
                                                    <button type="submit" class="md-btn md-btn-primary md-btn-wave-light">Acivate</button>
                                                </form>
                                            ';

                                        }

                                    ?>
                                </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>