<ul class="nav  nav-justified">

    <li class="<?php if(is_page('office365')) echo 'active'; ?> dropdown-selected"><a href="<?php echo get_permalink( $post->post_parent ); ?>">office 365</a>

            <span class="nav-sub-bg">.</span>
            <div class="inner-page-nav-sub">
                 <ul class="">
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'office365' ) ); ?>">overview <span class="arrow red-text"></span></a>

                        

                    </li>

                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Benefits' ) ); ?>">benefits <span class="arrow red-text"></span></a>

                        

                    </li>

                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Compare Plans' ) ); ?>">plans <span class="arrow red-text"></span></a>

                        

                    </li>

                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Resources' ) ); ?>">resources <span class="arrow red-text"></span></a>

                        

                    </li>

                 </ul>
                 <ul class="product-nav">

                    <li class="red-orange-text">products</li>

                        <li><a href="<?php echo get_permalink( get_page_by_title( 'Office' ) ); ?>">office <span class="arrow red-text"></span></a>

                            <small> Office for the way you work today</small>

                            <div class="inner-nav-drop-img">

                                <img src="<?php echo get_template_directory_uri(); ?>/img/365-icon-orange.png">

                            </div>

                        </li>

                        <li><a href="<?php echo get_permalink( get_page_by_title( 'Business Email' ) ); ?>">Business Email <span class="arrow red-text"></span></a>

                            <small> Communicate from anywhere</small>

                            <div class="inner-nav-drop-img">

                                <img src="<?php echo get_template_directory_uri(); ?>/img/exchange-orange.png">

                            </div>

                        </li>

                        <li><a href="<?php echo get_permalink( get_page_by_title( 'Lync' ) ); ?>">lync <span class="arrow red-text"></span></a>

                            <small> Online meetings and connecting made easy</small>

                            <div class="inner-nav-drop-img">

                                <img src="<?php echo get_template_directory_uri(); ?>/img/lync-orange.png">

                            </div>

                        </li>

                        <li><a href="<?php echo get_permalink( get_page_by_title( 'Sharepoint' ) ); ?>">sharepoint <span class="arrow red-text"></span></a>

                            <small>Collaborate on docs and projects from anywhere</small>

                            <div class="inner-nav-drop-img">

                                <img src="<?php echo get_template_directory_uri(); ?>/img/sharepoint-orange.png">

                            </div>

                        </li>

                        <li><a href="<?php echo get_permalink( get_page_by_title( 'Onedrive' ) ); ?>">onedrive <span class="arrow red-text"></span></a>

                            <small>Share files simply</small>

                            <div class="inner-nav-drop-img">

                                <img src="<?php echo get_template_directory_uri(); ?>/img/clouds-icon-orange.png">

                            </div>

                        </li>

                    </ul>
            </div>

             




            

    </li>

    <li class="<?php if(is_page('hybrid-solutions')) echo 'active'; ?>"><a href="<?php echo get_permalink( get_page_by_title( 'Hybrid Solutions' ) ); ?>">Hybrid Solutions</a>

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

    <li class="<?php if(is_page('cloud-backup')) echo 'active'; ?>"><a href="<?php echo get_permalink( get_page_by_title( 'Cloud Backup' ) ); ?>">Cloud Backup</a></li>

    <li class="<?php if(is_page('web-hosting')) echo 'active'; ?>"><a href="<?php echo get_permalink( get_page_by_title( 'Web Hosting' ) ); ?>">Web Hosting</a></li>

    <li class="<?php if(is_page('phone-systems')) echo 'active'; ?>"><a href="<?php echo get_permalink( get_page_by_title( 'Phone Systems' ) ); ?>">Phone Systems</a></li>

    <li class="<?php if(is_page('support')) echo 'active'; ?>"><a href="<?php echo get_permalink(get_page_by_title( 'Support' )); ?>">Support</a></li>

</ul>



