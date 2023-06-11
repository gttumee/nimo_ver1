@section('footer')
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3">
                <h6 class="mb-0">Утас:</h6>
                <p class="mb-4">080-1494-7801</p>

                <h6 class="mb-0">Хаяг:</h6>
                <p class="mb-4">3-14-7-301 Aratacho Kobe Shi Hyogo Ku Hyogo Ken 652-0032 Japan</p>

                <h6 class="mb-0">И-мэйл:</h6>
                <p class="mb-0">japanese_edu@mtche.jp</p>
                <p></p>
            </div>
            <div class="col-md-7">
                <form>
                    <h4 class="mb-4">Холбоо барих</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name"
                                placeholder="Нэр">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent"
                                name="Email" placeholder="И-мэйл">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent"
                                name="subject" placeholder="Утас">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="4"
                                class="form-control text-white rounded-0 bg-transparent"
                                placeholder="Зурвас"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">Илгээх</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Page Footer -->
        <footer class="mt-5 py-4 border-top border-secondary">
            <p class="mb-0 small">&copy;
                <script>document.write(new Date().getFullYear())</script> Нимо Япон хэл<a
                    href="https://mtche.jp" target="_blank">  株式会社MTCHE.</a> All rights reserved
            </p>
        </footer>
        <!-- End of Page Footer -->
    </div>
</section>

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap 3 affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Isotope -->
<script src="assets/vendors/isotope/isotope.pkgd.js"></script>

<!-- LeadMark js -->
<script src="assets/js/leadmark.js"></script>
@endsection