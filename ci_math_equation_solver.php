<?php
/*
Plugin Name: CI Math equation solver
Plugin URI: https://www.calculator.io/math-equation-solver/
Description: PEMDAS calculator solves mathematical expressions with the order of operations - brackets, exponents, multiplication, division, addition, and subtraction.
Version: 1.0.0
Author: Math Equation Solver / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_math_equation_solver
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Math Equation Solver by www.calculator.io";

function display_calcio_ci_math_equation_solver(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Math Equation Solver</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_math_equation_solver_iframe"></iframe></div>';
}


add_shortcode( 'ci_math_equation_solver', 'display_calcio_ci_math_equation_solver' );