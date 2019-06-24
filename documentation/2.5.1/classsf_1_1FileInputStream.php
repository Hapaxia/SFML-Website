<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::FileInputStream Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1FileInputStream.php">FileInputStream</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1FileInputStream-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::FileInputStream Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Implementation of input stream based on a file.  
 <a href="classsf_1_1FileInputStream.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="FileInputStream_8hpp_source.php">FileInputStream.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::FileInputStream:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1FileInputStream.png" usemap="#sf::FileInputStream_map" alt=""/>
  <map id="sf::FileInputStream_map" name="sf::FileInputStream_map">
<area href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. " alt="sf::InputStream" shape="rect" coords="0,0,115,24"/>
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="125,0,240,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a9a321e273f41ff7f187899061fcae9be"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#a9a321e273f41ff7f187899061fcae9be">FileInputStream</a> ()</td></tr>
<tr class="memdesc:a9a321e273f41ff7f187899061fcae9be"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a9a321e273f41ff7f187899061fcae9be">More...</a><br /></td></tr>
<tr class="separator:a9a321e273f41ff7f187899061fcae9be"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad49ae2025ff2183f80067943a7d0276d"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#ad49ae2025ff2183f80067943a7d0276d">~FileInputStream</a> ()</td></tr>
<tr class="memdesc:ad49ae2025ff2183f80067943a7d0276d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default destructor.  <a href="#ad49ae2025ff2183f80067943a7d0276d">More...</a><br /></td></tr>
<tr class="separator:ad49ae2025ff2183f80067943a7d0276d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a87a95dc3a71746097a99c86ee58bb353"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#a87a95dc3a71746097a99c86ee58bb353">open</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:a87a95dc3a71746097a99c86ee58bb353"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open the stream from a file path.  <a href="#a87a95dc3a71746097a99c86ee58bb353">More...</a><br /></td></tr>
<tr class="separator:a87a95dc3a71746097a99c86ee58bb353"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad1e94c4152429f485db224c44ee1eb50"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#ad1e94c4152429f485db224c44ee1eb50">read</a> (void *data, Int64 size)</td></tr>
<tr class="memdesc:ad1e94c4152429f485db224c44ee1eb50"><td class="mdescLeft">&#160;</td><td class="mdescRight">Read data from the stream.  <a href="#ad1e94c4152429f485db224c44ee1eb50">More...</a><br /></td></tr>
<tr class="separator:ad1e94c4152429f485db224c44ee1eb50"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abdaf5700d4e1de07568e7829106b4eb9"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#abdaf5700d4e1de07568e7829106b4eb9">seek</a> (Int64 position)</td></tr>
<tr class="memdesc:abdaf5700d4e1de07568e7829106b4eb9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current reading position.  <a href="#abdaf5700d4e1de07568e7829106b4eb9">More...</a><br /></td></tr>
<tr class="separator:abdaf5700d4e1de07568e7829106b4eb9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a768c5fdb3be79e2d71d1bce911f8741c"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#a768c5fdb3be79e2d71d1bce911f8741c">tell</a> ()</td></tr>
<tr class="memdesc:a768c5fdb3be79e2d71d1bce911f8741c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current reading position in the stream.  <a href="#a768c5fdb3be79e2d71d1bce911f8741c">More...</a><br /></td></tr>
<tr class="separator:a768c5fdb3be79e2d71d1bce911f8741c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aabdcaa315e088e008eeb9711ecc796e8"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1FileInputStream.php#aabdcaa315e088e008eeb9711ecc796e8">getSize</a> ()</td></tr>
<tr class="memdesc:aabdcaa315e088e008eeb9711ecc796e8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the size of the stream.  <a href="#aabdcaa315e088e008eeb9711ecc796e8">More...</a><br /></td></tr>
<tr class="separator:aabdcaa315e088e008eeb9711ecc796e8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Implementation of input stream based on a file. </p>
<p>This class is a specialization of <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">InputStream</a> that reads from a file on disk.</p>
<p>It wraps a file in the common <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">InputStream</a> interface and therefore allows to use generic classes or functions that accept such a stream, with a file on disk as the data source.</p>
<p>In addition to the virtual functions inherited from <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">InputStream</a>, <a class="el" href="classsf_1_1FileInputStream.php" title="Implementation of input stream based on a file. ">FileInputStream</a> adds a function to specify the file to open.</p>
<p>SFML resource classes can usually be loaded directly from a filename, so this class shouldn't be useful to you unless you create your own algorithms that operate on an <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">InputStream</a>.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> process(InputStream&amp; stream);</div><div class="line"></div><div class="line"><a class="code" href="classsf_1_1FileInputStream.php#a9a321e273f41ff7f187899061fcae9be">FileInputStream</a> stream;</div><div class="line"><span class="keywordflow">if</span> (stream.open(<span class="stringliteral">&quot;some_file.dat&quot;</span>))</div><div class="line">   process(stream);</div></div><!-- fragment --><p><a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">InputStream</a>, <a class="el" href="classsf_1_1MemoryInputStream.php" title="Implementation of input stream based on a memory chunk. ">MemoryInputStream</a> </p>

<p class="definition">Definition at line <a class="el" href="FileInputStream_8hpp_source.php#l00055">55</a> of file <a class="el" href="FileInputStream_8hpp_source.php">FileInputStream.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a9a321e273f41ff7f187899061fcae9be"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9a321e273f41ff7f187899061fcae9be">&#9670;&nbsp;</a></span>FileInputStream()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::FileInputStream::FileInputStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a id="ad49ae2025ff2183f80067943a7d0276d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad49ae2025ff2183f80067943a7d0276d">&#9670;&nbsp;</a></span>~FileInputStream()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::FileInputStream::~FileInputStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="aabdcaa315e088e008eeb9711ecc796e8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aabdcaa315e088e008eeb9711ecc796e8">&#9670;&nbsp;</a></span>getSize()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::FileInputStream::getSize </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the size of the stream. </p>
<dl class="section return"><dt>Returns</dt><dd>The total number of bytes available in the stream, or -1 on error </dd></dl>

<p>Implements <a class="el" href="classsf_1_1InputStream.php#a311eaaaa65d636728e5153b574b72d5d">sf::InputStream</a>.</p>

</div>
</div>
<a id="a87a95dc3a71746097a99c86ee58bb353"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a87a95dc3a71746097a99c86ee58bb353">&#9670;&nbsp;</a></span>open()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::FileInputStream::open </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Open the stream from a file path. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Name of the file to open</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True on success, false on error </dd></dl>

</div>
</div>
<a id="ad1e94c4152429f485db224c44ee1eb50"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad1e94c4152429f485db224c44ee1eb50">&#9670;&nbsp;</a></span>read()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::FileInputStream::read </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Int64&#160;</td>
          <td class="paramname"><em>size</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Read data from the stream. </p>
<p>After reading, the stream's reading position must be advanced by the amount of bytes read.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Buffer where to copy the read data </td></tr>
    <tr><td class="paramname">size</td><td>Desired number of bytes to read</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The number of bytes actually read, or -1 on error </dd></dl>

<p>Implements <a class="el" href="classsf_1_1InputStream.php#a8dd89c74c1acb693203f50e750c6ae53">sf::InputStream</a>.</p>

</div>
</div>
<a id="abdaf5700d4e1de07568e7829106b4eb9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abdaf5700d4e1de07568e7829106b4eb9">&#9670;&nbsp;</a></span>seek()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::FileInputStream::seek </td>
          <td>(</td>
          <td class="paramtype">Int64&#160;</td>
          <td class="paramname"><em>position</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Change the current reading position. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">position</td><td>The position to seek to, from the beginning</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The position actually sought to, or -1 on error </dd></dl>

<p>Implements <a class="el" href="classsf_1_1InputStream.php#a76aba8e5d5cf9b1c5902d5e04f7864fc">sf::InputStream</a>.</p>

</div>
</div>
<a id="a768c5fdb3be79e2d71d1bce911f8741c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a768c5fdb3be79e2d71d1bce911f8741c">&#9670;&nbsp;</a></span>tell()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::FileInputStream::tell </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current reading position in the stream. </p>
<dl class="section return"><dt>Returns</dt><dd>The current position, or -1 on error. </dd></dl>

<p>Implements <a class="el" href="classsf_1_1InputStream.php#a599515b9ccdbddb6fef5a98424fd559c">sf::InputStream</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="FileInputStream_8hpp_source.php">FileInputStream.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
