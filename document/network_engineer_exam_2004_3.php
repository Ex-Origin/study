<?php
    include_once ('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2004年下半年 网络工程师 上午试卷</title>
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
        <h1 style="text-align:center">2004年下半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">内存按字节编址，地址从A4000H到CBFFFH，共有 （1） 个字节。若用存储容量为32K×8bit的存储芯片构成该内存，至少需要 （2） 片。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%86%85%E5%AD%98%E6%8C%89%E5%AD%97%E8%8A%82%E7%BC%96%E5%9D%80%EF%BC%8C%E5%9C%B0%E5%9D%80%E4%BB%8EA4000H%E5%88%B0CBFFFH%EF%BC%8C%E5%85%B1%E6%9C%89%20%EF%BC%881%EF%BC%89%20%E4%B8%AA%E5%AD%97%E8%8A%82%E3%80%82%E8%8B%A5%E7%94%A8%E5%AD%98%E5%82%A8%E5%AE%B9%E9%87%8F%E4%B8%BA32K%C3%978bit%E7%9A%84%E5%AD%98%E5%82%A8%E8%8A%AF%E7%89%87%E6%9E%84%E6%88%90%E8%AF%A5%E5%86%85%E5%AD%98%EF%BC%8C%E8%87%B3%E5%B0%91%E9%9C%80%E8%A6%81%20%EF%BC%882%EF%BC%89%20%E7%89%87%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（1）</span>
                <span class="choice false">A．80K</span>
                <span class="choice false">B．96K</span>
                <span class="choice true">C．160K</span>
                <span class="choice false">D．192K</span>
            </p>
            <p class="one-line-choice"><span class="number">（2）</span>
                <span class="choice false">A．2</span>
                <span class="choice true">B．5</span>
                <span class="choice false">C．8</span>
                <span class="choice false">D．10</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CBFFFH - A4000H + 1 = 28000H = 160K。<br />
                    160K / 32K = 5。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">中断响应时间是指 （3） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%AD%E6%96%AD%E5%93%8D%E5%BA%94%E6%97%B6%E9%97%B4%E6%98%AF%E6%8C%87%20%EF%BC%883%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（3） </span>A．从中断处理开始到中断处理结束所用的时间
            </p>
            <p class="choice false">B．从发出中断请求到中断处理结束所用的时间
            </p>
            <p class="choice true">C．从发出中断请求到进入中断处理所用的时间
            </p>
            <p class="choice false">D．从中断处理结束到再次中断请求的时间</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    中断处理过程分为两个阶段：中断响应过程和中断服务过程。中断响应时间是中断响应过程所用的时间，即从发出中断请求到进入中断处理所用的时间。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若指令流水线把一条指令分为取指、分析和执行三部分，且三部分的时间分别是t取指＝2ns，t分析＝2ns，t执行＝1ns。则100条指令全部执行完毕需 （4） ns。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E6%8C%87%E4%BB%A4%E6%B5%81%E6%B0%B4%E7%BA%BF%E6%8A%8A%E4%B8%80%E6%9D%A1%E6%8C%87%E4%BB%A4%E5%88%86%E4%B8%BA%E5%8F%96%E6%8C%87%E3%80%81%E5%88%86%E6%9E%90%E5%92%8C%E6%89%A7%E8%A1%8C%E4%B8%89%E9%83%A8%E5%88%86%EF%BC%8C%E4%B8%94%E4%B8%89%E9%83%A8%E5%88%86%E7%9A%84%E6%97%B6%E9%97%B4%E5%88%86%E5%88%AB%E6%98%AFt%E5%8F%96%E6%8C%87%EF%BC%9D2ns%EF%BC%8Ct%E5%88%86%E6%9E%90%EF%BC%9D2ns%EF%BC%8Ct%E6%89%A7%E8%A1%8C%EF%BC%9D1ns%E3%80%82%E5%88%99100%E6%9D%A1%E6%8C%87%E4%BB%A4%E5%85%A8%E9%83%A8%E6%89%A7%E8%A1%8C%E5%AE%8C%E6%AF%95%E9%9C%80%20%EF%BC%884%EF%BC%89%20ns%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（4）</span>
                <span class="choice false">A．163</span>
                <span class="choice false">B．183</span>
                <span class="choice false">C．193</span>
                <span class="choice true">D．203</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§<br />
                    100条指令的执行时间=（2 * 100）+3=203。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在单指令流多数据流计算机（SIMD）中，各处理单元必须 （5） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%8D%95%E6%8C%87%E4%BB%A4%E6%B5%81%E5%A4%9A%E6%95%B0%E6%8D%AE%E6%B5%81%E8%AE%A1%E7%AE%97%E6%9C%BA%EF%BC%88SIMD%EF%BC%89%E4%B8%AD%EF%BC%8C%E5%90%84%E5%A4%84%E7%90%86%E5%8D%95%E5%85%83%E5%BF%85%E9%A1%BB%20%EF%BC%885%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（5） </span>A．以同步方式，在同一时间内执行不同的指令
            </p>
            <p class="choice true">B．以同步方式，在同一时间内执行同一条指令
            </p>
            <p class="choice false">C．以异步方式，在同一时间内执行不同的指令
            </p>
            <p class="choice false">D．以异步方式，在同一时间内执行同一条指令</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    SIMD（Single Instruction Multiple
                    Datastream，单指令流多数据流）：同一条指令控制多个处理器的运行。在这种计算机中有多个处理单元，但只有一个控制部件，所有处理单元以同步方式，在同一时刻执行同一条指令，处理不同的数据。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">单个磁头在向盘片的磁性涂层上写入数据时，是以 （6） 方式写入的。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%8D%95%E4%B8%AA%E7%A3%81%E5%A4%B4%E5%9C%A8%E5%90%91%E7%9B%98%E7%89%87%E7%9A%84%E7%A3%81%E6%80%A7%E6%B6%82%E5%B1%82%E4%B8%8A%E5%86%99%E5%85%A5%E6%95%B0%E6%8D%AE%E6%97%B6%EF%BC%8C%E6%98%AF%E4%BB%A5%20%EF%BC%886%EF%BC%89%20%E6%96%B9%E5%BC%8F%E5%86%99%E5%85%A5%E7%9A%84%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（6）</span>
                <span class="choice false">A．并行</span>
                <span class="choice false">B．并－串行</span>
                <span class="choice true">C．串行</span>
                <span class="choice false">D．串－并行</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">容量为64块的Cache采用组相联方式映像，字块大小为128个字，每4块为一组。若主存容量为4096块，且以字编址，那么主存地址应为 （7） 位，主存区号应为
                （8）位。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%AE%B9%E9%87%8F%E4%B8%BA64%E5%9D%97%E7%9A%84Cache%E9%87%87%E7%94%A8%E7%BB%84%E7%9B%B8%E8%81%94%E6%96%B9%E5%BC%8F%E6%98%A0%E5%83%8F%EF%BC%8C%E5%AD%97%E5%9D%97%E5%A4%A7%E5%B0%8F%E4%B8%BA128%E4%B8%AA%E5%AD%97%EF%BC%8C%E6%AF%8F4%E5%9D%97%E4%B8%BA%E4%B8%80%E7%BB%84%E3%80%82%E8%8B%A5%E4%B8%BB%E5%AD%98%E5%AE%B9%E9%87%8F%E4%B8%BA4096%E5%9D%97%EF%BC%8C%E4%B8%94%E4%BB%A5%E5%AD%97%E7%BC%96%E5%9D%80%EF%BC%8C%E9%82%A3%E4%B9%88%E4%B8%BB%E5%AD%98%E5%9C%B0%E5%9D%80%E5%BA%94%E4%B8%BA%20%EF%BC%887%EF%BC%89%20%E4%BD%8D%EF%BC%8C%E4%B8%BB%E5%AD%98%E5%8C%BA%E5%8F%B7%E5%BA%94%E4%B8%BA%20%EF%BC%888%EF%BC%89%E4%BD%8D%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（7）</span>
                <span class="choice false">A．16</span>
                <span class="choice false">B．17</span>
                <span class="choice false">C．18</span>
                <span class="choice true">D．19</span>
            </p>
            <p class="one-line-choice"><span class="number">（8）</span>
                <span class="choice false">A．5</span>
                <span class="choice true">B．6</span>
                <span class="choice false">C．7</span>
                <span class="choice false">D．8</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    以字编址，字块大小为128个字，容量为4096块主存，则128×4096=2<sup>19</sup>，主存地址为19位；<br />
                    由于采用组相联方式映像，Cache容量为64块，则主存区数=4096/64=64=2<sup>6</sup>，主存区号为6位。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">软件开发中的瀑布模型典型地刻画了软件生存周期的阶段划分，与其最相适应的软件开发方法是 （9） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%BD%AF%E4%BB%B6%E5%BC%80%E5%8F%91%E4%B8%AD%E7%9A%84%E7%80%91%E5%B8%83%E6%A8%A1%E5%9E%8B%E5%85%B8%E5%9E%8B%E5%9C%B0%E5%88%BB%E7%94%BB%E4%BA%86%E8%BD%AF%E4%BB%B6%E7%94%9F%E5%AD%98%E5%91%A8%E6%9C%9F%E7%9A%84%E9%98%B6%E6%AE%B5%E5%88%92%E5%88%86%EF%BC%8C%E4%B8%8E%E5%85%B6%E6%9C%80%E7%9B%B8%E9%80%82%E5%BA%94%E7%9A%84%E8%BD%AF%E4%BB%B6%E5%BC%80%E5%8F%91%E6%96%B9%E6%B3%95%E6%98%AF%20%EF%BC%889%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A．构件化方法</span>
                <span class="choice true">B．结构化方法
                </span>
                <span class="choice false">C．面向对象方法</span>
                <span class="choice false">D．快速原型方法</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">瀑布模型核心思想是按工序将问题化简，将功能的实现与设计分开，便于分工协作，即采用结构化的分析与设计方法将逻辑实现与物理实现分开。将软件生命周期划分为制定计划、需求分析、软件设计、程序编写、软件测试和运行维护等六个基本活动，并且规定了它们自上而下、相互衔接的固定次序，如同瀑布流水，逐级下落。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下述任务中，不属于软件工程需求分析阶段的是 （10） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E8%BF%B0%E4%BB%BB%E5%8A%A1%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E8%BD%AF%E4%BB%B6%E5%B7%A5%E7%A8%8B%E9%9C%80%E6%B1%82%E5%88%86%E6%9E%90%E9%98%B6%E6%AE%B5%E7%9A%84%E6%98%AF%20%EF%BC%8810%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（10）</span>
                <span class="choice false">A．分析软件系统的数据要求</span>
                <span class="choice false">B．确定软件系统的功能需求
                </span>
                <span class="choice false">C．确定软件系统的性能要求</span>
                <span class="choice true">D．确定软件系统的运行平台</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    设计阶段才确定软件的运行平台。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">软件设计的主要任务是设计软件的结构、过程和模块，其中软件结构设计的主要任务是要确定 （11） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%BD%AF%E4%BB%B6%E8%AE%BE%E8%AE%A1%E7%9A%84%E4%B8%BB%E8%A6%81%E4%BB%BB%E5%8A%A1%E6%98%AF%E8%AE%BE%E8%AE%A1%E8%BD%AF%E4%BB%B6%E7%9A%84%E7%BB%93%E6%9E%84%E3%80%81%E8%BF%87%E7%A8%8B%E5%92%8C%E6%A8%A1%E5%9D%97%EF%BC%8C%E5%85%B6%E4%B8%AD%E8%BD%AF%E4%BB%B6%E7%BB%93%E6%9E%84%E8%AE%BE%E8%AE%A1%E7%9A%84%E4%B8%BB%E8%A6%81%E4%BB%BB%E5%8A%A1%E6%98%AF%E8%A6%81%E7%A1%AE%E5%AE%9A%20%EF%BC%8811%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（11）</span>
                <span class="choice false">A．模块间的操作细节</span>
                <span class="choice false">B．模块间的相似性
                </span>
                <span class="choice true">C．模块间的组成关系</span>
                <span class="choice false">D．模块的具体功能</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    既然是结构设计，当然首要任务是确定模块间的组成关系。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">系统测试是将软件系统与硬件、外设和网络等其他因素结合，对整个软件系统进行测试。 （12） 不是系统测试的内容。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E7%B3%BB%E7%BB%9F%E6%B5%8B%E8%AF%95%E6%98%AF%E5%B0%86%E8%BD%AF%E4%BB%B6%E7%B3%BB%E7%BB%9F%E4%B8%8E%E7%A1%AC%E4%BB%B6%E3%80%81%E5%A4%96%E8%AE%BE%E5%92%8C%E7%BD%91%E7%BB%9C%E7%AD%89%E5%85%B6%E4%BB%96%E5%9B%A0%E7%B4%A0%E7%BB%93%E5%90%88%EF%BC%8C%E5%AF%B9%E6%95%B4%E4%B8%AA%E8%BD%AF%E4%BB%B6%E7%B3%BB%E7%BB%9F%E8%BF%9B%E8%A1%8C%E6%B5%8B%E8%AF%95%E3%80%82%20%EF%BC%8812%EF%BC%89%20%E4%B8%8D%E6%98%AF%E7%B3%BB%E7%BB%9F%E6%B5%8B%E8%AF%95%E7%9A%84%E5%86%85%E5%AE%B9%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（12）</span>
                <span class="choice true">A．路径测试</span>
                <span class="choice false">B．可靠性测试</span>
                <span class="choice false">C．安装测试</span>
                <span class="choice false">D．安全测试</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常见的系统测试包括恢复测试、安全测试、强度测试、性能测试、可靠性测试和安装测试等。路径测试是单元测试的内容。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">项目管理工具中，将网络方法用于工作计划安排的评审和检查的是 （13） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%A1%B9%E7%9B%AE%E7%AE%A1%E7%90%86%E5%B7%A5%E5%85%B7%E4%B8%AD%EF%BC%8C%E5%B0%86%E7%BD%91%E7%BB%9C%E6%96%B9%E6%B3%95%E7%94%A8%E4%BA%8E%E5%B7%A5%E4%BD%9C%E8%AE%A1%E5%88%92%E5%AE%89%E6%8E%92%E7%9A%84%E8%AF%84%E5%AE%A1%E5%92%8C%E6%A3%80%E6%9F%A5%E7%9A%84%E6%98%AF%20%EF%BC%8813%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（13）</span>
                <span class="choice false">A．Gantt图</span>
                <span class="choice true">B．PERT网图</span>
                <span class="choice false">C．因果分析图</span>
                <span class="choice false">D．流程图</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    用网络分析的方法编制的进度计划称为网络图。PERT（Program Evaluation and Review Technique，计划评审技术）和CPM（Critical Path
                    Method，关键路径法）都采用了网络图来表示项目的进度安排。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在结构化分析方法中，数据字典是重要的文档。对加工的描述是数据字典的组成内容之一，常用的加工描述方法 （14） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8%E7%BB%93%E6%9E%84%E5%8C%96%E5%88%86%E6%9E%90%E6%96%B9%E6%B3%95%E4%B8%AD%EF%BC%8C%E6%95%B0%E6%8D%AE%E5%AD%97%E5%85%B8%E6%98%AF%E9%87%8D%E8%A6%81%E7%9A%84%E6%96%87%E6%A1%A3%E3%80%82%E5%AF%B9%E5%8A%A0%E5%B7%A5%E7%9A%84%E6%8F%8F%E8%BF%B0%E6%98%AF%E6%95%B0%E6%8D%AE%E5%AD%97%E5%85%B8%E7%9A%84%E7%BB%84%E6%88%90%E5%86%85%E5%AE%B9%E4%B9%8B%E4%B8%80%EF%BC%8C%E5%B8%B8%E7%94%A8%E7%9A%84%E5%8A%A0%E5%B7%A5%E6%8F%8F%E8%BF%B0%E6%96%B9%E6%B3%95%20%EF%BC%8814%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（14） </span>A．只有结构化语言</p>
            <p class="choice false">B．有结构化语言和判定树
            </p>
            <p class="choice true">C．有结构化语言、判定树和判定表</p>
            <p class="choice false">D．有判定树和判定表</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    结构化分析和设计时，表示软件的模块结构和模块之间关系的图形工具有：层次图、结构图、IPO图等；表示程序处理的工具有：流程图、盒图、PAD图、判定表、判定树和过程设计语言等。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">CMM模型将软件过程的成熟度分为5个等级。在 （15） 使用定量分析来不断地改进和管理软件过程。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=CMM%E6%A8%A1%E5%9E%8B%E5%B0%86%E8%BD%AF%E4%BB%B6%E8%BF%87%E7%A8%8B%E7%9A%84%E6%88%90%E7%86%9F%E5%BA%A6%E5%88%86%E4%B8%BA5%E4%B8%AA%E7%AD%89%E7%BA%A7%E3%80%82%E5%9C%A8%20%EF%BC%8815%EF%BC%89%20%E4%BD%BF%E7%94%A8%E5%AE%9A%E9%87%8F%E5%88%86%E6%9E%90%E6%9D%A5%E4%B8%8D%E6%96%AD%E5%9C%B0%E6%94%B9%E8%BF%9B%E5%92%8C%E7%AE%A1%E7%90%86%E8%BD%AF%E4%BB%B6%E8%BF%87%E7%A8%8B%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（15）</span>
                <span class="choice true">A．优化级</span>
                <span class="choice false">B．管理级</span>
                <span class="choice false">C．定义级</span>
                <span class="choice false">D．可重复级</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    优化级的特点是过程的量化反馈和先进的新思想、新技术促进过程不断改进，技术和过程的改进改进被作为常规的业务活动加以计划和管理。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在面向数据流的设计方法中，一般把数据流图中的数据流划分为 （16） 两种。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E9%9D%A2%E5%90%91%E6%95%B0%E6%8D%AE%E6%B5%81%E7%9A%84%E8%AE%BE%E8%AE%A1%E6%96%B9%E6%B3%95%E4%B8%AD%EF%BC%8C%E4%B8%80%E8%88%AC%E6%8A%8A%E6%95%B0%E6%8D%AE%E6%B5%81%E5%9B%BE%E4%B8%AD%E7%9A%84%E6%95%B0%E6%8D%AE%E6%B5%81%E5%88%92%E5%88%86%E4%B8%BA%20%EF%BC%8816%EF%BC%89%20%E4%B8%A4%E7%A7%8D%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．数据流和事务流</span>
                <span class="choice false">B．变换流和数据流
                </span>
                <span class="choice true">C．变换流和事务流</span>
                <span class="choice false">D．控制流和事务流</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    数据流的类型决定映射的方法。数据流有两种类型：变换流和事务流。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（17） 属于第三层VPN协议。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%8817%EF%BC%89%20%E5%B1%9E%E4%BA%8E%E7%AC%AC%E4%B8%89%E5%B1%82VPN%E5%8D%8F%E8%AE%AE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A．TCP</span>
                <span class="choice true">B．IPsec</span>
                <span class="choice false">C．PPPOE</span>
                <span class="choice false">D．SSL</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    VPN技术，分为二层、三层及三层以上隧道协议<br/>
					其中二层（数据链路层）VPN有：PPTP、L2TP、L2F 等<br/>
					三层（网络层）隧道协议VPN有：IPSec、GRE VPN、VTP等<br/>
					而应用层VPN的代表则为：SSL VPN</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下图所示的防火墙结构属于 （18） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E9%98%B2%E7%81%AB%E5%A2%99%E7%BB%93%E6%9E%84%E5%B1%9E%E4%BA%8E%20%EF%BC%8818%EF%BC%89%20%E3%80%82">百度</a></p>
            <div class="img-center">
                <img id="i1" />
            </div>
            <p class="choice header_choice false"><span class="number">（18） </span>A．简单的双宿主主机结构</p>
            <p class="choice true">B．单DMZ防火墙结构
            </p>
            <p class="choice false">C．带有屏蔽路由器的单网段防火墙结构</p>
            <p class="choice false">D．双DMZ防火墙结构</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    图中的虚线中，屏蔽路由器和双宿主堡垒主机之间为DMZ区域。DMZ是在Internet和内部网之间的小型的独立的网络，这种布置阻止了任何直接流入子网或者DMZ的流量。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">电子商务交易必须具备抗抵赖性，目的在于防止 （19） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%B5%E5%AD%90%E5%95%86%E5%8A%A1%E4%BA%A4%E6%98%93%E5%BF%85%E9%A1%BB%E5%85%B7%E5%A4%87%E6%8A%97%E6%8A%B5%E8%B5%96%E6%80%A7%EF%BC%8C%E7%9B%AE%E7%9A%84%E5%9C%A8%E4%BA%8E%E9%98%B2%E6%AD%A2%20%EF%BC%8819%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（19） </span>A．一个实体假装成另一个实体
            </p>
            <p class="choice true">B．参与此交易的一方否认曾经发生过此次交易
            </p>
            <p class="choice false">C．他人对数据进行非授权的修改、破坏
            </p>
            <p class="choice false">D．信息从被监视的通信过程中泄漏出去</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">知识产权一般都具有法定的保护期限，一旦保护期限届满，权利将自行终止，成为社会公众可以自由使用的知识。 （20）
                权受法律保护的期限是不确定的，一旦为公众所知悉，即成为公众可以自由使用的知识。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%9F%A5%E8%AF%86%E4%BA%A7%E6%9D%83%E4%B8%80%E8%88%AC%E9%83%BD%E5%85%B7%E6%9C%89%E6%B3%95%E5%AE%9A%E7%9A%84%E4%BF%9D%E6%8A%A4%E6%9C%9F%E9%99%90%EF%BC%8C%E4%B8%80%E6%97%A6%E4%BF%9D%E6%8A%A4%E6%9C%9F%E9%99%90%E5%B1%8A%E6%BB%A1%EF%BC%8C%E6%9D%83%E5%88%A9%E5%B0%86%E8%87%AA%E8%A1%8C%E7%BB%88%E6%AD%A2%EF%BC%8C%E6%88%90%E4%B8%BA%E7%A4%BE%E4%BC%9A%E5%85%AC%E4%BC%97%E5%8F%AF%E4%BB%A5%E8%87%AA%E7%94%B1%E4%BD%BF%E7%94%A8%E7%9A%84%E7%9F%A5%E8%AF%86%E3%80%82%20%EF%BC%8820%EF%BC%89%20%E6%9D%83%E5%8F%97%E6%B3%95%E5%BE%8B%E4%BF%9D%E6%8A%A4%E7%9A%84%E6%9C%9F%E9%99%90%E6%98%AF%E4%B8%8D%E7%A1%AE%E5%AE%9A%E7%9A%84%EF%BC%8C%E4%B8%80%E6%97%A6%E4%B8%BA%E5%85%AC%E4%BC%97%E6%89%80%E7%9F%A5%E6%82%89%EF%BC%8C%E5%8D%B3%E6%88%90%E4%B8%BA%E5%85%AC%E4%BC%97%E5%8F%AF%E4%BB%A5%E8%87%AA%E7%94%B1%E4%BD%BF%E7%94%A8%E7%9A%84%E7%9F%A5%E8%AF%86%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（20）</span>
                <span class="choice false">A．发明专利</span>
                <span class="choice false">B．商标</span>
                <span class="choice false">C．作品发表</span>
                <span class="choice true">D．商业秘密</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    我国专利法规定发明专利权的保护期限为20年，实用新型专利权和外观设计专利权的保护期限为10年，均自申请日起计算。而商业秘密受法律保护的期限是不确定的，该秘密一旦为公众所知悉，即成为公众可以自由使用的知识。这是由于商业信息必须具备四大条件才能构成商业秘密，即新颖性、未公开性、实用性和保密性。其中，未公开性也称秘密性，指不为公众所知悉，一旦被公众所知悉，商业秘密就成为了“公开的秘密”，其商业价值就会部分或者全部丧失。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">甲．乙两人在同一时间就同样的发明创造提交了专利申请，专利局将分别向各申请人通报有关情况，并提出多种解决这一问题的办法，不可能采用 （21） 的办法。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%B2%EF%BC%8E%E4%B9%99%E4%B8%A4%E4%BA%BA%E5%9C%A8%E5%90%8C%E4%B8%80%E6%97%B6%E9%97%B4%E5%B0%B1%E5%90%8C%E6%A0%B7%E7%9A%84%E5%8F%91%E6%98%8E%E5%88%9B%E9%80%A0%E6%8F%90%E4%BA%A4%E4%BA%86%E4%B8%93%E5%88%A9%E7%94%B3%E8%AF%B7%EF%BC%8C%E4%B8%93%E5%88%A9%E5%B1%80%E5%B0%86%E5%88%86%E5%88%AB%E5%90%91%E5%90%84%E7%94%B3%E8%AF%B7%E4%BA%BA%E9%80%9A%E6%8A%A5%E6%9C%89%E5%85%B3%E6%83%85%E5%86%B5%EF%BC%8C%E5%B9%B6%E6%8F%90%E5%87%BA%E5%A4%9A%E7%A7%8D%E8%A7%A3%E5%86%B3%E8%BF%99%E4%B8%80%E9%97%AE%E9%A2%98%E7%9A%84%E5%8A%9E%E6%B3%95%EF%BC%8C%E4%B8%8D%E5%8F%AF%E8%83%BD%E9%87%87%E7%94%A8%20%EF%BC%8821%EF%BC%89%20%E7%9A%84%E5%8A%9E%E6%B3%95%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（21） </span>A．两申请人作为一件申请的共同申请人
            </p>
            <p class="choice false">B．其中一方放弃权利并从另一方得到适当的补偿
            </p>
            <p class="choice false">C．两件申请都不授予专利权
            </p>
            <p class="choice true">D．两件申请都授予专利权</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在我国，审批专利遵循的基本原则是“先申请先得”原则，即对于同样的发明创造，谁先申请专利，专利权就授予谁。专利法第九条规定，两个以上的申请人分别就同样的发明创造申请专利的，专利权授予最先申请的。当有二者在同一时间就同样的发明创造提交了专利申请，专利局将分别向各申请人通报有关情况可以将两申请人作为一件申请的共同申请人,或其中一方放弃权利并从另一方得到适当的补尝,或两件申请都不授予专利权。但专利权的的授予只能给一个人。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">《计算机软件产品开发文件编制指南》（GB8567-88）是 （22） 标准&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E3%80%8A%E8%AE%A1%E7%AE%97%E6%9C%BA%E8%BD%AF%E4%BB%B6%E4%BA%A7%E5%93%81%E5%BC%80%E5%8F%91%E6%96%87%E4%BB%B6%E7%BC%96%E5%88%B6%E6%8C%87%E5%8D%97%E3%80%8B%EF%BC%88GB8567-88%EF%BC%89%E6%98%AF%20%EF%BC%8822%EF%BC%89%20%E6%A0%87%E5%87%86">百度</a></p>
            <p class="one-line-choice"><span class="number">（22）</span>
                <span class="choice true">A．强制性国家</span>
                <span class="choice false">B．推荐性国家</span>
                <span class="choice false">C．强制性行业</span>
                <span class="choice false">D．推荐性行业</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    国家技术监督局1990年发布的《国家标准管理办法》第四条规定：国家标准的代号由大写汉语拼音字母构成。<br />
                    强制性国家标准的代号为GB，推荐性国家标准的代号为GB／T。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">虚拟存储管理系统的基础是程序的 （23）
                理论，这个理论的基本含义是指程序执行时往往会不均匀地访问主存储器单元。根据这个理论，Denning提出了工作集理论。工作集是进程运行时被频繁地访问的页面集合。在进程运行时，如果它的工作集页面都在 （24）
                内，能够使该进程有效地运行，否则会出现频繁的页面调入/调出现象。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%99%9A%E6%8B%9F%E5%AD%98%E5%82%A8%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F%E7%9A%84%E5%9F%BA%E7%A1%80%E6%98%AF%E7%A8%8B%E5%BA%8F%E7%9A%84%20%EF%BC%8823%EF%BC%89%20%E7%90%86%E8%AE%BA%EF%BC%8C%E8%BF%99%E4%B8%AA%E7%90%86%E8%AE%BA%E7%9A%84%E5%9F%BA%E6%9C%AC%E5%90%AB%E4%B9%89%E6%98%AF%E6%8C%87%E7%A8%8B%E5%BA%8F%E6%89%A7%E8%A1%8C%E6%97%B6%E5%BE%80%E5%BE%80%E4%BC%9A%E4%B8%8D%E5%9D%87%E5%8C%80%E5%9C%B0%E8%AE%BF%E9%97%AE%E4%B8%BB%E5%AD%98%E5%82%A8%E5%99%A8%E5%8D%95%E5%85%83%E3%80%82%E6%A0%B9%E6%8D%AE%E8%BF%99%E4%B8%AA%E7%90%86%E8%AE%BA%EF%BC%8CDenning%E6%8F%90%E5%87%BA%E4%BA%86%E5%B7%A5%E4%BD%9C%E9%9B%86%E7%90%86%E8%AE%BA%E3%80%82%E5%B7%A5%E4%BD%9C%E9%9B%86%E6%98%AF%E8%BF%9B%E7%A8%8B%E8%BF%90%E8%A1%8C%E6%97%B6%E8%A2%AB%E9%A2%91%E7%B9%81%E5%9C%B0%E8%AE%BF%E9%97%AE%E7%9A%84%E9%A1%B5%E9%9D%A2%E9%9B%86%E5%90%88%E3%80%82%E5%9C%A8%E8%BF%9B%E7%A8%8B%E8%BF%90%E8%A1%8C%E6%97%B6%EF%BC%8C%E5%A6%82%E6%9E%9C%E5%AE%83%E7%9A%84%E5%B7%A5%E4%BD%9C%E9%9B%86%E9%A1%B5%E9%9D%A2%E9%83%BD%E5%9C%A8%20%EF%BC%8824%EF%BC%89%20%E5%86%85%EF%BC%8C%E8%83%BD%E5%A4%9F%E4%BD%BF%E8%AF%A5%E8%BF%9B%E7%A8%8B%E6%9C%89%E6%95%88%E5%9C%B0%E8%BF%90%E8%A1%8C%EF%BC%8C%E5%90%A6%E5%88%99%E4%BC%9A%E5%87%BA%E7%8E%B0%E9%A2%91%E7%B9%81%E7%9A%84%E9%A1%B5%E9%9D%A2%E8%B0%83%E5%85%A5/%E8%B0%83%E5%87%BA%E7%8E%B0%E8%B1%A1%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（23）</span>
                <span class="choice false">A．全局性</span>
                <span class="choice true">B．局部性</span>
                <span class="choice false">C．时间全局性</span>
                <span class="choice false">D．空间全局性</span>
            </p>
            <p class="one-line-choice"><span class="number">（24）</span>
                <span class="choice true">A．主存储器</span>
                <span class="choice false">B．虚拟存储器</span>
                <span class="choice false">C．辅助存储器</span>
                <span class="choice false">D．U盘</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在UNIX操作系统中，若用户键入的命令参数的个数为1时，执行cat$1命令；若用户键入的命令参数的个数为2时，执行cat>>$2
                <$1命令。请将下面所示的Shell程序的空缺部分补齐。<br />
                case （25） in<br />
                1）cat $1<br />
                2）cat>>$2
                <$1<br />
                *）echo ‘default...’<br />
                case&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8UNIX%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E8%8B%A5%E7%94%A8%E6%88%B7%E9%94%AE%E5%85%A5%E7%9A%84%E5%91%BD%E4%BB%A4%E5%8F%82%E6%95%B0%E7%9A%84%E4%B8%AA%E6%95%B0%E4%B8%BA1%E6%97%B6%EF%BC%8C%E6%89%A7%E8%A1%8Ccat%241%E5%91%BD%E4%BB%A4%EF%BC%9B%E8%8B%A5%E7%94%A8%E6%88%B7%E9%94%AE%E5%85%A5%E7%9A%84%E5%91%BD%E4%BB%A4%E5%8F%82%E6%95%B0%E7%9A%84%E4%B8%AA%E6%95%B0%E4%B8%BA2%E6%97%B6%EF%BC%8C%E6%89%A7%E8%A1%8Ccat%3E%3E%242%3C%241%E5%91%BD%E4%BB%A4%E3%80%82%E8%AF%B7%E5%B0%86%E4%B8%8B%E9%9D%A2%E6%89%80%E7%A4%BA%E7%9A%84Shell%E7%A8%8B%E5%BA%8F%E7%9A%84%E7%A9%BA%E7%BC%BA%E9%83%A8%E5%88%86%E8%A1%A5%E9%BD%90%E3%80%82%3Cbr/%3E%0Acase%20%EF%BC%8825%EF%BC%89%20in%3Cbr/%3E%0A%201%EF%BC%89cat%20%241%3Cbr/%3E%0A%202%EF%BC%89cat%3E%3E%242%3C%241%3Cbr/%3E%0A%20%2A%EF%BC%89echo%20%E2%80%98default...%E2%80%99%3Cbr/%3E%0Acase">百度</a></p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    $$表示当前命令的进程标识数。<br />
                    $#表示位置参数的个数，不包括命令名。<br />
                    $*表示所有位置参量，即相当于$1, $2, …。<br />
                    $@与$*基本相同，但当用双引号转义时，” $@”还是能分解成多个参数，但” $*”则合并成一个参数。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">设信道的码元速率为300波特，采用4相DPSK调制，则信道的数据速率为 （26） b/s．&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%E4%BF%A1%E9%81%93%E7%9A%84%E7%A0%81%E5%85%83%E9%80%9F%E7%8E%87%E4%B8%BA300%E6%B3%A2%E7%89%B9%EF%BC%8C%E9%87%87%E7%94%A84%E7%9B%B8DPSK%E8%B0%83%E5%88%B6%EF%BC%8C%E5%88%99%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8826%EF%BC%89%20b/s%EF%BC%8E">百度</a></p>
            <p class="one-line-choice"><span class="number">（26）</span>
                <span class="choice false">A．300</span>
                <span class="choice true">B．600</span>
                <span class="choice false">C．800</span>
                <span class="choice false">D．1000</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    4相意味着信号每次发生变化可以传输2个比特，因此数据速率=300*2=600。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">光纤通信中使用的复用方式是 （27） 。EI载波把32个信道按 （28） 方式复用在一条2.048Mb/s的高速信道上，每条话音信道的数据速率是 （29） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%89%E7%BA%A4%E9%80%9A%E4%BF%A1%E4%B8%AD%E4%BD%BF%E7%94%A8%E7%9A%84%E5%A4%8D%E7%94%A8%E6%96%B9%E5%BC%8F%E6%98%AF%20%EF%BC%8827%EF%BC%89%20%E3%80%82EI%E8%BD%BD%E6%B3%A2%E6%8A%8A32%E4%B8%AA%E4%BF%A1%E9%81%93%E6%8C%89%20%EF%BC%8828%EF%BC%89%20%E6%96%B9%E5%BC%8F%E5%A4%8D%E7%94%A8%E5%9C%A8%E4%B8%80%E6%9D%A12.048Mb/s%E7%9A%84%E9%AB%98%E9%80%9F%E4%BF%A1%E9%81%93%E4%B8%8A%EF%BC%8C%E6%AF%8F%E6%9D%A1%E8%AF%9D%E9%9F%B3%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8829%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（27）</span>
                <span class="choice false">A．时分多路</span>
                <span class="choice false">B．空分多路</span>
                <span class="choice true">C．波分多路</span>
                <span class="choice false">D．频分多路</span>
            </p>
            <p class="one-line-choice"><span class="number">（28）</span>
                <span class="choice true">A．时分多路</span>
                <span class="choice false">B．空分多路</span>
                <span class="choice false">C．波分多路</span>
                <span class="choice false">D．频分多路</span>
            </p>
            <p class="one-line-choice"><span class="number">（29）</span>
                <span class="choice false">A．56Kb/s</span>
                <span class="choice true">B．64Kb/s</span>
                <span class="choice false">C．128Kb/s</span>
                <span class="choice false">D．512Kb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    光波分复用技术 WDM（Wavelength Division Multiplexing）技术是指使用多束激光在同一条光纤上同时传输多个不同波长的光波技术。<br/>
					1、一条E1是2.048M的链路，用PCM编码。<br/>
					2、一个E1的帧长为256个bit,分为32个时隙，一个时隙为8个bit。<br/>
					3、每秒有8k个E1的帧通过接口，即8K*256=2048kbps。<br/>
					4、每个时隙在E1帧中占8bit，8*8k=64k，即一条E1中含有32个64K。<br/>
					每个时隙的速率为64Kb/s</p>
            </div>
        </div>
        <div class="block">
            <p class="question">用户A与用户B通过卫星链路通信时，传播延迟为270ms，假设数据速率是64Kb/s，帧长4000bit，若采用停等流控协议通信，则最大链路利用率为 （30）
                ；若采用后退N帧ARQ协议通信，发送窗口为8，则最大链路利用率可以达到 （31） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8%E6%88%B7A%E4%B8%8E%E7%94%A8%E6%88%B7B%E9%80%9A%E8%BF%87%E5%8D%AB%E6%98%9F%E9%93%BE%E8%B7%AF%E9%80%9A%E4%BF%A1%E6%97%B6%EF%BC%8C%E4%BC%A0%E6%92%AD%E5%BB%B6%E8%BF%9F%E4%B8%BA270ms%EF%BC%8C%E5%81%87%E8%AE%BE%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF64Kb/s%EF%BC%8C%E5%B8%A7%E9%95%BF4000bit%EF%BC%8C%E8%8B%A5%E9%87%87%E7%94%A8%E5%81%9C%E7%AD%89%E6%B5%81%E6%8E%A7%E5%8D%8F%E8%AE%AE%E9%80%9A%E4%BF%A1%EF%BC%8C%E5%88%99%E6%9C%80%E5%A4%A7%E9%93%BE%E8%B7%AF%E5%88%A9%E7%94%A8%E7%8E%87%E4%B8%BA%20%EF%BC%8830%EF%BC%89%20%EF%BC%9B%E8%8B%A5%E9%87%87%E7%94%A8%E5%90%8E%E9%80%80N%E5%B8%A7ARQ%E5%8D%8F%E8%AE%AE%E9%80%9A%E4%BF%A1%EF%BC%8C%E5%8F%91%E9%80%81%E7%AA%97%E5%8F%A3%E4%B8%BA8%EF%BC%8C%E5%88%99%E6%9C%80%E5%A4%A7%E9%93%BE%E8%B7%AF%E5%88%A9%E7%94%A8%E7%8E%87%E5%8F%AF%E4%BB%A5%E8%BE%BE%E5%88%B0%20%EF%BC%8831%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（30）</span>
                <span class="choice true">A．0.104</span>
                <span class="choice false">B．0.116</span>
                <span class="choice false">C．0.188</span>
                <span class="choice false">D．0.231</span>
            </p>
            <p class="one-line-choice"><span class="number">（31）</span>
                <span class="choice false">A．0.416</span>
                <span class="choice false">B．0.464</span>
                <span class="choice false">C．0.752</span>
                <span class="choice true">D．0.832</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    停等协议是一种简单的流控制技术。接收方每接收一帧都会发送一个确认帧。发送方在收到确认帧之后再发送第二个数据帧。在停等协议控制下，实际传输的有效数据为4000bit，所以最大链路利用率为（4000/64000）/（4000/64000+0.27×2）=0.104。<br />
                    后退N 帧
                    ARQ协议具有“推倒重来”的特征，即当出错时要向回走N个帧，然后再开始重传。发送窗口为8时，发送8个最大帧的发送时间=8*4k/64k=0.5秒。信号一来一回的传输延迟=0.27*2=0.54秒。显然，8个帧发送出去时，回应帧还没有传送到用户A。<br />
                    在最佳情况（数据传输没有出错）下，用户A只要收到第一个回应帧，就可以发送第9帧。因此最大链路利用率应该这么算：用户发送8帧的总时间/（第一帧从开始发送到A收到回应帧的时间）。第一帧从开始发送到A收到回应帧的时间=帧的发送时间+往返传输延迟=4k/64K+0.27*2=0.6025秒。所以最大链路利用率=8*4k/64k/0.6025=0.830。这个结果与答案D的0.832比较相近，但还是不太一样。<br />
                    （为何标准答案为D，原因不详）<br />
                    （检查过《网络工程师教程（第2版）》，发觉本考题的答案符合该书的计算方法。不过，我本人认为该书的计算方法是有问题的。）</p>
            </div>
        </div>
        <div class="block">
            <p class="question">HDLC是一种 （32） 协议。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=HDLC%E6%98%AF%E4%B8%80%E7%A7%8D%20%EF%BC%8832%EF%BC%89%20%E5%8D%8F%E8%AE%AE%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（32） </span>A．面向比特的同步链路控制</p>
            <p class="choice false">B．面向字节计数的异步链路控制
            </p>
            <p class="choice false">C．面向字符的同步链路控制</p>
            <p class="choice false">D．面向比特流的异步链路控制</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    高级数据链路控制（High-Level Data Link Control或简称HDLC），是一个在同步网上传输 数据、面向比特的数据链路层协议，它是由国际标准化组织（ISO）根据IBM公司的SDLC（Synchronous Data Link Control）协议扩展开发而成的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">帧中继网络没有采用流量控制机制，只有拥塞控制功能。采用显式信令控制时，如果LAP-D帧中的FECN比特置1，则表示 （33） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%B8%A7%E4%B8%AD%E7%BB%A7%E7%BD%91%E7%BB%9C%E6%B2%A1%E6%9C%89%E9%87%87%E7%94%A8%E6%B5%81%E9%87%8F%E6%8E%A7%E5%88%B6%E6%9C%BA%E5%88%B6%EF%BC%8C%E5%8F%AA%E6%9C%89%E6%8B%A5%E5%A1%9E%E6%8E%A7%E5%88%B6%E5%8A%9F%E8%83%BD%E3%80%82%E9%87%87%E7%94%A8%E6%98%BE%E5%BC%8F%E4%BF%A1%E4%BB%A4%E6%8E%A7%E5%88%B6%E6%97%B6%EF%BC%8C%E5%A6%82%E6%9E%9CLAP-D%E5%B8%A7%E4%B8%AD%E7%9A%84FECN%E6%AF%94%E7%89%B9%E7%BD%AE1%EF%BC%8C%E5%88%99%E8%A1%A8%E7%A4%BA%20%EF%BC%8833%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（33） </span>A．在帧的传送方向上出现了拥塞</p>
            <p class="choice false">B．在与帧传送相反的方向上出现了拥塞
            </p>
            <p class="choice false">C．在两个传送方向上同时出现了拥塞</p>
            <p class="choice false">D．没有出现拥塞</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    FECN（Forward Explicit Congestion
                    Notification，前向显式拥塞通知）：当一台帧中继交换机意识到网络上发生拥塞的时候，会向目的设备发送FECN分组，此时FECN比特置为1，告知网络上发生了拥塞。<br />
                    BECN（Backward Explicit Congestion
                    Notification，后向显式拥塞通知）：当一台帧中继交换机意识到网络上发生拥塞的时候，会向源路由器发送BECN分组，此时BECN比特置为
                    1，指示路由器降低分组的发送速率。如果路由器在当前的时间间隔内接收到任何BECN，它会按照25%的比例降低分组的发送速率。所以A是正确的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ATM网络采用了许多通信量管理技术以避免拥塞的出现，其中 （34） 是防止网络过载的第一道防线。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=ATM%E7%BD%91%E7%BB%9C%E9%87%87%E7%94%A8%E4%BA%86%E8%AE%B8%E5%A4%9A%E9%80%9A%E4%BF%A1%E9%87%8F%E7%AE%A1%E7%90%86%E6%8A%80%E6%9C%AF%E4%BB%A5%E9%81%BF%E5%85%8D%E6%8B%A5%E5%A1%9E%E7%9A%84%E5%87%BA%E7%8E%B0%EF%BC%8C%E5%85%B6%E4%B8%AD%20%EF%BC%8834%EF%BC%89%20%E6%98%AF%E9%98%B2%E6%AD%A2%E7%BD%91%E7%BB%9C%E8%BF%87%E8%BD%BD%E7%9A%84%E7%AC%AC%E4%B8%80%E9%81%93%E9%98%B2%E7%BA%BF%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（34）</span>
                <span class="choice true">A．连接许可</span>
                <span class="choice false">B．选择性信元丢弃</span>
                <span class="choice false">C．通信量整型</span>
                <span class="choice false">D．使用参数控制</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    选择性信元丢弃，通信量整型，使用参数控制都在连接以后所采取的方法，连接许可是最先，最有效的方法。所以A是正确的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IP交换是一种利用交换硬件快速传送IP分组的技术。一台IP交换机由 （35） 三部分组成。IP交换机初始化后为每一个物理连接建立一个默认的 （36）
                ，相邻的IP交换机通过这些默认通信交换路由信息和数据分组，为了进行第三层路由选择，IP交换控制器必须根据 （37） 等信息对网络数据流进行分类并加上数据流描述符。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=IP%E4%BA%A4%E6%8D%A2%E6%98%AF%E4%B8%80%E7%A7%8D%E5%88%A9%E7%94%A8%E4%BA%A4%E6%8D%A2%E7%A1%AC%E4%BB%B6%E5%BF%AB%E9%80%9F%E4%BC%A0%E9%80%81IP%E5%88%86%E7%BB%84%E7%9A%84%E6%8A%80%E6%9C%AF%E3%80%82%E4%B8%80%E5%8F%B0IP%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%94%B1%20%EF%BC%8835%EF%BC%89%20%E4%B8%89%E9%83%A8%E5%88%86%E7%BB%84%E6%88%90%E3%80%82IP%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%88%9D%E5%A7%8B%E5%8C%96%E5%90%8E%E4%B8%BA%E6%AF%8F%E4%B8%80%E4%B8%AA%E7%89%A9%E7%90%86%E8%BF%9E%E6%8E%A5%E5%BB%BA%E7%AB%8B%E4%B8%80%E4%B8%AA%E9%BB%98%E8%AE%A4%E7%9A%84%20%EF%BC%8836%EF%BC%89%20%EF%BC%8C%E7%9B%B8%E9%82%BB%E7%9A%84IP%E4%BA%A4%E6%8D%A2%E6%9C%BA%E9%80%9A%E8%BF%87%E8%BF%99%E4%BA%9B%E9%BB%98%E8%AE%A4%E9%80%9A%E4%BF%A1%E4%BA%A4%E6%8D%A2%E8%B7%AF%E7%94%B1%E4%BF%A1%E6%81%AF%E5%92%8C%E6%95%B0%E6%8D%AE%E5%88%86%E7%BB%84%EF%BC%8C%E4%B8%BA%E4%BA%86%E8%BF%9B%E8%A1%8C%E7%AC%AC%E4%B8%89%E5%B1%82%E8%B7%AF%E7%94%B1%E9%80%89%E6%8B%A9%EF%BC%8CIP%E4%BA%A4%E6%8D%A2%E6%8E%A7%E5%88%B6%E5%99%A8%E5%BF%85%E9%A1%BB%E6%A0%B9%E6%8D%AE%20%EF%BC%8837%EF%BC%89%20%E7%AD%89%E4%BF%A1%E6%81%AF%E5%AF%B9%E7%BD%91%E7%BB%9C%E6%95%B0%E6%8D%AE%E6%B5%81%E8%BF%9B%E8%A1%8C%E5%88%86%E7%B1%BB%E5%B9%B6%E5%8A%A0%E4%B8%8A%E6%95%B0%E6%8D%AE%E6%B5%81%E6%8F%8F%E8%BF%B0%E7%AC%A6%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（35） </span>A．ATM交换模块、IP交换控制器和交换机管理协议
            </p>
            <p class="choice false">B．RF交换模块、IP交换控制器和路由器管理协议
            </p>
            <p class="choice false">C．X.25交换模块、IP交换控制器和交换机管理协议
            </p>
            <p class="choice false">D．IPX交换模块、IP交换控制器和路由器管理协议</p>
            <p class="one-line-choice"><span class="number">（36）</span>
                <span class="choice false">A．帧中继交换通道</span>
                <span class="choice true">B．ATM交换通道</span>
                <span class="choice false">C．X.25交换通道</span>
                <span class="choice false">D．IPX交换通道</span>
            </p>
            <p class="choice header_choice false"><span class="number">（37） </span>A．源和目标IP地址．MAC地址</p>
            <p class="choice false">B．源IP地址．ATMVPI/VCI
            </p>
            <p class="choice false">C．目标IP地址．TCP/UDP端口号</p>
            <p class="choice true">D．源和目标IP地址．TCP/UDP端口号</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    如果知道IP交换是与ATM有关系的话，那么就不会答错了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IETF定义的多协议标记交换（MPLS）是一种第三层交换技术，MPLS网络由 （38） 组成，负责为网络流添加/删除标记的是 （39） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=IETF%E5%AE%9A%E4%B9%89%E7%9A%84%E5%A4%9A%E5%8D%8F%E8%AE%AE%E6%A0%87%E8%AE%B0%E4%BA%A4%E6%8D%A2%EF%BC%88MPLS%EF%BC%89%E6%98%AF%E4%B8%80%E7%A7%8D%E7%AC%AC%E4%B8%89%E5%B1%82%E4%BA%A4%E6%8D%A2%E6%8A%80%E6%9C%AF%EF%BC%8CMPLS%E7%BD%91%E7%BB%9C%E7%94%B1%20%EF%BC%8838%EF%BC%89%20%E7%BB%84%E6%88%90%EF%BC%8C%E8%B4%9F%E8%B4%A3%E4%B8%BA%E7%BD%91%E7%BB%9C%E6%B5%81%E6%B7%BB%E5%8A%A0/%E5%88%A0%E9%99%A4%E6%A0%87%E8%AE%B0%E7%9A%84%E6%98%AF%20%EF%BC%8839%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（38） </span>A．标记交换路由器和标记边缘路由器</p>
            <p class="choice false">B．标记分发路由器和标记边缘路由器
            </p>
            <p class="choice false">C．标记分发路由器和标记传送路由器</p>
            <p class="choice false">D．标记传送路由器和标记交换路由器</p>
            <p class="one-line-choice"><span class="number">（39）</span>
                <span class="choice false">A．标记分发路由器</span>
                <span class="choice true">B．标记边缘路由器
                </span>
                <span class="choice false">C．标记交换路由器</span>
                <span class="choice false">D．标记传送路由器</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    MPLS网络由标记交换路由器和标记边缘路由器组成，两种设备都通过标记分发协议给标准路由协议生成的路由表赋予标记信息并发布出去，负责为网络流添加/删除标记的是标记边缘路由器。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">DHCP协议的功能是 （40） 。在Linux中提供DHCP服务的程序是 （41） ；DHCP服务将主机的MAC地址和IP地址绑定在一起的方法是在 （42）
                文件中添加“host主机名{hardware Ethernetxx xx.xx.xx.xx.xx fixed-address 192.168.0.9}”配置项；创建DHCP租用文件的命令是 （43）
                ；通过运行 （44） 命令可以设置在操作系统启动时自动运行DHCP服务。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DHCP%E5%8D%8F%E8%AE%AE%E7%9A%84%E5%8A%9F%E8%83%BD%E6%98%AF%20%EF%BC%8840%EF%BC%89%20%E3%80%82%E5%9C%A8Linux%E4%B8%AD%E6%8F%90%E4%BE%9BDHCP%E6%9C%8D%E5%8A%A1%E7%9A%84%E7%A8%8B%E5%BA%8F%E6%98%AF%20%EF%BC%8841%EF%BC%89%20%EF%BC%9BDHCP%E6%9C%8D%E5%8A%A1%E5%B0%86%E4%B8%BB%E6%9C%BA%E7%9A%84MAC%E5%9C%B0%E5%9D%80%E5%92%8CIP%E5%9C%B0%E5%9D%80%E7%BB%91%E5%AE%9A%E5%9C%A8%E4%B8%80%E8%B5%B7%E7%9A%84%E6%96%B9%E6%B3%95%E6%98%AF%E5%9C%A8%20%EF%BC%8842%EF%BC%89%20%E6%96%87%E4%BB%B6%E4%B8%AD%E6%B7%BB%E5%8A%A0%E2%80%9Chost%E4%B8%BB%E6%9C%BA%E5%90%8D%7Bhardware%20Ethernetxx%20xx.xx.xx.xx.xx%20fixed-address%20192.168.0.9%7D%E2%80%9D%E9%85%8D%E7%BD%AE%E9%A1%B9%EF%BC%9B%E5%88%9B%E5%BB%BADHCP%E7%A7%9F%E7%94%A8%E6%96%87%E4%BB%B6%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8843%EF%BC%89%20%EF%BC%9B%E9%80%9A%E8%BF%87%E8%BF%90%E8%A1%8C%20%EF%BC%8844%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%8F%AF%E4%BB%A5%E8%AE%BE%E7%BD%AE%E5%9C%A8%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E5%90%AF%E5%8A%A8%E6%97%B6%E8%87%AA%E5%8A%A8%E8%BF%90%E8%A1%8CDHCP%E6%9C%8D%E5%8A%A1%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（40）</span>
                <span class="choice false">A．为客户自动进行注册</span>
                <span class="choice true">B．为客户机自动配置IP地址
                </span>
                <span class="choice false">C．使DNS名字自动登录</span>
                <span class="choice false">D．为WINS提供路由</span>
            </p>
            <p class="choice header_choice false"><span class="number">（41） </span>A．/etc/networks/dhcpd</p>
            <p class="choice false">B．/usr/sbin/dhcp
            </p>
            <p class="choice false">C．/etc/networks/dhcp</p>
            <p class="choice true">D．/usr/sbin/dhcpd</p>
            <p class="choice header_choice true"><span class="number">（42） </span>A．/etc/dhcpd.conf</p>
            <p class="choice false">B．/etc/dhcp.conf
            </p>
            <p class="choice false">C．/networks/dhcpd.conf</p>
            <p class="choice false">D．/networks/dhcp.conf</p>
            <p class="choice header_choice true"><span class="number">（43） </span>A．touch/var/state/dhcp/dhcpd.leases
            </p>
            <p class="choice false">B．address/var/state/dhcp/dhcpd.leases
            </p>
            <p class="choice false">C．nat/var/state/dhcp/dhcp.leases
            </p>
            <p class="choice false">D．resolve/var/state/dhcp/dhcp.leases</p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice false">A．ipconfig</span>
                <span class="choice false">B．touch</span>
                <span class="choice false">C．reboot</span>
                <span class="choice true">D．chkconfig</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    DHCP（Dynamic Host Configuration
                    Protocol，动态主机配置协议）主要用于为网络上的主机动态分配IP地址并设置相关网络参数，从而减少网络管理员手工分配IP地址的工作量，并在一定程度上减缓IP紧缺的问题。<br />
                    /usr/sbin/dhcpd
                    是Linux上执行DHCP服务的程序，/etc/dhcpd.conf是dhcpd最关键的配置文件。通过设置/etc/dhcpd.conf文件，可以设置租用时间限制、子网相关信息以及域名等，将主机的MAC地址和IP地址绑定在一起。<br />
                    用touch /var/state/dhcp/dhcp.leases命令可以产生一个DHCP的租用文件。<br />
                    chkconfig 有五项功能：添加服务，删除服务，列表服务，改变启动信息以及检查特定服务的启动状态。通过运行chkconfig命令可以设置在操作系统启动时自动运行DHCP服务。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在分布式环境中实现身份认证可以有多种方案，以下选项中最不安全的身份认证方案是 （45） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%88%86%E5%B8%83%E5%BC%8F%E7%8E%AF%E5%A2%83%E4%B8%AD%E5%AE%9E%E7%8E%B0%E8%BA%AB%E4%BB%BD%E8%AE%A4%E8%AF%81%E5%8F%AF%E4%BB%A5%E6%9C%89%E5%A4%9A%E7%A7%8D%E6%96%B9%E6%A1%88%EF%BC%8C%E4%BB%A5%E4%B8%8B%E9%80%89%E9%A1%B9%E4%B8%AD%E6%9C%80%E4%B8%8D%E5%AE%89%E5%85%A8%E7%9A%84%E8%BA%AB%E4%BB%BD%E8%AE%A4%E8%AF%81%E6%96%B9%E6%A1%88%E6%98%AF%20%EF%BC%8845%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（45） </span>A．用户发送口令，由通信对方指定共享密钥
            </p>
            <p class="choice false">B．用户发送口令，由智能卡产生解密密钥
            </p>
            <p class="choice false">C．用户从KDC获取会话密钥
            </p>
            <p class="choice false">D．用户从CA获取数字证书</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    口令明码发送，当然做不安全。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">数字证书采用公钥体制进行加密和解密。每个用户有一个私钥，用它进行 （46） ；同时每个用户还有一个公钥，用于 （47） 。X.509标准规定，数字证书由 （48）
                发放，将其放入公共目录中，以供用户访问。X.509数字证书中的签名字段是指 （49） 。如果用户UA从A地的发证机构取得了证书，用户UB从B地的发证机构取得了证书，那么 （50） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E9%87%87%E7%94%A8%E5%85%AC%E9%92%A5%E4%BD%93%E5%88%B6%E8%BF%9B%E8%A1%8C%E5%8A%A0%E5%AF%86%E5%92%8C%E8%A7%A3%E5%AF%86%E3%80%82%E6%AF%8F%E4%B8%AA%E7%94%A8%E6%88%B7%E6%9C%89%E4%B8%80%E4%B8%AA%E7%A7%81%E9%92%A5%EF%BC%8C%E7%94%A8%E5%AE%83%E8%BF%9B%E8%A1%8C%20%EF%BC%8846%EF%BC%89%20%EF%BC%9B%E5%90%8C%E6%97%B6%E6%AF%8F%E4%B8%AA%E7%94%A8%E6%88%B7%E8%BF%98%E6%9C%89%E4%B8%80%E4%B8%AA%E5%85%AC%E9%92%A5%EF%BC%8C%E7%94%A8%E4%BA%8E%20%EF%BC%8847%EF%BC%89%20%E3%80%82X.509%E6%A0%87%E5%87%86%E8%A7%84%E5%AE%9A%EF%BC%8C%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E7%94%B1%20%EF%BC%8848%EF%BC%89%20%E5%8F%91%E6%94%BE%EF%BC%8C%E5%B0%86%E5%85%B6%E6%94%BE%E5%85%A5%E5%85%AC%E5%85%B1%E7%9B%AE%E5%BD%95%E4%B8%AD%EF%BC%8C%E4%BB%A5%E4%BE%9B%E7%94%A8%E6%88%B7%E8%AE%BF%E9%97%AE%E3%80%82X.509%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E4%B8%AD%E7%9A%84%E7%AD%BE%E5%90%8D%E5%AD%97%E6%AE%B5%E6%98%AF%E6%8C%87%20%EF%BC%8849%EF%BC%89%20%E3%80%82%E5%A6%82%E6%9E%9C%E7%94%A8%E6%88%B7UA%E4%BB%8EA%E5%9C%B0%E7%9A%84%E5%8F%91%E8%AF%81%E6%9C%BA%E6%9E%84%E5%8F%96%E5%BE%97%E4%BA%86%E8%AF%81%E4%B9%A6%EF%BC%8C%E7%94%A8%E6%88%B7UB%E4%BB%8EB%E5%9C%B0%E7%9A%84%E5%8F%91%E8%AF%81%E6%9C%BA%E6%9E%84%E5%8F%96%E5%BE%97%E4%BA%86%E8%AF%81%E4%B9%A6%EF%BC%8C%E9%82%A3%E4%B9%88%20%EF%BC%8850%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（46）</span>
                <span class="choice false">A．解密和验证</span>
                <span class="choice true">B．解密和签名</span>
                <span class="choice false">C．加密和签名</span>
                <span class="choice false">D．加密和验证</span>
            </p>
            <p class="one-line-choice"><span class="number">（47）</span>
                <span class="choice false">A．解密和验证</span>
                <span class="choice false">B．解密和签名</span>
                <span class="choice false">C．加密和签名</span>
                <span class="choice true">D．加密和验证</span>
            </p>
            <p class="one-line-choice"><span class="number">（48）</span>
                <span class="choice false">A．密钥分发中心</span>
                <span class="choice true">B．证书授权中心</span>
                <span class="choice false">C．国际电信联盟</span>
                <span class="choice false">D．当地政府</span>
            </p>
            <p class="one-line-choice"><span class="number">（49）</span>
                <span class="choice false">A．用户对自己证书的签名</span>
                <span class="choice false">B．用户对发送报文的签名
                </span>
                <span class="choice true">C．发证机构对用户证书的签名</span>
                <span class="choice false">D．发证机构对发送报文的签名</span>
            </p>
            <p class="choice header_choice false"><span class="number">（50） </span>A．UA可使用自己的证书直接与UB进行安全通信
            </p>
            <p class="choice true">B．UA通过一个证书链可以与UB进行安全通信
            </p>
            <p class="choice false">C．UA和UB还须向对方的发证机构申请证书，才能进行安全通信
            </p>
            <p class="choice false">D．UA和UB都要向国家发证机构申请证书，才能进行安全通信</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    私钥用于解密和签名，公钥用于加密和验证。<br />
                    数字证书由CA发送。<br />
                    X.509数字证书中的签名字段是指发证机构对用户证书的签名。<br />
                    来自不同CA的用户如果需要进行验证的话，需要通过CA之间的证书链进行。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面有关NTFS文件系统优点的描述中， （51） 是不正确的。要把FAT32分区转换为NTFS分区，并且保留原分区中的所有文件，不可行的方法是 （52） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E6%9C%89%E5%85%B3NTFS%E6%96%87%E4%BB%B6%E7%B3%BB%E7%BB%9F%E4%BC%98%E7%82%B9%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%20%EF%BC%8851%EF%BC%89%20%E6%98%AF%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E3%80%82%E8%A6%81%E6%8A%8AFAT32%E5%88%86%E5%8C%BA%E8%BD%AC%E6%8D%A2%E4%B8%BANTFS%E5%88%86%E5%8C%BA%EF%BC%8C%E5%B9%B6%E4%B8%94%E4%BF%9D%E7%95%99%E5%8E%9F%E5%88%86%E5%8C%BA%E4%B8%AD%E7%9A%84%E6%89%80%E6%9C%89%E6%96%87%E4%BB%B6%EF%BC%8C%E4%B8%8D%E5%8F%AF%E8%A1%8C%E7%9A%84%E6%96%B9%E6%B3%95%E6%98%AF%20%EF%BC%8852%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（51） </span>A．NTFS可自动地修复磁盘错误</p>
            <p class="choice false">B．NTFS可防止未授权用户访问文件
            </p>
            <p class="choice true">C．NTFS没有磁盘空间限制</p>
            <p class="choice false">D．NTFS支持文件压缩功能</p>
            <p class="choice header_choice false"><span class="number">（52） </span>A．利用磁盘分区管理软件同时实现FAT32到NTFS的无损转换和文件拷贝
            </p>
            <p class="choice true">B．先把FAT32分区格式化为NTFS分区，再把盘上的文件转换为NTFS文件
            </p>
            <p class="choice false">C．先把分区中的文件拷贝出来，然后把分区格式化为NTFS，再把文件拷回去
            </p>
            <p class="choice false">D．利用分区转换工具“Convert.exe”将FAT32转换为NTFS并实现文件拷贝</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows2000操作系统中，配置IP地址的命令是 （53） 。若用ping命令来测试本机是否安装了TCP/IP协议，则正确的命令是 （54）
                。如果要列出本机当前建立的连接，可以使用的命令是 （55） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows2000%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E9%85%8D%E7%BD%AEIP%E5%9C%B0%E5%9D%80%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82%E8%8B%A5%E7%94%A8ping%E5%91%BD%E4%BB%A4%E6%9D%A5%E6%B5%8B%E8%AF%95%E6%9C%AC%E6%9C%BA%E6%98%AF%E5%90%A6%E5%AE%89%E8%A3%85%E4%BA%86TCP/IP%E5%8D%8F%E8%AE%AE%EF%BC%8C%E5%88%99%E6%AD%A3%E7%A1%AE%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8854%EF%BC%89%20%E3%80%82%E5%A6%82%E6%9E%9C%E8%A6%81%E5%88%97%E5%87%BA%E6%9C%AC%E6%9C%BA%E5%BD%93%E5%89%8D%E5%BB%BA%E7%AB%8B%E7%9A%84%E8%BF%9E%E6%8E%A5%EF%BC%8C%E5%8F%AF%E4%BB%A5%E4%BD%BF%E7%94%A8%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8855%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（53）</span>
                <span class="choice false">A．winipcfg</span>
                <span class="choice true">B．ipconfig</span>
                <span class="choice false">C．ipcfg</span>
                <span class="choice false">D．winipconfig</span>
            </p>
            <p class="choice header_choice false"><span class="number">（54） </span>A．ping127.0.0.0</p>
            <p class="choice true">B．ping127.0.0.1</p>
            <p class="choice false">C．ping127.0.1.1</p>
            <p class="choice false">D．ping127.1.1.1</p>
            <p class="one-line-choice"><span class="number">（55）</span>
                <span class="choice false">A．netstat–s</span>
                <span class="choice false">B．netstat–o</span>
                <span class="choice true">C．netstat-a</span>
                <span class="choice false">D．netstat-r</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以太网交换机根据 （56） 转发数据包。访问交换机的方式有多种，配置一台新的交换机时可以 （57）
                进行访问。在键入交换机命令时可使用缩写形式，在Switch#模式下，如果键入con，则表示 （58） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91%E4%BA%A4%E6%8D%A2%E6%9C%BA%E6%A0%B9%E6%8D%AE%20%EF%BC%8856%EF%BC%89%20%E8%BD%AC%E5%8F%91%E6%95%B0%E6%8D%AE%E5%8C%85%E3%80%82%E8%AE%BF%E9%97%AE%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%9A%84%E6%96%B9%E5%BC%8F%E6%9C%89%E5%A4%9A%E7%A7%8D%EF%BC%8C%E9%85%8D%E7%BD%AE%E4%B8%80%E5%8F%B0%E6%96%B0%E7%9A%84%E4%BA%A4%E6%8D%A2%E6%9C%BA%E6%97%B6%E5%8F%AF%E4%BB%A5%20%EF%BC%8857%EF%BC%89%20%E8%BF%9B%E8%A1%8C%E8%AE%BF%E9%97%AE%E3%80%82%E5%9C%A8%E9%94%AE%E5%85%A5%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%91%BD%E4%BB%A4%E6%97%B6%E5%8F%AF%E4%BD%BF%E7%94%A8%E7%BC%A9%E5%86%99%E5%BD%A2%E5%BC%8F%EF%BC%8C%E5%9C%A8Switch%23%E6%A8%A1%E5%BC%8F%E4%B8%8B%EF%BC%8C%E5%A6%82%E6%9E%9C%E9%94%AE%E5%85%A5con%EF%BC%8C%E5%88%99%E8%A1%A8%E7%A4%BA%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（56）</span>
                <span class="choice false">A．IP地址</span>
                <span class="choice true">B．MAC地址</span>
                <span class="choice false">C．LLC地址</span>
                <span class="choice false">D．PORT地址</span>
            </p>
            <p class="choice header_choice true"><span class="number">（57） </span>A．通过微机的串口连接交换机的控制台端口
            </p>
            <p class="choice false">B．通过Telnet程序远程访问交换机
            </p>
            <p class="choice false">C．通过浏览器访问指定IP地址的交换机
            </p>
            <p class="choice false">D．通过运行SNMP协议的网管软件访问交换机</p>
            <p class="one-line-choice"><span class="number">（58）</span>
                <span class="choice false">A．connect</span>
                <span class="choice false">B．control</span>
                <span class="choice true">C．configure</span>
                <span class="choice false">D．confirm</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。<br />
                    Con是configure的缩写。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在缺省配置的情况下，交换机的所有端口 （59） 。连接在不同交换机上的，属于同一VLAN的数据帧必须通过 （60） 传输。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E7%BC%BA%E7%9C%81%E9%85%8D%E7%BD%AE%E7%9A%84%E6%83%85%E5%86%B5%E4%B8%8B%EF%BC%8C%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%9A%84%E6%89%80%E6%9C%89%E7%AB%AF%E5%8F%A3%20%EF%BC%8859%EF%BC%89%20%E3%80%82%E8%BF%9E%E6%8E%A5%E5%9C%A8%E4%B8%8D%E5%90%8C%E4%BA%A4%E6%8D%A2%E6%9C%BA%E4%B8%8A%E7%9A%84%EF%BC%8C%E5%B1%9E%E4%BA%8E%E5%90%8C%E4%B8%80VLAN%E7%9A%84%E6%95%B0%E6%8D%AE%E5%B8%A7%E5%BF%85%E9%A1%BB%E9%80%9A%E8%BF%87%20%EF%BC%8860%EF%BC%89%20%E4%BC%A0%E8%BE%93%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（59）</span>
                <span class="choice false">A．处于直通状态</span>
                <span class="choice true">B．属于同一VLAN
                </span>
                <span class="choice false">C．属于不同VLAN</span>
                <span class="choice false">D．地址都相同</span>
            </p>
            <p class="one-line-choice"><span class="number">（60）</span>
                <span class="choice false">A．服务器</span>
                <span class="choice false">B．路由器</span>
                <span class="choice false">C．Backbone链路</span>
                <span class="choice true">D．Trunk链路</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在缺省配置的情况下，交换机的所有端口属于VLAN1，属于同一VLAN的数据帧必须通过Trunk链路传输。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以太网100BASE-TX标准规定的传输介质是 （61） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91100BASE-TX%E6%A0%87%E5%87%86%E8%A7%84%E5%AE%9A%E7%9A%84%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E6%98%AF%20%EF%BC%8861%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（61）</span>
                <span class="choice false">A．3类UTP</span>
                <span class="choice true">B．5类UTP</span>
                <span class="choice false">C．单模光纤</span>
                <span class="choice false">D．多模光纤</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    100BaseTx中的“T”表明100BaseTx以太网所使用的传输介质是双绞线（Twisted
                    Pair），所以可以排除选项C和D。100BaseTx采用4B/5B编码法，为达到100Mbps的传输速率，要求介质带宽达到125MHz。而3类 UTP的带宽只有20MHz，所以A也是不正确的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">许多网络通信需要进行组播，以下选项中不采用组播协议的应用是 （62） 。在IPv4中把（63）类地址作为组播地址。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%B8%E5%A4%9A%E7%BD%91%E7%BB%9C%E9%80%9A%E4%BF%A1%E9%9C%80%E8%A6%81%E8%BF%9B%E8%A1%8C%E7%BB%84%E6%92%AD%EF%BC%8C%E4%BB%A5%E4%B8%8B%E9%80%89%E9%A1%B9%E4%B8%AD%E4%B8%8D%E9%87%87%E7%94%A8%E7%BB%84%E6%92%AD%E5%8D%8F%E8%AE%AE%E7%9A%84%E5%BA%94%E7%94%A8%E6%98%AF%20%EF%BC%8862%EF%BC%89%20%E3%80%82%E5%9C%A8IPv4%E4%B8%AD%E6%8A%8A%EF%BC%8863%EF%BC%89%E7%B1%BB%E5%9C%B0%E5%9D%80%E4%BD%9C%E4%B8%BA%E7%BB%84%E6%92%AD%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（62）</span>
                <span class="choice false">A．VOD</span>
                <span class="choice false">B．Netmeeting</span>
                <span class="choice false">C．CSCW</span>
                <span class="choice true">D．FTP</span>
            </p>
            <p class="one-line-choice"><span class="number">（63）</span>
                <span class="choice false">A．A</span>
                <span class="choice false">B．B</span>
                <span class="choice true">C．D</span>
                <span class="choice false">D．E</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">将双绞线制作成交叉线（一端按EIA/TIA 568A线序，另一端按EIA/TIA 568B线序），该双绞线连接的两个设备可为 （64） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%B0%86%E5%8F%8C%E7%BB%9E%E7%BA%BF%E5%88%B6%E4%BD%9C%E6%88%90%E4%BA%A4%E5%8F%89%E7%BA%BF%EF%BC%88%E4%B8%80%E7%AB%AF%E6%8C%89EIA/TIA%20568A%E7%BA%BF%E5%BA%8F%EF%BC%8C%E5%8F%A6%E4%B8%80%E7%AB%AF%E6%8C%89EIA/TIA%20568B%E7%BA%BF%E5%BA%8F%EF%BC%89%EF%BC%8C%E8%AF%A5%E5%8F%8C%E7%BB%9E%E7%BA%BF%E8%BF%9E%E6%8E%A5%E7%9A%84%E4%B8%A4%E4%B8%AA%E8%AE%BE%E5%A4%87%E5%8F%AF%E4%B8%BA%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（64） </span>A．网卡与网卡</p>
            <p class="choice false">B．网卡与交换机
            </p>
            <p class="choice false">C．网卡与集线器</p>
            <p class="choice false">D．交换机的以太口与下一级交换机的UPLINK口</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    交叉线用于连接相同的设备。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下不属于中间件技术的是 （65） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E4%B8%8D%E5%B1%9E%E4%BA%8E%E4%B8%AD%E9%97%B4%E4%BB%B6%E6%8A%80%E6%9C%AF%E7%9A%84%E6%98%AF%20%EF%BC%8865%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（65）</span>
                <span class="choice false">A．JavaRMI</span>
                <span class="choice false">B．CORBA</span>
                <span class="choice false">C．DCOM</span>
                <span class="choice true">D．JavaApplet</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Java RMI（Remote Method Invocation，远程过程调用）、CORBA（Common Object Request Broker
                    Architecture，公共对象请求代理体系结构）和DCOM（Distributed Components Object
                    Model，分布式组件对象模型）都属于分布式对象技术，是分布式对象中间件的基础通信技术。而Java Applet只是浏览器客户端的动态网页技术，与中间件无关。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Networks can be interconnected by different devices.In the physical layer, networks can
                be connected by （66） or hubs, which just move the bits from one network to an identical network. One
                layer up we find bridges and switches, which operate at data link layer. They can accept （67） , examine
                the MAC address, and forward the frames to a different network while doing minor protocol translation
                in the process. In the network layer, we have routers that can connect two networks, If two networks
                have （68） network layer, the router may be able to translate between the packer formats. In the
                transport layer we find transport gateway, which can interface between two transport
                connections.Finally, in the application layer, application gateways translate message （69） . As an
                example, gateways between Internet e-mail and X.400 e-mail must （70） the e-mail message and change
                various header fields.&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Networks%20can%20be%20interconnected%20by%20different%20devices.In%20the%20physical%20layer%2C%20%20networks%20can%20be%20connected%20by%20%20%EF%BC%8866%EF%BC%89%20%20or%20hubs%2C%20which%20just%20move%20the%20bits%20from%20one%20network%20to%20an%20identical%20network.%20One%20layer%20up%20we%20find%20bridges%20and%20switches%2C%20which%20operate%20at%20data%20link%20layer.%20They%20can%20accept%20%20%EF%BC%8867%EF%BC%89%20%2C%20examine%20the%20MAC%20address%2C%20and%20forward%20the%20frames%20to%20a%20different%20network%20while%20doing%20minor%20protocol%20translation%20in%20the%20process.%20In%20the%20network%20layer%2C%20we%20have%20routers%20that%20can%20connect%20two%20networks%2C%20If%20two%20networks%20have%20%20%EF%BC%8868%EF%BC%89%20%20network%20layer%2C%20the%20router%20may%20be%20able%20to%20translate%20between%20the%20packer%20formats.%20In%20the%20transport%20layer%20we%20find%20transport%20gateway%2C%20which%20can%20interface%20between%20two%20transport%20connections.Finally%2C%20in%20the%20application%20layer%2C%20application%20gateways%20translate%20message%20%20%EF%BC%8869%EF%BC%89%20.%20As%20an%20example%2C%20gateways%20between%20Internet%20e-mail%20and%20X.400%20e-mail%20must%20%20%EF%BC%8870%EF%BC%89%20%20the%20e-mail%20message%20and%20change%20various%20header%20fields.">百度</a></p>
            <p class="one-line-choice"><span class="number">（66）</span>
                <span class="choice true">A．repeaters</span>
                <span class="choice false">B．relays</span>
                <span class="choice false">C．connectors</span>
                <span class="choice false">D．modems</span>
            </p>
            <p class="one-line-choice"><span class="number">（67）</span>
                <span class="choice true">A．frames</span>
                <span class="choice false">B．packets</span>
                <span class="choice false">C．packages</span>
                <span class="choice false">D．cells</span>
            </p>
            <p class="one-line-choice"><span class="number">（68）</span>
                <span class="choice false">A．special</span>
                <span class="choice false">B．dependent</span>
                <span class="choice false">C．similar</span>
                <span class="choice true">D．dissimilar</span>
            </p>
            <p class="one-line-choice"><span class="number">（69）</span>
                <span class="choice false">A．syntax</span>
                <span class="choice true">B．semantics</span>
                <span class="choice false">C．language</span>
                <span class="choice false">D．format</span>
            </p>
            <p class="one-line-choice"><span class="number">（70）</span>
                <span class="choice false">A．analyze</span>
                <span class="choice true">B．parse</span>
                <span class="choice false">C．delete</span>
                <span class="choice false">D．create</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    学好英语，一切都很简单。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">The purpose of the requirements definition phase is to produce a clear, complete,
                consistent, and testable （71） of the technical requirements for the software product.<br />
                During the requirements definition phase, the requirements definition team uses an iterative process to
                expand a broad statement of the system requirements into a complete and detailed specification of each
                function that the software must perform and each （72） that it must meet.The starting point is usually a
                set of high-level requirements from the （73） that describe the project or problem.<br />
                In either case, the requirements definition team formulates an overall concept for the system and then
                defines （74） showing how the system will be operated, publishes the system and operations concept
                document, and conducts a system concept review（SCR）.<br />
                Following the SCR, the team derives （75） requirements for the system from the high level requirements
                and the system and operations concept. Using structured or object-oriented analysis, the team specifies
                the software functions and algorithms needed to satisfy each detailed requirement.&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=The%20purpose%20of%20the%20requirements%20definition%20phase%20is%20to%20produce%20a%20clear%2C%20complete%2C%20consistent%2C%20and%20testable%20%20%EF%BC%8871%EF%BC%89%20%20of%20the%20technical%20requirements%20for%20the%20software%20product.%3Cbr/%3E%0ADuring%20the%20requirements%20definition%20phase%2C%20the%20requirements%20definition%20team%20uses%20an%20iterative%20process%20to%20expand%20a%20broad%20statement%20of%20the%20system%20requirements%20into%20a%20complete%20and%20detailed%20specification%20of%20each%20function%20that%20the%20software%20must%20perform%20and%20each%20%20%EF%BC%8872%EF%BC%89%20%20that%20it%20must%20meet.The%20starting%20point%20is%20usually%20a%20set%20of%20high-level%20requirements%20from%20the%20%20%EF%BC%8873%EF%BC%89%20%20that%20describe%20the%20project%20or%20problem.%3Cbr/%3E%0AIn%20either%20case%2C%20the%20requirements%20definition%20team%20formulates%20an%20overall%20concept%20for%20the%20system%20and%20then%20defines%20%20%EF%BC%8874%EF%BC%89%20%20showing%20how%20the%20system%20will%20be%20operated%2C%20publishes%20the%20system%20and%20operations%20concept%20document%2C%20and%20conducts%20a%20system%20concept%20review%EF%BC%88SCR%EF%BC%89.%3Cbr/%3E%0AFollowing%20the%20SCR%2C%20the%20team%20derives%20%20%EF%BC%8875%EF%BC%89%20%20requirements%20for%20the%20system%20from%20the%20high%20level%20requirements%20and%20the%20system%20and%20operations%20concept.%20Using%20structured%20or%20object-oriented%20analysis%2C%20the%20team%20specifies%20the%20software%20functions%20and%20algorithms%20needed%20to%20satisfy%20each%20detailed%20requirement.">百度</a></p>
            <p class="one-line-choice"><span class="number">（72）</span>
                <span class="choice false">A．criterion</span>
                <span class="choice false">B．standard</span>
                <span class="choice true">C．model</span>
                <span class="choice false">D．system</span>
            </p>
            <p class="one-line-choice"><span class="number">（73）</span>
                <span class="choice true">A．producer</span>
                <span class="choice false">B．customer</span>
                <span class="choice false">C．programmer</span>
                <span class="choice false">D．analyser</span>
            </p>
            <p class="one-line-choice"><span class="number">（74）</span>
                <span class="choice false">A．rules</span>
                <span class="choice true">B．principles</span>
                <span class="choice false">C．scenarios</span>
                <span class="choice false">D．scenes</span>
            </p>
            <p class="one-line-choice"><span class="number">（75）</span>
                <span class="choice false">A．detailed</span>
                <span class="choice false">B．outlined</span>
                <span class="choice true">C．total</span>
                <span class="choice false">D．complete</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    学好英语，一切都很简单。</p>
            </div>
        </div>
    </div>

    <!-- <?php
    require (relative(__FILE__).'template/footer.php');
    ?> -->

</body>

</html>

<script>
document.getElementById("i1").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCACqAUADASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iii\
gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKA\
CiiigDlG8S3cIlSTyTJFHG3EJAd5HKRqPn43MpGT0OPUU9/EF5Ho2kXDmES3gbzGCgYwjN8u5wAe\
O5q4PDdnPpnk3ttbzztG6yNghWLjB564xge2B6VBH4fuo7fRU+1E/YEYSxo+xXJQrw2Nw5PXI47U\
AS6Vrctzfpa3M0DNKJmiSJCWCJIQC2CcZUoTkDlse1b1YVjpV/Y6y94ZLeeG4UK0bMwa2AyfkJzv\
yTls7STznoo3aACisfxH4q0TwlZRXmuX62kEsnlIxRnLNgnGFBPQdelX9P1Gy1WyjvdPuobq2kGU\
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\
27CtSigDGg8M2UVyZWeeRfMEqo0jABxLJKCcEbgGk4BzjaOp5q9a6fFawPGhJLTSTb2ALBnZmOOO\
27A9hVuigDMtNEgtLKK1W4umSOSSTIl8sszuXOdm0YyxwMY9qLXRktnjP2qd1juZrlUIXaGkLkjg\
ZwPMPetOigAooooA/9lsRgAARABkAAAAAAAAAAAAAAAAAAAAAAAAAAAAlSEJF+gD6AMAAAAAAAAA\
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8ABPDAAAAAsgQK8AgAAAAAAAAAAAoAALMAC/CCAAAA\
fwCAAIAAhQAAAAAABEEDAAAABYE0AAAABgECAAAAfwEoADgAvwEAABAAzQEAAAAA/wEAAAgAgIMM\
AAAAvwMIAAgANQAwADYAOQBkAGMAYgA0AGcANgAzAGYAYQAxADEAYwA4AGYAZQAxAGEAJgAwADAA\
MAAAAP5WR3IgADEANwAAADMAIvESAAAAkAMBAAAAkgMBAAAAvwMAgACAAAAQ8AQAAAAAAACAUgAH\
8FhFAAAFBXZPmOu0qPc+qQp1QMI4UR7/ADRFAAABAAAAAAAAAAAAAACgRh3wLEUAAHZPmOu0qPc+\
qQp1QMI4UR7//9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkS\
Ew8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgy\
IRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAAR\
CAGJAj0DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgED\
AwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRol\
JicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWW\
l5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3\
+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3\
AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5\
OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaan\
qKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIR\
AxEAPwD3+iiigAooooAKKKKACiiigAooooAKKKp6rqMWk6TeajP/AKq1geZ/ooJ/pQBLFe2k1xJb\
xXMMk0f341kBZfqOoqevEdN8HzXljHfxr5GqoFlluYG8q4NxIDJIQ/fG8LhvTGa6HTPHeraExtvE\
1s95bR8Nf20WJY/+usQ/9CXj2NOwHptFVNO1Oy1ayjvNPuorm2k+7JE24H/A+1W6QBRRRQAUUUUA\
FFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAU\
UUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRR\
RQAUUUUAFFFFABXG/Ee4R9HstHZsDU7tI5faBMyyn/vlCP8AgVdg7KiMzMFVRkknAAryzXtWtfEf\
i3zLWY3FhZ2v2aKWMErLJJIPPMZ6OVjQA7c/ePvQB1mhwsNMhaRcSzZncY6M53Y/DIH4Vdu9Jt75\
AJ48sv3XU4dfoev4dKbYTxXMSzQSJJG3RkOR9P8A61aysvl+9aPTQhHmt/4Sv9BvX1PQLyS0nPMj\
wJlJPaWHo31Xn2HWtbRviPEHjtPEtummzucR3cbbrSb6P/AfZvzrprnqa8w8ThtSvLmxt8K19cJY\
rgdS58ssfcL55z/sj0qWtLlJnsisGAKkEEZBHelqOCCO2gjgiULHGoRVHYAYAqSpGFFFFABRRRQA\
UUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABR\
RRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFF\
FABXPar4ttbG9OmWMEuqauRkWVrglPQyMfljHuxz6A10NeW6dLceFfEN/pV7bkG/vp7yEE/JeK7l\
gY37SqDgoeoGR60AbL6Lf69Or+J51ukz/wAgW0Zkt0x3cnmY/XC+grYNtDParZyW8dzAqbRbKgXy\
8dOMdvw9qktpYb23WS2k86BXOVUbZEbuDnkH2ODUwiDquzMsSZG2IbJFz680Ac+2j3dnObnR7h5X\
25ePOXHsSeH+j4b0YVYtPEsbMYr1Ps8qHDMQQoP+0Dyh+vHoTWpwyru+bCEAQHBH+9zUN5ZWt+g+\
1Iruqfu5bbCtH/wLPH0PB9KadgsF/epbWU9y2CIozJj1wMj864nwhaHUPGdmH+YafDJeSHsZGzEn\
8p2/Gr2s6LqdhYyRWcwubMspZYscc5AK5wvOMleMZ+Udaj8BW4Wzv9TV932q5McMinrFCPLUj2JD\
n/gVNu4kj02iq9lM01uGb7wOCfWrFSMKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAoo\
ooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiii\
gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACqGsaNYa9pslhqNus0DkHGcMjDoykcqw\
7Ecir9FAHm93Zaz4VmM1y11qFigwmqWiA3UK+k8YGJVH94DPqB1rXsPEsN7bJdPsuoDwt/prbh/w\
JB8y/QZ/CuxxXNap4H0m/vGv7YTaZqDctd2D+Uzn/bX7r/8AAgaALFreWt6ubW7SZVBybZj5n/Ax\
nI/z0rG1nxdp2jxP++iMinY3lSFYw3ozc5b/AGVy1ZGr+CfF10YoIdT0qcbiDfvC0M6KVZTlVyG6\
9AVzW3ovw/tNJlS6kkF5qCjAup1H7sekaD5Yx7KPqTQBzscPiXxMpM8r6TpznIcxBZ2HpHHyIh/t\
PlvYV1ml6ZDYWNtptjEVgt4xHGuc4A9T/WtdNLGcySE+wFXYoY4VwigevvQA22gFvCEzk9SfepqK\
KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAoooo\
AKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigA\
ooooAKKKKACiiigAooooAKKDwM1zMnxD8IxSMja9aEqxUlGLDI68gYNAHTUViWfjHw3fsEtdd06R\
z0T7Sob/AL5JzW0DkAjkHvQAtFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFF\
ABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUA\
FFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAFPV/wDkC32Ov2eT/wBBNeWe\
FmuLXQrOW1iaGKO1tw0kC7wcxK37yLuOfvLzXqer/wDIFv8A/r3k/wDQTXC/D4Z0KEf9O9r/AOk8\
dNK4mXhJpOqQourafYssvCTPGssEp9nI4Ps2D9aVfB8FgfM0G9vNFlHIW3kLwn6wvlSPpg+9atxo\
kbtJNbMLeaQfvCFDRy+zoeG+vB96yDqE2hkKyeUoPFuSXhkHfyn6ocZO1uOOPWiwXLUXii/0R0h8\
VQRJblgiatag/ZyT081TzET6nK+4rrlYOAVIIIyCOhrMupLVVkhuFDRsCrK6blYHqCO4rm9OuE8I\
6lb2MU4l8OX0oitiWybCc9Ijnny2PC5+6fl6EYQzuKKK";
</script>