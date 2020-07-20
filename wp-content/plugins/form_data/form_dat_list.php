<?php 
  global $wpdb ;
  global $table_prefix ;
  $table = $table_prefix.'form_data';
  $sql = "select * from $table";
  $result = $wpdb->get_results($sql);
?>
  <table border="1">
    <thead>
      <th>Id</th>
      <th>Name</th>
    </thead>
    <tbody>
      <?php foreach($result as $row) { ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 