                            <table id="datatable-responsive"
                                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Group Name</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                                </thead>  
                                <tbody>                        
                                
                                <?php 
                                include ("db_config.php");
                                $data = mysqli_query($con, "SELECT * FROM mproduct_group");
                                $number = 1;
                                while($rowpg=mysqli_fetch_array($data))
                                {
                                ?>
                                <tr>
                                    <td><?php echo $number ?></td>
                                    <td><?php echo $rowpg['productgroup_name'] ?></td>
                                    <td><?php echo $rowpg['productgroup_info'] ?></td>
                                    <td><?php echo $rowpg['productgroup_status'] ?></td>
                                </tr>
                                <?php 
                                $number++;
                                } 
                                ?>   
                             </tbody>
                            </table>
                              