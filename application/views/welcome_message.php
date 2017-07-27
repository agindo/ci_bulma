<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>Style</title>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
        /* Sticky footer styles
        -------------------------------------------------- */
        html {
          position: relative;
          min-height: 100%;
        }
        body {
          /* Margin bottom by footer height */
          margin-bottom: 60px;
        }
        .footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          /* Set the fixed height of the footer here */
          height: 185px;
          line-height: 60px; /* Vertically center the text there */
          background-color: #f5f5f5;
        }


        /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        body > .container {
          padding: 60px 15px 0;
        }

        .footer > .container {
          padding-right: 15px;
          padding-left: 15px;
        }

        code {
          font-size: 80%;
        }
      </style>
 	</head>
  <body>
  		
<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <div class="navbar-item">
      <!-- <a class="navbar-item" href="http://bulma.io"> -->
        <!-- <img src="<?php echo base_url();?>assets/img/1.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> -->
        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      <!-- </a> -->
      </div>

      <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fa fa-github"></i>
        </span>
      </a>

      <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fa fa-twitter"></i>
        </span>
      </a>

      <div class="navbar-burger burger" data-target="navMenuExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navMenuExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item " href="http://bulma.io/">
          Home
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link  is-active" href="/documentation/overview/start/">
            Docs
          </a>
          <div class="navbar-dropdown ">
            <a class="navbar-item " href="/documentation/overview/start/">
              Overview
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
              Modifiers
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/grid/columns/">
              Grid
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/form/general/">
              Form
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
              Elements
            </a>
            
              <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
                Components
              </a>
            
            <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
              Layout
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              <div>
                <p class="has-text-info is-size-6-desktop"><strong>0.4.4</strong></p>
                
                  <small>
                    <a class="view-all-versions" href="/versions">View all versions</a>
                  </small>
                
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link " href="http://bulma.io/blog/">
            Blog
          </a>
          <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
            
              <a class="navbar-item" href="/2017/07/24/access-previous-bulma-versions/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">24 Jul 2017</small>
                  </p>
                  <p>Access previous Bulma versions</p>
                </div>
              </a>
            
              <a class="navbar-item" href="/2017/03/10/new-field-element/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">10 Mar 2017</small>
                  </p>
                  <p>New field element (for better controls)</p>
                </div>
              </a>
            
              <a class="navbar-item" href="/2016/04/11/metro-ui-css-grid-with-bulma-tiles/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">11 Apr 2016</small>
                  </p>
                  <p>Metro UI CSS grid with Bulma tiles</p>
                </div>
              </a>
            
            <a class="navbar-item" href="http://bulma.io/blog/">
              More posts
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              <div class="navbar-content">
                <div class="level is-mobile">
                  <div class="level-left">
                    <div class="level-item">
                      <strong>Stay up to date!</strong>
                    </div>
                  </div>
                  <div class="level-right">
                    <div class="level-item">
                      <a class="button is-rss is-small" href="http://bulma.io/atom.xml">
                        <span class="icon is-small">
                          <i class="fa fa-rss"></i>
                        </span>
                        <span>Subscribe</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <div class="navbar-link">
            More
          </div>
          <div id="moreDropdown" class="navbar-dropdown ">
            <a class="navbar-item " href="http://bulma.io/extensions/">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <p>
                      <strong>Extensions</strong>
                      <br>
                      <small>Side projects to enhance Bulma</small>
                    </p>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <span class="icon has-text-info">
                      <i class="fa fa-plug"></i>
                    </span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="navbar-end">
        <a class="navbar-item" href="https://github.com/jgthms/bulma" target="_blank">
          Github
        </a>
        <a class="navbar-item" href="https://twitter.com/jgthms" target="_blank">
          Twitter
        </a>
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a id="twitter"
                class="button"
                data-social-network="Twitter"
                data-social-action="tweet"
                data-social-target="http://bulma.io"
                target="_blank"
                href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&url=http://bulma.io&via=jgthms">
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                <span>Tweet</span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.4.4.zip">
                <span class="icon">
                  <i class="fa fa-download"></i>
                </span>
                <span>Download</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
      </p>
      <p>
        <a class="icon" href="https://github.com/jgthms/bulma">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
<!--     <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer> -->
  	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  </body>
</html>