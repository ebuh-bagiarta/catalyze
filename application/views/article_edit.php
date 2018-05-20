<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Create Article</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Article</h3>
                                        </div>
                                        <hr>
                                        <?php echo form_open_multipart('article/update');?>
                                            <input type="hidden" name="id" value="<?php echo $article->row('id');?>">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" value="<?php echo $article->row('title');?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Description</label>
                                              
                                                <textarea  name="description" class="form-control"><?php echo $article->row('description');?></textarea>
                                            </div>
                                         
               <div class="form-group">
                    <label for="title" control-label mb-1>tanggal</label>
                     <div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
                        <input class="form-control" type="text" readonly="" name="date" value="<?php echo $article->row('date');?>">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Image</label>
                                                <input id="cc-number" name="image" type="file" class="form-control" value="" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Save</span>
                                                </button>
                                            </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
    
