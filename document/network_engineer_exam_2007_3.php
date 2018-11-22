<?php
    include_once ('../waf.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2007年下半年 网络工程师 上午试卷</title>
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
        <h1 style="text-align:center">2007年下半年 网络工程师 上午试卷</h1>
        <div class="block">
            <p class="question">若内存地址区间为4000H~43FFH，每个存储单位可存储16位二进制数，该内存区域由4片存储器芯片构成，则构成该内存所用的存储器芯片的容量是 （4） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E5%86%85%E5%AD%98%E5%9C%B0%E5%9D%80%E5%8C%BA%E9%97%B4%E4%B8%BA4000H%7E43FFH%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%AD%98%E5%82%A8%E5%8D%95%E4%BD%8D%E5%8F%AF%E5%AD%98%E5%82%A816%E4%BD%8D%E4%BA%8C%E8%BF%9B%E5%88%B6%E6%95%B0%EF%BC%8C%E8%AF%A5%E5%86%85%E5%AD%98%E5%8C%BA%E5%9F%9F%E7%94%B14%E7%89%87%E5%AD%98%E5%82%A8%E5%99%A8%E8%8A%AF%E7%89%87%E6%9E%84%E6%88%90%EF%BC%8C%E5%88%99%E6%9E%84%E6%88%90%E8%AF%A5%E5%86%85%E5%AD%98%E6%89%80%E7%94%A8%E7%9A%84%E5%AD%98%E5%82%A8%E5%99%A8%E8%8A%AF%E7%89%87%E7%9A%84%E5%AE%B9%E9%87%8F%E6%98%AF%20%EF%BC%884%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（4）</span>
                <span class="choice false">A．512×16bit</span>
                <span class="choice false">B．256×8bit</span>
                <span class="choice true">C．256×16bit</span>
                <span class="choice false">D．1024×8bit</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    总存储单位=（43FFH - 4000H + 1H）= 400H = 1024 （H代表16进制）<br />
                    每个存储器芯片的容量为：1024 × 16 / 4 = 4096。<br />
                    由于每个存储单位可存储16位二进制数，所以可以采用256×16bit或者512×8bit的芯片。最好是前者，这样系统控制比较简单。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">选择软件开发工具时，应考虑功能、 （5） 、稳健性、硬件要求和性能、服务和支持。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%80%89%E6%8B%A9%E8%BD%AF%E4%BB%B6%E5%BC%80%E5%8F%91%E5%B7%A5%E5%85%B7%E6%97%B6%EF%BC%8C%E5%BA%94%E8%80%83%E8%99%91%E5%8A%9F%E8%83%BD%E3%80%81%20%EF%BC%885%EF%BC%89%20%E3%80%81%E7%A8%B3%E5%81%A5%E6%80%A7%E3%80%81%E7%A1%AC%E4%BB%B6%E8%A6%81%E6%B1%82%E5%92%8C%E6%80%A7%E8%83%BD%E3%80%81%E6%9C%8D%E5%8A%A1%E5%92%8C%E6%94%AF%E6%8C%81%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（5）</span>
                <span class="choice true">A．易用性</span>
                <span class="choice false">B．易维护性</span>
                <span class="choice false">C．可移植性</span>
                <span class="choice false">D．可扩充性</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    易维护性、可移植性和可扩充性一般是指软件产品本身的特性。<br />
                    易用性几可以用来描述软件产品本身的特性，也可以用来描述软件开发工具的特性。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">内聚性和耦合性是度量软件模块独立性的重要准则，软件设计时应力求 （6） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%86%85%E8%81%9A%E6%80%A7%E5%92%8C%E8%80%A6%E5%90%88%E6%80%A7%E6%98%AF%E5%BA%A6%E9%87%8F%E8%BD%AF%E4%BB%B6%E6%A8%A1%E5%9D%97%E7%8B%AC%E7%AB%8B%E6%80%A7%E7%9A%84%E9%87%8D%E8%A6%81%E5%87%86%E5%88%99%EF%BC%8C%E8%BD%AF%E4%BB%B6%E8%AE%BE%E8%AE%A1%E6%97%B6%E5%BA%94%E5%8A%9B%E6%B1%82%20%EF%BC%886%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（6）</span>
                <span class="choice false">A．高内聚，高耦合</span>
                <span class="choice true">B．高内聚，低耦合
                </span>
                <span class="choice false">C．低内聚，高耦合</span>
                <span class="choice false">D．低内聚，低耦合</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    对于软件开发来说，要追求模块内部的高内聚，模块之间的低耦合。常识！</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若某人持有盗版软件，但他本人确实不知道该软件是盗版的，则 （7） 承担侵权责任。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E6%9F%90%E4%BA%BA%E6%8C%81%E6%9C%89%E7%9B%97%E7%89%88%E8%BD%AF%E4%BB%B6%EF%BC%8C%E4%BD%86%E4%BB%96%E6%9C%AC%E4%BA%BA%E7%A1%AE%E5%AE%9E%E4%B8%8D%E7%9F%A5%E9%81%93%E8%AF%A5%E8%BD%AF%E4%BB%B6%E6%98%AF%E7%9B%97%E7%89%88%E7%9A%84%EF%BC%8C%E5%88%99%20%EF%BC%887%EF%BC%89%20%E6%89%BF%E6%8B%85%E4%BE%B5%E6%9D%83%E8%B4%A3%E4%BB%BB%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（7） </span>A．应由该软件的持有者
            </p>
            <p class="choice true">B．应由该软件的提供者
            </p>
            <p class="choice false">C．应由该软件的提供者和持有者共同
            </p>
            <p class="choice false">D．该软件的提供者和持有者都不</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    不知者无罪！</p>
            </div>
        </div>
        <div class="block">
            <p class="question">（8） 不属于知识产权的范围。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%EF%BC%888%EF%BC%89%20%E4%B8%8D%E5%B1%9E%E4%BA%8E%E7%9F%A5%E8%AF%86%E4%BA%A7%E6%9D%83%E7%9A%84%E8%8C%83%E5%9B%B4%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（8）</span>
                <span class="choice false">A．地理标志权</span>
                <span class="choice true">B．物权</span>
                <span class="choice false">C．邻接权</span>
                <span class="choice false">D．商业秘密权</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    地理标志权是世界贸易组织确认的一种新型知识产权，具有集合性、法定性、永久性、不可转让性等特点。<br />
                    邻接权，又称作品传播者权，是指与著作权相邻近的权利。<br />
                    商业秘密权是公民、企业、单位、组织享有的知识产权。商业秘密的保护范围包括所有技术信息、经营信息，以及其他与商业竞争有关的信息。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">若文件系统容许不同用户的文件可以具有相同的文件名，则操作系统应采用 （9） 来实现。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E6%96%87%E4%BB%B6%E7%B3%BB%E7%BB%9F%E5%AE%B9%E8%AE%B8%E4%B8%8D%E5%90%8C%E7%94%A8%E6%88%B7%E7%9A%84%E6%96%87%E4%BB%B6%E5%8F%AF%E4%BB%A5%E5%85%B7%E6%9C%89%E7%9B%B8%E5%90%8C%E7%9A%84%E6%96%87%E4%BB%B6%E5%90%8D%EF%BC%8C%E5%88%99%E6%93%8D%E4%BD%9C%E7%B3%BB%E7%BB%9F%E5%BA%94%E9%87%87%E7%94%A8%20%EF%BC%889%EF%BC%89%20%E6%9D%A5%E5%AE%9E%E7%8E%B0%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（9）</span>
                <span class="choice false">A．索引表</span>
                <span class="choice false">B．索引文件</span>
                <span class="choice false">C．指针</span>
                <span class="choice true">D．多级目录</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    索引表、索引文件和指针可以让不同用户访问相同的文件。<br />
                    如果是不同用户的不同文件要使用相同的文件名，使用多级目录就可以简单实现了。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">页式虚拟存储系统的逻辑地址是由页号和页内地址两部分组成，地址变换过程如下图所示。假定页面的大小为8K，图中所示的十进制逻辑地址9612经过地址变换后，形成的物理地址a应为十进制（10）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%A1%B5%E5%BC%8F%E8%99%9A%E6%8B%9F%E5%AD%98%E5%82%A8%E7%B3%BB%E7%BB%9F%E7%9A%84%E9%80%BB%E8%BE%91%E5%9C%B0%E5%9D%80%E6%98%AF%E7%94%B1%E9%A1%B5%E5%8F%B7%E5%92%8C%E9%A1%B5%E5%86%85%E5%9C%B0%E5%9D%80%E4%B8%A4%E9%83%A8%E5%88%86%E7%BB%84%E6%88%90%EF%BC%8C%E5%9C%B0%E5%9D%80%E5%8F%98%E6%8D%A2%E8%BF%87%E7%A8%8B%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E3%80%82%E5%81%87%E5%AE%9A%E9%A1%B5%E9%9D%A2%E7%9A%84%E5%A4%A7%E5%B0%8F%E4%B8%BA8K%EF%BC%8C%E5%9B%BE%E4%B8%AD%E6%89%80%E7%A4%BA%E7%9A%84%E5%8D%81%E8%BF%9B%E5%88%B6%E9%80%BB%E8%BE%91%E5%9C%B0%E5%9D%809612%E7%BB%8F%E8%BF%87%E5%9C%B0%E5%9D%80%E5%8F%98%E6%8D%A2%E5%90%8E%EF%BC%8C%E5%BD%A2%E6%88%90%E7%9A%84%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80a%E5%BA%94%E4%B8%BA%E5%8D%81%E8%BF%9B%E5%88%B6%20%EF%BC%8810%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i1" />
            </div>
            <p class="one-line-choice"><span class="number">（10）</span>
                <span class="choice false">A．42380</span>
                <span class="choice true">B．25996</span>
                <span class="choice false">C．9612</span>
                <span class="choice false">D．8192</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    每页8K（十六进制）=8192（十进制），9612（十进制）=8192（十进制）+1420（十进制）。<br />
                    从地址映射表可以看到页1对应物理块3，因此地址9612（十进制）的物理存储位置=8192（十进制）× 3 + 1420（十进制）= 25996。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">按照美国制定的光纤通信标准SONET，OC-48的线路速率是 （11） Mb/s。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%89%E7%85%A7%E7%BE%8E%E5%9B%BD%E5%88%B6%E5%AE%9A%E7%9A%84%E5%85%89%E7%BA%A4%E9%80%9A%E4%BF%A1%E6%A0%87%E5%87%86SONET%EF%BC%8COC-48%E7%9A%84%E7%BA%BF%E8%B7%AF%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8811%EF%BC%89%20Mb/s%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（11）</span>
                <span class="choice false">A．41.84</span>
                <span class="choice false">B．622.08</span>
                <span class="choice true">C．2488.32</span>
                <span class="choice false">D．9953.28</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    传输速率可参见下表：</p>
                <div class="img-center">
                    <img style="width:100%;max-width:25em;" id="i2" />
                </div>
            </div>
        </div>
        <div class="block">
            <p class="question">关于交换机，下面说法中错误的是 （12） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E4%BA%A4%E6%8D%A2%E6%9C%BA%EF%BC%8C%E4%B8%8B%E9%9D%A2%E8%AF%B4%E6%B3%95%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8812%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（12） </span>A．以太网交换机根据MAC地址进行交换
            </p>
            <p class="choice false">B．帧中继交换机根据虚电路号DLCI进行交换
            </p>
            <p class="choice false">C．三层交换机根据网络层地址进行转发，并根据MAC地址进行交换
            </p>
            <p class="choice true">D．ATM交换机根据虚电路标识和MAC地址进行交换</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    ATM交换机是根据VPI（Virtual Path Identifier，虚电路标识）和VCI（Virtual Channel Identifier，虚信道标识）进行交换的。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于路由器，下列说法中正确的是 （13） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E8%B7%AF%E7%94%B1%E5%99%A8%EF%BC%8C%E4%B8%8B%E5%88%97%E8%AF%B4%E6%B3%95%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8813%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（13） </span>A．路由器处理的信息量比交换机少，因而转发速度比交换机快
            </p>
            <p class="choice false">B．对于同一目标，路由器只提供延迟最小的最佳路由
            </p>
            <p class="choice true">C．通常的路由器可以支持多种网络层协议，并提供不同协议之间的分组转换
            </p>
            <p class="choice false">D．路由器不但能够根据逻辑地址进行转发，而且可以根据物理地址进行转发</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    路由器是第三层设备，要处理的内容比第二层设备交换机要多，因而转发速度比交换机慢。<br />
                    虽然一些路由协议可以将延迟作为参数进行路由选择，但路由协议使用最多的参数是传输距离，此外还有其他的一些参数。<br />
                    路由器只能够根据逻辑地址进行转发。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于DPSK调制技术的描述，正确的是 （14） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8EDPSK%E8%B0%83%E5%88%B6%E6%8A%80%E6%9C%AF%E7%9A%84%E6%8F%8F%E8%BF%B0%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8814%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（14） </span>A．不同的码元幅度不同
            </p>
            <p class="choice true">B．不同的码元前沿有不同的相位改变
            </p>
            <p class="choice false">C．由四种相位不同的码元组成
            </p>
            <p class="choice false">D．由不同的频率组成不同的码元</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    DPSK（Differential Phase Shift Keying，差分移相键控）是利用调制信号前后码元之间载波相对相位的变化来传递信息的。</p>
            </div>
        </div>
       
        <div class="block">
            <p class="question">T1载波每个信道的数据速率为 （16） ，T1信道的总数据速率为 （17） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=T1%E8%BD%BD%E6%B3%A2%E6%AF%8F%E4%B8%AA%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8816%EF%BC%89%20%EF%BC%8CT1%E4%BF%A1%E9%81%93%E7%9A%84%E6%80%BB%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8817%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（16）</span>
                <span class="choice false">A．32kb/s</span>
                <span class="choice false">B．56kb/s</span>
                <span class="choice true">C．64kb/s</span>
                <span class="choice false">D．96kb/s</span>
            </p>
            <p class="one-line-choice"><span class="number">（17）</span>
                <span class="choice true">A．1.544Mb/s</span>
                <span class="choice false">B．6.312Mb/s</span>
                <span class="choice false">C．2.048Mb/s</span>
                <span class="choice false">D．4.096Mb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在电信数字通信系统中，广泛使用了PCM（Pulse code
                    Modulation，脉冲编码调制）技术。模拟电话的带宽为4kHz，根据尼奎斯特定理，编码解码器（coder-decoder，codec）采样频率需要达到每秒8000次。编码解码器每次采样，就生成一个8比特的数字信息。因此，一个模拟电话信道在数字化后对应一个64Kbps的数字信道。一个64Kbps的数字信道被称为DS0（Digital
                    Signal 0，数字信号0）。<br />
                    T1是T-载波通信系统的基础，也称一次群。T1由24个DS0信道多路复用组成，每秒8000帧。在一个帧中，为每个信道依次分配8个比特。另外每个帧还需要1个比特用于分帧控制。因此T1的帧大小为24×8+1=193比特，T1的速率为193×8000=1.544Mbps。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">设信道带宽为4000Hz，调制为4种不同的码元，根据Nyquist定理，理想信道的数据速率为 （18） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%E4%BF%A1%E9%81%93%E5%B8%A6%E5%AE%BD%E4%B8%BA4000Hz%EF%BC%8C%E8%B0%83%E5%88%B6%E4%B8%BA4%E7%A7%8D%E4%B8%8D%E5%90%8C%E7%9A%84%E7%A0%81%E5%85%83%EF%BC%8C%E6%A0%B9%E6%8D%AENyquist%E5%AE%9A%E7%90%86%EF%BC%8C%E7%90%86%E6%83%B3%E4%BF%A1%E9%81%93%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E4%B8%BA%20%EF%BC%8818%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（18）</span>
                <span class="choice false">A．10kb/s</span>
                <span class="choice true">B．16kb/s</span>
                <span class="choice false">C．24kb/s</span>
                <span class="choice false">D．48kb/s</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    尼奎斯特定理：最大数据传输速率 = 2H log2V bps = 2 × 4000 × log24 = 16 kb/s。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">使用ADSL拨号上网，需要在用户端安装 （19） 协议。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8ADSL%E6%8B%A8%E5%8F%B7%E4%B8%8A%E7%BD%91%EF%BC%8C%E9%9C%80%E8%A6%81%E5%9C%A8%E7%94%A8%E6%88%B7%E7%AB%AF%E5%AE%89%E8%A3%85%20%EF%BC%8819%EF%BC%89%20%E5%8D%8F%E8%AE%AE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（19）</span>
                <span class="choice false">A．PPP</span>
                <span class="choice false">B．SLIP</span>
                <span class="choice false">C．PPTP</span>
                <span class="choice true">D．PPPoE</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    PPPoE（PPP over
                    Ethernet，以太网上的PPP）是基于以太网的PPP协议，它继承了PPP拨号的用户验证和动态IP地址分配功能。宽带网络运营商在管理xDSL、HFC等接入网络时，通常使用PPPoE进行数据封装和用户验证。<br />
                    客户端的PPPoE包在ADSL Modem中封装成AAL5帧，由ATM信元传输到局端的DSLAM（ADSL汇聚设备）。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">简单邮件传输协议（SMTP）默认的端口号是 （20） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%AE%80%E5%8D%95%E9%82%AE%E4%BB%B6%E4%BC%A0%E8%BE%93%E5%8D%8F%E8%AE%AE%EF%BC%88SMTP%EF%BC%89%E9%BB%98%E8%AE%A4%E7%9A%84%E7%AB%AF%E5%8F%A3%E5%8F%B7%E6%98%AF%20%EF%BC%8820%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（20）</span>
                <span class="choice false">A．21</span>
                <span class="choice false">B．23</span>
                <span class="choice true">C．25</span>
                <span class="choice false">D．80</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    简单邮件传输协议（SMTP）默认的端口号是TCP 25端口。常识！</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在FTP协议中，控制连接是由 （21） 主动建立的。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8FTP%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%E6%8E%A7%E5%88%B6%E8%BF%9E%E6%8E%A5%E6%98%AF%E7%94%B1%20%EF%BC%8821%EF%BC%89%20%E4%B8%BB%E5%8A%A8%E5%BB%BA%E7%AB%8B%E7%9A%84%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（21）</span>
                <span class="choice false">A．服务器端</span>
                <span class="choice true">B．客户端</span>
                <span class="choice false">C．操作系统</span>
                <span class="choice false">D．服务提供商</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在FTP协议中，由客户端通过服务器的TCP 21端口向服务器发起连接。常识！</p>
            </div>
        </div>
        <div class="block">
            <p class="question">开放最短路径优先协议（OSPF）采用 （22） 算法计算最佳路由。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BC%80%E6%94%BE%E6%9C%80%E7%9F%AD%E8%B7%AF%E5%BE%84%E4%BC%98%E5%85%88%E5%8D%8F%E8%AE%AE%EF%BC%88OSPF%EF%BC%89%E9%87%87%E7%94%A8%20%EF%BC%8822%EF%BC%89%20%E7%AE%97%E6%B3%95%E8%AE%A1%E7%AE%97%E6%9C%80%E4%BD%B3%E8%B7%AF%E7%94%B1%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（22） </span>A．Dynamic-Search</p>
            <p class="choice false">B．Bellman-Ford
            </p>
            <p class="choice true">C．Dijkstra</p>
            <p class="choice false">D．Spanning-Tree</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    OSPF使用链路状态算法（L-S算法）进行路由计算，L-S算法的核心就是Dijkstra。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于OSPF协议，下列说法错误的是 （23） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8EOSPF%E5%8D%8F%E8%AE%AE%EF%BC%8C%E4%B8%8B%E5%88%97%E8%AF%B4%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8823%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（23） </span>A．OSPF的每个区域（Area）运行路由选择算法的一个实例
            </p>
            <p class="choice false">B．OSPF路由器向各个活动端口组播Hello分组来发现邻居路由器
            </p>
            <p class="choice false">C．Hello协议还用来选择指定路由器，每个区域选出一个指定路由器
            </p>
            <p class="choice true">D．OSPF协议默认的路由更新周期为30秒</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    OSPF使用Hello数据报发现邻居并建立邻接。Hello数据报以组播形式每隔一定时间（HelloInterval）发送一次。在不同网络中，HelloInterval的时间也不同。在X.25网中，HelloInterval的值为30秒；在局域网中，HelloInterval的值为10秒。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在RIP协议中，可以采用水平分割法（Split Horizon）解决路由环路问题，下面的说法中正确的是 （24） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8RIP%E5%8D%8F%E8%AE%AE%E4%B8%AD%EF%BC%8C%E5%8F%AF%E4%BB%A5%E9%87%87%E7%94%A8%E6%B0%B4%E5%B9%B3%E5%88%86%E5%89%B2%E6%B3%95%EF%BC%88Split%20Horizon%EF%BC%89%E8%A7%A3%E5%86%B3%E8%B7%AF%E7%94%B1%E7%8E%AF%E8%B7%AF%E9%97%AE%E9%A2%98%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E8%AF%B4%E6%B3%95%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8824%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（24） </span>A．把网络分割成不同的区域以减少路由循环
            </p>
            <p class="choice true">B．不要把从一个邻居学习到的路由再发送回该邻居
            </p>
            <p class="choice false">C．设置邻居之间的路由度量为无限大
            </p>
            <p class="choice false">D．路由器必须把整个路由表发送给自己的邻居</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    水平分割算法的原理是：路由器必须有选择地将路由表中的路由信息发送给相邻的其他路由器，而不是发送整个路由表。具体地说，即一条路由信息不会被发送给该信息的来源方向。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于链路状态协议与距离矢量协议的区别，以下说法中错误的是 （25） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E9%93%BE%E8%B7%AF%E7%8A%B6%E6%80%81%E5%8D%8F%E8%AE%AE%E4%B8%8E%E8%B7%9D%E7%A6%BB%E7%9F%A2%E9%87%8F%E5%8D%8F%E8%AE%AE%E7%9A%84%E5%8C%BA%E5%88%AB%EF%BC%8C%E4%BB%A5%E4%B8%8B%E8%AF%B4%E6%B3%95%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8825%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（25） </span>A．链路状态协议周期性地发布路由信息，而距离矢量协议在网络拓扑发生变化时发布路由信息
            </p>
            <p class="choice false">B．链路状态协议由网络内部指定的路由器发布路由信息，而距离矢量协议的所有路由器都发布路由信息
            </p>
            <p class="choice false">C．链路状态协议采用组播方式发布路由信息，而距离矢量协议以广播方式发布路由信息
            </p>
            <p class="choice false">D．链路状态协议发布的组播报文要求应答，这种通信方式比不要求应答的广播通信可靠</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    链路状态协议和距离矢量协议类似，都会周期性地发布路由信息。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">关于自治系统（Autonomous System，AS），以下说法错误的是 （26） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%85%B3%E4%BA%8E%E8%87%AA%E6%B2%BB%E7%B3%BB%E7%BB%9F%EF%BC%88Autonomous%20System%EF%BC%8CAS%EF%BC%89%EF%BC%8C%E4%BB%A5%E4%B8%8B%E8%AF%B4%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8826%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（26） </span>A．AS是由某一管理部门统一控制的一组网络
            </p>
            <p class="choice false">B．AS的标识是唯一的16位编号
            </p>
            <p class="choice false">C．在AS内部采用相同的路由技术，实现统一的路由策略
            </p>
            <p class="choice true">D．如果一个网络要从Internet获取路由信息，可以使用自定义的AS编号</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Internet的自治系统号是由各级互联网管理中心进行分配的，不能由网络管理者自行定义。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">TCP段头的最小长度是 （27） 字节。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=TCP%E6%AE%B5%E5%A4%B4%E7%9A%84%E6%9C%80%E5%B0%8F%E9%95%BF%E5%BA%A6%E6%98%AF%20%EF%BC%8827%EF%BC%89%20%E5%AD%97%E8%8A%82%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（27）</span>
                <span class="choice false">A．16</span>
                <span class="choice true">B．20</span>
                <span class="choice false">C．24</span>
                <span class="choice false">D．32</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    TCP 数据段为两部分，前面是头标（即段头），后面是数据。TCP头标的前 20 个字节格式是固定的，后面是可能的选项。因此TCP头标的最小长度是20个字节。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">互联网中常用的音频文件格式不包括 （28） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BA%92%E8%81%94%E7%BD%91%E4%B8%AD%E5%B8%B8%E7%94%A8%E7%9A%84%E9%9F%B3%E9%A2%91%E6%96%87%E4%BB%B6%E6%A0%BC%E5%BC%8F%E4%B8%8D%E5%8C%85%E6%8B%AC%20%EF%BC%8828%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（28）</span>
                <span class="choice false">A．Wave</span>
                <span class="choice false">B．RealAudio</span>
                <span class="choice false">C．MPEG</span>
                <span class="choice true">D．JPEG</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    JPEG是图片文件格式。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows中运行 （29） 命令后得到如下图所示的结果，该命令的作用是 （30） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%E4%B8%AD%E8%BF%90%E8%A1%8C%20%EF%BC%8829%EF%BC%89%20%E5%91%BD%E4%BB%A4%E5%90%8E%E5%BE%97%E5%88%B0%E5%A6%82%E4%B8%8B%E5%9B%BE%E6%89%80%E7%A4%BA%E7%9A%84%E7%BB%93%E6%9E%9C%EF%BC%8C%E8%AF%A5%E5%91%BD%E4%BB%A4%E7%9A%84%E4%BD%9C%E7%94%A8%E6%98%AF%20%EF%BC%8830%EF%BC%89%20%E3%80%82%3Cbr/%3E%0A%C2%A7%C2%A7">百度</a></p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i3" />
            </div>
            <p class="one-line-choice"><span class="number">（29）</span>
                <span class="choice false">A．ipconfig/all</span>
                <span class="choice false">B．ping</span>
                <span class="choice true">C．netstat</span>
                <span class="choice false">D．nslookup</span>
            </p>
            <p class="choice header_choice false"><span class="number">（30） </span>A．查看当前TCP/IP配置信息</p>
            <p class="choice false">B．测试与目的主机的连通性
            </p>
            <p class="choice true">C．显示当前所有连接及状态信息</p>
            <p class="choice false">D．查看当前DNS服务器</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在Windows中可以使用 ipconfig 命令获得主机配置信息，包括 IP 地址、子网掩码和默认网关。使用带 /all 选项的 ipconfig
                    命令时，将给出所有接口的详细配置报告，包括任何已配置的串行端口。<br />
                    Ping 命令有助于验证 IP 级的连通性。发现和解决问题时，可以使用 Ping 向目标主机名或 IP 地址发送 ICMP 回应请求。<br />
                    可以使用 netstat 命令显示协议统计信息和当前的 TCP/IP 连接。netstat -a 命令将显示所有连接，而 netstat -r 显示路由表和活动连接。netstat -e 命令将显示
                    Ethernet 统计信息，而 netstat -s 显示每个协议的统计信息。<br />
                    Nslookup用来获取域名系统 (DNS) 名称服务器的信息。<br />
                    很显然，图中显示的内容是当前所有连接及其状态信息。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">要使Samba服务器在网上邻居中出现的主机为smbserver，其配置文件smb.conf中应包含 （31） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%A6%81%E4%BD%BFSamba%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%9C%A8%E7%BD%91%E4%B8%8A%E9%82%BB%E5%B1%85%E4%B8%AD%E5%87%BA%E7%8E%B0%E7%9A%84%E4%B8%BB%E6%9C%BA%E4%B8%BAsmbserver%EF%BC%8C%E5%85%B6%E9%85%8D%E7%BD%AE%E6%96%87%E4%BB%B6smb.conf%E4%B8%AD%E5%BA%94%E5%8C%85%E5%90%AB%20%EF%BC%8831%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（31） </span>A．workgroup=smbserver</p>
            <p class="choice true">B．netbiosname=smbserver
            </p>
            <p class="choice false">C．serverstring=smbserver</p>
            <p class="choice false">D．guestaccount=smbserver</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在Linux / Unix中，配置文件smb.conf规定网上邻居中出现的主机要采用netbios name定义。对于不熟悉这些配置的人来说，可以采用排除法缩小选择范围。例如：<br />
                    workgroup这个关键字主要是用于描述工作组有关的信息，因此A可以排除；<br />
                    Guest这个关键字主要是用于描述用户有关的信息，因此D可以排除。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某Apache服务器的配置文件httpd.conf包含如下所示配置项。在 （32）
                处选择合适的选项，使得用户可通过http://www.test.cn访问到该Apache服务器；当用户访问http://111.25.4.30:80时，会访问到 （33） 虚拟主机。<br />
                Name VirtualHost 111.25.4.30:80<br />
                &lt;VirtualHost 111.25.4.30:80&gt;<br />
                ServerName www.othertest.com<br />
                DocumentRoot /www/othertest<br />
                &lt;/VirtualHost&gt;<br />
                &lt;VirtualHost 111.25.4.30:80&gt;<br />
                ServerName （32）<br />
                DocumentRoot /www/otherdate<br />
                &lt;/VirtualHost&gt;<br />
                &lt;VirtualHost 111.25.4.30:80&gt;<br />
                ServerName www.test.com<br />
                ServerAlias test.com *.test.com<br />
                DocumentRoot /www/test<br />
                &lt;/VirtualHost&gt;&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90Apache%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%9A%84%E9%85%8D%E7%BD%AE%E6%96%87%E4%BB%B6httpd.conf%E5%8C%85%E5%90%AB%E5%A6%82%E4%B8%8B%E6%89%80%E7%A4%BA%E9%85%8D%E7%BD%AE%E9%A1%B9%E3%80%82%E5%9C%A8%20%EF%BC%8832%EF%BC%89%20%E5%A4%84%E9%80%89%E6%8B%A9%E5%90%88%E9%80%82%E7%9A%84%E9%80%89%E9%A1%B9%EF%BC%8C%E4%BD%BF%E5%BE%97%E7%94%A8%E6%88%B7%E5%8F%AF%E9%80%9A%E8%BF%87http%3A//www.test.cn%E8%AE%BF%E9%97%AE%E5%88%B0%E8%AF%A5Apache%E6%9C%8D%E5%8A%A1%E5%99%A8%EF%BC%9B%E5%BD%93%E7%94%A8%E6%88%B7%E8%AE%BF%E9%97%AEhttp%3A//111.25.4.30%3A80%E6%97%B6%EF%BC%8C%E4%BC%9A%E8%AE%BF%E9%97%AE%E5%88%B0%20%EF%BC%8833%EF%BC%89%20%E8%99%9A%E6%8B%9F%E4%B8%BB%E6%9C%BA%E3%80%82%3Cbr/%3E%0AName%20VirtualHost%20111.25.4.30%3A80%3Cbr/%3E%0A%3CVirtualHost%20111.25.4.30%3A80%3E%3Cbr/%3E%0AServerName%20www.othertest.com%3Cbr/%3E%0ADocumentRoot%20/www/othertest%3Cbr/%3E%0A%3C/VirtualHost%3E%3Cbr/%3E%0A%3CVirtualHost%20111.25.4.30%3A80%3E%3Cbr/%3E%0AServerName%20%EF%BC%8832%EF%BC%89%3Cbr/%3E%0ADocumentRoot%20/www/otherdate%3Cbr/%3E%0A%3C/VirtualHost%3E%3Cbr/%3E%0A%3CVirtualHost%20111.25.4.30%3A80%3E%3Cbr/%3E%0AServerName%20www.test.com%3Cbr/%3E%0AServerAlias%20test.com%20%2A.test.com%3Cbr/%3E%0ADocumentRoot%20/www/test%3Cbr/%3E%0A%3C/VirtualHost%3E">百度</a>
            </p>
            <p class="choice header_choice false"><span class="number">（32） </span>A．www.othertest.com</p>
            <p class="choice false">B．www.test.com
            </p>
            <p class="choice true">C．www.test.cn</p>
            <p class="choice false">D．ftp.test.com</p>
            <p class="choice header_choice true"><span class="number">（33） </span>A．www.othertest.com</p>
            <p class="choice false">B．www.test.com
            </p>
            <p class="choice false">C．www.test.cn</p>
            <p class="choice false">D．ftp.test.com</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    参考前几行的配置信息“ServerName
                    www.othertest.com”，可以知道（32）处应该填入www.test.cn。按照前后的次序，访问http://111.25.4.30:80时，会首先访问到www.othertest.com这个虚拟主机。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在配置IIS时，如果想禁止某些IP地址访问web服务器，应在“默认web站点”的属性对话框中 （34） 选项卡中进行配置。IIS的发布目录 （35） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E9%85%8D%E7%BD%AEIIS%E6%97%B6%EF%BC%8C%E5%A6%82%E6%9E%9C%E6%83%B3%E7%A6%81%E6%AD%A2%E6%9F%90%E4%BA%9BIP%E5%9C%B0%E5%9D%80%E8%AE%BF%E9%97%AEweb%E6%9C%8D%E5%8A%A1%E5%99%A8%EF%BC%8C%E5%BA%94%E5%9C%A8%E2%80%9C%E9%BB%98%E8%AE%A4web%E7%AB%99%E7%82%B9%E2%80%9D%E7%9A%84%E5%B1%9E%E6%80%A7%E5%AF%B9%E8%AF%9D%E6%A1%86%E4%B8%AD%20%EF%BC%8834%EF%BC%89%20%E9%80%89%E9%A1%B9%E5%8D%A1%E4%B8%AD%E8%BF%9B%E8%A1%8C%E9%85%8D%E7%BD%AE%E3%80%82IIS%E7%9A%84%E5%8F%91%E5%B8%83%E7%9B%AE%E5%BD%95%20%EF%BC%8835%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（34）</span>
                <span class="choice true">A．目录安全性</span>
                <span class="choice false">B．文档
                </span>
                <span class="choice false">C．主目录</span>
                <span class="choice false">D．ISAPI筛选器</span>
            </p>
            <p class="choice header_choice false"><span class="number">（35） </span>A．只能够配置在c:\inetpub\wwwroot上
            </p>
            <p class="choice false">B．只能够配置在本地磁盘上
            </p>
            <p class="choice false">C．只能够配置在联网的其他计算机上
            </p>
            <p class="choice true">D．既能够配置在本地的磁盘，也能配置在联网的其它计算机上</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§<br />
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">活动目录（Active Directory）是由组织单元、域、 （36） 和域林构成的层次结构，安装活动目录要求分区的文件系统为 （37） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%B4%BB%E5%8A%A8%E7%9B%AE%E5%BD%95%EF%BC%88Active%20Directory%EF%BC%89%E6%98%AF%E7%94%B1%E7%BB%84%E7%BB%87%E5%8D%95%E5%85%83%E3%80%81%E5%9F%9F%E3%80%81%20%EF%BC%8836%EF%BC%89%20%E5%92%8C%E5%9F%9F%E6%9E%97%E6%9E%84%E6%88%90%E7%9A%84%E5%B1%82%E6%AC%A1%E7%BB%93%E6%9E%84%EF%BC%8C%E5%AE%89%E8%A3%85%E6%B4%BB%E5%8A%A8%E7%9B%AE%E5%BD%95%E8%A6%81%E6%B1%82%E5%88%86%E5%8C%BA%E7%9A%84%E6%96%87%E4%BB%B6%E7%B3%BB%E7%BB%9F%E4%B8%BA%20%EF%BC%8837%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（36）</span>
                <span class="choice false">A．超域</span>
                <span class="choice true">B．域树</span>
                <span class="choice false">C．团体</span>
                <span class="choice false">D．域控制器</span>
            </p>
            <p class="one-line-choice"><span class="number">（37）</span>
                <span class="choice false">A．FAT16</span>
                <span class="choice false">B．FAT32</span>
                <span class="choice false">C．ext2</span>
                <span class="choice true">D．NTFS</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    活动目录（Active
                    Directory）服务是一个分布式的目录服务，它把网络中分布在不同计算机的信息和资源通过统一的标准组织起来，向服务使用者提供统一友好的访问和管理接口，同时，提高网络资源的利用效率。<br />
                    域是网络名称空间的一部分，是活动目录逻辑结构的核心单元。<br />
                    域树是由多个域通过信任关系连接起来形成的，这些域共享同一表结构和配置。域树是一个连续的名称空间。活动目录一般包括一个或多个域树。<br />
                    域林是一个或多个域树的集合，这些域树共享同一表结构、配置和全局目录，但是不构成连续名称空间。<br />
                    安装活动目录要求分区的文件系统为NTFS。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某DHCP服务器的地址池范围为192.36.96.101~192.36.96.150，该网段下某Windows工作站启动后，自动获得的IP地址是169.254.220.167，这是因为
                （38） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90DHCP%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%9A%84%E5%9C%B0%E5%9D%80%E6%B1%A0%E8%8C%83%E5%9B%B4%E4%B8%BA192.36.96.101%7E192.36.96.150%EF%BC%8C%E8%AF%A5%E7%BD%91%E6%AE%B5%E4%B8%8B%E6%9F%90Windows%E5%B7%A5%E4%BD%9C%E7%AB%99%E5%90%AF%E5%8A%A8%E5%90%8E%EF%BC%8C%E8%87%AA%E5%8A%A8%E8%8E%B7%E5%BE%97%E7%9A%84IP%E5%9C%B0%E5%9D%80%E6%98%AF169.254.220.167%EF%BC%8C%E8%BF%99%E6%98%AF%E5%9B%A0%E4%B8%BA%20%EF%BC%8838%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（38） </span>A．DHCP服务器提供保留的IP地址
            </p>
            <p class="choice true">B．DHCP服务器不工作
            </p>
            <p class="choice false">C．DHCP服务器设置租约时间太长
            </p>
            <p class="choice false">D．工作站接到了网段内其他DHCP服务器提供的地址</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Windows操作系统在无法通过DHCP获取IP地址时，会自动配置IP地址为169.254.×.×。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">以下关于FTP和TFTP描述中，正确的是 （39） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%85%B3%E4%BA%8EFTP%E5%92%8CTFTP%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8839%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（39） </span>A．FTP和TFTP都基于TCP协议
            </p>
            <p class="choice false">B．FTP和TFTP都基于UDP协议
            </p>
            <p class="choice true">C．FTP基于TCP协议，TFTP基于UDP协议
            </p>
            <p class="choice false">D．FTP基于UDP协议，TFTP基于TCP协议</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    FTP (File Transfer Protocol，文件传输协议) 是一种基于TDP 的文件传输协议，命令端口为21，数据端口为20。<br />
                    TFTP (Trivial File Transfer Protocol，简单文件传输协议) 是一种基于UDP 的传输文件的简单协议，端口号为69。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">Needham-Schroeder协议是基于 （41） 的认证协议。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=Needham-Schroeder%E5%8D%8F%E8%AE%AE%E6%98%AF%E5%9F%BA%E4%BA%8E%20%EF%BC%8841%EF%BC%89%20%E7%9A%84%E8%AE%A4%E8%AF%81%E5%8D%8F%E8%AE%AE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（41）</span>
                <span class="choice true">A．共享密钥</span>
                <span class="choice false">B．公钥</span>
                <span class="choice false">C．报文摘要</span>
                <span class="choice false">D．数字证书</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    Needham-Schroeder是较为复杂的多路质询—回应协议，其过程如下图所示：<br />
                    §§<br />
                    Needham-Schroeder使用了与KDC的共享密钥来实现认证。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某web网站向CA申请了数字证书。用户登录该网站时，通过验证 （42） ，可确认该数字证书的有效性，从而 （43） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90web%E7%BD%91%E7%AB%99%E5%90%91CA%E7%94%B3%E8%AF%B7%E4%BA%86%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E3%80%82%E7%94%A8%E6%88%B7%E7%99%BB%E5%BD%95%E8%AF%A5%E7%BD%91%E7%AB%99%E6%97%B6%EF%BC%8C%E9%80%9A%E8%BF%87%E9%AA%8C%E8%AF%81%20%EF%BC%8842%EF%BC%89%20%EF%BC%8C%E5%8F%AF%E7%A1%AE%E8%AE%A4%E8%AF%A5%E6%95%B0%E5%AD%97%E8%AF%81%E4%B9%A6%E7%9A%84%E6%9C%89%E6%95%88%E6%80%A7%EF%BC%8C%E4%BB%8E%E8%80%8C%20%EF%BC%8843%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（42）</span>
                <span class="choice true">A．CA的签名</span>
                <span class="choice false">B．网站的签名</span>
                <span class="choice false">C．会话密钥</span>
                <span class="choice false">D．DES密码</span>
            </p>
            <p class="one-line-choice"><span class="number">（43）</span>
                <span class="choice false">A．向网站确认自己的身份</span>
                <span class="choice false">B．获取访问网站的权限
                </span>
                <span class="choice false">C．和网站进行双向认证</span>
                <span class="choice true">D．验证该网站的真伪</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    一个标准的X.509数字安全证书包含有证书发行机构（CA）对证书的签名。CA对证书内除本签名字段以外的所有字段的数字签名。签名中包含用CA的私有密钥进行加密的证书散列值、签名算法的标识符和参数。用户可以通过检验CA的签名来判断证书的有效性。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">实现VPN的关键技术主要有隧道技术、加解密技术、 （44） 和身份认证技术。如果需要在传输层实现VPN，可选的协议是 （45） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E5%AE%9E%E7%8E%B0VPN%E7%9A%84%E5%85%B3%E9%94%AE%E6%8A%80%E6%9C%AF%E4%B8%BB%E8%A6%81%E6%9C%89%E9%9A%A7%E9%81%93%E6%8A%80%E6%9C%AF%E3%80%81%E5%8A%A0%E8%A7%A3%E5%AF%86%E6%8A%80%E6%9C%AF%E3%80%81%20%EF%BC%8844%EF%BC%89%20%E5%92%8C%E8%BA%AB%E4%BB%BD%E8%AE%A4%E8%AF%81%E6%8A%80%E6%9C%AF%E3%80%82%E5%A6%82%E6%9E%9C%E9%9C%80%E8%A6%81%E5%9C%A8%E4%BC%A0%E8%BE%93%E5%B1%82%E5%AE%9E%E7%8E%B0VPN%EF%BC%8C%E5%8F%AF%E9%80%89%E7%9A%84%E5%8D%8F%E8%AE%AE%E6%98%AF%20%EF%BC%8845%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（44）</span>
                <span class="choice false">A．入侵检测技术</span>
                <span class="choice false">B．病毒防治技术
                </span>
                <span class="choice false">C．安全审计技术</span>
                <span class="choice true">D．密钥管理技术</span>
            </p>
            <p class="one-line-choice"><span class="number">（45）</span>
                <span class="choice false">A．L2TP</span>
                <span class="choice false">B．PPTP
                </span>
                <span class="choice true">C．TLS</span>
                <span class="choice false">D．IPSec</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    入侵检测技术和病毒防治技术都与VPN没有什么关系。安全审计技术可以在VPN中应用，但不是VPN本身的组成部分。<br />
                    L2TP和PPTP可以实现网络接口层的VPN，IPSec可以实现网际层的VPN，而TLS可以实现传输层的VPN。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在网络管理中要防护各种安全威胁。在SNMPv3中，不必要或无法防护的安全威胁是 （46） 。&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%9C%A8%E7%BD%91%E7%BB%9C%E7%AE%A1%E7%90%86%E4%B8%AD%E8%A6%81%E9%98%B2%E6%8A%A4%E5%90%84%E7%A7%8D%E5%AE%89%E5%85%A8%E5%A8%81%E8%83%81%E3%80%82%E5%9C%A8SNMPv3%E4%B8%AD%EF%BC%8C%E4%B8%8D%E5%BF%85%E8%A6%81%E6%88%96%E6%97%A0%E6%B3%95%E9%98%B2%E6%8A%A4%E7%9A%84%E5%AE%89%E5%85%A8%E5%A8%81%E8%83%81%E6%98%AF%20%EF%BC%8846%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（46） </span>A．篡改管理信息：通过改变传输中的SNMP报文实施未经授权的管理操作
            </p>
            <p class="choice true">B．通信分析：第三者分析管理实体之间的通信规律，从而获取管理信息
            </p>
            <p class="choice false">C．假冒合法用户：未经授权的用户冒充授权用户，企图实施管理操作
            </p>
            <p class="choice false">D．消息泄露：SNMP引擎之间交换的信息被第三者偷听</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    SNMPv3
                    中增加的最重要功能是安全认证。在SNMPv1和SNMPv2中只是使用共同体的概念提供了有限的安全识别，没有任何保密性。SNMPv3引入了基于用户的安全模型，来保证消息安全性。目前该安全模型定义了使用HMAC-MD5-96和HMAC-SHA-96作为可能的鉴别协议，使用CBC-DES作为保密协议。<br />
                    同时SNMPv3也加强了远程控制，引入了VACM（View-based Access Control Model，基于视图的访问控制模型）用于访问控制。<br />
                    但是，SNMPv3没有阻止第三者进行通信分析的能力。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">SNMP协议实体发送请求和应答报文的默认端口号是 （47） ，SNMP代理发送陷入报文（trap）的默认端口号是 （48） 。&emsp;<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=SNMP%E5%8D%8F%E8%AE%AE%E5%AE%9E%E4%BD%93%E5%8F%91%E9%80%81%E8%AF%B7%E6%B1%82%E5%92%8C%E5%BA%94%E7%AD%94%E6%8A%A5%E6%96%87%E7%9A%84%E9%BB%98%E8%AE%A4%E7%AB%AF%E5%8F%A3%E5%8F%B7%E6%98%AF%20%EF%BC%8847%EF%BC%89%20%EF%BC%8CSNMP%E4%BB%A3%E7%90%86%E5%8F%91%E9%80%81%E9%99%B7%E5%85%A5%E6%8A%A5%E6%96%87%EF%BC%88trap%EF%BC%89%E7%9A%84%E9%BB%98%E8%AE%A4%E7%AB%AF%E5%8F%A3%E5%8F%B7%E6%98%AF%20%EF%BC%8848%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="number">（47）</span>
                <span class="choice false">A．160</span>
                <span class="choice true">B．161</span>
                <span class="choice false">C．162</span>
                <span class="choice false">D．163</span>
            </p>
            <p class="one-line-choice"><span class="number">（48）</span>
                <span class="choice false">A．160</span>
                <span class="choice false">B．161</span>
                <span class="choice true">C．162</span>
                <span class="choice false">D．163</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    在SNMP的管理操作中，Set和Get操作属于轮询方式，由管理者发出，使用端口为UDP 161；Trap操作属于基于中断的方式，由被管代理发出，使用端口为UDP 162。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面关于几个网络管理工具的描述中，错误的是 （49） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E5%87%A0%E4%B8%AA%E7%BD%91%E7%BB%9C%E7%AE%A1%E7%90%86%E5%B7%A5%E5%85%B7%E7%9A%84%E6%8F%8F%E8%BF%B0%E4%B8%AD%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%20%EF%BC%8849%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（49） </span>A．netstat可用于显示IP、TCP、UDP、ICMP等协议的统计数据
            </p>
            <p class="choice false">B．sniffer能够使网络接口处于杂收模式，从而可截获网络上传输的分组
            </p>
            <p class="choice true">C．winipcfg采用MS-DOS工作方式显示网络适配器和主机的有关信息
            </p>
            <p class="choice false">D．tracert可以发现数据包到达目标主机所经过的路由器和到达时间</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    winipcfg采用窗口显示网络适配器和主机的有关信息。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">在Windows XP中用事件查看器查看日志文件，可看到的日志包括 （50） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8Windows%20XP%E4%B8%AD%E7%94%A8%E4%BA%8B%E4%BB%B6%E6%9F%A5%E7%9C%8B%E5%99%A8%E6%9F%A5%E7%9C%8B%E6%97%A5%E5%BF%97%E6%96%87%E4%BB%B6%EF%BC%8C%E5%8F%AF%E7%9C%8B%E5%88%B0%E7%9A%84%E6%97%A5%E5%BF%97%E5%8C%85%E6%8B%AC%20%EF%BC%8850%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（50） </span>A．用户访问日志、安全性日志和系统日志
            </p>
            <p class="choice true">B．应用程序日志、安全性日志和系统日志
            </p>
            <p class="choice false">C．网络攻击日志、安全性日志和记帐日志
            </p>
            <p class="choice false">D．网络连接日志、安全性日志和服务日志</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">有4个子网：10.1.201.0/24、10.1.203.0/24、10.1.207.0/24和10.1.199.0/24，经路由汇聚后得到的网络地址是 （51）
                。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9C%894%E4%B8%AA%E5%AD%90%E7%BD%91%EF%BC%9A10.1.201.0/24%E3%80%8110.1.203.0/24%E3%80%8110.1.207.0/24%E5%92%8C10.1.199.0/24%EF%BC%8C%E7%BB%8F%E8%B7%AF%E7%94%B1%E6%B1%87%E8%81%9A%E5%90%8E%E5%BE%97%E5%88%B0%E7%9A%84%E7%BD%91%E7%BB%9C%E5%9C%B0%E5%9D%80%E6%98%AF%20%EF%BC%8851%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice true"><span class="number">（51） </span>A．10.1.192.0/20</p>
            <p class="choice false">B．10.1.192.0/21
            </p>
            <p class="choice false">C．10.1.200.0/21</p>
            <p class="choice false">D．10.1.224.0/20</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    前两个字节和最后一个字节不做比较了，只比较第三个字节。<br />
                    201→11001001<br />
                    203→11001011<br />
                    207→11001111<br />
                    199→11000111<br />
                    显然，这四个数字只有前四位是完全相同的，因此汇聚后的网络的第三个字节应该是11000000→192。汇聚后的网络的掩码中1的数量应该有8+8+4=20。<br />
                    因此答案是10.1.192.0/20。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">私网地址用于企业内部IP地址分配，网络标准规定的私网地址有 （52） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E7%94%A8%E4%BA%8E%E4%BC%81%E4%B8%9A%E5%86%85%E9%83%A8IP%E5%9C%B0%E5%9D%80%E5%88%86%E9%85%8D%EF%BC%8C%E7%BD%91%E7%BB%9C%E6%A0%87%E5%87%86%E8%A7%84%E5%AE%9A%E7%9A%84%E7%A7%81%E7%BD%91%E5%9C%B0%E5%9D%80%E6%9C%89%20%EF%BC%8852%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（52） </span>A．A类有10个：10.0.0.0~20.0.0.0
            </p>
            <p class="choice false">B．B类有16个：172.0.0.0~172.15.0.0
            </p>
            <p class="choice true">C．C类有256个：192.168.0.0~192.168.255.0
            </p>
            <p class="choice false">D．D类有1个：244.0.0.0</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    私网地址如下表所示：<br />
                    §§</p>
            </div>
        </div>
        <div class="block">
            <p class="question">下面的地址中，属于本地回路地址的是 （53） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E7%9A%84%E5%9C%B0%E5%9D%80%E4%B8%AD%EF%BC%8C%E5%B1%9E%E4%BA%8E%E6%9C%AC%E5%9C%B0%E5%9B%9E%E8%B7%AF%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF%20%EF%BC%8853%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（53） </span>A．10.10.10.1</p>
            <p class="choice false">B．255.255.255.0
            </p>
            <p class="choice true">C．127.0.0.1</p>
            <p class="choice false">D．192.0.0.1</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    所有形如127.xx.yy.zz的地址，都作为保留地址，用于回路（loopback）测试。</p>
            </div>
        </div>
        <div class="block">
            <p class="question">某校园网的地址是202.100.192.0/18，要把该网络分成30个子网，则子网掩码应该是 （54） ，每个子网可分配的主机地址数是 （55） 。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9F%90%E6%A0%A1%E5%9B%AD%E7%BD%91%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF202.100.192.0/18%EF%BC%8C%E8%A6%81%E6%8A%8A%E8%AF%A5%E7%BD%91%E7%BB%9C%E5%88%86%E6%88%9030%E4%B8%AA%E5%AD%90%E7%BD%91%EF%BC%8C%E5%88%99%E5%AD%90%E7%BD%91%E6%8E%A9%E7%A0%81%E5%BA%94%E8%AF%A5%E6%98%AF%20%EF%BC%8854%EF%BC%89%20%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%AD%90%E7%BD%91%E5%8F%AF%E5%88%86%E9%85%8D%E7%9A%84%E4%B8%BB%E6%9C%BA%E5%9C%B0%E5%9D%80%E6%95%B0%E6%98%AF%20%EF%BC%8855%EF%BC%89%20%E3%80%82">百度</a></p>
            <p class="choice header_choice false"><span class="number">（54） </span>A．255.255.200.0</p>
            <p class="choice false">B．255.255.224.0
            </p>
            <p class="choice true">C．255.255.254.0</p>
            <p class="choice false">D．255.255.255.0</p>
            <p class="one-line-choice"><span class="number">（55）</span>
                <span class="choice false">A．32</span>
                <span class="choice false">B．64</span>
                <span class="choice true">C．510</span>
                <span class="choice false">D．512</span>
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    由于24 < 30 < 25，因此子网位的长度应该是5位，所以掩码中1的数量应该为18+5=23，转换后得到掩码255.255.254.0，每个子网可分配主机地址数是29-2=510。</p> </div>
                        </div> <div class="block">
                        <p class="question">在路由器的特权模式下键入命令setup，则路由器进入 （56） 模式。&emsp;<a class="baidu" target="_blank"
                                href="https://www.baidu.com/s?wd=%E5%9C%A8%E8%B7%AF%E7%94%B1%E5%99%A8%E7%9A%84%E7%89%B9%E6%9D%83%E6%A8%A1%E5%BC%8F%E4%B8%8B%E9%94%AE%E5%85%A5%E5%91%BD%E4%BB%A4setup%EF%BC%8C%E5%88%99%E8%B7%AF%E7%94%B1%E5%99%A8%E8%BF%9B%E5%85%A5%20%EF%BC%8856%EF%BC%89%20%E6%A8%A1%E5%BC%8F%E3%80%82">百度</a></p>
                        <p class="one-line-choice"><span class="number">（56）</span>
                            <span class="choice false">A．用户命令状态</span>
                            <span class="choice false">B．局部配置状态
                            </span>
                            <span class="choice false">C．特权命令状态</span>
                            <span class="choice true">D．设置对话状态</span>
                        </p>
                        <div class="explain">
                            <p class="explain-header"> 试题解析：</p>
                            <p class="explain-content">
                                设置对话模式是一台新的交换机开机时自动进入的模式，在特权命令模式（在用户模式下输入enable）下使用setup命令也可以进入此模式，这时可以通过对话方式对交换机进行设置。</p>
                        </div>
            </div>
            <div class="block">
                <p class="question">要进入以太网端口配置模式，下面的路由器命令中，哪一条是正确的？ （57） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%A6%81%E8%BF%9B%E5%85%A5%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%AB%AF%E5%8F%A3%E9%85%8D%E7%BD%AE%E6%A8%A1%E5%BC%8F%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E8%B7%AF%E7%94%B1%E5%99%A8%E5%91%BD%E4%BB%A4%E4%B8%AD%EF%BC%8C%E5%93%AA%E4%B8%80%E6%9D%A1%E6%98%AF%E6%AD%A3%E7%A1%AE%E7%9A%84%EF%BC%9F%20%EF%BC%8857%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（57） </span>A．R1(config)#interfacee0</p>
                <p class="choice false">B．R1>interfacee0
                </p>
                <p class="choice false">C．R1>linee0</p>
                <p class="choice false">D．R1(config)#lines0</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        要从全局配置模式才能进入端口配置模式。全局配置模式的提示符是：<br />
                        <设备名>(config)#<br />
                            进入端口配置模式的命令是 interface。
                    </p>
                </div>
            </div>
            <div class="block">
                <p class="question">要显示路由器的运行配置，下面的路由器命令中，哪一条是正确的？ （58） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%A6%81%E6%98%BE%E7%A4%BA%E8%B7%AF%E7%94%B1%E5%99%A8%E7%9A%84%E8%BF%90%E8%A1%8C%E9%85%8D%E7%BD%AE%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E8%B7%AF%E7%94%B1%E5%99%A8%E5%91%BD%E4%BB%A4%E4%B8%AD%EF%BC%8C%E5%93%AA%E4%B8%80%E6%9D%A1%E6%98%AF%E6%AD%A3%E7%A1%AE%E7%9A%84%EF%BC%9F%20%EF%BC%8858%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（58） </span>A．R1#showrunning-config</p>
                <p class="choice false">B．R1#showstartup-config
                </p>
                <p class="choice false">C．R1>showstartup-config</p>
                <p class="choice false">D．R1>showrunning-config</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        running-config是运行配置，startup-config是启动配置。<br />
                        该命令必须在进入特权模式后才可以使用，提示符是<设备名>#。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下面关于802.1q协议的说明中正确的是 （59） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E802.1q%E5%8D%8F%E8%AE%AE%E7%9A%84%E8%AF%B4%E6%98%8E%E4%B8%AD%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF%20%EF%BC%8859%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice true"><span class="number">（59） </span>A．这个协议在原来的以太网帧中增加了4个字节的帧标记字段
                </p>
                <p class="choice false">B．这个协议是IETF制定的
                </p>
                <p class="choice false">C．这个协议在以太网帧的头部增加了26字节的帧标记字段
                </p>
                <p class="choice false">D．这个协议在帧尾部附加了4字节的CRC校验码</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        这道题目有些难，一般人不会看到这么细，不过可以用排除法进行分析：<br />
                        802.1q协议是IEEE制定的，属于LLC层协议。<br />
                        CRC校验是MAC层协议的事情，LLC层不管此事。<br />
                        至于帧标记字段，任何一个稍微常识的人都会觉得26字节的帧标记字段实在是过于夸张了。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">配置VLAN有多种方法，下面哪一条不是配置VLAN的方法？ （60） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%85%8D%E7%BD%AEVLAN%E6%9C%89%E5%A4%9A%E7%A7%8D%E6%96%B9%E6%B3%95%EF%BC%8C%E4%B8%8B%E9%9D%A2%E5%93%AA%E4%B8%80%E6%9D%A1%E4%B8%8D%E6%98%AF%E9%85%8D%E7%BD%AEVLAN%E7%9A%84%E6%96%B9%E6%B3%95%EF%BC%9F%20%EF%BC%8860%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（60） </span>A．把交换机端口指定给某个VLAN
                </p>
                <p class="choice false">B．把MAC地址指定给某个VLAN
                </p>
                <p class="choice true">C．由DHCP服务器动态地为计算机分配VLAN
                </p>
                <p class="choice false">D．根据上层协议来划分VLAN</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        配置VLAN的方法有很多种，就是没有通过DHCP动态划分的那一种。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">下面哪个设备可以转发不同VLAN之间的通信？ （61） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%93%AA%E4%B8%AA%E8%AE%BE%E5%A4%87%E5%8F%AF%E4%BB%A5%E8%BD%AC%E5%8F%91%E4%B8%8D%E5%90%8CVLAN%E4%B9%8B%E9%97%B4%E7%9A%84%E9%80%9A%E4%BF%A1%EF%BC%9F%20%EF%BC%8861%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（61）</span>
                    <span class="choice false">A．二层交换机</span>
                    <span class="choice true">B．三层交换机
                    </span>
                    <span class="choice false">C．网络集线器</span>
                    <span class="choice false">D．生成树网桥</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        不同VLAN之间通信当然需要依靠三层设备进行路由转发了，因此可以选择路由器或者三层交换机。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">以太网协议中使用了二进制指数后退算法，这个算法的特点是 （62） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E5%A4%AA%E7%BD%91%E5%8D%8F%E8%AE%AE%E4%B8%AD%E4%BD%BF%E7%94%A8%E4%BA%86%E4%BA%8C%E8%BF%9B%E5%88%B6%E6%8C%87%E6%95%B0%E5%90%8E%E9%80%80%E7%AE%97%E6%B3%95%EF%BC%8C%E8%BF%99%E4%B8%AA%E7%AE%97%E6%B3%95%E7%9A%84%E7%89%B9%E7%82%B9%E6%98%AF%20%EF%BC%8862%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（62） </span>A．容易实现，工作效率高
                </p>
                <p class="choice false">B．在轻负载下能提高网络的利用率
                </p>
                <p class="choice true">C．在重负载下能有效分解冲突
                </p>
                <p class="choice false">D．在任何情况下不会发生阻塞</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        “容易实现，工作效率高”，可以算是吧，不过这不能算是核心特点。<br />
                        “在轻负载下能提高网络的利用率”，这句话说得似是而非，二进制指数后退算法在轻负载下可以有效地解决冲突问题，但不能提高网络的利用率。<br />
                        “在重负载下能有效分解冲突”，是。<br />
                        “在任何情况下不会发生阻塞”，胡扯。以太网的思想就是允许冲突，只是采用二进制指数后退算法来处理冲突。但二进制指数后退算法不是万能的，负载过重网络冲突会造成阻塞。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">以下属于万兆以太网物理层标准的是 （63） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E5%B1%9E%E4%BA%8E%E4%B8%87%E5%85%86%E4%BB%A5%E5%A4%AA%E7%BD%91%E7%89%A9%E7%90%86%E5%B1%82%E6%A0%87%E5%87%86%E7%9A%84%E6%98%AF%20%EF%BC%8863%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（63）</span>
                    <span class="choice false">A．IEEE802.3u</span>
                    <span class="choice false">B．IEEE802.3a
                    </span>
                    <span class="choice false">C．IEEE802.3e</span>
                    <span class="choice true">D．IEEE802.3ae</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        IEEE 802.3ae，常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">快速以太网标准比原来的以太网标准的数据速率提高了10倍，这时它的网络跨距（最大段长） （64） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E5%BF%AB%E9%80%9F%E4%BB%A5%E5%A4%AA%E7%BD%91%E6%A0%87%E5%87%86%E6%AF%94%E5%8E%9F%E6%9D%A5%E7%9A%84%E4%BB%A5%E5%A4%AA%E7%BD%91%E6%A0%87%E5%87%86%E7%9A%84%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%8F%90%E9%AB%98%E4%BA%8610%E5%80%8D%EF%BC%8C%E8%BF%99%E6%97%B6%E5%AE%83%E7%9A%84%E7%BD%91%E7%BB%9C%E8%B7%A8%E8%B7%9D%EF%BC%88%E6%9C%80%E5%A4%A7%E6%AE%B5%E9%95%BF%EF%BC%89%20%EF%BC%8864%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（64）</span>
                    <span class="choice false">A．没有改变</span>
                    <span class="choice false">B．变长了
                    </span>
                    <span class="choice true">C．缩短了</span>
                    <span class="choice false">D．可以根据需要设定</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        由于CSMA/CD的约束，速率增加，长度就得减少。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">无线局域网（WLAN）标准IEEE 802.11g规定的最大数据速率是 （65） 。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E6%97%A0%E7%BA%BF%E5%B1%80%E5%9F%9F%E7%BD%91%EF%BC%88WLAN%EF%BC%89%E6%A0%87%E5%87%86IEEE%20802.11g%E8%A7%84%E5%AE%9A%E7%9A%84%E6%9C%80%E5%A4%A7%E6%95%B0%E6%8D%AE%E9%80%9F%E7%8E%87%E6%98%AF%20%EF%BC%8865%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（65）</span>
                    <span class="choice false">A．1Mb/s</span>
                    <span class="choice false">B．11Mb/s
                    </span>
                    <span class="choice false">C．5Mb/s</span>
                    <span class="choice true">D．54Mb/s</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        54 Mb/s，常识。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">无线局域网标准IEEE 802.11i提出了新的TKIP协议来解决 （66） 中存在的安全隐患。&emsp;<a class="baidu" target="_blank"
                        href="https://www.baidu.com/s?wd=%E6%97%A0%E7%BA%BF%E5%B1%80%E5%9F%9F%E7%BD%91%E6%A0%87%E5%87%86IEEE%20802.11i%E6%8F%90%E5%87%BA%E4%BA%86%E6%96%B0%E7%9A%84TKIP%E5%8D%8F%E8%AE%AE%E6%9D%A5%E8%A7%A3%E5%86%B3%20%EF%BC%8866%EF%BC%89%20%E4%B8%AD%E5%AD%98%E5%9C%A8%E7%9A%84%E5%AE%89%E5%85%A8%E9%9A%90%E6%82%A3%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（66）</span>
                    <span class="choice false">A．WAP协议</span>
                    <span class="choice true">B．WEP协议
                    </span>
                    <span class="choice false">C．MD5</span>
                    <span class="choice false">D．无线路由器</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        WAP（Wireless Application Protocol，无线应用协议）是一种向移动终端提供互联网内容和先进增值服务的全球统一的开放式协议标准，是简化了的无线Internet
                        协议。<br />
                        WEP（Wired Equivalent
                        Privacy，有线等效保密）是802.11标准安全机制的一部分，用来对无线传输的802.11数据帧进行加密，在链路层提供保密性和数据完整性的功能。但WEP的安全性很弱。WPA（Wi-Fi
                        Protected Access，Wi-Fi网络保护访问）是Wi-Fi联盟（WFA）为了弥补WEP缺陷采用的最新安全标准。WPA 实现了IEEE 802.11i 标准的部分内容，是在IEEE
                        802.11i完善之前替代WEP的过渡方案。WPA采用了TKIP（Temporal Key Integrity Protocol，暂时密钥完整性协议）和IEEE
                        802.1x来实现WLAN的访问控制、密钥管理和数据加密，针对WEP出现的安全问题加以改进。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">采用以太网链路聚合技术将 （67） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E9%87%87%E7%94%A8%E4%BB%A5%E5%A4%AA%E7%BD%91%E9%93%BE%E8%B7%AF%E8%81%9A%E5%90%88%E6%8A%80%E6%9C%AF%E5%B0%86%20%EF%BC%8867%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="choice header_choice false"><span class="number">（67） </span>A．多个逻辑链路组成一个物理链路
                </p>
                <p class="choice false">B．多个逻辑链路组成一个逻辑链路
                </p>
                <p class="choice false">C．多个物理链路组成一个物理链路
                </p>
                <p class="choice true">D．多个物理链路组成一个逻辑链路</p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        在局域网应用中，由于数据通信量的快速增长，交换机带宽往往不够用，于是出现了将多条物理链路当作一条逻辑链路使用的链路聚合技术，这时网络通信由聚合到逻辑链路中的所有物理链路共同承担。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在冗余磁盘阵列中，以下不具有容错技术的是 （68） 。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%86%97%E4%BD%99%E7%A3%81%E7%9B%98%E9%98%B5%E5%88%97%E4%B8%AD%EF%BC%8C%E4%BB%A5%E4%B8%8B%E4%B8%8D%E5%85%B7%E6%9C%89%E5%AE%B9%E9%94%99%E6%8A%80%E6%9C%AF%E7%9A%84%E6%98%AF%20%EF%BC%8868%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（68）</span>
                    <span class="choice true">A．RAID0</span>
                    <span class="choice false">B．RAID1
                    </span>
                    <span class="choice false">C．RAID3</span>
                    <span class="choice false">D．RAID5</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        RAID0实现了带区组，数据并不是保存在一个硬盘上，而是分成数据块保存在不同驱动器上。因为将数据分布在不同驱动器上，所以数据吞吐率大大提高，驱动器的负载也比较平衡。如果刚好所需要的数据在不同的驱动器上效率最好。它不需要计算校验码，实现容易。它的缺点是它没有数据差错控制，如果一个驱动器中的数据发生错误，即使其它盘上的数据正确也无济于事了。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">在进行金融业务系统的网络设计时，应该优先考虑 （69） 原则。在进行企业网络的的需求分析时，应该首先进行 （70） 。&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E8%BF%9B%E8%A1%8C%E9%87%91%E8%9E%8D%E4%B8%9A%E5%8A%A1%E7%B3%BB%E7%BB%9F%E7%9A%84%E7%BD%91%E7%BB%9C%E8%AE%BE%E8%AE%A1%E6%97%B6%EF%BC%8C%E5%BA%94%E8%AF%A5%E4%BC%98%E5%85%88%E8%80%83%E8%99%91%20%EF%BC%8869%EF%BC%89%20%E5%8E%9F%E5%88%99%E3%80%82%E5%9C%A8%E8%BF%9B%E8%A1%8C%E4%BC%81%E4%B8%9A%E7%BD%91%E7%BB%9C%E7%9A%84%E7%9A%84%E9%9C%80%E6%B1%82%E5%88%86%E6%9E%90%E6%97%B6%EF%BC%8C%E5%BA%94%E8%AF%A5%E9%A6%96%E5%85%88%E8%BF%9B%E8%A1%8C%20%EF%BC%8870%EF%BC%89%20%E3%80%82">百度</a></p>
                <p class="one-line-choice"><span class="number">（69）</span>
                    <span class="choice false">A．先进性</span>
                    <span class="choice false">B．开放性
                    </span>
                    <span class="choice false">C．经济性</span>
                    <span class="choice true">D．高可用性</span>
                </p>
                <p class="one-line-choice"><span class="number">（70）</span>
                    <span class="choice true">A．企业应用分析</span>
                    <span class="choice false">B．网络流量分析
                    </span>
                    <span class="choice false">C．外部通信环境调研</span>
                    <span class="choice false">D．数据流向图分析</span>
                </p>
                <div class="explain">
                    <p class="explain-header"> 试题解析：</p>
                    <p class="explain-content">
                        对于金融业务系统来说，安全和高可用性是第一的。<br />
                        对于企业网络建设来说，首先应该做企业应用分析，这是需求分析的一部分。</p>
                </div>
            </div>
            <div class="block">
                <p class="question">Traditional Internet access methods like dial-up were so slow that host computers
                    were connected to the dial-up （71） at the customer premise over slow （72） ports. PPP was designed
                    to run directly over these serial links. But with the advent of broadband Internet （73）
                    technologies such as ADSL and cable modems there has been a considerable increase in the bandwidth
                    delivered to the end users. This means that the host computers at the customer premise connect to
                    the （74） or cable “modem” over a much faster medium such as Ethernet. It also means that
                    multiple（75） can be connect to the Internet through the same connection.&emsp;<a class="baidu"
                        target="_blank" href="https://www.baidu.com/s?wd=Traditional%20Internet%20access%20methods%20like%20dial-up%20were%20so%20slow%20that%20host%20computers%20were%20connected%20to%20the%20dial-up%20%EF%BC%8871%EF%BC%89%20at%20the%20customer%20premise%20over%20slow%20%EF%BC%8872%EF%BC%89%20ports.%20PPP%20was%20designed%20to%20run%20directly%20over%20these%20serial%20links.%20But%20with%20the%20advent%20of%20broadband%20Internet%20%EF%BC%8873%EF%BC%89%20technologies%20such%20as%20ADSL%20and%20cable%20modems%20there%20has%20been%20a%20considerable%20increase%20in%20the%20bandwidth%20delivered%20to%20the%20end%20users.%20This%20means%20that%20the%20host%20computers%20at%20the%20customer%20premise%20connect%20to%20the%20%EF%BC%8874%EF%BC%89%20or%20cable%20%E2%80%9Cmodem%E2%80%9D%20over%20a%20much%20faster%20medium%20such%20as%20Ethernet.%20It%20also%20means%20that%20multiple%EF%BC%8875%EF%BC%89%20can%20be%20connect%20to%20the%20Internet%20through%20the%20same%20connection.">百度</a></p>
                <p class="one-line-choice"><span class="number">（71）</span>
                    <span class="choice false">A．buffer</span>
                    <span class="choice true">B．modem</span>
                    <span class="choice false">C．computer</span>
                    <span class="choice false">D．server</span>
                </p>
                <p class="one-line-choice"><span class="number">（72）</span>
                    <span class="choice false">A．parallel</span>
                    <span class="choice false">B．digital</span>
                    <span class="choice true">C．serial</span>
                    <span class="choice false">D．variable</span>
                </p>
                <p class="one-line-choice"><span class="number">（73）</span>
                    <span class="choice true">A．access</span>
                    <span class="choice false">B．cache</span>
                    <span class="choice false">C．cast</span>
                    <span class="choice false">D．storage</span>
                </p>
                <p class="one-line-choice"><span class="number">（74）</span>
                    <span class="choice false">A．FDDI</span>
                    <span class="choice false">B．HDSL</span>
                    <span class="choice true">C．ADSL</span>
                    <span class="choice false">D．CDMA</span>
                </p>
                <p class="one-line-choice"><span class="number">（75）</span>
                    <span class="choice false">A．cables</span>
                    <span class="choice true">B．hosts</span>
                    <span class="choice false">C．servers</span>
                    <span class="choice false">D．modems</span>
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
    document.getElementById("i1").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCADHAY4DASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iii\
gAooooAKKKKACiiigAooooAKKKz9Z1I6XZRzrGXLXEERGxm4eVEJ4HXDEj3oA0KKyotZF3PbyWSC\
eyYyLNJhlaIqSM4xyNysp6YP40HXYDDp8sVvdSLeuQqiFg6IASXZTzt4A6fxL60AatFYml+I4LzS\
rC6uEmhkuY4Cf9HkCb5RkBWK4IzxntxnrS23iBf7F0q9uomEl9Akp8vARMoGOWYgAZIAyckkYzQB\
tUVzdr4sjdL4yxrK1vcNEi28iEycAqoBfl/mC4UkE+hyBtPdyJFHI1lPhk3uN0Y8rpw3zYz16ZHB\
56UAWqK5/SPEj32lf2hcWnlxSM7wkSxjMOTsZtz8Ergn0zVvVNZOmR6aXt1DXtwICJZQgiJjd8kg\
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\
1H/FYf8AUD/8jUUUAH/FYf8AUD/8jUf8Vh/1A/8AyNRRQAf8Vh/1A/8AyNUmiaZqVtqepahqclo0\
12IlCWwbaoQMOrc5O79KKKAP/9l+3wAARABkAAAAAAAAAAAAAAAAAAAAAAAAAAAAmB7QE+gD6AMA\
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8ABPDCAAAAsgQK8AgAAAAAAAAAAAoAALMA\
C/CEAAAAfwCAAIAAhQAAAAAABEFmAAAABYE0AAAABgECAAAAfwEoADgAvwEAABAAzQEAAAAA/wEA\
AAgAgIMOAAAAvwMIAAgANQAwADYAOQBkAGMAYgA0AGcANgA0ADQAYQAwAGIAMQA4ADUAYQA5ADAA\
JgAwADAAMAAAAP5WR3IgADEAMQA3AAAAMwAi8RIAAACQAwEAAACSAwEAAAC/AwCAAIAAABDwBAAA\
AAAAAIBSAAfwaN4AAAUFgbv+jYbuiV9vwvUYZobvzf8ARN4AAAEAAAAAAAAAAAAAAKBGHfA83gAA\
gbv+jYbuiV9vwvUYZobvzf//2P/gABBKRklGAAEBAQBgAGAAAP/bAEMACAYGBwYFCAcHBwkJCAoM\
FA0MCwsMGRITDxQdGh8eHRocHCAkLicgIiwjHBwoNyksMDE0NDQfJzk9ODI8LjM0Mv/bAEMBCQkJ\
DAsMGA0NGDIhHCEyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy\
MjIyMv/AABEIAVICCgMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/\
xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKC\
CQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaH\
iImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp\
6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAME\
BwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYn\
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\
Ir3/AOM0f8Jlpf8Az665/wCCK9/+M0AdBQ==";
    document.getElementById("i2").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAFSAgoDASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3e/mu\
LfTrmaztftd1HE7w2/mCPzXAJVNx4XJwMnpmuH/4S34h/wDRMP8Ayv2/+FegUUAef/8ACW/EP/om\
H/lft/8ACj/hLfiH/wBEw/8AK/b/AOFegUUAef8A/CW/EP8A6Jh/5X7f/Cj/AIS34h/9Ew/8r9v/\
AIV6BRQB5/8A8Jb8Q/8AomH/AJX7f/Cj/hLfiH/0TD/yv2/+FegUUAef/wDCW/EP/omH/lft/wDC\
j/hLfiH/ANEw/wDK/b/4V6BRQB5//wAJb8Q/+iYf+V+3/wAKP+Et+If/AETD/wAr9v8A4V6BWF4k\
8V2nhoWiS2l9fXV27LDa2EHmyuFGWYLkcDjP1rSlSnVkoQV2wOc/4S34h/8ARMP/ACv2/wDhR/wl\
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\
MjI=";
    document.getElementById("i3").src = "data:image/jpeg;base64,\
/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCACgAiwDASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD22/1m\
203LXcsMMYbaHlk2gnAPpjvVL/hMdG/6CWn/APgUP8K5X4rcafp527sarAcevFeJzTyWt3bLLr0q\
w3CqfNeX5GLYAZP3mRHlsHIJ+Rj9LjGNrtivrY+lf+Ex0b/oJ6f/AOBQ/wAKP+Ex0b/oJ6f/AOBQ\
/wAK+aPDmm3vinUY9G1e5ljkgubjzWbLuojj3Mo3Hr8uKr2en6JeTJOk7Q2ZdIGhuZV+0bnBAkVV\
X5kU7Se/bvXTTwsZq6l+BnKo4u1j6g/4TDRv+glp/wD4FD/Cj/hMNG/6CWn/APgUP8K+e/C/gGPX\
45VlnliuLPUha36Iq7beEq37zJ4PzqV+nNTnwFZWa3EGpTXkN/b6PLqk1uqJ8m1sKhJH8S4Ptzmq\
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\
AAAAAACgRh3wXYAAABrkt7/eXodYjE3fER7+Qgv//9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgG\
BgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgy\
PC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjL/wAARCAFeAZgDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAA\
AAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEI\
I0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlq\
c3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW\
19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL\
/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLR\
ChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOE\
hYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn\
6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3me4WAgMpOQTkEAADHqR6iof7Ri9P/Iif/FViePv+\
RN1r/sG3H8hXlEHw48HT/D+PXE19xfSWgwr38CQi7MW/ySWUYOf4SwIH51rTpKau3b5ESk1sj3L+\
0YvT/wAiJ/8AFUf2jF6f+RE/+Kr548afD2y8O69aWmjXk2r+bJtl06J0N3EAobGFyTuXeQ3l4UAZ\
zkZqW3hPR7rxD4psre9vJrTStOuLu3kaPyZC8e35JFdc8ElTwpJXPHSt1hYtcyl+H/BIdVp2sfSX\
9oxen/kRP/iqP7Ri9P8AyIn/AMVXyd4d0K68S67baRZyQx3Fxu2NMSEG1SxyQCeintWtpfgbU9V/\
sHyJ7Rf7a+0fZt7sNnk53b8KcZxxjP4VUsFGO8/w/wCD5CVZvZH03/aMXp/5ET/4qj+0YvT/AMiJ\
/wDFV8mjSNT/ALN/tP8As67+wf8AP15DeV97b9/GOvHXrxWx4t8H33hTVZ7eRLieyRkSO+a3aOOV\
mQNgHkZHI6n7po+pK9uf8P8Agh7d2vY+mv7Ri9P/ACIn/wAVR/aMXp/5ET/4qvnHR/CtpqvhO51E\
3ssN3FJncLW4lgVAPnWQpCQhAw2QzDBwQOtJ4k8NWGj2GlXMGpJ5t3psF29rNvMjO+c7CqbAo9C2\
eD14yvqivy834D9s7Xt+J9H/ANoxen/kRP8A4qj+0YvT/wAiJ/8AFV8/+HvA8up+HtU1G/tNYhaF\
YHs/s9oZDOrsdxVDjeAMHhhgHPPSuYvreO1v5reI3BWNth+0QiKQMOoZNzYIOR17fhQsGm2lLby/\
4InWaV2j6n/tGL0/8iJ/8VR/aMXp/wCRE/8Aiq8pvPhhp8Oo3Vtaw380dvH5nmSXEibhgE422jKx\
5+6rMT6ZyBjw+B7K81zxHBY=";
</script>