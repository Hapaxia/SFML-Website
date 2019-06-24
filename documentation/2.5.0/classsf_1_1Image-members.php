<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Member List'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Image.php">Image</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">sf::Image Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="classsf_1_1Image.php">sf::Image</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#ab2fa337c956f85f93377dcb52153a45a">copy</a>(const Image &amp;source, unsigned int destX, unsigned int destY, const IntRect &amp;sourceRect=IntRect(0, 0, 0, 0), bool applyAlpha=false)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#a2a67930e2fd9ad97cf004e918cf5832b">create</a>(unsigned int width, unsigned int height, const Color &amp;color=Color(0, 0, 0))</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a1c2b960ea12bdbb29e80934ce5268ebf">create</a>(unsigned int width, unsigned int height, const Uint8 *pixels)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#a22f13f8c242a6b38eb73cc176b37ae34">createMaskFromColor</a>(const Color &amp;color, Uint8 alpha=0)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a57168e7bc29190e08bbd6c9c19f4bb2c">flipHorizontally</a>()</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#a78a702a7e49d1de2dec9894da99d279c">flipVertically</a>()</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#acf278760458433b2c3626a6980388a95">getPixel</a>(unsigned int x, unsigned int y) const</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#ad9562b126fc8d5efcf608166992865c7">getPixelsPtr</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a85409951b05369813069ed64393391ce">getSize</a>() const</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#abb4caf3cb167b613345ebe36fc883f12">Image</a>()</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b">loadFromFile</a>(const std::string &amp;filename)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#aaa6c7afa5851a51cec6ab438faa7354c">loadFromMemory</a>(const void *data, std::size_t size)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a21122ded0e8368bb06ed3b9acfbfb501">loadFromStream</a>(InputStream &amp;stream)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#a51537fb667f47cbe80395cfd7f9e72a4">saveToFile</a>(const std::string &amp;filename) const</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="classsf_1_1Image.php#a9fd329b8cd7d4439e07fb5d3bb2d9744">setPixel</a>(unsigned int x, unsigned int y, const Color &amp;color)</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
  <tr><td class="entry"><a class="el" href="classsf_1_1Image.php#a0ba22a38e6c96e3b37dd88198046de83">~Image</a>()</td><td class="entry"><a class="el" href="classsf_1_1Image.php">sf::Image</a></td><td class="entry"></td></tr>
</table></div><!-- contents -->
<?php
    require("../footer.php");
?>
