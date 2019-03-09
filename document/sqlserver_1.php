<?php
include_once ('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>第一章 数据库概论</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
    require(relative(__FILE__).'template/source.php');
    ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo (relative(__FILE__)); ?>css/style.css" />
    <script src="<?php echo (relative(__FILE__)); ?>js/global.js"></script>
</head>

<body>
<!-- <?php
require(relative(__FILE__).'template/header.php');
?> -->

<div class="container">
    <h1 style="text-align:center">第一章 数据库概论</h1>
    <h2 class="theme-sign">一、选择题</h2>
    <div class="block">
        <p class="question"><span class="number">（1）</span>
        文件倒排系统阶段属于下列（）。
        </p>
        <p class="choice header_choice true">A. 文件管理阶段</p>
        <p class="choice false">B. 人工管理阶段</p>
        <p class="choice false">C. 数据库管理阶段</p>
        <p class="choice false">D. 面对对象数据库发展阶段</p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（2）</span>
        （）用来实现数据库系统的一些操作，包括数据定义、数据操纵、数据查询的数据控制等。
        </p>
        <p class="one-line-choice">
            <span class="choice true">A. DBMS</span>
            <span class="choice false">B. DB</span>
            <span class="choice false">C. DBS</span>
            <span class="choice false">D. DBA</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（3）</span>
        可以把文字、图形、图像、声音、各种具体数据，按照一定的结构存放起来，这些都是（）。
        </p>
        <p class="one-line-choice">
            <span class="choice true">A. DATA</span>
            <span class="choice false">B. DBS</span>
            <span class="choice false">C. DB</span>
            <span class="choice false">D. 其他</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（4）</span>
        具有数据独立性和共享性好、冗余度小的优点是在（）阶段。
        </p>
        <p class="one-line-choice">
            <span class="choice false">A. 文件管理</span>
            <span class="choice false">B. 人工管理</span>
            <span class="choice true">C. 数据库管理</span>
            <span class="choice false">D. 以上阶段都具有</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（5）</span>
        下列不属于DBMS提供的数据控制功能的是（）。
        </p>
        <p class="choice header_choice false">A. 数据的安全性控制</p>
        <p class="choice false">B. 数据的完整性控制</p>
        <p class="choice false">C. 数据库的并发控制</p>
        <p class="choice true">D. 数据间的联系</p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（6）</span>
        英文缩写DBA代表（）。
        </p>
        <p class="one-line-choice">
            <span class="choice true">A. 数据库管理员</span>
            <span class="choice false">B. 数据库管理系统</span>
            <span class="choice false">C. 数据库定义语言</span>
            <span class="choice false">D. 数据库操纵语言</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（7）</span>
        数据库系统包含以下（）内容。
        </p>
        <p class="one-line-choice">
            <span class="choice false">A. DB</span>
            <span class="choice false">B. DBMS</span>
            <span class="choice false">C. DBA</span>
            <span class="choice true">D. 以上都包含</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（8）</span>
        计算机程序员设计了某高校的学生成绩管理系统，这属于数据库技术研究领域的（）。
        </p>
        <p class="choice header_choice false">A. 数据库理论的研究</p>
        <p class="choice true">B. 数据库应用系统设计与开发研制</p>
        <p class="choice false">C. DBMS软件的研制</p>
        <p class="choice false">D. 不属于以上三个领域</p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（9）</span>
        数据仓库是（）。
        </p>
        <p class="one-line-choice">
            <span class="choice false">A. 面向主题的</span>
            <span class="choice false">B. 集成和相对稳定的</span>
            <span class="choice false">C. 反应历史变化的</span>
            <span class="choice true">D. 以上说法都正确</span>
        </p>
    </div>

    <div class="block">
        <p class="question"><span class="number">（10）</span>
        数据挖掘（DM）在人工智能领域，习惯上又称为数据库中知识发现，简称为（）。
        </p>
        <p class="one-line-choice">
            <span class="choice false">A. DW</span>
            <span class="choice false">B. DM</span>
            <span class="choice true">C. KDD</span>
            <span class="choice false">D. 都不正确</span>
        </p>
    </div>

    <h2 class="theme-sign">二、填空题</h2>
    <div class="block">
        <p class="gap-filling">
            <span class="number">（1）</span>
            数据库中的数据是由
            <span class="gap-filling-answer"> DBMS </span>
            统一管理和控制的。
        </p>
    </div>

    <div class="block">
        <p class="gap-filling">
            <span class="number">（2）</span>
            数据库管理技术已经历了人工管理阶段、
            <span class="gap-filling-answer"> 文件管理阶段 </span>
            和
            <span class="gap-filling-answer"> 数据库管理阶段 </span>
            三个发展阶段。
        </p>
    </div>

    <div class="block">
        <p class="gap-filling">
            <span class="number">（3）</span>
            数据库系统的主要优点：
            <span class="gap-filling-answer"> 易扩展性 </span>
            、数据冗余度小、具有较高的数据程序独立性、具有统一的数据控制功能等。
        </p>
    </div>

    <div class="block">
        <p class="gap-filling">
            <span class="number">（4）</span>
            20世纪60年代末，先后发明了
            <span class="gap-filling-answer"> 层次 </span>
            数据库、
            <span class="gap-filling-answer"> 网状 </span>
            数据库和关系数据库，其中，关系数据库首次发明时间是在
            <span class="gap-filling-answer"> 1970 </span>
            年，是由IBM公司的一位科学家 E.F.Codd 提出的。
        </p>
    </div>

    <div class="block">
        <p class="gap-filling">
            <span class="number">（5）</span>
            面向对象数据库的英文简称是
            <span class="gap-filling-answer"> OODB </span>
            ，面向对象数据库系统的英文简称是
            <span class="gap-filling-answer"> OODBS </span>
            。
        </p>
    </div>
</div>

<!-- <?php
require(relative(__FILE__).'template/footer.php');
?> -->

</body>

</html>