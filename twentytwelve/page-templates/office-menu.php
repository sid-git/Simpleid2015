<ul class="nav  nav-justified">

    <li class="<?php if(is_page('office365')) echo 'active'; ?> dropdown-selected"><a href="<?php echo get_permalink( $post->post_parent ); ?>">office 365</a>

            <span class="nav-sub-bg">.</span>

            <ul class="inner-page-nav-sub">

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>office">office <span class="arrow red-text"></span></a>

                    <small>	Office for the way you work today</small>

                    <div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/tablet-office.png">

                    </div>

                </li>

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>exchange">exchange <span class="arrow red-text"></span></a>

                    <small>	Communicate from anywhere</small>

                    <div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/Exchange.png">

                    </div>

                </li>

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>lync">lync <span class="arrow red-text"></span></a>

                    <small>	Online meetings and connecting made easy</small>

                    <div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/Lync.png">

                    </div>

                </li>

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>sharepoint">sharepoint <span class="arrow red-text"></span></a>

                    <small>Collaborate on docs and projects from anywhere</small>

                    <div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/Sharepoint.png">

                    </div>

                </li>

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>onedrive">onedrive <span class="arrow red-text"></span></a>

                    <small>Share files simply</small>

                    <div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/Onedrive.png">

                    </div>

                </li>

            </ul>

    </li>

    <li><a href="<?php echo get_permalink( $post->post_parent ); ?>#office-benefits">the benefits</a>

    		<span class="nav-sub-bg">.</span>

            <ul class="inner-page-nav-sub">

                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>benefits">Stories <span class="arrow red-text"></span></a>

                    <small>	Hear from Office 365 businesses</small>

                    <!--<div class="inner-nav-drop-img">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/tablet-office.png">

                    </div>-->

                </li>

            </ul>

    </li>

    <li><a href="<?php echo get_permalink( $post->post_parent ); ?>#why-simpleid">why simple id</a></li>

    <li class="<?php if(is_page('support')) echo 'active'; ?>"><a href="<?php echo get_permalink( $post->post_parent ); ?>support">support</a></li>

    <li class="<?php if(is_page('plans')) echo 'active'; ?>"><a href="<?php echo get_permalink( $post->post_parent ); ?>plans">Compare plans</a></li>

    <li class="<?php if(is_page('resources')) echo 'active'; ?>"><a href="<?php echo get_permalink( $post->post_parent ); ?>resources">resources</a></li>

</ul>

