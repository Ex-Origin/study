<?php
    include_once ('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>数据结构试卷（二）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
        require(relative(__FILE__).'/template/source.php');
        ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo (relative(__FILE__)); ?>css/style.css" />
    <script src="<?php echo (relative(__FILE__)); ?>js/global.js"></script>
</head>

<body>
    <!-- <?php
        require(relative(__FILE__).'template/header.php');
        ?> -->

    <div class="container">
        <h1 style="text-align:center">
            北京邮电大学<br/>
            2016年硕士研究生入学考试试题
        </h1>
        <h3>考试科目：计算机学科基础综合</h3>
        <h2 class="theme-sign">一、单项选择题（每题2分，共80分）</h2>
        <div class="block">
            <p class="question"><span class="number">（1）</span>
            以下与数据的储存结构无关的术语是
            </p>
            <p class="one-line-choice">
                <span class="choice false">A. 循环队列</span>
                <span class="choice false">B. 线索树</span>
                <span class="choice true">C. 栈</span>
                <span class="choice false">D. 数组</span>
            </p>
        </div>

        <div class="block">
            <p class="question"><span class="number">（1）</span>
                若双栈共享空间 S[0 ... n-1]，初始时top1=-1、top2=n，则判栈满的条件是
            </p>
            <p class="choice header_choice false">A. top1 == top2</p>
            <p class="choice false">B. top1 - top2 == 1</p>
            <p class="choice false">C. top1 + top2 == n</p>
            <p class="choice false">D. top2 - top1 == 1</p>
        </div>

    </div>

    <!-- <?php
        require(relative(__FILE__).'template/footer.php');
        ?> -->

</body>

</html>