<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="profile" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <style>
        .sidebar ul li {
            list-style: none;
            padding: 5px 0;
            border-bottom: 1px solid #cecece;
        }
        .sidebar h3 {
            margin-top: 0;
        }
        .sidebar ul {
            margin: 20px 0;
            padding-left: 10px;
        }
        .sidebar ul li a {
            color: #000;
        }
            table.events-table tr th, table.events-table tr td {
                border: 1px solid !important;
                padding: 20px!important;
                margin: 20px;
                width: 280px;
            }
            .events-details {
                margin: 31px 0;
            }
            .em-booking-form-details input.input{
                border-radius: 15px;
                border: 1px solid;
                height: 35px;
            }
            .em-booking-form-details textarea{
                border-radius: 15px;
                border: 1px solid;
                height: 120px;
            }
            .em-booking-form-details .em-booking-submit {
                width: auto;
                padding: 10px 20px;
                border-radius: 15px;
                border: none;
                text-transform: uppercase;
                background-color: red;
                color: #fff;
                font-size: 13px;
            }
            div.em-booking-login input {
                margin: 0px;
                border-radius: 15px;
                border: 1px solid;
                height: 29px;
            }
            #em_wp-submit {
                width: 25%;
                padding: 10px 20px;
                background-color: red;
                color: #fff;
                border: none;
            }
            div.em-booking-login input {
                margin: 0px;
                width: 100%;
                height: 40px;
            }
            #em_rememberme {
                width: 13%;
            }
            .em-booking-login {
                min-height: 500px;
            }
        </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

