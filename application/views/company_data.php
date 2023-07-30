
<?php
                    $q = $_REQUEST["q"];
                    
                   $this->load->database();
    
                    $query   = $this->db->query('SELECT Company_Name,company_id FROM companydetails WHERE Company_Name LIKE "'.$q.'%"');
                    $results = $query->Result();
                    echo (json_encode($results));     
                  
                    ?>


