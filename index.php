<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sudhir's Portfolio</title>
</head>

<style>
    .cards-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .card {
        flex: 0 0 calc(33.33% - 20px);
        max-width: 21rem;
        height: 350px;
        background-color: #f0f0f0;
        border-radius: 10px;
        overflow: hidden;
    }

    .card-img-wrapper {
        height: 50%;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .card {
            flex-basis: calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .card {
            flex-basis: 100%;
        }
    }








    .foot {
        flex-wrap: wrap;
    }

    .formdiv {
        width: 100%;
        max-width: 500px;
        padding: 20px;
        background-color: rgb(53, 51, 51);
        border-radius: 11px;
    }

    .query-text {
        color: red;
        font-weight: 700;
        font-size: 19px;
        letter-spacing: 13cap;
        text-align: center;
        margin-bottom: 20px;
        margin-top: 0;
        color: #fff;
    }

    .form-group label {
        color: #fff;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
    }

    @media (max-width: 768px) {
        .foot {
            /* flex-direction: column; */
            align-items: center;
            display: block;
        }


        .formdiv {
            width: 100%;
            max-width: 400px;
        }
    }

    @media (max-width: 768px) {
        .foot {
            flex-direction: column;
            align-items: center;
            font-size: 18px;
        }


        .formdiv {
            width: 85%;
            margin: 0px;
            /* margin-left: -10px; */
            align-items: center;
            /* margin-right: 4px; */

            max-width: 400px;
        }
    }

    .coding {
        margin-left: 5%;
        margin-top: 65px;
        width: 29%;
        /* display: flex; */
        /* justify-content: center; */
        align-items: center;
        box-shadow: .5px .5px 0.6px 1px white;
        margin-top: 30px;
        border-radius: 19px;
        background-color: rgb(16, 16, 15);
    }

    .connect-text {
        font-size: 20px;
        /* margin-bottom: 10px; */
        color: rgb(236, 40, 10);
        font-weight: bold;
        margin-top: 9px;
        text-align: center;
    }

    .contact-me {
        width: 90%;
        text-align: center;
    }

    .contact-me ul {
        list-style: none;
        padding: 12px;

        text-align: start;
        margin-bottom: 20px;
    }

    .contact-me li {
        margin-bottom: 10px;
        font-size: 19px;
        font-weight: 700;
        color: whitesmoke;
        /* font-size: 16px; */
    }

    .contact-me li a {
        color: whitesmoke;
        text-decoration: none;
    }

    .social-icons {
        display: flex;
        justify-content: center;
    }

    .social-icons a {
        margin: 0 10px;
    }

    .social-icons img {
        width: 40px;
        height: 40px;
        background-color: yellowgreen;
        border-radius: 9px;
    }

    .mainname {

        font-size: 75px;
        margin-top: -12%;
        color: white;
        font-weight: 700;
        letter-spacing: 0.1cm;

    }

    main {
        height: 55%;
        width: auto;
    }

    .spantag {
        font-size: 44px;
        margin-left: 5%;
        padding-top: 4%;
    }

    .social-icons img {
        transition: transform 0.3s ease;
    }

    .social-icons img:hover {
        transform: scale(1.2);
    }

    .social-icons img:hover {
        filter: brightness(1.2);
    }

    .social-icons img:hover {
        opacity: 0.8;
    }

    .social-icons img:hover {
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
        .coding {
            flex-direction: column;
        }

        .coding>div {
            width: 100%;
        }



        .connect-text {
            font-size: 16px;

        }

        .contact-me li {
            font-size: 14px;
            overflow: auto;
        }

        .social-icons img {
            width: 25px;
            height: 25px;
        }
    }

    @media (max-width: 480px) {
        .foot {
            /* flex-direction: column; */
            align-items: center;
            display: inline;
        }

        .coding {
            width: 90%;
            margin-bottom: 23px;
            margin-right: 12px;
            padding: 4%;

        }


        .connect-text {
            font-size: 16px;

        }

        .contact-me li {
            font-size: 16px;
            overflow: auto;
        }

        .social-icons img {
            width: 25px;
            height: 25px;

        }

        .social-icons img {
            transition: transform 0.3s ease;
        }

        .social-icons img:hover {
            transform: scale(1.2);
        }

        .social-icons img:hover {
            filter: brightness(1.2);
        }

        .social-icons img:hover {
            opacity: 0.8;
        }

        .social-icons img:hover {
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }


        .main {
            background-image: url("Untitled\ Project.jpg");

            background-repeat: no-repeat;
            background-size: cover;
            height: 550px;
            opacity: 0.6;
            /* margin-top: 4%; */
        }

        .mainname {
            font-size: 37px;
            /* color: whitesmoke; */
            color: #2ae0ed;
            font-weight: 700;

            /* transform: translate(-50%, -50%); */
        }

        .spantag {
            font-size: 37px;
            color: #2ae0ed;
            font-weight: 700;
        }



        .spantag2 {
            font-size: 37px;
            color: #2ae0ed;
            font-weight: 700;
        }


        .iam {
            font-size: 20px;
            color: #d6dede;
            font-weight: 700;


        }

        .ityped {
            font-size: 20px;

        }

        .image {
            display: none;
        }


        .firstdiv img {
            display: none;
        }

        .downloadcv {
            width: 119px;
            text-align: center;
            font-size: 16px;

            display: none;
        }



    }




    .about-section {
        display: flex;
        margin-top: 25px;
        background-color: rgb(50, 49, 49);
    }

    .info {
        font-size: 18px;
        font-weight: 600;
        margin-left: 3%;
        color: whitesmoke;
        margin-top: 40px;
    }


    .image img:hover {
        transform: scale(1.1);
    }

    .image img {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }



    .firstdiv img {
        width: 189px;
        margin-top: 7%;

    }


    .image img:hover {
        border: 2px solid red;
    }

    .image img:hover {
        filter: grayscale(100%);
    }

    .navbar-nav .nav-link {
        font-size: 18px;
        font-weight: 600;
        margin: 4px;
        color: white;
        position: relative;

        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: red;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 100%;
        height: 2px;
        background-color: red;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
        transform: scaleX(1);
    }




    .navbar-nav .nav-link {
        color: white;
    }


    .navbar-toggler {
        background-color: white;
        color: white;
    }

    .main {
        margin-top: -40px;
    }

    .card-body p {
        overflow-x: hidden;
    }
</style>

<body style="background-color: black">



    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" style="color: white;" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: white;" href="#aboutme">About</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: white;" href="#skill">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" style="color: white;" href="#project">Projects</a></li>

                    <li class="nav-item"><a class="nav-link" style="color: white;" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="sudhir's_resume.pdf"
                            download="sudhir's_resume.pdf">Download cv</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>


    <div class="main">
        <div class="home" id="home">
            <div class="left text">
                <p class="mainname">
                    <span class="spantag">Hello, I'm</span> <br>
                    Sudhir <span class="spantag2" style="color: red;">Takale</span>
                    <br>
                </p>


                <p class="iam">I'm a <span class="ityped" style="color: rgb(17, 230, 31); font-weight: 800;
                "></span></p>
                </p>

            </div>
            <div class="image">
                <img src="Untitled Project.jpg" alt="" />
            </div>
        </div>
    </div>


    <p style="font-size: 30px;text-align: center;font-weight: bold;color: red;margin-top: 3%;margin-left: 8%;"> ABOUT ME
    </p>

    <div class="about-section" id="aboutme">

        <div class="firstdiv" style="margin-left: 2%">
            <img class="imagess" src="_MG_0529 c.jpg" alt="" />
        </div>

        <div class="secondiv">


            <p class="info">
                Welcome to my portfolio website! I am a final year student at SKN Sinhgad College of Engineering
                Pandharpur, currently pursuing a
                batchelor's degree in Computer
                Science and Engineering. As an aspiring software engineer, this platform showcases my skills, projects,
                and achievements
                throughout my academic journey.

                I have a strong passion for programming and problem-solving, and I constantly seek opportunities to
                apply my knowledge
                in real-world scenarios. Throughout my time at Sinhgad College, I have gained expertise in various
                programming
                languages, software development methodologies, and computer science fundamentals.

                Within this portfolio, you will find a collection of my projects, demonstrating my ability to develop
                web applications and software solutions. These projects encompass a range of technologies, including but
                not
                limited to
                Java, Python, CPP, JavaScript, HTML, CSS, Ubuntu(basic) and databases like MySQL and Oracle .
            </p>
            <p style=" text-align: center;font-weight: bold;font-size: 18px;color: whitesmoke;">Thank you for visiting
                my portfolio website, and I hope you enjoy exploring my work!
            </p>
        </div>


    </div>

    <section class="skills" id="skill">
        <p style="
           margin-bottom: 4%; color: red; font-size: 30px;font-weight: 700;" class="skill-header">My Top Skills</p>

        <div class="skills-wrapper">
            <div class="first-set animate__animated animate__pulse">
                <img src="icons8-java.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-c++-50.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-c-programming-50.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-python-50.svg" alt="" loading="lazy" class="icon icon-card" />
            </div>

            <div class="second-set animate__animated animate__pulse">
                <img src="icons8-css3-50.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-javascript-50.svg"" loading=" lazy" class="icon
          icon-card" />
                <img src="4375122_logo_ubuntu_icon (1).png" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-visual-studio-code-2019-50.svg" alt="" loading="lazy" class="icon icon-card" />
            </div>
            <div class="second-set animate__animated animate__pulse">
                <img src="icons8-github-50.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-git-50.svg" alt="" loading="lazy" class="icon icon-card" />

                <img src="icons8-mysql-logo-50.svg" alt="" loading="lazy" class="icon icon-card" />
                <img src="icons8-css3-50.svg" alt="" loading="lazy" class="icon icon-card" />
            </div>
        </div>
    </section>

    <p style="font-size: 30px;text-align: center; font-weight: 700; color: red;  margin-top: 5%;">PROJECTS
    </p>


    <div class="cards-wrapper mt-4" id="project">
        <div class="card">
            <div class="card-img-wrapper">
                <img src="https://media.istockphoto.com/id/1370678625/photo/neon-rainbow-watercolor-banner-background-on-black-pure-neon-watercolor-colors-creative-paint.jpg?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=Wn6mTKjzMOQXYbFP0IFFU4QIvbBd1UD4WVyhgrStEtg="
                    class="card-img-top" alt="..." />
            </div>
            <div class="card-body">
                <h5 class="card-title">GramVikas Online Portal</h5>
                <p class="card-text">Gramvikas Online Portal is a web platform that connects Gramvikas organization with
                    stakeholders.
                    <a href="https://github.com/sudhir-takale/gramchaitanya-online-portal.git" target="_blank"
                        class="btn btn-primary">View Project</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img-wrapper">
                <img src="https://media.istockphoto.com/id/1370678625/photo/neon-rainbow-watercolor-banner-background-on-black-pure-neon-watercolor-colors-creative-paint.jpg?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=Wn6mTKjzMOQXYbFP0IFFU4QIvbBd1UD4WVyhgrStEtg="
                    class="card-img-top" alt="..." />
            </div>
            <div class="card-body">
                <h5 class="card-title">Desktop Assistant</h5>
                <p class="card-text">Developed a Desktop Assistant in python.Which is able to perform basic task.
                </p>
                <a href="https://github.com/sudhir-takale/Desktop-assistance-in-python" target="_blank"
                    class="btn btn-primary">View Project</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img-wrapper">
                <img src="https://media.istockphoto.com/id/1370678625/photo/neon-rainbow-watercolor-banner-background-on-black-pure-neon-watercolor-colors-creative-paint.jpg?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=Wn6mTKjzMOQXYbFP0IFFU4QIvbBd1UD4WVyhgrStEtg="
                    class="card-img-top" alt="..." />
            </div>
            <div class="card-body">
                <h5 class="card-title">Amazon Clone</h5>
                <p class="card-text">
                    The Amazon Clone Website is a replica of the popular e-commerce platform, Amazon. </p>
                <a href="https://github.com/sudhir-takale/amazon-clone" target="_blank" class="btn btn-primary">View
                    Project</a>
            </div>
        </div>
        <div class="card">
            <div class="card-img-wrapper">
                <img src="https://media.istockphoto.com/id/1370678625/photo/neon-rainbow-watercolor-banner-background-on-black-pure-neon-watercolor-colors-creative-paint.jpg?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=Wn6mTKjzMOQXYbFP0IFFU4QIvbBd1UD4WVyhgrStEtg="
                    class="card-img-top" alt="..." />
            </div>
            <div class="card-body">
                <h5 class="card-title">Peer to Peer tutor Application</h5>
                <p class="card-text">Peer tutoring is a powerful educational strategy that promotes collaboration and learning among students. </p>
                <a href="https://github.com/sudhir-takale/hackathon-project2k223" target="_blank"
                    class="btn btn-primary">View Project</a>
            </div>
        </div>
        <!-- Add more card elements as needed -->
    </div>



    <div class="foot d-flex mt-5 justify-content-evenly">
        <div class="coding">

            <div class="contact-me" id="contact">
                <p class="connect-text">Connect With Me</p>
                <ul>
                    <li>Gmail - <a href="mailto:sudhirtakale99@gmail.com">sudhirtakale99@gmail.com</a></li>
                    <li>Phone - 8432414111</li>
                    <li>Address - Pandharpur, Solapur</li>
                </ul>
                <div class="social-icons">
                    <a href="https://github.com/sudhir-takale" target="_blank"><img src="icons8-github-50.svg"
                            alt="GitHub" /></a>
                    <a href="https://linkedin.com/in/sudhir-takale" target="_blank"><img src="icons8-linkedin (1).svg"
                            alt="LinkedIn" /></a>
                    <a href="https://instagram.com/sudhir-takale" target="_blank"><img src="icons8-instagram.svg"
                            alt="Instagram" /></a>
                    <a href="mailto:sudhirtakale99@gmail.com" target="_blank"><img src="icons8-gmail (1).svg"
                            alt="Gmail" /></a>
                    <a href="https://twitter.com/sudhirtakale" target="_blank"><img src="icons8-twitter.svg"
                            alt="Twitter" /></a>
                </div>
            </div>
        </div>

        <form class="formdiv" method="post" action="insertdata.php">
            <p class="query-text">Have Any Query?</p>
            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="abc@gmail.com"
                    autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Enter subject</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Add subject"
                    autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Enter message</label>
                <textarea class="form-control" name="message" id="message" rows="3" autocomplete="off"></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

    <footer>
        <div class="foot mt-5" style="height: 90px; background-color: blueviolet">
            <p style="text-align: center; padding-top: 1.5%;font-size: 19px; font-weight: 700; color: whitesmoke;">
                Copyright &copy; 2023, Designed by Sudhir Takale</p>


        </div>
    </footer>















    <script src="https://unpkg.com/ityped@0.0.10"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>




    <script>

        window.ityped.init(document.querySelector('.ityped'), {
            strings: ['Web Developer', 'Web Designer', 'Developer'],
            typeSpeed: 150,
            backSpeed: 150,
            FontFace: true,


            loop: true
        })



        $(document).ready(function () {
            $(window).scroll(function () {
                // sticky navbar on scroll script
                if (this.scrollY > 20) {
                    $(".navbar").addClass("sticky");
                } else {
                    $(".navbar").removeClass("sticky");
                }

                // scroll-up button show/hide script
                if (this.scrollY > 500) {
                    $(".scroll-up-btn").addClass("show");
                } else {
                    $(".scroll-up-btn").removeClass("show");
                }
            });
            // slide-up script
            $(".scroll-up-btn").click(function () {
                $("html").animate({ scrollTop: 0 });
                // removing smooth scroll on slide-up button click
                $("html").css("scrollBehavior", "auto");
            });
            $(".navbar .menu li a").click(function () {
                // applying again smooth scroll on menu items click
                $("html").css("scrollBehavior", "smooth");
            });
            // toggle menu/navbar script
            $(".menu-btn").click(function () {
                $(".navbar .menu").toggleClass("active");
                $(".menu-btn i").toggleClass("active");
            });
            // typing text animation script


            // owl carousel script
            $(".carousel").owlCarousel({
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeOut: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 3,
                        nav: false,
                    },
                },
            });
        });
    </script>





</body>

</html>