<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2018年上半年 网络工程师 上午试卷</title>
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
        <h1 style="text-align:center">2018年上半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">1、浮点数的表示分为阶和尾数两部分。两个浮点数相加时,需要先对阶,即( )(n为阶差的绝对值)。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=1%E3%80%81%E6%B5%AE%E7%82%B9%E6%95%B0%E7%9A%84%E8%A1%A8%E7%A4%BA%E5%88%86%E4%B8%BA%E9%98%B6%E5%92%8C%E5%B0%BE%E6%95%B0%E4%B8%A4%E9%83%A8%E5%88%86%E3%80%82%E4%B8%A4%E4%B8%AA%E6%B5%AE%E7%82%B9%E6%95%B0%E7%9B%B8%E5%8A%A0%E6%97%B6%2C%E9%9C%80%E8%A6%81%E5%85%88%E5%AF%B9%E9%98%B6%2C%E5%8D%B3%28%20%29%28n%E4%B8%BA%E9%98%B6%E5%B7%AE%E7%9A%84%E7%BB%9D%E5%AF%B9%E5%80%BC%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（1） </span>A.将大阶向小阶对齐,同时将尾数左移n位</p>
            <p class="choice false">B.将大阶向小阶对齐,同时将尾数右移n位</p>
            <p class="choice false">C.将小阶向大阶对齐,同时将尾数左移n位</p>
            <p class="choice true">D.将小阶向大阶对齐,同时将尾数右移n位</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    两浮点数进行加减,首先看两数的阶码是否相同,即小数点位置是否对齐。若两
                    数阶码相同,表示小数点是对齐的,就可以进行尾数相加减,反之,此时需要使
                    两数的阶码相同,这个过程叫做对阶。<br />
                    所谓对阶是指将两个进行运算的浮点数的阶码对齐的操作。对阶的目的是为使两
                    个浮点数的尾数能够进行加减运算。因为,当进行 Mx·2Ex 与 My·2Ey 加减运算
                    时,只有使两浮点数的指数值部分相同,才能将相同的指数值作为公因数提出来,
                    然后进行尾数的加减运算。<br />
                    首先求出两浮点数阶码的差,即⊿E=Ex-Ey,将小阶码加上⊿E,使之与大阶码相
                    等,同时将小阶码对应的浮点数的尾数右移相应位数,以保证该浮点数的值不变。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">2-3、计算机运行过程中,遇到突发事件,要求 CPU 暂时停止正在运行的程序,
                转去为突发事 件服务,服务完毕,再自动返回原程序继续执行,这个过程称为
                ( ),其处理过程中保存现 场的目的是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=2-3%E3%80%81%E8%AE%A1%E7%AE%97%E6%9C%BA%E8%BF%90%E8%A1%8C%E8%BF%87%E7%A8%8B%E4%B8%AD%2C%E9%81%87%E5%88%B0%E7%AA%81%E5%8F%91%E4%BA%8B%E4%BB%B6%2C%E8%A6%81%E6%B1%82%20CPU%20%E6%9A%82%E6%97%B6%E5%81%9C%E6%AD%A2%E6%AD%A3%E5%9C%A8%E8%BF%90%E8%A1%8C%E7%9A%84%E7%A8%8B%E5%BA%8F%2C%0A%E8%BD%AC%E5%8E%BB%E4%B8%BA%E7%AA%81%E5%8F%91%E4%BA%8B%20%E4%BB%B6%E6%9C%8D%E5%8A%A1%2C%E6%9C%8D%E5%8A%A1%E5%AE%8C%E6%AF%95%2C%E5%86%8D%E8%87%AA%E5%8A%A8%E8%BF%94%E5%9B%9E%E5%8E%9F%E7%A8%8B%E5%BA%8F%E7%BB%A7%E7%BB%AD%E6%89%A7%E8%A1%8C%2C%E8%BF%99%E4%B8%AA%E8%BF%87%E7%A8%8B%E7%A7%B0%E4%B8%BA%0A%28%20%29%2C%E5%85%B6%E5%A4%84%E7%90%86%E8%BF%87%E7%A8%8B%E4%B8%AD%E4%BF%9D%E5%AD%98%E7%8E%B0%20%E5%9C%BA%E7%9A%84%E7%9B%AE%E7%9A%84%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（2）</span>
                <span class="choice false">A.阻塞</span>
                <span class="choice true">B.中断</span>
                <span class="choice false">C.动态绑定</span>
                <span class="choice false">D.静态绑定</span>
            </p>
            <p class="one-line-choice"><span class="number">（3）</span>
                <span class="choice false">A.防止丢失数据</span>
                <span class="choice false">B.防止对其他部件造成影响</span>
                <span class="choice true">C.返回去继续执行原程序</span>
                <span class="choice false">D.为中断处理程序提供数据</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    计算机科学术语.指处理机处理程序运行中出现的紧急事件的整个过程.程序运
                    行过程中,系统外部、系统内部或者现行程序本身若出现紧急事件,处理机立即
                    中止现行程序的运行,自动转入相应的处理程序(中断服务程序),待处理完后,
                    再返回原来的程序运行,这整个过程称为程序中断;当处理机接受中断时,只需
                    暂停一个或几个周期而不执行处理程序的中断,称为简单中断.中断又可分为屏
                    蔽中断和非屏蔽中断两类.可由程序控制其屏蔽的中断称为屏蔽中断或可屏蔽中
                    断.屏蔽时,处理机将不接受中断.反之,不能由程序控制其屏蔽,处理机一定要
                    立即处理的中断称为非屏蔽中断或不可屏蔽中断.非屏蔽中断主要用于断电、电
                    源故障等必须立即处理的情况.处理机响应中断时,不需执行查询程序.由被响应
                    中断源向 CPU 发向量地址的中断称为向量中断,反之为非向量中断.向量中断可
                    以提高中断响应速度。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">4、著作权中,( )的保护期不受限制<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=4%E3%80%81%E8%91%97%E4%BD%9C%E6%9D%83%E4%B8%AD%2C%28%20%29%E7%9A%84%E4%BF%9D%E6%8A%A4%E6%9C%9F%E4%B8%8D%E5%8F%97%E9%99%90%E5%88%B6">百度</a></p>
            <p class="one-line-choice"><span class="number">（4）</span>
                <span class="choice false">A.发表权</span>
                <span class="choice false">B.发行权</span>
                <span class="choice true">C.署名权</span>
                <span class="choice false">D.展览权</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    署名权是指表明作者身份,在作品上署名的权利。署名权的各种具体运用的总和,
                    构成署名权的内容。明确署名权的内容,可以更清晰的认识署名权,以有利于署
                    名权的保护,保护期限没有限制。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">5、王某是某公司的软件设计师,完成某项软件开发后按公司规定进行软件归档。
                以下有关该软 件的著作权的叙述中,正确的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=5%E3%80%81%E7%8E%8B%E6%9F%90%E6%98%AF%E6%9F%90%E5%85%AC%E5%8F%B8%E7%9A%84%E8%BD%AF%E4%BB%B6%E8%AE%BE%E8%AE%A1%E5%B8%88%2C%E5%AE%8C%E6%88%90%E6%9F%90%E9%A1%B9%E8%BD%AF%E4%BB%B6%E5%BC%80%E5%8F%91%E5%90%8E%E6%8C%89%E5%85%AC%E5%8F%B8%E8%A7%84%E5%AE%9A%E8%BF%9B%E8%A1%8C%E8%BD%AF%E4%BB%B6%E5%BD%92%E6%A1%A3%E3%80%82%0A%E4%BB%A5%E4%B8%8B%E6%9C%89%E5%85%B3%E8%AF%A5%E8%BD%AF%20%E4%BB%B6%E7%9A%84%E8%91%97%E4%BD%9C%E6%9D%83%E7%9A%84%E5%8F%99%E8%BF%B0%E4%B8%AD%2C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（5） </span>A.著作权应由公司和王某共同享有</p>
            <p class="choice true">B.著作权应由公司享有</p>
            <p class="choice false">C.著作权应由王某享有</p>
            <p class="choice false">D.除署名权以外,著作权的其它权利由王某享有</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    职务作品著作权归单位所有。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">6-7、海明码是一种纠错码,其方法是为需要校验的数据位增加若干校验位,使
                得校验位的值决定于某些被校位的数据,当被校数据出错时,可根据校验位的值
                的变化找到出错位从而纠正错误。对于 32 位的数据,至少需要增加( )个校验
                位才能构成海明码。以 10 位数据为例,其海明码表示为 D9D8D7D6D5D4D3D2D1
                中,其中 Di(0≤i≤9)表示数据位,Pj(1≤j≤4)表示校 验位,数据位 D9 由 P4、
                P3 和 P2 进行校验(从右至左 D9 的位序为 14,即等于 8+4+2,因此用 8 位的
                P4、第 4 位的 P3 和第 2 位的 P2 校验),数据位 D5 由( ) 进行校验。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=6-7%E3%80%81%E6%B5%B7%E6%98%8E%E7%A0%81%E6%98%AF%E4%B8%80%E7%A7%8D%E7%BA%A0%E9%94%99%E7%A0%81%2C%E5%85%B6%E6%96%B9%E6%B3%95%E6%98%AF%E4%B8%BA%E9%9C%80%E8%A6%81%E6%A0%A1%E9%AA%8C%E7%9A%84%E6%95%B0%E6%8D%AE%E4%BD%8D%E5%A2%9E%E5%8A%A0%E8%8B%A5%E5%B9%B2%E6%A0%A1%E9%AA%8C%E4%BD%8D%2C%E4%BD%BF%0A%E5%BE%97%E6%A0%A1%E9%AA%8C%E4%BD%8D%E7%9A%84%E5%80%BC%E5%86%B3%E5%AE%9A%E4%BA%8E%E6%9F%90%E4%BA%9B%E8%A2%AB%E6%A0%A1%E4%BD%8D%E7%9A%84%E6%95%B0%E6%8D%AE%2C%E5%BD%93%E8%A2%AB%E6%A0%A1%E6%95%B0%E6%8D%AE%E5%87%BA%E9%94%99%E6%97%B6%2C%E5%8F%AF%E6%A0%B9%E6%8D%AE%E6%A0%A1%E9%AA%8C%E4%BD%8D%E7%9A%84%E5%80%BC%0A%E7%9A%84%E5%8F%98%E5%8C%96%E6%89%BE%E5%88%B0%E5%87%BA%E9%94%99%E4%BD%8D%E4%BB%8E%E8%80%8C%E7%BA%A0%E6%AD%A3%E9%94%99%E8%AF%AF%E3%80%82%E5%AF%B9%E4%BA%8E%2032%20%E4%BD%8D%E7%9A%84%E6%95%B0%E6%8D%AE%2C%E8%87%B3%E5%B0%91%E9%9C%80%E8%A6%81%E5%A2%9E%E5%8A%A0%28%20%29%E4%B8%AA%E6%A0%A1%E9%AA%8C%0A%E4%BD%8D%E6%89%8D%E8%83%BD%E6%9E%84%E6%88%90%E6%B5%B7%E6%98%8E%E7%A0%81%E3%80%82%E4%BB%A5%2010%20%E4%BD%8D%E6%95%B0%E6%8D%AE%E4%B8%BA%E4%BE%8B%2C%E5%85%B6%E6%B5%B7%E6%98%8E%E7%A0%81%E8%A1%A8%E7%A4%BA%E4%B8%BA%20D9D8D7D6D5D4D3D2D1%0A%E4%B8%AD%2C%E5%85%B6%E4%B8%AD%20Di%280%E2%89%A4i%E2%89%A49%29%E8%A1%A8%E7%A4%BA%E6%95%B0%E6%8D%AE%E4%BD%8D%2CPj%281%E2%89%A4j%E2%89%A44%29%E8%A1%A8%E7%A4%BA%E6%A0%A1%20%E9%AA%8C%E4%BD%8D%2C%E6%95%B0%E6%8D%AE%E4%BD%8D%20D9%20%E7%94%B1%20P4%E3%80%81%0AP3%20%E5%92%8C%20P2%20%E8%BF%9B%E8%A1%8C%E6%A0%A1%E9%AA%8C%28%E4%BB%8E%E5%8F%B3%E8%87%B3%E5%B7%A6%20D9%20%E7%9A%84%E4%BD%8D%E5%BA%8F%E4%B8%BA%2014%2C%E5%8D%B3%E7%AD%89%E4%BA%8E%208%2B4%2B2%2C%E5%9B%A0%E6%AD%A4%E7%94%A8%208%20%E4%BD%8D%E7%9A%84%0AP4%E3%80%81%E7%AC%AC%204%20%E4%BD%8D%E7%9A%84%20P3%20%E5%92%8C%E7%AC%AC%202%20%E4%BD%8D%E7%9A%84%20P2%20%E6%A0%A1%E9%AA%8C%29%2C%E6%95%B0%E6%8D%AE%E4%BD%8D%20D5%20%E7%94%B1%28%20%29%20%E8%BF%9B%E8%A1%8C%E6%A0%A1%E9%AA%8C%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（6）</span>
                <span class="choice false">A.3</span>
                <span class="choice false">B.4</span>
                <span class="choice false">C.5</span>
                <span class="choice true">D.6</span>
            </p>
            <p class="one-line-choice"><span class="number">（7）</span>
                <span class="choice false">A.P4P1</span>
                <span class="choice true">B.P4P2</span>
                <span class="choice false">C.P4P3P1</span>
                <span class="choice false">D.P3p2p1</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    海明码<br />
                    编码思想:在 K 比特信息中附加 r 比特冗余信息构成 n=k+r 比特码字,其中每个
                    校验比特和某几个特定的信息比特构成偶校验关系。接收端对这 r 个奇偶关系进
                    行校验,即对每个校验比特和它关联的信息比特进行相加(异或),相加的结果
                    称为校正因子。如果没有错误的话,这 r 个校正因子都为 0;如果有一个错误,
                    则校正因子不会全为 0,根据校正因子的不同取值,可以知道错误发生在码字的
                    哪一个位置上。为了利用 r 个校正因子来区分无错和在码字中的 n 个不同位置的
                    一比特错(共 n+1 种不同组合),校验比特数 r 必须满足以下条件:2r≥n+1,
                    即 2r≥ k+r+1。例如,当 k=4 时,要满足上述不等式,则有 r ≥3,如取 r=3,
                    于是 n=k+r=7。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">8、流水线的吞吐率是指单位时间流水线处理任务数,如果各段流水的操作时间
                不同,则流水 线的吞吐率是( )的倒数。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=8%E3%80%81%E6%B5%81%E6%B0%B4%E7%BA%BF%E7%9A%84%E5%90%9E%E5%90%90%E7%8E%87%E6%98%AF%E6%8C%87%E5%8D%95%E4%BD%8D%E6%97%B6%E9%97%B4%E6%B5%81%E6%B0%B4%E7%BA%BF%E5%A4%84%E7%90%86%E4%BB%BB%E5%8A%A1%E6%95%B0%2C%E5%A6%82%E6%9E%9C%E5%90%84%E6%AE%B5%E6%B5%81%E6%B0%B4%E7%9A%84%E6%93%8D%E4%BD%9C%E6%97%B6%E9%97%B4%0A%E4%B8%8D%E5%90%8C%2C%E5%88%99%E6%B5%81%E6%B0%B4%20%E7%BA%BF%E7%9A%84%E5%90%9E%E5%90%90%E7%8E%87%E6%98%AF%28%20%29%E7%9A%84%E5%80%92%E6%95%B0%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（8） </span>A.最短流水段操作时间</p>
            <p class="choice false">B.各段流水的操作时间总和</p>
            <p class="choice true">C.最长流水段操作时间</p>
            <p class="choice false">D.流水段数乘以最长流水段操作时间</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    吞吐率:指的是计算机中的流水线在特定的时间内可以处理的任务或输出数据的
                    结果的数量。流水线的吞吐率可以进一步分为最大吞吐率和实际吞吐率。它们主
                    要和流水段的处理时间、缓存寄存器的延迟时间有关,流水段的处理时间越长,
                    缓存寄存器的延迟时间越大,那么,这条流水线的吞吐量就越小。流水线吞吐率<br />
                    计算公式 TP=n/Tk<br />
                    n 为任务数,Tk 是处理完成 n 个任务所用的时间。<br />
                    流水线最大吞吐率 TPmax=1/max(△T1、△T2........△Tk)
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">9-10、某软件项目的活动图如下图所示,其中顶点表示项目里程碑,连接顶点的
                边表示包含的 活动,边上的数字表示活动的持续天数,则完成该项目的最少时
                间为( )天。活动 EH 和 IJ 的松弛时间分别为( )天。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=9-10%E3%80%81%E6%9F%90%E8%BD%AF%E4%BB%B6%E9%A1%B9%E7%9B%AE%E7%9A%84%E6%B4%BB%E5%8A%A8%E5%9B%BE%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%2C%E5%85%B6%E4%B8%AD%E9%A1%B6%E7%82%B9%E8%A1%A8%E7%A4%BA%E9%A1%B9%E7%9B%AE%E9%87%8C%E7%A8%8B%E7%A2%91%2C%E8%BF%9E%E6%8E%A5%E9%A1%B6%E7%82%B9%E7%9A%84%0A%E8%BE%B9%E8%A1%A8%E7%A4%BA%E5%8C%85%E5%90%AB%E7%9A%84%20%E6%B4%BB%E5%8A%A8%2C%E8%BE%B9%E4%B8%8A%E7%9A%84%E6%95%B0%E5%AD%97%E8%A1%A8%E7%A4%BA%E6%B4%BB%E5%8A%A8%E7%9A%84%E6%8C%81%E7%BB%AD%E5%A4%A9%E6%95%B0%2C%E5%88%99%E5%AE%8C%E6%88%90%E8%AF%A5%E9%A1%B9%E7%9B%AE%E7%9A%84%E6%9C%80%E5%B0%91%E6%97%B6%0A%E9%97%B4%E4%B8%BA%28%20%29%E5%A4%A9%E3%80%82%E6%B4%BB%E5%8A%A8%20EH%20%E5%92%8C%20IJ%20%E7%9A%84%E6%9D%BE%E5%BC%9B%E6%97%B6%E9%97%B4%E5%88%86%E5%88%AB%E4%B8%BA%28%20%29%E5%A4%A9%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A.17</span>
                <span class="choice false">B.19</span>
                <span class="choice false">C.20</span>
                <span class="choice true">D.22</span>
            </p>
            <p class="one-line-choice"><span class="number">（10）</span>
                <span class="choice false">A.3和3</span>
                <span class="choice false">B.3和6</span>
                <span class="choice true">C.5和3</span>
                <span class="choice false">D.5和6</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    关键路径 A-B-C-E-F-I-K-L A-B-D-G-I-k-L
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">11、以下关于曼彻斯特编码的描述中,正确的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=11%E3%80%81%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E6%9B%BC%E5%BD%BB%E6%96%AF%E7%89%B9%E7%BC%96%E7%A0%81%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%2C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（11） </span>A.每个比特都由一个码元组成</p>
            <p class="choice false">B.检测比特前沿的跳变来区分0和1</p>
            <p class="choice false">C.用电平的高低来区分0和1</p>
            <p class="choice true">D.不需要额外传输同步信号</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    曼彻斯特编码(Manchester Encoding),也叫做相位编码( Phase Encode,简
                    写 PE),是一个同步时钟编码技术,被物理层使用来编码一个同步位流的时钟
                    和数据。它在以太网媒介系统中的应用属于数据通信中的两种位同步方法里的自
                    同步法(另一种是外同步法),即接收方利用包含有同步信号的特殊编码从信号
                    自身提取同步信号来锁定自己的时钟脉冲频率,达到同步目的。<br />
                    曼彻斯特编码,常用于局域网传输。曼彻斯特编码将时钟和数据包含在数据流中,
                    在传输代码信息的同时,也将时钟同步信号一起传输到对方,每位编码中有一跳
                    变,不存在直流分量,因此具有自同步能力和良好的抗干扰性能。但每一个码元
                    都被调成两个电平,所以数据传输速率只有调制速率的 1/2。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">12、100BASE-TX 交换机,一个端口通信的数据速率(全双工)最大可以达到( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=12%E3%80%81100BASE-TX%20%E4%BA%A4%E6%8D%A2%E6%9C%BA%2C%E4%B8%80%E4%B8%AA%E7%AB%AF%E5%8F%A3%E9%80%9A%E4%BF%A1%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%28%E5%85%A8%E5%8F%8C%E5%B7%A5%29%E6%9C%80%E5%A4%A7%E5%8F%AF%E4%BB%A5%E8%BE%BE%E5%88%B0%28%20%29%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（12）</span>
                <span class="choice false">A.25Mb/s</span>
                <span class="choice false">B.50Mb/s</span>
                <span class="choice false">C.100Mb/s</span>
                <span class="choice true">D.200Mb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    100 标识传输速率为 100Mbit/s;<br />
                    base 标识采用基带传输;<br />
                    T 表示传输介质,2 对 5 类 UTP,当为 F 时,代表为光纤。<br />
                    快速以太网目前制定的三种有关传输介质的标准之一,另外两种是 100BASE-T4、100BASE-FX。<br />
                    其中 100BASE-TX、100BASE-FX 支持全双工模式。当 100Mbps 端口
                    工作在全双工模式下时,可以同时存在流进端口和流出端口的数据,而且双向的
                    数据流都可以享受 100Mbps 的带宽如基于 100BASE-TX 标准的端口,其工作在全
                    双工模式下的端口带宽就是 200Mbps。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">13、快速以太网标准 100BASE-FX 采用的传输介质是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=13%E3%80%81%E5%BF%AB%E9%80%9F%E4%BB%A5%E5%A4%AA%E7%BD%91%E6%A0%87%E5%87%86%20100BASE-FX%20%E9%87%87%E7%94%A8%E7%9A%84%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（13）</span>
                <span class="choice false">A.同轴电缆</span>
                <span class="choice false">B.无屏蔽双绞线</span>
                <span class="choice false">C.CATV电缆</span>
                <span class="choice true">D.光纤</span>
            </p>
        </div>
        <div class="block">
            <p class="question">14、按照同步光纤网传输标准(SONET),OC-1 的数据速率为( )Mb/s。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=14%E3%80%81%E6%8C%89%E7%85%A7%E5%90%8C%E6%AD%A5%E5%85%89%E7%BA%A4%E7%BD%91%E4%BC%A0%E8%BE%93%E6%A0%87%E5%87%86%28SONET%29%2COC-1%20%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%28%20%29Mb/s%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（14）</span>
                <span class="choice true">A.51.84</span>
                <span class="choice false">B.155.52</span>
                <span class="choice false">C.466.96</span>
                <span class="choice false">D.622.08</span>
            </p>
        </div>
        <div class="block">
            <p class="question">15、关于单模光纤,下面的描述中错误的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=15%E3%80%81%E5%85%B3%E4%BA%8E%E5%8D%95%E6%A8%A1%E5%85%89%E7%BA%A4%2C%E4%B8%8B%E9%9D%A2%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（15） </span>A.芯线由玻璃或塑料制成</p>
            <p class="choice false">B.比多模光纤芯径小</p>
            <p class="choice true">C.光波在芯线中以多种反射路径传播</p>
            <p class="choice false">D.比多模光纤的传输距离远</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    单模光纤(SingleModeFiber):中心玻璃芯很细(芯径一般为 9 或 10μm),只能
                    传一种模式的光纤。因此,其模间色散很小,适用于远程通讯,但还存在着材料
                    色散和波导色散,这样单模光纤对光源的谱宽和稳定性有较高的要求,即谱宽要
                    窄,稳定性要好。后来又发现在 1.31μm 波长处,单模光纤的材料色散和波导色
                    散一为正、一为负,大小也正好相等。这样,1.31μm 波长区就成了光纤通信的
                    一个很理想的工作窗口,也是现在实用光纤通信系统的主要工作波段 1.31μm
                    常规单模光纤的主要参数是由国际电信联盟 ITU-T 在 G652 建议中确定的,因此
                    这种光纤又称 G652 光纤。<br />
                    单模光纤相比于多模光纤可支持更长传输距离,在 100Mbps 的以太网以至 1G 千
                    兆网,单模光纤都可支持超过 5000m 的传输距离。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">16、路由器通常采用( )连接以太网交换机。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=16%E3%80%81%E8%B7%AF%E7%94%B1%E5%99%A8%E9%80%9A%E5%B8%B8%E9%87%87%E7%94%A8%28%20%29%E8%BF%9E%E6%8E%A5%E4%BB%A5%E5%A4%AA%E7%BD%91%E4%BA%A4%E6%8D%A2%E6%9C%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice true">A.RJ-45端口</span>
                <span class="choice false">B.Console端口</span>
                <span class="choice false">C.异步串口</span>
                <span class="choice false">D.高速同步串口</span>
            </p>
        </div>
        <div class="block">
            <p class="question">17、在相隔 20km 的两地间通过电缆以 100Mb/s 的速率传送 1518 字节长的以
                太帧,从开始发 送到接收完数据需要的时间约是( )(信号速率为 200m/us)<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=17%E3%80%81%E5%9C%A8%E7%9B%B8%E9%9A%94%2020km%20%E7%9A%84%E4%B8%A4%E5%9C%B0%E9%97%B4%E9%80%9A%E8%BF%87%E7%94%B5%E7%BC%86%E4%BB%A5%20100Mb/s%20%E7%9A%84%E9%80%9F%E7%8E%87%E4%BC%A0%E9%80%81%201518%20%E5%AD%97%E8%8A%82%E9%95%BF%E7%9A%84%E4%BB%A5%0A%E5%A4%AA%E5%B8%A7%2C%E4%BB%8E%E5%BC%80%E5%A7%8B%E5%8F%91%20%E9%80%81%E5%88%B0%E6%8E%A5%E6%94%B6%E5%AE%8C%E6%95%B0%E6%8D%AE%E9%9C%80%E8%A6%81%E7%9A%84%E6%97%B6%E9%97%B4%E7%BA%A6%E6%98%AF%28%20%29%28%E4%BF%A1%E5%8F%B7%E9%80%9F%E7%8E%87%E4%B8%BA%20200m/us%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice false">A.131us</span>
                <span class="choice true">B.221us</span>
                <span class="choice false">C.1310us</span>
                <span class="choice false">D.2210us</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    传送时间=传输延迟时间+数据帧发送时间
                    =20000/200+(1518*8/(100*10^6))*10^6=100+121.4=221.4us
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">18、VLAN 之间的通信通过( )实现<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=18%E3%80%81VLAN%20%E4%B9%8B%E9%97%B4%E7%9A%84%E9%80%9A%E4%BF%A1%E9%80%9A%E8%BF%87%28%20%29%E5%AE%9E%E7%8E%B0">百度</a></p>
            <p class="one-line-choice"><span class="number">（18）</span>
                <span class="choice false">A.二层交换机</span>
                <span class="choice false">B.网桥</span>
                <span class="choice true">C.路由器</span>
                <span class="choice false">D.中继器</span>
            </p>
        </div>
        <div class="block">
            <p class="question">19、HFC 接入网采用( )传输介质接入住宅小区。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=19%E3%80%81HFC%20%E6%8E%A5%E5%85%A5%E7%BD%91%E9%87%87%E7%94%A8%28%20%29%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E6%8E%A5%E5%85%A5%E4%BD%8F%E5%AE%85%E5%B0%8F%E5%8C%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（19）</span>
                <span class="choice false">A.同轴电缆</span>
                <span class="choice true">B.光纤</span>
                <span class="choice false">C.5类双纹线</span>
                <span class="choice false">D.无线介质</span>
            </p>
        </div>
        <div class="block">
            <p class="question">20、TCP 协议中,URG 指针的作用是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=20%E3%80%81TCP%20%E5%8D%8F%E8%AE%AE%E4%B8%AD%2CURG%20%E6%8C%87%E9%92%88%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（20） </span>A.表明TCP段中有带外数据</p>
            <p class="choice true">B.表明数据需要紧急传送</p>
            <p class="choice false">C.表明带外数据在TCP段中的位置</p>
            <p class="choice false">D.表明TCP段的发送方式</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    (1)序号:指出段中的数据部分在发送方数据流中的位置。<br />
                    确认号:指出接收方希望收到对方下次发送的数据的第一个字节的序号。<br />
                    TCP 段首部的定长部分为 20 个字节,即 5 个单位的长度。<br />
                    URG 位:紧急标志,和紧急指针配合使用,当其为 1 时表示,此报文要尽快传送。<br />
                    ACK 位:确认标志,和确认号字段配合使用,当 ACK 位置 1 时,确认号字段有效。<br />
                    PSH 位:为推送标志,置 1 时,发送方将立即发送缓冲区中的数据。<br />
                    RST 位:复位标志,置 1 时,表明有严重差错,必须释放连接。<br />
                    SYN 位: 同步标志,置 1 时,表示请求建立连接。<br />
                    FIN 位:终止标志,置 1 时,表明数据已经发送完,请求释放连接。<br />
                    窗口大小:32bit,用于向对方通告当前本机的接受缓冲区的大小。<br />
                    校验和字段长度:16bit,校验范围包括段首部、数据以及伪首部。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">21、RARP 协议的作用是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=21%E3%80%81RARP%20%E5%8D%8F%E8%AE%AE%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（21）</span>
                <span class="choice true">A.根据MAC查IP</span>
                <span class="choice false">B.根据IP查MAC</span>
                <span class="choice false">C.根据域名查IP</span>
                <span class="choice false">D.查找域内授权域名服务器</span>
            </p>
        </div>
        <div class="block">
            <p class="question">22、E1 载波的基本帧由 32 个子信道组成,其中子信道( )用于传送控制信令<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=22%E3%80%81E1%20%E8%BD%BD%E6%B3%A2%E7%9A%84%E5%9F%BA%E6%9C%AC%E5%B8%A7%E7%94%B1%2032%20%E4%B8%AA%E5%AD%90%E4%BF%A1%E9%81%93%E7%BB%84%E6%88%90%2C%E5%85%B6%E4%B8%AD%E5%AD%90%E4%BF%A1%E9%81%93%28%20%29%E7%94%A8%E4%BA%8E%E4%BC%A0%E9%80%81%E6%8E%A7%E5%88%B6%E4%BF%A1%E4%BB%A4">百度</a></p>
            <p class="one-line-choice"><span class="number">（22）</span>
                <span class="choice false">A.CH0和CH2</span>
                <span class="choice false">B.CH1和CH15</span>
                <span class="choice false">C.CH15和CH16</span>
                <span class="choice true">D.CH0和CH16</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    T1 载波:在北美和日本广泛使用。它把 24 路按时分多路的原理复合在一条
                    1.54Mbps 的高速信道上。每路话音信道有 7 位数据位和一个信令位,周期为
                    125us,因此 24 路话音信道可容纳 8×24=192 位长的数字串。这 192 位数字组成
                    一帧,最后再加入一个帧同步位,故帧长为 193 位。每 123us 传送一帧,这样,
                    对每一路话音信道来说,传输数据的速率为 7b/125us=56Kbps,传输控制信息的
                    速率为 1b/125us=8Kbps,总的速率为 193b/125us=1.544Mbps。<br />
                    E2 载波由 4 个 E1 载波组成数据速率为 8.448Mbps:E3 载波由 4 个 E2 载波组成,
                    数据速率为 34.368Mbps;E4 载波由 4 个 E3 载波组成,数据速率为 139.24Mbps;
                    E5 载波由 4 个 E4 载波组成,数据速率为 565.148Mbps。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">23、以太网的数据帧如下,包含在 IP 数据报中的数据部分最长应该是( )字节。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=23%E3%80%81%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%9A%84%E6%95%B0%E6%8D%AE%E5%B8%A7%E5%A6%82%E4%B8%8B%2C%E5%8C%85%E5%90%AB%E5%9C%A8%20IP%20%E6%95%B0%E6%8D%AE%E6%8A%A5%E4%B8%AD%E7%9A%84%E6%95%B0%E6%8D%AE%E9%83%A8%E5%88%86%E6%9C%80%E9%95%BF%E5%BA%94%E8%AF%A5%E6%98%AF%28%20%29%E5%AD%97%E8%8A%82%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（23）</span>
                <span class="choice false">A.1434</span>
                <span class="choice false">B.1460</span>
                <span class="choice false">C.1480</span>
                <span class="choice true">D.1500</span>
            </p>
        </div>
        <div class="block">
            <p class="question">24-25、若主机 hosta 的 MAC 地址为 aa-aa-aa-aa-aa-aa,主机 hostB 的 MAC
                地址为 bb-bb-bb-bb-bb-bb。 由 hostA 发出的查询 hostB 的 MAC 地址的帧格
                式如下图所示,则此帧中的的目标 Mac 地址为 ( ),ARP 报文中的目标 MAC 地
                址为( )
                培
                答<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=24-25%E3%80%81%E8%8B%A5%E4%B8%BB%E6%9C%BA%20hosta%20%E7%9A%84%20MAC%20%E5%9C%B0%E5%9D%80%E4%B8%BA%20aa-aa-aa-aa-aa-aa%2C%E4%B8%BB%E6%9C%BA%20hostB%20%E7%9A%84%20MAC%0A%E5%9C%B0%E5%9D%80%E4%B8%BA%20bb-bb-bb-bb-bb-bb%E3%80%82%20%E7%94%B1%20hostA%20%E5%8F%91%E5%87%BA%E7%9A%84%E6%9F%A5%E8%AF%A2%20hostB%20%E7%9A%84%20MAC%20%E5%9C%B0%E5%9D%80%E7%9A%84%E5%B8%A7%E6%A0%BC%0A%E5%BC%8F%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%2C%E5%88%99%E6%AD%A4%E5%B8%A7%E4%B8%AD%E7%9A%84%E7%9A%84%E7%9B%AE%E6%A0%87%20Mac%20%E5%9C%B0%E5%9D%80%E4%B8%BA%20%28%20%29%2CARP%20%E6%8A%A5%E6%96%87%E4%B8%AD%E7%9A%84%E7%9B%AE%E6%A0%87%20MAC%20%E5%9C%B0%0A%E5%9D%80%E4%B8%BA%28%20%29%0A%E5%9F%B9%0A%E7%AD%94">百度</a></p>
            <p class="choice header_choice false"><span class="number">（24） </span>A.aa-aa-aa-aa-aa-aa</p>
            <p class="choice false">B.bb-bb-bb-bb-bb-bb</p>
            <p class="choice false">C.00-00-00-00-00-00</p>
            <p class="choice true">D.ff-ff-ff-ff-ff-ff</p>
            <p class="choice header_choice false"><span class="number">（25） </span>A.aa-aa-aa-aa-aa-aa</p>
            <p class="choice false">B.bb-bb-bb-bb-bb-bb</p>
            <p class="choice true">C.00-00-00-00-00-00</p>
            <p class="choice false">D.ff-ff-ff-ff-ff-ff</p>
        </div>
        <div class="block">
            <p class="question">26、在 RIP 协议中,默认( )秒更新一次路由。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=26%E3%80%81%E5%9C%A8%20RIP%20%E5%8D%8F%E8%AE%AE%E4%B8%AD%2C%E9%BB%98%E8%AE%A4%28%20%29%E7%A7%92%E6%9B%B4%E6%96%B0%E4%B8%80%E6%AC%A1%E8%B7%AF%E7%94%B1%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（26）</span>
                <span class="choice true">A.30</span>
                <span class="choice false">B.60</span>
                <span class="choice false">C.90</span>
                <span class="choice false">D.100</span>
            </p>
        </div>
        <div class="block">
            <p class="question">27、以下关于 OSPF 的描述中,错误的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=27%E3%80%81%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%20OSPF%20%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%2C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（27） </span>A.根据链路状态法计算最佳路由</p>
            <p class="choice false">B.用于自治系统内的内部网关协议</p>
            <p class="choice false">C.采用Dijkstra算法进行路由计算</p>
            <p class="choice true">D.OSPF网络中用区域1来表示主干网段</p>
        </div>
        <div class="block">
            <p class="question">28、以下关于 RIP 与 OSPF 的说法中,错误的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=28%E3%80%81%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%20RIP%20%E4%B8%8E%20OSPF%20%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%2C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（28） </span>A.RIP定时发布路由信息,而OSPF在网络拓扑发生变化时发布路由信息</p>
            <p class="choice false">B.RIP的路由信息发送给邻居,而OSPF路由信息发送给整个网络路由器</p>
            <p class="choice true">C.RIP采用组播方式发布路由信息,而OSPF以广播方式发布路由信息</p>
            <p class="choice false">D.RIP和OSPF均为内部路由协议</p>
        </div>
        <div class="block">
            <p class="question">29-30、在路由器 R2 上采用命令( )得到如下所示结果。
                R2>
                ...
                R 192.168.1.0/24 [120/1] via212.10.112.1,00:00:11,Serial2/0
                C 192.168.2.0/24 is directly connected, FastEthernet0/0
                212.107.112.0/30 is subnetted, 1 subnets
                C 212.107.112.0 is directly connected, Serial2/0
                R2> 其中标志“R”表明这条路由是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=29-30%E3%80%81%E5%9C%A8%E8%B7%AF%E7%94%B1%E5%99%A8%20R2%20%E4%B8%8A%E9%87%87%E7%94%A8%E5%91%BD%E4%BB%A4%28%20%29%E5%BE%97%E5%88%B0%E5%A6%82%E4%B8%8B%E6%89%80%E7%A4%BA%E7%BB%93%E6%9E%9C%E3%80%82%0AR2%3E%0A...%0AR%20192.168.1.0/24%20%5B120/1%5D%20via212.10.112.1%2C00%3A00%3A11%2CSerial2/0%0AC%20192.168.2.0/24%20is%20directly%20connected%2C%20FastEthernet0/0%0A212.107.112.0/30%20is%20subnetted%2C%201%20subnets%0AC%20212.107.112.0%20is%20directly%20connected%2C%20Serial2/0%0AR2%3E%20%E5%85%B6%E4%B8%AD%E6%A0%87%E5%BF%97%E2%80%9CR%E2%80%9D%E8%A1%A8%E6%98%8E%E8%BF%99%E6%9D%A1%E8%B7%AF%E7%94%B1%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（29） </span>A.showroutingtable</p>
            <p class="choice true">B.showiproute</p>
            <p class="choice false">C.iprouting</p>
            <p class="choice false">D.routeprint</p>
            <p class="one-line-choice"><span class="number">（30）</span>
                <span class="choice false">A.重定向路由</span>
                <span class="choice true">B.RIP路由</span>
                <span class="choice false">C.接收路由</span>
                <span class="choice false">D.直接连接</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    RIP、OSPF 详见强化课程中 RIP、OSPF 分专题讲解内容。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">31、在 Linux 中,使用 Apache 发布 Web 服务时默认 Web 站点的目录为( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=31%E3%80%81%E5%9C%A8%20Linux%20%E4%B8%AD%2C%E4%BD%BF%E7%94%A8%20Apache%20%E5%8F%91%E5%B8%83%20Web%20%E6%9C%8D%E5%8A%A1%E6%97%B6%E9%BB%98%E8%AE%A4%20Web%20%E7%AB%99%E7%82%B9%E7%9A%84%E7%9B%AE%E5%BD%95%E4%B8%BA%28%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（31） </span>A./etc/httpd</p>
            <p class="choice false">B.var/log/httpd</p>
            <p class="choice false">C./var/home</p>
            <p class="choice true">D./home/httpd</p>
        </div>
        <div class="block">
            <p class="question">32、在 Linux 中,要更改一个文件的权限设置可使用( )命令<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=32%E3%80%81%E5%9C%A8%20Linux%20%E4%B8%AD%2C%E8%A6%81%E6%9B%B4%E6%94%B9%E4%B8%80%E4%B8%AA%E6%96%87%E4%BB%B6%E7%9A%84%E6%9D%83%E9%99%90%E8%AE%BE%E7%BD%AE%E5%8F%AF%E4%BD%BF%E7%94%A8%28%20%29%E5%91%BD%E4%BB%A4">百度</a></p>
            <p class="one-line-choice"><span class="number">（32）</span>
                <span class="choice false">A.attrib</span>
                <span class="choice false">B.modify</span>
                <span class="choice true">C.chmod</span>
                <span class="choice false">D.change</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    chmod 命令用来变更文件或目录的权限。在 UNIX 系统家族里,文件或目录权限
                    的控制分别以读取、写入、执行 3 种一般权限来区分,另有 3 种特殊权限可供运
                    用。用户可以使用 chmod 指令去变更文件与目录的权限,设置方式采用文字或数
                    字代号皆可。符号连接的权限无法变更,如果用户对符号连接修改权限,其改变
                    会作用在被连接的原始文件。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">33、在 Linux 中,负责配置 DNS 的文件是__(33)__,它包含了主机的域名搜索
                顺序和 DNS 服务器 的地址。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=33%E3%80%81%E5%9C%A8%20Linux%20%E4%B8%AD%2C%E8%B4%9F%E8%B4%A3%E9%85%8D%E7%BD%AE%20DNS%20%E7%9A%84%E6%96%87%E4%BB%B6%E6%98%AF__%2833%29__%2C%E5%AE%83%E5%8C%85%E5%90%AB%E4%BA%86%E4%B8%BB%E6%9C%BA%E7%9A%84%E5%9F%9F%E5%90%8D%E6%90%9C%E7%B4%A2%0A%E9%A1%BA%E5%BA%8F%E5%92%8C%20DNS%20%E6%9C%8D%E5%8A%A1%E5%99%A8%20%E7%9A%84%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（33） </span>A./etc/hostname</p>
            <p class="choice false">B./dev/host.conf</p>
            <p class="choice true">C.etc/resolv.conf</p>
            <p class="choice false">D./dev/name.conf</p>
        </div>
        <div class="block">
            <p class="question">34、主域名服务器在接收到域名请求后,首先查询的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=34%E3%80%81%E4%B8%BB%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%9C%A8%E6%8E%A5%E6%94%B6%E5%88%B0%E5%9F%9F%E5%90%8D%E8%AF%B7%E6%B1%82%E5%90%8E%2C%E9%A6%96%E5%85%88%E6%9F%A5%E8%AF%A2%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（34）</span>
                <span class="choice false">A.本地hosts文件</span>
                <span class="choice false">B.转发域名服务器</span>
                <span class="choice true">C.本地缓存</span>
                <span class="choice false">D.授权域名服务器</span>
            </p>
        </div>
        <div class="block">
            <p class="question">35、主机 host1 对 host2 进行域名查询的过程如下图所示,下列说法中正确的
                是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=35%E3%80%81%E4%B8%BB%E6%9C%BA%20host1%20%E5%AF%B9%20host2%20%E8%BF%9B%E8%A1%8C%E5%9F%9F%E5%90%8D%E6%9F%A5%E8%AF%A2%E7%9A%84%E8%BF%87%E7%A8%8B%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%2C%E4%B8%8B%E5%88%97%E8%AF%B4%E6%B3%95%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%0A%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（35） </span>A.本地域名服务器采用迭代算法</p>
            <p class="choice false">B.中介域名服务器采用迭代算法</p>
            <p class="choice false">C.根域名服务器采用递归算法</p>
            <p class="choice true">D.授权域名服务器采用何种算法不确定</p>
        </div>
        <div class="block">
            <p class="question">36、自动专用 IP 地址(APIPA),用于当客户端无法获得动态地址时作为临时的
                主机地址,以下 地址中属于自动专用 P 地址的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=36%E3%80%81%E8%87%AA%E5%8A%A8%E4%B8%93%E7%94%A8%20IP%20%E5%9C%B0%E5%9D%80%28APIPA%29%2C%E7%94%A8%E4%BA%8E%E5%BD%93%E5%AE%A2%E6%88%B7%E7%AB%AF%E6%97%A0%E6%B3%95%E8%8E%B7%E5%BE%97%E5%8A%A8%E6%80%81%E5%9C%B0%E5%9D%80%E6%97%B6%E4%BD%9C%E4%B8%BA%E4%B8%B4%E6%97%B6%E7%9A%84%0A%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%2C%E4%BB%A5%E4%B8%8B%20%E5%9C%B0%E5%9D%80%E4%B8%AD%E5%B1%9E%E4%BA%8E%E8%87%AA%E5%8A%A8%E4%B8%93%E7%94%A8%20P%20%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（36）</span>
                <span class="choice false">A.224.0.0.1</span>
                <span class="choice false">B.127.0.0.1</span>
                <span class="choice true">C.169.254.1.15</span>
                <span class="choice false">D.192.168.0.1</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    APIPA 是一个 DHCP 故障转移机制。当 DHCP 服务器出故障时, APIPA 在
                    169.254.0.1 到 169.254.255.254 的私有空间内分配地址,所有设备使用默认的
                    网络掩码 255.255.0.0。客户机调整它们的地址使用它们在使用 ARP 的局域网中
                    是唯一的。APIPA 可以为没有 DHCP 服务器的单网段网络提供自动配置 TCP/IP 协
                    议的功能。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">37、在 DNS 的资源记录中,A 记录( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=37%E3%80%81%E5%9C%A8%20DNS%20%E7%9A%84%E8%B5%84%E6%BA%90%E8%AE%B0%E5%BD%95%E4%B8%AD%2CA%20%E8%AE%B0%E5%BD%95%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（37）</span>
                <span class="choice true">A.表示IP地址到主机名的映射</span>
                <span class="choice false">B.表示主机名到IP地址的映射</span>
                <span class="choice false">C.指定授权服务器</span>
                <span class="choice false">D.指定区域邮件服务器</span>
            </p>
        </div>
        <div class="block">
            <p class="question">38、DHCP 客户端通过( )方式发送 DHCPDiscovey 消息<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=38%E3%80%81DHCP%20%E5%AE%A2%E6%88%B7%E7%AB%AF%E9%80%9A%E8%BF%87%28%20%29%E6%96%B9%E5%BC%8F%E5%8F%91%E9%80%81%20DHCPDiscovey%20%E6%B6%88%E6%81%AF">百度</a></p>
            <p class="one-line-choice"><span class="number">（38）</span>
                <span class="choice false">A.单播</span>
                <span class="choice true">B.广播</span>
                <span class="choice false">C.组播</span>
                <span class="choice false">D.任意播</span>
            </p>
        </div>
        <div class="block">
            <p class="question">39、FTP 协议默认使用的数据端口是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=39%E3%80%81FTP%20%E5%8D%8F%E8%AE%AE%E9%BB%98%E8%AE%A4%E4%BD%BF%E7%94%A8%E7%9A%84%E6%95%B0%E6%8D%AE%E7%AB%AF%E5%8F%A3%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（39）</span>
                <span class="choice false">A.20</span>
                <span class="choice true">B.80</span>
                <span class="choice false">C.25</span>
                <span class="choice false">D.23</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    FTP 是 File Transfer Protocol(文件传输协议)的英文简称,而中文简称为
                    “文传协议”。用于 Internet 上的控制文件的双向传输。同时,它也是一个应
                    用程序(Application)。基于不同的操作系统有不同的 FTP 应用程序,而所有
                    这些应用程序都遵守同一种协议以传输文件。在 FTP 的使用当中,用户经常遇到
                    两个概念:"下载"(Download)和"上传"(Upload)。"下载"文件就是从远程主
                    机拷贝文件至自己的计算机上;"上传"文件就是将文件从自己的计算机中拷贝至
                    远程主机上。用 Internet 语言来说,用户可通过客户机程序向(从)远程主机
                    上传(下载)文件。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">40-41、在安全通信中,A 将所发送的信息使用( )进行数字签名,B 收到该消息后
                可利用( )验证 该消息的真实性。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=40-41%E3%80%81%E5%9C%A8%E5%AE%89%E5%85%A8%E9%80%9A%E4%BF%A1%E4%B8%AD%2CA%20%E5%B0%86%E6%89%80%E5%8F%91%E9%80%81%E7%9A%84%E4%BF%A1%E6%81%AF%E4%BD%BF%E7%94%A8%28%20%29%E8%BF%9B%E8%A1%8C%E6%95%B0%E5%AD%97%E7%AD%BE%E5%90%8D%2CB%20%E6%94%B6%E5%88%B0%E8%AF%A5%E6%B6%88%E6%81%AF%E5%90%8E%0A%E5%8F%AF%E5%88%A9%E7%94%A8%28%20%29%E9%AA%8C%E8%AF%81%20%E8%AF%A5%E6%B6%88%E6%81%AF%E7%9A%84%E7%9C%9F%E5%AE%9E%E6%80%A7%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（40）</span>
                <span class="choice true">A.A的公钥</span>
                <span class="choice false">B.A的私钥</span>
                <span class="choice false">C.B的公钥</span>
                <span class="choice false">D.B的私钥</span>
            </p>
            <p class="one-line-choice"><span class="number">（41）</span>
                <span class="choice false">A.A的公钥</span>
                <span class="choice true">B.A的私钥</span>
                <span class="choice false">C.B的公钥</span>
                <span class="choice false">D.B的私钥</span>
            </p>
        </div>
        <div class="block">
            <p class="question">42、攻击者通过发送一个目的主机已经接收的报文来达到攻击目的,这种攻击方
                式属于( )攻 击<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=42%E3%80%81%E6%94%BB%E5%87%BB%E8%80%85%E9%80%9A%E8%BF%87%E5%8F%91%E9%80%81%E4%B8%80%E4%B8%AA%E7%9B%AE%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%B7%B2%E7%BB%8F%E6%8E%A5%E6%94%B6%E7%9A%84%E6%8A%A5%E6%96%87%E6%9D%A5%E8%BE%BE%E5%88%B0%E6%94%BB%E5%87%BB%E7%9B%AE%E7%9A%84%2C%E8%BF%99%E7%A7%8D%E6%94%BB%E5%87%BB%E6%96%B9%0A%E5%BC%8F%E5%B1%9E%E4%BA%8E%28%20%29%E6%94%BB%20%E5%87%BB">百度</a></p>
            <p class="one-line-choice"><span class="number">（42）</span>
                <span class="choice true">A.重放</span>
                <span class="choice false">B.拒绝服务</span>
                <span class="choice false">C.数据截获</span>
                <span class="choice false">D.数据流分析</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    重放攻击(Replay Attacks)又称重播攻击、回放攻击,是指攻击者发送一个目的
                    主机已接收过的包,来达到欺骗系统的目的,主要用于身份认证过程,破坏认证
                    的正确性。重放攻击可以由发起者,也可以由拦截并重发该数据的敌方进行。攻
                    击者利用网络监听或者其他方式盗取认证凭据,之后再把它重新发给认证服务
                    器。重放攻击在任何网络通过程中都可能发生,是计算机世界黑客常用的攻击方
                    式之一。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">43、网络管理员调试网络,使用( )命令来持续查看网络连通性。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=43%E3%80%81%E7%BD%91%E7%BB%9C%E7%AE%A1%E7%90%86%E5%91%98%E8%B0%83%E8%AF%95%E7%BD%91%E7%BB%9C%2C%E4%BD%BF%E7%94%A8%28%20%29%E5%91%BD%E4%BB%A4%E6%9D%A5%E6%8C%81%E7%BB%AD%E6%9F%A5%E7%9C%8B%E7%BD%91%E7%BB%9C%E8%BF%9E%E9%80%9A%E6%80%A7%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（43）</span>
                <span class="choice true">A.ping目标地址-g</span>
                <span class="choice false">B.ping目标地址-t</span>
                <span class="choice false">C.ping目标地址-r</span>
                <span class="choice false">D.ping目标地址-a</span>
            </p>
        </div>
        <div class="block">
            <p class="question">44-45、DES 是一种( )加密算法,其密钥长度为 56 位,3DES 是基于 DES 的加
                密方式,对明文进行 3 次 DES 操作,以提高加密强度,其密钥长度是( )位<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=44-45%E3%80%81DES%20%E6%98%AF%E4%B8%80%E7%A7%8D%28%20%29%E5%8A%A0%E5%AF%86%E7%AE%97%E6%B3%95%2C%E5%85%B6%E5%AF%86%E9%92%A5%E9%95%BF%E5%BA%A6%E4%B8%BA%2056%20%E4%BD%8D%2C3DES%20%E6%98%AF%E5%9F%BA%E4%BA%8E%20DES%20%E7%9A%84%E5%8A%A0%0A%E5%AF%86%E6%96%B9%E5%BC%8F%2C%E5%AF%B9%E6%98%8E%E6%96%87%E8%BF%9B%E8%A1%8C%203%20%E6%AC%A1%20DES%20%E6%93%8D%E4%BD%9C%2C%E4%BB%A5%E6%8F%90%E9%AB%98%E5%8A%A0%E5%AF%86%E5%BC%BA%E5%BA%A6%2C%E5%85%B6%E5%AF%86%E9%92%A5%E9%95%BF%E5%BA%A6%E6%98%AF%28%20%29%E4%BD%8D">百度</a></p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice false">A.共享密钥</span>
                <span class="choice true">B.公开密钥</span>
                <span class="choice false">C.报文摘要</span>
                <span class="choice false">D.访问控制</span>
            </p>
            <p class="one-line-choice"><span class="number">（45）</span>
                <span class="choice true">A.56</span>
                <span class="choice false">B.112</span>
                <span class="choice false">C.128</span>
                <span class="choice false">D.168</span>
            </p>
        </div>
        <div class="block">
            <p class="question">46-47、SNMP 协议实体发送请求和应答报文的默认端口号是( ),采用 UDP 提供
                数据报服务,原因 不包括( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=46-47%E3%80%81SNMP%20%E5%8D%8F%E8%AE%AE%E5%AE%9E%E4%BD%93%E5%8F%91%E9%80%81%E8%AF%B7%E6%B1%82%E5%92%8C%E5%BA%94%E7%AD%94%E6%8A%A5%E6%96%87%E7%9A%84%E9%BB%98%E8%AE%A4%E7%AB%AF%E5%8F%A3%E5%8F%B7%E6%98%AF%28%20%29%2C%E9%87%87%E7%94%A8%20UDP%20%E6%8F%90%E4%BE%9B%0A%E6%95%B0%E6%8D%AE%E6%8A%A5%E6%9C%8D%E5%8A%A1%2C%E5%8E%9F%E5%9B%A0%20%E4%B8%8D%E5%8C%85%E6%8B%AC%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（46）</span>
                <span class="choice false">A.160</span>
                <span class="choice true">B.162</span>
                <span class="choice false">C.161</span>
                <span class="choice false">D.163</span>
            </p>
            <p class="choice header_choice false"><span class="number">（47） </span>A.UDP数据传输效率高</p>
            <p class="choice false">B.UDP面向连接,没有数据丢失</p>
            <p class="choice true">C.UDP无需确认,不增加主机重传负担</p>
            <p class="choice false">D.UDP开销小,不增加网络负载</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    SNMP 采用 UDP 协议在管理端和 agent 之间传输信息。 SNMP 采用 UDP 161 端口
                    接收和发送请求,162 端口接收 trap,执行 SNMP 的设备缺省都必须采用这些端
                    口。SNMP 消息全部通过 UDP 端口 161 接收,只有 Trap 信息采用 UDP 端口 162。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">48、SNMP 代理收到一个 GET 请求时,如果不能提供该对象的值,代理以( )响
                应。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=48%E3%80%81SNMP%20%E4%BB%A3%E7%90%86%E6%94%B6%E5%88%B0%E4%B8%80%E4%B8%AA%20GET%20%E8%AF%B7%E6%B1%82%E6%97%B6%2C%E5%A6%82%E6%9E%9C%E4%B8%8D%E8%83%BD%E6%8F%90%E4%BE%9B%E8%AF%A5%E5%AF%B9%E8%B1%A1%E7%9A%84%E5%80%BC%2C%E4%BB%A3%E7%90%86%E4%BB%A5%28%20%29%E5%93%8D%0A%E5%BA%94%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（48）</span>
                <span class="choice false">A.该实例的上个值</span>
                <span class="choice true">B.该实例的下个值</span>
                <span class="choice false">C.Trap报文</span>
                <span class="choice false">D.错误信息</span>
            </p>
        </div>
        <div class="block">
            <p class="question">49、某客户端可以 ping 通同一网段内的部分计算机,原因可能是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=49%E3%80%81%E6%9F%90%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%8F%AF%E4%BB%A5%20ping%20%E9%80%9A%E5%90%8C%E4%B8%80%E7%BD%91%E6%AE%B5%E5%86%85%E7%9A%84%E9%83%A8%E5%88%86%E8%AE%A1%E7%AE%97%E6%9C%BA%2C%E5%8E%9F%E5%9B%A0%E5%8F%AF%E8%83%BD%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（49） </span>A.本机TCP/IP协议不能正常工作</p>
            <p class="choice true">B.本机DNS服务器地址设置错误</p>
            <p class="choice false">C.本机网络接口故障</p>
            <p class="choice false">D.网络中存在访问过滤</p>
        </div>
        <div class="block">
            <p class="question">50、在 TCP 协议中,用于进行流量控制的字段为__(50)__。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=50%E3%80%81%E5%9C%A8%20TCP%20%E5%8D%8F%E8%AE%AE%E4%B8%AD%2C%E7%94%A8%E4%BA%8E%E8%BF%9B%E8%A1%8C%E6%B5%81%E9%87%8F%E6%8E%A7%E5%88%B6%E7%9A%84%E5%AD%97%E6%AE%B5%E4%B8%BA__%2850%29__%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（50）</span>
                <span class="choice false">A.端口号</span>
                <span class="choice false">B.序列号</span>
                <span class="choice false">C.应答编号</span>
                <span class="choice true">D.窗口</span>
            </p>
        </div>
        <div class="block">
            <p class="question">51、HDLC 协议中,若监控帧采用 SREJ 进行应答,表明采用的差错控制机制为( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=51%E3%80%81HDLC%20%E5%8D%8F%E8%AE%AE%E4%B8%AD%2C%E8%8B%A5%E7%9B%91%E6%8E%A7%E5%B8%A7%E9%87%87%E7%94%A8%20SREJ%20%E8%BF%9B%E8%A1%8C%E5%BA%94%E7%AD%94%2C%E8%A1%A8%E6%98%8E%E9%87%87%E7%94%A8%E7%9A%84%E5%B7%AE%E9%94%99%E6%8E%A7%E5%88%B6%E6%9C%BA%E5%88%B6%E4%B8%BA%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（51）</span>
                <span class="choice false">A.后退N帧ARQ</span>
                <span class="choice false">B.选择性拒绝ARQ</span>
                <span class="choice false">C.停等ARQ</span>
                <span class="choice true">D.慢启动</span>
            </p>
        </div>
        <div class="block">
            <p class="question">52、以下地址中用于组播的是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=52%E3%80%81%E4%BB%A5%E4%B8%8B%E5%9C%B0%E5%9D%80%E4%B8%AD%E7%94%A8%E4%BA%8E%E7%BB%84%E6%92%AD%E7%9A%84%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（52）</span>
                <span class="choice false">A.10.1.205.0</span>
                <span class="choice true">B.192.168.0.7</span>
                <span class="choice false">C.202.105.107.1</span>
                <span class="choice false">D.224.1.210.5</span>
            </p>
        </div>
        <div class="block">
            <p class="question">53、下列 IP 地址中,不能作为源地址的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=53%E3%80%81%E4%B8%8B%E5%88%97%20IP%20%E5%9C%B0%E5%9D%80%E4%B8%AD%2C%E4%B8%8D%E8%83%BD%E4%BD%9C%E4%B8%BA%E6%BA%90%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（53） </span>A.0.0.0.0</p>
            <p class="choice false">B.127.0.0.1</p>
            <p class="choice false">C.190.255.255.255/24</p>
            <p class="choice true">D.192.168.0.1/24</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    广播地址不能作为源地址
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">54、某公司网络的地址是 192.168.192.0/20,要把该网络分成 32 个子网,则
                对应的子网掩码 应该是( ),每个子网可分配的主机地址数是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=54%E3%80%81%E6%9F%90%E5%85%AC%E5%8F%B8%E7%BD%91%E7%BB%9C%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%20192.168.192.0/20%2C%E8%A6%81%E6%8A%8A%E8%AF%A5%E7%BD%91%E7%BB%9C%E5%88%86%E6%88%90%2032%20%E4%B8%AA%E5%AD%90%E7%BD%91%2C%E5%88%99%0A%E5%AF%B9%E5%BA%94%E7%9A%84%E5%AD%90%E7%BD%91%E6%8E%A9%E7%A0%81%20%E5%BA%94%E8%AF%A5%E6%98%AF%28%20%29%2C%E6%AF%8F%E4%B8%AA%E5%AD%90%E7%BD%91%E5%8F%AF%E5%88%86%E9%85%8D%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E6%95%B0%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（54） </span>A.255.255.252.0</p>
            <p class="choice false">B.255.255.254.0</p>
            <p class="choice true">C.255.255.255.0</p>
            <p class="choice false">D.255.255.255.128</p>
            <p class="one-line-choice"><span class="number">（55）</span>
                <span class="choice false">A.62</span>
                <span class="choice false">B.126</span>
                <span class="choice false">C.254</span>
                <span class="choice true">D.510</span>
            </p>
        </div>
        <div class="block">
            <p class="question">56、使用 CIDR 技术把 4 个 C 类网络 110.217.28.022、110.217.132.0/22、
                110.217.136.0/22 和 110.217.140.0/22 汇聚成一个超网,得到的地址是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=56%E3%80%81%E4%BD%BF%E7%94%A8%20CIDR%20%E6%8A%80%E6%9C%AF%E6%8A%8A%204%20%E4%B8%AA%20C%20%E7%B1%BB%E7%BD%91%E7%BB%9C%20110.217.28.022%E3%80%81110.217.132.0/22%E3%80%81%0A110.217.136.0/22%20%E5%92%8C%20110.217.140.0/22%20%E6%B1%87%E8%81%9A%E6%88%90%E4%B8%80%E4%B8%AA%E8%B6%85%E7%BD%91%2C%E5%BE%97%E5%88%B0%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（56） </span>A.110.217.128.0/18</p>
            <p class="choice true">B.110.217.128.0/19</p>
            <p class="choice false">C.110.217.128.0/20</p>
            <p class="choice false">D.110.217.128.0/21</p>
        </div>
        <div class="block">
            <p class="question">57、如果 IPv6 头部包含多个扩展头部,第一个扩展头部为( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=57%E3%80%81%E5%A6%82%E6%9E%9C%20IPv6%20%E5%A4%B4%E9%83%A8%E5%8C%85%E5%90%AB%E5%A4%9A%E4%B8%AA%E6%89%A9%E5%B1%95%E5%A4%B4%E9%83%A8%2C%E7%AC%AC%E4%B8%80%E4%B8%AA%E6%89%A9%E5%B1%95%E5%A4%B4%E9%83%A8%E4%B8%BA%28%20%29%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（57）</span>
                <span class="choice true">A.逐跳头部</span>
                <span class="choice false">B.路由选择头部</span>
                <span class="choice false">C.分段头部</span>
                <span class="choice false">D.认证头部</span>
            </p>
        </div>
        <div class="block">
            <p class="question">58、用于生成 VLAN 标记的协议是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=58%E3%80%81%E7%94%A8%E4%BA%8E%E7%94%9F%E6%88%90%20VLAN%20%E6%A0%87%E8%AE%B0%E7%9A%84%E5%8D%8F%E8%AE%AE%E6%98%AF%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（58）</span>
                <span class="choice true">A.IEEE802.1q</span>
                <span class="choice false">B.IEEE802.3</span>
                <span class="choice false">C.IEEE802.5</span>
                <span class="choice false">D.IEEE802.1d</span>
            </p>
        </div>
        <div class="block">
            <p class="question">59、两个站点采用二进制指数后退算法进行避让,,3 次冲突之后再次冲突的概
                率是( )。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=59%E3%80%81%E4%B8%A4%E4%B8%AA%E7%AB%99%E7%82%B9%E9%87%87%E7%94%A8%E4%BA%8C%E8%BF%9B%E5%88%B6%E6%8C%87%E6%95%B0%E5%90%8E%E9%80%80%E7%AE%97%E6%B3%95%E8%BF%9B%E8%A1%8C%E9%81%BF%E8%AE%A9%2C%2C3%20%E6%AC%A1%E5%86%B2%E7%AA%81%E4%B9%8B%E5%90%8E%E5%86%8D%E6%AC%A1%E5%86%B2%E7%AA%81%E7%9A%84%E6%A6%82%0A%E7%8E%87%E6%98%AF%28%20%29%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（59）</span>
                <span class="choice true">A.0.5</span>
                <span class="choice false">B.0.25</span>
                <span class="choice false">C.0.125</span>
                <span class="choice false">D.0.0625</span>
            </p>
        </div>
        <div class="block">
            <p class="question">60、在 CSMA/CD 以太网中,数据速率为 100Mbs,网段长 2km,信号速率为
                200m/us,则网络 的最小帧长是( )比特<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=60%E3%80%81%E5%9C%A8%20CSMA/CD%20%E4%BB%A5%E5%A4%AA%E7%BD%91%E4%B8%AD%2C%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20100Mbs%2C%E7%BD%91%E6%AE%B5%E9%95%BF%202km%2C%E4%BF%A1%E5%8F%B7%E9%80%9F%E7%8E%87%E4%B8%BA%0A200m/us%2C%E5%88%99%E7%BD%91%E7%BB%9C%20%E7%9A%84%E6%9C%80%E5%B0%8F%E5%B8%A7%E9%95%BF%E6%98%AF%28%20%29%E6%AF%94%E7%89%B9">百度</a></p>
            <p class="one-line-choice"><span class="number">（60）</span>
                <span class="choice false">A.1000</span>
                <span class="choice false">B.2000</span>
                <span class="choice true">C.10000</span>
                <span class="choice false">D.200000</span>
            </p>
        </div>
        <div class="block">
            <p class="question">61、下列快速以太网物理层标准中,使用 5 类无屏蔽双绞线作为传输介质的是
                __(61)__<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=61%E3%80%81%E4%B8%8B%E5%88%97%E5%BF%AB%E9%80%9F%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%89%A9%E7%90%86%E5%B1%82%E6%A0%87%E5%87%86%E4%B8%AD%2C%E4%BD%BF%E7%94%A8%205%20%E7%B1%BB%E6%97%A0%E5%B1%8F%E8%94%BD%E5%8F%8C%E7%BB%9E%E7%BA%BF%E4%BD%9C%E4%B8%BA%E4%BC%A0%E8%BE%93%E4%BB%8B%E8%B4%A8%E7%9A%84%E6%98%AF%0A__%2861%29__">百度</a></p>
            <p class="one-line-choice"><span class="number">（61）</span>
                <span class="choice false">A.100BASE-FX</span>
                <span class="choice true">B.100BASE-T4</span>
                <span class="choice false">C.100BASE-Tx</span>
                <span class="choice false">D.100BASE-T2</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    100 标识传输速率为 100Mbit/s;<br />
                    base 标识采用基带传输;<br />
                    T 表示传输介质,2 对 5 类 UTP,当为 F 时,代表为光纤。<br />
                    快速以太网目前制定的三种有关传输介质的标准之一,另外两种是 100BASE-T4、
                    100BASE-FX。其中 100BASE-TX、100BASE-FX 支持全双工模式。当 100Mbps 端口
                    工作在全双工模式下时,可以同时存在流进端口和流出端口的数据,而且双向的
                    数据流都可以享受 100Mbps 的带宽如基于 100BASE-TX 标准的端口,其工作在全
                    双工模式下的端口带宽就是 200Mbps。<br />
                    100BASE-TX 使用的是两对阻抗为 100 欧姆的 5 类非屏蔽双绞线,最大传输距离
                    是 100 米。其中一对用于发送数据,另一对用于接受数据。100BASE-TX 采用的
                    是 4B/5B 编码方式,即把每 4 位数据用 5 位的编码组来表示,该编码方式的码元
                    利用率=4/5*100%=80%。然后将 4B/5B 编码成 NRZI 进行传输。<br />
                    100BASE-TX 采用的物理拓扑结构为星型,在目前的组网方法中,使用最多的是
                    100BASE-TX 标准的网卡,只支持 RJ-45 标准,它多用于主干网。100BASE-TX 标
                    准的出现对促进网络结构化布线技术的发展起到了关键的作用。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">62、在 802.11 中采用优先级来进行不同业务的区分,优先级最低的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=62%E3%80%81%E5%9C%A8%20802.11%20%E4%B8%AD%E9%87%87%E7%94%A8%E4%BC%98%E5%85%88%E7%BA%A7%E6%9D%A5%E8%BF%9B%E8%A1%8C%E4%B8%8D%E5%90%8C%E4%B8%9A%E5%8A%A1%E7%9A%84%E5%8C%BA%E5%88%86%2C%E4%BC%98%E5%85%88%E7%BA%A7%E6%9C%80%E4%BD%8E%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（62） </span>A.服务访问点轮询</p>
            <p class="choice false">B.服务访问点轮询的应答</p>
            <p class="choice true">C.分布式协调功能竞争访问</p>
            <p class="choice false">D.分布式协调功能竞争访问帧的应答</p>
        </div>
        <div class="block">
            <p class="question">63、以下关于网络布线子系统的说法中,错误的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=63%E3%80%81%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8E%E7%BD%91%E7%BB%9C%E5%B8%83%E7%BA%BF%E5%AD%90%E7%B3%BB%E7%BB%9F%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%2C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（63） </span>A.工作区子系统指终端到信息插座的区域</p>
            <p class="choice false">B.水平子系统实现计算机设备与各管理子系统间的连接</p>
            <p class="choice true">C.干线子系统用于连接楼层之间的设备间</p>
            <p class="choice false">D.建筑群子系统连接建筑物</p>
        </div>
        <div class="block">
            <p class="question">64、在路由器执行( )命令可以查看到下面信息。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=64%E3%80%81%E5%9C%A8%E8%B7%AF%E7%94%B1%E5%99%A8%E6%89%A7%E8%A1%8C%28%20%29%E5%91%BD%E4%BB%A4%E5%8F%AF%E4%BB%A5%E6%9F%A5%E7%9C%8B%E5%88%B0%E4%B8%8B%E9%9D%A2%E4%BF%A1%E6%81%AF%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（64） </span>A.displaycurrent-configuration</p>
            <p class="choice true">B.displayipinterfacebrief</p>
            <p class="choice false">C.displaystpbrief</p>
            <p class="choice false">D.displayrip1route</p>
        </div>
        <div class="block">
            <p class="question">65-66、下图所示的网络拓扑中配置了 RIP 协议,且 RIP 协议已更新完成,下
                表所示为 AR2 路由器上 查看到的路由信息。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=65-66%E3%80%81%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E7%BD%91%E7%BB%9C%E6%8B%93%E6%89%91%E4%B8%AD%E9%85%8D%E7%BD%AE%E4%BA%86%20RIP%20%E5%8D%8F%E8%AE%AE%2C%E4%B8%94%20RIP%20%E5%8D%8F%E8%AE%AE%E5%B7%B2%E6%9B%B4%E6%96%B0%E5%AE%8C%E6%88%90%2C%E4%B8%8B%0A%E8%A1%A8%E6%89%80%E7%A4%BA%E4%B8%BA%20AR2%20%E8%B7%AF%E7%94%B1%E5%99%A8%E4%B8%8A%20%E6%9F%A5%E7%9C%8B%E5%88%B0%E7%9A%84%E8%B7%AF%E7%94%B1%E4%BF%A1%E6%81%AF%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（65） </span>A.在AR2上ping172.16.0.1丢包</p>
            <p class="choice true">B.在AR1上ping3.3.3.3丢包9</p>
            <p class="choice false">C.在AR1上ping172.16.1.1丢包</p>
            <p class="choice false">D.在AR3上ping1.1.1丢包</p>
            <p class="choice header_choice true"><span class="number">（66） </span>A.在AR1上环回地址172.16.0.1配置错误</p>
            <p class="choice false">B.在AR3上环回地址172.16.1.1配置错误</p>
            <p class="choice false">C.RIPv1不支持无类网络</p>
            <p class="choice false">D.RIPv2不支持无类网络</p>
        </div>
        <div class="block">
            <p class="question">67、下面关于路由器的描述中,正确的是( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=67%E3%80%81%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E8%B7%AF%E7%94%B1%E5%99%A8%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%2C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%28%20%29">百度</a></p>
            <p class="choice header_choice false"><span class="number">（67） </span>A.路由器中串口与以太口必须是成对的</p>
            <p class="choice false">B.路由器中串口与以太口的IP地址必须在同一网段</p>
            <p class="choice true">C.路由器的串口之间通常是点对点连接</p>
            <p class="choice false">D.路由器的以太口之间必须是点对点连接</p>
        </div>
        <div class="block">
            <p class="question">68、PGP 的功能中不包括( )<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=68%E3%80%81PGP%20%E7%9A%84%E5%8A%9F%E8%83%BD%E4%B8%AD%E4%B8%8D%E5%8C%85%E6%8B%AC%28%20%29">百度</a></p>
            <p class="one-line-choice"><span class="number">（68）</span>
                <span class="choice false">A.邮件压缩</span>
                <span class="choice false">B.发送者身份认证</span>
                <span class="choice true">C.邮件加密</span>
                <span class="choice false">D.邮件完整性认证</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    PGP(Pretty Good Privacy),是一个基于对称加密算法 IDEA(我国学者来学嘉
                    会同 J.L.Massey 于 1990 年提出)的邮件加密软件。可以用它对邮件保密以防止
                    非授权者阅读,它还能对邮件加上数字签名从而使收信人可以确认邮件的发送
                    者,并能确信邮件没有被篡改。它可以提供一种安全的通讯方式,而事先并不需
                    要任何保密的渠道用来传递密匙。它采用了一种 RSA 和传统加密的杂合算法,用
                    于数字签名的邮件文摘算法,加密前压缩等,还有一个良好的人机工程设计。它
                    的功能强大,有很快的速度。而且它的源代码是免费的。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question">69、 如果 DHCP 客户端发现分配的 IP 地址经被使用,客户端向服务器发出( )
                报文,拒绝该 IP 地址。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=69%E3%80%81%20%E5%A6%82%E6%9E%9C%20DHCP%20%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%8F%91%E7%8E%B0%E5%88%86%E9%85%8D%E7%9A%84%20IP%20%E5%9C%B0%E5%9D%80%E7%BB%8F%E8%A2%AB%E4%BD%BF%E7%94%A8%2C%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%90%91%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%8F%91%E5%87%BA%28%20%29%0A%E6%8A%A5%E6%96%87%2C%E6%8B%92%E7%BB%9D%E8%AF%A5%20IP%20%E5%9C%B0%E5%9D%80%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（69）</span>
                <span class="choice true">A.DHCPRelease</span>
                <span class="choice false">B.DHCPDecline</span>
                <span class="choice false">C.DHCPNack</span>
                <span class="choice false">D.DHCPRenew</span>
            </p>
        </div>
        <div class="block">
            <p class="question">70、在层次化园区网络设计中,( )是汇聚层的功能。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=70%E3%80%81%E5%9C%A8%E5%B1%82%E6%AC%A1%E5%8C%96%E5%9B%AD%E5%8C%BA%E7%BD%91%E7%BB%9C%E8%AE%BE%E8%AE%A1%E4%B8%AD%2C%28%20%29%E6%98%AF%E6%B1%87%E8%81%9A%E5%B1%82%E7%9A%84%E5%8A%9F%E8%83%BD%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（70）</span>
                <span class="choice false">A.高速数据传输</span>
                <span class="choice true">B.出口路由</span>
                <span class="choice false">C.广播域的定义</span>
                <span class="choice false">D.MAC地址过滤</span>
            </p>
        </div>




    </div>

    <!-- <?php
    require ('../template/footer.php');
    ?> -->

</body>

</html>