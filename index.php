<?php
    include_once ('./config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>题库</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
    require (relative(__FILE__).'template/source.php');
    ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo (relative(__FILE__)); ?>css/style.css" />
    <script src="<?php echo (relative(__FILE__)); ?>js/global.js"></script>
</head>
<body>
    <!-- <?php
    require (relative(__FILE__).'template/header.php');
    ?> -->
    <div class="container">
        <h1 style="text-align:center">题库</h1>
        <ul class="container-nav">
            <li><a href="<?php echo (relative(__FILE__)); ?>other/network_enginner_exam.php"><i class="fa fa-folder-open-o"></i> 网络工程师测试</a></li>
            <li><a href="<?php echo (relative(__FILE__)); ?>data_structure/"><i class="fa fa-folder-open-o"></i> 数据结构</a></li>
            <li><a href="<?php echo (relative(__FILE__)); ?>other/sqlserver.php"><i class="fa fa-folder-open-o"></i> 数据库原理与应用 （主编：邹璇等)</a></li>
            <li><a href="<?php echo (relative(__FILE__)); ?>other/"><i class="fa fa-folder-open-o"></i> 未分类</a></li>
            <li><a href="<?php echo (relative(__FILE__)); ?>document/final_assembly_exam_2018.php">汇编期末测试冲刺</a></li>            
        </ul>
    </div>
    <!-- <?php
    require (relative(__FILE__).'template/footer.php');
    ?> -->
</body>
</html>