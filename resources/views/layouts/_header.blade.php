<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- 品牌形象 -->
    <a class="navbar-brand" href="{{ url('/') }}">
      LaraBBS
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- 左边navbar-->
      <ul class="navbar-nav mr-auto">

      </ul>
      <!-- 右边navbar-->
      <ul class="navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>

      </ul>
    </div>
  </div>
</nav>
