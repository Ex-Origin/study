<?php
    include_once ('../waf.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2005年下半年 网络工程师 上午试卷</title>
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
        <h1 style="text-align:center">2005年下半年 网络工程师 上午试卷</h1>

        <div class="block">
            <p class="question">阵列处理机属于 （1） 计算机。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%98%B5%E5%88%97%E5%A4%84%E7%90%86%E6%9C%BA%E5%B1%9E%E4%BA%8E%20%EF%BC%881%EF%BC%89%20%E8%AE%A1%E7%AE%97%E6%9C%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（1）</span>
                <span class="choice false">A．SISD</span>
                <span class="choice true">B．SIMD</span>
                <span class="choice false">C．MISD</span>
                <span class="choice false">D．MIMD</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    • SISD（Single Instruction Single Datastream，单指令流单数据流）：单处理器计算机，对保存在单一存储器中的数据进行操作。 <br />
                    • SIMD（Single Instruction Multiple Datastream，单指令流多数据流）：同一条指令控制多个处理器的运行。 <br />
                    • MISD（Multiple Instruction Single Datastream，多指令流单数据流）：单个数据流被传送到一组处理器上，每个处理器执行不同的指令序列。 <br />
                    • MIMD（Multiple Instruction Multiple Datastream，多指令流多数据流）：其中每个处理器取用自己的指令并对自己的数据进行操作。 <br />
                    按照指令流和数据流的分类法，并行处理机、阵列处理机、流水线处理机都属于SIMD计算机，而多处理机属于MIMD计算机。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">采用 （2） 不能将多个处理机互连构成多处理机系统。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8%20%EF%BC%882%EF%BC%89%20%E4%B8%8D%E8%83%BD%E5%B0%86%E5%A4%9A%E4%B8%AA%E5%A4%84%E7%90%86%E6%9C%BA%E4%BA%92%E8%BF%9E%E6%9E%84%E6%88%90%E5%A4%9A%E5%A4%84%E7%90%86%E6%9C%BA%E7%B3%BB%E7%BB%9F%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（2）</span>
                <span class="choice false">A．STD总线</span>
                <span class="choice false">B．交叉开关</span>
                <span class="choice false">C．PCI总线</span>
                <span class="choice true">D．Centronic总线</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Centronic 总线是用于打印机等外设与计算机连接，不能将多个处理机互联构成多处理机系统。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某计算机系统的可靠性结构是如下图所示的双重串并联结构，若所构成系统的每个部件的可靠度为 0．9 ，即 R=0．9 ，则系统的可靠度为 （3） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E8%AE%A1%E7%AE%97%E6%9C%BA%E7%B3%BB%E7%BB%9F%E7%9A%84%E5%8F%AF%E9%9D%A0%E6%80%A7%E7%BB%93%E6%9E%84%E6%98%AF%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E5%8F%8C%E9%87%8D%E4%B8%B2%E5%B9%B6%E8%81%94%E7%BB%93%E6%9E%84%EF%BC%8C%E8%8B%A5%E6%89%80%E6%9E%84%E6%88%90%E7%B3%BB%E7%BB%9F%E7%9A%84%E6%AF%8F%E4%B8%AA%E9%83%A8%E4%BB%B6%E7%9A%84%E5%8F%AF%E9%9D%A0%E5%BA%A6%E4%B8%BA%200%EF%BC%8E9%20%EF%BC%8C%E5%8D%B3%20R%3D0%EF%BC%8E9%20%EF%BC%8C%E5%88%99%E7%B3%BB%E7%BB%9F%E7%9A%84%E5%8F%AF%E9%9D%A0%E5%BA%A6%E4%B8%BA%20%EF%BC%883%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i1" />
            </div>
            <p class="one-line-choice"><span class="number">（3）</span>
                <span class="choice false">A．0.9997</span>
                <span class="choice false">B．0.9276</span>
                <span class="choice true">C．0.9639</span>
                <span class="choice false">D．0.6561</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    两个部件串联的可靠性R2=R×R=0.81，再将两组串联部件并联的可靠性是：<br />
                    1-(1-R2)(1-R2)=1-0.19×0.19=0.9639。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若每一条指令都可以分解为取指、分析和执行三步。已知取指时间t取指=5△t，分析时间t分析=2△t，执行时间t执行=5△t。如果按顺序方式从头到尾执行完 500 条指令需
                （4） △t。如果按照[执行]k、[分析]k+1、[取指]k+2重叠的流水线方式执行指令，从头到尾执行完 500 条指令需 （5） △t。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%8B%A5%E6%AF%8F%E4%B8%80%E6%9D%A1%E6%8C%87%E4%BB%A4%E9%83%BD%E5%8F%AF%E4%BB%A5%E5%88%86%E8%A7%A3%E4%B8%BA%E5%8F%96%E6%8C%87%E3%80%81%E5%88%86%E6%9E%90%E5%92%8C%E6%89%A7%E8%A1%8C%E4%B8%89%E6%AD%A5%E3%80%82%E5%B7%B2%E7%9F%A5%E5%8F%96%E6%8C%87%E6%97%B6%E9%97%B4t%E5%8F%96%E6%8C%87%3D5%E2%96%B3t%EF%BC%8C%E5%88%86%E6%9E%90%E6%97%B6%E9%97%B4t%E5%88%86%E6%9E%90%3D2%E2%96%B3t%EF%BC%8C%E6%89%A7%E8%A1%8C%E6%97%B6%E9%97%B4t%E6%89%A7%E8%A1%8C%3D5%E2%96%B3t%E3%80%82%E5%A6%82%E6%9E%9C%E6%8C%89%E9%A1%BA%E5%BA%8F%E6%96%B9%E5%BC%8F%E4%BB%8E%E5%A4%B4%E5%88%B0%E5%B0%BE%E6%89%A7%E8%A1%8C%E5%AE%8C%20500%20%E6%9D%A1%E6%8C%87%E4%BB%A4%E9%9C%80%20%EF%BC%884%EF%BC%89%20%E2%96%B3t%E3%80%82%E5%A6%82%E6%9E%9C%E6%8C%89%E7%85%A7%5B%E6%89%A7%E8%A1%8C%5Dk%E3%80%81%5B%E5%88%86%E6%9E%90%5Dk%2B1%E3%80%81%5B%E5%8F%96%E6%8C%87%5Dk%2B2%E9%87%8D%E5%8F%A0%E7%9A%84%E6%B5%81%E6%B0%B4%E7%BA%BF%E6%96%B9%E5%BC%8F%E6%89%A7%E8%A1%8C%E6%8C%87%E4%BB%A4%EF%BC%8C%E4%BB%8E%E5%A4%B4%E5%88%B0%E5%B0%BE%E6%89%A7%E8%A1%8C%E5%AE%8C%20500%20%E6%9D%A1%E6%8C%87%E4%BB%A4%E9%9C%80%20%EF%BC%885%EF%BC%89%20%E2%96%B3t%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（4）</span>
                <span class="choice false">A．5590</span>
                <span class="choice false">B．5595</span>
                <span class="choice true">C．6000</span>
                <span class="choice false">D．6007</span>
            </p>
            <p class="one-line-choice"><span class="number">（5）</span>
                <span class="choice false">A．2492</span>
                <span class="choice false">B．2500</span>
                <span class="choice true">C．2510</span>
                <span class="choice false">D．2515</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    顺序执行很简单，500*（5+2+5）=6000△t。<br />
                    重叠流水线方式参考下图：<br />

                    执行500条指令的时间=500*5+5+5=2510</p>
            </div>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i2" />
            </div>
        </div>
        <div class="block">
            <p class="question">在开发一个系统时，如果用户对系统的目标是不很清楚，难以定义需求，这时最好使用 （6） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%BC%80%E5%8F%91%E4%B8%80%E4%B8%AA%E7%B3%BB%E7%BB%9F%E6%97%B6%EF%BC%8C%E5%A6%82%E6%9E%9C%E7%94%A8%E6%88%B7%E5%AF%B9%E7%B3%BB%E7%BB%9F%E7%9A%84%E7%9B%AE%E6%A0%87%E6%98%AF%E4%B8%8D%E5%BE%88%E6%B8%85%E6%A5%9A%EF%BC%8C%E9%9A%BE%E4%BB%A5%E5%AE%9A%E4%B9%89%E9%9C%80%E6%B1%82%EF%BC%8C%E8%BF%99%E6%97%B6%E6%9C%80%E5%A5%BD%E4%BD%BF%E7%94%A8%20%EF%BC%886%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（6）</span>
                <span class="choice true">A．原型法</span>
                <span class="choice false">B．瀑布模型</span>
                <span class="choice false">C．V-模型</span>
                <span class="choice false">D．螺旋模型</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    快速原型模型的第一步是建造一个快速原型，实现客户或未来的用户与系统的交互，用户或客户对原型进行评价，进一步细化待开发软件的需求。通过逐步调整原型使其满足客户的要求，开发人员可以确定客户的真正需求是什么。所以当用户对系统的目标不是很清楚，难以定义需求时，最好用原型法。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">应该在 （7） 阶段制定系统测试计划。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BA%94%E8%AF%A5%E5%9C%A8%20%EF%BC%887%EF%BC%89%20%E9%98%B6%E6%AE%B5%E5%88%B6%E5%AE%9A%E7%B3%BB%E7%BB%9F%E6%B5%8B%E8%AF%95%E8%AE%A1%E5%88%92%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（7）</span>
                <span class="choice true">A．需求分析</span>
                <span class="choice false">B．概要设计</span>
                <span class="choice false">C．详细设计</span>
                <span class="choice false">D．系统测试</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    应该在需求分析阶段就开始制定测试计划，并在设计阶段细化和完善，而不是等系统编码完成后才制定测试计划。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">已经发布实施的标准（包括已确认或修改补充的标准），经过实施一定时期后，对其内容再次审查，以确保其有效性、先进性和适用性，其周期一般不超过 （8） 年。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%BB%8F%E5%8F%91%E5%B8%83%E5%AE%9E%E6%96%BD%E7%9A%84%E6%A0%87%E5%87%86%EF%BC%88%E5%8C%85%E6%8B%AC%E5%B7%B2%E7%A1%AE%E8%AE%A4%E6%88%96%E4%BF%AE%E6%94%B9%E8%A1%A5%E5%85%85%E7%9A%84%E6%A0%87%E5%87%86%EF%BC%89%EF%BC%8C%E7%BB%8F%E8%BF%87%E5%AE%9E%E6%96%BD%E4%B8%80%E5%AE%9A%E6%97%B6%E6%9C%9F%E5%90%8E%EF%BC%8C%E5%AF%B9%E5%85%B6%E5%86%85%E5%AE%B9%E5%86%8D%E6%AC%A1%E5%AE%A1%E6%9F%A5%EF%BC%8C%E4%BB%A5%E7%A1%AE%E4%BF%9D%E5%85%B6%E6%9C%89%E6%95%88%E6%80%A7%E3%80%81%E5%85%88%E8%BF%9B%E6%80%A7%E5%92%8C%E9%80%82%E7%94%A8%E6%80%A7%EF%BC%8C%E5%85%B6%E5%91%A8%E6%9C%9F%E4%B8%80%E8%88%AC%E4%B8%8D%E8%B6%85%E8%BF%87%20%EF%BC%888%EF%BC%89%20%E5%B9%B4%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（8）</span>
                <span class="choice false">A．1</span>
                <span class="choice false">B．3</span>
                <span class="choice true">C．5</span>
                <span class="choice false">D．7</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    标准复审（review of
                    standard）是指已经发布实施的现有标准（包括已确认或修改补充的标准），经过实施一定时期后，对其内容再次审查，以确保其有效性、先进性和适用性的过程。1988年发布的《中华人民共和国标准化法实施条例》中规定，标准实施后的复审复审周期一般不超过5年。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（9） 不需要登记或标注版权标记就能得到保护。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%889%EF%BC%89%20%E4%B8%8D%E9%9C%80%E8%A6%81%E7%99%BB%E8%AE%B0%E6%88%96%E6%A0%87%E6%B3%A8%E7%89%88%E6%9D%83%E6%A0%87%E8%AE%B0%E5%B0%B1%E8%83%BD%E5%BE%97%E5%88%B0%E4%BF%9D%E6%8A%A4%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A．专利权</span>
                <span class="choice false">B．商标权</span>
                <span class="choice true">C．著作权</span>
                <span class="choice false">D．财产权</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    发明者或者设计者作出了发明创造之后，专利局并不是自动地给予专利保护，专利权必须由有权申请专利的申请者依照法律规定向专利局提出专利申请，经过专利局审查合格后，才能授予专利权。<br />
                    商标法规定：自然人、法人或者其他组织对其生产、制造、加工、拣选或者经销的商品，需要取得商标专用权的，应当向商标局申请商品商标注册。自然人、法人或者其他组织对其提供的服务项目，需要取得商标专用权的，应当向商标局申请服务商标注册。<br />
                    任何财产要受到法律的保护都必须以经过国家法律的确认为前提。对于有形财产，只要是合法所得且能被民事主体所控制和掌握，具有一定的经济价值，便可构成民事主体财产的一部分，通常均受到法律的确认和保护，不需要再明确地加以规定。而无形的智力创造性成果则不同，它不像有形财产那样直观可见，因此智力创造性成果的财产权需要履行特定的法律手续或者需经国家主管机关依法审批，依法审查确认。<br />
                    著作权法中规定：中国公民、法人或者其他组织的作品，不论是否发表，依照本法享有著作权。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在下图所示的树型文件中，方框表示目录，圆圈表示文件，“/”表示路径的分隔符“/”路径之首时表示根目录。图中， （10） 。<br />
                <div class="img-center">
                    <img style="width:100%;max-width:25em;" id="i3" />
                </div>
                假设当前目录是 D1，进程 A 以如下两种方式打开文件 f1 ：<br />
                方式① fd1＝open（" （11） /f1"，o_RDONLY）；<br />
                方式② fd1＝open（"/D1/W1/f1"，o_RDONLY）；<br />
                其中，方式①的工作效率比方式②的工作效率高，因为采用方式①的文件系统 （12） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E6%A0%91%E5%9E%8B%E6%96%87%E4%BB%B6%E4%B8%AD%EF%BC%8C%E6%96%B9%E6%A1%86%E8%A1%A8%E7%A4%BA%E7%9B%AE%E5%BD%95%EF%BC%8C%E5%9C%86%E5%9C%88%E8%A1%A8%E7%A4%BA%E6%96%87%E4%BB%B6%EF%BC%8C%E2%80%9C/%E2%80%9D%E8%A1%A8%E7%A4%BA%E8%B7%AF%E5%BE%84%E7%9A%84%E5%88%86%E9%9A%94%E7%AC%A6%E2%80%9C/%E2%80%9D%E8%B7%AF%E5%BE%84%E4%B9%8B%E9%A6%96%E6%97%B6%E8%A1%A8%E7%A4%BA%E6%A0%B9%E7%9B%AE%E5%BD%95%E3%80%82%E5%9B%BE%E4%B8%AD%EF%BC%8C%20%EF%BC%8810%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7%3Cbr/%3E%0A%20%E5%81%87%E8%AE%BE%E5%BD%93%E5%89%8D%E7%9B%AE%E5%BD%95%E6%98%AF%20D1%EF%BC%8C%E8%BF%9B%E7%A8%8B%20A%20%E4%BB%A5%E5%A6%82%E4%B8%8B%E4%B8%A4%E7%A7%8D%E6%96%B9%E5%BC%8F%E6%89%93%E5%BC%80%E6%96%87%E4%BB%B6%20f1%20%EF%BC%9A%3Cbr/%3E%0A%20%E6%96%B9%E5%BC%8F%E2%91%A0%20fd1%EF%BC%9Dopen%EF%BC%88%22%20%EF%BC%8811%EF%BC%89%20/f1%22%EF%BC%8Co_RDONLY%EF%BC%89%EF%BC%9B%3Cbr/%3E%0A%20%E6%96%B9%E5%BC%8F%E2%91%A1%20fd1%EF%BC%9Dopen%EF%BC%88%22/D1/W1/f1%22%EF%BC%8Co_RDONLY%EF%BC%89%EF%BC%9B%3Cbr/%3E%0A%20%E5%85%B6%E4%B8%AD%EF%BC%8C%E6%96%B9%E5%BC%8F%E2%91%A0%E7%9A%84%E5%B7%A5%E4%BD%9C%E6%95%88%E7%8E%87%E6%AF%94%E6%96%B9%E5%BC%8F%E2%91%A1%E7%9A%84%E5%B7%A5%E4%BD%9C%E6%95%88%E7%8E%87%E9%AB%98%EF%BC%8C%E5%9B%A0%E4%B8%BA%E9%87%87%E7%94%A8%E6%96%B9%E5%BC%8F%E2%91%A0%E7%9A%84%E6%96%87%E4%BB%B6%E7%B3%BB%E7%BB%9F%20%EF%BC%8812%EF%BC%89%20%E3%80%82">百度</a>
            </p>
            <p class="choice header_choice false"><span class="number">（10） </span>A．子目录W2中文件f2和子目录D2中文件f2是完全相同的
            </p>
            <p class="choice false">B．子目录W2中文件f2和子目录D2中文件f2是不相同的
            </p>
            <p class="choice true">C．子目录W2中文件f2和子目录D2中文件f2是可能相同也可能不相同
            </p>
            <p class="choice false">D．树型文件系统中不允许出现相同名字的文件</p>
            <p class="one-line-choice"><span class="number">（11）</span>
                <span class="choice false">A．/D1/W1</span>
                <span class="choice false">B．D1/W1</span>
                <span class="choice true">C．W1</span>
                <span class="choice false">D．f1</span>
            </p>
            <p class="choice header_choice false"><span class="number">（12） </span>A．可以直接访问根目录下的文件f1
            </p>
            <p class="choice true">B．可用从当前路径开始查找需要访问的文件f1
            </p>
            <p class="choice false">C．只需要访问一次磁盘，就可以读取文件f1，而方式②需要二次
            </p>
            <p class="choice false">D．只需要访问一次磁盘，就可以读取文件f1，而方式②需要三次</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    （10）常识。<br />
                    （11）这里考的是绝对目录和相对目录的概念。<br />
                    （12）明白11的意思，自然知道12的答案。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">按照同步光纤网传输标准（SONET），OC-3 的数据速率为 （13） Mb/s 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%89%E7%85%A7%E5%90%8C%E6%AD%A5%E5%85%89%E7%BA%A4%E7%BD%91%E4%BC%A0%E8%BE%93%E6%A0%87%E5%87%86%EF%BC%88SONET%EF%BC%89%EF%BC%8COC-3%20%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8813%EF%BC%89%20Mb/s%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（13）</span>
                <span class="choice false">A．150.336</span>
                <span class="choice true">B．155.520</span>
                <span class="choice false">C．622.080</span>
                <span class="choice false">D．2488.320</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    SONET的数据速率参见下表。<br />
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">设信号的波特率为 600Baud，采用幅度—相位复合调制技术，由 4 种幅度和 8 种相位组成 16 种码元，则信道的数据率为 （14） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E4%BF%A1%E5%8F%B7%E7%9A%84%E6%B3%A2%E7%89%B9%E7%8E%87%E4%B8%BA%20600Baud%EF%BC%8C%E9%87%87%E7%94%A8%E5%B9%85%E5%BA%A6%E2%80%94%E7%9B%B8%E4%BD%8D%E5%A4%8D%E5%90%88%E8%B0%83%E5%88%B6%E6%8A%80%E6%9C%AF%EF%BC%8C%E7%94%B1%204%20%E7%A7%8D%E5%B9%85%E5%BA%A6%E5%92%8C%208%20%E7%A7%8D%E7%9B%B8%E4%BD%8D%E7%BB%84%E6%88%90%2016%20%E7%A7%8D%E7%A0%81%E5%85%83%EF%BC%8C%E5%88%99%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E7%8E%87%E4%B8%BA%20%EF%BC%8814%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（14）</span>
                <span class="choice false">A．600b/s</span>
                <span class="choice true">B．2400b/s</span>
                <span class="choice false">C．4800b/s</span>
                <span class="choice false">D．9600b/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    本题考查数据速率的计算。<br />
                    信号的波特率为600Baud，每个码元由4种幅度和8种相位组成16种码元，则信道的速率<br />
                    D = Blog2k = 600log216 = 2400 b/s。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">双极型AMI编码经过一个噪声信道，接收的波形如图所示，那么出错的是第 （15）位。 &emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%8F%8C%E6%9E%81%E5%9E%8BAMI%E7%BC%96%E7%A0%81%E7%BB%8F%E8%BF%87%E4%B8%80%E4%B8%AA%E5%99%AA%E5%A3%B0%E4%BF%A1%E9%81%93%EF%BC%8C%E6%8E%A5%E6%94%B6%E7%9A%84%E6%B3%A2%E5%BD%A2%E5%A6%82%E5%9B%BE%E6%89%80%E7%A4%BA%EF%BC%8C%E9%82%A3%E4%B9%88%E5%87%BA%E9%94%99%E7%9A%84%E6%98%AF%E7%AC%AC%20%EF%BC%8815%EF%BC%89%E4%BD%8D%E3%80%82%20%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i4" />
            </div>
            <p class="one-line-choice"><span class="number">（15）</span>
                <span class="choice false">A．3</span>
                <span class="choice false">B．5</span>
                <span class="choice true">C．7</span>
                <span class="choice false">D．9</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    AMI（Alternate Mark
                    Inversion，信号交替反转码）是双极性编码中最简单的一种，零电平代表二进制0，正负电平交替代表比特1。即如果第一个比特1由正电平表示，则第二个比特1由负电平表示，第三个比特1仍用正电平表示，如此类推。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若信息码字为11100011，生成多项式 G（X）=X5+X4+X+1，则计算出的 CRC 校验码为 （16） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%8B%A5%E4%BF%A1%E6%81%AF%E7%A0%81%E5%AD%97%E4%B8%BA11100011%EF%BC%8C%E7%94%9F%E6%88%90%E5%A4%9A%E9%A1%B9%E5%BC%8F%20G%EF%BC%88X%EF%BC%89%3DX5%2BX4%2BX%2B1%EF%BC%8C%E5%88%99%E8%AE%A1%E7%AE%97%E5%87%BA%E7%9A%84%20CRC%20%E6%A0%A1%E9%AA%8C%E7%A0%81%E4%B8%BA%20%EF%BC%8816%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．01101</span>
                <span class="choice true">B．11010</span>
                <span class="choice false">C．001101</span>
                <span class="choice false">D．0011010</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    <br />
                    CRC编码的基本思想将位串看成系数为0或1的多项式。一个n位的帧被看成是n-1次多项式的系数列表。最左边是xn-1项的系数，接着是xn-2项的系数，依此类推，直到X0项的系数。此题中的二进制字符串对应的多项式为X7+X6+X5+
                    X+1<br />
                    CRC计算校验和的算法为：<br />
                    1. 设G(x)为r阶多项式，设被校验帧对应多项式M(x) 的长度为m，在M(x)的末尾加r个零，此时帧长为m+r，多项式为xrM(x)。<br />
                    2. 使用模2除法计算xrM(x) / G(x)，得到余数Y(x)。<br />
                    3. 使用模2加法计算xrM(x)加余数Y(x)，结果即是带校验和的数据帧对应的多项式T(x)。<br />
                    当帧是11100011，生成多项式为X5+X4+X+1时，CRC校验码为11010（参考《网络工程师考前辅导》4.9.3节关于CRC码的例子）。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若采用后退 N 帧 ARQ 协议进行流量控制，帧编号字段为 7 位，则发送窗口的最大长度为 （17） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%8B%A5%E9%87%87%E7%94%A8%E5%90%8E%E9%80%80%20N%20%E5%B8%A7%20ARQ%20%E5%8D%8F%E8%AE%AE%E8%BF%9B%E8%A1%8C%E6%B5%81%E9%87%8F%E6%8E%A7%E5%88%B6%EF%BC%8C%E5%B8%A7%E7%BC%96%E5%8F%B7%E5%AD%97%E6%AE%B5%E4%B8%BA%207%20%E4%BD%8D%EF%BC%8C%E5%88%99%E5%8F%91%E9%80%81%E7%AA%97%E5%8F%A3%E7%9A%84%E6%9C%80%E5%A4%A7%E9%95%BF%E5%BA%A6%E4%B8%BA%20%EF%BC%8817%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A．7</span>
                <span class="choice false">B．8</span>
                <span class="choice true">C．127</span>
                <span class="choice false">D．128</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    本题考查后退N帧ARQ协议知识。<br />
                    后退N帧ARQ协议的发送窗口W<=编号个数－1，编号个数为7位即为128个，所以发送窗口的最大长度为W=128-1=127。</p> </div> </div> <div class="block">
                        <p class="question">在 ISO OSI/RM 中， （18） 实现数据压缩功能。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20ISO%20OSI/RM%20%E4%B8%AD%EF%BC%8C%20%EF%BC%8818%EF%BC%89%20%E5%AE%9E%E7%8E%B0%E6%95%B0%E6%8D%AE%E5%8E%8B%E7%BC%A9%E5%8A%9F%E8%83%BD%E3%80%82">百度</a></p>
                        <p class="one-line-choice"><span class="number">（18）</span>
                            <span class="choice false">A．应用层</span>
                            <span class="choice true">B．表示层</span>
                            <span class="choice false">C．会话层</span>
                            <span class="choice false">D．网络层</span>
                        </p>
                        <div class="explain">
                            <p class="explain-header"> 试题解析：</p>
                            <p class="explain-content">
                                此题主要考查了ISO OSI/RM体系结构中各层的主要功能。<br />
                                • 应用层：直接面向用户和应用程序，提供文件下载、电子邮件等方面的服务。 <br />
                                • 表示层：提供数据格式翻译、数据加密与解密、数据压缩与解压缩的服务。 <br />
                                • 会话层：提供增强会话服务。 <br />
                                • 网络层：提供路由选择、数据报分片与重组、拥塞控制等服务。 </p>
                        </div>
            </div>
            <div class="block">
                <p class="question">以太网中的帧属于 （19） 协议数据单元。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91%E4%B8%AD%E7%9A%84%E5%B8%A7%E5%B1%9E%E4%BA%8E%20%EF%BC%8819%EF%BC%89%20%E5%8D%8F%E8%AE%AE%E6%95%B0%E6%8D%AE%E5%8D%95%E5%85%83%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（19）</span>
                    <span class="choice false">A．物理层</span>
                    <span class="choice true">B．数据链路层</span>
                    <span class="choice false">C．网络层</span>
                    <span class="choice false">D．应用层</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">匿名 FTP 访问通常使用 （20） 作为用户名。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%8C%BF%E5%90%8D%20FTP%20%E8%AE%BF%E9%97%AE%E9%80%9A%E5%B8%B8%E4%BD%BF%E7%94%A8%20%EF%BC%8820%EF%BC%89%20%E4%BD%9C%E4%B8%BA%E7%94%A8%E6%88%B7%E5%90%8D%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（20）</span>
                    <span class="choice false">A．guest</span>
                    <span class="choice false">B．email地址</span>
                    <span class="choice true">C．anonymous</span>
                    <span class="choice false">D．主机id</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">ADSL 采用多路复用技术是 （21） ，最大传输距离可达 （22） 米。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ADSL%20%E9%87%87%E7%94%A8%E5%A4%9A%E8%B7%AF%E5%A4%8D%E7%94%A8%E6%8A%80%E6%9C%AF%E6%98%AF%20%EF%BC%8821%EF%BC%89%20%EF%BC%8C%E6%9C%80%E5%A4%A7%E4%BC%A0%E8%BE%93%E8%B7%9D%E7%A6%BB%E5%8F%AF%E8%BE%BE%20%EF%BC%8822%EF%BC%89%20%E7%B1%B3%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（21）</span>
                    <span class="choice false">A．TDM</span>
                    <span class="choice true">B．FDM</span>
                    <span class="choice false">C．WDM</span>
                    <span class="choice false">D．CDMA</span>
                </p>
                <p class="one-line-choice"><span class="number">（22）</span>
                    <span class="choice false">A．500</span>
                    <span class="choice false">B．1000</span>
                    <span class="choice true">C．5000</span>
                    <span class="choice false">D．10000</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        ADSL通过不对称传输，利用FDM（Frequency Division Multiplex，频分多路复用）或EC（Echo
                        Cancellation，回波抵消）技术使上、下行信道分开来减小串音的影响，从而实现信号的高速传送，最大传输距离可达5千米。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">布线实施后需要进行测试，在测试线路的主要指标中， （23） 是指一对相邻的另一对线通过电磁感应所产生的耦合信号。 （24）
                    是由于集肤效应、绝缘损耗、阻抗不匹配、连接电阻等因素，造成信号沿链路传输时的损失。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B8%83%E7%BA%BF%E5%AE%9E%E6%96%BD%E5%90%8E%E9%9C%80%E8%A6%81%E8%BF%9B%E8%A1%8C%E6%B5%8B%E8%AF%95%EF%BC%8C%E5%9C%A8%E6%B5%8B%E8%AF%95%E7%BA%BF%E8%B7%AF%E7%9A%84%E4%B8%BB%E8%A6%81%E6%8C%87%E6%A0%87%E4%B8%AD%EF%BC%8C%20%EF%BC%8823%EF%BC%89%20%E6%98%AF%E6%8C%87%E4%B8%80%E5%AF%B9%E7%9B%B8%E9%82%BB%E7%9A%84%E5%8F%A6%E4%B8%80%E5%AF%B9%E7%BA%BF%E9%80%9A%E8%BF%87%E7%94%B5%E7%A3%81%E6%84%9F%E5%BA%94%E6%89%80%E4%BA%A7%E7%94%9F%E7%9A%84%E8%80%A6%E5%90%88%E4%BF%A1%E5%8F%B7%E3%80%82%20%EF%BC%8824%EF%BC%89%20%E6%98%AF%E7%94%B1%E4%BA%8E%E9%9B%86%E8%82%A4%E6%95%88%E5%BA%94%E3%80%81%E7%BB%9D%E7%BC%98%E6%8D%9F%E8%80%97%E3%80%81%E9%98%BB%E6%8A%97%E4%B8%8D%E5%8C%B9%E9%85%8D%E3%80%81%E8%BF%9E%E6%8E%A5%E7%94%B5%E9%98%BB%E7%AD%89%E5%9B%A0%E7%B4%A0%EF%BC%8C%E9%80%A0%E6%88%90%E4%BF%A1%E5%8F%B7%E6%B2%BF%E9%93%BE%E8%B7%AF%E4%BC%A0%E8%BE%93%E6%97%B6%E7%9A%84%E6%8D%9F%E5%A4%B1%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（23）</span>
                    <span class="choice true">A．近端串绕</span>
                    <span class="choice false">B．衰减值</span>
                    <span class="choice false">C．回波损耗</span>
                    <span class="choice false">D．传输延迟</span>
                </p>
                <p class="one-line-choice"><span class="number">（24）</span>
                    <span class="choice false">A．近端串绕</span>
                    <span class="choice true">B．衰减值</span>
                    <span class="choice false">C．回波损耗</span>
                    <span class="choice false">D．传输延迟</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        此题主要考查了网络测试需要了解的一些参赛。<br />
                        近端串扰（Near End Cross
                        Talk）：当电流在一条导线中流通时，会产生一定的电磁场，干扰相邻导线上的信号。近端串扰是指在与发送端处于同一边的接收端处所感应到的从发送线对感应过来的串扰信号。在串扰信号过大时，接收器将无法判别信号是远端传送来的微弱信号还是串扰杂讯。<br />
                        衰减：指光在沿光纤传输过程中光功率的减少。可能由于长度过长、温度过高、连线点不好等问题，也可能是线缆端接触质量问题。<br />
                        回波损耗：反射损耗又称为回波损耗，它是指在光纤连接处，后向反射光相对输入光的比率的分贝数，回波损耗愈大愈好，以减少反射光对光源和系统的影响。<br />
                        传输延迟：是信号在发送方和接收方之间的线路上的传输时间，以及信号在传输过程中被中间节点的处理时间的加和。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">通常情况下，信息插座的安装位置距离地面的高度为 （25） cm 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%80%9A%E5%B8%B8%E6%83%85%E5%86%B5%E4%B8%8B%EF%BC%8C%E4%BF%A1%E6%81%AF%E6%8F%92%E5%BA%A7%E7%9A%84%E5%AE%89%E8%A3%85%E4%BD%8D%E7%BD%AE%E8%B7%9D%E7%A6%BB%E5%9C%B0%E9%9D%A2%E7%9A%84%E9%AB%98%E5%BA%A6%E4%B8%BA%20%EF%BC%8825%EF%BC%89%20cm%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（25）</span>
                    <span class="choice false">A．10～20</span>
                    <span class="choice false">B．20～30</span>
                    <span class="choice true">C．30～50</span>
                    <span class="choice false">D．50～70</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        标准信息插座采用标准RJ45的8芯接线，符合ISDN标准，分埋入型、表面型、双孔型、单孔型等多种类型，适应于墙面、家具表面或地面安装。通常情况下，信息插座的安装位置距离地面的高度为30～50cm。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 Linux 操作系统中手工安装 Apache 服务器时，默认的 Web 站点的目录为 （26） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E5%9C%A8%20Linux%20%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E4%B8%AD%E6%89%8B%E5%B7%A5%E5%AE%89%E8%A3%85%20Apache%20%E6%9C%8D%E5%8A%A1%E5%99%A8%E6%97%B6%EF%BC%8C%E9%BB%98%E8%AE%A4%E7%9A%84%20Web%20%E7%AB%99%E7%82%B9%E7%9A%84%E7%9B%AE%E5%BD%95%E4%B8%BA%20%EF%BC%8826%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（26） </span>A．/etc/httpd</p>
                <p class="choice false">B．/var/log/httpd</p>
                <p class="choice false">C．/etc/home</p>
                <p class="choice true">D．/home/httpd</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        Apache的默认目录是/home/httpd，可以通过在配置文件srm.conf通过修改DocumentRoot配置项来改变。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 Linux 中， （27） 命令可用显示当前用户的工作目录。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20Linux%20%E4%B8%AD%EF%BC%8C%20%EF%BC%8827%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%8F%AF%E7%94%A8%E6%98%BE%E7%A4%BA%E5%BD%93%E5%89%8D%E7%94%A8%E6%88%B7%E7%9A%84%E5%B7%A5%E4%BD%9C%E7%9B%AE%E5%BD%95%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（27）</span>
                    <span class="choice false">A．#where</span>
                    <span class="choice false">B．#md</span>
                    <span class="choice true">C．#pwd</span>
                    <span class="choice false">D．#rd</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        各个命令介绍如下表<br />
                        §§</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下列选项中， （28） 不属于 Windows 的网络应用程序接口（API）。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%20%EF%BC%8828%EF%BC%89%20%E4%B8%8D%E5%B1%9E%E4%BA%8E%20Windows%20%E7%9A%84%E7%BD%91%E7%BB%9C%E5%BA%94%E7%94%A8%E7%A8%8B%E5%BA%8F%E6%8E%A5%E5%8F%A3%EF%BC%88API%EF%BC%89%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（28）</span>
                    <span class="choice false">A．Winsock</span>
                    <span class="choice true">B．NFS</span>
                    <span class="choice false">C．RPC</span>
                    <span class="choice false">D．NetBIOS</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        Winsock是Windows网络编程接口，RPC是远程过程调用，NetBIOS网络基本输入输出系统调用接口。只有NFS（Network File
                        System，网络文件系统）不属于Windows 的网络应用程序接口。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">ATM 适配层的功能是 （29） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ATM%20%E9%80%82%E9%85%8D%E5%B1%82%E7%9A%84%E5%8A%9F%E8%83%BD%E6%98%AF%20%EF%BC%8829%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（29）</span>
                    <span class="choice true">A．分割和合并用户数据</span>
                    <span class="choice false">B．信元头的组装和拆分
                    </span>
                    <span class="choice false">C．比特定时</span>
                    <span class="choice false">D．信元校验</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        AAL（ATM Adaptation
                        Layer，ATM适配层）位于ATM层之上，这一层是和业务相关的，即针对不同的业务采用不同的适配方法。由于上层业务种类繁多，AAL层处理比较复杂，所以分为SAR拆分和重组子层和CS汇集子层。其中，SAR子层对数据进行分段和重装配。CS子层负责为来自用户平台（如IP包）的信息单元作分割准备。进行这种准备的目的是让CS层能够将这些包再拼接成原始状态；信元头的组装、拆分和校验是在ATM层中实现的；比特定时是物理层中实现的。因此只有A是正确的。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">FTTx ＋ LAN 接入网采用的传输介质为 （30） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=FTTx%20%EF%BC%8B%20LAN%20%E6%8E%A5%E5%85%A5%E7%BD%91%E9%87%87%E7%94%A8%E7%9A%84%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E4%B8%BA%20%EF%BC%8830%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（30）</span>
                    <span class="choice false">A．同轴电缆</span>
                    <span class="choice false">B．光纤</span>
                    <span class="choice false">C．5类双绞线</span>
                    <span class="choice true">D．光纤和5类双绞线</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">窃取是对 （31） 的攻击，DDos 攻击破坏了 （32） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%AA%83%E5%8F%96%E6%98%AF%E5%AF%B9%20%EF%BC%8831%EF%BC%89%20%E7%9A%84%E6%94%BB%E5%87%BB%EF%BC%8CDDos%20%E6%94%BB%E5%87%BB%E7%A0%B4%E5%9D%8F%E4%BA%86%20%EF%BC%8832%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（31）</span>
                    <span class="choice false">A．可用性</span>
                    <span class="choice true">B．保密性</span>
                    <span class="choice false">C．完整性</span>
                    <span class="choice false">D．真实性</span>
                </p>
                <p class="one-line-choice"><span class="number">（32）</span>
                    <span class="choice true">A．可用性</span>
                    <span class="choice false">B．保密性</span>
                    <span class="choice false">C．完整性</span>
                    <span class="choice false">D．真实性</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">数据加密标准（ DES ）是一种分组密码，将明文分成大小 （33） 位的块进行加密，密钥长度为 （34） 位。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E6%95%B0%E6%8D%AE%E5%8A%A0%E5%AF%86%E6%A0%87%E5%87%86%EF%BC%88%20DES%20%EF%BC%89%E6%98%AF%E4%B8%80%E7%A7%8D%E5%88%86%E7%BB%84%E5%AF%86%E7%A0%81%EF%BC%8C%E5%B0%86%E6%98%8E%E6%96%87%E5%88%86%E6%88%90%E5%A4%A7%E5%B0%8F%20%EF%BC%8833%EF%BC%89%20%E4%BD%8D%E7%9A%84%E5%9D%97%E8%BF%9B%E8%A1%8C%E5%8A%A0%E5%AF%86%EF%BC%8C%E5%AF%86%E9%92%A5%E9%95%BF%E5%BA%A6%E4%B8%BA%20%EF%BC%8834%EF%BC%89%20%E4%BD%8D%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（33）</span>
                    <span class="choice false">A．16</span>
                    <span class="choice false">B．32</span>
                    <span class="choice false">C．56</span>
                    <span class="choice true">D．64</span>
                </p>
                <p class="one-line-choice"><span class="number">（34）</span>
                    <span class="choice false">A．16</span>
                    <span class="choice false">B．32</span>
                    <span class="choice true">C．56</span>
                    <span class="choice false">D．128</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        DES（Data Encryption
                        Standard数据加密标准）是由IBM公司研制的一种加密算法，美国国家标准局于1977年公布把它作为非机要部门使用的数据加密标准，DES是一个分组加密算法，它以64位为分组对数据加密。DES的密钥长度是56位（因为每个第8位都用作奇偶校验）。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下面关于数字签名的说法错误的是 （35） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E6%95%B0%E5%AD%97%E7%AD%BE%E5%90%8D%E7%9A%84%E8%AF%B4%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8835%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（35） </span>A．能够保证信息传输过程中的保密性
                </p>
                <p class="choice false">B．能够对发送者的身份进行认证
                </p>
                <p class="choice false">C．如果接收者对报文进行了篡改，会被发现
                </p>
                <p class="choice false">D．网络中的某一用户不能冒充另一用户作为发送者或接收者</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        数字签名实现了完整性验证、身份验证，但不涉及信息本身的加密。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 RIP 协议中，默认的路由更新周期是 （36） 秒。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20RIP%20%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%E9%BB%98%E8%AE%A4%E7%9A%84%E8%B7%AF%E7%94%B1%E6%9B%B4%E6%96%B0%E5%91%A8%E6%9C%9F%E6%98%AF%20%EF%BC%8836%EF%BC%89%20%E7%A7%92%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（36）</span>
                    <span class="choice true">A．30</span>
                    <span class="choice false">B．60</span>
                    <span class="choice false">C．90</span>
                    <span class="choice false">D．100</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在距离矢量路由协议中，可以使用多种方法防止路由循环，以下选项中，不属于这些方法的是 （37） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E5%9C%A8%E8%B7%9D%E7%A6%BB%E7%9F%A2%E9%87%8F%E8%B7%AF%E7%94%B1%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%E5%8F%AF%E4%BB%A5%E4%BD%BF%E7%94%A8%E5%A4%9A%E7%A7%8D%E6%96%B9%E6%B3%95%E9%98%B2%E6%AD%A2%E8%B7%AF%E7%94%B1%E5%BE%AA%E7%8E%AF%EF%BC%8C%E4%BB%A5%E4%B8%8B%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%B1%9E%E4%BA%8E%E8%BF%99%E4%BA%9B%E6%96%B9%E6%B3%95%E7%9A%84%E6%98%AF%20%EF%BC%8837%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（37） </span>A．垂直翻转（flipvertical）</p>
                <p class="choice false">B．水平分裂（splithorizon）
                </p>
                <p class="choice false">C．反向路由中毒（poisonreverse）</p>
                <p class="choice false">D．设置最大度量值（metricinfinity）</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        此题主要考查了D-V算法收敛性的几种解决方法。<br />
                        路由环的问题可以理解为跳数无穷大的问题。解决方法有如下几种：<br />
                        设置最大度量值（metric
                        infinity）：使用这种方法，路由协议在向量距离超过协议允许的最大值前，允许路由环路的存在，一旦路由信息的向量距离超过规定的最大值，该路由信息将被标记为不可到达。<br />
                        水平分裂方法（split
                        horizon）：即一条路由信息不会被发送给该信息的来源方向。例如如果B必须经由C方可到达Ｄ的话，那么B不可能向C提供任何有价值的路由信息。所以B会告诉C说它到达Ｄ的距离为无穷大。<br />
                        反向路由中毒（posion reverse）：如果路由器监听到某个端口断开连接后，直接把到它的距离设为无穷大，然后向其他路由器发出更新后的信息。<br />
                        保持计时法（Hold-Down
                        Timers）：当一个路由器从它的邻居处收到以前某个可访问的网络现在变为不可访问的信息时，路由器将指向该网络的路由设置为不可访问，同时启动计数器。如果在计时器到期之前，又接收到了从一个邻居路由传来到原网络可访问的信息，此时则关闭计时器，将网络改为可访问。如果在路由器到期之前，收到来自其他路由器的关于信宿的路由信息，且路径比原有路径短，则关闭计时器，更新路由信息，以新的路由代替原来的路由信息。如果计数器到期，则将该路由标记为不可到达。<br />
                        触发更新法Triggered
                        Updates）：一般来说，路由表在没有发生变化的情况下，将按照预定的时间周期进行交换，触发式更新是指路由器之间不单纯按照预定的时间周期进行路由信息交换，而是在路由表发生变化的时候及时地进行路由信息交换。<br />
                        以上介绍的几种方法都是综合起来使用，以解决D-V路由算法的收敛问题。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">关于外部网关协议 BGP ，以下选项中，不正确的是 （38） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E5%A4%96%E9%83%A8%E7%BD%91%E5%85%B3%E5%8D%8F%E8%AE%AE%20BGP%20%EF%BC%8C%E4%BB%A5%E4%B8%8B%E9%80%89%E9%A1%B9%E4%B8%AD%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8838%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（38） </span>A．BGP是一种距离矢量协议</p>
                <p class="choice true">B．BGP通过UDP发布路由信息
                </p>
                <p class="choice false">C．BGP支持路由汇聚功能</p>
                <p class="choice false">D．BGP能够检测路由循环</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        BGP是基于TCP通信的。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">运行 OSPF 协议的路由器每 10 秒钟向它的各个接口发送 Hello 分组，接收到 Hello 分组的路由器就知道了邻居的存在。如果在 （39）
                    秒内没有从特定的邻居接收到这种分组，路由器就认为那个邻居不存在了。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%BF%90%E8%A1%8C%20OSPF%20%E5%8D%8F%E8%AE%AE%E7%9A%84%E8%B7%AF%E7%94%B1%E5%99%A8%E6%AF%8F%2010%20%E7%A7%92%E9%92%9F%E5%90%91%E5%AE%83%E7%9A%84%E5%90%84%E4%B8%AA%E6%8E%A5%E5%8F%A3%E5%8F%91%E9%80%81%20Hello%20%E5%88%86%E7%BB%84%EF%BC%8C%E6%8E%A5%E6%94%B6%E5%88%B0%20Hello%20%E5%88%86%E7%BB%84%E7%9A%84%E8%B7%AF%E7%94%B1%E5%99%A8%E5%B0%B1%E7%9F%A5%E9%81%93%E4%BA%86%E9%82%BB%E5%B1%85%E7%9A%84%E5%AD%98%E5%9C%A8%E3%80%82%E5%A6%82%E6%9E%9C%E5%9C%A8%20%EF%BC%8839%EF%BC%89%20%E7%A7%92%E5%86%85%E6%B2%A1%E6%9C%89%E4%BB%8E%E7%89%B9%E5%AE%9A%E7%9A%84%E9%82%BB%E5%B1%85%E6%8E%A5%E6%94%B6%E5%88%B0%E8%BF%99%E7%A7%8D%E5%88%86%E7%BB%84%EF%BC%8C%E8%B7%AF%E7%94%B1%E5%99%A8%E5%B0%B1%E8%AE%A4%E4%B8%BA%E9%82%A3%E4%B8%AA%E9%82%BB%E5%B1%85%E4%B8%8D%E5%AD%98%E5%9C%A8%E4%BA%86%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（39）</span>
                    <span class="choice false">A．30</span>
                    <span class="choice true">B．40</span>
                    <span class="choice false">C．50</span>
                    <span class="choice false">D．60</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        OSPF规定路由器失效时间是Hello分组间隔时间的4倍。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在广播网络中， OSPF 协议要选出一个指定路由器（Designated Router ，DR）。 DR 有几个作用，以下关于 DR 的描述中， （40） 不是 DR
                    的作用。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%B9%BF%E6%92%AD%E7%BD%91%E7%BB%9C%E4%B8%AD%EF%BC%8C%20OSPF%20%E5%8D%8F%E8%AE%AE%E8%A6%81%E9%80%89%E5%87%BA%E4%B8%80%E4%B8%AA%E6%8C%87%E5%AE%9A%E8%B7%AF%E7%94%B1%E5%99%A8%EF%BC%88Designated%20Router%20%EF%BC%8CDR%EF%BC%89%E3%80%82%20DR%20%E6%9C%89%E5%87%A0%E4%B8%AA%E4%BD%9C%E7%94%A8%EF%BC%8C%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%20DR%20%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%20%EF%BC%8840%EF%BC%89%20%E4%B8%8D%E6%98%AF%20DR%20%E7%9A%84%E4%BD%9C%E7%94%A8%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（40）</span>
                    <span class="choice false">A．减少网络通信量</span>
                    <span class="choice true">B．检测网络故障
                    </span>
                    <span class="choice false">C．负责为整个网络生成LSA</span>
                    <span class="choice false">D．减少链路状态数据库的大小</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        在OSPF中，区域（Area）是一个网络，由一组临近OSPF路由器的集合构成。区域中有且只有一个指定路由器（Designated
                        Router，DR），用来与区域中其他的路由器交换链路状态通告（LSA，Link State
                        Advertisements），其它的路由器则只能通过指定路由器来发送自己的链路状态更新包。这样做的好处是减少了路由器之间交换信息造成的网络拥塞。DR是一个区域中具有最高ID的路由器。<br />
                        OSPF的路由可分为三种类型：区域内部的路由，区域外部的路由和AS之间的路由。<br />
                        区域内部的路由主要由路由器通过邻接关系，从DR处获得本区域的完整的网络拓扑，在此基础上用Dijkstra算法计算整个网络的拓扑图（在路由器中以链路状态数据库形式保存）形成路由表，来进行区域内部的路由。<br />
                        区域之间的路由要通过区域边界路由器，它保存有相连两个区域的所有拓扑图，所有在本区域内部不存在的目的地，均要交给区域边界路由器，由它转发包到区域外，通常这个外部区域为0区域，再由0区域转发到相应的目的地。<br />
                        AS之间的路由要通过AS边界路由器来完成，将数据报转发到外部AS。<br />
                        引入区域概念和DR后，能减少数据库的大小。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">使用 traceroute 命令测试网络可以 （41） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8%20traceroute%20%E5%91%BD%E4%BB%A4%E6%B5%8B%E8%AF%95%E7%BD%91%E7%BB%9C%E5%8F%AF%E4%BB%A5%20%EF%BC%8841%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（41） </span>A．检验链路协议是否运行正常
                </p>
                <p class="choice false">B．检验目标网络是否在路由表中
                </p>
                <p class="choice false">C．检验应用程序是否正常
                </p>
                <p class="choice true">D．显示分组到达目标经过的各个路由器</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">能显示IP、ICMP、TCP、UDP统计信息的 Windows 命令是 （42） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E8%83%BD%E6%98%BE%E7%A4%BAIP%E3%80%81ICMP%E3%80%81TCP%E3%80%81UDP%E7%BB%9F%E8%AE%A1%E4%BF%A1%E6%81%AF%E7%9A%84%20Windows%20%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8842%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（42）</span>
                    <span class="choice true">A．netstat-s</span>
                    <span class="choice false">B．netstat-e
                    </span>
                    <span class="choice false">C．netstat-r</span>
                    <span class="choice false">D．netstat-a</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        S是statistic（统计）的缩写。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 RMON 管理信息库中，矩阵组存储的信息是 （43） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20RMON%20%E7%AE%A1%E7%90%86%E4%BF%A1%E6%81%AF%E5%BA%93%E4%B8%AD%EF%BC%8C%E7%9F%A9%E9%98%B5%E7%BB%84%E5%AD%98%E5%82%A8%E7%9A%84%E4%BF%A1%E6%81%AF%E6%98%AF%20%EF%BC%8843%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（43） </span>A．一对主机之间建立的TCP连接数
                </p>
                <p class="choice false">B．一对主机之间交换的IP分组数
                </p>
                <p class="choice true">C．一对主机之间交换的字节数
                </p>
                <p class="choice false">D．一对主机之间出现冲突的次数</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        这一题考的有些过细。<br />
                        矩阵组记录一对主机之间交换的字节数。矩阵组由三个表组成：控制表、SD数据表（源到目标）和DS表（目标到源）。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">假设有一个局域网，管理站每 15 分钟轮询被管理设备一次，一次查询访问需要的时间是 200ms ，则管理站最多可以支持 （44） 个网络设备。&emsp;<a
                        class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%81%87%E8%AE%BE%E6%9C%89%E4%B8%80%E4%B8%AA%E5%B1%80%E5%9F%9F%E7%BD%91%EF%BC%8C%E7%AE%A1%E7%90%86%E7%AB%99%E6%AF%8F%2015%20%E5%88%86%E9%92%9F%E8%BD%AE%E8%AF%A2%E8%A2%AB%E7%AE%A1%E7%90%86%E8%AE%BE%E5%A4%87%E4%B8%80%E6%AC%A1%EF%BC%8C%E4%B8%80%E6%AC%A1%E6%9F%A5%E8%AF%A2%E8%AE%BF%E9%97%AE%E9%9C%80%E8%A6%81%E7%9A%84%E6%97%B6%E9%97%B4%E6%98%AF%20200ms%20%EF%BC%8C%E5%88%99%E7%AE%A1%E7%90%86%E7%AB%99%E6%9C%80%E5%A4%9A%E5%8F%AF%E4%BB%A5%E6%94%AF%E6%8C%81%20%EF%BC%8844%EF%BC%89%20%E4%B8%AA%E7%BD%91%E7%BB%9C%E8%AE%BE%E5%A4%87%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（44）</span>
                    <span class="choice false">A．400</span>
                    <span class="choice false">B．4000</span>
                    <span class="choice true">C．4500</span>
                    <span class="choice false">D．5000</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        15 * 60 / 0.2 = 4500。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">使用 RAID 作为网络存储设备有许多好处，以下关于 RAID 的叙述中不正确的是（45） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8%20RAID%20%E4%BD%9C%E4%B8%BA%E7%BD%91%E7%BB%9C%E5%AD%98%E5%82%A8%E8%AE%BE%E5%A4%87%E6%9C%89%E8%AE%B8%E5%A4%9A%E5%A5%BD%E5%A4%84%EF%BC%8C%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%20RAID%20%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%EF%BC%8845%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（45） </span>A．RAID使用多块廉价磁盘阵列构成,提高了性能价格比
                </p>
                <p class="choice false">B．RAID采用交叉存取技术，提高了访问速度
                </p>
                <p class="choice true">C．RAID0使用磁盘镜像技术，提高了可靠性
                </p>
                <p class="choice false">D．RAID3利用一台奇偶校验盘完成容错功能，减少了冗余磁盘数量</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        磁盘镜像是RAID1。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在路由表中设置一条默认路由，目标地址应为 （46） ，子网掩码应为 （47） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E8%B7%AF%E7%94%B1%E8%A1%A8%E4%B8%AD%E8%AE%BE%E7%BD%AE%E4%B8%80%E6%9D%A1%E9%BB%98%E8%AE%A4%E8%B7%AF%E7%94%B1%EF%BC%8C%E7%9B%AE%E6%A0%87%E5%9C%B0%E5%9D%80%E5%BA%94%E4%B8%BA%20%EF%BC%8846%EF%BC%89%20%EF%BC%8C%E5%AD%90%E7%BD%91%E6%8E%A9%E7%A0%81%E5%BA%94%E4%B8%BA%20%EF%BC%8847%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（46）</span>
                    <span class="choice false">A．127.0.0.0</span>
                    <span class="choice false">B．127.0.0.1</span>
                    <span class="choice false">C．1.0.0.0</span>
                    <span class="choice true">D．0.0.0.0</span>
                </p>
                <p class="choice header_choice true"><span class="number">（47） </span>A．0.0.0.0</p>
                <p class="choice false">B．255.0.0.0</p>
                <p class="choice false">C．0.0.0.255</p>
                <p class="choice false">D．255.255.255.255</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        默认路由是0.0.0.0，子网掩码是0.0.0.0。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">属于网络 112.10.200.0/21 的地址是 （48） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B1%9E%E4%BA%8E%E7%BD%91%E7%BB%9C%20112.10.200.0/21%20%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8848%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（48） </span>A．112.10.198.0</p>
                <p class="choice true">B．112.10.206.0
                </p>
                <p class="choice false">C．112.10.217.0</p>
                <p class="choice false">D．112.10.224.0</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        112.10.200.0/21的地址范围是112.10.200.0~112.10.207.255。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">设有下面 4 条路由： 172.18.129.0/24 、 172.18.130.0/24 、 172.18.132.0/24 和 172.18.133.0/24
                    ，如果进行路由汇聚，能覆盖这 4 条路由的地址是 （49） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9C%89%E4%B8%8B%E9%9D%A2%204%20%E6%9D%A1%E8%B7%AF%E7%94%B1%EF%BC%9A%20172.18.129.0/24%20%E3%80%81%20172.18.130.0/24%20%E3%80%81%20172.18.132.0/24%20%E5%92%8C%20172.18.133.0/24%20%EF%BC%8C%E5%A6%82%E6%9E%9C%E8%BF%9B%E8%A1%8C%E8%B7%AF%E7%94%B1%E6%B1%87%E8%81%9A%EF%BC%8C%E8%83%BD%E8%A6%86%E7%9B%96%E8%BF%99%204%20%E6%9D%A1%E8%B7%AF%E7%94%B1%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8849%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（49） </span>A．172.18.128.0/21</p>
                <p class="choice false">B．172.18.128.0/22
                </p>
                <p class="choice false">C．172.18.130.0/22</p>
                <p class="choice false">D．172.18.132.0/23</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        前两个字节和最后一个字节不做比较了，只比较第三个字节。<br />
                        129→10000001<br />
                        130→10000010<br />
                        132→10000100<br />
                        133→10000101<br />
                        显然，这四个数字只有前五位是完全相同的，因此汇聚后的网络的第三个字节应该是10000000→128。汇聚后的网络的掩码中1的数量应该有8+8+5=21。<br />
                        因此答案是172.18.128.0/21。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">网络 122.21.136.0/24 和 122.21.143.0/24 经过路由汇聚，得到的网络地址是（50） 。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E7%BD%91%E7%BB%9C%20122.21.136.0/24%20%E5%92%8C%20122.21.143.0/24%20%E7%BB%8F%E8%BF%87%E8%B7%AF%E7%94%B1%E6%B1%87%E8%81%9A%EF%BC%8C%E5%BE%97%E5%88%B0%E7%9A%84%E7%BD%91%E7%BB%9C%E5%9C%B0%E5%9D%80%E6%98%AF%EF%BC%8850%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（50） </span>A．122.21.136.0/22</p>
                <p class="choice true">B．122.21.136.0/21
                </p>
                <p class="choice false">C．122.21.143.0/22</p>
                <p class="choice false">D．122.21.128.0/24</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        前两个字节和最后一个字节不做比较了，只比较第三个字节。<br />
                        136→10001000<br />
                        143→10001111<br />
                        显然，这两个数字只有前五位是完全相同的，因此汇聚后的网络的第三个字节应该是10001000→136。汇聚后的网络的掩码中1的数量应该有8+8+5=21。<br />
                        因此答案是122.21.136.0/21。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">如果路由器配置了 BGP 协议，要把网络地址 133.1.2.0/24 发布给邻居，那么发布这个公告的命令是 （51） 。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E5%A6%82%E6%9E%9C%E8%B7%AF%E7%94%B1%E5%99%A8%E9%85%8D%E7%BD%AE%E4%BA%86%20BGP%20%E5%8D%8F%E8%AE%AE%EF%BC%8C%E8%A6%81%E6%8A%8A%E7%BD%91%E7%BB%9C%E5%9C%B0%E5%9D%80%20133.1.2.0/24%20%E5%8F%91%E5%B8%83%E7%BB%99%E9%82%BB%E5%B1%85%EF%BC%8C%E9%82%A3%E4%B9%88%E5%8F%91%E5%B8%83%E8%BF%99%E4%B8%AA%E5%85%AC%E5%91%8A%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8851%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（51） </span>A．R1(config-route)#network133.1.2.0
                </p>
                <p class="choice false">B．R1(config-route)#network133.1.2.00.0.0.255
                </p>
                <p class="choice false">C．R1(config-route)#network-advertise133.1.2.0
                </p>
                <p class="choice true">D．R1(config-route)#network133.1.2.0mask255.255.255.0</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        BGP发布邻居公告，需要连同掩码一起发送，而且不会使用通配符掩码（反向掩码）。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">如果要彻底退出路由器或者交换机的配置模式，输入的命令是 （52） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%A6%82%E6%9E%9C%E8%A6%81%E5%BD%BB%E5%BA%95%E9%80%80%E5%87%BA%E8%B7%AF%E7%94%B1%E5%99%A8%E6%88%96%E8%80%85%E4%BA%A4%E6%8D%A2%E6%9C%BA%E7%9A%84%E9%85%8D%E7%BD%AE%E6%A8%A1%E5%BC%8F%EF%BC%8C%E8%BE%93%E5%85%A5%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8852%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（52）</span>
                    <span class="choice false">A．exit</span>
                    <span class="choice false">B．noconfig-mode</span>
                    <span class="choice false">C．Ctrl+C</span>
                    <span class="choice true">D．Ctrl+Z</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">把路由器配置脚本从 RAM 写入 NVRAM 的命令是 （53） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8A%8A%E8%B7%AF%E7%94%B1%E5%99%A8%E9%85%8D%E7%BD%AE%E8%84%9A%E6%9C%AC%E4%BB%8E%20RAM%20%E5%86%99%E5%85%A5%20NVRAM%20%E7%9A%84%E5%91%BD%E4%BB%A4%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（53） </span>A．saveramnvram</p>
                <p class="choice false">B．saveram
                </p>
                <p class="choice true">C．copyrunning-configstartup-config</p>
                <p class="choice false">D．copyall</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">虚拟局域网中继协议（VTP）有三种工作模式，即服务器模式、客户机模式和透明模式，以下关于这 3 种工作模式的叙述中，不正确的是 （54） 。&emsp;<a
                        class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%99%9A%E6%8B%9F%E5%B1%80%E5%9F%9F%E7%BD%91%E4%B8%AD%E7%BB%A7%E5%8D%8F%E8%AE%AE%EF%BC%88VTP%EF%BC%89%E6%9C%89%E4%B8%89%E7%A7%8D%E5%B7%A5%E4%BD%9C%E6%A8%A1%E5%BC%8F%EF%BC%8C%E5%8D%B3%E6%9C%8D%E5%8A%A1%E5%99%A8%E6%A8%A1%E5%BC%8F%E3%80%81%E5%AE%A2%E6%88%B7%E6%9C%BA%E6%A8%A1%E5%BC%8F%E5%92%8C%E9%80%8F%E6%98%8E%E6%A8%A1%E5%BC%8F%EF%BC%8C%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E8%BF%99%203%20%E7%A7%8D%E5%B7%A5%E4%BD%9C%E6%A8%A1%E5%BC%8F%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8854%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（54） </span>A．在服务器模式可以设置VLAN信息
                </p>
                <p class="choice false">B．在服务器模式下可以广播VLAN配置信息
                </p>
                <p class="choice false">C．在客户机模式下不可以设置VLAN信息
                </p>
                <p class="choice true">D．在透明模式下不可以设置VLAN信息</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        服务器模式的交换机可以设置VLAN配置参数，服务器会将配置参数发给其他交换机。客户机模式的交换机不可以设置VLAN配置参数，只能接受服务器模式的交换机发来的VLAN配置参数。透明模式的交换机是相对独立的，它允许配置VLAN配置参数，但不向其他交换机发送自己的配置参数。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">按照网络分级设计模型，通常把网络设计分为 3 层，即核心层、汇聚层和接入层，以下关于分级网络的描述中，不正确的是 （55） 。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%89%E7%85%A7%E7%BD%91%E7%BB%9C%E5%88%86%E7%BA%A7%E8%AE%BE%E8%AE%A1%E6%A8%A1%E5%9E%8B%EF%BC%8C%E9%80%9A%E5%B8%B8%E6%8A%8A%E7%BD%91%E7%BB%9C%E8%AE%BE%E8%AE%A1%E5%88%86%E4%B8%BA%203%20%E5%B1%82%EF%BC%8C%E5%8D%B3%E6%A0%B8%E5%BF%83%E5%B1%82%E3%80%81%E6%B1%87%E8%81%9A%E5%B1%82%E5%92%8C%E6%8E%A5%E5%85%A5%E5%B1%82%EF%BC%8C%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E5%88%86%E7%BA%A7%E7%BD%91%E7%BB%9C%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8855%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（55） </span>A．核心层承担访问控制列表检查功能
                </p>
                <p class="choice false">B．汇聚层实现网络的访问策略控制
                </p>
                <p class="choice false">C．工作组服务器放置在接入层
                </p>
                <p class="choice false">D．在接入层可以使用集线器代替交换机</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        此题主要考查了网络三个层次结构的特点，以及提供不同的服务。<br />
                        访问控制列表检查功能属于汇聚层的功能，DMZ（非军事化区）的对外服务器群也有可能提供该功能，但核心层一般没有该功能；<br />
                        汇聚层为接入层提供基于策略的连接，防止某些网段的问题蔓延和影响到核心层；<br />
                        工作组服务器，一般只是一个网段几台机器连接，所以直接放置在接入层就行了；<br />
                        接入层是网络系统的最外层，为用户提供了网络访问接口，实现多种类型的综合接入和传输。所以接入层既可以使用集线器，也可以交换机。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">以太网中如果发生介质访问冲突，按照二进制指数后退算法决定下一次重发的时间，使用二进制后退算法的理由是 （56） 。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91%E4%B8%AD%E5%A6%82%E6%9E%9C%E5%8F%91%E7%94%9F%E4%BB%8B%E8%B4%A8%E8%AE%BF%E9%97%AE%E5%86%B2%E7%AA%81%EF%BC%8C%E6%8C%89%E7%85%A7%E4%BA%8C%E8%BF%9B%E5%88%B6%E6%8C%87%E6%95%B0%E5%90%8E%E9%80%80%E7%AE%97%E6%B3%95%E5%86%B3%E5%AE%9A%E4%B8%8B%E4%B8%80%E6%AC%A1%E9%87%8D%E5%8F%91%E7%9A%84%E6%97%B6%E9%97%B4%EF%BC%8C%E4%BD%BF%E7%94%A8%E4%BA%8C%E8%BF%9B%E5%88%B6%E5%90%8E%E9%80%80%E7%AE%97%E6%B3%95%E7%9A%84%E7%90%86%E7%94%B1%E6%98%AF%20%EF%BC%8856%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（56） </span>A．这种算法简单
                </p>
                <p class="choice false">B．这种算法执行速度快
                </p>
                <p class="choice true">C．这种算法考虑了网络负载对冲突的影响
                </p>
                <p class="choice false">D．这种算法与网络的规模大小无关</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        以太网采用CSMA/CD技术，当网络上的流量越多，负载越大时，发生冲突的机率也会越大。当工作站发送的数据帧因冲突而传输失败时，会采用二进制后退算法后退一段时间后重新发送数据帧。二进制后退算法可以动态地适应发送站点的数量，后退延时的取值范围与重发次数n形成二进制指数关系。当网络负载小时，后退延时的取值范围也小；而当负载大时，后退延时的取值范围也随着增大。二进制后退算法的优点正是把后退延时的平均取值与负载的大小联系起来。所以，二进制后退算法考虑了网络负载对冲突的影响。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 802.11 定义的各种业务中，优先级最低的是 （57） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20802.11%20%E5%AE%9A%E4%B9%89%E7%9A%84%E5%90%84%E7%A7%8D%E4%B8%9A%E5%8A%A1%E4%B8%AD%EF%BC%8C%E4%BC%98%E5%85%88%E7%BA%A7%E6%9C%80%E4%BD%8E%E7%9A%84%E6%98%AF%20%EF%BC%8857%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（57）</span>
                    <span class="choice true">A．分布式竞争访问</span>
                    <span class="choice false">B．带应答的分布式协调功能
                    </span>
                    <span class="choice false">C．服务访问节点轮询</span>
                    <span class="choice false">D．请求/应答式通信</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        IEEE 802.11标准定义了两种操作模式。第一种模式是DCF（Distributed Coordination
                        Function，分布式协调功能），该模式没有中心控制，所有站都在竞争信道；另一种模式是PCF（Point Coordination
                        Function，点协调功能），该模式有基站，作为中心控制决定各个站点的传输顺序。<br />
                        IEEE 802.11还提供了一种机制可以让PCF和DCF共存在同一个通信单元内。这种机制涉及到四种时间间隔，分别是SIFS（Short InterFrame
                        Spacing，短帧间间隔）、PIFS（PCF InterFrame Spacing，PCF帧间间隔）、DIFS（DCF InterFrame
                        Spacing，DCF帧间间隔）和EIFS（Extended InterFrame Spacing，扩展帧间间隔）。<br />
                        §§<br />
                        间隔越短，表示优先级越高。<br />
                        服务访问点轮询使用的是PIFS。<br />
                        带应答的使用的是SIFS。<br />
                        分布式竞争对应的是DIFS，它的间隔最大，优先级最低。<br />
                        （选择中没有对应EIFS的）</p>
                </div>
            </div>
            <div class="block">
                <p class="question">802.11b 定义了无线网的安全协议 WEP （Wired Equivalent Privacy）。以下关于 WEP 的描述中，不正确的是 （58） 。&emsp;<a
                        class="baidu" target="_blank" href="https://www.baidu.com/s?wd=802.11b%20%E5%AE%9A%E4%B9%89%E4%BA%86%E6%97%A0%E7%BA%BF%E7%BD%91%E7%9A%84%E5%AE%89%E5%85%A8%E5%8D%8F%E8%AE%AE%20WEP%20%EF%BC%88Wired%20Equivalent%20Privacy%EF%BC%89%E3%80%82%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%20WEP%20%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（58） </span>A．WEP使用RC4流加密协议
                </p>
                <p class="choice false">B．WEP支持40位密钥和128位密钥
                </p>
                <p class="choice true">C．WEP支持端到端的加密与认证
                </p>
                <p class="choice false">D．WEP是一种对称密钥机制</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        WEP支持点到点的加密与认证，不支持端到端的加密与认证。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下列路由器协议中， （59） 用于 AS 之间的路由选择。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E8%B7%AF%E7%94%B1%E5%99%A8%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%20%EF%BC%8859%EF%BC%89%20%E7%94%A8%E4%BA%8E%20AS%20%E4%B9%8B%E9%97%B4%E7%9A%84%E8%B7%AF%E7%94%B1%E9%80%89%E6%8B%A9%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（59）</span>
                    <span class="choice false">A．RIP</span>
                    <span class="choice false">B．OSPF</span>
                    <span class="choice false">C．IS-IS</span>
                    <span class="choice true">D．BGP</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        自治系统之间的路由协议，当然要是外部网关协议了，因此只能选择BGP。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">IEE802.3ae 10Gb/s 以太网标准支持的工作模式是 （60） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IEE802.3ae%2010Gb/s%20%E4%BB%A5%E5%A4%AA%E7%BD%91%E6%A0%87%E5%87%86%E6%94%AF%E6%8C%81%E7%9A%84%E5%B7%A5%E4%BD%9C%E6%A8%A1%E5%BC%8F%E6%98%AF%20%EF%BC%8860%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（60）</span>
                    <span class="choice true">A．全双工</span>
                    <span class="choice false">B．半双工</span>
                    <span class="choice false">C．单工</span>
                    <span class="choice false">D．全双工和半双工</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        10Gbps 以太网使用光纤作为传输介质，最大传输距离为40km，只支持全双工数据传输，而不支持半双工工作模式。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">通过代理服务器使内部局域网中的客户机访问 Internet 时， （61） 不属于代理服务器的功能。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E9%80%9A%E8%BF%87%E4%BB%A3%E7%90%86%E6%9C%8D%E5%8A%A1%E5%99%A8%E4%BD%BF%E5%86%85%E9%83%A8%E5%B1%80%E5%9F%9F%E7%BD%91%E4%B8%AD%E7%9A%84%E5%AE%A2%E6%88%B7%E6%9C%BA%E8%AE%BF%E9%97%AE%20Internet%20%E6%97%B6%EF%BC%8C%20%EF%BC%8861%EF%BC%89%20%E4%B8%8D%E5%B1%9E%E4%BA%8E%E4%BB%A3%E7%90%86%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%9A%84%E5%8A%9F%E8%83%BD%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（61）</span>
                    <span class="choice false">A．共享IP地址</span>
                    <span class="choice false">B．信息缓存</span>
                    <span class="choice false">C．信息转发</span>
                    <span class="choice true">D．信息加密</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        代理服务器不提供信息加密的服务。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下列 （62） 设备可以隔离 ARP 广播帧。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%20%EF%BC%8862%EF%BC%89%20%E8%AE%BE%E5%A4%87%E5%8F%AF%E4%BB%A5%E9%9A%94%E7%A6%BB%20ARP%20%E5%B9%BF%E6%92%AD%E5%B8%A7%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（62）</span>
                    <span class="choice true">A．路由器</span>
                    <span class="choice false">B．网桥</span>
                    <span class="choice false">C．以太网交换机</span>
                    <span class="choice false">D．集线器</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        要屏蔽数据链路层的广播帧，当然应该是网络层设备了，因此要选择路由器。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 Windows 系统中， （63） 不是网络服务组件。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20Windows%20%E7%B3%BB%E7%BB%9F%E4%B8%AD%EF%BC%8C%20%EF%BC%8863%EF%BC%89%20%E4%B8%8D%E6%98%AF%E7%BD%91%E7%BB%9C%E6%9C%8D%E5%8A%A1%E7%BB%84%E4%BB%B6%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（63）</span>
                    <span class="choice false">A．RAS</span>
                    <span class="choice true">B．HTTP</span>
                    <span class="choice false">C．IIS</span>
                    <span class="choice false">D．DNS</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        HTTP只是协议，不是服务组件。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 OSI 参考模型中，数据链路层处理的数据单位是 （64） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20OSI%20%E5%8F%82%E8%80%83%E6%A8%A1%E5%9E%8B%E4%B8%AD%EF%BC%8C%E6%95%B0%E6%8D%AE%E9%93%BE%E8%B7%AF%E5%B1%82%E5%A4%84%E7%90%86%E7%9A%84%E6%95%B0%E6%8D%AE%E5%8D%95%E4%BD%8D%E6%98%AF%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（64）</span>
                    <span class="choice false">A．比特</span>
                    <span class="choice true">B．帧</span>
                    <span class="choice false">C．分组</span>
                    <span class="choice false">D．报文</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        此题主要考查了ISO OSI/RM体系结构中各层传输的数据单元名称。<br />
                        • 物理层：比特流（Bit Stream）。 <br />
                        • 数据链路层：数据帧（Frame）。 <br />
                        • 网络层：数据分组，或数据报（Packet）。 <br />
                        • 传输层：报文，或段（Segment）。 <br />
                        • 会话层：只是会话链接，没有确定名称。 <br />
                        • 应用层：没有确定名称。 </p>
                </div>
            </div>
            <div class="block">
                <p class="question">在 OGSA 标准中定义了 （65） 的概念，它提供一组遵守特定的约定并定义明确的接口，是实体之间产生、管理和交换信息的机制。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%20OGSA%20%E6%A0%87%E5%87%86%E4%B8%AD%E5%AE%9A%E4%B9%89%E4%BA%86%20%EF%BC%8865%EF%BC%89%20%E7%9A%84%E6%A6%82%E5%BF%B5%EF%BC%8C%E5%AE%83%E6%8F%90%E4%BE%9B%E4%B8%80%E7%BB%84%E9%81%B5%E5%AE%88%E7%89%B9%E5%AE%9A%E7%9A%84%E7%BA%A6%E5%AE%9A%E5%B9%B6%E5%AE%9A%E4%B9%89%E6%98%8E%E7%A1%AE%E7%9A%84%E6%8E%A5%E5%8F%A3%EF%BC%8C%E6%98%AF%E5%AE%9E%E4%BD%93%E4%B9%8B%E9%97%B4%E4%BA%A7%E7%94%9F%E3%80%81%E7%AE%A1%E7%90%86%E5%92%8C%E4%BA%A4%E6%8D%A2%E4%BF%A1%E6%81%AF%E7%9A%84%E6%9C%BA%E5%88%B6%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（65）</span>
                    <span class="choice false">A．Object</span>
                    <span class="choice true">B．GridService</span>
                    <span class="choice false">C．WebService</span>
                    <span class="choice false">D．XML</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        OGSA最突出的思想是：将一切对象（计算资源、程序和数据库等）看作为服务，在Web Service的服务的基础上，提出了“网格服务”（Grid Service）的概念。<br />
                        “网格服务”中定义了一组接口，这些接口的定义明确并遵守特定的惯例，用于解决服务发现、动态服务创建、服务生命周期管理、通知等与临时服务有关的问题。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">MIDI enables people to use （66） computers and electronic musical instruments .
                    There are actually three components to MIDI, the communications " （67） ", the Hardware interface
                    and a distribution （68） called "Standard MIDI Files". In the context of the WWW, the most
                    interesting component is the （69） Format. In principle, MIDI files contain sequences of MIDI
                    Protocol messages. However, when MIDI Protocol （70） are stored in MIDI files, the events are also
                    time-stamped for playback in the proper sequence. Music delivered by MIDI files is the most common
                    use of MIDI today.&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MIDI%20enables%20people%20to%20use%20%EF%BC%8866%EF%BC%89%20computers%20and%20electronic%20musical%20instruments%20.%20There%20are%20actually%20three%20components%20to%20MIDI%2C%20the%20communications%20%22%20%EF%BC%8867%EF%BC%89%20%22%2C%20the%20Hardware%20interface%20and%20a%20distribution%20%EF%BC%8868%EF%BC%89%20called%20%22Standard%20MIDI%20Files%22.%20In%20the%20context%20of%20the%20WWW%2C%20the%20most%20interesting%20component%20is%20the%20%EF%BC%8869%EF%BC%89%20Format.%20In%20principle%2C%20MIDI%20files%20contain%20sequences%20of%20MIDI%20Protocol%20messages.%20However%2C%20when%20MIDI%20Protocol%20%EF%BC%8870%EF%BC%89%20are%20stored%20in%20MIDI%20files%2C%20the%20events%20are%20also%20time-stamped%20for%20playback%20in%20the%20proper%20sequence.%20Music%20delivered%20by%20MIDI%20files%20is%20the%20most%20common%20use%20of%20MIDI%20today.">百度</a></p>
                <p class="one-line-choice"><span class="number">（66）</span>
                    <span class="choice false">A．personal</span>
                    <span class="choice false">B．electronic</span>
                    <span class="choice true">C．multimedia</span>
                    <span class="choice false">D．network</span>
                </p>
                <p class="one-line-choice"><span class="number">（67）</span>
                    <span class="choice false">A．device</span>
                    <span class="choice true">B．protocol</span>
                    <span class="choice false">C．network</span>
                    <span class="choice false">D．controller</span>
                </p>
                <p class="one-line-choice"><span class="number">（68）</span>
                    <span class="choice true">A．format</span>
                    <span class="choice false">B．text</span>
                    <span class="choice false">C．wave</span>
                    <span class="choice false">D．center</span>
                </p>
                <p class="one-line-choice"><span class="number">（69）</span>
                    <span class="choice false">A．Video</span>
                    <span class="choice false">B．Faxmail</span>
                    <span class="choice false">C．Graphic</span>
                    <span class="choice true">D．Audio</span>
                </p>
                <p class="one-line-choice"><span class="number">（70）</span>
                    <span class="choice true">A．messages</span>
                    <span class="choice false">B．packets</span>
                    <span class="choice false">C．frame</span>
                    <span class="choice false">D．information</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        学好英语，一切都很简单。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">Certificates are （71） documents attesting to the （72） of a public key to an
                    individual or other entity. They allow verification of the claim that a given public key does in
                    fact belong to a given individual. Certificates help prevent someone from using a phony key to （73）
                    someone else. In their simplest form, Certificates contain a public key and a name. As commonly
                    used, a certificate also contains an （74） date, the name of the CA that issued the Certificate, a
                    serial number, and perhaps other information. Most importantly, it contains the digital （75） of the
                    certificate issuer. The most widely accepted format for certificates is X.509 , thus, Certificates
                    can be read or written by any application complying with X.509.&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=Certificates%20are%20%EF%BC%8871%EF%BC%89%20documents%20attesting%20to%20the%20%EF%BC%8872%EF%BC%89%20of%20a%20public%20key%20to%20an%20individual%20or%20other%20entity.%20They%20allow%20verification%20of%20the%20claim%20that%20a%20given%20public%20key%20does%20in%20fact%20belong%20to%20a%20given%20individual.%20Certificates%20help%20prevent%20someone%20from%20using%20a%20phony%20key%20to%20%EF%BC%8873%EF%BC%89%20someone%20else.%20In%20their%20simplest%20form%2C%20Certificates%20contain%20a%20public%20key%20and%20a%20name.%20As%20commonly%20used%2C%20a%20certificate%20also%20contains%20an%20%EF%BC%8874%EF%BC%89%20date%2C%20the%20name%20of%20the%20CA%20that%20issued%20the%20Certificate%2C%20a%20serial%20number%2C%20and%20perhaps%20other%20information.%20Most%20importantly%2C%20it%20contains%20the%20digital%20%EF%BC%8875%EF%BC%89%20of%20the%20certificate%20issuer.%20The%20most%20widely%20accepted%20format%20for%20certificates%20is%20X.509%20%2C%20thus%2C%20Certificates%20can%20be%20read%20or%20written%20by%20any%20application%20complying%20with%20X.509.">百度</a></p>
                <p class="one-line-choice"><span class="number">（71）</span>
                    <span class="choice false">A．text</span>
                    <span class="choice false">B．data</span>
                    <span class="choice true">C．digital</span>
                    <span class="choice false">D．structured</span>
                </p>
                <p class="one-line-choice"><span class="number">（72）</span>
                    <span class="choice false">A．connecting</span>
                    <span class="choice true">B．binding</span>
                    <span class="choice false">C．composing</span>
                    <span class="choice false">D．conducting</span>
                </p>
                <p class="one-line-choice"><span class="number">（73）</span>
                    <span class="choice true">A．impersonate</span>
                    <span class="choice false">B．personate</span>
                    <span class="choice false">C．damage</span>
                    <span class="choice false">D．control</span>
                </p>
                <p class="one-line-choice"><span class="number">（74）</span>
                    <span class="choice false">A．communication</span>
                    <span class="choice false">B．computation</span>
                    <span class="choice false">C．expectation</span>
                    <span class="choice true">D．expiration</span>
                </p>
                <p class="one-line-choice"><span class="number">（75）</span>
                    <span class="choice true">A．signature</span>
                    <span class="choice false">B．mark</span>
                    <span class="choice false">C．stamp</span>
                    <span class="choice false">D．hypertext</span>
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

<script>
    document.getElementById("i3").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAFTAggDASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD1fxJ4\
0/4RzUY7P/hGfEeqb4hL52mWHnxrkkbS24YbjOPQj1rH/wCFp/8AUheOf/BP/wDZ16BRQB5//wAL\
T/6kLxz/AOCf/wCzo/4Wn/1IXjn/AME//wBnXoFFAHn/APwtP/qQvHP/AIJ//s6P+Fp/9SF45/8A\
BP8A/Z16BRQB5/8A8LT/AOpC8c/+Cf8A+zo/4Wn/ANSF45/8E/8A9nXoFFAHn/8AwtP/AKkLxz/4\
J/8A7Oj/AIWn/wBSF45/8E//ANnXoFFAHn//AAtP/qQvHP8A4J//ALOj/haf/UheOf8AwT//AGde\
gVzuneO/DGra7Jotjq8M2oIWBiCsAxXqFYgK3c8E8AnoK0hRqVE5Qi2lq7Lb17CbS3MH/haf/Uhe\
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\
Rh3whhYAADwQw+hBL5mBRxhfqJ+yeDT//9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgH\
BwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/\
wAALCACAASUBAREA/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIE\
AwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJico\
KSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZ\
mqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6\
/9oACAEBAAA/APf6KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKxPFN1PZ6KktvI0b/AG2zTcvX\
a1zGrD8VJH41t1zn/CSH+0NnkZtf7R/s3fzu3+Xu3/7u75MfjntXR1h6XdTzeIdet5JWaKCSERKe\
iAxAnH481rXEjQ20sqKGZELAE4BIFVdGvm1TQ7DUGQI11bRzlAchSyhsfrVTxddT2XhHVbq2kaKe\
K2dkdeqnHUVt1ztz4glh1C4AgU2tre29jMxPzl5gmCO2AZYvzb056KsO1u538banZtKTbxafZypH\
2V3kuQx/EIv5Cret6kuj6Nd37RmUwRlljBwXboq57ZJAz71HpuoyXV7f2MyjzrKRFZ0GFkVkDBgO\
cdSMZ/hz3xSeJLiW08LavcwSGOaKymkjdeqsEJBH41es3aSygdzlmjUk+pxVLUNRks9U0m0WJWS9\
mkidyeU2xO4wO/3cVq1ifa5/+E2+x+afs/8AZ3m+X23+ZjP5Ve1O/j0rSbzUJlLRWsDzuF6kKpY4\
/Kqmm6lcz39xp97CiXFvBDOTGSVKybxjnnIaNx7jB74rUmYrBIwOCFJH5VleFbma88IaJc3MjSzz\
WEEkjt1ZjGpJP1JqXU9SksLrSokiV1vbv7O5LYKDy3fI9eUx+NalYd3dTx+MtKtUlIt5bK7eSPsz\
K8AU/hub8zWtcXEdrbS3EpIjiQu5AzgAZNY+ja7LqFzFBcQCGSexivowDnarkgofUr8vPGd3QYre\
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";
    document.getElementById("i2").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/4QAWRXhpZgAASUkqAAgAAAAAAAAAAAD/2wBDAAgGBgcGBQgH\
BwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/\
2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy\
MjIyMjIyMjIyMjL/wAARCAB7Ad8DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQF\
BgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS\
0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4\
eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi\
4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREA\
AgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl\
8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImK\
kpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP0\
9fb3+Pn6/9oADAMBAAIRAxEAPwD3+iiigAooooAKKKxvEV7cWMNk1vJInmXSxuI03llKscYCseoH\
QUAbNFcX4W8SajqKW0d1dWsoSxFzdTmHZtLJGyZIbABLyDOP+WR6ViDxXrAkF19tJ08rfMZLeJGb\
YlwAHXzHUEKuQGwQOhB60Aen0VDZvPLZW8l1EIbho1aWMEEI5HIyOuDxU1ABRRRQAUUVS1a5ubXT\
pWsoDPdsNsKbSV3EcFvRR1P0wMkgEAu0VyWieIXl1eGwX7ZfwT2kM4u2iClSQy7mAwAreXkYHBz2\
IrEs/FF7eykm7vlsB/aEzPaxrudEuEWPDyDBXa7AbcH8qAPSKKitt/2WHzFdZNg3K5BYHHOSOCfp\
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\
j/4ij/hLdJ9b7/wXXH/xFddRRzMOU5H/AIS3SfW+/wDBdcf/ABFH/CW6T633/guuP/iK66ijmYcp\
yP8Awluk+t9/4Lrj/wCIo/4S3SfW+/8ABdcf/EV11FHMw5Tkf+Et0n1vv/Bdcf8AxFH/AAluk+t9\
/wCC64/+IrrqKOZhynI/8JbpPrff+C64/wDiKy9W1a31q70i3sIr2WRLtpGDWMyAL5EoySyAdSB+\
NehUUOQWP//Zvh0AAEQAZAAAAAAAAAAAAAAAAAAAAAAAAAAAAEgRYAnoA+kDAAAAAAAAAAAAAAAA\
AAAAAAAAAAAAAAAAAAAAAAAAAAAPAATwwAAAALIECvAIAAAAAAAAAAAKAACzAAvwggAAAH8AgACA\
AIUAAAAAAARBFwAAAAWBNAAAAAYBAgAAAH8BKAA4AL8BAAAQAM0BAAAAAP8BAAAIAICDDAAAAL8D\
CAAIADUAMAA2ADkAZABjAGIANABnADYANAAwAGMANAA2ADgAZQBjADQAZgBkACYAMAAwADAAAAD+\
VkdyIAAzADcAAAAzACLxEgAAAJADAQAAAJIDAQAAAL8DAIAAgAAAEPAEAAAAAAAAgFIAB/CqHAAA\
BQXrVf0wShtfJPgZe3E9rrht/wCGHAAAAQAAAAAAAAAAAAAAoEYd8H4cAADrVf0wShtfJPgZe3E9\
rrht///Y/+AAEEpGSUYAAQEBAGAAYAAA/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0a\
Hx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgAoAEn\
AwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMF\
BQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkq\
NDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqi\
o6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/E\
AB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMR\
BAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVG\
R0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKz\
tLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A\
9/ooooAKKKKACiiigAooooAKKKKACiiigAooooAKKwPFsk66fZQ291NbG4v7eB5IG2vsZ8EA9qT/\
AIRX/qPa5/4Gf/WoA6Ciuf8A+EV/6j2uf+Bn/wBaj/hFf+o9rn/gZ/8AWoA6Ciuf/wCEV/6j2uf+\
Bn/1qh0iK407xde6cdRvbu2+wQzqLqTeVcySKcHHoooA6aiiigAooooAKKKKACiiigAooooAKKKK\
ACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Fn+o0n/ALCtr/6HXQVz\
/iz/AFGk/wDYVtf/AEOugoAiubiO0tZrmY4iiQyOcdABk1Hp8LwWMayjErZeQA5AdiWbHtknFWGR\
XUq6hlPBBGQaWgArn4f+Sh3n/YKg/wDRs1dBXPw/8lDvP+wVB/6NmoA6CiiigAooooAKKKKACiii\
gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKy9Q8R6Rpc4t7q+j+1EZ\
W1iBlmb6RoCx/AVT/tbXdQ403RPs0Z6XGqSeX+IiTcx+jFKAOgrL1HxHpGlzC3ur2MXRGVtogZZm\
+kaAsfwFU/8AhHLu+51rW7y6B629ofskP5IfMI9mcj2rU07SdO0mEw6dY29rGTlhDGF3H1OOp9zQ\
BhX8t/4ltGtF8MW7WTkEtrm3YccgiEBifo2w1lJ8JPDl06yatY6fOQc+TZ2EVnED7bB5h+hciu+o\
oA55PAXg5EVB4V0QgDA3WERP5lcmsTwd4L8K3XhLTZrjw1o0srxZZ5LCJmY5PUla7yuf8D/8iXpf\
/XL/ANmNAGNd/CXwlLctdWWl2tlcN1220UsZ9vLkVlA/3Qp96s6ZpV8=";
    document.getElementById("i1").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCABTARMDASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iii\
gAooooAKKKKACqmq6hHpOj3upSozx2lvJO6p1YIpYge/FW6w/Gn/ACIviH/sGXP/AKKagCJdZ8Qu\
gYeF+CMj/T4/8KX+1/EX/Qr/APk/H/hW5B/x7xf7g/lUlAHP/wBr+Iv+hX/8n4/8KP7X8Rf9Cv8A\
+T8f+Fb5IUEkgAckmqtpqunag7JZX9rcsoyRDMrkDpng0AZX9r+Iv+hX/wDJ+P8Awo/tfxF/0K//\
AJPx/wCFdBRQBzsut+IIonkfwx8qKWP+nx9B+FbGm3yanpdpfxKyR3UKTKrdQGUEA+/NOv8A/kHX\
P/XJ/wCRrP8ACf8AyJuh/wDYPt//AEWtAGxRRRQAVl65q76Rb27RWjXc9zcLbxRK4TLEE8k9BhTW\
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";
</script>