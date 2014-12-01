<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::InputStream Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1InputStream.php">InputStream</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1InputStream-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::InputStream Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span><div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Abstract class for custom file input streams.  
 <a href="classsf_1_1InputStream.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="InputStream_8hpp_source.php">InputStream.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a4b2eb0f92323e630bd0542bc6191682e"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputStream.php#a4b2eb0f92323e630bd0542bc6191682e">~InputStream</a> ()</td></tr>
<tr class="memdesc:a4b2eb0f92323e630bd0542bc6191682e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Virtual destructor.  <a href="#a4b2eb0f92323e630bd0542bc6191682e"></a><br/></td></tr>
<tr class="separator:a4b2eb0f92323e630bd0542bc6191682e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8dd89c74c1acb693203f50e750c6ae53"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputStream.php#a8dd89c74c1acb693203f50e750c6ae53">read</a> (void *data, Int64 size)=0</td></tr>
<tr class="memdesc:a8dd89c74c1acb693203f50e750c6ae53"><td class="mdescLeft">&#160;</td><td class="mdescRight">Read data from the stream.  <a href="#a8dd89c74c1acb693203f50e750c6ae53"></a><br/></td></tr>
<tr class="separator:a8dd89c74c1acb693203f50e750c6ae53"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a76aba8e5d5cf9b1c5902d5e04f7864fc"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputStream.php#a76aba8e5d5cf9b1c5902d5e04f7864fc">seek</a> (Int64 position)=0</td></tr>
<tr class="memdesc:a76aba8e5d5cf9b1c5902d5e04f7864fc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current reading position.  <a href="#a76aba8e5d5cf9b1c5902d5e04f7864fc"></a><br/></td></tr>
<tr class="separator:a76aba8e5d5cf9b1c5902d5e04f7864fc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a599515b9ccdbddb6fef5a98424fd559c"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputStream.php#a599515b9ccdbddb6fef5a98424fd559c">tell</a> ()=0</td></tr>
<tr class="memdesc:a599515b9ccdbddb6fef5a98424fd559c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current reading position in the stream.  <a href="#a599515b9ccdbddb6fef5a98424fd559c"></a><br/></td></tr>
<tr class="separator:a599515b9ccdbddb6fef5a98424fd559c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a311eaaaa65d636728e5153b574b72d5d"><td class="memItemLeft" align="right" valign="top">virtual Int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1InputStream.php#a311eaaaa65d636728e5153b574b72d5d">getSize</a> ()=0</td></tr>
<tr class="memdesc:a311eaaaa65d636728e5153b574b72d5d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the size of the stream.  <a href="#a311eaaaa65d636728e5153b574b72d5d"></a><br/></td></tr>
<tr class="separator:a311eaaaa65d636728e5153b574b72d5d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Abstract class for custom file input streams. </p>
<p>This class allows users to define their own file input sources from which SFML can load resources.</p>
<p>SFML resource classes like <a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing.">sf::Texture</a> and <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound.">sf::SoundBuffer</a> provide loadFromFile and loadFromMemory functions, which read data from conventional sources. However, if you have data coming from a different source (over a network, embedded, encrypted, compressed, etc) you can derive your own class from <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams.">sf::InputStream</a> and load SFML resources with their loadFromStream function.</p>
<p>Usage example: </p>
<div class="fragment"><div class="line"><span class="comment">// custom stream class that reads from inside a zip file</span></div>
<div class="line"><span class="keyword">class </span>ZipStream : <span class="keyword">public</span> <a class="code" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams.">sf::InputStream</a></div>
<div class="line">{</div>
<div class="line"><span class="keyword">public</span> :</div>
<div class="line"></div>
<div class="line">    ZipStream(std::string archive);</div>
<div class="line"></div>
<div class="line">    <span class="keywordtype">bool</span> open(std::string filename);</div>
<div class="line"></div>
<div class="line">    Int64 <a class="code" href="classsf_1_1InputStream.php#a8dd89c74c1acb693203f50e750c6ae53" title="Read data from the stream.">read</a>(<span class="keywordtype">void</span>* data, Int64 size);</div>
<div class="line"></div>
<div class="line">    Int64 <a class="code" href="classsf_1_1InputStream.php#a76aba8e5d5cf9b1c5902d5e04f7864fc" title="Change the current reading position.">seek</a>(Int64 position);</div>
<div class="line">    </div>
<div class="line">    Int64 <a class="code" href="classsf_1_1InputStream.php#a599515b9ccdbddb6fef5a98424fd559c" title="Get the current reading position in the stream.">tell</a>();</div>
<div class="line"></div>
<div class="line">    Int64 <a class="code" href="classsf_1_1InputStream.php#a311eaaaa65d636728e5153b574b72d5d" title="Return the size of the stream.">getSize</a>();</div>
<div class="line"></div>
<div class="line"><span class="keyword">private</span> :</div>
<div class="line"></div>
<div class="line">    ...</div>
<div class="line">};</div>
<div class="line"></div>
<div class="line"><span class="comment">// now you can load textures...</span></div>
<div class="line"><a class="code" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing.">sf::Texture</a> texture;</div>
<div class="line">ZipStream stream(<span class="stringliteral">&quot;resources.zip&quot;</span>);</div>
<div class="line">stream.open(<span class="stringliteral">&quot;images/img.png&quot;</span>);</div>
<div class="line">texture.<a class="code" href="classsf_1_1Texture.php#a6803a13465a7113a8964d1081841886d" title="Load the texture from a custom stream.">loadFromStream</a>(stream);</div>
<div class="line"></div>
<div class="line"><span class="comment">// musics...</span></div>
<div class="line"><a class="code" href="classsf_1_1Music.php" title="Streamed music played from an audio file.">sf::Music</a> music;</div>
<div class="line">ZipStream stream(<span class="stringliteral">&quot;resources.zip&quot;</span>);</div>
<div class="line">stream.open(<span class="stringliteral">&quot;musics/msc.ogg&quot;</span>);</div>
<div class="line">music.<a class="code" href="classsf_1_1Music.php#a4e55d1910a26858b44778c26b237d673" title="Open a music from an audio file in a custom stream.">openFromStream</a>(stream);</div>
<div class="line"></div>
<div class="line"><span class="comment">// etc.</span></div>
</div><!-- fragment --> 
<p>Definition at line <a class="el" href="InputStream_8hpp_source.php#l00040">40</a> of file <a class="el" href="InputStream_8hpp_source.php">InputStream.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a4b2eb0f92323e630bd0542bc6191682e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::InputStream::~InputStream </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Virtual destructor. </p>

<p>Definition at line <a class="el" href="InputStream_8hpp_source.php#l00048">48</a> of file <a class="el" href="InputStream_8hpp_source.php">InputStream.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a311eaaaa65d636728e5153b574b72d5d"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::InputStream::getSize </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the size of the stream. </p>
<dl class="section return"><dt>Returns</dt><dd>The total number of bytes available in the stream, or -1 on error </dd></dl>

</div>
</div>
<a class="anchor" id="a8dd89c74c1acb693203f50e750c6ae53"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::InputStream::read </td>
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
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Read data from the stream. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Buffer where to copy the read data </td></tr>
    <tr><td class="paramname">size</td><td>Desired number of bytes to read</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>The number of bytes actually read, or -1 on error </dd></dl>

</div>
</div>
<a class="anchor" id="a76aba8e5d5cf9b1c5902d5e04f7864fc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::InputStream::seek </td>
          <td>(</td>
          <td class="paramtype">Int64&#160;</td>
          <td class="paramname"><em>position</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
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

</div>
</div>
<a class="anchor" id="a599515b9ccdbddb6fef5a98424fd559c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Int64 sf::InputStream::tell </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current reading position in the stream. </p>
<dl class="section return"><dt>Returns</dt><dd>The current position, or -1 on error. </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="InputStream_8hpp_source.php">InputStream.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>