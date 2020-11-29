<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>たけしのWordPress</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/a11y-dark.css">
    <script src="<?php echo get_template_directory_uri(); ?>/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="container site-title">
                <a href="<?php echo esc_url( home_url() ); ?>" alt="Blog Link">MY <span>B</span>log</a>
            </div>
            <div class="container nav">
                <nav>
                    <ul>
                        <li><a href="<?php echo esc_url( get_page_link( 22 ) ); ?>">このブログについて</a></li>
                        <?php wp_list_categories('title_li=&exclude=1'); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>