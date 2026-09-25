

<?php
error_reporting(0);

if(isset($_POST['submit'])){
    $to = "vermaabhishek79326@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $person= $_POST['person'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "Name : ".$name. "\r\n" .
    		"Contact : ".$contact. "\r\n" .
        "Subject : ".$person. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $name, $body , $headers)){
        echo "<script>alert('Thanks For Enqiry We Will Contact You Soon.')</script>";
        echo("<script>window.location = 'index.php';</script>"); 
         }else{
         echo "<p style='color:red;'>Failed To Send Mail</p>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<form action="" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name.." required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"  name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="subject" name="contact" placeholder="Your Contact No.." pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required >
                                        <label for="subject">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="person" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control"  name="body" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>















              
</body>
</html>

