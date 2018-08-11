<?php 
    $db=new mysqli("localhost","root","","justlynk_db_bd");
    
   $data_table=$db->query("select id, title, address, email, google_location, thana, verified_phone, website_url, tags from web_directories");

   while(list($id, $title, $address, $email, $google_location, $thana, $verified_phone, $website_url, $tags)=$data_table->fetch_row()){
                          
    ?>
    
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $google_location; ?></td>
            <td><?php echo $thana; ?></td>
            <td><?php echo $verified_phone; ?></td>
            <td><?php echo $website_url; ?></td>
            <td><?php echo $tags; ?></td>
        </tr>
      <?php }?>