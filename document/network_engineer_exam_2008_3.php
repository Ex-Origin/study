<?php
    include_once ('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2008年下半年 网络工程师 上午试卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
    require (relative(__FILE__).'template/source.php');
    ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="../js/global.js"></script>
</head>

<body>
    <!-- <?php
    require (relative(__FILE__).'template/header.php');
    ?> -->

    <div class="container">
        <h1 style="text-align:center">2008年下半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">计算机内存一般分为静态数据区、代码区、栈区和堆区，若某指令的操作数之一采用立即数寻址方式，则该操作数位于 （1） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%A1%E7%AE%97%E6%9C%BA%E5%86%85%E5%AD%98%E4%B8%80%E8%88%AC%E5%88%86%E4%B8%BA%E9%9D%99%E6%80%81%E6%95%B0%E6%8D%AE%E5%8C%BA%E3%80%81%E4%BB%A3%E7%A0%81%E5%8C%BA%E3%80%81%E6%A0%88%E5%8C%BA%E5%92%8C%E5%A0%86%E5%8C%BA%EF%BC%8C%E8%8B%A5%E6%9F%90%E6%8C%87%E4%BB%A4%E7%9A%84%E6%93%8D%E4%BD%9C%E6%95%B0%E4%B9%8B%E4%B8%80%E9%87%87%E7%94%A8%E7%AB%8B%E5%8D%B3%E6%95%B0%E5%AF%BB%E5%9D%80%E6%96%B9%E5%BC%8F%EF%BC%8C%E5%88%99%E8%AF%A5%E6%93%8D%E4%BD%9C%E6%95%B0%E4%BD%8D%E4%BA%8E%20%EF%BC%881%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（1）</span>
                <span class="choice false">A．静态数据区</span>
                <span class="choice true">B．代码区</span>
                <span class="choice false">C．栈区</span>
                <span class="choice false">D．堆区</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    立即数寻址方式示例：mov ax, 0201<br />
                    其汇编代码为B8 01 02，显然操作数是存储在代码区中的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">计算机在进行浮点数的相加（减）运算之前先进行对阶操作，若x的阶码大于y的阶码，则应将 （2） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%A1%E7%AE%97%E6%9C%BA%E5%9C%A8%E8%BF%9B%E8%A1%8C%E6%B5%AE%E7%82%B9%E6%95%B0%E7%9A%84%E7%9B%B8%E5%8A%A0%EF%BC%88%E5%87%8F%EF%BC%89%E8%BF%90%E7%AE%97%E4%B9%8B%E5%89%8D%E5%85%88%E8%BF%9B%E8%A1%8C%E5%AF%B9%E9%98%B6%E6%93%8D%E4%BD%9C%EF%BC%8C%E8%8B%A5x%E7%9A%84%E9%98%B6%E7%A0%81%E5%A4%A7%E4%BA%8Ey%E7%9A%84%E9%98%B6%E7%A0%81%EF%BC%8C%E5%88%99%E5%BA%94%E5%B0%86%20%EF%BC%882%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（2） </span>A．x的阶码缩小至与y的阶码相同，且使x的尾数部分进行算术左移。
            </p>
            <p class="choice false">B．x的阶码缩小至与y的阶码相同，且使x的尾数部分进行算术右移。
            </p>
            <p class="choice false">C．y的阶码扩大至与x的阶码相同，且使y的尾数部分进行算术左移。
            </p>
            <p class="choice true">D．y的阶码扩大至与x的阶码相同，且使y的尾数部分进行算术右移。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    为了减少误差（保持精度），要将阶码值小的数的尾数右移。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在CPU中， （3） 可用于传送和暂存用户数据，为ALU执行算术逻辑运算提供工作区。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8CPU%E4%B8%AD%EF%BC%8C%20%EF%BC%883%EF%BC%89%20%E5%8F%AF%E7%94%A8%E4%BA%8E%E4%BC%A0%E9%80%81%E5%92%8C%E6%9A%82%E5%AD%98%E7%94%A8%E6%88%B7%E6%95%B0%E6%8D%AE%EF%BC%8C%E4%B8%BAALU%E6%89%A7%E8%A1%8C%E7%AE%97%E6%9C%AF%E9%80%BB%E8%BE%91%E8%BF%90%E7%AE%97%E6%8F%90%E4%BE%9B%E5%B7%A5%E4%BD%9C%E5%8C%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（3）</span>
                <span class="choice false">A．程序计数器</span>
                <span class="choice true">B．累加寄存器</span>
                <span class="choice false">C．程序状态寄存器</span>
                <span class="choice false">D．地址寄存器</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    为了保证程序(在操作系统中理解为进程)能够连续地执行下去，CPU必须具有某些手段来确定下一条指令的地址。而程序计数器正是起到这种作用，所以通常又称为指令计数器。在程序开始执行前，必须将它的起始地址，即程序的一条指令所在的内存单元地址送入PC，因此程序计数器（PC）的内容即是从内存提取的第一条指令的地址。当执行指令时，CPU将自动修改PC的内容，即每执行一条指令PC增加一个量，这个量等于指令所含的字节数，以便使其保持的总是将要执行的下一条指令的地址。<br />
                    状态寄存器：用来标识协处理器中指令执行情况的，它相当于CPU中的标志位寄存器。<br />
                    累加寄存器：主要用来保存操作数和运算结果等信息，从而节省读取操作数所需占用总线和访问存储器的时间。<br />
                    地址寄存器：可作为存储器指针。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于在I/O设备与主机间交换数据的叙述， （4） 是错误的。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E5%9C%A8I/O%E8%AE%BE%E5%A4%87%E4%B8%8E%E4%B8%BB%E6%9C%BA%E9%97%B4%E4%BA%A4%E6%8D%A2%E6%95%B0%E6%8D%AE%E7%9A%84%E5%8F%99%E8%BF%B0%EF%BC%8C%20%EF%BC%884%EF%BC%89%20%E6%98%AF%E9%94%99%E8%AF%AF%E7%9A%84%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（4） </span>A．中断方式下，CPU需要执行程序来实现数据传送任务。
            </p>
            <p class="choice false">B．中断方式和DMA方式下，CPU与I/O设备都可同步工作。
            </p>
            <p class="choice true">C．中断方式和DMA方式中，快速I/O设备更适合采用中断方式传递数据。
            </p>
            <p class="choice false">D．若同时接到DMA请求和中断请求，CPU优先响应DMA请求。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    快速I/O设备处理的数据量比较大，更适合采用DMA方式传递数据。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Cache用于存放主存数据的部分拷贝，主存单元地址与Cache单元地址之间的转换方式由 （5） 完成。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=Cache%E7%94%A8%E4%BA%8E%E5%AD%98%E6%94%BE%E4%B8%BB%E5%AD%98%E6%95%B0%E6%8D%AE%E7%9A%84%E9%83%A8%E5%88%86%E6%8B%B7%E8%B4%9D%EF%BC%8C%E4%B8%BB%E5%AD%98%E5%8D%95%E5%85%83%E5%9C%B0%E5%9D%80%E4%B8%8ECache%E5%8D%95%E5%85%83%E5%9C%B0%E5%9D%80%E4%B9%8B%E9%97%B4%E7%9A%84%E8%BD%AC%E6%8D%A2%E6%96%B9%E5%BC%8F%E7%94%B1%20%EF%BC%885%EF%BC%89%20%E5%AE%8C%E6%88%90%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（5）</span>
                <span class="choice true">A．硬件</span>
                <span class="choice false">B．软件</span>
                <span class="choice false">C．用户</span>
                <span class="choice false">D．程序员</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    当然是硬件啦。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若一个项目由9个主要任务构成，其计划图（如下图所示）展示了任务之间的前后关系以及每个任务所需天数，该项目的关键路径是 （6） ，完成项目所需要的最短时间是 （7） 天。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E4%B8%80%E4%B8%AA%E9%A1%B9%E7%9B%AE%E7%94%B19%E4%B8%AA%E4%B8%BB%E8%A6%81%E4%BB%BB%E5%8A%A1%E6%9E%84%E6%88%90%EF%BC%8C%E5%85%B6%E8%AE%A1%E5%88%92%E5%9B%BE%EF%BC%88%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%EF%BC%89%E5%B1%95%E7%A4%BA%E4%BA%86%E4%BB%BB%E5%8A%A1%E4%B9%8B%E9%97%B4%E7%9A%84%E5%89%8D%E5%90%8E%E5%85%B3%E7%B3%BB%E4%BB%A5%E5%8F%8A%E6%AF%8F%E4%B8%AA%E4%BB%BB%E5%8A%A1%E6%89%80%E9%9C%80%E5%A4%A9%E6%95%B0%EF%BC%8C%E8%AF%A5%E9%A1%B9%E7%9B%AE%E7%9A%84%E5%85%B3%E9%94%AE%E8%B7%AF%E5%BE%84%E6%98%AF%20%EF%BC%886%EF%BC%89%20%EF%BC%8C%E5%AE%8C%E6%88%90%E9%A1%B9%E7%9B%AE%E6%89%80%E9%9C%80%E8%A6%81%E7%9A%84%E6%9C%80%E7%9F%AD%E6%97%B6%E9%97%B4%E6%98%AF%20%EF%BC%887%EF%BC%89%20%E5%A4%A9%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice true"><span class="number">（6） </span>A．A→B→C→D→I</p>
            <p class="choice false">B．A→B→C→E→I
            </p>
            <p class="choice false">C．A→B→C→F→G→I</p>
            <p class="choice false">D．A→B→C→F→H→I</p>
            <p class="one-line-choice"><span class="number">（7）</span>
                <span class="choice false">A．16</span>
                <span class="choice false">B．17</span>
                <span class="choice false">C．18</span>
                <span class="choice true">D．19</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    最长时间的那个路径就是关键路径。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">软件能力成熟度模型（CMM）将软件能力成熟度自低到高依次划分为初试级、可重复级、定义级、管理级和优化级，其中 （8） 对软件过程和产品都有定量的理解与控制。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%BD%AF%E4%BB%B6%E8%83%BD%E5%8A%9B%E6%88%90%E7%86%9F%E5%BA%A6%E6%A8%A1%E5%9E%8B%EF%BC%88CMM%EF%BC%89%E5%B0%86%E8%BD%AF%E4%BB%B6%E8%83%BD%E5%8A%9B%E6%88%90%E7%86%9F%E5%BA%A6%E8%87%AA%E4%BD%8E%E5%88%B0%E9%AB%98%E4%BE%9D%E6%AC%A1%E5%88%92%E5%88%86%E4%B8%BA%E5%88%9D%E8%AF%95%E7%BA%A7%E3%80%81%E5%8F%AF%E9%87%8D%E5%A4%8D%E7%BA%A7%E3%80%81%E5%AE%9A%E4%B9%89%E7%BA%A7%E3%80%81%E7%AE%A1%E7%90%86%E7%BA%A7%E5%92%8C%E4%BC%98%E5%8C%96%E7%BA%A7%EF%BC%8C%E5%85%B6%E4%B8%AD%20%EF%BC%888%EF%BC%89%20%E5%AF%B9%E8%BD%AF%E4%BB%B6%E8%BF%87%E7%A8%8B%E5%92%8C%E4%BA%A7%E5%93%81%E9%83%BD%E6%9C%89%E5%AE%9A%E9%87%8F%E7%9A%84%E7%90%86%E8%A7%A3%E4%B8%8E%E6%8E%A7%E5%88%B6%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（8）</span>
                <span class="choice false">A．可重复级和定义级</span>
                <span class="choice false">B．定义级和管理级
                </span>
                <span class="choice true">C．管理级和优化级</span>
                <span class="choice false">D．定义级、管理级和优化级</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    根据“已定量管理级”的定义，该级别必须收集对软件过程和产品质量的详细度量，对软件过程和产品都有定量的理解与控制。它的更高级别也必须满足该要求。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ISO/IEC 9126软件质量模型中第一层定义了六个质量特性，并为各质量特性定义了相应的质量子特性，子特性 （9） 属于可靠性质量特性。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=ISO/IEC%209126%E8%BD%AF%E4%BB%B6%E8%B4%A8%E9%87%8F%E6%A8%A1%E5%9E%8B%E4%B8%AD%E7%AC%AC%E4%B8%80%E5%B1%82%E5%AE%9A%E4%B9%89%E4%BA%86%E5%85%AD%E4%B8%AA%E8%B4%A8%E9%87%8F%E7%89%B9%E6%80%A7%EF%BC%8C%E5%B9%B6%E4%B8%BA%E5%90%84%E8%B4%A8%E9%87%8F%E7%89%B9%E6%80%A7%E5%AE%9A%E4%B9%89%E4%BA%86%E7%9B%B8%E5%BA%94%E7%9A%84%E8%B4%A8%E9%87%8F%E5%AD%90%E7%89%B9%E6%80%A7%EF%BC%8C%E5%AD%90%E7%89%B9%E6%80%A7%20%EF%BC%889%EF%BC%89%20%E5%B1%9E%E4%BA%8E%E5%8F%AF%E9%9D%A0%E6%80%A7%E8%B4%A8%E9%87%8F%E7%89%B9%E6%80%A7%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A．准确性</span>
                <span class="choice false">B．易理解性</span>
                <span class="choice true">C．成熟性</span>
                <span class="choice false">D．易学性</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">李某在《电脑与编程》杂志上看到张某发表的一组程序，颇为欣赏，就复印了一百份作为程序设计辅导材料发给了学生。李某又将这组程序逐段加以评析，写成评论文章后投到《电脑编程技巧》杂志上发表。李某的行为
                （10） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9D%8E%E6%9F%90%E5%9C%A8%E3%80%8A%E7%94%B5%E8%84%91%E4%B8%8E%E7%BC%96%E7%A8%8B%E3%80%8B%E6%9D%82%E5%BF%97%E4%B8%8A%E7%9C%8B%E5%88%B0%E5%BC%A0%E6%9F%90%E5%8F%91%E8%A1%A8%E7%9A%84%E4%B8%80%E7%BB%84%E7%A8%8B%E5%BA%8F%EF%BC%8C%E9%A2%87%E4%B8%BA%E6%AC%A3%E8%B5%8F%EF%BC%8C%E5%B0%B1%E5%A4%8D%E5%8D%B0%E4%BA%86%E4%B8%80%E7%99%BE%E4%BB%BD%E4%BD%9C%E4%B8%BA%E7%A8%8B%E5%BA%8F%E8%AE%BE%E8%AE%A1%E8%BE%85%E5%AF%BC%E6%9D%90%E6%96%99%E5%8F%91%E7%BB%99%E4%BA%86%E5%AD%A6%E7%94%9F%E3%80%82%E6%9D%8E%E6%9F%90%E5%8F%88%E5%B0%86%E8%BF%99%E7%BB%84%E7%A8%8B%E5%BA%8F%E9%80%90%E6%AE%B5%E5%8A%A0%E4%BB%A5%E8%AF%84%E6%9E%90%EF%BC%8C%E5%86%99%E6%88%90%E8%AF%84%E8%AE%BA%E6%96%87%E7%AB%A0%E5%90%8E%E6%8A%95%E5%88%B0%E3%80%8A%E7%94%B5%E8%84%91%E7%BC%96%E7%A8%8B%E6%8A%80%E5%B7%A7%E3%80%8B%E6%9D%82%E5%BF%97%E4%B8%8A%E5%8F%91%E8%A1%A8%E3%80%82%E6%9D%8E%E6%9F%90%E7%9A%84%E8%A1%8C%E4%B8%BA%20%EF%BC%8810%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（10） </span>A．侵犯了张某的著作权，因为其未经许可，擅自复印张某的程序。
            </p>
            <p class="choice false">B．侵犯了张某的著作权，因为在评论文章中全文引用了发表的程序。
            </p>
            <p class="choice true">C．不侵犯张某的著作权，其行为属于合理使用。
            </p>
            <p class="choice false">D．侵犯了张某的著作权，因为其擅自复印，又在其发表的文章中全文引用了张某的程序。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    《中华人民共和国著作权法》第二十二条规定在下列情况下使用作品，可以不经著作权人许可，不向其支付报酬，但应当指明作者姓名、作品名称，并且不得侵犯著作权人依照本法享有的其他权利：<br />
                    （二）为介绍、评论某一作品或者说明某一问题，在作品中适当引用他人已经发表的作品；<br />
                    （六）为学校课堂教学或者科学研究，翻译或者少量复制已经发表的作品，供教学或者科研人员使用，但不得出版发行；<br />
                    由于李某是以教学为目的少量复印资料，不构成侵权。<br />
                    由于李某是将这组程序逐段加以评析，写成评论文章，其目的是为了介绍和评论该作品而适当引用，因此也不构成侵权。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">光纤分为单模光纤与多模光纤，这两种光纤的区别是 （11） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%89%E7%BA%A4%E5%88%86%E4%B8%BA%E5%8D%95%E6%A8%A1%E5%85%89%E7%BA%A4%E4%B8%8E%E5%A4%9A%E6%A8%A1%E5%85%89%E7%BA%A4%EF%BC%8C%E8%BF%99%E4%B8%A4%E7%A7%8D%E5%85%89%E7%BA%A4%E7%9A%84%E5%8C%BA%E5%88%AB%E6%98%AF%20%EF%BC%8811%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（11） </span>A．单模光纤的纤芯大，多模光纤的纤芯小。
            </p>
            <p class="choice true">B．单模光纤比多模光纤采用的波长长。
            </p>
            <p class="choice false">C．单模光纤的传输频带窄，而多模光纤的传输频带宽。
            </p>
            <p class="choice false">D．单模光纤的光源采用发光二极管（LightEmittingDiode），而多模光纤的光源采用激光二极管（LaserDiode）。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    除了B是正确的外，其他的全部说反了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在光纤通信标准中，OC-3的数据速率是 （12） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%85%89%E7%BA%A4%E9%80%9A%E4%BF%A1%E6%A0%87%E5%87%86%E4%B8%AD%EF%BC%8COC-3%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8812%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（12）</span>
                <span class="choice false">A．51Mb/s</span>
                <span class="choice true">B．155Mb/s</span>
                <span class="choice false">C．622Mb/s</span>
                <span class="choice false">D．2488Mb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    OC-1是51.84Mb/s，乘以3，就是OC-3的数据速率。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下图所示是一种 （13） 调制方式。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E6%98%AF%E4%B8%80%E7%A7%8D%20%EF%BC%8813%EF%BC%89%20%E8%B0%83%E5%88%B6%E6%96%B9%E5%BC%8F%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（13）</span>
                <span class="choice false">A．ASK</span>
                <span class="choice false">B．FSK</span>
                <span class="choice true">C．PSK</span>
                <span class="choice false">D．DPSK</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    ASK——幅移键控，通过调整振幅来表示不同数据；<br />
                    FSK——频移键控，通过调整频率来表示不同数据；<br />
                    PSK——相移键控，通过调整相位来表示不同数据；<br />
                    DPSK——相对相移键控调制，信息是通过连续信号之间的载波信号的相位差别被传输的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于曼彻斯特编码，下面叙述中错误的是 （14） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E6%9B%BC%E5%BD%BB%E6%96%AF%E7%89%B9%E7%BC%96%E7%A0%81%EF%BC%8C%E4%B8%8B%E9%9D%A2%E5%8F%99%E8%BF%B0%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8814%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（14） </span>A．曼彻斯特编码是一种双相码。
            </p>
            <p class="choice false">B．采用曼彻斯特编码，波特率是数据速率的2倍。
            </p>
            <p class="choice false">C．曼彻斯特编码可以自同步。
            </p>
            <p class="choice true">D．曼彻斯特编码效率高。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    曼彻斯特编码效率只有50%，不能算效率高。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">E1信道的数据速率是 （15） ，其中的每个话音信道的数据速率是 （16） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=E1%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8815%EF%BC%89%20%EF%BC%8C%E5%85%B6%E4%B8%AD%E7%9A%84%E6%AF%8F%E4%B8%AA%E8%AF%9D%E9%9F%B3%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8816%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（15）</span>
                <span class="choice false">A．1.544Mb/s</span>
                <span class="choice true">B．2.048Mb/s</span>
                <span class="choice false">C．6.312Mb/s</span>
                <span class="choice false">D．44.736Mb/s</span>
            </p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．56Kb/s</span>
                <span class="choice true">B．64Kb/s</span>
                <span class="choice false">C．128Kb/s</span>
                <span class="choice false">D．2048Kb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在异步通信中，每个字符包含1位起始位、7位数据位、1位奇偶校验位和1位终止位。每秒钟传送100个字符，则有效数据速率为 （17） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%BC%82%E6%AD%A5%E9%80%9A%E4%BF%A1%E4%B8%AD%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%AD%97%E7%AC%A6%E5%8C%85%E5%90%AB1%E4%BD%8D%E8%B5%B7%E5%A7%8B%E4%BD%8D%E3%80%817%E4%BD%8D%E6%95%B0%E6%8D%AE%E4%BD%8D%E3%80%811%E4%BD%8D%E5%A5%87%E5%81%B6%E6%A0%A1%E9%AA%8C%E4%BD%8D%E5%92%8C1%E4%BD%8D%E7%BB%88%E6%AD%A2%E4%BD%8D%E3%80%82%E6%AF%8F%E7%A7%92%E9%92%9F%E4%BC%A0%E9%80%81100%E4%B8%AA%E5%AD%97%E7%AC%A6%EF%BC%8C%E5%88%99%E6%9C%89%E6%95%88%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8817%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A．500b/s</span>
                <span class="choice false">B．600b/s</span>
                <span class="choice true">C．700b/s</span>
                <span class="choice false">D．800b/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    个人认为：奇偶校验位不算有效数据。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">采用CRC进行差错校验，声称多项式为G(X)= X4+X+1，信息码字为10110，则计算机的CRC校验码是 （18） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8CRC%E8%BF%9B%E8%A1%8C%E5%B7%AE%E9%94%99%E6%A0%A1%E9%AA%8C%EF%BC%8C%E5%A3%B0%E7%A7%B0%E5%A4%9A%E9%A1%B9%E5%BC%8F%E4%B8%BAG%28X%29%3D%20X4%2BX%2B1%EF%BC%8C%E4%BF%A1%E6%81%AF%E7%A0%81%E5%AD%97%E4%B8%BA10110%EF%BC%8C%E5%88%99%E8%AE%A1%E7%AE%97%E6%9C%BA%E7%9A%84CRC%E6%A0%A1%E9%AA%8C%E7%A0%81%E6%98%AF%20%EF%BC%8818%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（18）</span>
                <span class="choice false">A．0000</span>
                <span class="choice false">B．0100</span>
                <span class="choice false">C．0010</span>
                <span class="choice true">D．1111</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">采用海明码进行差错校验，信息码字为1001011，为纠正一位错，则需要 （19） 比特冗余位。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8%E6%B5%B7%E6%98%8E%E7%A0%81%E8%BF%9B%E8%A1%8C%E5%B7%AE%E9%94%99%E6%A0%A1%E9%AA%8C%EF%BC%8C%E4%BF%A1%E6%81%AF%E7%A0%81%E5%AD%97%E4%B8%BA1001011%EF%BC%8C%E4%B8%BA%E7%BA%A0%E6%AD%A3%E4%B8%80%E4%BD%8D%E9%94%99%EF%BC%8C%E5%88%99%E9%9C%80%E8%A6%81%20%EF%BC%8819%EF%BC%89%20%E6%AF%94%E7%89%B9%E5%86%97%E4%BD%99%E4%BD%8D%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（19）</span>
                <span class="choice false">A．2</span>
                <span class="choice false">B．3</span>
                <span class="choice true">C．4</span>
                <span class="choice false">D．8</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    海明码纠正一位错误，有以下要求：<br />
                    设信息码长度为L，海明码冗余位长度为M，则（2的M次方）必须大于等于L+M+1。<br />
                    由于L=7，得到M=4。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ARP协议数据单元封装在 （20） 中发送，ICMP协议数据单元封装在 （21） 中发送。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=ARP%E5%8D%8F%E8%AE%AE%E6%95%B0%E6%8D%AE%E5%8D%95%E5%85%83%E5%B0%81%E8%A3%85%E5%9C%A8%20%EF%BC%8820%EF%BC%89%20%E4%B8%AD%E5%8F%91%E9%80%81%EF%BC%8CICMP%E5%8D%8F%E8%AE%AE%E6%95%B0%E6%8D%AE%E5%8D%95%E5%85%83%E5%B0%81%E8%A3%85%E5%9C%A8%20%EF%BC%8821%EF%BC%89%20%E4%B8%AD%E5%8F%91%E9%80%81%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（20）</span>
                <span class="choice false">A．IP数据报</span>
                <span class="choice false">B．TCP报文</span>
                <span class="choice true">C．以太帧</span>
                <span class="choice false">D．UDP报文</span>
            </p>
            <p class="one-line-choice"><span class="number">（21）</span>
                <span class="choice true">A．IP数据报</span>
                <span class="choice false">B．TCP报文</span>
                <span class="choice false">C．以太帧</span>
                <span class="choice false">D．UDP报文</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">TCP是互联网中的传输层协议，TCP协议进行流量控制的方式是 （22） ，当TCP实体发出连接请求（SYN）后，等待对方的 （23） 相应。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=TCP%E6%98%AF%E4%BA%92%E8%81%94%E7%BD%91%E4%B8%AD%E7%9A%84%E4%BC%A0%E8%BE%93%E5%B1%82%E5%8D%8F%E8%AE%AE%EF%BC%8CTCP%E5%8D%8F%E8%AE%AE%E8%BF%9B%E8%A1%8C%E6%B5%81%E9%87%8F%E6%8E%A7%E5%88%B6%E7%9A%84%E6%96%B9%E5%BC%8F%E6%98%AF%20%EF%BC%8822%EF%BC%89%20%EF%BC%8C%E5%BD%93TCP%E5%AE%9E%E4%BD%93%E5%8F%91%E5%87%BA%E8%BF%9E%E6%8E%A5%E8%AF%B7%E6%B1%82%EF%BC%88SYN%EF%BC%89%E5%90%8E%EF%BC%8C%E7%AD%89%E5%BE%85%E5%AF%B9%E6%96%B9%E7%9A%84%20%EF%BC%8823%EF%BC%89%20%E7%9B%B8%E5%BA%94%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（22）</span>
                <span class="choice false">A．使用停等ARQ协议</span>
                <span class="choice false">B．使用后退N帧ARQ协议
                </span>
                <span class="choice false">C．使用固定大小的滑动窗口协议</span>
                <span class="choice true">D．使用可变大小的滑动窗口协议</span>
            </p>
            <p class="one-line-choice"><span class="number">（23）</span>
                <span class="choice false">A．SYN</span>
                <span class="choice false">B．FIN、ACK
                </span>
                <span class="choice true">C．SYN、ACK</span>
                <span class="choice false">D．RST</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">RIP是一种基于 （24） 的路由协议，RIP规定，通路上经过的最大路由器数是 （25） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=RIP%E6%98%AF%E4%B8%80%E7%A7%8D%E5%9F%BA%E4%BA%8E%20%EF%BC%8824%EF%BC%89%20%E7%9A%84%E8%B7%AF%E7%94%B1%E5%8D%8F%E8%AE%AE%EF%BC%8CRIP%E8%A7%84%E5%AE%9A%EF%BC%8C%E9%80%9A%E8%B7%AF%E4%B8%8A%E7%BB%8F%E8%BF%87%E7%9A%84%E6%9C%80%E5%A4%A7%E8%B7%AF%E7%94%B1%E5%99%A8%E6%95%B0%E6%98%AF%20%EF%BC%8825%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（24）</span>
                <span class="choice false">A．链路状态算法</span>
                <span class="choice true">B．距离矢量算法
                </span>
                <span class="choice false">C．最短路径算法</span>
                <span class="choice false">D．最小费用算法</span>
            </p>
            <p class="one-line-choice"><span class="number">（25）</span>
                <span class="choice false">A．1024</span>
                <span class="choice false">B．512</span>
                <span class="choice true">C．16</span>
                <span class="choice false">D．8</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在OSPF网络中，路由器定时发出Hello分组与特定的邻居进行联系，在默认情况下，如果 （26） 没有收到这种分组，就认为对方不存在了。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8OSPF%E7%BD%91%E7%BB%9C%E4%B8%AD%EF%BC%8C%E8%B7%AF%E7%94%B1%E5%99%A8%E5%AE%9A%E6%97%B6%E5%8F%91%E5%87%BAHello%E5%88%86%E7%BB%84%E4%B8%8E%E7%89%B9%E5%AE%9A%E7%9A%84%E9%82%BB%E5%B1%85%E8%BF%9B%E8%A1%8C%E8%81%94%E7%B3%BB%EF%BC%8C%E5%9C%A8%E9%BB%98%E8%AE%A4%E6%83%85%E5%86%B5%E4%B8%8B%EF%BC%8C%E5%A6%82%E6%9E%9C%20%EF%BC%8826%EF%BC%89%20%E6%B2%A1%E6%9C%89%E6%94%B6%E5%88%B0%E8%BF%99%E7%A7%8D%E5%88%86%E7%BB%84%EF%BC%8C%E5%B0%B1%E8%AE%A4%E4%B8%BA%E5%AF%B9%E6%96%B9%E4%B8%8D%E5%AD%98%E5%9C%A8%E4%BA%86%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（26）</span>
                <span class="choice false">A．20秒</span>
                <span class="choice false">B．30秒
                </span>
                <span class="choice true">C．40秒</span>
                <span class="choice false">D．50秒</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Hello数据报以组播形式每隔一定时间（HelloInterval）发送一次。在不同网络中，HelloInterval的时间也不同。例如：在X.25网中，HelloInterval的值为30秒；在局域网中，HelloInterval的值为10秒。因此这道题目有漏洞。<br />
                    如果假设是普通以太网，则HelloInterval的值为10秒，而RouterDeadInterval的值是HelloInterval的4倍，因此是40秒。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ICMP协议有多种控制报文。当网络中出现拥塞时，路由器发出 （27） 报文。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ICMP%E5%8D%8F%E8%AE%AE%E6%9C%89%E5%A4%9A%E7%A7%8D%E6%8E%A7%E5%88%B6%E6%8A%A5%E6%96%87%E3%80%82%E5%BD%93%E7%BD%91%E7%BB%9C%E4%B8%AD%E5%87%BA%E7%8E%B0%E6%8B%A5%E5%A1%9E%E6%97%B6%EF%BC%8C%E8%B7%AF%E7%94%B1%E5%99%A8%E5%8F%91%E5%87%BA%20%EF%BC%8827%EF%BC%89%20%E6%8A%A5%E6%96%87%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（27）</span>
                <span class="choice false">A．路由重定向</span>
                <span class="choice false">B．目标不可到达
                </span>
                <span class="choice true">C．源抑制</span>
                <span class="choice false">D．子网掩码请求</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    ICMP通过发送源抑制报文要求发送方减缓发送速度，以消除拥塞。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows中运行 （28） 命令后得到如下图所示的结果，该信息表明主机的以太网网卡 （29） ，图中224.0.0.0是 （30） 。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E4%B8%AD%E8%BF%90%E8%A1%8C%20%EF%BC%8828%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%90%8E%E5%BE%97%E5%88%B0%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E7%BB%93%E6%9E%9C%EF%BC%8C%E8%AF%A5%E4%BF%A1%E6%81%AF%E8%A1%A8%E6%98%8E%E4%B8%BB%E6%9C%BA%E7%9A%84%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%BD%91%E5%8D%A1%20%EF%BC%8829%EF%BC%89%20%EF%BC%8C%E5%9B%BE%E4%B8%AD224.0.0.0%E6%98%AF%20%EF%BC%8830%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice false"><span class="number">（28） </span>A．ipconfig/renew</p>
            <p class="choice false">B．ping</p>
            <p class="choice true">C．netstat-r</p>
            <p class="choice false">D．nslookup</p>
            <p class="choice header_choice false"><span class="number">（29） </span>A．IP地址为127.0.0.1，子网掩码为255.255.255.0，默认网关为127.0.0.1。
            </p>
            <p class="choice true">B．IP地址为102.217.115.132，子网掩码为255.255.255.128。
            </p>
            <p class="choice false">C．IP地址为102.217.115.132，子网掩码为255.255.255.255。
            </p>
            <p class="choice false">D．IP地址为255.255.255.255，子网掩码为255.255.255.255。</p>
            <p class="one-line-choice"><span class="number">（30）</span>
                <span class="choice false">A．本地回路</span>
                <span class="choice false">B．默认路由</span>
                <span class="choice true">C．组播地址</span>
                <span class="choice false">D．私网地址</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这个么，自己执行一下netstat –r命令就知道了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows Server 2003上启用IIS
                6.0提供web服务，创建一个web站点并将主页文件index.asp拷贝到该web站点的主目录下。在客户机的浏览器地址栏内输入网站的域名后提示没有权限访问网站，则可能的原因是 （31） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%20Server%202003%E4%B8%8A%E5%90%AF%E7%94%A8IIS%206.0%E6%8F%90%E4%BE%9Bweb%E6%9C%8D%E5%8A%A1%EF%BC%8C%E5%88%9B%E5%BB%BA%E4%B8%80%E4%B8%AAweb%E7%AB%99%E7%82%B9%E5%B9%B6%E5%B0%86%E4%B8%BB%E9%A1%B5%E6%96%87%E4%BB%B6index.asp%E6%8B%B7%E8%B4%9D%E5%88%B0%E8%AF%A5web%E7%AB%99%E7%82%B9%E7%9A%84%E4%B8%BB%E7%9B%AE%E5%BD%95%E4%B8%8B%E3%80%82%E5%9C%A8%E5%AE%A2%E6%88%B7%E6%9C%BA%E7%9A%84%E6%B5%8F%E8%A7%88%E5%99%A8%E5%9C%B0%E5%9D%80%E6%A0%8F%E5%86%85%E8%BE%93%E5%85%A5%E7%BD%91%E7%AB%99%E7%9A%84%E5%9F%9F%E5%90%8D%E5%90%8E%E6%8F%90%E7%A4%BA%E6%B2%A1%E6%9C%89%E6%9D%83%E9%99%90%E8%AE%BF%E9%97%AE%E7%BD%91%E7%AB%99%EF%BC%8C%E5%88%99%E5%8F%AF%E8%83%BD%E7%9A%84%E5%8E%9F%E5%9B%A0%E6%98%AF%20%EF%BC%8831%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（31） </span>A．没有重新启动web站点。
            </p>
            <p class="choice false">B．没有在浏览器上指定该web站点的服务端口80。
            </p>
            <p class="choice true">C．没有将index.asp添加到该web站点的默认启动文档中。
            </p>
            <p class="choice false">D．客户机安装的不是Windows操作系统。</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    可能性很多，既可能是没有设置好默认启动文档，也可能是匿名访问者不具备目录的访问权限，还可能是没有允许浏览目录。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某IP网络连接如下图所示，主机PC1发出的一个全局广播消息，无法收到该广播消息的是 （32） 。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90IP%E7%BD%91%E7%BB%9C%E8%BF%9E%E6%8E%A5%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%EF%BC%8C%E4%B8%BB%E6%9C%BAPC1%E5%8F%91%E5%87%BA%E7%9A%84%E4%B8%80%E4%B8%AA%E5%85%A8%E5%B1%80%E5%B9%BF%E6%92%AD%E6%B6%88%E6%81%AF%EF%BC%8C%E6%97%A0%E6%B3%95%E6%94%B6%E5%88%B0%E8%AF%A5%E5%B9%BF%E6%92%AD%E6%B6%88%E6%81%AF%E7%9A%84%E6%98%AF%20%EF%BC%8832%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（32）</span>
                <span class="choice false">A．PC2</span>
                <span class="choice true">B．PC3</span>
                <span class="choice false">C．PC4</span>
                <span class="choice false">D．PC5</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    路由器具有隔绝广播包的能力。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">用Linux ls –al 命令列出下面的文件列表， （33） 是块设备文件。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8Linux%20ls%20%E2%80%93al%20%E5%91%BD%E4%BB%A4%E5%88%97%E5%87%BA%E4%B8%8B%E9%9D%A2%E7%9A%84%E6%96%87%E4%BB%B6%E5%88%97%E8%A1%A8%EF%BC%8C%20%EF%BC%8833%EF%BC%89%20%E6%98%AF%E5%9D%97%E8%AE%BE%E5%A4%87%E6%96%87%E4%BB%B6%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（33） </span>A．drwx------1helusers1024Sep1008:10aaa
            </p>
            <p class="choice false">B．-rw-------2hel–susers56Sep0911:05bbb
            </p>
            <p class="choice true">C．brw-------2helsusers56Sep0911:05ccc
            </p>
            <p class="choice false">D．lrwx------1helusers2024Sep1208:12ddd</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    看权限的第一个字母。D表示目录，-表示普通文件，b表示块设备，l表示链接文件。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">为保证在启动Linux服务器时自动启动DHCP进程，应在 （34） 文件中将配置项dhcpd=no改为dhcpd=yes。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%BA%E4%BF%9D%E8%AF%81%E5%9C%A8%E5%90%AF%E5%8A%A8Linux%E6%9C%8D%E5%8A%A1%E5%99%A8%E6%97%B6%E8%87%AA%E5%8A%A8%E5%90%AF%E5%8A%A8DHCP%E8%BF%9B%E7%A8%8B%EF%BC%8C%E5%BA%94%E5%9C%A8%20%EF%BC%8834%EF%BC%89%20%E6%96%87%E4%BB%B6%E4%B8%AD%E5%B0%86%E9%85%8D%E7%BD%AE%E9%A1%B9dhcpd%3Dno%E6%94%B9%E4%B8%BAdhcpd%3Dyes%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（34） </span>A．/etc/rc.d/rc.inet1</p>
            <p class="choice false">B．/etc/rc.d/rc.inet2
            </p>
            <p class="choice false">C．/etc/dhcpd.conf</p>
            <p class="choice false">D．/etc/rc.d/rc.s</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    etc/rc.d/rc.inetd 为网络超级守护进程，/etc/rc.d/rc.inet1是其配置文件。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Linux操作系统中，存放有主机名及对应IP地址的文件是 （35） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Linux%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E5%AD%98%E6%94%BE%E6%9C%89%E4%B8%BB%E6%9C%BA%E5%90%8D%E5%8F%8A%E5%AF%B9%E5%BA%94IP%E5%9C%B0%E5%9D%80%E7%9A%84%E6%96%87%E4%BB%B6%E6%98%AF%20%EF%BC%8835%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（35） </span>A．/etc/hostname</p>
            <p class="choice true">B．/etc/hosts</p>
            <p class="choice false">C．/etc/resolv.conf</p>
            <p class="choice false">D．/etc/networks</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Windows操作系统下可以通过安装 （36） 组件来提供FTP服务。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Windows%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%8B%E5%8F%AF%E4%BB%A5%E9%80%9A%E8%BF%87%E5%AE%89%E8%A3%85%20%EF%BC%8836%EF%BC%89%20%E7%BB%84%E4%BB%B6%E6%9D%A5%E6%8F%90%E4%BE%9BFTP%E6%9C%8D%E5%8A%A1%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（36）</span>
                <span class="choice true">A．IIS</span>
                <span class="choice false">B．IE</span>
                <span class="choice false">C．Outlook</span>
                <span class="choice false">D．Apache</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Windows系统下，通过运行 （37） 命令可以打开Windows管理控制台。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Windows%E7%B3%BB%E7%BB%9F%E4%B8%8B%EF%BC%8C%E9%80%9A%E8%BF%87%E8%BF%90%E8%A1%8C%20%EF%BC%8837%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%8F%AF%E4%BB%A5%E6%89%93%E5%BC%80Windows%E7%AE%A1%E7%90%86%E6%8E%A7%E5%88%B6%E5%8F%B0%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（37）</span>
                <span class="choice false">A．regedit</span>
                <span class="choice false">B．cmd</span>
                <span class="choice true">C．mmc</span>
                <span class="choice false">D．mfc</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows Server 2003下若选择安全登录，则首先需要按 （38） 组合键。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%20Server%202003%E4%B8%8B%E8%8B%A5%E9%80%89%E6%8B%A9%E5%AE%89%E5%85%A8%E7%99%BB%E5%BD%95%EF%BC%8C%E5%88%99%E9%A6%96%E5%85%88%E9%9C%80%E8%A6%81%E6%8C%89%20%EF%BC%8838%EF%BC%89%20%E7%BB%84%E5%90%88%E9%94%AE%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（38） </span>A．Shift+Alt+Esc</p>
            <p class="choice false">B．Ctrl+Alt+Tab
            </p>
            <p class="choice false">C．Ctrl+Shift</p>
            <p class="choice true">D．Ctrl+Alt+Del</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">为了防止电子邮件中的恶意代码，应该用 （39） 方式阅读电子邮件。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%BA%E4%BA%86%E9%98%B2%E6%AD%A2%E7%94%B5%E5%AD%90%E9%82%AE%E4%BB%B6%E4%B8%AD%E7%9A%84%E6%81%B6%E6%84%8F%E4%BB%A3%E7%A0%81%EF%BC%8C%E5%BA%94%E8%AF%A5%E7%94%A8%20%EF%BC%8839%EF%BC%89%20%E6%96%B9%E5%BC%8F%E9%98%85%E8%AF%BB%E7%94%B5%E5%AD%90%E9%82%AE%E4%BB%B6%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（39）</span>
                <span class="choice true">A．纯文本</span>
                <span class="choice false">B．网页</span>
                <span class="choice false">C．程序</span>
                <span class="choice false">D．会话</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面有关DNS的说法中错误的是 （40） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E6%9C%89%E5%85%B3DNS%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8840%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（40） </span>A．主域名服务器运行域名服务器软件，有域名数据库
            </p>
            <p class="choice true">B．辅助域名服务器运行域名服务器软件，但是没有域名数据库
            </p>
            <p class="choice false">C．转发域名服务器负责非本地域名的本地查询
            </p>
            <p class="choice false">D．一个域有且只有一个主域名服务器</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    辅助域名服务器也是有数据库的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">常用对称加密算法不包括 （41） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B8%B8%E7%94%A8%E5%AF%B9%E7%A7%B0%E5%8A%A0%E5%AF%86%E7%AE%97%E6%B3%95%E4%B8%8D%E5%8C%85%E6%8B%AC%20%EF%BC%8841%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（41）</span>
                <span class="choice false">A．DES</span>
                <span class="choice false">B．RC-5</span>
                <span class="choice false">C．IDEA</span>
                <span class="choice true">D．RSA</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    RSA是非对称加密算法。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">数字签名功能不包括 （42） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%95%B0%E5%AD%97%E7%AD%BE%E5%90%8D%E5%8A%9F%E8%83%BD%E4%B8%8D%E5%8C%85%E6%8B%AC%20%EF%BC%8842%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（42）</span>
                <span class="choice false">A．防止发送方的抵赖行为</span>
                <span class="choice false">B．发送方身份确认
                </span>
                <span class="choice true">C．接收方身份确认</span>
                <span class="choice false">D．保证数据的完整性</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">“TCP SYN Flooding”建立大量处于半连接状态的TCP连接，其攻击目标是网络的 （43） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E2%80%9CTCP%20SYN%20Flooding%E2%80%9D%E5%BB%BA%E7%AB%8B%E5%A4%A7%E9%87%8F%E5%A4%84%E4%BA%8E%E5%8D%8A%E8%BF%9E%E6%8E%A5%E7%8A%B6%E6%80%81%E7%9A%84TCP%E8%BF%9E%E6%8E%A5%EF%BC%8C%E5%85%B6%E6%94%BB%E5%87%BB%E7%9B%AE%E6%A0%87%E6%98%AF%E7%BD%91%E7%BB%9C%E7%9A%84%20%EF%BC%8843%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（43）</span>
                <span class="choice false">A．保密性</span>
                <span class="choice false">B．完整性</span>
                <span class="choice false">C．真实性</span>
                <span class="choice true">D．可用性</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">TCP/IP在多个层次引入了安全机制，其中TLS协议位于 （44） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=TCP/IP%E5%9C%A8%E5%A4%9A%E4%B8%AA%E5%B1%82%E6%AC%A1%E5%BC%95%E5%85%A5%E4%BA%86%E5%AE%89%E5%85%A8%E6%9C%BA%E5%88%B6%EF%BC%8C%E5%85%B6%E4%B8%ADTLS%E5%8D%8F%E8%AE%AE%E4%BD%8D%E4%BA%8E%20%EF%BC%8844%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice false">A．数据链路层</span>
                <span class="choice false">B．网络层</span>
                <span class="choice true">C．传输层</span>
                <span class="choice false">D．应用层</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    TLS（Transport Layer Security，安全传输层）是SSL 3.0协议的进一步扩展，其主要目标是在两个通信进程之间提供数据加密和数据完整性验证服务。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">计算机感染特洛伊木马后的典型现象是 （45） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%A1%E7%AE%97%E6%9C%BA%E6%84%9F%E6%9F%93%E7%89%B9%E6%B4%9B%E4%BC%8A%E6%9C%A8%E9%A9%AC%E5%90%8E%E7%9A%84%E5%85%B8%E5%9E%8B%E7%8E%B0%E8%B1%A1%E6%98%AF%20%EF%BC%8845%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（45） </span>A．程序异常退出</p>
            <p class="choice true">B．有未知程序试图建立网络连接
            </p>
            <p class="choice false">C．邮箱被垃圾邮件填满</p>
            <p class="choice false">D．Windows系统黑屏</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">OSI定义的网络管理包括配置管理、故障管理、性能管理、计费管理和安全管理五大功能，下列操作中属于配置管理的是 （46） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=OSI%E5%AE%9A%E4%B9%89%E7%9A%84%E7%BD%91%E7%BB%9C%E7%AE%A1%E7%90%86%E5%8C%85%E6%8B%AC%E9%85%8D%E7%BD%AE%E7%AE%A1%E7%90%86%E3%80%81%E6%95%85%E9%9A%9C%E7%AE%A1%E7%90%86%E3%80%81%E6%80%A7%E8%83%BD%E7%AE%A1%E7%90%86%E3%80%81%E8%AE%A1%E8%B4%B9%E7%AE%A1%E7%90%86%E5%92%8C%E5%AE%89%E5%85%A8%E7%AE%A1%E7%90%86%E4%BA%94%E5%A4%A7%E5%8A%9F%E8%83%BD%EF%BC%8C%E4%B8%8B%E5%88%97%E6%93%8D%E4%BD%9C%E4%B8%AD%E5%B1%9E%E4%BA%8E%E9%85%8D%E7%BD%AE%E7%AE%A1%E7%90%86%E7%9A%84%E6%98%AF%20%EF%BC%8846%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（46） </span>A．网络管理者通过GetRequest获得当前处理的消息数量
            </p>
            <p class="choice false">B．网络管理者通过GetRequest获得计费参数
            </p>
            <p class="choice true">C．网络管理者通过SetRquest更改系统的LOG级别
            </p>
            <p class="choice false">D．网管代理通过Trap发送故障消息</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下列安全协议中， （47） 能保证交易双方无法抵赖。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E5%AE%89%E5%85%A8%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%20%EF%BC%8847%EF%BC%89%20%E8%83%BD%E4%BF%9D%E8%AF%81%E4%BA%A4%E6%98%93%E5%8F%8C%E6%96%B9%E6%97%A0%E6%B3%95%E6%8A%B5%E8%B5%96%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（47）</span>
                <span class="choice true">A．SET</span>
                <span class="choice false">B．HTTPS</span>
                <span class="choice false">C．PGP</span>
                <span class="choice false">D．MOSS</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    SET（Secure Electronic
                    Transaction，安全电子交易）是众多可以实现的电子支付手段中发展比较完善的，使用广泛的一种电子交易模式。主要是为了解决用户、商家和银行之间通过信用卡支付的交易而设计的，以保证支付信息的机密、支付过程的完整、商户及持卡人的合法身份、以及可操作性。<br />
                    SET 协议的主要目标是：<br />
                    • 防止数据被非法用户窃取，保证信息在互联网上安全传输。 <br />
                    • SET 中使用了一种双签名技术保证电子商务参与者信息的相互隔离。客户的资料加密后通过商家到达银行，但是商家不能看到客户的帐户和密码信息。 <br />
                    • 解决多方认证问题。不仅对客户的信用卡认证，而且要对在线商家认证，实现客户、商家和银行间的相互认证。 <br />
                    • 保证网上交易的实时性，使所有的支付过程都是在线的。 <br />
                    • 提供一个开放式的标准，规范协议和消息格式，促使不同厂家开发的软件具有兼容性和互操作功能。可在不同的软硬件平台上执行并被全球广泛接受。 </p>
            </div>
        </div>
        <div class="block">
            <p class="question">Windows Server
                2003中的IIS为web服务提供了许多选项，利用这些选项可以更好第配置web服务的性能、行为和安全等。如下图所示属性页中，“限制网络带宽”选项属于 （48） 选项卡。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Windows%20Server%202003%E4%B8%AD%E7%9A%84IIS%E4%B8%BAweb%E6%9C%8D%E5%8A%A1%E6%8F%90%E4%BE%9B%E4%BA%86%E8%AE%B8%E5%A4%9A%E9%80%89%E9%A1%B9%EF%BC%8C%E5%88%A9%E7%94%A8%E8%BF%99%E4%BA%9B%E9%80%89%E9%A1%B9%E5%8F%AF%E4%BB%A5%E6%9B%B4%E5%A5%BD%E7%AC%AC%E9%85%8D%E7%BD%AEweb%E6%9C%8D%E5%8A%A1%E7%9A%84%E6%80%A7%E8%83%BD%E3%80%81%E8%A1%8C%E4%B8%BA%E5%92%8C%E5%AE%89%E5%85%A8%E7%AD%89%E3%80%82%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E5%B1%9E%E6%80%A7%E9%A1%B5%E4%B8%AD%EF%BC%8C%E2%80%9C%E9%99%90%E5%88%B6%E7%BD%91%E7%BB%9C%E5%B8%A6%E5%AE%BD%E2%80%9D%E9%80%89%E9%A1%B9%E5%B1%9E%E4%BA%8E%20%EF%BC%8848%EF%BC%89%20%E9%80%89%E9%A1%B9%E5%8D%A1%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（48）</span>
                <span class="choice false">A．HTTP头</span>
                <span class="choice true">B．性能</span>
                <span class="choice false">C．主目录</span>
                <span class="choice false">D．文档</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Windows Server 2003中能够发送SNMP请求报文并能对SNMP报文进行解析的服务为 （49） ；用以监听被管主机发送来的陷入报文的服务为 （50）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Windows%20Server%202003%E4%B8%AD%E8%83%BD%E5%A4%9F%E5%8F%91%E9%80%81SNMP%E8%AF%B7%E6%B1%82%E6%8A%A5%E6%96%87%E5%B9%B6%E8%83%BD%E5%AF%B9SNMP%E6%8A%A5%E6%96%87%E8%BF%9B%E8%A1%8C%E8%A7%A3%E6%9E%90%E7%9A%84%E6%9C%8D%E5%8A%A1%E4%B8%BA%20%EF%BC%8849%EF%BC%89%20%EF%BC%9B%E7%94%A8%E4%BB%A5%E7%9B%91%E5%90%AC%E8%A2%AB%E7%AE%A1%E4%B8%BB%E6%9C%BA%E5%8F%91%E9%80%81%E6%9D%A5%E7%9A%84%E9%99%B7%E5%85%A5%E6%8A%A5%E6%96%87%E7%9A%84%E6%9C%8D%E5%8A%A1%E4%B8%BA%20%EF%BC%8850%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（49） </span>A．SNMPService</p>
            <p class="choice false">B．TaskScheduler
            </p>
            <p class="choice false">C．TerminalServices</p>
            <p class="choice false">D．SNMPTrapService</p>
            <p class="choice header_choice false"><span class="number">（50） </span>A．SNMPService</p>
            <p class="choice false">B．TaskScheduler
            </p>
            <p class="choice false">C．TerminalServices</p>
            <p class="choice true">D．SNMPTrapService</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">使用 （51） 协议远程配置交换机。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8%20%EF%BC%8851%EF%BC%89%20%E5%8D%8F%E8%AE%AE%E8%BF%9C%E7%A8%8B%E9%85%8D%E7%BD%AE%E4%BA%A4%E6%8D%A2%E6%9C%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（51）</span>
                <span class="choice true">A．Telnet</span>
                <span class="choice false">B．FTP</span>
                <span class="choice false">C．HTTP</span>
                <span class="choice false">D．PPP</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">一个B类网络的子网掩码为255.255.192.0，则这个网络被划分成了 （52） 个子网。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E4%B8%80%E4%B8%AAB%E7%B1%BB%E7%BD%91%E7%BB%9C%E7%9A%84%E5%AD%90%E7%BD%91%E6%8E%A9%E7%A0%81%E4%B8%BA255.255.192.0%EF%BC%8C%E5%88%99%E8%BF%99%E4%B8%AA%E7%BD%91%E7%BB%9C%E8%A2%AB%E5%88%92%E5%88%86%E6%88%90%E4%BA%86%20%EF%BC%8852%EF%BC%89%20%E4%B8%AA%E5%AD%90%E7%BD%91%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（52）</span>
                <span class="choice false">A．2</span>
                <span class="choice true">B．4</span>
                <span class="choice false">C．6</span>
                <span class="choice false">D．8</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这里分出了两个子网位，可以分为22=4个子网，应该选B。<br />
                    需要特别说明的是，早期的一些网络软件不支持子网段全“0”的子网和子网段全“1”的子网，这造成了巨大的地址资源浪费。例如，当子网段长度为1位的时候，地址资源浪费率为100%；当子网段长度为2位的时候，地址资源浪费率为50%。这种规则已经被废止，现在的网络软件都已支持子网段全“0”或全“1”的子网。如果按照这种早期的已经被废止的规定，则该网络可用的子网只有2个，答案就应该选A。<br />
                    因此，为了公平起见，应该判定A、B两个答案均正确。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">使用CIDR技术把4个网络100.100.0.0/18、100.100.64.0/18、100.100.128.0/18和100.100.192.0/18汇聚成一个超网，得到的地址是
                （53） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8CIDR%E6%8A%80%E6%9C%AF%E6%8A%8A4%E4%B8%AA%E7%BD%91%E7%BB%9C100.100.0.0/18%E3%80%81100.100.64.0/18%E3%80%81100.100.128.0/18%E5%92%8C100.100.192.0/18%E6%B1%87%E8%81%9A%E6%88%90%E4%B8%80%E4%B8%AA%E8%B6%85%E7%BD%91%EF%BC%8C%E5%BE%97%E5%88%B0%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（53） </span>A．100.100.0.0/16</p>
            <p class="choice false">B．100.100.0.0/18
            </p>
            <p class="choice false">C．100.100.128.0/18</p>
            <p class="choice false">D．100.100.64.0/18</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CIDR的基础知识，这里就不多说了，实在不明白就去看《网络工程师考前辅导》。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某公司网络的地址是202.110.128.0/17，下面的选项中， （54） 属于这个网络。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E6%9F%90%E5%85%AC%E5%8F%B8%E7%BD%91%E7%BB%9C%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF202.110.128.0/17%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%20%EF%BC%8854%EF%BC%89%20%E5%B1%9E%E4%BA%8E%E8%BF%99%E4%B8%AA%E7%BD%91%E7%BB%9C%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（54） </span>A．202.110.44.0/17</p>
            <p class="choice true">B．202.110.162.0/20
            </p>
            <p class="choice false">C．202.110.144.0/16</p>
            <p class="choice false">D．202.110.24.0/20</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CIDR的基础知识，这里就不多说了。<br />
                    特别说明一点，202.110.144.0/16这是个具有欺骗性的表达方法，实际上这个网络是202.110.0.0/16。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">私网地址用于配置公司内部网络，下面选项中， （55） 属于私网地址。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E7%94%A8%E4%BA%8E%E9%85%8D%E7%BD%AE%E5%85%AC%E5%8F%B8%E5%86%85%E9%83%A8%E7%BD%91%E7%BB%9C%EF%BC%8C%E4%B8%8B%E9%9D%A2%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%20%EF%BC%8855%EF%BC%89%20%E5%B1%9E%E4%BA%8E%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（55） </span>A．128.168.10.1</p>
            <p class="choice true">B．10.128.10.1
            </p>
            <p class="choice false">C．127.10.0.1</p>
            <p class="choice false">D．172.15.0.1</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下给出的地址中，不属于网络222.15.64.0/20的主机地址是 （56） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E7%BB%99%E5%87%BA%E7%9A%84%E5%9C%B0%E5%9D%80%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E7%BD%91%E7%BB%9C222.15.64.0/20%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8856%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（56） </span>A．222.15.78.17</p>
            <p class="choice false">B．222.15.79.16
            </p>
            <p class="choice true">C．222.15.88.15</p>
            <p class="choice false">D．222.15.65.18</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CIDR的基础知识，这里就不多说了。<br />
                    222.15.64.0/20的范围是222.15.64.0～222.15.79.255。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">通过交换机连接的一组工作站 （57） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%80%9A%E8%BF%87%E4%BA%A4%E6%8D%A2%E6%9C%BA%E8%BF%9E%E6%8E%A5%E7%9A%84%E4%B8%80%E7%BB%84%E5%B7%A5%E4%BD%9C%E7%AB%99%20%EF%BC%8857%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（57） </span>A．组成一个冲突域，但不是一个广播域
            </p>
            <p class="choice true">B．组成一个广播域，但不是一个冲突域
            </p>
            <p class="choice false">C．既是一个冲突域，又是一个广播域
            </p>
            <p class="choice false">D．既不是冲突域，也不是广播域</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    集线器既不能隔绝冲突域，也不能隔绝广播域。<br />
                    交换机可以隔绝冲突域，但不能隔绝广播域。<br />
                    路由器既可以隔绝冲突域，也可以隔绝广播域。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">利用交换机可以把网络划分成多个虚拟局域网（VLAN）。一般情况下，交换机默认的VLAN是 （58） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%88%A9%E7%94%A8%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%8F%AF%E4%BB%A5%E6%8A%8A%E7%BD%91%E7%BB%9C%E5%88%92%E5%88%86%E6%88%90%E5%A4%9A%E4%B8%AA%E8%99%9A%E6%8B%9F%E5%B1%80%E5%9F%9F%E7%BD%91%EF%BC%88VLAN%EF%BC%89%E3%80%82%E4%B8%80%E8%88%AC%E6%83%85%E5%86%B5%E4%B8%8B%EF%BC%8C%E4%BA%A4%E6%8D%A2%E6%9C%BA%E9%BB%98%E8%AE%A4%E7%9A%84VLAN%E6%98%AF%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（58）</span>
                <span class="choice false">A．VLAN0</span>
                <span class="choice true">B．VLAN1</span>
                <span class="choice false">C．VLAN10</span>
                <span class="choice false">D．VLAN1024</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在TCP/IP网络中，为各种公共服务保留的端口号范围是 （59） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8TCP/IP%E7%BD%91%E7%BB%9C%E4%B8%AD%EF%BC%8C%E4%B8%BA%E5%90%84%E7%A7%8D%E5%85%AC%E5%85%B1%E6%9C%8D%E5%8A%A1%E4%BF%9D%E7%95%99%E7%9A%84%E7%AB%AF%E5%8F%A3%E5%8F%B7%E8%8C%83%E5%9B%B4%E6%98%AF%20%EF%BC%8859%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（59）</span>
                <span class="choice false">A．1～255</span>
                <span class="choice false">B．256~1023</span>
                <span class="choice true">C．1~1023</span>
                <span class="choice false">D．1024~65535</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">交换机命令SwitchA(VLAN)#vtp pruning的作用是 （60） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%91%BD%E4%BB%A4SwitchA%28VLAN%29%23vtp%20pruning%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8860%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（60）</span>
                <span class="choice false">A．退出VLAN配置模式</span>
                <span class="choice false">B．删除一个VLAN
                </span>
                <span class="choice false">C．进入配置子模式</span>
                <span class="choice true">D．启动路由修剪功能</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">路由器命令R1(config)#ip routing的作用是 （61） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%B7%AF%E7%94%B1%E5%99%A8%E5%91%BD%E4%BB%A4R1%28config%29%23ip%20routing%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8861%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（61）</span>
                <span class="choice false">A．显示路由信息</span>
                <span class="choice false">B．配置默认路由
                </span>
                <span class="choice false">C．激活路由器端口</span>
                <span class="choice true">D．启动路由配置</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于IEEE 802.3的CSMA/CD协议，下面结论中错误的是 （62） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8EIEEE%20802.3%E7%9A%84CSMA/CD%E5%8D%8F%E8%AE%AE%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%BB%93%E8%AE%BA%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8862%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（62） </span>A．CSMA/CD是一种解决访问冲突的协议
            </p>
            <p class="choice true">B．CSMA/CD协议适用于所有的802.3以太网
            </p>
            <p class="choice false">C．在网络负载较小时，CSMA/CD协议的通信效率很高
            </p>
            <p class="choice false">D．这种网络协议适合传输非实时数据</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    选择A有些二义性。如果从避免冲突的角度来说，CSMA/CD不是一种避免冲突的协议，它只能在冲突发生并被监测到后通过二进制指数后退法重发数据。这样一来选择A就是错的。但是如果说通过二进制指数后退法解决了冲突问题，那么选择A又可以算是对的。<br />
                    另外，选择B的“所有”两字令人怀疑。例如802.3ae万兆以太网，它采用了全双工线路进行通信，从物理上避免了冲突的发生，因此无需再做什么冲突监测了，但这也并不表明CSMA/CD协议不适合于802.3ae万兆以太网，只是802.3ae万兆以太网采用别的方式避免了CDMA/CD的限制。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于IEEE 802.3ae标准的描述中，错误的是 （63） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8EIEEE%20802.3ae%E6%A0%87%E5%87%86%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8863%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（63） </span>A．支持802.3标准中定义的最小和最大帧长
            </p>
            <p class="choice false">B．支持802.3ad链路汇聚协议
            </p>
            <p class="choice false">C．使用1310nm单模光纤作为传输介质，最大段长可达10公里
            </p>
            <p class="choice true">D．使用850nm多模光纤作为传输介质，最大段长可达10公里</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    多模光纤可传不了这么远，目前不超过1km。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于无线局域网，下面叙述中正确的是 （64） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E6%97%A0%E7%BA%BF%E5%B1%80%E5%9F%9F%E7%BD%91%EF%BC%8C%E4%B8%8B%E9%9D%A2%E5%8F%99%E8%BF%B0%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（64） </span>A．802.11a和802.11b都可以在2.4GHz频段工作
            </p>
            <p class="choice true">B．802.11b和802.11g都可以在2.4GHz频段工作
            </p>
            <p class="choice false">C．802.11a和802.11b都可以在5GHz频段工作
            </p>
            <p class="choice false">D．802.11b和802.11g都可以在5GHz频段工作</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IEEE 802.11i标准增强了WLAN的安全性，下面关于802.11i的描述中，错误的是 （65） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=IEEE%20802.11i%E6%A0%87%E5%87%86%E5%A2%9E%E5%BC%BA%E4%BA%86WLAN%E7%9A%84%E5%AE%89%E5%85%A8%E6%80%A7%EF%BC%8C%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E802.11i%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8865%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（65） </span>A．加密算法采用高级数据加密标准AES
            </p>
            <p class="choice true">B．加密算法采用对等保密协议WEP
            </p>
            <p class="choice false">C．用802.1x实现了访问控制
            </p>
            <p class="choice false">D．使用TKIP协议实现了动态的加密过程</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    IEEE 802.11i规定使用802.1x认证和密钥管理方式，在数据加密方面，定义了TKIP（Temporal Key Integrity
                    Protocol）、CCMP（Counter-Mode/CBC-MAC Protocol）和WRAP（Wireless Robust Authenticated
                    Protocol）三种加密机制。其中TKIP采用RC4作为核心加密算法，可以通过在现有的设备上升级固件和驱动程序的方法达到提高WLAN安全的目的。CCMP机制基于AES（Advanced
                    Encryption
                    Standard）加密算法和CCM（Counter-Mode/CBC-MAC）认证方式，使得WLAN的安全程度大大提高，是实现RSN的强制性要求。由于AES对硬件要求比较高，因此CCMP无法通过在现有设备的基础上进行升级实现。WRAP机制基于AES加密算法和OCB（Offset
                    Codebook），是一种可选的加密机制。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ADSL是一种宽带接入技术，这种技术使用的传输介质是 （66） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ADSL%E6%98%AF%E4%B8%80%E7%A7%8D%E5%AE%BD%E5%B8%A6%E6%8E%A5%E5%85%A5%E6%8A%80%E6%9C%AF%EF%BC%8C%E8%BF%99%E7%A7%8D%E6%8A%80%E6%9C%AF%E4%BD%BF%E7%94%A8%E7%9A%84%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E6%98%AF%20%EF%BC%8866%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（66）</span>
                <span class="choice true">A．电话线</span>
                <span class="choice false">B．CATV电缆
                </span>
                <span class="choice false">C．基带同轴电缆</span>
                <span class="choice false">D．无线通信网</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">文档的编制在网络项目开发工作中占有突出的地位。下列有关网络工程文档的叙述中，不正确的是 （67） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E6%96%87%E6%A1%A3%E7%9A%84%E7%BC%96%E5%88%B6%E5%9C%A8%E7%BD%91%E7%BB%9C%E9%A1%B9%E7%9B%AE%E5%BC%80%E5%8F%91%E5%B7%A5%E4%BD%9C%E4%B8%AD%E5%8D%A0%E6%9C%89%E7%AA%81%E5%87%BA%E7%9A%84%E5%9C%B0%E4%BD%8D%E3%80%82%E4%B8%8B%E5%88%97%E6%9C%89%E5%85%B3%E7%BD%91%E7%BB%9C%E5%B7%A5%E7%A8%8B%E6%96%87%E6%A1%A3%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8867%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（67） </span>A．网络工程文档不能作为检查项目设计进度和设计质量的依据
            </p>
            <p class="choice false">B．网络工程文档是设计人员在一定阶段的工作成果和结束标识
            </p>
            <p class="choice false">C．网络工程文档的编制有助于提高设计效率
            </p>
            <p class="choice false">D．按照规范要求生成一套文档的过程，就是按照网络分析与设计规范完成网络项目分析与设计的过程</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在层次化网络设计中， （68） 不是核心层交换机的设备选型策略。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%B1%82%E6%AC%A1%E5%8C%96%E7%BD%91%E7%BB%9C%E8%AE%BE%E8%AE%A1%E4%B8%AD%EF%BC%8C%20%EF%BC%8868%EF%BC%89%20%E4%B8%8D%E6%98%AF%E6%A0%B8%E5%BF%83%E5%B1%82%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%9A%84%E8%AE%BE%E5%A4%87%E9%80%89%E5%9E%8B%E7%AD%96%E7%95%A5%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（68）</span>
                <span class="choice false">A．高速数据转发</span>
                <span class="choice false">B．高可靠性
                </span>
                <span class="choice false">C．良好的可管理性</span>
                <span class="choice true">D．实现网络的访问策略控制</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    访问控制策略控制，那是接入层和汇聚层的工作。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于网络系统设计原则的说法中，正确的是 （69） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E7%BD%91%E7%BB%9C%E7%B3%BB%E7%BB%9F%E8%AE%BE%E8%AE%A1%E5%8E%9F%E5%88%99%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8869%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（69） </span>A．网络设备应该尽量采用先进的网络设备，获得最高的网络性能
            </p>
            <p class="choice false">B．网络总体设计过程中，只需要考虑近期目标即可，不需要考虑扩展性
            </p>
            <p class="choice true">C．网络系统应采用开放标准和技术
            </p>
            <p class="choice false">D．网络需求分析独立于应用系统的需求分析</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于通信子网规划设计的说法中，错误的是 （70） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E9%80%9A%E4%BF%A1%E5%AD%90%E7%BD%91%E8%A7%84%E5%88%92%E8%AE%BE%E8%AE%A1%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8870%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（70） </span>A．网络拓扑结构必须具有一定的灵活性，易于重新配置
            </p>
            <p class="choice false">B．层次化设计的好处是可以有效地将全局通信问题分解考虑
            </p>
            <p class="choice false">C．网络拓扑结构设计应避免因个别节点损坏而影响整个网络的正常运行
            </p>
            <p class="choice true">D．应用服务器应该放置在接入层</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    应用服务器不属于通信子网的范畴。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">The usual way to ensure reliable delivery is to provide the （71） with some feedback
                about what is happening at the other end of the line. Typically, the protocol calls for the receiver to
                send back special （72） frame bearing positive or negative （73） about the incoming frames. If the sender
                receives a positive acknowledgement about a frame, it knows the the frame has arrived safely. On the
                other hand, a negative acknowledgement means that something has gone wrong, and the frame must be
                transmitted again.<br />
                An additional complication comes from the possibility that hardware troubles may cause a frame to （74）
                completely. In this case, the receiver will not react at all, since it has no any reason to react. It
                should be clear that a protocol in which the sender transmits a frame and then waits for an
                acknowledgement, positive or negative, will hang forever if a frame is ever lost due to, for example,
                （75） hardware.。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=The%20usual%20way%20to%20ensure%20reliable%20delivery%20is%20to%20provide%20the%20%EF%BC%8871%EF%BC%89%20with%20some%20feedback%20about%20what%20is%20happening%20at%20the%20other%20end%20of%20the%20line.%20Typically%2C%20the%20protocol%20calls%20for%20the%20receiver%20to%20send%20back%20special%20%EF%BC%8872%EF%BC%89%20frame%20bearing%20positive%20or%20negative%20%EF%BC%8873%EF%BC%89%20about%20the%20incoming%20frames.%20If%20the%20sender%20receives%20a%20positive%20acknowledgement%20about%20a%20frame%2C%20it%20knows%20the%20the%20frame%20has%20arrived%20safely.%20On%20the%20other%20hand%2C%20a%20negative%20acknowledgement%20means%20that%20something%20has%20gone%20wrong%2C%20and%20the%20frame%20must%20be%20transmitted%20again.%3Cbr/%3E%0AAn%20additional%20complication%20comes%20from%20the%20possibility%20that%20hardware%20troubles%20may%20cause%20a%20frame%20to%20%EF%BC%8874%EF%BC%89%20completely.%20In%20this%20case%2C%20the%20receiver%20will%20not%20react%20at%20all%2C%20since%20it%20has%20no%20any%20reason%20to%20react.%20It%20should%20be%20clear%20that%20a%20protocol%20in%20which%20the%20sender%20transmits%20a%20frame%20and%20then%20waits%20for%20an%20acknowledgement%2C%20positive%20or%20negative%2C%20will%20hang%20forever%20if%20a%20frame%20is%20ever%20lost%20due%20to%2C%20for%20example%2C%20%EF%BC%8875%EF%BC%89%20hardware.%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（71）</span>
                <span class="choice false">A．receiver</span>
                <span class="choice false">B．controller</span>
                <span class="choice true">C．sender</span>
                <span class="choice false">D．customer</span>
            </p>
            <p class="one-line-choice"><span class="number">（72）</span>
                <span class="choice false">A．data</span>
                <span class="choice true">B．controll</span>
                <span class="choice false">C．request</span>
                <span class="choice false">D．session</span>
            </p>
            <p class="choice header_choice false"><span class="number">（73） </span>A．application</p>
            <p class="choice false">B．connection</p>
            <p class="choice false">C．stream</p>
            <p class="choice true">D．acknowledgement</p>
            <p class="one-line-choice"><span class="number">（74）</span>
                <span class="choice true">A．vanish</span>
                <span class="choice false">B．vary</span>
                <span class="choice false">C．appear</span>
                <span class="choice false">D．incline</span>
            </p>
            <p class="one-line-choice"><span class="number">（75）</span>
                <span class="choice false">A．acting</span>
                <span class="choice false">B．working</span>
                <span class="choice true">C．malfunctioning</span>
                <span class="choice false">D．functioning</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    大致意思是：通信双方之间需要某种方式传递信息，以表示发给对方的数据是否正确收到。在发送过程中，数据可能错误，也可能因为各种各样的原因（例如硬件故障）导致接收方无法收到，造成发送方等待超时。<br />
                    学好英语，一切都很简单。</p>
            </div>
        </div>


    </div>

    <!-- <?php
    require (relative(__FILE__).'template/footer.php');
    ?> -->

</body>

</html>