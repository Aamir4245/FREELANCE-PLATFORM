<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Browse</title>
    <link rel="stylesheet" href="../Assets/BS/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/CSS/common.css">
    <link rel="stylesheet" href="../Assets/CSS/bid.css">

    <script defer src="../Assets/BS/js/bootstrap.bundle.min.js"></script>
    <script defer src="../Assets/BS/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../Assets/CSS/nav.css">
    <link rel="stylesheet" href="../Assets/CSS/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&family=Passero+One&family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Karla:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Megrim&display=swap" rel="stylesheet">

    <script defer src="../Assets/JS/nav.js"></script>

</head>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Show Navbar +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <?php
        include_once("../Utils/nav.php");
    ?>




    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Search Section +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="container-fluid search-fluid">

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Search Section > Text brief +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <div class="container search-fluid-title">
            <div class="text-center d-block p-2 search-fluid-title-main">
            Project Hub
            </div>
            <div class="text-center d-block p-2 search-fluid-title-brief">
            Discover Opportunities from Top Companies
            </div>
        </div>

        <div class="container">
        
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Search Section > Search Box +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="search-box d-block mx-auto">

                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Search Section > Search Box > Search Query Form  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                <form class="search-form">
                    <div class="input-group search-form-group gap-2">
                        <input type="text" class="form-control browse-search px-3 py-3" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        
                        <button type="button" class="btn search-btn px-3 py-0">
                            <img src="../Assets/SVG/search.svg" alt="" height="28" width="32" class="search-btn-src p-0 m-0">
                        </button>
                    </div>
                </form>

            </div>
        
        </div>

    </div>



    
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div class="container-fluid projects-fluid">
        <div>

            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > Title Brief +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="text-center py-5 projects-fluid-title">
                Browse Projects
                <br>
                <div class="projects-fluid-subtitle py-2">
                    Discover a diverse range of projects tailored to your skills and interests
                </div>
            </div>

            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <div class="row justify-content-around p-5">


                <!-- ++++++++++++++++++++++++++++ Second Section > row > col ( PHP Repeat start ) +++++++++++++++++++++++++++++ -->

                <?php 
                #    $i = 1;
                #    while ($i < 6) {
                ?>
            
                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            
                <div class="col-xxl-6 col-xl-6 my-md-4">

                    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                    <div class="card text-center">

                        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > Project Title + Client Logo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                        <div class="text-center card-header py-3">Communication Application</div>
                        <img src="../Assets/SVG/microsoft.svg" class="d-block mx-auto my-1 mt-3 py-1" alt="Profile" height="200" width="auto">
                        
                        <div class="card-body py-0">

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > Client Name +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <div class="text-center my-0 projects-card-org-name p-0">#
                                <span>Org_Name
                                    <img src="../Assets/SVG/blurmark.svg" alt="verified" height="40" width="32">
                                </span>
                                    
                            </div>
                            
                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > Project Description +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


                            <div class="project-disc text-center p-3">
                            The core features for a mobile communication app should robust messaging capabilities, secure file sharing, and end-to-end encryption for privacy , voice/video calling , clean and intuitive interface optimized for mobile devices across both iOS and Android platforms.
                            </div>
                            
                            <div class="my-0 py-2">
                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0">
                                    Help Desk
                                </a>

                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/link-45deg.svg" alt="Link" height="25" width="25" class="p-0 m-0">
                                    Documentation
                                </a>
                            
                                <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > user_location +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                                
                                <a href="#" class="card-link">
                                    <img src="../Assets/SVG/location.svg" alt="Link" height="25" width="25" class="p-0 m-0">
                                    India , Asia
                                </a>
                            </div>

                        </div>

                        <div class="card-body py-0">

                            <div class="d-flex pt-3 gap-2 flex-wrap justify-content-center align-items-center">
                            
                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > Technical Requirements +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                            
                                <?php
                                    $bt = 1;
                                    while($bt < 4){
                                ?>
                                        <button type="button" class="btn my-2 px-4 py-2 projects-card-btn-req position-relative">
                                            Java - Android
                                            Flutter - iOS
                                        </button>      
                                <?php
                                    $bt++;
                                    }
                                ?>

                            </div>

                        </div>


                        <hr>
                            
                        <div class="card-body projects-time p-3">

                            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Second Section > row > col > card > Projects Min / Max Timeline +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                            <button type="button" class="btn px-4 py-3 mb-3 projects-card-min-time position-relative">
                                03-July-2025
                                <span class="position-absolute px-3 py-1 rounded-pill projects-card-time-title">
                                    Minimum Timelimit
                                </span>
                            </button>

                            <button type="button" class="btn px-4 py-3 projects-card-max-time position-relative">
                                10-July-2025
                                <span class="position-absolute px-3 py-1 rounded-pill projects-card-time-title m-0">
                                    Maximum Timelimit
                                </span>
                            </button>

                        </div>

                        <hr>

                        <div class="card-body py-3">

                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <button class="btn bid-val text-center px-4 py-2">$100</button>
                                <button class="btn btn-lets-bid px-4 py-2">Let's Bid</button>
                            </div>

                                

                        </div>

                    </div>
                </div>

                <!-- ++++++++++++++++++++++++++++ Second Section > row > col ( PHP Repeat end ) +++++++++++++++++++++++++++++ -->
                        
                    <?php
                    #    $i++;
                    #    }                    
                    ?>

            </div>

        </div>
    </div>


    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Show Footer +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <?php
        include_once("../Utils/footer.php");
    ?>

</body>
</html>