<?php include "includes/header.php"?>

 <p>Flexbox, or The Flexible Box Module, helps with making it easier to align items within a container with proper spacing. It is more or less an alternative to floating elements and helps to set up the spacing on your webpage. Flexbox is taking over for many other display characteristics to make it so that there is no issue with items potentially not working with one another when displaying them on multiple types of screens or devices.</p> 

<p>It is a value of the display property, which can have many positive uses. While you could potentially run into an issue with backwards compatibility, “ At the time of this writing, the level of support was 92–95% when using reasonable fallbacks for older browsers, so there is no reason not to use flexbox right away.”(Michalek). Granted, this article is a bit older, it still doesn’t hurt to say.</p>

<p>There are many ways to adjust elements positioning with flex. You can flex the element by the row with flex-direction: row, or by the column with flex-direction: column. You can invert those also by adding reverse at the end to align them on the opposing side. Changing between row and column changes the axis that the display is focused on.</p>

<p>The working area is known as a flex container. To set the container to flex, you must use the style of display: flex. When this is done, it makes all of the child elements into flex items. Those items can be manipulated individually, but normally the flexbox decides how they interact.</p>

<p>While flexbox was made as a one dimensional model, it does have a feature to be able to wrap the child items onto multiple lines. You just need to set flex-wrap: wrap and then you will have the items wrap onto more than one line if needed.</p>

<p>Flexbox has become a staple of web design. It makes the most sense in an ever changing web dev community and gives sites the ability to adapt when viewed on any and all screen size.
</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Works Cited</h3>
 <p>James, Oliver. “Flexbox | HTML & CSS Is Hard.” Wifi Signal with Exclamation Mark through It, 2017, <a href="www.internetingishard.com/html-and-css/flexbox/" target="_blank">www.internetingishard.com/html-and-css/flexbox/</a>.</p>
 <p>“Basic Concepts of Flexbox.” MDN Web Docs, 12 Apr. 2018, 1:44:58am, <a href="www.developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">www.developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a>.</p>
 <p>Martin Michalek. “Flexbox: Browser Support.” CSS Mine: Blog and e-Book on CSS3 and Web UI Development, <a href="www.cssmine.com/ebook/flexbox-browsers" target="_blank">www.cssmine.com/ebook/flexbox-browsers</a>.</p>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?>