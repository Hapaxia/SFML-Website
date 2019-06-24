<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'TcpListener.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_2916f9fbcacdf2e5f0583aa159c707b6.php">C++</a></li><li class="navelem"><a class="el" href="dir_bab8256609b0af2067c29191512341ac.php">SFML</a></li><li class="navelem"><a class="el" href="dir_a8c958b201b07fccfdb6651296ecafd7.php">include</a></li><li class="navelem"><a class="el" href="dir_9b72d1e63b6540393a46f669861ed95a.php">SFML</a></li><li class="navelem"><a class="el" href="dir_42707e7d2d694651fd88707c2b90614a.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">TcpListener.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TCPLISTENER_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TCPLISTENER_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Network/IpAddress.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>TcpSocket;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="classsf_1_1TcpListener.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_NETWORK_API <a class="code" href="classsf_1_1TcpListener.php">TcpListener</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Socket.php">Socket</a></div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <a class="code" href="classsf_1_1TcpListener.php">TcpListener</a>();</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> getLocalPort() <span class="keyword">const</span>;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> listen(<span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> port, <span class="keyword">const</span> <a class="code" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; address = <a class="code" href="classsf_1_1IpAddress.php#a3dbc10b0dc6804cc69e29342f7406907">IpAddress::Any</a>);</div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    <span class="keywordtype">void</span> close();</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> accept(<a class="code" href="classsf_1_1TcpSocket.php">TcpSocket</a>&amp; socket);</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;};</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;<span class="preprocessor">#endif // SFML_TCPLISTENER_HPP</span></div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="ttc" id="classsf_1_1TcpListener_php"><div class="ttname"><a href="classsf_1_1TcpListener.php">sf::TcpListener</a></div><div class="ttdoc">Socket that listens to new TCP connections. </div><div class="ttdef"><b>Definition:</b> <a href="TcpListener_8hpp_source.php#l00044">TcpListener.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1TcpSocket_php"><div class="ttname"><a href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></div><div class="ttdoc">Specialized socket using the TCP protocol. </div><div class="ttdef"><b>Definition:</b> <a href="TcpSocket_8hpp_source.php#l00046">TcpSocket.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php_a51bf0fd51057b98a10fbb866246176dc"><div class="ttname"><a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Status codes that may be returned by socket functions. </div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00053">Socket.hpp:53</a></div></div>
<div class="ttc" id="classsf_1_1IpAddress_php"><div class="ttname"><a href="classsf_1_1IpAddress.php">sf::IpAddress</a></div><div class="ttdoc">Encapsulate an IPv4 network address. </div><div class="ttdef"><b>Definition:</b> <a href="IpAddress_8hpp_source.php#l00044">IpAddress.hpp:44</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php"><div class="ttname"><a href="classsf_1_1Socket.php">sf::Socket</a></div><div class="ttdoc">Base class for all the socket types. </div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00045">Socket.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1IpAddress_php_a3dbc10b0dc6804cc69e29342f7406907"><div class="ttname"><a href="classsf_1_1IpAddress.php#a3dbc10b0dc6804cc69e29342f7406907">sf::IpAddress::Any</a></div><div class="ttdeci">static const IpAddress Any</div><div class="ttdoc">Value representing any address (0.0.0.0) </div><div class="ttdef"><b>Definition:</b> <a href="IpAddress_8hpp_source.php#l00185">IpAddress.hpp:185</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
