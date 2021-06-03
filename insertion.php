<?php 



        // servername => localhost 

        // username => root 

        // password => empty 

        // database name => registrement 

        // Taking all 5 values from the form data(input) 

    

       $nom =  $_POST['nom']; 

  

      $prenom = $_POST['prenom']; 

    
        $email = $_POST['email']; 

    

    $mpasse = $_POST['mpasse']; 

  $conn = mysqli_connect("localhost", "root", "", "registrement"); 

          

        // Check connection 

        if($conn === false ){ 

            die("ERROR: Could not connect. " 

                . mysqli_connect_error()); 

        } 

          

        

          

        // Performing insert query execution 

        // here our table name is inscrit 

       // $sql = " INSERT INTO inscrit (nom, prenom, email, mpasse) VALUES ('$nom', '$prenom', '$email', '$mpasse')";

       $sql = 'INSERT INTO `inscrit` (`nom`, `prenom`, `email`,`mpasse` ) VALUES ("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$mpasse.'");';
            

          

        if(mysqli_query($conn, $sql)){ 

            echo "<h3>data stored in a database successfully." 

                . " Please browse your localhost php my admin" 

                . " to view the updated data</h3>";  

  

            echo nl2br("\n $nom\n $prenom\n "

                . "$email\n $mpasse"); 

        } else{ 

            echo "ERROR: Hush! Sorry $sql. " 

                . mysqli_error($conn); 

        } 

          

        // Close connection 

        mysqli_close($conn); 

        ?>