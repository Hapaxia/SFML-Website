<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::AlResource Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1AlResource.php">AlResource</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1AlResource-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::AlResource Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Base class for classes that require an OpenAL context.  
 <a href="classsf_1_1AlResource.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="AlResource_8hpp_source.php">AlResource.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::AlResource:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1AlResource.png" usemap="#sf::AlResource_map" alt=""/>
  <map id="sf::AlResource_map" name="sf::AlResource_map">
<area href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. " alt="sf::SoundBuffer" shape="rect" coords="0,56,152,80"/>
<area href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. " alt="sf::SoundRecorder" shape="rect" coords="162,56,314,80"/>
<area href="classsf_1_1SoundSource.php" title="Base class defining a sound&#39;s properties. " alt="sf::SoundSource" shape="rect" coords="405,56,557,80"/>
<area href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. " alt="sf::SoundBufferRecorder" shape="rect" coords="162,112,314,136"/>
<area href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. " alt="sf::Sound" shape="rect" coords="324,112,476,136"/>
<area href="classsf_1_1SoundStream.php" title="Abstract base class for streamed audio sources. " alt="sf::SoundStream" shape="rect" coords="486,112,638,136"/>
<area href="classsf_1_1Music.php" title="Streamed music played from an audio file. " alt="sf::Music" shape="rect" coords="486,168,638,192"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a51b4f3a825c5d68386f8683e3e1053d7"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1AlResource.php#a51b4f3a825c5d68386f8683e3e1053d7">AlResource</a> ()</td></tr>
<tr class="memdesc:a51b4f3a825c5d68386f8683e3e1053d7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a51b4f3a825c5d68386f8683e3e1053d7">More...</a><br /></td></tr>
<tr class="separator:a51b4f3a825c5d68386f8683e3e1053d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a74ad78198cddcb6e5d847177364049db"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1AlResource.php#a74ad78198cddcb6e5d847177364049db">~AlResource</a> ()</td></tr>
<tr class="memdesc:a74ad78198cddcb6e5d847177364049db"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a74ad78198cddcb6e5d847177364049db">More...</a><br /></td></tr>
<tr class="separator:a74ad78198cddcb6e5d847177364049db"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Base class for classes that require an OpenAL context. </p>
<p>This class is for internal use only, it must be the base of every class that requires a valid OpenAL context in order to work.</p>

<p class="definition">Definition at line <a class="el" href="AlResource_8hpp_source.php#l00040">40</a> of file <a class="el" href="AlResource_8hpp_source.php">AlResource.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a51b4f3a825c5d68386f8683e3e1053d7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a51b4f3a825c5d68386f8683e3e1053d7">&#9670;&nbsp;</a></span>AlResource()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::AlResource::AlResource </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a id="a74ad78198cddcb6e5d847177364049db"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a74ad78198cddcb6e5d847177364049db">&#9670;&nbsp;</a></span>~AlResource()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::AlResource::~AlResource </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="AlResource_8hpp_source.php">AlResource.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
