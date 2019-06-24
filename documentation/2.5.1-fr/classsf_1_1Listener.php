<?php
    $version = '2.5.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Listener Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Listener.php">Listener</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Listener-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Listener Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>The audio listener is the point in the scene from where all the sounds are heard.  
 <a href="classsf_1_1Listener.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Listener_8hpp_source.php">Listener.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a803a24a1fc04620cacc9f88c6fbc0e3a"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a803a24a1fc04620cacc9f88c6fbc0e3a">setGlobalVolume</a> (float volume)</td></tr>
<tr class="memdesc:a803a24a1fc04620cacc9f88c6fbc0e3a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the global volume of all the sounds and musics.  <a href="#a803a24a1fc04620cacc9f88c6fbc0e3a">More...</a><br /></td></tr>
<tr class="separator:a803a24a1fc04620cacc9f88c6fbc0e3a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a137ea535799bdf70be6ec969673d4d33"><td class="memItemLeft" align="right" valign="top">static float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a137ea535799bdf70be6ec969673d4d33">getGlobalVolume</a> ()</td></tr>
<tr class="memdesc:a137ea535799bdf70be6ec969673d4d33"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current value of the global volume.  <a href="#a137ea535799bdf70be6ec969673d4d33">More...</a><br /></td></tr>
<tr class="separator:a137ea535799bdf70be6ec969673d4d33"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5bc2d8d18ea2d8f339d23cbf17678564"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564">setPosition</a> (float x, float y, float z)</td></tr>
<tr class="memdesc:a5bc2d8d18ea2d8f339d23cbf17678564"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the position of the listener in the scene.  <a href="#a5bc2d8d18ea2d8f339d23cbf17678564">More...</a><br /></td></tr>
<tr class="separator:a5bc2d8d18ea2d8f339d23cbf17678564"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a28a27d85cfbf8065c535c39176898fcb"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a28a27d85cfbf8065c535c39176898fcb">setPosition</a> (const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;position)</td></tr>
<tr class="memdesc:a28a27d85cfbf8065c535c39176898fcb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the position of the listener in the scene.  <a href="#a28a27d85cfbf8065c535c39176898fcb">More...</a><br /></td></tr>
<tr class="separator:a28a27d85cfbf8065c535c39176898fcb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acd7ee65bc948ca38e1c669aa12340c54"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#acd7ee65bc948ca38e1c669aa12340c54">getPosition</a> ()</td></tr>
<tr class="memdesc:acd7ee65bc948ca38e1c669aa12340c54"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current position of the listener in the scene.  <a href="#acd7ee65bc948ca38e1c669aa12340c54">More...</a><br /></td></tr>
<tr class="separator:acd7ee65bc948ca38e1c669aa12340c54"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae479dc15513c6557984d26e32d06d06e"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e">setDirection</a> (float x, float y, float z)</td></tr>
<tr class="memdesc:ae479dc15513c6557984d26e32d06d06e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the forward vector of the listener in the scene.  <a href="#ae479dc15513c6557984d26e32d06d06e">More...</a><br /></td></tr>
<tr class="separator:ae479dc15513c6557984d26e32d06d06e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1d99d9457c6ddad93449ecb4f504c2bf"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a1d99d9457c6ddad93449ecb4f504c2bf">setDirection</a> (const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;direction)</td></tr>
<tr class="memdesc:a1d99d9457c6ddad93449ecb4f504c2bf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the forward vector of the listener in the scene.  <a href="#a1d99d9457c6ddad93449ecb4f504c2bf">More...</a><br /></td></tr>
<tr class="separator:a1d99d9457c6ddad93449ecb4f504c2bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a54e91baba51d4431474f53ff7f9309f9"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a54e91baba51d4431474f53ff7f9309f9">getDirection</a> ()</td></tr>
<tr class="memdesc:a54e91baba51d4431474f53ff7f9309f9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current forward vector of the listener in the scene.  <a href="#a54e91baba51d4431474f53ff7f9309f9">More...</a><br /></td></tr>
<tr class="separator:a54e91baba51d4431474f53ff7f9309f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0ea9b3083a994b2b90253543bc4e3ad6"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a0ea9b3083a994b2b90253543bc4e3ad6">setUpVector</a> (float x, float y, float z)</td></tr>
<tr class="memdesc:a0ea9b3083a994b2b90253543bc4e3ad6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the upward vector of the listener in the scene.  <a href="#a0ea9b3083a994b2b90253543bc4e3ad6">More...</a><br /></td></tr>
<tr class="separator:a0ea9b3083a994b2b90253543bc4e3ad6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a281e8cd44d3411d891b5e83b0cb6b9d4"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#a281e8cd44d3411d891b5e83b0cb6b9d4">setUpVector</a> (const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;upVector)</td></tr>
<tr class="memdesc:a281e8cd44d3411d891b5e83b0cb6b9d4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the upward vector of the listener in the scene.  <a href="#a281e8cd44d3411d891b5e83b0cb6b9d4">More...</a><br /></td></tr>
<tr class="separator:a281e8cd44d3411d891b5e83b0cb6b9d4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae1427dd7e9b425b0c23b7b766bd6c6e6"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Listener.php#ae1427dd7e9b425b0c23b7b766bd6c6e6">getUpVector</a> ()</td></tr>
<tr class="memdesc:ae1427dd7e9b425b0c23b7b766bd6c6e6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current upward vector of the listener in the scene.  <a href="#ae1427dd7e9b425b0c23b7b766bd6c6e6">More...</a><br /></td></tr>
<tr class="separator:ae1427dd7e9b425b0c23b7b766bd6c6e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>The audio listener is the point in the scene from where all the sounds are heard. </p>
<p>The audio listener defines the global properties of the audio environment, it defines where and how sounds and musics are heard.</p>
<p>If <a class="el" href="classsf_1_1View.php" title="2D camera that defines what region is shown on screen ">sf::View</a> is the eyes of the user, then <a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">sf::Listener</a> is his ears (by the way, they are often linked together &ndash; same position, orientation, etc.).</p>
<p><a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">sf::Listener</a> is a simple interface, which allows to setup the listener in the 3D audio environment (position, direction and up vector), and to adjust the global volume.</p>
<p>Because the listener is unique in the scene, <a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">sf::Listener</a> only contains static functions and doesn't have to be instantiated.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Move the listener to the position (1, 0, -5)</span></div><div class="line"><a class="code" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564">sf::Listener::setPosition</a>(1, 0, -5);</div><div class="line"></div><div class="line"><span class="comment">// Make it face the right axis (1, 0, 0)</span></div><div class="line"><a class="code" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e">sf::Listener::setDirection</a>(1, 0, 0);</div><div class="line"></div><div class="line"><span class="comment">// Reduce the global volume</span></div><div class="line"><a class="code" href="classsf_1_1Listener.php#a803a24a1fc04620cacc9f88c6fbc0e3a">sf::Listener::setGlobalVolume</a>(50);</div></div><!-- fragment --> 
<p class="definition">Definition at line <a class="el" href="Listener_8hpp_source.php#l00042">42</a> of file <a class="el" href="Listener_8hpp_source.php">Listener.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a id="a54e91baba51d4431474f53ff7f9309f9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a54e91baba51d4431474f53ff7f9309f9">&#9670;&nbsp;</a></span>getDirection()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> sf::Listener::getDirection </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current forward vector of the listener in the scene. </p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">Listener</a>'s forward vector (not normalized)</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e" title="Set the forward vector of the listener in the scene. ">setDirection</a> </dd></dl>

</div>
</div>
<a id="a137ea535799bdf70be6ec969673d4d33"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a137ea535799bdf70be6ec969673d4d33">&#9670;&nbsp;</a></span>getGlobalVolume()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static float sf::Listener::getGlobalVolume </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current value of the global volume. </p>
<dl class="section return"><dt>Returns</dt><dd>Current global volume, in the range [0, 100]</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a803a24a1fc04620cacc9f88c6fbc0e3a" title="Change the global volume of all the sounds and musics. ">setGlobalVolume</a> </dd></dl>

</div>
</div>
<a id="acd7ee65bc948ca38e1c669aa12340c54"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acd7ee65bc948ca38e1c669aa12340c54">&#9670;&nbsp;</a></span>getPosition()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> sf::Listener::getPosition </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current position of the listener in the scene. </p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">Listener</a>'s position</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564" title="Set the position of the listener in the scene. ">setPosition</a> </dd></dl>

</div>
</div>
<a id="ae1427dd7e9b425b0c23b7b766bd6c6e6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae1427dd7e9b425b0c23b7b766bd6c6e6">&#9670;&nbsp;</a></span>getUpVector()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> sf::Listener::getUpVector </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the current upward vector of the listener in the scene. </p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">Listener</a>'s upward vector (not normalized)</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a0ea9b3083a994b2b90253543bc4e3ad6" title="Set the upward vector of the listener in the scene. ">setUpVector</a> </dd></dl>

</div>
</div>
<a id="ae479dc15513c6557984d26e32d06d06e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae479dc15513c6557984d26e32d06d06e">&#9670;&nbsp;</a></span>setDirection() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setDirection </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>z</em>&#160;</td>
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

<p>Set the forward vector of the listener in the scene. </p>
<p>The direction (also called "at vector") is the vector pointing forward from the listener's perspective. Together with the up vector, it defines the 3D orientation of the listener in the scene. The direction vector doesn't have to be normalized. The default listener's direction is (0, 0, -1).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of the listener's direction </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of the listener's direction </td></tr>
    <tr><td class="paramname">z</td><td>Z coordinate of the listener's direction</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a54e91baba51d4431474f53ff7f9309f9" title="Get the current forward vector of the listener in the scene. ">getDirection</a>, <a class="el" href="classsf_1_1Listener.php#a0ea9b3083a994b2b90253543bc4e3ad6" title="Set the upward vector of the listener in the scene. ">setUpVector</a>, <a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564" title="Set the position of the listener in the scene. ">setPosition</a> </dd></dl>

</div>
</div>
<a id="a1d99d9457c6ddad93449ecb4f504c2bf"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1d99d9457c6ddad93449ecb4f504c2bf">&#9670;&nbsp;</a></span>setDirection() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setDirection </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;&#160;</td>
          <td class="paramname"><em>direction</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the forward vector of the listener in the scene. </p>
<p>The direction (also called "at vector") is the vector pointing forward from the listener's perspective. Together with the up vector, it defines the 3D orientation of the listener in the scene. The direction vector doesn't have to be normalized. The default listener's direction is (0, 0, -1).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">direction</td><td>New listener's direction</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a54e91baba51d4431474f53ff7f9309f9" title="Get the current forward vector of the listener in the scene. ">getDirection</a>, <a class="el" href="classsf_1_1Listener.php#a0ea9b3083a994b2b90253543bc4e3ad6" title="Set the upward vector of the listener in the scene. ">setUpVector</a>, <a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564" title="Set the position of the listener in the scene. ">setPosition</a> </dd></dl>

</div>
</div>
<a id="a803a24a1fc04620cacc9f88c6fbc0e3a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a803a24a1fc04620cacc9f88c6fbc0e3a">&#9670;&nbsp;</a></span>setGlobalVolume()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setGlobalVolume </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>volume</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Change the global volume of all the sounds and musics. </p>
<p>The volume is a number between 0 and 100; it is combined with the individual volume of each sound / music. The default value for the volume is 100 (maximum).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">volume</td><td>New global volume, in the range [0, 100]</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#a137ea535799bdf70be6ec969673d4d33" title="Get the current value of the global volume. ">getGlobalVolume</a> </dd></dl>

</div>
</div>
<a id="a5bc2d8d18ea2d8f339d23cbf17678564"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5bc2d8d18ea2d8f339d23cbf17678564">&#9670;&nbsp;</a></span>setPosition() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setPosition </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>z</em>&#160;</td>
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

<p>Set the position of the listener in the scene. </p>
<p>The default listener's position is (0, 0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of the listener's position </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of the listener's position </td></tr>
    <tr><td class="paramname">z</td><td>Z coordinate of the listener's position</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#acd7ee65bc948ca38e1c669aa12340c54" title="Get the current position of the listener in the scene. ">getPosition</a>, <a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e" title="Set the forward vector of the listener in the scene. ">setDirection</a> </dd></dl>

</div>
</div>
<a id="a28a27d85cfbf8065c535c39176898fcb"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a28a27d85cfbf8065c535c39176898fcb">&#9670;&nbsp;</a></span>setPosition() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setPosition </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;&#160;</td>
          <td class="paramname"><em>position</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the position of the listener in the scene. </p>
<p>The default listener's position is (0, 0, 0).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">position</td><td>New listener's position</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#acd7ee65bc948ca38e1c669aa12340c54" title="Get the current position of the listener in the scene. ">getPosition</a>, <a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e" title="Set the forward vector of the listener in the scene. ">setDirection</a> </dd></dl>

</div>
</div>
<a id="a0ea9b3083a994b2b90253543bc4e3ad6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0ea9b3083a994b2b90253543bc4e3ad6">&#9670;&nbsp;</a></span>setUpVector() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setUpVector </td>
          <td>(</td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>z</em>&#160;</td>
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

<p>Set the upward vector of the listener in the scene. </p>
<p>The up vector is the vector that points upward from the listener's perspective. Together with the direction, it defines the 3D orientation of the listener in the scene. The up vector doesn't have to be normalized. The default listener's up vector is (0, 1, 0). It is usually not necessary to change it, especially in 2D scenarios.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of the listener's up vector </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of the listener's up vector </td></tr>
    <tr><td class="paramname">z</td><td>Z coordinate of the listener's up vector</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#ae1427dd7e9b425b0c23b7b766bd6c6e6" title="Get the current upward vector of the listener in the scene. ">getUpVector</a>, <a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e" title="Set the forward vector of the listener in the scene. ">setDirection</a>, <a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564" title="Set the position of the listener in the scene. ">setPosition</a> </dd></dl>

</div>
</div>
<a id="a281e8cd44d3411d891b5e83b0cb6b9d4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a281e8cd44d3411d891b5e83b0cb6b9d4">&#9670;&nbsp;</a></span>setUpVector() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::Listener::setUpVector </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector3.php">Vector3f</a> &amp;&#160;</td>
          <td class="paramname"><em>upVector</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the upward vector of the listener in the scene. </p>
<p>The up vector is the vector that points upward from the listener's perspective. Together with the direction, it defines the 3D orientation of the listener in the scene. The up vector doesn't have to be normalized. The default listener's up vector is (0, 1, 0). It is usually not necessary to change it, especially in 2D scenarios.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">upVector</td><td>New listener's up vector</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Listener.php#ae1427dd7e9b425b0c23b7b766bd6c6e6" title="Get the current upward vector of the listener in the scene. ">getUpVector</a>, <a class="el" href="classsf_1_1Listener.php#ae479dc15513c6557984d26e32d06d06e" title="Set the forward vector of the listener in the scene. ">setDirection</a>, <a class="el" href="classsf_1_1Listener.php#a5bc2d8d18ea2d8f339d23cbf17678564" title="Set the position of the listener in the scene. ">setPosition</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Listener_8hpp_source.php">Listener.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
