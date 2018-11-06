<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2009年下半年 网络工程师 上午试卷</title>
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
        <h1 style="text-align:center">2009年下半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">以下关于CPU的叙述中，错误的是 （1） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8ECPU%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%881%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（1） </span>A．CPU产生每条指令的操作信号并将操作信号送往相应的部件进行控制
            </p>
            <p class="choice true">&emsp;&emsp;B．程序控制器PC除了存放指令地址，也可以临时存储算术/逻辑运算结果
            </p>
            <p class="choice false">&emsp;&emsp;C．CPU中的控制器决定计算机运行过程的自动化
            </p>
            <p class="choice false">&emsp;&emsp;D．指令译码器是CPU控制器中的部件</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    PC不可以存储算术/逻辑运算结果。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于CISC（Complex Instruction Set Computer，复杂指令集计算机）和RISC（Reduced Instruction Set
                Computer，精简指令集计算机）的叙述中，错误的是 （2） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8ECISC%EF%BC%88Complex%20Instruction%20Set%20Computer%EF%BC%8C%E5%A4%8D%E6%9D%82%E6%8C%87%E4%BB%A4%E9%9B%86%E8%AE%A1%E7%AE%97%E6%9C%BA%EF%BC%89%E5%92%8CRISC%EF%BC%88Reduced%20Instruction%20Set%20Computer%EF%BC%8C%E7%B2%BE%E7%AE%80%E6%8C%87%E4%BB%A4%E9%9B%86%E8%AE%A1%E7%AE%97%E6%9C%BA%EF%BC%89%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%882%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（2） </span>A．在CISC中，其复杂指令都采用硬布线逻辑来执行
            </p>
            <p class="choice false">&emsp;&emsp;B．采用CISC技术的CPU，其芯片设计复杂度更高
            </p>
            <p class="choice false">&emsp;&emsp;C．在RISC中，更适合采用硬布线逻辑执行指令
            </p>
            <p class="choice false">&emsp;&emsp;D．采用RISC技术，指令系统中的指令种类和寻址方式更少</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CISC 的指令系统对应的控制信号复杂，大多采用微程序控制器方式。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于校验码的叙述中，正确的是 （3） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E6%A0%A1%E9%AA%8C%E7%A0%81%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%883%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（3） </span>A．海明码利用多组数位的奇偶性来检错和纠错
            </p>
            <p class="choice false">&emsp;&emsp;B．海明码的码距必须大于等于1
            </p>
            <p class="choice false">&emsp;&emsp;C．循环冗余校验码具有很强的检错和纠错能力
            </p>
            <p class="choice false">&emsp;&emsp;D．循环冗余校验码的码距必定为1</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    海明码使用多组数位进行异或运算来检错和纠错。不过，异或也可以当做是奇偶计算，因此A可以算是正确的。<br />
                    B的错误在于码距不能等于1。<br />
                    C的错误在于CRC不具有纠错能力。<br />
                    取两个相近的码字，如0和1，再随便用个生成多项式（如101）进行计算，可以看出即使要传输的码字的码距为1，但整个编码（原数据+CRC校验码）的码距必定大于1。如果码距可以等于1的话，那么就意味着CRC编码可能无法检查出一位的错误。因此D也是错误的。<br />
                    不过，D的表达存在不严谨的地方。如果将题目中的“循环冗余校验码”定为整个编码（原数据+CRC校验码），则D是错误的。如果将题目中的“循环冗余校验码”定为CRC校验码，则D是正确的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于Cache的叙述中，正确的是 （4） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8ECache%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%884%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（4） </span>A．在容量确定的情况下，替换算法的时间复杂度是影响Cache命中率的关键因素
            </p>
            <p class="choice true">&emsp;&emsp;B．Cache的设计思想是在合理成本下提高命中率
            </p>
            <p class="choice false">&emsp;&emsp;C．Cache的设计目标是容量尽可能与主存容量相等
            </p>
            <p class="choice false">&emsp;&emsp;D．CPU中的Cache容量应该大于CPU之外的Cache容量</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    A、C、D都明显错误。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">面向对象开发方法的基本思想是尽可能按照人类认识客观世界的方法来分析和解决问题， （5） 方法不属于面向对象方法。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1%E5%BC%80%E5%8F%91%E6%96%B9%E6%B3%95%E7%9A%84%E5%9F%BA%E6%9C%AC%E6%80%9D%E6%83%B3%E6%98%AF%E5%B0%BD%E5%8F%AF%E8%83%BD%E6%8C%89%E7%85%A7%E4%BA%BA%E7%B1%BB%E8%AE%A4%E8%AF%86%E5%AE%A2%E8%A7%82%E4%B8%96%E7%95%8C%E7%9A%84%E6%96%B9%E6%B3%95%E6%9D%A5%E5%88%86%E6%9E%90%E5%92%8C%E8%A7%A3%E5%86%B3%E9%97%AE%E9%A2%98%EF%BC%8C%20%EF%BC%885%EF%BC%89%20%E6%96%B9%E6%B3%95%E4%B8%8D%E5%B1%9E%E4%BA%8E%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1%E6%96%B9%E6%B3%95%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（5）</span>
                <span class="choice false">A．Booch</span>
                <span class="choice false">B．Coad</span>
                <span class="choice false">C．OMT</span>
                <span class="choice true">D．Jackson</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Jackson是面向数据结构的设计方法。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">确定构建软件系统所需要的人数时，无需考虑 （6） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%A1%AE%E5%AE%9A%E6%9E%84%E5%BB%BA%E8%BD%AF%E4%BB%B6%E7%B3%BB%E7%BB%9F%E6%89%80%E9%9C%80%E8%A6%81%E7%9A%84%E4%BA%BA%E6%95%B0%E6%97%B6%EF%BC%8C%E6%97%A0%E9%9C%80%E8%80%83%E8%99%91%20%EF%BC%886%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（6）</span>
                <span class="choice true">A．系统的市场前景</span>
                <span class="choice false">B．系统的规模
                </span>
                <span class="choice false">C．系统的技术复杂度</span>
                <span class="choice false">D．项目计划</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">一个项目为了修正一个错误而进行了变更。这个变更被修正后，却引起以前可以正确运行的代码出错。 （7） 最可能发现这一问题。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%80%E4%B8%AA%E9%A1%B9%E7%9B%AE%E4%B8%BA%E4%BA%86%E4%BF%AE%E6%AD%A3%E4%B8%80%E4%B8%AA%E9%94%99%E8%AF%AF%E8%80%8C%E8%BF%9B%E8%A1%8C%E4%BA%86%E5%8F%98%E6%9B%B4%E3%80%82%E8%BF%99%E4%B8%AA%E5%8F%98%E6%9B%B4%E8%A2%AB%E4%BF%AE%E6%AD%A3%E5%90%8E%EF%BC%8C%E5%8D%B4%E5%BC%95%E8%B5%B7%E4%BB%A5%E5%89%8D%E5%8F%AF%E4%BB%A5%E6%AD%A3%E7%A1%AE%E8%BF%90%E8%A1%8C%E7%9A%84%E4%BB%A3%E7%A0%81%E5%87%BA%E9%94%99%E3%80%82%20%EF%BC%887%EF%BC%89%20%E6%9C%80%E5%8F%AF%E8%83%BD%E5%8F%91%E7%8E%B0%E8%BF%99%E4%B8%80%E9%97%AE%E9%A2%98%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（7）</span>
                <span class="choice false">A．单元测试</span>
                <span class="choice false">B．接受测试</span>
                <span class="choice true">C．回归测试</span>
                <span class="choice false">D．安装测试</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在软件生命周期中的任何一个阶段，只要软件发生了改变，就可能给该软件带来问题。软件的改变可能是源于发现了错误并做了修改，也有可能是因为在集成或维护阶段加入了新的模块。当软件中所含错误被发现时，如果错误跟踪与管理系统不够完善，就可能会遗漏对这些错误的修改；而开发者对错误理解的不够透彻，也可能导致所做的修改只修正了错误的外在表现，而没有修复错误本身，从而造成修改失败；修改还有可能产生副作用从而导致软件未被修改的部分产生新的问题，使本来工作正常的功能产生错误。同样，在有新代码加入软件的时候，除了新加入的代码中有可能含有错误外，新代码还有可能对原有的代码带来影响。因此，每当软件发生变化时，我们就必须重新测试现有的功能，以便确定修改是否达到了预期的目的，检查修改是否损害了原有的正常功能。同时，还需要补充新的测试用例来测试新的或被修改了的功能。为了验证修改的正确性及其影响就需要进行回归测试。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">操作系统是裸机上的第一层软件，其他系统软件（如 （8） 等）和应用软件都是建立在操作系统基础上的。下图①②③分别表示 （9） 。<br />
                <br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E6%98%AF%E8%A3%B8%E6%9C%BA%E4%B8%8A%E7%9A%84%E7%AC%AC%E4%B8%80%E5%B1%82%E8%BD%AF%E4%BB%B6%EF%BC%8C%E5%85%B6%E4%BB%96%E7%B3%BB%E7%BB%9F%E8%BD%AF%E4%BB%B6%EF%BC%88%E5%A6%82%20%EF%BC%888%EF%BC%89%20%E7%AD%89%EF%BC%89%E5%92%8C%E5%BA%94%E7%94%A8%E8%BD%AF%E4%BB%B6%E9%83%BD%E6%98%AF%E5%BB%BA%E7%AB%8B%E5%9C%A8%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E5%9F%BA%E7%A1%80%E4%B8%8A%E7%9A%84%E3%80%82%E4%B8%8B%E5%9B%BE%E2%91%A0%E2%91%A1%E2%91%A2%E5%88%86%E5%88%AB%E8%A1%A8%E7%A4%BA%20%EF%BC%889%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice false"><span class="number">（8） </span>A．编译程序、财务软件和数据库管理系统软件
            </p>
            <p class="choice true">&emsp;&emsp;B．汇编程序、编译程序和java解释器
            </p>
            <p class="choice false">&emsp;&emsp;C．编译程序、数据库管理系统软件和汽车防盗程序
            </p>
            <p class="choice false">&emsp;&emsp;D．语言处理程序、办公管理软件和气象预报软件</p>
            <p class="choice header_choice false"><span class="number">（9） </span>A．应用软件开发者、最终用户和系统软件开发者
            </p>
            <p class="choice false">&emsp;&emsp;B．应用软件开发者、系统软件开发者和最终用户
            </p>
            <p class="choice false">&emsp;&emsp;C．最终用户、系统软件开发者和应用软件开发者
            </p>
            <p class="choice true">&emsp;&emsp;D．最终用户、应用软件开发者和系统软件开发者</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">软件权利人与被许可方签订一份软件使用许可合同。若在该合同约定的时间和地域范围内，软件权利人不得再许可任何第三人以此相同的方法使用该项软件，但软件权利人可以自己使用，则该项许可使用是
                （10） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%BD%AF%E4%BB%B6%E6%9D%83%E5%88%A9%E4%BA%BA%E4%B8%8E%E8%A2%AB%E8%AE%B8%E5%8F%AF%E6%96%B9%E7%AD%BE%E8%AE%A2%E4%B8%80%E4%BB%BD%E8%BD%AF%E4%BB%B6%E4%BD%BF%E7%94%A8%E8%AE%B8%E5%8F%AF%E5%90%88%E5%90%8C%E3%80%82%E8%8B%A5%E5%9C%A8%E8%AF%A5%E5%90%88%E5%90%8C%E7%BA%A6%E5%AE%9A%E7%9A%84%E6%97%B6%E9%97%B4%E5%92%8C%E5%9C%B0%E5%9F%9F%E8%8C%83%E5%9B%B4%E5%86%85%EF%BC%8C%E8%BD%AF%E4%BB%B6%E6%9D%83%E5%88%A9%E4%BA%BA%E4%B8%8D%E5%BE%97%E5%86%8D%E8%AE%B8%E5%8F%AF%E4%BB%BB%E4%BD%95%E7%AC%AC%E4%B8%89%E4%BA%BA%E4%BB%A5%E6%AD%A4%E7%9B%B8%E5%90%8C%E7%9A%84%E6%96%B9%E6%B3%95%E4%BD%BF%E7%94%A8%E8%AF%A5%E9%A1%B9%E8%BD%AF%E4%BB%B6%EF%BC%8C%E4%BD%86%E8%BD%AF%E4%BB%B6%E6%9D%83%E5%88%A9%E4%BA%BA%E5%8F%AF%E4%BB%A5%E8%87%AA%E5%B7%B1%E4%BD%BF%E7%94%A8%EF%BC%8C%E5%88%99%E8%AF%A5%E9%A1%B9%E8%AE%B8%E5%8F%AF%E4%BD%BF%E7%94%A8%E6%98%AF%20%EF%BC%8810%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（10）</span>
                <span class="choice true">A．独家许可使用</span>
                <span class="choice false">B．独占许可使用
                </span>
                <span class="choice false">C．普通许可使用</span>
                <span class="choice false">D．部分许可使用</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    许可贸易实际上是一种许可方用授权的形式向被许可方转让技术使用权同时也让度一定市场的贸易行为。根据其授权程度大小，许可贸易可分为如下五种形式：<br />
                    (1)独占许可。它是指在合同规定的期限和地域内，被许可方对转让的技术享有独占的使用权，即许可方自己和任何第三方都不得使用该项技术和销售该技术项下的产品。所以这种许可的技术使用费是最高的。<br />
                    (2)排他许可，又称独家许可；它是指在合同规定的期限和地域内，被许可方和许可方自己都可使用该许可项下的技术和销售该技术项下的产品，但许可方不得再将该项技术转让给第三方。排他许可是仅排除第三方面不排除许可方。<br />
                    (3)普通许可。它是指在合同规定的期限和地域内，除被许可方该允许使用转让的技术和许可方仍保留对该项技术的使用权之外，许可方还有权再向第三方转让该项技术。普通许可是许可方授予被许可方权限最小的一种授权，其技术使用费也是最低的。<br />
                    (4)可转让许可，又称分许可。它是指被许可方经许可方允许，在合同规定的地域内，将其被许可所获得的技术使用权全部或部分地转售给第三方。通常只有独占许可或排他许可的被许可方才获得这种可转让许可的授权。<br />
                    (5)互换许可，又称交叉许可。它是指交易双方或各方以其所拥有的知识产权或专有技术，按各方都同意的条件互惠交换技术的使用权，供对方使用。这种许可多适用于原发明的专利权人与派生发明的专利权人之间。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">E1载波的基本帧由32个子信道组成。其中30个子信道用于传送语音数据，2个子信道 （11） 用于传送控制信令。该基本帧的传送时间为 （12） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=E1%E8%BD%BD%E6%B3%A2%E7%9A%84%E5%9F%BA%E6%9C%AC%E5%B8%A7%E7%94%B132%E4%B8%AA%E5%AD%90%E4%BF%A1%E9%81%93%E7%BB%84%E6%88%90%E3%80%82%E5%85%B6%E4%B8%AD30%E4%B8%AA%E5%AD%90%E4%BF%A1%E9%81%93%E7%94%A8%E4%BA%8E%E4%BC%A0%E9%80%81%E8%AF%AD%E9%9F%B3%E6%95%B0%E6%8D%AE%EF%BC%8C2%E4%B8%AA%E5%AD%90%E4%BF%A1%E9%81%93%20%EF%BC%8811%EF%BC%89%20%E7%94%A8%E4%BA%8E%E4%BC%A0%E9%80%81%E6%8E%A7%E5%88%B6%E4%BF%A1%E4%BB%A4%E3%80%82%E8%AF%A5%E5%9F%BA%E6%9C%AC%E5%B8%A7%E7%9A%84%E4%BC%A0%E9%80%81%E6%97%B6%E9%97%B4%E4%B8%BA%20%EF%BC%8812%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（11）</span>
                <span class="choice false">A．CH0和CH2</span>
                <span class="choice false">B．CH1和CH15
                </span>
                <span class="choice false">C．CH15和CH16</span>
                <span class="choice true">D．CH0和CH16</span>
            </p>
            <p class="one-line-choice"><span class="number">（12）</span>
                <span class="choice false">A．100ms</span>
                <span class="choice false">B．200μs</span>
                <span class="choice true">C．125μs</span>
                <span class="choice false">D．150μs</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    E1的一个时分复用帧的传送时间为125μs，即每秒8000次。<br />
                    一个帧的传送时间被划分为32相等的子信道，信道的编号为CH0~CH31。其中信道CH0用作帧同步用，信道CH16用来传送信令，剩下CH1~CH15和CH17~CH31
                    共30个信道可用于用户数据传输。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">4B/5B编码是一种两级编码方案，首先要把数据变成 （13） 编码，再把4位分为一组的代码变换成5单位的代码，这种编码的效率是 （14） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=4B/5B%E7%BC%96%E7%A0%81%E6%98%AF%E4%B8%80%E7%A7%8D%E4%B8%A4%E7%BA%A7%E7%BC%96%E7%A0%81%E6%96%B9%E6%A1%88%EF%BC%8C%E9%A6%96%E5%85%88%E8%A6%81%E6%8A%8A%E6%95%B0%E6%8D%AE%E5%8F%98%E6%88%90%20%EF%BC%8813%EF%BC%89%20%E7%BC%96%E7%A0%81%EF%BC%8C%E5%86%8D%E6%8A%8A4%E4%BD%8D%E5%88%86%E4%B8%BA%E4%B8%80%E7%BB%84%E7%9A%84%E4%BB%A3%E7%A0%81%E5%8F%98%E6%8D%A2%E6%88%905%E5%8D%95%E4%BD%8D%E7%9A%84%E4%BB%A3%E7%A0%81%EF%BC%8C%E8%BF%99%E7%A7%8D%E7%BC%96%E7%A0%81%E7%9A%84%E6%95%88%E7%8E%87%E6%98%AF%20%EF%BC%8814%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（13）</span>
                <span class="choice true">A．NRZ-I</span>
                <span class="choice false">B．AMI</span>
                <span class="choice false">C．QAM</span>
                <span class="choice false">D．PCM</span>
            </p>
            <p class="one-line-choice"><span class="number">（14）</span>
                <span class="choice false">A．0.4</span>
                <span class="choice false">B．0.5</span>
                <span class="choice true">C．0.8</span>
                <span class="choice false">D．1.0</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    4B / 5B编码是将欲发送的数据流每4bit作为一个组，然后按照4B /
                    5B编码规则将其转换成相应5bit码。5bit码共有32种组合，但只采用其中的16种作为数据码对应4bit码；其它的16种或者未用，或者作为控制码用于表示帧的开始和结束、光纤线路的状态（静止、空闲、暂停）等。<br />
                    4B / 5B编码可以在NRZ-I编码的基础上实现，但由于NRI-I编码（非归零反相编码）没有解决传输比特0的同步问题，因此，4B /
                    5B编码的设计目的是保证整个传输数据信息（不包括控制信息）的过程中，无论是单组编码还是相邻组编码，都不会出现超过3个连续“0”的情况。通过4B / 5B的特别编码方式，解决传输中的同步问题。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下图表示了某个数据的两种编码，这两种编码分别是 （15） ，该数据是 （16） 。<br />
                <br />
                §§<br />
                &emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%9B%BE%E8%A1%A8%E7%A4%BA%E4%BA%86%E6%9F%90%E4%B8%AA%E6%95%B0%E6%8D%AE%E7%9A%84%E4%B8%A4%E7%A7%8D%E7%BC%96%E7%A0%81%EF%BC%8C%E8%BF%99%E4%B8%A4%E7%A7%8D%E7%BC%96%E7%A0%81%E5%88%86%E5%88%AB%E6%98%AF%20%EF%BC%8815%EF%BC%89%20%EF%BC%8C%E8%AF%A5%E6%95%B0%E6%8D%AE%E6%98%AF%20%EF%BC%8816%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%3Cbr/%3E%0A%C2%A7%C2%A7%3Cbr/%3E%0A">百度</a></p>
            <p class="choice header_choice false"><span class="number">（15） </span>A．X为差分曼彻斯特码，Y为曼彻斯特码
            </p>
            <p class="choice false">&emsp;&emsp;B．X为差分曼彻斯特码，Y为双极性码
            </p>
            <p class="choice true">&emsp;&emsp;C．X为曼彻斯特码，Y为差分曼彻斯特码
            </p>
            <p class="choice false">&emsp;&emsp;D．X为曼彻斯特码，Y为不归零码</p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．010011110</span>
                <span class="choice true">B．010011010
                </span>
                <span class="choice false">C．011011010</span>
                <span class="choice false">D．010010010</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    两种编码都在比特间隙的中央有跳变，说明它们都属于双相位编码。因此（15）题答案只能在A、C中选择。<br />
                    如果（15）题选A，则x为差分曼彻斯特编码。差分曼彻斯特编码的比特间隙中间的跳变仅用于携带同步信息，不同比特是通过在比特间隙开始位置是否有电平跳变来表示。每比特的开始位置没有电平跳变表示比特1，有电平跳变表示比特0。<br />
                    如果将x编码当做差分曼彻斯特编码，其数据应该是？11010111（第一位编码由于无法预知其前状态，因此只能用？表示）。y编码可能是“011101100”或“100010011”，显然差分曼彻斯特编码和曼彻斯特编码的结果对应不上，因此A是错误的。<br />
                    如果（15）题选C，则y为差分曼彻斯特编码，其数据应该是？10011010。x编码可能是“010011010”或“101100101”。显然第一个结果能够与差分曼彻斯特编码的结果匹配。所以可以判定该数据位为010011010。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下图所示的调制方式是 （17） 。若载波频率为2400Hz，则码元速率为 （18） 。<br />
                <br />
                §§<br />
                &emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E8%B0%83%E5%88%B6%E6%96%B9%E5%BC%8F%E6%98%AF%20%EF%BC%8817%EF%BC%89%20%E3%80%82%E8%8B%A5%E8%BD%BD%E6%B3%A2%E9%A2%91%E7%8E%87%E4%B8%BA2400Hz%EF%BC%8C%E5%88%99%E7%A0%81%E5%85%83%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8818%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%3Cbr/%3E%0A%C2%A7%C2%A7%3Cbr/%3E%0A">百度</a></p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A．FSK</span>
                <span class="choice true">B．2DPSK</span>
                <span class="choice false">C．ASK</span>
                <span class="choice false">D．QAM</span>
            </p>
            <p class="one-line-choice"><span class="number">（18）</span>
                <span class="choice false">A．100Baud</span>
                <span class="choice false">B．200Baud</span>
                <span class="choice true">C．1200Baud</span>
                <span class="choice false">D．2400Baud</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    这个信号明显是属于相位调制，在（17）题的备选答案中，PSK是相移键控，满足题意。<br />
                    DPSK（Differential Phase Shift
                    Keying，差分相移键控）波形的同一个相位并不一定代表相同的数字信号，而前后码元的相对相位才能唯一地确定数字信息，所以只要前后码元的相对相位关系不破坏，就可正确恢复数字信息。这就避免了绝对PSK方式中的“倒π”现象的发生，因此得到广泛的应用。<br />
                    在数字信号中，一个数字脉冲称为一个码元（Symbol），一次脉冲的持续时间称为码元的宽度。码元速率（Symbol
                    Rate）表示单位时间内信号波形的最大变换次数，即单位时间内通过信道的码元个数。码元速率即数字信号中的波特率，所以码元速率的单位也为baud/s。<br />
                    在这个信号中，由于码元宽度为2个载波信号周期，因此其码元速率为1200baud/s。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在相隔2000km的两地间通过电缆以4800b/s的速率传送3000比特长的数据包，从开始发送到接收完数据需要的时间是 （19）
                。如果用50kb/s的卫星信道传送，则需要的时间是 （20） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E7%9B%B8%E9%9A%942000km%E7%9A%84%E4%B8%A4%E5%9C%B0%E9%97%B4%E9%80%9A%E8%BF%87%E7%94%B5%E7%BC%86%E4%BB%A54800b/s%E7%9A%84%E9%80%9F%E7%8E%87%E4%BC%A0%E9%80%813000%E6%AF%94%E7%89%B9%E9%95%BF%E7%9A%84%E6%95%B0%E6%8D%AE%E5%8C%85%EF%BC%8C%E4%BB%8E%E5%BC%80%E5%A7%8B%E5%8F%91%E9%80%81%E5%88%B0%E6%8E%A5%E6%94%B6%E5%AE%8C%E6%95%B0%E6%8D%AE%E9%9C%80%E8%A6%81%E7%9A%84%E6%97%B6%E9%97%B4%E6%98%AF%20%EF%BC%8819%EF%BC%89%20%E3%80%82%E5%A6%82%E6%9E%9C%E7%94%A850kb/s%E7%9A%84%E5%8D%AB%E6%98%9F%E4%BF%A1%E9%81%93%E4%BC%A0%E9%80%81%EF%BC%8C%E5%88%99%E9%9C%80%E8%A6%81%E7%9A%84%E6%97%B6%E9%97%B4%E6%98%AF%20%EF%BC%8820%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（19）</span>
                <span class="choice false">A．480ms</span>
                <span class="choice false">B．645ms</span>
                <span class="choice false">C．630ms</span>
                <span class="choice true">D．635ms</span>
            </p>
            <p class="one-line-choice"><span class="number">（20）</span>
                <span class="choice false">A．70ms</span>
                <span class="choice true">B．330ms</span>
                <span class="choice false">C．500ms</span>
                <span class="choice false">D．600ms</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    电信号在铜缆上的传播速度大致为光速的2/3，也就是每秒20万公里。<br />
                    （19）题的答案是总传输时间=传输延迟时间+数据帧的发送时间=2000 / 200000 + 3000 / 4800 = 10ms + 625ms = 635ms。<br />
                    （20）题有些含混，毕竟信号要先发到太空的卫星上，再转发到2000km外的接收站，因此总距离不可能还是2000km，不过题目没有提供相关数据。<br />
                    有的书上说卫星传输的延时是270ms，这里要说明一下：传输延时是与距离相关的，距离越远则延时越大。即使是同一颗卫星，其近地点与远地点的通信传输延迟都差别非常大。如果死记270ms，那就是教条主义了。<br />
                    现在只能按照教条主义的方法来计算了。总传输时间=传输延迟时间+数据帧的发送时间=270 + 3000 / 50000 = 6.7ms + 60ms = 330ms。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">RIPv2对RIPv1协议有三方面的改进。下面的选项中，RIPv2的特别不包括 （22） 。在RIPv2中，可以采用水平分割法来消除路由循环，这种方法是指 （23）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=RIPv2%E5%AF%B9RIPv1%E5%8D%8F%E8%AE%AE%E6%9C%89%E4%B8%89%E6%96%B9%E9%9D%A2%E7%9A%84%E6%94%B9%E8%BF%9B%E3%80%82%E4%B8%8B%E9%9D%A2%E7%9A%84%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8CRIPv2%E7%9A%84%E7%89%B9%E5%88%AB%E4%B8%8D%E5%8C%85%E6%8B%AC%20%EF%BC%8822%EF%BC%89%20%E3%80%82%E5%9C%A8RIPv2%E4%B8%AD%EF%BC%8C%E5%8F%AF%E4%BB%A5%E9%87%87%E7%94%A8%E6%B0%B4%E5%B9%B3%E5%88%86%E5%89%B2%E6%B3%95%E6%9D%A5%E6%B6%88%E9%99%A4%E8%B7%AF%E7%94%B1%E5%BE%AA%E7%8E%AF%EF%BC%8C%E8%BF%99%E7%A7%8D%E6%96%B9%E6%B3%95%E6%98%AF%E6%8C%87%20%EF%BC%8823%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（22） </span>A．使用组播而不是广播来传播路由更新报文
            </p>
            <p class="choice false">&emsp;&emsp;B．采用了触发更新机制来加速路由收敛
            </p>
            <p class="choice false">&emsp;&emsp;C．使用经过散列的口令来限制路由信息的传播
            </p>
            <p class="choice true">&emsp;&emsp;D．支持动态网络地址变换来使用私网地址</p>
            <p class="choice header_choice false"><span class="number">（23） </span>A．不能向自己的邻居发送路由信息
            </p>
            <p class="choice true">&emsp;&emsp;B．不要把一条路由信息发送给该信息的来源
            </p>
            <p class="choice false">&emsp;&emsp;C．路由信息只能发送给左右两边的路由器
            </p>
            <p class="choice false">&emsp;&emsp;D．路由信息必须用组播而不是广播方式发送</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    RIP是基于D-V算法的路由协议，由于D-V算法存在着路由收敛速度慢的问题，因此RIPv2采用了触发更新等机制来加速路由计算。<br />
                    RFC 1388对RIP协议进行了扩充，定义了RIPv2。RIPv1使用广播方式进行路由更新，RIPv2改为组播方式进行路由更新。RIPv2使用的组播地址是224.0.0.9。<br />
                    RIPv1不具备身份验证功能，这样就存在有安全漏洞。RIPv2实现了身份验证功能，能够通过路由更新消息中的口令来判断消息的合法性。RIPv2支持两种类型的身份验证：明文口令和MD5散列口令。明文口令安全性差，不推荐使用。当使用MD5散列口令时，发送方使用MD5单向散列函数将路由更新消息和口令一起计算出一个摘要值，然后将路由更新消息和摘要值一起发送出去；接收方收到路由更新消息后，使用相同的方法也计算出一个摘要值，将收到的摘要值和自己计算出来的摘要值进行对比，如果相等，说明双方使用了相同的MD5散列口令。由于MD5散列口令并非直接在网络上以明文形式进行传输，因此具有较高的安全性。<br />
                    使用共同口令的路由器构成了一个身份验证区域。一个网络中的路由器使用多个口令时，就可以构成多个身份验证区域。因此，RIPv2可以通过设置不同的身份验证口令来限制路由信息的传播。<br />
                    RIPv2的每个路由记录都携带有自己的子网掩码，因此实现了对CIDR（Class Inter-Domain Routing，无类域间路由）、VLSM（Variable Length
                    Subnetwork Mask，可变长子网掩码）和不连续子网的支持。但不涉及对NAT的支持。<br />
                    水平分割方法的原理是：路由器必须有选择地将路由表中的路由信息发送给相邻的其它路由器，而不是发送整个路由表。具体地说，即一条路由信息不会被发送给该信息的来源方。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">MPLS根据标记对分组进行交换，其标记中包含 （26） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MPLS%E6%A0%B9%E6%8D%AE%E6%A0%87%E8%AE%B0%E5%AF%B9%E5%88%86%E7%BB%84%E8%BF%9B%E8%A1%8C%E4%BA%A4%E6%8D%A2%EF%BC%8C%E5%85%B6%E6%A0%87%E8%AE%B0%E4%B8%AD%E5%8C%85%E5%90%AB%20%EF%BC%8826%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（26）</span>
                <span class="choice false">A．MAC地址</span>
                <span class="choice true">B．IP地址
                </span>
                <span class="choice false">C．VLAN编号</span>
                <span class="choice false">D．分组长度</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    MPLS提供多种协议的接口，如 IP、ATM、帧中继、资源预留协议（RSVP）、开放最短路径优先（OSPF）等。MPLS将IP地址映射为简单的具有固定长度的标签，用于不同的包转发和包交换技术。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某PC不能接入Internet，此时采用抓包工具捕获的以太网接口发出的信息如下：<br />
                §§<br />
                则该PC的IP地址为 （27） ，默认网关的IP地址为 （28） 。该PC不能接入Internet的原因可能是 （29） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E6%9F%90PC%E4%B8%8D%E8%83%BD%E6%8E%A5%E5%85%A5Internet%EF%BC%8C%E6%AD%A4%E6%97%B6%E9%87%87%E7%94%A8%E6%8A%93%E5%8C%85%E5%B7%A5%E5%85%B7%E6%8D%95%E8%8E%B7%E7%9A%84%E4%BB%A5%E5%A4%AA%E7%BD%91%E6%8E%A5%E5%8F%A3%E5%8F%91%E5%87%BA%E7%9A%84%E4%BF%A1%E6%81%AF%E5%A6%82%E4%B8%8B%EF%BC%9A%3Cbr/%3E%0A%C2%A7%C2%A7%3Cbr/%3E%0A%E5%88%99%E8%AF%A5PC%E7%9A%84IP%E5%9C%B0%E5%9D%80%E4%B8%BA%20%EF%BC%8827%EF%BC%89%20%EF%BC%8C%E9%BB%98%E8%AE%A4%E7%BD%91%E5%85%B3%E7%9A%84IP%E5%9C%B0%E5%9D%80%E4%B8%BA%20%EF%BC%8828%EF%BC%89%20%E3%80%82%E8%AF%A5PC%E4%B8%8D%E8%83%BD%E6%8E%A5%E5%85%A5Internet%E7%9A%84%E5%8E%9F%E5%9B%A0%E5%8F%AF%E8%83%BD%E6%98%AF%20%EF%BC%8829%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（27） </span>A．213.127.115.31</p>
            <p class="choice false">&emsp;&emsp;B．213.127.115.255
            </p>
            <p class="choice false">&emsp;&emsp;C．213.127.115.254</p>
            <p class="choice false">&emsp;&emsp;D．224.1.1.1</p>
            <p class="choice header_choice false"><span class="number">（28） </span>A．213.127.115.31</p>
            <p class="choice false">&emsp;&emsp;B．213.127.115.255
            </p>
            <p class="choice true">&emsp;&emsp;C．213.127.115.254</p>
            <p class="choice false">&emsp;&emsp;D．224.1.1.1</p>
            <p class="choice header_choice false"><span class="number">（29） </span>A．DNS解析错误</p>
            <p class="choice false">&emsp;&emsp;B．TCP/IP协议安装错误
            </p>
            <p class="choice true">&emsp;&emsp;C．不能正常连接到网关</p>
            <p class="choice false">&emsp;&emsp;D．DHCP服务器工作不正常</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    略。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Linux 系统中，采用 （30） 命令查看进程输出的信息，得到下图所示的结果。系统启动时最先运行的进程是 （31） ，下列关于进程xinetd的说法中正确的是 （32）
                。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Linux%20%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E9%87%87%E7%94%A8%20%EF%BC%8830%EF%BC%89%20%E5%91%BD%E4%BB%A4%E6%9F%A5%E7%9C%8B%E8%BF%9B%E7%A8%8B%E8%BE%93%E5%87%BA%E7%9A%84%E4%BF%A1%E6%81%AF%EF%BC%8C%E5%BE%97%E5%88%B0%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E7%BB%93%E6%9E%9C%E3%80%82%E7%B3%BB%E7%BB%9F%E5%90%AF%E5%8A%A8%E6%97%B6%E6%9C%80%E5%85%88%E8%BF%90%E8%A1%8C%E7%9A%84%E8%BF%9B%E7%A8%8B%E6%98%AF%20%EF%BC%8831%EF%BC%89%20%EF%BC%8C%E4%B8%8B%E5%88%97%E5%85%B3%E4%BA%8E%E8%BF%9B%E7%A8%8Bxinetd%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8832%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="one-line-choice"><span class="number">（30）</span>
                <span class="choice false">A．ps-all</span>
                <span class="choice true">B．ps-aef</span>
                <span class="choice false">C．ls-a</span>
                <span class="choice false">D．ls–la</span>
            </p>
            <p class="one-line-choice"><span class="number">（31）</span>
                <span class="choice false">A．0</span>
                <span class="choice false">B．null</span>
                <span class="choice true">C．init</span>
                <span class="choice false">D．bash</span>
            </p>
            <p class="choice header_choice true"><span class="number">（32） </span>A．xinetd是网络服务的守护进程</p>
            <p class="choice false">&emsp;&emsp;B．xinetd是定时服务的守护进程
            </p>
            <p class="choice false">&emsp;&emsp;C．xinetd进程负责配置网络接口</p>
            <p class="choice false">&emsp;&emsp;D．xinetd进程进程负责启动网卡</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    ps命令显示系统正在运行的进程，参数：e列出系统所有的进程，f列出详细清单。<br />
                    显示各列为：<br />
                    ★ UID：运行进程的用户<br />
                    ★ PID：进程的ID<br />
                    ★ PPID：父进程的ID<br />
                    ★ C：进程的CPU使用情况（进程使用占CPU时间的百分比）<br />
                    ★ STIME：开始时间<br />
                    ★ TTY：运行此进程的终端或控制台<br />
                    ★ TIME：消耗CPU的时间总量<br />
                    ★ CMD：产生进程的命令名称<br />
                    Linux操作系统内核被加载入内存后，开始掌握控制权。接着，它将完成对外围设备的检测，并加载相应的驱动程序，如软驱、硬盘、光驱等。然后，系统内核调度系统的第一个进程，init进程。<br />
                    作为系统的第一个进程，init的进程ID（PID）为1。它将完成系统的初始化工作，并维护系统的各种运行级别，包括系统的初始化、系统结束、单用户运行模式和多用户运行模式。<br />
                    在Linux系统中，大部分的服务进程（daemon）都会设置成在系统启动时自动执行。服务进程是指在系统中持续执行的进程。但是，过多进程同时执行必然会占据更多的内存、CPU时间等资源，从而使系统性能下降。为了解决这个问题，Linux系统提供了一个超级服务进程：inetd/xinetd。<br />
                    inetd/xinetd总管网络服务，使需要的程序在适当时候执行。当客户端没有请求时，服务进程不执行；只有当接收到客户端的某种服务器请求时，inetd/xinetd根据其提供的信息去启动相应的服务进程提供服务。<br />
                    inetd/xinetd负责监听传输层协议定义的网络端口。当数据包通过网络传送到服务器时，inetd/xinetd根据接收数据包的端口判断是哪个功能的数据包，然后调用相应的服务进程进行处理。除Red
                    Hat Linux 7使用xinetd来提供这个服务外，大部分版本的Linux系统都使用inetd。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Linux操作系统中，网络管理员可以通过修改 （33） 文件对web服务器端口进行配置。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Linux%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E7%BD%91%E7%BB%9C%E7%AE%A1%E7%90%86%E5%91%98%E5%8F%AF%E4%BB%A5%E9%80%9A%E8%BF%87%E4%BF%AE%E6%94%B9%20%EF%BC%8833%EF%BC%89%20%E6%96%87%E4%BB%B6%E5%AF%B9web%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%AB%AF%E5%8F%A3%E8%BF%9B%E8%A1%8C%E9%85%8D%E7%BD%AE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（33）</span>
                <span class="choice false">A．inetd.conf</span>
                <span class="choice false">B．lilo.conf</span>
                <span class="choice true">C．httpd.conf</span>
                <span class="choice false">D．resolv.conf</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    inetd.conf是系统超级服务进程inetd的配置文件。<br />
                    lilo.conf是操作系统启动程序LILO的配置文件。<br />
                    httpd.conf是web服务器Apache的配置文件。<br />
                    resolv.conf是DNS解析的配置文件。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Linux操作系统中，存放用户账号加密口令的文件是 （34） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Linux%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E5%AD%98%E6%94%BE%E7%94%A8%E6%88%B7%E8%B4%A6%E5%8F%B7%E5%8A%A0%E5%AF%86%E5%8F%A3%E4%BB%A4%E7%9A%84%E6%96%87%E4%BB%B6%E6%98%AF%20%EF%BC%8834%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（34）</span>
                <span class="choice false">A．/etc/sam</span>
                <span class="choice true">B．/etc/shadow</span>
                <span class="choice false">C．etc/group</span>
                <span class="choice false">D．etc/security</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows中运行 （35）
                命令后得到如下图所示的结果。如果要将目标地址为102.217.112.0.24的分组经102.217.115.1发出，需增加一条路由，正确的命令为 （36） 。<br />
                §§&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E4%B8%AD%E8%BF%90%E8%A1%8C%20%EF%BC%8835%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%90%8E%E5%BE%97%E5%88%B0%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E7%BB%93%E6%9E%9C%E3%80%82%E5%A6%82%E6%9E%9C%E8%A6%81%E5%B0%86%E7%9B%AE%E6%A0%87%E5%9C%B0%E5%9D%80%E4%B8%BA102.217.112.0.24%E7%9A%84%E5%88%86%E7%BB%84%E7%BB%8F102.217.115.1%E5%8F%91%E5%87%BA%EF%BC%8C%E9%9C%80%E5%A2%9E%E5%8A%A0%E4%B8%80%E6%9D%A1%E8%B7%AF%E7%94%B1%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E5%91%BD%E4%BB%A4%E4%B8%BA%20%EF%BC%8836%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <p class="choice header_choice false"><span class="number">（35） </span>A．ipconfig/renew</p>
            <p class="choice false">&emsp;&emsp;B．ping</p>
            <p class="choice false">&emsp;&emsp;C．nslookup</p>
            <p class="choice true">&emsp;&emsp;D．routeprint</p>
            <p class="choice header_choice true"><span class="number">（36） </span>A．route add 102.217.112.0 mask 255.255.255.0 102.217.115.1
            </p>
            <p class="choice false">&emsp;&emsp;B．route add 102.217.112.0 255.255.255.0 102.217.115.1
            </p>
            <p class="choice false">&emsp;&emsp;C．add route 102.217.112.0 255.255.255.0 102.217.115.1
            </p>
            <p class="choice false">&emsp;&emsp;D．add route 102.217.112.0 mask 255.255.255.0 102.217.115.1</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    route add的格式是：<br />
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下列关于Microsoft管理控制台（MMC）的说法中，错误的是 （37） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E5%85%B3%E4%BA%8EMicrosoft%E7%AE%A1%E7%90%86%E6%8E%A7%E5%88%B6%E5%8F%B0%EF%BC%88MMC%EF%BC%89%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8837%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（37） </span>A．MMC集成了用来管理网络、计算机、服务及其它系统组件的管理工具
            </p>
            <p class="choice false">&emsp;&emsp;B．MMC创建、保存并打开管理工具单元
            </p>
            <p class="choice false">&emsp;&emsp;C．MMC可以运行在WindowsXP和Windows2000操作系统上
            </p>
            <p class="choice true">&emsp;&emsp;D．MMC是用来管理硬件、软件和Windows系统的网络组件</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Microsoft 管理控制台 (MMC) 集成了可以用于管理网络、计算机、服务和其他系统组件的管理工具。它不仅仅是一个网络组件。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">RAID技术中，磁盘容量利用率最高的是 （38） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=RAID%E6%8A%80%E6%9C%AF%E4%B8%AD%EF%BC%8C%E7%A3%81%E7%9B%98%E5%AE%B9%E9%87%8F%E5%88%A9%E7%94%A8%E7%8E%87%E6%9C%80%E9%AB%98%E7%9A%84%E6%98%AF%20%EF%BC%8838%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（38）</span>
                <span class="choice true">A．RAID0</span>
                <span class="choice false">B．RAID1</span>
                <span class="choice false">C．RAID3</span>
                <span class="choice false">D．RAID5</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">xDSL技术中，能提供上下行信道非对称传输的是 （39） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=xDSL%E6%8A%80%E6%9C%AF%E4%B8%AD%EF%BC%8C%E8%83%BD%E6%8F%90%E4%BE%9B%E4%B8%8A%E4%B8%8B%E8%A1%8C%E4%BF%A1%E9%81%93%E9%9D%9E%E5%AF%B9%E7%A7%B0%E4%BC%A0%E8%BE%93%E7%9A%84%E6%98%AF%20%EF%BC%8839%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（39）</span>
                <span class="choice false">A．ADSL和HDSL</span>
                <span class="choice true">B．ADSL和VDSL
                </span>
                <span class="choice false">C．SDSL和VDSL</span>
                <span class="choice false">D．SDSL和HDSL</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">若FTP服务器开启了匿名访问功能，匿名登录时需要输入的用户名是 （40） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5FTP%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%BC%80%E5%90%AF%E4%BA%86%E5%8C%BF%E5%90%8D%E8%AE%BF%E9%97%AE%E5%8A%9F%E8%83%BD%EF%BC%8C%E5%8C%BF%E5%90%8D%E7%99%BB%E5%BD%95%E6%97%B6%E9%9C%80%E8%A6%81%E8%BE%93%E5%85%A5%E7%9A%84%E7%94%A8%E6%88%B7%E5%90%8D%E6%98%AF%20%EF%BC%8840%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（40）</span>
                <span class="choice false">A．root</span>
                <span class="choice false">B．user</span>
                <span class="choice false">C．guest</span>
                <span class="choice true">D．anonymous</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Kerberos系统中，使用一次性密钥和 （41） 来防止重放攻击。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Kerberos%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%E4%BD%BF%E7%94%A8%E4%B8%80%E6%AC%A1%E6%80%A7%E5%AF%86%E9%92%A5%E5%92%8C%20%EF%BC%8841%EF%BC%89%20%E6%9D%A5%E9%98%B2%E6%AD%A2%E9%87%8D%E6%94%BE%E6%94%BB%E5%87%BB%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（41）</span>
                <span class="choice true">A．时间戳</span>
                <span class="choice false">B．数字签名</span>
                <span class="choice false">C．序列号</span>
                <span class="choice false">D．数字证书</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Kerberos是为TCP/
                    IP网络而设计的基于客户机/服务器模式的三方验证协议，最早源于麻省理工学院（MIT）的雅典娜计划，由麻省理工学院（MIT）开发，首次公开的版本为v4，目前广泛使用的是v5。<br />
                    在Kerberos v4系统中，使用时间戳用来防止重发攻击。<br />
                    在Kerberos v5系统中，使用Seq序列号用来防止重发攻击。<br />
                    标准答案是A，但现在主流是Kerberos v5，其实答案选C更合适。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在下面4种病毒中， （42） 可以远程控制网络中的计算机。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E4%B8%8B%E9%9D%A24%E7%A7%8D%E7%97%85%E6%AF%92%E4%B8%AD%EF%BC%8C%20%EF%BC%8842%EF%BC%89%20%E5%8F%AF%E4%BB%A5%E8%BF%9C%E7%A8%8B%E6%8E%A7%E5%88%B6%E7%BD%91%E7%BB%9C%E4%B8%AD%E7%9A%84%E8%AE%A1%E7%AE%97%E6%9C%BA%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（42） </span>A．worm.Sasser.f</p>
            <p class="choice false">&emsp;&emsp;B．Win32.CIH
            </p>
            <p class="choice true">&emsp;&emsp;C．Trojan.qq3344</p>
            <p class="choice false">&emsp;&emsp;D．Macro.Melissa</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Worm代表蠕虫；<br />
                    CIH是台湾人陈盈豪编写的一种能够攻击硬件的病毒。<br />
                    Trojan代表木马，来源于古希腊荷马史诗中木马破城的故事（Trojan一词的本意是特洛伊）。木马可以进行远程控制。<br />
                    Melissa是一种快速传播的能够感染那些使用MS Word 97 和 MS Office 2000 的计算机宏病毒。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">将ACL应用到路由器接口的命令时 （43） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B0%86ACL%E5%BA%94%E7%94%A8%E5%88%B0%E8%B7%AF%E7%94%B1%E5%99%A8%E6%8E%A5%E5%8F%A3%E7%9A%84%E5%91%BD%E4%BB%A4%E6%97%B6%20%EF%BC%8843%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（43） </span>A．Router(config-if)#ipaccess-group10out
            </p>
            <p class="choice false">&emsp;&emsp;B．Router(config-if)#applyaccss-list10out
            </p>
            <p class="choice false">&emsp;&emsp;C．Router(config-if)#fixupaccess-list10out
            </p>
            <p class="choice false">&emsp;&emsp;D．Router(config-if)#routeaccess-group10out</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某网站向CA申请了数字证书。用户通过 （44） 来验证网站的真伪。在用户与网站进行安全通信时，用户可以通过 （45） 进行加密和验证，该网站通过 （46）
                进行解密和签名。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E7%BD%91%E7%AB%99%E5%90%91CA%E7%94%B3%E8%AF%B7%E4%BA%86%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E3%80%82%E7%94%A8%E6%88%B7%E9%80%9A%E8%BF%87%20%EF%BC%8844%EF%BC%89%20%E6%9D%A5%E9%AA%8C%E8%AF%81%E7%BD%91%E7%AB%99%E7%9A%84%E7%9C%9F%E4%BC%AA%E3%80%82%E5%9C%A8%E7%94%A8%E6%88%B7%E4%B8%8E%E7%BD%91%E7%AB%99%E8%BF%9B%E8%A1%8C%E5%AE%89%E5%85%A8%E9%80%9A%E4%BF%A1%E6%97%B6%EF%BC%8C%E7%94%A8%E6%88%B7%E5%8F%AF%E4%BB%A5%E9%80%9A%E8%BF%87%20%EF%BC%8845%EF%BC%89%20%E8%BF%9B%E8%A1%8C%E5%8A%A0%E5%AF%86%E5%92%8C%E9%AA%8C%E8%AF%81%EF%BC%8C%E8%AF%A5%E7%BD%91%E7%AB%99%E9%80%9A%E8%BF%87%20%EF%BC%8846%EF%BC%89%20%E8%BF%9B%E8%A1%8C%E8%A7%A3%E5%AF%86%E5%92%8C%E7%AD%BE%E5%90%8D%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice true">A．CA的签名</span>
                <span class="choice false">B．证书中的公钥</span>
                <span class="choice false">C．网站的私钥</span>
                <span class="choice false">D．用户的公钥</span>
            </p>
            <p class="one-line-choice"><span class="number">（45）</span>
                <span class="choice false">A．CA的签名</span>
                <span class="choice true">B．证书中的公钥</span>
                <span class="choice false">C．网站的私钥</span>
                <span class="choice false">D．用户的公钥</span>
            </p>
            <p class="one-line-choice"><span class="number">（46）</span>
                <span class="choice false">A．CA的签名</span>
                <span class="choice false">B．证书中的公钥</span>
                <span class="choice true">C．网站的私钥</span>
                <span class="choice false">D．用户的公钥</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    一次送三分，大发慈悲啊。唯一要注意的是：数字证书里没有私钥。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IPSec的加密和认证过程中所使用的密钥由 （47） 机制来生成和分发。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IPSec%E7%9A%84%E5%8A%A0%E5%AF%86%E5%92%8C%E8%AE%A4%E8%AF%81%E8%BF%87%E7%A8%8B%E4%B8%AD%E6%89%80%E4%BD%BF%E7%94%A8%E7%9A%84%E5%AF%86%E9%92%A5%E7%94%B1%20%EF%BC%8847%EF%BC%89%20%E6%9C%BA%E5%88%B6%E6%9D%A5%E7%94%9F%E6%88%90%E5%92%8C%E5%88%86%E5%8F%91%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（47）</span>
                <span class="choice false">A．ESP</span>
                <span class="choice true">B．IKE</span>
                <span class="choice false">C．TGS</span>
                <span class="choice false">D．AH</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    AH（Authentication Header，认证头）是IPSec体系结构中的一种主要协议，它为IP数据报提供完整性检查与数据源认证，并防止重发攻击。<br />
                    AH不提供数据加密服务，加密服务由ESP（Encapsulating Security
                    Payload，封装安全载荷）提供。ESP提供数据内容的加密，根据用户安全要求，ESP既可以用于加密IP数据报的负载内容（如：TCP、UDP、ICMP、IGMP），也可以用于加密整个IP数据报。<br />
                    进行IPSec通讯前必须先在通信双方建立SA（安全关联）。IKE（Internet Key
                    Exchange，因特网密钥交换）是一种混合型协议，用于动态建立SA，它沿用了ISAKMP（Internet Security Association and Key Management
                    Protocol，Internet安全协作和密钥管理协议）的框架、Oakley的模式（Oakley描述了一系列的密钥交换模式，提供密钥交换和刷新功能）以及SKEME（Secue Key
                    Exchange
                    Mechanism，Internet安全密钥交换机制）（SKEME描述了通用密钥交换技术，提供匿名性、防抵赖和快速刷新等功能）的共享和密钥更新技术，提供密码生成材料技术和协商共享策略。<br />
                    TGS（Ticket Granting Server）是Kerberos的票据授权服务器。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">SSL协议使用的默认端口是 （48） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=SSL%E5%8D%8F%E8%AE%AE%E4%BD%BF%E7%94%A8%E7%9A%84%E9%BB%98%E8%AE%A4%E7%AB%AF%E5%8F%A3%E6%98%AF%20%EF%BC%8848%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（48）</span>
                <span class="choice false">A．80</span>
                <span class="choice false">B．445</span>
                <span class="choice false">C．8080</span>
                <span class="choice true">D．443</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某用户分配的网络地址为192.24.0.0~192.24.7.0，这个地址块可以用 （49） 表示，其中可以分配 （50） 个主机地址。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E7%94%A8%E6%88%B7%E5%88%86%E9%85%8D%E7%9A%84%E7%BD%91%E7%BB%9C%E5%9C%B0%E5%9D%80%E4%B8%BA192.24.0.0%7E192.24.7.0%EF%BC%8C%E8%BF%99%E4%B8%AA%E5%9C%B0%E5%9D%80%E5%9D%97%E5%8F%AF%E4%BB%A5%E7%94%A8%20%EF%BC%8849%EF%BC%89%20%E8%A1%A8%E7%A4%BA%EF%BC%8C%E5%85%B6%E4%B8%AD%E5%8F%AF%E4%BB%A5%E5%88%86%E9%85%8D%20%EF%BC%8850%EF%BC%89%20%E4%B8%AA%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（49） </span>A．192.24.0.0/20</p>
            <p class="choice true">&emsp;&emsp;B．192.24.0.0/21
            </p>
            <p class="choice false">&emsp;&emsp;C．192.24.0.0/16</p>
            <p class="choice false">&emsp;&emsp;D．192.24.0.0/24</p>
            <p class="one-line-choice"><span class="number">（50）</span>
                <span class="choice true">A．2032</span>
                <span class="choice false">B．2048</span>
                <span class="choice false">C．2000</span>
                <span class="choice false">D．2056</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CIDR每次必考，原本不必多说，但50题的备选答案有些离奇。因此，请先看看下面这张图。<br />
                    §§<br />
                    由于主机位有11位，因此可分配的主机地址有2^11-2=2046。但是备选答案中没有2046，这就有些离奇了。首先，2048和2056两个答案都是可以排除的，接下来分析2032和2000两个备选答案。<br />
                    如果误以为CIDR中的各成员网络的主机位全“0”和全“1”地址都不可使用（即192.24.0.0、192.24.0.255、……、192.24.7.0、192.24.7.255），那也只有16个地址而已。即便如此，可分配的地址也有211-16=2032个，离答案A比较接近。<br />
                    因此可以判断，命题老师可能是无意中误导了考生。既然（49）考了CIDR，在（50）题中就应该说明“在不使用CIDR的情况下……”</p>
            </div>
        </div>
        <div class="block">
            <p class="question">使用CIDR技术把4个C类网络220.117.12.0/24、220.117.13.0/24、220.117.14.0/24和220.117.15.0/24汇聚成一个超网，得到的地址是
                （51） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8CIDR%E6%8A%80%E6%9C%AF%E6%8A%8A4%E4%B8%AAC%E7%B1%BB%E7%BD%91%E7%BB%9C220.117.12.0/24%E3%80%81220.117.13.0/24%E3%80%81220.117.14.0/24%E5%92%8C220.117.15.0/24%E6%B1%87%E8%81%9A%E6%88%90%E4%B8%80%E4%B8%AA%E8%B6%85%E7%BD%91%EF%BC%8C%E5%BE%97%E5%88%B0%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8851%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（51） </span>A．220.117.8.0/22</p>
            <p class="choice true">&emsp;&emsp;B．220.117.12.0/22
            </p>
            <p class="choice false">&emsp;&emsp;C．220.117.8.0/21</p>
            <p class="choice false">&emsp;&emsp;D．220.117.12.0/21</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    略。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某公司网络的地址是200.16.192.0/18，划分成16个子网，下面的选项中，不属于这16个子网网址的是 （52） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E5%85%AC%E5%8F%B8%E7%BD%91%E7%BB%9C%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF200.16.192.0/18%EF%BC%8C%E5%88%92%E5%88%86%E6%88%9016%E4%B8%AA%E5%AD%90%E7%BD%91%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E8%BF%9916%E4%B8%AA%E5%AD%90%E7%BD%91%E7%BD%91%E5%9D%80%E7%9A%84%E6%98%AF%20%EF%BC%8852%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（52） </span>A．200.16.236.0/22</p>
            <p class="choice false">&emsp;&emsp;B．200.16.224.0/22
            </p>
            <p class="choice false">&emsp;&emsp;C．200.16.208.0/22</p>
            <p class="choice true">&emsp;&emsp;D．200.16.254.0/22</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    202.16.254.0/22是网络202.16.252.0/22中一个可分配主机地址。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IPv6地址12AB:0000:0000:CD30:0000:0000:0000:0000/60可以表示成各种简写形式，下面的选项中，写法正确的是 （53） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IPv6%E5%9C%B0%E5%9D%8012AB%3A0000%3A0000%3ACD30%3A0000%3A0000%3A0000%3A0000/60%E5%8F%AF%E4%BB%A5%E8%A1%A8%E7%A4%BA%E6%88%90%E5%90%84%E7%A7%8D%E7%AE%80%E5%86%99%E5%BD%A2%E5%BC%8F%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E5%86%99%E6%B3%95%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（53） </span>A．12AB:0:0:CD30::/60</p>
            <p class="choice false">&emsp;&emsp;B．12AB:0:0:CD3/60
            </p>
            <p class="choice false">&emsp;&emsp;C．12AB::CD30/60</p>
            <p class="choice false">&emsp;&emsp;D．12AB::CD3/60</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    略。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IPv6协议数据单元由一个固定头部和若干个扩展头部以及上层协议提供的负载组成，其中用于标识松散源路由功能的扩展头是 （54） 。如果有多个扩展头部，第一个扩展头部为 （55）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IPv6%E5%8D%8F%E8%AE%AE%E6%95%B0%E6%8D%AE%E5%8D%95%E5%85%83%E7%94%B1%E4%B8%80%E4%B8%AA%E5%9B%BA%E5%AE%9A%E5%A4%B4%E9%83%A8%E5%92%8C%E8%8B%A5%E5%B9%B2%E4%B8%AA%E6%89%A9%E5%B1%95%E5%A4%B4%E9%83%A8%E4%BB%A5%E5%8F%8A%E4%B8%8A%E5%B1%82%E5%8D%8F%E8%AE%AE%E6%8F%90%E4%BE%9B%E7%9A%84%E8%B4%9F%E8%BD%BD%E7%BB%84%E6%88%90%EF%BC%8C%E5%85%B6%E4%B8%AD%E7%94%A8%E4%BA%8E%E6%A0%87%E8%AF%86%E6%9D%BE%E6%95%A3%E6%BA%90%E8%B7%AF%E7%94%B1%E5%8A%9F%E8%83%BD%E7%9A%84%E6%89%A9%E5%B1%95%E5%A4%B4%E6%98%AF%20%EF%BC%8854%EF%BC%89%20%E3%80%82%E5%A6%82%E6%9E%9C%E6%9C%89%E5%A4%9A%E4%B8%AA%E6%89%A9%E5%B1%95%E5%A4%B4%E9%83%A8%EF%BC%8C%E7%AC%AC%E4%B8%80%E4%B8%AA%E6%89%A9%E5%B1%95%E5%A4%B4%E9%83%A8%E4%B8%BA%20%EF%BC%8855%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（54）</span>
                <span class="choice false">A．目标头部</span>
                <span class="choice true">B．路由选择头部
                </span>
                <span class="choice false">C．分段头部</span>
                <span class="choice false">D．安全封装负荷头部</span>
            </p>
            <p class="one-line-choice"><span class="number">（55）</span>
                <span class="choice true">A．逐跳头部</span>
                <span class="choice false">B．路由选择头部
                </span>
                <span class="choice false">C．分段头部</span>
                <span class="choice false">D．认证头部</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    IPv6首部的固定部分被简称为IPv6首部，其大小是40字节，而IPv4首部中的必要部分为20字节。IPv6已经定义了以下扩展首部：<br />
                    ★逐跳选项首部（Hop-by-Hop Options header）：定义需要逐跳处理的特殊选项；<br />
                    ★路由首部（Routing header）：提供扩展路由，类似于IPv4的源路由；<br />
                    ★片段首部（Fragment header）：包含分片和重组信息；<br />
                    ★认证首部（Authentication header）：提供数据完整性和认证；<br />
                    ★封装安全负载首部（Encapsulation Security Payload header）：提供秘密性；<br />
                    ★目标选项首部（Destination Options header）：包含要在目标节点检查的可选信息。<br />
                    <br />
                    IPv6标准建议，当用到多个扩展首部时，IPv6首部要按以下顺序出现：<br />
                    1.IPv6首部：必要，必须最先出现。<br />
                    2.逐跳选项首部：此首部中包含的选项要由IPv6目标地址字段中第一个出现的目标以及路由首部列出的后续目标加以处理。<br />
                    3.路由首部<br />
                    4.片段首部<br />
                    5.认证首部<br />
                    6.封装安全负载首部<br />
                    7.目标选项首部：所包含的选项仅由数据包的最后目标加以处理。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于帧中继网络的描述中，错误的是 （56） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E5%B8%A7%E4%B8%AD%E7%BB%A7%E7%BD%91%E7%BB%9C%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8856%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（56） </span>A．用户的数据速率可以在一定的范围内变化
            </p>
            <p class="choice false">&emsp;&emsp;B．既可以使用流式业务，又可以适应突发式业务
            </p>
            <p class="choice false">&emsp;&emsp;C．帧中继网可以提供永久虚电路和交换虚电路
            </p>
            <p class="choice true">&emsp;&emsp;D．帧中继虚电路建立在HDLC协议之上</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    FR的带宽控制技术是它的一大优点。在传统的数据通信业务中，用户预定了一条64Kbps的链路，那么就只能以64Kbps的速率传输。而在FR技术中，预定的是CIR（Committed
                    Information Rate，约定数据速率），即在正常状态下Tc（Committed Time
                    Interval，承诺时间间隔）内的数据速率平均值。在实际的数据传输过程中，用户能以高于64Kbps的速率传送数据。举例来说，一个用户预定了CIR=64Kbps的FR链路，并与FR业务供应商鉴定了另外两个指标：<br />
                    Bc（Committed Burst，承诺突发量）：在承诺信息速率的测量间隔内，交换机准许接收和发送的最大数据量，以bps为单位。<br />
                    Be（Excess
                    Burst，超突发量）：在承诺信息速率之外，FR交换机试图发送的未承诺的最大额外数据量，以bps为单位。超量突发依赖于厂商可以提供的服务，但是一般来说它要受到本地接入环路端口速率的限制。一般来说，发送超量突发数据（Be）的概率要小于承诺突发数据（Bc）。网络把超量突发数据（Be）看作可丢弃的数据。<br />
                    当用户以等于或低于64Kbps（CIR）的速率传送数据时，网络一定可靠地负责传送，当用户以大于64Kbps的速率传送数据，且用户在Tc内的发送量（突发量）少于Bc+Be时，在正常情况下也能可靠地传送，但是若出现网络拥塞，则会被优先丢弃。当突发量大于Bc+Be时，网络将丢弃数据帧。所以FR用户虽然付了64Kbps的信息速率费（收费以CIR来定），却可以传送高于64Kbps速率的数据，这是FR吸引用户的主要原因之一。<br />
                    FR控制呼叫使用的协议是LAPD（Link Access Protocol Channel D，D信道链路访问协议）。LAPD定义在 ITU Q.921
                    中，与X.25的LAPB基本相同。它工作在ABM（Asynchronous Balanced Mode，异步平衡模式）下，为FR进行信令管理提供数据链路层支持。<br />
                    FR用户数据传输使用的协议是LAPF（Link Access Procedure to Frame mode bearer service，帧模式承载业务链路访问过程）。LAPF定义在 ITU
                    Q.922 中，是一种在FR网络中为帧方式业务提供拥塞控制性能的增强版 LAPD，其主要功能是帧同步、虚电路复用、DLCI管理、差错检测和拥塞控制等。<br />
                    FR使用1号数字用户信令（DSS1）进行PVC（永久虚电路）和SVC（交换虚电路）管理。DSS1定义在ITU Q.931 / Q.933，说明了帧方式交换、PVC控制及状态监控的信令规程。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">SNMP MIB中被管对象的Access属性不包括 （57） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=SNMP%20MIB%E4%B8%AD%E8%A2%AB%E7%AE%A1%E5%AF%B9%E8%B1%A1%E7%9A%84Access%E5%B1%9E%E6%80%A7%E4%B8%8D%E5%8C%85%E6%8B%AC%20%EF%BC%8857%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（57）</span>
                <span class="choice false">A．只读</span>
                <span class="choice false">B．只写</span>
                <span class="choice false">C．可读写</span>
                <span class="choice true">D．可执行</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Designed to make access to Simple Network Management Protocol (SNMP) MIB objects easier, a set of
                    UNIX-like SNMP commands has been created. The Tcl shell is enabled either manually or by using a
                    Tcl script, and the new commands can be entered to allow you to perform specified get and set
                    actions on MIB objects. To increase usability, the new commands have names similar to those used
                    for UNIX SNMP access.</p>
            </div>
        </div>
        <div class="block">
            <p class="question">汇聚层交换机应该实现多种功能，下面选项中，不属于汇聚层功能的是 （58） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B1%87%E8%81%9A%E5%B1%82%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%BA%94%E8%AF%A5%E5%AE%9E%E7%8E%B0%E5%A4%9A%E7%A7%8D%E5%8A%9F%E8%83%BD%EF%BC%8C%E4%B8%8B%E9%9D%A2%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E6%B1%87%E8%81%9A%E5%B1%82%E5%8A%9F%E8%83%BD%E7%9A%84%E6%98%AF%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（58）</span>
                <span class="choice false">A．VLAN间的路由选择</span>
                <span class="choice true">B．用户访问控制
                </span>
                <span class="choice false">C．分组过滤</span>
                <span class="choice false">D．组播管理</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    汇聚层是楼群或小区的信息汇聚点，是连接接入层与核心层的网络设备，为接入层提供数据的汇聚、传输、管理和分发处理。汇聚层为接入层提供基于策略的连接，如地址合并、协议过滤、路由服务、认证管理等，通过网段划分（如VLAN）与网络隔离可以防止某些网段的问题蔓延和影响到核心层。汇聚层同时也可以提供接入层虚拟网之间的互联，控制和限制接入层对核心层的访问，保证核心层的安全和稳定。<br />
                    汇聚层设备一般采用可管理的三层交换机或堆叠式交换机以达到带宽和传输性能的要求。其设备性能较好，但价格高于接入层设备，而且对环境的要求也较高，对电磁辐射、温度、湿度和空气洁净度等都有一定的要求。汇聚层设备之间以及汇聚层设备与核心层设备之间多采用光纤互联，以提高系统的传输性能和吞吐量。<br />
                    一般来说，用户访问控制会安排在接入层，但这并非绝对，也可以安排在汇聚层进行。在汇聚层实现安全控制和身份认证时，采用的是集中式的管理模式。当网络规模较大时，可以设计综合安全管理策略，例如在接入层实现身份认证和MAC地址绑定，在汇聚层实现流量控制和访问权限约束。<br />
                    实际上，组播管理也可以在汇聚层完成。无论是从分层的思想还是实际的工程来说，都没有什么绝对的不可以的限制。做什么或不做什么，只是利弊问题。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">交换机命令Switch>enable的作用是 （59） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BA%A4%E6%8D%A2%E6%9C%BA%E5%91%BD%E4%BB%A4Switch%3Eenable%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8859%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（59）</span>
                <span class="choice false">A．配置访问口令</span>
                <span class="choice false">B．进入配置模式
                </span>
                <span class="choice true">C．进入特权模式</span>
                <span class="choice false">D．显示当前模式</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IEEE 802.1q协议的作用是 （60） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IEEE%20802.1q%E5%8D%8F%E8%AE%AE%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8860%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（60）</span>
                <span class="choice false">A．生成树协议</span>
                <span class="choice false">B．以太网流量控制
                </span>
                <span class="choice true">C．生成VLAN标记</span>
                <span class="choice false">D．基于端口的认证</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    IEEE 802.1q 标准为标识带有VLAN 成员信息的以太帧建立了一种标准方法。IEEE 802.1q 标准定义了 VLAN 网桥操作，从而允许在桥接局域网结构中实现定义、运行以及管理VLAN
                    拓扑结构等操作。IEEE 802.1q 标准主要用来解决如何将大型网络划分为多个小网络，以使广播和组播流量不会占据更多带宽。此外 IEEE 802.1q 标准还提供更高的网络段间安全性。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">CSMA/CD协议可以利用多种监听算法来减小发送冲突的概率，下面关于各种监听算法的描述中，正确的是 （61） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=CSMA/CD%E5%8D%8F%E8%AE%AE%E5%8F%AF%E4%BB%A5%E5%88%A9%E7%94%A8%E5%A4%9A%E7%A7%8D%E7%9B%91%E5%90%AC%E7%AE%97%E6%B3%95%E6%9D%A5%E5%87%8F%E5%B0%8F%E5%8F%91%E9%80%81%E5%86%B2%E7%AA%81%E7%9A%84%E6%A6%82%E7%8E%87%EF%BC%8C%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E5%90%84%E7%A7%8D%E7%9B%91%E5%90%AC%E7%AE%97%E6%B3%95%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8861%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（61） </span>A．非坚持型监听算法有利于减少网络空闲时间
            </p>
            <p class="choice false">&emsp;&emsp;B．坚持型监听算法有利于减少冲突的概率
            </p>
            <p class="choice false">&emsp;&emsp;C．P坚持型监听算法无法减少网络的空闲时间
            </p>
            <p class="choice true">&emsp;&emsp;D．坚持型监听算法能够及时抢占信道</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    按总线争用协议来分类，CSMA有三种类型：<br />
                    1）非坚持CSMA。一个站点在发送数据帧之前，先要对媒体进行检测。如果没有其它站点在发送数据，则该站点开始发送数据。如果媒体被占用，则该站点不会持续监听媒体，而等待一个随机的延迟时间之后再监听。采用随机的监听延迟时间可以减少冲突的可能性，但其缺点也是很明显的：即使有多个站点有数据要发送，因为此时所有站点可能都在等待各自的随机延迟时间，而媒体仍然可能处于空闲状态，这样就使得媒体的利用率较为低下。<br />
                    2）1-坚持CSMA。当一个站点要发送数据帧时，它就监听媒体，判断当前时刻是否有其他站点正在传输数据。如果媒体忙的话，该站点等待直至媒体空闲。一旦该站点检测到媒体空闲，它就立即发送数据帧。如果产生冲突，则等待一个随机时间再监听。之所以叫“1-坚持”，是因为当一个站点发现媒体空闲的时候，它传输数据帧的概率是1。1-坚持CSMA的优点是：只要媒体空闲，站点就立即发送；它的缺点在于：假如有两个或两个以上的站点有数据要发送，冲突就不可避免。<br />
                    3）P-坚持CSMA.。P-坚持CSMA是非坚持CSMA和1-坚持CSMA的折中。P-坚持CSMA应用于划分时槽的媒体，其工作过程如下：当一个站点要发送数据帧的时候，它先检测媒体。若媒体空闲，则该站点按照概率P的可能性发送数据，而有1-P的概率会把要发送数据帧的任务延迟到下一个时槽。按照这样的规则，若下一个时槽也是空闲的，则站点同样有P的概率发送数据帧。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows的DOS窗口中键入命令<br />
                C:\>nslookup<br />
                Set type=ptr<br />
                >211.151.91.165<br />
                这个命令的作用是 （62） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E7%9A%84DOS%E7%AA%97%E5%8F%A3%E4%B8%AD%E9%94%AE%E5%85%A5%E5%91%BD%E4%BB%A4%3Cbr/%3E%0AC%3A%5C%3Enslookup%3Cbr/%3E%0ASet%20type%3Dptr%3Cbr/%3E%0A%3E211.151.91.165%3Cbr/%3E%0A%E8%BF%99%E4%B8%AA%E5%91%BD%E4%BB%A4%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8862%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（62） </span>A．查询211.151.91.165的邮件服务器信息
            </p>
            <p class="choice true">&emsp;&emsp;B．查询211.151.91.165到域名的映射
            </p>
            <p class="choice false">&emsp;&emsp;C．查询211.151.91.165的资源记录类型
            </p>
            <p class="choice false">&emsp;&emsp;D．显示211.151.91.165中各种可用的信息资源记录</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    运行nslookup，执行help。解释set type=X的作用为“set query type(ex. A, AAAA, A+AAAA, ANY, CNAME, MX, NS, PTR,
                    SOA, SRV)”根据这个解析，应该选B。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows的命令窗口中键入命令arp –s 10.0.0.80 00-AA-00-4F-2A-9C，这个命令的作用是 （63） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E7%9A%84%E5%91%BD%E4%BB%A4%E7%AA%97%E5%8F%A3%E4%B8%AD%E9%94%AE%E5%85%A5%E5%91%BD%E4%BB%A4arp%20%E2%80%93s%2010.0.0.80%2000-AA-00-4F-2A-9C%EF%BC%8C%E8%BF%99%E4%B8%AA%E5%91%BD%E4%BB%A4%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8863%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（63） </span>A．在ARP表中添加一个动态表项</p>
            <p class="choice true">&emsp;&emsp;B．在ARP表中添加一个静态表项
            </p>
            <p class="choice false">&emsp;&emsp;C．在ARP表中删除一个表项</p>
            <p class="choice false">&emsp;&emsp;D．在ARP表中修改一个表项</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    s是static的缩写。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">开放系统的数据存储有多种方式，属于网络化存储的是 （64） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BC%80%E6%94%BE%E7%B3%BB%E7%BB%9F%E7%9A%84%E6%95%B0%E6%8D%AE%E5%AD%98%E5%82%A8%E6%9C%89%E5%A4%9A%E7%A7%8D%E6%96%B9%E5%BC%8F%EF%BC%8C%E5%B1%9E%E4%BA%8E%E7%BD%91%E7%BB%9C%E5%8C%96%E5%AD%98%E5%82%A8%E7%9A%84%E6%98%AF%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（64）</span>
                <span class="choice false">A．内置式存储和DAS</span>
                <span class="choice false">B．DAS和NAS
                </span>
                <span class="choice false">C．DAS和SAN</span>
                <span class="choice true">D．NAS和SAN</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    DAS（Direct Attached Storage，直接连接存储）将磁盘阵列、磁带库等数据存储设备通过扩展接口（通常是SCSI接口）直接连接到服务器或客户端。<br />
                    NAS（Network Attached Storage，网络连接存储）与DAS不同，它的存储设备不是直接连接到服务器，而是直接连接到网络，通过标准的网络拓扑结构连接到服务器。<br />
                    SAN（Storage Area Network ，存储区域网络）是一种通过专用传输通道（光纤通道或IP网络）连接存储设备和相关服务器的存储结构。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">IEEE 802.11采用了类似于802.3 CSMA/CD协议的CSMA/CA协议，之所以不采用CSMA/CD协议的原因是 （65） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=IEEE%20802.11%E9%87%87%E7%94%A8%E4%BA%86%E7%B1%BB%E4%BC%BC%E4%BA%8E802.3%20CSMA/CD%E5%8D%8F%E8%AE%AE%E7%9A%84CSMA/CA%E5%8D%8F%E8%AE%AE%EF%BC%8C%E4%B9%8B%E6%89%80%E4%BB%A5%E4%B8%8D%E9%87%87%E7%94%A8CSMA/CD%E5%8D%8F%E8%AE%AE%E7%9A%84%E5%8E%9F%E5%9B%A0%E6%98%AF%20%EF%BC%8865%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（65） </span>A．CSMA/CA协议的效率更高</p>
            <p class="choice false">&emsp;&emsp;B．CSMA/CD协议的开销更大
            </p>
            <p class="choice true">&emsp;&emsp;C．为了解决隐蔽终端问题</p>
            <p class="choice false">&emsp;&emsp;D．为了引进其他业务</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    CSMA/CA（Carrier Sense Multiple Access with Collision Avoidance，载波侦听多路访问/避免冲突）是IEEE
                    802.11无线局域网的MAC子层协议，主要用于解决无线局域网的信道共享访问问题。而在传统以太网中，MAC子层采用CSMA/CD（Carrier Sense Multiple Access with
                    Collision
                    Detection，带有冲突检测的载波侦听多路访问）协议。这两种协议都针对网络中共享信道如何分配的问题，但它们的工作原理却有所不同。最明显的区别是：CSMA/CA是在冲突发生前进行冲突处理而CSMA/CD是在冲突发生后进行冲突处理。导致这种不同的根本原因是无线局域网所采用的传输媒介和传统局域网所采用的传输媒介有着本质的区别。也正是由于这种区别，导致无线局域网存在新的问题：隐藏站问题和暴露站问题。这些问题都属于隐蔽终端问题。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">建筑物综合布线系统中的工作区子系统是指 （66） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BB%BA%E7%AD%91%E7%89%A9%E7%BB%BC%E5%90%88%E5%B8%83%E7%BA%BF%E7%B3%BB%E7%BB%9F%E4%B8%AD%E7%9A%84%E5%B7%A5%E4%BD%9C%E5%8C%BA%E5%AD%90%E7%B3%BB%E7%BB%9F%E6%98%AF%E6%8C%87%20%EF%BC%8866%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（66） </span>A．由终端到信息插座之间的连线系统
            </p>
            <p class="choice false">&emsp;&emsp;B．楼层接线间的配线架和线缆系统
            </p>
            <p class="choice false">&emsp;&emsp;C．各楼层设备之间的互连系统
            </p>
            <p class="choice false">&emsp;&emsp;D．连接各个建筑物的通信系统</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">EIA/TIA-568标准规定，在综合布线时，如果信息插座到网卡之间使用无屏蔽双绞线，布线距离最大为 （67） 米。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=EIA/TIA-568%E6%A0%87%E5%87%86%E8%A7%84%E5%AE%9A%EF%BC%8C%E5%9C%A8%E7%BB%BC%E5%90%88%E5%B8%83%E7%BA%BF%E6%97%B6%EF%BC%8C%E5%A6%82%E6%9E%9C%E4%BF%A1%E6%81%AF%E6%8F%92%E5%BA%A7%E5%88%B0%E7%BD%91%E5%8D%A1%E4%B9%8B%E9%97%B4%E4%BD%BF%E7%94%A8%E6%97%A0%E5%B1%8F%E8%94%BD%E5%8F%8C%E7%BB%9E%E7%BA%BF%EF%BC%8C%E5%B8%83%E7%BA%BF%E8%B7%9D%E7%A6%BB%E6%9C%80%E5%A4%A7%E4%B8%BA%20%EF%BC%8867%EF%BC%89%20%E7%B1%B3%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（67）</span>
                <span class="choice true">A．10</span>
                <span class="choice false">B．30</span>
                <span class="choice false">C．50</span>
                <span class="choice false">D．100</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    工作区子系统指信息插座与数据终端之间的连接设置系统，由从信息插座延伸至数据终端设备的连接线缆和适配器组成。它一般使用软线（Patch
                    Cable）材料（例如UTP/STP）实现终端设备与信息插座之间的连接。工作区的跳线（Patch
                    Cord）、连接设备的跳线、交叉连接（Cross-Connection）线的总长度一般不超过10米。其中交叉连接线或跳线的长度不应超过5米。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">网络安全体系设计可从物理线路安全、网络安全、系统安全、应用安全等方面来进行，其中数据库容灾属于 （68） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E7%BD%91%E7%BB%9C%E5%AE%89%E5%85%A8%E4%BD%93%E7%B3%BB%E8%AE%BE%E8%AE%A1%E5%8F%AF%E4%BB%8E%E7%89%A9%E7%90%86%E7%BA%BF%E8%B7%AF%E5%AE%89%E5%85%A8%E3%80%81%E7%BD%91%E7%BB%9C%E5%AE%89%E5%85%A8%E3%80%81%E7%B3%BB%E7%BB%9F%E5%AE%89%E5%85%A8%E3%80%81%E5%BA%94%E7%94%A8%E5%AE%89%E5%85%A8%E7%AD%89%E6%96%B9%E9%9D%A2%E6%9D%A5%E8%BF%9B%E8%A1%8C%EF%BC%8C%E5%85%B6%E4%B8%AD%E6%95%B0%E6%8D%AE%E5%BA%93%E5%AE%B9%E7%81%BE%E5%B1%9E%E4%BA%8E%20%EF%BC%8868%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（68）</span>
                <span class="choice false">A．物理线路安全和网络安全</span>
                <span class="choice false">B．应用安全和网络安全
                </span>
                <span class="choice false">C．系统安全和网络安全</span>
                <span class="choice true">D．系统安全和应用安全</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下列关于网络核心层的描述中，正确的是 （69） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E5%85%B3%E4%BA%8E%E7%BD%91%E7%BB%9C%E6%A0%B8%E5%BF%83%E5%B1%82%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8869%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（69） </span>A．为了保障安全性，应该对分组进行尽可能多的处理
            </p>
            <p class="choice true">&emsp;&emsp;B．将数据分组从一个区域高速地转发到另一个区域
            </p>
            <p class="choice false">&emsp;&emsp;C．由多台二、三层交换机组成
            </p>
            <p class="choice false">&emsp;&emsp;D．提供多条路径来缓解通信瓶颈</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    核心层是各区域网络中所有通信流量的最终汇集点和承受者，用于实现骨干网络数据的优化传输，其主要特征是冗余设计、负载均衡、高带宽和高吞吐率。由于核心层的目标是快速传递分组，因此不宜集成控制功能和分组处理功能，而且传输带宽必须是千兆或万兆级的。<br />
                    核心层作为网络骨干和核心，其设备多由核心路由器、多层交换机和服务器群组成，具备高性能、高扩展性、高可靠性，以及强有力的网络控制能力和管理特性。各设备之间通常采用光纤进行点对点连接，并设计冗余线路，以提高传输速率和可靠性。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">网络系统设计过程中，物理网络设计阶段的任务是 （70） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%BD%91%E7%BB%9C%E7%B3%BB%E7%BB%9F%E8%AE%BE%E8%AE%A1%E8%BF%87%E7%A8%8B%E4%B8%AD%EF%BC%8C%E7%89%A9%E7%90%86%E7%BD%91%E7%BB%9C%E8%AE%BE%E8%AE%A1%E9%98%B6%E6%AE%B5%E7%9A%84%E4%BB%BB%E5%8A%A1%E6%98%AF%20%EF%BC%8870%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（70） </span>A．依据逻辑网络设计的要求，确定设备的具体物理分布和运行环境
            </p>
            <p class="choice false">&emsp;&emsp;B．分析现有网络和新网络的各类资源分布，掌握网络所处的状态
            </p>
            <p class="choice false">&emsp;&emsp;C．根据需求规范和通信规范，实施资源分配和安全规划
            </p>
            <p class="choice false">&emsp;&emsp;D．理解网络应该具有的功能和性能，最终设计出符合用户需求的网络</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    常识。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Routing protocols use different techniques for assigning （71） to individual network.
                Further, each routing protocol forms a metric aggregation in a different way. Most routing protocols
                can use multiple paths if the paths has an equal （72） . Some routing protocols can even use multiple
                paths when paths have an unequal cost. In either case, load （73） can improve overall allocation of
                network bandwidth. When multiple paths are used, there are several ways to distribute the packets. The
                two most common mechanisms are per-packet load balancing and per-destination load balancing. Per-packet
                load balancing distributes the （74） across the possible routes in a manner proportional to the route
                metrics. Per-destination load balancing distributes packets across the possible routes based on （75）
                .&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Routing%20protocols%20use%20different%20techniques%20for%20assigning%20%EF%BC%8871%EF%BC%89%20to%20individual%20network.%20Further%2C%20each%20routing%20protocol%20forms%20a%20metric%20aggregation%20in%20a%20different%20way.%20Most%20routing%20protocols%20can%20use%20multiple%20paths%20if%20the%20paths%20has%20an%20equal%20%EF%BC%8872%EF%BC%89%20.%20Some%20routing%20protocols%20can%20even%20use%20multiple%20paths%20when%20paths%20have%20an%20unequal%20cost.%20In%20either%20case%2C%20load%20%EF%BC%8873%EF%BC%89%20can%20improve%20overall%20allocation%20of%20network%20bandwidth.%20When%20multiple%20paths%20are%20used%2C%20there%20are%20several%20ways%20to%20distribute%20the%20packets.%20The%20two%20most%20common%20mechanisms%20are%20per-packet%20load%20balancing%20and%20per-destination%20load%20balancing.%20Per-packet%20load%20balancing%20distributes%20the%20%EF%BC%8874%EF%BC%89%20across%20the%20possible%20routes%20in%20a%20manner%20proportional%20to%20the%20route%20metrics.%20Per-destination%20load%20balancing%20distributes%20packets%20across%20the%20possible%20routes%20based%20on%20%EF%BC%8875%EF%BC%89%20.">百度</a></p>
            <p class="one-line-choice"><span class="number">（71）</span>
                <span class="choice false">A．calls</span>
                <span class="choice true">B．metrics</span>
                <span class="choice false">C．links</span>
                <span class="choice false">D．destinations</span>
            </p>
            <p class="one-line-choice"><span class="number">（72）</span>
                <span class="choice false">A．user</span>
                <span class="choice false">B．distance</span>
                <span class="choice false">C．entity</span>
                <span class="choice true">D．cost</span>
            </p>
            <p class="one-line-choice"><span class="number">（73）</span>
                <span class="choice false">A．bracketing</span>
                <span class="choice true">B．balancing</span>
                <span class="choice false">C．downloading</span>
                <span class="choice false">D．transmitting</span>
            </p>
            <p class="one-line-choice"><span class="number">（74）</span>
                <span class="choice false">A．destinations</span>
                <span class="choice false">B．resources</span>
                <span class="choice true">C．packets</span>
                <span class="choice false">D．sources</span>
            </p>
            <p class="one-line-choice"><span class="number">（75）</span>
                <span class="choice true">A．destinations</span>
                <span class="choice false">B．resources</span>
                <span class="choice false">C．packets</span>
                <span class="choice false">D．sources</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    略。</p>
            </div>
        </div>


    </div>

    <!-- <?php
    require ('../template/footer.php');
    ?> -->

</body>

</html>