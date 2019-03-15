<?php include "includes/header.php";?>
<!--FacebookCommentBox JavaScript-->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1203935709782579&autoLogAppEvents=1"></script>
<!--FacebookCommentBox JavaScript-->
    <div class="page-hero-section-blog-post blog-hero">
      <div class="blog-post-date"><strong>JUNE 15, 2017</strong></div>
      <h1 class="blog-post-header">Blog Post Name</h1>
      <div class="hero-dark-overlay"></div>
    </div>
    <div class="section">
      <div class="wrapper w-container">
        <div class="post-content-blog-post">
          <div class="post-rich-text w-richtext">
            <h2>What’s a Rich Text element?</h2>
            <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
            <figure style="max-width:600px" id="w-node-d267deb84be8-025644ac" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
              <div><img src="../images/cat_events.jpg" alt=""></div>
            </figure>
            <h4>Static and dynamic content editing</h4>
            <p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>
            <h4>How to customize formatting for each rich text</h4>
            <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the &quot;When inside of&quot; nested selector system.</p>
          </div>
          <div class="post-rich-text w-richtext">
            <h2>What’s a Rich Text element?</h2>
            <p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
            <h4>Static and dynamic content editing</h4>
            <p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>
            <h4>How to customize formatting for each rich text</h4>
            <p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the &quot;When inside of&quot; nested selector system.</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div id="d-cards" class="content-container-white">
        <div id="d-cards" class="content-container-blog-post">
          <div class="blog-content">
            <div class="w-embed">
              <!--  Blog Body  -->
              <hr>
            </div>
            <!--Comment Area-->
              <?php include "comment.php"; ?>
            <!--comment area-->
            
          </div>
          <div class="blog-colums-comments w-row">
            <div class="w-col w-col-9"></div>
            <div class="w-col w-col-3"></div>
          </div>
          <div class="blog-colums-heading w-row">
            <div class="w-col w-col-1 w-col-stack"></div>
            <div class="w-col w-col-11 w-col-stack">
              <div class="searchcolumn">
                <div class="search-div">
                  <h4 class="comment-h4-2"><em>Posts Search:</em></h4>
                  <form action="/search" class="w-clearfix w-form"><input type="search" class="search-input-tag w-input" maxlength="256" name="query" placeholder="Search…" id="search-2" required=""><input type="submit" value="Search" class="search-submit-btn w-button"></form>
                </div>
              </div>
            </div>
          </div>
          <div class="container"></div>
<!--          <a href="#" class="w-inline-block w-lightbox"><img src="../images/favicon_1favicon.png" alt=""><script type="application/json" class="w-json">{-->
<!--  "items": [-->
<!--    {-->
<!--      "type": "image",-->
<!--      "_id": "5bb3b53f0a88c4cb6a60f727",-->
<!--      "fileName": "5bbf8d4cb996d427923dd86d_favicon.png",-->
<!--      "origFileName": "favicon.png",-->
<!--      "width": 32,-->
<!--      "height": 32,-->
<!--      "fileSize": 2428,-->
<!--      "url": "https://uploads-ssl.webflow.com/5bbf8d4cb996d437623dd82c/5bbf8d4cb996d427923dd86d_favicon.png"-->
<!--    }-->
<!--  ]-->
<!--}</script></a></div>-->
<!--        <div class="container"></div><a href="#" class="w-inline-block w-lightbox"><img src="../images/favicon_1favicon.png" alt=""><script type="application/json" class="w-json">{-->
<!--  "items": [-->
<!--    {-->
<!--      "type": "image",-->
<!--      "_id": "5bb3b53f0a88c4cb6a60f727",-->
<!--      "fileName": "5bbf8d4cb996d427923dd86d_favicon.png",-->
<!--      "origFileName": "favicon.png",-->
<!--      "width": 32,-->
<!--      "height": 32,-->
<!--      "fileSize": 2428,-->
<!--      "url": "https://uploads-ssl.webflow.com/5bbf8d4cb996d437623dd82c/5bbf8d4cb996d427923dd86d_favicon.png"-->
<!--    }-->
<!--  ]-->
<!--}</script></a>-->
</div>
    </div>
    <div class="section subscribe-section"><a href="/blog/" class="button big color-1 w-button">View All Posts</a>
      <div data-ix="fade-up-1" class="wrapper w-container"><img src="../images/Sep.svg" alt="">
        <div class="align-center"><a href="#" class="logo-footer w-inline-block"><img src="../images/AH-Photography_Submark-1.png" width="250" srcset="images/AH-Photography_Submark-1-p-500.png 500w, images/AH-Photography_Submark-1.png 600w" sizes="(max-width: 479px) 93vw, 250px" alt=""><div class="text-block-3 darker">photographer</div></a></div>
        <h5 class="subscribe-header">Subscribe to my newsletter to receive updates about new projects and blog posts</h5>
        <div class="subscribe w-form">
          <form id="wf-form-Subscribe-2" name="wf-form-Subscribe" data-name="Subscribe" class="subscribe-form"><input type="email" id="Email-3" name="Email-3" data-name="Email 3" placeholder="Enter your email address" maxlength="256" required="" class="input subscribe-input w-input"><input type="submit" value="Subscribe" data-wait="Please wait..." class="button-2 search-submit-btn w-button"></form>
          <div class="form-success w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="form-error w-form-fail">
            <div>Oops! Something went wrong while submitting the form</div>
          </div>
        </div>
      </div>
      <div class="top-margin">
        <div class="footer">
          <div class="footer-social-menu">
            <a href="https://twitter.com" target="_blank" data-ix="underline" class="footer-social-link w-inline-block">
              <div class="underline footer-social-underline"></div>
            </a>
            <a href="https://www.facebook.com/amarys.hernandez.photography/?ref=bookmarks" target="_blank" data-ix="underline" class="footer-social-link w-inline-block">
              <div>Facebook</div>
              <div class="underline footer-social-underline"></div>
            </a>
            <div class="dot-separator footer-dot-separator">
              <div>•</div>
            </div>
            <a href="https://www.instagram.com/amarys.hernandez/" target="_blank" data-ix="underline" class="footer-social-link w-inline-block">
              <div>Instagram</div>
              <div class="underline footer-social-underline"></div>
            </a>
            <a href="https://500px.com" target="_blank" data-ix="underline" class="footer-social-link w-inline-block">
              <div class="underline footer-social-underline"></div>
            </a>
          </div>
          <div class="copiright">
            <a data-ix="underline" href="https://github.com/CharlesDerek" target="_blank" class="footer-link w-inline-block">
              <div class="copyright-text">Created by </div>
              <div class="developer_id">Charles Derek</div>
              <div class="underline footer-underline"></div>
            </a>
            <div class="footer-line-separator">|</div>
            <a href="licencing.php" data-ix="underline" class="footer-link w-inline-block">
              <div class="underline footer-underline"></div>
            </a><img src="../images/MRGIANIMATED.gif" width="150" alt="" class="mrgilogo">
            <div class="footer-line-separator">|</div>
            <a href="https://www.mrginnovations.com" data-ix="underline" target="_blank" class="footer-link w-inline-block">
              <div>Powered By: MRGInnovations Software &amp; Technology</div>
              <div class="underline footer-underline"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="instagram-session"><a href="https://www.instagram.com/amarys.hernandez/" target="_blank" data-ix="instagram" class="instagram-card w-inline-block"><img src="../images/Instagram-Logo.png" width="48" alt="" class="instagram-icon"><div class="instagram-text">Follow Me on<br><strong>Instagram</strong></div></a>
      <div class="instagram-photo-block">
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-09"></div>
          <div class="instagram-photo photo-10"></div>
          <div class="instagram-photo photo-11"></div>
          <div class="instagram-photo photo-12"></div>
          <div class="instagram-photo photo-13"></div>
          <div class="instagram-photo photo-14"></div>
          <div class="instagram-photo photo-15"></div>
          <div class="instagram-photo photo-16"></div>
        </div>
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-01"></div>
          <div class="instagram-photo photo-02"></div>
          <div class="instagram-photo photo-03"></div>
          <div class="instagram-photo photo-04"></div>
          <div class="instagram-photo photo-05"></div>
          <div class="instagram-photo photo-06"></div>
          <div class="instagram-photo photo-07"></div>
          <div class="instagram-photo photo-08"></div>
        </div>
      </div>
      <div class="instagram-photo-block">
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-01"></div>
          <div class="instagram-photo photo-02"></div>
          <div class="instagram-photo photo-03"></div>
          <div class="instagram-photo photo-04"></div>
          <div class="instagram-photo photo-05"></div>
          <div class="instagram-photo photo-06"></div>
          <div class="instagram-photo photo-07"></div>
          <div class="instagram-photo photo-08"></div>
        </div>
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-09"></div>
          <div class="instagram-photo photo-10"></div>
          <div class="instagram-photo photo-11"></div>
          <div class="instagram-photo photo-12"></div>
          <div class="instagram-photo photo-13"></div>
          <div class="instagram-photo photo-14"></div>
          <div class="instagram-photo photo-15"></div>
          <div class="instagram-photo photo-16"></div>
        </div>
      </div>
      <div class="instagram-photo-block">
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-09"></div>
          <div class="instagram-photo photo-10"></div>
          <div class="instagram-photo photo-11"></div>
          <div class="instagram-photo photo-12"></div>
          <div class="instagram-photo photo-13"></div>
          <div class="instagram-photo photo-14"></div>
          <div class="instagram-photo photo-15"></div>
          <div class="instagram-photo photo-16"></div>
        </div>
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-01"></div>
          <div class="instagram-photo photo-02"></div>
          <div class="instagram-photo photo-03"></div>
          <div class="instagram-photo photo-04"></div>
          <div class="instagram-photo photo-05"></div>
          <div class="instagram-photo photo-06"></div>
          <div class="instagram-photo photo-07"></div>
          <div class="instagram-photo photo-08"></div>
        </div>
      </div>
      <div class="instagram-photo-block">
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-01"></div>
          <div class="instagram-photo photo-02"></div>
          <div class="instagram-photo photo-03"></div>
          <div class="instagram-photo photo-04"></div>
          <div class="instagram-photo photo-05"></div>
          <div class="instagram-photo photo-06"></div>
          <div class="instagram-photo photo-07"></div>
          <div class="instagram-photo photo-08"></div>
        </div>
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-09"></div>
          <div class="instagram-photo photo-10"></div>
          <div class="instagram-photo photo-11"></div>
          <div class="instagram-photo photo-12"></div>
          <div class="instagram-photo photo-13"></div>
          <div class="instagram-photo photo-14"></div>
          <div class="instagram-photo photo-15"></div>
          <div class="instagram-photo photo-16"></div>
        </div>
      </div>
      <div class="instagram-photo-block">
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-09"></div>
          <div class="instagram-photo photo-10"></div>
          <div class="instagram-photo photo-11"></div>
          <div class="instagram-photo photo-12"></div>
          <div class="instagram-photo photo-13"></div>
          <div class="instagram-photo photo-14"></div>
          <div class="instagram-photo photo-15"></div>
          <div class="instagram-photo photo-16"></div>
        </div>
        <div class="instagram-photo-line">
          <div class="instagram-photo photo-01"></div>
          <div class="instagram-photo photo-02"></div>
          <div class="instagram-photo photo-03"></div>
          <div class="instagram-photo photo-04"></div>
          <div class="instagram-photo photo-05"></div>
          <div class="instagram-photo photo-06"></div>
          <div class="instagram-photo photo-07"></div>
          <div class="instagram-photo photo-08"></div>
        </div>
      </div>
    </div>
    <div class="call-to-action">
      <a href="contact.php" data-ix="call-to-action" class="action-button w-inline-block">
        <div class="action-text">
          <div class="action-small-title">Contact Me</div>
          <h5>Let’s Work Together</h5>
        </div><img src="../images/Arrow-Circle-Left-Icon.svg" alt="" class="action-arrow-icon"></a>
      <a href="about.php" data-ix="call-to-action" class="action-button second-action w-inline-block">
        <div class="action-text">
          <div class="action-small-title">How Am I?</div>
          <h5>Learn More About Me</h5>
        </div><img src="../images/Arrow-Circle-Right-Icon.svg" alt="" class="action-arrow-icon"></a>
    </div>
  </div>
  
  
<?php include "includes/footer.php";?>