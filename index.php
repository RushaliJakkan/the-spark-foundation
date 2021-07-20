<html>
    <head>
        <title> Basic Banking system </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdeliver.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    </head>
    <body>

        <section id="bank">
            <img src="logo1.jpg" class="logo1">
            <div class="banktext">
                <h1>Banking System </h1>
                <div class="bank-btn">
                    <a href="customres.php"><span></span>View All Customers</a>
                    <a href="transfermoney.php"><span></span>Transfer Money</a>
                    <a href="transactionhistory.php"><span></span>Transfer History</a>
                    
                </div>
                <p>We have the best solution for your </p>
                   <p> business to grow</p>

                
            </div>  

        </section>
        <div id="sideNav">
            <nav>
                <ul>
                    <li><a href="#bank">HOME</a></li>
                    <li><a href="customres.php">VIEW CUSTOMERS</a></li>
                    <li><a href="transfermoney.php">TRANSFER MONEY</a></li>
                    <li><a href="transactionhistory.php">TRANSFER HISTORY</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
        <div id="menubtn">
            <img src="menu.png" id="menu">
        </div>

        <script>
            var manubtn=document.getElementById("menubtn")
            var sideNav=document.getElementById("sideNav")
            var menu=document.getElementById("menu")
            sideNav.style.right="-250px";

            menubtn.onclick=function(){
                if(sideNav.style.right=="-250px"){
                    sideNav.style.right="0";
                    menu.src="close.png";
                }
                else{
                    sideNav.style.right="-250";
                    menu.src="menu.png";
                }
            }
            var scroll=new SmoothScroll('a[href*="#"]',{
                speed: 100,
                speedAsDuration: true
            });
        </script>
        <section id="contact">
            <div class="title-text">
                <p>CONTACT</p>
                <h1>We will never keep you waiting</h1>
            </div>
            <div class="contact-row">
                <div class="contact-left">
                    <h1>Opening Hours</h1>
                    <p>Available by 24/7 hours</p>
                    <p>Your responsibity is ours</p>
                </div>
                <div class="contact-right">
                    <h1>Get In Touch</h1>
                    <p>#30 abc Colony, xyz City IN</p>
                    <p>example@website.com</p>
                    <p>+01 123456789</p>
                </div>

            </div>

        </section>
    </body>
</html>
