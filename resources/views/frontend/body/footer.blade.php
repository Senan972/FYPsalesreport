<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">
                            @if (session()->get('language') == 'urdu')
                                {{ 'رابطہ کریں' }}
                            @else
                                {{ 'Contact Us' }}
                            @endif
                        </h4>
                    </div>
                    <!-- /.module-heading -->


                    @php
                        $setting = App\Models\SiteSetting::find(1);
                    @endphp

                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                            class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body">
                                    <p>{{ $setting->company_name }}, {{ $setting->company_address }}</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                            class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body">
                                    <p>{{ $setting->phone_one }}<br>
                                        {{ $setting->phone_two }}</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                            class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body"> <span><a href="#">{{ $setting->email }}</a></span> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">
                          @if (session()->get('language') == 'urdu')
                                        {{ 'کسٹمر سروس' }}
                                    @else
                                        {{ 'Customer Service' }}
                                    @endif
                        </h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'میرا اکاونٹ' }}
                                    @else
                                        {{ 'My Account' }}
                                    @endif</a></li>
                            <li><a href="#" title="About us">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'آرڈر کی تاریخ' }}
                                    @else
                                        {{ 'Order History' }}
                                    @endif
                                  </a></li>
                            <li><a href="#" title="faq">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'عمومی سوالات' }}
                                    @else
                                        {{ 'FAQ' }}
                                    @endif
                                  </a></li>
                            <li><a href="#" title="Popular Searches">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'خصوصی' }}
                                    @else
                                        {{ 'Specials' }}
                                    @endif
                                  </a></li>
                            <li class="last"><a href="#" title="Where is my order?">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'مدداور تعاون کا مرکز' }}
                                    @else
                                        {{ 'Help Center' }}
                                    @endif
                                  </a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">
                          @if (session()->get('language') == 'urdu')
                                        {{ 'کارپوریشن' }}
                                    @else
                                        {{ 'CORPORATION' }}
                                    @endif
                        </h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a title="Your Account" href="#">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'ہمارے بارے میں' }}
                                    @else
                                        {{ 'About Us' }}
                                    @endif
                                  </a></li>
                            <li><a title="Information" href="#">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'کسٹمر سروس' }}
                                    @else
                                        {{ 'Customer Service' }}
                                    @endif
                                  </a></li>
                            <li><a title="Addresses" href="#">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'کمپنی' }}
                                    @else
                                        {{ 'Company' }}
                                    @endif
                                  </a></li>
                            <li><a title="Addresses" href="#">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'سرمایہ کار تعلقات' }}
                                    @else
                                        {{ 'Investor Relations' }}
                                    @endif
                                  </a></li>
                            <li class="last"><a title="Orders History" href="#">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'اعلی درجے کی تلاش' }}
                                    @else
                                        {{ 'Advanced Search' }}
                                    @endif
                                  </a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">@if (session()->get('language') == 'urdu')
                          {{ 'ہمیں کیوں منتخب کریں۔' }}
                      @else
                          {{ 'Why Choose Us' }}
                      @endif
                    </h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'شاپنگ گائیڈ' }}
                                    @else
                                        {{ 'Shopping Guide' }}
                                    @endif
                                  </a></li>
                            <li><a href="#" title="Blog">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'بلاگ' }}
                                    @else
                                        {{ 'Blog' }}
                                    @endif
                                  </a></li>
                            <li><a href="#" title="Company">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'کمپنی' }}
                                    @else
                                        {{ 'Company' }}
                                    @endif
                                  </a></li>
                            <li><a href="#" title="Investor Relations">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'سرمایہ کار تعلقات' }}
                                    @else
                                        {{ 'Investor Relations' }}
                                    @endif
                                  </a></li>
                            <li class=" last"><a href="contact-us.html" title="Suppliers">
                              @if (session()->get('language') == 'urdu')
                                        {{ 'ہم سے رابطہ کریں' }}
                                    @else
                                        {{ 'Contact Us' }}
                                    @endif
                            </a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                    <li class="fb pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->facebook }}"
                            title="Facebook"></a></li>

                    <li class="tw pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->twitter }}"
                            title="Twitter"></a></li>
                    <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#"
                            title="GooglePlus"></a></li>
                    <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a>
                    </li>
                    <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#"
                            title="PInterest"></a></li>
                    <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->linkedin }}"
                            title="Linkedin"></a></li>

                    <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->youtube }}"
                            title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/images/payments/1.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/images/payments/2.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/images/payments/3.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/images/payments/5.png') }}" alt=""></li>
                    </ul>
                </div>
                <!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
