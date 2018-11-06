<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2008年上半年 网络工程师 上午试卷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
    require ('../template/source.php');
    ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="../js/global.js"></script>
</head>

<body>
    <!-- <?php
    require ('../template/header.php');
    ?> -->

    <div class="container">
        <h1 style="text-align:center">2008年上半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">内存采用段式存储管理有许多优点，但 （1） 不是其优点。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%86%85%E5%AD%98%E9%87%87%E7%94%A8%E6%AE%B5%E5%BC%8F%E5%AD%98%E5%82%A8%E7%AE%A1%E7%90%86%E6%9C%89%E8%AE%B8%E5%A4%9A%E4%BC%98%E7%82%B9%EF%BC%8C%E4%BD%86%20%EF%BC%881%EF%BC%89%20%E4%B8%8D%E6%98%AF%E5%85%B6%E4%BC%98%E7%82%B9%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（1） </span>A．分段是信息逻辑单位，用户不可见</p>
            <p class="choice false">&emsp;&emsp;B．各段程序的修改互不影响
            </p>
            <p class="choice true">&emsp;&emsp;C．地址变换速度快、内存碎片少</p>
            <p class="choice false">&emsp;&emsp;D．便于多道程序共享主存的某些段</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    虚拟存储器可以分为两类：页式和段式。页式虚拟存储器把空间划分为大小相同的块，称为页面。而段式虚拟存储器则把空间划分为可变长的块，称为段。页面是对空间的机械划分，而段则往往是按程序的逻辑意义进行划分。<br />
                    页式存储管理的优点是页表对程序员来说是透明的，地址变换快，调入操作简单；缺点是各页不是程序的独立模块，不便于实现程序和数据的保护。<br />
                    段式存储管理的优点是消除了内存零头，易于实现存储保护，便于程序动态装配；缺点是调入操作复杂，地址变换速度慢于页式存储管理。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">现有四级指令流水线，分别完成取指、取数、运算、传送结果四步操作。若完成上述操作的时间依次为9ns、10ns、6ns、8ns。则流水线的操作周期应设计为 （2）
                ns。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%8E%B0%E6%9C%89%E5%9B%9B%E7%BA%A7%E6%8C%87%E4%BB%A4%E6%B5%81%E6%B0%B4%E7%BA%BF%EF%BC%8C%E5%88%86%E5%88%AB%E5%AE%8C%E6%88%90%E5%8F%96%E6%8C%87%E3%80%81%E5%8F%96%E6%95%B0%E3%80%81%E8%BF%90%E7%AE%97%E3%80%81%E4%BC%A0%E9%80%81%E7%BB%93%E6%9E%9C%E5%9B%9B%E6%AD%A5%E6%93%8D%E4%BD%9C%E3%80%82%E8%8B%A5%E5%AE%8C%E6%88%90%E4%B8%8A%E8%BF%B0%E6%93%8D%E4%BD%9C%E7%9A%84%E6%97%B6%E9%97%B4%E4%BE%9D%E6%AC%A1%E4%B8%BA9ns%E3%80%8110ns%E3%80%816ns%E3%80%818ns%E3%80%82%E5%88%99%E6%B5%81%E6%B0%B4%E7%BA%BF%E7%9A%84%E6%93%8D%E4%BD%9C%E5%91%A8%E6%9C%9F%E5%BA%94%E8%AE%BE%E8%AE%A1%E4%B8%BA%20%EF%BC%882%EF%BC%89%20ns%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（2）</span>
                <span class="choice false">A．6</span>
                <span class="choice false">B．8</span>
                <span class="choice false">C．9</span>
                <span class="choice true">D．10</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    取最大的那个微指令时间作为流水线操作周期。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">内存按字节编址，地址从90000H到CFFFFH，若用存储容量为16K×8bit器芯片构成该内存，至少需要的存储 （3） 片。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%86%85%E5%AD%98%E6%8C%89%E5%AD%97%E8%8A%82%E7%BC%96%E5%9D%80%EF%BC%8C%E5%9C%B0%E5%9D%80%E4%BB%8E90000H%E5%88%B0CFFFFH%EF%BC%8C%E8%8B%A5%E7%94%A8%E5%AD%98%E5%82%A8%E5%AE%B9%E9%87%8F%E4%B8%BA16K%C3%978bit%E5%99%A8%E8%8A%AF%E7%89%87%E6%9E%84%E6%88%90%E8%AF%A5%E5%86%85%E5%AD%98%EF%BC%8C%E8%87%B3%E5%B0%91%E9%9C%80%E8%A6%81%E7%9A%84%E5%AD%98%E5%82%A8%20%EF%BC%883%EF%BC%89%20%E7%89%87%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（3）</span>
                <span class="choice false">A．2</span>
                <span class="choice false">B．4</span>
                <span class="choice false">C．8</span>
                <span class="choice true">D．16</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    （CFFFFH-90000H+1） / 16k = 40000H / 4000H = 10H = 16。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（4） 是一种面向数据流的开发方法，其基本思想是软件功能的分解和抽象。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%884%EF%BC%89%20%E6%98%AF%E4%B8%80%E7%A7%8D%E9%9D%A2%E5%90%91%E6%95%B0%E6%8D%AE%E6%B5%81%E7%9A%84%E5%BC%80%E5%8F%91%E6%96%B9%E6%B3%95%EF%BC%8C%E5%85%B6%E5%9F%BA%E6%9C%AC%E6%80%9D%E6%83%B3%E6%98%AF%E8%BD%AF%E4%BB%B6%E5%8A%9F%E8%83%BD%E7%9A%84%E5%88%86%E8%A7%A3%E5%92%8C%E6%8A%BD%E8%B1%A1%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（4） </span>A．结构化开发方法</p>
            <p class="choice false">&emsp;&emsp;B．Jackson系统开发方法
            </p>
            <p class="choice false">&emsp;&emsp;C．Booch方法</p>
            <p class="choice false">&emsp;&emsp;D．UML（统一建模语言）</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    结构化开发方法是一种面向数据流的开发方法。<br />
                    Jackson开发方法是一种面向数据结构的开发方法。<br />
                    Booch和UML方法是面向对象的开发方法。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">采用UML进行软件设计时，可用 （5） 关系表示两类事物之间存在的特殊/一般关系，用聚集关系表示事物之间存在的整体一部分关系。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8UML%E8%BF%9B%E8%A1%8C%E8%BD%AF%E4%BB%B6%E8%AE%BE%E8%AE%A1%E6%97%B6%EF%BC%8C%E5%8F%AF%E7%94%A8%20%EF%BC%885%EF%BC%89%20%E5%85%B3%E7%B3%BB%E8%A1%A8%E7%A4%BA%E4%B8%A4%E7%B1%BB%E4%BA%8B%E7%89%A9%E4%B9%8B%E9%97%B4%E5%AD%98%E5%9C%A8%E7%9A%84%E7%89%B9%E6%AE%8A/%E4%B8%80%E8%88%AC%E5%85%B3%E7%B3%BB%EF%BC%8C%E7%94%A8%E8%81%9A%E9%9B%86%E5%85%B3%E7%B3%BB%E8%A1%A8%E7%A4%BA%E4%BA%8B%E7%89%A9%E4%B9%8B%E9%97%B4%E5%AD%98%E5%9C%A8%E7%9A%84%E6%95%B4%E4%BD%93%E4%B8%80%E9%83%A8%E5%88%86%E5%85%B3%E7%B3%BB%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（5）</span>
                <span class="choice false">A．依赖</span>
                <span class="choice false">B．聚集</span>
                <span class="choice true">C．泛化</span>
                <span class="choice false">D．实现</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    依赖：表示一个元素以某种方式依赖于另一种元素。<br />
                    泛化：表示一般与特殊的关系，即“一般”元素是“特殊”关系的泛化。<br />
                    聚合：表示整体与部分的关系。<br />
                    实现：一种模型元素（如类）与另外一种模型元素（如接口）连接起来，其中接口只是行为的说明而不是结构或者实现。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某项目制定的开发计划中定义了3个任务，其中任务A首先开始，且需要3周完成，任务周完B必须在任务A启动1周后开始，且需要2周完成，任务C必须在任务A后才能开始，且需要完成2周完成。该项目的进度安排可用下面的甘特图
                （6） 来描述。<br />
                §§<br />
                试题解析：<br />
                这个简单得都不用说了，小学生看图说话都能选对。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E9%A1%B9%E7%9B%AE%E5%88%B6%E5%AE%9A%E7%9A%84%E5%BC%80%E5%8F%91%E8%AE%A1%E5%88%92%E4%B8%AD%E5%AE%9A%E4%B9%89%E4%BA%863%E4%B8%AA%E4%BB%BB%E5%8A%A1%EF%BC%8C%E5%85%B6%E4%B8%AD%E4%BB%BB%E5%8A%A1A%E9%A6%96%E5%85%88%E5%BC%80%E5%A7%8B%EF%BC%8C%E4%B8%94%E9%9C%80%E8%A6%813%E5%91%A8%E5%AE%8C%E6%88%90%EF%BC%8C%E4%BB%BB%E5%8A%A1%E5%91%A8%E5%AE%8CB%E5%BF%85%E9%A1%BB%E5%9C%A8%E4%BB%BB%E5%8A%A1A%E5%90%AF%E5%8A%A81%E5%91%A8%E5%90%8E%E5%BC%80%E5%A7%8B%EF%BC%8C%E4%B8%94%E9%9C%80%E8%A6%812%E5%91%A8%E5%AE%8C%E6%88%90%EF%BC%8C%E4%BB%BB%E5%8A%A1C%E5%BF%85%E9%A1%BB%E5%9C%A8%E4%BB%BB%E5%8A%A1A%E5%90%8E%E6%89%8D%E8%83%BD%E5%BC%80%E5%A7%8B%EF%BC%8C%E4%B8%94%E9%9C%80%E8%A6%81%E5%AE%8C%E6%88%902%E5%91%A8%E5%AE%8C%E6%88%90%E3%80%82%E8%AF%A5%E9%A1%B9%E7%9B%AE%E7%9A%84%E8%BF%9B%E5%BA%A6%E5%AE%89%E6%8E%92%E5%8F%AF%E7%94%A8%E4%B8%8B%E9%9D%A2%E7%9A%84%E7%94%98%E7%89%B9%E5%9B%BE%20%EF%BC%886%EF%BC%89%20%E6%9D%A5%E6%8F%8F%E8%BF%B0%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7%3Cbr/%3E%0A%E8%AF%95%E9%A2%98%E8%A7%A3%E6%9E%90%EF%BC%9A%3Cbr/%3E%0A%E8%BF%99%E4%B8%AA%E7%AE%80%E5%8D%95%E5%BE%97%E9%83%BD%E4%B8%8D%E7%94%A8%E8%AF%B4%E4%BA%86%EF%BC%8C%E5%B0%8F%E5%AD%A6%E7%94%9F%E7%9C%8B%E5%9B%BE%E8%AF%B4%E8%AF%9D%E9%83%BD%E8%83%BD%E9%80%89%E5%AF%B9%E3%80%82">百度</a></p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">下列叙述中错误的是 （7） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E5%8F%99%E8%BF%B0%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%887%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（7） </span>A．面向对象程序设计语言可支持过程化的程序设计
            </p>
            <p class="choice false">&emsp;&emsp;B．给定算法的时间复杂性与实现该算法所采用的程序设计语言无关
            </p>
            <p class="choice true">&emsp;&emsp;C．与汇编语言相比，采用脚本语言编程可获得更高的运行效率
            </p>
            <p class="choice false">&emsp;&emsp;D．面向对象程序设计语言不支持对一个对象的成员变量进行直接访问</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    脚本语言是解释执行的，其效率远低于编译运行的语言，更不用说汇编语言了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在下图所示的树型文件系统中，方框表示目录，圆圈表示文件，“/”表示路径中的分隔符，“/”在路径之首时表示根目录。图中， （8）
                。假设当前目录是A2，若进程A以如下两种方式打开文件f2：<br />
                方式① fd1=open(″ （9） /f2″, o_RDONLY);<br />
                方式② fd1=open(″/A2/C3/f2″, o_RDONLY);<br />
                那么，采用方式①的工作效率比方式②的工作效率高。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E6%A0%91%E5%9E%8B%E6%96%87%E4%BB%B6%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E6%96%B9%E6%A1%86%E8%A1%A8%E7%A4%BA%E7%9B%AE%E5%BD%95%EF%BC%8C%E5%9C%86%E5%9C%88%E8%A1%A8%E7%A4%BA%E6%96%87%E4%BB%B6%EF%BC%8C%E2%80%9C/%E2%80%9D%E8%A1%A8%E7%A4%BA%E8%B7%AF%E5%BE%84%E4%B8%AD%E7%9A%84%E5%88%86%E9%9A%94%E7%AC%A6%EF%BC%8C%E2%80%9C/%E2%80%9D%E5%9C%A8%E8%B7%AF%E5%BE%84%E4%B9%8B%E9%A6%96%E6%97%B6%E8%A1%A8%E7%A4%BA%E6%A0%B9%E7%9B%AE%E5%BD%95%E3%80%82%E5%9B%BE%E4%B8%AD%EF%BC%8C%20%EF%BC%888%EF%BC%89%20%E3%80%82%E5%81%87%E8%AE%BE%E5%BD%93%E5%89%8D%E7%9B%AE%E5%BD%95%E6%98%AFA2%EF%BC%8C%E8%8B%A5%E8%BF%9B%E7%A8%8BA%E4%BB%A5%E5%A6%82%E4%B8%8B%E4%B8%A4%E7%A7%8D%E6%96%B9%E5%BC%8F%E6%89%93%E5%BC%80%E6%96%87%E4%BB%B6f2%EF%BC%9A%3Cbr/%3E%0A%E6%96%B9%E5%BC%8F%E2%91%A0%20fd1%3Dopen%28%E2%80%B3%20%EF%BC%889%EF%BC%89%20/f2%E2%80%B3%2C%20o_RDONLY%29%3B%3Cbr/%3E%0A%E6%96%B9%E5%BC%8F%E2%91%A1%20fd1%3Dopen%28%E2%80%B3/A2/C3/f2%E2%80%B3%2C%20o_RDONLY%29%3B%3Cbr/%3E%0A%E9%82%A3%E4%B9%88%EF%BC%8C%E9%87%87%E7%94%A8%E6%96%B9%E5%BC%8F%E2%91%A0%E7%9A%84%E5%B7%A5%E4%BD%9C%E6%95%88%E7%8E%87%E6%AF%94%E6%96%B9%E5%BC%8F%E2%91%A1%E7%9A%84%E5%B7%A5%E4%BD%9C%E6%95%88%E7%8E%87%E9%AB%98%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice false"><span class="number">（8） </span>A．根目录中文件f1与子目录C1、C2和C3中文件f1相同
            </p>
            <p class="choice false">&emsp;&emsp;B．子目录C1中文件f2与子目录C3中文件f2是相同的
            </p>
            <p class="choice false">&emsp;&emsp;C．子目录C1中文件f2与子目录C3中文件f2是不同的
            </p>
            <p class="choice true">&emsp;&emsp;D．子目录C1中文件f2与子目录C3中文件f2可能相同也可能不相同</p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A．/A2/C3</span>
                <span class="choice false">B．A2/C3</span>
                <span class="choice true">C．C3</span>
                <span class="choice false">D．f2</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">依据我国著作权法的规定， （10） 属于著作人身权。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BE%9D%E6%8D%AE%E6%88%91%E5%9B%BD%E8%91%97%E4%BD%9C%E6%9D%83%E6%B3%95%E7%9A%84%E8%A7%84%E5%AE%9A%EF%BC%8C%20%EF%BC%8810%EF%BC%89%20%E5%B1%9E%E4%BA%8E%E8%91%97%E4%BD%9C%E4%BA%BA%E8%BA%AB%E6%9D%83%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（10）</span>
                <span class="choice false">A．发行权</span>
                <span class="choice false">B．复制权
                </span>
                <span class="choice true">C．署名权</span>
                <span class="choice false">D．信息网络传播权</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">E1载波把32个信道按 （11） 方式复用在一条2.048Mb/s的高速信道上，每条话音信道的数据速率是 （12） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=E1%E8%BD%BD%E6%B3%A2%E6%8A%8A32%E4%B8%AA%E4%BF%A1%E9%81%93%E6%8C%89%20%EF%BC%8811%EF%BC%89%20%E6%96%B9%E5%BC%8F%E5%A4%8D%E7%94%A8%E5%9C%A8%E4%B8%80%E6%9D%A12.048Mb/s%E7%9A%84%E9%AB%98%E9%80%9F%E4%BF%A1%E9%81%93%E4%B8%8A%EF%BC%8C%E6%AF%8F%E6%9D%A1%E8%AF%9D%E9%9F%B3%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8812%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（11）</span>
                <span class="choice true">A．时分多路</span>
                <span class="choice false">B．空分多路
                </span>
                <span class="choice false">C．波分多路</span>
                <span class="choice false">D．频分多路</span>
            </p>
            <p class="one-line-choice"><span class="number">（12）</span>
                <span class="choice false">A．56kb/s</span>
                <span class="choice true">B．64kb/s
                </span>
                <span class="choice false">C．128kb/s</span>
                <span class="choice false">D．512kb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    E载波和T载波都是采用时分多路复用技术（TDM）的典型通信机制。<br />
                    现代电信技术中，每条话音信道的数据速率是64kb/s。</p>
            </div>
        </div>
        
        <div class="block">
            <p class="question">假设模拟信号的最高频率为5MHz，采样频率必须大于 （14） ，才能使得到的样本信号不失真，如果每个样本量化为256个等级，则传输的数据速率是 （15） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%81%87%E8%AE%BE%E6%A8%A1%E6%8B%9F%E4%BF%A1%E5%8F%B7%E7%9A%84%E6%9C%80%E9%AB%98%E9%A2%91%E7%8E%87%E4%B8%BA5MHz%EF%BC%8C%E9%87%87%E6%A0%B7%E9%A2%91%E7%8E%87%E5%BF%85%E9%A1%BB%E5%A4%A7%E4%BA%8E%20%EF%BC%8814%EF%BC%89%20%EF%BC%8C%E6%89%8D%E8%83%BD%E4%BD%BF%E5%BE%97%E5%88%B0%E7%9A%84%E6%A0%B7%E6%9C%AC%E4%BF%A1%E5%8F%B7%E4%B8%8D%E5%A4%B1%E7%9C%9F%EF%BC%8C%E5%A6%82%E6%9E%9C%E6%AF%8F%E4%B8%AA%E6%A0%B7%E6%9C%AC%E9%87%8F%E5%8C%96%E4%B8%BA256%E4%B8%AA%E7%AD%89%E7%BA%A7%EF%BC%8C%E5%88%99%E4%BC%A0%E8%BE%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8815%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（14）</span>
                <span class="choice false">A．5MHz</span>
                <span class="choice true">B．10MHz</span>
                <span class="choice false">C．15MHz</span>
                <span class="choice false">D．20MHz</span>
            </p>
            <p class="one-line-choice"><span class="number">（15）</span>
                <span class="choice false">A．10Mb/s</span>
                <span class="choice false">B．50Mb/s</span>
                <span class="choice true">C．80Mb/s</span>
                <span class="choice false">D．100Mb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    尼奎斯特证明：当采样频率大于等于模拟信号最高频分量频率的两倍时，所得的离散信号可以无失真地还原被采样的模拟信号。当模拟信号的最高频率为5MHz，采样频率必须大于10MHz。<br />
                    256个等级需要用8位来存储（ 28=256），10M×8=80Mb/s。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在异步通信中，每个字符包含1位起始位、7位数据位、1位奇偶位和2位终止位，若每秒钟传送100个字符，采用4相位调制，则码元速率为 （16） ，有效数据速率为 （17）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%BC%82%E6%AD%A5%E9%80%9A%E4%BF%A1%E4%B8%AD%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%AD%97%E7%AC%A6%E5%8C%85%E5%90%AB1%E4%BD%8D%E8%B5%B7%E5%A7%8B%E4%BD%8D%E3%80%817%E4%BD%8D%E6%95%B0%E6%8D%AE%E4%BD%8D%E3%80%811%E4%BD%8D%E5%A5%87%E5%81%B6%E4%BD%8D%E5%92%8C2%E4%BD%8D%E7%BB%88%E6%AD%A2%E4%BD%8D%EF%BC%8C%E8%8B%A5%E6%AF%8F%E7%A7%92%E9%92%9F%E4%BC%A0%E9%80%81100%E4%B8%AA%E5%AD%97%E7%AC%A6%EF%BC%8C%E9%87%87%E7%94%A84%E7%9B%B8%E4%BD%8D%E8%B0%83%E5%88%B6%EF%BC%8C%E5%88%99%E7%A0%81%E5%85%83%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8816%EF%BC%89%20%EF%BC%8C%E6%9C%89%E6%95%88%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8817%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．50波特</span>
                <span class="choice false">B．500波特</span>
                <span class="choice true">C．550波特</span>
                <span class="choice false">D．1100波特</span>
            </p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A．500b/s</span>
                <span class="choice true">B．700b/s</span>
                <span class="choice false">C．770b/s</span>
                <span class="choice false">D．1100b/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    4相位调制每次信号变换可以传输 log24=2个比特，因此码元速率为（1+7+1+2）×100÷2=550波特。<br />
                    有效数据数率当然是7×100=700b/s了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">设信道带宽为3400Hz，调制为4种不同的码元，根据Nyquist定理 ，理想信道的数据速率为 （18） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%E4%BF%A1%E9%81%93%E5%B8%A6%E5%AE%BD%E4%B8%BA3400Hz%EF%BC%8C%E8%B0%83%E5%88%B6%E4%B8%BA4%E7%A7%8D%E4%B8%8D%E5%90%8C%E7%9A%84%E7%A0%81%E5%85%83%EF%BC%8C%E6%A0%B9%E6%8D%AENyquist%E5%AE%9A%E7%90%86%20%EF%BC%8C%E7%90%86%E6%83%B3%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8818%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（18）</span>
                <span class="choice false">A．3.4Kb/s</span>
                <span class="choice false">B．6.8Kb/s</span>
                <span class="choice true">C．13.6Kb/s</span>
                <span class="choice false">D．34Kb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    4种不同的码元可以分别用于表示00、01、10和11，也就是说每次信号变换就传输2个比特。因此数据速率为2×3400×2=13.6Kb/s。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">采用CRC校验的生成多项式为 G（x）=x16+x15+x2+1，它产生的校验码是 （19） 位。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8CRC%E6%A0%A1%E9%AA%8C%E7%9A%84%E7%94%9F%E6%88%90%E5%A4%9A%E9%A1%B9%E5%BC%8F%E4%B8%BA%20G%EF%BC%88x%EF%BC%89%3Dx16%2Bx15%2Bx2%2B1%EF%BC%8C%E5%AE%83%E4%BA%A7%E7%94%9F%E7%9A%84%E6%A0%A1%E9%AA%8C%E7%A0%81%E6%98%AF%20%EF%BC%8819%EF%BC%89%20%E4%BD%8D%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（19）</span>
                <span class="choice false">A．2</span>
                <span class="choice false">B．4</span>
                <span class="choice true">C．16</span>
                <span class="choice false">D．32</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    多项式最高次为16，意味着校验码是16位。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IPv6地址以16进制数表示，每4个16进制数为一组，组之间用冒号分隔，下面的IPv6地址ADBF:0000:FEEA:0000:0000:00EA:00AC:DEED的简化写法是
                （20） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IPv6%E5%9C%B0%E5%9D%80%E4%BB%A516%E8%BF%9B%E5%88%B6%E6%95%B0%E8%A1%A8%E7%A4%BA%EF%BC%8C%E6%AF%8F4%E4%B8%AA16%E8%BF%9B%E5%88%B6%E6%95%B0%E4%B8%BA%E4%B8%80%E7%BB%84%EF%BC%8C%E7%BB%84%E4%B9%8B%E9%97%B4%E7%94%A8%E5%86%92%E5%8F%B7%E5%88%86%E9%9A%94%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84IPv6%E5%9C%B0%E5%9D%80ADBF%3A0000%3AFEEA%3A0000%3A0000%3A00EA%3A00AC%3ADEED%E7%9A%84%E7%AE%80%E5%8C%96%E5%86%99%E6%B3%95%E6%98%AF%20%EF%BC%8820%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（20） </span>A．ADBF:0:FEEA:00:EA:AC:DEED
            </p>
            <p class="choice true">&emsp;&emsp;B．ADBF:0:FEEA::EA:AC:DEED
            </p>
            <p class="choice false">&emsp;&emsp;C．ADBF:0:FEEA:EA:AC:DEED
            </p>
            <p class="choice false">&emsp;&emsp;D．ADBF::FEEA::EA:AC:DEED</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    双冒号（：：）用于化简最长的0000，但只能用一次。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">浏览器与Web服务器通过建立 （21） 连接来传送网页。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B5%8F%E8%A7%88%E5%99%A8%E4%B8%8EWeb%E6%9C%8D%E5%8A%A1%E5%99%A8%E9%80%9A%E8%BF%87%E5%BB%BA%E7%AB%8B%20%EF%BC%8821%EF%BC%89%20%E8%BF%9E%E6%8E%A5%E6%9D%A5%E4%BC%A0%E9%80%81%E7%BD%91%E9%A1%B5%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（21）</span>
                <span class="choice false">A．UDP</span>
                <span class="choice true">B．TCP</span>
                <span class="choice false">C．IP</span>
                <span class="choice false">D．RIP</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这个要是错了，还是不要考网工好了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在TCP协议中，采用 （22） 来区分不同的应用进程。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8TCP%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%E9%87%87%E7%94%A8%20%EF%BC%8822%EF%BC%89%20%E6%9D%A5%E5%8C%BA%E5%88%86%E4%B8%8D%E5%90%8C%E7%9A%84%E5%BA%94%E7%94%A8%E8%BF%9B%E7%A8%8B%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（22）</span>
                <span class="choice true">A．端口号</span>
                <span class="choice false">B．IP地址</span>
                <span class="choice false">C．协议类型</span>
                <span class="choice false">D．MAC地址</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这个要是错了，还是不要考网工好了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">TCP是互联网中的传输层协议，使用 （23） 次握手协议建立连接。这种建立连接的方法可以防止 （24） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=TCP%E6%98%AF%E4%BA%92%E8%81%94%E7%BD%91%E4%B8%AD%E7%9A%84%E4%BC%A0%E8%BE%93%E5%B1%82%E5%8D%8F%E8%AE%AE%EF%BC%8C%E4%BD%BF%E7%94%A8%20%EF%BC%8823%EF%BC%89%20%E6%AC%A1%E6%8F%A1%E6%89%8B%E5%8D%8F%E8%AE%AE%E5%BB%BA%E7%AB%8B%E8%BF%9E%E6%8E%A5%E3%80%82%E8%BF%99%E7%A7%8D%E5%BB%BA%E7%AB%8B%E8%BF%9E%E6%8E%A5%E7%9A%84%E6%96%B9%E6%B3%95%E5%8F%AF%E4%BB%A5%E9%98%B2%E6%AD%A2%20%EF%BC%8824%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（23）</span>
                <span class="choice false">A．1</span>
                <span class="choice false">B．2</span>
                <span class="choice true">C．3</span>
                <span class="choice false">D．4</span>
            </p>
            <p class="one-line-choice"><span class="number">（24）</span>
                <span class="choice false">A．出现半连接</span>
                <span class="choice false">B．无法连接
                </span>
                <span class="choice true">C．产生错误的连接</span>
                <span class="choice false">D．连接失效</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ARP协议的作用是由IP地址求MAC地址，ARP请求是广播发送，ARP响应是 （25） 发送。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=ARP%E5%8D%8F%E8%AE%AE%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%E7%94%B1IP%E5%9C%B0%E5%9D%80%E6%B1%82MAC%E5%9C%B0%E5%9D%80%EF%BC%8CARP%E8%AF%B7%E6%B1%82%E6%98%AF%E5%B9%BF%E6%92%AD%E5%8F%91%E9%80%81%EF%BC%8CARP%E5%93%8D%E5%BA%94%E6%98%AF%20%EF%BC%8825%EF%BC%89%20%E5%8F%91%E9%80%81%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（25）</span>
                <span class="choice true">A．单播</span>
                <span class="choice false">B．组播</span>
                <span class="choice false">C．广播</span>
                <span class="choice false">D．点播</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    由于不知道目标设备的MAC地址在哪里，因此ARP请求必须使用广播方式。<br />
                    但是ARP请求包中包含有发送方的MAC地址，因此应答的时候就应该使用单播方式了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">ICMP协议在网络中起到了差错控制和交通控制的作用。如果在IP数据报的传送过程中，如果出现拥塞，则路由器发出 （27） 报文。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=ICMP%E5%8D%8F%E8%AE%AE%E5%9C%A8%E7%BD%91%E7%BB%9C%E4%B8%AD%E8%B5%B7%E5%88%B0%E4%BA%86%E5%B7%AE%E9%94%99%E6%8E%A7%E5%88%B6%E5%92%8C%E4%BA%A4%E9%80%9A%E6%8E%A7%E5%88%B6%E7%9A%84%E4%BD%9C%E7%94%A8%E3%80%82%E5%A6%82%E6%9E%9C%E5%9C%A8IP%E6%95%B0%E6%8D%AE%E6%8A%A5%E7%9A%84%E4%BC%A0%E9%80%81%E8%BF%87%E7%A8%8B%E4%B8%AD%EF%BC%8C%E5%A6%82%E6%9E%9C%E5%87%BA%E7%8E%B0%E6%8B%A5%E5%A1%9E%EF%BC%8C%E5%88%99%E8%B7%AF%E7%94%B1%E5%99%A8%E5%8F%91%E5%87%BA%20%EF%BC%8827%EF%BC%89%20%E6%8A%A5%E6%96%87%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（27）</span>
                <span class="choice false">A．路由重定向</span>
                <span class="choice false">B．目标不可到达</span>
                <span class="choice true">C．源抑制</span>
                <span class="choice false">D．超时</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    拥塞是无连接传输机制面临的严重问题。由于路由器或者主机无法为数据报分配足够的缓冲区，可能出现大量数据报涌入同一个路由器或者主机的情况。导致路由器或者主机被“淹没”，这就是拥塞（Congestion）。<br />
                    拥塞控制有很多办法，在TCP/IP协议体系中，ICMP协议采用的是“源抑制”方法，即当路由器或者主机因拥塞而丢掉数据报时，它就向数据报的源主机发送源抑制报文，抑制源主机发送数据报的速率。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某网络结构如下图所示。在Windows操作系统中，Server1通过安装 （28）
                组件创建Web站点。PC1的用户在浏览器地址栏中输入www.abc.com后无法获取响应页面，管理人员在Windows操作系统下可以使用 （29） 判断故障发生在网络A内还是网络A外。如果使用ping
                61.102.58.77命令对服务器Server1的问题是进行测试，响应正常，则可能出现 （30） 。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E7%BD%91%E7%BB%9C%E7%BB%93%E6%9E%84%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E3%80%82%E5%9C%A8Windows%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8CServer1%E9%80%9A%E8%BF%87%E5%AE%89%E8%A3%85%20%EF%BC%8828%EF%BC%89%20%E7%BB%84%E4%BB%B6%E5%88%9B%E5%BB%BAWeb%E7%AB%99%E7%82%B9%E3%80%82PC1%E7%9A%84%E7%94%A8%E6%88%B7%E5%9C%A8%E6%B5%8F%E8%A7%88%E5%99%A8%E5%9C%B0%E5%9D%80%E6%A0%8F%E4%B8%AD%E8%BE%93%E5%85%A5www.abc.com%E5%90%8E%E6%97%A0%E6%B3%95%E8%8E%B7%E5%8F%96%E5%93%8D%E5%BA%94%E9%A1%B5%E9%9D%A2%EF%BC%8C%E7%AE%A1%E7%90%86%E4%BA%BA%E5%91%98%E5%9C%A8Windows%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%8B%E5%8F%AF%E4%BB%A5%E4%BD%BF%E7%94%A8%20%EF%BC%8829%EF%BC%89%20%E5%88%A4%E6%96%AD%E6%95%85%E9%9A%9C%E5%8F%91%E7%94%9F%E5%9C%A8%E7%BD%91%E7%BB%9CA%E5%86%85%E8%BF%98%E6%98%AF%E7%BD%91%E7%BB%9CA%E5%A4%96%E3%80%82%E5%A6%82%E6%9E%9C%E4%BD%BF%E7%94%A8ping%2061.102.58.77%E5%91%BD%E4%BB%A4%E5%AF%B9%E6%9C%8D%E5%8A%A1%E5%99%A8Server1%E7%9A%84%E9%97%AE%E9%A2%98%E6%98%AF%E8%BF%9B%E8%A1%8C%E6%B5%8B%E8%AF%95%EF%BC%8C%E5%93%8D%E5%BA%94%E6%AD%A3%E5%B8%B8%EF%BC%8C%E5%88%99%E5%8F%AF%E8%83%BD%E5%87%BA%E7%8E%B0%20%EF%BC%8830%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（28）</span>
                <span class="choice true">A．IIS</span>
                <span class="choice false">B．IE</span>
                <span class="choice false">C．WWW</span>
                <span class="choice false">D．DNS</span>
            </p>
            <p class="choice header_choice false"><span class="number">（29） </span>A．ping61.102.58.77</p>
            <p class="choice true">&emsp;&emsp;B．tracert61.102.58.77
            </p>
            <p class="choice false">&emsp;&emsp;C．netstat61.102.58.77</p>
            <p class="choice false">&emsp;&emsp;D．arp61.102.58.77</p>
            <p class="one-line-choice"><span class="number">（30）</span>
                <span class="choice false">A．网关故障</span>
                <span class="choice false">B．线路故障
                </span>
                <span class="choice true">C．域名解析故障</span>
                <span class="choice false">D．服务器网卡故障</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    稍微有点网管经验的都具有这些常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下是在Linux操作系统中键入ps命令后得到的进程状态信息，其中处于“僵死”状态进程的PID为 （31） ，若要终止处于“运行”状态的进程的父进程，可以键入命令 （32）
                。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E6%98%AF%E5%9C%A8Linux%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%E9%94%AE%E5%85%A5ps%E5%91%BD%E4%BB%A4%E5%90%8E%E5%BE%97%E5%88%B0%E7%9A%84%E8%BF%9B%E7%A8%8B%E7%8A%B6%E6%80%81%E4%BF%A1%E6%81%AF%EF%BC%8C%E5%85%B6%E4%B8%AD%E5%A4%84%E4%BA%8E%E2%80%9C%E5%83%B5%E6%AD%BB%E2%80%9D%E7%8A%B6%E6%80%81%E8%BF%9B%E7%A8%8B%E7%9A%84PID%E4%B8%BA%20%EF%BC%8831%EF%BC%89%20%EF%BC%8C%E8%8B%A5%E8%A6%81%E7%BB%88%E6%AD%A2%E5%A4%84%E4%BA%8E%E2%80%9C%E8%BF%90%E8%A1%8C%E2%80%9D%E7%8A%B6%E6%80%81%E7%9A%84%E8%BF%9B%E7%A8%8B%E7%9A%84%E7%88%B6%E8%BF%9B%E7%A8%8B%EF%BC%8C%E5%8F%AF%E4%BB%A5%E9%94%AE%E5%85%A5%E5%91%BD%E4%BB%A4%20%EF%BC%8832%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（31）</span>
                <span class="choice false">A．9822</span>
                <span class="choice false">B．9970</span>
                <span class="choice false">C．15354</span>
                <span class="choice true">D．17658</span>
            </p>
            <p class="one-line-choice"><span class="number">（32）</span>
                <span class="choice false">A．kill9822</span>
                <span class="choice true">B．kill9970</span>
                <span class="choice false">C．python9521</span>
                <span class="choice false">D．python9976</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    第一行的S字段表示进程状态：<br />
                    D 不可中断睡眠 (通常是在IO操作)<br />
                    R 正在运行或可运行（在运行队列排队中）<br />
                    S 可中断睡眠 (在等待某事件完成)<br />
                    T Stopped, either by a job control signal or because it is being traced.<br />
                    W 正在换页(2.6.内核之前有效)<br />
                    X 死进程 (should never be seen)<br />
                    Z 僵死。<br />
                    由此可知僵死进程的PID（进程号）为17658，处于“运行”状态的进程的PID（进程号）为15354，其父进程的进程号为9970。<br />
                    终止该进程的指令应该为kill 9970。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若Linux用户需要将FTP默认的21号端口修改为8800，可以修改 （33） 配置文件。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%8B%A5Linux%E7%94%A8%E6%88%B7%E9%9C%80%E8%A6%81%E5%B0%86FTP%E9%BB%98%E8%AE%A4%E7%9A%8421%E5%8F%B7%E7%AB%AF%E5%8F%A3%E4%BF%AE%E6%94%B9%E4%B8%BA8800%EF%BC%8C%E5%8F%AF%E4%BB%A5%E4%BF%AE%E6%94%B9%20%EF%BC%8833%EF%BC%89%20%E9%85%8D%E7%BD%AE%E6%96%87%E4%BB%B6%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（33） </span>A．/etc/vsftpd/userconf</p>
            <p class="choice true">&emsp;&emsp;B．/etc/vsftpd/vsftpd.conf
            </p>
            <p class="choice false">&emsp;&emsp;C．/etc/resolv.conf</p>
            <p class="choice false">&emsp;&emsp;D．/etc/hosts</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    /etc/vsftpd/vsftpd.conf的主配置文件。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows Server 2003的“管理您的服务器”界面中，可以通过 （34） 安装配置DHCP服务器。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%20Server%202003%E7%9A%84%E2%80%9C%E7%AE%A1%E7%90%86%E6%82%A8%E7%9A%84%E6%9C%8D%E5%8A%A1%E5%99%A8%E2%80%9D%E7%95%8C%E9%9D%A2%E4%B8%AD%EF%BC%8C%E5%8F%AF%E4%BB%A5%E9%80%9A%E8%BF%87%20%EF%BC%8834%EF%BC%89%20%E5%AE%89%E8%A3%85%E9%85%8D%E7%BD%AEDHCP%E6%9C%8D%E5%8A%A1%E5%99%A8%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（34） </span>A．ActiveDirectory</p>
            <p class="choice true">&emsp;&emsp;B．管理服务器角色
            </p>
            <p class="choice false">&emsp;&emsp;C．IIS6.0</p>
            <p class="choice false">&emsp;&emsp;D．代理服务器</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识，如果没弄过可以通过排除法把其他三个选项去掉。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows环境下，DHCP客户端可以使用 （35） 命令重新获得IP地址，这时客户机向DHCP服务器发送一个 （36） 数据包来请求租用IP地址。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E7%8E%AF%E5%A2%83%E4%B8%8B%EF%BC%8CDHCP%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%8F%AF%E4%BB%A5%E4%BD%BF%E7%94%A8%20%EF%BC%8835%EF%BC%89%20%E5%91%BD%E4%BB%A4%E9%87%8D%E6%96%B0%E8%8E%B7%E5%BE%97IP%E5%9C%B0%E5%9D%80%EF%BC%8C%E8%BF%99%E6%97%B6%E5%AE%A2%E6%88%B7%E6%9C%BA%E5%90%91DHCP%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%8F%91%E9%80%81%E4%B8%80%E4%B8%AA%20%EF%BC%8836%EF%BC%89%20%E6%95%B0%E6%8D%AE%E5%8C%85%E6%9D%A5%E8%AF%B7%E6%B1%82%E7%A7%9F%E7%94%A8IP%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（35） </span>A．ipconfig/release</p>
            <p class="choice false">&emsp;&emsp;B．ipconfig/reload
            </p>
            <p class="choice true">&emsp;&emsp;C．ipconfig/renew</p>
            <p class="choice false">&emsp;&emsp;D．ipconfig/all</p>
            <p class="one-line-choice"><span class="number">（36）</span>
                <span class="choice false">A．Dhcpoffer</span>
                <span class="choice false">B．Dhcpack
                </span>
                <span class="choice true">C．Dhcpdiscover</span>
                <span class="choice false">D．Dhcprequest</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    （35）是常识。<br />
                    DHCP客户机通UDP 68端口发送DHCPDISCOVER广播信息来查找DHCP服务器。<br />
                    当网络中的DHCP服务器接收到DHCPDISCOVER广播时，通过UDP 67端口以单播DHCPOFFER的形式为客户端提供IP配置信息。<br />
                    DHCP客户端通常是接受第一个收到的DHCPOFFER所提供的信息，并且会向网络发送一个DHCPREQUEST广播封包，告诉所有DHCP服务器它将接受哪一台服务器提供的IP地址。<br />
                    当DHCP服务器收到DHCPREQUEST信息之后，便向DHCP客户端发送一个单播的DHCPACK信息，以确认IP租约的正式生效。然后DHCP客户端便将其TCP/IP协议与网卡绑定。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下图是在Windows客户端DOS窗口中使用nslookup命令后的结果，该客户端的首选DNS服务器的IP地址是 （37）
                。在DNS服务器中，ftp.test.com是采用新建 （38） 方式建立的。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%9B%BE%E6%98%AF%E5%9C%A8Windows%E5%AE%A2%E6%88%B7%E7%AB%AFDOS%E7%AA%97%E5%8F%A3%E4%B8%AD%E4%BD%BF%E7%94%A8nslookup%E5%91%BD%E4%BB%A4%E5%90%8E%E7%9A%84%E7%BB%93%E6%9E%9C%EF%BC%8C%E8%AF%A5%E5%AE%A2%E6%88%B7%E7%AB%AF%E7%9A%84%E9%A6%96%E9%80%89DNS%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%9A%84IP%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8837%EF%BC%89%20%E3%80%82%E5%9C%A8DNS%E6%9C%8D%E5%8A%A1%E5%99%A8%E4%B8%AD%EF%BC%8Cftp.test.com%E6%98%AF%E9%87%87%E7%94%A8%E6%96%B0%E5%BB%BA%20%EF%BC%8838%EF%BC%89%20%E6%96%B9%E5%BC%8F%E5%BB%BA%E7%AB%8B%E7%9A%84%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice true"><span class="number">（37） </span>A．192.168.21.252</p>
            <p class="choice false">&emsp;&emsp;B．10.10.20.3
            </p>
            <p class="choice false">&emsp;&emsp;C．10.10.20.1</p>
            <p class="choice false">&emsp;&emsp;D．以上都不是</p>
            <p class="one-line-choice"><span class="number">（38）</span>
                <span class="choice false">A．邮件交换器</span>
                <span class="choice true">B．别名
                </span>
                <span class="choice false">C．域</span>
                <span class="choice false">D．主机</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">用户可以通过http://www.a.com和http://www.b.com访问在同一台服务器上 （39）不同的两个Web站点。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8%E6%88%B7%E5%8F%AF%E4%BB%A5%E9%80%9A%E8%BF%87http%3A//www.a.com%E5%92%8Chttp%3A//www.b.com%E8%AE%BF%E9%97%AE%E5%9C%A8%E5%90%8C%E4%B8%80%E5%8F%B0%E6%9C%8D%E5%8A%A1%E5%99%A8%E4%B8%8A%20%EF%BC%8839%EF%BC%89%E4%B8%8D%E5%90%8C%E7%9A%84%E4%B8%A4%E4%B8%AAWeb%E7%AB%99%E7%82%B9%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（39）</span>
                <span class="choice true">A．IP地址</span>
                <span class="choice false">B．端口号
                </span>
                <span class="choice false">C．协议</span>
                <span class="choice false">D．虚拟目录</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows操作系统下，ftp客户端可以使用 （40） 命令显示客户端当前目录中的文件。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%8B%EF%BC%8Cftp%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%8F%AF%E4%BB%A5%E4%BD%BF%E7%94%A8%20%EF%BC%8840%EF%BC%89%20%E5%91%BD%E4%BB%A4%E6%98%BE%E7%A4%BA%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%BD%93%E5%89%8D%E7%9B%AE%E5%BD%95%E4%B8%AD%E7%9A%84%E6%96%87%E4%BB%B6%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（40）</span>
                <span class="choice false">A．dir</span>
                <span class="choice false">B．list</span>
                <span class="choice true">C．!dir</span>
                <span class="choice false">D．!list</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    ！表示执行本地命令。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">如果希望别的计算机不能通过ping命令测试服务器的连通情况，可以 （41） 。如果希望通过默认的Telnet端口连接服务器，则下面对防火墙配置正确的是 （42）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%A6%82%E6%9E%9C%E5%B8%8C%E6%9C%9B%E5%88%AB%E7%9A%84%E8%AE%A1%E7%AE%97%E6%9C%BA%E4%B8%8D%E8%83%BD%E9%80%9A%E8%BF%87ping%E5%91%BD%E4%BB%A4%E6%B5%8B%E8%AF%95%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%9A%84%E8%BF%9E%E9%80%9A%E6%83%85%E5%86%B5%EF%BC%8C%E5%8F%AF%E4%BB%A5%20%EF%BC%8841%EF%BC%89%20%E3%80%82%E5%A6%82%E6%9E%9C%E5%B8%8C%E6%9C%9B%E9%80%9A%E8%BF%87%E9%BB%98%E8%AE%A4%E7%9A%84Telnet%E7%AB%AF%E5%8F%A3%E8%BF%9E%E6%8E%A5%E6%9C%8D%E5%8A%A1%E5%99%A8%EF%BC%8C%E5%88%99%E4%B8%8B%E9%9D%A2%E5%AF%B9%E9%98%B2%E7%81%AB%E5%A2%99%E9%85%8D%E7%BD%AE%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8842%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（41） </span>A．删除服务器中的ping.exe文件
            </p>
            <p class="choice false">&emsp;&emsp;B．删除服务器中的cmd.exe文件
            </p>
            <p class="choice true">&emsp;&emsp;C．关闭服务器中ICMP端口
            </p>
            <p class="choice false">&emsp;&emsp;D．关闭服务器中的NetLogon服务</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">设置计算机的无线网卡，使该计算机与实验室的无线访问点LabAP之间的通信能够受密码保护，指定密钥为2350AD9FE0，则下图中应设置 （43） 。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E7%BD%AE%E8%AE%A1%E7%AE%97%E6%9C%BA%E7%9A%84%E6%97%A0%E7%BA%BF%E7%BD%91%E5%8D%A1%EF%BC%8C%E4%BD%BF%E8%AF%A5%E8%AE%A1%E7%AE%97%E6%9C%BA%E4%B8%8E%E5%AE%9E%E9%AA%8C%E5%AE%A4%E7%9A%84%E6%97%A0%E7%BA%BF%E8%AE%BF%E9%97%AE%E7%82%B9LabAP%E4%B9%8B%E9%97%B4%E7%9A%84%E9%80%9A%E4%BF%A1%E8%83%BD%E5%A4%9F%E5%8F%97%E5%AF%86%E7%A0%81%E4%BF%9D%E6%8A%A4%EF%BC%8C%E6%8C%87%E5%AE%9A%E5%AF%86%E9%92%A5%E4%B8%BA2350AD9FE0%EF%BC%8C%E5%88%99%E4%B8%8B%E5%9B%BE%E4%B8%AD%E5%BA%94%E8%AE%BE%E7%BD%AE%20%EF%BC%8843%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice true"><span class="number">（43） </span>A．SSID为LabAP，网络验证为开放式，数据加密为WEP
            </p>
            <p class="choice false">&emsp;&emsp;B．SSID为2350AD9FE0，网络验证为开放式，数据加密为WEP
            </p>
            <p class="choice false">&emsp;&emsp;C．SSID为LabAP，网络验证为WEP，数据加密为开放式
            </p>
            <p class="choice false">&emsp;&emsp;D．SSID为2350AD9FE0，网络验证为WEP，数据加密为开放式</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    自己配一次就知道了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面的选项中，属于传输层安全协议的是 （44） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E7%9A%84%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E5%B1%9E%E4%BA%8E%E4%BC%A0%E8%BE%93%E5%B1%82%E5%AE%89%E5%85%A8%E5%8D%8F%E8%AE%AE%E7%9A%84%E6%98%AF%20%EF%BC%8844%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice false">A．IPsec</span>
                <span class="choice false">B．L2TP</span>
                <span class="choice true">C．TLS</span>
                <span class="choice false">D．PPTP</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    IPsec是网络层安全协议。<br />
                    PPTP（Point-to-Point Tunneling Protocol，点对点隧道协议）和L2TP（Layer 2 Tunneling Protocol，第二层隧道协议）是网络接口层安全协议。<br />
                    TLS（Transport Layer Security Protocol，安全传输层协议）是传输层安全协议。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某银行为用户提供网上服务，允许用户通过浏览器管理自己的银行账户信息。为保障通信的安全，该Web服务器可选的协议是 （45） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E9%93%B6%E8%A1%8C%E4%B8%BA%E7%94%A8%E6%88%B7%E6%8F%90%E4%BE%9B%E7%BD%91%E4%B8%8A%E6%9C%8D%E5%8A%A1%EF%BC%8C%E5%85%81%E8%AE%B8%E7%94%A8%E6%88%B7%E9%80%9A%E8%BF%87%E6%B5%8F%E8%A7%88%E5%99%A8%E7%AE%A1%E7%90%86%E8%87%AA%E5%B7%B1%E7%9A%84%E9%93%B6%E8%A1%8C%E8%B4%A6%E6%88%B7%E4%BF%A1%E6%81%AF%E3%80%82%E4%B8%BA%E4%BF%9D%E9%9A%9C%E9%80%9A%E4%BF%A1%E7%9A%84%E5%AE%89%E5%85%A8%EF%BC%8C%E8%AF%A5Web%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%8F%AF%E9%80%89%E7%9A%84%E5%8D%8F%E8%AE%AE%E6%98%AF%20%EF%BC%8845%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（45）</span>
                <span class="choice false">A．POP</span>
                <span class="choice false">B．SNMP</span>
                <span class="choice false">C．HTTP</span>
                <span class="choice true">D．HTTPS</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（46） 不属于电子邮件协议。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%8846%EF%BC%89%20%E4%B8%8D%E5%B1%9E%E4%BA%8E%E7%94%B5%E5%AD%90%E9%82%AE%E4%BB%B6%E5%8D%8F%E8%AE%AE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（46）</span>
                <span class="choice false">A．POP3</span>
                <span class="choice false">B．SMTP</span>
                <span class="choice false">C．IMAP</span>
                <span class="choice true">D．MPLS</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    MPLS（Multi-Protocol Label Switching，多协议标记交换）不是电子邮件协议。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某客户端采用ping命令检测网络连接故障时，发现可以ping通127.0.0.1及本机的IP地址，但无法ping通同一网段内其他工作正常的计算机的IP地址。该客户端的故障可能是
                （47） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E5%AE%A2%E6%88%B7%E7%AB%AF%E9%87%87%E7%94%A8ping%E5%91%BD%E4%BB%A4%E6%A3%80%E6%B5%8B%E7%BD%91%E7%BB%9C%E8%BF%9E%E6%8E%A5%E6%95%85%E9%9A%9C%E6%97%B6%EF%BC%8C%E5%8F%91%E7%8E%B0%E5%8F%AF%E4%BB%A5ping%E9%80%9A127.0.0.1%E5%8F%8A%E6%9C%AC%E6%9C%BA%E7%9A%84IP%E5%9C%B0%E5%9D%80%EF%BC%8C%E4%BD%86%E6%97%A0%E6%B3%95ping%E9%80%9A%E5%90%8C%E4%B8%80%E7%BD%91%E6%AE%B5%E5%86%85%E5%85%B6%E4%BB%96%E5%B7%A5%E4%BD%9C%E6%AD%A3%E5%B8%B8%E7%9A%84%E8%AE%A1%E7%AE%97%E6%9C%BA%E7%9A%84IP%E5%9C%B0%E5%9D%80%E3%80%82%E8%AF%A5%E5%AE%A2%E6%88%B7%E7%AB%AF%E7%9A%84%E6%95%85%E9%9A%9C%E5%8F%AF%E8%83%BD%E6%98%AF%20%EF%BC%8847%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（47） </span>A．TCP/IP协议不能正常工作</p>
            <p class="choice false">&emsp;&emsp;B．本机网卡不能正常工作
            </p>
            <p class="choice true">&emsp;&emsp;C．本机网络接口故障</p>
            <p class="choice false">&emsp;&emsp;D．DNS服务器地址设置错误</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这里不涉及DNS的工作。<br />
                    可以ping通127.0.0.1及本机的IP地址，说明TCP/IP协议是可以正常工作的，网卡也没问题，可能是网线或者网络接口问题。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">SNMP代理使用 （48） 操作向管理端通报重要事件的发生。在下图中， （49）能够响应Manager2的getRequest请求。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=SNMP%E4%BB%A3%E7%90%86%E4%BD%BF%E7%94%A8%20%EF%BC%8848%EF%BC%89%20%E6%93%8D%E4%BD%9C%E5%90%91%E7%AE%A1%E7%90%86%E7%AB%AF%E9%80%9A%E6%8A%A5%E9%87%8D%E8%A6%81%E4%BA%8B%E4%BB%B6%E7%9A%84%E5%8F%91%E7%94%9F%E3%80%82%E5%9C%A8%E4%B8%8B%E5%9B%BE%E4%B8%AD%EF%BC%8C%20%EF%BC%8849%EF%BC%89%E8%83%BD%E5%A4%9F%E5%93%8D%E5%BA%94Manager2%E7%9A%84getRequest%E8%AF%B7%E6%B1%82%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice false"><span class="number">（48） </span>A．GetRequest</p>
            <p class="choice false">&emsp;&emsp;B．Get-nextRequest</p>
            <p class="choice false">&emsp;&emsp;C．SetRequest</p>
            <p class="choice true">&emsp;&emsp;D．Trap</p>
            <p class="one-line-choice"><span class="number">（49）</span>
                <span class="choice true">A．Agent1</span>
                <span class="choice false">B．Agent2</span>
                <span class="choice false">C．Agent3</span>
                <span class="choice false">D．Agent4</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Trap操作是用于紧急事件上报的。<br />
                    Manager2属于public2组，该组的管理端是Agent1。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在SNMPv2中，一个实体接收到一个报文，一般经过四个步骤：<br />
                （1）把PDU部分、源和目标端口号交给认证服务。如果认证失败，发送一个陷入，丢弃报文。<br />
                （2）协议实体对PDU做句法检查。如果通过检查，则根据团体名和适当的访问策略作相应的处理。<br />
                （3）如果认证通过，则把PDU转换成ASN.1的形式。<br />
                （4）对报文进行语法检查，丢弃出错的报文。<br />
                这四个步骤的正确次序是 （50） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8SNMPv2%E4%B8%AD%EF%BC%8C%E4%B8%80%E4%B8%AA%E5%AE%9E%E4%BD%93%E6%8E%A5%E6%94%B6%E5%88%B0%E4%B8%80%E4%B8%AA%E6%8A%A5%E6%96%87%EF%BC%8C%E4%B8%80%E8%88%AC%E7%BB%8F%E8%BF%87%E5%9B%9B%E4%B8%AA%E6%AD%A5%E9%AA%A4%EF%BC%9A%3Cbr/%3E%0A%20%EF%BC%881%EF%BC%89%E6%8A%8APDU%E9%83%A8%E5%88%86%E3%80%81%E6%BA%90%E5%92%8C%E7%9B%AE%E6%A0%87%E7%AB%AF%E5%8F%A3%E5%8F%B7%E4%BA%A4%E7%BB%99%E8%AE%A4%E8%AF%81%E6%9C%8D%E5%8A%A1%E3%80%82%E5%A6%82%E6%9E%9C%E8%AE%A4%E8%AF%81%E5%A4%B1%E8%B4%A5%EF%BC%8C%E5%8F%91%E9%80%81%E4%B8%80%E4%B8%AA%E9%99%B7%E5%85%A5%EF%BC%8C%E4%B8%A2%E5%BC%83%E6%8A%A5%E6%96%87%E3%80%82%3Cbr/%3E%0A%20%EF%BC%882%EF%BC%89%E5%8D%8F%E8%AE%AE%E5%AE%9E%E4%BD%93%E5%AF%B9PDU%E5%81%9A%E5%8F%A5%E6%B3%95%E6%A3%80%E6%9F%A5%E3%80%82%E5%A6%82%E6%9E%9C%E9%80%9A%E8%BF%87%E6%A3%80%E6%9F%A5%EF%BC%8C%E5%88%99%E6%A0%B9%E6%8D%AE%E5%9B%A2%E4%BD%93%E5%90%8D%E5%92%8C%E9%80%82%E5%BD%93%E7%9A%84%E8%AE%BF%E9%97%AE%E7%AD%96%E7%95%A5%E4%BD%9C%E7%9B%B8%E5%BA%94%E7%9A%84%E5%A4%84%E7%90%86%E3%80%82%3Cbr/%3E%0A%20%EF%BC%883%EF%BC%89%E5%A6%82%E6%9E%9C%E8%AE%A4%E8%AF%81%E9%80%9A%E8%BF%87%EF%BC%8C%E5%88%99%E6%8A%8APDU%E8%BD%AC%E6%8D%A2%E6%88%90ASN.1%E7%9A%84%E5%BD%A2%E5%BC%8F%E3%80%82%3Cbr/%3E%0A%20%EF%BC%884%EF%BC%89%E5%AF%B9%E6%8A%A5%E6%96%87%E8%BF%9B%E8%A1%8C%E8%AF%AD%E6%B3%95%E6%A3%80%E6%9F%A5%EF%BC%8C%E4%B8%A2%E5%BC%83%E5%87%BA%E9%94%99%E7%9A%84%E6%8A%A5%E6%96%87%E3%80%82%3Cbr/%3E%0A%E8%BF%99%E5%9B%9B%E4%B8%AA%E6%AD%A5%E9%AA%A4%E7%9A%84%E6%AD%A3%E7%A1%AE%E6%AC%A1%E5%BA%8F%E6%98%AF%20%EF%BC%8850%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（50） </span>A．（1）（3）（2）（4）</p>
            <p class="choice false">&emsp;&emsp;B．（3）（2）（1）（4）
            </p>
            <p class="choice true">&emsp;&emsp;C．（4）（1）（3）（2）</p>
            <p class="choice false">&emsp;&emsp;D．（2）（1）（3）（4）</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    如果以前没有接触过这些知识，可以通过分析获得正确答案：<br />
                    在处理报文前，应该先对报文进行语法和句法进行分析；<br />
                    步骤（3）应该紧接着步骤（1）；<br />
                    收到报文时，应该最先做的就是语法分析，这样才能分离出PDU（协议数据单元），因此（4）应该在（1）之前。<br />
                    根据以上分析已经可以获得正确答案。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下列出的IP地址中，不能作为目标地址的是 （51） ，不能作为源地址的是 （52） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%88%97%E5%87%BA%E7%9A%84IP%E5%9C%B0%E5%9D%80%E4%B8%AD%EF%BC%8C%E4%B8%8D%E8%83%BD%E4%BD%9C%E4%B8%BA%E7%9B%AE%E6%A0%87%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%20%EF%BC%8851%EF%BC%89%20%EF%BC%8C%E4%B8%8D%E8%83%BD%E4%BD%9C%E4%B8%BA%E6%BA%90%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%20%EF%BC%8852%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（51） </span>A．0.0.0.0</p>
            <p class="choice false">&emsp;&emsp;B．127.0.0.1
            </p>
            <p class="choice false">&emsp;&emsp;C．100.10.255.255</p>
            <p class="choice false">&emsp;&emsp;D．10.0.0.1</p>
            <p class="choice header_choice false"><span class="number">（52） </span>A．0.0.0.0</p>
            <p class="choice false">&emsp;&emsp;B．127.0.0.1
            </p>
            <p class="choice true">&emsp;&emsp;C．100.255.255.255</p>
            <p class="choice false">&emsp;&emsp;D．10.0.0.1</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    0.0.0.0代表本网络，不能作为目标地址。<br />
                    100.255.255.255是A类广播地址，不能作为源地址。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">私网地址用于配置本地网络，下面的地址中，属于私网地址的是 （53） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E7%94%A8%E4%BA%8E%E9%85%8D%E7%BD%AE%E6%9C%AC%E5%9C%B0%E7%BD%91%E7%BB%9C%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E5%9C%B0%E5%9D%80%E4%B8%AD%EF%BC%8C%E5%B1%9E%E4%BA%8E%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（53） </span>A．100.0.0.0</p>
            <p class="choice false">&emsp;&emsp;B．172.15.0.0
            </p>
            <p class="choice true">&emsp;&emsp;C．192.168.0.0</p>
            <p class="choice false">&emsp;&emsp;D．244.0.0.0</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某公司网络的地址是202.100.192.0/20，要把该网络分成16个子网，则对应的子网掩码应该是 （54） ，每个子网可分配的主机地址数是 （55） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E5%85%AC%E5%8F%B8%E7%BD%91%E7%BB%9C%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF202.100.192.0/20%EF%BC%8C%E8%A6%81%E6%8A%8A%E8%AF%A5%E7%BD%91%E7%BB%9C%E5%88%86%E6%88%9016%E4%B8%AA%E5%AD%90%E7%BD%91%EF%BC%8C%E5%88%99%E5%AF%B9%E5%BA%94%E7%9A%84%E5%AD%90%E7%BD%91%E6%8E%A9%E7%A0%81%E5%BA%94%E8%AF%A5%E6%98%AF%20%EF%BC%8854%EF%BC%89%20%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%AD%90%E7%BD%91%E5%8F%AF%E5%88%86%E9%85%8D%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E6%95%B0%E6%98%AF%20%EF%BC%8855%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（54） </span>A．255.255.240.0</p>
            <p class="choice false">&emsp;&emsp;B．255.255.224.0
            </p>
            <p class="choice false">&emsp;&emsp;C．255.255.254.0</p>
            <p class="choice true">&emsp;&emsp;D．255.255.255.0</p>
            <p class="one-line-choice"><span class="number">（55）</span>
                <span class="choice false">A．30</span>
                <span class="choice false">B．62</span>
                <span class="choice true">C．254</span>
                <span class="choice false">D．510</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    要分16个子网，需要从主机位中划出 log216=4位，改为网络位。因此子网掩码中的“1”的数量将变为20+4＝24，传换成4个十进制数的点分表示法就是255.255.255.0。<br />
                    划分子网掩码后主机位还有8位，因此每个子网可分配的主机地址数为 28-2=254。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下给出的地址中，不属于子网192.168.64.0/20的主机地址是 （56） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E7%BB%99%E5%87%BA%E7%9A%84%E5%9C%B0%E5%9D%80%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E5%AD%90%E7%BD%91192.168.64.0/20%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8856%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（56） </span>A．192.168.78.17</p>
            <p class="choice false">&emsp;&emsp;B．192.168.79.16
            </p>
            <p class="choice true">&emsp;&emsp;C．192.168.82.14</p>
            <p class="choice false">&emsp;&emsp;D．192.168.66.15</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    子网192.168.64.0/20的地址范围为192.168.64.0～192.168.79.255。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">路由器命令“Router(config)# access-list 1 permit 192.168.1.1”的含义是 （57） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E8%B7%AF%E7%94%B1%E5%99%A8%E5%91%BD%E4%BB%A4%E2%80%9CRouter%28config%29%23%20access-list%201%20permit%20192.168.1.1%E2%80%9D%E7%9A%84%E5%90%AB%E4%B9%89%E6%98%AF%20%EF%BC%8857%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（57） </span>A．不允许源地址为192.168.1.1的分组通过，如果分组不匹配，则结束
            </p>
            <p class="choice true">&emsp;&emsp;B．允许源地址为192.168.1.1的分组通过，如果分组不匹配，则检查下一条语句
            </p>
            <p class="choice false">&emsp;&emsp;C．不允许目标地址为192.168.1.1的分组通过，如果分组不匹配，则结束
            </p>
            <p class="choice false">&emsp;&emsp;D．允许目标地址为192.168.1.1的分组通过，如果分组不匹配，则检查下一条语句</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">路由器Console端口默认的数据速率为 （58） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%B7%AF%E7%94%B1%E5%99%A8Console%E7%AB%AF%E5%8F%A3%E9%BB%98%E8%AE%A4%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（58）</span>
                <span class="choice false">A．2400b/s</span>
                <span class="choice false">B．4800b/s
                </span>
                <span class="choice true">C．9600b/s</span>
                <span class="choice false">D．10Mb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">当启用VTP修剪功能后，如果交换端口中加入一个新的VLAN，则立即 （59） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BD%93%E5%90%AF%E7%94%A8VTP%E4%BF%AE%E5%89%AA%E5%8A%9F%E8%83%BD%E5%90%8E%EF%BC%8C%E5%A6%82%E6%9E%9C%E4%BA%A4%E6%8D%A2%E7%AB%AF%E5%8F%A3%E4%B8%AD%E5%8A%A0%E5%85%A5%E4%B8%80%E4%B8%AA%E6%96%B0%E7%9A%84VLAN%EF%BC%8C%E5%88%99%E7%AB%8B%E5%8D%B3%20%EF%BC%8859%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（59） </span>A．剪断与周边交换机的连接
            </p>
            <p class="choice false">&emsp;&emsp;B．把新的VLAN中的数据发送给周边交换机
            </p>
            <p class="choice true">&emsp;&emsp;C．向周边交换机发送VTP连接报文
            </p>
            <p class="choice false">&emsp;&emsp;D．要求周边交换机建立同样的VLAN</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    VTP修剪（Pruning）功能可以用来减少Trunk中的流量。如果整个VTP域没有某个VLAN的端口，则启动修剪功能的Trunk将过滤该VLAN的数据帧，无论数据帧是单播帧还是广播帧。<br />
                    如果有新的VLAN加入，则要向周边交换机发送VTP连接报文，重新调整过滤规则。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面是显示交换机端口状态的例子：<br />
                2950# show interface fastEthernet0/1 switchport<br />
                Name: fa0/1<br />
                Switchport: Enabled<br />
                Administrative mode: trunk<br />
                Operational Mode: trunk<br />
                Administrative Trunking Encapsulation: dot1q<br />
                Operational Trunking Encapsulation: dot1q<br />
                Negotiation of Trunking: Disabled<br />
                Access Mode VLAN: 0 ((Inactive))<br />
                Trunking Native Mode VLAN: 1 (default)<br />
                Trunking VLANs Enabled: ALL<br />
                Trunking VLANs Active: 1, 2<br />
                Pruning VLANs Enabled: 2-1001<br />
                Priority for untagged frames: 0<br />
                Override vlan tag priority: FALSE<br />
                Voice VLAN: none<br />
                在以上显示的信息中，端口fa0/1的链路模式被设置为（60），默认的VLAN为（61）。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E6%98%AF%E6%98%BE%E7%A4%BA%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%AB%AF%E5%8F%A3%E7%8A%B6%E6%80%81%E7%9A%84%E4%BE%8B%E5%AD%90%EF%BC%9A%3Cbr/%3E%0A2950%23%20show%20interface%20fastEthernet0/1%20switchport%3Cbr/%3E%0AName%3A%20fa0/1%3Cbr/%3E%0ASwitchport%3A%20Enabled%3Cbr/%3E%0AAdministrative%20mode%3A%20trunk%3Cbr/%3E%0AOperational%20Mode%3A%20trunk%3Cbr/%3E%0AAdministrative%20Trunking%20Encapsulation%3A%20dot1q%3Cbr/%3E%0AOperational%20Trunking%20Encapsulation%3A%20dot1q%3Cbr/%3E%0ANegotiation%20of%20Trunking%3A%20Disabled%3Cbr/%3E%0AAccess%20Mode%20VLAN%3A%200%20%28%28Inactive%29%29%3Cbr/%3E%0ATrunking%20Native%20Mode%20VLAN%3A%201%20%28default%29%3Cbr/%3E%0ATrunking%20VLANs%20Enabled%3A%20ALL%3Cbr/%3E%0ATrunking%20VLANs%20Active%3A%201%2C%202%3Cbr/%3E%0APruning%20VLANs%20Enabled%3A%202-1001%3Cbr/%3E%0APriority%20for%20untagged%20frames%3A%200%3Cbr/%3E%0AOverride%20vlan%20tag%20priority%3A%20FALSE%3Cbr/%3E%0AVoice%20VLAN%3A%20none%3Cbr/%3E%0A%E5%9C%A8%E4%BB%A5%E4%B8%8A%E6%98%BE%E7%A4%BA%E7%9A%84%E4%BF%A1%E6%81%AF%E4%B8%AD%EF%BC%8C%E7%AB%AF%E5%8F%A3fa0/1%E7%9A%84%E9%93%BE%E8%B7%AF%E6%A8%A1%E5%BC%8F%E8%A2%AB%E8%AE%BE%E7%BD%AE%E4%B8%BA%EF%BC%8860%EF%BC%89%EF%BC%8C%E9%BB%98%E8%AE%A4%E7%9A%84VLAN%E4%B8%BA%EF%BC%8861%EF%BC%89%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（60） </span>A．中继连接状态，并要求对方也建立中继连接
            </p>
            <p class="choice true">&emsp;&emsp;B．中继连接状态，不要求与对方建立中继连接
            </p>
            <p class="choice false">&emsp;&emsp;C．接入链路状态，要求与对方建立中继连接
            </p>
            <p class="choice false">&emsp;&emsp;D．接入链路状态，不要求对方建立中继连接</p>
            <p class="one-line-choice"><span class="number">（61）</span>
                <span class="choice false">A．VLAN0</span>
                <span class="choice true">B．VLAN1
                </span>
                <span class="choice false">C．VLAN2</span>
                <span class="choice false">D．VLAN3</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    由Operational Mode: trunk和Negotiation of Trunking: Disabled知道，该端口被设置为中继连接状态，不要求与对方建立中继连接。<br />
                    交换机默认VLAN为VLAN1。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以太网的CSMA/CD协议采用坚持型监听算法。与其他监听算法相比，这种算法的主要特点是 （62） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%9A%84CSMA/CD%E5%8D%8F%E8%AE%AE%E9%87%87%E7%94%A8%E5%9D%9A%E6%8C%81%E5%9E%8B%E7%9B%91%E5%90%AC%E7%AE%97%E6%B3%95%E3%80%82%E4%B8%8E%E5%85%B6%E4%BB%96%E7%9B%91%E5%90%AC%E7%AE%97%E6%B3%95%E7%9B%B8%E6%AF%94%EF%BC%8C%E8%BF%99%E7%A7%8D%E7%AE%97%E6%B3%95%E7%9A%84%E4%B8%BB%E8%A6%81%E7%89%B9%E7%82%B9%E6%98%AF%20%EF%BC%8862%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（62） </span>A．传输介质利用率低，冲突概率也低
            </p>
            <p class="choice true">&emsp;&emsp;B．传输介质利用率高，冲突概率也高
            </p>
            <p class="choice false">&emsp;&emsp;C．传输介质利用率低，但冲突概率高
            </p>
            <p class="choice false">&emsp;&emsp;D．传输介质利用率高，但冲突概率低</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IEEE 802局域网中的地址分为两级，其中LLC地址是 （63） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IEEE%20802%E5%B1%80%E5%9F%9F%E7%BD%91%E4%B8%AD%E7%9A%84%E5%9C%B0%E5%9D%80%E5%88%86%E4%B8%BA%E4%B8%A4%E7%BA%A7%EF%BC%8C%E5%85%B6%E4%B8%ADLLC%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8863%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（63）</span>
                <span class="choice false">A．应用层地址</span>
                <span class="choice true">B．上层协议实体的地址
                </span>
                <span class="choice false">C．主机的地址</span>
                <span class="choice false">D．网卡的地址</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">快速以太网物理层规范100BASE-TX规定使用 （64） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BF%AB%E9%80%9F%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%89%A9%E7%90%86%E5%B1%82%E8%A7%84%E8%8C%83100BASE-TX%E8%A7%84%E5%AE%9A%E4%BD%BF%E7%94%A8%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（64） </span>A．1对5类UTP，支持10M/100M自动协商
            </p>
            <p class="choice false">&emsp;&emsp;B．1对5类UTP，不支持10M/100M自动协商
            </p>
            <p class="choice true">&emsp;&emsp;C．2对5类UTP，支持10M/100M自动协商
            </p>
            <p class="choice false">&emsp;&emsp;D．2对5类UTP，不支持10M/100M自动协商</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    做过网线的人都知道，常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IEEE802.11定义了无线局域网的两种工作模式，其中的 （65）
                模式是一种点对点连接的网络，不需要无线接入点和有线网络的支持。IEEE802.11g的物理层采用了扩频技术，工作在 （66） 频段。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=IEEE802.11%E5%AE%9A%E4%B9%89%E4%BA%86%E6%97%A0%E7%BA%BF%E5%B1%80%E5%9F%9F%E7%BD%91%E7%9A%84%E4%B8%A4%E7%A7%8D%E5%B7%A5%E4%BD%9C%E6%A8%A1%E5%BC%8F%EF%BC%8C%E5%85%B6%E4%B8%AD%E7%9A%84%20%EF%BC%8865%EF%BC%89%20%E6%A8%A1%E5%BC%8F%E6%98%AF%E4%B8%80%E7%A7%8D%E7%82%B9%E5%AF%B9%E7%82%B9%E8%BF%9E%E6%8E%A5%E7%9A%84%E7%BD%91%E7%BB%9C%EF%BC%8C%E4%B8%8D%E9%9C%80%E8%A6%81%E6%97%A0%E7%BA%BF%E6%8E%A5%E5%85%A5%E7%82%B9%E5%92%8C%E6%9C%89%E7%BA%BF%E7%BD%91%E7%BB%9C%E7%9A%84%E6%94%AF%E6%8C%81%E3%80%82IEEE802.11g%E7%9A%84%E7%89%A9%E7%90%86%E5%B1%82%E9%87%87%E7%94%A8%E4%BA%86%E6%89%A9%E9%A2%91%E6%8A%80%E6%9C%AF%EF%BC%8C%E5%B7%A5%E4%BD%9C%E5%9C%A8%20%EF%BC%8866%EF%BC%89%20%E9%A2%91%E6%AE%B5%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（65）</span>
                <span class="choice false">A．Roaming</span>
                <span class="choice true">B．AdHoc
                </span>
                <span class="choice false">C．Infrastructure</span>
                <span class="choice false">D．DiffuseIR</span>
            </p>
            <p class="one-line-choice"><span class="number">（66）</span>
                <span class="choice false">A．600MHz</span>
                <span class="choice false">B．800MHz
                </span>
                <span class="choice true">C．2.4GHz</span>
                <span class="choice false">D．19.2GHz</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    IEEE
                    802.11标准定义了两种无线网络拓扑结构：一种是对等网络，另一种是结构化网络。对等网络也称无中心网络或Ad-hoc（拉丁语，可译为自组网）网络，各个无线工作站之间采用点对点的方式连接。结构化网络也称有中心网络，由无线AP、无线工作站以及DSS（Distribution
                    System Service，分布式系统服务）构成，工作站之间的连接都通过无线AP（Access Point，接入点）。<br />
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于网络存储描述正确的是 （67） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E7%BD%91%E7%BB%9C%E5%AD%98%E5%82%A8%E6%8F%8F%E8%BF%B0%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8867%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（67） </span>A．SAN系统是将存储设备连接到现有的网络上，其扩展能力有限
            </p>
            <p class="choice false">&emsp;&emsp;B．SAN系统是将存储设备连接到现有的网络上，其扩展能力很强
            </p>
            <p class="choice false">&emsp;&emsp;C．SAN系统使用专用网络，其扩展能力有限
            </p>
            <p class="choice true">&emsp;&emsp;D．SAN系统使用专用网络，其扩展能力很强</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识，如果不了解就查“百度知道”吧。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（68） 是错误的网络设备选型原则。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%8868%EF%BC%89%20%E6%98%AF%E9%94%99%E8%AF%AF%E7%9A%84%E7%BD%91%E7%BB%9C%E8%AE%BE%E5%A4%87%E9%80%89%E5%9E%8B%E5%8E%9F%E5%88%99%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（68） </span>A．选择网络设备，应尽可能地选择同一厂家的产品
            </p>
            <p class="choice true">&emsp;&emsp;B．为了保证网络性能，应尽可能地选择性能高的产品
            </p>
            <p class="choice false">&emsp;&emsp;C．核心设备的选取要考虑系统日后的扩展性
            </p>
            <p class="choice false">&emsp;&emsp;D．核心设备选取要充分其可靠性</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    最合适的才是最好的，不要一味追求性能指标。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于网络工程需求分析的论述中，正确的是 （69） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E7%BD%91%E7%BB%9C%E5%B7%A5%E7%A8%8B%E9%9C%80%E6%B1%82%E5%88%86%E6%9E%90%E7%9A%84%E8%AE%BA%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8869%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（69） </span>A．任何网络都不可能是一个能够满足各项功能需求的万能网
            </p>
            <p class="choice false">&emsp;&emsp;B．必须采用最先进的网络设备，获得最高的网络性能
            </p>
            <p class="choice false">&emsp;&emsp;C．网络需求分析独立于应用系统的需求分析
            </p>
            <p class="choice false">&emsp;&emsp;D．网络需求分析时可以先不考虑系统的扩展性</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    A是最有哲理的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于项目管理甘特图的结构，下列选项中合理的是 （70） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E9%A1%B9%E7%9B%AE%E7%AE%A1%E7%90%86%E7%94%98%E7%89%B9%E5%9B%BE%E7%9A%84%E7%BB%93%E6%9E%84%EF%BC%8C%E4%B8%8B%E5%88%97%E9%80%89%E9%A1%B9%E4%B8%AD%E5%90%88%E7%90%86%E7%9A%84%E6%98%AF%20%EF%BC%8870%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（70） </span>A．任务名称，工期，开始时间，前置任务，后置任务，资源名称
            </p>
            <p class="choice false">&emsp;&emsp;B．任务名称，开始时间，完成时间，後置任务，人力资源，进度线
            </p>
            <p class="choice true">&emsp;&emsp;C．任务名称，工期，开始时间，完成时间，前置任务，资源名称，进度线
            </p>
            <p class="choice false">&emsp;&emsp;D．任务名称，开始时间，完成时间，前置任务，人力资源，进度线</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    A缺少进度线，不合理。<br />
                    B的人力资源不能代替所有资源，另外“前置任务”是必须的，“后置任务”反而可以不要。另外，只有准时完工时完成时间才等于开始时间+工期。<br />
                    D的人力资源不能代替所有资源。没有工期。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">WLANs are increasingly popular because they enable cost-effective connections among
                people and applications that were not possible in the past. For example, WLAN-based applications can
                enable fine-grained management of supply （71） to improve their efficiency and reduce （72） . WLANs can
                also enable entirely new business processes. To cite but one example, hospitals are using WLAN-enabled
                point-of-care （73） to reduce errors and improve overall patient care. WLAN management solutions provide
                a variety of other benefits that can be substantial but difficult to measure. For example, they can
                protect corporate data by preventing （74）through rogue access points. They can improve overall network
                management by integrating with customers’ existing systems. Fortunately, it isn’t necessary to measure
                these benefits to justify investing in WLAN management solutions, which can quickly pay for themselves
                simply by minimizing time-（75） deployment and administrative chores.&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=WLANs%20are%20increasingly%20popular%20because%20they%20enable%20cost-effective%20connections%20among%20people%20and%20applications%20that%20were%20not%20possible%20in%20the%20past.%20For%20example%2C%20WLAN-based%20applications%20can%20enable%20fine-grained%20management%20of%20supply%20%EF%BC%8871%EF%BC%89%20to%20improve%20their%20efficiency%20and%20reduce%20%EF%BC%8872%EF%BC%89%20.%20WLANs%20can%20also%20enable%20entirely%20new%20business%20processes.%20To%20cite%20but%20one%20example%2C%20hospitals%20are%20using%20WLAN-enabled%20point-of-care%20%EF%BC%8873%EF%BC%89%20to%20reduce%20errors%20and%20improve%20overall%20patient%20care.%20WLAN%20management%20solutions%20provide%20a%20variety%20of%20other%20benefits%20that%20can%20be%20substantial%20but%20difficult%20to%20measure.%20For%20example%2C%20they%20can%20protect%20corporate%20data%20by%20preventing%20%EF%BC%8874%EF%BC%89through%20rogue%20access%20points.%20They%20can%20improve%20overall%20network%20management%20by%20integrating%20with%20customers%E2%80%99%20existing%20systems.%20Fortunately%2C%20it%20isn%E2%80%99t%20necessary%20to%20measure%20these%20benefits%20to%20justify%20investing%20in%20WLAN%20management%20solutions%2C%20which%20can%20quickly%20pay%20for%20themselves%20simply%20by%20minimizing%20time-%EF%BC%8875%EF%BC%89%20deployment%20and%20administrative%20chores.">百度</a></p>
            <p class="one-line-choice"><span class="number">（71）</span>
                <span class="choice false">A．custom</span>
                <span class="choice false">B．server</span>
                <span class="choice true">C．chains</span>
                <span class="choice false">D．chances</span>
            </p>
            <p class="one-line-choice"><span class="number">（72）</span>
                <span class="choice true">A．overhead</span>
                <span class="choice false">B．connection</span>
                <span class="choice false">C．supply</span>
                <span class="choice false">D．effect</span>
            </p>
            <p class="choice header_choice false"><span class="number">（73） </span>A．transportations</p>
            <p class="choice true">&emsp;&emsp;B．applications</p>
            <p class="choice false">&emsp;&emsp;C．connections</p>
            <p class="choice false">&emsp;&emsp;D．translations</p>
            <p class="one-line-choice"><span class="number">（74）</span>
                <span class="choice false">A．integration</span>
                <span class="choice false">B．interest</span>
                <span class="choice false">C．instruction</span>
                <span class="choice true">D．intrusion</span>
            </p>
            <p class="one-line-choice"><span class="number">（75）</span>
                <span class="choice false">A．capable</span>
                <span class="choice true">B．consuming</span>
                <span class="choice false">C．effective</span>
                <span class="choice false">D．connected</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    学好英语，一切都很简单。</p>
            </div>
        </div>


    </div>

    <!-- <?php
    require ('../template/footer.php');
    ?> -->

</body>

</html>