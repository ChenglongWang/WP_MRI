<?php get_header() ?>

<section>
    <?php $intro_query = new WP_Query('post_type=introductions');
    $admins = array();
    $nmrs = array();
    $mris = array();
    $students = array();
    $externals = array();
          while ($intro_query->have_posts()) : $intro_query->the_post();{
              $args = get_post_meta(get_the_ID(), 'personalProfile');
              if($args[0][0]['position'] == 'administration') array_push($admins, get_the_ID ());
              if($args[0][0]['position'] == 'NMR') array_push($nmrs, get_the_ID ());
              if($args[0][0]['position'] == 'MRI') array_push($mris, get_the_ID ());
              if($args[0][0]['position'] == 'external') array_push($externals, get_the_ID ());
              if($args[0][0]['position'] == 'student') array_push($students, get_the_ID ());
          }endwhile;
    ?>
    <p class='subtitle'>行政</p>
        <tr>
            <?php if(!empty($admins)) { ?>
                <?php foreach($admins as $admin) ?>
                    <td width="25%"><a class="data"><?php echo get_the_title($admin)?>
            <?php } ?></a>
            </td>
        </tr>
    <p class='subtitle'>核磁共振波谱学</p>
        <tr>
            <?php if(!empty($nmrs)) { ?>
                <?php foreach($nmrs as $nmr) ?>
                    <td width="25%"><nobr class="data"><?php echo get_the_title($nmr)?>
            <?php } ?></nobr>
            </td>
        </tr>
    <p class='subtitle'>磁共振成像技术研发</p>
        <tr>
            <?php if(!empty($mris)) { ?>
                <?php foreach($mris as $mri) ?>
            <td width="25%"><a href="<?php echo esc_url(get_post_permalink($mri)) ?>" class="data"><?php echo get_the_title($mri)?>
            <?php } ?></a>
            </td>
        </tr> 
    <p class='subtitle'>外聘</p>
        <tr>
            <?php if(!empty($externals)) { ?>
                <?php foreach($externals as $external) ?>
                    <td width="25%"><nobr class="data"><?php echo get_the_title($external)?>
            <?php } ?></nobr>
            </td>
        </tr>
    <p class='subtitle'>学生</p>
        <tr>
            <?php if(!empty($students)) { ?>
                <?php foreach($students as $student) ?>
                    <td width="25%"><a herf="<?php get_post_permalink($student) ?>" class="data"><?php echo get_the_title($student)?>
            <?php } ?></a>
            </td>
        </tr>
</section>

<?php get_footer() ?>
