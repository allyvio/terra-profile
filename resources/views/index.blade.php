@extends('layouts.master')
@section('content')
<section class="hero" id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="animated bounceInDown">Terra</h1>
                <h2 class="animated bounceInDown">Creative Management</h2>
                <p class="animated fadeInUpDelay">Hi, kami adalah <b>Terra</b>. Kami adalah <b>rumah kreatif</b> tempat dimana ide-ide brilian kamu bisa direalisasikan. Kami mengembangkan <b>digital branding</b>, <b>website</b>, <b>fotografi</b>, dan juga <b>videografi</b>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{asset('assets/img/logo_white.png')}}" alt="logo_terra_white" height="300px" width="300px">
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="media">
    <div class="container">
        <h1 class="text-center" style="font-weight: bold;">Meet our teams</h1>
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="firstSlider">
                    <ul class="slides">
                        <li>
                            <div class="avatar">
                                <img style="height: 300px; width: 300px; border-radius: 50%; overflow: hidden;" src="{{asset('assets/img/img_person_1.jpeg')}}" alt="img_person_1"></div>
                            <h1>Syam Ramadhani I.P</h1>
                        </li>
                        <li>
                            <div class="avatar">
                                <img style="height: 300px; width: 300px; border-radius: 50%; overflow: hidden;" src="{{asset('assets/img/img_person_2.jpg')}}" alt="img_person_2"></div>
                            <h1>Pramana Herjati Putra Dionchi</h1>
                        </li>
                        <li>
                            <div class="avatar">
                                <img style="height: 300px; width: 300px; border-radius: 50%; overflow: hidden;" src="{{asset('assets/img/img_person_3.jpg')}}" alt="img_person_3"></div>
                            <h1>Nuraina Septiana</h1>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="download-now" id="getstarted">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wp1">
                <!-- <h1>
              See the sky even better than your own eyes can
              </h1> -->
                <p style="font-size: 18px;">Usaha yang kami jalankan bergerak di industri kreatif dalam bidang penyedia jasa khususnya bidang digital branding, fotografi, dan videografi sejak tahun 2018 yang bernama Terra Creative. Dalam hal ini kita menamainya sebagai Creative Management , Terra Creative memiliki empat layanan utama yaitu videografi, fotografi, desain grafis dan pembuatan website. Sehingga apabila nantinya salah satu layanan kurang maksimal dalam pemasarannya, maka kami dapat memaksimalkan di layanan yang lainnya. Terra Creative tergerak mendirikan usaha yang bergerak dalam penyediaan jasa di bidang industri kreatif utamanya jasa fotografi, videografi, website dan digital branding. Tidak hanya branding seputar produk saja tetapi bisa juga berbentuk branding diri sendiri tentu dengan harga yang ekonomis dan standar kualitas hasil yang tinggi.
                    Terra Creative memposisikan diri sebagai usaha penyedia jasa di bidang dokumentasi dan digital branding yang dapat dijangkau oleh semua orang dengan memberikan pelayanan dan hasil berkualitas terbaik dengan harga yang bersahabat.
                    .</p>
                <img src="{{asset('assets/img/logo_white.png')}}" alt="logo_terra_white" height="200px" width="200px">
            </div>
        </div>
    </div>
</section>
<section class="features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{asset('assets/img/logo_black.png')}}" alt="logo_terra_white" height="300px" width="300px">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <img src="{{asset('assets/img/product_1.png')}}" alt="product_fotografi" height="200px" width="200px">
                <p class="margin-bottom ">Dalam hal fotografi , Terra Creative siap membantu segala kebutuhan fotografi yang dibutuhkan. Terra Creative melayani kebutuhan fotografi keluarga, perusahaan, organisasi ataupun individu. Terra Creative juga mampu untuk memenuhi kebutuhan fotografi di tempat yang di kehendaki oleh konsumen. Terra Creative mampu memenuhi kebutuhan fotografi berupa foto personal , foto grup, foto wisuda , foto keluarga, dan juga foto produk.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/product_2.png')}}" alt="product_website" height="200px" width="200px">
                <p class="margin-bottom">Terra Creative bekerja sama dengan Lunarian.id dalam memberikan layanan pembuatan website yang intuitif dan menarik. Tidak perlu khawatir hasil website yang dihasilkan kurang memuaskan, karena kami sudah banyak membantu memenuhi kebutuhan website dari berbagai konsumen, mulai dari instansi pemerintahan, instansi pendidikan, perusahaan, desa ataupun individu. Cukup sesuaikan fitur yang di inginkan dan kami akan memenuhinya. Dimana pelayanan website ini merupakan opsional dari digital branding yang dimana menyesuaikan tentang kebutuhan dari konsumen.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/product_3.png')}}" alt="product_digital_brand" height="200px" width="200px">
                <p class="margin-bottom">Digital Branding merupakan layanan unggulan dari Terra Creative , dimana dalam ranah ini kita berbagai melayanai jenis kosumen dan kebutuhan mulai dari organisasi , usaha dan juga personal . Terra Creative bersama-sama membangun kedekatan dan ikatan apa yang konsumen miliki serta ingin tunjukan sebagai branding mereka. Kami bersama-sama mengenalkan nilai dari apa yang konsumen miliki melalui beberapa produk visual, baik itu video, logo, flayer dan juga foto yang kemudian dipublikasikan melalui berbagai media sosial, website dan platform lainnya yang dimiliki konsumen. Produk Digital Branding yang Terra Creative tawarkan, dihasilkan melalui proses analisis sosial terlebih dahulu. Dengan begitu produk Digital Branding yang dihasilkan dapat tepat sasaran dan mampu mendekatkan konsumen dengan audiens.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/product_4.png')}}" alt="product_videografi" height="200px" width="200px">
                <p class="margin-bottom">Terra Creative juga memberikan layanan tersendiri mengenai pembuatan video saja bagi brand, perusahaan ataupun individu. Baik itu berupa iklan, company profile, dan profile branding. Dengan standar kualitas yang baik dan juga peralatan yang memadai, Terra Creative mampu memberikan hasil terbaik dari setiap produk videografi yang dihasilkan. Dalam pelayanan vidoegrafi ini , kami mempunyai banyak potofolio dan juga kami berspesialis khususnya dalam video profil desa . Dimana kita telah mempunyai beberapa project yang sudah selesai mengenai video profil desa . Sehingga dengan kata lain kami mempunyai keunggulan dari usaha branding lainnya yaitu kami juga membantu masyarakat desa sebagai bentuk pengabdian dengan memberikan video profil yang nantinya akan dapat mengembangakan desa khususnya sebagai tempat pariwisata.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="design" id="design">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="secondSlider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-4">
                                <div class="flat-box">
                                    <div class="colourway colour1">
                                        <img src="{{asset('assets/img/1.png')}}" alt="project_terra" height="350px" width="350px">
                                    </div>
                                    <p class="title">Portofolio</p>
                                    <p class="feature-text">Layanan Terra Creative</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="flat-box">
                                    <div class="colourway colour2">
                                        <img src="{{asset('assets/img/2.png')}}" alt="project_terra" height="350px" width="350px">
                                    </div>
                                    <p class="title">Portofolio</p>
                                    <p class="feature-text">Layanan Terra Creative</p>
                                </div>
                            </div>
                            <div class="col-md-4 design-content">
                                <h1>Project Digital Branding</h1>
                                <p>Terra Creative memposisikan diri sebagai usaha penyedia jasa di bidang dokumentasi dan digital branding yang dapat dijangkau oleh semua orang dengan memberikan pelayanan dan hasil berkualitas terbaik dengan harga yang bersahabat. </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-8">
                                <div class="flat-box">
                                    <div class="colourway colour3">
                                        <img src="{{asset('assets/img/3.png')}}" alt="project_terra" height="350px" width="730px">
                                    </div>
                                    <p class="title">Portofolio</p>
                                    <p class="feature-text">Layanan Terra Creative</p>
                                </div>
                            </div>
                            <div class="col-md-4 design-content">
                                <h1>Project Digital Branding</h1>
                                <p>Terra Creative memposisikan diri sebagai usaha penyedia jasa di bidang dokumentasi dan digital branding yang dapat dijangkau oleh semua orang dengan memberikan pelayanan dan hasil berkualitas terbaik dengan harga yang bersahabat. </p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-8">
                                <div class="flat-box">
                                    <div class="colourway colour4">
                                        <img src="{{asset('assets/img/4.png')}}" alt="project_terra" height="350px" width="730px">
                                    </div>
                                    <p class="title">Portofolio</p>
                                    <p class="feature-text">Layanan Terra Creative</p>
                                </div>
                            </div>
                            <div class="col-md-4 design-content">
                                <h1>Project Digital Branding</h1>
                                <p>Terra Creative memposisikan diri sebagai usaha penyedia jasa di bidang dokumentasi dan digital branding yang dapat dijangkau oleh semua orang dengan memberikan pelayanan dan hasil berkualitas terbaik dengan harga yang bersahabat. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 col-md-offset-11 text-right controls">
                    <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                    <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection