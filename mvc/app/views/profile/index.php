<?php
require PRIVATE_PATH . '/views/inc/front-header.php';?>

<body>
    <!-- - Prevent CSS Transition Before Fully Loading - -->
    <div class="preloader">
        <div class="preloading-container">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- - Left Arrow For Sliding Left - -->
    <div class="left-arrow">
        <span> <i class="fa fa-arrow-left"></i> </span>
    </div>
    <div class="main">
        <div class="cards-nav" id='cards-nav'>
            <div class="nav-mobile">
                <div class="page-logo">
                    <span>
                        <h3> <?php echo $data['user_name']; ?> </h3>
                    </span>
                </div>
                <div class="nav-btn">
                    <span id="menu-bars"> <i></i> </span>
                </div>
            </div>
            <div class="nav-menu">

                <?php print_r($data['page_names']);?>

                <div class="nav-wrapper nav-notes">
                    <a href="#notes">
                        <h4>NOTES</h4>
                    </a>
                </div>
                <div class="nav-wrapper nav-skills">
                    <a href="#skills">
                        <h4>SKILLS</h4>
                    </a>
                </div>
                <div class="nav-wrapper nav-experience">
                    <a href="#experience">
                        <h4> EXPERIENCE </h4>
                    </a>
                </div>
                <div class="nav-wrapper nav-about">
                    <a href="#about">
                        <h4> ABOUT </h4>
                    </a>
                </div>
                <div class="nav-wrapper nav-contact">
                    <a href="#contact">
                        <h4> CONTACT </h4>
                    </a>
                </div>
            </div>

        </div>
        <div class="cards">
            <div class="cards-track">
                <div class="card">

                    <div class="wrapper card-notes">
                        <div class="card-details">
                            <h1>
                                <div class="title-text">Study Notes</div>
                            </h1>
                        </div>
                        <div class="card-intro">
                            <h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci voluptates in
                                voluptatum temporibus saepe eius velit tempora incidunt, ducimus nesciunt, odit
                                praesentium repudiandae eum facilis! Voluptatibus amet eos nobis minima?
                            </h4>
                        </div>
                        <div class="content-wrapper">

                            <div class="content-range content-notes">

                                <ul class="note-sample">

                                    <li class="note">
                                        <div class="note-title">
                                            <h4 onclick="document.querySelector('.modal-note').style.display='block'"
                                                style="width:auto;"> <strong> How to prevent button click event
                                                    triggering
                                                    capturing:</strong></strong></h4>
                                            <div class="note-category">
                                                <span class="note-tag">
                                                    <h5>PHP</h5>
                                                </span>
                                                <span class="note-tag">
                                                    <h5>javascript</h5>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="note-body"
                                            onclick="document.querySelector('.modal-login').style.display='block'"
                                            style="width:auto;">
                                            <p>
                                                This is the php note table content
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum
                                                animi
                                                quo,
                                                minima commodi explicabo inventore. Quos illum atque neque impedit
                                                praesentium, id dolorem minima saepe, temporibus nobis cum cumque
                                                commodi.
                                                minima commodi explicabo inventore. Quos illum atque neque impedit
                                                praesentium, id dolorem minima saepe, temporibus nobis cum cumque
                                                commodi.
                                            </p>
                                        </div>
                                        <div class="note-footer">
                                            <button
                                                onclick="document.querySelector('.modal-login').style.display='block'"
                                                style="width:auto;">Read More</button>
                                            <button
                                                onclick="document.querySelector('.modal-note').style.display='block'"
                                                style="width:auto;">Edit</button>
                                            <button
                                                onclick="document.querySelector('.modal-delete').style.display='block'"
                                                style="width:auto;">Delete</button>
                                        </div>

                                    </li>
                                    <li class="note">
                                        <p>
                                            This is the php note table content
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum animi
                                            quo,
                                            minima commodi explicabo inventore. Quos illum atque neque impedit
                                            praesentium, id dolorem minima saepe, temporibus nobis cum cumque
                                            commodi.
                                        </p>
                                        <button onclick="document.querySelector('.modal-login').style.display='block'"
                                            style="width:auto;">Comment</button>
                                    </li>
                                    <li class="note">
                                        <p>
                                            This is the php note table content
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum animi
                                            quo,
                                            minima commodi explicabo inventore. Quos illum atque neque impedit
                                            praesentium, id dolorem minima saepe, temporibus nobis cum cumque
                                            commodi.
                                        </p>
                                        <button onclick="document.querySelector('.modal-login').style.display='block'"
                                            style="width:auto;">Comment</button>
                                    </li>

                                    <div class="modal-login">
                                        <div class="login-form animate">
                                            <div class="card-details">
                                                <h3>
                                                    <div class="title-text">Login To Read More?</div>
                                                </h3>
                                            </div>
                                            <div class="form-body">
                                                <form action="action_page.php" method="post"
                                                    class="modal-content login-validate">

                                                    <div class="form-group wrap-inputs validate-input"
                                                        data-validate="Valid email is required">
                                                        <span class="required label-inputs">Email:</span>
                                                        <input type="email" class="form-control input100" id="email"
                                                            name="email" placeholder="john-doe@gmail.com" required />
                                                    </div>
                                                    <div class="form-group wrap-inputs validate-input"
                                                        data-validate="Password is required">
                                                        <span class="required label-inputs">Password:</span>
                                                        <input type="password" class="form-control input100"
                                                            id="password" name="password" placeholder="******"
                                                            required />
                                                    </div>
                                                    <div class="form-footer">
                                                        <div class="form-action-group">
                                                            <div class="container">
                                                                <a
                                                                    href=" http://localhost/profile-css-html-js/mvc/users/register">Create
                                                                    an account</a>
                                                                <button class="submit-button"
                                                                    type="submit">Login</button>
                                                            </div>
                                                            <span class="psw">Forget <a href="#">password?</a></span>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-note">
                                        <div class="note note-edit animate">
                                            <!-- <li class="note"> -->
                                            <div class="note-title">
                                                <h4> <strong> How to prevent button click event triggering
                                                        capturing:</strong></strong></h4>
                                                <div class="note-category">
                                                    <span class="note-tag">
                                                        <h5>PHP</h5>
                                                    </span>
                                                    <span class="note-tag">
                                                        <h5>javascript</h5>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="note-body">
                                                <p>
                                                    This is the php note table content
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                    Dolorum
                                                    animi
                                                    quo,
                                                    minima commodi explicabo inventore. Quos illum atque neque
                                                    impedit
                                                    praesentium, id dolorem minima saepe, temporibus nobis cum
                                                    cumque
                                                    commodi.
                                                    minima commodi explicabo inventore. Quos illum atque neque
                                                    impedit
                                                    praesentium, id dolorem minima saepe, temporibus nobis cum
                                                    cumque
                                                    commodi.
                                                </p>
                                            </div>
                                            <div class="note-footer">

                                                <button //REMIND: SHOULD BE REPLY CONTENT
                                                    onclick="document.querySelector('.modal-login').style.display='block'"
                                                    style="width:auto;">Confirm</button>
                                            </div>

                                            <!-- </li> -->
                                        </div>
                                    </div>
                                    <div class="modal-delete">
                                        <div class="delete-window animate">
                                            <div class="delete-warning">
                                                <h3>
                                                    <div class="title-text">This note will be deleted?</div>
                                                </h3>
                                            </div>
                                            <div class="delete-confirm">
                                                <span>
                                                    <button class="confirm-y"> &#x2714; </button></span>
                                                <span> <button class="confirm-n">X </button></span>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card skills">
                    <div class="wrapper card-skills">
                        <div class="card-details">
                            <h1>
                                <div class="title-text">Skills Level</div>
                            </h1>
                        </div>
                        <div class="card-intro">
                            <h4>
                                I learn coding all on my own from HTML/CSS, Javascript, PHP and other…., odit
                                praesentium repudiandae eum facilis! Voluptatibus amet eos nobis minima?
                            </h4>
                        </div>
                        <div class="content-wrapper">

                            <div class="content-range content-skills">

                                <div class="progress-bars">
                                    <!-- Sample Progress Bar -->
                                    <!-- <div class="progress-bar">
                                            <div class="skill">
                                                <span class="skill-title">Javascript</span>
                                                <span class="skill-level">60%</span>
                                            </div>
                                            <div class="stars-track">
                                                <div class="progress">
                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                </div>
                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                            </div>
                                            <div class="details">
                                                <span>
                                                    <div class="level-btn">
                                                        <a href="/">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </span>
                                                <span>
                                                    <div class="level-btn">
                                                        <a href="/">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div> -->

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="card experience">
                    <div class="wrapper card-experience">
                        <div class="card-details">
                            <h1>
                                <div class="title-text">Recent Works</div>
                            </h1>
                        </div>
                        <div class="card-intro">
                            <h4>
                                After graduate most of my work was on creating websites on wordpress and at the same
                                time learn coding on my own., odit
                                praesentium repudiandae eum facilis! Voluptatibus amet eos nobis minima?
                            </h4>
                        </div>
                        <div class="content-wrapper">

                            <div class="content-range content-experience">
                                <div class="frame-wrapper">
                                    <!-- <div class="website-frame">
                                            <div class="website-screenshot">
                                                <div class="website-img">
                                                    <img src="./css/img/byohomes500x348.jpg" alt="byohomes" />
                                                </div>
                                                <div class="website-text">
                                                    <div>
                                                        <a href="">
                                                            <h4>BYO Homes</h4>
                                                        </a>
                                                        <div class='project-level'>
                                                            <span> <strong>Difficulty:</strong></span>
                                                            <div class="stars-track">
                                                                <div class="progress">
                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                    <div class="star"><i class="fa fa-star"></i></div>
                                                                </div>
                                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                                <div class="star"><i class="fa fa-star-o"></i></div>
                                                            </div>
                                                        </div>
                                                        <span> <strong>Time:</strong>02/2020</span>
                                                        <p>A maximum 20-hour work created on Wordpress early
                                                            2020,including
                                                            design,photo-editing and completion.
                                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="card about current-card">
                    <div class="wrapper card-about">
                        <div class="card-id">
                            <div class="avatar">
                                <img src="./css/img/avatar-bg-sm.gif" alt="my-avatar" srcset="">
                            </div>

                            <div class="personal-info">
                                <div class="personal-brief">
                                    <p>Hong Cai &nbsp(Sophie)</p>
                                    <p>Website Maker. Doer.</p>
                                    <p>To be a good developer.</p>
                                    <div class="stars-rating">
                                        <div class="stars-track">
                                            <div class="progress">
                                                <div class="star"><i class="fa fa-star"></i></div>
                                                <div class="star"><i class="fa fa-star"></i></div>
                                                <div class="star"><i class="fa fa-star"></i></div>
                                                <div class="star"><i class="fa fa-star"></i></div>
                                                <div class="star"><i class="fa fa-star"></i></div>
                                            </div>
                                            <div class="star"><i class="fa fa-star-o"></i></div>
                                            <div class="star"><i class="fa fa-star-o"></i></div>
                                            <div class="star"><i class="fa fa-star-o"></i></div>
                                            <div class="star"><i class="fa fa-star-o"></i></div>
                                            <div class="star"><i class="fa fa-star-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-contacts">
                                    <p> <i class="fa fa-map-marker">&nbsp</i> Wellington,New Zealand</p>
                                    <p> <i class="fa fa-phone">&nbsp</i> (022)4155875</p>
                                    <p> <i class="fa fa-home">&nbsp</i>
                                        <a href="https://34.87.254.5">https://34.87.254.5</a>
                                    </p>
                                    <p> <i class="fa fa-at">&nbsp</i> <a
                                            href="mailto:hongcai.nelson@gmail.com">hongcai.nelson@gmail.com</a></p>
                                    <p> <i class="fa fa-github">&nbsp</i>
                                        <a href="https://github.com/hong-cai">https://github.com/hong-cai</a></p>
                                </div>
                            </div>
                            <ul class="main-btns">
                                <li class="about-self">
                                    <button class="tag-btn">
                                        <h4> About Myself</h4>
                                    </button>
                                </li>
                                <li class="about-site">
                                    <button class="tag-btn">
                                        <h4> About the site</h4>
                                    </button>
                                </li>
                                <li class="code-links">
                                    <button class="tag-btn">
                                        <h4> Code links</h4>
                                    </button>
                                </li>
                            </ul>

                        </div>

                        <div class="content-wrapper">
                            <div class="content-range content-about">
                                <div class="tag-slide"><span>
                                        <h3>About Myself</h3>
                                    </span>
                                    <p>Hi my name is… currently looking for a job in the front-end area.
                                        sit
                                        amet enim.feugiat semper commodo et, egestas sit met enim.lacinia, odio
                                        risus
                                        tincidunt
                                        eros, nec porttitor sem dolor faucibus felis. Fusce sit amet volutpat ex.
                                        Sed
                                        dignissim,
                                        augue ut congue lacinia, odio risus tincidunt
                                        eros, nec porttitor sem dolor faucibus felis.</p>
                                </div>
                                <div class="tag-slide"><span>
                                        <h3>About this page</h3>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        sollicitudin diam
                                        ac
                                        eros sollicitudin ultricies. Nulla elit velit, feugiat semper commodo et,
                                        egestas
                                        sit
                                        amet enim.feugiat semper commodo et, egestas sit met enim.lacinia, odio
                                        risus
                                        tincidunt
                                        eros, nec porttitor sem dolor faucibus felis. Fusce sit amet volutpat ex.
                                        Sed
                                        dignissim,
                                        augue ut congue lacinia, odio risus tincidunt
                                        eros, nec porttitor sem dolor faucibus felis.</p>
                                </div>
                                <div class="tag-slide"><span>
                                        <h3>Code Links</h3>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                        sollicitudin diam
                                        ac
                                        eros sollicitudin ultricies. Nulla elit velit, feugiat semper commodo et,
                                        egestas
                                        sit
                                        amet enim.feugiat semper commodo et, egestas sit met enim.lacinia, odio
                                        risus
                                        tincidunt
                                        eros, nec porttitor sem dolor faucibus felis. Fusce sit amet volutpat ex.
                                        Sed
                                        dignissim,
                                        augue ut congue lacinia, odio risus tincidunt
                                        eros, nec porttitor sem dolor faucibus felis.</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="card contact">
                    <div class="wrapper  card-contact">
                        <div class="content-wrapper">
                            <div class="content-range">
                                <div class="contact-info">
                                    <div class="card-details">
                                        <h3>
                                            <div class="title-text"> Hire Me. </div>
                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </h3>
                                    </div>
                                    <div class="personal-contacts">
                                        <p> <i class="fa fa-map-marker">&nbsp</i> Wellington,New Zealand</p>
                                        <p> <i class="fa fa-phone">&nbsp</i> (022)4155875</p>
                                        <p> <i class="fa fa-home">&nbsp</i>
                                            <a href="https://34.87.254.5">https://34.87.254.5</a>
                                        </p>
                                        <p> <i class="fa fa-at">&nbsp</i> <a
                                                href="mailto:hongcai.nelson@gmail.com">hongcai.nelson@gmail.com</a>
                                        </p>
                                        <p> <i class="fa fa-github">&nbsp</i>
                                            <a href="https://github.com/hong-cai">https://github.com/hong-cai</a>
                                        </p>
                                    </div>
                                    <div id="map"></div>
                                </div>
                                <div class="social-media">
                                    <span> <a href="https://github.com/hong-cai"> <i
                                                class="fa fa-facebook fa-inverse"></i></a> </span>
                                    <span> <a href="https://github.com/hong-cai"> <i
                                                class="fa fa-share-alt fa-inverse"></i></a> </span>
                                    <span> <i class="fa fa-linkedin fa-inverse"></i> </span>
                                    <span> <i class="fa fa-twitter fa-inverse"></i> </span>
                                </div>
                            </div>
                            <div class="content-range">
                                <div class="contact-form">
                                    <div class="card-details">
                                        <h3>
                                            <div class="title-text">Drop A Line.</div><i class="fa fa-chevron-up"
                                                aria-hidden="true"></i>
                                        </h3>
                                    </div>
                                    <div class="form-body">
                                        <form action="" method="POST" class="contacts-validate">

                                            <div class="form-group wrap-inputs validate-input"
                                                data-validate="Name is required">
                                                <span class="required label-inputs">Name:</span>
                                                <input type="text" class="form-control input100" id="full_name"
                                                    name="full_name" placeholder="John Doe" required />
                                            </div>

                                            <div class="form-group wrap-inputs validate-input"
                                                data-validate="Valid email is required">
                                                <span class="required label-inputs">Email:</span>
                                                <input type="email" class="form-control input100" id="email"
                                                    name="email" placeholder="john-doe@gmail.com" required />
                                            </div>
                                            <div class="form-group wrap-inputs">
                                                <span class="required label-inputs">Phone:</span>
                                                <input type="text" class="form-control input100" id="phone" name="phone"
                                                    placeholder="09-1234567" required />
                                            </div>

                                            <div class="form-group wrap-inputs validate-input"
                                                data-validate="Message is required">
                                                <span class="required label-inputs">Message:</span>
                                                <textarea type="text" class="form-control input100" id="message"
                                                    name="message" placeholder="What can I do to help?"
                                                    required></textarea>
                                            </div>
                                            <div class="g-recaptcha" data-sitekey="place_your_app_site_key_here">
                                            </div>

                                            <div class="form-action-group">
                                                <button class="g-recaptcha submit-button"
                                                    data-sitekey="6LfgI64ZAAAAAGQAHbRF8-FkXXAT6baiHzAiSOQj"
                                                    data-callback='onSubmit' data-action='submit'>Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-arrow">
        <span> <i class="fa fa-arrow-right"></i> </span>
        <!-- <img src="../img/arrowright-timber.png" alt="right-arrow-timber"> -->

    </div>


    <?php
require PRIVATE_PATH . '/views/inc/front-footer.php';?>