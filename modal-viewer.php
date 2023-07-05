<?php
/**
 * Plugin Name: Modal Viewer
 * Plugin URI: https://www.linkedin.com/
 * Description: It will help to create a modal using wp shortcode [modal_viewer]
 * Author: Kali Prasad Panda
 * Author URI: https://www.linkedin.com/in/kali-prasad-panda/
 * Version: 1.0.0
 * Text Domain: modal-viewer
 */

//  adding styles
function wpbootstraps_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' );
    wp_enqueue_script('bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'wpbootstraps_enqueue_styles');

function modal_viewer_shortcode() {
    return '<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hello World..!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>';
}
add_shortcode('modal_viewer', 'modal_viewer_shortcode');
?>
