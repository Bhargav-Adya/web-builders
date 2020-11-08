<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <!-- <?php
    $name = filter_input(INPUT_POST,'Name');
    $fanme =filter_input(INPUT_POST,'fathername');
    $dob =filter_input(INPUT_POST,'DateofBirth');
    $email =filter_input(INPUT_POST,'email');
    $password =filter_input(INPUT_POST,'password');
    $phone=filter_input(INPUT_POST,'phone');
    $qualification = filter_input(INPUT_POST,'qualification');
    $workexperience=filter_input(INPUT_POST,'Workexperience');

    $host ="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="loginpage";
    $conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    if(mysql_connect_error()){
        die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());

    }

    else{
        $sql ="INSERT INTO loginpage (Name ,fname, dob, Email, Password, Phone, Qualification, Workexperience) 
        values ('$name','$fname','$dob','$email','$password','$phone','$qualification','$workexperience')";
        if ($conn->querry($sql)){
          echo "Loggin Successful";
        } 
        else{
            echo "Error:".$sql.$conn->error;
        }  
        $conn->close();
     }
     ?> -->


    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper">
                    <a href="index.html">Home</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="about.html">about</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="about.html">about</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="about.html">about</a>
                </div>

            </div>

            <p style="color: white; font-size: 1.5em;">A site to apply for jobs in these tough times.</p>

            <div class="right-side">
                <div class="brand">
                    <div style="color: white; font-size: 2em; border: 2px solid;">Go Corona Gone</div>
                </div>
            </div>

        </div>

        <div class="content-wrapper">
            <div class="portfolio-items-wrapper">

                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image: url(engineering.jpg);"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>

                        <div class="subtitle">Applicants who have studied engineering <a href="#">click</a></div>
                    </div>
                </div>

                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image: url(arts.jpg);"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>

                        <div class="subtitle">Applicants who have studied arts</div>
                    </div>
                </div>

                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image: url(commerce.png);"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>

                        <div class="subtitle">Applicants who have studied commerce</div>
                    </div>
                </div>

                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background" style="background-image: url(pottery.jpg);"></div>

                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img src="">
                        </div>

                        <div class="subtitle">Applicants who are unskilled</div>
                    </div>
                </div>







            </div>
        </div>

    </div>
</body>
<script>
    const portfolioitems = document.querySelectorAll('.portfolio-item-wrapper')

    portfolioitems.forEach(portfolioitem => {
        portfolioitem.addEventListener('mouseover', () => {
            console.log(portfolioitem.childNodes[1].classList);
            portfolioitem.childNodes[1].classList.add('img-darken');
        })

        portfolioitem.addEventListener('mouseout', () => {
            portfolioitem.childNodes[1].classList.remove('img-darken');
        })

    })
</script>

</html>