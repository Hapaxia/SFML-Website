<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vector3.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">Vector3.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VECTOR3_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_VECTOR3_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00037"></a><span class="lineno"><a class="line" href="classsf_1_1Vector3.php">   37</a></span>&#160;<span class="keyword">class </span><a class="code" href="classsf_1_1Vector3.php">Vector3</a></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <a class="code" href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9">Vector3</a>();</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;    <a class="code" href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9">Vector3</a>(T X, T Y, T Z);</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> U&gt;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9">Vector3</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;U&gt;</a>&amp; vector);</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00076"></a><span class="lineno"><a class="line" href="classsf_1_1Vector3.php#a3cb0c769390bc37c346bb1a69e510d16">   76</a></span>&#160;<span class="comment"></span>    T <a class="code" href="classsf_1_1Vector3.php#a3cb0c769390bc37c346bb1a69e510d16">x</a>; </div><div class="line"><a name="l00077"></a><span class="lineno"><a class="line" href="classsf_1_1Vector3.php#a6590d50ccb862c5efc5512e974e9b794">   77</a></span>&#160;    T <a class="code" href="classsf_1_1Vector3.php#a6590d50ccb862c5efc5512e974e9b794">y</a>; </div><div class="line"><a name="l00078"></a><span class="lineno"><a class="line" href="classsf_1_1Vector3.php#a2f36ab4b552c028e3a9734c1ad4df7d1">   78</a></span>&#160;    T <a class="code" href="classsf_1_1Vector3.php#a2f36ab4b552c028e3a9734c1ad4df7d1">z</a>; </div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;};</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left);</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; operator +=(<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; operator -=(<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator *(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, T right);</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator *(T left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; operator *=(<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, T right);</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a> operator /(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, T right);</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; operator /=(<a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, T right);</div><div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;</div><div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;<span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;</div><div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;<span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div><div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;<span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;T&gt;</a>&amp; right);</div><div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;</div><div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.inl&gt;</span></div><div class="line"><a name="l00253"></a><span class="lineno">  253</span>&#160;</div><div class="line"><a name="l00254"></a><span class="lineno">  254</span>&#160;<span class="comment">// Define the most common types</span></div><div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;int&gt;</a>   <a class="code" href="classsf_1_1Vector3.php">Vector3i</a>;</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;<span class="keyword">typedef</span> <a class="code" href="classsf_1_1Vector3.php">Vector3&lt;float&gt;</a> <a class="code" href="classsf_1_1Vector3.php">Vector3f</a>;</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;</div><div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;</div><div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;</div><div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;<span class="preprocessor">#endif // SFML_VECTOR3_HPP</span></div><div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;</div><div class="line"><a name="l00263"></a><span class="lineno">  263</span>&#160;</div><div class="ttc" id="classsf_1_1Vector3_php_a3cb0c769390bc37c346bb1a69e510d16"><div class="ttname"><a href="classsf_1_1Vector3.php#a3cb0c769390bc37c346bb1a69e510d16">sf::Vector3::x</a></div><div class="ttdeci">T x</div><div class="ttdoc">X coordinate of the vector. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00076">Vector3.hpp:76</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php_aee8be1985c6e45e381ad4071265636f9"><div class="ttname"><a href="classsf_1_1Vector3.php#aee8be1985c6e45e381ad4071265636f9">sf::Vector3::Vector3</a></div><div class="ttdeci">Vector3()</div><div class="ttdoc">Default constructor. </div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php_a2f36ab4b552c028e3a9734c1ad4df7d1"><div class="ttname"><a href="classsf_1_1Vector3.php#a2f36ab4b552c028e3a9734c1ad4df7d1">sf::Vector3::z</a></div><div class="ttdeci">T z</div><div class="ttdoc">Z coordinate of the vector. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00078">Vector3.hpp:78</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php"><div class="ttname"><a href="classsf_1_1Vector3.php">sf::Vector3</a></div><div class="ttdoc">Utility template class for manipulating 3-dimensional vectors. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00037">Vector3.hpp:37</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php_a6590d50ccb862c5efc5512e974e9b794"><div class="ttname"><a href="classsf_1_1Vector3.php#a6590d50ccb862c5efc5512e974e9b794">sf::Vector3::y</a></div><div class="ttdeci">T y</div><div class="ttdoc">Y coordinate of the vector. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00077">Vector3.hpp:77</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
