<?php

//Initial variables for testing
$brand_logo = 'http://img2.email2inbox.co.uk/2016/stonegate/templates/logo-beduin.png';
$brand_logo_alt = 'Beduin';
$content_background_color = '#434343';
$facebook_link = true;
$font_family = 'Arial, sans-serif';

$footer_background_color = '#000000';
$footer_text_color = '#787878';
$header_background_color = '#333333';
$hero_image = 'http://img2.email2inbox.co.uk/2016/stonegate/templates/beduin/hero.jpg';
$hero_image_alt = 'Hero';

$hyper_link_1 = 'http://www.bbc.co.uk';
$hyper_link_2 = 'http://www.google.co.uk';
$hyper_link_3 = 'http://www.yahoo.com';
$hyper_link_4 = 'http://www.apple.com';
$hyper_link_5 = 'http://www.airconsole.com';

$instagram_link = true;
$instruction_text_color = '#ffffff';
$line_break_color = '#db2126';
$line_break_style = 'dashed';
$line_break_weight = '1px';

$link_text_color = '#db2126';
$link_underline = false;
$link_weight = 'normal';
$logo_color = 'light';

$nav_link_1 = 'Home';
$nav_link_2 = 'Food';
$nav_link_3 = 'Drink';
$nav_link_4 = 'What\'s On';
$nav_link_5 = 'Book A Table';

$navigation_background_color = '#333333';
$navigation_text_color = '#db2126';
$paragraph_text_color = '#ffffff';
$template_background_color = '#222222';
$title_text_color = '#db2126';

$twitter_link = true;
$unsubscribe_color = '#db2126';
$view_online_color = '#db2126';
$voucher_background_1 = '#434343';
$voucher_background_2 = '#db2126';

$voucher_border_color = '#393939';
$voucher_code_color = '#db2126';
$voucher_text_color = '#ffffff';


//Get Template
$template = file_get_contents('templates/template_1.html');

//Theme Settings
$template = preg_replace('/\[\[email-background-color\]\]/', $template_background_color, $template);
$template = preg_replace('/\[\[header-background-color\]\]/', $header_background_color, $template);
$template = preg_replace('/\[\[navigation-background-color\]\]/', $navigation_background_color, $template);
$template = preg_replace('/\[\[content-background-color\]\]/', $content_background_color, $template);
$template = preg_replace('/\[\[line-break-color\]\]/', $line_break_color, $template);
$template = preg_replace('/\[\[line-break-style\]\]/', $line_break_style, $template);
$template = preg_replace('/\[\[line_break_weight\]\]/', $line_break_weight, $template);
$template = preg_replace('/\[\[footer-background-color\]\]/', $footer_background_color, $template);

//Main Text Settings
$template = preg_replace('/\[\[font-family\]\]/', $font_family, $template);
$template = preg_replace('/\[\[navigation-text-color\]\]/', $navigation_text_color, $template);
$template = preg_replace('/\[\[heading-color\]\]/', $title_text_color, $template);
$template = preg_replace('/\[\[paragraph-text-color\]\]/', $paragraph_text_color, $template);
$template = preg_replace('/\[\[link-text-color\]\]/', $link_text_color, $template);
$template = preg_replace('/\[\[link-weight\]\]/', $link_weight, $template);
if($link_underline === true){
    $template = preg_replace('/\[\[text-decoration\]\]/', 'underline', $template);
    $template = preg_replace('/\[\[link-underline\]\]/', 'yes', $template);
} else{
    $template = preg_replace('/\[\[text-decoration\]\]/', 'none', $template);
    $template = preg_replace('/\[\[link-underline\]\]/', 'no', $template);
}

//Footer Text Settings
$template = preg_replace('/\[\[footer-text-color\]\]/', $footer_text_color, $template);
$template = preg_replace('/\[\[view-online-color\]\]/', $view_online_color, $template);
$template = preg_replace('/\[\[unsubscribe-color\]\]/', $unsubscribe_color, $template);

//Social Link Settings
if($logo_color === 'light'){
    if($twitter_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/twitter-light.png';
        $template = preg_replace('/\[\[twitter-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[twitter-logo\]\]/', 'Remove-Logo', $template);
    }
    if($facebook_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/facebook-light.png';
        $template = preg_replace('/\[\[facebook-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[facebook-logo\]\]/', 'Remove-Logo', $template);
    }
    if($instagram_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/instagram-light.png';
        $template = preg_replace('/\[\[instagram-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[instagram-logo\]\]/', 'Remove-Logo', $template);
    }
} else if($logo_color === 'dark'){
    if($twitter_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/twitter-dark.png';
        $template = preg_replace('/\[\[twitter-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[twitter-logo\]\]/', 'Remove-Logo', $template);
    }
    if($facebook_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/facebook-dark.png';
        $template = preg_replace('/\[\[facebook-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[facebook-logo\]\]/', 'Remove-Logo', $template);
    }
    if($instagram_link === true){
        $logoLocation = 'http://img2.email2inbox.co.uk/social/instagram-dark.png';
        $template = preg_replace('/\[\[instagram-logo\]\]/', $logoLocation, $template);
    } else{
        $template = preg_replace('/\[\[instagram-logo\]\]/', 'Remove-Logo', $template);
    }
}

//Navigation Link Settings
$template = preg_replace('/\[\[nav-link-1\]\]/', $nav_link_1, $template);
$template = preg_replace('/\[\[hyper-link-1\]\]/', $hyper_link_1, $template);
$template = preg_replace('/\[\[nav-link-2\]\]/', $nav_link_2, $template);
$template = preg_replace('/\[\[hyper-link-2\]\]/', $hyper_link_2, $template);
$template = preg_replace('/\[\[nav-link-3\]\]/', $nav_link_3, $template);
$template = preg_replace('/\[\[hyper-link-3\]\]/', $hyper_link_3, $template);
$template = preg_replace('/\[\[nav-link-4\]\]/', $nav_link_4, $template);
$template = preg_replace('/\[\[hyper-link-4\]\]/', $hyper_link_4, $template);
$template = preg_replace('/\[\[nav-link-5\]\]/', $nav_link_5, $template);
$template = preg_replace('/\[\[hyper-link-5\]\]/', $hyper_link_5, $template);

//Image Settings
$template = preg_replace('/\[\[brand-logo\]\]/', $brand_logo, $template);
$template = preg_replace('/\[\[brand-logo-alt\]\]/', $brand_logo_alt, $template);
$template = preg_replace('/\[\[hero-image\]\]/', $hero_image, $template);
$template = preg_replace('/\[\[hero-image-alt\]\]/', $hero_image_alt, $template);

$voucher_background_1 = '#434343';
$voucher_background_2 = '#db2126';

$voucher_border_color = '#393939';
$voucher_code_color = '#db2126';
$voucher_text_color = '#ffffff';

//Voucher Settings
$template = preg_replace('/\[\[voucher-border-color\]\]/', $voucher_border_color, $template);
$template = preg_replace('/\[\[voucher-background-1\]\]/', $voucher_background_1, $template);
$template = preg_replace('/\[\[voucher-background-2\]\]/', $voucher_background_2, $template);
$template = preg_replace('/\[\[voucher-text-color\]\]/', $voucher_text_color, $template);
$template = preg_replace('/\[\[voucher-background-2\]\]/', $voucher_background_2, $template);
$template = preg_replace('/\[\[instruction-text-color\]\]/', $instruction_text_color, $template);
$template = preg_replace('/\[\[voucher-code-color\]\]/', $voucher_code_color, $template);


//Style Base64
preg_match_all('/<!--StyleStart(.*)StyleEnd-->/', $template, $matches);
$style = $matches[1][0];
$style = base64_encode($style);
$template = preg_replace('/\[\[data-styles\]\]/', $style, $template);

echo $template;

?>