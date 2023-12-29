<?php

// Menù di navigazione


$menuItems = array(
    array("Home", "index.php"),
    array("About me", "#"),
    array("Services", "services.php"),
);

$prgh = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non dolor eu libero rutrum suscipit. Nulla volutpat, nisi id cursus laoreet, sapien justo scelerisque nisl, at maximus libero enim et mauris. Aenean euismod eros eu mi blandit eleifend.Proin sit amet tellus tincidunt nisi porttitor consequat at non purus. In consectetur ac ante suscipit condimentum. Ut at dolor eu neque pharetra lobortis varius quis tellus. Phasellus egestas augue ac urna aliquet viverra. Aenean euismod eros eu mi blandit eleifend. Proin sit amet tellus tincidunt nisi porttitor consequat at non purus.";


// Footer

$copText = "Cristofaro Cecoro - All Rights Reserved 2023";
$phoneNumber = "+39 333. 345. 6789";
$email = "mymail@gmail.com";
$linksFooter = array(
    "Twitter" => "https://twitter.com",
    "Instagram" => "https://instagram.com",
    "YouTube" => "https://youtube.com"
);

?>
<!DOCTYPE html>
<?php

function DataInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylemin.css" type="text/css" rel="stylesheet">
    <title>About me</title>
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
        
        
        
    <h1 class="title1">Section About me</h1>
    </div>

        <!-- Perché invece di passarci, c'è un box apposito -->

        <div class="title">
        <h2 class="title2">Scroll to discover.</h2>
        </div>
        
    

        <div class="box1">
        <h1 class="title-about">Who are you?</h1>

        
        <p class="prgh1-about">
            <?php echo $prgh; ?>
        </p>
        
        </div>

        <h1 class="title-about">Why are you here?</h1>
        <p class="prgh1-about">
            <?php echo $prgh; ?>
        </p>

        <h1 class="title-about">What are your passions?</h1>
        <p class="prgh1-about">
            <?php echo $prgh; ?>
        </p>


        <div class="box2">

        <h1 class="title-about">Do you like this job?</h1>

        <p class="prgh1-about">
            <?php echo $prgh; ?>
        </p>

        
        </div>

        <?php

        $feedbackSubmit3 = false;
        $errorMessage = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $feedbackObject = isset($_POST["Feedback"]) ? DataInput($_POST["Feedback"]) : '';

            if (!empty($feedbackObject)) {

                $logFeedback = "Feedback: $feedbackObject\n\n";

                file_put_contents('feedbackAbout.txt', $logFeedback, FILE_APPEND);

                echo "<p class='prgh1-service'>Thank you, your contribute will help us to implement our website</p>";
            } else {
                $feedbackSubmit3 = true;
                $errorMessage = 'Error: Please fill out the feedback form.';
            }
        }

        ?>



        <form id="FeedbackForm" action="about.php#feedback" autocomplete="on" method="POST">
        <fieldset>
        <label class="feedback" for="feedback">Send to us a feedback that you are encountering the problems</label>
        <textarea class="textarea2" cols="30" rows="2" id="feedback" name="Feedback" placeholder="Write here to report" title="Write here to report"></textarea>
        <button class="button2" type="submit">Submit</button>
        </fieldset>
        </form>

        <?php

        $feedbackSubmit2 = false;
        $errorMessage = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $feedbackObject = isset($_POST["Feedback"]) ? DataInput($_POST["Feedback"]) : '';

            if (!empty($feedbackObject)) {
                $logFeedback = "Feedback: $feedbackObject\n\n";
                file_put_contents('feedbackHome.txt', $logFeedback, FILE_APPEND);

                echo "<p class='prgh1-service'>Thank you, your contribute will help us to implement our website</p>";
            } else {
                $feedbackSubmit2 = true;
                $errorMessage = 'Error: Please fill out the feedback form.';
                }
            }

            if ($feedbackSubmit2 && !empty($errorMessage)) {
                echo "<p class='prgh1-service' style='color: red;'>$errorMessage</p>";
            }
        ?>

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
                        <p><a href="#"><?php echo $email ?></a></p>
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