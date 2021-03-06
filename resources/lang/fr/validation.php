


<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>Laravel-lang/validation.php at master · caouecs/Laravel-lang · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="caouecs/Laravel-lang" name="twitter:title" /><meta content="Laravel-lang - List of 45 languages for Laravel4/5" name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/447849?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/447849?v=3&amp;s=400" property="og:image" /><meta content="caouecs/Laravel-lang" property="og:title" /><meta content="https://github.com/caouecs/Laravel-lang" property="og:url" /><meta content="Laravel-lang - List of 45 languages for Laravel4/5" property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="500E7637:7BA2:43F0843:556CCA38" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />
    <meta class="js-ga-set" name="dimension1" content="Logged Out">
    <meta class="js-ga-set" name="dimension2" content="Header v3">
    <meta name="is-dotcom" content="true">
      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="ncRT2z4IjENynFMwhrWDXLM59wZ7cTAq6zi9veOqtavcE/05qCe/jNLFVbNf+tcFb0fzye1LsYWuStc80YnFpg==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github/index-8f4fbfa46cb8c5703128f380ff7e4386ef611edec820563ada972d56b8e3872a.css" media="all" rel="stylesheet" />
    <link href="https://assets-cdn.github.com/assets/github2/index-fb622d4d3ac483c940ec610cd50af9f92c23b836dd9501db3259bbcc7ac0eada.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="ba5a9a62769e90230bede2ef2a94ac5d">

      
  <meta name="description" content="Laravel-lang - List of 45 languages for Laravel4/5">
  <meta name="go-import" content="github.com/caouecs/Laravel-lang git https://github.com/caouecs/Laravel-lang.git">

  <meta content="447849" name="octolytics-dimension-user_id" /><meta content="caouecs" name="octolytics-dimension-user_login" /><meta content="10371103" name="octolytics-dimension-repository_id" /><meta content="caouecs/Laravel-lang" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="10371103" name="octolytics-dimension-repository_network_root_id" /><meta content="caouecs/Laravel-lang" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/caouecs/Laravel-lang/commits/master.atom" rel="alternate" title="Recent Commits to Laravel-lang:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      


        
        <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2Fcaouecs%2FLaravel-lang%2Fblob%2Fmaster%2Ffr%2Fvalidation.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/caouecs/Laravel-lang/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/caouecs/Laravel-lang/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Fcaouecs%2FLaravel-lang"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/caouecs/Laravel-lang/watchers">
    49
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fcaouecs%2FLaravel-lang"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/caouecs/Laravel-lang/stargazers">
      689
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fcaouecs%2FLaravel-lang"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/caouecs/Laravel-lang/network" class="social-count">
        302
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/caouecs" class="url fn" itemprop="url" rel="author"><span itemprop="title">caouecs</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/caouecs/Laravel-lang" data-pjax="#js-repo-pjax-container">Laravel-lang</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/caouecs/Laravel-lang/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/caouecs/Laravel-lang" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /caouecs/Laravel-lang">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/caouecs/Laravel-lang/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /caouecs/Laravel-lang/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/caouecs/Laravel-lang/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /caouecs/Laravel-lang/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/caouecs/Laravel-lang/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /caouecs/Laravel-lang/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/caouecs/Laravel-lang/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /caouecs/Laravel-lang/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                  
<div class="js-clone-url clone-url open"
  data-protocol-type="http">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/caouecs/Laravel-lang.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="subversion">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/caouecs/Laravel-lang" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<div class="clone-options">You can clone with
  <form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="AF3Ecfdzjc3YfnmHyURVgcOyBP+A2zwkFtph4ACuyLg1bAlvmpPN334Hc6zkaMe2eIN/wNOhjyZDM0dqRaDftA==" /></div><button class="btn-link js-clone-selector" data-protocol="http" type="submit">HTTPS</button></form> or <form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="qwxzuejNAjAm5eUxflBaXuEcaRe3pEODS6o+riFudxaGmmBXzFJnEZHz0HQIIvmBtNQisBaQwtop35ZaZfLz8Q==" /></div><button class="btn-link js-clone-selector" data-protocol="subversion" type="submit">Subversion</button></form>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</div>


  <a href="https://windows.github.com" class="btn btn-sm sidebar-button" title="Save caouecs/Laravel-lang to your computer and use it in GitHub Desktop." aria-label="Save caouecs/Laravel-lang to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>


                <a href="/caouecs/Laravel-lang/archive/master.zip"
                   class="btn btn-sm sidebar-button"
                   aria-label="Download the contents of caouecs/Laravel-lang as a zip file"
                   title="Download the contents of caouecs/Laravel-lang as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>

          

<a href="/caouecs/Laravel-lang/blob/7ae8b86bbbaf1ffe5458fe985bcf376a4ec255fd/fr/validation.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:3389b258848a46a231362a6ca60fbf42 -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/gh-pages/fr/validation.php"
               data-name="gh-pages"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="gh-pages">
                gh-pages
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/caouecs/Laravel-lang/blob/laravel4/fr/validation.php"
               data-name="laravel4"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="laravel4">
                laravel4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/caouecs/Laravel-lang/blob/master/fr/validation.php"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.7/fr/validation.php"
                 data-name="2.0.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.7">2.0.7</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.6/fr/validation.php"
                 data-name="2.0.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.6">2.0.6</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.5/fr/validation.php"
                 data-name="2.0.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.5">2.0.5</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.4/fr/validation.php"
                 data-name="2.0.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.4">2.0.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.3/fr/validation.php"
                 data-name="2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.3">2.0.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.2/fr/validation.php"
                 data-name="2.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.2">2.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.1/fr/validation.php"
                 data-name="2.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.1">2.0.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/2.0.0/fr/validation.php"
                 data-name="2.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="2.0.0">2.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/1.0.1/fr/validation.php"
                 data-name="1.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.0.1">1.0.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/1.0.0/fr/validation.php"
                 data-name="1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.0.0">1.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.12.1/fr/validation.php"
                 data-name="0.12.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.12.1">0.12.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.12.0/fr/validation.php"
                 data-name="0.12.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.12.0">0.12.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.11.0/fr/validation.php"
                 data-name="0.11.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.11.0">0.11.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.10.0/fr/validation.php"
                 data-name="0.10.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.10.0">0.10.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.9.0/fr/validation.php"
                 data-name="0.9.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.9.0">0.9.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.8.0/fr/validation.php"
                 data-name="0.8.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.8.0">0.8.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.7.1/fr/validation.php"
                 data-name="0.7.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.7.1">0.7.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.7.0/fr/validation.php"
                 data-name="0.7.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.7.0">0.7.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.6.1/fr/validation.php"
                 data-name="0.6.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.6.1">0.6.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.6.0/fr/validation.php"
                 data-name="0.6.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.6.0">0.6.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.5.0/fr/validation.php"
                 data-name="0.5.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.5.0">0.5.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.4.4/fr/validation.php"
                 data-name="0.4.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.4">0.4.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.4.3/fr/validation.php"
                 data-name="0.4.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.3">0.4.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.4.2/fr/validation.php"
                 data-name="0.4.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.2">0.4.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.4.1/fr/validation.php"
                 data-name="0.4.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.1">0.4.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.4.0/fr/validation.php"
                 data-name="0.4.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4.0">0.4.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.3.0/fr/validation.php"
                 data-name="0.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.3.0">0.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.2.2/fr/validation.php"
                 data-name="0.2.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2.2">0.2.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.2.1/fr/validation.php"
                 data-name="0.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2.1">0.2.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.2.0/fr/validation.php"
                 data-name="0.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2.0">0.2.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/caouecs/Laravel-lang/tree/0.1.0/fr/validation.php"
                 data-name="0.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.1.0">0.1.0</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/caouecs/Laravel-lang/find/master"
          class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb js-zeroclipboard-target">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/caouecs/Laravel-lang" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">Laravel-lang</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/caouecs/Laravel-lang/tree/master/fr" class="" data-branch="master" data-pjax="true" itemscope="url"><span itemprop="title">fr</span></a></span><span class="separator">/</span><strong class="final-path">validation.php</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="@caouecs" class="avatar" data-user="447849" height="24" src="https://avatars0.githubusercontent.com/u/447849?v=3&amp;s=48" width="24" />
        <span class="author"><a href="/caouecs" rel="author">caouecs</a></span>
        <time datetime="2015-05-21T21:52:01Z" is="relative-time">May 21, 2015</time>
        <div class="commit-title">
            <a href="/caouecs/Laravel-lang/commit/5964d1d58a4f90b4baa97d29820ac1f83803c166" class="message" data-pjax="true" title="feature: (fr) validation.string">feature: (fr) validation.string</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>8</strong>
           contributors
        </a>
      </p>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="caouecs" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=caouecs"><img alt="@caouecs" class="avatar" data-user="447849" height="20" src="https://avatars2.githubusercontent.com/u/447849?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="overtrue" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=overtrue"><img alt="@overtrue" class="avatar" data-user="1472352" height="20" src="https://avatars1.githubusercontent.com/u/1472352?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="Elyahou" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=Elyahou"><img alt="@Elyahou" class="avatar" data-user="5128415" height="20" src="https://avatars2.githubusercontent.com/u/5128415?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="idhamperdameian" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=idhamperdameian"><img alt="@idhamperdameian" class="avatar" data-user="3077042" height="20" src="https://avatars2.githubusercontent.com/u/3077042?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="lucbu" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=lucbu"><img alt="@lucbu" class="avatar" data-user="5434555" height="20" src="https://avatars1.githubusercontent.com/u/5434555?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="barbuslex" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=barbuslex"><img alt="@barbuslex" class="avatar" data-user="113057" height="20" src="https://avatars3.githubusercontent.com/u/113057?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="djug" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=djug"><img alt="@djug" class="avatar" data-user="1019873" height="20" src="https://avatars2.githubusercontent.com/u/1019873?v=3&amp;s=40" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="alexandre-butynski" href="/caouecs/Laravel-lang/commits/5964d1d58a4f90b4baa97d29820ac1f83803c166/fr/validation.php?author=alexandre-butynski"><img alt="@alexandre-butynski" class="avatar" data-user="671662" height="20" src="https://avatars1.githubusercontent.com/u/671662?v=3&amp;s=40" width="20" /> </a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="@caouecs" data-user="447849" height="24" src="https://avatars0.githubusercontent.com/u/447849?v=3&amp;s=48" width="24" />
            <a href="/caouecs">caouecs</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@overtrue" data-user="1472352" height="24" src="https://avatars3.githubusercontent.com/u/1472352?v=3&amp;s=48" width="24" />
            <a href="/overtrue">overtrue</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@Elyahou" data-user="5128415" height="24" src="https://avatars0.githubusercontent.com/u/5128415?v=3&amp;s=48" width="24" />
            <a href="/Elyahou">Elyahou</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@idhamperdameian" data-user="3077042" height="24" src="https://avatars0.githubusercontent.com/u/3077042?v=3&amp;s=48" width="24" />
            <a href="/idhamperdameian">idhamperdameian</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@lucbu" data-user="5434555" height="24" src="https://avatars3.githubusercontent.com/u/5434555?v=3&amp;s=48" width="24" />
            <a href="/lucbu">lucbu</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@barbuslex" data-user="113057" height="24" src="https://avatars1.githubusercontent.com/u/113057?v=3&amp;s=48" width="24" />
            <a href="/barbuslex">barbuslex</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@djug" data-user="1019873" height="24" src="https://avatars0.githubusercontent.com/u/1019873?v=3&amp;s=48" width="24" />
            <a href="/djug">djug</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@alexandre-butynski" data-user="671662" height="24" src="https://avatars3.githubusercontent.com/u/671662?v=3&amp;s=48" width="24" />
            <a href="/alexandre-butynski">alexandre-butynski</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
    <div class="file-actions">

      <div class="btn-group">
        <a href="/caouecs/Laravel-lang/raw/master/fr/validation.php" class="btn btn-sm " id="raw-url">Raw</a>
          <a href="/caouecs/Laravel-lang/blame/master/fr/validation.php" class="btn btn-sm js-update-url-with-hash">Blame</a>
        <a href="/caouecs/Laravel-lang/commits/master/fr/validation.php" class="btn btn-sm " rel="nofollow">History</a>
      </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub for Windows"
           data-ga-click="Repository, open with desktop, type:windows">
            <span class="octicon octicon-device-desktop"></span>
        </a>

          <button type="button" class="octicon-btn disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
            <span class="octicon octicon-pencil"></span>
          </button>

        <button type="button" class="octicon-btn octicon-btn-danger disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </button>
    </div>

    <div class="file-info">
        139 lines (130 sloc)
        <span class="file-info-divider"></span>
      7.169 kb
    </div>
  </div>
  
  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">return</span> [</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c">/*</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Validation Language Lines</span></span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | The following language lines contain the default error messages used by</span></span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | the validator class. Some of these rules have multiple versions such</span></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | such as the size rules. Feel free to tweak each of these messages.</span></span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    */</span></span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>accepted<span class="pl-pds">&quot;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être accepté.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>active_url<span class="pl-pds">&quot;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute n&#39;est pas une URL valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>after<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une date postérieure au :date.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>alpha<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit seulement contenir des lettres.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>alpha_dash<span class="pl-pds">&quot;</span></span>           <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>alpha_num<span class="pl-pds">&quot;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit seulement contenir des chiffres et des lettres.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>array<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être un tableau.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>before<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une date antérieure au :date.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>between<span class="pl-pds">&quot;</span></span>              <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>numeric<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La valeur de :attribute doit être comprise entre :min et :max.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>file<span class="pl-pds">&quot;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le texte :attribute doit avoir entre :min et :max caractères.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>array<span class="pl-pds">&quot;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le tableau :attribute doit avoir entre :min et :max éléments.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>boolean<span class="pl-pds">&quot;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être vrai ou faux.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>confirmed<span class="pl-pds">&quot;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ de confirmation :attribute ne correspond pas.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>date<span class="pl-pds">&quot;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute n&#39;est pas une date valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>date_format<span class="pl-pds">&quot;</span></span>          <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute ne correspond pas au format :format.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>different<span class="pl-pds">&quot;</span></span>            <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Les champs :attribute et :other doivent être différents.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>digits<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit avoir :digits chiffres.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>digits_between<span class="pl-pds">&quot;</span></span>       <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit avoir entre :min and :max chiffres.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>email<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une adresse email valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>exists<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute sélectionné est invalide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>filled<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>image<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une image.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>in<span class="pl-pds">&quot;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est invalide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>integer<span class="pl-pds">&quot;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être un entier.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>ip<span class="pl-pds">&quot;</span></span>                   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une adresse IP valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>max<span class="pl-pds">&quot;</span></span>                  <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>numeric<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La valeur de :attribute ne peut être supérieure à :max.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>file<span class="pl-pds">&quot;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le fichier :attribute ne peut être plus gros que :max kilo-octets.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le texte de :attribute ne peut contenir plus de :max caractères.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>array<span class="pl-pds">&quot;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le tableau :attribute ne peut avoir plus de :max éléments.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>mimes<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être un fichier de type : :values.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>min<span class="pl-pds">&quot;</span></span>                  <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>numeric<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La valeur de :attribute doit être supérieure à :min.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>file<span class="pl-pds">&quot;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le fichier :attribute doit être plus gros que :min kilo-octets.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le texte :attribute doit contenir au moins :min caractères.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>array<span class="pl-pds">&quot;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le tableau :attribute doit avoir au moins :min éléments.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>not_in<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute sélectionné n&#39;est pas valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>numeric<span class="pl-pds">&quot;</span></span>              <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit contenir un nombre.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>regex<span class="pl-pds">&quot;</span></span>                <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le format du champ :attribute est invalide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required<span class="pl-pds">&quot;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required_if<span class="pl-pds">&quot;</span></span>          <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire quand la valeur de :other est :value.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required_with<span class="pl-pds">&quot;</span></span>        <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire quand :values est présent.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required_with_all<span class="pl-pds">&quot;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire quand :values est présent.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required_without<span class="pl-pds">&quot;</span></span>     <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est obligatoire quand :values n&#39;est pas présent.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>required_without_all<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute est requis quand aucun de :values n&#39;est présent.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>same<span class="pl-pds">&quot;</span></span>                 <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Les champs :attribute et :other doivent être identiques.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>size<span class="pl-pds">&quot;</span></span>                 <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>numeric<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La valeur de :attribute doit être :size.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>file<span class="pl-pds">&quot;</span></span>    <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La taille du fichier de :attribute doit être de :size kilo-octets.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le texte de :attribute doit contenir :size caractères.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>array<span class="pl-pds">&quot;</span></span>   <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le tableau :attribute doit contenir :size éléments.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être une chaîne de caractères.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>timezone<span class="pl-pds">&quot;</span></span>             <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le champ :attribute doit être un fuseau horaire valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>unique<span class="pl-pds">&quot;</span></span>               <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>La valeur du champ :attribute est déjà utilisée.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&quot;</span>url<span class="pl-pds">&quot;</span></span>                  <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Le format de l&#39;URL de :attribute n&#39;est pas valide.<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c">/*</span></span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Custom Validation Language Lines</span></span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Here you may specify custom validation messages for attributes using the</span></span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | convention &quot;attribute.rule&quot; to name the lines. This makes it quick to</span></span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | specify a specific custom language line for a given attribute rule.</span></span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    */</span></span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>custom<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&#39;</span>attribute-name<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">            <span class="pl-s"><span class="pl-pds">&#39;</span>rule-name<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>custom-message<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        ],</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-c">/*</span></span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | Custom Validation Attributes</span></span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |--------------------------------------------------------------------------</span></span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | The following language lines are used to swap attribute place-holders</span></span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | with something more reader friendly such as E-Mail Address instead</span></span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    | of &quot;email&quot;. This simply helps us make messages a little cleaner.</span></span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    |</span></span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">    */</span></span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-s"><span class="pl-pds">&#39;</span>attributes<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> [</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>name<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Nom<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>username<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Pseudo<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>email<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>E-mail<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>first_name<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Prénom<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>last_name<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Nom<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>password<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Mot de passe<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>password_confirmation<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Confirmation du mot de passe<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>city<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Ville<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>country<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Pays<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>address<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Adresse<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>phone<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Téléphone<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>mobile<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Portable<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>age<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Age<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>sex<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Sexe<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>gender<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Genre<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>day<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Jour<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>month<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Mois<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>year<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Année<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>hour<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Heure<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>minute<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Minute<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>second<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Seconde<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>title<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Titre<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>content<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Contenu<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>description<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Description<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>excerpt<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Extrait<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>date<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Date<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>time<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Heure<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>available<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Disponible<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">        <span class="pl-s"><span class="pl-pds">&quot;</span>size<span class="pl-pds">&quot;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&quot;</span>Taille<span class="pl-pds">&quot;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    ],</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">];</span></td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.05052s from github-fe137-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
    </ul>
  </div>
</div>


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-447ce66a36506ebddc8e84b4e32a77f6062f3d3482e77dd21a77a01f0643ad98.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github/index-83be60956d0d00076a726f0864b49916aae8e7bc6ee140798791be0b6644d661.js"></script>
      
      
  </body>
</html>

