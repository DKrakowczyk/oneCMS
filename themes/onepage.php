<?php

class onepage
{
    public $dbh;
    public function connect()
    {
        $serwer   = 'localhost';
        $database = 'portfolio';
        $port     = '3306';
        $user     = 'dawido';
        $password = 'dawido';
         $dbh      = new PDO('mysql:host=' . $serwer . ';dbname=' . $database, $user, $password);
        
        return $dbh;
    }
    //---------------------------Sekcja HERO--------------------------------------------------------
    public function hero_image($dbconnection)
    {
        $stmt   = $dbconnection->query('SELECT source FROM hero');
        $source = $stmt->fetchColumn();
        echo $source;
    }
    
    public function update_hero_image($dbconnection)
    {
        if (isset($_POST['source'])) {
            $stmt = $dbconnection->prepare('UPDATE hero SET source= :source');
            $stmt->bindParam(':source', $_POST['source'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }

     //---------------------------Sekcja SOCIAL--------------------------------------------------------
    public function add_social($dbconnection)
    {
        if (isset($_POST['class'])) {
            $stmt = $dbconnection->prepare('INSERT INTO socials(class,href,fa) VALUES(
                                 :class,
                                 :href,
                                 :fa)');
            $stmt->bindParam(':class', $_POST['class'], PDO::PARAM_STR);
            $stmt->bindParam(':href', $_POST['href'], PDO::PARAM_STR);
            $stmt->bindParam(':fa', $_POST['fa'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    public function show_socials_back($dbconnection)
    {
        $stmt = $dbconnection->query('SELECT id,class,href,fa FROM socials');
        echo '<ul class="list-group">';
        foreach ($stmt as $row) {
            echo '
            <li class="list-group-item" ><i style="font-size:3em;" class="'.$row['fa'].'"></i><hr>
            Klasa: <code>'.$row['class'].'</code><br>
            href: <code>'.$row['href'].'</code><br>
            <hr>
            <form method="POST">
            <input type="hidden" name="idrm" value="'.$row['id'].'">
            <button class="btn btn-block btn-outline-danger">Skasuj</button>
            </form>
            </li>
            ';
        }
        echo '</ul>';
        $stmt->closeCursor();
    }
    public function show_socials_front($dbconnection)
    {
        $stmt = $dbconnection->query('SELECT id,class,href,fa FROM socials');
        foreach ($stmt as $row) {
            echo '
            <a class="icon '.$row['class'].'" href="'.$row['href'].'"><i style="font-size:2em; " class="'.$row['fa'].'"></i></a>
            ';
        }
        $stmt->closeCursor();
    }

    public function remove_social($dbconnection)
    {
        if(isset($_POST['idrm']))
        {
            $stmt = $dbconnection->prepare('DELETE FROM socials WHERE id = :id');
            $stmt->bindParam(':id', $_POST['idrm'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    //---------------------------Sekcja ABOUT--------------------------------------------------------   
    public function section_about($dbconnection, $id)
    {
        $stmt = $dbconnection->query('SELECT header, header_small, names, title, p_one, p_two,button_text,button_href FROM section_about');
        while ($row = $stmt->fetch()) {
            echo $row[$id];
        }
    }
    
    public function update_about($dbconnection)
    {
        if (isset($_POST['header'])) {
            $stmt = $dbconnection->prepare('UPDATE section_about SET
                                header= :header,
                                header_small= :header_small,
                                names= :names,
                                title= :title,
                                p_one= :p_one,
                                p_two= :p_two,
                                button_text= :button_text,
                                button_href= :button_href');
            $stmt->bindParam(':header', $_POST['header'], PDO::PARAM_STR);
            $stmt->bindParam(':header_small', $_POST['header_small'], PDO::PARAM_STR);
            $stmt->bindParam(':names', $_POST['names'], PDO::PARAM_STR);
            $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
            $stmt->bindParam(':p_one', $_POST['p_one'], PDO::PARAM_STR);
            $stmt->bindParam(':p_two', $_POST['p_two'], PDO::PARAM_STR);
            $stmt->bindParam(':button_text', $_POST['button_text'], PDO::PARAM_STR);
            $stmt->bindParam(':button_href', $_POST['button_href'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    //---------------------------Sekcja SKILLS-----------------------------------------------------
    public function section_skills($dbconnection, $id)
    {
        $stmt = $dbconnection->query('SELECT header, header_small, title, p_one FROM section_skills');
        while ($row = $stmt->fetch()) {
            echo $row[$id];
        }
    }
    public function update_skills($dbconnection)
    {
        if (isset($_POST['header'])) {
            $stmt = $dbconnection->prepare('UPDATE section_skills SET
                                header= :header,
                                header_small= :header_small,
                                title= :title,
                                p_one= :p_one');
            $stmt->bindParam(':header', $_POST['header'], PDO::PARAM_STR);
            $stmt->bindParam(':header_small', $_POST['header_small'], PDO::PARAM_STR);
            $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
            $stmt->bindParam(':p_one', $_POST['p_one'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    public function add_progress($dbconnection)
    {
        
        if (isset($_POST['color'])) {
            $stmt = $dbconnection->prepare('INSERT INTO progress_bars(color,skill,tekst) VALUES(
                                 :color,
                                 :skill,
                                 :tekst)');
            $stmt->bindParam(':color', $_POST['color'], PDO::PARAM_STR);
            $stmt->bindParam(':skill', $_POST['skill'], PDO::PARAM_STR);
            $stmt->bindParam(':tekst', $_POST['tekst'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    public function get_progress($dbconnection)
    {
        
        $stmt = $dbconnection->query('SELECT color, skill, tekst FROM progress_bars');
        
        foreach ($stmt as $row) {
            echo ' <hr class="style3">
          <div class="progress">       
            <div class="progress-bar progress-bar-striped progress-bar-animated ' . $row['color'] . '" 
            role="progressbar" style="width: ' . $row['skill'] . '%" aria-valuenow="50" aria-valuemin="0" 
            aria-valuemax="100">' . $row['tekst'] . '</div>
          </div>
          <br>
          <form method="POST">
          <input name="del_bar" type="hidden" value="' . $row['tekst'] . '">
          <button type="submit" class="btn btn-outline-danger">Usuń</button>
          </form>';
        }
        echo ' <hr class="style3">';
        $stmt->closeCursor();
    }
    
    public function get_progress_front($dbconnection)
    {
        
        $stmt = $dbconnection->query('SELECT color, skill, tekst FROM progress_bars');
        
        foreach ($stmt as $row) {
            echo ' <hr class="style3">
          <div class="progress">   
            <div class="progress-bar progress-bar-striped progress-bar-animated ' . $row['color'] . '" 
            role="progressbar" style="width: ' . $row['skill'] . '%" aria-valuenow="50" aria-valuemin="0" 
            aria-valuemax="100">' . $row['tekst'] . '</div> 
          </div>';
        }
        echo ' <hr class="style3">';
        $stmt->closeCursor();
    }
    public function delete_bar($dbconnection)
    {
        if (isset($_POST['del_bar'])) {
            $stmt = $dbconnection->prepare('DELETE FROM progress_bars WHERE tekst = :del_bar');
            $stmt->bindParam(':del_bar', $_POST['del_bar'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    //---------------------------Sekcja WORK-------------------------------------------------------
    public function add_job($dbconnection)
    {
        
        if (isset($_POST['dates'])) {
            $stmt = $dbconnection->prepare('INSERT INTO section_work(dates,names,roles,p_one) VALUES
                                (:dates,:names,:roles,:p_one)');
            
            $stmt->bindParam(':dates', $_POST['dates'], PDO::PARAM_STR);
            $stmt->bindParam(':names', $_POST['names'], PDO::PARAM_STR);
            $stmt->bindParam(':roles', $_POST['roles'], PDO::PARAM_STR);
            $stmt->bindParam(':p_one', $_POST['p_one'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    
    public function get_job($dbconnection)
    {
        
        $stmt = $dbconnection->query('SELECT id,dates,names,roles,p_one FROM section_work');
        echo '<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Firma</th>
        <th scope="col">Rola</th>
        <th scope="col">Data</th>
        <th scope="col">Akapit</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>';
        foreach ($stmt as $row) {
            echo '<tr><td>' . $row['names'] . '</td><td>' . $row['roles'] . '</td><td>' . $row['dates'] . '</td><td>' . $row['p_one'] . '</td><td>
      <form method="POST">
      <input  type="hidden" type="text" name="id" value="' . $row['id'] . '">
      <button  type="submit" class="btn btn-outline-danger btn-sm">Skasuj</button></td></tr>
      </form>';
        }
        
        $stmt->closeCursor();
    }
    
    public function del_job($dbconnection)
    {
        if (isset($_POST['id'])) {
            
            $stmt = $dbconnection->prepare('DELETE FROM section_work WHERE id = :id');
            $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    public function get_job_front($dbconnection)
    {
        
        $stmt = $dbconnection->query('SELECT dates,names,roles,p_one FROM section_work');
        echo '<hr class="style3">';
        foreach ($stmt as $row) {
            echo ' 
            <div class="row media">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="dates">
                  <br><br>'.$row['dates'].'
                    </div>
                </div>
                <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h4>'.$row['names'].'</h4>
                    <h5>'.$row['roles'].'</h5>
                    <p class ="dates">'.$row['p_one'].'</p>
                </div>
            </div>
            <hr class="style3">';
        }
        
        $stmt->closeCursor();
    }

    public function get_section_job_title($dbconnection){
        $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=1');
        $stmt->execute();
        foreach ($stmt as $row) {
        echo ' <div class="heading">
        <h2 class="h2__heading">'.$row['header'].'</h2>
        <h3 class="h3__heading">'.$row['header_small'].'</h3>        
      </div>';
        }
        $stmt->closeCursor();
    }

    public function set_section_job_title($dbconnection){
        if(isset($_POST['header']))
        {
           
            $stmt = $dbconnection->prepare('UPDATE headings SET
            header= :header,
            header_small= :header_small WHERE id=1');
$stmt->bindParam(':header', $_POST['header'], PDO::PARAM_STR);
$stmt->bindParam(':header_small', $_POST['header_small'], PDO::PARAM_STR);
$stmt->execute();
        }
    }

    public function current_header($dbconnection,$field){
        $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=1');
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row[$field];
        }
        
    }
     //---------------------------Sekcja Schools-------------------------------------------------------
     public function add_school($dbconnection)
     {
         
         if (isset($_POST['dates'])) {
             $stmt = $dbconnection->prepare('INSERT INTO section_schools(dates,names,roles,p_one) VALUES
                                 (:dates,:names,:roles,:p_one)');
             
             $stmt->bindParam(':dates', $_POST['dates'], PDO::PARAM_STR);
             $stmt->bindParam(':names', $_POST['names'], PDO::PARAM_STR);
             $stmt->bindParam(':roles', $_POST['roles'], PDO::PARAM_STR);
             $stmt->bindParam(':p_one', $_POST['p_one'], PDO::PARAM_STR);
             $stmt->execute();
         }
     }
     
     public function get_school($dbconnection)
     {
         
         $stmt = $dbconnection->query('SELECT id,dates,names,roles,p_one FROM section_schools');
         echo '<table class="table table-hover">
     <thead >
       <tr>
         <th scope="col">Szkoła</th>
         <th scope="col">Status</th>
         <th scope="col">Data</th>
         <th scope="col">Akapit</th>
         <th scope="col">Akcja</th>
       </tr>
     </thead>
     <tbody>';
         foreach ($stmt as $row) {
             echo '<tr><td>' . $row['names'] . '</td><td>' . $row['roles'] . '</td><td>' . $row['dates'] . '</td><td>' . $row['p_one'] . '</td><td>
       <form method="POST">
       <input  type="hidden" type="text" name="id" value="' . $row['id'] . '">
       <button  type="submit" class="btn btn-outline-danger btn-sm">Skasuj</button></td></tr>
       </form>';
         }
         
         $stmt->closeCursor();
     }
     
     public function del_school($dbconnection)
     {
         if (isset($_POST['id'])) {
             
             $stmt = $dbconnection->prepare('DELETE FROM section_schools WHERE id = :id');
             $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
             $stmt->execute();
         }
     }
 
     public function get_school_front($dbconnection)
     {
         
         $stmt = $dbconnection->query('SELECT dates,names,roles,p_one FROM section_schools');
         echo '<hr class="style3">';
         foreach ($stmt as $row) {
             echo ' 
             <div class="row media">
                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                     <div class="dates">
                   <br><br>'.$row['dates'].'
                     </div>
                 </div>
                 <div class="expertiesdesc col-xs-12 col-sm-9 col-md-9 col-lg-9">
                     <h4>'.$row['names'].'</h4>
                     <h5>'.$row['roles'].'</h5>
                     <p class ="dates">'.$row['p_one'].'</p>
                 </div>
             </div>
             <hr class="style3">';
         }
         
         $stmt->closeCursor();
     }
 
     public function get_section_school_title($dbconnection){
         $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=2');
         $stmt->execute();
         foreach ($stmt as $row) {
         echo ' <div class="heading">
         <h2 class="h2__heading">'.$row['header'].'</h2>
         <h3 class="h3__heading">'.$row['header_small'].'</h3>        
       </div>';
         }
         $stmt->closeCursor();
     }
 
     public function set_section_school_title($dbconnection){
         if(isset($_POST['header']))
         {
            
             $stmt = $dbconnection->prepare('UPDATE headings SET
             header= :header,
             header_small= :header_small WHERE id=2');
 $stmt->bindParam(':header', $_POST['header'], PDO::PARAM_STR);
 $stmt->bindParam(':header_small', $_POST['header_small'], PDO::PARAM_STR);
 $stmt->execute();
         }
     }
 
     public function current_school_header($dbconnection,$field){
         $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=2');
         $stmt->execute();
         while ($row = $stmt->fetch()) {
             echo $row[$field];
         }
         
     }

    //---------------------------PORTFOLIO--------------------------------------------------------
    public function generate_gallery($dbconnection)
    {
        $stmt = $dbconnection->query('SELECT sizes,img_src,category,img_alt,img_button,
        modal_header,modal_img,modal_p,modal_href,modal_src FROM portfolio_gallery');
         echo '<div class="grid">
         <div class="grid-sizer"></div>';
         foreach ($stmt as $row) {
             echo '<div class="covers grid-item grid-item--'.$row['sizes'].' '.$row['category'].'">
             <img class ="images" src="'.$row['img_src'].'" alt="'.$row['img_alt'].'"></img>
             <div class="middle">
             <button type="button" data-toggle="modal" data-target="#'.$row['modal_src'].'" class="btn btn-sm btn-outline-light">
             '.$row['img_button'].'</button>
             </div>
           </div>
           <div class="modal fade" id="'.$row['modal_src'].'" tabindex="-1" role="dialog" aria-labelledby="'.$row['modal_src'].'" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="'.$row['modal_src'].'">'.$row['modal_header'].'</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
               <img class ="images" src="'.$row['modal_img'].'" alt="'.$row['img_alt'].'"></img>
               <p class="p-modal">'.$row['modal_p'].'</p>
         </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Zamknij</button>
                 <a href="'.$row['modal_href'].'"><button type="button"  class="btn btn-outline-success">Link</button></a>
               </div>
             </div>
           </div>
         </div>';
         }
         echo '</div>';
         $stmt->closeCursor();
    }

    public function add_gallery_item($dbconnection)
    {
        if (isset($_POST['sizes'])) {
            $stmt = $dbconnection->prepare('INSERT INTO portfolio_gallery(sizes,img_src,category,img_alt,img_button,
                                             modal_header,modal_img,modal_p,modal_href,modal_src) VALUES
                                (:sizes,:img_src,:category,:img_alt,:img_button,
                                :modal_header,:modal_img,:modal_p,:modal_href,:modal_src)');
            $stmt->bindParam(':sizes', $_POST['sizes'], PDO::PARAM_STR);
            $stmt->bindParam(':img_src', $_POST['img_src'], PDO::PARAM_STR);
            $stmt->bindParam(':category', $_POST['category'], PDO::PARAM_STR);
            $stmt->bindParam(':img_alt', $_POST['img_alt'], PDO::PARAM_STR);
            $stmt->bindParam(':img_button', $_POST['img_button'], PDO::PARAM_STR);
            $stmt->bindParam(':modal_header', $_POST['modal_header'], PDO::PARAM_STR);
            $stmt->bindParam(':modal_img', $_POST['modal_img'], PDO::PARAM_STR);
            $stmt->bindParam(':modal_p', $_POST['modal_p'], PDO::PARAM_STR);
            $stmt->bindParam(':modal_href', $_POST['modal_href'], PDO::PARAM_STR);
            $stmt->bindParam(':modal_src', $_POST['modal_src'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    public function back_portfolio_table($dbconnection){
        $stmt = $dbconnection->query('SELECT id,sizes,img_src,category,img_alt,img_button,
        modal_header,modal_img,modal_p,modal_href,modal_src FROM portfolio_gallery');
         echo '<div class="grid">
         <div class="grid-sizer"></div>';
         foreach ($stmt as $row) {
             echo '<div class="covers grid-item grid-item--'.$row['sizes'].' '.$row['category'].'">
             <img class ="images" src="'.$row['img_src'].'" alt="'.$row['img_alt'].'"></img>
             <div class="middle">
             <button type="button" data-toggle="modal" data-target="#'.$row['modal_src'].'" class="btn btn-sm btn-outline-light">
             '.$row['img_button'].'</button>
             </div>
           </div>
           <div class="modal fade" id="'.$row['modal_src'].'" tabindex="-1" role="dialog" aria-labelledby="'.$row['modal_src'].'" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="'.$row['modal_src'].'">'.$row['modal_header'].'</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
               <img class ="images" src="'.$row['modal_img'].'" alt="'.$row['img_alt'].'"></img>
               <p class="p-modal">'.$row['modal_p'].'</p>
         </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-outline-info" data-dismiss="modal">Zamknij</button>
                 <form method="POST">
                <input  type="hidden" type="text" name="id" value="' . $row['id'] . '">
                <button type="submit"  class="btn btn-outline-danger">Skasuj</button>
               </form>
                 </div>
             </div>
           </div>
         </div>';
         }
         echo '</div>';
         $stmt->closeCursor();
    }

    public function remove_portfolio_el($dbconnection){
        if (isset($_POST['id'])) {
             
            $stmt = $dbconnection->prepare('DELETE FROM portfolio_gallery WHERE id = :id');
            $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    //categories
    public function add_category($dbconnection){
        if(isset($_POST['category']))
        {
        $stmt = $dbconnection->prepare('INSERT INTO categories(category,etykieta) VALUES
                                    (:category,:etykieta)');
            $stmt->bindParam(':category', $_POST['category'], PDO::PARAM_STR);
            $stmt->bindParam(':etykieta', $_POST['etykieta'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }

    public function create_backend_categories($dbconnection){
        $stmt = $dbconnection->query('SELECT id,category,etykieta FROM categories');
        
        echo '<table class="table table-hover">
        <thead >
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Kategoria</th>
            <th scope="col">Etykieta</th>
            <th scope="col" >Akcja</th>
          </tr>
        </thead>
        <tbody>';
            foreach ($stmt as $row) {
                echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['category'] . '</td>
                <td>' . $row['etykieta'] . '</td>
                <td>
          <form method="POST">
          <input  type="hidden" type="text" name="id" value="' . $row['id'] . '">
          <button  type="submit" class="btn btn-outline-danger btn-sm">Skasuj</button></td></tr>
          </form>';
            }
    }

    public function delete_category($dbconnection)
    {
        if (isset($_POST['id'])) {
             
            $stmt = $dbconnection->prepare('DELETE FROM categories WHERE id = :id');
            $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    public function create_frontend_categories($dbconnection)
    {
        $stmt = $dbconnection->query('SELECT category,etykieta FROM categories');

        echo '<div class="filter">
        <div class="heading">        
       <h3 class ="h3__heading">Kategorie</h3>
       </div>
       <button data-name="*" class="button active">All</button>';
        foreach($stmt as $row)
        {
            echo'<button data-name=".'.$row['category'].'" class="button">'.$row['etykieta'].'</button>';
        }
        echo '</div>
        ';
    }

    public function tooltip_category($dbconnection){
        $stmt = $dbconnection->query('SELECT category FROM categories');

        foreach($stmt as $row)
        {
            echo '<div class="alert alert-secondary" role="alert" style="text-align:center;">
            '.$row['category'].'
          </div>';
        }

    }

    public function current_portfolio_header($dbconnection,$field){
        $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=4');
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row[$field];
        }
        
    }

    public function set_section_portfolio($dbconnection){
        if(isset($_POST['header']))
        {
           
            $stmt = $dbconnection->prepare('UPDATE headings SET
            header= :header,
            header_small= :header_small WHERE id=4');
        $stmt->bindParam(':header', $_POST['header'], PDO::PARAM_STR);
        $stmt->bindParam(':header_small', $_POST['header_small'], PDO::PARAM_STR);
        $stmt->execute();
        }
    }

    public function get_section_portfolio($dbconnection){
        $stmt = $dbconnection->prepare('SELECT header, header_small FROM headings WHERE id=4');
        $stmt->execute();
        echo '<div id="exp" class="row">
            
        <div class="heading">';
        foreach ($stmt as $row) {
        echo '  
           <h2 class="h2__heading">'.$row['header'].'</h2>
           <h3 class ="h3__heading">'.$row['header_small'].'</h3>';
        }
        echo ' </div></div>';
        $stmt->closeCursor();
    }
    //---------------------------Wiadomości--------------------------------------------------------
    public function send_mails($dbconnection)
    {
        
        if (isset($_POST['topic'])) {
            $stmt = $dbconnection->prepare('INSERT INTO contact(temat,mail,wiadomosc) VALUES
                                    (:topic, :email, :message_b)');
            $stmt->bindParam(':topic', $_POST['topic'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(':message_b', $_POST['message_b'], PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    
    public function get_mails($dbconnection)
    {
        
        $stmt = $dbconnection->query('SELECT id, temat, mail, wiadomosc FROM contact');
        $counter = 1;
        foreach ($stmt as $row) {
            echo '<tr><td>' . $counter++ . '</td><td>' . $row['temat'] . '</td><td>' . $row['mail'] . '</td><td>' . $row['wiadomosc'] . '</td><td>
          <form method="POST">
          <input  type="hidden" type="text" name="id" value="' . $row['id'] . '">
          <button  type="submit" class="btn btn-outline-danger btn-sm">Skasuj</button></td></tr>
          </form>';
        }
        $stmt->closeCursor();
    }
    
    public function delete_mails($dbconnection, $nr)
    {
        $dbconnection->query('DELETE FROM contact WHERE id=' . $nr);
    }
    
    public function count_mails($dbconnection)
    {
        $stmt = $dbconnection->query('SELECT COUNT(*) FROM contact');
        $num  = $stmt->fetchColumn();
        echo $num;
    }

    public function info_mails($dbconnection)
    {
        
        $stmt  = $dbconnection->query('SELECT id, temat, mail, wiadomosc FROM contact');
        $count = $dbconnection->query('SELECT COUNT(*) FROM contact');
        $num   = $count->fetchColumn();
        if ($num > 0) {
            echo '<h6 class="dropdown-header">Nowe wiadomości:</h6>';
            foreach ($stmt as $row) {
                echo '<div class="dropdown-divider"></div>
            <a class="dropdown-item" href="mails.php">
            <strong>' . $row['temat'] . '</strong>
            <span class="small float-right text-muted">' . $row['mail'] . '</span>
            <div class="dropdown-message small">' . $row['wiadomosc'] . '</div>
            </a>
            <div class="dropdown-divider"></div>';
            }
            $stmt->closeCursor();
        } else {
            echo '<div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Brak wiadomości</h6>
            <div class="dropdown-divider"></div>';
        }
    }
    //------------------------------EDYTOR CSS------------------------------//
    public function read_css()
    {
        $data = file_get_contents("../css/custom.css");
        echo $data;
    }

    public function update_css()
    {
       
        
        if(isset($_POST['css']))
        {
            $path = "../css/custom.css";
            $value = $_POST['css'];
            file_put_contents($path, $value);
        }
    }
}

?>