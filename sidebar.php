                <div class="profile">
                    <div class="border_outer">
                        <div class="border_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/rs-pose_dance_ukareru_man.png" alt="Profile image">
                            <p>たけし</p>
                        </div>
                    </div>
                </div>
                <?php if (is_home()) : ?>
                    <div class="sidemenu">
                        <div class="border_outer">
                            <div class="border_inner">
                                <div class="dinner">
                                    <p>～今日の晩ご飯～</p>
                                    <?php get_dinner(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="sidemenu">
                    <div class="border_outer">
                        <div class="border_inner">
                            <p>サイドメニュー的なところ</p>
                        </div>
                    </div>
                </div>