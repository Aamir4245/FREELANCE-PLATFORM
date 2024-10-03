<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <title>Welcome</title>
    <link rel="stylesheet" href="../Assets/BS/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/CSS/common.css">
    <link rel="stylesheet" href="../Assets/CSS/dashboard.css">

    <script defer src="../Assets/BS/js/bootstrap.bundle.min.js"></script>
    <script defer src="../Assets/BS/js/bootstrap.min.js"></script>
    <script defer src="../Assets/JS/dashboard.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&family=Passero+One&family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Karla:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Megrim&display=swap" rel="stylesheet">

</head>
<body>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dashboard Navbar +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="dashbar-main fixed-top d-flex justify-content-between p-0 my-3 text-center">

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dashbar > Offcanvas Toggler +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <ul class="nav dashnav-top-btns mx-3 px-1 align-items-center dashnav-toggle">
                        
            <button class="navbar-toggler p-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <span class="navbar-toggler-icon"></span>
            </button>

        </ul>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dashbar > Username + Notification + Profile Icon +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <ul class="nav justify-content-between dashnav-top p-2 mx-2 align-items-center">

            <a class="dashnav-user p-0 me-5 ms-3" href="#">Username</a>

            <div class="dashnav d-flex gap-2">
                        <img src="../Assets/SVG/notification.svg" alt="Notification" height="30" width="30" class="mx-2">
                        <img src="../Assets/SVG/person-circle.svg" alt="Profile" height="30" width="30" class="user-pro mx-2">
            </div>
            
        </ul>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dashbar > Home Page +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <ul class="nav dashnav-top-btns px-1 mx-2 align-items-center dashnav-home">
            <div class="nav-item">
                <a class="nav-link" href="../index.php">
                    <img src="../Assets/SVG/home.svg" alt="Home" height="30" width="30" loading="lazy">
                </a>
            </div>
        </ul>

    </div>



    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Offcanvas +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="offcanvas offcanvas-start cust-dashoffcan m-3" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Offcanvas > Header +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <div class="offcanvas-header py-3 d-flex justify-content-between">
            <h5 class="d-block mx-auto m-0" id="offcanvasScrollingLabel">Dashboard</h5>
        </div>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Offcanvas > Body + Links Btn +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <div class="offcanvas-body">

            <div class="btn btn-nav-items active text-center w-100 py-2 my-1" data-section-id="profielRow">
                Desk
            </div>
            <div class="btn btn-nav-items text-center w-100 py-2 my-1" data-section-id="personalDetailsRow">
                Personal Details
            </div>
            <div class="btn btn-nav-items text-center w-100 py-2 my-1" data-section-id="EduCertRow">
                Education
            </div>
            <div class="btn btn-nav-items text-center w-100 py-2 my-1" data-section-id="ExpInternRow">
                Experience
            </div>
            <div class="btn btn-nav-items text-center w-100 py-2 my-1" data-section-id="ContactRow">
                Contact Details
            </div>
            <div class="btn btn-nav-items text-center w-100 py-2 my-1" data-section-id="IdentityspaceRow">
                Identity
            </div>

        </div>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Offcanvas > Footer Primary hidden +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <div class="offcanvas-footer py-3 d-flex justify-content-between align-items-center">
            
            <img src="../Assets/SVG/notification.svg" alt="Notification" height="30" width="30" class="p-0 mx-4" loading="lazy">
            <a href="../index.php"  class="mx-4">
                <img src="../Assets/SVG/home.svg" alt="Home" height="30" width="30" loading="lazy">
            </a>
                
        </div>
        
    </div>


    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Main Fluid +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="container-fluid px-0 dash-main-fluid">
        <div class="dashdet-con">


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( main profile ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-def-profile justify-content-center align-items-center m-0" id="profielRow">

                <div class="col-xl-11 col-lg-10">

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > Card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card dash-def-profile-card">

                        <div class="card-body py-3 mx-auto">

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > Card > Profile Icon +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <img src="../Assets/SVG/free-profile.svg" class="d-block mx-auto my-1" alt="Profile" height="200" width="200" loading="lazy">

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > Card > Username + Bluetickmark +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="text-center my-0 dash-card-user-name p-0">#
                                <span>User_Name
                                    <img src="../Assets/SVG/blurmark.svg" alt="verified" height="40" width="32" loading="lazy">
                                </span>
                                    
                            </div>

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > Card > All Links +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="d-flex justify-content-center my-0 py-2">

                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > Github ++++++++++++++++++++++++++++ -->

                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                    Github
                                </a>
                                
                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > user_mail ++++++++++++++++++++++++++++ -->

                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                    user@gmail.com
                                </a>
                            
                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > user_location ++++++++++++++++++++++++++++ -->
                                
                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/location.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                    India , Asia
                                </a>

                            </div>


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > card > Fields + Languages + Technologies +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="d-flex py-3 gap-2 flex-wrap justify-content-center align-items-center w-50 mx-auto">
                            
                            
                                <?php
                                    $bt = 1;
                                    while($bt < 2){
                                ?>
                                        <button type="button" class="btn my-0 px-4 py-2 dash-card-btn-specs">
                                            Field
                                        </button>      
                                <?php
                                    $bt++;
                                    }
                                ?>


                                <?php
                                    $bt = 1;
                                    while($bt < 4){
                                ?>
                                        <button type="button" class="btn my-0 px-4 py-2 dash-card-btn-specs">
                                            Java
                                        </button>      
                                <?php
                                    $bt++;
                                    }
                                ?>

                                <?php
                                    $bt = 1;
                                    while($bt < 2){
                                ?>
                                        <button type="button" class="btn my-0 px-4 py-2 dash-card-btn-specs">
                                            Technology
                                        </button>      
                                <?php
                                    $bt++;
                                    }
                                ?>


                            </div>


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > card > Working + Previous + Experience Projects +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="row gap-2 m-0 flex-wrap justify-content-center">

                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > Working on Small ++++++++++++++++++++++++++++ -->

                                <div class="col-xxl-5 btn px-4 py-3 dash-card-prof-current position-relative">
                                    Frontend @ FrelaxPro
                                    <span class="position-absolute px-3 py-1 rounded-pill dash-card-prof-current-title">
                                    Working on
                                    </span>
                                </div>

                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > Previous Projects ++++++++++++++++++++++++++++ -->

                                <div class="col-xxl-5 btn px-4 py-3 dash-card-prof-previous position-relative">
                                    Security Engineer @ TCM
                                    <span class="position-absolute px-3 py-1 rounded-pill dash-card-prof-current-title m-0">
                                        Previous
                                    </span>
                                </div>

                                <!-- ++++++++++++++++++++++++++++ ( main profile ) > card > Experience ++++++++++++++++++++++++++++ -->

                                <div class="col-xxl-6 btn px-4 py-3 dash-card-prof-previous position-relative">
                                    Security Engineer @ TCM
                                    <span class="position-absolute px-3 py-1 rounded-pill dash-card-prof-current-title m-0">
                                        Experience
                                    </span>
                                </div>

                            </div>
                            


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( main profile ) > card > Working On Big Card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="row m-0 my-4 justify-content-center align-items-center" style="border:1px solid #d6dbdf;border-radius:10px;">

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Project Title + Client Logo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="text-center card-header py-3">Communication Application - <b>Working ON</b></div>
                                <img src="../Assets/SVG/microsoft.svg" class="d-block mx-auto my-1 mt-3 py-1" alt="Profile" height="200" width="200" loading="lazy">
                                    


                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Client Name +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="text-center my-0 projects-card-org-name p-0">#
                                    <span>Org_Name
                                        <img src="../Assets/SVG/blurmark.svg" alt="verified" height="40" width="32" loading="lazy">
                                    </span>               
                                </div>

                                        
                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Project Description +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="project-disc text-center p-3">
                                    The core features for a mobile communication app should robust messaging capabilities, secure file sharing, and end-to-end encryption for privacy , voice/video calling , clean and intuitive interface optimized for mobile devices across both iOS and Android platforms.
                                </div>
                                        

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Project Links +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="d-flex justify-content-center my-0 py-2">

                                    <!-- ++++++++++++++++++++++++++++ Working On Big Card > Project Links > Help Desk ++++++++++++++++++++++++++++ -->

                                    <a href="#" class="card-link">
                                        <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                        Help Desk
                                    </a>

                                    <!-- ++++++++++++++++++++++++++++ Working On Big Card > Project Links > Documentation ++++++++++++++++++++++++++++ -->

                                    <a href="#" class="card-link">
                                        <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                        Documentation
                                    </a>
                                        
                                    <!-- ++++++++++++++++++++++++++++ Working On Big Card > Project Links > Project / Company Location ++++++++++++++++++++++++++++ -->
                                            
                                    <a href="#" class="card-link">
                                        <img src="../Assets/SVG/location.svg" alt="Link" height="25" width="25" class="p-0 m-0" loading="lazy">
                                        India , Asia
                                    </a>

                                </div>

                                    
                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Projects Requirements Techno + Lang +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="d-flex pt-3 gap-2 flex-wrap justify-content-center align-items-center mb-3">
                                        
                                        
                                    <?php
                                        $bt = 1;
                                        while($bt < 4){
                                    ?>
                                            <button type="button" class="btn my-2 px-4 py-2 projects-card-btn-req position-relative">
                                                Java - Android
                                            </button>      
                                    <?php
                                        $bt++;
                                        }
                                    ?>

                                </div>

                                <hr>
                                    

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Project Time Line + Bid Date +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Timeline > Bid Date +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <button type="button" class="btn px-4 py-3 mb-3 projects-card-min-time position-relative" id="bidDate">
                                    01-Feb-2025
                                    <span class="position-absolute px-3 py-1 rounded-pill projects-card-time-title">
                                        Bid Date
                                    </span>
                                </button>

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Timeline > Min Time +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <button type="button" class="btn px-4 py-3 mb-3 projects-card-min-time position-relative">
                                    03-July-2025
                                    <span class="position-absolute px-3 py-1 rounded-pill projects-card-time-title">
                                        Minimum Timelimit
                                    </span>
                                </button>

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Timeline > Max-time +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <button type="button" class="btn px-4 py-3 projects-card-max-time position-relative mb-3">
                                    10-July-2025
                                    <span class="position-absolute px-3 py-1 rounded-pill projects-card-time-title m-0">
                                        Maximum Timelimit
                                    </span>
                                </button>


                                <hr>

                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Working On Big Card > Bid value +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <button class="btn bid-val text-center px-4 py-2 mb-3">$100</button>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( Personal Details ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-personal justify-content-center align-items-center m-0" id="personalDetailsRow" style="display:none;">

                <div class="col-xl-9 col-lg-10">


                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Personal Details ) > Card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card">


                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Personal Details ) > Card > Current +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="card-body py-3">

                            <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Current > Name ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Name</div>
                                <div class="px-3 py-2 card-field-val">Sorathiya</div>
                            </div>

                            <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Current > Last Name ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Last name</div>
                                <div class="px-3 py-2 card-field-val">Manish</div>
                            </div>

                            <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Current > Age ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Age</div>
                                <div class="px-3 py-2 card-field-val">24</div>
                            </div>

                            <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Current > Country ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Country</div>
                                <div class="px-3 py-2 card-field-val">India</div>
                            </div>


                            <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Edit Btn ++++++++++++++++++++++++++++ -->

                            <div class="btn btn-edit px-3 py-2 mt-3" onclick="toggleForm('editFormPersonal')">
                                Edit Details
                            </div>

                        </div>

                    </div>

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Personal Details ) > Hidden Section ( >> Form ) - UPDATE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card hidden-form mt-5 mb-3" id="editFormPersonal">
                        <div class="card-body py-3">


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Personal Details ) > Hidden Form ( PHP ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <form method="POST" class="form" id="MainEditPersonalForm">

                                <div class="row px-0 py-3 mx-0">

                                
                                    <!-- ++++++++++++++++++++++++++++ ( Personal Details ) >> Hidden Form ( PHP ) > Update Name ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-6 col-xl-6">
                                        <label for="firstName" class="form-field-title py-1 px-1">Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Name" minlength="3" maxlength="30">
                                    </div>
                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Personal Details ) >> Hidden Form ( PHP ) > Update Last Name ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-6 col-xl-6">
                                        <label for="lastName" class="form-field-title py-1 px-1">Last name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" minlength="3" maxlength="30">
                                    </div>

                                    <!-- ++++++++++++++++++++++++++++ ( Personal Details ) >> Hidden Form ( PHP ) > Update Age ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-4">
                                        <label for="age" class="form-field-title  py-1 px-1">Age</label>
                                        <input type="number" class="form-control" id="age" name="age" placeholder="Age" min="18" max="50">
                                    </div>

                                    <!-- ++++++++++++++++++++++++++++ ( Personal Details ) >> Hidden Form ( PHP ) > Update Country ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-4">
                                        <label for="countryFreelancer" class="form-field-title  py-1 px-1">Country</label>
                                        <input type="text" class="form-control" id="countryFreelancer" name="countryFreelancer" placeholder="Country" maxlength="25">
                                    </div>

                                </div>


                                <!-- ++++++++++++++++++++++++++++ ( Personal Details ) > Card > Hidden Form > Save Btn ++++++++++++++++++++++++++++ -->

                                <button type="submit" class="btn btn-save px-3 py-2 mt-3">
                                    Save Details
                                </button>

                            </form>
                            
                            

                        </div>
                    </div>


                </div>

            </div>


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( Education + Certification ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-educert justify-content-center align-items-center m-0" id="EduCertRow" style="display:none;">

                <div class="col-xl-9 col-lg-12">


                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Education + Certification ) > Card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card">


                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Current +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="card-body py-3">


                            <!-- ++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Current > Field ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Field</div>
                                <div class="px-3 py-2 card-field-val">Web Development</div>
                            </div>


                            <!-- ++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Current > Programming Language ++++++++++++++++++++++++++++ -->

                            <?php
                                $pl = 1;
                                while($pl <= 3){
                            ?>
                                <div class="d-flex my-2">
                                    <div class="text-center px-3 py-2 me-2 card-field">Programming Language <?php echo $pl; ?></div>
                                    <div class="px-3 py-2 card-field-val">Python</div>
                                </div>

                            <?php
                                $pl++;
                                }
                            ?>

                            <!-- ++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Current > Technology ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Technology Specification</div>
                                <div class="px-3 py-2 card-field-val">Blockchain</div>
                            </div>


                            <!-- ++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Current > Degree Certification If Exist PHP Code ++++++++++++++++++++++++++++ -->

                            <?php
                                $dc = 1;
                                if($dc == 1){
                            ?>
                                    <div class="d-flex my-2">
                                        <div class="text-center px-3 py-2 me-2 card-field">Degree / Certification</div>
                                        <div class="px-3 py-2 card-field-val">BCA , CEH</div>
                                    </div>
                            <?php
                                }
                            ?>


                            <!-- ++++++++++++++++++++++++++++ ( Education + Certification ) > Card > Edit btn ++++++++++++++++++++++++++++ -->

                            <div class="btn btn-edit px-3 py-2 mt-4" onclick="toggleForm('editFormEduCert')">
                                Edit Details
                            </div>

                        </div>

                    </div>


                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Education / Certification ) > Hidden Section ( >> Form ) - UPDATE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

                    <div class="card hidden-form mt-5 mb-3 mb-3" id="editFormEduCert">

                        <div class="card-body py-3">


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Education / Certification ) > Hidden Form ( PHP ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 


                            <form method="POST" class="form" id="MainEditEDUForm">

                                <div class="row px-0 py-3 mx-0">

                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Field ++++++++++++++++++++++++++++ --> 

                                    <div class="form-group col-xxl-4">
                                        <label for="field" class="form-field-title  py-1 px-1">Field</label>
                                        <input type="text" class="form-control" id="field" name="field" placeholder="Web Development" maxlength="30">
                                    </div>

                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Programming Language 1 ++++++++++++++++++++++++++++ --> 

                                    <div class="form-group col-xxl-4">
                                        <label for="fieldLang1" class="form-field-title  py-1 px-1">Programming Language 1</label>
                                        <input type="text" class="form-control" id="fieldLang1" name="fieldLang1" placeholder="Python" maxlength="15">
                                    </div>
                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Programming Language 2 ++++++++++++++++++++++++++++ --> 

                                    <div class="form-group col-xxl-4">
                                        <label for="fieldLang2" class="form-field-title  py-1 px-1">Programming Language 2</label>
                                        <input type="text" class="form-control" id="fieldLang2" name="fieldLang2" placeholder="C++" maxlength="15">
                                    </div>

                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Programming Language 3 ( Not Mendetory ) ++++++++++++++++++++++++++++ --> 


                                    <div class="form-group col-xxl-4">
                                        <label for="fieldLang3" class="form-field-title  py-1 px-1">Programming Language 3</label>
                                        <input type="text" class="form-control" id="fieldLang3" name="fieldLang3" placeholder="Rust" maxlength="15">
                                    </div>
                                    
                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Technolgy ++++++++++++++++++++++++++++ --> 

                                    <div class="form-group col-xxl-4">
                                        <label for="technology" class="form-field-title  py-1 px-1">Technology Specification</label>
                                        <input type="text" class="form-control" id="technology" name="technology" placeholder="Blockchain" maxlength="30">
                                    </div>
                                    
                                    <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Update Degree / Certification ( Not Mendetory ) ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-4">
                                        <label for="degree" class="form-field-title  py-1 px-1">Degree / Certification</label>
                                        <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree / Certification" maxlength="30">
                                    </div>

                                </div>


                                <!-- ++++++++++++++++++++++++++++ ( Education / Certification ) >> Hidden Form ( PHP ) > Save Btn ++++++++++++++++++++++++++++ --> 

                                <button type="submit" class="btn btn-save px-3 py-2 mt-3">
                                    Save Details
                                </button>

                            </form>
                            
                            

                        </div>

                    </div>


                </div>

            </div>


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( Experience + Internship ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-expintern justify-content-center align-items-center m-0" id="ExpInternRow" style="display:none;">

                <div class="col-xl-9 col-lg-10">

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Experience + Internship ) > card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card">

                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Experience + Internship ) > card > Current  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="card-body py-3">

                            <!-- ++++++++++++++++++++++++++++ ( Experience + Internship ) > card > Experience + Certification  ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Experience / Certifications</div>
                                <div class="px-3 py-2 card-field-val">BCA , AI</div>
                            </div>
                        
                            <!-- ++++++++++++++++++++++++++++ ( Experience + Internship ) > card > Edit Btn  ++++++++++++++++++++++++++++ -->

                            <div class="btn btn-edit px-3 py-2 mt-3" onclick="toggleForm('editFormexpintern')">
                                Edit Details
                            </div>

                        </div>

                    </div>

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Experience + Internship ) > Hidden Section ( >> Form ) - UPDATE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

                    <div class="card hidden-form mt-5 mb-3" id="editFormexpintern">

                        <div class="card-body py-3">

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Experience + Internship ) > Hidden Form ( PHP ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

                            <form method="POST" class="form" id="MainEditExpIntForm">

                                <!-- ++++++++++++++++++++++++++++ ( Experience + Internship ) > Hidden Form ( PHP ) > Update Exper.. + Intership ++++++++++++++++++++++++++++ --> 

                                <div class="row px-0 py-3 mx-0">
                                    <div class="form-group col-xxl-8">
                                        <label for="experience" class="form-field-title  py-1 px-1">Experience / Internship</label>
                                        <input type="text" class="form-control" id="experience" name="experience" placeholder="1 Year , FrelaxPro PVT. LTD" maxlength="50">
                                    </div>
                                </div>

                                <!-- ++++++++++++++++++++++++++++ ( Experience + Internship ) > Hidden Form ( PHP ) > Save Btn ++++++++++++++++++++++++++++ --> 

                                <button type="submit" class="btn btn-save px-3 py-2 mt-3">
                                    Save Details
                                </button>

                            </form>
                            
                            

                        </div>

                    </div>


                </div>

            </div>


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( Contact Details ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-contact justify-content-center align-items-center m-0" id="ContactRow" style="display:none;">

                <div class="col-xl-9 col-lg-10">

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Contact Details ) < Card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card">

                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Contact Details ) > Card > Current +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="card-body py-3">


                            <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Card > Current > Email ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Email</div>
                                <div class="px-3 py-2 card-field-val">someone123@gmail.com</div>
                            </div>

                            <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Card > Current > phone no ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Phone No.</div>
                                <div class="px-3 py-2 card-field-val">+91 9568321469</div>
                            </div>
                        

                            <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Card > Edit Btn ++++++++++++++++++++++++++++ -->

                            <div class="btn btn-edit px-3 py-2 mt-3" onclick="toggleForm('editFormcontact')">
                                Edit Details
                            </div>

                        </div>

                    </div>


                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Contact Details ) > Hidden Section ( >> Form ) - UPDATE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card hidden-form mt-5 mb-3" id="editFormcontact">

                        <div class="card-body py-3">


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Contact Details ) > Hidden Form ( PHP ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <form method="POST" class="form" id="MainEditContactForm">

                                <div class="row px-0 py-3 mx-0">

                                    <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Hidden Form ( PHP ) > Update Email ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-6">
                                        <label for="contactEmail" class="form-field-title  py-1 px-1">Email</label>
                                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email" maxlength="40">
                                    </div>

                                    <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Hidden Form ( PHP ) > Update Phone Number ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-5">
                                        <label for="contactPhone" class="form-field-title  py-1 px-1">Phone number</label>
                                        <input type="tel" class="form-control" id="contactPhone" name="contactPhone" value="+91 " placeholder="+91 9265829761" maxlength="14" onfocus="this.setSelectionRange(this.value.length, this.value.length);" oninput="checkPhone('contactPhone')">
                                    </div>
                                </div>

                                <!-- ++++++++++++++++++++++++++++ ( Contact Details ) > Hidden Form ( PHP ) > Save Btn ++++++++++++++++++++++++++++ -->

                                <button type="submit" class="btn btn-save px-3 py-2 mt-3">
                                    Save Details
                                </button>

                            </form>
                            

                        </div>

                    </div>


                </div>

            </div>


            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Dash Fluid > Dash-con > row ( Username + password ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row dash-detrow dash-identity justify-content-center align-items-center m-0" id="IdentityspaceRow" style="display:none;">

                <div class="col-xl-9 col-lg-11">

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Username + password ) > card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card">


                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Username + password ) > card > Current +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="card-body py-3">


                            <!-- ++++++++++++++++++++++++++++ ( Username + password ) > card > Username ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2">
                                <div class="text-center px-3 py-2 me-2 card-field">Username</div>
                                <div class="px-3 py-2 card-field-val">User_Name_123</div>
                            </div>

                            <!-- ++++++++++++++++++++++++++++ ( Username + password ) > card > Password ++++++++++++++++++++++++++++ -->

                            <div class="d-flex my-2 ">
                                <div class="text-center px-3 py-2 me-2 card-field">Password</div>
                                
                                <div class="position-relative card-field-val">
                                <div class="px-3 py-2 card-field-val h-100 w-100" id="masked-password"></div>
                                    <span class="toggle-password-icon-ui" id="toggle-password-icon-ui" 
                                        onmousedown="showPassword()" 
                                        onmouseup="hidePassword()" 
                                        onmouseleave="hidePassword()">
                                        <img id="eye-open-icon-ui" src="../Assets/SVG/eye-open.svg" alt="Openpsui" style="display: none;" loading="lazy">
                                        <img id="eye-close-icon-ui" src="../Assets/SVG/eye-closed.svg" alt="Closepsui" loading="lazy">
                                    </span>
                                </div>

                            </div>
                        
                            <!-- ++++++++++++++++++++++++++++ ( Username + password ) > card > Edit btn ++++++++++++++++++++++++++++ -->

                            <div class="btn btn-edit px-3 py-2 mt-3" onclick="toggleForm('editFormidentity')">
                                Edit Details
                            </div>

                        </div>

                    </div>


                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Section ( >> Form ) - UPDATE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card hidden-form mt-5 mb-3" id="editFormidentity">

                        <div class="card-body py-3">


                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Form ( PHP ) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <form method="POST" class="form" id="MainEditUserPasForm">

                                <div class="row px-0 py-3 mx-0">

                                    <!-- ++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Form ( PHP ) > Update Username ++++++++++++++++++++++++++++ -->

                                    <div class="form-group col-xxl-6">
                                        <label for="username" class="form-field-title  py-1 px-1">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" minlength="3" maxlength="25" autocomplete="true">
                                    </div>
                                
                                    <!-- ++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Form ( PHP ) > Update Password ++++++++++++++++++++++++++++ -->

                                    <div class="row gap-2">
                                        <div class="form-group col-xxl-5 position-relative" name="pass-group">

                                            <label for="password" class="form-field-title  py-1 px-1">Create Password</label>

                                            <div class="passiconwrap">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" maxlength="18" autocomplete="true">
                                                <span class="toggle-password-icon" id="toggle-password-icon">

                                                    <img id="eye-open-icon" src="../Assets/SVG/eye-open.svg" alt="Open" loading="lazy">
                                                    <img id="eye-close-icon" src="../Assets/SVG/eye-closed.svg" alt="Close" loading="lazy">

                                                </span>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- ++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Form ( PHP ) > Update Password Conform ++++++++++++++++++++++++++++ -->

                                    <div class="row gap-2">
                                        <div class="form-group col-xxl-5 position-relative" name="pass-group-conf">

                                            <label for="confirmPassword" class="form-field-title  py-1 px-1">Re-enter Password</label>
                                            
                                            <div class="passiconwrap">
                                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" maxlength="18" autocomplete="true">
                                                <span class="toggle-password-icon" id="toggle-password-icon-reenter">

                                                    <img id="eye-open-icon-reenter" src="../Assets/SVG/eye-open.svg" alt="Open" loading="lazy">
                                                    <img id="eye-close-icon-reenter" src="../Assets/SVG/eye-closed.svg" alt="Close" loading="lazy">
                                                
                                                </span>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <!-- ++++++++++++++++++++++++++++ ( Username + Password ) > Hidden Form ( PHP ) > Save Btn ++++++++++++++++++++++++++++ -->

                                <button type="submit" class="btn btn-save px-3 py-2 mt-3">
                                    Save Details
                                </button>

                            </form>
                            
                            

                        </div>

                    </div>


                </div>

            </div>


        </div>
    </div>


</body>
</html>