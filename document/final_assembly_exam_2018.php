<?php
include_once('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>汇编期末测试冲刺</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <?php
        require(relative(__FILE__).'template/source.php');
        ?> -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="../js/global.js"></script>
</head>

<body>
    <!-- <?php
        require(relative(__FILE__).'template/header.php');
        ?> -->

    <div class="container">
        <h1 style="text-align:center">汇编期末测试冲刺</h1>
        <h2 class="theme-sign">一、填空题</h2>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（1）</span>
                一个十进制数35.625其对应的二进制数为
                <span class="gap-filling-answer"> 100011.101B</span>
                、十六进制数为
                <span class="gap-filling-answer"> 23.aH</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（2）</span>
                将 -8 存放在一个字单元中,则该单元中二进制代码是
                <span class="gap-filling-answer">0FFF8H</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（3）</span>
                计算机软件分为两个部分即
                <span class="gap-filling-answer"> 系统软件</span>
                和
                <span class="gap-filling-answer"> 应用软件</span>
                而汇编程序属于
                <span class="gap-filling-answer"> 系统软件</span>
                , 汇编语言应用程序属于
                <span class="gap-filling-answer"> 应用软件</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（4）</span>
                把汇编语言源程序翻译成计算机能够识别、执行的目标程序的软件称为
                <span class="gap-filling-answer"> 汇编程序</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（5）</span>
                8086/8088 CPU内部一般用来存放数据的寄存器有
                <span class="gap-filling-answer"> AX BX CX DX</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（6）</span>
                8086/8088 CPU内部用来存放段地址寄存器的有
                <span class="gap-filling-answer"> CS DS SS ES</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（7）</span>
                逻辑地址由
                <span class="gap-filling-answer"> 段地址与偏移地址</span>
                组成。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（8）</span>
                一个语句的名字项可以是标号或变量,在程序中它们两个在书写形式上的主要区别是
                <span class="gap-filling-answer" style="white-space: pre-line;text-align: left;"> 标号以冒号结尾 而变量不以冒号结尾</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（9）</span>
                在PSW中,用以记录当前运算结果特征信息的那些位称为
                <span class="gap-filling-answer"> 状态标志位 </span>
                , 一般是由
                <span class="gap-filling-answer"> CPU</span>
                自动设置。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（10）</span>
                储存器单元与物理地址的关系是
                <span class="gap-filling-answer"> 一一对应</span>
                ，在一个逻辑段内，每个单元对应的段地址是
                <span class="gap-filling-answer"> 相同的</span>
                ，而偏移地址是
                <span class="gap-filling-answer"> 不同的</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（11）</span>
                在I/O接口中,为每个可访问的寄存器分配的地址是
                <span class="gap-filling-answer"> 端口地址</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（12）</span>
                用以指示当前堆栈栈顶的指针寄存器是
                <span class="gap-filling-answer"> SP</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（13）</span>
                机器指令是一组规定计算机的操作类型及相关操作数的
                <span class="gap-filling-answer"> 二进制代码</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（14）</span>
                假设执行指令前BX=5678H，CL=8，指令ROL BX，CL执行后BX的内容是
                <span class="gap-filling-answer"> 7856H</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（15）</span>
                一条指令的基本结构一般由
                <span class="gap-filling-answer"> 操作码字段</span>
                和
                <span class="gap-filling-answer"> 操作数字段</span>
                两个部分组成。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（16）</span>
                8086/8088 存储器地址分段时，每个段起始地址的特征是
                <span class="gap-filling-answer"> 二进制表示的地址中低四位都为 0</span>
                。
            </p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                    每个段被划分为256字节为一个块，
                    所以段的起始地址必须是能被16整除的地址，所以低4位二进制码都是0
            </div>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（17）</span>
                所谓“寻址方式”是指在指令中用以说明操作数所在
                <span class="gap-filling-answer"> 地址或位置</span>
                的方法。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（18）</span>
                在指令中直接给出操作数的寻址方式称为
                <span class="gap-filling-answer"> 立即数寻址</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（19）</span>
                无符号数和带符号数的两组条件转移指令，每条指令都有完全等效的两个指令助记符，例如，JL 指令另一个指令助记符是
                <span class="gap-filling-answer"> JNGE</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（20）</span>
                8086/8088指令系统中,用以描述(说明)寄存器操作数的寻址方式是
                <span class="gap-filling-answer"> 寄存器寻址方式</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（21）</span>
                设MASK为一个变量,在“MOV AX,MASK[SI + BX]”指令中,源操作数的寻址方式是
                <span class="gap-filling-answer">相对基址变址寻址方式</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（22）</span>
                CPU执行“JMP BX”指令只改变
                <span class="gap-filling-answer"> IP</span>
                内容 ,而不改变
                <span class="gap-filling-answer"> CS</span>
                内容。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（23）</span>
                每次进行串扫描指令SCAS时，要进行递增或递减修改的变址寄存器是
                <span class="gap-filling-answer"> DI</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（24）</span>
                段间间接基址BX变址SI寻址的无条件转移指令是
                <span class="gap-filling-answer"> JMP DWORD PTR[BX+SI]</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（25）</span>
                使用“MUL BX”指令时,乘数放在
                <span class="gap-filling-answer"> BX</span>
                中,被乘数放在
                <span class="gap-filling-answer"> AX</span>
                中,执行该指令后结果在
                <span class="gap-filling-answer"> DX，AX</span>
                中。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（26）</span>
                执行带符号数字节相乘指令IMUL BL后，CF=1，OF=1意味着
                <span class="gap-filling-answer" style="white-space: pre-line;text-align: left;"> 高位不是低位的符号扩展</span>
                。
            </p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    字节乘结果16位,存于AX中,高8位AH ,低8位AL 。<br />
                    高位是低位的符号扩展：<br />
                    低位是指积的值部分,高位指积的符号部分。
                    常常是字节乘的结果不足16位,字乘的结果不足32位,多出的位怎么办？
                    就进行符号扩展,由于多出的位是高位,所以叫高位符号扩展。<br />
                    举个例子：<br />
                    mov al,0b4h<br />
                    mov bl,11h <br />
                    imul bl<br />
                    操作为 AL * BL 结果存于 AX 中,其中 (AH) = FAH,(AL) = F4H<br />
                    结果的二进制式为 1111010011111010B<br />
                    显然数值部分是010011111010,加上一位符号位是不足16位的,而符号部分是1111有四位,
                    并不是我们习惯的一位,这就是进行了高位符号扩展的结果。
                    为什么要进行扩展?是因为结果的位数在指令中是一定的,计算机不可能根据我们结果的实际位数而调整结果的位数,
                    所以不足的位必须补足,这样高位扩展符号的做法是即能够满足结果位数约定,又不影响结果值的正确性的。
                    高位扩展符号的原则是正数填0负数填1。<br />
                    而符号扩展是CF=0；OF=0；或者CF=1,OF=1 ，这是一种约定或者说是标识,在处理结果时,
                    计算机会根据CF、OF的状态判断是否有符号扩展,从而做出相应正确处理。
                </p>
            </div>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（27）</span>
                在串操作指令中,使地址自动加1或加2必须使用指令
                <span class="gap-filling-answer"> CLD</span>
                将方向标志DF置
                <span class="gap-filling-answer"> 0 </span>
                ，源串必须在
                <span class="gap-filling-answer"> 数据</span>
                段中,而目的串必须在
                <span class="gap-filling-answer"> 附加</span>
                段中。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（28）</span>
                若要测试AL中操作数的第0,1,2,7位是否为0,根据结果实现条件转移,可使用
                <span class="gap-filling-answer"> TEST AL,87H</span>
                指令。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（29）</span>
                8086/8088 CPU允许最大的存储空间为1MB,因此CPU的地址总线是
                <span class="gap-filling-answer"> 20</span>
                位。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（30）</span>
                与LOOP yeqianyi指令功能等效的两条指令依次是
                <span class="gap-filling-answer"> DEC CX</span>
                和
                <span class="gap-filling-answer"> JNZ yeqianyi</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（31）</span>
                将AX寄存器清零的<span style="color:red">逻辑</span>指令是
                <span class="gap-filling-answer"> AND AX,0</span>
                或
                <span class="gap-filling-answer"> XOR AX,AX</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（32）</span>
                在指令语句操作数项上，引用一个段名，就是获取段地址的
                <span class="gap-filling-answer"> 立即</span>
                数据。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（33）</span>
                执行查表指令XLAT时,要先将表地址存放在
                <span class="gap-filling-answer"> BX</span>
                中,将位移量存放在
                <span class="gap-filling-answer"> AL</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（34）</span>
                十进制调整指令DAA或AAA必须放置在
                <span class="gap-filling-answer"> ADD或 ADC</span>
                指令之后,只对
                <span class="gap-filling-answer"> AL</span>
                内容进行修正。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（35）</span>
                假设执行前AX=7862H，指令XOR AX，AX执行后AX中的值是
                <span class="gap-filling-answer"> 0</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（36）</span>
                指令CBW只能实现对寄存器
                <span class="gap-filling-answer"> AL</span>
                的内容进行扩展,而它当中存放的数据应该是一个
                <span class="gap-filling-answer"> 带符号</span>
                数。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（37）</span>
                比较两个带符号A与B的大小,若(OF) ⊕ (SF)=0,则A-B
                <span class="gap-filling-answer"> ≥ 0 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（38）</span>
                变量的类型属性指的是该变量对应存储单元的
                <span class="gap-filling-answer"> 字节数</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（39）</span>
                VAR1 DD 10H DUP（？）语句实现留空
                <span class="gap-filling-answer"> 64 </span>
                个字节单元。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（40）</span>
                在源程序中定义一个逻辑段,使用
                <span class="gap-filling-answer"> SEGMENT</span>
                语句表示一个段的开始,用
                <span class="gap-filling-answer"> ENDS </span>
                语句表示一个段的结束。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（41）</span>
                汇编语言源程序中的语句有三种类型,它们是宏指令语句,
                <span class="gap-filling-answer"> 指令语句</span>
                及
                <span class="gap-filling-answer"> 伪指令语句</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（42）</span>
                ARRAY DB 0，2 DUP（1，2），0，3汇编时生成的数据依次是
                <span class="gap-filling-answer"> 0,1,2,1,2,0,3</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（43）</span>
                在指令语句和伪指令语句中常用符号
                <span class="gap-filling-answer"> $</span>
                表示地址计数器的当前值。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（44）</span>
                指令MOV AX，SEG BUF的执行，是把
                <span class="gap-filling-answer"> BUF的段地址</span>
                送到AX中。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（45）</span>
                用DW 1200H 语句定义的一个字,如改用DB语句定义时,该语句是
                <span class="gap-filling-answer"> DB 00H, 12H</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（46）</span>
                如果过程与调用的主程序处在同一代码段,这样的过程属性是
                <span class="gap-filling-answer"> NEAR</span>
                ,与调用它的主程序处于不同的代码段,则该过程属性是
                <span class="gap-filling-answer"> FAR</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（47）</span>
                在数据段或代码段中,常用伪指令 “ORG n” 来定义本段的偏移地址初值,该初值的范围是
                <span class="gap-filling-answer"> 0000H-0FFFFH</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（48）</span>
                在存储单元yeqianyi开始,欲保留100个字长的存储单元,应使用的数据定义伪指令是
                <span class="gap-filling-answer"> yeqianyi DW 100 DUP(?)</span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（49）</span>
                在存取一个存储器操作数时，段地址必须由
                <span class="gap-filling-answer"> 段寄存器</span>
                提供。
            </p>
        </div>
        <h2 class="theme-sign">二、选择题</h2>
        <div class="block">
            <p class="question"><span class="number">（1）</span>
                能够将目标模块或子程序连接起来,生成可执行文件的系统程序是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%83%BD%E5%A4%9F%E5%B0%86%E7%9B%AE%E6%A0%87%E6%A8%A1%E5%9D%97%E6%88%96%E5%AD%90%E7%A8%8B%E5%BA%8F%E8%BF%9E%E6%8E%A5%E8%B5%B7%E6%9D%A5%2C%E7%94%9F%E6%88%90%E5%8F%AF%E6%89%A7%E8%A1%8C%E6%96%87%E4%BB%B6%E7%9A%84%E7%B3%BB%E7%BB%9F%E7%A8%8B%E5%BA%8F%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①DEBUG</span>
                <span class="choice true">②LINK</span>
                <span class="choice false">③MASM</span>
                <span class="choice false">④EDIT</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（2）</span>
                用汇编语言编写的程序称为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E7%BC%96%E5%86%99%E7%9A%84%E7%A8%8B%E5%BA%8F%E7%A7%B0%E4%B8%BA____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①汇编程序</span>
                <span class="choice true">②源程序</span>
                <span class="choice false">③可执行文件</span>
                <span class="choice false">④目标程序</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（3）</span>
                汇编语言源程序文件的扩展名为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E6%BA%90%E7%A8%8B%E5%BA%8F%E6%96%87%E4%BB%B6%E7%9A%84%E6%89%A9%E5%B1%95%E5%90%8D%E4%B8%BA____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①OBJ</span>
                <span class="choice false">②EXE</span>
                <span class="choice false">③COM</span>
                <span class="choice true">④ASM</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（4）</span>
                设(101)<sub>x</sub> = (41)<sub>16</sub>&emsp;求x=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28101%29x%3D%2841%2916%26emsp%3B%E6%B1%82x%3D____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①6</span>
                <span class="choice false">②10</span>
                <span class="choice true">③8</span>
                <span class="choice false">④2</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（5）</span>
                内存某字节单元中存放的二进制代码为94H,若将它看作是一个压缩BCD码,则其对应的数值为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%86%85%E5%AD%98%E6%9F%90%E5%AD%97%E8%8A%82%E5%8D%95%E5%85%83%E4%B8%AD%E5%AD%98%E6%94%BE%E7%9A%84%E4%BA%8C%E8%BF%9B%E5%88%B6%E4%BB%A3%E7%A0%81%E4%B8%BA94H%2C%E8%8B%A5%E5%B0%86%E5%AE%83%E7%9C%8B%E4%BD%9C%E6%98%AF%E4%B8%80%E4%B8%AA%E5%8E%8B%E7%BC%A9BCD%E7%A0%81%2C%E5%88%99%E5%85%B6%E5%AF%B9%E5%BA%94%E7%9A%84%E6%95%B0%E5%80%BC%E4%B8%BA____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①148</span>
                <span class="choice false">②-20</span>
                <span class="choice false">③-108</span>
                <span class="choice true">④94</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（6）</span>
                当执行ADD&emsp;AX，BX指令后，若AX的内容为4E52H时，设置的奇偶标志位PF=0，下面的叙述正确的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%BD%93%E6%89%A7%E8%A1%8CADD%26emsp%3BAX%EF%BC%8CBX%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%E8%8B%A5AX%E7%9A%84%E5%86%85%E5%AE%B9%E4%B8%BA4E52H%E6%97%B6%EF%BC%8C%E8%AE%BE%E7%BD%AE%E7%9A%84%E5%A5%87%E5%81%B6%E6%A0%87%E5%BF%97%E4%BD%8DPF%3D0%EF%BC%8C%E4%B8%8B%E9%9D%A2%E7%9A%84%E5%8F%99%E8%BF%B0%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;表示结果中含1的个数是奇数</p>
            <p class="choice false">②&emsp;表示结果中含1的个数是偶数</p>
            <p class="choice false">③&emsp;表示该数是奇数</p>
            <p class="choice true">④&emsp;表示结果中低8位中含1的个数是奇数</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（7）</span>
                要输入端口1234H中的8位数据，其指令应是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%A6%81%E8%BE%93%E5%85%A5%E7%AB%AF%E5%8F%A31234H%E4%B8%AD%E7%9A%848%E4%BD%8D%E6%95%B0%E6%8D%AE%EF%BC%8C%E5%85%B6%E6%8C%87%E4%BB%A4%E5%BA%94%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①MOV&emsp;DX,1234H<br />
                &emsp;OUT&emsp;DX,AL</p>
            <p class="choice true">②MOV&emsp;DX,1234H<br />
                &emsp;IN&emsp;AL,DX</p>
            <p class="choice false">③IN&emsp;AX,1234H</p>
            <p class="choice false">④OUT&emsp;DX,1234H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（8）</span>
                下列寄存器组中，在访问存储器操作数地址时，可以提供偏移地址的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E5%AF%84%E5%AD%98%E5%99%A8%E7%BB%84%E4%B8%AD%EF%BC%8C%E5%9C%A8%E8%AE%BF%E9%97%AE%E5%AD%98%E5%82%A8%E5%99%A8%E6%93%8D%E4%BD%9C%E6%95%B0%E5%9C%B0%E5%9D%80%E6%97%B6%EF%BC%8C%E5%8F%AF%E4%BB%A5%E6%8F%90%E4%BE%9B%E5%81%8F%E7%A7%BB%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;BP、BX、SI、DI</p>
            <p class="choice false">②&emsp;AX、BX、CX、DX</p>
            <p class="choice false">③&emsp;SP、IP</p>
            <p class="choice false">④&emsp;BX、SI、DI、DS</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（9）</span>
                IBM&emsp;PC机的存储器单元的物理地址是用____表示的。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=IBM%26emsp%3BPC%E6%9C%BA%E7%9A%84%E5%AD%98%E5%82%A8%E5%99%A8%E5%8D%95%E5%85%83%E7%9A%84%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80%E6%98%AF%E7%94%A8____%E8%A1%A8%E7%A4%BA%E7%9A%84%E3%80%82">百度</a></p>
            <p class="choice header_choice false">①&emsp;5位十进制数</p>
            <p class="choice true">②&emsp;20位无符号二进制数</p>
            <p class="choice false">③&emsp;4位十六进制数</p>
            <p class="choice false">④&emsp;20位带符号二进制数</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（10）</span>
                能够与SS寄存器组合形成堆栈区物理地址的寄存器是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%83%BD%E5%A4%9F%E4%B8%8ESS%E5%AF%84%E5%AD%98%E5%99%A8%E7%BB%84%E5%90%88%E5%BD%A2%E6%88%90%E5%A0%86%E6%A0%88%E5%8C%BA%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80%E7%9A%84%E5%AF%84%E5%AD%98%E5%99%A8%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;BX</span>
                <span class="choice true">②&emsp;BP</span>
                <span class="choice false">③&emsp;IP</span>
                <span class="choice false">④&emsp;SI</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（11）</span>
                若AX=-15要得到AX=15应执行的指令是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5AX%3D-15%E8%A6%81%E5%BE%97%E5%88%B0AX%3D15%E5%BA%94%E6%89%A7%E8%A1%8C%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;NEG&emsp;AX</span>
                <span class="choice false">②&emsp;NOT&emsp;AX</span>
                <span class="choice false">③&emsp;INC&emsp;AX</span>
                <span class="choice false">④&emsp;DEC&emsp;AX</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（12）</span>
                取指令的物理地址表达式为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%8F%96%E6%8C%87%E4%BB%A4%E7%9A%84%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80%E8%A1%A8%E8%BE%BE%E5%BC%8F%E4%B8%BA____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(DS)×10H+(BX)</p>
            <p class="choice false">②&emsp;(SS)×10H+(SP)</p>
            <p class="choice false">③&emsp;(ES)×10H+(SI)</p>
            <p class="choice true">④&emsp;(CS)×10H+(IP)</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（13）</span>
                可以作为一个段的起始地址的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%8F%AF%E4%BB%A5%E4%BD%9C%E4%B8%BA%E4%B8%80%E4%B8%AA%E6%AE%B5%E7%9A%84%E8%B5%B7%E5%A7%8B%E5%9C%B0%E5%9D%80%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;21002H</span>
                <span class="choice false">②&emsp;00104H</span>
                <span class="choice true">③&emsp;01000H</span>
                <span class="choice false">④&emsp;F0008H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（14）</span>
                在标志寄存器FLAGS中,用以记录当前运算结果是否为零的标志是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%A0%87%E5%BF%97%E5%AF%84%E5%AD%98%E5%99%A8FLAGS%E4%B8%AD%2C%E7%94%A8%E4%BB%A5%E8%AE%B0%E5%BD%95%E5%BD%93%E5%89%8D%E8%BF%90%E7%AE%97%E7%BB%93%E6%9E%9C%E6%98%AF%E5%90%A6%E4%B8%BA%E9%9B%B6%E7%9A%84%E6%A0%87%E5%BF%97%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;CF</span>
                <span class="choice false">②&emsp;OF</span>
                <span class="choice false">③&emsp;SF</span>
                <span class="choice true">④&emsp;ZF</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（15）</span>
                8086/8088对I/O端口寻址范围是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=8086/8088%E5%AF%B9I/O%E7%AB%AF%E5%8F%A3%E5%AF%BB%E5%9D%80%E8%8C%83%E5%9B%B4%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;16KB</span>
                <span class="choice false">②&emsp;32KB</span>
                <span class="choice true">③&emsp;64KB</span>
                <span class="choice false">④&emsp;1MB</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（16）</span>
                8086/8088系统执行传送指令MOV时____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=8086/8088%E7%B3%BB%E7%BB%9F%E6%89%A7%E8%A1%8C%E4%BC%A0%E9%80%81%E6%8C%87%E4%BB%A4MOV%E6%97%B6____">百度</a></p>
            <p class="choice header_choice true">①&emsp;不影响标志位</p>
            <p class="choice false">②&emsp;影响DF方向标志&emsp;</p>
            <p class="choice false">③&emsp;影响SF符号标志</p>
            <p class="choice false">④&emsp;影响CF进位标志</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（17）</span>
                设物理地址(21000H)=20H,(21001H)=30H,(21002H)=40H,&emsp;如从地址21001H中取出一个字的内容是____&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80%2821000H%29%3D20H%2C%2821001H%29%3D30H%2C%2821002H%29%3D40H%2C%26emsp%3B%E5%A6%82%E4%BB%8E%E5%9C%B0%E5%9D%8021001H%E4%B8%AD%E5%8F%96%E5%87%BA%E4%B8%80%E4%B8%AA%E5%AD%97%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;2030H</span>
                <span class="choice false">②&emsp;3040H</span>
                <span class="choice false">③&emsp;3020H</span>
                <span class="choice true">④&emsp;4030H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（18）</span>
                若内存中有100个字节数据区,其首地址为10210H,那么其最末一个字节单元的地址是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%E5%86%85%E5%AD%98%E4%B8%AD%E6%9C%89100%E4%B8%AA%E5%AD%97%E8%8A%82%E6%95%B0%E6%8D%AE%E5%8C%BA%2C%E5%85%B6%E9%A6%96%E5%9C%B0%E5%9D%80%E4%B8%BA10210H%2C%E9%82%A3%E4%B9%88%E5%85%B6%E6%9C%80%E6%9C%AB%E4%B8%80%E4%B8%AA%E5%AD%97%E8%8A%82%E5%8D%95%E5%85%83%E7%9A%84%E5%9C%B0%E5%9D%80%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;10274H</p>
            <p class="choice false">②&emsp;10310H</p>
            <p class="choice true">③&emsp;1021H:0063H</p>
            <p class="choice false">④&emsp;1021H:0064H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（19）</span>
                假设存储器中从7462H单元开始的四个相邻字节单元中的内容依次是32H，46H，52H，OFEH，则存放字数据0FE52H的字地址是____&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%81%87%E8%AE%BE%E5%AD%98%E5%82%A8%E5%99%A8%E4%B8%AD%E4%BB%8E7462H%E5%8D%95%E5%85%83%E5%BC%80%E5%A7%8B%E7%9A%84%E5%9B%9B%E4%B8%AA%E7%9B%B8%E9%82%BB%E5%AD%97%E8%8A%82%E5%8D%95%E5%85%83%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E4%BE%9D%E6%AC%A1%E6%98%AF32H%EF%BC%8C46H%EF%BC%8C52H%EF%BC%8COFEH%EF%BC%8C%E5%88%99%E5%AD%98%E6%94%BE%E5%AD%97%E6%95%B0%E6%8D%AE0FE52H%E7%9A%84%E5%AD%97%E5%9C%B0%E5%9D%80%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;7462H</span>
                <span class="choice false">②&emsp;7463H</span>
                <span class="choice true">③&emsp;7464H</span>
                <span class="choice false">④&emsp;7465H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（20）</span>
                将-1存入AX中,其内容为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B0%86-1%E5%AD%98%E5%85%A5AX%E4%B8%AD%2C%E5%85%B6%E5%86%85%E5%AE%B9%E4%B8%BA____">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;FFFFH</span>
                <span class="choice false">②&emsp;-0001H</span>
                <span class="choice false">③&emsp;FFH</span>
                <span class="choice false">④&emsp;8001H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（21）</span>
                在段内寻址时,可以提供偏移地址的寄存器组是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%AE%B5%E5%86%85%E5%AF%BB%E5%9D%80%E6%97%B6%2C%E5%8F%AF%E4%BB%A5%E6%8F%90%E4%BE%9B%E5%81%8F%E7%A7%BB%E5%9C%B0%E5%9D%80%E7%9A%84%E5%AF%84%E5%AD%98%E5%99%A8%E7%BB%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;AX,BX,CX,DX</p>
            <p class="choice true">②&emsp;BX,BP,SI,DI&emsp;</p>
            <p class="choice false">③&emsp;SP,BP,SI,DI</p>
            <p class="choice false">④&emsp;DS,ES,CS,SS</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（22）</span>
                将AX的内容存入堆栈正确的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B0%86AX%E7%9A%84%E5%86%85%E5%AE%B9%E5%AD%98%E5%85%A5%E5%A0%86%E6%A0%88%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;[SP],AX</p>
            <p class="choice false">②&emsp;POP&emsp;AX&emsp;</p>
            <p class="choice true">③&emsp;PUSH&emsp;AX</p>
            <p class="choice false">④&emsp;MOV&emsp;SS:[SP],AX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（23）</span><br />
                MOV&emsp;AL,79<br />
                ADD&emsp;AL,0B1H<br />
                上面的指令执行后，设置的标志位CF和OF的值是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BAL%2C79">百度</a></p>
            <p class="choice header_choice false">①&emsp;CF=0,OF=1</p>
            <p class="choice false">②&emsp;CF=1,OF=1&emsp;</p>
            <p class="choice false">③&emsp;CF=0,OF=0</p>
            <p class="choice true">④&emsp;CF=1,OF=0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（24）</span>
                能够将BL的低四位清“0”的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%83%BD%E5%A4%9F%E5%B0%86BL%E7%9A%84%E4%BD%8E%E5%9B%9B%E4%BD%8D%E6%B8%85%E2%80%9C0%E2%80%9D%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;AND&emsp;BL,0F0H</p>
            <p class="choice false">②&emsp;OR&emsp;BL,00H</p>
            <p class="choice false">③&emsp;OR&emsp;BL,0F0H</p>
            <p class="choice false">④&emsp;AND&emsp;BL,00H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（25）</span>
                已知AX、BX中均为带符号数，当进行字相除时，下面指令或指令序列正确的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5AX%E3%80%81BX%E4%B8%AD%E5%9D%87%E4%B8%BA%E5%B8%A6%E7%AC%A6%E5%8F%B7%E6%95%B0%EF%BC%8C%E5%BD%93%E8%BF%9B%E8%A1%8C%E5%AD%97%E7%9B%B8%E9%99%A4%E6%97%B6%EF%BC%8C%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%E6%88%96%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;DIV&emsp;BX</p>
            <p class="choice true">②CWD<br />
                &emsp;IDIV&emsp;BX
            </p>
            <p class="choice false">③XOR&emsp;DX,DX<br />
                &emsp;DIV&emsp;BX</p>
            <p class="choice false">④CBW<br />
                &emsp;IDIV&emsp;BX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（26）</span>
                没有语法错误的输入指令是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B2%A1%E6%9C%89%E8%AF%AD%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E8%BE%93%E5%85%A5%E6%8C%87%E4%BB%A4%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;IN&emsp;AL，30H</p>
            <p class="choice false">②&emsp;IN&emsp;30H，AL</p>
            <p class="choice false">③&emsp;IN&emsp;DX，AL</p>
            <p class="choice false">④&emsp;IN&emsp;AL，[BX]</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（27）</span>
                设(AL)=63H&emsp;(BL)=29H&emsp;执行下面指令后<br />
                &emsp;SUB&emsp;AL,BL<br />
                &emsp;DAS<br />
                &emsp;AX的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28AL%29%3D63H%26emsp%3B%28BL%29%3D29H%26emsp%3B%E6%89%A7%E8%A1%8C%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%E5%90%8E%3Cbr/%3E%0A%26emsp%3BSUB%26emsp%3BAL%2CBL%3Cbr/%3E%0A%26emsp%3BDAS%3Cbr/%3E%0A%26emsp%3BAX%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;(AX)=0304H</p>
            <p class="choice false">②&emsp;(AX)=0034&emsp;</p>
            <p class="choice true">③&emsp;(AX)=0034H</p>
            <p class="choice false">④&emsp;(AX)=0304</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（28）</span>
                算术右移指令SAR和逻辑右移指令SHR，两条指令执行结果完全相同的条件是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%AE%97%E6%9C%AF%E5%8F%B3%E7%A7%BB%E6%8C%87%E4%BB%A4SAR%E5%92%8C%E9%80%BB%E8%BE%91%E5%8F%B3%E7%A7%BB%E6%8C%87%E4%BB%A4SHR%EF%BC%8C%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E7%BB%93%E6%9E%9C%E5%AE%8C%E5%85%A8%E7%9B%B8%E5%90%8C%E7%9A%84%E6%9D%A1%E4%BB%B6%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;目的操作数最高位为0</p>
            <p class="choice false">②&emsp;目的操作数最高位为1</p>
            <p class="choice false">③&emsp;目的操作数为任意情况</p>
            <p class="choice false">④&emsp;无论什么情况都不可能完全相同</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（29）</span>
                设OP1、OP2是变量,下面哪条指令是非法的&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEOP1%E3%80%81OP2%E6%98%AF%E5%8F%98%E9%87%8F%2C%E4%B8%8B%E9%9D%A2%E5%93%AA%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%98%AF%E9%9D%9E%E6%B3%95%E7%9A%84%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;CMP&emsp;AX,OP1</p>
            <p class="choice true">②&emsp;CMP&emsp;OP1,OP2</p>
            <p class="choice false">③&emsp;CMP&emsp;BX,OP2</p>
            <p class="choice false">④&emsp;CMP&emsp;OP,0FFH</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（30）</span>
                在执行十进制调整指令前,必须先把需要调整的数送入&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%89%A7%E8%A1%8C%E5%8D%81%E8%BF%9B%E5%88%B6%E8%B0%83%E6%95%B4%E6%8C%87%E4%BB%A4%E5%89%8D%2C%E5%BF%85%E9%A1%BB%E5%85%88%E6%8A%8A%E9%9C%80%E8%A6%81%E8%B0%83%E6%95%B4%E7%9A%84%E6%95%B0%E9%80%81%E5%85%A5%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;AL</span>
                <span class="choice false">②&emsp;AX</span>
                <span class="choice false">③&emsp;DL</span>
                <span class="choice false">④&emsp;DX</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（31）</span>
                下列指令中操作数在代码段中的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E4%B8%AD%E6%93%8D%E4%BD%9C%E6%95%B0%E5%9C%A8%E4%BB%A3%E7%A0%81%E6%AE%B5%E4%B8%AD%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;MOV&emsp;EAX,123400FEH</p>
            <p class="choice false">②&emsp;ADD&emsp;EBP,EAX&emsp;</p>
            <p class="choice false">③&emsp;SUB&emsp;[BX],DI</p>
            <p class="choice false">④&emsp;INC&emsp;WORD&emsp;PTR[BX]</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（32）</span>
                设AL=0A8H，CL=23H，执行乘法指令MUL&emsp;CL后，标志位OF，CF的值分别是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEAL%3D0A8H%EF%BC%8CCL%3D23H%EF%BC%8C%E6%89%A7%E8%A1%8C%E4%B9%98%E6%B3%95%E6%8C%87%E4%BB%A4MUL%26emsp%3BCL%E5%90%8E%EF%BC%8C%E6%A0%87%E5%BF%97%E4%BD%8DOF%EF%BC%8CCF%E7%9A%84%E5%80%BC%E5%88%86%E5%88%AB%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;OF=1，CF=1</p>
            <p class="choice false">②&emsp;OF=1，CF=0&emsp;</p>
            <p class="choice false">③&emsp;OF=0，CF=1</p>
            <p class="choice false">④&emsp;OF=0，CF=0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（33）</span>
                设DF=0，SI=20H，CX=10，执行REP&emsp;LODSW指令后，SI中的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEDF%3D0%EF%BC%8CSI%3D20H%EF%BC%8CCX%3D10%EF%BC%8C%E6%89%A7%E8%A1%8CREP%26emsp%3BLODSW%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8CSI%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;20H</span>
                <span class="choice false">②&emsp;30H</span>
                <span class="choice true">③&emsp;34H</span>
                <span class="choice false">④&emsp;40H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（34）</span>
                在串操作指令中,使用重复操作前缀不正确的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E4%B8%B2%E6%93%8D%E4%BD%9C%E6%8C%87%E4%BB%A4%E4%B8%AD%2C%E4%BD%BF%E7%94%A8%E9%87%8D%E5%A4%8D%E6%93%8D%E4%BD%9C%E5%89%8D%E7%BC%80%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;REP&emsp;MOVSB</p>
            <p class="choice true">②&emsp;REP&emsp;LODSB&emsp;</p>
            <p class="choice false">③&emsp;REP&emsp;STOSB</p>
            <p class="choice false">④&emsp;REPNZ&emsp;SCASB</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（35）</span>
                设有变量VAR和标号LAB，不正确的指令是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9C%89%E5%8F%98%E9%87%8FVAR%E5%92%8C%E6%A0%87%E5%8F%B7LAB%EF%BC%8C%E4%B8%8D%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;LEA&emsp;AX，VAR</p>
            <p class="choice false">②&emsp;LEA&emsp;AX，LAB&emsp;</p>
            <p class="choice true">③&emsp;JMP&emsp;NEAR&emsp;PTR&emsp;VAR</p>
            <p class="choice false">④&emsp;JMP&emsp;SHORT&emsp;LAB</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（36）</span>
                指令CALL&emsp;DWORD&emsp;PTR&emsp;VALUE&emsp;属于&emsp;寻址方式。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%87%E4%BB%A4CALL%26emsp%3BDWORD%26emsp%3BPTR%26emsp%3BVALUE%26emsp%3B%E5%B1%9E%E4%BA%8E%26emsp%3B%E5%AF%BB%E5%9D%80%E6%96%B9%E5%BC%8F%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;段内直接调用</span>
                <span class="choice false">②&emsp;段内间接调用</span>
                <span class="choice false">③&emsp;段间直接调用</span>
                <span class="choice true">④&emsp;段间间接调用</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（37）</span>
                用REPE&emsp;SCASB指令对字符串进行扫描，如CX≠0时，扫描结束，那么表示____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8REPE%26emsp%3BSCASB%E6%8C%87%E4%BB%A4%E5%AF%B9%E5%AD%97%E7%AC%A6%E4%B8%B2%E8%BF%9B%E8%A1%8C%E6%89%AB%E6%8F%8F%EF%BC%8C%E5%A6%82CX%E2%89%A00%E6%97%B6%EF%BC%8C%E6%89%AB%E6%8F%8F%E7%BB%93%E6%9D%9F%EF%BC%8C%E9%82%A3%E4%B9%88%E8%A1%A8%E7%A4%BA____">百度</a></p>
            <p class="choice header_choice false">①在字符串中遇上第一个AL中指定的字符</p>
            <p class="choice false">②在字符串中有一个AL中指定的字符</p>
            <p class="choice false">③在字符串中有一个不是AL中指定的字符</p>
            <p class="choice true">④&emsp;在字符串中遇上第一个不是AL中指定的字符</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（38）</span>
                指令LOOPNE&emsp;LOP的循环条件是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%87%E4%BB%A4LOOPNE%26emsp%3BLOP%E7%9A%84%E5%BE%AA%E7%8E%AF%E6%9D%A1%E4%BB%B6%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(ZF)=0,(CX)=0</p>
            <p class="choice true">②&emsp;(ZF)=0,(CX)≠0</p>
            <p class="choice false">③&emsp;(ZF)=1,(CX)=0</p>
            <p class="choice false">④&emsp;(ZF)=1,(CX)≠0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（39）</span>
                累加器AX内的内容为01H,执行CMP&emsp;AX,01H指令后,(AX)=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%B4%AF%E5%8A%A0%E5%99%A8AX%E5%86%85%E7%9A%84%E5%86%85%E5%AE%B9%E4%B8%BA01H%2C%E6%89%A7%E8%A1%8CCMP%26emsp%3BAX%2C01H%E6%8C%87%E4%BB%A4%E5%90%8E%2C%28AX%29%3D____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0H</span>
                <span class="choice true">②&emsp;1H</span>
                <span class="choice false">③&emsp;-2H</span>
                <span class="choice false">④&emsp;2H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（40）</span>
                指令执行后可能改变了累加器内容的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%E5%8F%AF%E8%83%BD%E6%94%B9%E5%8F%98%E4%BA%86%E7%B4%AF%E5%8A%A0%E5%99%A8%E5%86%85%E5%AE%B9%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;OR&emsp;AL,00H</p>
            <p class="choice false">②&emsp;AND&emsp;AL,0FFH</p>
            <p class="choice true">③&emsp;XOR&emsp;AL,AL</p>
            <p class="choice false">④&emsp;TEST&emsp;AL,0FFH</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（41）</span>
                在指令PUSH&emsp;AX的执行过程中,要进行____操作<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%8C%87%E4%BB%A4PUSH%26emsp%3BAX%E7%9A%84%E6%89%A7%E8%A1%8C%E8%BF%87%E7%A8%8B%E4%B8%AD%2C%E8%A6%81%E8%BF%9B%E8%A1%8C____%E6%93%8D%E4%BD%9C">百度</a></p>
            <p class="choice header_choice true">①&emsp;(SP)-2SP</p>
            <p class="choice false">②&emsp;(SP)+1SP&emsp;</p>
            <p class="choice false">③&emsp;(SP)-1SP</p>
            <p class="choice false">④&emsp;(SP)+2SP</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（42）</span>
                设A、B均为无符号数,若A≥B则转向VALUE处,给出错误的条件转移指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEA%E3%80%81B%E5%9D%87%E4%B8%BA%E6%97%A0%E7%AC%A6%E5%8F%B7%E6%95%B0%2C%E8%8B%A5A%E2%89%A5B%E5%88%99%E8%BD%AC%E5%90%91VALUE%E5%A4%84%2C%E7%BB%99%E5%87%BA%E9%94%99%E8%AF%AF%E7%9A%84%E6%9D%A1%E4%BB%B6%E8%BD%AC%E7%A7%BB%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;JNB&emsp;VALUE</p>
            <p class="choice false">②&emsp;JAE&emsp;VALUE&emsp;</p>
            <p class="choice false">③&emsp;JNC&emsp;VALUE</p>
            <p class="choice true">④&emsp;JNS&emsp;VALUE</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（43）</span>
                设SP的初值为1000H，执行指令PUSH&emsp;AX后SP的值是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BESP%E7%9A%84%E5%88%9D%E5%80%BC%E4%B8%BA1000H%EF%BC%8C%E6%89%A7%E8%A1%8C%E6%8C%87%E4%BB%A4PUSH%26emsp%3BAX%E5%90%8ESP%E7%9A%84%E5%80%BC%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0FFFH</span>
                <span class="choice false">②&emsp;1001H</span>
                <span class="choice true">③&emsp;0FFEH</span>
                <span class="choice false">④&emsp;1002H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（44）</span>
                下列指令中,非法的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E4%B8%AD%2C%E9%9D%9E%E6%B3%95%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;MOV&emsp;AL,DX</p>
            <p class="choice false">②&emsp;SHR&emsp;DX,CL</p>
            <p class="choice false">③&emsp;IN&emsp;AL,DX</p>
            <p class="choice false">④&emsp;OUT&emsp;02,AL</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（45）</span>
                下列指令执行后对源操作数和目的操作数均无影响的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%E5%AF%B9%E6%BA%90%E6%93%8D%E4%BD%9C%E6%95%B0%E5%92%8C%E7%9B%AE%E7%9A%84%E6%93%8D%E4%BD%9C%E6%95%B0%E5%9D%87%E6%97%A0%E5%BD%B1%E5%93%8D%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;[BX+2],AX</p>
            <p class="choice false">②&emsp;SUB&emsp;AX,2476H</p>
            <p class="choice false">③&emsp;SBB&emsp;[SI],BX</p>
            <p class="choice true">④&emsp;CMP&emsp;AX,BX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（46）</span>
                设AX中存放的是带符号数,对其进行除8操作,能够完成此项功能的指令序列是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEAX%E4%B8%AD%E5%AD%98%E6%94%BE%E7%9A%84%E6%98%AF%E5%B8%A6%E7%AC%A6%E5%8F%B7%E6%95%B0%2C%E5%AF%B9%E5%85%B6%E8%BF%9B%E8%A1%8C%E9%99%A48%E6%93%8D%E4%BD%9C%2C%E8%83%BD%E5%A4%9F%E5%AE%8C%E6%88%90%E6%AD%A4%E9%A1%B9%E5%8A%9F%E8%83%BD%E7%9A%84%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①SHR&emsp;AX,2<br />
                &emsp;SHR&emsp;AX,2</p>
            <p class="choice false">②SAR&emsp;AX,2<br />
                &emsp;SAR&emsp;AX,1&emsp;</p>
            <p class="choice false">③MOV&emsp;CL,3<br />
                &emsp;SHR&emsp;AX,CL</p>
            <p class="choice true">④MOV&emsp;CL,3<br />
                &emsp;SAR&emsp;AX,CL</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（47）</span>
                设AL中是无符号数,试将AL内容扩展后送入BX中,&emsp;能够完成此项功能的指令序列是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEAL%E4%B8%AD%E6%98%AF%E6%97%A0%E7%AC%A6%E5%8F%B7%E6%95%B0%2C%E8%AF%95%E5%B0%86AL%E5%86%85%E5%AE%B9%E6%89%A9%E5%B1%95%E5%90%8E%E9%80%81%E5%85%A5BX%E4%B8%AD%2C%26emsp%3B%E8%83%BD%E5%A4%9F%E5%AE%8C%E6%88%90%E6%AD%A4%E9%A1%B9%E5%8A%9F%E8%83%BD%E7%9A%84%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①CBW<br />
                &emsp;MOV&emsp;BX,AX</p>
            <p class="choice true">②MOV&emsp;AH,0<br />
                &emsp;MOV&emsp;BX,AX</p>
            <p class="choice false">③MOV&emsp;AH,0FFH<br />
                &emsp;MOV&emsp;BX,AX</p>
            <p class="choice false">④MOV&emsp;BL,AL<br />
                &emsp;MOV&emsp;BH,AH</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（48）</span>
                若(AX)=1234H,(DX)=89ABH,执行XCHG&emsp;AX,DX指令后,AX、DX中的内容应是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%8B%A5%28AX%29%3D1234H%2C%28DX%29%3D89ABH%2C%E6%89%A7%E8%A1%8CXCHG%26emsp%3BAX%2CDX%E6%8C%87%E4%BB%A4%E5%90%8E%2CAX%E3%80%81DX%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E5%BA%94%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(AX)=1234H&emsp;(DX)=1234H</p>
            <p class="choice false">②&emsp;(AX)=12ABH&emsp;(DX)=8934H</p>
            <p class="choice true">③&emsp;(AX)=89ABH&emsp;(DX)=1234H</p>
            <p class="choice false">④&emsp;(AX)=89ABH&emsp;(DX)=89ABH</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（49）</span>
                (CF)=1时转移到目标地址的条件转移指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%28CF%29%3D1%E6%97%B6%E8%BD%AC%E7%A7%BB%E5%88%B0%E7%9B%AE%E6%A0%87%E5%9C%B0%E5%9D%80%E7%9A%84%E6%9D%A1%E4%BB%B6%E8%BD%AC%E7%A7%BB%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;JNC</span>
                <span class="choice true">②&emsp;JC</span>
                <span class="choice false">③&emsp;JZ</span>
                <span class="choice false">④&emsp;JS</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（50）</span>
                汇编语言源程序，可以是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E6%BA%90%E7%A8%8B%E5%BA%8F%EF%BC%8C%E5%8F%AF%E4%BB%A5%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①可以直接由机器执行</p>
            <p class="choice false">②&emsp;必须由编译程序生成目标程序才能执行</p>
            <p class="choice false">③&emsp;必须由解释程序生成目标程序才能执行&emsp;</p>
            <p class="choice true">④&emsp;必须由汇编程序汇编成目标程序才能执行</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（51）</span>
                完成(BX)-(CX) -&gt; AX的错误指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%AE%8C%E6%88%90%28BX%29-%28CX%29AX%E7%9A%84%E9%94%99%E8%AF%AF%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①SUB&emsp;BX,CX<br />
                &emsp;MOV&emsp;AX,BX</p>
            <p class="choice true">②XCHG&emsp;AX,CX<br />
                &emsp;SUB&emsp;AX,BX</p>
            <p class="choice false">③XCHG&emsp;AX,BX<br />
                &emsp;SUB&emsp;AX,CX</p>
            <p class="choice false">④MOV&emsp;AX,BX<br />
                &emsp;SUB&emsp;AX,CX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（52）</span>
                下列指令中操作数在代码中的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E4%B8%AD%E6%93%8D%E4%BD%9C%E6%95%B0%E5%9C%A8%E4%BB%A3%E7%A0%81%E4%B8%AD%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;AL,[100H]</p>
            <p class="choice true">②&emsp;MOV&emsp;AL,00H</p>
            <p class="choice false">③&emsp;MOV&emsp;[20H],AL</p>
            <p class="choice false">④&emsp;MOV&emsp;AL,BL</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（53）</span>
                下列指令中，影响或修改PSW内容的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E4%B8%AD%EF%BC%8C%E5%BD%B1%E5%93%8D%E6%88%96%E4%BF%AE%E6%94%B9PSW%E5%86%85%E5%AE%B9%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;PUSHF</span>
                <span class="choice true">②&emsp;POPF</span>
                <span class="choice false">③&emsp;JCXZ</span>
                <span class="choice false">④&emsp;LOOPZ</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（54）</span>
                下列有语法错误的语句是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%9C%89%E8%AF%AD%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;DB&emsp;12H</p>
            <p class="choice false">②&emsp;DW&emsp;4567H</p>
            <p class="choice true">③&emsp;DD&emsp;‘ABCD’</p>
            <p class="choice false">④&emsp;DB&emsp;‘ABCD’</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（55）</span>
                AL、BL中都是无符号数，若(AL)>(BL)时，转到NEXT处。在执行CMP&emsp;AL，BL指令后应选用的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=AL%E3%80%81BL%E4%B8%AD%E9%83%BD%E6%98%AF%E6%97%A0%E7%AC%A6%E5%8F%B7%E6%95%B0%EF%BC%8C%E8%8B%A5%28AL%29%3E%28BL%29%E6%97%B6%EF%BC%8C%E8%BD%AC%E5%88%B0NEXT%E5%A4%84%E3%80%82%E5%9C%A8%E6%89%A7%E8%A1%8CCMP%26emsp%3BAL%EF%BC%8CBL%E6%8C%87%E4%BB%A4%E5%90%8E%E5%BA%94%E9%80%89%E7%94%A8%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;JNBE&emsp;NEXT</p>
            <p class="choice false">②&emsp;JNLE&emsp;NEXT&emsp;</p>
            <p class="choice false">③&emsp;JBE&emsp;NEXT</p>
            <p class="choice false">④&emsp;JLE&emsp;NEXT</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（56）</span>
                使状态标志位CF清零的错误指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%8A%B6%E6%80%81%E6%A0%87%E5%BF%97%E4%BD%8DCF%E6%B8%85%E9%9B%B6%E7%9A%84%E9%94%99%E8%AF%AF%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;CLC</p>
            <p class="choice false">②&emsp;XOR&emsp;AX,AX</p>
            <p class="choice false">③&emsp;SUB&emsp;AX,AX</p>
            <p class="choice true">④&emsp;MOV&emsp;CF,0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（57）</span>
                执行POP&emsp;AX&emsp;指令正确的CPU操作过程是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%89%A7%E8%A1%8CPOP%26emsp%3BAX%26emsp%3B%E6%8C%87%E4%BB%A4%E6%AD%A3%E7%A1%AE%E7%9A%84CPU%E6%93%8D%E4%BD%9C%E8%BF%87%E7%A8%8B%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①i (SP)+1 -&gt; SP,((SP)) -&gt; AL<br />
                &emsp;ii (SP)+1 -&gt; SP,((SP)) -&gt; AH</p>
            <p class="choice false">②i (SP)+1 -&gt; SP,((SP)) -&gt; AH<br />
                &emsp;ii&emsp;(SP)+1 -&gt; SP,((SP)) -&gt; AL</p>
            <p class="choice true">③i ((SP)) -&gt; AL,(SP)+1 -&gt; SP<br />
                &emsp;ii ((SP)) -&gt; AH,(SP)+1 -&gt; SP</p>
            <p class="choice false">④i ((SP)) -&gt; AH,&emsp;(SP)+1 -&gt; SP<br />
                &emsp;ii ((SP)) -&gt; AL,&emsp;(SP)+1 -&gt; SP</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（58）</span><br />
                MOV&emsp;BX，0FFFEH<br />
                NEG&emsp;BX<br />
                NOT&emsp;BX<br />
                上述三条指令执行后，BX中的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BBX%EF%BC%8C0FFFEH%3Cbr/%3E%0ANEG%26emsp%3BBX%3Cbr/%3E%0ANOT%26emsp%3BBX%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E4%B8%89%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CBX%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;-1</span>
                <span class="choice false">②&emsp;-2</span>
                <span class="choice true">③&emsp;-3</span>
                <span class="choice false">④&emsp;-4</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（59）</span><br />
                ORG&emsp;200H<br />
                BUF&emsp;DB&emsp;12H，34H<br />
                ~~~<br />
                MOV&emsp;AX，WORD&emsp;PTR&emsp;BUF<br />
                上述指令语句执行后，AX中的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ORG%26emsp%3B200H%3Cbr/%3E%0ABUF%26emsp%3BDB%26emsp%3B12H%EF%BC%8C34H%3Cbr/%3E%0AMOV%26emsp%3BAX%EF%BC%8CWORD%26emsp%3BPTR%26emsp%3BBUF%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E8%AF%AD%E5%8F%A5%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAX%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;3412H</span>
                <span class="choice false">②&emsp;1234H</span>
                <span class="choice false">③&emsp;0200H</span>
                <span class="choice false">④&emsp;0012H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（60）</span>
                执行NEG指令对状态标志位CF有影响，其规则是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%89%A7%E8%A1%8CNEG%E6%8C%87%E4%BB%A4%E5%AF%B9%E7%8A%B6%E6%80%81%E6%A0%87%E5%BF%97%E4%BD%8DCF%E6%9C%89%E5%BD%B1%E5%93%8D%EF%BC%8C%E5%85%B6%E8%A7%84%E5%88%99%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;对正数求补时,(CF)=0</p>
            <p class="choice false">②&emsp;对负数求补时,(CF)=0</p>
            <p class="choice true">③&emsp;对非零数求补时,(CF)=1</p>
            <p class="choice false">④&emsp;对零求补时,(CF)=1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（61）</span>
                已知AL内容为压缩BCD码，对它进行加“1”操作，其中错误的指令序列是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5AL%E5%86%85%E5%AE%B9%E4%B8%BA%E5%8E%8B%E7%BC%A9BCD%E7%A0%81%EF%BC%8C%E5%AF%B9%E5%AE%83%E8%BF%9B%E8%A1%8C%E5%8A%A0%E2%80%9C1%E2%80%9D%E6%93%8D%E4%BD%9C%EF%BC%8C%E5%85%B6%E4%B8%AD%E9%94%99%E8%AF%AF%E7%9A%84%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①INC&emsp;AL<br />
                &emsp;DAA</p>
            <p class="choice false">②ADD&emsp;AL,1<br />
                &emsp; DAA</p>
            <p class="choice true">③ADC&emsp;AL,1<br />
                &emsp;DAA</p>
            <p class="choice false">④STC<br />
                &emsp;ADC&emsp;AL,0<br />
                &emsp;DAA</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（62）</span>
                设数据段有：DA1&emsp;DB&emsp;XX；是任一数据<br />
                &emsp;DA2&emsp;DB&emsp;0FEH<br />
                则下列两条指令：MOV&emsp;DL，DA1<br />
                &emsp;OR&emsp;DL，DA2<br />
                执行后，DL中的内容可能是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%95%B0%E6%8D%AE%E6%AE%B5%E6%9C%89%EF%BC%9ADA1%26emsp%3BDB%26emsp%3BXX%EF%BC%9B%E6%98%AF%E4%BB%BB%E4%B8%80%E6%95%B0%E6%8D%AE%3Cbr/%3E%0A%26emsp%3BDA2%26emsp%3BDB%26emsp%3B0FEH%3Cbr/%3E%0A%E5%88%99%E4%B8%8B%E5%88%97%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%EF%BC%9AMOV%26emsp%3BDL%EF%BC%8CDA1%3Cbr/%3E%0A%26emsp%3BOR%26emsp%3BDL%EF%BC%8CDA2%3Cbr/%3E%0A%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CDL%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E5%8F%AF%E8%83%BD%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;0FFH或0FEH</span>
                <span class="choice false">②&emsp;只能是0FEH</span>
                <span class="choice false">③&emsp;只能是0FFH</span>
                <span class="choice false">④&emsp;只能是01H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（63）</span><br />
                DB1&emsp;DB&emsp;8&emsp;DUP（2&emsp;DUP（3），3&emsp;DUP（2））<br />
                ~~~<br />
                MOV&emsp;AX，WORD&emsp;PTR&emsp;DB1[04H]<br />
                上面指令执行后，AX的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DB1%26emsp%3BDB%26emsp%3B8%26emsp%3BDUP%EF%BC%882%26emsp%3BDUP%EF%BC%883%EF%BC%89%EF%BC%8C3%26emsp%3BDUP%EF%BC%882%EF%BC%89%EF%BC%89%3Cbr/%3E%0AMOV%26emsp%3BAX%EF%BC%8CWORD%26emsp%3BPTR%26emsp%3BDB1%5B04H%5D%3Cbr/%3E%0A%E4%B8%8A%E9%9D%A2%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAX%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;0302H</span>
                <span class="choice false">②&emsp;0203H</span>
                <span class="choice false">③&emsp;0202H</span>
                <span class="choice false">④&emsp;0303H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（64）</span>
                伪指令&emsp;DA1&emsp;DB&emsp;04H&emsp;DUP（3&emsp;DUP（2），2&emsp;DUP（3））在数据区中能构成0203H操作数共有____<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E4%BC%AA%E6%8C%87%E4%BB%A4%26emsp%3BDA1%26emsp%3BDB%26emsp%3B04H%26emsp%3BDUP%EF%BC%883%26emsp%3BDUP%EF%BC%882%EF%BC%89%EF%BC%8C2%26emsp%3BDUP%EF%BC%883%EF%BC%89%EF%BC%89%E5%9C%A8%E6%95%B0%E6%8D%AE%E5%8C%BA%E4%B8%AD%E8%83%BD%E6%9E%84%E6%88%900203H%E6%93%8D%E4%BD%9C%E6%95%B0%E5%85%B1%E6%9C%89____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;7个</span>
                <span class="choice false">②&emsp;4个</span>
                <span class="choice true">③&emsp;3个</span>
                <span class="choice false">④&emsp;2个</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（65）</span>
                设BUF1和BUF2均为变量名，操作数部分合法的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEBUF1%E5%92%8CBUF2%E5%9D%87%E4%B8%BA%E5%8F%98%E9%87%8F%E5%90%8D%EF%BC%8C%E6%93%8D%E4%BD%9C%E6%95%B0%E9%83%A8%E5%88%86%E5%90%88%E6%B3%95%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;ADD&emsp;AL,BUF1*BUF2</p>
            <p class="choice false">②&emsp;ADD&emsp;AL,BUF1/BUF2</p>
            <p class="choice false">③&emsp;ADD&emsp;AL,BUF1+BUF2</p>
            <p class="choice true">④&emsp;ADD&emsp;AL,BUF2-BUF1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（66）</span><br />
                &emsp;MOV&emsp;BL,80H<br />
                &emsp;MOV&emsp;CL,2<br />
                &emsp;SAR&emsp;BL,CL<br />
                上述指令序列执行后，结果是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BBL%2C80H%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BCL%2C2%3Cbr/%3E%0A%26emsp%3BSAR%26emsp%3BBL%2CCL%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8C%E7%BB%93%E6%9E%9C%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(BL)=40H</p>
            <p class="choice false">②&emsp;(BL)=20H</p>
            <p class="choice false">③&emsp;(BL)=0C0H</p>
            <p class="choice true">④&emsp;(BL)=0E0H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（67）</span>
                已知(SP)=1FFFH,执行下列指令后，(SP)=____<br />
                ~~~<br />
                POPF<br />
                PUSH&emsp;AX<br />
                ~~~<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5%28SP%29%3D1FFFH%2C%E6%89%A7%E8%A1%8C%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%28SP%29%3D%3Cbr/%3E%0APOPF%3Cbr/%3E%0APUSH%26emsp%3BAX">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;2000H</span>
                <span class="choice false">②&emsp;2002H</span>
                <span class="choice false">③&emsp;1FFCH</span>
                <span class="choice true">④&emsp;1FFFH</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（68）</span>
                设<br />NUM1&emsp;EQU&emsp;100<br />
                NUM2=64H<br />
                下面指令执行后，使BL中全为1的指令是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BENUM1%26emsp%3BEQU%26emsp%3B100%3Cbr/%3E%0A%26emsp%3BNUM2%3D64H%3Cbr/%3E%0A%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8C%E4%BD%BFBL%E4%B8%AD%E5%85%A8%E4%B8%BA1%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;MOV&emsp;BL，NUM1&emsp;EQ&emsp;NUM2</p>
            <p class="choice false">②&emsp;MOV&emsp;BL，NUM1&emsp;LT&emsp;NUM2</p>
            <p class="choice false">③&emsp;MOV&emsp;BL，NUM1&emsp;NE&emsp;NUM2</p>
            <p class="choice false">④&emsp;MOV&emsp;BL，NUM1&emsp;GT&emsp;NUM2</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（69）</span>
                设(AL)=04H,(BL)=0F8H,执行MUL&emsp;BL指令后，结果为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28AL%29%3D04H%2C%28BL%29%3D0F8H%2C%E6%89%A7%E8%A1%8CMUL%26emsp%3BBL%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%E7%BB%93%E6%9E%9C%E4%B8%BA____">百度</a></p>
            <p class="choice header_choice true">①&emsp;(AX)=03E0H</p>
            <p class="choice false">②&emsp;(AX)=0FEE0H</p>
            <p class="choice false">③&emsp;(AX)=0032H</p>
            <p class="choice false">④&emsp;(AX)=00E0H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（70）</span><br />
                &emsp;ORG&emsp;100H<br />
                &emsp;NUM&emsp;EQU&emsp;8042H<br />
                &emsp;DA1&emsp;DB&emsp;56H<br />
                &emsp;~~~<br />
                &emsp;MOV&emsp;BX，OFFSET&emsp;DA1<br />
                上述程序段执行后BX中的值是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ORG%26emsp%3B100H%3Cbr/%3E%0A%26emsp%3BNUM%26emsp%3BEQU%26emsp%3B8042H%3Cbr/%3E%0A%26emsp%3BDA1%26emsp%3BDB%26emsp%3B56H%3Cbr/%3E%0AMOV%26emsp%3BBX%EF%BC%8COFFSET%26emsp%3BDA1%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8EBX%E4%B8%AD%E7%9A%84%E5%80%BC%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;56H</span>
                <span class="choice true">②&emsp;100H</span>
                <span class="choice false">③&emsp;101H</span>
                <span class="choice false">④&emsp;102H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（71）</span>
                设(AL)=63H&emsp;(BL)=29H&emsp;执行下面指令后<br />
                &emsp;SUB&emsp;AL,BL<br />
                &emsp;DAS<br />
                &emsp;AX的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28AL%29%3D63H%26emsp%3B%28BL%29%3D29H%26emsp%3B%E6%89%A7%E8%A1%8C%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%E5%90%8E%3Cbr/%3E%0A%26emsp%3BSUB%26emsp%3BAL%2CBL%3Cbr/%3E%0A%26emsp%3BDAS%3Cbr/%3E%0A%26emsp%3BAX%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;(AX)=0304H</p>
            <p class="choice false">②&emsp;(AX)=0034&emsp;</p>
            <p class="choice true">③&emsp;(AX)=0034H</p>
            <p class="choice false">④&emsp;(AX)=0304</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（72）</span>
                实现对AX中的带符号数除以2的指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%AE%9E%E7%8E%B0%E5%AF%B9AX%E4%B8%AD%E7%9A%84%E5%B8%A6%E7%AC%A6%E5%8F%B7%E6%95%B0%E9%99%A4%E4%BB%A52%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;IDIV&emsp;2</p>
            <p class="choice true">②&emsp;SAR&emsp;AX,1</p>
            <p class="choice false">③&emsp;ROR&emsp;AX,1</p>
            <p class="choice false">④&emsp;SHR&emsp;AX,1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（73）</span><br />
                &emsp;MOV&emsp;AL,-1<br />
                &emsp;NEG&emsp;AL<br />
                &emsp;XOR&emsp;AL,65<br />
                上述程序段执行后，AL的内容是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BAL%2C-1%3Cbr/%3E%0A%26emsp%3BNEG%26emsp%3BAL%3Cbr/%3E%0A%26emsp%3BXOR%26emsp%3BAL%2C65%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAL%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;40H</span>
                <span class="choice false">②&emsp;64H</span>
                <span class="choice false">③&emsp;01H</span>
                <span class="choice false">④&emsp;61H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（74）</span>
                设数据段中定义语句<br />
                DA1&emsp;DB&emsp;12H，34H<br />
                DA2&emsp;DW&emsp;12H，34H<br />
                下面有语法错误的语句是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%95%B0%E6%8D%AE%E6%AE%B5%E4%B8%AD%E5%AE%9A%E4%B9%89%E8%AF%AD%E5%8F%A5%3Cbr/%3E%0ADA1%26emsp%3BDB%26emsp%3B12H%EF%BC%8C34H%3Cbr/%3E%0ADA2%26emsp%3BDW%26emsp%3B12H%EF%BC%8C34H%3Cbr/%3E%0A%E4%B8%8B%E9%9D%A2%E6%9C%89%E8%AF%AD%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;BUF1&emsp;DW&emsp;DA1</p>
            <p class="choice true">②&emsp;MOV&emsp;DA1+1，AX</p>
            <p class="choice false">③&emsp;MOV&emsp;BYTE&emsp;PTR&emsp;DA2+1，AL</p>
            <p class="choice false">④&emsp;MOV&emsp;WORD&emsp;PTR&emsp;DA1，AX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（75）</span><br />
                &emsp;DA1&emsp;DW&emsp;2A05H<br />
                &emsp;DA2&emsp;DB&emsp;0FAH<br />
                &emsp;~~~<br />
                &emsp;MOV&emsp;AL,BYTE&emsp;PTR&emsp;DA1<br />
                &emsp;SUB&emsp;DA2,AL<br />
                上述指令执行后，DA2中的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DA1%26emsp%3BDW%26emsp%3B2A05H%3Cbr/%3E%0A%26emsp%3BDA2%26emsp%3BDB%26emsp%3B0FAH%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAL%2CBYTE%26emsp%3BPTR%26emsp%3BDA1%3Cbr/%3E%0A%26emsp%3BSUB%26emsp%3BDA2%2CAL%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CDA2%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0DAH</span>
                <span class="choice false">②&emsp;0FAH</span>
                <span class="choice true">③&emsp;0F5H</span>
                <span class="choice false">④&emsp;0D0H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（76）</span>
                在执行POP&emsp;[BX]指令，寻找目的操作数时，段地址和偏移地址分别是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%89%A7%E8%A1%8CPOP%26emsp%3B%5BBX%5D%E6%8C%87%E4%BB%A4%EF%BC%8C%E5%AF%BB%E6%89%BE%E7%9B%AE%E7%9A%84%E6%93%8D%E4%BD%9C%E6%95%B0%E6%97%B6%EF%BC%8C%E6%AE%B5%E5%9C%B0%E5%9D%80%E5%92%8C%E5%81%8F%E7%A7%BB%E5%9C%B0%E5%9D%80%E5%88%86%E5%88%AB%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;在DS和BX中</span>
                <span class="choice false">②&emsp;在ES和BX中</span>
                <span class="choice false">③&emsp;在SS和BX中</span>
                <span class="choice false">④&emsp;在CS和BX中</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（77）</span>
                MOV&emsp;AL，79<br />
                &emsp;ADD&emsp;AL,0B1H<br />
                &emsp;执行上述指令后，标志位CF和OF的值是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BAL%EF%BC%8C79%3Cbr/%3E%0A%26emsp%3BADD%26emsp%3BAL%2C0B1H%3Cbr/%3E%0A%26emsp%3B%E6%89%A7%E8%A1%8C%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%E6%A0%87%E5%BF%97%E4%BD%8DCF%E5%92%8COF%E7%9A%84%E5%80%BC%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(CF)=0,(OF)=0</p>
            <p class="choice false">②&emsp;(CF)=0,(OF)=1</p>
            <p class="choice true">③&emsp;(CF)=1,(OF)=0</p>
            <p class="choice false">④&emsp;(CF)=1,(OF)=1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（78）</span>
                <br />
                DA1&emsp;EQU&emsp;WORD&emsp;PTR&emsp;DA2<br />
                DA2&emsp;DB&emsp;0ABH，0CDH<br />
                &emsp;~~~<br />
                &emsp;SHL&emsp;DA1，1<br />
                &emsp;SHR&emsp;DA2，1<br />
                上述两条指令执行后，DA2中两字节单元内容分别是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DA1%26emsp%3BEQU%26emsp%3BWORD%26emsp%3BPTR%26emsp%3BDA2%3Cbr/%3E%0ADA2%26emsp%3BDB%26emsp%3B0ABH%EF%BC%8C0CDH%3Cbr/%3E%0A%26emsp%3BSHL%26emsp%3BDA1%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BSHR%26emsp%3BDA2%EF%BC%8C1%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CDA2%E4%B8%AD%E4%B8%A4%E5%AD%97%E8%8A%82%E5%8D%95%E5%85%83%E5%86%85%E5%AE%B9%E5%88%86%E5%88%AB%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0ABH，0CDH</span>
                <span class="choice true">②&emsp;2BH，9BH</span>
                <span class="choice false">③&emsp;4DH，57H</span>
                <span class="choice false">④&emsp;56H，9BH</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（79）</span>
                TEST&emsp;VAR,55H<br />
                JE&emsp;ZER0<br />
                ~~~<br />
                ZER0：……<br />
                上述程序段执行JE&emsp;ZER0指令后能够产生分支的条件是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=TEST%26emsp%3BVAR%2C55H%3Cbr/%3E%0AJE%26emsp%3BZER0%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0AZER0%EF%BC%9A%E2%80%A6%E2%80%A6%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8CJE%26emsp%3BZER0%E6%8C%87%E4%BB%A4%E5%90%8E%E8%83%BD%E5%A4%9F%E4%BA%A7%E7%94%9F%E5%88%86%E6%94%AF%E7%9A%84%E6%9D%A1%E4%BB%B6%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;VAR=0</p>
            <p class="choice false">②&emsp;VAR=55H&emsp;</p>
            <p class="choice false">③&emsp;VAR中第1，3，5，7位均为0</p>
            <p class="choice true">④&emsp;VAR中第0，2，4，6位均为0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（80）</span>
                XOR&emsp;AX,AX<br />
                &emsp;MOV&emsp;AL,90H<br />
                &emsp;CWD<br />
                &emsp;执行上述指令后，结果为____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=XOR%26emsp%3BAX%2CAX%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAL%2C90H%3Cbr/%3E%0A%26emsp%3BCWD%3Cbr/%3E%0A%26emsp%3B%E6%89%A7%E8%A1%8C%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%E7%BB%93%E6%9E%9C%E4%B8%BA____">百度</a></p>
            <p class="choice header_choice false">①&emsp;(DX)=0000,&emsp;(AX)=FF90H</p>
            <p class="choice false">②&emsp;(DX)=FFFFH,(AX)=0090H</p>
            <p class="choice false">③&emsp;(DX)=FFFFH,(AX)=FF90H</p>
            <p class="choice true">④&emsp;(DX)=0000,&emsp;(AX)=0090H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（81）</span>
                在程序采用DOS系统功能调用退出用户程序时，在使用INT&emsp;21H指令前，应选用____指令<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E7%A8%8B%E5%BA%8F%E9%87%87%E7%94%A8DOS%E7%B3%BB%E7%BB%9F%E5%8A%9F%E8%83%BD%E8%B0%83%E7%94%A8%E9%80%80%E5%87%BA%E7%94%A8%E6%88%B7%E7%A8%8B%E5%BA%8F%E6%97%B6%EF%BC%8C%E5%9C%A8%E4%BD%BF%E7%94%A8INT%26emsp%3B21H%E6%8C%87%E4%BB%A4%E5%89%8D%EF%BC%8C%E5%BA%94%E9%80%89%E7%94%A8____%E6%8C%87%E4%BB%A4">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;AX,4CH</p>
            <p class="choice false">②&emsp;MOV&emsp;AL,4CH</p>
            <p class="choice true">③&emsp;MOV&emsp;AH,4CH</p>
            <p class="choice false">④&emsp;RET</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（82）</span>
                设(AH)=0,(AL)=6H,(BL)=9H, 执行下面指令：<br />
                &emsp;ADD&emsp;AL，BL<br />
                &emsp;AAA<br />
                &emsp;之后，其结果是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28AH%29%3D0%2C%28AL%29%3D6H%2C%28BL%29%3D9H%2C%C2%A0%E6%89%A7%E8%A1%8C%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%EF%BC%9A%3Cbr/%3E%0A%26emsp%3BADD%26emsp%3BAL%EF%BC%8CBL%3Cbr/%3E%0A%26emsp%3BAAA%3Cbr/%3E%0A%26emsp%3B%E4%B9%8B%E5%90%8E%EF%BC%8C%E5%85%B6%E7%BB%93%E6%9E%9C%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;(AH)=1,(AL)=5</p>
            <p class="choice false">②&emsp;(AH)=0,(AL)=0FH</p>
            <p class="choice false">③&emsp;(AH)=1,(AL)=15</p>
            <p class="choice false">④&emsp;(AH)=0,(AL)=5</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（83）</span>
                STR1&emsp;DB&emsp;‘BeiJing&emsp;2009’<br />
                SCA&emsp;DB&emsp;‘J’<br />
                ~~~<br />
                LEA&emsp;DI，STR1<br />
                MOV&emsp;AL，SCA<br />
                MOV&emsp;CX，0CH<br />
                CLD<br />
                REPNE&emsp;SCASB<br />
                NEXT：……<br />
                程序运行到NEXT时&emsp;CX=____&emsp;ZF=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=STR1%26emsp%3BDB%26emsp%3B%E2%80%98BeiJing%26emsp%3B2009%E2%80%99%3Cbr/%3E%0ASCA%26emsp%3BDB%26emsp%3B%E2%80%98J%E2%80%99%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0ALEA%26emsp%3BDI%EF%BC%8CSTR1%3Cbr/%3E%0AMOV%26emsp%3BAL%EF%BC%8CSCA%3Cbr/%3E%0AMOV%26emsp%3BCX%EF%BC%8C0CH%3Cbr/%3E%0ACLD%3Cbr/%3E%0AREPNE%26emsp%3BSCASB%3Cbr/%3E%0ANEXT%EF%BC%9A%E2%80%A6%E2%80%A6%3Cbr/%3E%0A%E7%A8%8B%E5%BA%8F%E8%BF%90%E8%A1%8C%E5%88%B0NEXT%E6%97%B6%26emsp%3BCX%3D____%26emsp%3BZF%3D____">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;8和1</span>
                <span class="choice false">②&emsp;7和1</span>
                <span class="choice false">③&emsp;10和0</span>
                <span class="choice false">④&emsp;10和1</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（84）</span>
                VAR1&emsp;DW&emsp;1234H,89,255,-2,-0AH<br />
                VAR2&emsp;DB&emsp;34,78H,44,22,19,-12<br />
                &emsp;~~~<br />
                &emsp;MOV&emsp;AH,23H<br />
                &emsp;LEA&emsp;BX,VAR1+4<br />
                &emsp;MOV&emsp;AL,BYTE&emsp;PTR&emsp;[BX+1]<br />
                &emsp;MOV&emsp;SI,WORD&emsp;PTR&emsp;VAR2+3<br />
                程序段执行后&emsp;AX=____&emsp;SI=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=VAR1%26emsp%3BDW%26emsp%3B1234H%2C89%2C255%2C-2%2C-0AH%3Cbr/%3E%0AVAR2%26emsp%3BDB%26emsp%3B34%2C78H%2C44%2C22%2C19%2C-12%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAH%2C23H%3Cbr/%3E%0A%26emsp%3BLEA%26emsp%3BBX%2CVAR1%2B4%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAL%2CBYTE%26emsp%3BPTR%26emsp%3B%5BBX%2B1%5D%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BSI%2CWORD%26emsp%3BPTR%26emsp%3BVAR2%2B3%3Cbr/%3E%0A%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8E%26emsp%3BAX%3D____%26emsp%3BSI%3D____">百度</a></p>
            <p class="choice header_choice">①&emsp;AX=23FEH&emsp;SI=1317H</p>
            <p class="choice">②&emsp;AX=23FEH&emsp;SI=1316H</p>
            <p class="choice">③&emsp;AX=23FFH&emsp;SI=1316H</p>
            <p class="choice">④&emsp;AX=23FFH&emsp;SI=1317H</p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">调试结果为 AX = 2300H ， SI = 1316H 选项中没有答案</p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（85）</span>
                测试BL的内容是否与数据5AH相等，若相等则转移到NEXT处，可实现的方法是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B5%8B%E8%AF%95BL%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF%E5%90%A6%E4%B8%8E%E6%95%B0%E6%8D%AE5AH%E7%9B%B8%E7%AD%89%EF%BC%8C%E8%8B%A5%E7%9B%B8%E7%AD%89%E5%88%99%E8%BD%AC%E7%A7%BB%E5%88%B0NEXT%E5%A4%84%EF%BC%8C%E5%8F%AF%E5%AE%9E%E7%8E%B0%E7%9A%84%E6%96%B9%E6%B3%95%E6%98%AF____">百度</a></p>
            <p class="choice false header_choice">①TEST&emsp;BL,5AH<br />
                &emsp;JZ&emsp;NEXT</p>
            <p class="choice true">②XOR&emsp;BL,5AH<br />
                &emsp;JZ&emsp;NEXT</p>
            <p class="choice false">③AND&emsp;BL,5AH<br />
                &emsp;JZ&emsp;NEXT</p>
            <p class="choice false">④OR&emsp;BL,5AH<br />
                &emsp;JZ&emsp;NEXT</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（86）</span>
                使用DOS系统功能调用时，子程序编号(功能号)应先放入____寄存器中。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BD%BF%E7%94%A8DOS%E7%B3%BB%E7%BB%9F%E5%8A%9F%E8%83%BD%E8%B0%83%E7%94%A8%E6%97%B6%EF%BC%8C%E5%AD%90%E7%A8%8B%E5%BA%8F%E7%BC%96%E5%8F%B7%28%E5%8A%9F%E8%83%BD%E5%8F%B7%29%E5%BA%94%E5%85%88%E6%94%BE%E5%85%A5____%E5%AF%84%E5%AD%98%E5%99%A8%E4%B8%AD%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;AH</span>
                <span class="choice false">②&emsp;AL</span>
                <span class="choice false">③&emsp;DL</span>
                <span class="choice false">④&emsp;AX</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（87）</span>
                设(AL)=03H,能够完成将AL中的低4位代码变反，而其高4位代码不变的指令是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28AL%29%3D03H%2C%E8%83%BD%E5%A4%9F%E5%AE%8C%E6%88%90%E5%B0%86AL%E4%B8%AD%E7%9A%84%E4%BD%8E4%E4%BD%8D%E4%BB%A3%E7%A0%81%E5%8F%98%E5%8F%8D%EF%BC%8C%E8%80%8C%E5%85%B6%E9%AB%984%E4%BD%8D%E4%BB%A3%E7%A0%81%E4%B8%8D%E5%8F%98%E7%9A%84%E6%8C%87%E4%BB%A4%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;AND&emsp;AL，0FH</p>
            <p class="choice true">②&emsp;XOR&emsp;AL，0FH</p>
            <p class="choice false">③&emsp;OR&emsp;AL，0FH</p>
            <p class="choice false">④&emsp;SUB&emsp;AL，0FH</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（88）</span>
                下列指令能够使AX中的数据必为奇数的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E8%83%BD%E5%A4%9F%E4%BD%BFAX%E4%B8%AD%E7%9A%84%E6%95%B0%E6%8D%AE%E5%BF%85%E4%B8%BA%E5%A5%87%E6%95%B0%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;AND&emsp;AX,0001H</p>
            <p class="choice false">②&emsp;XOR&emsp;AX,0001H</p>
            <p class="choice true">③&emsp;OR&emsp;AX,0001H</p>
            <p class="choice false">④&emsp;ADD&emsp;AX,0001H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（89）</span>
                下列指令中有语法错误的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%8C%87%E4%BB%A4%E4%B8%AD%E6%9C%89%E8%AF%AD%E6%B3%95%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;MOV&emsp;CS,AX</p>
            <p class="choice false">②&emsp;MOV&emsp;DS,AX</p>
            <p class="choice false">③&emsp;MOV&emsp;SS,AX</p>
            <p class="choice false">④&emsp;MOV&emsp;ES,AX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（90）</span>
                BUFF单元开始，连续存放了十个字节数据，欲找出与AL中内容不同的数，并将不同数据的地址偏移量送ADR单元，应选用的指令序列是____&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=BUFF%E5%8D%95%E5%85%83%E5%BC%80%E5%A7%8B%EF%BC%8C%E8%BF%9E%E7%BB%AD%E5%AD%98%E6%94%BE%E4%BA%86%E5%8D%81%E4%B8%AA%E5%AD%97%E8%8A%82%E6%95%B0%E6%8D%AE%EF%BC%8C%E6%AC%B2%E6%89%BE%E5%87%BA%E4%B8%8EAL%E4%B8%AD%E5%86%85%E5%AE%B9%E4%B8%8D%E5%90%8C%E7%9A%84%E6%95%B0%EF%BC%8C%E5%B9%B6%E5%B0%86%E4%B8%8D%E5%90%8C%E6%95%B0%E6%8D%AE%E7%9A%84%E5%9C%B0%E5%9D%80%E5%81%8F%E7%A7%BB%E9%87%8F%E9%80%81ADR%E5%8D%95%E5%85%83%EF%BC%8C%E5%BA%94%E9%80%89%E7%94%A8%E7%9A%84%E6%8C%87%E4%BB%A4%E5%BA%8F%E5%88%97%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①REPZ&emsp;CMPSB<br />
                &emsp;JZ&emsp;K1<br />
                &emsp;MOV&emsp;ADR,DI<br />
                &emsp;K1:&emsp;……</p>
            <p class="choice false">②REPNZ&emsp;CMPSB<br />
                &emsp;JZ&emsp;K1<br />
                &emsp;MOV&emsp;ADR,DI<br />
                &emsp;K1:&emsp;……</p>
            <p class="choice true">③REPZ&emsp;SCASB<br />
                &emsp;JZ&emsp;K1<br />
                &emsp;DEC&emsp;DI<br />
                &emsp;MOV&emsp;ADR,DI<br />
                &emsp;K1:&emsp;……</p>
            <p class="choice false">④REPNZ&emsp;SCASB<br />
                &emsp;JNZ&emsp;K1<br />
                &emsp;DEC&emsp;DI<br />
                &emsp;MOV&emsp;ADR,DI<br />
                &emsp;K1:&emsp;……</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（91）</span>
                已知AX=0FFFFH，DX=0001H<br />
                &emsp;MOV&emsp;CX，2<br />
                &emsp;LOP：SHL&emsp;AX，1<br />
                &emsp;RCL&emsp;DX，1<br />
                &emsp;LOOP&emsp;LOP<br />
                上述程序段执行后DX=____&emsp;AX=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5AX%3D0FFFFH%EF%BC%8CDX%3D0001H%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BCX%EF%BC%8C2%3Cbr/%3E%0A%26emsp%3BLOP%EF%BC%9ASHL%26emsp%3BAX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BRCL%26emsp%3BDX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BLOOP%26emsp%3BLOP%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8EDX%3D____%26emsp%3BAX%3D____">百度</a></p>
            <p class="choice header_choice false">①&emsp;DX=0006H&emsp;AX=0FFFDH</p>
            <p class="choice false">②&emsp;DX=0006H&emsp;AX=0FFFCH</p>
            <p class="choice false">③&emsp;DX=0007H&emsp;AX=0FFFDH</p>
            <p class="choice true">④&emsp;DX=0007H&emsp;AX=0FFFCH</p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <pre class="answer-code"><code class="nohighlight x86asm">assume cs:code

code segment
start:
    mov ax,0ffffh
    mov dx,0001h
    mov cx,2  ; 循环执行两次
lop:
    shl ax,1  ; 逻辑左移，进位放在cf

    rcl dx,1  ; 带进位的左环移，这里会 受到上面那条语句的影响
    ; 上面两条语句组合效果就是：把ax左边的最高一位放到dx的最低一位
    loop lop
    ; 第一次循环是
    ; ax = FFFE , E 就是 1110
    ; cf = 1
    ; dx = 0003 ， 3 就是 0011
    ; 效果刚好就是把ax左边的最高一位放到dx的最低一位

    ; 第二次循环也一样
    ; ax = FFFC ， C 就是 1100
    ; cf = 1
    ; dx = 0007 ， 7 就是 0111

code ends

end start</code></pre>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（92）</span>
                ARRAY&emsp;DW&emsp;6,9,$+4,10H,$+4<br />
                ~~~<br />
                &emsp;MOV&emsp;AX,ARRAY+4<br />
                &emsp;设变量ARRAY的偏移量是0084H，上述指令执行后AX中的内容是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ARRAY%26emsp%3BDW%26emsp%3B6%2C9%2C%24%2B4%2C10H%2C%24%2B4%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAX%2CARRAY%2B4%3Cbr/%3E%0A%26emsp%3B%E8%AE%BE%E5%8F%98%E9%87%8FARRAY%E7%9A%84%E5%81%8F%E7%A7%BB%E9%87%8F%E6%98%AF0084H%EF%BC%8C%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8EAX%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0009H</span>
                <span class="choice true">②&emsp;008CH</span>
                <span class="choice false">③&emsp;0090H</span>
                <span class="choice false">④&emsp;0010H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（93）</span>
                已知AX=7865H，BX=89AAH<br />
                CLC<br />
                &emsp;ADD&emsp;AX，BX<br />
                &emsp;OR&emsp;BX，AX<br />
                &emsp;RCR&emsp;AX，1<br />
                &emsp;RCL&emsp;BX，1<br />
                &emsp;程序执行后，AX=____ BX=____ CF=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5AX%3D7865H%EF%BC%8CBX%3D89AAH%3Cbr/%3E%0ACLC%3Cbr/%3E%0A%26emsp%3BADD%26emsp%3BAX%EF%BC%8CBX%3Cbr/%3E%0A%26emsp%3BOR%26emsp%3BBX%EF%BC%8CAX%3Cbr/%3E%0A%26emsp%3BRCR%26emsp%3BAX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BRCL%26emsp%3BBX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3B%E7%A8%8B%E5%BA%8F%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAX%3D____BX%3D____CF%3D____">百度</a></p>
            <p class="choice header_choice true">①&emsp;(AX)=0107H&emsp;(BX)=175FH&emsp;(CF)=1</p>
            <p class="choice false">②&emsp;(AX)=0106H&emsp;(BX)=175EH&emsp;(CF)=1</p>
            <p class="choice  false">③&emsp;(AX)=0107H&emsp;(BX)=175EH&emsp;(CF)=0</p>
            <p class="choice false">④&emsp;(AX)=0106H&emsp;(BX)=175FH&emsp;(CF)=0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（94）</span>
                设(SS)=338AH,(SP)=450H,执行&emsp;PUSH&emsp;BX和&emsp;PUSHF两条指令后，堆栈顶部的物理地址是____&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%28SS%29%3D338AH%2C%28SP%29%3D450H%2C%E6%89%A7%E8%A1%8C%26emsp%3BPUSH%26emsp%3BBX%E5%92%8C%26emsp%3BPUSHF%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%E5%90%8E%EF%BC%8C%E5%A0%86%E6%A0%88%E9%A1%B6%E9%83%A8%E7%9A%84%E7%89%A9%E7%90%86%E5%9C%B0%E5%9D%80%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice true">①&emsp;33CECH</span>
                <span class="choice false">②&emsp;33CF2H</span>
                <span class="choice false">③&emsp;33CF4H</span>
                <span class="choice false">④&emsp;33CE8H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（95）</span>
                不能表示存储单元逻辑地址是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8D%E8%83%BD%E8%A1%A8%E7%A4%BA%E5%AD%98%E5%82%A8%E5%8D%95%E5%85%83%E9%80%BB%E8%BE%91%E5%9C%B0%E5%9D%80%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;变量名</span>
                <span class="choice false">②&emsp;标号名</span>
                <span class="choice false">③&emsp;段名</span>
                <span class="choice true">④&emsp;符号名</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（96）</span>
                VAY1&emsp;DW&emsp;?<br />
                &emsp;VAY2&emsp;EQU&emsp;Byte&emsp;PTR&emsp;VAY1<br />
                &emsp;经过以上定义后,VAY1与VAY2之间的关系是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=VAY1%26emsp%3BDW%26emsp%3B%3F%3Cbr/%3E%0A%26emsp%3BVAY2%26emsp%3BEQU%26emsp%3BByte%26emsp%3BPTR%26emsp%3BVAY1%3Cbr/%3E%0A%26emsp%3B%E7%BB%8F%E8%BF%87%E4%BB%A5%E4%B8%8A%E5%AE%9A%E4%B9%89%E5%90%8E%2CVAY1%E4%B8%8EVAY2%E4%B9%8B%E9%97%B4%E7%9A%84%E5%85%B3%E7%B3%BB%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;段地址相同,偏移地址不同</p>
            <p class="choice false">②&emsp;段地址不同,偏移地址相同</p>
            <p class="choice false">③&emsp;段地址不同,偏移地址不同</p>
            <p class="choice true">④&emsp;段地址相同,偏移地址相同</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（97）</span>
                不合法的变量类型是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8D%E5%90%88%E6%B3%95%E7%9A%84%E5%8F%98%E9%87%8F%E7%B1%BB%E5%9E%8B%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;一字节</span>
                <span class="choice false">②&emsp;二字节</span>
                <span class="choice true">③&emsp;三字节</span>
                <span class="choice false">④&emsp;四字节</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（98）</span>
                在存储器中定义20个字长的数据缓冲区的伪指令是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%AD%98%E5%82%A8%E5%99%A8%E4%B8%AD%E5%AE%9A%E4%B9%8920%E4%B8%AA%E5%AD%97%E9%95%BF%E7%9A%84%E6%95%B0%E6%8D%AE%E7%BC%93%E5%86%B2%E5%8C%BA%E7%9A%84%E4%BC%AA%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;Buffer&emsp;EQU&emsp;20</p>
            <p class="choice true">②&emsp;Buffer&emsp;DW&emsp;20&emsp;DUP(?)</p>
            <p class="choice false">③&emsp;Buffer&emsp;DW&emsp;20</p>
            <p class="choice false">④&emsp;Buffer&emsp;DB&emsp;20&emsp;DUP(?)</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（99）</span>
            下列操作中允许段超越前缀的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E6%93%8D%E4%BD%9C%E4%B8%AD%E5%85%81%E8%AE%B8%E6%AE%B5%E8%B6%85%E8%B6%8A%E5%89%8D%E7%BC%80%E7%9A%84%E6%98%AF____">百度</a>
            </p>
            <p class="choice header_choice true">①取指令</p>
            <p class="choice false">②存目的串</p>
            <p class="choice false">③以BP为基址存取操作数</p>
            <p class="choice false">④堆栈操作</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（100）</span>
                下面程序段是判断两个存储单元是否同为负数，若是，则AX置全1，否则AX置0<br />
                试在空白处各填上适当的条件转移指令(两空白处要利用不同的标志位选用不同的条件转移指令)。<br />
                VAR1&emsp;DW&emsp;××××<br />
                VAR2&emsp;DW&emsp;××××<br />
                ~~~<br />
                MOV&emsp;AX，VAR1<br />
                MOV&emsp;BX，VAR2<br />
                XOR&emsp;AX，BX<br />
                &emsp;________<br />
                &emsp;TEST&emsp;BX，8000H<br />
                &emsp;________<br />
                &emsp;MOV&emsp;AX，0FFFFH<br />
                NEXT：MOV&emsp;AX，0<br />
                ~~~<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%98%AF%E5%88%A4%E6%96%AD%E4%B8%A4%E4%B8%AA%E5%AD%98%E5%82%A8%E5%8D%95%E5%85%83%E6%98%AF%E5%90%A6%E5%90%8C%E4%B8%BA%E8%B4%9F%E6%95%B0%EF%BC%8C%E8%8B%A5%E6%98%AF%EF%BC%8C%E5%88%99AX%E7%BD%AE%E5%85%A81%EF%BC%8C%E5%90%A6%E5%88%99AX%E7%BD%AE0%3Cbr/%3E%0A%E8%AF%95%E5%9C%A8%E7%A9%BA%E7%99%BD%E5%A4%84%E5%90%84%E5%A1%AB%E4%B8%8A%E9%80%82%E5%BD%93%E7%9A%84%E6%9D%A1%E4%BB%B6%E8%BD%AC%E7%A7%BB%E6%8C%87%E4%BB%A4%28%E4%B8%A4%E7%A9%BA%E7%99%BD%E5%A4%84%E8%A6%81%E5%88%A9%E7%94%A8%E4%B8%8D%E5%90%8C%E7%9A%84%E6%A0%87%E5%BF%97%E4%BD%8D%E9%80%89%E7%94%A8%E4%B8%8D%E5%90%8C%E7%9A%84%E6%9D%A1%E4%BB%B6%E8%BD%AC%E7%A7%BB%E6%8C%87%E4%BB%A4%29%E3%80%82%3Cbr/%3E%0AVAR1%26emsp%3BDW%26emsp%3B%C3%97%C3%97%C3%97%C3%97%3Cbr/%3E%0AVAR2%26emsp%3BDW%26emsp%3B%C3%97%C3%97%C3%97%C3%97%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0AMOV%26emsp%3BAX%EF%BC%8CVAR1%3Cbr/%3E%0AMOV%26emsp%3BBX%EF%BC%8CVAR2%3Cbr/%3E%0AXOR%26emsp%3BAX%EF%BC%8CBX%3Cbr/%3E%0A%26emsp%3B%3Cbr/%3E%0A%26emsp%3BTEST%26emsp%3BBX%EF%BC%8C8000H%3Cbr/%3E%0A%26emsp%3B%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAX%EF%BC%8C0FFFFH%3Cbr/%3E%0ANEXT%EF%BC%9AMOV%26emsp%3BAX%EF%BC%8C0%3Cbr/%3E%0A%7E%7E%7E">百度</a></p>
            <p class="choice header_choice false">①JNS&emsp;NEXT<br />
                &emsp;JE&emsp;NEXT</p>
            <p class="choice true">②JS&emsp;NEXT<br />
                &emsp;JE&emsp;NEXT</p>
            <p class="choice false">③JC&emsp;NEXT<br />
                &emsp;JZ&emsp;NEXT</p>
            <p class="choice false">④JNC&emsp;NEXT<br />
                &emsp;JNZ&emsp;NEXT</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（101）</span><br />
                &emsp;VARY1&emsp;EQU&emsp;BYTE&emsp;PTR&emsp;VARY2<br />
                &emsp;VARY2&emsp;DW&emsp;0ABCDH<br />
                &emsp;~~~<br />
                &emsp;SHL&emsp;VARY1,1<br />
                &emsp;SHR&emsp;VARY2,1<br />
                &emsp;上述两条指令执行后,VARY2字存储单元内容是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=VARY1%26emsp%3BEQU%26emsp%3BBYTE%26emsp%3BPTR%26emsp%3BVARY2%3Cbr/%3E%0A%26emsp%3BVARY2%26emsp%3BDW%26emsp%3B0ABCDH%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BSHL%26emsp%3BVARY1%2C1%3Cbr/%3E%0A%26emsp%3BSHR%26emsp%3BVARY2%2C1%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%2CVARY2%E5%AD%97%E5%AD%98%E5%82%A8%E5%8D%95%E5%85%83%E5%86%85%E5%AE%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0ABCDH</span>
                <span class="choice false">②&emsp;0BCDEH</span>
                <span class="choice true">③&emsp;55CDH</span>
                <span class="choice false">④&emsp;0AB55H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（102）</span><br />
                &emsp;DEC2&emsp;DB&emsp;‘56’<br />
                &emsp;~~~<br />
                &emsp;XOR&emsp;DI，DI<br />
                &emsp;MOV&emsp;BL，DEC2[DI+1]<br />
                &emsp;AND&emsp;BL，0FH<br />
                &emsp;MOV&emsp;AL，DEC2[DI]<br />
                &emsp;AND&emsp;AL，0FH<br />
                &emsp;MOV&emsp;DL，10<br />
                MUL&emsp;DL<br />
                ADD&emsp;AL，BL<br />
                上述程序段执行后，AL=____&emsp;BL=____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DEC2%26emsp%3BDB%26emsp%3B%E2%80%9856%E2%80%99%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BXOR%26emsp%3BDI%EF%BC%8CDI%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BBL%EF%BC%8CDEC2%5BDI%2B1%5D%3Cbr/%3E%0A%26emsp%3BAND%26emsp%3BBL%EF%BC%8C0FH%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAL%EF%BC%8CDEC2%5BDI%5D%3Cbr/%3E%0A%26emsp%3BAND%26emsp%3BAL%EF%BC%8C0FH%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BDL%EF%BC%8C10%3Cbr/%3E%0AMUL%26emsp%3BDL%3Cbr/%3E%0AADD%26emsp%3BAL%EF%BC%8CBL%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAL%3D____%26emsp%3BBL%3D____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;AL=56&emsp;BL=7</p>
            <p class="choice false">②&emsp;AL=55&emsp;BL=6</p>
            <p class="choice true">③&emsp;AL=56&emsp;BL=6</p>
            <p class="choice false">④&emsp;AL=55&emsp;BL=7</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（103）</span>
                设(SP)=0028H,执行段内返回指令RET&emsp;6后，SP的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%28SP%29%3D0028H%2C%E6%89%A7%E8%A1%8C%E6%AE%B5%E5%86%85%E8%BF%94%E5%9B%9E%E6%8C%87%E4%BB%A4RET%26emsp%3B6%E5%90%8E%EF%BC%8CSP%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;0036H</span>
                <span class="choice false">②&emsp;0022H</span>
                <span class="choice true">③&emsp;0030H</span>
                <span class="choice false">④&emsp;0020H</span>
            </p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                    ret 6 相当于下面两条指令<br />
                    pop ip<br />
                    add sp,6
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（104）</span>
                汇编语言语句格式中,根据对符号名的规定,错误的解释是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E8%AF%AD%E5%8F%A5%E6%A0%BC%E5%BC%8F%E4%B8%AD%2C%E6%A0%B9%E6%8D%AE%E5%AF%B9%E7%AC%A6%E5%8F%B7%E5%90%8D%E7%9A%84%E8%A7%84%E5%AE%9A%2C%E9%94%99%E8%AF%AF%E7%9A%84%E8%A7%A3%E9%87%8A%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①名字的第一个字符只可以是大小写英文字母及?、@、_等</p>
            <p class="choice true">②名字的第一个字符可以是数字</p>
            <p class="choice false">③名字的有效长度≤31个字符</p>
            <p class="choice false">④名字的最后一个字符可以是数字</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（105）</span>
                下列语句中能实现留空8个字节单元的语句是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E5%88%97%E8%AF%AD%E5%8F%A5%E4%B8%AD%E8%83%BD%E5%AE%9E%E7%8E%B0%E7%95%99%E7%A9%BA8%E4%B8%AA%E5%AD%97%E8%8A%82%E5%8D%95%E5%85%83%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;DATA1&emsp;DT&emsp;?</p>
            <p class="choice false">②&emsp;DATA2&emsp;DW&emsp;?</p>
            <p class="choice false">③&emsp;DATA3&emsp;DD&emsp;?</p>
            <p class="choice true">④&emsp;DATA4&emsp;DQ&emsp;?</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（106）</span>
                已知AX=0078H，BX=0408H<br />
                &emsp;SHR&emsp;BX，1<br />
                &emsp;AND&emsp;BX，0F0FH<br />
                &emsp;MOV&emsp;CX，4<br />
                LOP：XCHG&emsp;BH，BL<br />
                DIV&emsp;BL<br />
                SAL&emsp;AX，1<br />
                LOOP&emsp;LOP<br />
                上述程序段执行后，AX=____&emsp;BX=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5AX%3D0078H%EF%BC%8CBX%3D0408H%3Cbr/%3E%0A%26emsp%3BSHR%26emsp%3BBX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BAND%26emsp%3BBX%EF%BC%8C0F0FH%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BCX%EF%BC%8C4%3Cbr/%3E%0ALOP%EF%BC%9AXCHG%26emsp%3BBH%EF%BC%8CBL%3Cbr/%3E%0ADIV%26emsp%3BBL%3Cbr/%3E%0ASAL%26emsp%3BAX%EF%BC%8C1%3Cbr/%3E%0ALOOP%26emsp%3BLOP%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CAX%3D____%26emsp%3BBX%3D____">百度</a></p>
            <p class="choice header_choice false">①&emsp;30和0402H</p>
            <p class="choice true">②&emsp;30和&emsp;0204H&emsp;</p>
            <p class="choice false">③&emsp;35和0400H</p>
            <p class="choice false">④&emsp;35和&emsp;0400H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（107）</span>
                yeqianyi&emsp;DW&emsp;10H&emsp;DUP(3&emsp;DUP(2,50),3,5)<br />
                &emsp;上述语句汇编后,为变量yeqianyi分配的存储单元字节数是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=yeqianyi%26emsp%3BDW%26emsp%3B10H%26emsp%3BDUP%283%26emsp%3BDUP%282%2C50%29%2C3%2C5%29%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E8%AF%AD%E5%8F%A5%E6%B1%87%E7%BC%96%E5%90%8E%2C%E4%B8%BA%E5%8F%98%E9%87%8Fyeqianyi%E5%88%86%E9%85%8D%E7%9A%84%E5%AD%98%E5%82%A8%E5%8D%95%E5%85%83%E5%AD%97%E8%8A%82%E6%95%B0%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;80H</span>
                <span class="choice true">②&emsp;100H</span>
                <span class="choice false">③&emsp;50H</span>
                <span class="choice false">④&emsp;124H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（108）</span>
                在汇编语言源程序中,每个语句可以由四项组成,如语句要完成一定功能,那么该语句中不可省略的项是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E6%BA%90%E7%A8%8B%E5%BA%8F%E4%B8%AD%2C%E6%AF%8F%E4%B8%AA%E8%AF%AD%E5%8F%A5%E5%8F%AF%E4%BB%A5%E7%94%B1%E5%9B%9B%E9%A1%B9%E7%BB%84%E6%88%90%2C%E5%A6%82%E8%AF%AD%E5%8F%A5%E8%A6%81%E5%AE%8C%E6%88%90%E4%B8%80%E5%AE%9A%E5%8A%9F%E8%83%BD%2C%E9%82%A3%E4%B9%88%E8%AF%A5%E8%AF%AD%E5%8F%A5%E4%B8%AD%E4%B8%8D%E5%8F%AF%E7%9C%81%E7%95%A5%E7%9A%84%E9%A1%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;名字项</span>
                <span class="choice true">②&emsp;操作项</span>
                <span class="choice false">③&emsp;操作数项</span>
                <span class="choice false">④&emsp;注释项</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（109）</span>
                在汇编语言源程序中,对END语句的叙述正确的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E6%B1%87%E7%BC%96%E8%AF%AD%E8%A8%80%E6%BA%90%E7%A8%8B%E5%BA%8F%E4%B8%AD%2C%E5%AF%B9END%E8%AF%AD%E5%8F%A5%E7%9A%84%E5%8F%99%E8%BF%B0%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;END语句是一可执行语句</p>
            <p class="choice false">②&emsp;END语句表示程序执行到此结束</p>
            <p class="choice true">③&emsp;END语句表示源程序到此结束</p>
            <p class="choice false">④&emsp;END语句在汇编后产生机器代码</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（110）</span>
                设数据段中有:<br />
                &emsp;DATA1&emsp;DB&emsp;10H,00H<br />
                &emsp;DATA2&emsp;DW&emsp;20H,30H<br />
                &emsp;在下面指令中,使用变量有错误的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%95%B0%E6%8D%AE%E6%AE%B5%E4%B8%AD%E6%9C%89%3A%3Cbr/%3E%0A%26emsp%3BDATA1%26emsp%3BDB%26emsp%3B10H%2C00H%3Cbr/%3E%0A%26emsp%3BDATA2%26emsp%3BDW%26emsp%3B20H%2C30H%3Cbr/%3E%0A%26emsp%3B%E5%9C%A8%E4%B8%8B%E9%9D%A2%E6%8C%87%E4%BB%A4%E4%B8%AD%2C%E4%BD%BF%E7%94%A8%E5%8F%98%E9%87%8F%E6%9C%89%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice true">①&emsp;MOV&emsp;DATA1,AX</p>
            <p class="choice false">②&emsp;MOV&emsp;BYTE&emsp;PTR&emsp;DATA2,AL</p>
            <p class="choice false">③&emsp;ARRD&emsp;DW&emsp;DATA1</p>
            <p class="choice false">④&emsp;MOV&emsp;WORD&emsp;PTR&emsp;DATA1,AX</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（111）</span>
                下面对伪指令语句的说明,正确的是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%8B%E9%9D%A2%E5%AF%B9%E4%BC%AA%E6%8C%87%E4%BB%A4%E8%AF%AD%E5%8F%A5%E7%9A%84%E8%AF%B4%E6%98%8E%2C%E6%AD%A3%E7%A1%AE%E7%9A%84%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①汇编程序将伪指令翻译成机器代码。</p>
            <p class="choice false">②伪指令在执行时完成其功能。</p>
            <p class="choice true">③伪指令的功能是指示、引导汇编程序在汇编过程中所完成的不同操作。</p>
            <p class="choice false">④当汇编结束后,目标程序中仍保留伪指令。</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（112）</span>
                条件转移指令JNBE&emsp;产生转移的条件是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%9D%A1%E4%BB%B6%E8%BD%AC%E7%A7%BB%E6%8C%87%E4%BB%A4JNBE%26emsp%3B%E4%BA%A7%E7%94%9F%E8%BD%AC%E7%A7%BB%E7%9A%84%E6%9D%A1%E4%BB%B6%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;CF=0&emsp;AND&emsp;ZF=0</p>
            <p class="choice false">②&emsp;CF=0&emsp;AND&emsp;ZF=1</p>
            <p class="choice false">③&emsp;CF=1&emsp;AND&emsp;ZF=0</p>
            <p class="choice false">④&emsp;CF=1&emsp;AND&emsp;ZF=1</p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">参考 http://blog.eonew.cn/archives/254</p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（113）</span>
                设定义BUF&emsp;DW&emsp;100&emsp;DUP(0),则指令“MOV&emsp;CX,SIZE&emsp;BUF”的等效指令是____<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%AE%BE%E5%AE%9A%E4%B9%89BUF%26emsp%3BDW%26emsp%3B100%26emsp%3BDUP%280%29%2C%E5%88%99%E6%8C%87%E4%BB%A4%E2%80%9CMOV%26emsp%3BCX%2CSIZE%26emsp%3BBUF%E2%80%9D%E7%9A%84%E7%AD%89%E6%95%88%E6%8C%87%E4%BB%A4%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;CX,100</p>
            <p class="choice true">②&emsp;MOV&emsp;CX,200</p>
            <p class="choice false">③&emsp;MOV&emsp;CX,400</p>
            <p class="choice false">④&emsp;MOV&emsp;CX,100&emsp;DUP(0)</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（114）</span><br />
                AR1&emsp;DB‘ABCDEFGH’<br />
                AR2&emsp;DB&emsp;O<br />
                ~~~<br />
                MOV&emsp;AH,1<br />
                INT&emsp;21H<br />
                AND&emsp;AL,0FH<br />
                DEC&emsp;AL<br />
                LEA&emsp;BX,AR1<br />
                XLAT&emsp;<br />
                MOV&emsp;AR2,AL<br />
                假设键盘输入数字4,则执行后(AR2)=____;&emsp;执行后CF=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=AR1%26emsp%3BDB%E2%80%98ABCDEFGH%E2%80%99%3Cbr/%3E%0AAR2%26emsp%3BDB%26emsp%3BO%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0AMOV%26emsp%3BAH%2C1%3Cbr/%3E%0AINT%26emsp%3B21H%3Cbr/%3E%0AAND%26emsp%3BAL%2C0FH%3Cbr/%3E%0ADEC%26emsp%3BAL%3Cbr/%3E%0ALEA%26emsp%3BBX%2CAR1%3Cbr/%3E%0AXLAT%26emsp%3BAR1%3Cbr/%3E%0AMOV%26emsp%3BAR2%2CAL%3Cbr/%3E%0A%E5%81%87%E8%AE%BE%E9%94%AE%E7%9B%98%E8%BE%93%E5%85%A5%E6%95%B0%E5%AD%974%2C%E5%88%99%E6%89%A7%E8%A1%8C%E5%90%8E%28AR2%29%3D____%3B%26emsp%3B%E6%89%A7%E8%A1%8C%E5%90%8ECF%3D____">百度</a></p>
            <p class="choice header_choice true">①&emsp;44H(或‘D’),0</p>
            <p class="choice false">②&emsp;43H(或‘C’),1&emsp;</p>
            <p class="choice false">③&emsp;44H(或‘D’),1</p>
            <p class="choice false">④&emsp;43H(或‘C’),0</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（115）</span><br />
                &emsp;ADR&emsp;DW&emsp;1234H,5678H<br />
                &emsp;~~~<br />
                &emsp;LEA&emsp;SI,ADR<br />
                &emsp;LDS&emsp;BX,ADR<br />
                &emsp;设变量ADR的偏移地址是100H，上述两条指令执行后：SI=____，DS=____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ADR%26emsp%3BDW%26emsp%3B1234H%2C5678H%3Cbr/%3E%0A%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BLEA%26emsp%3BSI%2CADR%3Cbr/%3E%0A%26emsp%3BLDS%26emsp%3BBX%2CADR%3Cbr/%3E%0A%26emsp%3B%E8%AE%BE%E5%8F%98%E9%87%8FADR%E7%9A%84%E5%81%8F%E7%A7%BB%E5%9C%B0%E5%9D%80%E6%98%AF100H%EF%BC%8C%E4%B8%8A%E8%BF%B0%E4%B8%A4%E6%9D%A1%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%9ASI%3D____%EF%BC%8CDS%3D____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;100H&emsp;和1234H</p>
            <p class="choice true">②&emsp;100H&emsp;和5678H</p>
            <p class="choice false">③&emsp;000H&emsp;和1234H</p>
            <p class="choice false">④&emsp;000H和5678H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（116）</span><br />
                &emsp;NUMBER&emsp;EQU&emsp;81H<br />
                &emsp;DATA&emsp;DB&emsp;49H<br />
                &emsp;~~~<br />
                &emsp;XOR&emsp;DATA,NUMBER<br />
                &emsp;上述语句执行后DATA中的内容是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=NUMBER%26emsp%3BEQU%26emsp%3B81H%3Cbr/%3E%0A%26emsp%3BDATA%26emsp%3BDB%26emsp%3B49H%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BXOR%26emsp%3BDATA%2CNUMBER%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E8%AF%AD%E5%8F%A5%E6%89%A7%E8%A1%8C%E5%90%8EDATA%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;81H</span>
                <span class="choice false">②&emsp;49H</span>
                <span class="choice true">③&emsp;C8H</span>
                <span class="choice false">④&emsp;89H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（117）</span>
                现有一数据定义伪指令在DA单元定义一数据:<br />
                &emsp;DA&emsp;DW&emsp;0123H<br />
                &emsp;能与上述语句等效的语句是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%8E%B0%E6%9C%89%E4%B8%80%E6%95%B0%E6%8D%AE%E5%AE%9A%E4%B9%89%E4%BC%AA%E6%8C%87%E4%BB%A4%E5%9C%A8DA%E5%8D%95%E5%85%83%E5%AE%9A%E4%B9%89%E4%B8%80%E6%95%B0%E6%8D%AE%3A%3Cbr/%3E%0A%26emsp%3BDA%26emsp%3BDW%26emsp%3B0123H%3Cbr/%3E%0A%26emsp%3B%E8%83%BD%E4%B8%8E%E4%B8%8A%E8%BF%B0%E8%AF%AD%E5%8F%A5%E7%AD%89%E6%95%88%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;WORD&emsp;PTR&emsp;DA,‘123H’</p>
            <p class="choice true">②&emsp;MOV&emsp;DA,123H</p>
            <p class="choice false">③&emsp;MOV&emsp;Byte&emsp;PTR&emsp;DA,0123H</p>
            <p class="choice false">④&emsp;MOV&emsp;DA,‘123H’</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（118）</span><br />
                &emsp;DATA&emsp;SEGMENT<br />
                &emsp;DA1&emsp;DB&emsp;64H&emsp;DUP(?)<br />
                &emsp;DA2&emsp;DW&emsp;0100H,0200H<br />
                &emsp;DA3&emsp;DW&emsp;DA2<br />
                &emsp;~~~<br />
                &emsp;MOV&emsp;SI,DA3<br />
                &emsp;上述指令执行后,SI中的内容是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DATA%26emsp%3BSEGMENT%3Cbr/%3E%0A%26emsp%3BDA1%26emsp%3BDB%26emsp%3B64H%26emsp%3BDUP%28%3F%29%3Cbr/%3E%0A%26emsp%3BDA2%26emsp%3BDW%26emsp%3B0100H%2C0200H%3Cbr/%3E%0A%26emsp%3BDA3%26emsp%3BDW%26emsp%3BDA2%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BSI%2CDA3%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E6%8C%87%E4%BB%A4%E6%89%A7%E8%A1%8C%E5%90%8E%2CSI%E4%B8%AD%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;100H</span>
                <span class="choice false">②&emsp;200H</span>
                <span class="choice true">③&emsp;100</span>
                <span class="choice false">④&emsp;300H</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（119）</span><br />
                &emsp;DATA&emsp;SEGMENT<br />
                A&emsp;DW&emsp;0<br />
                B&emsp;DW&emsp;0<br />
                C&emsp;DW&emsp;230,20,54<br />
                DATA&emsp;ENDS<br />
                …<br />
                MOV&emsp;BX,OFFSET&emsp;C<br />
                MOV&emsp;AX,[BX]<br />
                MOV&emsp;B,AX<br />
                MOV&emsp;AX,[BX+2]<br />
                ADD&emsp;AX,B<br />
                MOV&emsp;A,AX<br />
                上述程序运行后，A单元的内容是____&emsp;，B单元的内容是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=DATA%26emsp%3BSEGMENT%3Cbr/%3E%0AA%26emsp%3BDW%26emsp%3B0%3Cbr/%3E%0AB%26emsp%3BDW%26emsp%3B0%3Cbr/%3E%0AC%26emsp%3BDW%26emsp%3B230%2C20%2C54%3Cbr/%3E%0ADATA%26emsp%3BENDS%3Cbr/%3E%0A%E2%80%A6%3Cbr/%3E%0AMOV%26emsp%3BBX%2COFFSET%26emsp%3BC%3Cbr/%3E%0AMOV%26emsp%3BAX%2C%5BBX%5D%3Cbr/%3E%0AMOV%26emsp%3BB%2CAX%3Cbr/%3E%0AMOV%26emsp%3BAX%2C%5BBX%2B2%5D%3Cbr/%3E%0AADD%26emsp%3BAX%2CB%3Cbr/%3E%0AMOV%26emsp%3BA%2CAX%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E8%BF%90%E8%A1%8C%E5%90%8E%EF%BC%8CA%E5%8D%95%E5%85%83%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B%EF%BC%8CB%E5%8D%95%E5%85%83%E7%9A%84%E5%86%85%E5%AE%B9%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;250&emsp;230</p>
            <p class="choice false">②&emsp;284&emsp;250</p>
            <p class="choice false">③&emsp;220&emsp;290</p>
            <p class="choice false">④&emsp;300&emsp;250</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（120）</span>
                一数据段定义如下:<br />
                &emsp;DATA&emsp;SEGMENT<br />
                &emsp;ORG&emsp;0134H<br />
                &emsp;DA&emsp;DB&emsp;12H,63,26H<br />
                &emsp;ARRD&emsp;DW&emsp;DA<br />
                &emsp;DATA&emsp;ENDS<br />
                &emsp;能够使BX中的数据为奇数的语句是____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%B8%80%E6%95%B0%E6%8D%AE%E6%AE%B5%E5%AE%9A%E4%B9%89%E5%A6%82%E4%B8%8B%3A%3Cbr/%3E%0A%26emsp%3BDATA%26emsp%3BSEGMENT%3Cbr/%3E%0A%26emsp%3BORG%26emsp%3B0134H%3Cbr/%3E%0A%26emsp%3BDA%26emsp%3BDB%26emsp%3B12H%2C63%2C26H%3Cbr/%3E%0A%26emsp%3BARRD%26emsp%3BDW%26emsp%3BDA%3Cbr/%3E%0A%26emsp%3BDATA%26emsp%3BENDS%3Cbr/%3E%0A%26emsp%3B%E8%83%BD%E5%A4%9F%E4%BD%BFBX%E4%B8%AD%E7%9A%84%E6%95%B0%E6%8D%AE%E4%B8%BA%E5%A5%87%E6%95%B0%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;BX,ARRD</p>
            <p class="choice false">②&emsp;MOV&emsp;BL,DA+2</p>
            <p class="choice false">③&emsp;MOV&emsp;BX,WORD&emsp;PTR&emsp;DA</p>
            <p class="choice true">④&emsp;MOV&emsp;BX,DA+1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（121）</span>
                已知DX=0A476H， CX=0203H， CF=1<br />
                &emsp;OR&emsp;DX，DX<br />
                &emsp;RCR&emsp;DX，CL<br />
                &emsp;XCHG&emsp;CH，CL<br />
                &emsp;RCL&emsp;DX，CL<br />
                &emsp;上述程序段执行后DX=____&emsp;CF=____<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%B7%B2%E7%9F%A5DX%3D0A476H%EF%BC%8CCX%3D0203H%EF%BC%8CCF%3D1%3Cbr/%3E%0A%26emsp%3BOR%26emsp%3BDX%EF%BC%8CDX%3Cbr/%3E%0A%26emsp%3BRCR%26emsp%3BDX%EF%BC%8CCL%3Cbr/%3E%0A%26emsp%3BXCHG%26emsp%3BCH%EF%BC%8CCL%3Cbr/%3E%0A%26emsp%3BRCL%26emsp%3BDX%EF%BC%8CCL%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8EDX%3D____%26emsp%3BCF%3D____">百度</a></p>
            <p class="one-line-choice"><span class="choice false">①&emsp;523BH&emsp;和1</span>
                <span class="choice true">②&emsp;523BH和0</span>
                <span class="choice false">③&emsp;423CH&emsp;和1</span>
                <span class="choice false">④&emsp;423CH&emsp;和0</span>
            </p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                    or 指令会影响CF标志位
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（122）</span>
                在同一程序段中，定义下面伪指令，错误的是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%9C%A8%E5%90%8C%E4%B8%80%E7%A8%8B%E5%BA%8F%E6%AE%B5%E4%B8%AD%EF%BC%8C%E5%AE%9A%E4%B9%89%E4%B8%8B%E9%9D%A2%E4%BC%AA%E6%8C%87%E4%BB%A4%EF%BC%8C%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;PORT1&emsp;EQU&emsp;AL</p>
            <p class="choice true">②&emsp;PORT2=AL&emsp;</p>
            <p class="choice false">③&emsp;PORT2=2A50H&emsp;AND&emsp;0FFH</p>
            <p class="choice false">④&emsp;PORT3&emsp;EQU&emsp;2A50H</p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                    报错情况：<br />error A2026: constant expected
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（123）</span>
                设ADRT=100H，不符合语法规则的语句是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BEADRT%3D100H%EF%BC%8C%E4%B8%8D%E7%AC%A6%E5%90%88%E8%AF%AD%E6%B3%95%E8%A7%84%E5%88%99%E7%9A%84%E8%AF%AD%E5%8F%A5%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;MOV&emsp;AX,ADRT</p>
            <p class="choice false">②&emsp;MOV&emsp;AX,[ADRT+SI]</p>
            <p class="choice true">③&emsp;MOV&emsp;[ADRT],AX</p>
            <p class="choice false">④&emsp;MOV&emsp;ADRT[SI],AX<br />
                &emsp;&emsp;PORT3 EQU 2A50H AND 0FFH
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（124）</span>
                指出下面哪组伪指令使用是错误的&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%8C%87%E5%87%BA%E4%B8%8B%E9%9D%A2%E5%93%AA%E7%BB%84%E4%BC%AA%E6%8C%87%E4%BB%A4%E4%BD%BF%E7%94%A8%E6%98%AF%E9%94%99%E8%AF%AF%E7%9A%84%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①DAT&emsp;Segment<br />
                &emsp;~~~<br />
                &emsp;DAT&emsp;Ends&emsp;</p>
            <p class="choice false">②Extra&emsp;Segment<br />
                &emsp;~~~<br />
                &emsp;Extra&emsp;Ends&emsp;</p>
            <p class="choice false">③Stack&emsp;Segment<br />
                &emsp;~~~<br />
                &emsp;Stack&emsp;Ends&emsp;</p>
            <p class="choice false">④Cod&emsp;Segment<br />
                &emsp;~~~<br />
                &emsp;Cod&emsp;Ends</p>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                    四个选项都能过编译，没有正确答案
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（125）</span><br />
                &emsp;MOV&emsp;AX，8<br />
                &emsp;SHL&emsp;AX，1<br />
                &emsp;SHL&emsp;AX，1<br />
                &emsp;MOV&emsp;BX，AX<br />
                &emsp;MOV&emsp;CL，2<br />
                &emsp;SHL&emsp;AX，CL<br />
                &emsp;ADD&emsp;AX，BX<br />
                上述程序段执行后，BX=____&emsp;AX=____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=MOV%26emsp%3BAX%EF%BC%8C8%3Cbr/%3E%0A%26emsp%3BSHL%26emsp%3BAX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BSHL%26emsp%3BAX%EF%BC%8C1%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BBX%EF%BC%8CAX%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BCL%EF%BC%8C2%3Cbr/%3E%0A%26emsp%3BSHL%26emsp%3BAX%EF%BC%8CCL%3Cbr/%3E%0A%26emsp%3BADD%26emsp%3BAX%EF%BC%8CBX%3Cbr/%3E%0A%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%AE%B5%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8CBX%3D____%26emsp%3BAX%3D____%26emsp%3B">百度</a></p>
            <p class="choice header_choice true">①&emsp;0020H&emsp;和&emsp;00A0H</p>
            <p class="choice false">②&emsp;0028H和&emsp;00A0H&emsp;</p>
            <p class="choice false">③&emsp;0028H&emsp;和&emsp;00C8H</p>
            <p class="choice false">④&emsp;0020H和&emsp;00C8H</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（126）</span><br />
                ARRAY&emsp;DW&emsp;10&emsp;DUP(2)<br />
                &emsp;XOR&emsp;AX,AX<br />
                &emsp;MOV&emsp;CX,LENGTH&emsp;ARRAY<br />
                &emsp;MOV&emsp;SI,SIZE&emsp;ARRAY-TYPE&emsp;ARRAY<br />
                NEXT:&emsp;ADD&emsp;AX,ARRAY[SI]<br />
                &emsp;SUB&emsp;SI,TYPE&emsp;ARRAY<br />
                &emsp;LOOP&emsp;NEXT<br />
                &emsp;上述程序执行后，(AX)=____&emsp;，(SI)=____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=ARRAY%26emsp%3BDW%26emsp%3B10%26emsp%3BDUP%282%29%3Cbr/%3E%0A%26emsp%3BXOR%26emsp%3BAX%2CAX%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BCX%2CLENGTH%26emsp%3BARRAY%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BSI%2CSIZE%26emsp%3BARRAY-TYPE%26emsp%3BARRAY%3Cbr/%3E%0ANEXT%3A%26emsp%3BADD%26emsp%3BAX%2CARRAY%5BSI%5D%3Cbr/%3E%0A%26emsp%3BSUB%26emsp%3BSI%2CTYPE%26emsp%3BARRAY%3Cbr/%3E%0A%26emsp%3BLOOP%26emsp%3BNEXT%3Cbr/%3E%0A%26emsp%3B%E4%B8%8A%E8%BF%B0%E7%A8%8B%E5%BA%8F%E6%89%A7%E8%A1%8C%E5%90%8E%EF%BC%8C%28AX%29%3D____%26emsp%3B%EF%BC%8C%28SI%29%3D____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;40&emsp;-2</p>
            <p class="choice false">②&emsp;40&emsp;-3</p>
            <p class="choice false">③&emsp;20&emsp;-3</p>
            <p class="choice true">④&emsp;20&emsp;-2</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（127）</span><br />
                BUF&emsp;DB&emsp;0DH<br />
                &emsp;~~~&emsp;<br />
                &emsp;MOV&emsp;AL,BUF<br />
                &emsp;CALL&emsp;FAR&emsp;PTR&emsp;SUBR<br />
                &emsp;~~~<br />
                &emsp;SUBR&emsp;PROC&emsp;FAR<br />
                &emsp;CMP&emsp;AL,10<br />
                &emsp;JC&emsp;A1<br />
                &emsp;ADD&emsp;AL,7<br />
                &emsp;A1:&emsp;ADD&emsp;AL,30H<br />
                MOV&emsp;DL,AL<br />
                MOV&emsp;AH,2<br />
                INT&emsp;21H<br />
                RET<br />
                &emsp;SUBR&emsp;ENDP&emsp;<br />
                &emsp;程序执行后,DL=____&emsp;，屏幕上显示输出的字符是____&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=BUF%26emsp%3BDB%26emsp%3B0DH%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%26emsp%3B%3Cbr/%3E%0A%26emsp%3BMOV%26emsp%3BAL%2CBUF%3Cbr/%3E%0A%26emsp%3BCALL%26emsp%3BFAR%26emsp%3BPTR%26emsp%3BSUBR%3Cbr/%3E%0A%26emsp%3B%7E%7E%7E%3Cbr/%3E%0A%26emsp%3BSUBR%26emsp%3BPROC%26emsp%3BFAR%3Cbr/%3E%0A%26emsp%3BCMP%26emsp%3BAL%2C10%3Cbr/%3E%0A%26emsp%3BJC%26emsp%3BA1%3Cbr/%3E%0A%26emsp%3BADD%26emsp%3BAL%2C7%3Cbr/%3E%0A%26emsp%3BA1%3A%26emsp%3BADD%26emsp%3BAL%2C30H%3Cbr/%3E%0AMOV%26emsp%3BDL%2CAL%3Cbr/%3E%0AMOV%26emsp%3BAH%2C2%3Cbr/%3E%0AINT%26emsp%3B21H%3Cbr/%3E%0ARET%3Cbr/%3E%0A%26emsp%3BSUBR%26emsp%3BENDP%26emsp%3B%3Cbr/%3E%0A%26emsp%3B%E7%A8%8B%E5%BA%8F%E6%89%A7%E8%A1%8C%E5%90%8E%2CDL%3D____%26emsp%3B%EF%BC%8C%E5%B1%8F%E5%B9%95%E4%B8%8A%E6%98%BE%E7%A4%BA%E8%BE%93%E5%87%BA%E7%9A%84%E5%AD%97%E7%AC%A6%E6%98%AF____%26emsp%3B">百度</a></p>
            <p class="choice header_choice false">①&emsp;43H&emsp;C</p>
            <p class="choice true">②44H&emsp;D</p>
            <p class="choice  false">③&emsp;45H&emsp;E</p>
            <p class="choice false">④&emsp;46H&emsp;F</p>
        </div>

        <h2 class="theme-sign">三、程序填空</h2>
        <div class="block">
            <p><span class="number">（1）</span>
                在以 BCD 为首地址的字节单元中存放了 3个压缩 BCD 码 x 、 y 、 z 本程序用以计算 x+y-z,并将结果存放在 SS 字节单元中。试在程序的空格处填入适当的指令。</p>
            <pre><code class="nohighlight x86asm hljs properties"><span class="hljs-attr">BCD</span> <span class="hljs-string">DB x, y , z</span>
<span class="hljs-attr">SS</span>  <span class="hljs-string">DB ?</span>
    <span class="hljs-attr">~~~</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">AL, BCD</span>
    <span class="hljs-attr">ADD</span> <span class="hljs-string">AL, BCD+1</span>
    <span class="hljs-attr gap-filling-answer">DAA</span>
    <span class="hljs-attr">SUB</span> <span class="hljs-string">AL, BCD+2</span>
    <span class="hljs-attr gap-filling-answer">DAS</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">SS, AL</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（2）</span>
            </p>
            <pre><code class="x86asm">DA1 DB '01234'
DA2 DB 5 DUP(0)
    ~~~
    MOV SI,0
    MOV CX,5
LOP: 
    MOV AL,DA1[SI]
    ADD AL,11H
    OR AL,01H
    MOV DA2[SI],AL
    INC SI
    LOOP LOP</code></pre>
            <p class="gap-filling">试问 : (1) 程序段执行后, DA2各字节中的数据是 <span class="gap-filling-answer">41H,43H,43H,45H,45H</span>
                <br />(2) 程序中 MOV AL, DA1[SI]指令的源操作数寻址方式是 <span class="gap-filling-answer">寄存器相对寻址</span></p>
        </div>

        <div class="block">
            <p><span class="number">（3）</span>
                下面程序段用以统计 AX 中为“ 0”的位数,统计结果放在 CONT 单元中,试在程序 段的空格处填上缺少的指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties">    <span class="hljs-attr">MOV</span> <span class="hljs-string">CONT, 0</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">CX, 16</span>
<span class="hljs-attr">NEXT</span>:<span class="hljs-string"></span>
    <span class="hljs-attr">SHR</span> <span class="hljs-string">AX, 1</span>
    <span class="gap-filling-answer">JC DONE</span>
    <span class="hljs-attr">INC</span> <span class="hljs-string">CONT</span>
<span class="hljs-attr">DONE</span>:<span class="hljs-string"></span>
    <span class="gap-filling-answer">DCE CX</span>
    <span class="hljs-attr">JNZ</span> <span class="hljs-string">NEXT</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（4）</span>
                下面程序段用以统计 SUM 字单元中含有多少个 “ 5” 统计结果存放在 AL 中, 试在程 序段的空格处填上缺少的指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties">    <span class="hljs-attr">XOR</span> <span class="hljs-string">AX, AX</span>
<span class="hljs-attr">NEXT</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">CMP</span> <span class="hljs-string">SUM, 5</span>
    <span class="hljs-attr">JL</span> <span class="hljs-string">DONE</span>
    <span class="gap-filling-answer">SUB SUM,5</span>
    <span class="gap-filling-answer">INC AL</span>
    <span class="hljs-attr">JMP</span> <span class="hljs-string">NEXT</span>
<span class="hljs-attr">DONE</span>:<span class="hljs-string"></span>
    <span class="hljs-attr">~~~</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（5）</span>
                在主程序中,采用调用子程序方式求一个字数组中的元素之和,并将之送入 SUM 单 元。试在下面程序段中填补上空缺的指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties">    <span class="hljs-attr">~~~</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BX, OFFSET ARRAY</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">CX,NN</span>
    <span class="hljs-attr">CALL</span> <span class="hljs-string">yeqianyi</span>
    <span class="hljs-attr">~~~</span>
<span class="hljs-attr">yeqianyi</span> <span class="hljs-string">PROC</span>
    <span class="hljs-attr">PUSH</span> <span class="hljs-string">AX</span>
    <span class="gap-filling-answer">XOR AX,AX</span>
<span class="hljs-attr">NEXT</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">ADD</span> <span class="hljs-string">AX,[BX]</span>
    <span class="hljs-attr">ADD</span> <span class="hljs-string">BX,2</span>
    <span class="hljs-attr">LOOP</span> <span class="hljs-string">NEXT</span>
    <span class="gap-filling-answer">MOV SUM,AX</span>
    <span class="hljs-attr">POP</span> <span class="hljs-string">AX</span>
    <span class="hljs-attr">RET</span>
<span class="hljs-attr">yeqianyi</span> <span class="hljs-string">ENDP</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（6）</span>
                在主程序中, 采用调用子程序方式将一组非压缩 BCD 在屏幕上显示出来。 试在下面 程序段中填补上空缺的指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties">    <span class="hljs-attr">~~~</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BX,OFFSET feiyabcd</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">CX,NN</span>
    <span class="gap-filling-answer">CALL DISPLAY</span>
    <span class="hljs-attr">~~~</span>
<span class="hljs-attr">DISPLAY</span> <span class="hljs-string">PROC</span>
    <span class="hljs-attr">PUSH</span> <span class="hljs-string">DX</span>
<span class="hljs-attr">LOP</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">DL,[BX]</span>
    <span class="hljs-attr">ADD</span> <span class="hljs-string">DL,30H</span>
    <span class="gap-filling-answer">MOV AH,02H</span>
    <span class="hljs-attr">INT</span> <span class="hljs-string">21H</span>
    <span class="hljs-attr">INC</span> <span class="hljs-string">BX</span>
    <span class="hljs-attr">LOOP</span> <span class="hljs-string">LOP</span>
    <span class="hljs-attr">RET</span>
<span class="hljs-attr">DISPLAY</span> <span class="hljs-string">ENDP</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（7）</span>
            </p>
            <pre><code class="x86asm">BUF DW 1, 0, 0AB1CH , 582H , 9, 3A04H , 9, 0
    ~~~
    LEA DI, BUF
    MOV CX, 8
    MOV AX, 9
    CLD
    REPNZ SCASW
    JNZ K1
    SUB DI, OFFSET BUF
    MOV DX, DI
    SHR DX, 1
    ADD DL, 30H
    MOV AH, 2
    INT 21H
K1: ...</code></pre>
            <p class="gap-filling">上述程序执行后程序完成的功能是
                <span class="gap-filling-answer"> 在 BUF 中找出第一次出现 9的元 素</span>
                ,显示输出的值是
                <span class="gap-filling-answer">5</span>
            </p>
        </div>

        <div class="block">
            <p><span class="number">（8）</span>
                在以 String 为首地址的内存区域存放了一个字符串 , 下面程序段的功能是实现将该 串中所有字母字符依次送入 BUFF 缓冲区 , 试在程序中填补上空缺的指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties"><span class="hljs-attr">String</span> <span class="hljs-string">DB '123ABC051AF......049ADVWS'</span>
<span class="hljs-attr">N</span> <span class="hljs-string">EQU $- String</span>
<span class="hljs-attr">BUFF</span> <span class="hljs-string">DB N DUP(?)</span>
    <span class="hljs-attr">~~~</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">CX,N</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BX,0</span>
    <span class="gap-filling-answer">MOV SI,0</span>
<span class="hljs-attr">yeqianyi</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">CMP</span> <span class="hljs-string">String[BX], 'A'</span>
    <span class="hljs-attr">JB</span> <span class="hljs-string">NEXT</span>
    <span class="hljs-attr">CMP</span> <span class="hljs-string">String[BX], 'Z'</span>
    <span class="hljs-attr">JA</span> <span class="hljs-string">NEXT</span>
    <span class="gap-filling-answer">MOV AL,String[BX]</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BUFF[SI],AL</span>
    <span class="hljs-attr">INC</span> <span class="hljs-string">SI</span>
<span class="hljs-attr">NEXT</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">INC</span> <span class="hljs-string">BX</span>
    <span class="hljs-attr">LOOP</span> <span class="hljs-string">yeqianyi</span>
    <span class="hljs-attr">HLT</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（9）</span>
                下面程序段是将 BUFF 单元的绝对值送入 DAR 单元 , 请将空白处各填上一条指令。
            </p>
            <pre><code class="nohighlight x86asm hljs properties">    <span class="hljs-attr">BUFF</span> <span class="hljs-string">DW ××××</span>
    <span class="hljs-attr">DAR</span> <span class="hljs-string">DW ?</span>
    <span class="hljs-attr">~~~</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">AX, BUFF</span>
    <span class="gap-filling-answer">TEST AX,8000H</span>
    <span class="hljs-attr">JZ</span> <span class="hljs-string">NEXT</span>
    <span class="gap-filling-answer">NEG AX</span>
<span class="hljs-attr">NEXT</span>: <span class="hljs-string"></span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">DAR,AX</span></code></pre>
        </div>

        <div class="block">
            <p><span class="number">（10）</span>
                下面程序段完成将字节储存单元 BUF 中的两个压缩 BCD码 拆成俩个非压缩 BCD码 后分别存放在 BCD1 和 BCD2 字节单元中。
            </p>
            <pre><code class="nohighlight x86asm hljs properties"><span class="hljs-attr">BUF</span> <span class="hljs-string">DB XXH</span>
<span class="hljs-attr">BCD1</span> <span class="hljs-string">DB ?</span>
<span class="hljs-attr">BCD2</span> <span class="hljs-string">DB ?</span>
    <span class="hljs-attr">~~~</span>
<span class="hljs-attr">START</span>:<span class="hljs-string"></span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">AL,BUF</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BL,AL</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">CL,4</span>
    <span class="gap-filling-answer">SHR AL,CL</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BCD1,AL</span>
    <span class="gap-filling-answer">AND BL,0FH</span>
    <span class="hljs-attr">MOV</span> <span class="hljs-string">BCD2,BL</span>
    <span class="hljs-attr">HLT</span></code></pre>
        </div>
        <h2 class="theme-sign">四、编程题</h2>
        <div class="block">
            <p><span class="number">（1）</span>
                编一程序段将BUF字节单元中的数拆成高低四位，并且将分离出的高四位和低四位分别放于BUF+1和BUF+2字节单元的低四位上。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">ASSUME CS:CODE,DS:DATA

DATA SEGMENT
    BUF DB 34H,?,?
DATA ENDS
CODE SEGMENT

START:
    MOV AX,DATA
    MOV DS,AX
    MOV AL,BUF
    MOV CL,4
    SHR AL,CL
    MOV BUF+1,AL
    MOV AL,BUF
    AND AL,0FH
    MOV BUF+2,AL
    MOV AH,4CH
    INT 21H
CODE ENDS

END START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（2）</span>
                编制一子程序，将AL中一位十六进制数转换为对应的ASCII码并用2号DOS功能调用显示出来，输入参数：被转换的十六进制数已在AL中。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">CODE SEGMENT
    ASSUME CS:CODE
START:
    MOV AL,0DH
    CALL Liuweipei
    MOV AH,4CH
    INT 21H

Liuweipei PROC
    CMP AL,10
    JC K1
    ADD AL,7
K1:  ADD AL,30H
    MOV DL,AL
    MOV AH,2
    INT 21H
    RET
Liuweipei ENDP
CODE ENDS

END START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（3）</span>
                试编制一程序,把X和Y单元中的无符号字节数的较大者存入BIG单元,较小者存入MIN单元,若X=Y,则把其中之一存入BIG中。(只需写出有关的指令序列)
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">    MOV AL，X
    MOV  BL，Y
    CMP AL，BL
    JAE EXIT
    XCHG AL，BL
EXIT:
    MOV BIG，AL
    MOV MIN，BL</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（4）</span>
                用字符串指令编制一程序段,把以DAT1为首地址的数据区中的50个字节数据依次传送到以DAT2为首地址的数据区中。<span style="color:blue">要求:在程序中按地址递增方式进行数据传送。</span>
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">    CLD
    MOV CX,50
    LEA SI,DAT1
    LEA DI,DAT2
    REP MOVSB</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（5）</span>
                在以Block为首地址的字节单元中，存放了10计算机(1)班的学生考试成绩。试编制一程序，利用学生的序号来查表得到该学生的成绩，设学生的序号在NUMBER单元，查表结果存入RESULT单元中。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT 
Block   DB  X1, X2, X3,……，X50
NUMBER  DB  X
RESULT  DB  ?
DATA  ENDS

CODE  SEGMENT
ASSUME  CS:CODE,DS:DATA
START:
    MOV AX,DATA
    MOV DS,AX
    LEA BX, Block
    MOV AL, NUMBER
    XLAT
    MOV RESULT, AL
    MOV AH,4CH
    INT 21H
CODE  ENDS
END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（6）</span>
                在南昌市的湖坊乡，约有人口45000 ，试编写一程序统计一下该乡超过100岁以上的老人有多少，并将统计结果存放在SUM单元中。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    AGE   DB  25,31,6,101,90,71,116, …
    CONT  EQU $-AGE
    SUM   DB  ?
DATA  ENDS

CODE  SEGMENT
ASSUME  CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV  DS,AX
    MOV  CX,CONT
    MOV  BX,0
LOP:
    CMP  AGE[BX],100
    JB  NEXT
    INC  SUM
NEXT:
    INC  BX 
    LOOP  LOP
    MOV  AH,4CH
    INT  21H
CODE ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（7）</span>
                设有DX:AX构成一个32位数据,从AX的低位(第0位)开始,逐位向高位和DX置1,置1的个数由CX的内容确定( 已知 CX&lt;32 )。试编制一程序段,实现上述要求。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">    XOR AX,AX
    XOR DX,DX
LOP:
    STC
    RCL AX,1
    RCL DX,1
    LOOP LOP</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（8）</span>
                编写程序段，用DOS的1号功能调用通过键盘输入一字符，并判断输入的字符。如字符是“Y”，则转向YES程序段；如字符是“N”，则转向NO程序段；
                如果是其它字符，则转向DOS功能调用，重新输入字符。(考生勿需写出源程序格式，只需写出与试题要求有关的指令序列)
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">    ;(YES和NO分别是两程序段入口处的标号)
KEY:
    MOV AH,1
    INT 21H
    CMP AL,‘Y’
    JE YES
    CMP AL,‘N’
    JE NO
    JMP KEY</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（9）</span>
                试编写一程序段,在CHAR为首地址的26个字节单元中依次存放字母‘A’～‘Z’
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">CHAR  DB  26 DUP(?)

START:
    LEA  BX,CHAR
    MOV  AL,'A'
    MOV  CX,26
LOP1:
    MOV  [BX],AL
    INC  AL
    INC  BX
    LOOP  LOP1
    HLT</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（10）</span>
                在以STRING为首地址的存储区域存放了一个字符串,串的长度为50,查找其中是否有字符$,若有将SIGN单元置1,反之,
                将SIGN单元置0(只需写出有关的指令序列)<br />
                (1) 用比较条件转移指令实现。<br />
                (2) 用重复操作前缀串搜索指令实现。
            </p>
            <h4 class="answer-header">答案：</h4>
            <div class="row">
                <div class="col-md-6"><pre class="answer-code"><code class="nohighlight x86asm">;(1)
    MOV  CX,50
    MOV  BX,0
N:
    CMP STRING[BX],’$’
    JZ DONE
    INC  BX
    LOOP N
    MOV  SIGN,0
    JMP  EXIT0
DONE:
    MOV  SIGN,1
EXIT0:
    HLT</code></pre></div>
                <div class="col-md-6"><pre class="answer-code"><code class="nohighlight x86asm">;(2)
    MOV  CX,50
    LEA DI,STRING
    CLD
    MOV AL,'$'
    REPNE SCASB
    JZ DONE
    MOV SIGN,0
    JMP EXIT0
DONE:
    MOV SIGN,1
EXIT0:
    HLT</code></pre></div>
            </div>
        </div>

        <div class="block">
            <p><span class="number">（11）</span>
                从键盘接收一个4位十进制数据，并将其存入ASCII缓冲区，若输入出错，
                则调用子程序输出出错信息，提示重新输入，试编写一程序完成上述功能。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    ASCII  DB 4 DUP(?)                            
    SIGN   DB ‘Input  error,Repeat! $’
DATA  ENDS

CODE  SEGMENT
    ASSUME CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV  DS,AX
    LEA  SI,ASCII
    MOV  CX,4
NEXT:
    MOV  AH,01H
    INT  21H
    CMP  AL,30H
    JB  DONE
    CMP  AL,39H
    JA  DONE
    MOV  [SI],AL
    INC  SI
    LOOP  NEXT
    MOV  AH,4CH
    INT  21H
DONE:
    CALL  OUTPUT
    JMP  NEXT

OUTPUT  PROC
    PUSH  CX
    LEA  DX,SIGN
    MOV  AH,09H
    INT  21H
    POP  CX
    RET
OUTPUT  ENDP

CODE ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（12）</span>
                编写一完整源程序,将M1中的二进制数按位倒排送M2中,即M1第0位送M2第7位,M1第1位送M2第6位,依次类推。c
                数据段如下：<br />
                DATA SEGMENT<br />
                M1 DB YY；任一字节数<br />
                M2 DB ？<br />
                DATA ENDS
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    M1  DB  ××
    M2  DB  ?
DATA  ENDS

CODE  SEGMENT
    ASSUME CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV  DS,AX
    MOV  CX,8
    MOV  AL,M1
    XOR  AH,AH
LOP:
    SAL  AL,1
    RCR  AH,1
    LOOP LOP
    MOV  M2,AH
    MOV  AH,4CH
    INT  21H
CODE  ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（13）</span>
                在数据段中，WEEK是星期一～星期日的英文缩写，DAY单元中有数1～7(1 表示星期一，7表示星期日)：<br />
                WEEK DB ‘MON’, ‘TUE’, ‘WED’, ‘THU’, ‘FRI’, ‘SAT’, ‘SUN’<br />
                DAY DB X ; 数字1～7<br />
                试编写一源程序，根据DAY的内容用单个字符显示功能调用(2号功能)去显示对应的英文缩写。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    WEEK  DB  'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'
    DAY   DB  X
DATA  ENDS

CODE  SEGMENT
    ASSUME CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV  DS,AX
    XOR  BX,BX
    MOV  BL,DAY
    DEC  BL
    MOV  AL,BL
    SAL  BL,1
    ADD  BL,AL
    MOV  CX,3
    LOP:  MOV  DL,WEEK[BX]
    MOV  AH,02H
    INT  21H
    INC  BX
    LOOP  LOP
    MOV  AH,4CH
    INT  21H
CODE ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（14）</span>
                试编制一程序段,用串操作指令STOSB实现向DA数据区依次相间存放字母字符A,B,
                C,……J和数字字符0～9,相间顺序是:A,0,B,1,C,2,…,I,8,J,9(设DA数据区所在段已由ES指向)
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">    MOV  AL,'A'
    MOV  AH,'0'
    LEA  DI,DA
    MOV  CX,20
    CLD
LOP:
    STOSB
    INC  AL
    XCHG  AL,AH
    LOOP  LOP</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（15）</span>
                编写程序,将一个包含有8个数据的数组M分成两个数组:非负数数组P和负数数组N,并分别将非负数的个数及负数的个数显示出来。
                请编写完整源程序。数据段定义如下:
            </p>
            <pre><code class="x86asm">DATA  SEGMENT
    M  DB  12,-34,11,45,-12,…
    P  DB  8 DUP(?)
    N  DB  8 DUP(?)
    PCOUNT  DB  0
    NCOUNT  DB  0
DATA  ENDS</code></pre>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    M  DB  12,-34,11,45,-12,…
    P  DB  8 DUP(?)
    N  DB  8 DUP(?)
    PCOUNT  DB  0
    NCOUNT  DB  0
DATA  ENDS

CODE  SEGMENT
    ASSUME  CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV DS,AX
    MOV  CX,8
    MOV  SI,0
    MOV  DI,0
    MOV  BX,0
NEXT:
    MOV  AL,M[BX]
    CMP  AL,0
    JGE  PP
    MOV  N[DI],AL
    INC  DI
    INC  NCOUNT
    JMP  DONE
PP:
    MOV  P[SI],AL
    INC  SI
    INC  PCOUNT
DONE:
    INC  BX
    LOOP  NEXT
    MOV  DL,PCOUNT
    ADD  DL,30H
    MOV  AH,2
    INT  21H
    MOV  DL,NCOUNT
    ADD  DL,30H
    MOV AH,2
    INT  21H
    MOV  AH,4CH
    INT  21H
CODE ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（16）</span>
                在首地址为TAB的数组中按递增次序存放着100个数,试编程将出现次数最多的数以及出现的次数分别存放于变量NUM和COUNT中,
                并以： COUNT=? 的形式输出COUNT的值(设最多重复次数&lt;10)
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA SEGMENT
    BUF DB 1,2,14H,14H,14H,14H,14H,15H,15H,15H,15H,59H
    LEN =$-BUF
    NUM DB ?
    COUNT DB 0
    MM DB 'COUNT=','$'
DATA ENDS

CODE SEGMENT
    ASSUME CS:CODE,DS:DATA
START:
    MOV AX,DATA
    MOV DS,AX
    MOV SI,0
    MOV CX,LEN
    MOV BL,0
A:
    MOV AL,BUF[SI]
    CMP AL,BUF[SI+1]
    JNE KL1
    INC BL
    MOV BH,AL
    JMP KL2
KL1:
    CMP COUNT,BL
    JAE L2
    MOV COUNT,BL
    MOV NUM,BH
L2:
    MOV BL,0
KL2:
    INC SI
    LOOP A
    INC COUNT
    LEA DX,MM
    MOV AH,9
    INT 21H
    MOV DL,COUNT
    ADD DL,30H
    MOV AH,2
    INT 21H
    MOV AH,4CH
    INT 21H
CODE ENDS

END START</code></pre>
        </div>

        <div class="block" id="17" name="17">
            <p><span class="number">（17）</span>
                已知宏指令为(自测题一简答题的第4小题)：<br />
                SHIFT MACRO RR,COUNT<br />
                MOV AX,COUNT<br />
                IF RR LE 64<br />
                MOV CL,3<br />
                SHR AX,CL<br />
                IF RR LT 16<br />
                MOV CL,6<br />
                SHR AX,CL<br />
                ENDIF<br />
                ENDIF<br />
                ENDM<br />
                宏调用为：SHIFT 15,7FFFH<br />
                SHIFT 80,9FFFH<br />
                写出宏展开后的等效源程序段(写在右边!)。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">;宏展开为:
    MOV AX,7FFFH
    MOV CL,3
    SHR AX,CL
    MOV CL,6
    SHR AX,CL
    MOV AX,9FFFH</code></pre>
            <div class="explain">
                <p class="explain-header">试题解析：</p>
                <p class="explain-content">
                EQ 	检测两个数是否相等<br/>
                NE 	检测两个数是否不相等<br/>
                GT 	检测左边的数是否大于右边的<br/>
                LT 	检测左边的数是否小于右边的<br/>
                GE 	检测左边的数是否大于等于右边的<br/>
                LE 	检测左边的数是否小于等于右边的
                </p>
            </div>
        </div>

        <div class="block">
            <p><span class="number">（18）</span>
                已知三个带符号的字节数据a,b,c存放在yeqianyi开始的连续单元中,若a,b,c同时为正数则FLAG单元置0,
                若同时为负数,则FLAG单元置1,否则FLAG单元置全1,请编写完整源程序。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">DATA  SEGMENT
    yeqianyi  DB  a,b,c
    FLAG      DB  ?
DATA  ENDS

CODE  SEGMENT
    ASSUME  CS:CODE,DS:DATA
START:
    MOV  AX,DATA
    MOV  DS,AX
    MOV  DX,0
    LEA  BX, yeqianyi
    MOV  CX,3
LOP:
    ;0既不是正数也不是负数，答案有点问题
    ;如果题目改成负数与非负数时答案才正确
    MOV  AL,[BX]
    TEST  AL,80H
    JZ  K1
    ADD  DH,1
    JMP  K2
K1:
    ADD  DL,1
K2:
    INC  BX
    LOOP  LOP
    CMP  DL,3
    JZ  K3
    CMP  DH,3
    JZ  K4
    JMP  K5
K3:
    MOV  FLAG,0
    JMP  K6
K4:
    MOV  FLAG,1
    JMP  K6
K5:
    MOV  FLAG,0FFH
K6:
    MOV  AH,4CH
    INT  21H
CODE  ENDS

END  START</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（19）</span>
                <strong> 5.25改编(汇编语言第4版):</strong> 从键盘输入一个字符串，
                然后将其中的大小写互换显示。显示字符串的功能调用采用宏，大小写互换写成子程序。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight x86asm">dispsage macro msg
    local next
    mov bx,offset msg+2
    mov cl,msg[1]
next:
    mov dl,[bx]
    mov ah,2
    int 21h
    inc bx
    dec cl
    jnz next
endm
dispmssage  macro  mssage
    mov dx,offset mssage
    mov ah,9
    int 21h
    endm
.model small
.stack
.data
msg1       db 'Please enter a string:',0dh,0ah,'$'
string     db 10,0, 10 dup(?)
string3    db 10 dup(?), 0dh,0ah,'$'
str        db      13,10,'$'
.code
.startup
dispmssage msg1
    mov dx,offset string
    mov ah,0ah
    int 21h
    dispmssage str
    call dxhh
    dispmssage string3
.exit 0

dxhh proc
    mov si,offset string+2
    mov cl,string[1]
    mov di,offset string3
next1:
    mov al,[si]
    cmp al,'A'
    jb next2
    cmp al,'Z'
    ja next3
    add al,20h
next2:
    mov [di],al
    inc si
    inc di
    dec cl
    jnz next1
    jmp next5
next3:
    cmp al,'a'
    jb next4
    cmp al,'z'
    ja next4
    sub al,20h
next4:
    mov [di],al
    inc si
    inc di
    dec cl
    jnz  next1
next5:
    ret
dxhh endp
END</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（20）</span>
                在Visual C环境下利用嵌入式汇编指令,完成对两个C变量的求和，结果由C程序显示。
            </p>
            <h4 class="answer-header">答案：</h4>
            <pre class="answer-code"><code class="nohighlight c++">#include "stdio.h"

main()
{
    int sum;
    int var1=5;
    int var2=6;
    _asm{
        mov eax,var1
        add eax,var2
        mov sum,eax
    }
    printf("%d\n",sum);
}
</code></pre>
        </div>
    </div>

    <!-- <?php
        require(relative(__FILE__).'template/footer.php');
        ?> -->

</body>

</html>
