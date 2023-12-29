<?php

// sleep serve per simulare il sito con la "lentezza"

// Menù

$menuItems = array(
    array("Home", "index.php"),
    array("About me", "about.php"),
    array("Services", "#"),
);

$prgh = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non dolor eu libero rutrum suscipit. Nulla volutpat, nisi id cursus laoreet, sapien justo scelerisque nisl, at maximus libero enim et mauris. Aenean euismod eros eu mi blandit eleifend.Proin sit amet tellus tincidunt nisi porttitor consequat at non purus. In consectetur ac ante suscipit condimentum. Ut at dolor eu neque pharetra lobortis varius quis tellus. Phasellus egestas augue ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend. Proin sit amet tellus tincidunt nisi porttitor consequat at non purus.";


// Footer

$copText = "Cristofaro Cecoro - All Rights Reserved 2023";
$phoneNumber = "+39 333. 345. 6789";
$mail = "mymail@gmail.com";
$linksFooter = array(
    "Twitter" => "https://twitter.com",
    "Instagram" => "https://instagram.com",
    "YouTube" => "https://youtube.com"
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylemin.css" type="text/css" rel="stylesheet">
    <title>Services</title>
</head>
<body>




    <!-- Menù di navigazione -->
    <div class="topnav">
            <ul>
                <?php
                    foreach($menuItems as $item) {
                        echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
                    }
                ?>
            </ul>
        </div>

    <h1 class="title1">Section Services</h1>

    <!-- Perché invece di passarci, c'è un box apposito -->
    <div class="title">
        <h2 class="title2">Scroll to discover.</h2>
    </div>

    <h3 class ="title-service2">In this section we will see some work that made me fantastic</h3>

    <p>

    <?php

    // Questo pezzo serve per andare direttamente alla sezione di lavori finti

    $goInservice = true;

    if ($goInservice) {
        echo "<h4 class='title-service2'><a class='link-service' href='#bottom'>Go to Bottom to see the services</a></h4>";
    } else {
        echo "Error 404: Doesn't exist";
    }
    ?>

    </p>

    <h1 class="title-service3">First category:</h1>
    <h2 class="title-service4">Manifests</h2>

    

    <div class="box1">
    <p class="prgh1-service">
        <?php echo $prgh; ?>

        Manifest no°1,Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nullam non dolor eu libero rutrum suscipit. 
        Nulla volutpat, nisi id cursus laoreet, sapien
        justo scelerisque nisl.

        Manifest no°2 then, Ut at dolor eu neque pharetra
        lobortis varius quis tellus. Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        Manifest no°3 so, at maximus libero enim
        et mauris. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        Manifest no°4 Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
    </p>
    </div>

    <div class="box-img">
        <img src="img/fittizioManifesto.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioManifesto.jpg"><figcaption>Manifest n°1</figcaption></a>

        <img src="img/fittizioManifesto2.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioManifesto2.jpg"><figcaption>Manifest n°2</figcaption></a>

    </div>

    <div class="box-img">
        <img src="img/fittizioManifesto3.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioManifesto3.jpg"><figcaption>Manifest n°3</figcaption></a>

        <img src="img/fittizioManifesto5.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioManifesto5.jpg"><figcaption>Manifest n°4</figcaption></a>
    </div>

    <h1 class="title-service3">Second category:</h1>
    <h2 class="title-service4">Art Abstract</h2>

    <div class="box1">
    <p class="prgh1-service">
        <?php echo $prgh; ?>

        The art of no°1, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nullam non dolor eu libero rutrum suscipit. 
        Nulla volutpat, nisi id cursus laoreet, sapien
        justo scelerisque nisl.

        The art of no°2 the work was, Ut at dolor eu neque pharetra
        lobortis varius quis tellus. Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        The art of no°3 when, at maximus libero enim
        et mauris. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        The art of no°4 Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
    </p>
    </div>

    <div class="box-img">
        <img src="img/fittizioAstratto.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioAstratto.jpg"><figcaption>Art n°1</figcaption></a>

        <img src="img/fittizioAstratto2.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioAstratto2.jpg"><figcaption>Art n°2</figcaption></a>

    </div>

    <div class="box-img">
        <img src="img/fittizioAstratto3.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioAstratto3.jpg"><figcaption>Art n°3</figcaption></a>

        <img src="img/fittizioAstratto4.jpg" width="25%">
        <a class="link-service2" title="Click here to see" href="img/fittizioAstratto4.jpg"><figcaption>Art n°4</figcaption></a>
    </div>

    <h1 class="title-service3">Third category:</h1>
    <h2 class="title-service4">Fashion</h2>

    <div class="box1">
    <p class="prgh1-service">
        <?php echo $prgh; ?>

        The project no°1, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nullam non dolor eu libero rutrum suscipit. 
        Nulla volutpat, nisi id cursus laoreet, sapien
        justo scelerisque nisl.

        The project no°2 was particular, Ut at dolor eu neque pharetra
        lobortis varius quis tellus. Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        The project no°3 was never, at maximus libero enim
        et mauris. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
        consequat at non purus.

        The project no°4 Phasellus egestas augue
        ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend.
        Proin sit amet tellus tincidunt nisi porttitor 
    </p>
    </div>

    <div class="box-img">
        <img src="img/fittizioModa.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioModa.jpg"><figcaption>Fashion n°1</figcaption></a>

        <img src="img/fittizioModa2.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioModa2.jpg"><figcaption>Fashion n°2</figcaption></a>

    </div>

    <div class="box-img">
        <img src="img/fittizioModa3.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioModa.jpg"><figcaption>Fashion n°3</figcaption></a>

        <img src="img/fittizioModa4.jpg" width="25%">
        <a class="link-service3" title="Click here to see" href="img/fittizioModa4.jpg"><figcaption>Fashion n°4</figcaption></a>
    </div>

    <p>
    <?php

    // Per capire in modo semplice, ho diviso i tre elementi, form e feedback e le voci dei lavori


    // Services o LAVORI

    // Ho utilizzato una var che prende il contenuto del file

    $jsonData = file_get_contents('data_services.json');

    // Questa var lo decodifica e lo rendiamo un'array perché è true

    $data = json_decode($jsonData, true);

    // Dichiaro il titolo

    echo "<h1 class='title-service3' id='bottom'>What we offer</h1>";



    $name =     isset($_POST["Name"])       ? DataInput($_POST["Name"])    : '';
    $surname =  isset($_POST["Surname"])    ? DataInput($_POST["Surname"]) : '';
    $email =    isset($_POST["Email"])      ? DataInput($_POST["Email"])   : '';
    $message =  isset($_POST["Message"])    ? DataInput($_POST["Message"]) : '';
    
    /**
     * E nel ciclo itera ogni elemento dell'array specifica
     * anche il contenuto di esso dichiarando il testo.
     */

    foreach ($data as $serviceID => $desc) {

        /** 
         * $serviceID è una var per identificare dei numeri dei servizi (n)
         * che associa al file JSON (1, 2 e 3) e $desc['title']
         * è una var che entra nel dato specificato dal numero che appunto
         * il dato è 'title' che contiene l'informazione come il titolo.
         */ 

        echo "<p class='prgh3-service'><a class='link-service2' href='?service_id={$serviceID}'>{$desc['title']}</a></p>";
    }

        /** Nella condizione IF, contiene l'inizializzazione per verificare
         * se nella query string esiste quel testo specificato e operatore
         * AND per verificare sempre se esiste anche nella var $data.
         * 
         * In termini semplici, identifica se esiste la parola "service_id"
         * e se contiene il valore (1 per esempio), ritorna true ma, con
         * l'operatore AND verifica anche se nella var $data esiste nell'
         * array associativo l'ID di 1 ritorna true.
         */

    if (isset($_GET['service_id']) && isset($data[$_GET['service_id']])) {

        // La var riprende le informazioni di $data

        $selectedService = $data[$_GET['service_id']];

        // Infine lo dichiara con i testi

        echo "<h2 id='bottom' class='title-service3'>{$selectedService['title']}</h2>";
        echo "<p class='prgh2-service'>{$selectedService['description']}</p>";
    }

    ?>

    </p>

    <h1 class="title-service3">Don't hesitate to contact me!</h1>
    <p class="prgh1-service">
        <?php echo $prgh; ?>
    </p>

    <p>
    <?php

    $submittedDataError = false;
    $submittedFeedbackError = false;
    $noDataSubmittedError = false;
    $hasErrors = false;

    // FORM


    /** Questa funzione consiste che accetta il param $data
     *  e che ha 3 elementi differenti:
     * 
     * - trim - E' una funzione che elimina gli spazi bianchi presenti dall'inizio fino alla fine della riga
     * - stripslashes - E' una funzione che rimuove i caratteri escape "\" presenti nella stringa.
     * - htmlspecialchars - E' una funzione che converte i caratteri che hanno significati speciali in entità HTML.
     *   significa che quando scrivi dei tags all'interno del form, per esempio: <h1>Hello World</h1>. Esso
     *   creerebbe problemi alla pagina. E con questa funzione lo interpreta come testo normale.
     *
     *  return - E' una keyword che consente la restituzione del valore
    */

    function DataInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // La var è falsa perché quando nel form i dati non sono inseriti correttamente, ritorna true dicendoci di compilare i box

    $submittedData = false;
    $submittedDataError = false;
    $errorMessage = '';

    // Questa riga invece, verifica se la richiesta HTTP utilizzata per caricare la pagina è stata fatta con il metodo "POST"

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ButtonData"])) {

        /**
         * Le var assegnate, hanno la funzione che ho descritto in alto, che tramite il metodo "POST" viene assegnato ciascuna
         * delle var presenti. Ma prima che vengano assegnate, vengono elaborati grazie appunto alla funzione quando viene caricata
         * la pagina.
         */

        if (isset($_POST["Name"]) && isset($_POST["Surname"]) && isset($_POST["Email"]) && isset($_POST["Message"])) {

        $name = DataInput($_POST["Name"]);
        $surname = DataInput($_POST["Surname"]);
        $email = DataInput($_POST["Email"]);
        $message = DataInput($_POST["Message"]);



        $message = isset($_POST["Message"]) ? DataInput($_POST["Message"]) : '';

        }

        /**
         * Mentre nella condizione if, di ciascuna var assegnata, l'operatore di negazione "!" è per essere differente ad un
         * elemento, in questo caso del form, se non è vuoto "empty", viene creato un'array associativo che ogni oggetto è
         * coppia chiave-valore.
         */

        if (!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {

            $data = array(
                'Nome' => $name,
                'Cognome' => $surname,
                'Email' => $email,
                'Messaggio' => $message,
            );

            $submittedData = true;
            $noDataSubmittedError = true;

        /**
         * La prima riga è chel'array associativo, viene convertito in una stringa JSON utilizzando "json_encode". Ma
         * l'opzione JSON_PRETTY_PRINT serve per formattare e rendere leggibile il file JSON. Perché altrimenti sarebbe:
         * 
         * {"nome":"Hello", "cognome":"World", etc}
         * 
         * Successivamente la seconda rigam questa stringa viene scritta nel file "data.json" usando file_put_contents
         */

        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('data.json', $jsonData);

        /**
         * Nella prima riga, crea la stringa che contiene i dati immessi nel form che sono formattati e leggibili grazie
         * a "\n" che mette a capo; Poi nella seconda riga, viene di nuovo utilizzata la funzione file_put_contents che
         * serve per creare e scrivere nel file dataForm.txt, che ha l'opzione FILE_APPEND che permette l'aggiunta della
         * stringa senza sovrascrivere i dati. Poi la dichiarazione del testo che i dati sono stati inviati correttamente 
         */

        $logData = "Name: $name\nSurname: $surname\nEmail: $email\nMessage: $message\n\n";
        file_put_contents('dataForm.txt', $logData, FILE_APPEND);
        echo "<p class='prgh2-service'>Your informations are sent correctly</p>";

        } else {
            $submittedDataError = true;
            $noDataSubmittedError = true;
            // Nella condizione else invece, attiva la var che viene utilizzata sotto al form.
            $hasErrors = true;
        }
    }

    if ($hasErrors) {
        echo "<p class='prgh1-service' style='color: red;'>Error: The boxes of form must be complete.</p>";
    } else {
        echo "<p class='prgh1-service'>Welcome! If you want to be in contact with me, fill the boxes of form, also if you are encountering one or more bugs, report in feedback section.</p>";
    }
?>
    </p>


    <form id="Contacts" autocomplete="on" action="services.php#Contacts" method="POST">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" id="name" name="Name" placeholder="Insert your name" minlength="4" maxlength="20">

            <label for="surname">Surname</label>
            <input type="text" id="surname" name="Surname" placeholder="Insert your surname" minlength="4" maxlength="20">

            <div>
            <label for="e-mail">Email</label>
            <input type="email" id="e-mail" name="Email" placeholder="Insert your email" minlength="4" maxlength="30">
             
            
            <label for="message">Message</label>
            <textarea class="textarea1" cols="30" rows="3" id="message" name="Message" placeholder="Insert your message" minlength="4" maxlength="200"></textarea>
            </div> 

            <button name="ButtonData" class="button1" type="submit">Submit</button>
        </fieldset>
    </form>

   

    <form id="FeedbackForm" action="services.php#feedback" autocomplete="on" method="POST">
    <fieldset>
    <label class="feedback" for="feedback">Send to us a feedback that you are encountering the problems</label>
    <textarea class="textarea2" cols="30" rows="2" id="feedback" name="Feedback" placeholder="Write here to report" title="Write here to report"></textarea>
    <button class="button2" type="submit" name="ButtonFeedback">Submit</button>
    </fieldset>
    </form>


    <p>
    <?php

        $submittedFeedbackError = false;
        $noFeedbackSubmittedError = false;
        $submittedFeedback = false;
        $hasErrors = false;

        // FEEDBACK

        // E' uguale al form ma rispieghiamo

        // E' false perché così in caso di errore. Trasforma true e compare il messaggio d'errore

        //

        $errorMessage = '';

        // Nella prima condizione IF, controlla se il protocollo HTTP è POST 

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ButtonFeedback"])) {

            /**
             * se true, assegniamo alla var se è presente sempre nel protocollo HTTP il nome Feedback, che
             * in seguito c'è l'operazione ternaria, che ? è di condizione IF, : è ELSE.
             * 
             * Se assegna true, ritorna la funzione che consente di pulire la stringa nel campo. Se false assegna una stringa vuota
             */

            $feedbackObject = isset($_POST["Feedback"]) ? DataInput($_POST["Feedback"]) : '';

            /**
             * Nella seconda condizione IF, verifica se è diverso da empty o vuoto il campo presente.
             * 
             * Se è true, creiamo il file dove contiene l'informazione presente dal campo.
             */

            if (!empty($feedbackObject)) {

                // Creazione del file

                $logFeedback = "Feedback: $feedbackObject\n\n";

                // Immettiamo il contenuto dal nome del file e il contenuto del $logFeedback e FILE_APPEND per non sovrascrivere quello originale

                file_put_contents('feedbackServices.txt', $logFeedback, FILE_APPEND);

                // E dichiariamo il messaggio che ci ha inviato il feedback

                echo "<p class='prgh1-service'>Thank you, your contribute will help us to implement our website</p>";

                $submittedFeedback = true;
            } else {
                // Se false, torna true il messaggio che contiene il testo d'errore
                $submittedFeedbackError = true;
                $noFeedbackSubmittedError = true;
                $hasErrors = true;
            }
        }

        if ($hasErrors) {
            echo "<p class='prgh1-service' style='color: red;'>Error: If you are encountering one or more bugs, report.</p>";
        } else {
            echo "<p class='prgh1-service'>Do not be afraid, report if you are finding one or more bugs.</p>";
        }
        ?>   
    </p>



    
    </div>

    <footer>
            <section>
                <div class="box-footer">
                    <div class="alignment">
                        <div class="section">
                        <h2 class="title-footer"><a href="#">Copyrights</a></h2>
                        <p class="footer-prgh1"><?php echo $copText; ?></p>
                    </div>


                        <div class="section">
                        <h2 class="title-footer">Contacts</h2>
                        <p><a href="#"><?php echo $phoneNumber; ?></a></p>
                        <p><a href="#"><?php echo $mail; ?></a></p>
                        </div>


                        <div class="section">
                        <h2 class="title-footer">Follow me on:</h2>
                        <?php
                        foreach ($linksFooter as $social => $link) {
                            echo "<p><a href='{$link}'>{$social}</a></li>";
                        }
                        ?>

                    </div>
                    </div>
                    </div>
            </section>
        </footer>

</body>
</html>
