<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Font.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_83ae1a5e8455fc62607b4936b42116e9.php">sfml</a></li><li class="navelem"><a class="el" href="dir_79a044fa5ec8bbf4af7d440d8995a178.php">sfml</a></li><li class="navelem"><a class="el" href="dir_f3190241575fd2bd132a392ae6942f4a.php">include</a></li><li class="navelem"><a class="el" href="dir_692f376662c82a26cfe4cfa3aceebe24.php">SFML</a></li><li class="navelem"><a class="el" href="dir_aaa96c3797a59111c2945d0d638ce5cf.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Font.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2009 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_FONT_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor"></span><span class="preprocessor">#define SFML_FONT_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;<span class="preprocessor"></span></div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Resource.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Unicode.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Glyph.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Rect.hpp&gt;</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;map&gt;</span></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">namespace </span>sf</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">class </span>String;</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">namespace </span>priv</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">class </span>FontLoader;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;}</div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="code" href="classsf_1_1Font.php">   54</a></span>&#160;<span class="keyword">class </span>SFML_API <a class="code" href="classsf_1_1Font.php" title="Font is the low-level class for loading and manipulating character fonts.">Font</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Resource.php" title="Base class for every resource that needs to notify dependent classes about its destruction.">Resource</a>&lt;Font&gt;</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;{</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;<span class="keyword">public</span> :</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1Font.php" title="Font is the low-level class for loading and manipulating character fonts.">Font</a>();</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    <span class="keywordtype">bool</span> LoadFromFile(<span class="keyword">const</span> std::string&amp; Filename, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> CharSize = 30, <span class="keyword">const</span> <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Unicode::Text</a>&amp; Charset = ourDefaultCharset);</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keywordtype">bool</span> LoadFromMemory(<span class="keyword">const</span> <span class="keywordtype">char</span>* Data, std::size_t SizeInBytes, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> CharSize = 30, <span class="keyword">const</span> <a class="code" href="classsf_1_1Unicode_1_1Text.php" title="This class is an abstract definition of a unicode text, it can be converted from and to any kind of s...">Unicode::Text</a>&amp; Charset = ourDefaultCharset);</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> GetCharacterSize() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Glyph.php" title="Structure describing a glyph (a visual character)">Glyph</a>&amp; GetGlyph(Uint32 CodePoint) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>&amp; GetImage() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Font.php" title="Font is the low-level class for loading and manipulating character fonts.">Font</a>&amp; GetDefaultFont();</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;<span class="keyword">private</span> :</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span>priv::FontLoader;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;<span class="comment"></span>    <span class="keyword">static</span> Uint32 ourDefaultCharset[]; </div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Image.php" title="Image is the low-level class for loading and manipulating images.">Image</a>                   myTexture;  </div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>            myCharSize; </div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;    std::map&lt;Uint32, Glyph&gt; myGlyphs;   </div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;};</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;<span class="preprocessor">#endif // SFML_FONT_HPP</span></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>