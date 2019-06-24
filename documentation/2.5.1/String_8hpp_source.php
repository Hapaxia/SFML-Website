<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'String.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_2916f9fbcacdf2e5f0583aa159c707b6.php">C++</a></li><li class="navelem"><a class="el" href="dir_bab8256609b0af2067c29191512341ac.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a8c958b201b07fccfdb6651296ecafd7.php">include</a></li><li class="navelem"><a class="el" href="dir_9b72d1e63b6540393a46f669861ed95a.php">SFML</a></li><li class="navelem"><a class="el" href="dir_6a6e9425d7b4a23933a1ede368044032.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">String.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_STRING_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_STRING_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Utf.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;iterator&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;locale&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1String.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1String.php">String</a></div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <span class="comment">// Types</span></div><div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">   52</a></span>&#160;<span class="comment"></span>    <span class="keyword">typedef</span> std::basic_string&lt;Uint32&gt;::iterator       <a class="code" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">Iterator</a>;      </div><div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">   53</a></span>&#160;    <span class="keyword">typedef</span> std::basic_string&lt;Uint32&gt;::const_iterator <a class="code" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">ConstIterator</a>; </div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="comment">// Static member data</span></div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">   58</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> std::size_t <a class="code" href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">InvalidPos</a>; </div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>();</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keywordtype">char</span> ansiChar, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keywordtype">wchar_t</span> wideChar);</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(Uint32 utf32Char);</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <span class="keywordtype">char</span>* ansiString, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::string&amp; ansiString, <span class="keyword">const</span> std::locale&amp; locale = std::locale());</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <span class="keywordtype">wchar_t</span>* wideString);</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::wstring&amp; wideString);</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> Uint32* utf32String);</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> std::basic_string&lt;Uint32&gt;&amp; utf32String);</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; copy);</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf8(T begin, T end);</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf16(T begin, T end);</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;    <span class="keyword">static</span> <a class="code" href="classsf_1_1String.php">String</a> fromUtf32(T begin, T end);</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;</div><div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;    <span class="keyword">operator</span> std::string() <span class="keyword">const</span>;</div><div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div><div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;    <span class="keyword">operator</span> std::wstring() <span class="keyword">const</span>;</div><div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;</div><div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;    std::string toAnsiString(<span class="keyword">const</span> std::locale&amp; locale = std::locale()) <span class="keyword">const</span>;</div><div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;</div><div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;    std::wstring toWideString() <span class="keyword">const</span>;</div><div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;</div><div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;    std::basic_string&lt;Uint8&gt; toUtf8() <span class="keyword">const</span>;</div><div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;</div><div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;    std::basic_string&lt;Uint16&gt; toUtf16() <span class="keyword">const</span>;</div><div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;</div><div class="line"><a name="l00299"></a><span class="lineno">  299</span>&#160;    std::basic_string&lt;Uint32&gt; toUtf32() <span class="keyword">const</span>;</div><div class="line"><a name="l00300"></a><span class="lineno">  300</span>&#160;</div><div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00310"></a><span class="lineno">  310</span>&#160;</div><div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a>&amp; operator +=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00320"></a><span class="lineno">  320</span>&#160;</div><div class="line"><a name="l00332"></a><span class="lineno">  332</span>&#160;    Uint32 operator [](std::size_t index) <span class="keyword">const</span>;</div><div class="line"><a name="l00333"></a><span class="lineno">  333</span>&#160;</div><div class="line"><a name="l00345"></a><span class="lineno">  345</span>&#160;    Uint32&amp; operator [](std::size_t index);</div><div class="line"><a name="l00346"></a><span class="lineno">  346</span>&#160;</div><div class="line"><a name="l00355"></a><span class="lineno">  355</span>&#160;    <span class="keywordtype">void</span> clear();</div><div class="line"><a name="l00356"></a><span class="lineno">  356</span>&#160;</div><div class="line"><a name="l00365"></a><span class="lineno">  365</span>&#160;    std::size_t getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00366"></a><span class="lineno">  366</span>&#160;</div><div class="line"><a name="l00375"></a><span class="lineno">  375</span>&#160;    <span class="keywordtype">bool</span> isEmpty() <span class="keyword">const</span>;</div><div class="line"><a name="l00376"></a><span class="lineno">  376</span>&#160;</div><div class="line"><a name="l00387"></a><span class="lineno">  387</span>&#160;    <span class="keywordtype">void</span> erase(std::size_t position, std::size_t count = 1);</div><div class="line"><a name="l00388"></a><span class="lineno">  388</span>&#160;</div><div class="line"><a name="l00399"></a><span class="lineno">  399</span>&#160;    <span class="keywordtype">void</span> insert(std::size_t position, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; str);</div><div class="line"><a name="l00400"></a><span class="lineno">  400</span>&#160;</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;    std::size_t find(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; str, std::size_t start = 0) <span class="keyword">const</span>;</div><div class="line"><a name="l00414"></a><span class="lineno">  414</span>&#160;</div><div class="line"><a name="l00427"></a><span class="lineno">  427</span>&#160;    <span class="keywordtype">void</span> replace(std::size_t position, std::size_t length, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; replaceWith);</div><div class="line"><a name="l00428"></a><span class="lineno">  428</span>&#160;</div><div class="line"><a name="l00439"></a><span class="lineno">  439</span>&#160;    <span class="keywordtype">void</span> replace(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; searchFor, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; replaceWith);</div><div class="line"><a name="l00440"></a><span class="lineno">  440</span>&#160;</div><div class="line"><a name="l00456"></a><span class="lineno">  456</span>&#160;    <a class="code" href="classsf_1_1String.php">String</a> substring(std::size_t position, std::size_t length = InvalidPos) <span class="keyword">const</span>;</div><div class="line"><a name="l00457"></a><span class="lineno">  457</span>&#160;</div><div class="line"><a name="l00469"></a><span class="lineno">  469</span>&#160;    <span class="keyword">const</span> Uint32* getData() <span class="keyword">const</span>;</div><div class="line"><a name="l00470"></a><span class="lineno">  470</span>&#160;</div><div class="line"><a name="l00479"></a><span class="lineno">  479</span>&#160;    <a class="code" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">Iterator</a> begin();</div><div class="line"><a name="l00480"></a><span class="lineno">  480</span>&#160;</div><div class="line"><a name="l00489"></a><span class="lineno">  489</span>&#160;    <a class="code" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">ConstIterator</a> begin() <span class="keyword">const</span>;</div><div class="line"><a name="l00490"></a><span class="lineno">  490</span>&#160;</div><div class="line"><a name="l00503"></a><span class="lineno">  503</span>&#160;    <a class="code" href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">Iterator</a> end();</div><div class="line"><a name="l00504"></a><span class="lineno">  504</span>&#160;</div><div class="line"><a name="l00517"></a><span class="lineno">  517</span>&#160;    <a class="code" href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">ConstIterator</a> end() <span class="keyword">const</span>;</div><div class="line"><a name="l00518"></a><span class="lineno">  518</span>&#160;</div><div class="line"><a name="l00519"></a><span class="lineno">  519</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00520"></a><span class="lineno">  520</span>&#160;</div><div class="line"><a name="l00521"></a><span class="lineno">  521</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00522"></a><span class="lineno">  522</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00523"></a><span class="lineno">  523</span>&#160;</div><div class="line"><a name="l00525"></a><span class="lineno">  525</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00527"></a><span class="lineno">  527</span>&#160;<span class="comment"></span>    std::basic_string&lt;Uint32&gt; m_string; </div><div class="line"><a name="l00528"></a><span class="lineno">  528</span>&#160;};</div><div class="line"><a name="l00529"></a><span class="lineno">  529</span>&#160;</div><div class="line"><a name="l00540"></a><span class="lineno">  540</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00541"></a><span class="lineno">  541</span>&#160;</div><div class="line"><a name="l00552"></a><span class="lineno">  552</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00553"></a><span class="lineno">  553</span>&#160;</div><div class="line"><a name="l00564"></a><span class="lineno">  564</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00565"></a><span class="lineno">  565</span>&#160;</div><div class="line"><a name="l00576"></a><span class="lineno">  576</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00577"></a><span class="lineno">  577</span>&#160;</div><div class="line"><a name="l00588"></a><span class="lineno">  588</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00589"></a><span class="lineno">  589</span>&#160;</div><div class="line"><a name="l00600"></a><span class="lineno">  600</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;=(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00601"></a><span class="lineno">  601</span>&#160;</div><div class="line"><a name="l00612"></a><span class="lineno">  612</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1String.php">String</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; right);</div><div class="line"><a name="l00613"></a><span class="lineno">  613</span>&#160;</div><div class="line"><a name="l00614"></a><span class="lineno">  614</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.inl&gt;</span></div><div class="line"><a name="l00615"></a><span class="lineno">  615</span>&#160;</div><div class="line"><a name="l00616"></a><span class="lineno">  616</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00617"></a><span class="lineno">  617</span>&#160;</div><div class="line"><a name="l00618"></a><span class="lineno">  618</span>&#160;</div><div class="line"><a name="l00619"></a><span class="lineno">  619</span>&#160;<span class="preprocessor">#endif // SFML_STRING_HPP</span></div><div class="line"><a name="l00620"></a><span class="lineno">  620</span>&#160;</div><div class="line"><a name="l00621"></a><span class="lineno">  621</span>&#160;</div><div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00045">String.hpp:45</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1String_php_a8e18efc2e8464f6eb82818902d527efa"><div class="ttname"><a href="classsf_1_1String.php#a8e18efc2e8464f6eb82818902d527efa">sf::String::ConstIterator</a></div><div class="ttdeci">std::basic_string&lt; Uint32 &gt;::const_iterator ConstIterator</div><div class="ttdoc">Read-only iterator type. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00053">String.hpp:53</a></div></div>
<div class="ttc" id="classsf_1_1String_php_ac90f2b7b28f703020f8d027e98806235"><div class="ttname"><a href="classsf_1_1String.php#ac90f2b7b28f703020f8d027e98806235">sf::String::Iterator</a></div><div class="ttdeci">std::basic_string&lt; Uint32 &gt;::iterator Iterator</div><div class="ttdoc">Iterator type. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00052">String.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1String_php_abaadecaf12a6b41c54d725c75fd28527"><div class="ttname"><a href="classsf_1_1String.php#abaadecaf12a6b41c54d725c75fd28527">sf::String::InvalidPos</a></div><div class="ttdeci">static const std::size_t InvalidPos</div><div class="ttdoc">Represents an invalid position in the string. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00058">String.hpp:58</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
