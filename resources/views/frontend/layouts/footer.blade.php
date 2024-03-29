<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_1">Quick Links</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <li><a href="/admin/login">{{ __('login') }}</a></li>
                        <li><a href="{{ route('article') }}">{{ __('article') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_2">{{ __('category') }}</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_2">
                    <ul>
                        @foreach ($categoryList as $item)
                        @if ($item->parent_id == 0)
                        <li><a href="{{ route('collections',['slug'=>$item->slug]) }}">{{ $item->name }}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">{{ __('contact') }}</h3>
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                    <ul>
                        <li><i class="ti-home"></i>{{ $setting->address }}</li>
                        <li><i class="ti-headphone-alt"></i>{{ $setting->phone }}</li>
                        <li><i class="ti-email"></i><a href="#0">{{ $setting->email }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_4">Follow</h3>
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    {{-- <div id="newsletter">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                        </div>
                    </div> --}}
                    <div class="follow_us">
                        {{-- <h5>Follow Us</h5> --}}
                        <ul>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{url('frontend')}}/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{url('frontend')}}/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{url('frontend')}}/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{url('frontend')}}/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix">
                    {{-- <li>
                        <div class="styled-select lang-selector">
                            <select>
                                <option value="en" selected><a href="{!! route('user.change-language', ['en']) !!}">English</a></option>
                                <option value="ja"><a href="{!! route('user.change-language', ['ja']) !!}">日本語</a></option>
                                <option value="vi"><a href="{!! route('user.change-language', ['vi']) !!}">Tiếng Việt</a></option>
                            </select>
                        </div>
                    </li> --}}
                    <li>
                        {{-- <div class="styled-select currency-selector">
                            <select>
                                <option value="US Dollars" selected>US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li> --}}
                    <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{url('frontend')}}/img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><a href="#0">{{ __('terms and conditions') }}</a></li>
                    <li><a href="#0">{{ __('privacy') }}</a></li>
                    <li><span>© 2022 OHAYO SHOP</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>