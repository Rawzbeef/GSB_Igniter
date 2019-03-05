<?php
if(isset($_POST['chercher'])) {
    echo form_open();
    echo form_dropdown();
    echo form_close();
}
else {
    echo form_open();
    $query = $this->db->query('SELECT name, title, email FROM my_table');
    foreach ($query->result() as $row)
    {
            echo $row->title;
            echo $row->name;
            echo $row->email;
    }

    echo form_dropdown();
    echo form_close();
}