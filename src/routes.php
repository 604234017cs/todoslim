<?php

    $app->get('/search/[{query}]', function ($request, $response, $args) {
         $sth = $this->db->prepare("SELECT * FROM training WHERE T_Name LIKE :query    
         OR Address LIKE :query 
         ORDER BY T_Name");
       $query = "%".$args['query']."%";
       $sth->bindParam("query", $query);
       $sth->execute();
       $training = $sth->fetchAll();
       return $this->response->withJson($training);



//        $sql = 'SELECT training.T_Name, training.Date, training.Address, training.Time, lecturer.L_Name
// FROM training,lecturer
// WHERE training.L_ID =  lecturer.L_ID';

   });





    




?>