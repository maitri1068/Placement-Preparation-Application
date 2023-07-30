
<?php
                    $q = $_REQUEST["q"];
                    
                   $this->load->database();
    
                    $query   = $this->db->query('SELECT Student_Name,student_id FROM studentdetails WHERE Student_Name LIKE "'.$q.'%"');
                    $results = $query->Result();
                    echo (json_encode($results));     
                        
                    ?>


