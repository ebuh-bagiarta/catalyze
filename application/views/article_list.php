     <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12">
                                <a href="<?php echo base_url();?>article/create">Create Article</a>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="width: 20px;">Title</th>
                                                <th>date</th>
                                                <th class="text-right">image</th>
                                                <th class="text-right">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($article->result() as $row):?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td ><?php echo substr($row->title, 0,20);?></td>
                                                <td><?php echo $row->date;?></td>
                                                <td class="text-right"><?php echo $row->image;?></td>
                                                <td class="text-right">
                                                    <a href="<?php echo base_url();?>article/edit/<?php echo $row->id;?>">Edit</a> 
                                                <a href="<?php echo base_url();?>article/delete/<?php echo $row->id;?>">Delete</a></td>
                                            </tr>
                                            <?php $no++; endforeach;?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>