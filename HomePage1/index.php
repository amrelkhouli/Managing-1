
<?php
require ('./Php/dbConnection.php');
require('./Php/help.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Fullname     = Clean($_POST['Fullname']);
    $Email    = Clean($_POST['Email']);
    $Password = md5($_POST['Password']);
    $Phone   = $_POST['Phone'];
    $Message = $_POST['Message'];

    $errors = [];
    if(!validate($Fullname,1)){
        $errors['Fullname'] = "Field Required";
    }
    ///////////////////////////////////////////////////
    if(!validate($Email,1)){
        $errors['Email'] = "Field Required";
    }elseif(!validate($Email,2)){
        $errors['Email'] = "Invalid Email Format";
    }
    ///////////////////////////////////////////////////
    if(!validate($Password,1)){
        $errors['Password'] = "Field Required";
    }elseif(!validate($Password,3)){
        $errors['Password'] = "Length Must >= 6 chs";
    }

    ///////////////////////////////////////////////////
    if(!validate($Phone,1)){
        $errors['Phone'] = "Field Required";
    }elseif(!validate($Phone,7)){
        $errors['Phone'] = "Length Must >= 6 chs";
        
    }
    if(count($errors) > 0){
        foreach ($errors as $key => $value) {
            echo '* '.$key.' : '.$value.'<br>';
        }
    }else{
            $Password = md5($Password);
            $sql = "insert into users (FullName,Password,Email,Phone,Message) values ('$Fullname','$Password','$Email','$Phone','$Message')";
            $op  = mysqli_query($con,$sql);
            if($op){
                $message = "Raw Inserted";
            }else{
                $message = "Error Try Again" .mysqli_error($con);
            }
        $_SESSION['Message'] =  ["message" => $message];
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quality Control Project</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <style>
        table, th {
          border:1px solid black;
          border-collapse: collapse;
        }

        </style>
        
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">المعهد العالي لعلوم الحاسب ونظم المعلومات</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#form">Form</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cards">Cards</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- home-->
        <header id="home" class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"> fourth year </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">department of computer science</p>
                        <a class="btn btn-primary btn-xl" href="#home">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        

 <!-- form-->
        <h3 style="text-align: right;margin: 20px;">...................... :جامعه /أكاديميه </h3>
        <h3 style="text-align: right;margin: 20px;">........................... :كلية /معهد </h3>
        <h3 style="text-align: right;margin: 20px;">........................... :برنامج </h3>

        <div id="form" class="mt-5 mb-5 ">
            <h2 class="text-center mb-3">نموذج رقم (15)</h2>
            <h2 class="text-center mb-5">  الخطةالتنفيذية للتطوير وتعزيز البرنامج التعليمي</h2>
            <div class="table-responsive">
                
                <table class="table">
                    <caption> </caption>
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">مؤشرات المتابعة وتقيم الأداء</th>
                        <th scope="col" class="text-center">مسؤليه التنفيذ</th>
                        <th scope="col" class="text-center">التوقيت </th>
                        <th scope="col" class="text-center">آليات التنفيذ</th>
                        <th scope="col" class="text-center"> مقترحات التطوير والتعزيز</th>
                        <th scope="col" class="text-center"> مجالات التطوير والتعزيز</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="height: 400px"></th>
                        <th scope="row" style="height: 400px"></th>
                        <th scope="row" style="height: 400px"></th>
                        <th scope="row" style="height: 400px"></th>
                        <th scope="row" style="height: 400px"></th>
                        <th scope="row" style="height: 400px"></th>
                        
                      </tr>
                     
                    </tbody>
                  </table>
              </div>

        </div>
        <h3 style="text-align: right;margin: 20px;">................................. : مدير البرنامج</h3>
        <h3 style="text-align: right;margin: 20px;">........................... : عميد الكلية/المعهد </h3>


<!-- cards-->

        <section class="page-section bg-light" id="about">
         
                <section id="card">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="products">
                                    <div class="card">
                                        <img src="../HomePage/assets/dd.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary mx-auto">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class=" products">
                                    <div class="card">
                                        <img src="../HomePage/assets/dd.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>                                           
                                            <a href="#" class="btn btn-primary">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class=" products">
                                    <div class="card">
                                        <img src="../HomePage/assets/dd.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>                                            
                                            <a href="#" class="btn btn-primary">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class=" products">
                                    <div class="card">
                                        <img src="../HomePage/assets/dd.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>                                            
                                            <a href="#" class="btn btn-primary">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" name="Fullname" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <!-- Password input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" name="Password" type="password" placeholder="Enter your Password..." data-sb-validations="required" />
                                    <label for="password">password</label>
                                    <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="Email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="Phone" id="Phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                    <label for="phone">Phone number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" name="Message" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-xl "  type="submit">Submit</button></div>

                                <!-- <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div> -->
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Project Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
