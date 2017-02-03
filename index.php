<!DOCTYPE html><html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ismail Kutlu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <link rel="apple-touch-icon" sizes="180x180" href="styles/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="styles/img/favicon//favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="styles/img/favicon//favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="styles/img/favicon//manifest.json">
        <link rel="mask-icon" href="styles/img/favicon//safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="styles/css/vendors/bootstrap.css">
        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body>
        <noscript>
            <div style="border: 1px solid #FF0000; padding: 10px">
                <span style="color:#FF0000; font-size: 1.5em;">
                    JavaScript is not enabled!</br>
                    Please turn it on to check my website..
                </span>
            </div>
        </noscript>
        <div id="index" class="section">

            <div class="hamburger-icon" id="icon">
                <div class="icon-1" id="a"></div>
                <div class="icon-2" id="b"></div>
                <div class="icon-3" id="c"></div>
                <div class="clear"></div>
            </div>

            <nav id="nav">
                <a href="#index" class="smoothscroll">
                    <div class="logo">ismail<span class="black">kutlu</span></div>
                </a>
                    <ul id="nav__list">
                        <a href="#about" class="nav__item smoothscroll"><li>About</li></a>
                        <a href="#skills" class="nav__item smoothscroll"><li>Skills</li></a>
                        <a href="#contact" class="nav__item smoothscroll"><li>Contact</li></a>
                    </ul>
            </nav>
            <div class="dark-blue" id="blue"></div>

            <div class="home">
                <div class="containerr">
                    <img class="blikvanger" alt="">
                    <div class="rect">
                        <object data="" type="">
                            <embed src="styles/img/rect.svg" type="">                                    
                            <h1>Ismail Kutlu</h1>
                        </object>
                    </div>
                </div>
                <h2>
                    <xmp>
                        Web </Developer> &
                    </xmp>
                    Webdesigner <i class="fa fa-sm fa-paint-brush " aria-hidden="true"></i>
                    
                    
                                        
                </h2>
                <a class="smoothscroll" href="#about">
                    <div class="scroll-down"></div>
                </a>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <section id="about">
                    <h2>About me</h2>

                    <h3>Hey! I am Ismail Kutlu</h3>
                    <p>
                        I'm a <span class="black">Graphic Developer</span> and <span class="black">Webdesigner</span> living in Belgium. Coding is my passion and I love making designs.
                    </p>

                    <h3>Facts about me</h3>
                    <ul id="facts">
                        <li>I'm dual citizen of Belgium and Turkey
                        <li>I love designs! Design > Content
                        <li>Aside from development & design, my hobby is swimming
                        <li>My favourite meal is pasta
                        <li>And I love trap music!
                    </ul>

                    <blockquote>
                        Websites promote you 24/7 </br>
                        No employee will do that.
                    </blockquote>

                    <a class="smoothscroll" href="#skills">
                        <div class="scroll-down"></div>
                    </a>

                </section>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <section id="skills">
                    <h2>My skills</h2>
                    
                    <div class="skill-wrap">
                        <h3>Web</h3>
                        <progress value="90" max="100"></progress><span>HTML5<em> - 90%</em></span>
                        <progress value="85" max="100"></progress><span>CSS3<em> - 85%</em></span>
                        <progress value="70" max="100"></progress><span>Javascript/jQuery<em> - 70%</em></span>
                        <progress value="65" max="100"></progress><span>PHP<em> - 65%</em></span>
                        <progress value="65" max="100"></progress><span>MySQL<em> - 65%</em></span>
                        <progress value="90" max="100"></progress><span>Mobile Responsive<em> - 90%</em></span>
                    </div>
                    <div class="skill-wrap">
                        <h3>Design</h3>
                        <progress value="95" max="100"></progress><span>Adobe Photoshop<em> - 95%</em></span>
                        <progress value="90" max="100"></progress><span>Adobe Illustrator<em> - 90%</em></span>
                        <progress value="85" max="100"></progress><span>Adobe InDesign<em> - 85%</em></span>
                        <progress value="60" max="100"></progress><span>Adobe After Effects<em> - 60%</em></span>
                        <progress value="60" max="100"></progress><span>Adobe Premiere Pro<em> - 60%</em></span>
                    </div>

                    <a class="smoothscroll" href="#contact">
                        <div class="scroll-down"></div>
                    </a>
                </section>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <section id="contact">
                    <h2>Contact me</h2>
                    
                    <form class="form" id="form1">

                        <label for="name">Name</label>
                        <input name="name" type="text" class="" placeholder="Name" id="name" />

                        <label for="name">Email</label>
                        <input name="email" type="text" class="" id="email" placeholder="Email" />

                        <label for="name">Message</label>
                        <textarea name="text" class="" id="comment" placeholder="Message"></textarea>
                            
                        <input type="submit" value="send" id="submit"/>
                    </form>
                </section>
            </div>
        </div>

        <footer>
            <div class="container">
                <p>&copy Copyright 2017 - ismailkutlu</p>
                <a href="facebook.com/ismail94kutlu">ismailkutlu</a>
            </div>
        </footer>

        <script src="js/vendor/jquery-31.1.1.min.js"></script>
        <script src="js/vendor/jquery.waypoints.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>