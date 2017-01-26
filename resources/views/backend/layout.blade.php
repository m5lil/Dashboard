<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <title> لوحة التحكم </title>
    <link href="{{ elixir('semantic/dist/semantic.rtl.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ elixir('css/admin.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ elixir('css/all.css') }}" rel='stylesheet' type='text/css'>

</head>

<body>

    <div id="app">
        <div class="ui vertical sidebar menu left accordion pointing" id="toc">
            <a href="#" class="ui medium image borderless">
                <img src="{{url('images/bg/3.png')}}" />
            </a>
            <router-link active-class="active" to="/" class="item" exact>
                <i class="options blue icon"></i> الإعدادت العامة
            </router-link>

            <router-link active-class="active" to="/foo" class="item" exact>
                <i class="inbox blue icon"></i> البريد الوارد
            </router-link>
            <router-link active-class="active" to="/pages" class="item" exact>
                <i class="inbox blue icon"></i> الصفحات
            </router-link>

            <div class="ui item title">
                <i class="dropdown icon"></i> الأعضاء والصلاحيات
            </div>
            <div class="content">
                <router-link active-class="active" to="/users" class="item" exact>
                    <i class="file icon"></i> الأعضاء
                </router-link>
                <router-link active-class="active" to="/foo" class="item" exact>
                    <i class="file icon"></i> العضويات
                </router-link>
                <router-link active-class="active" to="/bar" class="item" exact>
                    <i class="file icon"></i> الصلاحيات
                </router-link>
            </div>


            {{-- ------------------ --}}
            <div class="ui item title">
                <i class="dropdown icon"></i> الإعلانات
            </div>
            <div class="content">
                <router-link active-class="active" to="/" class="item" exact>
                    <i class="file icon"></i> الأقسام
                </router-link>
                <router-link active-class="active" to="/" class="item" exact>
                    <i class="file icon"></i> الإعلانات
                </router-link>
                <router-link active-class="active" to="/" class="item" exact>
                    <i class="file icon"></i> الماركات/الموديلات
                </router-link>
            </div>
            {{-- ------------------ --}}
            <div class="ui item title">
                <i class="dropdown icon"></i> الإعلانات
            </div>
            <div class="content">
                <router-link active-class="active" to="/" class="item" exact>
                    <i class="file icon"></i> الأقسام
                </router-link>
                <router-link active-class="active" to="/" class="item" exact>
                    <i class="file icon"></i> الإعلانات
                </router-link>
            </div>

        </div>
        <div class="ui grid">
            <div class="right floated sixteen wide column">
                <div class="pusher" style="">
                    <div class=" ui container">
                        <div class="ui basic segment">
                            <div class="ui secondary pointing labeled icon menu">
                                <div class="ui icon open button item">
                                    <i class="left blue content icon"></i>
                                </div>
                                <router-link active-class="active" to="/foo" class="item" exact>
                                  <i class="inbox icon blue"></i> الإعدادات العامة
                                </router-link>
                                <div class="ui dropdown item">
                                    <i class="options icon blue"></i> الأعضاء
                                    <div class="menu">
                                      <router-link active-class="active" to="/bar" class="item" exact>
                                          <i class="inbox icon blue"></i> الأعضاء
                                      </router-link>
                                      <router-link active-class="active" to="/foo" class="item" exact>
                                          <i class="inbox icon blue"></i> الصلاحيات
                                      </router-link>
                                    </div>
                                </div>
                                <router-link active-class="active" to="/" class="item" exact>
                                    <i class="inbox icon blue"></i> 23 رسالة جديدة
                                </router-link>
                                <router-link active-class="active" to="/bar" class="item" exact>
                                    <i class="area chart icon blue"></i> تقارير
                                </router-link>
                                <div class="right menu">
                                    <div class="ui inline dropdown item">
                                        <div class="text">
                                            <i class="mail icon"></i> Admin
                                            <i class="dropdown icon"></i>
                                        </div>
                                        <div class="menu">
                                            <div class="item">
                                                <i class="file icon"></i> الملف الشخصى
                                            </div>
                                            <div class="item">
                                                <i class="file icon"></i> تغير كلمة المرور
                                            </div>
                                            <div class="item">
                                                <i class="file icon"></i> تسجيل خروج
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui clearing divider"></div>

                            @yield('content')



                            <div class="ui clearing divider"></div>
                            <div class="ui right floated horizontal list">
                                <a class="item" href="#">الدعم</a>
                                <a class="item" href="#">مواد تعليمية</a>
                                <a class="item" href="#">إتصل بنا</a>
                                <div class="disabled item" href="#">© Elryad.com</div>
                            </div>
                            <div class="ui horizontal list">
                                <div class="item" href="#">لوحة تحكم صممت خصيصا لعملاء شركة الرياض</div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
        ]); ?>

    </script>

    <script src={{ elixir( 'js/app.js') }}></script>
    <script src={{ elixir( 'js/script.js') }}></script>
    <script src={{ elixir( 'js/all.js') }}></script>
    <script src={{ elixir( 'semantic/dist/semantic.min.js') }}></script>
    {{--
    <script src={{ elixir( 'js/all.js') }}></script> --}} @stack('scripts')
    <script type="text/javascript">
      //   tinymce.init({
      //   selector: '#mytextarea'
      // });

    </script>
</body>

</html>
