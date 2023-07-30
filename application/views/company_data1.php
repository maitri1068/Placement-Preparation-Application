
<?php
              
                    
                   $this->load->database();
                     $query   = $this->db->query('SELECT Company_Name,company_id FROM companydetails');
                    $results = $query->Result();
                    echo (json_encode($results));     
                        
                   



?>