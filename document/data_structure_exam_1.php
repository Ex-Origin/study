<?php
    include_once ('../waf.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>数据结构试卷（一）</title>
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
        <h1 style="text-align:center">数据结构试卷（一）</h1>
        <h2 class="theme-sign">一、选择题（每题2分，共20分）</h2>
        <div class="block">
            <p class="question"><span class="number">（1）</span>
                栈和队列的共同特点是( )。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%A0%88%E5%92%8C%E9%98%9F%E5%88%97%E7%9A%84%E5%85%B1%E5%90%8C%E7%89%B9%E7%82%B9%E6%98%AF%28%20%20%20%20%20%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice true">&emsp;A.只允许在端点处插入和删除元素</p>
            <p class="choice false">&emsp;B.都是先进后出</p>
            <p class="choice false">&emsp;C.都是先进先出</p>
            <p class="choice false">&emsp;D.没有共同点</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（2）</span>
                用链接方式存储的队列，在进行插入运算时( ).&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E7%94%A8%E9%93%BE%E6%8E%A5%E6%96%B9%E5%BC%8F%E5%AD%98%E5%82%A8%E7%9A%84%E9%98%9F%E5%88%97%EF%BC%8C%E5%9C%A8%E8%BF%9B%E8%A1%8C%E6%8F%92%E5%85%A5%E8%BF%90%E7%AE%97%E6%97%B6%28%20%20%20%29.">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A.仅修改头指针　</span>
                <span class="choice false">B.头、尾指针都要修改</span>
                <span class="choice false">C.仅修改尾指针</span>
                <span class="choice true">D.头、尾指针可能都要修改</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（3）</span>
                以下数据结构中哪一个是非线性结构？( )&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BB%A5%E4%B8%8B%E6%95%B0%E6%8D%AE%E7%BB%93%E6%9E%84%E4%B8%AD%E5%93%AA%E4%B8%80%E4%B8%AA%E6%98%AF%E9%9D%9E%E7%BA%BF%E6%80%A7%E7%BB%93%E6%9E%84%EF%BC%9F%28%20%20%20%29">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A.队列　　</span>
                <span class="choice false">B.栈</span>
                <span class="choice false">C.线性表　　</span>
                <span class="choice true">D.二叉树</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（4）</span>
                设有一个二维数组A[m][n]，假设A[0][0]存放位置在644<sub>(10)</sub>，A[2][2]存放位置在676<sub>(10)</sub>，每个元素占一个空间，问A[3][3]<sub>(10)</sub>存放在什么位置？脚注<sub>(10)</sub>表示用10进制表示。&emsp;<a
                    class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9C%89%E4%B8%80%E4%B8%AA%E4%BA%8C%E7%BB%B4%E6%95%B0%E7%BB%84A%5Bm%5D%5Bn%5D%EF%BC%8C%E5%81%87%E8%AE%BEA%5B0%5D%5B0%5D%E5%AD%98%E6%94%BE%E4%BD%8D%E7%BD%AE%E5%9C%A8644%2810%29%EF%BC%8CA%5B2%5D%5B2%5D%E5%AD%98%E6%94%BE%E4%BD%8D%E7%BD%AE%E5%9C%A8676%2810%29%EF%BC%8C%E6%AF%8F%E4%B8%AA%E5%85%83%E7%B4%A0%E5%8D%A0%E4%B8%80%E4%B8%AA%E7%A9%BA%E9%97%B4%EF%BC%8C%E9%97%AEA%5B3%5D%5B3%5D%2810%29%E5%AD%98%E6%94%BE%E5%9C%A8%E4%BB%80%E4%B9%88%E4%BD%8D%E7%BD%AE%EF%BC%9F%E8%84%9A%E6%B3%A8%2810%29%E8%A1%A8%E7%A4%BA%E7%94%A810%E8%BF%9B%E5%88%B6%E8%A1%A8%E7%A4%BA%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A．688</span>
                <span class="choice false">B．678</span>
                <span class="choice true">C．692</span>
                <span class="choice false">D．696</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（5）</span>
                树最适合用来表示( )。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E6%A0%91%E6%9C%80%E9%80%82%E5%90%88%E7%94%A8%E6%9D%A5%E8%A1%A8%E7%A4%BA%28%20%20%20%20%20%20%29%E3%80%82">百度</a></p>
            <p class="choice header_choice false">&emsp;A.有序数据元素</p>
            <p class="choice false">&emsp;B.无序数据元素</p>
            <p class="choice true">&emsp;C.元素之间具有分支层次关系的数据</p>
            <p class="choice false">&emsp;D.元素之间无联系的数据</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（6）</span>
                二叉树的第k层的结点数最多为( ).&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E4%BA%8C%E5%8F%89%E6%A0%91%E7%9A%84%E7%AC%ACk%E5%B1%82%E7%9A%84%E7%BB%93%E7%82%B9%E6%95%B0%E6%9C%80%E5%A4%9A%E4%B8%BA%28%20%20%29.">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A．2<sup>k</sup>-1</span>
                <span class="choice false">B.2K+1</span>
                <span class="choice false">C.2K-1</span>
                <span class="choice true">D.2<sup>k-1</sup></span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（7）</span>
                若有18个元素的有序表存放在一维数组A[19]中，第一个元素放A[1]中，现进行二分查找，则查找A[3]的比较序列的下标依次为( )&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E8%8B%A5%E6%9C%8918%E4%B8%AA%E5%85%83%E7%B4%A0%E7%9A%84%E6%9C%89%E5%BA%8F%E8%A1%A8%E5%AD%98%E6%94%BE%E5%9C%A8%E4%B8%80%E7%BB%B4%E6%95%B0%E7%BB%84A%5B19%5D%E4%B8%AD%EF%BC%8C%E7%AC%AC%E4%B8%80%E4%B8%AA%E5%85%83%E7%B4%A0%E6%94%BEA%5B1%5D%E4%B8%AD%EF%BC%8C%E7%8E%B0%E8%BF%9B%E8%A1%8C%E4%BA%8C%E5%88%86%E6%9F%A5%E6%89%BE%EF%BC%8C%E5%88%99%E6%9F%A5%E6%89%BEA%EF%BC%BB3%EF%BC%BD%E7%9A%84%E6%AF%94%E8%BE%83%E5%BA%8F%E5%88%97%E7%9A%84%E4%B8%8B%E6%A0%87%E4%BE%9D%E6%AC%A1%E4%B8%BA%28%20%20%20%20%20%20%29">百度</a></p>
            <p class="choice header_choice false">&emsp;A.1，2，3 </p>
            <p class="choice false">&emsp;B.9，5，2，3</p>
            <p class="choice false">&emsp;C.9，5，3 </p>
            <p class="choice true">&emsp;D.9，4，2，3</p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（8）</span>
                对n个记录的文件进行快速排序，所需要的辅助存储空间大致为&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E5%AF%B9n%E4%B8%AA%E8%AE%B0%E5%BD%95%E7%9A%84%E6%96%87%E4%BB%B6%E8%BF%9B%E8%A1%8C%E5%BF%AB%E9%80%9F%E6%8E%92%E5%BA%8F%EF%BC%8C%E6%89%80%E9%9C%80%E8%A6%81%E7%9A%84%E8%BE%85%E5%8A%A9%E5%AD%98%E5%82%A8%E7%A9%BA%E9%97%B4%E5%A4%A7%E8%87%B4%E4%B8%BA">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A.O（1）　　</span>
                <span class="choice false">B.O（n）　　</span>
                <span class="choice true">C.O（1og<sub>2</sub>n）</span>
                <span class="choice false">D.O（n<sup>2</sup>）</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（9）</span>
                对于线性表（7，34，55，25，64，46，20，10）进行散列存储时，若选用H（K）=K %9作为散列函数，则散列地址为1的元素有（ ）个，&emsp;<a class="baidu" target="_blank"
                    href="https://www.baidu.com/s?wd=%E5%AF%B9%E4%BA%8E%E7%BA%BF%E6%80%A7%E8%A1%A8%EF%BC%887%EF%BC%8C34%EF%BC%8C55%EF%BC%8C25%EF%BC%8C64%EF%BC%8C46%EF%BC%8C20%EF%BC%8C10%EF%BC%89%E8%BF%9B%E8%A1%8C%E6%95%A3%E5%88%97%E5%AD%98%E5%82%A8%E6%97%B6%EF%BC%8C%E8%8B%A5%E9%80%89%E7%94%A8H%EF%BC%88K%EF%BC%89%3DK%20%259%E4%BD%9C%E4%B8%BA%E6%95%A3%E5%88%97%E5%87%BD%E6%95%B0%EF%BC%8C%E5%88%99%E6%95%A3%E5%88%97%E5%9C%B0%E5%9D%80%E4%B8%BA1%E7%9A%84%E5%85%83%E7%B4%A0%E6%9C%89%EF%BC%88%20%20%20%EF%BC%89%E4%B8%AA%EF%BC%8C">百度</a></p>
            <p class="one-line-choice"><span class="choice false">A．1</span>
                <span class="choice false">B．2</span>
                <span class="choice false">C．3</span>
                <span class="choice true">D．4</span>
            </p>
        </div>
        <div class="block">
            <p class="question"><span class="number">（10）</span>
                设有6个结点的无向图，该图至少应有( )条边才能确保是一个连通图。&emsp;<a class="baidu" target="_blank" href="https://www.baidu.com/s?wd=%E8%AE%BE%E6%9C%896%E4%B8%AA%E7%BB%93%E7%82%B9%E7%9A%84%E6%97%A0%E5%90%91%E5%9B%BE%EF%BC%8C%E8%AF%A5%E5%9B%BE%E8%87%B3%E5%B0%91%E5%BA%94%E6%9C%89%28%20%20%20%20%20%20%29%E6%9D%A1%E8%BE%B9%E6%89%8D%E8%83%BD%E7%A1%AE%E4%BF%9D%E6%98%AF%E4%B8%80%E4%B8%AA%E8%BF%9E%E9%80%9A%E5%9B%BE%E3%80%82">百度</a></p>
            <p class="one-line-choice"><span class="choice true">A.5</span>
                <span class="choice false">B.6</span>
                <span class="choice false">C.7</span>
                <span class="choice false">D.8</span>
            </p>
        </div>
        <h2 class="theme-sign">二、填空题（每空1分，共26分）</h2>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（1）</span>
                通常从四个方面评价算法的质量：
                <span class="gap-filling-answer"> 正确性 </span>
                、
                <span class="gap-filling-answer"> 易读性 </span>
                、
                <span class="gap-filling-answer"> 强壮性 </span>
                和
                <span class="gap-filling-answer"> 高效率 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（2）</span>
                一个算法的时间复杂度为(n<sup>3</sup>+n<sup>2</sup>log<sub>2</sub>n+14n)/n<sup>2</sup>，其数量级表示为
                <span class="gap-filling-answer"> O(n) </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（3）</span>
                假定一棵树的广义表表示为A（C，D（E，F，G），H（I，J）），则树中所含的结点数为
                <span class="gap-filling-answer"> 9 </span>
                个，树的深度为
                <span class="gap-filling-answer"> 3 </span>
                ，树的度为
                <span class="gap-filling-answer"> 3 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（4）</span>
                后缀算式9 2 3 +- 10 2 / -的值为
                <span class="gap-filling-answer"> -1 </span>
                。中缀算式（3+4X）-2Y/3对应的后缀算式为
                <span class="gap-filling-answer"> 3 4 X * + 2 Y * 3 / - </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（5）</span>
                若用链表存储一棵二叉树时，每个结点除数据域外，还有指向左孩子和右孩子的两个指针。在这种存储结构中，n个结点的二叉树共有
                <span class="gap-filling-answer"> 2n </span>
                个指针域，其中有
                <span class="gap-filling-answer"> n-1 </span>
                个指针域是存放了地址，有
                <span class="gap-filling-answer"> n+1 </span>
                个指针是空指针。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（6）</span>
                对于一个具有n个顶点和e条边的有向图和无向图，在其对应的邻接表中，所含边结点分别有
                <span class="gap-filling-answer"> e </span>
                个和
                <span class="gap-filling-answer"> 2e </span>
                个。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（7）</span>
                AOV网是一种
                <span class="gap-filling-answer"> 有向无回路 </span>
                的图。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（8）</span>
                在一个具有n个顶点的无向完全图中，包含有
                <span class="gap-filling-answer"> n(n-1)/2 </span>
                条边，在一个具有n个顶点的有向完全图中，包含有
                <span class="gap-filling-answer"> n(n-1) </span>
                条边。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（9）</span>
                假定一个线性表为(12,23,74,55,63,40)，若按Key % 4条件进行划分，使得同一余数的元素成为一个子表，则得到的四个子表分别为
                <span class="gap-filling-answer"> （12，40） </span>
                、
                <span class="gap-filling-answer"> （ ） </span>
                、
                <span class="gap-filling-answer"> （74） </span>
                和
                <span class="gap-filling-answer"> （23,55，63） </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（10）</span>
                向一棵B_树插入元素的过程中，若最终引起树根结点的分裂，则新树比原树的高度
                <span class="gap-filling-answer"> 增加1 </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（11）</span>
                在堆排序的过程中，对任一分支结点进行筛运算的时间复杂度为
                <span class="gap-filling-answer"> O(log2n) </span>
                ，整个堆排序过程的时间复杂度为
                <span class="gap-filling-answer"> O(nlog2n) </span>
                。
            </p>
        </div>
        <div class="block">
            <p class="gap-filling">
                <span class="number">（12）</span>
                在快速排序、堆排序、归并排序中，
                <span class="gap-filling-answer"> 归并 </span>
                排序是稳定的。
            </p>
        </div>

        <h2 class="theme-sign">三、计算题（每题 6 分，共24分）</h2>
        <div class="block">
            <p><span class="number">1. </span>在如下数组A中链接存储了一个线性表，表头指针为A [0].next，试写出该线性表。</p>
            <div  class="container-table-center">
            <table>
                <tr>
                    <th>A</th>
                    <td>0</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr>
                    <th>data</th>
                    <td></td>
                    <td>60</td>
                    <td>50</td>
                    <td>78</td>
                    <td>90</td>
                    <td>34</td>
                    <td></td>
                    <td>40</td>
                </tr>
                <tr>
                    <th>Next</th>
                    <td>3</td>
                    <td>5</td>
                    <td>7</td>
                    <td>2</td>
                    <td>0</td>
                    <td>4</td>
                    <td></td>
                    <td>1</td>
                </tr>
            </table>
            </div>

            <h4 style="color:red">答案：</h4>
            <p class="answer">线性表为：（78，50，40，60，34，90）</p>
        </div>

        <div class="block">
            <p><span class="number">3. </span>已知一个图的顶点集V和边集E分别为：V={1,2,3,4,5,6,7};<br />
                E={(1,2)3,(1,3)5,(1,4)8,(2,5)10,(2,3)6,(3,4)15,<br />
                (3,5)12,(3,6)9,(4,6)4,(4,7)20,(5,6)18,(6,7)25};<br />
                用克鲁斯卡尔算法得到最小生成树，试写出在最小生成树中依次得到的各条边。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer"> 3. 用克鲁斯卡尔算法得到的最小生成树为： <br />
                (1,2)3, (4,6)4, (1,3)5, (1,4)8, (2,5)10, (4,7)20</p>
        </div>

        <div class="block">
            <p><span class="number">4. </span>画出向小根堆中加入数据4, 2, 5, 8, 3时，每加入一个数据后堆的变化。</p>
            <h4 style="color:red">答案：</h4>
            <p class="answer" onclick="document.getElementById('i1').style='width:100%;max-width:25em;'">如图</p>
            <div class="img-center">
                <img style="width:100%;max-width:25em;display: none" id="i1" />
            </div>
        </div>

        <h2 class="theme-sign">四、阅读算法（每题7分，共14分）</h2>
        <div class="block">
            <p><span class="number">1. </span></p>


            
            <pre><code class="c++" style="border-radius: 3px;overflow: auto">LinkList mynote(LinkList L)
{ 
    //L是不带头结点的单链表的头指针
    if (L && L->next)
    {
        q = L;
        L = L－ > next;
        p = L;
    S1:
        while (p－ > next)
        {
            p = p－ > next;
        }
    S2:
        p－ > next = q;
        q－ > next = NULL;
    }
    return L;
}</code></pre>
            <p>请回答下列问题：<br />
                （1）说明语句S1的功能；
                <h4 style="color:red;">答案：</h4>
                <p class="answer">查询链表的尾结点</p>
                （2）说明语句组S2的功能；
                <h4 style="color:red;">答案：</h4>
                <p class="answer">将第一个结点链接到链表的尾部，作为新的尾结点</p>
                （3）设链表表示的线性表为（a1,a2, …,an）,写出算法执行后的返回值所表示的线性表。
                <h4 style="color:red;">答案：</h4>
                <p class="answer">返回的线性表为（a2,a3,…,an,a1） </p>
            </p>
        </div>

        <div class="block">
            <p><span class="number">2. </span></p>
            <pre><code class="c++" style="border-radius: 3px;overflow: auto">void ABC(BTNode *BT)
{
    if (BT)
    {
        ABC(BT->left);
        ABC(BT->right);
        cout << BT->data << ' ';
    }
}</code></pre>
            <p>该算法的功能是：</p>
            <h4 style="color:red;">答案：</h4>
            <p class="answer">递归地后序遍历链式存储的二叉树。</p>
        </div>

        <h2 class="theme-sign">五、算法填空（共8分）</h2>
        <div class="block">
            <p>二叉搜索树的查找——递归算法:</p>
            <pre><code class="nohighlight hljs" style="border-radius: 3px;overflow: auto;display:block"><span class="hljs-function"><span class="hljs-keyword">bool</span> <span class="hljs-title">Find</span><span class="hljs-params">(BTreeNode *BST, ElemType &amp;item)</span>
</span>{
    <span class="hljs-keyword">if</span> (BST == <span class="hljs-literal">NULL</span>)
    {
        <span class="hljs-keyword">return</span> <span class="hljs-literal">false</span>; <span class="hljs-comment">//查找失败</span>
    }
    <span class="hljs-keyword">else</span>
    {
        <span class="hljs-keyword">if</span> (item == BST-&gt;data)
        {
            item = BST-&gt;data; <span class="hljs-comment">//查找成功</span>
            <span class="hljs-keyword">return</span> <span class="hljs-literal gap-filling-answer">true</span>;
        }
        <span class="hljs-keyword">else</span> <span class="hljs-keyword">if</span> (item &lt; BST-&gt;data)
        {
            <span class="hljs-keyword">return</span> Find(<span class="gap-filling-answer">BST-&gt;left</span>, item);
        }
        <span class="hljs-keyword">else</span>
        {
            <span class="hljs-keyword">return</span> Find(<span class="gap-filling-answer">BST-&gt;right</span>, item);
        }
    } <span class="hljs-comment">//if</span>
}</code></pre>
        </div>
        <h2 class="theme-sign">六、编写算法（共8分）</h2>
        <div class="block">
            <p>统计出单链表HL中结点的值等于给定值X的结点数。<br />
                int CountX(LNode* HL,ElemType x)</p>
            <h4 style="color:red;">答案：</h4>
            <pre class="answer-code"><code class="nohighlight c++" style="border-radius: 3px;overflow: auto;display:block">int CountX(LNode *HL, ElemType x)
{
    int i = 0;
    LNode *p = HL; //i为计数器
    while (p != NULL)
    {
        if (P->data == x)
            i++;
        p = p->next;
    } //while, 出循环时i中的值即为x结点个数
    return i;
} //CountX</code></pre>
        </div>
    </div>

    <!-- <?php
    require ('../template/footer.php');
    ?> -->

</body>

</html>

<script>
    document.getElementById("i1").src = "data:image/jpeg;base64,\
    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\
uXfvnpSUVGBgYGNjI32UFRUVFd7e3ioqKjzbjbexsVFWVlZWVtbf3//9+/ejK7x588bS0lJCQoKl\
Y3ABiy2C9Tx0OEQi8dy5c5cuXdLS0jIzM9PU1KTRaG1tbSUlJe/fv/f39w8JCUGhUPyWyQvIZHJ0\
dPS5c+emT59uZWWlra0tKira1dWVm5tbW1u7bt26EydOqKqq8lvmv9BotFu3bv3www99fX02NjZ6\
enri4uJ4PL6kpKS8vHzZsmWnT59mbIfKAz58+PDdd9/99ddfpqamp06dYlcNuR0zfXx8dHV1w8LC\
+G5Le3v7qVOnbt68aWhoePbsWXbVeLMbL8OW/fv3nzlzJjY2Vltb28zMTENDg0wmNzU1lZWVffz4\
cfPmzTdu3MjOzkb0oIGJ2yK4OZQBjUYrLCwsLS1ta2uj0+loNNrExMTKykr4RpDGQllZWWFhYXNz\
8+DgIBqNNjIywmKxgnD+B0vevHmTnZ3d2NjY39+vrKysq6trZ2c3pkVEcNPf34/D4Wpra9vb2yUk\
JFRVVa2srHhwgtDz58/XrVtXU1MzfGEMf22hUCjPnz+vqKhoa2sTFxfHYDAWFhZmZmZIzAZlB5Mt\
VCo1Pz//5cuXbW1tIiIiaDR6/vz5lpaWoqKiZ86cKS4uRm4TqSEmYoug51AAYJJCo9EsLCyCgoJg\
nJQjBIzLlv7+fgMDg3v37sE7iRheBGt+KAAgNPz6669SUlJr167ltxDBYly2SEpKhoaGInTWKVyA\
figAAD94PN7Y2PjRo0empqb81iJAcGELhUIxMTE5e/ask5MTotq4BuRQAAB+9u7dSyKRYmJi+C1E\
sODOlqSkpNDQ0NLSUlFRQbxvBjkUAICZysrKxYsXV1VVwbsl1WRnIrYsWrQoICBg/fr1SAibICCH\
AgDc09fXl5eX19TU1NXVpaCgoKGhYWVl5ebm5uzsvGfPHn6r4xuw25Kdne3r61tTU9PT01NYWNjW\
1tbX18eYmmJiYsLLSQWjATkUAOCG8vLykydPPnnyxNDQ0MjISFZWlkAg1NTUVFVVqamp3b5928TE\
hN8a+QBCttDp9ODgYBwOV1dXZ2JioqurO3Xq1K6uruLi4t7e3g0bNhw6dGi8++nBBhKz/wEAIWZw\
cHDPnj3KysqRkZFDh6QP0dPTc/bsWRQKtX//fgqFwheFfAE5W5qamiwtLRcsWJCcnDw4OMhUWl1d\
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\
e/4PYXUS6EuabhgAAAAASUVORK5CYII=";
</script>