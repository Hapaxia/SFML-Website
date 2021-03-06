<?php
    $version = '2.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Main Page'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li class="current"><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SFML Documentation</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><h1><a class="anchor" id="welcome"></a>
Welcome</h1>
<p>Welcome to the official SFML documentation. Here you will find a detailed view of all the SFML <a href="./annotated.php">classes</a> and functions. <br/>
 If you are looking for tutorials, you can visit the official website at <a href="http://www.sfml-dev.org/">www.sfml-dev.org</a>.</p>
<h1><a class="anchor" id="example"></a>
Short example</h1>
<p>Here is a short example, to show you how simple it is to use SFML :</p>
<div class="fragment"><div class="line"><span class="preprocessor">#include &lt;SFML/Audio.hpp&gt;</span></div>
<div class="line"><span class="preprocessor">#include &lt;SFML/Graphics.hpp&gt;</span></div>
<div class="line"></div>
<div class="line"><span class="keywordtype">int</span> main()</div>
<div class="line">{</div>
<div class="line">    <span class="comment">// Create the main window</span></div>
<div class="line">    <a class="code" href="classsf_1_1RenderWindow.php" title="Window that can serve as a target for 2D drawing.">sf::RenderWindow</a> window(<a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a>(800, 600), <span class="stringliteral">&quot;SFML window&quot;</span>);</div>
<div class="line"></div>
<div class="line">    <span class="comment">// Load a sprite to display</span></div>
<div class="line">    <a class="code" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing.">sf::Texture</a> texture;</div>
<div class="line">    <span class="keywordflow">if</span> (!texture.<a class="code" href="classsf_1_1Texture.php#a8e1b56eabfe33e2e0e1cb03712c7fcc7" title="Load the texture from a file on disk.">loadFromFile</a>(<span class="stringliteral">&quot;cute_image.jpg&quot;</span>))</div>
<div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div>
<div class="line">    <a class="code" href="classsf_1_1Sprite.php" title="Drawable representation of a texture, with its own transformations, color, etc.">sf::Sprite</a> sprite(texture);</div>
<div class="line"></div>
<div class="line">    <span class="comment">// Create a graphical text to display</span></div>
<div class="line">    <a class="code" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts.">sf::Font</a> font;</div>
<div class="line">    <span class="keywordflow">if</span> (!font.<a class="code" href="classsf_1_1Font.php#ab020052ef4e01f6c749a85571c0f3fd1" title="Load the font from a file.">loadFromFile</a>(<span class="stringliteral">&quot;arial.ttf&quot;</span>))</div>
<div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div>
<div class="line">    <a class="code" href="classsf_1_1Text.php" title="Graphical text that can be drawn to a render target.">sf::Text</a> text(<span class="stringliteral">&quot;Hello SFML&quot;</span>, font, 50);</div>
<div class="line"></div>
<div class="line">    <span class="comment">// Load a music to play</span></div>
<div class="line">    <a class="code" href="classsf_1_1Music.php" title="Streamed music played from an audio file.">sf::Music</a> music;</div>
<div class="line">    <span class="keywordflow">if</span> (!music.<a class="code" href="classsf_1_1Music.php#a3edc66e5f5b3f11e84b90eaec9c7d7c0" title="Open a music from an audio file.">openFromFile</a>(<span class="stringliteral">&quot;nice_music.ogg&quot;</span>))</div>
<div class="line">        <span class="keywordflow">return</span> EXIT_FAILURE;</div>
<div class="line"></div>
<div class="line">    <span class="comment">// Play the music</span></div>
<div class="line">    music.<a class="code" href="classsf_1_1SoundStream.php#afdc08b69cab5f243d9324940a85a1144" title="Start or resume playing the audio stream.">play</a>();</div>
<div class="line"></div>
<div class="line">    <span class="comment">// Start the game loop</span></div>
<div class="line">    <span class="keywordflow">while</span> (window.<a class="code" href="classsf_1_1Window.php#a5aa9c2b2b0e51d3423c2b66c80253337" title="Tell whether or not the window is open.">isOpen</a>())</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// Process events</span></div>
<div class="line">        <a class="code" href="classsf_1_1Event.php" title="Defines a system event and its parameters.">sf::Event</a> event;</div>
<div class="line">        <span class="keywordflow">while</span> (window.<a class="code" href="classsf_1_1Window.php#a338e996585faf82e93069858e3b531b7" title="Pop the event on top of the event queue, if any, and return it.">pollEvent</a>(event))</div>
<div class="line">        {</div>
<div class="line">            <span class="comment">// Close window : exit</span></div>
<div class="line">            <span class="keywordflow">if</span> (event.<a class="code" href="classsf_1_1Event.php#adf2f8044f713fd9d6019077b0d1ffe0a" title="Type of the event.">type</a> == <a class="code" href="classsf_1_1Event.php#af41fa9ed45c02449030699f671331d4aa316e4212e083f1dce79efd8d9e9c0a95" title="The window requested to be closed (no data)">sf::Event::Closed</a>)</div>
<div class="line">                window.<a class="code" href="classsf_1_1Window.php#a99d1e030387b0c26f5995670504fe7b5" title="Close the window and destroy all the attached resources.">close</a>();</div>
<div class="line">        }</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Clear screen</span></div>
<div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a6bb6f0ba348f2b1e2f46114aeaf60f26" title="Clear the entire target with a single color.">clear</a>();</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Draw the sprite</span></div>
<div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39" title="Draw a drawable object to the render-target.">draw</a>(sprite);</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Draw the string</span></div>
<div class="line">        window.<a class="code" href="classsf_1_1RenderTarget.php#a12417a3bcc245c41d957b29583556f39" title="Draw a drawable object to the render-target.">draw</a>(text);</div>
<div class="line"></div>
<div class="line">        <span class="comment">// Update the window</span></div>
<div class="line">        window.<a class="code" href="classsf_1_1Window.php#adabf839cb103ac96cfc82f781638772a" title="Display on screen what has been rendered to the window so far.">display</a>();</div>
<div class="line">    }</div>
<div class="line"></div>
<div class="line">    <span class="keywordflow">return</span> EXIT_SUCCESS;</div>
<div class="line">}</div>
</div><!-- fragment --> </div></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
