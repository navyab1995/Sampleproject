 <?php
 $conn=mysqli_connect('localhost','root','','contact_db');
 if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $plan=$_POST['plan'];
    $address=$_POST['address'];
    $message=$_POST['message'];
   $insert=" INSERT INTO `contact_form`( `name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";
    mysqli_query($conn,$insert);
    header('location:contact.php');

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/sample project/style.css">
    </head>
    <body>
        <div class="container">
            <?php @include 'header.php';?>
            <section class="contact">
                <h1 class="heading">contactus</h1>
                <form action="" method="post">
                <div class="flex">
                    <div class="inputBOX">
                        <span>Your name</span>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="inputBOX">
                        <span>Your Email</span>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="inputBOX">
                        <span>Your number</span>
                        <input type="number" placeholder="Enter your Number" name="number" required>
                    </div>
                    <div class="inputBOX">
                        <span>choose plan</span>
                        <select name="plan">
                            <option value="basic">basic plan</option>
                            <option value="premium">premium plan</option>
                            <option value="basic">ultimate plan</option>
                        </select>
                    </div>
                    <div class="inputBOX">
                        <span>  your Address></span>
                        <textarea name="address" placeholder="Enter your address" name="address" required cols="35" rows="10"></textarea>
                    </div>
                    <div class="inputBox">
            <span>your message</span>            
            <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
               </div>
                </div>
         <input type="submit" value="send message" name="send" class="btn">
            </form>
            </section>
            <?php @include 'footer.php';?>
            </div>
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="sample project/script.js"></script>
    </body>
</html>