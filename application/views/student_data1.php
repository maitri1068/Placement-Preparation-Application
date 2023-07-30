
<?php
                  
                    
                   $this->load->database();
    
                    $query   = $this->db->query('SELECT Student_Name,student_id FROM studentdetails ');
                    $results = $query->Result();
            echo (json_encode($results));     
                        
                    ?>


