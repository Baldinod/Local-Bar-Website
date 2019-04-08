<script type="text/php">
<? php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "somerdalebarandgrill@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
};?>
</script>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somerdale Bar's Contact Information and Contact Form">
    <meta name="author" content="Dan B">
    <title>Contact Us | Somerdale Bar</title>

    <!-- EXTERNAL  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- LOCAL -->
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-526RRG4"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.css"></script>
    <script>
        $(function () {
            $('a').each(function () {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('active'); $(this).parents('li').addClass('active');
                }
            });
        });
    </script>
</head>

<!-- add alt tags to each <img src="#" alt="helps search engines find you"/>  -->

<body data-spy="scroll" data-target="#myNavbar">
     <div id="myNavbar">
            <script>
                    $(function(){
                      $("#myNavbar").load("navbar.html"); 
                    });
            </script>
     </div>
    <div class="m-0 border-left border-right">
        <div class="container" style="padding-top:3.5rem">
            <section class="my-4 mx-3 px-3">
                <h2 class="text-center font-weight-bold fancy"><span class="px-3">CONTACT US</span></h2>
                <div class="row pt-4" style="justify-content:center">
                    <div class="col-md-7" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap">
                            <h4 class="text-center font-italic py-4">Location</h4>
                            <!--  Google map api  -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3063.20414126617!2d-75.02357718510073!3d39.84725799800049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6cda436af533f%3A0x16801fb26568f9f7!2s209+N+White+Horse+Pike%2C+Somerdale%2C+NJ+08083!5e0!3m2!1sen!2sus!4v1551819286236" width="450" height="390" frameborder="0" style="border:0;width:100%" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-5" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap">
                            <div class="text-center">
                                <h4 class="font-italic py-4">Somerdale Bar</h4>
                                <p class="mx-auto text-center">
                                    (856) 435-8983<br />
                                    209 North White Horse Pike<br />
                                    Somerdale, NJ 08083
                                </p>
                            </div>
                            <h4 class="font-italic py-4 text-center">Business Hours</h4>
                            <p class="mx-auto text-center" style="width:11em">
                                Monday:     11am-11pm<br />
                                Tuesday:    11am-8pm<br />
                                Wednesday:  11am-11pm<br />
                                Thursday:   11am-11pm<br />
                                Friday:     11am-11pm<br />
                                Saturday:   11am-3am<br />
                                Sunday:     12pm-10pm
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        <div class="container">
            <div id="contact"></div>
            <!--Section: Contact v.2-->
            <section class="my-4 mx-3">
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center fancy"><span class="px-3">GET IN TOUCH</span></h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-3">Questions or concerns? Contact us! We'll be sure to reply as soon as we can.</p>
              <div class="row">
                            <div class="col-md-6" style="padding-right: 7.5px !important; padding-left: 7.5px !important;" id="form_container">
                                <h2>Contact Us</h2>
                                <p>
                                   Please send your message below. We will get back to you at the earliest!
                                </p>
                                <form role="form" method="post" id="reused_form">
                        
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label for="message">
                                                Message:</label>
                                            <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="name">
                                                Your Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="JOhn " required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="email">
                                                Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                        </div>
                                    </div>
                        
                        
                        
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <button type="submit" class="btn btn-lg btn-default pull-right" >Send →</button>
                                        </div>
                                    </div>
                        
                                </form>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
                                    <h3>Sent successfully!</h3>
                                </div>
                                <div id="error_message"
                                        style="width:100%; height:100%; display:none; ">
                                            <h3>Error</h3>
                                            Sorry there was an error sending your form.
                        
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-md-5" style="padding-right: 7.5px !important; padding-left: 7.5px !important;">
                        <div class="wrap text-center">
                            <ul class="list-unstyled my-2">
                                <li>
                                    <i class="fa fa-location-arrow mt-2"></i>
                                    <p>Somerdale, NJ USA</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone mt-2"></i>
                                    <p>(856) 435-9893</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope mt-2"></i>
                                    <p>SomerdaleBarandGrill@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Contact v.2-->
        </div>
    </div>
    <div id="myfooter">
    </div>

     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
             $(function(){
                      $("#myfooter").load("footer.html"); 
                }); 
    </script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
    </script>

</body>
</html>

