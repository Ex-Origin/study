<?php
include_once('../config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>数据结构试卷（二）</title>
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
        <h1 style="text-align:center">数据结构试卷（二）</h1>
        <h2 class="theme-sign">一、选择题（每题2分，共20分）</h2>
        <div class="block">
            <p class="question"><span class="number">（1）</span>
                1．下面关于线性表的叙述错误的是（ ）。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=1%EF%BC%8E%E4%B8%8B%E9%9D%A2%E5%85%B3%E4%BA%8E%E7%BA%BF%E6%80%A7%E8%A1%A8%E7%9A%84%E5%8F%99%E8%BF%B0%E9%94%99%E8%AF%AF%E7%9A%84%E6%98%AF%EF%BC%88%20%20%20%EF%BC%89%E3%80%82">百度</a></p>
            <p class="choice header_choice false">(A)．线性表采用顺序存储必须占用一片连续的存储空间</p>
            <p class="choice false">(B)．线性表采用链式存储不必占用一片连续的存储空间</p>
            <p class="choice false">(C)．线性表采用链式存储便于插入和删除操作的实现</p>
            <p class="choice true">(D)．线性表采用顺序存储便于插入和删除操作的实现</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">哈夫曼树是二叉树，且结点的度只有两种，一种是度为0的叶子节点，另一种则是度为2的内部结点，
                    不存在度为1 的结点，根据二叉树的性质（好像是性质3）度为0的结点和度为2 的结点的关系:n0=n2+1很容易算出；
                    叶子结点总数为m的哈夫曼树的总结点数为：2m-1
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（2）</span>
                设哈夫曼树中的叶子结点总数为m，若用二叉链表作为存储结构，则该哈夫曼树中总共有（ ）个空指针域。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E5%93%88%E5%A4%AB%E6%9B%BC%E6%A0%91%E4%B8%AD%E7%9A%84%E5%8F%B6%E5%AD%90%E7%BB%93%E7%82%B9%E6%80%BB%E6%95%B0%E4%B8%BAm%EF%BC%8C%E8%8B%A5%E7%94%A8%E4%BA%8C%E5%8F%89%E9%93%BE%E8%A1%A8%E4%BD%9C%E4%B8%BA%E5%AD%98%E5%82%A8%E7%BB%93%E6%9E%84%EF%BC%8C%E5%88%99%E8%AF%A5%E5%93%88%E5%A4%AB%E6%9B%BC%E6%A0%91%E4%B8%AD%E6%80%BB%E5%85%B1%E6%9C%89%EF%BC%88%20%20%EF%BC%89%E4%B8%AA%E7%A9%BA%E6%8C%87%E9%92%88%E5%9F%9F%E3%80%82">百度</a></p>
            <p class="oneLineChoice"><span class="choice false">(A)．2m-1</span>
                <span class="choice true">(B)．2m</span>
                <span class="choice false">(C)．2m+1</span>
                <span class="choice false">(D)．4m</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（3）</span>
                设顺序循环队列Q[0：M-1]的头指针和尾指针分别为F和R，头指针F总是指向队头元素的前一位置，尾指针R总是指向队尾元素的当前位置，则该循环队列中的元素个数为（ ）。<a class="baidu"
                    target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E9%A1%BA%E5%BA%8F%E5%BE%AA%E7%8E%AF%E9%98%9F%E5%88%97Q%5B0%EF%BC%9AM-1%5D%E7%9A%84%E5%A4%B4%E6%8C%87%E9%92%88%E5%92%8C%E5%B0%BE%E6%8C%87%E9%92%88%E5%88%86%E5%88%AB%E4%B8%BAF%E5%92%8CR%EF%BC%8C%E5%A4%B4%E6%8C%87%E9%92%88F%E6%80%BB%E6%98%AF%E6%8C%87%E5%90%91%E9%98%9F%E5%A4%B4%E5%85%83%E7%B4%A0%E7%9A%84%E5%89%8D%E4%B8%80%E4%BD%8D%E7%BD%AE%EF%BC%8C%E5%B0%BE%E6%8C%87%E9%92%88R%E6%80%BB%E6%98%AF%E6%8C%87%E5%90%91%E9%98%9F%E5%B0%BE%E5%85%83%E7%B4%A0%E7%9A%84%E5%BD%93%E5%89%8D%E4%BD%8D%E7%BD%AE%EF%BC%8C%E5%88%99%E8%AF%A5%E5%BE%AA%E7%8E%AF%E9%98%9F%E5%88%97%E4%B8%AD%E7%9A%84%E5%85%83%E7%B4%A0%E4%B8%AA%E6%95%B0%E4%B8%BA%EF%BC%88%20%20%EF%BC%89%E3%80%82">百度</a></p>
            <p class="choice header_choice false">(A)．R-F</p>
            <p class="choice false">(B)．F-R</p>
            <p class="choice true">(C)．(R-F+M)％M</p>
            <p class="choice false">(D)．(F-R+M)％M</p>
            <div class="explain">
                <p class="explain-header"> 试题解析：</p>
                <p class="explain-content">
                    如果R&gt;=F, 那么中间一共有R-F那么多元素
                    如果R&lt;F, 那么中间一共有 R+M-F那么多元素
                    两种情况下，都等于 (R-F+M)%M
                </p>
            </div>
        </div>
        <div class="block">
            <p class="question"><span class="number">（4）</span>
                设某棵二叉树的中序遍历序列为ABCD，前序遍历序列为CABD，则后序遍历该二叉树得到序列为（ ）。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9F%90%E6%A3%B5%E4%BA%8C%E5%8F%89%E6%A0%91%E7%9A%84%E4%B8%AD%E5%BA%8F%E9%81%8D%E5%8E%86%E5%BA%8F%E5%88%97%E4%B8%BAABCD%EF%BC%8C%E5%89%8D%E5%BA%8F%E9%81%8D%E5%8E%86%E5%BA%8F%E5%88%97%E4%B8%BACABD%EF%BC%8C%E5%88%99%E5%90%8E%E5%BA%8F%E9%81%8D%E5%8E%86%E8%AF%A5%E4%BA%8C%E5%8F%89%E6%A0%91%E5%BE%97%E5%88%B0%E5%BA%8F%E5%88%97%E4%B8%BA%EF%BC%88%20%20%20%EF%BC%89%E3%80%82">百度</a></p>
            <p class="oneLineChoice"><span class="choice true">(A)．BADC</span>
                <span class="choice false">(B)．BCDA</span>
                <span class="choice false">(C)．CDAB</span>
                <span class="choice false">(D)．CBDA</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（5）</span>
                设某完全无向图中有n个顶点，则该完全无向图中有（ ）条边。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9F%90%E5%AE%8C%E5%85%A8%E6%97%A0%E5%90%91%E5%9B%BE%E4%B8%AD%E6%9C%89n%E4%B8%AA%E9%A1%B6%E7%82%B9%EF%BC%8C%E5%88%99%E8%AF%A5%E5%AE%8C%E5%85%A8%E6%97%A0%E5%90%91%E5%9B%BE%E4%B8%AD%E6%9C%89%EF%BC%88%20%20%EF%BC%89%E6%9D%A1%E8%BE%B9%E3%80%82">百度</a></p>
            <p class="choice header_choice true">(A)．n(n-1)/2</p>
            <p class="choice false">(B)．n(n-1)</p>
            <p class="choice false">(C)．n2</p>
            <p class="choice false">(D)．n2-1</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（6）</span>
                设某棵二叉树中有2000个结点，则该二叉树的最小高度为（ ）。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9F%90%E6%A3%B5%E4%BA%8C%E5%8F%89%E6%A0%91%E4%B8%AD%E6%9C%892000%E4%B8%AA%E7%BB%93%E7%82%B9%EF%BC%8C%E5%88%99%E8%AF%A5%E4%BA%8C%E5%8F%89%E6%A0%91%E7%9A%84%E6%9C%80%E5%B0%8F%E9%AB%98%E5%BA%A6%E4%B8%BA%EF%BC%88%20%20%EF%BC%89%E3%80%82">百度</a></p>
            <p class="oneLineChoice"><span class="choice false">(A)．9</span>
                <span class="choice false">(B)．10</span>
                <span class="choice true">(C)．11</span>
                <span class="choice false">(D)．12</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（7）</span>
                设某有向图中有n个顶点，则该有向图对应的邻接表中有（ ）个表头结点。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9F%90%E6%9C%89%E5%90%91%E5%9B%BE%E4%B8%AD%E6%9C%89n%E4%B8%AA%E9%A1%B6%E7%82%B9%EF%BC%8C%E5%88%99%E8%AF%A5%E6%9C%89%E5%90%91%E5%9B%BE%E5%AF%B9%E5%BA%94%E7%9A%84%E9%82%BB%E6%8E%A5%E8%A1%A8%E4%B8%AD%E6%9C%89%EF%BC%88%20%20%EF%BC%89%E4%B8%AA%E8%A1%A8%E5%A4%B4%E7%BB%93%E7%82%B9%E3%80%82">百度</a></p>
            <p class="oneLineChoice"><span class="choice false">(A)．n-1</span>
                <span class="choice true">(B)．n</span>
                <span class="choice false">(C)．n+1</span>
                <span class="choice false">(D)．2n-1</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（8）</span>
                设一组初始记录关键字序列(5，2，6，3，8)，以第一个记录关键字5为基准进行一趟快速排序的结果为（ ）。<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E4%B8%80%E7%BB%84%E5%88%9D%E5%A7%8B%E8%AE%B0%E5%BD%95%E5%85%B3%E9%94%AE%E5%AD%97%E5%BA%8F%E5%88%97%285%EF%BC%8C2%EF%BC%8C6%EF%BC%8C3%EF%BC%8C8%29%EF%BC%8C%E4%BB%A5%E7%AC%AC%E4%B8%80%E4%B8%AA%E8%AE%B0%E5%BD%95%E5%85%B3%E9%94%AE%E5%AD%975%E4%B8%BA%E5%9F%BA%E5%87%86%E8%BF%9B%E8%A1%8C%E4%B8%80%E8%B6%9F%E5%BF%AB%E9%80%9F%E6%8E%92%E5%BA%8F%E7%9A%84%E7%BB%93%E6%9E%9C%E4%B8%BA%EF%BC%88%20%20%EF%BC%89%E3%80%82">百度</a></p>
            <p class="choice header_choice false">(A)．2，3，5，8，6</p>
            <p class="choice false">(B)．3，2，5，8，6</p>
            <p class="choice true">(C)．3，2，5，6，8</p>
            <p class="choice false">(D)．2，3，6，5，8</p>
        </div>

        <h2 class="theme-sign">二、填空题（每空1分，共26分）</h2>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（1）</span>
                为了能有效地应用HASH查找技术，必须解决的两个问题是
                <span class="gap-filling-answer"> 构造一个好的HASH函数 </span>
                和
                <span class="gap-filling-answer"> 确定解决冲突的方法 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（2）</span>
                下面程序段的功能实现数据x进栈，要求在下划线处填上正确的语句。
                <pre>typedef struct {int s[100]; int top;} sqstack;
void push(sqstack &stack,int x)
{
    if (stack.top==m-1) printf("overflow");
    else {<span class="gap-filling-answer"> stack.top++ </span>;<span class="gap-filling-answer"> stack.s[stack.top]=x </span>;}
}</pre>
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（3）</span>
                中序遍历二叉排序树所得到的序列是
                <span class="gap-filling-answer"> 有序 </span>
                序列（填有序或无序）。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（4）</span>
                快速排序的最坏时间复杂度为
                <span class="gap-filling-answer"> O(n<sup>2</sup>) </span>
                ，平均时间复杂度为
                <span class="gap-filling-answer"> O(nlog<sub>2</sub>n) </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（5）</span>
                设某棵二叉树中度数为0的结点数为N0，度数为1的结点数为N1，则该二叉树中度数为2的结点数为
                <span class="gap-filling-answer"> N<sub>0</sub>-1 </span>
                ；若采用二叉链表作为该二叉树的存储结构，则该二叉树中共有
                <span class="gap-filling-answer"> 2N<sub>0</sub>+N<sub>1</sub> </span>
                个空指针域。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（6）</span>
                设某无向图中顶点数和边数分别为n和e，所有顶点的度数之和为d，则e=
                <span class="gap-filling-answer"> d/2 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（7）</span>
                设一组初始记录关键字序列为(55，63，44，38，75，80，31，56)，则利用筛选法建立的初始堆为
                <span class="gap-filling-answer"> (31，38，54，56，75，80，55，63) </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（8）</span>
                已知一有向图的邻接表存储结构如下：从顶点1出发，DFS遍历的输出序列是
                <span class="gap-filling-answer"> (1，3，4，5，2) </span>
                ，BFS遍历的输出序列是
                <span class="gap-filling-answer"> (1，3，2，4，5) </span>
                。
            </p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i1" />
            </div>
        </div>
        <h2 class="theme-sign">三、应用题(36分)</h2>
        <div class="block">
            <p><span class="number">（1）. </span>设一组初始记录关键字序列为(45，80，48，40，22，78)，
                则分别给出第4趟简单选择排序和第4趟直接插入排序后的结果。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer">(22，40，45，48，80，78)，(40，45，48，80，22，78)</p>
        </div>

        <div class="block">
            <p><span class="number">（2）. </span>设指针变量p指向双向链表中结点A，指针变量q指向被插入结点B，
                要求给出在结点A的后面插入结点B的操作序列（设双向链表中结点的两个指针域分别为llink和rlink）。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer">q->llink=p; q->rlink=p->rlink; p->rlink->llink=q; p->rlink=q;</p>
        </div>

        <div class="block">
            <p><span class="number">（3）. </span>设一组有序的记录关键字序列为(13，18，24，35，47，50，62，83，90)，
                查找方法用二分查找，要求计算出查找关键字62时的比较次数并计算出查找成功时的平均查找长度。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer">2 , ASL=91*1+2*2+3*4+4*2)=25/9</p>
        </div>

        <div class="block">
            <p><span class="number">（4）. </span>设一棵树T中边的集合为{(A，B)，(A，C)，(A，D)，(B，E)，(C，F)，(C，G)}，
                要求用孩子兄弟表示法（二叉链表）表示出该树的存储结构并将该树转化成对应的二叉树。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer">树的链式存储结构略，二叉树略</p>
        </div>

        <div class="block">
            <p><span class="number">（5）. </span>设有无向图G，要求给出用普里姆算法构造最小生成树所走过的边的集合。</p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;" id="i2" />
            </div>
            <h4 style="color:red">答案：</h4>
            <p class="answer">E={(1，3)，(1，2)，(3，5)，(5，6)，(6，4)}</p>
        </div>

        <div class="block">
            <p><span class="number">（6）. </span>设有一组初始记录关键字为(45，80，48，40，22，78)，
                要求构造一棵二叉排序树并给出构造过程。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer">略</p>
        </div>

        <h2 class="theme-sign">四、算法设计题(16分) </h2>

        <div class="block">
            <p><span class="number">（1）. </span>
                设有一组初始记录关键字序列（K<sub>1</sub>，K<sub>2</sub>，…，K<sub>n</sub>），
                要求设计一个算法能够在O(n)的时间复杂度内将线性表划分成两部分，
                其中左半部分的每个关键字均小于K<sub>i</sub>，右半部分的每个关键字均大于等于K<sub>i</sub>。
            </p>
            <h4 style="color:red">答案：</h4>
            <pre class="answer-code"><code class="nohighlight c++" style="border-radius: 3px;overflow: auto;display:block">void quickpass(int r[], int s, int t)
{
    int i = s, j = t, x = r[s];
    while (i &lt; j)
    {
        while (i &lt; j &amp;&amp; r[j] &gt; x)
        {
            j = j - 1;
        }
        if (i &lt; j)
        {
            r[i] = r[j];
            i = i + 1;
        }
        while (i &lt; j &amp;&amp; r[i] &lt; x)
        {
            i = i + 1;
        }
        if (i &lt; j)
        {
            r[j] = r[i];
            j = j - 1;
        }
    }
    r[i] = x;
}</code></pre>
        </div>

        <div class="block">
            <p><span class="number">（2）. </span>
                设有两个集合A和集合B，要求设计生成集合 C = A∩B 的算法，其中集合A、B和C用链式存储结构表示。
            </p>
            <pre class="answer-code"><code class="nohighlight c++" style="border-radius: 3px;overflow: auto;display:block">typedef struct node
{
    int data;
    struct node *next;
} lklist;
void intersection(lklist *ha, lklist *hb, lklist *hc)
{
    lklist *p, *q, *t;
    for (p = ha, hc = 0; p != 0; p = p-&gt;next)
    {
        for (q = hb; q != 0; q = q-&gt;next)
        {
            if (q-&gt;data == p-&gt;data)
            {
                break;
            }
        }
        if (q != 0)
        {
            t = (lklist *)malloc(sizeof(lklist));
            t-&gt;data = p-&gt;data;
            t-&gt;next = hc;
            hc = t;
        }
    }
}</code></pre>
        </div>

    </div>

    <!-- <?php
        require(relative(__FILE__).'template/footer.php');
        ?> -->

</body>

</html>
<script>
document.getElementById("i1").src = "data:;base64,\
iVBORw0KGgoAAAANSUhEUgAAAWoAAACzAQMAAACaUMTzAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAO\
xAAADsQBlSsOGwAAAAZQTFRFAAAA////pdmf3QAAAw1JREFUaN7t2DFv00AUAGBTCzKWgQGJIUiM\
RXRgQCJCFjMLEksZOjF0QCgSEoS2BA8d+AlISEGBH5BO0MEljsSQBREmMkTpARFlqBIDUWsnZ99x\
7tk+R7HjO6qoKXKGxj1/eXq+Oz+/RMIir5qU8pQLcyT5L4WLu+/A/aPj4LPkk1/pkRweHOPkzaCH\
Bv0PhgdngD/j4KZhqx5/FcvZmYEBdY/3yFCY6wHfDThi/AA3RrgScAt3/NwXsZ+MhTfHolt0KXCb\
nKm5R/OInLLpoMvViGRs7ATRHX9mhjiPDaRH8D+4z3L3+S5+HnOpvSD6wLAUj+/EzsxOwE22TFX8\
c4RnQ8vUFtsEnRnfkcfGxW5twcJx7PwIRS/lR+G2KsShWwmQGHdU7tzFkkFil+qIcSjGLSXdYv8d\
jylLNTqY4YxOhsjew+Yk7nUGEieHOHiIzBa3s9Gc1RnEeAM4MdEh6zhy5DTl/VgealBapBeh3Aa2\
Es0RqzMd3PRzJ13LhOi/vIcu4XRbzLvcmJxMH28F0R3Cm5MvdQ9/CHJHStJEkktlM8OxTBpJx5/3\
k7zFpsp5bu0Q56kzoVtbsM6kFViYC/YEthgfTpUfuBzydxxuJdif1swgNd1iKcf4M39Zok/Fsei2\
V9tUvmQcb3gSpw9j6RQnN+l5Z0Z4XYxrjMNozr57mCO8H83ZN5uBSeJTjoqk/UjgqHD4E9Vh9FIc\
t1jheEGOPP6DdCtuezV+qay5ypBj1fZW9hsGwzhOo9fxhh/9d9zMhJqra2yZungQzVlzZYdWtZS8\
TDDEiydvR/4r57m1Q5ynLIVu7RhuB91SdgpFT+SV8png0g0AIDARfg+BlszzGvh4fU66KJc0Hn6z\
vPH2dYFEv/147rySyBcq2t31TelppvgAbOmJvFBZ667JJuydvQQWkvn9iuasVqUcWB7KF5L5uXLr\
9Bu5+VBeeoTeJfP1Smtfy7/cA3funSkn85UKvJxbXIZgSS1UOaKXYRt++gLBrdWCnsylK/Xu96uN\
XPbJSmZbTfd7ylM+Rf4XYI5VGQ1mud0AAAAASUVORK5CYII=";
document.getElementById("i2").src = "data:;base64,\
/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIy\
MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCADRANQDASIA\
AhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQA\
AAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3\
ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWm\
p6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEA\
AwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSEx\
BhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElK\
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3\
uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iig\
nFABRR+FH4UAFFH4UfhQAUUfhR+FABRR+FH4UAFFH4UfhQAUUfhR+FABRR+FH4UAFFH4UfhQAUUf\
hR+FABRR+FH4UAFFH4UfhQAUUA5ooAKKKKACkPT8aWkPT8aAFooooAKKKKACiiigAooooAKx9V1m\
a3votL023S51OaMzKkr7I44wQC7tgnGSBhQTkjjGSNO5mW2tZZ2BKxIXIHUgDNc/4KhafRv7ZnYS\
T6oxulkbl1hc7o0J/wBlSBxxxQA7/hFm1D95rmo3V2ZOZbRJClt7AL1445yMkZwOlH/CCeHU+aCx\
NvMOUmilcOh7EZJ5FdHXN+FdX1LUr7xBb6l5G6x1D7PEIAcBPLRhyeSfmoADaa5oIL2U76vZ/eki\
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";
</script>