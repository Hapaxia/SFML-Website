<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'FileInputStream.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_dd2e492ad64d241b969bca3fa8d4cd6d.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">FileInputStream.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_FILEINPUTSTREAM_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_FILEINPUTSTREAM_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Config.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/InputStream.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;cstdio&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#ifdef ANDROID</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">namespace </span>priv</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API ResourceStream;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;}</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;}</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;{</div><div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1FileInputStream.php">   55</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1FileInputStream.php">FileInputStream</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1InputStream.php">InputStream</a>, <a class="code" href="classsf_1_1NonCopyable.php">NonCopyable</a></div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;{</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1FileInputStream.php">FileInputStream</a>();</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1FileInputStream.php">FileInputStream</a>();</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    <span class="keywordtype">bool</span> open(<span class="keyword">const</span> std::string&amp; filename);</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keyword">virtual</span> Int64 read(<span class="keywordtype">void</span>* data, Int64 size);</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">virtual</span> Int64 seek(Int64 position);</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;    <span class="keyword">virtual</span> Int64 tell();</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    <span class="keyword">virtual</span> Int64 getSize();</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;<span class="comment"></span><span class="preprocessor">#ifdef ANDROID</span></div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;    priv::ResourceStream* m_file;</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;<span class="preprocessor">#else</span></div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    std::FILE* m_file; </div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;<span class="preprocessor">#endif</span></div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;};</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;<span class="preprocessor">#endif // SFML_FILEINPUTSTREAM_HPP</span></div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div><div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1FileInputStream_php"><div class="ttname"><a href="classsf_1_1FileInputStream.php">sf::FileInputStream</a></div><div class="ttdoc">Implementation of input stream based on a file. </div><div class="ttdef"><b>Definition:</b> <a href="FileInputStream_8hpp_source.php#l00055">FileInputStream.hpp:55</a></div></div>
<div class="ttc" id="classsf_1_1NonCopyable_php"><div class="ttname"><a href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="ttdoc">Utility class that makes any derived class non-copyable. </div><div class="ttdef"><b>Definition:</b> <a href="NonCopyable_8hpp_source.php#l00041">NonCopyable.hpp:41</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
