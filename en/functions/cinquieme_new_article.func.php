<?php



function get_article(){

    global $con;
    $list=[];
    $sql="SELECT art.id_article,
                 art.title,
                 art.type,
                 art.content,
                 art.image,
                 art.posted,
                 art.date,
                 art.auteurs,
                 ad.name,
                 ad.email
                 FROM article as art
                 JOIN admin as ad
                 ON art.email_admin=ad.email
                 WHERE art.posted='1' AND art.language='en'
                 ORDER BY art.date DESC
                 LIMIT 5,10
                 " ;

    $req=$con->query($sql);


    while ($row=$req->fetch(PDO::FETCH_OBJ)) {
      $list[]=$row;
    }
    return $list;

}














 ?>
