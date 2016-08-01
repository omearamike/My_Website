<?php
/*
Template Name: Cover  Page
*/
?>

<?php get_header(); ?>
<style>
body {
  background-color: #fc5158;
}

.content-p {
  background-color: #fc5158;
  height: 100vh;
  width: auto;
  /*padding-top: 40px;
  padding-left: 40px;*/
}



</style>


<div class="content-p">
<p> Hello! I’m Mike O'Meara, Independent Web Developer and problem solver. I enjoy making the impossible a reality through the use of the web technologies. </p>
</div>

<div class="content-container homeMenu" data-content-id="content_dok7p8bzd" data-content-type="content-img">
  <div class="image full">
    <!-- <img class="live-image" src="http://192.168.1.15:8888/wordpress/wp-content/uploads/2016/06/jumbotron_V1.2.jpg" alt="_MS_home_portrait_smaller" style=""> -->
    <!-- <img class="live-image" src="http://mattsteelmakes.com/wp-content/uploads/2016/06/MS_home_portrait_smaller.jpg" alt="_MS_home_portrait_smaller" style=""> -->
  </div>
  <!-- <ul>
    <li>This will be the first item</li>
    <li>This is the 2nd item</li>
  </ul> -->

  <ul>
    <li style="color:white;"> Projects </li>
    <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
        // 'exclude'    => array( 1 ),
        'title_li'            => __( '' ),
        'child_of'            => 2
    ) ); ?>
</ul>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
