<?php 
$countPerPage = 5;
echo ' cat:'.$cat = $_GET["cat"];
echo ' page:'.$current_page = $_GET["cpage"];
if($cat == '') $cat = "news";
if($current_page < 1) $current_page = 1;

//$current_page = (get_query_var('page')) ? get_query_var('page') : 1;
$posts = new WP_Query( array('category_name' => $cat,'posts_per_page' => $countPerPage, 'paged' => $current_page) );

$categorie = get_categories( 'type='.$cat );
$categorie_number =  $categorie[0]->count;
$total_pages = ceil($categorie_number / $countPerPage);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  </head>

  <body style="padding-top: 5px; padding-left: 0px; overflow: hidden; width: 900px;"> 
    <div class="accordion" style="width: 70%" id="<?php echo 'accordion1' ?>">
        <?php echo_collapse($posts, 'accordion1'); ?>
    </div>
      <?php echo_pagination($current_page, $cat, $total_pages); ?>
      
    <script src="/wpc/wp-content/themes/wpbootstrap/bootstrap/js/jquery.js"></script>
    <script src="/wpc/wp-content/themes/wpbootstrap/bootstrap/js/bootstrap.min.js"></script>  
      
  </body>
</html>