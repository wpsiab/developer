                           <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                   <?php 
                                    $db=new mysqli("localhost","root","","my_bd");
									
								   $data_table=$db->query("select id, title, address from web_directories where id<=100");

								   while(list($id, $title, $address)=$data_table->fetch_row()){
									                      
                                    ?>
									
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $address; ?></td>

                                        </tr>
                                      <?php }?>
                                    </tbody>
                                </table>
                            </div>