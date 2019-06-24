<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Touch Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Touch.php">Touch</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Touch-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Touch Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Give access to the real-time state of the touches.  
 <a href="classsf_1_1Touch.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Touch_8hpp_source.php">Touch.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a2f85297123ea4e401d02c346e50d48a3"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Touch.php#a2f85297123ea4e401d02c346e50d48a3">isDown</a> (unsigned int finger)</td></tr>
<tr class="memdesc:a2f85297123ea4e401d02c346e50d48a3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a touch event is currently down.  <a href="#a2f85297123ea4e401d02c346e50d48a3">More...</a><br /></td></tr>
<tr class="separator:a2f85297123ea4e401d02c346e50d48a3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1b7035be709091c7475075e43e2bc23"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector2.php">Vector2i</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Touch.php#af1b7035be709091c7475075e43e2bc23">getPosition</a> (unsigned int finger)</td></tr>
<tr class="memdesc:af1b7035be709091c7475075e43e2bc23"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current position of a touch in desktop coordinates.  <a href="#af1b7035be709091c7475075e43e2bc23">More...</a><br /></td></tr>
<tr class="separator:af1b7035be709091c7475075e43e2bc23"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a372acaba3c7ac70fca4614c16ac4a1bb"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector2.php">Vector2i</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Touch.php#a372acaba3c7ac70fca4614c16ac4a1bb">getPosition</a> (unsigned int finger, const <a class="el" href="classsf_1_1Window.php">Window</a> &amp;relativeTo)</td></tr>
<tr class="memdesc:a372acaba3c7ac70fca4614c16ac4a1bb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current position of a touch in window coordinates.  <a href="#a372acaba3c7ac70fca4614c16ac4a1bb">More...</a><br /></td></tr>
<tr class="separator:a372acaba3c7ac70fca4614c16ac4a1bb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Give access to the real-time state of the touches. </p>
<p><a class="el" href="classsf_1_1Touch.php" title="Give access to the real-time state of the touches. ">sf::Touch</a> provides an interface to the state of the touches.</p>
<p>It only contains static functions, so it's not meant to be instantiated.</p>
<p>This class allows users to query the touches state at any time and directly, without having to deal with a window and its events. Compared to the TouchBegan, TouchMoved and TouchEnded events, <a class="el" href="classsf_1_1Touch.php" title="Give access to the real-time state of the touches. ">sf::Touch</a> can retrieve the state of the touches at any time (you don't need to store and update a boolean on your side in order to know if a touch is down), and you always get the real state of the touches, even if they happen when your window is out of focus and no event is triggered.</p>
<p>The getPosition function can be used to retrieve the current position of a touch. There are two versions: one that operates in global coordinates (relative to the desktop) and one that operates in window coordinates (relative to a specific window).</p>
<p>Touches are identified by an index (the "finger"), so that in multi-touch events, individual touches can be tracked correctly. As long as a finger touches the screen, it will keep the same index even if other fingers start or stop touching the screen in the meantime. As a consequence, active touch indices may not always be sequential (i.e. touch number 0 may be released while touch number 1 is still down).</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keywordflow">if</span> (<a class="code" href="classsf_1_1Touch.php#a2f85297123ea4e401d02c346e50d48a3">sf::Touch::isDown</a>(0))</div><div class="line">{</div><div class="line">    <span class="comment">// touch 0 is down</span></div><div class="line">}</div><div class="line"></div><div class="line"><span class="comment">// get global position of touch 1</span></div><div class="line"><a class="code" href="classsf_1_1Vector2.php">sf::Vector2i</a> globalPos = <a class="code" href="classsf_1_1Touch.php#af1b7035be709091c7475075e43e2bc23">sf::Touch::getPosition</a>(1);</div><div class="line"></div><div class="line"><span class="comment">// get position of touch 1 relative to a window</span></div><div class="line"><a class="code" href="classsf_1_1Vector2.php">sf::Vector2i</a> relativePos = <a class="code" href="classsf_1_1Touch.php#af1b7035be709091c7475075e43e2bc23">sf::Touch::getPosition</a>(1, window);</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Joystick.php" title="Give access to the real-time state of the joysticks. ">sf::Joystick</a>, <a class="el" href="classsf_1_1Keyboard.php" title="Give access to the real-time state of the keyboard. ">sf::Keyboard</a>, <a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">sf::Mouse</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Touch_8hpp_source.php#l00043">43</a> of file <a class="el" href="Touch_8hpp_source.php">Touch.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a id="af1b7035be709091c7475075e43e2bc23"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af1b7035be709091c7475075e43e2bc23">&#9670;&nbsp;</a></span>getPosition() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector2.php">Vector2i</a> sf::Touch::getPosition </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>finger</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current position of a touch in desktop coordinates. </p>
<p>This function returns the current touch position in global (desktop) coordinates.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">finger</td><td>Finger index</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Current position of <em>finger</em>, or undefined if it's not down </dd></dl>

</div>
</div>
<a id="a372acaba3c7ac70fca4614c16ac4a1bb"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a372acaba3c7ac70fca4614c16ac4a1bb">&#9670;&nbsp;</a></span>getPosition() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector2.php">Vector2i</a> sf::Touch::getPosition </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>finger</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Window.php">Window</a> &amp;&#160;</td>
          <td class="paramname"><em>relativeTo</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current position of a touch in window coordinates. </p>
<p>This function returns the current touch position relative to the given window.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">finger</td><td>Finger index </td></tr>
    <tr><td class="paramname">relativeTo</td><td>Reference window</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Current position of <em>finger</em>, or undefined if it's not down </dd></dl>

</div>
</div>
<a id="a2f85297123ea4e401d02c346e50d48a3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2f85297123ea4e401d02c346e50d48a3">&#9670;&nbsp;</a></span>isDown()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::Touch::isDown </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>finger</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if a touch event is currently down. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">finger</td><td>Finger index</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>finger</em> is currently touching the screen, false otherwise </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Touch_8hpp_source.php">Touch.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
