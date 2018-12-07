<footer class="footer1 bg-dark">
            
            <!-- ===== START OF FOOTER COPYRIGHT AREA ===== -->
            <div class="footer-copyright-area ptb30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="links">
                                    <ul class="list-inline">
                                        @foreach($pages as $page)
                                        <li class="list-inline-item"><a href="/{{ 'p/'.$page->slug }}">{{ $page->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="copyright ml-auto">Coded With <i class="fa fa-hearth"></i> By  <a href="https://www.mouadbh.me" target="_BLANK">MouadBH</a>.</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== END OF FOOTER COPYRIGHT AREA ===== -->

        </footer>